@extends("layouts.main")

@section("title", "Profil Pendidik - SDN BANDARHARJO 02 SEMARANG")

@section("content")
<div class="container py-4">
  <!-- Title Header -->
  <div class="text-center mb-5">
    <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-2">TENAGA PENDIDIK</span>
    <h2 class="font-passion-one display-5 text-dark mb-2">Pendidik & Tenaga Kependidikan</h2>
    <p class="text-muted mx-auto" style="max-width: 600px; font-size: 15px;">
      Mengenal jajaran guru dan tenaga pendukung profesional yang berdedikasi membimbing siswa di SDN Bandarharjo 02 Semarang.
    </p>
  </div>

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
    @foreach ($dataPendidik as $pendidik)
      <div class="col d-flex justify-content-center">
        <div class="card border-0 rounded-4 shadow-sm h-100 hover-elevate bg-white text-center overflow-hidden w-100" style="max-width: 250px;">
          <div class="p-3 bg-light d-flex align-items-center justify-content-center" style="height: 220px;">
            <img
              src="{{ asset($pendidik['foto']) }}"
              class="img-fluid rounded-3 shadow-sm"
              alt="{{ $pendidik['nama'] }}"
              style="max-height: 100%; object-fit: cover;"
            />
          </div>
          <div class="card-body p-3 d-flex flex-column justify-content-center">
            <h6 class="fw-bold text-dark mb-1" style="font-size: 13.5px; line-height: 1.4;">{{ $pendidik['nama'] }}</h6>
            <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1 small fw-semibold mx-auto mt-1" style="font-size: 11px;">
              {{ $pendidik['jabatan'] }}
            </span>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
