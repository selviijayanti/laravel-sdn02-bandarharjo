@extends('layouts.main')

@section('title', 'Bulan Imunisasi Anak Sekolah (BIAS) - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container" style="max-width: 960px;">
      <a href="{{ url('/galeri/galeri-foto') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3 mb-4">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Galeri Foto
      </a>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white p-4 p-md-5 mb-4">
        <div class="text-center mb-4">
          <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(40, 167, 69, 0.15); color: #28a745; font-weight: 600;">
            Kesehatan & Imunisasi
          </span>
          <h2 class="font-passion-one display-6 text-dark mb-2">
            BULAN IMUNISASI ANAK SEKOLAH (BIAS)
          </h2>
          <p class="text-muted small">Kerja Sama dengan Puskesmas Bandarharjo • Selasa, 9 November 2021</p>
        </div>

        <div class="content-body text-dark lh-lg mb-4" style="font-size: 16px;">
          <p>
            Bulan Imunisasi Anak Sekolah (BIAS) Tahun 2021 di SDN Bandarharjo 02 dilaksanakan oleh tim medis Puskesmas Bandarharjo 
            sebagai langkah perlindungan kekebalan tubuh anak terhadap penyakit campak, rubela, difteri, dan tetanus. 
            Kegiatan terlaksana dengan tertib dan menerapkan standar kebersihan yang ketat.
          </p>
        </div>

        <h5 class="fw-bold mb-3"><i class="bi bi-images text-success me-2"></i>Dokumentasi Kegiatan Imunisasi:</h5>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @for ($i = 1; $i <= 12; $i++)
            <div class="col">
              <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100 hover-elevate transition-all">
                <img
                  src="{{ asset('images/imunisasi/' . $i . '.jpeg') }}"
                  class="w-100"
                  alt="Imunisasi Foto {{ $i }}"
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
