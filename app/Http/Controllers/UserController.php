<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::latest()->paginate(5);
        return response()->json($user, 200);
        // return view('users.index', compact('users'));
    }

    public function create()
    {
        // return view('users.create');
        return view('signin');

    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'Jenkel' => 'required',
            'Email' => 'required',
            'Kd_alamat' => 'required',
            'No_hp' => 'required',
            'Tgl_lahir' => 'required'
        ]);

        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'User created successfull');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'Nama' => 'required',
            'Jenkel' => 'required',
            'Email' => 'required',
            // 'Kd_alamat' => 'required',
            'No_hp' => 'required',
            'Tgl_lahir' => 'required'
        ]);

        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
        //
    }
}
