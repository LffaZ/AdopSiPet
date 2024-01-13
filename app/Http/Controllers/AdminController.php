<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function dashboard()
    {
        // Konten dashboard admin
        return view('admin.dashboard');
    }
}
