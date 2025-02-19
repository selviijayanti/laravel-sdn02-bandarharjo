@extends('layouts.main')

@section('title', 'Ekstrakurikuler - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <div class="" style="text-align: center">
    <h2 class="font-passion-one">Ekstrakurikuler</h2>
  </div>
  <div class="row pt-4 mb-4">
    <div class="col-md-3 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="{{ asset('assets/pramuka.png') }}" class="card-img-top" alt="..."
            style="width: 150px; height: auto;">
        </div>
        <div class="card-body">
          <h5 class="card-title" style="text-align: center">PRAMUKA</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="{{ asset('assets/btq.png') }}" class="card-img-top" alt="..."
            style="width: 150px; height: auto;">
        </div>
        <div class="card-body">
          <h5 class="card-title" style="text-align: center">BTQ</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="{{ asset('assets/komputer.png') }}" class="card-img-top" alt="..."
            style="width: 150px; height: auto;">
        </div>
        <div class="card-body">
          <h5 class="card-title" style="text-align: center">KOMPUTER</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="{{ asset('assets/taekwondo.png') }}" class="card-img-top" alt="..."
            style="width: 150px; height: auto;">
        </div>
        <div class="card-body">
          <h5 class="card-title" style="text-align: center">TAEKWONDO</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="row pt-4 my-4 d-flex justify-content-center">
    <div class="col-md-3 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="{{ asset('assets/senitari.png') }}" class="card-img-top" alt="..."
            style="width: 150px; height: auto;">
        </div>
        <div class="card-body">
          <h5 class="card-title" style="text-align: center">SENI TARI</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="{{ asset('assets/takraw.png') }}" class="card-img-top" alt="..."
            style="width: 150px; height: auto;">
        </div>
        <div class="card-body">
          <h5 class="card-title" style="text-align: center">TAKRAW</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center">
      <div class="card shadow rounded-4" style="width: 18rem;">
        <div class="d-flex justify-content-center align-items-center" style="padding: 20px;">
          <img src="{{ asset('assets/volly.png') }}" class="card-img-top" alt="..."
            style="width: 150px; height: auto;">
        </div>
        <div class="card-body">
          <h5 class="card-title" style="text-align: center">VOLLY</h5>
        </div>
      </div>
    </div>
  </div>
@endsection
