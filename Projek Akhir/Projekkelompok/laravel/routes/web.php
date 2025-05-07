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

