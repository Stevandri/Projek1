<!doctype html>
<html lang="en">
  <head>
    <title>Edit Profil</title> <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <link rel="stylesheet" href="{{ asset('css/style.css') }}"> </head>
  <style>
    body {
      background-color: #DFEAFC; /* Match profilBC */
      overflow-x: hidden; /* Mencegah scroll horizontal saat sidebar transisi */
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Match profilBC */
      margin-top: 30px; /* Match profilBC */
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    input[type="file"] {
      display: none;
    }
    .custom-file-upload {
      display: inline-block;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
      background-color: #007bff;
      color: white;
    }
    .custom-file-upload:hover {
      background-color: #0056b3;
    }

    .profile-img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      display: block;
      margin-left: auto;
      margin-right: auto;
      border: 2px solid #eee; /* Match profilBC */
      margin-bottom: 15px; /* Match profilBC */
    }

    /* Custom Alert Styles from profilBC */
    .custom-alert {
      border-left: 1px solid;
      border-radius: 5px;
      padding: 0.1rem 0.1rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 1rem;
    }
    .custom-alert-info { border-color: #0dcaf0; background-color: #e8f8fd; color: #0c5460; }
    .custom-alert-success { border-color: #198754; background-color: #e8fce8; color: #155724; }
    .custom-alert-danger { border-color: #dc3545; background-color: #fde8e8; color: #842029; }
    .custom-alert-warning { border-color: #ffc107; background-color: #fff8e5; color: #856404; }
    .alert-icon { display: inline-flex; align-items: center; margin-right: 0.5rem; font-size: 1.25rem; }
    .alert-content { flex: 1; margin-left: 0.5rem; }
    .alert-title { font-weight: 600; margin: 0; }
    .alert-message { top: 0; font-size: 0.95rem; margin:0; padding: 0; list-style: none;}
    .btn-close-custom { border: none; background: transparent; font-size: 1.25rem; cursor: pointer; line-height: 1; }
    .btn-close-custom:hover { color: #000; }

    /* --- CSS BARU UNTUK LAYOUT RESPONSIF SIDEBAR --- */
    #content {
      margin-left: 270px; /* Lebar sidebar */
      width: calc(100% - 270px); /* Sisa lebar */
      min-height: 100vh;
      transition: all 0.3s;
      overflow-y: auto; /* Dari style inline sebelumnya */
      /* Padding diatur oleh kelas p-3 p-md-4 pada elemen HTML */
    }

    #sidebar.active {
      margin-left: -270px; /* Sembunyikan sidebar */
    }

    #sidebar.active ~ #content {
      margin-left: 0;
      width: 100%;
    }

    @media (max-width: 991.98px) { /* Tablet dan di bawahnya */
      #content {
        margin-left: 0;
        width: 100%;
      }
      #sidebar.active {
        margin-left: 0; /* Sidebar muncul sebagai overlay */
      }
    }
    /* --- AKHIR CSS BARU --- */

    /* Responsive adjustments from profilBC (dipertahankan) */
    @media (max-width: 767.98px) {
      .containerku { /* Kelas ini digunakan di div pembungkus form */
        padding-left: 15px;
        padding-right: 15px;
      }
      .card-body { /* Menargetkan card-body di dalam form edit */
        padding: 1.5rem !important;
      }
      .profile-img { /* Penyesuaian untuk gambar profil di form edit */
        width: 80px;
        height: 80px;
      }
      .custom-file-upload { /* Penyesuaian untuk tombol upload */
        width: 100%;
        text-align: center;
        margin-top: 1rem !important;
      }
      .form-label {
        margin-bottom: 0.25rem;
      }
      .form-control, .form-select {
        margin-bottom: 0.75rem;
      }
    }

    /* z-index yang ada di file ini dipertahankan */
    .zindexmedium { z-index: 1030; } /* Untuk custom-menu (tombol sidebar) */
    .zindexatas { z-index: 100; }  /* Untuk konten di dalam sidebar */

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
          <h1><a href="{{ route('userbcdashboard') }}" class="logo">Blue Choir <span>> Edit Akun</span></a></h1> <ul class="list-unstyled components mb-5">
            <li>
              <a href="{{ route('userbcdashboard') }}"><span class="fa fa-home mr-3"></span> Beranda</a>
            </li>
            <li>
              <a href="{{ route('pengumuman.index') }}"><span class="fa fa-info-circle mr-3"></span> Pengumuman</a>
            </li>
            <li>
              <a href="{{ route('kegiatan.index') }}"><span class="fa fa-calendar mr-3"></span> Kegiatan</a>
            </li>
            <li>
              <a href="{{ route('partitur.index') }}"><span class="fa fa-music mr-3"></span> Partitur</a>
            </li>
            <li class="active">
              <a href="{{ route('profil.show') }}"><span class="fa fa-user mr-3"></span> Akun</a>
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

      {{-- Menghapus style inline dari #content --}}
      <div id="content" class="p-3 p-md-4">
        <div class="container containerku">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
              <div class="card shadow">
                <div class="card-body p-4">
                  <h2 class="card-title text-center mb-4">Edit Profil Saya</h2>

                  @if(session('success'))
                    <div class="custom-alert custom-alert-success alert-dismissible fade show" role="alert">
                        <div class="alert-icon"><i class="fa fa-check-circle"></i></div>
                        <div class="alert-content">
                            <p class="alert-title">Sukses!</p>
                            <p class="alert-message">{{ session('success') }}</p>
                        </div>
                        <button type="button" class="btn-close-custom" data-bs-dismiss="alert" aria-label="Close" onclick="this.parentElement.style.display='none';">&times;</button>
                    </div>
                  @endif

                  @if ($errors->any())
                    <div class="custom-alert custom-alert-danger alert-dismissible fade show" role="alert">
                        <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
                        <div class="alert-content">
                            <p class="alert-title">Error!</p>
                            <ul class="alert-message mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <button type="button" class="btn-close-custom" data-bs-dismiss="alert" aria-label="Close" onclick="this.parentElement.style.display='none';">&times;</button>
                    </div>
                  @endif

                  <form id="profile-form" action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf <div class="text-center mb-4">
                      <img id="profile-picture" src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('item/profildefault.png') }}" alt="Foto Profil {{ $user->namadepan }}" class="profile-img">
                      <label for="photo-upload" class="custom-file-upload mt-2">
                        Ubah Foto
                      </label>
                      <input type="file" id="photo-upload" name="profile_picture" accept="image/*">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="namadepan" class="form-label">Nama Depan</label>
                            <input type="text" class="form-control" id="namadepan" name="namadepan" value="{{ old('namadepan', $user->namadepan) }}" style="border: 1px solid #ced4da;" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namabelakang" class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control" id="namabelakang" name="namabelakang" value="{{ old('namabelakang', $user->namabelakang) }}" style="border: 1px solid #ced4da;" required>
                        </div>
                    </div>

                    <div class="mb-3">
                      <label for="posisi-suara" class="form-label">Posisi Suara</label>
                      <select class="form-select form-control" id="posisi-suara" name="posisi_suara" style="border: 1px solid #ced4da;">
                        <option value="" {{ old('posisi_suara', $user->posisi_suara ?? '') == '' ? 'selected' : '' }}>Pilih Posisi Suara (Opsional)</option>
                        <option value="Sopran 1" {{ old('posisi_suara', $user->posisi_suara ?? '') == 'Sopran 1' ? 'selected' : '' }}>Sopran 1</option>
                        <option value="Sopran 2" {{ old('posisi_suara', $user->posisi_suara ?? '') == 'Sopran 2' ? 'selected' : '' }}>Sopran 2</option>
                        <option value="Alto 1" {{ old('posisi_suara', $user->posisi_suara ?? '') == 'Alto 1' ? 'selected' : '' }}>Alto 1</option>
                        <option value="Alto 2" {{ old('posisi_suara', $user->posisi_suara ?? '') == 'Alto 2' ? 'selected' : '' }}>Alto 2</option>
                        <option value="Tenor 1" {{ old('posisi_suara', $user->posisi_suara ?? '') == 'Tenor 1' ? 'selected' : '' }}>Tenor 1</option>
                        <option value="Tenor 2" {{ old('posisi_suara', $user->posisi_suara ?? '') == 'Tenor 2' ? 'selected' : '' }}>Tenor 2</option>
                        <option value="Bass 1" {{ old('posisi_suara', $user->posisi_suara ?? '') == 'Bass 1' ? 'selected' : '' }}>Bass 1</option>
                        <option value="Bass 2" {{ old('posisi_suara', $user->posisi_suara ?? '') == 'Bass 2' ? 'selected' : '' }}>Bass 2</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <label for="nim" class="form-label">NIM</label>
                      <input type="text" class="form-control" id="nim" name="nim" value="{{ old('nim', $user->nim) }}" style="border: 1px solid #ced4da;" required>
                    </div>

                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" style="border: 1px solid #ced4da;" required>
                    </div>

                    <div class="mb-3">
                      <label for="telepon" class="form-label">Nomor Telepon</label>
                      <input type="tel" class="form-control" id="telepon" name="telepon" value="{{ old('telepon', $user->telepon) }}" placeholder="Contoh: 08123456789 (Opsional)" style="border: 1px solid #ced4da;">
                    </div>

                    <div class="d-grid mt-4"> <button type="submit" class="btn btn-primary btn-lg">Simpan Perubahan</button> </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script> <script src="{{ asset('js/popper.js') }}"></script> <script src="{{ asset('js/bootstrap.min.js') }}"></script> <script src="{{ asset('js/main.js') }}"></script> <script>
      $(document).ready(function() {
        // Script untuk preview gambar
        $('#photo-upload').on('change', function(event) {
          var reader = new FileReader();
          reader.onload = function() {
            $('#profile-picture').attr('src', reader.result);
          }
          if (event.target.files.length > 0) { // Cek apakah file dipilih
            reader.readAsDataURL(event.target.files[0]);
          }
        });

        // Script untuk sidebar toggle (jika main.js belum menanganinya atau ingin memastikan)
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
      });
    </script>
  </body>
</html>