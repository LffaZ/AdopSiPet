<?php

namespace App\Http\Controllers;

use App\Models\PetHealth;
use App\Models\PetDetail;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetHealthController extends Controller
{
    public function index()
    {
        $pethealths = PetHealth::latest()->paginate(5);
        return view('pethealths.index', compact('pethealths'));
    }

    public function create($kd)
    {
        $petDetail = PetDetail::where('kd_pet', $kd)->first();
        $kd_petdetail = $petDetail->kd;
        return view('petcontributor.pets.create-health', compact('kd_petdetail', 'petDetail'));
    }

    public function store(Request $request, $kd)
    {
        $data = $request->validate([
            'foto_cekdokter' => 'required',
            'stts_vaksin' => 'required',
            'stts_steril' => 'required',
            'riwayat_penyakit' => 'required',
        ]);
        $fileName = uniqid() . '_' . time() . '.' . $data['foto_cekdokter']->getClientOriginalExtension();
        $path = $data['foto_cekdokter']->storeAs('petphoto', $fileName, 'public');
        $data['foto_cekdokter'] = $path;
        $data['kd_pet'] = $kd;
        PetHealth::create($data);
        return redirect()->route('petcontributor.pets.index')->with('success', 'PetHealth created successfull');
    }

    public function show(PetHealth $pethealth)
    {
        return view('petcontributor.pethealths.show', compact('pethealth'));
    }

    public function edit($kd)
    {
        $pet = Pet::where('kd', $kd)->first();
        $petdetail = PetDetail::where('kd_pet', $kd)->first();
        $pethealth = PetHealth::where('kd_pet', $kd)->first();
        return view('petcontributor.pets.update-health', compact('pet', 'petdetail','pethealth'));
    }

    public function update(Request $request, $kd)
    {
        $pethealth = PetHealth::where('kd_pet', $kd);
        $data = $request->validate([
            'foto_cekdokter' => 'required',
            'stts_vaksin' => 'required',
            'stts_steril' => 'required',
            'riwayat_penyakit' => 'required',
        ]); 
        $fileName = uniqid() . '_' . time() . '.' . $data['foto_cekdokter']->getClientOriginalExtension();
        $path = $data['foto_cekdokter']->storeAs('photo_cekdokter', $fileName, 'public');
        $data['foto_cekdokter'] = $path;

        $pethealth->update($data);
        return redirect()->route('petcontributor.pets.index')->with('success', 'PetHealth updated successfully');
    }

    public function destroy(PetHealth $pethealth)
    {
        $pethealth->delete();
        return redirect()->route('pethealths.index')->with('success', 'PetHealth deleted successfully');
    }
}
