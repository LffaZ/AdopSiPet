<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        $firstuser = User::where('is_admin', 0)->oldest()->first();
        $users = User::where('is_admin', 0)->latest()->paginate(5);
        // return response()->json($user, 200);
        return view('admin.users.index', compact('users', 'firstuser'));
    }

    public function create()
    {
        return view('admin.users.modal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required | max:255',
            'no_hp' => 'required | max:15',
            'jenkel' => 'required',
            'tgl_lahir' => 'required | date',
            'email' => 'required | email | max:255',
            'password' => 'required | confirmed',
        ]);
        
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'jenkel' => $request->jenkel,
            'no_hp' => $request->no_hp,
            'tgl_lahir' => $request->tgl_lahir,
            'password' => Hash::make($request->password),
        ]);

        dd($user);
        $user->save();

        return redirect()->route('users.index')->with('success', 'User created successfull');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama' => 'required',
            'jenkel' => 'required',
            'email' => 'required',
            // 'Kd_alamat' => 'required',
            'no_hp' => 'required',
            'tgl_lahir' => 'required'
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
