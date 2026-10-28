@extends('layouts.main')

@section('title', 'Ekstrakurikuler Taekwondo - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container" style="max-width: 960px;">
      <a href="{{ url('/akademik/ekstrakurikuler') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3 mb-4">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar Ekstrakurikuler
      </a>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white p-4 p-md-5 mb-4">
        <div class="text-center mb-4">
          <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(220, 53, 69, 0.15); color: #dc3545; font-weight: 600;">
            Olahraga Bela Diri
          </span>
          <h2 class="font-passion-one display-6 text-dark mb-2">
            EKSTRAKURIKULER TAEKWONDO
          </h2>
          <p class="text-muted small">Dojang Taekwondo SDN Bandarharjo 02 Semarang</p>
        </div>

        <div class="content-body text-dark lh-lg mb-4" style="font-size: 16px;">
          <p>
            Ekstrakurikuler Taekwondo melatih fisik, mental, sportivitas, serta rasa percaya diri siswa. 
            Melalui latihan rutin poomsae (jurus) dan kyorugi (tanding), para atlet cilik SDN Bandarharjo 02 
            telah banyak mengukir prestasi bergengsi dalam kejuaraan POPDA tingkat kecamatan maupun kota.
          </p>
        </div>

        <h5 class="fw-bold mb-3"><i class="bi bi-images text-danger me-2"></i>Dokumentasi Latihan Taekwondo:</h5>
        @php
          $taekwondoImages = ['1.jpg', '2.jpeg', '3.jpeg'];
        @endphp
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($taekwondoImages as $img)
            <div class="col">
              <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100 hover-elevate transition-all">
                <img
                  src="{{ asset('images/Ekstrakulikuler/taekwondo/' . $img) }}"
                  class="w-100"
                  alt="Taekwondo Foto"
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
          <a href="{{ url('/seni tari') }}" class="btn btn-sm text-white rounded-pill px-3" style="background-color: var(--color-primary);">
            Berikutnya: Seni Tari <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection