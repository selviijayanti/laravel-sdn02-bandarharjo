@extends("layouts.main")

@section("title", "Profil Pendidik - SDN BANDARHARJO 02 SEMARANG")

@section("content")
  <section class="d-flex flex-column justify-content-center">
    <div class="font-passion-one">
      <h4 class="text-center">PROFIL PENDIDIK DAN TENAGA PENDIDIDKAN</h4>
      <h4 class="text-center">SDN BANDARHARJO 02</h4>
    </div>
    <div class="container mt-4">
      <div class="row row-cols-4 g-5 justify-content-center">
        @foreach ($dataPendidik as $pendidik)
          <div class="col">
            <div class="card shadow-lg" style="width: 220px">
              <img
                src="{{ $pendidik['foto'] }}"
                class="card-img-top p-3"
                alt="{{ $pendidik['nama'] }}"
              />
              <div class="fw-bold text-center p-2" style="font-size: 12px; margin-top: -10px">
                <p class="card-text">{{ $pendidik['nama'] }}</p>
                <p class="card-text" style="margin-top: -20px">{{ $pendidik['jabatan'] }}</p>
              </div>
            </div>
          </div>
        @endforeach
        <!-- Tambahkan 19 card lagi -->
      </div>
    </div>
  </section>
@endsection
