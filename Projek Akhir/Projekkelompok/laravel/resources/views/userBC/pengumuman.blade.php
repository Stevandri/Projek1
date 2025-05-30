<!doctype html>
<html lang="id">
  <head>
    <title>Pengumuman - Blue Choir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
      body {
        background-color: #DFEAFC;
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden; /* Mencegah scroll horizontal saat sidebar transisi */
      }
      /* Gaya yang sudah ada dan spesifik untuk halaman ini dipertahankan */
      .profile-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
      }
      .card-status {
        font-size: 14px;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 10px;
      }

      .custom-alert {
        border-left-width: 4px;
        border-radius: 8px;
        padding: 0.6rem 0.8rem;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 0.4rem;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
      }
      .custom-alert-info { border-left-color: #0dcaf0; background-color: #e8f8fd; color: #0c5460; }
      .custom-alert-success { border-left-color: #198754; background-color: #e8fce8; color: #155724; }
      .custom-alert-danger { border-left-color: #dc3545; background-color: #fde8e8; color: #842029; }
      .custom-alert-warning { border-left-color: #ffc107; background-color: #fff8e5; color: #856404; }

      .alert-icon {
        margin-right: 0.3rem;
        font-size: 0.9rem;
      }
      .alert-content {
        flex: 1;
        margin-left: 0.1rem;
      }
      .alert-title {
        font-weight: 600;
        margin-bottom: 0.05rem;
        font-size: 0.85rem;
      }
      .alert-message {
        font-size: 0.75rem;
        line-height: 1.1;
        margin-bottom: 0;
      }
      .btn-close-custom {
        border: none;
        background: transparent;
        font-size: 1.25rem;
        cursor: pointer;
        line-height: 1;
        color: #777;
        opacity: 0.7;
      }
      .btn-close-custom:hover {
        color: #000;
        opacity: 1;
      }

      .completed { background-color: #d4edda; color: #155724; }
      .in-progress { background-color: #f8d7da; color: #721c24; }

      .announcement-card {
        background-color: #fff;
        border: none;
        border-radius: 10px;
        box-shadow: 0 1px 4px rgba(0,0,0,0.08);
        margin-bottom: 0.6rem;
      }
      .announcement-card .card-body {
        padding: 0.7rem;
      }
      .announcement-card .card-title {
        color: #0056b3;
        font-weight: 600;
        margin-bottom: 0.2rem;
        font-size: 1.1rem;
      }
      .announcement-card .card-meta {
        font-size: 0.7rem;
        color: #6c757d;
        margin-bottom: 0.4rem;
      }
      .announcement-card .card-text-content {
        color: #343a40;
        line-height: 1.3;
        white-space: pre-wrap;
        font-size: 0.8rem;
        margin-bottom: 0.3rem;
      }
      .announcement-card .btn-link {
        color: #007bff;
        text-decoration: none;
        font-size: 0.9rem;
        padding: 0.25rem 0;
      }
      .announcement-card .btn-link:hover { text-decoration: underline; }
      .announcement-sender {
        font-style: italic;
        font-size: 0.75rem;
        color: #555;
        margin-top: 0.3rem;
        text-align: left;
      }

      /* Penyesuaian gaya #content yang sudah ada */
      #content h2.text-dark.mb-4 { /* Sebelumnya #content h2.text-dark.mb-4 */
        color: #343a40;
        font-weight: 600;
        margin-bottom: 0.8rem;
      }
      #content .container.my-4 { /* Sebelumnya #content .container.my-4 */
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
        padding: 0;
      }

      /* --- CSS BARU UNTUK LAYOUT RESPONSIF SIDEBAR --- */
      #content {
        margin-left: 270px; /* Lebar sidebar */
        width: calc(100% - 270px); /* Sisa lebar */
        min-height: 100vh;
        transition: all 0.3s;
        overflow-y: auto; /* Dipertahankan dari gaya inline sebelumnya */
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

      @media (max-width: 575.98px) { /* Smartphone (xs) */
        .zindexmedium { z-index: 90; }
        /* Padding #content (p-3 = 1rem) dari kelas HTML dianggap cukup untuk smartphone,
           tidak perlu override spesifik di sini kecuali diinginkan lebih kecil/besar.
           Contoh jika ingin padding horizontal 0.75rem:
           #content {
             padding-left: 0.75rem !important;
             padding-right: 0.75rem !important;
           }
        */
      }
      .zindexatas{ z-index: 100; }
      /* --- AKHIR CSS BARU --- */

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
          <h1><a href="{{ route('userbcdashboard') }}" class="logo">Blue Choir <span>&gt; Pengumuman</span></a></h1>
          <ul class="list-unstyled components mb-5">
            <li><a href="{{ route('userbcdashboard') }}"><span class="fa fa-home mr-3"></span> Beranda</a></li>
            <li class="{{ Route::is('pengumuman.index') ? 'active' : '' }}">
              <a href="{{ route('pengumuman.index') }}"><span class="fa fa-info-circle mr-3"></span> Pengumuman</a>
            </li>
            <li><a href="{{ route('kegiatan.index') }}"><span class="fa fa-calendar mr-3"></span> Kegiatan</a></li>
            <li><a href="{{ route('partitur.index') }}"><span class="fa fa-music mr-3"></span> Partitur</a></li>
            <li><a href="{{ route('profil.show') }}"><span class="fa fa-user mr-3"></span> Akun</a></li>
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

      {{-- Menghapus style inline pada #content karena sudah diatur di CSS internal & Bootstrap --}}
      <div id="content" class="p-3 p-md-4">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="container my-4">
                <h2 class="text-dark mb-4">Pengumuman Terbaru</h2>

                @if(isset($announcements) && $announcements->count() > 0)
                  @foreach($announcements as $announcement)
                  <div class="card announcement-card mb-4">
                    <div class="card-body px-3 py-3" style="background-color: #ffffff; border-left: 4px solid #0d6efd;">
                      <h5 class="card-title text-primary mb-1" style="font-size: 1.15rem; font-weight: 600;">
                        {{ $announcement->subject }}
                      </h5>
                      <p class="card-meta text-muted mb-3" style="font-size: 0.75rem;">
                        Dipublikasikan: {{ \Carbon\Carbon::parse($announcement->publish_date)->translatedFormat('l, d F Y') }}
                      </p>

                      <div class="card-text-content" style="font-size: 0.875rem; line-height: 1.35; color: #333; margin-bottom: 0.5rem;">
                        {!! nl2br(preg_replace('/(https?:\/\/[^\s]+)/', '<a href="$1" target="_blank" style="color:#0d6efd;">$1</a>', e($announcement->content))) !!}
                      </div>

                      <p class="announcement-sender text-end mt-2" style="font-style: italic; font-size: 0.75rem; color: #6c757d;">
                        Dikirim oleh: {{ $announcement->sender }}
                      </p>
                    </div>
                  </div>
                  @endforeach
                @else
                  <div class="alert custom-alert custom-alert-info" role="alert">
                    <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                    <div class="alert-content">
                      <p class="alert-title mb-0">Belum ada pengumuman saat ini.</p>
                    </div>
                  </div>
                @endif

                @if(isset($announcements) && $announcements instanceof \Illuminate\Pagination\LengthAwarePaginator && $announcements->hasPages())
                  <div class="mt-4 d-flex justify-content-center">
                    {{ $announcements->links() }}
                  </div>
                @endif
              </div>
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