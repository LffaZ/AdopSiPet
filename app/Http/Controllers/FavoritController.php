<?php

namespace App\Http\Controllers;

use App\Models\Favorit;
use Illuminate\Http\Request;

class FavoritController extends Controller
{
    //
    public function index()
    {
        $favorit = Favorit::latest();
        return view('favorits.index', compact('favorits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pengadopsi' => 'required',
            'kd_pet' => 'required'
        ]);

        Favorit::create($request->all());
        return redirect()->route('favorits.index')->with('success', 'favorit created successfull');
    }

    public function destroy(Favorit $favorit)
    {
        $favorit->delete();
        return redirect()->route('favorits.index')->with('success', 'favorit deleted successfully');
    }
}
