<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

//guest
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');

//auntentikasi
Route::post('/login', [LoginController::class, 'postlogin'])->name('postlogin.attempt')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
//Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');


Route::get('/postlogin', function () {
     return view('index');
})->name('index');



Route::middleware(['auth'])->group(function () {
    //das. user
    Route::get('/beranda', function () {
        return view('userBC.userbcdashboard'); 
    })->name('userbcdashboard');
    //prof user tampil dan edit
    Route::get('/profil', function () { return view('userBC.profilBC'); })->name('profil.show');
    if (class_exists(ProfilController::class)) {
        Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('profil.edit');
        Route::post('/profil', [ProfilController::class, 'update'])->name('profil.update');
    }
    //keg lain
    Route::get('/kegiatan', function () { return view('userBC.kegiatan'); })->name('kegiatan.index');
    Route::get('/pengumuman', function () { return view('userBC.pengumuman'); })->name('pengumuman.index');
    Route::get('/partitur', function () { return view('userBC.partitur'); })->name('partitur.index');
});


//admin
Route::middleware(['auth', 'isAdmin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard Admin
    Route::get('/beranda', [AdminController::class, 'dashboard'])->name('beranda');
    Route::get('/pengguna', [AdminController::class, 'indexUsers'])->name('pengguna.index');
    Route::get('/pengguna/tambah', [AdminController::class, 'createUser'])->name('pengguna.create'); 
    Route::post('/pengguna', [AdminController::class, 'storeUser'])->name('pengguna.store');
    // Route::post('/pengumuman', [AdminController::class, 'simpanPengumuman'])->name('pengumuman.store');
    Route::delete('/pengguna/{user}', [AdminController::class, 'destroyUser'])->name('pengguna.destroy');
});