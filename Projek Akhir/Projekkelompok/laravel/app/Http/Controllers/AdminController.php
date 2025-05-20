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

    //form tambah ucer
    public function createUser()
    {
        return view('pengurus.adminTambahpengguna');
    }

    //AKsi untuk tambah user
    public function storeUser(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_depan'    => 'required|string|max:255',
            'nama_belakang' => 'nullable|string|max:255', 
            'nim'           => 'required|string|max:50|unique:users,nim', 
            'email'         => 'required|string|email|max:255|unique:users,email',
            'telepon'       => 'nullable|string|max:20',
            'posisi_suara'  => 'nullable|string|max:100',
                                                        
            'posisi'        => 'required|string|max:100', 
            'password'      => 'required|string|min:8',
        ]);

        // Buat pengguna baru
        User::create([
            'namadepan'     => $validatedData['nama_depan'],
            'namabelakang'  => $validatedData['nama_belakang'],
            'nim'           => $validatedData['nim'],
            'email'         => $validatedData['email'],
            'telepon'       => $validatedData['telepon'],
            'posisi_suara'  => $request->input('posisi_suara_from_select'), 
            'posisi'        => $validatedData['posisi'],      
            'status'        => 'aktif', 
            'password'      => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('admin.pengguna.index')->with('success', 'Pengguna baru berhasil ditambahkan.');
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