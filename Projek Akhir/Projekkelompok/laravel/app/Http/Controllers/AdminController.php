<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use App\Models\Announcement;
use Illuminate\Validation\Rule;
use App\Models\Kegiatan;
class AdminController extends Controller
{
    public function dashboard()
    {
        $totalPengguna = User::count();
        $batasWaktuAktif = Carbon::now()->subMinutes(5);
        $penggunaOnline = User::whereNotNull('last_seen_at')
                              ->where('last_seen_at', '>=', $batasWaktuAktif)
                              ->orderBy('last_seen_at', 'desc')
                              ->get();
        // Path view Anda 'pengurus.adminBeranda'
        return view('pengurus.adminBeranda', [ //
            'totalPengguna' => $totalPengguna,
            'penggunaOnlineList' => $penggunaOnline,
            'jumlahPenggunaOnline' => $penggunaOnline->count(),
        ]);
    }

    public function indexUsers()
    {
        $users = User::orderBy('namadepan')->get();
        return view('pengurus.adminPengguna', compact('users')); //
    }

    //form tambah ucer
    public function createUser()
    {
        return view('pengurus.adminTambahpengguna');
    }

    //AKsi untuk tambah user
    public function storeUser(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_depan'    => 'required|string|max:255',
            'nama_belakang' => 'nullable|string|max:255', 
            'nim'           => 'required|string|max:50|unique:users,nim', 
            'email'         => 'required|string|email|max:255|unique:users,email',
            'telepon'       => 'nullable|string|max:20',
            'posisi_suara'  => 'nullable|string|max:100',
                                                        
            'posisi'        => 'required|string|max:100', 
            'password'      => 'required|string|min:8',
        ]);

        // Buat pengguna baru
        User::create([
            'namadepan'     => $validatedData['nama_depan'],
            'namabelakang'  => $validatedData['nama_belakang'],
            'nim'           => $validatedData['nim'],
            'email'         => $validatedData['email'],
            'telepon'       => $validatedData['telepon'],
            'posisi_suara'  => $request->input('posisi_suara_from_select'), 
            'posisi'        => $validatedData['posisi'],      
            'status'        => 'aktif', 
            'password'      => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('admin.pengguna.index')->with('success', 'Pengguna baru berhasil ditambahkan.');
    }

    public function destroyUser(User $user) // Hapus untuk pengguna dan admin lain
    {
        if ($user->id === Auth::id()) {
            return redirect()->route('admin.pengguna.index')->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }
        $user->delete();
        return redirect()->route('admin.pengguna.index')->with('success', 'Pengguna berhasil dihapus.');
    }


    public function indexAnnouncements() // Nama metode diubah
    {
        // Menggunakan model Announcement dan urutkan berdasarkan tanggal publish
        $announcements = Announcement::orderBy('publish_date', 'desc')->orderBy('created_at', 'desc')->get();
        return view('pengurus.announcement.indexAdmin', compact('announcements')); // View baru
    }

    public function createAnnouncement() // Nama metode diubah
    {
        // View untuk membuat announcement baru
        return view('pengurus.announcement.createAdmin'); // View baru
    }

    public function storeAnnouncement(Request $request) // Nama metode diubah
    {
        $validatedData = $request->validate([
            'subject'       => 'required|string|max:255',
            'content'       => 'required|string',
            'sender'        => 'required|string|max:255',
            'publish_date'  => 'required|date',
        ]);

        Announcement::create($validatedData);

        return redirect()->route('admin.announcement.index')->with('success', 'Pengumuman berhasil dibuat.'); // Rute baru
    }

    public function editAnnouncement(Announcement $announcement) // Nama metode dan parameter diubah
    {
        // View untuk mengedit announcement, menggunakan $announcement dari Route Model Binding
        return view('pengurus.announcement.editAdmin', compact('announcement')); // View baru
    }

    public function updateAnnouncement(Request $request, Announcement $announcement) // Nama metode dan parameter diubah
    {
        $validatedData = $request->validate([
            'subject'       => 'required|string|max:255',
            'content'       => 'required|string',
            'sender'        => 'required|string|max:255',
            'publish_date'  => 'required|date',
        ]);

        $announcement->update($validatedData);

        return redirect()->route('admin.announcement.index')->with('success', 'Pengumuman berhasil diperbarui.'); // Rute baru
    }

    public function destroyAnnouncement(Announcement $announcement) // Nama metode dan parameter diubah
    {
        $announcement->delete();
        return redirect()->route('admin.announcement.index')->with('success', 'Pengumuman berhasil dihapus.'); // Rute baru
    }


    // --- MANAJEMEN KEGIATAN ---
    public function indexKegiatan()
    {
        $kegiatans = Kegiatan::where('waktu_mulai', '>=', Carbon::today())
                             ->orderBy('waktu_mulai', 'asc')
                             ->get(); 
        $allKegiatans = Kegiatan::orderBy('waktu_mulai', 'desc')->get(); 

        return view('pengurus.adminKegiatan', [ 
            'upcomingEvents' => $kegiatans, 
            'allKegiatansForTable' => $allKegiatans 
        ]);
    }

    public function createKegiatan()
    {
        return view('pengurus.kegiatan.createAdmin');
    }

    public function storeKegiatan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'deskripsi_kegiatan' => 'nullable|string',
            'waktu_mulai' => 'required|date', 
            'waktu_selesai' => 'nullable|date|after_or_equal:waktu_mulai',
            'lokasi' => 'nullable|string|max:255',
            'status' => 'required|in:akan datang,selesai,berlangsung,dibatalkan',
        ]);

        Kegiatan::create($validatedData);
        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function editKegiatan(Kegiatan $kegiatan) 
    {
        return view('pengurus.kegiatan.editAdmin', compact('kegiatan'));
    }

    public function updateKegiatan(Request $request, Kegiatan $kegiatan)
    {
        $validatedData = $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'deskripsi_kegiatan' => 'nullable|string',
            'waktu_mulai' => 'required|date',
            'waktu_selesai' => 'nullable|date|after_or_equal:waktu_mulai',
            'lokasi' => 'nullable|string|max:255',
            'status' => 'required|in:akan datang,selesai,berlangsung,dibatalkan',
        ]);

        $kegiatan->update($validatedData);
        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    public function destroyKegiatan(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil dihapus.');
    }


    
}