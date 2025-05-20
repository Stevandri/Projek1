<!doctype html>
<html lang="en">
  <head>
  	<title>Akun</title>
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
		  		<h1><a href="index.html" class="logo">Blue Choir <span>> Akun</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li>
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
	          <li class="active">
              <a href="{{ route('profil.show') }}"><span class="fa fa-user mr-3"></span> Akun</a>
	          </li>
	        </ul>


	        <div class="footer ">
				<ul class="list-unstyled components mb-5">
					<li>
						<a href="../../../Database/keluar.php"><span class="fa fa-sticky-note mr-3"></span> Keluar</a>
						</li>
					</ul>

	      </div>
		  <div class="footer ">
			<p>@bluechoir</p>

	  </div>
    	</nav>
	<div class="container containerku">
        <div class="row">
            <div class="col-lg-12">

				<!--pengumuman-->
        <div class="container my-5">
          <div class="card shadow-sm">
            <div class="row g-0">
              <!-- Bagian Foto Profil -->
              <div class="col-md-4 d-flex justify-content-center align-items-center p-4">
                                @if(Auth::user()->profile_picture)
                    <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}"
                         alt="Foto Profil {{ Auth::user()->namadepan }}"
                         class="profile-img-display">
                @else
                    {{-- Ganti 'path/ke/gambar/default_avatar.png' dengan path gambar default Anda yang sebenarnya di folder public --}}
                    <img src="{{ asset('item/profildefault.png') }}" width="350" height="auto" alt="Profil" class="profile-img-display">
                @endif
              </div>
              <!-- Bagian Informasi Profil -->
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title mb-3"><b>{{ Auth::user()->namadepan . ' ' . Auth::user()->namabelakang }}</b></h3>
                  <p class="card-text mb-2"><strong>Status: </strong>{{ Auth::user()->status}}</p>
                  <p class="card-text mb-2"><strong>Posisi: </strong>{{ Auth::user()->posisi}}</p>
                  <p class="card-text mb-2"><strong>Posisi Suara: </strong>{{ Auth::user()->posisi_suara }}</p>
                  <p class="card-text mb-2"><strong>NIM:</strong> {{ Auth::user()->nim }}</p>
                  <p class="card-text mb-2"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                  <p class="card-text mb-2"><strong>No. Telepon:</strong> {{ Auth::user()->telepon }}</p>
                  <!-- Tombol Edit Profil -->
                  <a href="editprofilBC.html" class="btn btn-primary mt-3">Edit Profil</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    
	<!--pengumuman end-->
	
		</div>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/popper.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>
  </body>
</html>