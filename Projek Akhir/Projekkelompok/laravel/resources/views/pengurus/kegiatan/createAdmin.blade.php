<!doctype html>
<html lang="id">
  <head>
  	<title>Admin - Tambah Kegiatan Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
      color: #495057;
    }
    .admin-card {
      border-radius: 10px; 
      border: none; 
      transition: all 0.3s ease-in-out;
      background-clip: border-box; 
    }
    .admin-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.1) !important;
    }
    .admin-card .card-body { padding: 1.25rem; }
    .admin-card .card-title {
      font-size: 0.85rem; 
      font-weight: 600; 
      text-transform: uppercase;
      margin-bottom: 0.5rem; 
    }
    .admin-card .card-text-value { font-size: 2rem; font-weight: 700; }
    .admin-card .icon-bg { font-size: 2.5rem; opacity: 0.5; }
    
    .table-container { 
        border-radius: 8px; 
        overflow: hidden; 
        box-shadow: 0 4px 6px rgba(0,0,0,0.05); 
    }
    .table thead th { 
        background-color: #343a40; 
        color: #ffffff; 
        font-weight: 600;
        border-bottom-width: 0; 
        font-size: 0.9rem;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        vertical-align: middle;
    }
    .table tbody td {
        font-size: 0.85rem; 
        vertical-align: middle; 
    }
    .table tbody tr:hover {
        background-color: #f1f1f1; 
    }
    .table .badge {
        font-size: 0.75em; 
        padding: 0.5em 0.75em;
    }
    .btn-action-group .btn {
        margin-right: 5px;
    }
    .btn-action-group .btn:last-child {
        margin-right: 0;
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
    
    .custom-alert .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5;
        padding: 0;
        background-color: transparent;
        border: 0;
    }
    .custom-alert .close:hover {
        color: #000;
        text-decoration: none;
        opacity: .75;
    }
    .btn-close-custom { /* Dikosongkan karena .close sudah menangani */ }

    .zindexmedium { z-index: 90; } 
    .zindexatas{ z-index: 100; }

    .main-content-title {
        color: #343a40;
        font-weight: 600;
    }
    .border-bottom-custom {
        border-bottom: 1px solid #dee2e6 !important;
    }

    .form-label .text-danger {
        font-size: 0.8em;
    }
    textarea.form-control {
        min-height: 100px; 
        resize: vertical; 
    }
    
    /* Penambahan border untuk form-control dan form-select */
    .form-control, .form-select {
        border: 1px solid #ced4da; /* Warna border standar Bootstrap */
    }
    .form-control:focus, .form-select:focus {
        border-color: #86b7fe; /* Warna border saat fokus standar Bootstrap */
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25); /* Shadow saat fokus standar Bootstrap */
    }

    .input-group-text { 
        background-color: #e9ecef;
        border: 1px solid #ced4da; /* Border untuk input-group-text */
        border-right: 0; 
        padding: 0.375rem 0.75rem;
    }
    .input-group .form-control {
        border-left: 0; /* Hilangkan border kiri input jika ada ikon di kiri */
    }
    /* Jika ada input-group dengan ikon di kanan */
    .input-group > .form-control:not(:last-child) { border-top-right-radius: 0; border-bottom-right-radius: 0; }
    .input-group > .form-control:not(:first-child) { border-top-left-radius: 0; border-bottom-left-radius: 0; }
    .input-group > .input-group-text:not(:last-child) { border-top-right-radius: 0; border-bottom-right-radius: 0; }
    .input-group > .input-group-text:not(:first-child) { border-top-left-radius: 0; border-bottom-left-radius: 0; border-left: 0;}


    @media (max-width: 767.98px) { 
        .main-content-title.h2 { font-size: 1.5rem; }
        .main-content-title.h4 { font-size: 1.1rem; }
        #content { padding: 1rem !important; }
        .table thead th, .table tbody td { font-size: 0.8rem; padding: 0.5rem; }
        #sidebar .logo span { display: block; font-size: 12px;} 
        .btn-action-group .btn { margin-bottom: 5px; display: inline-block; } 
    }
    @media (max-width: 575.98px) { 
        .alert-icon { font-size: 1.25rem; margin-right: 0.75rem;}
        .alert-title { font-size: 1rem; }
        .alert-message { font-size: 0.9rem; }
        .d-flex.justify-content-between.align-items-center { flex-direction: column; align-items: flex-start !important;}
        .d-flex.justify-content-between.align-items-center .btn { margin-top: 10px; width:100%;}
        .d-flex.justify-content-end .btn { width:100%;} 
    }
  </style>
  <body>
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar" class="min-vh-100"> 
        <div class="custom-menu zindexmedium"> 
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
        </div>
  			<div class="p-4 zindexatas"> 
          <h1><a href="{{ route('admin.beranda') }}" class="logo">Hallo Admin<span>&gt; Tambah Kegiatan</span></a></h1> 
          <ul class="list-unstyled components mb-5">
            <li class="{{ request()->routeIs('admin.beranda') ? 'active' : '' }}"> 
              <a href="{{ route('admin.beranda') }}"><span class="fa fa-home mr-3"></span> Beranda</a>
            </li>
            
            @php
                $isAnnouncementActive = request()->routeIs('admin.announcement.index') || request()->routeIs('admin.announcement.create') || request()->routeIs('admin.announcement.edit');
            @endphp
            <li class="{{ $isAnnouncementActive ? 'active' : '' }}">
              <a href="#announcementSubmenu" data-toggle="collapse" aria-expanded="{{ $isAnnouncementActive ? 'true' : 'false' }}" class="dropdown-toggle"><span class="fa fa-bullhorn mr-3"></span> Pengumuman</a>
              <ul class="collapse list-unstyled {{ $isAnnouncementActive ? 'show' : '' }}" id="announcementSubmenu">
                <li>
                    <a href="{{ route('admin.announcement.index') }}">Lihat Pengumuman</a>
                </li>
                <li>
                    <a href="{{ route('admin.announcement.create') }}">Buat Pengumuman</a>
                </li>
              </ul>
            </li>

            @php
                $isKegiatanActive = request()->routeIs('admin.kegiatan.index') || request()->routeIs('admin.kegiatan.create') || request()->routeIs('admin.kegiatan.edit');
            @endphp
            <li class="{{ $isKegiatanActive ? 'active' : '' }}">
              <a href="#kegiatanSubmenu" data-toggle="collapse" aria-expanded="{{ $isKegiatanActive ? 'true' : 'false' }}" class="dropdown-toggle"><span class="fa fa-rocket mr-3"></span> Kegiatan</a>
              <ul class="collapse list-unstyled {{ $isKegiatanActive ? 'show' : '' }}" id="kegiatanSubmenu">
                <li class="{{ request()->routeIs('admin.kegiatan.index') ? 'active-sub' : '' }}">
                    <a href="{{ route('admin.kegiatan.index') }}">Lihat Kegiatan</a>
                </li>
                <li class="{{ request()->routeIs('admin.kegiatan.create') ? 'active-sub' : '' }}">
                    <a href="{{ route('admin.kegiatan.create') }}">Tambah Kegiatan</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#"><span class="fa fa-file-text-o mr-3"></span> Partitur</a>
            </li>

            @php
                $isPenggunaActive = request()->routeIs('admin.pengguna.index') || request()->routeIs('admin.pengguna.create');
            @endphp
            <li class="{{ $isPenggunaActive ? 'active' : '' }}">
                <a href="#userSubmenu" data-toggle="collapse" aria-expanded="{{ $isPenggunaActive ? 'true' : 'false' }}" class="dropdown-toggle"><span class="fa fa-users mr-3"></span> Pengguna</a>
                <ul class="collapse list-unstyled {{ $isPenggunaActive ? 'show' : '' }}" id="userSubmenu">
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
  	      	<p><small>&copy; Blue Choir {{ date('Y') }}</small></p> 
          </div>
  	    </div>
    	</nav>

      <div id="content" class="p-3 p-md-4 p-lg-5" style="width: 100%; overflow-y: auto;">
        <div class="container-fluid">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom-custom">
                <h1 class="h2 main-content-title">Tambah Kegiatan Baru</h1>
                <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-outline-secondary">
                   <i class="fa fa-arrow-left"></i> Kembali ke Daftar
                </a>
            </div>

            <div class="card shadow-sm table-container">
                <div class="card-header">Formulir Tambah Kegiatan</div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show custom-alert custom-alert-danger" role="alert">
                            <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
                            <div class="alert-content">
                                <strong class="alert-title">Validasi Gagal!</strong>
                                <ul class="mb-0 ps-3 alert-message" style="list-style-type: disc;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <button type="button" class="close btn-close-custom" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{ route('admin.kegiatan.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_kegiatan" class="form-label">Nama Kegiatan <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-bookmark"></i></span>
                                <input type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" id="nama_kegiatan" name="nama_kegiatan" value="{{ old('nama_kegiatan') }}" required>
                            </div>
                            @error('nama_kegiatan') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi_kegiatan" class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('deskripsi_kegiatan') is-invalid @enderror" id="deskripsi_kegiatan" name="deskripsi_kegiatan" rows="4">{{ old('deskripsi_kegiatan') }}</textarea>
                            @error('deskripsi_kegiatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="waktu_mulai" class="form-label">Waktu Mulai <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-calendar-check-o"></i></span>
                                    <input type="datetime-local" class="form-control @error('waktu_mulai') is-invalid @enderror" id="waktu_mulai" name="waktu_mulai" value="{{ old('waktu_mulai', now()->format('Y-m-d\TH:i')) }}" required>
                                </div>
                                @error('waktu_mulai') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="waktu_selesai" class="form-label">Waktu Selesai (Opsional)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-calendar-times-o"></i></span>
                                    <input type="datetime-local" class="form-control @error('waktu_selesai') is-invalid @enderror" id="waktu_selesai" name="waktu_selesai" value="{{ old('waktu_selesai') }}">
                                </div>
                                @error('waktu_selesai') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ old('lokasi') }}">
                            </div>
                            @error('lokasi') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status Kegiatan <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-check-square-o"></i></span>
                                <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                    <option value="akan datang" {{ old('status', 'akan datang') == 'akan datang' ? 'selected' : '' }}>Akan Datang</option>
                                    <option value="berlangsung" {{ old('status') == 'berlangsung' ? 'selected' : '' }}>Sedang Berlangsung</option>
                                    <option value="selesai" {{ old('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                    <option value="dibatalkan" {{ old('status') == 'dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
                                </select>
                            </div>
                            @error('status') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Kegiatan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div> 
    </div> 

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('js/main.js') }}"></script> 
  </body>
</html>
