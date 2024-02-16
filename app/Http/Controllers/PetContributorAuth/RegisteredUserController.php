<?php

namespace App\Http\Controllers\PetContributorAuth;

use App\Http\Controllers\Controller;
use App\Models\PetContributor;
// use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        // return view('petcontributor.register');
        return view('petcontributor.auth.register');

    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.PetContributor::class],
            'jenkel' => 'required',
            'alamat' => 'required',
            'no_hp' => ['required', 'string', 'max:15'],
            'tgl_lahir' => ['required', 'date'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = PetContributor::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'jenkel' => $request->jenkel,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tgl_lahir' => $request->tgl_lahir,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('petcontributor')->login($user);

        return redirect(RouteServiceProvider::PET_CONTRIBUTOR_HOME);
    }
}
