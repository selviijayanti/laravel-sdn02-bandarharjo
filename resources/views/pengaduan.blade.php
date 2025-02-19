@extends('layouts.main')

@section('title', 'Pengaduan - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <div class="text-center my-4">
    <h2 class="font-passion-one">Pengaduan</h2>
  </div>
  <form class="mx-auto" style="width: 400px; margin-bottom: 6rem;">
    <div class="mb-3">
      <label for="nama" class="form-label fw-bold">Nama</label>
      <input type="text" id="nama" placeholder="" class="form-control border-secondary-subtle" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label fw-bold">Email</label>
      <input type="email" id="email" placeholder="" class="form-control border-secondary-subtle" required>
    </div>
    <div class="mb-3">
      <label for="kontak" class="form-label fw-bold">Nomor Kontak</label>
      <input type="text" id="kontak" placeholder="" class="form-control border-secondary-subtle" required>
    </div>
    <div class="mb-3">
      <label for="deskripsi" style="display: block; margin-bottom: 5px; font-weight: bold;">Deskripsi</label>
      <textarea id="deskripsi" rows="4" placeholder="" class="form-control border-secondary-subtle"
        style="resize: none;" required></textarea>
    </div>
    <div class="d-flex align-items-center mb-3">
      <div
        style="background-color: #8bc34a; color: white; padding: 8px 15px; border-radius: 4px; margin-right: 10px; font-weight: bold;">
        Sg59h
      </div>
      <input type="text" placeholder="Masukkan Captcha" class="form-control border-secondary-subtle" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">
      SUBMIT
    </button>
  </form>
@endsection
