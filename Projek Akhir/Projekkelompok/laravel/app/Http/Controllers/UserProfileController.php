<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User; 

class UserProfileController extends Controller
{
   
    public function show()
    {
        $user = Auth::user();
        return view('userBC.profilBC', compact('user')); 
    }

    public function edit()
    {
        $user = Auth::user();
        return view('userBC.editprofilBC', compact('user')); 
    }

    //Mengupdate profil pengguna
    public function update(Request $request)
    {
        $user = Auth::user(); 
        $request->validate([
            'namadepan' => 'required|string|max:255',
            'namabelakang' => 'required|string|max:255',
            'posisi_suara' => 'nullable|string|max:255',
            'nim' => 'required|string|max:255', 
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id, 
            'telepon' => 'nullable|string|max:20',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

       
        $userData = $request->except(['_token', '_method', 'profile_picture']);

    
        if ($request->hasFile('profile_picture')) {
            
            if ($user->profile_picture && $user->profile_picture !== 'item/profildefault.png') {
                Storage::disk('public')->delete($user->profile_picture);
            }

            //Simpan foto baru
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $userData['profile_picture'] = $path; // Simpan path ke database
        }

        //Update data pengguna
        $userToUpdate = User::find($user->id);
        if($userToUpdate) {
            $userToUpdate->update($userData);
        }
        
        return redirect()->route('profil.show')->with('success', 'Profil berhasil diperbarui!');
    }
}