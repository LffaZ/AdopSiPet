<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    public function index()
    {
        $adoption = Adoption::latest()->paginate(5);
        return view('adoptions.index', compact('adoptions'));
    }

    public function create()
    {
        return view('adoptions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Tanggal' => 'required',
            'Total_nominal' => 'required',
            'Mtd_bayar' => 'required',
            'Stts_pengiriman' => 'required',
            'Id_pengadopsi' => 'required',
            'Id_penyedia' => 'required'
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
            'Tanggal' => 'required',
            'Total_nominal' => 'required',
            'Mtd_bayar' => 'required',
            'Stts_pengiriman' => 'required',
            'Id_pengadopsi' => 'required',
            'Id_penyedia' => 'required'
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
