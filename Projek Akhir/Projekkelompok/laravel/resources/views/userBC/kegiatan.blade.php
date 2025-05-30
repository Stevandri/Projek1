<!doctype html>
<html lang="id">
  <head>
    <title>Kegiatan - Blue Choir</title>
     <link rel="icon" type="image/png" href="item/Logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body{
            background-color: #DFEAFC;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden; 
        }
        
        .profile-img { width: 100px; height: 100px; border-radius: 50%; object-fit: cover; }
        .card-status { font-size: 14px; font-weight: bold; padding: 5px 10px; border-radius: 10px; }
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

        
        #content {
          margin-left: 270px; 
          width: calc(100% - 270px);
          min-height: 100vh;
          transition: all 0.3s;
        
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

        @media (max-width: 575.98px) { 
          .zindexmedium { z-index: 90; }
          
          #content {
             padding-left: 1rem !important;  
             padding-right: 1rem !important;
          }
        }
        .zindexatas{ z-index: 100; }
       

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
                <h1><a href="{{ route('userbcdashboard') }}" class="logo">Blue Choir <span>&gt; Kegiatan</span></a></h1>
                <ul class="list-unstyled components mb-5">
                    <li><a href="{{ route('userbcdashboard') }}"><span class="fa fa-home mr-3"></span> Beranda</a></li>
                    <li><a href="{{ route('pengumuman.index') }}"><span class="fa fa-info-circle mr-3"></span> Pengumuman</a></li>
                    <li class="{{ Route::is('kegiatan.index') ? 'active' : '' }}">
                        <a href="{{ route('kegiatan.index') }}"><span class="fa fa-calendar mr-3"></span> Kegiatan</a>
                    </li>
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

        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-dark mb-4">Jadwal Kegiatan Blue Choir</h2>
                        <div class="row">
                          <div class="col-lg-5">
                            <div class="card mt-3 p-3 shadow-sm">
                              <h5 class="card-title"><b>Kegiatan Akan Datang</b></h5>
                              @if(isset($upcomingKegiatans) && $upcomingKegiatans->count() > 0)
                                <ul class="list-group list-group-flush">
                                    @foreach($upcomingKegiatans as $kegiatan)
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap px-0 py-3">
                                        <div>
                                            <strong>{{ $kegiatan->nama_kegiatan }}</strong>
                                            @if($kegiatan->lokasi)
                                                <small class="d-block text-muted"><i class="fa fa-map-marker"></i> {{ $kegiatan->lokasi }}</small>
                                            @endif
                                        </div>
                                        <span class="card-status status-{{ str_replace(' ', '-', strtolower($kegiatan->status)) }} mt-2 mt-sm-0">
                                            {{ $kegiatan->waktu_mulai->translatedFormat('D, d M Y') }}
                                            @if($kegiatan->waktu_mulai->format('H:i') != '00:00')
                                                pukul {{ $kegiatan->waktu_mulai->format('H:i') }}
                                            @endif
                                        </span>
                                        @if($kegiatan->deskripsi_kegiatan)
                                        <small class="w-100 text-muted mt-2 fst-italic">
                                            {{ Str::limit($kegiatan->deskripsi_kegiatan, 100) }}
                                        </small>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                              @else
                                <p class="text-muted mt-2">Tidak ada kegiatan yang dijadwalkan dalam waktu dekat.</p>
                              @endif
                            </div>
                          </div>

                          <div class="col-lg-7">
                            <div class="card mt-3 shadow-sm">
                                <div class="card-body p-2">
                                    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Asia%2FMakassar&hl=id&showPrint=0&src=c3RldmFuZHJpcGF0dHkwMjZAc3R1ZGVudC51bnNyYXQuYWMuaWQ&color=%23039BE5"
                                            style="border:none"
                                            width="100%"
                                            height="500"
                                            frameborder="0"
                                            scrolling="yes">
                                    </iframe>
                                </div>
                            </div>
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