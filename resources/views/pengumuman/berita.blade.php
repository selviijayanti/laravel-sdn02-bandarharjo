@extends('layouts.main')

@section('title', 'Berita - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <div class="" style="text-align: center; margin-top: 40px; margin-bottom: 40px;">
    <h2 style="margin: 0; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 700; color: rgb(0, 0, 0);">
      Berita</h2>
    <h3 style="margin: 0; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 700; color: rgb(0, 0, 0);">
      SDN Bandaharjo 02</h3>
  </div>
  <div class="row pt-4 p-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="images/MPLS.jpeg" class="card-img-top" alt="..."
            style="width: 250px; height: auto; border-radius: 10px;">
        </div>
        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <h5 class="card-title">Masa Pengenalan Lingkungan Sekolah (MPLS) Tahun 2021/2022</h5>
          <a href="/mpls" class="btn"
            style="background-color: #F48000; color: white; width: 150px; border-radius: 10px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="images/asesmen.jpeg" class="card-img-top" alt="..."
            style="width: 250px; height: auto; border-radius: 10px;">
        </div>
        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <h5 class="card-title">Simulasi Asesmen Nasional Tahun 2021 Gelombang 2</h5>
          <a href="/simulasi_asesmen" class="btn"
            style="background-color: #F48000; color: white; width: 150px; border-radius: 10px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="images/asesmen2.jpeg" class="card-img-top" alt="..."
            style="width: 250px; height: auto; border-radius: 10px;">
        </div>
        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <h5 class="card-title">Gladi Bersih Asesmen Nasional Tahun 2021 Gelombang 2</h5>
          <a href="/glaber_asesmen" class="btn"
            style="background-color: #F48000; color: white; width: 150px; border-radius: 10px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="row pt-4 p-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="images/pelaksanaan-asesmen.jpeg" class="card-img-top" alt="..."
            style="width: 250px; height: auto; border-radius: 10px;">
        </div>
        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <h5 class="card-title">Pelaksanaan Asesmen Nasional Tahun 2021 Gelombang 2</h5>
          <a href="/pelaksanaan_asesmen" class="btn"
            style="background-color: #F48000; color: white; width: 150px; border-radius: 10px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="images/survei.jpeg" class="card-img-top" alt="..."
            style="width: 250px; height: auto; border-radius: 10px;">
        </div>
        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <h5 class="card-title">Kegiatan Survei Lingkungan Belajar oleh Bapak/Ibu Guru dan Kepala Sekolah
          </h5>
          <a href="/survei_lingkungan" class="btn"
            style="background-color: #F48000; color: white; width: 150px; border-radius: 10px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="images/penilaian-kinerja-kepsek.jpeg" class="card-img-top" alt="..."
            style="width: 250px; height: auto; border-radius: 10px;">
        </div>

        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <h5 class="card-title">Kegiatan Penilaian Kinerja Kepala Sekolah (PKKS) Tahun 2021</h5>
          <a href="/penilaian_pekerja" class="btn"
            style="background-color: #F48000; color: white; width: 150px; border-radius: 10px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="row pt-4 p-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="images/kompetisi-sains.jpeg" class="card-img-top" alt="..."
            style="width: 250px; height: auto; border-radius: 10px;">
        </div>
        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <h5 class="card-title">Kompetisi Sains Nasional (KSN) Tingkat Kota Semarang Tahun 2021</h5>
          <a href="/kompetisi_sains" class="btn"
            style="background-color: #F48000; color: white; width: 150px; border-radius: 10px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="images/imunisasi.jpeg" class="card-img-top" alt="..."
            style="width: 250px; height: auto; border-radius: 10px;">
        </div>
        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <h5 class="card-title">Bulan Imunisasi Anak Sekolah (BIAS) Tahun 2021</h5>
          <a href="/imunisasi" class="btn"
            style="background-color: #F48000; color: white; width: 150px; border-radius: 10px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
