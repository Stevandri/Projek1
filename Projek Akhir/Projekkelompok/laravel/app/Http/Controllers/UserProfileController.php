<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User; 
use Illuminate\Validation\Rule; 

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
        /** @var \App\Models\User $user */ 
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Sesi Anda telah berakhir. Silakan login kembali.');
        }


        $generalRules = [
            'namadepan' => 'required|string|max:255',
            'namabelakang' => 'required|string|max:255',
            'posisi_suara' => 'nullable|string|max:255',
            'nim' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'telepon' => 'nullable|string|max:20',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $userData = $request->only(['namadepan', 'namabelakang', 'posisi_suara', 'nim', 'email', 'telepon']);

        // Handle upload foto profil
        if ($request->hasFile('profile_picture')) {
            if ($user->profile_picture && $user->profile_picture !== 'item/profildefault.png' && Storage::disk('public')->exists($user->profile_picture)) {
                Storage::disk('public')->delete($user->profile_picture);
            }
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $userData['profile_picture'] = $path;
        }


        if ($request->filled('password')) {
            $passwordRules = [
                'current_password' => ['required', 'string', function ($attribute, $value, $fail) use ($user) {
                    if (!Hash::check($value, $user->password)) {
                        $fail('Password lama yang Anda masukkan tidak sesuai.');
                    }
                }],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ];

            $rules = array_merge($generalRules, $passwordRules);
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            //jika validasi password berhasil
            $userData['password'] = Hash::make($request->password);
        } else {
            //jika field password baru tidak diisi
            $validator = Validator::make($request->all(), $generalRules);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }


        $user->update($userData);

        return redirect()->route('profil.show')->with('success', 'Profil berhasil diperbarui!');
    }
}