<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    public function index()
    {
        $useraddress = UserAddress::latest()->paginate(5);
        return view('useraddresss.index', compact('useraddresss'));
    }

    public function create()
    {
        return view('useraddresss.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama_penerima' => 'required',
            'No_hp' => 'required',
            'Kota' => 'required',
            'Kecamatan' => 'required',
            'Jalan' => 'required',
            'No_rumah' => 'required',
            'Kode_pos' => 'required'
        ]);

        UserAddress::create($request->all());
        return redirect()->route('useraddresss.index')->with('success', 'UserAddress created successfull');
    }

    public function show(UserAddress $useraddress)
    {
        return view('useraddresss.show',compact('useraddress'));
    }

    public function edit(UserAddress $useraddress)
    {
        return view('useraddresss.edit',compact('useraddress'));
    }

    public function update(Request $request, UserAddress $useraddress)
    {
        $request->validate([
            'Nama_penerima' => 'required',
            'No_hp' => 'required',
            'Kota' => 'required',
            'Kecamatan' => 'required',
            'Jalan' => 'required',
            'No_rumah' => 'required',
            'Kode_pos' => 'required'
        ]);

        $useraddress->update($request->all());
        return redirect()->route('useraddresss.index')->with('success', 'UserAddress updated successfully');
    }

    public function destroy(UserAddress $useraddress)
    {
        $useraddress->delete();
        return redirect()->route('useraddresss.index')->with('success', 'UserAddress deleted successfully');
        //
    }
}
