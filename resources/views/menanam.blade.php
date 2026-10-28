@extends('layouts.main')

@section('title', 'Gerakan Menanam & Urban Farming - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container" style="max-width: 960px;">
      <a href="{{ url('/galeri/galeri-foto') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3 mb-4">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Galeri Foto
      </a>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white p-4 p-md-5 mb-4">
        <div class="text-center mb-4">
          <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(40, 167, 69, 0.15); color: #28a745; font-weight: 600;">
            Adiwiyata & Lingkungan Hidup
          </span>
          <h2 class="font-passion-one display-6 text-dark mb-2">
            GERAKAN MENANAM, KERJA BAKTI & URBAN FARMING
          </h2>
          <p class="text-muted small">SDN Bandarharjo 02 Semarang • Sabtu, 28 Januari 2023</p>
        </div>

        <div class="content-body text-dark lh-lg mb-4" style="font-size: 16px;">
          <p>
            Kegiatan Gerakan Menanam, Kerja Bakti Massal dan Kick off Urban Farming dilaksanakan secara serentak pada Sabtu, 28
            Januari 2023 di seluruh kantor dan sekolah di Kota Semarang. Kegiatan ini diawali dengan penanaman bibit secara
            simbolis oleh Kepala Sekolah SDN Bandarharjo 02, Bapak Purwanto, S.Pd.SD kemudian dilanjutkan penanaman bibit pohon
            cabai, tomat dan terong oleh Bapak/Ibu guru serta semua siswa kelas 4, 5, dan 6.
          </p>
          <p>
            Selain kegiatan penanaman bibit tanaman, kegiatan lain yang juga dilaksanakan yaitu penebaran benih ikan di kolam sekolah
            serta kerja bakti membersihkan lingkungan sekolah guna mewujudkan lingkungan belajar yang asri dan sehat.
          </p>
        </div>

        <h5 class="fw-bold mb-3"><i class="bi bi-images text-success me-2"></i>Dokumentasi Gerakan Menanam:</h5>
        @php
          $fotoMenanam = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
        @endphp
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($fotoMenanam as $num)
            <div class="col">
              <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100 hover-elevate transition-all">
                <img
                  src="{{ asset('images/menanam/' . $num . '.jpeg') }}"
                  class="w-100"
                  alt="Gerakan Menanam Foto {{ $num }}"
                  style="height: 200px; object-fit: cover;"
                />
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
@endsection
