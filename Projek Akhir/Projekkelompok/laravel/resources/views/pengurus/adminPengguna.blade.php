<!doctype html>
<html lang="id">
  <head>
  	<title>Admin - Manajemen Pengguna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
      color: #495057;
    }
    .admin-card {
      border-radius: 10px; 
      border: none; 
      transition: all 0.3s ease-in-out;
      background-clip: border-box; 
    }
    .admin-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.1) !important;
    }
    .admin-card .card-body { padding: 1.25rem; }
    .admin-card .card-title {
      font-size: 0.85rem; 
      font-weight: 600; 
      text-transform: uppercase;
      margin-bottom: 0.5rem; 
    }
    .admin-card .card-text-value { font-size: 2rem; font-weight: 700; }
    .admin-card .icon-bg { font-size: 2.5rem; opacity: 0.5; }
    
    .table-container { 
        border-radius: 8px; 
        overflow: hidden; 
        box-shadow: 0 4px 6px rgba(0,0,0,0.05); 
    }
    .table thead th { 
        background-color: #343a40; 
        color: #ffffff; 
        font-weight: 600;
        border-bottom-width: 0; 
        font-size: 0.9rem;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        vertical-align: middle;
    }
    .table tbody td {
        font-size: 0.85rem; 
        vertical-align: middle; 
    }
    .table tbody tr:hover {
        background-color: #f1f1f1; 
    }
    .table .badge {
        font-size: 0.75em; 
        padding: 0.5em 0.75em;
    }
    .btn-action-group .btn, .btn-action-group form { 
        display: inline-block; 
        margin-right: 5px; 
        margin-bottom: 5px;
    }
    .btn-action-group .btn:last-child, .btn-action-group form:last-child {
        margin-right: 0;
    }

    .custom-alert {
      border-left-width: 4px;
      border-radius: 5px;
      padding: 1rem 1.25rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 1.5rem;
    }
    .custom-alert-info { border-left-color: #0dcaf0; background-color: #e8f8fd; color: #0c5460; }
    .custom-alert-success { border-left-color: #198754; background-color: #e8fce8; color: #155724; }
    .custom-alert-danger { border-left-color: #dc3545; background-color: #fde8e8; color: #842029; }
    .custom-alert-warning { border-left-color: #ffc107; background-color: #fff8e5; color: #856404; }
    
    .alert-icon { margin-right: 1rem; font-size: 1.5rem; }
    .alert-content { flex: 1; }
    .alert-title { font-weight: 600; margin-top: 0; margin-bottom: 0.25rem; font-size: 1.1rem; }
    .alert-message { font-size: 0.95rem; margin-bottom: 0; }
    
    .custom-alert .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5;
        padding: 0;
        background-color: transparent;
        border: 0;
    }
    .custom-alert .close:hover {
        color: #000;
        text-decoration: none;
        opacity: .75;
    }
    .btn-close-custom { /* Dikosongkan karena .close sudah menangani */ }

    .zindexatas{ z-index: 100; }

    .main-content-title {
        color: #343a40;
        font-weight: 600;
    }
    .border-bottom-custom {
        border-bottom: 1px solid #dee2e6 !important;
    }

    @media (max-width: 767.98px) { 
        .main-content-title.h2 { font-size: 1.5rem; }
        .main-content-title.h4 { font-size: 1.1rem; }
        #content { padding: 1rem !important; }
        .table thead th, .table tbody td { font-size: 0.8rem; padding: 0.5rem; }
        #sidebar .logo span { display: block; font-size: 12px;} 
        .btn-action-group .btn { margin-bottom: 5px; display: inline-block; } 
    }
    @media (max-width: 575.98px) { 
        .alert-icon { font-size: 1.25rem; margin-right: 0.75rem;}
        .alert-title { font-size: 1rem; }
        .alert-message { font-size: 0.9rem; }
        .d-flex.justify-content-between.align-items-center { flex-direction: column; align-items: flex-start !important;}
        .d-flex.justify-content-between.align-items-center .btn { margin-top: 10px; width:100%;}
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
          <h1><a href="{{ route('admin.beranda') }}" class="logo">Hallo Admin<span>&gt; Pengguna</span></a></h1> 
          <ul class="list-unstyled components mb-5">
            <li class="{{ request()->routeIs('admin.beranda') ? 'active' : '' }}"> 
              <a href="{{ route('admin.beranda') }}"><span class="fa fa-home mr-3"></span> Beranda</a>
            </li>
            
            @php
                $isAnnouncementActive = request()->routeIs('admin.announcement.index') || request()->routeIs('admin.announcement.create') || request()->routeIs('admin.announcement.edit');
            @endphp
            <li class="{{ $isAnnouncementActive ? 'active' : '' }}">
              <a href="#announcementSubmenu" data-toggle="collapse" aria-expanded="{{ $isAnnouncementActive ? 'true' : 'false' }}" class="dropdown-toggle"><span class="fa fa-bullhorn mr-3"></span> Pengumuman</a>
              <ul class="collapse list-unstyled {{ $isAnnouncementActive ? 'show' : '' }}" id="announcementSubmenu">
                <li>
                    <a href="{{ route('admin.announcement.index') }}">Lihat Pengumuman</a>
                </li>
                <li>
                    <a href="{{ route('admin.announcement.create') }}">Buat Pengumuman</a>
                </li>
              </ul>
            </li>

            @php
                $isKegiatanActive = request()->routeIs('admin.kegiatan.index') || request()->routeIs('admin.kegiatan.create') || request()->routeIs('admin.kegiatan.edit');
            @endphp
            <li class="{{ $isKegiatanActive ? 'active' : '' }}">
              <a href="#kegiatanSubmenu" data-toggle="collapse" aria-expanded="{{ $isKegiatanActive ? 'true' : 'false' }}" class="dropdown-toggle"><span class="fa fa-rocket mr-3"></span> Kegiatan</a>
              <ul class="collapse list-unstyled {{ $isKegiatanActive ? 'show' : '' }}" id="kegiatanSubmenu">
                <li>
                    <a href="{{ route('admin.kegiatan.index') }}">Lihat Kegiatan</a>
                </li>
                <li>
                    <a href="{{ route('admin.kegiatan.create') }}">Tambah Kegiatan</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#"><span class="fa fa-file-text-o mr-3"></span> Partitur</a>
            </li>

            @php
                $isPenggunaActive = request()->routeIs('admin.pengguna.index') || request()->routeIs('admin.pengguna.create');
            @endphp
            <li class="{{ $isPenggunaActive ? 'active' : '' }}">
                <a href="#userSubmenu" data-toggle="collapse" aria-expanded="{{ $isPenggunaActive ? 'true' : 'false' }}" class="dropdown-toggle"><span class="fa fa-users mr-3"></span> Pengguna</a>
                <ul class="collapse list-unstyled {{ $isPenggunaActive ? 'show' : '' }}" id="userSubmenu">
                    <li class="{{ request()->routeIs('admin.pengguna.index') ? 'active-sub' : '' }}">
                        <a href="{{ route('admin.pengguna.index') }}">Lihat Pengguna</a>
                    </li>
                    <li class="{{ request()->routeIs('admin.pengguna.create') ? 'active-sub' : '' }}">
                        <a href="{{ route('admin.pengguna.create') }}">Tambah Pengguna</a>
                    </li>
                </ul>
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

      <div id="content" class="p-3 p-md-4 p-lg-5" style="width: 100%; overflow-y: auto;">
        <div class="container-fluid">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom-custom">
                <h1 class="h2 main-content-title">Manajemen Pengguna</h1>
                <a href="{{ route('admin.pengguna.create') }}" class="btn btn-success">
                    <i class="fa fa-plus"></i> Tambah Pengguna Baru
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show custom-alert custom-alert-success" role="alert">
                    <div class="alert-icon"><i class="fa fa-check-circle"></i></div>
                    <div class="alert-content">
                        <strong class="alert-title">Berhasil!</strong>
                        <span class="alert-message">{{ session('success') }}</span>
                    </div>
                    <button type="button" class="close btn-close-custom" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show custom-alert custom-alert-danger" role="alert">
                    <div class="alert-icon"><i class="fa fa-times-circle"></i></div>
                    <div class="alert-content">
                        <strong class="alert-title">Gagal!</strong>
                        <span class="alert-message">{{ session('error') }}</span>
                    </div>
                     <button type="button" class="close btn-close-custom" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card shadow-sm table-container">
                <div class="card-header">Daftar Anggota Blue Choir</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered align-middle">
                            <thead class="table-dark"> 
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telepon</th>
                                    <th scope="col">Posisi</th>
                                    <th scope="col">Posisi Suara</th>
                                    <th scope="col" class="text-center">Aksi</th>
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
                                        <span class="badge {{ $user->posisi === 'NonBidang' ? 'bg-danger text-white' : 'bg-primary text-white' }}">
                                            {{ $user->posisi === 'NonBidang' ? 'Admin (NonBidang)' : ucfirst($user->posisi ?? 'Belum diatur') }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge {{ ($user->status ?? '') === 'aktif' ? 'bg-success' : 'bg-warning text-dark' }}">
                                            {{ ucfirst($user->posisi_suara ?? 'Tidak diketahui') }}
                                        </span>
                                    </td>
                                    <td class="btn-action-group text-center">
                                        {{-- Tombol Edit (Placeholder jika tidak ada rute edit pengguna) --}}
                                        <a href="#" class="btn btn-sm btn-warning" title="Edit Pengguna (Belum ada fungsi)">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-danger" title="Hapus Pengguna" data-toggle="modal" data-target="#deleteUserModal{{ $user->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>

                                        <div class="modal fade" id="deleteUserModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel{{ $user->id }}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteUserModalLabel{{ $user->id }}">Hapus Pengguna</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anda yakin akan menghapus pengguna <strong>{{ $user->namadepan }} {{ $user->namabelakang }}</strong> secara permanen?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <form action="{{ route('admin.pengguna.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus Permanen</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center py-4">Tidak ada data pengguna.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if ($users instanceof \Illuminate\Pagination\LengthAwarePaginator && $users->hasPages())
                        <div class="mt-3 d-flex justify-content-center">
                            {{ $users->links() }}
                        </div>
                    @elseif ($users instanceof \Illuminate\Contracts\Pagination\Paginator && $users->hasPages())
                        <div class="mt-3 d-flex justify-content-center">
                            {{ $users->links() }}
                        </div>
                    @endif
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
