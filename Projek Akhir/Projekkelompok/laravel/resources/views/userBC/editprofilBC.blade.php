<!doctype html>
<html lang="en">
  <head>
  	<title>Profil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../css/style.css">
  </head>
  <style>
            body {
            background-color: #f8f9fa; /* Warna latar belakang yang lebih lembut */
        }
        .card {
            border-radius: 15px; /* Sudut yang lebih halus */
        }
        .btn-primary {
            background-color: #007bff; /* Warna tombol yang lebih cerah */
            border: none; /* Menghilangkan border default */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Warna saat hover */
        }
        input[type="file"] {
            display: none; /* Menyembunyikan input file default */
        }
        .custom-file-upload {
            display: inline-block;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
        }

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
	.zindexmedium{
		z-index: 90;
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
	            <a href="../../index.html"><span class="fa fa-home mr-3"></span> Beranda</a>
	          </li>
	          <li>
	              <a href="pengumuman.html"><span class="fa fa-info mr-3"></span> Pengumuman</a>
	          </li>
	          <li>
              <a href="../Kegiatan/kegiatan.html"><span class="fa fa-rocket mr-3"></span> Kegiatan</a>
	          </li>
	          <li>
              <a href="../Partitur/partitur.html"><span class="fa fa-file mr-3"></span> Partitur</a>
	          </li>
	          <li class="active">
              <a href="profilBC.html"><span class="fa fa-user mr-3"></span> Akun</a>
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
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h2 class="card-title text-center mb-4">Profil Saya</h2>
                
                                    <div class="text-center mb-4">
                                        <img id="profile-picture" src="../../../allacces/Kepengurusan2025/Item/kewira/ping.png" alt="Foto Profil" class="rounded-circle img-fluid" width="150" height="150">
                                        <label for="photo-upload" class="custom-file-upload mt-2">
                                            Ubah Foto
                                        </label>
                                        <input type="file" id="photo-upload" accept="image/*">
                                    </div>
                
                                    <form id="profile-form" action="{{ route('profil.update') }}" method="POST">
                                      @csrf
                                  
                                      <div class="mb-3">
                                          <label for="nama" class="form-label">Nama</label>
                                          <input type="text" class="form-control" id="nama" name="namadepan" value="{{ old('namadepan', $user->namadepan) }}" style="border: 1px solid #000;" required>
                                      </div>
                                  
                                      <div class="mb-3">
                                          <label for="posisi-suara" class="form-label">Posisi Suara</label>
                                          <select class="form-select" id="posisi-suara" name="posisi_suara" required>
                                              <option value="" disabled {{ old('posisi_suara', $user->posisi_suara) == '' ? 'selected' : '' }}>Pilih Posisi Suara</option>
                                              <option value="Sopran" {{ old('posisi_suara', $user->posisi_suara) == 'Sopran' ? 'selected' : '' }}>Sopran 1</option>
                                              <option value="Sopran" {{ old('posisi_suara', $user->posisi_suara) == 'Sopran' ? 'selected' : '' }}>Sopran 2</option>
                                              <option value="Alto" {{ old('posisi_suara', $user->posisi_suara) == 'Alto' ? 'selected' : '' }}>Alto 1</option>
                                              <option value="Alto" {{ old('posisi_suara', $user->posisi_suara) == 'Alto' ? 'selected' : '' }}>Alto 2</option>
                                              <option value="Tenor" {{ old('posisi_suara', $user->posisi_suara) == 'Tenor' ? 'selected' : '' }}>Tenor 1</option>
                                              <option value="Tenor" {{ old('posisi_suara', $user->posisi_suara) == 'Tenor' ? 'selected' : '' }}>Tenor 2</option>
                                              <option value="Bass" {{ old('posisi_suara', $user->posisi_suara) == 'Bass' ? 'selected' : '' }}>Bass 1</option>
                                              <option value="Bass" {{ old('posisi_suara', $user->posisi_suara) == 'Bass' ? 'selected' : '' }}>Bass 2</option>
                                          </select>
                                      </div>
                                  
                                      <div class="mb-3">
                                          <label for="nim" class="form-label">NIM</label>
                                          <input type="text" class="form-control" id="nim" name="nim" value="{{ old('nim', $user->nim) }}" style="border: 1px solid #000;" required>
                                      </div>
                                  
                                      <div class="mb-3">
                                          <label for="email" class="form-label">Email</label>
                                          <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" style="border: 1px solid #000;" required>
                                      </div>
                                  
                                      <div class="mb-3">
                                          <label for="telepon" class="form-label">Nomor Telepon</label>
                                          <input type="tel" class="form-control" id="telepon" name="telepon" value="{{ old('telepon', $user->telepon) }}" style="border: 1px solid #000;" required>
                                      </div>
                                  
                                      <div class="d-grid">
                                          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                      </div>
                                  </form>
                                  
                                  @if(isset($pesan))
                                      <div class="alert alert-success">
                                        {{ $pesan }}
                                      </div>
                                  @endif


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