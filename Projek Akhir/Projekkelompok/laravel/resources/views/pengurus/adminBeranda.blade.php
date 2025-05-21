<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <style>
    /* Gaya dasar untuk halaman admin */
    body {
      background-color: #f8f9fa; /* Warna latar belakang umum yang lebih lembut */
      font-family: 'Poppins', sans-serif; /* Menyamakan font dengan sidebar */
      color: #495057; /* Warna teks default yang lebih lembut */
    }

    /* Penyesuaian untuk kartu di dashboard admin */
    .admin-card {
      border-radius: 10px; /* Sudut yang lebih halus untuk kartu */
      border: none; /* Menghilangkan border default kartu */
      transition: all 0.3s ease-in-out;
      background-clip: border-box; /* Untuk Safari agar shadow terlihat benar dengan border-radius */
    }
    .admin-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.1) !important;
    }

    .admin-card .card-body {
        padding: 1.25rem; /* Padding di dalam kartu, disesuaikan */
    }

    .admin-card .card-title {
      font-size: 0.85rem; /* Ukuran font judul kartu yang disesuaikan */
      font-weight: 600; /* Judul kartu lebih tebal */
      text-transform: uppercase;
      margin-bottom: 0.5rem; /* Margin bawah judul kartu */
    }

    .admin-card .card-text-value {
      font-size: 2rem; /* Ukuran angka statistik, sedikit dikurangi */
      font-weight: 700; /* Angka statistik tebal */
    }

    .admin-card .icon-bg {
      font-size: 2.5rem; /* Ukuran ikon di kartu, sedikit dikurangi */
      opacity: 0.5; /* Opasitas ikon agar tidak terlalu dominan */
    }
    
    /* Styling untuk tabel pengguna online */
    .table-users-container { 
        border-radius: 8px; 
        overflow: hidden; 
        box-shadow: 0 4px 6px rgba(0,0,0,0.05); 
    }
    .table-users thead th {
        background-color: #343a40; 
        color: #ffffff; 
        font-weight: 600;
        border-bottom-width: 0; 
        font-size: 0.9rem;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }
    .table-users tbody td {
        font-size: 0.85rem; 
        vertical-align: middle; 
    }
    .table-users tbody tr:hover {
        background-color: #f1f1f1; 
    }
    .table-users .badge {
        font-size: 0.75em; 
        padding: 0.5em 0.75em;
    }

    input[type="file"] {
      display: none;
    }
    .custom-file-upload {
      display: inline-block;
      padding: 10px 15px;
      cursor: pointer;
      border-radius: 5px;
      background-color: #007bff;
      color: white;
      font-size: 0.9rem;
    }
    .custom-file-upload:hover {
        background-color: #0056b3;
    }

    .custom-alert {
      border-left-width: 4px;
      border-radius: 5px;
      padding: 1rem 1.25rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 1.5rem;
    }
    .custom-alert-info { border-left-color: #0dcaf0; background-color: #e8f8fd; color: #0c5460; }
    .custom-alert-success { border-left-color: #198754; background-color: #e8fce8; color: #155724; }
    .custom-alert-danger { border-left-color: #dc3545; background-color: #fde8e8; color: #842029; }
    .custom-alert-warning { border-left-color: #ffc107; background-color: #fff8e5; color: #856404; }
    
    .alert-icon { margin-right: 1rem; font-size: 1.5rem; }
    .alert-content { flex: 1; }
    .alert-title { font-weight: 600; margin-top: 0; margin-bottom: 0.25rem; font-size: 1.1rem; }
    .alert-message { font-size: 0.95rem; margin-bottom: 0; }
    .btn-close-custom { border: none; background: transparent; font-size: 1.5rem; cursor: pointer; line-height: 1; padding: 0.5rem; margin-left: 1rem; }
    .btn-close-custom:hover { color: #000; }

    .zindexatas{ z-index: 100; }

    .main-content-title {
        color: #343a40;
        font-weight: 600;
    }
    .border-bottom-custom {
        border-bottom: 1px solid #dee2e6 !important;
    }

    /* Responsive Adjustments */
    @media (max-width: 767.98px) { 
        .admin-card .card-body { padding: 1rem; }
        .admin-card .card-text-value { font-size: 1.8rem; }
        .admin-card .icon-bg { font-size: 2.2rem; }
        .main-content-title.h2 { font-size: 1.5rem; }
        .main-content-title.h4 { font-size: 1.1rem; }
        #content { padding: 1rem !important; }
        .table-users thead th, .table-users tbody td { font-size: 0.8rem; padding: 0.5rem; }
        #sidebar .logo span { display: block; font-size: 12px;} /* Agar span di logo tidak terlalu panjang di mobile */
    }
    @media (max-width: 575.98px) { 
        .admin-card .card-title { font-size: 0.8rem; }
        .admin-card .card-text-value { font-size: 1.6rem; }
        .admin-card .icon-bg { font-size: 2rem; }
        .alert-icon { font-size: 1.25rem; margin-right: 0.75rem;}
        .alert-title { font-size: 1rem; }
        .alert-message { font-size: 0.9rem; }
    }
  </style>
  <body>
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar" class="min-vh-100"> <div class="custom-menu zindexmedium"> <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
        </div>
  			<div class="p-4 zindexatas"> <h1><a href="{{ route('admin.beranda') }}" class="logo">Hallo Admin<span>&gt; Beranda</span></a></h1> <ul class="list-unstyled components mb-5">
            <li class="active"> <a href="{{ route('admin.beranda') }}"><span class="fa fa-home mr-3"></span> Beranda</a>
            </li>
            
            <li class="{{ (request()->routeIs('admin.announcement.index') || request()->routeIs('admin.announcement.create') || request()->routeIs('admin.announcement.edit')) && !request()->routeIs('admin.beranda') ? 'active' : '' }}">
              <a href="#announcementSubmenu" data-toggle="collapse" aria-expanded="{{ (request()->routeIs('admin.announcement.index') || request()->routeIs('admin.announcement.create') || request()->routeIs('admin.announcement.edit')) && !request()->routeIs('admin.beranda') ? 'true' : 'false' }}" class="dropdown-toggle"><span class="fa fa-bullhorn mr-3"></span> Pengumuman</a>
              <ul class="collapse list-unstyled {{ (request()->routeIs('admin.announcement.index') || request()->routeIs('admin.announcement.create') || request()->routeIs('admin.announcement.edit')) && !request()->routeIs('admin.beranda') ? 'show' : '' }}" id="announcementSubmenu">
                <li>
                    <a href="{{ route('admin.announcement.index') }}">Lihat Pengumuman</a>
                </li>
                <li>
                    <a href="{{ route('admin.announcement.create') }}">Buat Pengumuman</a>
                </li>
              </ul>
            </li>

            <li class="{{ (request()->routeIs('admin.kegiatan.index') || request()->routeIs('admin.kegiatan.create') || request()->routeIs('admin.kegiatan.edit')) && !request()->routeIs('admin.beranda') ? 'active' : '' }}">
              <a href="#kegiatanSubmenu" data-toggle="collapse" aria-expanded="{{ (request()->routeIs('admin.kegiatan.index') || request()->routeIs('admin.kegiatan.create') || request()->routeIs('admin.kegiatan.edit')) && !request()->routeIs('admin.beranda') ? 'true' : 'false' }}" class="dropdown-toggle"><span class="fa fa-rocket mr-3"></span> Kegiatan</a>
              <ul class="collapse list-unstyled {{ (request()->routeIs('admin.kegiatan.index') || request()->routeIs('admin.kegiatan.create') || request()->routeIs('admin.kegiatan.edit')) && !request()->routeIs('admin.beranda') ? 'show' : '' }}" id="kegiatanSubmenu">
                <li>
                    <a href="{{ route('admin.kegiatan.index') }}">Lihat Kegiatan</a>
                </li>
                <li>
                    <a href="{{ route('admin.kegiatan.create') }}">Tambah Kegiatan</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#"><span class="fa fa-file-text-o mr-3"></span> Partitur</a>
            </li>

            <li class="{{ (request()->routeIs('admin.pengguna.index') || request()->routeIs('admin.pengguna.create')) && !request()->routeIs('admin.beranda') ? 'active' : '' }}">
                <a href="#userSubmenu" data-toggle="collapse" aria-expanded="{{ (request()->routeIs('admin.pengguna.index') || request()->routeIs('admin.pengguna.create')) && !request()->routeIs('admin.beranda') ? 'true' : 'false' }}" class="dropdown-toggle"><span class="fa fa-users mr-3"></span> Pengguna</a>
                <ul class="collapse list-unstyled {{ (request()->routeIs('admin.pengguna.index') || request()->routeIs('admin.pengguna.create')) && !request()->routeIs('admin.beranda') ? 'show' : '' }}" id="userSubmenu">
                    <li>
                        <a href="{{ route('admin.pengguna.index') }}">Lihat Pengguna</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.pengguna.create') }}">Tambah Pengguna</a>
                    </li>
                </ul>
            </li>
          </ul>

          <div class="footer">
  					<ul class="list-unstyled components mb-5">
  						<li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   <span class="fa fa-sign-out mr-3"></span> Keluar
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
  						</li>
  					</ul>
          </div>

  	      <div class="footer">
  	      	<p><small>&copy; Blue Choir {{ date('Y') }}</small></p> </div>
  	    </div>
    	</nav>

      <div id="content" class="p-3 p-md-4 p-lg-5" style="width: 100%; overflow-y: auto;">
        <main role="main">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom-custom">
            <h1 class="h2 main-content-title">Beranda Admin</h1>
          </div>

          <div class="row">
            <div class="col-12 col-md-6 col-xl-4 mb-4">
              <div class="card admin-card bg-primary text-white shadow-sm h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col">
                      <h5 class="card-title">Total Pengguna</h5>
                      <p class="card-text-value mb-0">{{ $totalPengguna ?? '0' }}</p>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-users icon-bg"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-4">
              <div class="card admin-card bg-success text-white shadow-sm h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col">
                      <h5 class="card-title">Pengguna Online</h5>
                      <small class="d-block mb-1" style="font-size: 0.8em;">(Dalam 5 menit terakhir)</small>
                      <p class="card-text-value mb-0">{{ $jumlahPenggunaOnline ?? '0' }}</p>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-wifi icon-bg"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-4">
             <h2 class="h4 mb-3 main-content-title">Pengguna Online Saat Ini</h2>
            <div class="table-users-container">
              <div class="table-responsive">
                <table class="table table-striped table-hover table-sm mb-0 table-users">
                  <thead>
                    <tr>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Status/Posisi</th>
                      <th>Terakhir Dilihat</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($penggunaOnlineList ?? [] as $pengguna)
                      <tr>
                        <td data-label="NIM">{{ $pengguna->nim ?? 'N/A' }}</td>
                        <td data-label="Nama">{{ $pengguna->namadepan ?? 'N/A' }} {{ $pengguna->namabelakang ?? '' }}</td>
                        <td data-label="Status/Posisi">
                          <span class="badge {{ ($pengguna->posisi ?? '') === 'NonBidang' ? 'bg-danger text-white' : 'bg-secondary text-white' }}">
                            {{ ($pengguna->posisi ?? '') === 'NonBidang' ? 'NonBidang' : ucfirst($pengguna->posisi ?? 'Tidak diketahui') }}
                          </span>
                        </td>
                        <td data-label="Terakhir Dilihat">{{ isset($pengguna->last_seen_at) && $pengguna->last_seen_at ? $pengguna->last_seen_at->locale('id')->diffForHumans() : 'Belum pernah' }}</td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="4" class="text-center py-4">Tidak ada pengguna yang aktif saat ini.</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
      </div> </div> <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script> 
  </body>
</html>
