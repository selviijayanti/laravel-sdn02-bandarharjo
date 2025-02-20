@extends('layouts.main')

@section('title', 'Kontak - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <div class="text-center mt-5 mb-3">
    <h2 class="font-passion-one">
      Contact</h2>
  </div>
  <div class="row pt-4 p-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card rounded-4 shadow" style="width: 20rem;">
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="assets/alamat.png" class="card-img-top" alt="" style="width: 150px; height: auto;">
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">ALAMAT</h5>
          <p class="card-text mt-4">Jl. Lodan Raya No. 1 Bandarharjo, Kota Semarang, Prov. Jawa Tengah.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card rounded-4 shadow" style="width: 20rem;">
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <a href="#"><img src="assets/informasi.png" class="card-img-top" alt=""
              style="width: 150px; height: auto;"></a>
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">INFORMASI</h5>
          <p class="card-text">
          <div class="mb-2">
            <span class="d-block fw-semibold">E-mail:</span>
            sdnbandarharjo02semarang@gmail.com
          </div>
          <div>
            <span class="d-block fw-semibold">Telp:</span>
            (024) 3563228
            (atau klik logo WA di atas untuk chat)
          </div>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card rounded-4 shadow" style="width: 20rem;">
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="assets/jam.png" class="card-img-top" alt="" style="width: 150px; height: auto;">
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">JAM KERJA</h5>
          <div class="card-text">
            <div class="d-flex"><span class="me-3 fw-semibold">Senin-Kamis :</span><span>Pukul 07.30-15.55
                WIB</span>
            </div>
            <div class="d-flex"><span class="me-3 fw-semibold">Jumat :</span><span> Pukul 07.30-11.30 WIB</span></div>
            <div class="d-flex"><span class="me-3 fw-semibold">Sabtu & Minggu :</span><span>Libur</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
