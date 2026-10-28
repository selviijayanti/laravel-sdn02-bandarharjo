@extends('layouts.main')

@section('title', 'Galeri Video - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(244, 128, 0, 0.15); color: #e07000; font-weight: 600;">
          Dokumentasi Kegiatan
        </span>
        <h2 class="font-passion-one display-6 text-dark mb-1">GALERI VIDEO SEKOLAH</h2>
        <p class="text-muted mb-0">Dokumentasi video kegiatan siswa dan acara SDN Bandarharjo 02 Semarang</p>
        <div class="mx-auto mt-2" style="width: 60px; height: 3px; background: #f48000; border-radius: 2px;"></div>
      </div>

      @php
        $videos = [
          ['id' => 'z6e-oBN_i5Q', 'title' => 'MPLS Hari Pertama SDN Bandarharjo 02', 'kategori' => 'MPLS'],
          ['id' => '6OwdiAlgVdY', 'title' => 'MPLS Hari Kedua SDN Bandarharjo 02', 'kategori' => 'MPLS'],
          ['id' => 'SS57UsAzFHk', 'title' => 'MPLS Hari Ketiga SDN Bandarharjo 02', 'kategori' => 'MPLS'],
          ['id' => 'CUxmVMOvnqE', 'title' => 'Pembukaan MPLS Tahun Ajaran Baru', 'kategori' => 'Kegiatan'],
          ['id' => 'DXncYbxeruA', 'title' => 'Urban Farming Champion SDN Bandarharjo 02', 'kategori' => 'Prestasi'],
          ['id' => 'XjVvMjSe_QI', 'title' => 'Peringatan Tahun Baru Hijriyah 1 Muharram 1443 H', 'kategori' => 'Keagamaan'],
          ['id' => 'uT1ib7nEhAI', 'title' => 'Lomba FLS2N SD Seni Tari Jawa Tengah Kota Semarang', 'kategori' => 'Lomba & Seni'],
          ['id' => 'L7BSCQSR05s', 'title' => 'Juara II Lomba Tari FLS2N Tingkat Kec. Semarang Utara', 'kategori' => 'Prestasi'],
          ['id' => 'roW3Go7aky8', 'title' => 'Keseruan Lomba Peringatan HUT RI 17 Agustus', 'kategori' => 'Peringatan'],
        ];
      @endphp

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($videos as $v)
          <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white hover-elevate transition-all">
              <div class="ratio ratio-16x9">
                <iframe
                  src="https://www.youtube.com/embed/{{ $v['id'] }}"
                  title="{{ $v['title'] }}"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen
                  loading="lazy"
                ></iframe>
              </div>
              <div class="card-body p-4 d-flex flex-column justify-content-between">
                <div>
                  <span class="badge bg-light text-warning border mb-2 fw-semibold px-2 py-1 rounded-pill small">
                    <i class="bi bi-play-circle-fill me-1 text-danger"></i> {{ $v['kategori'] }}
                  </span>
                  <h6 class="card-title fw-bold text-dark lh-base mb-0">{{ $v['title'] }}</h6>
                </div>
                <div class="pt-3 mt-3 border-top text-muted small d-flex justify-content-between align-items-center">
                  <span><i class="bi bi-youtube text-danger me-1"></i> YouTube</span>
                  <a href="https://www.youtube.com/watch?v={{ $v['id'] }}" target="_blank" class="text-decoration-none text-muted small hover-primary">
                    Buka di YouTube <i class="bi bi-box-arrow-up-right ms-1"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
