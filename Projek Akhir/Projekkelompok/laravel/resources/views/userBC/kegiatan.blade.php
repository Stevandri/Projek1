<!doctype html>
<html lang="id">
  <head>
    <title>Kegiatan - Blue Choir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
      body {
        background-color: #F0F2F5; /* Consistent with Pengumuman page for a cohesive look */
        font-family: 'Poppins', sans-serif;
      }
      .profile-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
      }
      .card-status { /* Kept but likely unused in new design */
        font-size: 14px;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 10px;
      }
      .custom-alert { /* Kept for "no upcoming activities" message */
        border-left: 1px solid;
        border-radius: 5px;
        padding: 0.75rem 1rem;
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
      .alert-message { font-size: 0.95rem; }
      .btn-close-custom { border: none; background: transparent; font-size: 1.25rem; cursor: pointer; line-height: 1; }
      .btn-close-custom:hover { color: #000; }
      @media (max-width: 576px) { .zindexmedium { z-index: 90; } }
      .zindexatas{ z-index: 100; }

      /* Styling for upcoming activity items to match the new reference */
      .upcoming-activity-item {
        background-color: #fff;
        border: none;
        border-radius: 8px; /* Slightly less rounded than full card */
        box-shadow: 0 2px 8px rgba(0,0,0,0.05); /* Softer shadow */
        margin-bottom: 0.75rem; /* Spacing between items */
        display: flex;
        justify-content: space-between;
        align-items: flex-start; /* Align items to the top */
        padding: 0.8rem 1rem; /* Padding inside the item */
        transition: transform 0.2s ease-in-out;
      }
      .upcoming-activity-item:hover {
        transform: translateY(-2px);
      }

      .upcoming-activity-item .title {
        color: #2C3E50;
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 0.2rem;
      }
      .upcoming-activity-item .description {
        font-size: 0.85rem;
        color: #566573;
        line-height: 1.3;
      }
      .upcoming-activity-item .date-badge {
        flex-shrink: 0;
        background-color: #EBF5FB; /* Light blue background */
        color: #3498DB; /* Blue text color */
        padding: 0.4rem 0.8rem;
        border-radius: 20px; /* Pill shape */
        font-size: 0.8rem;
        font-weight: 500;
        white-space: nowrap;
        margin-left: 1rem; /* Space from content */
      }

      /* Google Calendar iframe styling */
      .calendar-card {
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        overflow: hidden; /* Ensures border-radius applies to iframe */
        background-color: #fff; /* Fallback background */
      }
      .calendar-card iframe {
        display: block; /* Remove extra space below iframe */
      }

      #content {
        padding: 20px 25px; /* Adjusted overall padding */
        width: 100%;
        overflow-y: auto;
      }
      #content h2.text-dark.mb-4 {
        color: #343a40;
        font-weight: 600;
        margin-bottom: 1.5rem; /* Adjusted margin */
      }
      #content .container.my-4 {
        margin-top: 1rem !important; /* Adjusted margin */
        margin-bottom: 1rem !important; /* Adjusted margin */
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
          <h1><a href="{{ route('userbcdashboard') }}" class="logo">Blue Choir <span>&gt; Kegiatan</span></a></h1>
          <ul class="list-unstyled components mb-5">
            <li><a href="{{ route('userbcdashboard') }}"><span class="fa fa-home mr-3"></span> Beranda</a></li>
            <li><a href="{{ route('pengumuman.index') }}"><span class="fa fa-info mr-3"></span> Pengumuman</a></li>
            <li class="{{ Route::is('kegiatan.index') ? 'active' : '' }}">
              <a href="{{ route('kegiatan.index') }}"><span class="fa fa-rocket mr-3"></span> Kegiatan</a>
            </li>
            <li><a href="{{ route('partitur.index') }}"><span class="fa fa-file mr-3"></span> Partitur</a></li>
            <li><a href="{{ route('profil.show') }}"><span class="fa fa-user mr-3"></span> Akun</a></li>
          </ul>
          <div class="footer ">
            <ul class="list-unstyled components mb-5">
              <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('user-kegiatan-logout-form').submit();">
                  <span class="fa fa-sign-out mr-3"></span> Keluar
                </a>
                <form id="user-kegiatan-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
            </ul>
          </div>
          <div class="footer "><p>&copy; {{ date('Y') }} BlueChoir</p></div>
        </div>
      </nav>

      <div id="content" class="p-4 p-md-5 pt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-dark mb-4">Jadwal Kegiatan Blue Choir</h2>
              <div class="row">
                <div class="col-lg-5">
                  <div class="card mt-3 p-0 shadow-sm border-0 rounded-xl">
                    <div class="card-body p-4">
                      <h5 class="card-title text-dark mb-3"><b>Kegiatan Akan Datang</b></h5>
                      @if(isset($upcomingKegiatans) && $upcomingKegiatans->count() > 0)
                        <ul class="list-unstyled">
                          @foreach($upcomingKegiatans as $kegiatan)
                          <li class="upcoming-activity-item">
                            <div>
                              <div class="title">{{ $kegiatan->nama_kegiatan }}</div>
                              @if($kegiatan->deskripsi_kegiatan)
                                <div class="description">
                                  {{ Str::limit($kegiatan->deskripsi_kegiatan, 100) }}
                                </div>
                              @endif
                            </div>
                            <span class="date-badge">
                              {{ \Carbon\Carbon::parse($kegiatan->waktu_mulai)->translatedFormat('D, d M Y') }}
                              @if($kegiatan->waktu_mulai->format('H:i') != '00:00')
                                {{ $kegiatan->waktu_mulai->format('H:i') }}
                              @endif
                            </span>
                          </li>
                          @endforeach
                        </ul>
                      @else
                        <p class="text-muted mt-2 custom-alert custom-alert-info">Tidak ada kegiatan yang dijadwalkan dalam waktu dekat.</p>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="col-lg-7">
                  <div class="card mt-3 shadow-sm border-0 rounded-xl calendar-card">
                    <div class="card-body p-0">
                      <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Asia%2FMakassar&hl=id&showPrint=0&src=c3RldmFudhripattY0MjZAc3R1ZGVudC51bnNyYXQuYWMuaWQ&color=%23039BE5"
                              style="border:none"
                              width="100%"
                              height="500"
                              frameborder="0"
                              scrolling="no">
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
