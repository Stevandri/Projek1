<!doctype html>
<html lang="en">
  <head>
  	<title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
          <h1><a href="index.html" class="logo">Hallo Admin<span>> Beranda</span></a></h1>
          <ul class="list-unstyled components mb-5">
            <li class="active">
              <a href="admin-beranda.html"><span class="fa fa-home mr-3"></span> Beranda</a>
            </li>
            <li>
              <a href="admin-pengumuman.html"><span class="fa fa-info mr-3"></span> Buat Pengumuman</a>
            </li>
            <li>
              <a href="admin-kegiatan.html"><span class="fa fa-rocket mr-3"></span> Kegiatan</a>
            </li>
            <li>
              <a href="admin-partitur.html"><span class="fa fa-file mr-3"></span> Partitur</a>
            </li>
            <li>
              <a href="admin-pengguna.html"><span class="fa fa-user mr-3"></span> Pengguna</a>
            </li>
          </ul>

          <div class="footer">
            <ul class="list-unstyled components mb-5">
              <li>
                <a href="../../Database/keluar.php"><span class="fa fa-sticky-note mr-3"></span> Keluar</a>
              </li>
            </ul>
          </div>

          <div class="footer">
            <p>@bluechoir</p>
          </div>
        </div> <!-- penutup .p-4 zindexatas -->
      </nav>

      <div class="container containerku">
        <div class="row">
          <div class="col-lg-12">
            <!--pengumuman-->
            <div class="container-fluid">
              <div class="row">
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Beranda</h1>
                  </div>

                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                      <div class="card bg-primary text-white shadow-sm">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <div><h5 class="card-title mb-0">Total Pengguna</h5></div>
                            <div class="display-4"><i class="fa fa-users"></i></div>
                          </div>
                          <p class="card-text display-3 mt-2">{{ $totalPengguna ?? '0' }}</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="card bg-success text-white shadow-sm">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <div>
                              <h5 class="card-title mb-0">Pengguna Online</h5>
                              <small class="d-block">(Dalam 5 menit terakhir)</small>
                            </div>
                            <div class="display-4"><i class="fa fa-wifi"></i></div>
                          </div>
                          <p class="card-text display-3 mt-2">{{ $jumlahPenggunaOnline ?? '0' }}</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mt-4">
                    <h2>Pengguna Online Saat Ini</h2>
                    <div class="table-responsive shadow-sm rounded">
                      <table class="table table-striped table-hover table-sm mb-0">
                        <thead class="thead-dark">
                          <tr>
                            <th>NIM</th>
                            <th>Nama Depan</th>
                            <th>Status/Posisi</th>
                            <th>Terakhir Dilihat</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse($penggunaOnlineList as $pengguna)
                            <tr>
                              <td>{{ $pengguna->nim ?? 'N/A' }}</td>
                              <td>{{ $pengguna->namadepan ?? 'N/A' }} {{ $pengguna->namabelakang ?? '' }}</td>
                              <td>
                                <span class="badge {{ $pengguna->posisi === 'NonBidang' ? 'bg-danger text-white' : 'bg-secondary text-white' }}">
                                  {{ $pengguna->posisi === 'NonBidang' ? 'Admin' : ucfirst($pengguna->posisi ?? 'Tidak diketahui') }}
                                </span>
                              </td>
                              <td>{{ $pengguna->last_seen_at ? $pengguna->last_seen_at->locale('id')->diffForHumans() : 'Belum pernah' }}</td>
                            </tr>
                          @empty
                            <tr>
                              <td colspan="4" class="text-center py-4">Tidak ada pengguna yang aktif saat ini.</td>
                            </tr>
                          @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </main>
              </div> <!-- .row -->
            </div> <!-- .container-fluid -->
          </div> <!-- .col-lg-12 -->
        </div> <!-- .row -->
      </div> <!-- .container.containerku -->
    </div> <!-- .wrapper -->

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>