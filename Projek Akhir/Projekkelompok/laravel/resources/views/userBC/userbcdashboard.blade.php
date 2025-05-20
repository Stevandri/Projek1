<!doctype html>
<html lang="en">
  <head>
  	<title>Beranda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <style>
	body{
		background-color: #DFEAFC;
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
      border-left: 1px solid;
      border-radius: 5px;
      padding: 0.1rem 0.1rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 1rem;
    }
    /* Warna khusus untuk alert */
    .custom-alert-info {
      border-color: #0dcaf0; /* Warna border kiri sesuai info */
      background-color: #e8f8fd; /* Warna latar alert info */
      color: #0c5460; /* Warna teks info */
    }
    .custom-alert-success {
      border-color: #198754;
      background-color: #e8fce8;
      color: #155724;
    }
    .custom-alert-danger {
      border-color: #dc3545;
      background-color: #fde8e8;
      color: #842029;
    }
    .custom-alert-warning {
      border-color: #ffc107;
      background-color: #fff8e5;
      color: #856404;
    }
    /* Icon di sisi kiri */
    .alert-icon {
      display: inline-flex;
      align-items: center;
      margin-right: 0.5rem;
      font-size: 1.25rem;
    }
    /* Title dan Message */
    .alert-content {
      flex: 1;
      margin-left: 0.5rem;
    }
    .alert-title {
      font-weight: 600;
      margin: 0;
    }
    .alert-message {
      top:0;
      font-size: 0.95rem;
    }
    /* Tombol close */
    .btn-close-custom {
      border: none;
      background: transparent;
      font-size: 1.25rem;
      cursor: pointer;
      line-height: 1;
    }
    .btn-close-custom:hover {
      color: #000;
    }
@media (max-width: 576px) {
  .zindexmedium {
    z-index: 90;
  }
}
	.zindexatas{
		z-index: 100;
	}
	.completed { background-color: #d4edda; color: #155724; }
	.in-progress { background-color: #f8d7da; color: #721c24; }
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
		  		<h1><a href="index.html" class="logo">Blue Choir <span>> Beranda</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="{{ route('userbcdashboard') }}"><span class="fa fa-home mr-3"></span> Beranda</a>
	          </li>
	          <li>
	              <a href="{{ route('pengumuman.index') }}"><span class="fa fa-info mr-3"></span> Pengumuman</a>
	          </li>
	          <li>
              <a href="{{ route('kegiatan.index') }}"><span class="fa fa-rocket mr-3"></span> Kegiatan</a>
	          </li>
	          <li>
              <a href="{{ route('partitur.index') }}"><span class="fa fa-file mr-3"></span> Partitur</a>
	          </li>
	          <li>
              <a href="{{ route('profil.show') }}"><span class="fa fa-user mr-3"></span> Akun</a>
	          </li>
	        </ul>


	        <div class="footer ">
				<ul class="list-unstyled components mb-5">
    				<li>
        				<a href="{{ route('logout') }}"
           					onclick="event.preventDefault();
                         	document.getElementById('logout-form').submit();">
            				<span class="fa fa-sticky-note mr-3"></span> Keluar
        				</a>
        				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            			@csrf
        				</form>
    				</li>
				</ul>
	      </div>
		  <div class="footer ">
			<p>@bluechoir</p>

	  </div>
    	</nav>
	<div class="container mt-5 containerku">
        <div class="row">
            <div class="col-md-8">
				<!--welcome-->
                   <div class="container mt-10">
		<h2 class="text-dark">Beranda</h2>
		<div class="card p-4 shadow-sm d-flex flex-row   text-light rounded-lg">
			<div class="flex-grow-1">
				<h3>Halo, <strong>{{ Auth::user()->namadepan}}</strong>!</h3>
				<p class="text-dark">Selamat datang di <strong>WEBSITE BLUE CHOIR</strong> Faculty of Engineering Sam Ratulangi University.</p>
			</div>
			<div>
				<img src="item/ping.png" alt="Foto Profil" class="rounded-circle" width="80" height="80">
			</div>
		</div>
	</div>
	<!--welcome end-->
                <div class="card mt-3 p-4 rounded-lg  shadow-sm">
                    <h5><b>Kegiatan yang akan datang</b></h5>
                    <ul class="list-group">
						<li class="list-group-item d-flex justify-content-between align-items-center">
                            Latihan reguler 
                            <span class="card-status bg-warning text-dark">Kamis, 03 April 2025</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Latihan reguler
                            <span class="card-status completed">Selasa, 25 Maret 2025</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Latihan reguler
                            <span class="card-status completed">Kamis, 27 Maret 2025</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card mb-5 mt-5 p-4 bg-primary text-white shadow-sm rounded-lg">
                    <h5 class="text-center text-light"><B><u>PENGUMUMAN</u></B></h5>
					<div class="container py-2">
						<!-- Information Alert -->
						<div class="custom-alert custom-alert-info">
						  <div class="d-flex">
							<span class="alert-icon">
							  <i class="bi bi-info-circle"></i>
							</span>
							<div class="alert-content">
							  <p class="alert-title">Persiapan Tim Lomba!</p>
							  <p class="alert-message">Dalam rangka penyelen...</p>
							</div>
						  </div>
						  <button class="btn-close-custom" aria-label="Close" onclick="this.parentElement.style.display='none'">
							<i class="bi bi-x"></i>
						  </button>
						</div>
					
						<!-- Success Alert -->
						<div class="custom-alert custom-alert-success">
						  <div class="d-flex">
							<span class="alert-icon">
							  <i class="bi bi-check-circle"></i>
							</span>
							<div class="alert-content">
							  <p class="alert-title mb-1">Selamat Datang!</p>
							  <p class="alert-message mt-0">Selamat datang di webs...</p>
							</div>
						  </div>
						  <button class="btn-close-custom" aria-label="Close" onclick="this.parentElement.style.display='none'">
							<i class="bi bi-x"></i>
						  </button>
						</div>
					  </div>
                    <button class="btn bg-warning">Lihat Informasi Lengkap</button>
                </div>
            </div>
        </div>
    </div>
	  <!--Welcome end-->
		</div>
		

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>