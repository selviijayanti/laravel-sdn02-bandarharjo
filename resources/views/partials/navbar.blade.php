<nav class="base-nav font-passion-one position-relative" id="base-nav">
  <div id="base-nav-bg"></div>
  <ul class="nav container-fluid d-flex justify-content-around">
    <li class="nav-item">
      <div class="nav-icon"><img src="{{ asset('images/Beranda.png') }}" alt=""></div>
      <a class="nav-link" href="/">Beranda</a>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/profil.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
        aria-expanded="false">Profil</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Sejarah Sekolah</a></li>
        <li><a class="dropdown-item" href="#">Visi Misi Sekolah</a></li>
        <li><a class="dropdown-item" href="#">Profil Pendidik</a></li>
        <li><a class="dropdown-item" href="#">Profil Siswa</a></li>
        <li><a class="dropdown-item" href="#">Sarana dan Prasarana</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/akademik.png') }}" alt=""></div>
      <a class="nav-link active dropdown-toggle" aria-current="page" data-bs-toggle="dropdown" href="#"
        role="button" aria-expanded="false">Akademik</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/akademik/kalender-pendidikan">Kalender Pendidikan</a></li>
        <li><a class="dropdown-item" href="/akademik/ekskul">Ekstrakurikuler</a></li>
        <li><a class="dropdown-item" href="#">Prestasi Siswa</a></li>
        <li><a class="dropdown-item" href="/akademik/ebook">E-Book Siswa</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/lomba.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
        aria-expanded="false">Lomba</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Submenu lomba 1</a></li>
        <li><a class="dropdown-item" href="#">Submenu lomba 2</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Link lainnya</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/galeri.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
        aria-expanded="false">Galeri</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Galeri Foto</a></li>
        <li><a class="dropdown-item" href="#">Galeri Video</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/pengumuman.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
        aria-expanded="false">Pengumuman</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Berita</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/tautan.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
        aria-expanded="false">Tautan</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Tautan 1</a></li>
        <li><a class="dropdown-item" href="#">Tautan 2</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <div class="nav-icon"><img src="{{ asset('images/kontak.png') }}" alt=""></div>
      <a class="nav-link" href="#">Kontak</a>
    </li>
    <li class="nav-item">
      <div class="nav-icon"><img src="{{ asset('images/pengaduan.png') }}" alt=""></div>
      <a class="nav-link" href="#">Pengaduan</a>
    </li>
  </ul>
</nav>
