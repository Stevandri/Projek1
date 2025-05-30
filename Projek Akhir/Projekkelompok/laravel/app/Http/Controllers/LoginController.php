<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException; 

class LoginController extends Controller
{
 
    public function showLoginForm()
    {
        return view('index');
    }

  
    public function postlogin(Request $request): RedirectResponse
    {

        $request->validate([
            'nim'      => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('nim', 'password'); 

        //autentikasi pengguna
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate(); 

            $user = Auth::user(); 

            
            if ($user && $user->posisi === 'NonBidang') { 
                return redirect()->intended(route('admin.beranda'));
            }

            return redirect()->intended(route('userbcdashboard'));
        }

        // Jika login gagal:
        throw ValidationException::withMessages([
            'nim' => [trans('auth.failed')], 
        ]);

    }

    //logout
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout(); 

        $request->session()->invalidate();      
        $request->session()->regenerateToken(); 

        return redirect('/')->with('status', 'Anda telah berhasil logout.');
    }
}