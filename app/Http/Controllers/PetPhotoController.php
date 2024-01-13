<?php

namespace App\Http\Controllers;

use App\Models\PetPhoto;
use Illuminate\Http\Request;

class PetPhotoController extends Controller
{
    public function index()
    {
        $petphoto = PetPhoto::latest()->paginate(5);
        return view('petphotos.index', compact('petphotos'));
    }

    public function create()
    {
        return view('petphotos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Kd_pet' => 'required',
            'Foto' => 'required'
        ]);

        $requestData = $request->all();
        $fileName = time().$request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('petphoto', $fileName, 'public');
        // images nanti diubah folder petphoto pls
        $requestData["foto"] = '/storage/'.$path;
        PetPhoto::create($requestData);
        return redirect()->route('petphotos.index')->with('success', 'PetPhoto created successfull');
    }

    public function show(PetPhoto $petphoto)
    {
        return view('petphotos.show',compact('petphoto'));
    }

    public function edit(PetPhoto $petphoto)
    {
        return view('petphotos.edit',compact('petphoto'));
    }

    public function update(Request $request, PetPhoto $petphoto)
    {
        $request->validate([
            'Kd_pet' => 'required',
            'Foto' => 'required'
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
