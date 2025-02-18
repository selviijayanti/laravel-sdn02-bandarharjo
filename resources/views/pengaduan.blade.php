@extends('layouts.main')

@section('title', 'Pengaduan - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <div class="" style="text-align: center; margin-top: 40px; margin-bottom: 40px;">
    <h2 style="margin: 0; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 700; color: rgb(0, 0, 0);">
      Pengaduan</h2>
  </div>
  <form style="width: 400px; margin: auto; font-family: Arial, sans-serif;">
    <div style="margin-bottom: 15px;">
      <label for="nama" style="display: block; margin-bottom: 5px; font-weight: bold;">Nama</label>
      <input type="text" id="nama" placeholder=""
        style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
    </div>
    <div style="margin-bottom: 15px;">
      <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold;">Email</label>
      <input type="email" id="email" placeholder=""
        style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
    </div>
    <div style="margin-bottom: 15px;">
      <label for="kontak" style="display: block; margin-bottom: 5px; font-weight: bold;">Nomor Kontak</label>
      <input type="text" id="kontak" placeholder=""
        style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
    </div>
    <div style="margin-bottom: 15px;">
      <label for="deskripsi" style="display: block; margin-bottom: 5px; font-weight: bold;">Deskripsi</label>
      <textarea id="deskripsi" rows="4" placeholder=""
        style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; resize: none;"></textarea>
    </div>
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
      <div
        style="background-color: #8bc34a; color: white; padding: 8px 15px; border-radius: 4px; margin-right: 10px; font-weight: bold;">
        Sg59h
      </div>
      <input type="text" placeholder="Masukan Captcha"
        style="flex: 1; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
    </div>
    <button type="submit"
      style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; width: 100%;">
      SUBMIT
    </button>
  </form>
@endsection
