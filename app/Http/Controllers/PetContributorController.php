<?php

namespace App\Http\Controllers;

use App\Models\PetContributor;
use Illuminate\Http\Request;

class PetContributorController extends Controller
{
    public function index()
    {
        $petcontributor = PetContributor::latest()->paginate(5);
        return view('petcontributors.index', compact('petcontributors'));
    }

    public function create()
    {
        return view('petcontributors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'Jenkel' => 'required',
            'Email' => 'required',
            'No_hp' => 'required',
            'Tgl_lahir' => 'required'
        ]);

        PetContributor::create($request->all());
        return redirect()->route('petcontributors.index')->with('success', 'PetContributor created successfull');
    }

    public function show(PetContributor $petcontributor)
    {
        return view('petcontributors.show',compact('petcontributor'));
    }

    public function edit(PetContributor $petcontributor)
    {
        return view('petcontributors.edit',compact('petcontributor'));
    }

    public function update(Request $request, PetContributor $petcontributor)
    {
        $request->validate([
            'Nama' => 'required',
            'Jenkel' => 'required',
            'Email' => 'required',
            'No_hp' => 'required',
            'Tgl_lahir' => 'required'
        ]);

        $petcontributor->update($request->all());
        return redirect()->route('petcontributors.index')->with('success', 'PetContributor updated successfully');
    }

    public function destroy(PetContributor $petcontributor)
    {
        $petcontributor->delete();
        return redirect()->route('petcontributors.index')->with('success', 'PetContributor deleted successfully');
    }
}
