<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserPageController; // Pastikan ini ada
use Illuminate\Support\Facades\Auth;


// Guest routes (for unauthenticated users)
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'postlogin'])->name('postlogin.attempt')->middleware('guest');

// Logout route (for authenticated users)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


// User/Member routes (require authentication)
Route::middleware(['auth'])->group(function () {
    // Dashboard for regular users
    Route::get('/beranda', [UserPageController::class, 'index'])->name('userbcdashboard'); // Ini yang penting untuk dashboard pengguna

    // User profile display and edit
    // Pastikan view 'userBC.profilBC' ada
    Route::get('/profil', function () { return view('userBC.profilBC'); })->name('profil.show');
    if (class_exists(ProfilController::class)) {
        Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('profil.edit');
        Route::post('/profil', [ProfilController::class, 'update'])->name('profil.update');
    }
    
    // All announcements page
    Route::get('/pengumuman', [UserPageController::class, 'showAnnouncements'])->name('pengumuman.index');
    
    // All activities page for users
    Route::get('/kegiatan', [UserPageController::class, 'showUserKegiatan'])->name('kegiatan.index');

    // Partitur page (assuming 'userBC.partitur' exists)
    Route::get('/partitur', function () { return view('userBC.partitur'); })->name('partitur.index');
});


// Admin routes (require authentication and isAdmin middleware)
Route::middleware(['auth', 'isAdmin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard Admin
    Route::get('/beranda', [AdminController::class, 'dashboard'])->name('beranda');

    // User Management (Admin)
    Route::get('/pengguna', [AdminController::class, 'indexUsers'])->name('pengguna.index');
    Route::get('/pengguna/tambah', [AdminController::class, 'createUser'])->name('pengguna.create'); 
    Route::post('/pengguna', [AdminController::class, 'storeUser'])->name('pengguna.store');
    Route::delete('/pengguna/{user}', [AdminController::class, 'destroyUser'])->name('pengguna.destroy');

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
});

// Route ini saya hilangkan karena sudah tercakup di middleware 'auth' untuk user dashboard
// Route::get('/postlogin', function () {
//      return view('index');
// })->name('index');

// Route ini saya hilangkan karena rute login utama sudah ada di '/'
// Route::get('/', [LoginController::class, 'index'])->name('index');