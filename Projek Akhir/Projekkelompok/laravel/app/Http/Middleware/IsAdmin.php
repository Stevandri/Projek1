<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->posisi === 'NonBidang') {
            return $next($request);
        }

        // Jika bukan admin:
        return redirect('/')->with('error', 'Anda tidak memiliki akses admin.');
    }
}