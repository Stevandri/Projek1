<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('userBC.editprofilBC', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'namadepan' => 'required|string|max:255',
            'posisi_suara' => 'nullable|string|max:100',
            'nim' => 'nullable|string|max:50',
            'email' => 'required|email|max:255',
            'telepon' => 'nullable|string|max:20',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user = Auth::user();
        $user->namadepan = $request->namadepan;
        $user->posisi_suara = $request->posisi_suara;
        $user->nim = $request->nim;
        $user->email = $request->email;
        $user->telepon = $request->telepon;
        
    if ($request->hasFile('profile_picture')) {
        // Hapus foto lama jika ada
        if ($user->profile_picture) {
            Storage::delete('public/profile_pictures/' . $user->profile_picture);
        }
        // Simpan foto baru
        $path = $request->file('profile_picture')->store('profile_pictures', 'public');
        $user->profile_picture = basename($path);
    }
        /** @var \App\Models\User $user **/
        $user->save();

        return view('userBC.profilBC', [
            'user' => $user,
            'pesan' => 'Berhasil diperbaharui'
        ]);
        
    }
}
