<?php

namespace App\Http\Controllers;

use App\Models\PetHealth;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetHealthController extends Controller
{
    public function index()
    {
        $pethealths = PetHealth::latest()->paginate(5);
        return view('pethealths.index', compact('pethealths'));
    }

    public function create()
    {
        return view('pethealths.create');
    }

    public function store(Request $request, Pet $pet)
    {
        // $petStatus = Pet::findOrFail($data['kd_pet'])->stts_kepemilikan;
        // if ($petStatus == 'liar') {
        $request->validate([
            'foto_cekdokter' => 'required',
            'stts_vaksin' => 'required',
            'stts_steril' => 'required',
            'riwayat_penyakit' => 'required',
            'kd_pet' => 'required',

        ]);


        $petHealth = PetHealth::create($request->all());

        // }

        return redirect()->route('pethealths.index')->with('success', 'PetHealth created successfull');
    }

    public function show(PetHealth $pethealth)
    {
        return view('pethealths.show', compact('pethealth'));
    }

    public function edit(PetHealth $pethealth)
    {
        return view('pethealths.edit', compact('pethealth'));
    }

    public function update(Request $request, PetHealth $pethealth)
    {
        $request->validate([
            'foto_cekdokter' => 'required',
            'stts_vaksin' => 'required',
            'stts_steril' => 'required',
            'riwayat_penyakit' => 'required'
        ]);

        $pethealth->update($request->all());
        return redirect()->route('pethealths.index')->with('success', 'PetHealth updated successfully');
    }

    public function destroy(PetHealth $pethealth)
    {
        $pethealth->delete();
        return redirect()->route('pethealths.index')->with('success', 'PetHealth deleted successfully');
    }
}
