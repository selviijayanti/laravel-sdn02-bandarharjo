@extends('layouts.main')

@section('title', 'Kontak - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <div class="" style="text-align: center; margin-top: 40px; margin-bottom: 40px;">
    <h2 style="margin: 0; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 700; color: rgb(0, 0, 0);">
      Contact</h2>
  </div>
  <div class="row pt-4 p-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="assets/alamat.png" class="card-img-top" alt="..." style="width: 150px; height: auto;">
        </div>
        <div class="card-body">
          <h5 class="card-title">ALAMAT</h5>
          <p class="card-text">Jl. Lodan Raya No. 1 Bandarharjo, Kota Semarang, Prov. Jawa Tengah.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="assets/informasi.png" class="card-img-top" alt="..." style="width: 150px; height: auto;">
        </div>
        <div class="card-body">
          <h5 class="card-title">INFORMASI</h5>
          <p class="card-text">E-mail :
            sdnbandarharjo02semarang@gmail.com
            Telp : (024) 3563228
            (atau klik logo WA di atas untuk chat)</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="assets/jam.png" class="card-img-top" alt="..." style="width: 150px; height: auto;">
        </div>
        <div class="card-body">
          <h5 class="card-title">JAM KERJA</h5>
          <p class="card-text">Senin-Kamis : Pukul 07.30-15.55 WIB
            Jumat : Pukul 07.30-11.30 WIB
            Sabtu & Minggu : Libur</p>
        </div>
      </div>
    </div>
  </div>
@endsection
