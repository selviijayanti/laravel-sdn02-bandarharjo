@extends('layouts.main')

@section('title', 'Ekstrakurikuler Pramuka - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container" style="max-width: 960px;">
      <a href="{{ url('/akademik/ekstrakurikuler') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3 mb-4">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar Ekstrakurikuler
      </a>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white p-4 p-md-5 mb-4">
        <div class="text-center mb-4">
          <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(244, 128, 0, 0.15); color: #e07000; font-weight: 600;">
            Ekstrakurikuler Wajib
          </span>
          <h2 class="font-passion-one display-6 text-dark mb-2">
            EKSTRAKURIKULER PRAMUKA
          </h2>
          <p class="text-muted small">Praja Muda Karana • Gugus Depan SDN Bandarharjo 02 Semarang</p>
        </div>

        <div class="content-body text-dark lh-lg mb-4" style="font-size: 16px;">
          <p>
            Kegiatan ekstrakurikuler Pramuka di SDN Bandarharjo 02 melatih kedisiplinan, kemandirian, kepemimpinan, dan rasa cinta tanah air. 
            Melalui kegiatan kepramukaan seperti tali-temali, baris-berbaris, dan penjelajahan, siswa diajak belajar bekerja sama dalam regu 
            serta menanamkan nilai-nilai Dasa Dharma Pramuka.
          </p>
        </div>

        <h5 class="fw-bold mb-3"><i class="bi bi-images text-warning me-2"></i>Dokumentasi Kegiatan Pramuka:</h5>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @for ($i = 1; $i <= 3; $i++)
            <div class="col">
              <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100 hover-elevate transition-all">
                <img
                  src="{{ asset('images/Ekstrakulikuler/pramuka/' . $i . '.jpg') }}"
                  class="w-100"
                  alt="Pramuka Foto {{ $i }}"
                  style="height: 220px; object-fit: cover;"
                />
              </div>
            </div>
          @endfor
        </div>

        <div class="d-flex justify-content-between align-items-center mt-5 pt-3 border-top">
          <a href="{{ url('/akademik/ekstrakurikuler') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
            <i class="bi bi-grid-fill me-1"></i> Semua Ekstrakurikuler
          </a>
          <a href="{{ url('/BTQ') }}" class="btn btn-sm text-white rounded-pill px-3" style="background-color: var(--color-primary);">
            Berikutnya: BTQ <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection