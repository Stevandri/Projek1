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
      }
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
        padding: 0.6rem 0.8rem; /* Reduced padding */
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 0.4rem; /* Reduced margin */
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
      }
      .custom-alert-info { border-left-color: #0dcaf0; background-color: #e8f8fd; color: #0c5460; }
      .custom-alert-success { border-left-color: #198754; background-color: #e8fce8; color: #155724; }
      .custom-alert-danger { border-left-color: #dc3545; background-color: #fde8e8; color: #842029; }
      .custom-alert-warning { border-left-color: #ffc107; background-color: #fff8e5; color: #856404; }

      .alert-icon {
        margin-right: 0.3rem; /* Further reduced */
        font-size: 0.9rem; /* Further reduced */
        margin-top: 0; /* Align to top */
      }
      .alert-content {
        flex: 1;
        margin-left: 0.1rem; /* Further reduced */
      }
      .alert-title {
        font-weight: 600;
        margin-bottom: 0.05rem;
        font-size: 0.85rem; /* Further reduced */
      }
      .alert-message {
        font-size: 0.75rem; /* Further reduced */
        line-height: 1.1; /* Further reduced */
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

      @media (max-width: 576px) { .zindexmedium { z-index: 90; } }
      .zindexatas{ z-index: 100; }

      .completed { background-color: #d4edda; color: #155724; }
      .in-progress { background-color: #f8d7da; color: #721c24; }

      .announcement-card {
        background-color: #fff;
        border: none;
        border-radius: 10px;
        box-shadow: 0 1px 4px rgba(0,0,0,0.08); /* Softer shadow */
        margin-bottom: 0.6rem; /* Reduced margin between cards */
      }
      .announcement-card .card-body {
        padding: 0.7rem; /* Reduced padding */
      }
      .announcement-card .card-title {
        color: #0056b3;
        font-weight: 600;
        margin-bottom: 0.2rem; /* Reduced margin */
        font-size: 1.1rem; /* Adjusted font size for title */
      }
      .announcement-card .card-meta {
        font-size: 0.7rem; /* Further reduced font size */
        color: #6c757d;
        margin-bottom: 0.4rem; /* Reduced margin */
      }
      .announcement-card .card-text-content {
        color: #343a40;
        line-height: 1.3; /* Further reduced line height */
        white-space: pre-wrap;
        font-size: 0.8rem; /* Further reduced font size */
        margin-bottom: 0.3rem; /* Reduced margin */
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
        font-size: 0.75rem; /* Further reduced font size */
        color: #555;
        margin-top: 0.3rem; /* Reduced margin */
        text-align: left; /* Aligned left as per image */
      }

      #content {
        padding: 10px 15px; /* Reduced overall padding */
        width: 100%;
        overflow-y: auto;
      }
      #content h2.text-dark.mb-4 {
        color: #343a40;
        font-weight: 600;
        margin-bottom: 0.8rem; /* Reduced margin */
      }
      #content .container.my-4 {
        margin-top: 0.5rem !important; /* Reduced margin */
        margin-bottom: 0.5rem !important; /* Reduced margin */
        padding: 0;
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
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('user-logout-form').submit();">
                  <span class="fa fa-sticky-note mr-3"></span> Keluar
                </a>
                <form id="user-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
            </ul>
          </div>
          <div class="footer "><p><small>&copy; {{ date('Y') }} Blue Choir</small></p></div>
        </div>
      </nav>

      <div id="content" class="p-3 p-md-4" style="width:100%; overflow-y:auto;">
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
