<!doctype html>
<html lang="id">
  <head>
  	<title>Beranda Pengguna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <style>
    body {
      background-color: #DFEAFC; 
      font-family: 'Poppins', sans-serif;
      color: #333; 
    }
    .card {
      border-radius: 10px; 
      margin-bottom: 1.5rem;
      box-shadow: 0 2px 10px rgba(0,0,0,.075); 
      border: none; 
    }
    .profile-img {
        width: 70px; 
        height: 70px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #e9ecef;
    }
    .card-status {
        font-size: 0.85em; 
        font-weight: 500; 
        padding: 6px 12px; 
        border-radius: 20px; 
        white-space: nowrap; 
    }

    .custom-alert {
      border-left-width: 4px;
      border-radius: 8px; 
      padding: 0.75rem 1rem; 
      display: flex;
      align-items: flex-start; 
      justify-content: space-between;
      margin-bottom: 0.75rem; 
      background-color: #fff; 
      box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }
    .custom-alert-info { border-left-color: #0dcaf0; color: #0c5460; }
    .custom-alert-success { border-left-color: #198754; color: #155724; }
    .custom-alert-danger { border-left-color: #dc3545; color: #842029; }
    .custom-alert-warning { border-left-color: #ffc107; color: #856404; }
    
    .alert-icon { margin-right: 0.75rem; font-size: 1.1rem; margin-top: 0.15rem;} 
    .alert-content { flex: 1; }
    .alert-title { font-weight: 600; margin-bottom: 0.15rem; font-size: 0.95rem;} 
    .alert-message { 
        font-size: 0.85rem; 
        max-height: 2.6em; 
        overflow: hidden; 
        text-overflow: ellipsis; 
        white-space: normal; 
        line-height: 1.3; 
        margin-bottom:0;
        color: #555;
    }
    
    .custom-alert .close {
        font-size: 1.25rem; 
        font-weight: 700;
        line-height: 1;
        color: #777; 
        text-shadow: none;
        opacity: .7;
        padding: 0.5rem; 
        background-color: transparent;
        border: 0;
        margin-left: 0.5rem;
    }
    .custom-alert .close:hover {
        color: #000;
        opacity: 1;
    }

    .zindexatas{ z-index: 100; }

    .main-content-title { 
        color: #343a40;
        font-weight: 600;
    }
        
    
 
    .custom-menu { position: absolute; top: 15px; right: -50px; }
    .custom-menu button { color: #fff; background-color: #007bff; border: none; }

    .status-akan-datang, .upcoming { background-color: #cfe2ff; color: #052c65; border: 1px solid #b6d4fe;}
    .status-selesai, .completed { background-color: #d1e7dd; color: #0f5132; border: 1px solid #badbcc;}
    .status-berlangsung, .in-progress { background-color: #fff3cd; color: #664d03; border: 1px solid #ffecb5;}
    .status-dibatalkan { background-color: #f8d7da; color: #58151c; border: 1px solid #f1b0b7;}

    .welcome-card { 
        background-color: #ffffff; 
        color: #343a40; 
    }
    .welcome-card h3 { 
        font-size: 1.4rem; 
        margin-bottom: 0.3rem;
        color: #343a40; 
    }
    .welcome-card h3 strong {
        color: #007bff; 
    }
    .welcome-card p { 
        font-size: 0.95rem; 
        color: #495057; 
    }

    .announcements-panel { 
        background-color: #007bff; 
        box-shadow: 0 4px 12px rgba(0,0,0,0.15); 
    }
    .announcements-panel .card-body { display: flex; flex-direction: column; height: 100%;}
    .announcements-panel .list-announcements { flex-grow: 1; overflow-y: auto; max-height: calc(100vh - 200px); padding-right: 10px; }
    .announcements-panel .list-announcements::-webkit-scrollbar { width: 6px; }
    .announcements-panel .list-announcements::-webkit-scrollbar-track { background: rgba(255,255,255,0.1); border-radius:3px; }
    .announcements-panel .list-announcements::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.3); border-radius:3px; }
    .announcements-panel .list-announcements::-webkit-scrollbar-thumb:hover { background: rgba(255,255,255,0.5); }


    @media (max-width: 991.98px) { 
        .announcements-panel { margin-top: 1.5rem; }
        .announcements-panel .list-announcements { max-height: 300px; } 
    }

    @media (max-width: 767.98px) { 
        #content { padding: 1rem !important; } 
        #sidebar .logo span { display: block; font-size: 12px;} 
        .card-status { margin-top: 0.5rem; }
        .list-group-item { flex-direction: column; align-items: flex-start !important; }
    }
    @media (max-width: 575.98px) { 
        .alert-icon { font-size: 1.25rem; margin-right: 0.75rem;}
        .alert-title { font-size: 1rem; }
        .alert-message { font-size: 0.9rem; }
        .welcome-card { flex-direction: column !important; text-align: center;} 
        .welcome-card img { margin-top: 1rem; }
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
          <h1><a href="{{ route('userbcdashboard') }}" class="logo">Blue Choir <span>&gt; Beranda</span></a></h1>
          <ul class="list-unstyled components mb-5">
            <li class="active">
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
            <li>
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

      <div id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 py-3">
                    <h2 class="main-content-title mb-4 ml-5">Beranda</h2>
                    <div class="card p-3 p-md-4 shadow-sm d-flex flex-row align-items-center rounded-lg welcome-card">
                        <div class="flex-grow-1">
                            <h3>Halo, <strong>{{ Auth::user()->namadepan ?? 'Pengguna' }}</strong>!</h3>
                            <p class="mb-0">Selamat datang di <strong>WEBSITE BLUE CHOIR</strong> Fakultas Teknik Universitas Sam Ratulangi.</p>
                        </div>
                        <div class="ms-md-3 mt-3 mt-md-0 text-center">
                            <img src="{{ asset('item/ping.png') }}" alt="Foto Profil" class="profile-img" onerror="this.onerror=null;this.src='https://placehold.co/70x70/e9ecef/343a40?text=BC';">
                        </div>
                    </div>
        
                    <div class="card mt-4 p-3 p-md-4 rounded-lg shadow-sm">
                        <h5 class="mb-3"><b>Kegiatan yang akan datang</b></h5>
                        @if(isset($upcomingKegiatans) && $upcomingKegiatans->count() > 0)
                            <ul class="list-group list-group-flush">
                                @foreach($upcomingKegiatans as $kegiatan)
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap px-0 py-3">
                                        <div>
                                            <strong>{{ $kegiatan->nama_kegiatan }}</strong><br>
                                            <small class="text-muted">{{ Str::limit($kegiatan->deskripsi_kegiatan ?? 'Tidak ada deskripsi', 50) }}</small>
                                        </div>
                                        <span class="card-status upcoming mt-2 mt-md-0">{{ \Carbon\Carbon::parse($kegiatan->waktu_mulai)->translatedFormat('D, d M Y H:i') }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-muted mb-0">Tidak ada kegiatan yang akan datang.</p>
                        @endif
                    </div>
                </div>

                <div class="col-lg-4 py-3">
                    <div class="card announcements-panel text-white rounded-lg h-100">
                        <div class="card-body">
                            <h5 class="text-center text-light mb-3"><b><u>PENGUMUMAN</u></b></h5>
                            <div class="list-announcements">
                                @if(isset($latestAnnouncements) && $latestAnnouncements->count() > 0)
                                    @foreach($latestAnnouncements as $announcement)
                                        <div class="custom-alert custom-alert-info mb-2">
                                            <div class="d-flex">
                                                <span class="alert-icon">
                                                    <i class="fa fa-info-circle"></i>
                                                </span>
                                                <div class="alert-content">
                                                    <p class="alert-title">{{ $announcement->subject }}</p>
                                                    <p class="alert-message">{{ Str::limit($announcement->content, 70) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="custom-alert custom-alert-info text-center">
                                        <div class="alert-content">
                                            <p class="alert-title">Tidak ada pengumuman terbaru.</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <a href="{{ route('pengumuman.index') }}" class="btn btn-light text-primary w-100 mt-auto">Lihat Informasi Lengkap</a>
                        </div>
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
