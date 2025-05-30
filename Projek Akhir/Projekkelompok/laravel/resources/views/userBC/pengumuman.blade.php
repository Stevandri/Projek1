<!doctype html>
<html lang="id">
  <head>
    <title>Pengumuman - Blue Choir</title>
     <link rel="icon" type="image/png" href="item/Logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
      body {
        background-color: #f4f7f9;
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
        color: #333;
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
        border-radius: 12px;
        padding: 1rem 1.25rem; 
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1rem; 
        background-color: #fff;
        box-shadow: 0 5px 15px rgba(0,0,0,0.07); 
      }
      .custom-alert-info { border-left-color: #3498db; background-color: #eaf5fc; color: #2980b9; }
      .custom-alert-success { border-left-color: #2ecc71; background-color: #eafaf1; color: #27ae60; }
      .custom-alert-danger { border-left-color: #e74c3c; background-color: #fdedec; color: #c0392b; }
      .custom-alert-warning { border-left-color: #f39c12; background-color: #fef8e7; color: #d35400; }

      .alert-icon {
        margin-right: 1rem;
        font-size: 1.25rem; 
      }
      .alert-content {
        flex: 1;
      }
      .alert-title {
        font-weight: 600;
        margin-bottom: 0.2rem; 
        font-size: 1rem; 
      }
      .alert-message {
        font-size: 0.875rem; 
        line-height: 1.4;
        margin-bottom: 0;
      }
      .btn-close-custom {
        border: none;
        background: transparent;
        font-size: 1.5rem; 
        cursor: pointer;
        line-height: 1;
        color: #7f8c8d; 
        opacity: 0.8;
      }
      .btn-close-custom:hover {
        color: #34495e; 
        opacity: 1;
      }

      .announcement-card {
        background-color: #ffffff;
        border: none;
        border-radius: 12px; 
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        margin-bottom: 1.5rem;
        transition: transform 0.3s ease-out, box-shadow 0.3s ease-out;
      }
      .announcement-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      }
      .announcement-card .card-body {
        padding: 1.25rem;
        border-left: 4px solid #3498db; 
        border-top-left-radius: 0; 
        border-bottom-left-radius: 0;
      }
      .announcement-card .card-title {
        color: #2c3e50; 
        font-weight: 600;
        margin-bottom: 0.3rem;
        font-size: 1.2rem; 
      }
      .announcement-card .card-meta {
        font-size: 0.8rem; 
        color: #7f8c8d;
        margin-bottom: 0.75rem; 
      }
      .announcement-card .card-meta i {
        margin-right: 0.3rem;
      }
      .announcement-card .card-text-content {
        color: #34495e; 
        line-height: 1.6; 
        white-space: pre-wrap;
        font-size: 0.9rem;
        margin-bottom: 0.75rem;
      }
      .announcement-card .card-text-content a {
        color: #3498db;
        text-decoration: none;
        font-weight: 500;
      }
      .announcement-card .card-text-content a:hover {
        text-decoration: underline;
      }
      .announcement-sender {
        font-style: italic;
        font-size: 0.8rem;
        color: #95a5a6; 
        margin-top: 1rem;
        text-align: left;
      }
      .announcement-sender i {
        margin-right: 0.3rem;
      }

      #content h2.main-title {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 1.5rem;
      }
      #content .container.my-4 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
        padding: 0;
      }
      .zindexatas{ z-index: 100; }

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
         #content { padding: 1.5rem !important; } 
         .announcement-card .card-body { padding: 1rem; }
         .announcement-card .card-title { font-size: 1.1rem; }
         .announcement-card .card-text-content { font-size: 0.85rem; }
      }

      @media (max-width: 575.98px) {
        .zindexmedium { z-index: 90; }
        #content { padding: 1rem !important; } 
         .announcement-card .card-meta { font-size: 0.75rem; }
         .announcement-sender { font-size: 0.75rem; }
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
          <div class="row">
            <div class="col-lg-12">
              <div class="container my-4">
                <h2 class="text-dark mb-4 main-title"> Pengumuman Terbaru</h2>

                @if(isset($announcements) && $announcements->count() > 0)
                  @foreach($announcements as $announcement)
                  <div class="card announcement-card">
                    <div class="card-body">
                      <h5 class="card-title">
                        {{ $announcement->subject }}
                      </h5>
                      <p class="card-meta">
                        <i class="fa fa-calendar-o"></i> Dipublikasikan: {{ \Carbon\Carbon::parse($announcement->publish_date)->translatedFormat('l, d F Y') }}
                      </p>

                      <div class="card-text-content">
                        {!! nl2br(preg_replace('/(https?:\/\/[^\s]+)/', '<a href="$1" target="_blank">$1</a>', e($announcement->content))) !!}
                      </div>

                      <p class="announcement-sender">
                        <i class="fa fa-user-circle-o"></i> Dikirim oleh: {{ $announcement->sender }}
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