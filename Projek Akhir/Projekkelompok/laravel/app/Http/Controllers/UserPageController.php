<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;        // Pastikan Anda memiliki model Kegiatan
use App\Models\Announcement;    // Pastikan Anda memiliki model Announcement
use Carbon\Carbon;              // Untuk manipulasi tanggal
use Illuminate\Support\Str;     // Untuk Str::limit di Blade (walaupun tidak digunakan langsung di controller ini, baik untuk include)
use Illuminate\Support\Facades\Auth; // Untuk mengakses Auth::user()


class UserPageController extends Controller
{
    /**
     * Tampilkan beranda untuk pengguna non-admin.
     * Mengambil 5 pengumuman terbaru dan semua kegiatan yang akan datang.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil kegiatan yang akan datang
        // Kegiatan yang 'akan datang' adalah yang waktu_mulai-nya lebih besar atau sama dengan hari ini
        // Asumsi: status kolom 'selesai' atau 'dibatalkan' tidak ingin ditampilkan
        $upcomingKegiatans = Kegiatan::whereDate('waktu_mulai', '>=', Carbon::today())
                                        // ->where('status', '!=', 'selesai') // Opsional: jika ada kolom status kegiatan
                                        // ->where('status', '!=', 'dibatalkan') // Opsional
                                        ->orderBy('waktu_mulai', 'asc') // Urutkan dari yang terdekat
                                        ->get();

        // Ambil 5 pengumuman terbaru
        // Urutkan berdasarkan created_at DESC (terbaru)
        $latestAnnouncements = Announcement::orderBy('created_at', 'desc')
                                            ->limit(5)
                                            ->get();

        // Mengirimkan data ke view userBC.userbcdashboard
        // Debugging: dd($upcomingKegiatans, $latestAnnouncements); // Uncomment ini untuk melihat data yang dikirim
        return view('userBC.userbcdashboard', compact('upcomingKegiatans', 'latestAnnouncements'));
    }

    // Metode untuk menampilkan semua pengumuman (jika pengguna mengklik "Lihat Informasi Lengkap")
    public function showAnnouncements()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        return view('userBC.pengumuman', compact('announcements')); // Asumsi view 'userBC.pengumuman' ada
    }

    // Metode untuk menampilkan semua kegiatan (jika pengguna mengklik "Lihat Semua Kegiatan" di halaman Kegiatan)
    public function showUserKegiatan()
    {
        $upcomingKegiatans = Kegiatan::whereDate('waktu_mulai', '>=', Carbon::today())
                                    ->orderBy('waktu_mulai', 'asc')
                                    ->get();
        return view('userBC.kegiatan', compact('upcomingKegiatans')); // Asumsi view 'userBC.kegiatan' ada
    }

    // ... metode-metode lain yang mungkin sudah ada di UserPageController Anda ...
}