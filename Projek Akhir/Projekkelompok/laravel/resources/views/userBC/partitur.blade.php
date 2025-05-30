<!doctype html>
<html lang="id">
  <head>
  	<title>Partitur - Blue Choir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <style>
	body{
		background-color: #DFEAFC;
	}
	/* ... (CSS Anda yang lain tetap sama) ... */

    .card {
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .card-body {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .btn-download-container {
        margin-top: auto;
    }

	@media (max-width: 576px) {
	  .zindexmedium {
	    z-index: 90;
	  }
	}
	.zindexatas{
		z-index: 100;
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
		  		<h1><a href="{{ route('userbcdashboard') }}" class="logo">Blue Choir <span>&gt; Partitur</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="{{ route('userbcdashboard') }}"><span class="fa fa-home mr-3"></span> Beranda</a>
	          </li>
	          <li>
	              <a href="{{ route('pengumuman.index') }}"><span class="fa fa-info-circle mr-3"></span> Pengumuman</a>
	          </li>
	          <li>
              <a href="{{ route('kegiatan.index') }}"><span class="fa fa-calendar mr-3"></span> Kegiatan</a>
	          </li>
	          <li class="active"> {{-- Penanda aktif untuk halaman Partitur --}}
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
                   onclick="event.preventDefault(); document.getElementById('logout-form-partitur-user').submit();">
                   <span class="fa fa-sign-out mr-3"></span> Keluar
                </a>
                <form id="logout-form-partitur-user" action="{{ route('logout') }}" method="POST" style="display: none;">
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
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="text-dark mb-0">Koleksi Partitur</h2>
            </div>

            {{-- AWAL FORM PENCARIAN --}}
            <div class="mb-4">
                <form action="{{ route('partitur.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari partitur berdasarkan judul..." value="{{ $queryPencarian ?? '' }}">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Cari</button>
                         @if(isset($queryPencarian) && !empty($queryPencarian))
                            <a href="{{ route('partitur.index') }}" class="btn btn-secondary" title="Hapus Pencarian"><i class="fa fa-times"></i></a>
                        @endif
                    </div>
                </form>
            </div>
            {{-- AKHIR FORM PENCARIAN --}}


            <div class="container-fluid px-0"> {{-- Menggunakan container-fluid dan menghapus margin atas default dari .container --}}
                <div class="row">
                    @forelse ($partiturs as $partitur)
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card shadow-sm">
                            @if ($partitur->sampul_path)
                                <img src="{{ Storage::url($partitur->sampul_path) }}" class="card-img-top" alt="Sampul {{ htmlspecialchars($partitur->judul) }}">
                            @else
                                <img src="https://via.placeholder.com/200x280.png?text=Partitur" class="card-img-top" alt="Tidak ada sampul">
                            @endif
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title" title="{{ htmlspecialchars($partitur->judul) }}">{{ Str::limit(htmlspecialchars($partitur->judul), 25) }}</h5>
                                    <p class="card-text text-muted small" title="{{ htmlspecialchars($partitur->pencipta) }}">{{ Str::limit(htmlspecialchars($partitur->pencipta), 30) }}</p>
                                </div>
                                <div class="btn-download-container">
                                @if ($partitur->file_path)
                                    <a href="{{ Storage::url($partitur->file_path) }}" class="btn btn-primary btn-sm w-100" download="{{ htmlspecialchars($partitur->judul) }}.pdf">Unduh PDF</a>
                                @else
                                    <button class="btn btn-secondary btn-sm w-100" disabled>PDF Tidak Tersedia</button>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center mt-3">
                            @if(isset($queryPencarian) && !empty($queryPencarian))
                                Partitur dengan judul "{{ htmlspecialchars($queryPencarian) }}" tidak ditemukan.
                            @else
                                Belum ada partitur yang tersedia saat ini.
                            @endif
                        </div>
                    </div>
                    @endforelse
                </div>
                {{-- AWAL Link Paginasi --}}
                @if ($partiturs->hasPages())
                <div class="d-flex justify-content-center mt-4 ">
                    {{ $partiturs->appends(['search' => $queryPencarian])->links() }}
                </div>
                @endif
                {{-- AKHIR Link Paginasi --}}

            </div> 
        </div> 
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>