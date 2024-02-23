<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\PetDetail;
use App\Models\PetHealth;
use App\Models\PetContributor;
use App\Models\SearchHistory;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $pets = Pet::all();
        return view('dashboard', compact('pets'));
    }

    public function welcome() {
        $pets = Pet::all();
        
        return view('welcome', compact('pets'));
    }
    public function byCategory($category) {
        
    }
    public function detail($kd) {
        $pet = Pet::where('kd', $kd)->first();
        $id_petcontributor = $pet->id_petcontributor;
        $petcontributor = PetContributor::where('id', $id_petcontributor)->first();
        $petdetail = PetDetail::where('kd_pet', $kd)->first();
        $pethealth = PetHealth::where('kd_pet', $kd)->first();
        return view('user.show-pet', compact('pet', 'petcontributor', 'petdetail', 'pethealth'));
    }
    public function freeadopt() {
        $pets = Pet::where('harga', 0)->get();
        return view('user.free-adopt', compact('pets'));
    }
}
