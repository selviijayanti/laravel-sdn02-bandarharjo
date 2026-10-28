@extends('layouts.main')

@section('title', 'Kalender Pendidikan - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(244, 128, 0, 0.15); color: #e07000; font-weight: 600;">
          Agenda Akademik
        </span>
        <h2 class="font-passion-one display-6 text-dark mb-1">KALENDER PENDIDIKAN</h2>
        <p class="text-muted mb-0">Jadwal Tahun Pelajaran dan Agenda Akademik SDN Bandarharjo 02 Semarang</p>
        <div class="mx-auto mt-2" style="width: 60px; height: 3px; background: #f48000; border-radius: 2px;"></div>
      </div>

      <!-- Kaldik Kota Semarang -->
      <div class="mb-5">
        <div class="d-flex align-items-center mb-4">
          <div class="p-2 rounded-3 bg-primary text-white me-3">
            <i class="bi bi-building fs-4"></i>
          </div>
          <div>
            <h4 class="font-passion-one text-dark mb-0 fs-3">Kaldik Dinas Pendidikan Kota Semarang</h4>
            <p class="text-muted small mb-0">Pedoman kalender akademik resmi tingkat kota</p>
          </div>
        </div>

        @php
          $kaldikKota = [
            ['tahun' => 'TP 2022/2023', 'status' => 'Arsip'],
            ['tahun' => 'TP 2021/2022', 'status' => 'Arsip'],
            ['tahun' => 'TP 2020/2021', 'status' => 'Arsip'],
            ['tahun' => 'TP 2019/2020', 'status' => 'Arsip'],
          ];
        @endphp

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
          @foreach ($kaldikKota as $item)
            <div class="col">
              <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 bg-white hover-elevate transition-all">
                <div class="mx-auto mb-3 p-3 rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center" style="width: 65px; height: 65px;">
                  <i class="bi bi-calendar3 fs-3"></i>
                </div>
                <h5 class="fw-bold text-dark mb-1 font-passion-one fs-4">{{ $item['tahun'] }}</h5>
                <span class="badge bg-light text-muted border small mb-3 align-self-center">{{ $item['status'] }}</span>
                <a href="#" class="btn btn-outline-primary btn-sm rounded-3 py-2 fw-semibold w-100 mt-auto">
                  <i class="bi bi-file-earmark-pdf me-1"></i> Unduh Kaldik
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <!-- Kaldik SDN Bandarharjo 02 -->
      <div>
        <div class="d-flex align-items-center mb-4">
          <div class="p-2 rounded-3 bg-warning text-white me-3" style="background-color: var(--color-primary) !important;">
            <i class="bi bi-mortarboard-fill fs-4"></i>
          </div>
          <div>
            <h4 class="font-passion-one text-dark mb-0 fs-3">Kaldik SDN Bandarharjo 02</h4>
            <p class="text-muted small mb-0">Jadwal kegiatan belajar mengajar internal sekolah</p>
          </div>
        </div>

        @php
          $kaldikSekolah = [
            ['tahun' => 'TP 2022/2023', 'status' => 'Arsip'],
            ['tahun' => 'TP 2021/2022', 'status' => 'Arsip'],
            ['tahun' => 'TP 2020/2021', 'status' => 'Arsip'],
            ['tahun' => 'TP 2019/2020', 'status' => 'Arsip'],
          ];
        @endphp

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
          @foreach ($kaldikSekolah as $item)
            <div class="col">
              <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 bg-white hover-elevate transition-all">
                <div class="mx-auto mb-3 p-3 rounded-circle text-white d-flex align-items-center justify-content-center" style="width: 65px; height: 65px; background: linear-gradient(135deg, #f48000, #ff9d3b);">
                  <i class="bi bi-calendar-event fs-3"></i>
                </div>
                <h5 class="fw-bold text-dark mb-1 font-passion-one fs-4">{{ $item['tahun'] }}</h5>
                <span class="badge bg-light text-muted border small mb-3 align-self-center">{{ $item['status'] }}</span>
                <a href="#" class="btn btn-sm text-white rounded-3 py-2 fw-semibold w-100 mt-auto" style="background-color: var(--color-primary);">
                  <i class="bi bi-file-earmark-pdf me-1"></i> Buka Jadwal
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
@endsection
