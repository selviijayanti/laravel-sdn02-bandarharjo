<nav class="base-nav font-passion-one position-relative" id="base-nav">
  <div id="base-nav-bg"></div>
  <ul class="nav container-fluid d-flex justify-content-around">
    <li class="nav-item">
      <div class="nav-icon"><img src="{{ asset('images/Beranda.png') }}" alt=""></div>
      <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/"
        {{ request()->is('/') ? 'aria-current="page"' : '' }}>Beranda</a>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/profil.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle {{ request()->is('profil*') ? 'active' : '' }}" data-bs-toggle="dropdown"
        href="#" role="button" aria-expanded="false"
        {{ request()->is('profil*') ? 'aria-current=page' : '' }}>Profil</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/profil/sejarah-sekolah">Sejarah Sekolah</a></li>
        <li><a class="dropdown-item" href="/profil/visi-misi">Visi Misi Sekolah</a></li>
        <li><a class="dropdown-item" href="/profil/pendidik">Profil Pendidik</a></li>
        <li><a class="dropdown-item" href="/profil/siswa">Profil Siswa</a></li>
        <li><a class="dropdown-item" href="/profil/sarana-prasarana">Sarana dan Prasarana</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/akademik.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle {{ request()->is('akademik*') ? 'active' : '' }}" data-bs-toggle="dropdown"
        href="#" role="button" aria-expanded="false"
        {{ request()->is('akademik*') ? 'aria-current=page' : '' }}>Akademik</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/akademik/kalender-pendidikan">Kalender Pendidikan</a></li>
        <li><a class="dropdown-item" href="/akademik/ekstrakurikuler">Ekstrakurikuler</a></li>
        <li><a class="dropdown-item" href="/akademik/prestasi-siswa">Prestasi Siswa</a></li>
        <li><a class="dropdown-item" href="/akademik/ebook-siswa">E-Book Siswa</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/lomba.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle {{ request()->is('lomba*') ? 'active' : '' }}" data-bs-toggle="dropdown"
        href="#" role="button" aria-expanded="false"
        {{ request()->is('lomba*') ? 'aria-current=page' : '' }}>Lomba</a>
        <ul class="dropdown-menu" aria-labelledby="dropdownLomba">
          <li><a class="dropdown-item" href="https://youtu.be/uT1ib7nEhAI?si=YZRGgYarnyolgf6D" target="_blank">Lomba FLS2N SD Seni Tari</a></li>
          <li><a class="dropdown-item" href="https://youtu.be/BuhiN84qZ3Y?si=vSmo24btFamezrR9" target="_blank">Lomba URBAN FARMING</a></li>
          <li><a class="dropdown-item" href="https://youtu.be/L7BSCQSR05s?si=55bI4gK5qgD-xR-W" target="_blank">Lomba TARI FLSN 2019</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/galeri.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle {{ request()->is('galeri*') ? 'active' : '' }}" data-bs-toggle="dropdown"
        href="#" role="button" aria-expanded="false"
        {{ request()->is('galeri*') ? 'aria-current=page' : '' }}>Galeri</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/galeri/galeri-foto">Galeri Foto</a></li>
        <li><a class="dropdown-item" href="/galeri/galeri-video">Galeri Video</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/pengumuman.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle {{ request()->is('pengumuman*') ? 'active' : '' }}" data-bs-toggle="dropdown"
        href="#" role="button" aria-expanded="false"
        {{ request()->is('pengumuman*') ? 'aria-current=page' : '' }}>Pengumuman</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/pengumuman/berita">Berita</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/tautan.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle {{ request()->is('tautan*') ? 'active' : '' }}" data-bs-toggle="dropdown"
        href="#" role="button" aria-expanded="false"
        {{ request()->is('tautan*') ? 'aria-current=page' : '' }}>Tautan</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="https://www.kemdikbud.go.id/">Kemdikbud</a></li>
          <li><a class="dropdown-item" href="https://disdiksmg.semarangkota.go.id/">Dinas Pendidikan</a></li>
        </ul>
    </li>
    <li class="nav-item">
      <div class="nav-icon"><img src="{{ asset('images/kontak.png') }}" alt=""></div>
      <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
    </li>
    <li class="nav-item">
      <div class="nav-icon"><img src="{{ asset('images/pengaduan.png') }}" alt=""></div>
      <a class="nav-link {{ request()->is('pengaduan') ? 'active' : '' }}" href="/pengaduan">Pengaduan</a>
    </li>
  </ul>
</nav>
