<header class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
  <div class="container-fluid px-4 py-1">
    <a class="navbar-brand d-flex align-items-center gap-2" href="/admin/dashboard">
      <img src="{{ asset('images/logo SD.png') }}" alt="Logo SDN 02" height="42">
      <div class="d-flex flex-column lh-1">
        <span class="font-passion-one fs-4 text-dark mb-0">SDN BANDARHARJO 02</span>
        <span class="text-muted" style="font-size: 11px; letter-spacing: 1px;">PANEL ADMINISTRATOR</span>
      </div>
    </a>

    <div class="d-flex align-items-center gap-3">
      <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary btn-sm rounded-pill px-3 py-1 d-none d-sm-inline-flex align-items-center">
        <i class="bi bi-box-arrow-up-right me-1"></i> Buka Website Utama
      </a>
      
      <div class="d-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-light border">
        <i class="bi bi-person-circle text-warning fs-5"></i>
        <div class="d-flex flex-column text-start">
          <span class="fw-bold small text-dark lh-1">{{ session('username') ?? 'Admin' }}</span>
          <span class="text-muted lh-1" style="font-size: 10px;">Administrator</span>
        </div>
      </div>

      <a href="{{ route('admin.logout') }}" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1 d-flex align-items-center" title="Keluar">
        <i class="bi bi-box-arrow-right me-1"></i> Logout
      </a>
    </div>
  </div>
</header>

<section class="position-relative d-flex flex-column justify-content-between w-100 overflow-hidden" style="min-height: 480px;">
  <!-- Background Image with Gradient Overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100 z-n1">
    <img src="{{ asset('images/SDN 02 Bandarharjo.jpeg') }}" alt="Gedung SDN 02" class="w-100 h-100 object-fit-cover hero-img" loading="lazy" />
    <div class="position-absolute top-0 start-0 w-100 h-100 hero-gradient-overlay"></div>
  </div>

  <!-- Contact Frosted Glass Card -->
  <div class="d-flex justify-content-end px-4 pt-4">
    <div class="contact-glass-card shadow-sm rounded-4 p-2 px-3 d-none d-md-flex align-items-center gap-3">
      <div class="d-flex align-items-center gap-2">
        <div class="p-1 rounded-circle bg-warning text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background-color: var(--color-primary) !important;">
          <i class="bi bi-envelope-fill fs-6"></i>
        </div>
        <div class="d-flex flex-column lh-1">
          <span class="text-muted text-uppercase fw-semibold" style="font-size: 10px;">Email Sekolah</span>
          <a href="mailto:sdnbandarharjo02semarang@gmail.com" class="text-dark fw-bold text-decoration-none" style="font-size: 12px;">sdnbandarharjo02semarang@gmail.com</a>
        </div>
      </div>
      <div class="vertical-separator" style="height: 24px; margin: 0 8px;"></div>
      <div class="d-flex align-items-center gap-2">
        <div class="p-1 rounded-circle bg-warning text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background-color: var(--color-primary) !important;">
          <i class="bi bi-telephone-fill fs-6"></i>
        </div>
        <div class="d-flex flex-column lh-1">
          <span class="text-muted text-uppercase fw-semibold" style="font-size: 10px;">Telepon</span>
          <a href="tel:62243563228" class="text-dark fw-bold text-decoration-none" style="font-size: 12px;">(024) 3563228</a>
        </div>
      </div>
      <div class="vertical-separator" style="height: 24px; margin: 0 8px;"></div>
      <div class="d-flex align-items-center gap-2">
        <div class="p-1 rounded-circle bg-warning text-white d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background-color: var(--color-primary) !important;">
          <i class="bi bi-shield-lock-fill fs-6"></i>
        </div>
        <div class="d-flex flex-column lh-1">
          <span class="text-muted text-uppercase fw-semibold" style="font-size: 10px;">Status</span>
          <span class="text-dark fw-bold" style="font-size: 12px;">Admin Mode</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Hero Content -->
  <div class="font-passion-one container my-auto py-4" id="hero">
    <div class="badge rounded-pill bg-warning text-dark px-3 py-2 text-uppercase mb-2 shadow-sm" style="background-color: var(--color-primary) !important; color: white !important;">
      <i class="bi bi-speedometer2 me-1"></i> Dashboard Kontrol Admin
    </div>
    <h1 class="text-white display-4 mb-2">SELAMAT DATANG, <span style="color: #ffb066;">{{ session('username') ?? 'ADMIN' }}</span></h1>
    <p class="text-white text-opacity-75 fs-5 mb-0" style="max-width: 650px;">
      Kelola data publikasi berita, galeri dokumentasi foto kegiatan, data lomba, dan layanan pengaduan SDN Bandarharjo 02.
    </p>
  </div>

  <!-- Admin Navbar -->
  @include('admin.partials.navbar')
</section>