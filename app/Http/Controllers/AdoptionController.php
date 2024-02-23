<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Adoption;
use App\Models\PetContributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Carbon;


class AdoptionController extends Controller
{

    public function index()
    {
        $adoptions = Adoption::with('petcontributor:id,nama')->with('user:id,nama')->with('pet:kd,nama')->latest()->paginate(5);
        // foreach ($adoptions as $adoption) {
        //     $createdAt = Carbon::createFromTimestamp(strtotime($adoption->created_at));
        //     $diff = $createdAt->diffForHumans();
        //     $adoption->tanggal = $diff;
        // }
        
        $guard = Config::get('auth.defaults.guard');
        if ($guard == 'web') {
            return view('admin.adoptions.index', compact('adoptions'));
        } elseif ($guard == 'petcontributor'){
            // dd($adoptions);
            return view('petcontributor.adoptions.index', compact('adoptions'));
        }
    }

    public function export()
    {
        $adoptions = Adoption::with('petcontributor:id,nama')->with('user:id,nama')->with('pet:kd,nama')->latest()->paginate(5);
        $data = ['title' => 'Rekap Adopsi', 'adoptions' => $adoptions];
        $pdf = PDF::loadView('export.adopsi', $data);
        return $pdf->download('adoption.pdf');  
    }

    public function petcontributorindex()
    {

        $adoptions = Adoption::with('petcontributor:id,nama')->with('user:id,nama')->with('pet:kd,nama')->latest()->paginate(5);
        $totalAdopsi = Adoption::sum('total_nominal');
        // dd($adoptions);
        foreach ($adoptions as $adoption) {
            // Ambil tanggal dan waktu dari database
            $createdAt = Carbon::createFromTimestamp(strtotime($adoption->created_at));
        
            $diff = $createdAt->diffForHumans();

            $adoption->tanggal = $diff;
        }
        return view('petcontributor.adoptions.index', compact('adoptions', 'totalAdopsi'));

    }

    public function create()
    {
        // return view('petcontributor.adoptions.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'total_nominal' => 'required',
            'id_penyedia' => 'required',
            'kd_pet' => 'required'
        ]);

        $data['id_pengadopsi'] = auth()->user()->id;
        $data['status'] = 'pending';
        $data['tanggal'] = Carbon::now();

        $adoption = Adoption::create($data);
        $id_penyedia = $adoption->id_penyedia;
        
        $petcontributor = PetContributor::where('id', $id_penyedia)->first();
        // dd($petcontributor->alamat);
        return view('user.adopt-success',compact('adoption', 'petcontributor'));
        // return redirect()->route('adoptions.success', $id_penyedia)->with('success', 'Adoption created successfull');
    }

    public function success($id_penyedia)
    {
        // dd($id_penyedia);
        $id_petcontributor = $id_penyedia;
        $petcontributor = PetContributor::where('kd', $id_petcontributor)->first();
        return view('user.adopt-success',compact('adoption', 'petcontributor'));
    }

    public function show(Adoption $adoption)
    {
        return view('adoptions.show',compact('adoption'));
    }

    public function edit(Adoption $adoption)
    {
        return view('adoptions.edit',compact('adoption'));
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        $data = $request->validate([
            'status' => 'required',
        ]);

        $adoption = Adoption::findOrFail($id);
        $adoption->update($data);
        return redirect()->route('petcontributor.adoptions.index')->with('success', 'Adoption updated successfully');
    }

    public function destroy(Adoption $adoption)
    {
        $adoption->delete();
        return redirect()->route('adoptions.index')->with('success', 'Adoption deleted successfully');
    }
}
