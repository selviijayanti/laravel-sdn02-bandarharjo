@extends("layouts.main")

@section("title", "Profil Siswa - SDN BANDARHARJO 02 SEMARANG")

@section("content")
  <section class="d-flex flex-column justify-content-center">
    <div class="font-passion-one">
      <h4 class="text-center">DAFTAR SISWA</h4>
      <h4 class="text-center">SDN BANDARHARJO 02</h4>
    </div>
    <div class="container mt-4">
      <div class="row row-cols-3 g-5 justify-content-center">
        @foreach ($dataSiswa as $siswa)
          <div class="col d-flex justify-content-center">
            <div
              class="card"
              style="
                width: 220px;
                border: 1px solid;
                box-shadow: -15px 15px 10px -7px rgba(0, 0, 0, 0.61);
              "
            >
              <img
                src="{{ $siswa["foto"] }}"
                class="card-img-top p-3"
                alt="{{ $siswa["nama"] }}"
              />
              <div class="card-body text-center">
                <p class="card-text font-passion-one fw-bold fs-3">{{ $siswa["nama"] }}</p>
                <a
                  class="font-passion-one text-white px-4 py-1 rounded-2"
                  style="
                    background-color: var(--color-primary);
                    text-decoration: none;
                    font-size: 20px;
                  "
                  href="/profil/siswa-kelas"
                >
                  Selengkapnya
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
