@extends('layouts.main')

@section('title', 'Kompetisi Sains Nasional (KSN) - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container" style="max-width: 960px;">
      <a href="{{ url('/galeri/galeri-foto') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3 mb-4">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Galeri Foto
      </a>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white p-4 p-md-5 mb-4">
        <div class="text-center mb-4">
          <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(255, 193, 7, 0.2); color: #b78103; font-weight: 600;">
            Prestasi Akademik
          </span>
          <h2 class="font-passion-one display-6 text-dark mb-2">
            KOMPETISI SAINS NASIONAL (KSN) TAHUN 2021
          </h2>
          <p class="text-muted small">Tingkat Kota Semarang • Jumat, 29 Oktober 2021</p>
        </div>

        <div class="content-body text-dark lh-lg mb-4" style="font-size: 16px;">
          <p>
            Kegiatan KSN Tingkat Kota Semarang dilaksanakan per gugus pada Jumat, 29 Oktober 2021 di SDN Bandarharjo 02 dengan 
            diikuti oleh 3 SD Negeri, yaitu SDN Bandarharjo 01, SDN Bandarharjo 02, dan SDN Tanjungmas. Kompetisi ini menguji 
            kemampuan berpikir logis, analitis, dan pemecahan masalah siswa dalam bidang Matematika dan IPA.
          </p>
        </div>

        <h5 class="fw-bold mb-3"><i class="bi bi-images text-warning me-2"></i>Dokumentasi Kegiatan KSN:</h5>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @for ($i = 1; $i <= 6; $i++)
            <div class="col">
              <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100 hover-elevate transition-all">
                <img
                  src="{{ asset('images/kompetisi_sains/' . $i . '.jpeg') }}"
                  class="w-100"
                  alt="KSN Foto {{ $i }}"
                  style="height: 200px; object-fit: cover;"
                />
              </div>
            </div>
          @endfor
        </div>
      </div>
    </div>
  </section>
@endsection
