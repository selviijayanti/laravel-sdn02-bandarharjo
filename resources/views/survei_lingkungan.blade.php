@extends('layouts.main')

@section('title', 'Survei Lingkungan Belajar - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container" style="max-width: 960px;">
      <a href="{{ url('/galeri/galeri-foto') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3 mb-4">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Galeri Foto
      </a>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white p-4 p-md-5 mb-4">
        <div class="text-center mb-4">
          <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(13, 110, 253, 0.15); color: #0d6efd; font-weight: 600;">
            Evaluasi Mutu Pendidikan
          </span>
          <h2 class="font-passion-one display-6 text-dark mb-2">
            SURVEI LINGKUNGAN BELAJAR ASESMEN NASIONAL
          </h2>
          <p class="text-muted small">Dewan Guru & Kepala Sekolah SDN Bandarharjo 02 Semarang</p>
        </div>

        <div class="content-body text-dark lh-lg mb-4" style="font-size: 16px;">
          <p>
            Kegiatan Survei Lingkungan Belajar Asesmen Nasional SDN Bandarharjo 02 Tahun 2021 dilaksanakan oleh seluruh bapak/ibu guru 
            dan Kepala Sekolah yang terdaftar pada sistem Dapodik Kemdikbud. Survei ini bertujuan mengukur kualitas berbagai aspek 
            input dan proses belajar mengajar di kelas maupun di tingkat sekolah.
          </p>
        </div>

        <h5 class="fw-bold mb-3"><i class="bi bi-images text-primary me-2"></i>Dokumentasi Pengisian Survei:</h5>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @for ($i = 1; $i <= 6; $i++)
            <div class="col">
              <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100 hover-elevate transition-all">
                <img
                  src="{{ asset('images/survei_lingkungan/' . $i . '.jpeg') }}"
                  class="w-100"
                  alt="Survei Lingkungan Foto {{ $i }}"
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
