<!doctype html>
<html lang="id">
  <head>
  	<title>Admin - Edit Pengumuman</title>
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
    textarea.resizable-textarea {
        min-height: 120px;
        resize: vertical;
    }
    .input-group-text {
        background-color: #e9ecef;
        border-right: 0;
    }
    .input-group .form-control {
        border-left: 0;
    }
    .input-group .form-control:focus {
        box-shadow: none !important;
        border-color: #86b7fe;
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
          <h1><a href="{{ route('admin.beranda') }}" class="logo">Hallo Admin<span>&gt; Edit Pengumuman</span></a></h1>
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
                <li class="{{ request()->routeIs('admin.announcement.create') ? 'active-sub' : '' }}">
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

      <div id="content" class="p-3 p-md-4 p-lg-5">
        <div class="container-fluid">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom-custom">
                <h1 class="h2 main-content-title">Edit Pengumuman</h1>
                <a href="{{ route('admin.announcement.index') }}" class="btn btn-outline-secondary">
                    <i class="fa fa-arrow-left"></i> Kembali ke Daftar
                </a>
            </div>

            <div class="card shadow-sm table-container">
                <div class="card-header">Formulir Edit Pengumuman</div>
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

                    <form action="{{ route('admin.announcement.update', $announcement->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subjek Pengumuman <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject', $announcement->subject) }}" required>
                            @error('subject') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Isi Pengumuman <span class="text-danger">*</span></label>
                            <textarea class="form-control resizable-textarea @error('content') is-invalid @enderror" id="content" name="content" rows="5" required>{{ old('content', $announcement->content) }}</textarea>
                            @error('content') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="sender" class="form-label">Pengirim <span class="text-danger">*</span></label>
                                 <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control @error('sender') is-invalid @enderror" id="sender" name="sender" value="{{ old('sender', $announcement->sender) }}" required>
                                </div>
                                @error('sender') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="publish_date" class="form-label">Tanggal Publish <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    <input type="date" class="form-control @error('publish_date') is-invalid @enderror" id="publish_date" name="publish_date" value="{{ old('publish_date', $announcement->publish_date ? ($announcement->publish_date instanceof \Carbon\Carbon ? $announcement->publish_date->format('Y-m-d') : \Carbon\Carbon::parse($announcement->publish_date)->format('Y-m-d')) : '') }}" required>
                                </div>
                                @error('publish_date') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Perubahan</button>
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