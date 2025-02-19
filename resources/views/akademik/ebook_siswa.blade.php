@extends('layouts.main')

@section('title', 'E-Book Siswa - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <div class="text-center mt-5">
    <h2 class="font-passion-one">
      KUMPULAN E-BOOK <br>SDN BANDARHARJO 02</h2>
  </div>

  <!--atas-->
  <div class="row pt-4 p-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="{{ asset('images/ebook1.png') }}" class="card-img-top" alt=""
            style="width: 150px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <a href="#" class="btn text-white rounded-3" style="background-color: #35AA47; width: 150px;">
            KELAS 1
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="{{ asset('images/ebook2.png') }}" class="card-img-top" alt=""
            style="width: 150px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <a href="#" class="btn text-white rounded-3" style="background-color: #35AA47; width: 150px; ">
            KELAS 2
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="{{ asset('images/ebook3.png') }}" class="card-img-top" alt=""
            style="width: 150px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <a href="#" class="btn text-white rounded-3" style="background-color: #35AA47; width: 150px;">
            KELAS 3
          </a>
        </div>
      </div>
    </div>
  </div>

  <!--bawah-->
  <div class="row pt-4 p-5">
    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="{{ asset('images/ebook4.png') }}" class="card-img-top" alt=""
            style="width: 150px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <a href="#" class="btn text-white rounded-3" style="background-color: #35AA47; width: 150px;">
            KELAS 4
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="{{ asset('images/ebook5.png') }}" class="card-img-top" alt=""
            style="width: 150px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <a href="#" class="btn text-white rounded-3" style="background-color: #35AA47; width: 150px;">
            KELAS 5
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <!-- Wrapper untuk gambar agar berada di tengah -->
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="{{ asset('images/ebook6.png') }}" class="card-img-top" alt=""
            style="width: 150px; height: auto;">
        </div>
        <!-- Body kartu -->
        <div class="card-body" style="text-align: center;">
          <a href="#" class="btn text-white rounded-3" style="background-color: #35AA47; width: 150px;">
            KELAS 6
          </a>
        </div>
      </div>
    </div>

  </div>
@endsection
