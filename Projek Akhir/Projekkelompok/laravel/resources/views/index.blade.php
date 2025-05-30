
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blue Choir</title>
  <link rel="icon" type="image/png" href="item/Logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('color.css') }}">
  </head>


<body>
      <!--Ini navbar ke2-->
      <section data-aos="fade-down" class="position-relative col-12">
        <nav class="bg-light navbar navbar-expand-lg navbar-light pg-lib-item py-lg-1 opacity-10" data-navbar-id="vs5372b703bb32-09eb513b-ecd1ec14-b8912b66d28a189a">
          <div class="container">
            <img src="item/Logo.png" alt="logoBC" width="50" height="36">
            <a class="fw-bold navbar-brand fs-4" href="{{ url('/') }}">
              <span><SPan class="warnaputih">.</SPan>    BLUE CHOIR</span>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vs5372b703bb32-09eb513b-ecd1ec14-b8912b66d28a189a" aria-controls="vs5372b703bb32-09eb513b-ecd1ec14-b8912b66d28a189a" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="vs5372b703bb32-09eb513b-ecd1ec14-b8912b66d28a189a">
              <ul class="mb-2 mb-lg-0 me-lg-auto navbar-nav">
                <li class="nav-item">
                  <a class="nav-link px-lg-3 py-lg-4" aria-current="page" href="{{ url('/BCNews') }}">Berita</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-lg-3 py-lg-4" href="#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-lg-3 py-lg-4" href="#kami">Kami</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle px-lg-3 py-lg-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Lainnya
                  </a>
                  <ul class="dropdown-menu z-3">
                    <li><a class="dropdown-item" href="{{ url('/Sejarah') }}">Sejarah</a></li>
                    <li><a class="dropdown-item" href="{{ url('/Prestasi') }}">Prestasi</a></li>
                    <li><a class="dropdown-item" href="{{ url('/kepengurusan') }}">Kepengurusan 2025</a></li>
                    <li><a class="dropdown-item" href="{{ url('/Visi&Misi') }}">Visi Misi</a></li>
                    <li><a class="dropdown-item" href="{{ url('/OpenRecruitment') }}">open recruitment</a></li>
                    <li><hr class="dropdown-divider"></li>
                  </ul>
                </li>
              </ul>
              
              <div class="d-flex flex-wrap gap-2 py-1">
                <a href="#" class="btn btn-dark pb-2 pe-4 ps-4 pt-2 " data-bs-toggle="modal" data-bs-target="#loginModal">Masuk</a>
              </div>
            </div>
          </div>
        </nav>
      </section>
    <!--Navbar 2 end-->
      

      <!--Ini untuk bagian konten utama-->
      <section class="pt-lg-5 containerku" data-aos="fade-down">  
        <div class="container ">
          <div class="pt-5 ">
            <div class="row ">
              <div class="col-12 ">
                <div class="row align-items-center position-relative px-lg-5">
                  <div class=" col-12 ">
                    <div class="d-flex flex-column gap-7 mb-4 mb-md-0">
                      <div class="d-flex flex-column gap-3 mb-md-5">
                        <div class="d-flex flex-row align-items-center ">
                          <a href="{{ url('/OpenRecruitment') }}" class="border px-3 rounded-pill text-decoration-none py-1 small">
                            <span class="warnaputih">Gabung Bersama Kami!</span>
                            <span class="ms-1">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="warnaputih bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path>
                              </svg>
                            </span>
                          </a>
                        </div>
                        <div class="d-flex flex-column gap-5 mb-3">
                          <div class="d-flex flex-column gap-3 ">
                            <p class="mb-0 display-4 fw-semibold warnaputih ">Paduan Suara Mahasiswa Fakultas</span><br>Teknik Universitas Sam Ratulangi</p>
                            <p class="mb-0 lead"><h4 class="warnaputih"><span class="text-warning"><br><br>In Festo et Amaro, Alleluia!</span><br><i>Dalam susah maupun senang, Pujilah Tuhan!</i></h4></p>
                          </div>
                          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>
          </div>
          <video autoplay muted loop class="background-video">
            <source src="item/videobuka.mp4" type="video/mp4">
      </section>
      <!--Konten utama end-->

