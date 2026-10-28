<footer class="text-white mt-5">
  <!-- Bagian Utama Footer -->
  <div class="px-4 py-5" style="background-color: #F07C1A;">
    <div class="container">
      <div class="row gy-4 justify-content-between">
        <!-- Kolom 1: Profil Sekolah & Medsos -->
        <div class="col-lg-5 col-md-12">
          <div class="d-flex align-items-center gap-3 mb-3">
            <img src="{{ asset('images/logo SD.png') }}" alt="Logo SD" height="48" class="bg-white p-1 rounded-circle shadow-sm">
            <div>
              <div class="font-passion-one text-white fs-4 lh-1">SDN Bandarharjo 02</div>
              <small class="text-white-50" style="font-size: 13px;">Kota Semarang • Cerdas & Berkarakter</small>
            </div>
          </div>
          
          <p class="text-white-50 small mb-3" style="line-height: 1.6; max-width: 420px;">
            Membimbing generasi penerus bangsa yang bertaqwa kepada Tuhan Yang Maha Esa, cerdas, berprestasi, dan berwawasan lingkungan.
          </p>

          <div class="bg-white d-inline-flex align-items-center p-2 rounded-pill shadow-sm">
            <a href="#" class="text-decoration-none me-1" title="Instagram">
              <img src="{{ asset('images/IG.png') }}" alt="Instagram" style="width: 34px;">
            </a>
            <a href="#" class="text-decoration-none me-1" title="Twitter / X">
              <img src="{{ asset('images/X.png') }}" alt="X" style="width: 34px;">
            </a>
            <a href="#" class="text-decoration-none me-1" title="Facebook">
              <img src="{{ asset('images/fb.png') }}" alt="Facebook" style="width: 34px;">
            </a>
            <a href="#" class="text-decoration-none" title="YouTube">
              <img src="{{ asset('images/youtube.png') }}" alt="YouTube" style="width: 34px;">
            </a>
          </div>
        </div>

        <!-- Kolom 2: Tautan Cepat -->
        <div class="col-lg-3 col-6">
          <div class="font-passion-one text-white fs-5 mb-3">Tautan Cepat</div>
          <ul class="list-unstyled d-flex flex-column gap-2 small mb-0">
            <li><a href="/profil/sejarah-sekolah" class="text-white text-decoration-none opacity-75 hover-opacity-100"><i class="bi bi-chevron-right me-1"></i>Sejarah Sekolah</a></li>
            <li><a href="/profil/visi-misi" class="text-white text-decoration-none opacity-75 hover-opacity-100"><i class="bi bi-chevron-right me-1"></i>Visi & Misi</a></li>
            <li><a href="/akademik/ekstrakurikuler" class="text-white text-decoration-none opacity-75 hover-opacity-100"><i class="bi bi-chevron-right me-1"></i>Ekstrakurikuler</a></li>
            <li><a href="/akademik/prestasi-siswa" class="text-white text-decoration-none opacity-75 hover-opacity-100"><i class="bi bi-chevron-right me-1"></i>Prestasi Siswa</a></li>
            <li><a href="/pengumuman/berita" class="text-white text-decoration-none opacity-75 hover-opacity-100"><i class="bi bi-chevron-right me-1"></i>Berita & Pengumuman</a></li>
          </ul>
        </div>

        <!-- Kolom 3: Kontak & Informasi -->
        <div class="col-lg-4 col-12">
          <div class="font-passion-one text-white fs-5 mb-3">Kontak Kami</div>
          <div class="d-flex flex-column gap-2 small">
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-envelope-fill fs-6 text-white"></i>
              <a href="mailto:sdnbandarharjo02semarang@gmail.com" class="text-white text-decoration-none opacity-75">
                sdnbandarharjo02semarang@gmail.com
              </a>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-telephone-fill fs-6 text-white"></i>
              <a href="tel:62243563228" class="text-white text-decoration-none opacity-75">
                (024) 3563228
              </a>
            </div>
            <div class="d-flex align-items-start gap-2">
              <i class="bi bi-geo-alt-fill fs-6 text-white mt-1"></i>
              <span class="opacity-75">
                Jl. Lodan Raya No. 1, Kel. Bandarharjo, Kec. Semarang Utara, Kota Semarang 50175
              </span>
            </div>
            <div class="mt-2">
              <a href="/pengaduan" class="btn btn-sm btn-light rounded-pill px-3 py-1 fw-bold text-dark shadow-sm">
                <i class="bi bi-chat-dots-fill me-1 text-primary"></i> Layanan Pengaduan
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bagian Bawah: Copyright -->
  <div class="py-3 px-4 text-center" style="background-color: #A65413;">
    <div class="container d-flex justify-content-between align-items-center flex-wrap gap-2 small">
      <div>
        &copy; {{ date('Y') }} SDN Bandarharjo 02 Semarang. All rights reserved.
      </div>
      <div>
        Jl. Lodan Raya No.1, Kel. Bandarharjo, Kec. Semarang Utara
      </div>
    </div>
  </div>
</footer>
