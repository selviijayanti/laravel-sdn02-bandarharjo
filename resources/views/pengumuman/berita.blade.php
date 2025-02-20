@extends('layouts.main')

@section('title', 'Berita - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <div class="text-center my-5">
    <h2 class="font-passion-one"> Berita <br> SDN Bandarharjo 02</h2>
  </div>
  <div class="row px-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card rounded-4 shadow" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/MPLS.jpeg') }}" class="card-img-top rounded-3" alt="..."
            style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Masa Pengenalan Lingkungan Sekolah (MPLS) Tahun 2021/2022</h5>
          <a href="/mpls" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; color: white; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card rounded-4 shadow" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/asesmen.jpeg') }}" class="card-img-top rounded-3" alt="..."
            style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Simulasi Asesmen Nasional Tahun 2021 Gelombang 2</h5>
          <a href="/simulasi_asesmen" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; color: white; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card rounded-4 shadow" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/asesmen2.jpeg') }}" class="card-img-top rounded-3" alt="..."
            style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Gladi Bersih Asesmen Nasional Tahun 2021 Gelombang 2</h5>
          <a href="/glaber_asesmen" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; color: white; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="row pt-4 p-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card rounded-4 shadow" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/pelaksanaan-asesmen.jpeg') }}" class="card-img-top rounded-3" alt="..."
            style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Pelaksanaan Asesmen Nasional Tahun 2021 Gelombang 2</h5>
          <a href="/pelaksanaan_asesmen" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; color: white; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card rounded-4 shadow" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/survei.jpeg') }}" class="card-img-top rounded-3" alt="..."
            style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Kegiatan Survei Lingkungan Belajar oleh Bapak/Ibu Guru dan Kepala Sekolah
          </h5>
          <a href="/survei_lingkungan" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; color: white; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card rounded-4 shadow" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/penilaian-kinerja-kepsek.jpeg') }}" class="card-img-top rounded-3" alt="..."
            style="width: 250px; height: auto;">
        </div>

        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Kegiatan Penilaian Kinerja Kepala Sekolah (PKKS) Tahun 2021</h5>
          <a href="/penilaian_pekerja" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; color: white; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="row pt-4 p-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card rounded-4 shadow" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/kompetisi-sains.jpeg') }}" class="card-img-top rounded-3" alt="..."
            style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Kompetisi Sains Nasional (KSN) Tingkat Kota Semarang Tahun 2021</h5>
          <a href="/kompetisi_sains" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; color: white; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card rounded-4 shadow" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/imunisasi.jpeg') }}" class="card-img-top rounded-3" alt="..."
            style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Bulan Imunisasi Anak Sekolah (BIAS) Tahun 2021</h5>
          <a href="/imunisasi" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; color: white; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
