<!doctype html>
<html lang="id">
  <head>
  	<title>Partitur - Blue Choir</title>
     <link rel="icon" type="image/png" href="item/Logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <style>
	body{
		background-color: #f4f7f9; 
        overflow-x: hidden;
        font-family: 'Poppins', sans-serif;
        color: #333; 
	}
    .card {
        height: 100%;
        display: flex;
        flex-direction: column;
        background-color: #ffffff;
        border: none; 
        border-radius: 12px; 
        box-shadow: 0 5px 15px rgba(0,0,0,0.08); 
        transition: transform 0.3s ease-out, box-shadow 0.3s ease-out;
    }
    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .card-body {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 1.25rem; 
    }
    .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }
    .card-title {
        font-weight: 600; 
        color: #2c3e50; 
        margin-bottom: 0.3rem;
    }
    .card-text.text-muted.small {
        color: #7f8c8d !important; 
        margin-bottom: 1rem;
    }
    .btn-download-container {
        margin-top: auto; 
    }
    .btn-primary { 
        background-color: #3498db;
        border-color: #3498db;
        border-radius: 25px;
        padding: 0.5rem 1.25rem;
        font-weight: 500;
        transition: background-color 0.2s ease, border-color 0.2s ease;
    }
    .btn-primary:hover, .btn-primary:focus {
        background-color: #2980b9;
        border-color: #2980b9;
    }
    .btn-secondary { 
        border-radius: 25px;
        padding: 0.5rem 1.25rem;
        font-weight: 500;
    }
    .input-group .form-control { 
        border-top-left-radius: 25px;
        border-bottom-left-radius: 25px;
        border-right: none; 
        padding-left: 1.25rem;
    }
    .input-group .form-control:focus {
        box-shadow: none;
        border-color: #3498db;
    }
    .input-group .btn-primary { 
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
     .input-group .btn-secondary { 
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        margin-left: -1px;
    }


    #content {
      margin-left: 270px;
      width: calc(100% - 270px);
      transition: all 0.3s;
      min-height: 100vh;
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
      .zindexmedium {
	    z-index: 90;
	  }
      #content {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
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
	          <li class="active">
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
                <h2 class="mb-0" style="color: #2c3e50; font-weight: 600;">Koleksi Partitur</h2>
            </div>

            <div class="mb-4">
                <form action="{{ route('partitur.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari partitur berdasarkan judul..." value="{{ $queryPencarian ?? '' }}" style="border-color: #bdc3c7;">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Cari</button>
                         @if(isset($queryPencarian) && !empty($queryPencarian))
                            <a href="{{ route('partitur.index') }}" class="btn btn-secondary" title="Hapus Pencarian"><i class="fa fa-times"></i></a>
                        @endif
                    </div>
                </form>
            </div>


            <div class="container-fluid px-0">
                <div class="row">
                    @forelse ($partiturs as $partitur)
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card">
                            @if ($partitur->sampul_path)
                                <img src="{{ Storage::url($partitur->sampul_path) }}" class="card-img-top" alt="Sampul {{ htmlspecialchars($partitur->judul) }}">
                            @else
                                <div class="d-flex align-items-center justify-content-center" style="height: 200px; background-color: #ecf0f1; border-top-left-radius: 12px; border-top-right-radius: 12px;">
                                    <i class="fa fa-music fa-3x text-muted"></i>
                                </div>
                            @endif
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title" title="{{ htmlspecialchars($partitur->judul) }}">{{ Str::limit(htmlspecialchars($partitur->judul), 22) }}</h5>
                                    <p class="card-text text-muted small" title="{{ htmlspecialchars($partitur->pencipta) }}">{{ Str::limit(htmlspecialchars($partitur->pencipta), 28) }}</p>
                                </div>
                                <div class="btn-download-container">
                                @if ($partitur->file_path)
                                    <a href="{{ Storage::url($partitur->file_path) }}" class="btn btn-primary btn-sm w-100" download="{{ htmlspecialchars($partitur->judul) }}.pdf">
                                        <i class="fa fa-download"></i> Unduh PDF
                                    </a>
                                @else
                                    <button class="btn btn-secondary btn-sm w-100" disabled>PDF Tidak Tersedia</button>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center mt-3" style="border-radius: 12px; background-color: #e7f3fe; border-color: #b8daff; color: #31708f;">
                            @if(isset($queryPencarian) && !empty($queryPencarian))
                                Partitur dengan judul "{{ htmlspecialchars($queryPencarian) }}" tidak ditemukan.
                            @else
                                Belum ada partitur yang tersedia saat ini.
                            @endif
                        </div>
                    </div>
                    @endforelse
                </div>
                @if ($partiturs->hasPages())
                <div class="d-flex justify-content-center mt-4 ">
                    {{ $partiturs->appends(['search' => $queryPencarian])->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>