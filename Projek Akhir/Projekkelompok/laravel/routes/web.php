<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('index');
});

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/postlogin', function () {
    return view('index');
})->name('index');



Route::middleware(['auth'])->group(function () {
    Route::get('/beranda', function () {
        return view('userBC.userbcdashboard'); // Dashboard pengguna biasa
    })->name('userbcdashboard');

    Route::get('/profil', function () { // Ini mungkin duplikat dengan profil.show, pilih salah satu
        return view('userBC.profilBC');
    })->name('profil.show.simple'); // Beri nama berbeda jika ingin dipertahankan

    Route::get('/profil', [ProfilController::class, 'show'])->name('profil.show'); // Jika ProfilController punya method show
    Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::post('/profil', [ProfilController::class, 'update'])->name('profil.update'); // Biasanya PUT/PATCH untuk update

    Route::get('/kegiatan', function () {
        return view('userBC.kegiatan');
    })->name('kegiatan.index');

    Route::get('/pengumuman', function () {
        return view('userBC.pengumuman');
    })->name('pengumuman.index');

    Route::get('/partitur', function () {
        return view('userBC.partitur');
    })->name('partitur.index');
});


//admin
Route::middleware(['auth', 'isAdmin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard Admin
    Route::get('/beranda', [AdminController::class, 'dashboard'])->name('beranda');


    // Route::get('/pengguna', [AdminController::class, 'daftarPengguna'])->name('pengguna.index');
    // Route::get('/pengumuman/buat', [AdminController::class, 'buatPengumuman'])->name('pengumuman.create');
    // Route::post('/pengumuman', [AdminController::class, 'simpanPengumuman'])->name('pengumuman.store');
});