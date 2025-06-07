<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Partitur;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
            'password'      => 'required|string|min:6',
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

    //edit user
    public function editUser(User $user)
    {
    return view('pengurus.adminEditPengguna', compact('user'));
    }

    //update user stlh edit
    public function updateUser(Request $request, User $user)
{
    $validatedData = $request->validate([
        'namadepan'    => 'required|string|max:255',
        'namabelakang' => 'nullable|string|max:255',
        'email'        => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        'telepon'      => 'nullable|string|max:20',
        'posisi_suara' => 'nullable|string|max:100', 
        'status'       => 'required|string|in:Aktif,Pasif,Alumni', 
        'posisi'       => 'required|string|max:100',
    ]);

    $user->update([
        'namadepan'     => $validatedData['namadepan'],
        'namabelakang'  => $validatedData['namabelakang'],
        'email'         => $validatedData['email'],
        'telepon'       => $validatedData['telepon'],
        'posisi_suara'  => $validatedData['posisi_suara'],
        'status'        => $validatedData['status'],
        'posisi'        => $validatedData['posisi'],
    ]);

    return redirect()->route('admin.pengguna.index')->with('success', 'Data pengguna berhasil diperbarui.');
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
        $announcements = Announcement::orderBy('publish_date', 'desc')->orderBy('created_at', 'desc')->get();
        return view('pengurus.announcement.indexAdmin', compact('announcements')); // View baru
    }

    public function createAnnouncement() // Nama metode diubah
    {
        return view('pengurus.announcement.createAdmin'); // View baru
    }

    public function storeAnnouncement(Request $request) 
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

    public function editAnnouncement(Announcement $announcement)
    {
        return view('pengurus.announcement.editAdmin', compact('announcement')); 
    }

    public function updateAnnouncement(Request $request, Announcement $announcement) 
    {
        $validatedData = $request->validate([
            'subject'       => 'required|string|max:255',
            'content'       => 'required|string',
            'sender'        => 'required|string|max:255',
            'publish_date'  => 'required|date',
        ]);

        $announcement->update($validatedData);

        return redirect()->route('admin.announcement.index')->with('success', 'Pengumuman berhasil diperbarui.'); 
    }

    public function destroyAnnouncement(Announcement $announcement) 
    {
        $announcement->delete();
        return redirect()->route('admin.announcement.index')->with('success', 'Pengumuman berhasil dihapus.'); 
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

    //daftar partitur
    public function indexPartitur()
    {
        $partiturs = Partitur::orderBy('created_at', 'desc')->get();
        return view('pengurus.adminPartitur', compact('partiturs'));
    }

    //Menambah Partitur baru
    public function storePartitur(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'pencipta' => 'required|string|max:255',
            'partitur_file' => 'required|file|mimes:pdf|max:10240', // PDF maks 10MB
            'sampul_file' => 'nullable|file|image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar maks 2MB
        ], [
            'partitur_file.required' => 'File partitur PDF wajib diunggah.',
            'partitur_file.mimes' => 'File partitur harus berformat PDF.',
            'partitur_file.max' => 'Ukuran file partitur maksimal 10MB.',
            'sampul_file.image' => 'File sampul harus berupa gambar.',
            'sampul_file.mimes' => 'Format gambar sampul harus jpeg, png, jpg, atau gif.',
            'sampul_file.max' => 'Ukuran gambar sampul maksimal 2MB.',
        ]);

        $partitur = new Partitur();
        $partitur->judul = $validatedData['judul'];
        $partitur->pencipta = $validatedData['pencipta'];

        //upload pdf
        if ($request->hasFile('partitur_file')) {
            $filePdf = $request->file('partitur_file');
            //File tujuan storage/app/public/partitur/pdf
            $fileNamePdf = time() . '_' . $filePdf->getClientOriginalName();
            $pathPdf = $filePdf->storeAs('partitur/pdf', $fileNamePdf, 'public');
            $partitur->file_path = $pathPdf;
        }

        //upload file sampul
        if ($request->hasFile('sampul_file')) {
            $fileSampul = $request->file('sampul_file');
            $fileNameSampul = time() . '_' . $fileSampul->getClientOriginalName();
            $pathSampul = $fileSampul->storeAs('partitur/cover', $fileNameSampul, 'public');
            $partitur->sampul_path = $pathSampul;
        }

        $partitur->save();

        return redirect()->route('admin.partitur.index')->with('success', 'Partitur berhasil diunggah.');
    }

   //ubahpartitur
    public function editPartitur(Partitur $partitur)
    {
        return view('pengurus.adminUbahpartitur', compact('partitur'));
    }

    //update partitur d database
    public function updatePartitur(Request $request, Partitur $partitur)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'pencipta' => 'required|string|max:255',
            'partitur_file_ubah' => 'nullable|file|mimes:pdf|max:10240', 
            'sampul_file_ubah' => 'nullable|file|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $partitur->judul = $validatedData['judul'];
        $partitur->pencipta = $validatedData['pencipta'];

        //update file partitur PDF
        if ($request->hasFile('partitur_file_ubah')) {
            if ($partitur->file_path && Storage::disk('public')->exists($partitur->file_path)) {
                Storage::disk('public')->delete($partitur->file_path);
            }
            $filePdf = $request->file('partitur_file_ubah');
            $fileNamePdf = time() . '_' . $filePdf->getClientOriginalName();
            $pathPdf = $filePdf->storeAs('partitur/pdf', $fileNamePdf, 'public');
            $partitur->file_path = $pathPdf;
        }

        //update file sampul
        if ($request->hasFile('sampul_file_ubah')) {
            if ($partitur->sampul_path && Storage::disk('public')->exists($partitur->sampul_path)) {
                Storage::disk('public')->delete($partitur->sampul_path);
            }
            $fileSampul = $request->file('sampul_file_ubah');
            $fileNameSampul = time() . '_' . $fileSampul->getClientOriginalName();
            $pathSampul = $fileSampul->storeAs('partitur/cover', $fileNameSampul, 'public');
            $partitur->sampul_path = $pathSampul;
        }

        $partitur->save();

        return redirect()->route('admin.partitur.index')->with('success', 'Partitur berhasil diperbarui.');
    }

   //apus partitur
    public function destroyPartitur(Partitur $partitur)
    {
        //hpus pdf fisik
        if ($partitur->file_path && Storage::disk('public')->exists($partitur->file_path)) {
            Storage::disk('public')->delete($partitur->file_path);
        }
        if ($partitur->sampul_path && Storage::disk('public')->exists($partitur->sampul_path)) {
            Storage::disk('public')->delete($partitur->sampul_path);
        }

        $partitur->delete();
        return redirect()->route('admin.partitur.index')->with('success', 'Partitur berhasil dihapus.');
    }


    
}