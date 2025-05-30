<!doctype html>
<html lang="id">
  <head>
  	<title>Admin - Tambah Pengguna Baru</title>
     <link rel="icon" type="image/png" href="../../item/Logo.png">
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
      overflow-x: hidden;
    }
    .form-control,
    .form-select {
        border: 1px solid #ced4da;
    }
    .form-control:focus,
    .form-select:focus {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    .input-group-text {
        background-color: #e9ecef;
        border: 1px solid #ced4da;
        border-right: 0;
        padding: 0.375rem 0.75rem;
    }
    .input-group .form-control {
        border-left: 0;
    }
    .input-group > .form-control:not(:last-child) { border-top-right-radius: 0; border-bottom-right-radius: 0; }
    .input-group > .form-control:not(:first-child) { border-top-left-radius: 0; border-bottom-left-radius: 0; }
    .input-group > .input-group-text:not(:last-child) { border-top-right-radius: 0; border-bottom-right-radius: 0; }
    .input-group > .input-group-text:not(:first-child) { border-top-left-radius: 0; border-bottom-left-radius: 0; border-left: 0;}

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
    .btn-action-group .btn, .btn-action-group form {
        display: inline-block;
        margin-right: 5px;
        margin-bottom: 5px;
    }
    .btn-action-group .btn:last-child, .btn-action-group form:last-child {
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

    .zindexatas{ z-index: 100; }

    .main-content-title {
        color: #343a40;
        font-weight: 600;
    }
    .border-bottom-custom {
        border-bottom: 1px solid #dee2e6 !important;
    }

    #content {
      margin-left: 270px;
      width: calc(100% - 270px);
      min-height: 100vh;
      transition: all 0.3s;
      overflow-y: auto;
    }

    #sidebar.active {
      margin-left: -270px;
    }

    #sidebar.active ~ #content {
      margin-left: 0;
      width: 100%;
    }

    @media (max-width: 991.98px) {
      #content {
        margin-left: 0;
        width: 100%;
      }
      #sidebar.active {
        margin-left: 0;
      }
    }

    @media (max-width: 767.98px) {
        .main-content-title.h2 { font-size: 1.5rem; }
        .main-content-title.h4 { font-size: 1.1rem; }
        #content { padding: 1rem !important; }
        .table thead th, .table tbody td { font-size: 0.8rem; padding: 0.5rem; }
        #sidebar .logo span { display: block; font-size: 12px;}
        .btn-action-group .btn { margin-bottom: 5px; display: inline-block; }
    }
    @media (max-width: 575.98px) {
        .zindexmedium { z-index: 90; }
        .alert-icon { font-size: 1.25rem; margin-right: 0.75rem;}
        .alert-title { font-size: 1rem; }
        .alert-message { font-size: 0.9rem; }
        .d-flex.justify-content-between.align-items-center { flex-direction: column; align-items: flex-start !important;}
        .d-flex.justify-content-between.align-items-center .btn { margin-top: 10px; width:100%;}
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
          <h1><a href="{{ route('admin.beranda') }}" class="logo">Hallo Admin<span>&gt; Pengguna</span></a></h1>
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
                <li>
                    <a href="{{ route('admin.kegiatan.index') }}">Lihat Kegiatan</a>
                </li>
                <li>
                    <a href="{{ route('admin.kegiatan.create') }}">Tambah Kegiatan</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="{{ route('admin.partitur.index') }}"><span class="fa fa-file-text-o mr-3"></span> Partitur</a>
            </li>

            @php
                $isPenggunaActive = request()->routeIs('admin.pengguna.index') || request()->routeIs('admin.pengguna.create');
            @endphp
            <li class="{{ $isPenggunaActive ? 'active' : '' }}">
                <a href="#userSubmenu" data-toggle="collapse" aria-expanded="{{ $isPenggunaActive ? 'true' : 'false' }}" class="dropdown-toggle"><span class="fa fa-users mr-3"></span> Pengguna</a>
                <ul class="collapse list-unstyled {{ $isPenggunaActive ? 'show' : '' }}" id="userSubmenu">
                    <li class="{{ request()->routeIs('admin.pengguna.index') ? 'active-sub' : '' }}">
                        <a href="{{ route('admin.pengguna.index') }}">Lihat Pengguna</a>
                    </li>
                    <li class="{{ request()->routeIs('admin.pengguna.create') ? 'active-sub' : '' }}">
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

      <div id="content" class="p-3 p-md-4 p-lg-5">
        <div class="container-fluid">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom-custom">
                <h1 class="h2 main-content-title">Tambah Pengguna Baru</h1>
                <a href="{{ route('admin.pengguna.index') }}" class="btn btn-outline-secondary">
                   <i class="fa fa-arrow-left"></i> Kembali ke Daftar Pengguna
                </a>
            </div>

            <div class="card shadow-sm form-container table-container">
                <div class="card-header">Formulir Tambah Pengguna</div>
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

                    <form action="{{ route('admin.pengguna.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama_depan" class="form-label">Nama Depan <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control @error('nama_depan') is-invalid @enderror" id="nama_depan" name="nama_depan" value="{{ old('nama_depan') }}" required>
                                </div>
                                @error('nama_depan') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nama_belakang" class="form-label">Nama Belakang</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                                    <input type="text" class="form-control @error('nama_belakang') is-invalid @enderror" id="nama_belakang" name="nama_belakang" value="{{ old('nama_belakang') }}">
                                </div>
                                @error('nama_belakang') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
                                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim') }}" required>
                            </div>
                            @error('nim') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            @error('email') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                <input type="tel" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" value="{{ old('telepon') }}">
                            </div>
                            @error('telepon') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="posisi_suara" class="form-label">Posisi Suara</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-music"></i></span>
                                    <select class="form-select @error('posisi_suara') is-invalid @enderror" id="posisi_suara" name="posisi_suara">
                                        <option value="" selected>-- Pilih Posisi Suara --</option>
                                        <option value="Sopran 1" {{ old('posisi_suara') == 'Sopran 1' ? 'selected' : '' }}>Sopran 1</option>
                                        <option value="Sopran 2" {{ old('posisi_suara') == 'Sopran 2' ? 'selected' : '' }}>Sopran 2</option>
                                        <option value="Alto 1" {{ old('posisi_suara') == 'Alto 1' ? 'selected' : '' }}>Alto 1</option>
                                        <option value="Alto 2" {{ old('posisi_suara') == 'Alto 2' ? 'selected' : '' }}>Alto 2</option>
                                        <option value="Tenor 1" {{ old('posisi_suara') == 'Tenor 1' ? 'selected' : '' }}>Tenor 1</option>
                                        <option value="Tenor 2" {{ old('posisi_suara') == 'Tenor 2' ? 'selected' : '' }}>Tenor 2</option>
                                        <option value="Bass 1" {{ old('posisi_suara') == 'Bass 1' ? 'selected' : '' }}>Bass 1</option>
                                        <option value="Bass 2" {{ old('posisi_suara') == 'Bass 2' ? 'selected' : '' }}>Bass 2</option>
                                        <option value="Baritone" {{ old('posisi_suara') == 'Baritone' ? 'selected' : '' }}>Baritone</option>
                                    </select>
                                </div>
                                @error('posisi_suara') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="posisi" class="form-label">Posisi (Peran) <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                    <select class="form-select @error('posisi') is-invalid @enderror" id="posisi" name="posisi" required>
                                        <option value="" selected>-- Pilih Posisi/Peran --</option>
                                        <option value="Anggota" {{ old('posisi') == 'Anggota' ? 'selected' : '' }}>Anggota</option>
                                        <option value="Tim Aset & Perlengkapan" {{ old('posisi') == 'Tim Aset & Perlengkapan' ? 'selected' : '' }}>Tim Aset & Perlengkapan</option>
                                        <option value="NonBidang" {{ old('posisi') == 'NonBidang' ? 'selected' : '' }}>Admin (NonBidang)</option>
                                    </select>
                                </div>
                                @error('posisi') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                            </div>
                            @error('password') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Pengguna</button>
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