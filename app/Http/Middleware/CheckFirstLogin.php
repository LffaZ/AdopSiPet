<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CheckFirstLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('petcontributor/dashboard')) {
            $showInstructionModal = !Session::has('instruction_seen');
            $request->attributes->add(['showInstructionModal' => $showInstructionModal]);
        }

        return $next($request);
    }
}
