<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('nim', 'password'))) {
            $request->session()->regenerate(); 
            return redirect()->intended(route('userbcdashboard')); 
        }

   
        return back()->withErrors([
            'nim' => 'NIM atau password yang Anda masukkan salah.',
        ])->onlyInput('nim'); 
    }

    /**
     * Handle an incoming logout request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout(); 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 
        return redirect()->route('index')->with('status', 'Anda telah berhasil logout.');
    }
}