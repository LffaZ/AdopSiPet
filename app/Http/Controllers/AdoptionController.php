<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;


class AdoptionController extends Controller
{
    public function index()
    {
        $adoptions = Adoption::latest()->paginate(5);
        $guard = Config::get('auth.defaults.guard');
        if ($guard == 'web') {
            return view('admin.adoptions.index', compact('adoptions'));
        } elseif ($guard == 'petcontributor'){
            return view('petcontributor.adoptions.index', compact('adoptions'));
        }
    }

    public function create()
    {
        // return view('petcontributor.adoptions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'total_nominal' => 'required',
            'mtd_bayar' => 'required',
            'stts_pengiriman' => 'required',
            'id_pengadopsi' => 'required',
            'id_penyedia' => 'required'
        ]);

        Adoption::create($request->all());
        return redirect()->route('adoptions.index')->with('success', 'Adoption created successfull');
    }

    public function show(Adoption $adoption)
    {
        return view('adoptions.show',compact('adoption'));
    }

    public function edit(Adoption $adoption)
    {
        return view('adoptions.edit',compact('adoption'));
    }

    public function update(Request $request, Adoption $adoption)
    {
        $request->validate([
            'tanggal' => 'required',
            'total_nominal' => 'required',
            'mtd_bayar' => 'required',
            'stts_pengiriman' => 'required',
            'id_pengadopsi' => 'required',
            'id_penyedia' => 'required'
        ]);

        $adoption->update($request->all());
        return redirect()->route('adoptions.index')->with('success', 'Adoption updated successfully');
    }

    public function destroy(Adoption $adoption)
    {
        $adoption->delete();
        return redirect()->route('adoptions.index')->with('success', 'Adoption deleted successfully');
    }
}
