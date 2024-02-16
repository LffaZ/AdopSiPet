<?php

namespace App\Http\Controllers\PetContributorAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PetContributorAuth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('petcontributor.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Tandai bahwa pengguna telah melihat instruksi
        $request->session()->put('instruction_seen', true);

        return redirect()->intended(RouteServiceProvider::PET_CONTRIBUTOR_HOME);

        // if (auth()->user()->is_admin === 1) {
        //     return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
        // } else {
        //     return redirect()->intended(RouteServiceProvider::HOME);
        // }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('petcontributor')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
