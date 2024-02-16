<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            
            // Check if the user is an admin
            if ($user->is_admin) {
                // Redirect admin if they try to access /explore
                if ($request->is('explore')) {
                    return redirect()->route('admin.dashboard');
                }
            } else {
                // Redirect non-admin users if they try to access /admin
                if ($request->is('admin')) {
                    return redirect()->route('explore');
                }
            }
        }

        return $next($request);
    }
}
