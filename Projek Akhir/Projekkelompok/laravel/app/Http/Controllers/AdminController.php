<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;      
use Carbon\Carbon;       

class AdminController extends Controller
{

    public function dashboard()
    {
        $totalPengguna = User::count();
        $batasWaktuAktif = Carbon::now()->subMinutes(5);

        $penggunaOnline = User::where('last_seen_at', '>=', $batasWaktuAktif)
                              ->orderBy('last_seen_at', 'desc') 
                              ->get();
        return view('pengurus.adminBeranda', [
            'totalPengguna' => $totalPengguna,
            'penggunaOnlineList' => $penggunaOnline,
            'jumlahPenggunaOnline' => $penggunaOnline->count(),
        ]);
    }

}