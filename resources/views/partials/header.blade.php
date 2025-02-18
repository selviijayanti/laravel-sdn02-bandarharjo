<header class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('images/logo SD.png') }}" alt="" height="48">
      <a class="nav-link font-passion-one" aria-current="page" href="/" style="font-size: 32px">SDN
        BANDARHAJO
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

<section class="d-flex flex-column justify-content-between w-100" style="height: 600px;">
  <div class="position-absolute z-n1 w-100">
    <img src="{{ asset('images/SDN 02 Bandarharjo.jpeg') }}" alt="" class="w-100 object-fit-cover hero-img"
      height="600px" loading="lazy" />
  </div>

  <!-- Contact, Feedback -->
  <div class="d-flex justify-content-end pe-5 pt-5">
    <div class="d-flex align-items-center gap-3">
      <i class="bi bi-envelope fs-2"></i>
      <div class="d-flex flex-column lh-sm">
        <div class="text-uppercase">Email Kami</div>
        <div class="fw-bold"><a href="mailto:sdnbandarharjo02semarang@gmail.com"
            class="text-black text-decoration-none">sdnbandarharjo02semarang@gmail.com</a>
        </div>
      </div>
    </div>
    <div class="vertical-separator"></div>
    <div class="d-flex align-items-center gap-3">
      <i class="bi bi-telephone-fill fs-2"></i>
      <div class="d-flex flex-column lh-sm">
        <div class="text-uppercase">Hubungi Kami</div>
        <div class="fw-bold"><a href="tel:62243563228" class="text-black text-decoration-none">0243563228</a></div>
      </div>
    </div>
    <div class="vertical-separator"></div>
    <div class="d-flex align-items-center gap-3">
      <i class="bi bi-pencil-square fs-2"></i>
      <div class="d-flex flex-column lh-sm">
        <div class="text-uppercase">Umpan Balik</div>
        <div class="fw-bold"><a href="#" class="text-black">mengeluh</a></div>
      </div>
    </div>
  </div>

  <!-- Hero -->
  <div class="font-passion-one container" id="hero">
    <h1 class="text-white display-1">WELCOME TO SDN BANDARHARJO 02</h1>
    <p class="text-white fs-2">Jl. Lodan Raya No.1 Kel. Bandarharjo, Kec. Semarang Utara, Kota Semarang 50175
    </p>
    <a href="#" class="btn btn-primary rounded-pill mt-4 px-5 py-2 fs-4">Login</a>
  </div>

  <!-- Navbar -->
  @include('partials.navbar')
</section>
