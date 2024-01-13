<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $pet = Pet::latest()->paginate(5);
        return view('pets.index', compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Category' => 'required',
            'Sts_kepemilikan' => 'required',
            'Harga' => 'required',
            // 'Kd_petdetail' => 'required',
            // 'Kd_pethealth' => 'required',
            'Id_petcontributor' => 'required'
        ]);

        $pet = Pet::create($request->all());
        return redirect()->route('pets.index', ['kd_pet' => $pet->kd])->with('success', 'Pet created successfull');
    }

    public function show(Pet $pet)
    {
        return view('pets.show',compact('pet'));
    }

    public function edit(Pet $pet)
    {
        return view('pets.edit',compact('pet'));
    }

    public function update(Request $request, Pet $pet)
    {
        $request->validate([
            'Category' => 'required',
            'Sts_kepemilikan' => 'required',
            'Harga' => 'required',
            // 'Kd_petdetail' => 'required',
            // 'Kd_pethealth' => 'required',
            'Id_petcontributor' => 'required'
        ]);

        $pet->update($request->all());
        return redirect()->route('pets.index')->with('success', 'Pet updated successfully');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pets.index')->with('success', 'Pet deleted successfully');
        //
    }
}
