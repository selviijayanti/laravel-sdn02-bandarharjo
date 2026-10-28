@extends('layouts.main')

@section('title', 'E-Book Siswa - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(244, 128, 0, 0.15); color: #e07000; font-weight: 600;">
          Perpustakaan Digital
        </span>
        <h2 class="font-passion-one display-6 text-dark mb-1">KUMPULAN E-BOOK SISWA</h2>
        <p class="text-muted mb-0">Buku Pelajaran Sekolah Elektronik (BSE) SDN Bandarharjo 02 Semarang</p>
        <div class="mx-auto mt-2" style="width: 60px; height: 3px; background: #f48000; border-radius: 2px;"></div>
      </div>

      <div class="alert alert-warning border-0 shadow-sm rounded-4 p-4 mb-4 d-flex align-items-center">
        <div class="fs-1 text-warning me-3"><i class="bi bi-info-circle-fill"></i></div>
        <div>
          <h6 class="fw-bold mb-1">Akses Buku Pelajaran Gratis</h6>
          <p class="mb-0 small text-muted">
            Klik tombol kelas di bawah untuk membuka dan mengunduh berkas e-book materi pelajaran resmi Kemendikbudristek melalui Google Drive sekolah.
          </p>
        </div>
      </div>

      @php
        $ebooks = [
          ['kelas' => 'KELAS 1', 'img' => 'ebook1.png', 'desc' => 'Buku Siswa & Guru Tematik / Kurikulum Merdeka Kelas 1', 'drive' => 'https://drive.google.com/drive/folders/17O-Jqe3iUZfLT0Ghom1ilJn8eugswGQV'],
          ['kelas' => 'KELAS 2', 'img' => 'ebook2.png', 'desc' => 'Buku Siswa & Guru Tematik / Kurikulum Merdeka Kelas 2', 'drive' => 'https://drive.google.com/drive/folders/1xSlQ5RC2K64DRFa9kcbFII8NAgydGrND'],
          ['kelas' => 'KELAS 3', 'img' => 'ebook3.png', 'desc' => 'Buku Siswa & Guru Tematik / Kurikulum Merdeka Kelas 3', 'drive' => 'https://drive.google.com/drive/folders/1nCGSpvRXcVffgw4HrljVlNwNv11yEyeo'],
          ['kelas' => 'KELAS 4', 'img' => 'ebook4.png', 'desc' => 'Buku Siswa & Guru Tematik / Kurikulum Merdeka Kelas 4', 'drive' => 'https://drive.google.com/drive/folders/1w_pxyeOBhiB9JnMONCUfOubeNOKKuz1w'],
          ['kelas' => 'KELAS 5', 'img' => 'ebook5.png', 'desc' => 'Buku Siswa & Guru Tematik / Kurikulum Merdeka Kelas 5', 'drive' => 'https://drive.google.com/drive/folders/1s01VWWmKmxkfvcRIiGJL6bbEekx-F4Bv'],
          ['kelas' => 'KELAS 6', 'img' => 'ebook6.png', 'desc' => 'Buku Siswa & Guru Tematik / Kurikulum Merdeka Kelas 6', 'drive' => 'https://drive.google.com/drive/folders/1kOMSOesDxZUQbWuUSYnEZLE37puGv6uo'],
        ];
      @endphp

      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
        @foreach ($ebooks as $eb)
          <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white text-center hover-elevate transition-all p-3">
              <div class="p-4 d-flex align-items-center justify-content-center bg-light rounded-4 mb-3" style="min-height: 190px;">
                <img
                  src="{{ asset('images/' . $eb['img']) }}"
                  class="img-fluid"
                  alt="{{ $eb['kelas'] }}"
                  style="max-height: 150px; object-fit: contain;"
                />
              </div>
              <div class="card-body p-2 d-flex flex-column justify-content-between">
                <div>
                  <h5 class="font-passion-one fs-4 text-dark mb-1">{{ $eb['kelas'] }}</h5>
                  <p class="text-muted small mb-3">{{ $eb['desc'] }}</p>
                </div>
                <a
                  href="{{ $eb['drive'] }}"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="btn text-white fw-semibold rounded-3 py-2 w-100 d-flex align-items-center justify-content-center"
                  style="background-color: #35AA47; box-shadow: 0 4px 10px rgba(53, 170, 71, 0.25);"
                >
                  <i class="bi bi-google-drive me-2"></i> Buka E-Book {{ $eb['kelas'] }}
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
