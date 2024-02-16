<?php

namespace App\Http\Controllers;

use App\Models\PetContributor;
use Illuminate\Http\Request;

class PetContributorController extends Controller
{
    public function index()
    {
        $petcontributors = PetContributor::latest()->paginate(5);
        return view('admin.petcontributors.index', compact('petcontributors'));
    }

    public function create()
    {
        return view('petcontributors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'tgl_lahir' => 'required'
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
            'nama' => 'required',
            'email' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'tgl_lahir' => 'required'
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
