<?php
namespace App\Http\Middleware;

// use statement Anda di sini
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

class UpdateLastSeenAt
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            // Pastikan $user adalah instance dari model User Anda
            if ($user instanceof \App\Models\User) { // Sesuaikan \App\Models\User jika path model Anda berbeda
                $user->last_seen_at = Carbon::now();
                $user->save();
            }
        }
        return $next($request);
    }
}
