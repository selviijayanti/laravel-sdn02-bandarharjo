@extends('layouts.main')

@section('title', 'Ekstrakurikuler - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(244, 128, 0, 0.15); color: #e07000; font-weight: 600;">
          Pengembangan Karakter
        </span>
        <h2 class="font-passion-one display-6 text-dark mb-1">KEGIATAN EKSTRAKURIKULER</h2>
        <p class="text-muted mb-0">Wadah pengembangan minat, bakat, dan potensi siswa SDN Bandarharjo 02 Semarang</p>
        <div class="mx-auto mt-2" style="width: 60px; height: 3px; background: #f48000; border-radius: 2px;"></div>
      </div>

      @php
        $ekskul = [
          ['nama' => 'PRAMUKA', 'icon' => 'assets/pramuka.png', 'url' => '/pramuka', 'kategori' => 'Wajib', 'desc' => 'Membentuk kedisiplinan, kemandirian, dan kepemimpinan siswa.'],
          ['nama' => 'BACA TULIS QURAN', 'icon' => 'assets/btq.png', 'url' => '/BTQ', 'kategori' => 'Keagamaan', 'desc' => 'Pembinaan akhlak mulia dan kefasihan membaca Al-Qur\'an.'],
          ['nama' => 'KOMPUTER', 'icon' => 'assets/komputer.png', 'url' => '/komputer', 'kategori' => 'Teknologi', 'desc' => 'Pengenalan literasi digital dan keterampilan komputer dasar.'],
          ['nama' => 'TAEKWONDO', 'icon' => 'assets/taekwondo.png', 'url' => '/taekwondo', 'kategori' => 'Bela Diri', 'desc' => 'Pelatihan ketahanan fisik, fokus mental, dan bela diri.'],
          ['nama' => 'SENI TARI', 'icon' => 'assets/senitari.png', 'url' => '/seni tari', 'kategori' => 'Kesenian', 'desc' => 'Melestarikan tarian tradisional dan kreasi nusantara.'],
          ['nama' => 'SEPAK TAKRAW', 'icon' => 'assets/takraw.png', 'url' => '/takraw', 'kategori' => 'Olahraga', 'desc' => 'Melatih ketangkasan gerak dan kekompakan tim olahraga.'],
          ['nama' => 'BOLA VOLLY', 'icon' => 'assets/volly.png', 'url' => '/volly', 'kategori' => 'Olahraga', 'desc' => 'Meningkatkan kebugaran jasmani dan sportivitas siswa.'],
        ];
      @endphp

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
        @foreach ($ekskul as $item)
          <div class="col">
            <a href="{{ url($item['url']) }}" class="text-decoration-none text-dark">
              <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white text-center p-3 hover-elevate transition-all">
                <div class="p-3 bg-light rounded-4 d-flex align-items-center justify-content-center mb-3" style="min-height: 160px;">
                  <img
                    src="{{ asset($item['icon']) }}"
                    class="img-fluid"
                    alt="{{ $item['nama'] }}"
                    style="max-height: 110px; object-fit: contain;"
                  />
                </div>
                <div class="card-body p-2 d-flex flex-column justify-content-between">
                  <div>
                    <span class="badge bg-light text-warning border px-2 py-1 rounded-pill small mb-2">
                      {{ $item['kategori'] }}
                    </span>
                    <h5 class="font-passion-one fs-5 text-dark mb-2">{{ $item['nama'] }}</h5>
                    <p class="text-muted small mb-3 lh-sm">{{ $item['desc'] }}</p>
                  </div>
                  <div class="pt-2 border-top text-primary fw-semibold small d-flex align-items-center justify-content-center" style="color: var(--color-primary) !important;">
                    Lihat Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
