<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\PetDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PetDetailController extends Controller
{
    public function index()
    {
        $petdetails = PetDetail::latest()->paginate(5);
        return view('petdetails.index', compact('petdetails'));
    }

    public function create($kd)
    {
        $pet = Pet::where('kd', $kd)->first();
        $petdetail = PetDetail::where('kd_pet', $kd)->first();
        // $pethealth = PetHealth::where('kd_pet', $kd)->first();
        return view('petcontributor.pets.create-detail',compact('pet', 'petdetail'));
    }

    public function store(Request $request)
    {
        // cek request ada kd pet atau tidak
        dd($request);
        $data = $request->validate([
            'jenkel' => 'required',
            'deskripsi' => 'required',
            'warna' => 'required',
            'berat' => 'required',
            'panjang' => 'required',
            'usia' => 'required',
            'karakter' => 'required',
        ]);

        // $data['kd_pet'] = pet()->id();
        $data['kd_pet'] = session('kd_pet');

        return redirect()->route('petcontributor.pethealths.create')->with('success', 'PetDetail created successfull');
    }

    public function show(PetDetail $petdetail)
    {
        return view('petcontributor.petdetails.show',compact('petdetail'));
    }

    public function edit($kd)
    {
        $pet = Pet::where('kd', $kd)->first();
        $petdetail = PetDetail::where('kd_pet', $kd)->first();
        // $pethealth = PetHealth::where('kd_pet', $kd)->first();
        return view('petcontributor.pets.update-detail',compact('pet', 'petdetail'));
    }

    public function update(Request $request, $kd)
    {
        $petdetail = PetDetail::where('kd_pet', $kd);
        $data = $request->validate([
            'jenkel' => 'required',
            'deskripsi' => 'required',
            'warna' => 'required',
            'berat' => 'required',
            'panjang' => 'required',
            'usia' => 'required',
            'karakter' => 'required',
        ]);

        $petdetail->update($data);
        return redirect()->route('petcontributor.pethealths.edit', $kd)->with('success', 'PetDetail updated successfully');
    }

    public function destroy(PetDetail $petdetail)
    {
        $petdetail->delete();
        return redirect()->route('petdetails.index')->with('success', 'PetDetail deleted successfully');
    }
}
