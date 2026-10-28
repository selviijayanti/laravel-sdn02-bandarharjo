@extends('layouts.main')

@section('title', 'Ekstrakurikuler Bola Voli - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container" style="max-width: 960px;">
      <a href="{{ url('/akademik/ekstrakurikuler') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3 mb-4">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar Ekstrakurikuler
      </a>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white p-4 p-md-5 mb-4">
        <div class="text-center mb-4">
          <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(13, 110, 253, 0.15); color: #0d6efd; font-weight: 600;">
            Olahraga Tim & Kebugaran
          </span>
          <h2 class="font-passion-one display-6 text-dark mb-2">
            EKSTRAKURIKULER BOLA VOLI
          </h2>
          <p class="text-muted small">Lapangan Bola Voli SDN Bandarharjo 02 Semarang</p>
        </div>

        <div class="content-body text-dark lh-lg mb-4" style="font-size: 16px;">
          <p>
            Ekstrakurikuler Bola Voli mengajarkan teknik dasar passing bawah, passing atas, servis, serta strategi permainan bola voli mini. 
            Kegiatan ini melatih daya tahan fisik, kelincahan, dan yang terpenting adalah komunikasi serta kerja sama yang solid antar pemain.
          </p>
        </div>

        <h5 class="fw-bold mb-3"><i class="bi bi-images text-primary me-2"></i>Dokumentasi Latihan Bola Voli:</h5>
        @php
          $vollyImages = ['1.jpg', '2.jpg', '3.jpg'];
        @endphp
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($vollyImages as $img)
            <div class="col">
              <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100 hover-elevate transition-all">
                <img
                  src="{{ asset('images/Ekstrakulikuler/volly/' . $img) }}"
                  class="w-100"
                  alt="Bola Voli Foto"
                  style="height: 220px; object-fit: cover;"
                />
              </div>
            </div>
          @endforeach
        </div>

        <div class="d-flex justify-content-between align-items-center mt-5 pt-3 border-top">
          <a href="{{ url('/akademik/ekstrakurikuler') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
            <i class="bi bi-grid-fill me-1"></i> Semua Ekstrakurikuler
          </a>
          <a href="{{ url('/pramuka') }}" class="btn btn-sm text-white rounded-pill px-3" style="background-color: var(--color-primary);">
            Kembali ke: Pramuka <i class="bi bi-arrow-clockwise ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
