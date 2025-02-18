<nav class="base-nav font-passion-one position-relative" id="base-nav">
  <div id="base-nav-bg"></div>
  <ul class="nav container-fluid d-flex justify-content-around">
    <li class="nav-item">
      <div class="nav-icon"><img src="{{ asset('images/Beranda.png') }}" alt=""></div>
      <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="#"
        {{ request()->is('/') ? 'aria-current="page"' : '' }}>Beranda</a>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/profil.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle {{ request()->is('profil*') ? 'active' : '' }}" data-bs-toggle="dropdown"
        href="#" role="button" aria-expanded="false"
        {{ request()->is('profil*') ? 'aria-current=page' : '' }}>Profil</a>
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
      <a class="nav-link dropdown-toggle {{ request()->is('akademik*') ? 'active' : '' }}" data-bs-toggle="dropdown"
        href="#" role="button" aria-expanded="false"
        {{ request()->is('akademik*') ? 'aria-current=page' : '' }}>Akademik</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Kalender Pendidikan</a></li>
        <li><a class="dropdown-item" href="#">Ekstrakurikuler</a></li>
        <li><a class="dropdown-item" href="#">Prestasi Siswa</a></li>
        <li><a class="dropdown-item" href="#">E-Book Siswa</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/lomba.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle {{ request()->is('lomba*') ? 'active' : '' }}" data-bs-toggle="dropdown"
        href="#" role="button" aria-expanded="false"
        {{ request()->is('lomba*') ? 'aria-current=page' : '' }}>Lomba</a>
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
      <a class="nav-link dropdown-toggle {{ request()->is('galeri*') ? 'active' : '' }}" data-bs-toggle="dropdown"
        href="#" role="button" aria-expanded="false"
        {{ request()->is('galeri*') ? 'aria-current=page' : '' }}>Galeri</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Galeri Foto</a></li>
        <li><a class="dropdown-item" href="#">Galeri Video</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/pengumuman.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle {{ request()->is('pengumuman*') ? 'active' : '' }}" data-bs-toggle="dropdown"
        href="#" role="button" aria-expanded="false"
        {{ request()->is('pengumuman*') ? 'aria-current=page' : '' }}>Pengumuman</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Berita</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/tautan.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle {{ request()->is('tautan*') ? 'active' : '' }}" data-bs-toggle="dropdown"
        href="#" role="button" aria-expanded="false"
        {{ request()->is('tautan*') ? 'aria-current=page' : '' }}>Tautan</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Tautan 1</a></li>
        <li><a class="dropdown-item" href="#">Tautan 2</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <div class="nav-icon"><img src="{{ asset('images/kontak.png') }}" alt=""></div>
      <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="#">Kontak</a>
    </li>
    <li class="nav-item">
      <div class="nav-icon"><img src="{{ asset('images/pengaduan.png') }}" alt=""></div>
      <a class="nav-link {{ request()->is('pengaduan') ? 'active' : '' }}" href="#">Pengaduan</a>
    </li>
  </ul>
</nav>
