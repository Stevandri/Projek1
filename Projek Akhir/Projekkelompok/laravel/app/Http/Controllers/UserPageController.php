<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement; // Pastikan Anda sudah membuat model ini
use Carbon\Carbon;          // Untuk formatting tanggal

class UserPageController extends Controller // Atau nama controller Anda
{
    /**
     * Menampilkan halaman pengumuman untuk pengguna biasa.
     */
    public function showAnnouncements()
    {
        // Mengambil semua pengumuman yang tanggal publish-nya sudah lewat atau hari ini,
        // diurutkan berdasarkan tanggal publish terbaru, lalu berdasarkan waktu pembuatan terbaru.
        $announcements = Announcement::where('publish_date', '<=', Carbon::today())
                                     ->orderBy('publish_date', 'desc')
                                     ->orderBy('created_at', 'desc')
                                     ->get();

        // Mengirim data ke view. Pastikan path view sudah benar.
        // Berdasarkan file yang Anda unggah, sepertinya view ada di resources/views/userBC/pengumuman.blade.php
        // Jika ya, maka view('userBC.pengumuman', ...) sudah benar.
        return view('userBC.pengumuman', compact('announcements'));
    }
}