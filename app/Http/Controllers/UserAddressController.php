<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    public function index()
    {
        $useraddresses = UserAddress::latest()->paginate(5);
        return view('admin.useraddresses.index', compact('useraddresses'));
    }

    public function create()
    {
        return view('admin.useraddresses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penerima' => 'required',
            'no_hp' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'jalan' => 'required',
            'no_rumah' => 'required',
            'kode_pos' => 'required'
        ]);

        UserAddress::create($request->all());
        return redirect()->route('useraddresses.index')->with('success', 'UserAddress created successfull');
    }

    public function show(UserAddress $useraddress)
    {
        return view('useraddresses.show',compact('useraddress'));
    }

    public function edit(UserAddress $useraddress)
    {
        return view('useraddresses.edit',compact('useraddress'));
    }

    public function update(Request $request, UserAddress $useraddress)
    {
        $request->validate([
            'nama_penerima' => 'required',
            'no_hp' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'jalan' => 'required',
            'no_rumah' => 'required',
            'kode_pos' => 'required'
        ]);

        $useraddress->update($request->all());
        return redirect()->route('useraddresses.index')->with('success', 'UserAddress updated successfully');
    }

    public function destroy(UserAddress $useraddress)
    {
        $useraddress->delete();
        return redirect()->route('useraddresses.index')->with('success', 'UserAddress deleted successfully');
        //
    }
}
