<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Pendaftaran Akun - SDN BANDARHARJO 02 SEMARANG')</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Pangolin&family=Passion+One&family=Righteous:wght@400;700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  @vite('resources/css/app.css')
</head>

<body style="background: linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.75)), url('{{ asset('images/sd_login.png') }}') center/cover no-repeat fixed; min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 30px 0;">

  <div class="container d-flex justify-content-center">
    <div class="col-12 col-sm-10 col-md-6 col-lg-5">
      <div class="card border-0 rounded-4 shadow-lg p-3 p-md-4 bg-white">
        <div class="card-body">
          <!-- Logo & Header -->
          <div class="text-center mb-4">
            <a href="/" title="Kembali ke Beranda">
              <img src="{{ asset('images/logo SD.png') }}" alt="Logo SD" height="60" class="mb-2">
            </a>
            <h4 class="font-passion-one text-dark mb-0 fs-3">SDN BANDARHARJO 02</h4>
            <small class="text-muted fw-semibold">Pendaftaran Akun Admin / Guru Baru</small>
          </div>

          {{-- ALERT SECTION --}}
          @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show text-center small rounded-3" role="alert">
              <i class="bi bi-check-circle-fill me-1"></i> {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
          @endif

          @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show text-center small rounded-3" role="alert">
              <i class="bi bi-exclamation-triangle-fill me-1"></i> {{ session('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
          @endif

          {{-- REGISTER FORM --}}
          <form method="POST" action="{{ route('register.submit') }}">
            @csrf

            <div class="mb-3">
              <label class="form-label fw-bold small text-dark">Nama Lengkap</label>
              <div class="input-group">
                <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-person"></i></span>
                <input type="text" name="name" class="form-control border-start-0 ps-0 @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nama lengkap Anda" required>
              </div>
              @error('name') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
              <label class="form-label fw-bold small text-dark">Alamat Email</label>
              <div class="input-group">
                <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" class="form-control border-start-0 ps-0 @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="nama@email.com" required>
              </div>
              @error('email') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
              <label class="form-label fw-bold small text-dark">Kata Sandi</label>
              <div class="input-group">
                <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-lock"></i></span>
                <input type="password" name="password" class="form-control border-start-0 ps-0 @error('password') is-invalid @enderror" placeholder="Minimal 6 karakter" required>
              </div>
              @error('password') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
              <label class="form-label fw-bold small text-dark">Konfirmasi Kata Sandi</label>
              <div class="input-group">
                <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-shield-lock"></i></span>
                <input type="password" name="password_confirmation" class="form-control border-start-0 ps-0" placeholder="Ulangi kata sandi" required>
              </div>
            </div>

            <button type="submit" class="btn btn-orange rounded-pill w-100 py-2 fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2 mt-4">
              <i class="bi bi-person-plus-fill"></i>
              <span>Daftarkan Akun</span>
            </button>
          </form>

          <div class="text-center mt-3 pt-3 border-top small">
            <p class="text-muted mb-2">Sudah punya akun? <a href="{{ route('login.form') }}" class="fw-bold text-decoration-none" style="color: var(--color-primary);">Login di sini</a></p>
            <a href="/" class="text-secondary text-decoration-none small d-inline-flex align-items-center gap-1">
              <i class="bi bi-arrow-left"></i>
              <span>Kembali ke Beranda</span>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>