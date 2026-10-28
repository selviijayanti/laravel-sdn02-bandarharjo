@extends("layouts.main")

@section("title", "Profil Siswa - SDN BANDARHARJO 02 SEMARANG")

@section("content")
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(244, 128, 0, 0.15); color: #e07000; font-weight: 600;">
          Peserta Didik
        </span>
        <h2 class="font-passion-one display-6 text-dark mb-1">DAFTAR SISWA KELAS</h2>
        <p class="text-muted mb-0">SDN Bandarharjo 02 Kota Semarang</p>
        <div class="mx-auto mt-2" style="width: 60px; height: 3px; background: #f48000; border-radius: 2px;"></div>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
        @foreach ($dataSiswa as $siswa)
          <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden text-center hover-elevate transition-all">
              <div class="p-4 pb-2 bg-white d-flex align-items-center justify-content-center" style="min-height: 180px;">
                <img
                  src="{{ $siswa['foto'] }}"
                  class="img-fluid"
                  alt="{{ $siswa['nama'] }}"
                  style="max-height: 140px; object-fit: contain;"
                />
              </div>
              <div class="card-body p-3 d-flex flex-column justify-content-between bg-white border-top">
                <h5 class="font-passion-one fs-4 text-dark mb-2">{{ $siswa['nama'] }}</h5>
                <div>
                  <a
                    href="{{ url('/profil/siswa-kelas') }}"
                    class="btn btn-sm text-white px-3 py-2 rounded-3 w-100 fw-semibold"
                    style="background-color: var(--color-primary); box-shadow: 0 4px 10px rgba(244, 128, 0, 0.25);"
                  >
                    Lihat Data Siswa <i class="bi bi-arrow-right ms-1"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
