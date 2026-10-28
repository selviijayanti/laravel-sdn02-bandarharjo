@extends('layouts.main')

@section('title', 'Penilaian Kinerja Kepala Sekolah (PKKS) - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container" style="max-width: 960px;">
      <a href="{{ url('/galeri/galeri-foto') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3 mb-4">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Galeri Foto
      </a>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white p-4 p-md-5 mb-4">
        <div class="text-center mb-4">
          <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(108, 117, 125, 0.15); color: #495057; font-weight: 600;">
            Supervisi & Akreditasi
          </span>
          <h2 class="font-passion-one display-6 text-dark mb-2">
            PENILAIAN KINERJA KEPALA SEKOLAH (PKKS)
          </h2>
          <p class="text-muted small">Senin, 1 November 2021 • Ruang Kepala Sekolah SDN Bandarharjo 02</p>
        </div>

        <div class="content-body text-dark lh-lg mb-4" style="font-size: 16px;">
          <p>
            Kegiatan Penilaian Kinerja Kepala Sekolah (PKKS) merupakan proses pengumpulan, pengolahan, analisis, dan interpretasi data 
            tentang kualitas kinerja kepala sekolah dalam melaksanakan tugas pokoknya sebagai manajer, supervisor, dan pengembang 
            kewirausahaan sekolah oleh Pengawas Pembina Dinas Pendidikan Kota Semarang.
          </p>
        </div>

        <h5 class="fw-bold mb-3"><i class="bi bi-images text-secondary me-2"></i>Dokumentasi Kegiatan PKKS:</h5>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @for ($i = 1; $i <= 6; $i++)
            <div class="col">
              <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100 hover-elevate transition-all">
                <img
                  src="{{ asset('images/penilaian_pekerja/' . $i . '.jpeg') }}"
                  class="w-100"
                  alt="PKKS Foto {{ $i }}"
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
