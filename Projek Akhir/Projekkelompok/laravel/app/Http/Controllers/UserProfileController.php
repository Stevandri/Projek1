<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User; // Pastikan path ke model User Anda benar

class UserProfileController extends Controller
{
    // Menampilkan halaman profil pengguna
    public function show()
    {
        $user = Auth::user();
        return view('userBC.profilBC', compact('user')); 
    }

    // Menampilkan halaman edit profil
    public function edit()
    {
        $user = Auth::user();
        return view('userBC.editprofilBC', compact('user')); // Mengirim data user ke view editprofilBC.blade.php
    }

    // Mengupdate profil pengguna
    public function update(Request $request)
    {
        $user = Auth::user(); // Dapatkan user yang sedang login

        // Validasi input
        $request->validate([
            'namadepan' => 'required|string|max:255',
            'namabelakang' => 'required|string|max:255',
            'posisi_suara' => 'nullable|string|max:255',
            'nim' => 'required|string|max:255', // Anda mungkin ingin menambahkan validasi unique jika NIM harus unik, abaikan user saat ini
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id, // Email harus unik, kecuali untuk user saat ini
            'telepon' => 'nullable|string|max:20',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar
        ]);

        // Ambil semua data kecuali _token dan _method (jika ada)
        $userData = $request->except(['_token', '_method', 'profile_picture']);

        // Handle upload foto profil jika ada file baru
        if ($request->hasFile('profile_picture')) {
            // Hapus foto lama jika ada dan bukan foto default
            if ($user->profile_picture && $user->profile_picture !== 'item/profildefault.png') {
                Storage::disk('public')->delete($user->profile_picture);
            }

            // Simpan foto baru
            // Parameter kedua 'public' memastikan file disimpan di storage/app/public
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $userData['profile_picture'] = $path; // Simpan path ke database
        }

        // Update data pengguna
        // Pastikan model User Anda menggunakan $fillable untuk field-field ini
        $userToUpdate = User::find($user->id);
        if($userToUpdate) {
            $userToUpdate->update($userData);
        }


        // Redirect kembali ke halaman profil dengan pesan sukses
        return redirect()->route('profil.show')->with('success', 'Profil berhasil diperbarui!');
    }
}