@extends("admin.layouts.main")

@section("title", "Dashboard Admin - SDN BANDARHARJO 02 SEMARANG")

@section("content")
  <div class="container-fluid">
    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4 shadow-sm" role="alert">
        <i class="fas fa-check-circle me-1"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h4 class="fw-bold mb-1 text-dark">Ringkasan Statistik Portal</h4>
        <p class="text-muted small mb-0">Pantau dan kelola seluruh konten publikasi SDN Bandarharjo 02 Semarang</p>
      </div>
      <div>
        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill shadow-sm">
          <i class="fas fa-calendar-alt text-warning me-1"></i> {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
        </span>
      </div>
    </div>

    <!-- 4 Statistik Utama -->
    <div class="row g-3 mb-4">
      <!-- Berita -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="small-box bg-info rounded-4 shadow-sm overflow-hidden h-100">
          <div class="inner p-4">
            <h2 class="fw-bold mb-1 text-white">{{ $totalBerita ?? 0 }}</h2>
            <p class="text-white text-opacity-75 mb-0 fw-semibold">Total Berita</p>
          </div>
          <div class="icon">
            <i class="fas fa-newspaper"></i>
          </div>
          <a href="{{ route('berita.index') }}" class="small-box-footer py-2 fw-semibold">
            Kelola Berita <i class="fas fa-arrow-circle-right ms-1"></i>
          </a>
        </div>
      </div>

      <!-- Galeri -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="small-box bg-primary rounded-4 shadow-sm overflow-hidden h-100" style="background: linear-gradient(135deg, #0d6efd, #0b5ed7) !important;">
          <div class="inner p-4">
            <h2 class="fw-bold mb-1 text-white">{{ $totalGaleri ?? 0 }}</h2>
            <p class="text-white text-opacity-75 mb-0 fw-semibold">Foto Galeri</p>
          </div>
          <div class="icon">
            <i class="fas fa-images"></i>
          </div>
          <a href="{{ route('galeri.index') }}" class="small-box-footer py-2 fw-semibold">
            Kelola Galeri <i class="fas fa-arrow-circle-right ms-1"></i>
          </a>
        </div>
      </div>

      <!-- Lomba -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="small-box bg-success rounded-4 shadow-sm overflow-hidden h-100" style="background: linear-gradient(135deg, #198754, #157347) !important;">
          <div class="inner p-4">
            <h2 class="fw-bold mb-1 text-white">{{ $totalLomba ?? 0 }}</h2>
            <p class="text-white text-opacity-75 mb-0 fw-semibold">Data Lomba</p>
          </div>
          <div class="icon">
            <i class="fas fa-trophy"></i>
          </div>
          <a href="{{ route('lomba.index') }}" class="small-box-footer py-2 fw-semibold">
            Kelola Lomba <i class="fas fa-arrow-circle-right ms-1"></i>
          </a>
        </div>
      </div>

      <!-- Pengaduan -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="small-box rounded-4 shadow-sm overflow-hidden h-100 text-white" style="background: linear-gradient(135deg, #f48000, #ff9d3b) !important;">
          <div class="inner p-4">
            <h2 class="fw-bold mb-1 text-white">{{ $totalPengaduan ?? 0 }}</h2>
            <p class="text-white text-opacity-75 mb-0 fw-semibold">Pesan Pengaduan</p>
          </div>
          <div class="icon">
            <i class="fas fa-inbox text-white text-opacity-50"></i>
          </div>
          <a href="{{ route('admin.pengaduan.index') }}" class="small-box-footer py-2 fw-semibold text-white">
            Lihat Pengaduan <i class="fas fa-arrow-circle-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Pintasan Aksi & Informasi Sistem -->
    <div class="row g-4 mb-4">
      <!-- Aksi Cepat -->
      <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white">
          <h5 class="fw-bold text-dark mb-3 d-flex align-items-center">
            <i class="fas fa-bolt text-warning me-2"></i> Akses Pintasan Cepat
          </h5>
          <div class="row g-3">
            <div class="col-sm-6">
              <a href="{{ route('berita.create') }}" class="card p-3 border rounded-3 text-decoration-none text-dark hover-elevate transition-all bg-light">
                <div class="d-flex align-items-center gap-3">
                  <div class="p-3 rounded-circle bg-info-subtle text-info fs-4">
                    <i class="fas fa-pen-nib"></i>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-0">Tulis Berita Baru</h6>
                    <small class="text-muted">Publikasi pengumuman sekolah</small>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-6">
              <a href="{{ route('galeri.create') }}" class="card p-3 border rounded-3 text-decoration-none text-dark hover-elevate transition-all bg-light">
                <div class="d-flex align-items-center gap-3">
                  <div class="p-3 rounded-circle bg-primary-subtle text-primary fs-4">
                    <i class="fas fa-camera"></i>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-0">Unggah Foto Galeri</h6>
                    <small class="text-muted">Dokumentasi momen kegiatan</small>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-6">
              <a href="{{ route('lomba.create') }}" class="card p-3 border rounded-3 text-decoration-none text-dark hover-elevate transition-all bg-light">
                <div class="d-flex align-items-center gap-3">
                  <div class="p-3 rounded-circle bg-success-subtle text-success fs-4">
                    <i class="fas fa-medal"></i>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-0">Tambah Kegiatan Lomba</h6>
                    <small class="text-muted">Informasi kejuaraan siswa</small>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-6">
              <a href="{{ route('admin.pengaduan.index') }}" class="card p-3 border rounded-3 text-decoration-none text-dark hover-elevate transition-all bg-light">
                <div class="d-flex align-items-center gap-3">
                  <div class="p-3 rounded-circle text-warning fs-4" style="background-color: rgba(244, 128, 0, 0.15);">
                    <i class="fas fa-comment-dots"></i>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-0">Kotak Masuk Aspirasi</h6>
                    <small class="text-muted">Kelola pengaduan masyarakat</small>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Info Status Administrator -->
      <div class="col-lg-4">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white">
          <h5 class="fw-bold text-dark mb-3 d-flex align-items-center">
            <i class="fas fa-user-shield text-primary me-2"></i> Akun Administrator
          </h5>
          <div class="d-flex align-items-center gap-3 mb-3 pb-3 border-bottom">
            <div class="p-3 rounded-circle bg-warning text-white fs-3 d-flex align-items-center justify-content-center" style="width: 55px; height: 55px; background-color: var(--color-primary) !important;">
              <i class="fas fa-user"></i>
            </div>
            <div>
              <h6 class="fw-bold mb-0 text-dark">{{ session('username') ?? 'Admin Utama' }}</h6>
              <span class="badge bg-success-subtle text-success">Online / Aktif</span>
            </div>
          </div>

          <div class="small">
            <div class="d-flex justify-content-between mb-2">
              <span class="text-muted">Hak Akses:</span>
              <span class="fw-semibold text-dark">Super Administrator</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span class="text-muted">Status Web:</span>
              <span class="text-success fw-semibold"><i class="fas fa-circle fs-6 me-1"></i> Berjalan Normal</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
              <span class="text-muted">Basis Data:</span>
              <span class="fw-semibold text-dark">MySQL (Port 3306)</span>
            </div>
          </div>

          <div class="mt-auto pt-3 border-top">
            <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary btn-sm w-100 rounded-pill">
              <i class="fas fa-external-link-alt me-1"></i> Pratinjau Website Utama
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection