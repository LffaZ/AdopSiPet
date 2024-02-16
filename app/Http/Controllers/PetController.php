<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\PetPhoto;
use App\Models\PetDetail;
use App\Models\PetHealth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::latest()->paginate(5);
        $guard = Config::get('auth.defaults.guard');

        if ($guard == 'web') {
            return view('admin.pets.index', compact('pets'));
        } elseif ($guard == 'petcontributor') {
            return view('petcontributor.pets.index', compact('pets'));
        }
    }

    public function search(Request $request)
    {
        $query = $request->input('pet');
        // Buat kondisi jika $request kosong, maka akan menampilkan "$query" tidak ditemukan dan menampilkanrekomendasi 
        if (empty($query)) {
            $rekomendasiHewan = Pet::inRandomOrder()->limit(10)->get();
            return view('search-results', ['rekomendasiHewan' => $rekomendasiHewan]);
        }

        // Jika $query tidak kosong, lakukan pencarian
        $results = Pet::where('nama', 'LIKE', '%' . $query . '%')->get();

        // Hasil pencarian
        return view('search-results', ['query' => $query, 'results' => $results]);
    }

    public function create()
    {
        return view('petcontributor.pets.create');
    }

    public function store(Request $request)
    {
        $idPetContributor = $request->user()->id;

        $request->validate([
            'nama' => 'required',
            'category' => 'required',
            'stts_kepemilikan' => 'required',
            'harga' => 'required',
            // 'kd_petdetail' => 'required',
            // 'kd_pethealth' => 'required',
            'id_petcontributor' => $idPetContributor
        ]);
        $pet = Pet::create($request->all());
        $kdPet = $pet->kd;
        return redirect()->route('pets.index', ['kd_pet' => $pet->kd])->with('success', 'Pet created successfull');
    }

    public function petCombined(Request $request)
    {
        $idPetContributor = $request->user()->id;
        dd($request->validate(['nama' => 'required',
        'category' => 'required',
        'stts_kepemilikan' => 'required',
        'harga' => 'required',]));
        $request->validate([
            'nama' => 'required',
            'category' => 'required',
            'stts_kepemilikan' => 'required',
            'harga' => 'required',
            'id_petcontributor' => $idPetContributor
        ]);
        $pet = Pet::create($request->all());
        $kdPet = $pet->kd;
        return redirect()->route('pets.index', ['kd_pet' => $pet->kd])->with('success', 'Pet created successfull');
    }

    public function storePhoto(Request $request)
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
    }

    public function show(Pet $pet)
    {
        return view('pets.show', compact('pet'));
    }

    public function edit(Pet $pet)
    {
        return view('pets.edit', compact('pet'));
    }

    public function update(Request $request, Pet $pet)
    {
        $request->validate([
            'nama' => 'required',
            'category' => 'required',
            'stts_kepemilikan' => 'required',
            'harga' => 'required',
            // 'Kd_petdetail' => 'required',
            // 'Kd_pethealth' => 'required',
            'id_petcontributor' => 'required'
        ]);

        $pet->update($request->all());
        return redirect()->route('pets.index')->with('success', 'Pet updated successfully');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pets.index')->with('success', 'Pet deleted successfully');
    }
}
