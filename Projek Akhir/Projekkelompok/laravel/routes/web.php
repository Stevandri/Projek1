<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserPageController;
use Illuminate\Support\Facades\Auth;


// Guest routes 
Route::get('/kepengurusan', function () {return view('Allaccess.kepengurusan2025');}); //kepengurusan
Route::get('/BCNews', function () {return view('Allaccess.berita');}); //berita
Route::get('/Sejarah', function () {return view('Allaccess.sejarah');}); //Sejarah BC
Route::get('/Visi&Misi', function () {return view('Allaccess.visimisi');}); //Sejarah BC
Route::get('/OpenRecruitment', function () {return view('Allaccess.openrecruitment');}); //oprec
Route::get('/OpenRecruitmentForm', function () {return view('Allaccess.formopenrecruitment');}); //oprecForm
//beritaBC
    Route::get('/PICF2024', function () {return view('Allaccess.beritacontent.Blue_Choir_Fakultas_Teknik_Unsrat_Raih_Dua_Emas_di_PICF_2024');});
    Route::get('/Bc_In_Tahiland', function () {return view('Allaccess.beritacontent.thailand');});

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'postlogin'])->name('postlogin.attempt')->middleware('guest');

// Logout route 
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


// User routes 
Route::middleware(['auth'])->group(function () {
    // dsb
    Route::get('/beranda', [UserPageController::class, 'index'])->name('userbcdashboard'); 

    // User prf

    Route::get('/profil', [UserProfileController::class, 'show'])->name('profil.show');
    Route::get('/profil/edit', [UserProfileController::class, 'edit'])->name('profil.edit');
    Route::post('/profil/update', [UserProfileController::class, 'update'])->name('profil.update');
    // Route::get('/profil', function () { return view('userBC.profilBC'); })->name('profil.show');
    // if (class_exists(ProfilController::class)) {
    //     Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('profil.edit');
    //     Route::post('/profil', [ProfilController::class, 'update'])->name('profil.update');
    // }
    
    // smw pegmmn
    Route::get('/pengumuman', [UserPageController::class, 'showAnnouncements'])->name('pengumuman.index');
    
    // keg
    Route::get('/kegiatan', [UserPageController::class, 'showUserKegiatan'])->name('kegiatan.index');

    // parttr
    Route::get('/partitur', [UserPageController::class, 'showPartiturs'])->name('partitur.index');
});


Route::middleware(['auth', 'isAdmin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard Admin
    Route::get('/beranda', [AdminController::class, 'dashboard'])->name('beranda');

    // User Management (Admin)
    Route::get('/pengguna', [AdminController::class, 'indexUsers'])->name('pengguna.index');
    Route::get('/pengguna/tambah', [AdminController::class, 'createUser'])->name('pengguna.create'); 
    Route::post('/pengguna', [AdminController::class, 'storeUser'])->name('pengguna.store');
    Route::delete('/pengguna/{user}', [AdminController::class, 'destroyUser'])->name('pengguna.destroy');
    Route::get('/pengguna/{user}/edit', [AdminController::class, 'editUser'])->name('pengguna.edit');
    Route::put('/pengguna/{user}', [AdminController::class, 'updateUser'])->name('pengguna.update');

    // Announcements Management (Admin)
    Route::get('/announcements', [AdminController::class, 'indexAnnouncements'])->name('announcement.index');
    Route::get('/announcements/create', [AdminController::class, 'createAnnouncement'])->name('announcement.create');
    Route::post('/announcements', [AdminController::class, 'storeAnnouncement'])->name('announcement.store');
    Route::get('/announcements/{announcement}/edit', [AdminController::class, 'editAnnouncement'])->name('announcement.edit');
    Route::put('/announcements/{announcement}', [AdminController::class, 'updateAnnouncement'])->name('announcement.update');
    Route::delete('/announcements/{announcement}', [AdminController::class, 'destroyAnnouncement'])->name('announcement.destroy');

    // Kegiatan Management (Admin)
    Route::get('/kegiatan', [AdminController::class, 'indexKegiatan'])->name('kegiatan.index');
    Route::get('/kegiatan/tambah', [AdminController::class, 'createKegiatan'])->name('kegiatan.create');
    Route::post('/kegiatan', [AdminController::class, 'storeKegiatan'])->name('kegiatan.store');
    Route::get('/kegiatan/{kegiatan}/edit', [AdminController::class, 'editKegiatan'])->name('kegiatan.edit');
    Route::put('/kegiatan/{kegiatan}', [AdminController::class, 'updateKegiatan'])->name('kegiatan.update');
    Route::delete('/kegiatan/{kegiatan}', [AdminController::class, 'destroyKegiatan'])->name('kegiatan.destroy');

    //partitur
    Route::get('/partitur', [AdminController::class, 'indexPartitur'])->name('partitur.index');
    Route::post('/partitur', [AdminController::class, 'storePartitur'])->name('partitur.store');
    Route::get('/partitur/{partitur}/edit', [AdminController::class, 'editPartitur'])->name('partitur.edit'); 
    Route::put('/partitur/{partitur}', [AdminController::class, 'updatePartitur'])->name('partitur.update');
    Route::delete('/partitur/{partitur}', [AdminController::class, 'destroyPartitur'])->name('partitur.destroy');
});

