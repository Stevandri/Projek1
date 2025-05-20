<!doctype html>
<html lang="en">
  <head>
  	<title>Beranda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/style.css">
  </head>
  <style>
            body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px; 
        }
        .btn-primary {
            background-color: #007bff;
            border: none; 
        }
        .btn-primary:hover {
            background-color: #0056b3; 
        }
        input[type="file"] {
            display: none; 
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
			<nav id="sidebar">
				<div class="custom-menu zindexmedium">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 zindexatas">
		  		<h1><a href="index.html" class="logo">Hallo Admin<span>> Pengguna >Tambah Pengguna</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="admin-beranda.html"><span class="fa fa-home mr-3"></span> Beranda</a>
	          </li>
	          <li>
	              <a href="admin-pengumuman.html"><span class="fa fa-user mr-3"></span> Buat Pengumuman</a>
	          </li>
	          <li>
              <a href="admin-kegiatan.html"><span class="fa fa-briefcase mr-3"></span> Kegiatan</a>
	          </li>
	          <li>
              <a href="admin-partitur.html"><span class="fa fa-sticky-note mr-3"></span> Partitur</a>
	          </li>
	          <li  class="active">
              <a href="admin-pengguna.html"><span class="fa fa-suitcase mr-3"></span> Pengguna</a>
	          </li>

	        </ul>


	        <div class="footer ">
				<ul class="list-unstyled components mb-5">
					<li>
						<a href="../../Database/keluar.php"><span class="fa fa-sticky-note mr-3"></span> Keluar</a>
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

				<!--Tambah pengguna-->
        <div class="container-fluid">
          <div class="row">
              <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                      <h1 class="h2">Tambah Pengguna</h1>
                  </div>
                  <div class="container mt-5">
                    <form action="proses_tambah_pengguna.php" method="post">
                    <div class="mb-3">
                      <label for="nama_depan" class="form-label">Nama Depan</label>
                        <div class="input-group">
                          <span class="input-group-text border border-secondary"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control border border-secondary" id="nama_depan" name="nama_depan" required>
                        </div>
                      </div>
                  <div class="mb-3">
                        <label for="nama_belakang" class="form-label">Nama Belakang</label>
                        <div class="input-group">
                          <span class="input-group-text border border-secondary"><i class="bi bi-person"></i></span>
                          <input type="text" class="form-control border border-secondary" id="nama_belakang" name="nama_belakang" required>
                  </div>
                </div>
                <div class="mb-3">
                      <label for="nim" class="form-label">NIM</label>
                      <div class="input-group">
                        <span class="input-group-text border border-secondary"><i class="bi bi-card-list"></i></span>
                        <input type="text" class="form-control border border-secondary" id="nim" name="nim" required>
                      </div>
                </div>
                <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <div class="input-group">
                        <span class="input-group-text border border-secondary"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control border border-secondary" id="email" name="email" required>
                      </div>
                </div>
                <div class="mb-3">
                      <label for="telepon" class="form-label">Nomor Telepon</label>
                      <div class="input-group">
                        <span class="input-group-text border border-secondary"><i class="bi bi-telephone"></i></span>
                        <input type="tel" class="form-control border border-secondary" id="telepon" name="telepon" required>
                      </div>
                </div>
                <div class="mb-3" style="width: 400px;">
                      <label for="posisi_suara" class="form-label text-muted">Posisi Suara</label>
                      <div class="input-group">
                        <span class="input-group-text border border-secondary"><i class="bi bi-mic"></i></span>
                        <select class="form-select shadow-sm rounded" id="posisi_suara" name="posisi" required style="background-color: white; width: 100%;">
                            <option disabled selected>-- Pilih Posisi Suara --</option>
                            <option value="Sopran1">Sopran 1</option>
                            <option value="Sopran2">Sopran 2</option>
                            <option value="Alto1">Alto 1</option>
                            <option value="Alto2">Alto 2</option>
                            <option value="Tenor1">Tenor 1</option>
                            <option value="Tenor2">Tenor 2</option>
                        </select>
                      </div>
                    </div>
                <div class="mb-3" style="width: 400px;">
                    <label for="posisi_pengurus" class="form-label text-muted">Posisi</label>
                    <div class="input-group">
                        <span class="input-group-text border border-secondary"><i class="bi bi-person-badge"></i></span>
                        <select class="form-select shadow-sm rounded" id="posisi_pengurus" name="posisi" required style="background-color: white; width: 100%;">
                            <option disabled selected>-- Pilih Posisi --</option>
                            <option value="Ketua">Anggota</option>
                            <option value="Wakil Ketua">Tim Artistik</option>
                            <option value="Sekretaris">Bidang Kepelatihan</option>
                            <option value="Bendahara">Bidang Keanggotaan</option>
                            <option value="Admin">Bidang Aset & Perlengkapan</option>
                            <option value="Anggota">Bidang Media & Dokumentasi</option>
                            <option value="Anggota">Bidang Peribadatan</option>
                            <option value="Anggota">Bidang Kewirausahaan</option>
                            <option value="Anggota">Pelatih</option>
                        </select>
                    </div>
                    </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <div class="input-group">
                                <span class="input-group-text border border-secondary"><i class="bi bi-lock"></i></span>
                                <input type="text" class="form-control border border-secondary" id="password" name="password" required>
                            </div>
                        </div>
                  <button type="submit" class="btn btn-primary">Tambah Pengguna</button>
                  </form>

                </div>
              </main>
          </div>
      </div>
	<!--pengumuman end-->
	
		</div>
  
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
  </body>
</html>