<?php

namespace App\Http\Controllers;

use App\Models\PetPhoto;
use Illuminate\Http\Request;

class PetPhotoController extends Controller
{
    public function index()
    {
        $petphotos = PetPhoto::latest()->paginate(5);
        return view('petphotos.index', compact('petphotos'));
    }

    public function create()
    {
        return view('petphotos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_pet' => 'required',
            'foto' => 'required'
        ]);
        $kdPet = $request->session()->get('kdPet');
        $requestData = $request->all();
        $requestData['kd_pet'] = $kdPet;
        $fileName = time() . $request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('petphoto', $fileName, 'public');
        // images nanti diubah folder petphoto pls
        $requestData["foto"] = '/storage/' . $path;
        PetPhoto::create($requestData);
        return redirect()->route('petphotos.index')->with('success', 'PetPhoto created successfull');
    }

    public function show(PetPhoto $petphoto)
    {
        return view('petphotos.show', compact('petphoto'));
    }

    public function edit(PetPhoto $petphoto)
    {
        return view('petphotos.edit', compact('petphoto'));
    }

    public function update(Request $request, PetPhoto $petphoto)
    {
        $request->validate([
            'kd_pet' => 'required',
            'foto' => 'required'
        ]);

        $petphoto->update($request->all());
        return redirect()->route('petphotos.index')->with('success', 'PetPhoto updated successfully');
    }

    public function destroy(PetPhoto $petphoto)
    {
        $petphoto->delete();
        return redirect()->route('petphotos.index')->with('success', 'PetPhoto deleted successfully');
        //
    }
}
