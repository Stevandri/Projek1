<!doctype html>
<html lang="en">
  <head>
    <title>Akun Saya</title> <meta charset="utf-8">
     <link rel="icon" type="image/png" href="item/Logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> </head>
  <style>
    body {
      background-color: #DFEAFC;
      overflow-x: hidden;
    }
    .profile-img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
    }
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
    .alert-content { flex: 1; margin-left: 0.5rem;}
    .alert-title { font-weight: 600; margin: 0; }
    .alert-message { top: 0; font-size: 0.95rem; margin: 0; }

    .btn-close-custom { border: none; background: transparent; font-size: 1.25rem; cursor: pointer; line-height: 1; }
    .btn-close-custom:hover { color: #000; }

    .profile-card {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-top: 30px;
      text-align: center;
    }
    .profile-avatar {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
      border: 2px solid #eee;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .profile-name { font-size: 24px; font-weight: 600; margin-bottom: 5px; color: #333; }
    .profile-username { color: #657786; margin-bottom: 15px; font-size: 16px; }
    .profile-bio { font-size: 16px; margin-bottom: 20px; color: #333; }
    .profile-info-item { display: flex; align-items: center; margin-bottom: 10px; color: #555; font-size: 15px; padding: 0 10px; justify-content: center; }
    .profile-info-item i { margin-right: 10px; color: #657786; width: 20px; text-align: center;}
    .profile-text-link { color: #1DA1F2; text-decoration: none; }
    .profile-text-link:hover { text-decoration: underline; }

    .zindexatas { z-index: 100; }

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
      #content { padding: 1rem !important; }
      .profile-card { padding: 15px; margin-top: 20px; }
      .profile-avatar { width: 80px; height: 80px; }
      .profile-name { font-size: 20px; }
      .profile-username, .profile-bio, .profile-info-item { font-size: 14px; }
      .profile-info-item { justify-content: flex-start; padding: 0;}
    }

    @media (max-width: 575.98px) {
      .zindexmedium { z-index: 90; }
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
          <h1><a href="{{ route('userbcdashboard') }}" class="logo">Blue Choir <span>> Akun</span></a></h1> <ul class="list-unstyled components mb-5">
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

      <div id="content" class="p-3 p-md-4">
        <div class="container-fluid">
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

          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
              <div class="profile-card">
                <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('item/profildefault.png') }}"
                     alt="Foto Profil {{ Auth::user()->namadepan }}"
                     class="profile-avatar">

                <div class="profile-name">
                  {{ Auth::user()->namadepan . ' ' . Auth::user()->namabelakang }}
                </div>
                <div class="profile-username">
                  NIM: {{ Auth::user()->nim ?? 'Belum diisi' }} </div>

                <div class="profile-bio">
                  <strong>Status: </strong>{{ Auth::user()->status ?? 'Tidak ada status' }}<br>
                  <strong>Posisi: </strong>{{ Auth::user()->posisi ?? 'Tidak ada posisi' }}
                </div>

                <hr style="border-top: 1px solid #eee; margin: 20px auto; width: 80%;">

                <div class="profile-info">
                  <div class="profile-info-item">
                    <i class="fa fa-music"></i>
                    <span>Posisi Suara: {{ Auth::user()->posisi_suara ?? 'Tidak ditentukan' }}</span>
                  </div>
                  <div class="profile-info-item">
                    <i class="fa fa-envelope"></i>
                    <span>Email: {{ Auth::user()->email ?? 'Tidak ada email' }}</span>
                  </div>
                  <div class="profile-info-item">
                    <i class="fa fa-phone"></i>
                    <span>No. Telepon: {{ Auth::user()->telepon ?? 'Tidak ada nomor' }}</span>
                  </div>
                  <div class="profile-info-item">
                    <i class="fa fa-calendar-o"></i>
                    <span>Bergabung: {{ Auth::user()->created_at ? Auth::user()->created_at->translatedFormat('F Y') : 'Tidak diketahui' }}</span>
                  </div>
                </div>

                <a href="{{ route('profil.edit') }}" class="btn btn-primary mt-4 w-75">
                    <i class="fa fa-pencil"></i> Edit Profil
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script> <script src="{{ asset('js/popper.js') }}"></script> <script src="{{ asset('js/bootstrap.min.js') }}"></script> <script src="{{ asset('js/main.js') }}"></script> <script>
      $(document).ready(function() {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
      });
    </script>
  </body>
</html>