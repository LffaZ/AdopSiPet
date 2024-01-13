<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\PetContributor;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\PetContributor;
// use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Validation\ValidationException;

// login controllernya PetContributor = controller ini 
class PetContributorAuthController extends Controller
{
    // use AuthenticatesUsers;
    // cuma guest petcontributor yg bisa akses
    // public function __construct()
    // {
    //     $this->middleware('guest:petcontributor')->except('logout');
    // }


    public function showLoginForm()
    {
        return view('petcontributor.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        try {
            if (Auth::guard('petcontributor')->attempt($credentials)) {
                // return redirect()->intended('/petcontributor/dashboard');
                dd(Auth::guard('petcontributor')->check());
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('login.auth')->with('error', 'Email atau password salah');
    }

    public function logout()
    {
        Auth::guard('petcontributor')->logout();
        return redirect('/petcontributor/login');
    }
    public function showRegistrationForm()
    {
        return view('petcontributor.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:petcontributors,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('petcontributor/register')
                ->withErrors($validator)
                ->withInput();
        }

        // Create new PetContributor
        $petContributor = PetContributor::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Log in the newly registered petcontributor
        Auth::guard('petcontributor')->login($petContributor);

        // Redirect to petcontributor dashboard or any other desired route
        return redirect('/dashboard');
    }
}
