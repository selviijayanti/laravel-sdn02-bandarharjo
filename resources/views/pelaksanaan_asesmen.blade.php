@extends('layouts.main')

@section('title', 'Pelaksanaan Asesmen Nasional Gelombang 2 - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container" style="max-width: 960px;">
      <a href="{{ url('/galeri/galeri-foto') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3 mb-4">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Galeri Foto
      </a>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white p-4 p-md-5 mb-4">
        <div class="text-center mb-4">
          <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(244, 128, 0, 0.15); color: #e07000; font-weight: 600;">
            Pelaksanaan Ujian Nasional
          </span>
          <h2 class="font-passion-one display-6 text-dark mb-2">
            PELAKSANAAN ASESMEN NASIONAL GELOMBANG 2
          </h2>
          <p class="text-muted small">Rabu - Kamis, 17 - 18 November 2021 • SDN Bandarharjo 02 Semarang</p>
        </div>

        <div class="content-body text-dark lh-lg mb-4" style="font-size: 16px;">
          <p>
            Kegiatan Asesmen Nasional (ANBK) Tahun 2021 di SDN Bandarharjo 02 terlaksana secara tertib dan lancar. 
            Materi hari pertama meliputi Asesmen Literasi dan Survei Karakter, sedangkan hari kedua mencakup Asesmen Numerasi 
            dan Survei Lingkungan Belajar bagi siswa peserta sampling.
          </p>
        </div>

        <h5 class="fw-bold mb-3"><i class="bi bi-images text-warning me-2"></i>Dokumentasi Pelaksanaan ANBK:</h5>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @for ($i = 1; $i <= 16; $i++)
            <div class="col">
              <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100 hover-elevate transition-all">
                <img
                  src="{{ asset('images/pelaksanaan_asesmen/' . $i . '.jpeg') }}"
                  class="w-100"
                  alt="Pelaksanaan Asesmen Foto {{ $i }}"
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
