@extends('layouts.main')

@section('title', 'MPLS Tahun 2021/2022 - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container" style="max-width: 900px;">
      <a href="{{ url('/galeri/galeri-foto') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3 mb-4">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Galeri Foto
      </a>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white p-4 p-md-5">
        <div class="text-center mb-4">
          <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(244, 128, 0, 0.15); color: #e07000; font-weight: 600;">
            Kegiatan Siswa
          </span>
          <h2 class="font-passion-one display-6 text-dark mb-2">
            MPLS SDN BANDARHARJO 02 2021/2022
          </h2>
          <p class="text-muted small">Tahun Ajaran 2021/2022 • SDN 02 Bandarharjo Semarang</p>
        </div>

        <div class="rounded-4 overflow-hidden mb-4 shadow-sm">
          <img src="{{ asset('images/MPLS.jpeg') }}" class="img-fluid w-100" alt="MPLS SDN Bandarharjo 02" style="max-height: 480px; object-fit: cover;">
        </div>

        <div class="content-body text-dark lh-lg" style="font-size: 16px;">
          <h5 class="fw-bold mb-3">Assalamualaikum wr. wb.</h5>
          <p>
            Puji syukur kehadirat Tuhan Yang Maha Esa atas berkah limpahan rahmat, taufik dan hidayah-Nya kepada kita,
            khususnya para peserta didik baru yang telah diterima di SDN Bandarharjo 02 Semarang, pada tahun ajaran 2021/2022.
          </p>
          <p>
            Keluarga besar SDN Bandarharjo 02 Semarang mengucapkan selamat kepada seluruh ananda peserta didik baru
            kelas I dan selamat bergabung menjadi bagian dari keluarga besar SDN Bandarharjo 02 Semarang.
          </p>
          <p>
            Mengawali tahun pelajaran 2021/2022 seluruh peserta didik baru wajib mengikuti kegiatan MPLS (Masa Pengenalan Lingkungan Sekolah). 
            Selama kegiatan ini berlangsung kami berharap ananda dapat memperoleh pengalaman baru yang menyenangkan,
            mengenal teman-teman baru, para guru dan staf karyawan, seluruh komponen sekolah beserta norma, budaya, dan tata tertib yang berlaku di dalamnya.
          </p>

          <div class="p-3 my-4 bg-light rounded-3 border-start border-4 border-warning">
            <h6 class="fw-bold mb-1">Sambutan Kepala Dinas Pendidikan Kota Semarang:</h6>
            <p class="mb-2 small text-muted">Bapak Gunawan Saptogiri, S.H., M.M.</p>
            <a href="https://youtu.be/9VtNBQ2Hk0Q" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-danger rounded-pill px-3">
              <i class="bi bi-youtube me-1"></i> Tonton Sambutan di YouTube
            </a>
          </div>

          <p>
            Semoga kegiatan ini dapat menjadikan ananda sebagai insan yang beriman, disiplin, dan unggul. Selamat mengikuti MPLS, sukses untuk ananda semua.
          </p>
          <p class="fw-bold mb-0">Wassalamu'alaikum Wr. Wb.</p>
        </div>
      </div>
    </div>
  </section>
@endsection
