<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kepengurusan</title>
    <link rel="icon" type="image/png" href="item/Logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../color.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
</head>

<body>

    <!--Ini navbar ke2-->
    <section data-aos="fade-down">
        <nav class="bg-white navbar navbar-expand-lg navbar-light pg-lib-item py-lg-1" data-navbar-id="vs5372b703bb32-09eb513b-ecd1ec14-b8912b66d28a189a">
          <div class="container">
            <img src="../../item/Logo.png" alt="Bluechoir" width="50" height="36">
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
                  <a class="nav-link px-lg-3 py-lg-4" href="{{ url('/') }}">Tentang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-lg-3 py-lg-4" href="{{ url('/') }}">Kami</a>
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

    <!--Judul-->
    <section class="text-center visimisi" data-aos="fade-down">
        <div class="container">
          <div class="row py-3">
            <div class="col-lg-9 col-xl-8 ms-auto me-auto pb-5 pt-5">
              <h1 class="display-2 fw-bold mb-3 text-light ">Kepengurusan 2025</h1>
              <div class="mt-5">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Judul end-->

      <!--pengurus-->     
   <section class="py-5">
        <!--Non bidang-->
  <div class="container mb-5" data-aos="fade-right">
    <div class="row pb-xl-5 text-center justify-content-center">
      <div class="col-md-10 col-lg-7">
        <h1 class="fw-semibold">Non Bidang</h1>
      </div>
    </div>
    <div class="row mt-2 justify-content-center">
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../Item/nonbid/Jueen.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Jueen Titiahy - Ketua</p>
        <p class="small">Perencanaan Wilayah dan Kota - 2021</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../Item/nonbid/Lordy.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Lordy Parihala - Wakil</p>
        <p class="small">Informatika - 2022</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../Item/nonbid/Marco.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Marcho Tambingan - Sekretaris</p>
        <p class="small">Elektro - 2021</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../Item/nonbid/Nat.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Natasha Najoan - Bendahara</p>
        <p class="small">Informatika - 2021</p>
      </div>
      <hr class="border-2">
    </div>
  </div>
  <!--artistik-->
  <div class="container mb-5" data-aos="fade-left">
    <div class="row pb-xl-5 text-center justify-content-center">
      <div class="col-md-10 col-lg-7">
        <h1 class="fw-semibold">Tim Artistik</h1>
      </div>
    </div>
    <div class="row mt-2 justify-content-center">
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/artistik/clinton.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Clinton Lombogia - Koordinator</p>
        <p class="small">Informatika - 2021</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/artistik/met.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Matthew Rarung - Anggota</p>
        <p class="small">Informatika - 2022</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/artistik/melan.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Melany Br.Marpaung - Anggota</p>
        <p class="small">Perencanaan Wilayah dan Kota - 2022</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/artistik/cley.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Christian Sunkudon - Anggota</p>
        <p class="small">S2 Informatika - 2024</p>
      </div>
      <hr class="border-2">
    </div>
  </div>
  <!--pelatihan-->
  <div class="container mb-5" data-aos="fade-right">
    <div class="row pb-xl-5 text-center justify-content-center">
      <div class="col-md-10 col-lg-7">
        <h1 class="fw-semibold">Kepelatihan</h1>
      </div>
    </div>
    <div class="row mt-2 justify-content-center">
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/pelatihan/3.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Trisonli Kawalo - Koordinator</p>
        <p class="small">Sipil - 2021</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/pelatihan/henok.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Henoch Saroinsong - Anggota</p>
        <p class="small">Informatika - 2022</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/pelatihan/jes.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Jessica Felicia - Anggota</p>
        <p class="small">Sipil - 2022</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/pelatihan/edo.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Eduardo Waworundeng - Anggota</p>
        <p class="small">Sipil - 2024</p>
      </div>
      <hr class="border-2">
    </div>
  </div>
  <!--Keanggotaan-->
  <div class="container mb-5" data-aos="fade-left">
    <div class="row pb-xl-5 text-center justify-content-center">
      <div class="col-md-10 col-lg-7">
        <h1 class="fw-semibold">Keanggotaan</h1>
      </div>
    </div>
    <div class="row mt-2 justify-content-center">
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/kenggotaan/eta.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Marieta Soo - Koordinator</p>
        <p class="small">Sipil - 2022</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/kenggotaan/tio.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Christio Manangka - Anggota</p>
        <p class="small">Sipil - 2022</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/kenggotaan/mace.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Putri Tuflasa - Anggota</p>
        <p class="small">Perencanaan Wilayah dan Kota - 2023</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/kenggotaan/chelsea.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Chelsea Pasilan - Anggota</p>
        <p class="small">Sipil - 2024</p>
      </div>
      <hr class="border-2">
    </div>
  </div>
  <!--aset dan perlengkapan-->
  <div class="container mb-5" data-aos="fade-right">
    <div class="row pb-xl-5 text-center justify-content-center">
      <div class="col-md-10 col-lg-7">
        <h1 class="fw-semibold">Aset & Perlengkapan</h1>
      </div>
    </div>
    <div class="row mt-2 justify-content-center">
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/Perlengkapan/dino.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Giliardino Mananeke - Koordinator</p>
        <p class="small">Informatika - 2022</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/Perlengkapan/dwi.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Dwinov Hasugian - Anggota</p>
        <p class="small">Teknik Lingkungan - 2023</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/Perlengkapan/aldo.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Geraldo Tumbelaka - Anggota</p>
        <p class="small">Elektro - 2024</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/Perlengkapan/zeec.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Zaacklee Tengor - Anggota</p>
        <p class="small">Sipil - 2024</p>
      </div>
      <hr class="border-2">
    </div>
  </div>
  <!--Media dan Dokumentasi-->
  <div class="container mb-5" data-aos="fade-left">
    <div class="row pb-xl-5 text-center justify-content-center">
      <div class="col-md-10 col-lg-7">
        <h1 class="fw-semibold">Media & Dokumentasi</h1>
      </div>
    </div>
    <div class="row mt-2 justify-content-center">
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/medok/aldo.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Ronaldo Tjiabrata - Koordinator</p>
        <p class="small">Informatika - 2021</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/medok/me.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Stevandri V. Patty - Anggota</p>
        <p class="small">Informatika - 2024</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/medok/eca.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Ezra Simauw</p>
        <p class="small">Informatika - 2024</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/medok/early.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Early Purukan - Anggota</p>
        <p class="small">Sipil - 2024</p>
      </div>
      <hr class="border-2">
    </div>
  </div>
  <!--Peribadatan-->
  <div class="container mb-5" data-aos="fade-right">
    <div class="row pb-xl-5 text-center justify-content-center">
      <div class="col-md-10 col-lg-7">
        <h1 class="fw-semibold">Peribadatan</h1>
      </div>
    </div>
    <div class="row mt-2 justify-content-center">
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/Peribadatan/miaw.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Srikandi Pusung - Koordinator</p>
        <p class="small">Arsitektur - 2022</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/Peribadatan/andre.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Andreas Mirah - Anggota</p>
        <p class="small">Arsitektur - 2023</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/Peribadatan/vani.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Stevani Wuisan</p>
        <p class="small">Sipil - 2023</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/Peribadatan/tara.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Tarakania Toreh - Anggota</p>
        <p class="small">Arsitektur - 2024</p>
      </div>
      <hr class="border-2">
    </div>
  </div>
  <!--Kewirausahaan-->
  <div class="container mb-5" data-aos="fade-left">
    <div class="row pb-xl-5 text-center justify-content-center">
      <div class="col-md-10 col-lg-7">
        <h1 class="fw-semibold">Kewirausahaan</h1>
      </div>
    </div>
    <div class="row mt-2 justify-content-center">
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/kewira/ping.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Christiani Lantang - Koordinator</p>
        <p class="small">Informatika - 2022</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/kewira/sweet.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Sweetly Manopo - Anggota</p>
        <p class="small">Informatika - 2022</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 pt-5 pt-lg-0 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/kewira/jess.png" class="rounded-circle" />
        <p class="mt-4 mb-0 fs-6 fw-semibold">Jessica Keintjiem</p>
        <p class="small">Sipil - 2022</p>
      </div>
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/kewira/oyen.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Christiovani Goni - Anggota</p>
        <p class="small">Elektro - 2024</p>
      </div>
      <hr class="border-2">
    </div>
  </div>
  <!--Pelatih-->
  <div class="container mb-5" data-aos="fade-right" data-aos="fade-left">
    <div class="row pb-xl-5 text-center justify-content-center">
      <div class="col-md-10 col-lg-7">
        <h1 class="fw-semibold">Pelatih</h1>
      </div>
    </div>
    <div class="row mt-2 justify-content-center">
      <div class="col-md-8 col-lg-4 col-xl-3 m-auto text-center">
        <img alt="image" style="width:160px; height: 160px;" src="../allacces/Kepengurusan2025/Item/pelatih/kakRef.png" class="rounded-circle" />
        <p class="mt-4 fw-semibold fs-6 mb-0">Refly Rondonuwu</p>
      </div>
    </div>
  </div>
</section>

  <!--penguerus end--> 
  

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
                    <img src="../item/Logo.png" alt="Logo Blue Choir" height="70" width="90" class="mb-4 mx-auto">

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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>