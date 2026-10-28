<nav class="base-nav font-passion-one position-relative" id="base-nav">
  <div id="base-nav-bg"></div>
  <ul class="nav container-fluid d-flex justify-content-around">
    <li class="nav-item">
      <div class="nav-icon"><img src="{{ asset('images/Beranda.png') }}" alt=""></div>
      <a class="nav-link {{ request()->is('admin') || request()->is('admin/dashboard') ? 'active' : '' }}" href="/admin/dashboard">
        Dashboard
      </a>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/pengumuman.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle {{ request()->is('admin/berita*') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
        Kelola Berita
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('berita.index') }}"><i class="bi bi-list-ul me-2"></i>Daftar Berita</a></li>
        <li><a class="dropdown-item" href="{{ route('berita.create') }}"><i class="bi bi-plus-circle me-2"></i>Tambah Berita</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/galeri.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle {{ request()->is('admin/galeri*') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
        Kelola Galeri
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('galeri.index') }}"><i class="bi bi-images me-2"></i>Daftar Foto Galeri</a></li>
        <li><a class="dropdown-item" href="{{ route('galeri.create') }}"><i class="bi bi-plus-circle me-2"></i>Tambah Foto</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <div class="nav-icon"><img src="{{ asset('images/lomba.png') }}" alt=""></div>
      <a class="nav-link dropdown-toggle {{ request()->is('admin/lomba*') ? 'active' : '' }}" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
        Kelola Lomba
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('lomba.index') }}"><i class="bi bi-trophy me-2"></i>Daftar Lomba</a></li>
        <li><a class="dropdown-item" href="{{ route('lomba.create') }}"><i class="bi bi-plus-circle me-2"></i>Tambah Lomba</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <div class="nav-icon"><img src="{{ asset('images/pengaduan.png') }}" alt=""></div>
      <a class="nav-link {{ request()->is('admin/pengaduan*') ? 'active' : '' }}" href="{{ url('/admin/pengaduan') }}">
        Data Pengaduan
      </a>
    </li>
    <li class="nav-item">
      <div class="nav-icon"><img src="{{ asset('images/kontak.png') }}" alt=""></div>
      <a class="nav-link" href="{{ url('/kontak') }}" target="_blank">
        Lihat Kontak Web
      </a>
    </li>
  </ul>
</nav>