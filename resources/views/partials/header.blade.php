<header class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('images/logo SD.png') }}" alt="" height="48">
      <a class="nav-link font-passion-one" aria-current="page" href="/" style="font-size: 32px">SDN BANDARHARJO
        02</a>
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">

        </li>
      </ul>
      <div class="gap-0">
        <a href="#" style="text-decoration: none;">
          <img src="{{ asset('images/IG.png') }}" alt="Instagram" width="36">
        </a>
        <a href="#" style="text-decoration: none;">
          <img src="{{ asset('images/X.png') }}" alt="X" width="36">
        </a>
        <a href="#" style="text-decoration: none;">
          <img src="{{ asset('images/fb.png') }}" alt="Facebook" width="36">
        </a>
        <a href="#" style="text-decoration: none;">
          <img src="{{ asset('images/youtube.png') }}" alt="YouTube" width="36">
        </a>
      </div>
    </div>
  </div>
</header>

<section class="d-flex flex-column justify-content-between w-100 position-relative" style="min-height: 600px;">
  <div class="position-absolute top-0 start-0 w-100 h-100 z-n1 overflow-hidden">
    <img src="{{ asset('images/SDN 02 Bandarharjo.jpeg') }}" alt="" class="w-100 h-100 object-fit-cover hero-img" loading="lazy" />
    <div class="hero-gradient-overlay position-absolute top-0 start-0 w-100 h-100"></div>
  </div>

  <!-- Contact, Feedback (Glass Card) -->
  <div class="d-flex justify-content-end pe-5 pt-4">
    <div class="contact-glass-card d-inline-flex align-items-center shadow-sm">
      <div class="d-flex align-items-center gap-2">
        <div class="contact-icon-box">
          <i class="bi bi-envelope"></i>
        </div>
        <div class="d-flex flex-column lh-sm">
          <span class="text-uppercase text-muted contact-label">Email Kami</span>
          <a href="mailto:sdnbandarharjo02semarang@gmail.com" class="text-dark fw-bold text-decoration-none contact-value">
            sdnbandarharjo02semarang@gmail.com
          </a>
        </div>
      </div>

      <div class="contact-divider"></div>

      <div class="d-flex align-items-center gap-2">
        <div class="contact-icon-box">
          <i class="bi bi-telephone-fill"></i>
        </div>
        <div class="d-flex flex-column lh-sm">
          <span class="text-uppercase text-muted contact-label">Hubungi Kami</span>
          <a href="tel:62243563228" class="text-dark fw-bold text-decoration-none contact-value">
            0243563228
          </a>
        </div>
      </div>

      <div class="contact-divider"></div>

      <div class="d-flex align-items-center gap-2">
        <div class="contact-icon-box">
          <i class="bi bi-chat-square-dots-fill"></i>
        </div>
        <div class="d-flex flex-column lh-sm">
          <span class="text-uppercase text-muted contact-label">Layanan</span>
          <a href="/pengaduan" class="text-dark fw-bold text-decoration-none contact-value">
            Pengaduan
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Hero -->
  <div class="container mb-4" id="hero">
    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-2" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.25); font-size: 13px;">
      <i class="bi bi-mortarboard-fill text-warning"></i>
      <span class="text-white fw-semibold">Website Resmi SDN Bandarharjo 02</span>
    </div>
    
    <h1 class="text-white font-passion-one display-3 mb-2" style="text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6); letter-spacing: 0.5px;">
      SELAMAT DATANG DI <br>
      <span style="color: #ff9d3b;">SDN BANDARHARJO 02</span>
    </h1>
    
    <p class="text-white mb-4" style="font-size: 16px; max-width: 650px; text-shadow: 0 1px 4px rgba(0, 0, 0, 0.7); line-height: 1.6;">
      <i class="bi bi-geo-alt-fill text-warning me-2"></i>Jl. Lodan Raya No.1, Kel. Bandarharjo, Kec. Semarang Utara, Kota Semarang 50175
    </p>

    <div class="d-flex flex-wrap gap-3">
      <a href="/profil/visi-misi" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-sm d-inline-flex align-items-center gap-2">
        <i class="bi bi-info-circle"></i>
        <span>Profil Sekolah</span>
      </a>
      <a href="/pengaduan" class="btn btn-outline-light rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
        <i class="bi bi-megaphone"></i>
        <span>Layanan Pengaduan</span>
      </a>
      <a href="/login" class="btn rounded-pill px-4 py-2 fw-semibold text-white d-inline-flex align-items-center gap-2" style="background: rgba(0, 0, 0, 0.4); backdrop-filter: blur(6px); border: 1px solid rgba(255, 255, 255, 0.3);">
        <i class="bi bi-box-arrow-in-right text-warning"></i>
        <span>Login Guru / Admin</span>
      </a>
    </div>
  </div>

  <!-- Navbar -->
  @include('partials.navbar')
</section>
