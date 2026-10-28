@extends('layouts.main')

@section('title', 'Galeri Foto - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(244, 128, 0, 0.15); color: #e07000; font-weight: 600;">
          Dokumentasi Visual
        </span>
        <h2 class="font-passion-one display-6 text-dark mb-1">GALERI FOTO KEGIATAN</h2>
        <p class="text-muted mb-0">Rangkaian momen dan kegiatan belajar mengajar di SDN Bandarharjo 02 Semarang</p>
        <div class="mx-auto mt-2" style="width: 60px; height: 3px; background: #f48000; border-radius: 2px;"></div>
      </div>

      @php
        $fotos = [
          [
            'judul' => 'Masa Pengenalan Lingkungan Sekolah (MPLS)',
            'img' => 'MPLS.jpeg',
            'link' => '/mpls',
            'kategori' => 'Kegiatan Siswa'
          ],
          [
            'judul' => 'Simulasi Asesmen Nasional Gelombang 2',
            'img' => 'asesmen.jpeg',
            'link' => '/simulasi_asesmen',
            'kategori' => 'Asesmen'
          ],
          [
            'judul' => 'Gladi Bersih Asesmen Nasional Gelombang 2',
            'img' => 'asesmen2.jpeg',
            'link' => '/glaber_asesmen',
            'kategori' => 'Asesmen'
          ],
          [
            'judul' => 'Pelaksanaan Asesmen Nasional Gelombang 2',
            'img' => 'pelaksanaan-asesmen.jpeg',
            'link' => '/pelaksanaan_asesmen',
            'kategori' => 'Asesmen'
          ],
          [
            'judul' => 'Kegiatan Survei Lingkungan Belajar oleh Guru & Kepala Sekolah',
            'img' => 'survei.jpeg',
            'link' => '/survei_lingkungan',
            'kategori' => 'Guru & Staf'
          ],
          [
            'judul' => 'Penilaian Kinerja Kepala Sekolah (PKKS)',
            'img' => 'penilaian-kinerja-kepsek.jpeg',
            'link' => '/penilaian_pekerja',
            'kategori' => 'Manajemen'
          ],
          [
            'judul' => 'Kompetisi Sains Nasional (KSN) Tingkat Kota Semarang',
            'img' => 'kompetisi-sains.jpeg',
            'link' => '/kompetisi_sains',
            'kategori' => 'Prestasi'
          ],
          [
            'judul' => 'Bulan Imunisasi Anak Sekolah (BIAS)',
            'img' => 'imunisasi.jpeg',
            'link' => '/imunisasi',
            'kategori' => 'Kesehatan'
          ],
          [
            'judul' => 'Upacara Peringatan HUT KORPRI Ke-51',
            'img' => 'hut-korps.jpeg',
            'link' => '/upacara',
            'kategori' => 'Upacara'
          ],
          [
            'judul' => 'Kegiatan Pembiasaan Sarapan Bersama Menu Sehat',
            'img' => 'sarapan-bersama.jpeg',
            'link' => '/sarapan_bersama',
            'kategori' => 'Pembiasaan'
          ],
          [
            'judul' => 'Studi Tiru Kurikulum Merdeka di SDN Sondakan Surakarta',
            'img' => 'study.jpeg',
            'link' => '#',
            'kategori' => 'Kunjungan'
          ],
          [
            'judul' => 'Gerakan Menanam & Kebersihan Lingkungan Sekolah',
            'img' => 'menanam.jpeg',
            'link' => '/menanam',
            'kategori' => 'Adiwiyata'
          ],
        ];
      @endphp

      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
        @foreach ($fotos as $item)
          <div class="col">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white hover-elevate transition-all">
              <div class="position-relative overflow-hidden" style="height: 210px;">
                <img
                  src="{{ asset('images/' . $item['img']) }}"
                  class="w-100 h-100"
                  alt="{{ $item['judul'] }}"
                  style="object-fit: cover; transition: transform 0.3s ease;"
                  onmouseover="this.style.transform='scale(1.05)'"
                  onmouseout="this.style.transform='scale(1)'"
                />
                <span class="badge position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill bg-dark bg-opacity-75 text-white small">
                  {{ $item['kategori'] }}
                </span>
              </div>
              <div class="card-body p-4 d-flex flex-column justify-content-between">
                <div>
                  <h6 class="fw-bold text-dark lh-base mb-3">{{ $item['judul'] }}</h6>
                </div>
                <div>
                  @if ($item['link'] !== '#')
                    <a
                      href="{{ url($item['link']) }}"
                      class="btn btn-sm text-white px-3 py-2 rounded-3 w-100 fw-semibold"
                      style="background-color: var(--color-primary); box-shadow: 0 4px 10px rgba(244, 128, 0, 0.25);"
                    >
                      Lihat Dokumentasi <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                  @else
                    <button class="btn btn-sm btn-light border text-muted px-3 py-2 rounded-3 w-100" disabled>
                      Dokumentasi Internal
                    </button>
                  @endif
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
