<?php

namespace App\Http\Controllers;

use App\Models\PetDetail;
use Illuminate\Http\Request;

class PetDetailController extends Controller
{
    public function index()
    {
        $petdetail = PetDetail::latest()->paginate(5);
        return view('petdetails.index', compact('petdetails'));
    }

    public function create()
    {
        return view('petdetails.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Jenkel' => 'required',
            'Deskripsi' => 'required',
            'Warna' => 'required',
            'Berat' => 'required',
            'Panjang' => 'required',
            'Usia' => 'required',
            'Karakter' => 'required'
        ]);

        PetDetail::create($request->all());
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
            'Jenkel' => 'required',
            'Deskripsi' => 'required',
            'Warna' => 'required',
            'Berat' => 'required',
            'Panjang' => 'required',
            'Usia' => 'required',
            'Karakter' => 'required'
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
