@extends('layouts.main')

@section('title', 'Berita & Pengumuman - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(244, 128, 0, 0.15); color: #e07000; font-weight: 600;">
          Kabar Terkini
        </span>
        <h2 class="font-passion-one display-6 text-dark mb-1">BERITA & PENGUMUMAN</h2>
        <p class="text-muted mb-0">Informasi terbaru seputar kegiatan dan agenda SDN Bandarharjo 02 Semarang</p>
        <div class="mx-auto mt-2" style="width: 60px; height: 3px; background: #f48000; border-radius: 2px;"></div>
      </div>

      @php
        $beritaList = [
          [
            'judul' => 'Masa Pengenalan Lingkungan Sekolah (MPLS) Tahun Ajaran 2021/2022',
            'img' => 'MPLS.jpeg',
            'url' => '/mpls',
            'kategori' => 'Kesiswaan',
            'tanggal' => '12 Juli 2021',
            'ringkasan' => 'Kegiatan penyambutan siswa baru kelas 1 SDN Bandarharjo 02 dengan pengenalan guru dan lingkungan sekolah.'
          ],
          [
            'judul' => 'Simulasi Asesmen Nasional Tahun 2021 Gelombang 2',
            'img' => 'asesmen.jpeg',
            'url' => '/simulasi_asesmen',
            'kategori' => 'Akademik',
            'tanggal' => '21 Oktober 2021',
            'ringkasan' => 'Uji coba kesiapan teknis dan pemahaman siswa dalam menghadapi pelaksanaan Asesmen Nasional Berbasis Komputer.'
          ],
          [
            'judul' => 'Gladi Bersih Asesmen Nasional Tahun 2021 Gelombang 2',
            'img' => 'asesmen2.jpeg',
            'url' => '/glaber_asesmen',
            'kategori' => 'Akademik',
            'tanggal' => '25 Oktober 2021',
            'ringkasan' => 'Pemantapan teknis terakhir sarana laboratorium komputer dan aplikasi tes ANBK siswa kelas 5.'
          ],
          [
            'judul' => 'Pelaksanaan Asesmen Nasional Tahun 2021 Gelombang 2',
            'img' => 'pelaksanaan-asesmen.jpeg',
            'url' => '/pelaksanaan_asesmen',
            'kategori' => 'Ujian & Evaluasi',
            'tanggal' => '15 November 2021',
            'ringkasan' => 'Pelaksanaan resmi Asesmen Nasional Berbasis Komputer (ANBK) berjalan tertib dengan protokol kesehatan ketat.'
          ],
          [
            'judul' => 'Kegiatan Survei Lingkungan Belajar oleh Dewan Guru dan Kepala Sekolah',
            'img' => 'survei.jpeg',
            'url' => '/survei_lingkungan',
            'kategori' => 'Manajemen',
            'tanggal' => '22 November 2021',
            'ringkasan' => 'Pengisian instrumen evaluasi iklim pembelajaran dan keamanan lingkungan sekolah oleh bapak/ibu guru.'
          ],
          [
            'judul' => 'Kegiatan Penilaian Kinerja Kepala Sekolah (PKKS) Tahun 2021',
            'img' => 'penilaian-kinerja-kepsek.jpeg',
            'url' => '/penilaian_pekerja',
            'kategori' => 'Supervisi',
            'tanggal' => '02 Desember 2021',
            'ringkasan' => 'Evaluasi manajerial dan kepemimpinan sekolah oleh tim pengawas Dinas Pendidikan Kota Semarang.'
          ],
          [
            'judul' => 'Kompetisi Sains Nasional (KSN) Tingkat Kota Semarang Tahun 2021',
            'img' => 'kompetisi-sains.jpeg',
            'url' => '/kompetisi_sains',
            'kategori' => 'Prestasi',
            'tanggal' => '10 Desember 2021',
            'ringkasan' => 'Delegasi siswa SDN Bandarharjo 02 berkompetisi dalam bidang sains dan matematika tingkat kota.'
          ],
          [
            'judul' => 'Bulan Imunisasi Anak Sekolah (BIAS) Tahun 2021',
            'img' => 'imunisasi.jpeg',
            'url' => '/imunisasi',
            'kategori' => 'Kesehatan',
            'tanggal' => '18 Desember 2021',
            'ringkasan' => 'Pemberian vaksinasi kesehatan rutin bekerja sama dengan Puskesmas Bandarharjo untuk imunitas anak.'
          ],
        ];
      @endphp

      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
        @foreach ($beritaList as $b)
          <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white hover-elevate transition-all">
              <div class="position-relative overflow-hidden" style="height: 200px;">
                <img
                  src="{{ asset('images/' . $b['img']) }}"
                  class="w-100 h-100"
                  alt="{{ $b['judul'] }}"
                  style="object-fit: cover; transition: transform 0.3s ease;"
                  onmouseover="this.style.transform='scale(1.05)'"
                  onmouseout="this.style.transform='scale(1)'"
                />
                <span class="badge position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill bg-dark bg-opacity-75 text-white small">
                  {{ $b['kategori'] }}
                </span>
              </div>
              <div class="card-body p-4 d-flex flex-column justify-content-between">
                <div>
                  <div class="text-muted small mb-2 d-flex align-items-center">
                    <i class="bi bi-calendar3 me-1 text-warning"></i> {{ $b['tanggal'] }}
                  </div>
                  <h6 class="fw-bold text-dark lh-base mb-2">{{ $b['judul'] }}</h6>
                  <p class="text-muted small mb-3 lh-sm">{{ $b['ringkasan'] }}</p>
                </div>
                <div>
                  <a
                    href="{{ url($b['url']) }}"
                    class="btn btn-sm text-white px-3 py-2 rounded-3 w-100 fw-semibold"
                    style="background-color: var(--color-primary); box-shadow: 0 4px 10px rgba(244, 128, 0, 0.25);"
                  >
                    Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
