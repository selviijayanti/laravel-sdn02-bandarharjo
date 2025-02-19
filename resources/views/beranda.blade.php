@extends("layouts.main")

@section("title", "Beranda - SDN BANDARHARJO 02 SEMARANG")

@section("content")
  <div class="d-flex">
    <img
      src="images/ppdb.png"
      style="border-radius: 24px; width: 512px; margin-left: -58px"
      alt="ppdb"
    />
    <div class="ps-4">
      <table class="table" style="width: 700px">
        <thead>
          <tr>
            <td
              scope="col"
              class="rounded-top"
              style="background-color: #f07c1a; color: white; padding: 10px"
            >
              Berita Terbaru
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row" class="d-flex" style="color: black; padding: 10px">
              <div
                class="d-flex text-white justify-content-center rounded-2 me-2"
                style="width: 60px; height: 50px; background-color: #2c2a29"
              >
                08
              </div>
              Pengumuman Kelulusan Kelas VI Tahun Ajaran 2022/2023
            </td>
          </tr>
          <tr>
            <td scope="row" class="d-flex" style="color: black; padding: 10px">
              <div
                class="d-flex text-white justify-content-center rounded-2 me-2"
                style="width: 60px; height: 50px; background-color: #2c2a29"
              >
                08
              </div>
              Pra Pendaftaran PPDB Tanggal 12-16 Juni 2023
            </td>
          </tr>
          <tr>
            <td scope="row" class="d-flex" style="color: black; padding: 10px">
              <div
                class="d-flex text-white justify-content-center rounded-2 me-2"
                style="width: 60px; height: 50px; background-color: #2c2a29"
              >
                08
              </div>
              Pelaksanaan Penilaian Akhir Tahun (PAT) Genap dan Sumatif Akhir
              Semester (SAS) Genap
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  {{-- konten sambutan kepala sekolah --}}
  <div class="d-flex justify-content-center my-5">
    <img
      src="/images/sambutan kepala sekolah.png"
      style="width: 840px; height: 680px"
      alt="sambutan kepala sekolah"
    />
  </div>
  {{-- galeri foto --}}
  <div class="d-flex justify-content-center my-5">
    <a
      class="stretched-link btn-primary font-passion-one fs-4 rounded-5 text-white"
      href="/galeri/galerifoto"
      style="text-decoration: none; padding: 5px 80px"
    >
      Galeri Foto
    </a>
  </div>
  {{-- card galeri --}}
  <div class="d-flex">
    <div class="d-flex align-items-center">
      <img src="images/Polygon 7.png" style="width: 30px" alt="polygon" />
    </div>
    <div class="card p-3 mx-4 rounded-4">
      <img src="/images/kegiatan1.png" alt="kegiatan 1" />
      <div class="card-body">Kegiatan pembiasaan sarapan bersama</div>
    </div>
    <div class="card p-3 mx-4 rounded-4">
      <img src="/images/kegiatan2.png" alt="kegiatan 2" />
      <div class="card-body">Upacara bendera</div>
    </div>
    <div class="card p-3 mx-4 rounded-4">
      <img src="/images/kegiatan3.png" alt="kegiatan 3" />
      <div class="card-body">Kegiatan Literasi di halaman Sekolah</div>
    </div>
    <div class="d-flex align-items-center">
      <img src="images/Polygon 8.png"  style="width: 30px" alt="polygon" />
    </div>
  </div>
@endsection
