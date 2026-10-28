@extends("layouts.main")

@section("title", "Daftar Siswa Kelas - SDN BANDARHARJO 02 SEMARANG")

@section("content")
  <section class="py-5 bg-light">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 pb-2 border-bottom">
        <div>
          <a href="{{ url('/profil/siswa') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3 mb-2">
            <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar Kelas
          </a>
          <h2 class="font-passion-one display-6 text-dark mb-0">DAFTAR SISWA KELAS</h2>
          <p class="text-muted small mb-0">Peserta didik SDN Bandarharjo 02 Semarang</p>
        </div>
        <div class="mt-2 mt-sm-0">
          <span class="badge bg-white text-dark border px-3 py-2 rounded-pill shadow-sm">
            <i class="bi bi-people-fill text-warning me-1"></i> Data Siswa Aktif
          </span>
        </div>
      </div>

      <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-3 justify-content-center">
        @php
          $siswaList = [
            ['nama' => 'Aditya Pratama', 'gender' => 'cowo', 'nis' => '4201'],
            ['nama' => 'Alya Rahmadani', 'gender' => 'cewe', 'nis' => '4202'],
            ['nama' => 'Annisa Putri', 'gender' => 'cewe', 'nis' => '4203'],
            ['nama' => 'Bunga Citra', 'gender' => 'cewe', 'nis' => '4204'],
            ['nama' => 'Dimas Anggara', 'gender' => 'cowo', 'nis' => '4205'],
            ['nama' => 'Fajar Nugroho', 'gender' => 'cowo', 'nis' => '4206'],
            ['nama' => 'Gilang Ramadhan', 'gender' => 'cowo', 'nis' => '4207'],
            ['nama' => 'Hana Salsabila', 'gender' => 'cewe', 'nis' => '4208'],
            ['nama' => 'Indah Permata', 'gender' => 'cewe', 'nis' => '4209'],
            ['nama' => 'Kevin Sanjaya', 'gender' => 'cowo', 'nis' => '4210'],
            ['nama' => 'Nabila Syakieb', 'gender' => 'cewe', 'nis' => '4211'],
            ['nama' => 'Rizky Kurniawan', 'gender' => 'cowo', 'nis' => '4212'],
          ];
        @endphp

        @foreach ($siswaList as $s)
          <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-3 hover-elevate transition-all bg-white">
              <div class="mx-auto mb-2 p-2 rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                <img
                  src="/images/profil_siswa_kelas/{{ $s['gender'] }}.png"
                  class="img-fluid"
                  alt="{{ $s['nama'] }}"
                  style="max-height: 65px; object-fit: contain;"
                />
              </div>
              <h6 class="font-passion-one fs-6 text-dark mb-1 text-truncate" title="{{ $s['nama'] }}">{{ $s['nama'] }}</h6>
              <span class="badge bg-light text-muted border small py-1">NIS: {{ $s['nis'] }}</span>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
