<?php

namespace App\Http\Controllers;

use App\Models\PetDetail;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetDetailController extends Controller
{
    public function index()
    {
        $petdetails = PetDetail::latest()->paginate(5);
        return view('petdetails.index', compact('petdetails'));
    }

    public function create()
    {
        return view('petdetails.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenkel' => 'required',
            'deskripsi' => 'required',
            'warna' => 'required',
            'berat' => 'required',
            'panjang' => 'required',
            'usia' => 'required',
            'karakter' => 'required',
            'kd_pet' => pet()->id(),
        ]);

        $petDetail = PetDetail::create($request->all());
        return redirect()->route('petdetails.index')->with('success', 'PetDetail created successfull');
    }

    public function show(PetDetail $petdetail)
    {
        return view('petdetails.show',compact('petdetail'));
    }

    public function edit(PetDetail $petdetail)
    {
        return view('petdetails.edit',compact('petdetail'));
    }

    public function update(Request $request, PetDetail $petdetail)
    {
        $request->validate([
            'jenkel' => 'required',
            'deskripsi' => 'required',
            'warna' => 'required',
            'berat' => 'required',
            'panjang' => 'required',
            'usia' => 'required',
            'karakter' => 'required'
        ]);

        $petdetail->update($request->all());
        return redirect()->route('petdetails.index')->with('success', 'PetDetail updated successfully');
    }

    public function destroy(PetDetail $petdetail)
    {
        $petdetail->delete();
        return redirect()->route('petdetails.index')->with('success', 'PetDetail deleted successfully');
    }
}
