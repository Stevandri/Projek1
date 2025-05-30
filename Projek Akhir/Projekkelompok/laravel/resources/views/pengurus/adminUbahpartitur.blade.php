<!doctype html>
<html lang="id">
  <head>
  	<title>Admin - Ubah Partitur</title>
     <link rel="icon" type="image/png" href="../../../item/Logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
            color: #495057;
            overflow-x: hidden;
        }
        .main-content-title {
            color: #343a40;
            font-weight: 600;
        }
        .border-bottom-custom {
            border-bottom: 1px solid #dee2e6 !important;
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

        #sidebar .logo span { display: block; font-size: 12px;}
        .zindexatas{ z-index: 100; }

        #sidebar ul.collapse li.active-sub > a { color: #28a745; font-weight: bold; background: rgba(0,0,0,0.05); }
        #sidebar ul li a[aria-expanded="true"] { color: #4e73df; }

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
        input[type="file"].form-control {
            border-left: 1px solid #ced4da;
        }
        input[type="file"].form-control:focus {
            border-left: 1px solid #86b7fe;
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
            #content { padding: 1rem !important; }
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
  </head>
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
                <h1><a href="{{ route('admin.beranda') }}" class="logo">Hallo Admin<span>&gt; Partitur &gt; Ubah</span></a></h1>
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
                        <li class="{{ request()->routeIs('admin.announcement.index') ? 'active-sub' : '' }}">
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
                        <li class="{{ request()->routeIs('admin.kegiatan.index') ? 'active-sub' : '' }}">
                            <a href="{{ route('admin.kegiatan.index') }}">Lihat Kegiatan</a>
                        </li>
                        <li class="{{ request()->routeIs('admin.kegiatan.create') ? 'active-sub' : '' }}">
                            <a href="{{ route('admin.kegiatan.create') }}">Tambah Kegiatan</a>
                        </li>
                      </ul>
                    </li>

                    @php
                        $isPartiturActive = request()->routeIs('admin.partitur.index') || request()->routeIs('admin.partitur.edit');
                    @endphp
                    <li class="{{ $isPartiturActive ? 'active' : '' }}">
                      <a href="{{ route('admin.partitur.index') }}">
                        <span class="fa fa-file-text-o mr-3"></span> Partitur
                      </a>
                    </li>

                    @php
                        $isPenggunaActive = request()->routeIs('admin.pengguna.index') || request()->routeIs('admin.pengguna.create') || request()->routeIs('admin.pengguna.edit');
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
                               onclick="event.preventDefault(); document.getElementById('logout-form-adminubahpartitur').submit();">
                               <span class="fa fa-sign-out mr-3"></span> Keluar
                            </a>
                            <form id="logout-form-adminubahpartitur" action="{{ route('logout') }}" method="POST" style="display: none;">
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
                    <h1 class="h2 main-content-title">Ubah Data Partitur</h1>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show custom-alert custom-alert-success" role="alert">
                        <div class="alert-icon"><i class="fa fa-check-circle"></i></div>
                        <div class="alert-content">
                            <strong class="alert-title">Berhasil!</strong>
                            <span class="alert-message">{{ session('success') }}</span>
                        </div>
                        <button type="button" class="close btn-close-custom" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if(session('error'))
                     <div class="alert alert-danger alert-dismissible fade show custom-alert custom-alert-danger" role="alert">
                        <div class="alert-icon"><i class="fa fa-times-circle"></i></div>
                        <div class="alert-content">
                            <strong class="alert-title">Gagal!</strong>
                            <span class="alert-message">{{ session('error') }}</span>
                        </div>
                         <button type="button" class="close btn-close-custom" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if ($errors->any())
                     <div class="alert alert-danger custom-alert custom-alert-danger alert-dismissible fade show" role="alert">
                        <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
                        <div class="alert-content">
                            <strong class="alert-title">Validasi Gagal!</strong>
                            <ul class="alert-message mb-0 ps-3" style="list-style-type: disc;">
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

                <div class="card shadow-sm form-container">
                    <div class="card-header">
                        <h5 class="mb-0">Formulir Ubah Partitur</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.partitur.update', $partitur->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul Partitur</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-music"></i></span>
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul', $partitur->judul) }}" required>
                                </div>
                                @error('judul')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pencipta" class="form-label">Pencipta</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control @error('pencipta') is-invalid @enderror" id="pencipta" name="pencipta" value="{{ old('pencipta', $partitur->pencipta) }}" required>
                                </div>
                                @error('pencipta')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="partitur_file_ubah" class="form-label">File Partitur (PDF)</label><br>
                                @if ($partitur->file_path)
                                    <small class="form-text text-muted d-block mb-1">File saat ini:
                                        <a href="{{ Storage::url($partitur->file_path) }}" target="_blank">{{ basename($partitur->file_path) }}</a>
                                    </small>
                                @endif
                                <small class="form-text text-info d-block mb-1">Kosongkan jika tidak ingin mengubah file partitur.</small>
                                <input type="file" class="form-control @error('partitur_file_ubah') is-invalid @enderror" id="partitur_file_ubah" name="partitur_file_ubah" accept=".pdf" onchange="tampilkanJudulFile('partitur_file_ubah', 'judulFilePartiturUbah')">
                                <small id="judulFilePartiturUbah" class="form-text text-muted"></small>
                                 @error('partitur_file_ubah')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="sampul_file_ubah" class="form-label">Gambar Sampul (JPG/PNG)</label><br>
                                @if ($partitur->sampul_path)
                                    <img src="{{ Storage::url($partitur->sampul_path) }}" alt="Sampul saat ini" width="100" style="height: auto; max-height: 120px; object-fit: contain;" class="mt-1 mb-2 d-block img-thumbnail">
                                @endif
                                <small class="form-text text-info d-block mb-1">Kosongkan jika tidak ingin mengubah gambar sampul.</small>
                                <input type="file" class="form-control @error('sampul_file_ubah') is-invalid @enderror" id="sampul_file_ubah" name="sampul_file_ubah" accept="image/jpeg,image/png,image/jpg,image/gif" onchange="tampilkanJudulFile('sampul_file_ubah', 'judulFileSampulUbah')">
                                <small id="judulFileSampulUbah" class="form-text text-muted"></small>
                                @error('sampul_file_ubah')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Perubahan</button>
                            <a href="{{ route('admin.partitur.index') }}" class="btn btn-secondary">Batal</a>
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
    <script>
        function tampilkanJudulFile(inputId, smallId) {
            const input = document.getElementById(inputId);
            const judulFileDisplay = document.getElementById(smallId);

            if (input.files.length > 0) {
                judulFileDisplay.textContent = "File baru akan diunggah: " + input.files[0].name;
            } else {
                judulFileDisplay.textContent = "";
            }
        }
    </script>
  </body>
</html>