<!--Program Unggulan-->
      <section class="my-5" >
        <div class="container "  >
          <div class="row justify-content-center mb-5 pb-xl-3" data-aos="fade-up" >
            <div class="col-lg-7 text-center "  >
              <div class="section-title " >
                <h2 class="fw-semibold" id="tentang">Kenali Kami Lebih Dekat</h2>
                <div class="divider mx-auto my-4"></div>
                <p>Blue Choir adalah Organisasi Kemahasiswaan Fakultas Teknik Univeristas Sam Ratulangi yang awal berdiri pada tahun 1989. Blue Choir memiliki program unggulan di bawah ini.</p>
              </div>
            </div>
          </div>
          <div class="row g-4" >
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" >
              <div class="border rounded p-5 shadow-lg" >
                <div class="icon d-flex align-items-center " >
                  <i class="bi bi-trophy fs-1 me-3 text-primary"></i>
                  <h4 class="my-3 fs-5" >Kompetisi</h4>
                </div>
                <div class="content " >
                  <p class="m-0" >Prestasi Gemilang di Ajang Paduan Suara Regional, Nasional, dan Internasional.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 "  data-aos="zoom-in">
              <div class="border rounded p-5 shadow-lg" >
                <div class="icon d-flex align-items-center " >
                  <i class="bi bi-star fs-1 me-3 text-danger"></i>
                  <h4 class="my-3 fs-5" >Pelayanan Mingguan</h4>
                </div>
                <div class="content " >
                  <p class="m-0" >Mengagungkan Nama Tuhan lewat Pelayanan Pujian Mingguan di gereja.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 "  data-aos="zoom-in">
              <div class="border rounded p-5 shadow-lg" >
                <div class="icon d-flex align-items-center " >
                  <i class="bi bi-person-standing fs-1 me-3 text-danger"></i>
                  <h4 class="my-3 fs-5" >BC on Stage</h4>
                </div>
                <div class="content " >
                  <p class="m-0" >Meningkatkan Branding dan Memperluas Peluang dengan Job Eksternal dan Internal.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 "  data-aos="zoom-in">
              <div class="border rounded p-5 shadow-lg" >
                <div class="icon d-flex align-items-center " >
                  <i class="bi bi-book fs-1 me-3 text-success"></i>
                  <h4 class="my-3 fs-5" >BC Learning</h4>
                </div>
                <div class="content " >
                  <p class="m-0" >Mengadakan Sesi Eksklusif untuk Pemahaman Teori Musik bagi Penyanyi.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 " data-aos="zoom-in" >
              <div class="border rounded p-5 shadow-lg" >
                <div class="icon d-flex align-items-center " >
                  <i class="bi bi-backpack2 fs-1 me-3"></i>
                  <h4 class="my-3 fs-5" >Far From Home</h4>
                </div>
                <div class="content " >
                  <p class="m-0" >Mengadakan Latihan di Luar Kampus untuk Menciptakan Suasana Baru bagi Anggota.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 "  data-aos="zoom-in">
              <div class="border rounded p-5 shadow-lg" >
                <div class="icon d-flex align-items-center " >
                  <i class="bi bi-emoji-laughing fs-1 me-3 text-primary"></i>
                  <h4 class="my-3 fs-5" >Choral Clinic</h4>
                </div>
                <div class="content" >
                  <p class="m-0" >Pelatih Profesional untuk Meningkatkan Hasil Latihan Paduan Suara.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Program Unggulan end-->

      <!--Keberhassilan kami-->
      <section class="bg-light py-3 py-md-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="container"  >
          <div class="row justify-content-md-center"  >
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 mb-5 pb-md-3 text-center"  >
              <h6 class="mb-2 text-uppercase small" id="kami">Keberhasilan Kami</h6>
              <h2 class="fw-semibold mb-3" >Kami selalu menghadirkan terobosan baru, capaian kami nyata dan terbukti</h2>
            </div>
          </div>
        </div>
        <div class="container"  >
          <div class="row gy-4 gy-lg-0 align-items-lg-center shadow-lg"  >
            <div class="col-12 col-lg-6 embed-responsive embed-responsive-16by9"  >
              <video class="w-100" autoplay muted loop controls>
                <source src="item/bc.mp4" type="video/mp4">
            </video>
            </div>
            <div class="col-12 col-lg-6"  >
              <div class="row justify-content-xl-end"  >
                <div class="col-12 col-xl-10"  >
                  <div class="row gy-4 gy-sm-0"  >
                    <div class="col-12 col-sm-6"  >
                      <div class="card border-0 shadow-sm mb-4" >
                        <div class="card-body text-center p-4 p-xxl-5" >
                          <h3 class="mb-2 display-6 fw-semibold" >>60</h3>
                          <p class="mb-0" >Penyanyi aktif</p>
                        </div>
                      </div>
                      <div class="card border-0 shadow-sm" >
                        <div class="card-body text-center p-4 p-xxl-5" >
                          <h3 class="mb-2 display-6 fw-semibold" >>5</h3>
                          <p class="mb-0" >Prestasi Nasional</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6"  >
                      <div class="card border-0 shadow-sm mt-lg-6 mt-xxl-8 mb-4 mt-xxl-5 mt-lg-4" >
                        <div class="card-body text-center p-4 p-xxl-5" >
                          <h3 class="mb-2 display-6 fw-semibold" >>1k</h3>
                          <p class="mb-0" >Alumni</p>
                        </div>
                      </div>
                      <div class="card border-0 shadow-sm" >
                        <div class="card-body text-center p-4 p-xxl-5" >
                          <h3 class="mb-2 display-6 fw-semibold" >>10</h3>
                          <p class="mb-0" >Prestasi Internasional</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Keberhassilan kami end-->


      <!--Tim kepemimpinan kami-->
      <section class="py-5 bg-opacity-10 bg-secondary" data-aos="fade-right">
        <div class="container py-lg-5"  >
          <div class="row"  >
            <div class="col-md-6 "  >
              <div class="mb-7 pb-2 mb-5" >
                <h2 class="mb-3 fw-semibold" >Tim Kepemimpinan Blue Choir 2025</h2>
                <p class="mb-0 lead" >Non Bidang</p>
              </div>
            </div>
          </div>
          <div >
            <div class="row row-cols-xl-5 row-cols-md-3 row-cols-1 g-4 "  >
              <div class="col "  >
                  <div class="card text-center shadow-sm border-0 " >
                    <div class="card-body " >
                      <div class="mb-4 " >
                        <img src="item/nonbid/Jueen.png" alt="team" class="rounded-circle" style="width:150px; height:150px"  >
                      </div>
                      <div class="mb-2 " >
                        <h4 class="mb-0 h5" >Jueen Titiahy</h4>
                        <span class="small" >Ketua - PWK</span>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col "  >
                  <div class="card text-center shadow-sm border-0 " >
                    <div class="card-body " >
                      <div class="mb-4 " >
                        <img src="item/nonbid/Lordy.png" alt="team" class="rounded-circle" style="width:150px; height:150px;"  >
                      </div>
                      <div class="mb-2 " >
                        <h4 class="mb-0 h5" >Lordy Parihala</h4>
                        <span class="small" >Wakil - Informatika</span>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col "  >
                  <div class="card text-center shadow-sm border-0 " >
                    <div class="card-body " >
                      <div class="mb-4 " >
                        <img src="item/nonbid/Marco.png" alt="team" class="rounded-circle" style="width:150px; height:150px;"  >
                      </div>
                      <div class="mb-2 " >
                        <h4 class="mb-0 h5" >Marcho T</h4>
                        <span class="small" >Sekretaris - Elektro</span>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col "  >
                  <div class="card text-center shadow-sm border-0 " >
                    <div class="card-body " >
                      <div class="mb-4 " >
                        <img src="item/nonbid/Nat.png" alt="team" class="rounded-circle" style="width:150px; height:150px;"  >
                      </div>
                      <div class="mb-2 " >
                        <h4 class="mb-0 h5" >Natasha Najoan</h4>
                        <span class="small" >Bendahara - Informatika</span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Tim kepemimpinan end-->

      <!--Berita-->
      <section class="bg-light pg-lib-item" >
        <div class="container py-3"  >
        <div class="mb-7 mb-5" >
                <h2 class="mb-3 fw-semibold" >BCNews</h2>
              </div>
          <div class="justify-content-center row g-4"  >
            <div class="col-lg-4 col-md-6"  >
              <div class="bg-white shadow rounded" >
                <a href="https://bisnismanado.com/2024/09/17/blue-choir-fakultas-teknik-unsrat-raih-dua-emas-di-picf-2024/" target="_blank" class="d-block" >
                  <img src="item/PICF.png" class="img-fluid w-100 rounded-top" alt="..." width="700" height="480"  >
                </a>
                <div class="py-4 px-3" >
                  <a href="https://bisnismanado.com/2024/09/17/blue-choir-fakultas-teknik-unsrat-raih-dua-emas-di-picf-2024/" target="_blank" class="text-dark text-decoration-none" >
                    <h4 class="mb-3 fs-5" >Blue Choir Fakultas Teknik Unsrat Raih Dua Emas di PICF 2024.</h4>
                  </a>
                  <div class="align-items-center d-flex justify-content-between small" >
                    <a href="https://bisnismanado.com/2024/09/17/blue-choir-fakultas-teknik-unsrat-raih-dua-emas-di-picf-2024/" target="_blank" class="align-items-center d-flex text-dark text-decoration-none" >
                      <div >
                        <p class="mb-0 text-secondary" >17 September 2024</p>
                      </div>
                    </a>
                    <span class="text-secondary" >8 min read</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6"  >
              <div class="bg-white shadow rounded" >
                <a href="https://fatek.unsrat.ac.id/blue-choir-raih-gold-medal-pada-11th-bali-international-choir-festival-2022/"  target="_blank" class="d-block" >
                  <img src="item/BICF.png" class="img-fluid w-100 rounded-top" alt="..." width="700" height="480"  >
                </a>
                <div class="py-4 px-3" >
                  <a href="https://fatek.unsrat.ac.id/blue-choir-raih-gold-medal-pada-11th-bali-international-choir-festival-2022/" target="_blank" class="text-dark text-decoration-none" >
                    <h4 class="mb-3 fs-5" >Blue Choir Raih Gold Medal pada 11th BICF 2022.</h4>
                  </a>
                  <div class="align-items-center d-flex justify-content-between small" >
                    <a href="https://fatek.unsrat.ac.id/blue-choir-raih-gold-medal-pada-11th-bali-international-choir-festival-2022/" target="_blank" class="align-items-center d-flex text-dark text-decoration-none" >
                      <div >
                        <p class="mb-0 text-secondary" >29 Juli 2022</p>
                      </div>
                    </a>
                    <span class="text-secondary" >5 min read</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
 
          <!-- Login Modal -->
          <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Masuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show login-card-error" role="alert">
                            <ul class="mb-0 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('status')) 
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('error')) 
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                <form action="{{ route('postlogin.attempt') }}" class="form-login d-flex text-center flex-column" method="POST">
                   @csrf
                    <img src="item/Logo.png" alt="Logo Blue Choir" height="70" width="90" class="mb-4 mx-auto">

                    <h1 class="h3 mb-4">Masuk ke BlueChoir</h1>

                    <label for="username" class="sr-only"></label>
                    <input type="text" id="nim" name="nim" class="form-control mb-2 border border-dark" placeholder="Masukkan NIM" required autofocus>

                    <label for="password" class="sr-only"></label>
                    <input type="password" id="password" name="password" class="form-control mb-2 border border-dark" placeholder="Masukkan Kata Sandi" required autofocus>

                    <button type="submit" class="btn btn-primary btn-block" name="login" value="Login">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <!--Login Form end-->
    
