<!doctype html>
<html lang="id">
  <head>
    <title>Admin - Edit Pengumuman</title>
    {{-- Referensi ke <head> dari adminEditPengumuman.blade.php Anda --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <style>
        body { background-color: #DFEAFC; font-family: 'Poppins', sans-serif; }
        .wrapper { display: flex; width: 100%; align-items: stretch; }
        #sidebar { min-width: 250px; max-width: 250px; background: #343a40; color: #fff; transition: all 0.3s; }
        #sidebar.active { margin-left: -250px; }
        #sidebar .logo { padding: 1.5rem; text-align: center; font-size: 1.5rem; font-weight: bold; color: #fff; text-decoration: none; }
        #sidebar .logo span { font-size: 0.8rem; display: block; color: rgba(255,255,255,0.7); }
        #sidebar ul.components { padding: 20px 0; border-bottom: 1px solid rgba(255,255,255,0.1); }
        #sidebar ul li a { padding: 10px 20px; font-size: 1.1em; display: block; color: rgba(255,255,255,0.8); text-decoration: none; }
        #sidebar ul li a:hover { color: #fff; background: #495057; }
        #sidebar ul li.active > a { color: #fff; background: #007bff; }
        #sidebar .footer { text-align: center; font-size: 0.9em; padding:15px; position: absolute; bottom: 0; width: 100%; }
        #content { width: 100%; padding: 20px; min-height: 100vh; transition: all 0.3s; position: relative; }
        .card { border-radius: .75rem; margin-bottom: 1.5rem; box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.075); }
        .form-label { font-weight: 500; }
        .form-control, .form-select { border-radius: .25rem; box-shadow: none !important; }
        .custom-menu { position: absolute; top: 15px; right: -50px; z-index: 1050; }
        .custom-menu button { color: #fff; background-color: #007bff; border: none; }
    </style>
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                  <i class="fa fa-bars"></i><span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a href="{{ route('admin.beranda') }}" class="logo">Hallo Admin<span>&gt; Pengumuman</span></a></h1>
                <ul class="list-unstyled components mb-5">
                  <li><a href="{{ route('admin.beranda') }}"><span class="fa fa-home mr-3"></span> Beranda</a></li>
                  <li class="active"><a href="{{ route('admin.announcement.index') }}"><span class="fa fa-bullhorn mr-3"></span> Pengumuman</a></li>
                  {{-- ... link sidebar lainnya ... --}}
                </ul>
                 <div class="footer">
                    <ul class="list-unstyled components mb-5"><li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-edit-announcement').submit();"><span class="fa fa-sign-out mr-3"></span> Keluar</a><form id="logout-form-edit-announcement" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form></li></ul>
                    <p><small>&copy; Blue Choir {{ date('Y') }}</small></p>
                </div>
            </div>
        </nav>

        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="container-fluid">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit Pengumuman</h1>
                    <a href="{{ route('admin.announcement.index') }}" class="btn btn-outline-secondary">Kembali ke Daftar</a>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- File Anda: <form method="post" action="proses_pengumuman.php"> --}}
                        <form action="{{ route('admin.announcement.update', $announcement->id) }}" method="POST">
                            @csrf
                            @method('PUT') {{-- Method spoofing untuk update --}}

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subjek Pengumuman <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject', $announcement->subject) }}" required>
                                @error('subject') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Isi Pengumuman <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="6" required>{{ old('content', $announcement->content) }}</textarea>
                                @error('content') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="sender" class="form-label">Pengirim <span class="text-danger">*</span></label>
                                    {{-- File Anda menampilkan select tanpa options di sini, saya ubah ke input teks --}}
                                    <input type="text" class="form-control @error('sender') is-invalid @enderror" id="sender" name="sender" value="{{ old('sender', $announcement->sender) }}" required>
                                    @error('sender') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="publish_date" class="form-label">Tanggal Publish <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control @error('publish_date') is-invalid @enderror" id="publish_date" name="publish_date" value="{{ old('publish_date', $announcement->publish_date->format('Y-m-d')) }}" required>
                                    @error('publish_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script> (function($) { "use strict"; $('#sidebarCollapse').on('click', function () { $('#sidebar').toggleClass('active'); }); })(jQuery); </script>
  </body>
</html>