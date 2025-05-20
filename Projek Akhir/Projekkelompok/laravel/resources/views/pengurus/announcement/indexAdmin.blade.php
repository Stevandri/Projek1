<!doctype html>
<html lang="id">
  <head>
    <title>Admin - Manajemen Pengumuman</title>
    {{-- Referensi ke <head> dari adminPengguna.blade.php Anda --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body { background-color: #DFEAFC; font-family: 'Poppins', sans-serif; }
        .wrapper { display: flex; width: 100%; align-items: stretch; }
        #sidebar { min-width: 250px; max-width: 250px; background: #343a40; color: #fff; transition: all 0.3s; }
        #sidebar.active { margin-left: -250px; }
        #sidebar .logo { padding: 1.5rem; text-align: center; font-size: 1.5rem; font-weight: bold; color: #fff; text-decoration: none; }
        #sidebar .logo span { font-size: 0.8rem; display: block; color: rgba(255,255,255,0.7); }
        #sidebar ul.components { padding: 20px 0; border-bottom: 1px solid rgba(255,255,255,0.1); }
        #sidebar ul li a { padding: 10px 20px; font-size: 1.1em; display: block; color: rgba(255,255,255,0.8); text-decoration: none; }
        #sidebar ul li a:hover { color: #fff; background: #495057; }
        #sidebar ul li.active > a { color: #fff; background: #007bff; }
        #sidebar .footer { text-align: center; font-size: 0.9em; padding:15px; position: absolute; bottom: 0; width: 100%; }
        #content { width: 100%; padding: 20px; min-height: 100vh; transition: all 0.3s; position: relative; }
        .card { border-radius: .75rem; margin-bottom: 1.5rem; box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.075); }
        .table th, .table td { vertical-align: middle; }
        .custom-menu { position: absolute; top: 15px; right: -50px; z-index: 1050; }
        .custom-menu button { color: #fff; background-color: #007bff; border: none; }
        .btn-action-group .btn, .btn-action-group form { display: inline-block; margin-right: 5px; margin-bottom: 5px; }
    </style>
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                  <i class="fa fa-bars"></i><span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a href="{{ route('admin.beranda') }}" class="logo">Hallo Admin<span>&gt; Pengumuman</span></a></h1>
                <ul class="list-unstyled components mb-5">
                  <li><a href="{{ route('admin.beranda') }}"><span class="fa fa-home mr-3"></span> Beranda</a></li>
                  <li class="{{ Route::is('admin.announcement.index') || Route::is('admin.announcement.create') || Route::is('admin.announcement.edit') ? 'active' : '' }}">
                    <a href="{{ route('admin.announcement.index') }}"><span class="fa fa-bullhorn mr-3"></span> Pengumuman</a>
                  </li>
                  <li><a href="#"><span class="fa fa-calendar mr-3"></span> Kegiatan</a></li>
                  <li><a href="#"><span class="fa fa-music mr-3"></span> Partitur</a></li>
                  <li><a href="{{ route('admin.pengguna.index') }}"><span class="fa fa-users mr-3"></span> Pengguna</a></li>
                </ul>
                <div class="footer">
                    <ul class="list-unstyled components mb-5">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('admin-announcement-idx-logout-form').submit();"><span class="fa fa-sign-out mr-3"></span> Keluar</a>
                            <form id="admin-announcement-idx-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                        </li>
                    </ul>
                    <p><small>&copy; Blue Choir {{ date('Y') }}</small></p>
                </div>
            </div>
        </nav>

        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="container-fluid">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Manajemen Pengumuman</h1>
                    <a href="{{ route('admin.announcement.create') }}" class="btn btn-success">
                        <i class="fa fa-plus"></i> Buat Pengumuman Baru
                    </a>
                </div>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow-sm">
                    <div class="card-header">Daftar Pengumuman</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Subjek</th>
                                        <th>Pengirim</th>
                                        <th>Tgl Publish</th>
                                        <th>Dibuat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($announcements as $announcement)
                                    <tr>
                                        <td>{{ $announcement->id }}</td>
                                        <td>{{ $announcement->subject }}</td>
                                        <td>{{ $announcement->sender }}</td>
                                        <td>{{ $announcement->publish_date->format('d M Y') }}</td>
                                        <td>{{ $announcement->created_at->format('d M Y H:i') }}</td>
                                        <td class="btn-action-group">
                                            <a href="{{ route('admin.announcement.edit', $announcement->id) }}" class="btn btn-sm btn-warning" title="Edit">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.announcement.destroy', $announcement->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-4">Belum ada pengumuman.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script> (function($) { "use strict"; $('#sidebarCollapse').on('click', function () { $('#sidebar').toggleClass('active'); }); })(jQuery); </script>
  </body>
</html>