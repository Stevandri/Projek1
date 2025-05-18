<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/beranda', function () {
    return view('userBC.userbcdashboard');
})->name('userbcdashboard');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/postlogin', function () {
    return view('index');
})->name('index');



//profil
Route::get('/profil', function () {
    return view('userBC.profilBC');
})->middleware('auth');

//editprofilny
Route::middleware('auth')->group(function () {
    Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::post('/profil', [ProfilController::class, 'update'])->name('profil.update');
});

// web.php
Route::get('/profil', function () {
    return view('userBC.profilBC');
})->name('profil.show')->middleware('auth'); // Tambahkan ->name('nama.rute.anda')


Route::get('/kegiatan', function () {
    return view('userBC.kegiatan'); // Sesuaikan dengan nama view Anda
})->name('kegiatan.index')->middleware('auth');

Route::get('/pengumuman', function () {
    return view('userBC.pengumuman'); // Sesuaikan dengan nama view Anda
})->name('pengumuman.index')->middleware('auth');

Route::get('/partitur', function () {
    return view('userBC.partitur'); // Sesuaikan dengan nama view Anda
})->name('partitur.index')->middleware('auth');