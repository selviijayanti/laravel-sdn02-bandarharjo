@extends('layouts.main')

@section('title', 'Layanan Pengaduan - SDN BANDARHARJO 02 SEMARANG')

@section('content')
<div class="container py-4">
  <!-- Header Title -->
  <div class="text-center mb-5">
    <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-2">LAYANAN PUBLIK</span>
    <h2 class="font-passion-one display-5 text-dark mb-2">Pengaduan & Aspirasi Masyarakat</h2>
    <p class="text-muted mx-auto" style="max-width: 600px; font-size: 15px;">
      Sampaikan masukan, saran, atau pengaduan Anda demi kemajuan mutu pelayanan dan pendidikan di SDN Bandarharjo 02 Semarang.
    </p>
  </div>

  <div class="row justify-content-center gy-4">
    <!-- Form Card -->
    <div class="col-lg-7 col-md-10">
      <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white">
        <!-- Notifikasi Sukses -->
        @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show d-flex align-items-center gap-2 rounded-3 mb-4" role="alert">
            <i class="bi bi-check-circle-fill fs-5"></i>
            <div>
              <strong>Berhasil!</strong> {{ session('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form action="{{ route('pengaduan.store') }}" method="POST">
          @csrf

          <!-- Nama Lengkap -->
          <div class="mb-3">
            <label for="nama" class="form-label fw-bold text-dark small">Nama Lengkap <span class="text-danger">*</span></label>
            <div class="input-group">
              <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-person"></i></span>
              <input type="text" id="nama" name="nama" class="form-control border-start-0 ps-0 @error('nama') is-invalid @enderror" placeholder="Masukkan nama lengkap Anda" value="{{ old('nama') }}" required>
            </div>
            @error('nama')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label fw-bold text-dark small">Email Aktif <span class="text-danger">*</span></label>
            <div class="input-group">
              <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-envelope"></i></span>
              <input type="email" id="email" name="email" class="form-control border-start-0 ps-0 @error('email') is-invalid @enderror" placeholder="contoh: nama@email.com" value="{{ old('email') }}" required>
            </div>
            @error('email')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

          <!-- Kontak / WhatsApp -->
          <div class="mb-3">
            <label for="kontak" class="form-label fw-bold text-dark small">Nomor WhatsApp / Telepon <span class="text-danger">*</span></label>
            <div class="input-group">
              <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-telephone"></i></span>
              <input type="text" id="kontak" name="kontak" class="form-control border-start-0 ps-0 @error('kontak') is-invalid @enderror" placeholder="contoh: 08123456789" value="{{ old('kontak') }}" required>
            </div>
            @error('kontak')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

          <!-- Deskripsi Pengaduan -->
          <div class="mb-4">
            <label for="deskripsi" class="form-label fw-bold text-dark small">Isi Pengaduan / Masukan <span class="text-danger">*</span></label>
            <textarea id="deskripsi" rows="5" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" style="resize: none;" placeholder="Tuliskan secara jelas rincian laporan, saran, atau pertanyaan Anda..." required>{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary rounded-pill py-2 px-4 fw-bold w-100 shadow-sm d-flex align-items-center justify-content-center gap-2">
            <i class="bi bi-send-fill"></i>
            <span>Kirim Pengaduan</span>
          </button>
        </form>
      </div>
    </div>

    <!-- Info Box Samping -->
    <div class="col-lg-4 col-md-10">
      <div class="card border-0 rounded-4 shadow-sm p-4 bg-white mb-4">
        <h5 class="fw-bold mb-3 text-dark"><i class="bi bi-shield-check text-success me-2"></i>Kerahasiaan Data</h5>
        <p class="text-muted small" style="line-height: 1.6;">
          Setiap pengaduan dan identitas pelapor akan dijaga kerahasiaannya sesuai ketentuan yang berlaku. Laporan akan ditindaklanjuti oleh pihak sekolah secara profesional.
        </p>
      </div>

      <div class="card border-0 rounded-4 shadow-sm p-4 text-white" style="background: linear-gradient(135deg, #f07c1a 0%, #cc6900 100%);">
        <h5 class="fw-bold mb-3"><i class="bi bi-headset me-2"></i>Layanan Informasi</h5>
        <div class="d-flex flex-column gap-2 small">
          <div>
            <i class="bi bi-geo-alt-fill me-2"></i>
            <span>Jl. Lodan Raya No. 1, Semarang Utara</span>
          </div>
          <div>
            <i class="bi bi-telephone-fill me-2"></i>
            <span>(024) 3563228</span>
          </div>
          <div>
            <i class="bi bi-envelope-fill me-2"></i>
            <span>sdnbandarharjo02semarang@gmail.com</span>
          </div>
          <div class="pt-2 mt-2 border-top border-white border-opacity-25">
            <i class="bi bi-clock me-2"></i>
            <span>Senin - Sabtu: 07:00 - 14:00 WIB</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection