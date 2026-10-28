@extends("layouts.main")

@section("title", "Visi & Misi - SDN BANDARHARJO 02 SEMARANG")

@section("content")
<div class="container py-4">
  <!-- Title Header -->
  <div class="text-center mb-5">
    <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-2">PROFIL SEKOLAH</span>
    <h2 class="font-passion-one display-5 text-dark mb-2">Visi & Misi Sekolah</h2>
    <p class="text-muted mx-auto" style="max-width: 650px; font-size: 15px;">
      Landasan, cita-cita luhur, dan komitmen seluruh warga sekolah SDN Bandarharjo 02 Semarang dalam mendidik putra-putri bangsa.
    </p>
  </div>

  <div class="row justify-content-center gy-4">
    <!-- Card VISI SEKOLAH -->
    <div class="col-lg-10">
      <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white hover-elevate overflow-hidden position-relative">
        <div class="position-absolute top-0 end-0 p-4 opacity-10 d-none d-md-block pointer-events-none">
          <i class="bi bi-quote text-primary" style="font-size: 8rem; line-height: 0;"></i>
        </div>

        <div class="d-flex align-items-center gap-3 mb-4">
          <div class="rounded-4 d-flex align-items-center justify-content-center text-white shadow-sm flex-shrink-0" 
               style="width: 52px; height: 52px; background: linear-gradient(135deg, #f07c1a 0%, #cc6900 100%);">
            <i class="bi bi-eye-fill fs-4"></i>
          </div>
          <div>
            <span class="text-uppercase text-muted fw-bold" style="font-size: 11px; letter-spacing: 0.5px;">Cita-Cita Utama</span>
            <h3 class="mb-0 fw-bold font-passion-one text-dark">VISI SEKOLAH</h3>
          </div>
        </div>

        <div class="p-4 rounded-3" style="background-color: #fff9f2; border-left: 4px solid var(--color-primary);">
          <p class="fs-5 fst-italic text-dark mb-0" style="line-height: 1.8;">
            “Membentuk Manusia Beriman, jujur, mandiri, beretika, santun dalam budaya, unggul dalam IPTEK, dan menciptakan lingkungan ramah anak serta fasilitatif terhadap keberagaman peserta didik.”
          </p>
        </div>
      </div>
    </div>

    <!-- Card MISI SEKOLAH -->
    <div class="col-lg-10">
      <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white hover-elevate">
        <div class="d-flex align-items-center gap-3 mb-4">
          <div class="rounded-4 d-flex align-items-center justify-content-center text-white shadow-sm flex-shrink-0" 
               style="width: 52px; height: 52px; background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);">
            <i class="bi bi-bullseye fs-4"></i>
          </div>
          <div>
            <span class="text-uppercase text-muted fw-bold" style="font-size: 11px; letter-spacing: 0.5px;">Langkah Strategis</span>
            <h3 class="mb-0 fw-bold font-passion-one text-dark">MISI SEKOLAH</h3>
          </div>
        </div>

        <div class="d-flex flex-column gap-3">
          <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-light">
            <div class="badge rounded-circle bg-primary text-white p-2 d-flex align-items-center justify-content-center mt-1" style="width: 24px; height: 24px;">1</div>
            <p class="mb-0 text-dark" style="line-height: 1.6;">Menyiapkan sumber daya manusia yang berbudaya, cerdas, terampil, dan berbudi pekerti luhur.</p>
          </div>

          <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-light">
            <div class="badge rounded-circle bg-primary text-white p-2 d-flex align-items-center justify-content-center mt-1" style="width: 24px; height: 24px;">2</div>
            <p class="mb-0 text-dark" style="line-height: 1.6;">Meningkatkan wawasan dan kreativitas berbudaya bagi seluruh warga sekolah.</p>
          </div>

          <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-light">
            <div class="badge rounded-circle bg-primary text-white p-2 d-flex align-items-center justify-content-center mt-1" style="width: 24px; height: 24px;">3</div>
            <p class="mb-0 text-dark" style="line-height: 1.6;">Menciptakan kualitas dan efektivitas proses belajar mengajar yang berpusat pada peserta didik.</p>
          </div>

          <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-light">
            <div class="badge rounded-circle bg-primary text-white p-2 d-flex align-items-center justify-content-center mt-1" style="width: 24px; height: 24px;">4</div>
            <p class="mb-0 text-dark" style="line-height: 1.6;">Menciptakan lingkungan sekolah yang kondusif, bersih, aman, ramah anak, dan nyaman.</p>
          </div>

          <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-light">
            <div class="badge rounded-circle bg-primary text-white p-2 d-flex align-items-center justify-content-center mt-1" style="width: 24px; height: 24px;">5</div>
            <p class="mb-0 text-dark" style="line-height: 1.6;">Menumbuhkembangkan semangat berprestasi secara kompetitif, jujur, dan suportif.</p>
          </div>

          <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-light">
            <div class="badge rounded-circle bg-primary text-white p-2 d-flex align-items-center justify-content-center mt-1" style="width: 24px; height: 24px;">6</div>
            <p class="mb-0 text-dark" style="line-height: 1.6;">Menumbuhkembangkan penghayatan dan pengalaman ajaran agama yang dianut sehingga terbangun insan yang beriman, bertaqwa, serta berakhlak mulia.</p>
          </div>

          <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-light">
            <div class="badge rounded-circle bg-primary text-white p-2 d-flex align-items-center justify-content-center mt-1" style="width: 24px; height: 24px;">7</div>
            <p class="mb-0 text-dark" style="line-height: 1.6;">Memberikan fasilitas pembelajaran pada anak berkebutuhan khusus sesuai dengan kondisi dan potensi yang dimiliki.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
