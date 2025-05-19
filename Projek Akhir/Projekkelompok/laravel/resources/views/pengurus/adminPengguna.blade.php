<!doctype html>
<html lang="id">
  <head>
    <title>Admin - Manajemen Pengguna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
	@media (max-width: 576px) {
  .zindexmedium {
    z-index: 90;
  }
}

	}
	.zindexatas{
		z-index: 100;
	}
	.completed { background-color: #d4edda; color: #155724; }
	.in-progress { background-color: #f8d7da; color: #721c24; }
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
		  		<h1><a href="index.html" class="logo">Hallo Admin<span>> Pengguna</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li>
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
	          <li  class="active">
              <a href="admin-pengguna.html"><span class="fa fa-user mr-3"></span> Pengguna</a>
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


        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="container-fluid">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Manajemen Pengguna</h1>
                    {{-- <a href="#" class="btn btn-success">Tambah Pengguna</a> --}}
                    {{-- Aktifkan jika rute admin.pengguna.create sudah ada --}}
                    {{-- <a href="{{ route('admin.pengguna.create') }}" class="btn btn-success">Tambah Pengguna</a> --}}
                </div>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow-sm">
                    <div class="card-header">
                        Daftar Anggota Blue Choir
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Lengkap</th>
                                        <th>NIM</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Posisi</th>
                                        <th>Posisi Suara</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->namadepan }} {{ $user->namabelakang }}</td>
                                        <td>{{ $user->nim ?? '-' }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->telepon ?? '-' }}</td>
                                        <td>
                                            <span class="badge text-light {{ $user->posisi === 'NonBidang' ? 'bg-danger' : 'bg-primary' }}">
                                                {{ $user->posisi === 'NonBidang' ? 'Admin (NonBidang)' : ucfirst($user->posisi ?? 'Belum diatur') }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge {{ $user->status === 'aktif' ? 'bg-success' : 'bg-warning text-dark' }}">
                                                {{ ucfirst($user->posisi_suara ?? 'Tidak diketahui') }}
                                            </span>
                                        </td>
                                        <td class="btn-action-group">
                                          <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="fa fa-pencil"></i></a>
                                            {{-- Tombol Hapus akan memicu modal --}}
                                            <form action="{{ route('admin.pengguna.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Tidak ada data pengguna.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{-- Jika Anda menggunakan paginasi: {{ $users->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>