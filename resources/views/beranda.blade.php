@extends("layouts.main")

@section("title", "Beranda - SDN BANDARHARJO 02 SEMARANG")

@section("content")
  <!-- =========================================================
       1. BANNER PPDB & BERITA TERBARU (RESPONSIVE GRID)
       ========================================================= -->
  <div class="row align-items-stretch gy-4 mb-5">
    <!-- Banner PPDB -->
    <div class="col-lg-5 col-md-12">
      <div class="card border-0 rounded-4 shadow-sm overflow-hidden h-100 hover-elevate">
        <img
          src="{{ asset('images/ppdb.png') }}"
          class="img-fluid w-100 h-100 object-fit-cover"
          alt="PPDB SDN Bandarharjo 02"
        />
      </div>
    </div>

    <!-- Berita & Informasi Terbaru -->
    <div class="col-lg-7 col-md-12">
      <div class="card border-0 rounded-4 shadow-sm overflow-hidden h-100">
        <!-- Header Berita -->
        <div class="p-3 px-4 d-flex justify-content-between align-items-center text-white" style="background-color: var(--color-primary);">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-newspaper fs-5"></i>
            <h5 class="mb-0 fw-bold">Berita & Informasi Terbaru</h5>
          </div>
          <a href="/pengumuman/berita" class="text-white text-decoration-none small fw-semibold">
            Lihat Semua <i class="bi bi-arrow-right"></i>
          </a>
        </div>

        <!-- List Berita -->
        <div class="d-flex flex-column divide-y bg-white">
          <!-- Item 1 -->
          <a href="/pengumuman/berita" class="p-3 px-4 d-flex align-items-center border-bottom news-item-link">
            <div
              class="d-flex flex-column align-items-center justify-content-center text-white rounded-3 me-3 flex-shrink-0"
              style="width: 58px; height: 58px; background-color: #2c2a29;"
            >
              <span class="fw-bold fs-5 lh-1">08</span>
              <small class="text-white-50" style="font-size: 11px;">JUN</small>
            </div>
            <div class="flex-grow-1">
              <span class="badge bg-warning text-dark mb-1" style="font-size: 10px;">Pengumuman</span>
              <h6 class="mb-0 fw-bold text-dark news-title">Pengumuman Kelulusan Kelas VI Tahun Ajaran 2022/2023</h6>
            </div>
            <i class="bi bi-chevron-right text-muted ms-2"></i>
          </a>

          <!-- Item 2 -->
          <a href="/pengumuman/berita" class="p-3 px-4 d-flex align-items-center border-bottom news-item-link">
            <div
              class="d-flex flex-column align-items-center justify-content-center text-white rounded-3 me-3 flex-shrink-0"
              style="width: 58px; height: 58px; background-color: #2c2a29;"
            >
              <span class="fw-bold fs-5 lh-1">12</span>
              <small class="text-white-50" style="font-size: 11px;">JUN</small>
            </div>
            <div class="flex-grow-1">
              <span class="badge bg-primary text-white mb-1" style="font-size: 10px;">PPDB</span>
              <h6 class="mb-0 fw-bold text-dark news-title">Pra Pendaftaran PPDB Tanggal 12-16 Juni 2023</h6>
            </div>
            <i class="bi bi-chevron-right text-muted ms-2"></i>
          </a>

          <!-- Item 3 -->
          <a href="/pengumuman/berita" class="p-3 px-4 d-flex align-items-center news-item-link">
            <div
              class="d-flex flex-column align-items-center justify-content-center text-white rounded-3 me-3 flex-shrink-0"
              style="width: 58px; height: 58px; background-color: #2c2a29;"
            >
              <span class="fw-bold fs-5 lh-1">08</span>
              <small class="text-white-50" style="font-size: 11px;">MEI</small>
            </div>
            <div class="flex-grow-1">
              <span class="badge bg-success text-white mb-1" style="font-size: 10px;">Akademik</span>
              <h6 class="mb-0 fw-bold text-dark news-title">Pelaksanaan Penilaian Akhir Tahun (PAT) Genap dan Sumatif Akhir Semester (SAS) Genap</h6>
            </div>
            <i class="bi bi-chevron-right text-muted ms-2"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- =========================================================
       2. SAMBUTAN KEPALA SEKOLAH
       ========================================================= -->
  <div class="d-flex justify-content-center my-5">
    <div class="card border-0 rounded-4 shadow-sm p-3 p-md-4 bg-white text-center hover-elevate" style="max-width: 900px; width: 100%;">
      <img
        src="{{ asset('images/sambutan kepala sekolah.png') }}"
        class="img-fluid rounded-3"
        alt="Sambutan Kepala Sekolah SDN Bandarharjo 02"
        style="width: 100%; height: auto; max-height: 650px; object-fit: contain;"
      />
    </div>
  </div>

  <!-- =========================================================
       3. GALERI KEGIATAN SISWA
       ========================================================= -->
  <div class="my-5">
    <!-- Header Galeri -->
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
      <div>
        <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-2">DOKUMENTASI</span>
        <h2 class="font-passion-one text-dark mb-0 fs-1">Galeri Kegiatan Sekolah</h2>
      </div>
      <a
        class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2"
        href="/galeri/galeri-foto"
      >
        <span>Lihat Semua Foto</span>
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>

    <!-- Card Galeri Grid -->
    <div class="row g-4">
      <div class="col-md-4">
        <a href="/sarapan_bersama" class="text-decoration-none text-dark">
          <div class="card border-0 rounded-4 shadow-sm overflow-hidden h-100 hover-elevate">
            <img src="{{ asset('images/kegiatan1.png') }}" alt="Kegiatan pembiasaan sarapan bersama" class="card-img-top" style="height: 220px; object-fit: cover;" />
            <div class="card-body p-3">
              <h6 class="fw-bold mb-1">Kegiatan Pembiasaan Sarapan Bersama</h6>
              <small class="text-muted">Membangun kebersamaan dan kesehatan siswa.</small>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a href="/upacara" class="text-decoration-none text-dark">
          <div class="card border-0 rounded-4 shadow-sm overflow-hidden h-100 hover-elevate">
            <img src="{{ asset('images/kegiatan2.png') }}" alt="Upacara bendera" class="card-img-top" style="height: 220px; object-fit: cover;" />
            <div class="card-body p-3">
              <h6 class="fw-bold mb-1">Upacara Bendera Setiap Senin</h6>
              <small class="text-muted">Menanamkan kedisiplinan dan rasa nasionalisme.</small>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <div class="card border-0 rounded-4 shadow-sm overflow-hidden h-100 hover-elevate">
          <img src="{{ asset('images/kegiatan3.png') }}" alt="Kegiatan Literasi di halaman Sekolah" class="card-img-top" style="height: 220px; object-fit: cover;" />
          <div class="card-body p-3">
            <h6 class="fw-bold mb-1">Kegiatan Literasi Halaman Sekolah</h6>
            <small class="text-muted">Meningkatkan minat baca dan wawasan anak.</small>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
