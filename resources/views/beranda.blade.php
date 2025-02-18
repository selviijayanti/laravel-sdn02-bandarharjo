<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Styles -->

  <!--navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/images/logo SD.png" alt="">
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fw-bold" aria-current="page" href="/" style="font-size: 24px">SDN BANDARHAJO
              02</a>
          </li>
        </ul>
        <div class="gap-0">
          <a href="#" style="text-decoration: none;">
            <img src="images/IG.png" alt="Instagram" style="width: 40px;">
          </a>
          <a href="#" style="text-decoration: none;">
            <img src="images/X.png" alt="X" style="width: 40px;">
          </a>
          <a href="#" style="text-decoration: none;">
            <img src="images/fb.png" alt="Facebook" style="width: 40px;">
          </a>
          <a href="#" style="text-decoration: none;">
            <img src="images/youtube.png" alt="YouTube" style="width: 40px;">
          </a>
        </div>
      </div>
    </div>
  </nav>
</head>

<body class="antialiased">

  <!--example button-->
  <div class="d-flex justify-content-evenly">
    <a class="btn btn-primary" href="/" role="button">
      <img src="images/Beranda.png" class="d-block" alt="">
      BERANDA
    </a>
    <a class="btn btn-primary" href="/profil" role="button">
      <img src="images/Profil.png" class="d-block" alt="">
      PROFIL
    </a>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
        data-bs-toggle="dropdown" aria-expanded="false">
        <img src="images/akademik.png" class="d-block" alt="">
        AKADEMIK
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">KURIKULUM</a></li>
        <li><a class="dropdown-item" href="#">KALENDER PENDIDIKAN</a></li>
        <li><a class="dropdown-item" href="#">EKSTRAKULIKULER</a></li>
        <li><a class="dropdown-item" href="#">PRESTASI SISWA</a></li>
        <li><a class="dropdown-item" href="#">SANG JUARA</a></li>
        <li><a class="dropdown-item" href="/ebook">E-BOOK SISWA</a></li>
        <li><a class="dropdown-item" href="#">VIDEO PEMBELAJARAN</a></li>
      </ul>
    </div>
    <a class="btn btn-primary" href="/ekskul" role="button">Ekskul</a>
    <a class="btn btn-primary" href="/prestasi" role="button">Prestasi Siswa</a>
    <a class="btn btn-primary" href="/galerifoto" role="button">Galeri Foto</a>
    <a class="btn btn-primary" href="/galerivideo" role="button">Galeri Video</a>
    <a class="btn btn-primary" href="/berita" role="button">Berita</a>
    <a class="btn btn-primary" href="/contact" role="button">Contact</a>
    <a class="btn btn-primary" href="/pengaduan" role="button">Pengaduan</a>
  </div>

</body>

<!-- Footer -->
<footer style="font-family: Arial, sans-serif; color: white;">
  <!-- Bagian Atas -->
  <div
    style="background-color: #F07C1A; padding: 20px; display: flex; justify-content: space-between; align-items: flex-start;">
    <!-- Kiri: Nama Sekolah dan Sosial Media -->
    <div style="flex: 1;">
      <h3 style="margin: 0; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 700; color: white;">SDN
        Bandaharjo 02</h3>

      <div
        style="margin-top: 10px; background-color: white; display: inline-block; padding: 10px; border-radius: 50px;">
        <a href="#" style="margin: 0 10px; text-decoration: none;">
          <img src="images/IG.png" alt="Instagram" style="width: 40px;">
        </a>
        <a href="#" style="margin: 0 10px; text-decoration: none;">
          <img src="images/X.png" alt="X" style="width: 40px;">
        </a>
        <a href="#" style="margin: 0 10px; text-decoration: none;">
          <img src="images/fb.png" alt="Facebook" style="width: 40px;">
        </a>
        <a href="#" style="margin: 0 10px; text-decoration: none;">
          <img src="images/youtube.png" alt="YouTube" style="width: 40px;">
        </a>
      </div>

    </div>

    <!-- Kanan: Kontak -->
    <div style="flex: 1; text-align: right;">
      <div style="display: flex; justify-content: flex-end; align-items: center; margin-bottom: 10px;">
        <img src="assets/email.png" alt="Email" style="width: 24px; margin-right: 10px;">
        <span>sdnbandaharjo02semarang@gmail.com</span>
      </div>
      <div style="display: flex; justify-content: flex-end; align-items: center;">
        <img src="assets/telp.png" alt="Telp" style="width: 24px; margin-right: 10px;">
        <span>0243563228</span>
      </div>
    </div>
  </div>

  <!-- Bagian Bawah -->
  <div style="background-color: #A65413; padding: 10px; text-align: center;">
    <p style="margin: 0;">Jl. Lodan Raya No.1 Kel. Bandaharjo, Kec. Semarang Utara, Kota Semarang 50175</p>
  </div>
</footer>


<!-- Footer -->

</html>