<!--Social media-->
    <section class="py-5" >
      <div class="container"  >
        <div class="row text-center justify-content-center"  >
          <div class="col-12 col-lg-7 col-md-9"  >
            <h2 >Ikuti Sosial Media Kami</h2>
            <p class="lead" >Temukan informasi terkini Blue Choir.</p>
            <ul class="list-inline mt-4"  data-vs-ul-droppable="yes">
              <li class="list-inline-item" >
                <a href="https://www.instagram.com/bluechoir/" target="_blank" class="d-flex justify-content-center align-items-center bg-secondary text-white rounded" data-type="external" style="width: 32px; height:32px;" >
                  <i class="bi bi-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item" >
                <a href="https://www.youtube.com/@bluechoir1996" target="_blank" class="d-flex justify-content-center align-items-center bg-secondary text-white rounded" data-type="external" style="width: 32px; height:32px;" >
                  <i class="bi bi-youtube"></i>
                </a>
              </li>
              <li class="list-inline-item" >
                <a href="https://www.tiktok.com/@blue.choir" target="_blank" class="d-flex justify-content-center align-items-center bg-secondary text-white rounded" data-type="external" style="width: 32px; height:32px;" >
                  <i class="bi bi-tiktok"></i>
                </a>
              </li>
              <li class="list-inline-item" >
                <a href="https://www.facebook.com/share/16FAoCaZdh/" target="_blank" class="d-flex justify-content-center align-items-center bg-secondary text-white rounded" data-type="external" style="width: 32px; height:32px;" >
                  <i class="bi bi-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--Social media end-->
     
      <!--Footer-->
      <section class="bg-dark text-white">
        <footer class="pt-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-sm-6 ms-auto flex-grow-1">
                <div class="mb-5 mb-lg-0">
                  <div class="mb-4">
                    <h3 class="fw-semibold">Blue Choir</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="mb-5 mb-lg-0">
                  <h4 class="text-capitalize mb-4 fs-5 fw-medium">Organisasi</h4>
                  <ul class="list-unstyled">
                    <li class="mb-1">
                      <a href="#" class="text-decoration-none text-reset fw-light">BCNews</a>
                    </li>
                    <li class="mb-1">
                      <a href="#" class="text-decoration-none text-reset fw-light">Open Recruitment</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="mb-5 mb-lg-0">
                  <h4 class="text-capitalize mb-4 fs-5 fw-medium">Sosial Media</h4>
                  <ul class="list-unstyled">
                    <li class="mb-1">
                      <a href="https://www.instagram.com/bluechoir/" target="_blank" class="text-decoration-none text-reset fw-light">Instagram</a>
                    </li>
                    <li class="mb-1">
                      <a href="https://www.facebook.com/share/16FAoCaZdh/" target="_blank" class="text-decoration-none text-reset fw-light">Facebook</a>
                    </li>
                    <li class="mb-1">
                      <a href="https://www.youtube.com/@bluechoir1996" target="_blank" class="text-decoration-none text-reset fw-light">Youtube</a>
                    </li>
                    <li class="mb-1">
                      <a href="https://www.tiktok.com/@blue.choir" target="_blank" class="text-decoration-none text-reset fw-light">Tiktok</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="mb-5 mb-lg-0">
                  <h4 class="text-capitalize mb-4 fs-5 fw-medium">Kontak</h4>
                  <h6>
                    <a href="mailto:bluechoir16@gmail.com" target="_blank" class="text-decoration-none text-reset fw-light">
                      <i class="bi bi-envelope me-3"></i>
                      bluechoir16@gmail.com
                    </a>
                  </h6>
                  <h6>
                    <a href="https://wa.me/6281248798145" class="text-decoration-none text-reset fw-light">
                      <i class="bi bi-headset me-3"></i>
                      +6281248798145
                    </a>
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </section>
      <!--Footer end-->
      
      
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
        @if ($errors->has('nim') || $errors->has('password'))
        var loginModalEl = document.getElementById('loginModal');
        if (loginModalEl) {
            var loginModalInstance = bootstrap.Modal.getInstance(loginModalEl) || new bootstrap.Modal(loginModalEl);
            loginModalInstance.show();
        }
      @endif
      </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>