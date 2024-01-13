<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class PetContributorDashboardController extends Authenticatable
{
    use Notifiable;
    // __construct untuk membatasi hanya petcontributor yg sudah login yg mengakses
    public function __construct()
    {
        $this->middleware('auth:petcontributor');
    }
    public function index()
    {
        return view('petcontributor.dashboard');
    }
}
