@extends("layouts.main")

@section("title", "Sejarah Sekolah - SDN BANDARHARJO 02 SEMARANG")

@section("content")
<div class="container py-4">
  <!-- Title Header -->
  <div class="text-center mb-5">
    <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-2">PROFIL SEKOLAH</span>
    <h2 class="font-passion-one display-5 text-dark mb-2">Sejarah Singkat SDN Bandarharjo 02</h2>
    <p class="text-muted mx-auto" style="max-width: 650px; font-size: 15px;">
      Mengenal lebih dekat perjalanan, perkembangan, dan fasilitas SD Negeri Bandarharjo 02 Kota Semarang dari masa ke masa.
    </p>
  </div>

  <div class="row justify-content-center gy-4">
    <!-- Banner Gedung Sekolah -->
    <div class="col-lg-10">
      <div class="card border-0 rounded-4 shadow-sm overflow-hidden mb-4">
        <img src="{{ asset('images/wide-sdn02.png') }}" class="img-fluid w-100" alt="Gedung SDN 02 Bandarharjo" style="max-height: 420px; object-fit: cover;">
      </div>
    </div>

    <!-- Sejarah Singkat -->
    <div class="col-lg-10">
      <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white mb-4 hover-elevate">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="rounded-4 d-flex align-items-center justify-content-center text-white shadow-sm flex-shrink-0" 
               style="width: 48px; height: 48px; background: linear-gradient(135deg, #f07c1a 0%, #cc6900 100%);">
            <i class="bi bi-clock-history fs-4"></i>
          </div>
          <div>
            <span class="text-uppercase text-muted fw-bold" style="font-size: 11px; letter-spacing: 0.5px;">Kilasan Historis</span>
            <h4 class="mb-0 fw-bold font-passion-one text-dark">Perjalanan Sejarah</h4>
          </div>
        </div>

        <p class="text-dark" style="font-size: 15.5px; line-height: 1.8;">
          <strong>SD Negeri Bandarharjo 02</strong> adalah salah satu institusi pendidikan dasar negeri di bawah naungan Dinas Pendidikan Kota Semarang. Menjalankan operasionalnya pertama kali pada tahun <strong>1974</strong> dengan Nomor Statistik Sekolah: <code>101030113019</code> dengan nama awal <strong>SD Inpres KSP Bandarharjo</strong>.
        </p>
        <p class="text-dark mb-0" style="font-size: 15.5px; line-height: 1.8;">
          Pada tahun <strong>1980</strong>, sekolah berganti nama menjadi <strong>SD Negeri Bandarharjo 03</strong>. Selanjutnya, berdasarkan Surat Keputusan Gubernur Kepala Daerah Tingkat I Jawa Tengah Nomor: <code>421.2/08799</code> tertanggal 17 November 2000 tentang Pembaharuan Surat Keputusan Sekolah Dasar Negeri, nama sekolah resmi disahkan menjadi <strong>SD Negeri Bandarharjo 02</strong> hingga saat ini.
        </p>
      </div>
    </div>

    <!-- Letak Geografis -->
    <div class="col-lg-10">
      <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white mb-4 hover-elevate">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="rounded-4 d-flex align-items-center justify-content-center text-white shadow-sm flex-shrink-0" 
               style="width: 48px; height: 48px; background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);">
            <i class="bi bi-compass fs-4"></i>
          </div>
          <div>
            <span class="text-uppercase text-muted fw-bold" style="font-size: 11px; letter-spacing: 0.5px;">Lokasi Wilayah</span>
            <h4 class="mb-0 fw-bold font-passion-one text-dark">Letak Geografis</h4>
          </div>
        </div>

        <p class="text-dark mb-4" style="font-size: 15px; line-height: 1.7;">
          SD Negeri Bandarharjo 02 terletak di <strong>Jl. Lodan Raya No. 1</strong>, Kelurahan Bandarharjo, Kecamatan Semarang Utara, Kota Semarang, Jawa Tengah. Sekolah ini berdiri di atas tanah seluas <strong>2.070 m²</strong> dengan batas wilayah sebagai berikut:
        </p>

        <div class="row g-3">
          <div class="col-sm-6 col-lg-3">
            <div class="p-3 rounded-3 bg-light text-center h-100">
              <span class="badge bg-primary px-3 py-1 rounded-pill mb-2">Sebelah Utara</span>
              <p class="mb-0 fw-semibold text-dark small">Pemukiman Warga</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="p-3 rounded-3 bg-light text-center h-100">
              <span class="badge bg-primary px-3 py-1 rounded-pill mb-2">Sebelah Selatan</span>
              <p class="mb-0 fw-semibold text-dark small">Kawasan Industri / Pabrik</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="p-3 rounded-3 bg-light text-center h-100">
              <span class="badge bg-primary px-3 py-1 rounded-pill mb-2">Sebelah Timur</span>
              <p class="mb-0 fw-semibold text-dark small">Kawasan Pabrik</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="p-3 rounded-3 bg-light text-center h-100">
              <span class="badge bg-primary px-3 py-1 rounded-pill mb-2">Sebelah Barat</span>
              <p class="mb-0 fw-semibold text-dark small">Sungai Kali Semarang</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Fasilitas Sekolah -->
    <div class="col-lg-10">
      <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white mb-4 hover-elevate">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="rounded-4 d-flex align-items-center justify-content-center text-white shadow-sm flex-shrink-0" 
               style="width: 48px; height: 48px; background: linear-gradient(135deg, #059669 0%, #047857 100%);">
            <i class="bi bi-building-check fs-4"></i>
          </div>
          <div>
            <span class="text-uppercase text-muted fw-bold" style="font-size: 11px; letter-spacing: 0.5px;">Sarana Penunjang</span>
            <h4 class="mb-0 fw-bold font-passion-one text-dark">Fasilitas Sekolah</h4>
          </div>
        </div>

        <p class="text-muted small mb-4">
          Untuk mendukung proses Kegiatan Belajar Mengajar (KBM) yang nyaman, tertib, dan optimal, sekolah memiliki fasilitas:
        </p>

        <div class="row g-3">
          <div class="col-md-6 col-lg-4">
            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light">
              <i class="bi bi-door-open-fill text-primary fs-4"></i>
              <span class="fw-semibold text-dark small">12 Ruang Kelas Belajar</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light">
              <i class="bi bi-person-workspace text-primary fs-4"></i>
              <span class="fw-semibold text-dark small">1 Ruang Kepala Sekolah & Tamu</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light">
              <i class="bi bi-people-fill text-primary fs-4"></i>
              <span class="fw-semibold text-dark small">1 Ruang Guru Terpadu</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light">
              <i class="bi bi-book-half text-primary fs-4"></i>
              <span class="fw-semibold text-dark small">Perpustakaan & Ruang Komputer</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light">
              <i class="bi bi-heart-pulse-fill text-danger fs-4"></i>
              <span class="fw-semibold text-dark small">1 Ruang UKS Sekolah</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light">
              <i class="bi bi-moon-stars-fill text-warning fs-4"></i>
              <span class="fw-semibold text-dark small">1 Mushola Ibadah</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light">
              <i class="bi bi-droplet-fill text-info fs-4"></i>
              <span class="fw-semibold text-dark small">2 Kamar Mandi Guru</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light">
              <i class="bi bi-droplet-half text-info fs-4"></i>
              <span class="fw-semibold text-dark small">5 Toilet Siswa</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex align-items-center gap-3 p-3 rounded-3 bg-light">
              <i class="bi bi-cup-hot-fill text-success fs-4"></i>
              <span class="fw-semibold text-dark small">3 Kantin Sehat Sekolah</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
