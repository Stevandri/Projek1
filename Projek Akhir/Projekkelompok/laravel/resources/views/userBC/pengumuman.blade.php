<!doctype html>
<html lang="id">
  <head>
    <title>Pengumuman - Blue Choir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- Path CSS Anda ../../css/style.css, berarti dari public root, pathnya css/style.css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body{ background-color: #DFEAFC; font-family: 'Poppins', sans-serif; }
        .profile-img { width: 100px; height: 100px; border-radius: 50%; object-fit: cover; }
        .card-status { font-size: 14px; font-weight: bold; padding: 5px 10px; border-radius: 10px; }

        /* Gaya custom alert Anda sudah ada di file */
        .custom-alert { border-left: 1px solid; border-radius: 5px; padding: 0.1rem 0.1rem; display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem; }
        .custom-alert-info { border-color: #0dcaf0; background-color: #e8f8fd; color: #0c5460; }
        .custom-alert-success { border-color: #198754; background-color: #e8fce8; color: #155724; }
        .custom-alert-danger { border-color: #dc3545; background-color: #fde8e8; color: #842029; }
        .custom-alert-warning { border-color: #ffc107; background-color: #fff8e5; color: #856404; }
        .alert-icon { display: inline-flex; align-items: center; margin-right: 0.5rem; font-size: 1.25rem; }
        .alert-content { flex: 1; margin-left: 0.5rem; }
        .alert-title { font-weight: 600; margin: 0; }
        .alert-message { top:0; font-size: 0.95rem; }
        .btn-close-custom { border: none; background: transparent; font-size: 1.25rem; cursor: pointer; line-height: 1; }
        .btn-close-custom:hover { color: #000; }

        /* z-index dan status dari file Anda */
        @media (max-width: 576px) { .zindexmedium { z-index: 90; } }
        .zindexatas{ z-index: 100; }
        .completed { background-color: #d4edda; color: #155724; }
        .in-progress { background-color: #f8d7da; color: #721c24; }

        /* Tambahan CSS untuk tampilan pengumuman (dari file Anda) */
        .announcement-card { background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .announcement-card .card-title { color: #0056b3; /* Warna biru yang lebih gelap untuk judul */ }
        .announcement-card .card-meta { font-size: 0.85rem; color: #6c757d; /* Abu-abu untuk meta data */ }
        .announcement-card .card-text-content { /* Tambahkan class ini untuk konten */
            color: #343a40; /* Abu-abu gelap untuk isi konten */
            line-height: 1.6;
            white-space: pre-wrap; /* Agar baris baru dari textarea ditampilkan */
        }
        .announcement-card .btn-link { color: #007bff; text-decoration: none; }
        .announcement-card .btn-link:hover { text-decoration: underline; }
        .announcement-sender { font-style: italic; font-size: 0.9rem; color: #555; margin-top: 10px; }
    </style>
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="min-vh-100">
            <div class="custom-menu zindexmedium"> {{-- --}}
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                  <i class="fa fa-bars"></i>
                  <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4 zindexatas"> {{-- --}}
                {{-- Tautan logo di file Anda: <a href="index.html" ...> --}}
                <h1><a href="{{ route('userbcdashboard') }}" class="logo">Blue Choir <span>&gt; Pengumuman</span></a></h1>
                <ul class="list-unstyled components mb-5">
                    <li><a href="{{ route('userbcdashboard') }}"><span class="fa fa-home mr-3"></span> Beranda</a></li>
                    {{-- Nama rute di file Anda 'pengumuman.index'. Sesuaikan jika nama rute di web.php berbeda --}}
                    <li class="{{ Route::is('pengumuman.index') ? 'active' : '' }}"> {{-- Atau Route::is('pengumuman.index') --}}
                        <a href="{{ route('pengumuman.index') }}"><span class="fa fa-info mr-3"></span> Pengumuman</a>
                    </li>
                    <li><a href="{{ route('kegiatan.index') }}"><span class="fa fa-rocket mr-3"></span> Kegiatan</a></li>
                    <li><a href="{{ route('partitur.index') }}"><span class="fa fa-file mr-3"></span> Partitur</a></li>
                    <li><a href="{{ route('profil.show') }}"><span class="fa fa-user mr-3"></span> Akun</a></li>
                </ul>
                <div class="footer ">
                    <ul class="list-unstyled components mb-5">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('user-logout-form').submit();">
                                <span class="fa fa-sticky-note mr-3"></span> Keluar
                            </a>
                            <form id="user-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="footer "><p>&copy; {{ date('Y') }} Blue Choir</p></div> {{-- (copyright diperbarui) --}}
            </div>
        </nav>

        {{-- ID #content dari file Anda sebelumnya tidak ada, saya tambahkan agar konsisten dengan template lain --}}
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="container-fluid"> {{-- Menggunakan container-fluid untuk lebar penuh --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="container my-5">
                            <h2 class="text-dark mb-4">Pengumuman Terbaru</h2>

                            {{-- Loop untuk menampilkan pengumuman dinamis --}}
                            @if(isset($announcements) && $announcements->count() > 0)
                                @foreach($announcements as $announcement)
                                <div class="card announcement-card mb-4 shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>{{ $announcement->subject }}</b></h5>
                                        <p class="card-meta mb-2">
                                            Dipublikasikan: {{ $announcement->publish_date->translatedFormat('l, d F Y') }}
                                            {{-- Jika publish_date juga menyimpan waktu: --}}
                                            {{-- {{ $announcement->publish_date->translatedFormat('l, d F Y H:i') }} WITA --}}
                                        </p>
                                        <div class="card-text-content">
                                            {{-- nl2br(e(...)) untuk menjaga format baris baru dan escape HTML --}}
                                            {!! nl2br(e($announcement->content)) !!}
                                        </div>
                                        <p class="announcement-sender mt-3">Dikirim oleh: <em>{{ $announcement->sender }}</em></p>
                                        {{-- Anda bisa menambahkan link "Baca Selengkapnya" jika kontennya panjang
                                             dan Anda punya halaman detail pengumuman --}}
                                        {{-- <a href="#" class="btn btn-link p-0 mt-2">Baca Selengkapnya</a> --}}
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <div class="alert alert-info custom-alert-info" role="alert"> {{-- (alert style) --}}
                                    <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                                    <div class="alert-content">
                                        <h6 class="alert-title">Informasi</h6>
                                        <p class="alert-message mb-0">Belum ada pengumuman saat ini.</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Path JS Anda ../../js/... berarti dari public root, pathnya js/... --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        (function($) { // Skrip dari template Anda untuk sidebar
            "use strict";
            var fullHeight = function() {
                $('.js-fullheight').css('height', $(window).height());
                $(window).resize(function(){
                    $('.js-fullheight').css('height', $(window).height());
                });
            };
            // fullHeight(); // Aktifkan jika Anda menggunakan class .js-fullheight

            $('#sidebarCollapse').on('click', function () {
              $('#sidebar').toggleClass('active');
            });
        })(jQuery);

        // Script untuk menutup custom alert jika ada tombol close
        document.querySelectorAll('.btn-close-custom').forEach(button => {
            button.addEventListener('click', function() {
                this.closest('.custom-alert').style.display = 'none';
            });
        });
    </script>
  </body>
</html>