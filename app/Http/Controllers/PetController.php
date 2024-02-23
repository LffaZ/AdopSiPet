<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\PetDetail;
use App\Models\PetHealth;
use App\Models\PetContributor;
use App\Models\SearchHistory;

use PDF;
use Image;
use Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class PetController extends Controller
{
    public function index(Request $request)
    {
        $pets = Pet::where('id_petcontributor', auth()->user()->id)->latest()->paginate(5);
        $allpets = Pet::where('id_petcontributor', auth()->user()->id)->get();
        $guard = Config::get('auth.defaults.guard');

        if ($guard == 'web') {
            return view('admin.pets.index', compact('pets'));
        } elseif ($guard == 'petcontributor') {

            $data = [
                'title' => 'Rekap Data Hewan Peliharaan',
                'date' => date('d/m/Y'),
                'pets' => $allpets
            ];

            if ($request->has('download')) {
                $pdf = PDF::loadView('petcontributor.pets.index', $data);
                return $pdf->download('list_data.pdf');
            }

            return view('petcontributor.pets.index', compact('pets'));
        }
    }

    public function export()
    {
        $pets = Pet::where('id_petcontributor', auth()->user()->id)->latest()->paginate(5);
        $data = ['title' => 'Rekap Adopsi', 'pets' => $pets];
        $pdf = PDF::loadView('export.hewan', $data);
        return $pdf->download('pets.pdf');  
    }

    public function search(Request $request)
    {
        $query = $request->input('pet');
        if (empty($query)) {
            $rekomendasiHewan = Pet::inRandomOrder()->limit(10)->get();
            return view('search-results', ['rekomendasiHewan' => $rekomendasiHewan]);
        }
        SearchHistory::create([
            'id_user' => $request->id_user,
            'keyword' => $query,
        ]);
        switch ($query) {
            case 'kucing':
            case 'cat':
                $pets = Pet::where('category', 'cat')->get();
                break;
            case 'anjing':
            case 'dog':
                $pets = Pet::where('category', 'dog')->get();
                break;
            case 'kelinci':
            case 'rabbit':
                $pets = Pet::where('category', 'rabbit')->get();
                break;
            case 'hamster':
            case 'hamster':
                $pets = Pet::where('category', 'hamster')->get();
                break;
            case 'burung':
            case 'bird':
                $pets = Pet::where('category', 'bird')->get();
                break;
            case 'ikan':
            case 'fish':
                $pets = Pet::where('category', 'fish')->get();
                break;
            case 'lainnya':
            case 'lain lain':
            case 'lain':
            case 'other':
            case 'others':
                $pets = Pet::where('category', 'others')->get();
                break;
            default:
                $pets = Pet::where('nama', 'LIKE', '%' . $query . '%')->get();
                break;
        }

        return view('search-results', ['query' => $query, 'pets' => $pets]);
    }

    public function create()
    {
        return view('petcontributor.pets.create-pet');
    }

    public function store(Request $request)
    {
        // dd($request->images);
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'images' => 'required|array',
            'category' => 'required',
            'stts_kepemilikan' => 'required',
            'harga' => 'required',
        ]);
        $data['id_petcontributor'] = auth()->user()->id;

        $images = [];
        foreach ($data['images'] as $image) {
            $fileName = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('petphoto', $fileName, 'public');

            array_push($images, $path);
        }
        $data['images'] = $images;
        $pet = Pet::create($data);
        // Session::put('kd_pet', $pet->kd);

        return redirect()->route('petcontributor.petdetails.create', $pet)->with('success', 'Pet dan pet photo berhasil disimpan.');
    }


    public function show($kd)
    {
        $pet = Pet::where('kd', $kd)->first();
        $id_petcontributor = $pet->id_petcontributor;
        $petcontributor = PetContributor::where('id', $id_petcontributor)->first();
        $petdetail = PetDetail::where('kd_pet', $kd)->first();
        $pethealth = PetHealth::where('kd_pet', $kd)->first();

        return view('user.show-pet', compact('pet', 'petcontributor', 'petdetail', 'pethealth'));
    }

    public function petcontributorshow($kd)
    {
        $pet = Pet::where('kd', $kd)->first();
        $id_petcontributor = $pet->id_petcontributor;
        $petcontributor = PetContributor::where('id', $id_petcontributor)->first();
        $petdetail = PetDetail::where('kd_pet', $kd)->first();
        $pethealth = PetHealth::where('kd_pet', $kd)->first();


        // return redirect()->route('petcontributor.pets.show', ['kd' => $kd]);
        return view('petcontributor.pets.show', compact('pet', 'petdetail', 'pethealth'));
    }

    public function edit($kd)
    {
        $pet = Pet::where('kd', $kd)->first();
        $petdetail = PetDetail::where('kd_pet', $kd)->first();
        $pethealth = PetHealth::where('kd_pet', $kd)->first();
        return view('petcontributor.pets.update', compact('pet', 'petdetail', 'pethealth'));
    }

    public function update(Request $request, $kd)
    {
        $pet = Pet::where('kd', $kd);
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'images' => 'required|array',
            'category' => 'required',
            'stts_kepemilikan' => 'required',
            'harga' => 'required',
        ]);

        $images = [];
        foreach ($data['images'] as $image) {
            $fileName = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('petphoto', $fileName, 'public');

            array_push($images, $path);
        }
        $data['images'] = $images;

        $pet->update($data);
        return redirect()->route('petcontributor.petdetails.edit', $kd)->with('success', 'Pet updated successfully');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pets.index')->with('success', 'Pet deleted successfully');
    }
}
