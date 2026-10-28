@extends('layouts.main')

@section('title', 'Kontak - SDN BANDARHARJO 02 SEMARANG')

@section('content')
<div class="container py-4">
  <!-- Title Header -->
  <div class="text-center mb-5">
    <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-2">HUBUNGI KAMI</span>
    <h2 class="font-passion-one display-5 text-dark mb-2">Kontak & Lokasi Sekolah</h2>
    <p class="text-muted mx-auto" style="max-width: 600px; font-size: 15px;">
      Informasi lengkap mengenai alamat, kontak layanan, serta jam operasional SDN Bandarharjo 02 Semarang.
    </p>
  </div>

  <!-- 3 Cards: Alamat, Informasi, Jam Kerja -->
  <div class="row g-4 justify-content-center mb-5">
    <!-- 1. ALAMAT -->
    <div class="col-lg-4 col-md-6">
      <div class="card border-0 rounded-4 shadow-sm p-4 h-100 d-flex flex-column hover-elevate bg-white">
        <div class="d-flex justify-content-center align-items-center mb-3">
          <img src="{{ asset('assets/alamat.png') }}" alt="Alamat" style="width: 90px; height: auto;">
        </div>
        <h5 class="fw-bold text-center text-dark mb-2">ALAMAT SEKOLAH</h5>
        <p class="text-muted text-center flex-grow-1 small" style="line-height: 1.6;">
          Jl. Lodan Raya No. 1, Kel. Bandarharjo, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50175.
        </p>
        <a href="https://www.google.com/maps?q=Jl.+Lodan+Raya+No.1,+Bandarharjo,+Kec.+Semarang+Utara,+Kota+Semarang,+Jawa+Tengah+50175+(SD+N+02+Bandarharjo+Semarang)" 
           target="_blank" 
           class="btn btn-outline-primary rounded-pill d-flex align-items-center justify-content-center gap-2 mt-auto py-2 fw-semibold">
          <i class="bi bi-geo-alt-fill text-danger"></i>
          <span>Buka di Google Maps</span>
        </a>
      </div>
    </div>

    <!-- 2. INFORMASI / WHATSAPP -->
    <div class="col-lg-4 col-md-6">
      <div class="card border-0 rounded-4 shadow-sm p-4 h-100 d-flex flex-column hover-elevate bg-white">
        <div class="d-flex justify-content-center align-items-center mb-3">
          <img src="{{ asset('assets/informasi.png') }}" alt="Informasi" style="width: 90px; height: auto;">
        </div>
        <h5 class="fw-bold text-center text-dark mb-2">INFORMASI & KONTAK</h5>
        <div class="text-muted flex-grow-1 small text-center mb-3">
          <div class="mb-2">
            <span class="d-block fw-bold text-dark">E-mail Resmi:</span>
            sdnbandarharjo02semarang@gmail.com
          </div>
          <div>
            <span class="d-block fw-bold text-dark">Telepon Kantor:</span>
            (024) 3563228
          </div>
        </div>
        <a href="https://wa.me/+6285740782211?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20informasi%20di%20SD%20N%20Bandarharjo%2002%20Semarang." 
           target="_blank" 
           class="btn btn-success rounded-pill d-flex align-items-center justify-content-center gap-2 mt-auto py-2 fw-semibold shadow-sm">
          <i class="bi bi-whatsapp"></i>
          <span>Hubungi via WhatsApp</span>
        </a>
      </div>
    </div>

    <!-- 3. JAM OPERASIONAL -->
    <div class="col-lg-4 col-md-6">
      <div class="card border-0 rounded-4 shadow-sm p-4 h-100 d-flex flex-column hover-elevate bg-white">
        <div class="d-flex justify-content-center align-items-center mb-3">
          <img src="{{ asset('assets/jam.png') }}" alt="Jam Operasional" style="width: 90px; height: auto;">
        </div>
        <h5 class="fw-bold text-center text-dark mb-3">JAM PELAYANAN</h5>
        <div class="d-flex flex-column gap-2 small flex-grow-1">
          <div class="d-flex justify-content-between p-2 rounded-3 bg-light">
            <span class="fw-bold text-dark">Senin - Kamis:</span>
            <span class="text-muted">07.30 - 15.55 WIB</span>
          </div>
          <div class="d-flex justify-content-between p-2 rounded-3 bg-light">
            <span class="fw-bold text-dark">Jumat:</span>
            <span class="text-muted">07.30 - 11.30 WIB</span>
          </div>
          <div class="d-flex justify-content-between p-2 rounded-3 bg-light">
            <span class="fw-bold text-dark">Sabtu & Minggu:</span>
            <span class="badge bg-secondary-subtle text-secondary">Libur</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Google Maps Embed -->
  <div class="card border-0 rounded-4 shadow-sm overflow-hidden p-0 mb-4">
    <div class="p-3 bg-white border-bottom d-flex align-items-center gap-2">
      <i class="bi bi-map-fill text-primary"></i>
      <span class="fw-bold text-dark">Peta Lokasi SDN Bandarharjo 02</span>
    </div>
    <div style="height: 380px; width: 100%;">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3236754026336!2d110.42065837499703!3d-6.971077793029671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4b3602f37c3%3A0xbcf2a0c20f18d7f7!2sSD%20N%2002%20Bandarharjo!5e0!3m2!1sid!2sid!4v1718000000000!5m2!1sid!2sid" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</div>
@endsection
