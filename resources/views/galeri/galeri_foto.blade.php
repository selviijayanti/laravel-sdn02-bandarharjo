@extends('layouts.main')

@section('title', 'Galeri Foto - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <div class="text-center my-5">
    <h2 class="font-passion-one text-uppercase">Galeri Foto <br>SDN Bandarharjo 02</h2>
  </div>
  <div class="row pt-4 p-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/MPLS.jpeg') }}" class="card-img-top rounded-3"
            alt="Masa Pengenalan Lingkungan Sekolah (MPLS) Tahun 2021/2022" style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body pt-2 text-center">
          <h5 class="card-title">Masa Pengenalan Lingkungan Sekolah (MPLS) Tahun 2021/2022</h5>
          <a href="/mpls" class="btn mt-2 text-white rounded-3" style="background-color: #F48000; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/asesmen.jpeg') }}" class="card-img-top rounded-3"
            alt="Simulasi Asesmen Nasional Tahun 2021 Gelombang 2" style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Simulasi Asesmen Nasional Tahun 2021 Gelombang 2</h5>
          <a href="/simulasi_asesmen" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/asesmen2.jpeg') }}" class="card-img-top rounded-3"
            alt="Gladi Bersih Asesmen Nasional Tahun 2021 Gelombang 2" style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Gladi Bersih Asesmen Nasional Tahun 2021 Gelombang 2</h5>
          <a href="/glaber_asesmen" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="row pt-4 p-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/pelaksanaan-asesmen.jpeg') }}" class="card-img-top rounded-3"
            alt="Pelaksanaan Asesmen Nasional Tahun 2021 Gelombang 2" style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Pelaksanaan Asesmen Nasional Tahun 2021 Gelombang 2</h5>
          <a href="/pelaksanaan_asesmen" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/survei.jpeg') }}" class="card-img-top rounded-3"
            alt="Kegiatan Survei Lingkungan Belajar oleh Bapak/Ibu Guru dan Kepala Sekolah"
            style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Kegiatan Survei Lingkungan Belajar oleh Bapak/Ibu Guru dan Kepala Sekolah</h5>
          <a href="/survei_lingkungan" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/penilaian-kinerja-kepsek.jpeg') }}" class="card-img-top rounded-3"
            alt="Kegiatan Penilaian Kinerja Kepala Sekolah (PKKS) Tahun 2021" style="width: 250px; height: auto;">
        </div>

        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Kegiatan Penilaian Kinerja Kepala Sekolah (PKKS) Tahun 2021</h5>
          <a href="/penilaian_pekerja" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="row pt-4 p-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/kompetisi-sains.jpeg') }}" class="card-img-top rounded-3"
            alt="Kompetisi Sains Nasional (KSN) Tingkat Kota Semarang Tahun 2021" style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Kompetisi Sains Nasional (KSN) Tingkat Kota Semarang Tahun 2021</h5>
          <a href="/kompetisi_sains" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/imunisasi.jpeg') }}" class="card-img-top rounded-3"
            alt="Bulan Imunisasi Anak Sekolah (BIAS) Tahun 2021" style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Bulan Imunisasi Anak Sekolah (BIAS) Tahun 2021</h5>
          <a href="/imunisasi" class="btn mt-2 text-white rounded-3" style="background-color: #F48000; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/hut-korps.jpeg') }}" class="card-img-top rounded-3"
            alt="Upacara Peringatan HUT Korps Pegawai Republik Indonesia (KORPRI) ke-51 dengan Tema
            Korpri Melayani, Berkontribusi dan Berinovasi untuk Negeri"
            style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Upacara Peringatan HUT Korps Pegawai Republik Indonesia (KORPRI) ke-51 dengan Tema
            Korpri Melayani, Berkontribusi dan Berinovasi untuk Negeri</h5>
          <a href="/upacara" class="btn mt-2 text-white rounded-3" style="background-color: #F48000; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="row pt-4 p-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/sarapan-bersama.jpeg') }}" class="card-img-top rounded-3"
            alt="Kegiatan Pembiasaan Sarapan Bersama" style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Kegiatan Pembiasaan Sarapan Bersama di halaman SDN Bandarharjo 02 dengan menu makanan
            sehat dan bergizi setiap hari Rabu minggu pertama setiap bulannya.</h5>
          <a href="/sarapan_bersama" class="btn mt-2 text-white rounded-3"
            style="background-color: #F48000; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/study.jpeg') }}" class="card-img-top rounded-3"
            alt="Kegiatan Study Tiru Kurikulum Merdeka di SDN Sondakan Kota Sukarta Kamis, 20 Oktober
            2022"
            style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Kegiatan Study Tiru Kurikulum Merdeka di SDN Sondakan Kota Sukarta Kamis, 20 Oktober
            2022</h5>
          <a href="#" class="btn mt-2 text-white rounded-3" style="background-color: #F48000; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center p-3 pb-0">
          <img src="{{ asset('images/menanam.jpeg') }}" class="card-img-top rounded-3"
            alt="Gerakan Menanam, Kerja Bakti Massal, dan Kick off Urban Massal serentak sekota Semarang
            di SDN Bandarharjo 02"
            style="width: 250px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body text-center">
          <h5 class="card-title">Gerakan Menanam, Kerja Bakti Massal, dan Kick off Urban Massal serentak sekota Semarang
            di SDN Bandarharjo 02</h5>
          <a href="/menanam" class="btn mt-2 text-white rounded-3" style="background-color: #F48000; width: 150px;">
            SELENGKAPNYA
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
