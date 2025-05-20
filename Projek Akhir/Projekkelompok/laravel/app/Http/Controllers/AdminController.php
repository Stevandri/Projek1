<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalPengguna = User::count();
        $batasWaktuAktif = Carbon::now()->subMinutes(5);
        $penggunaOnline = User::whereNotNull('last_seen_at')
                              ->where('last_seen_at', '>=', $batasWaktuAktif)
                              ->orderBy('last_seen_at', 'desc')
                              ->get();
        // Path view Anda 'pengurus.adminBeranda'
        return view('pengurus.adminBeranda', [ //
            'totalPengguna' => $totalPengguna,
            'penggunaOnlineList' => $penggunaOnline,
            'jumlahPenggunaOnline' => $penggunaOnline->count(),
        ]);
    }

    public function indexUsers()
    {
        $users = User::orderBy('namadepan')->get();
        return view('pengurus.adminPengguna', compact('users')); //
    }

    public function destroyUser(User $user) // Hapus untuk pengguna dan admin lain
    {
        if ($user->id === Auth::id()) {
            return redirect()->route('admin.pengguna.index')->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }
        $user->delete();
        return redirect()->route('admin.pengguna.index')->with('success', 'Pengguna berhasil dihapus.');
    }
}