@extends("layouts.main")

@section("title", "Sarana Prasarana - SDN BANDARHARJO 02 SEMARANG")

@section("content")
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <span class="badge rounded-pill px-3 py-2 text-uppercase mb-2" style="background-color: rgba(244, 128, 0, 0.15); color: #e07000; font-weight: 600;">
          Fasilitas Sekolah
        </span>
        <h2 class="font-passion-one display-6 text-dark mb-1">SARANA & PRASARANA</h2>
        <p class="text-muted mb-0">Infrastruktur Penunjang Kegiatan Belajar Mengajar SDN Bandarharjo 02</p>
        <div class="mx-auto mt-2" style="width: 60px; height: 3px; background: #f48000; border-radius: 2px;"></div>
      </div>

      <!-- Quick Stats Highlight -->
      <div class="row g-3 mb-4">
        <div class="col-6 col-md-3">
          <div class="card border-0 shadow-sm rounded-4 p-3 text-center bg-white h-100 hover-elevate">
            <div class="text-warning fs-2 mb-1"><i class="bi bi-door-open-fill"></i></div>
            <h4 class="fw-bold mb-0 text-dark">8</h4>
            <span class="text-muted small">Ruang Kelas</span>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card border-0 shadow-sm rounded-4 p-3 text-center bg-white h-100 hover-elevate">
            <div class="text-primary fs-2 mb-1"><i class="bi bi-book-half"></i></div>
            <h4 class="fw-bold mb-0 text-dark">1</h4>
            <span class="text-muted small">Perpustakaan</span>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card border-0 shadow-sm rounded-4 p-3 text-center bg-white h-100 hover-elevate">
            <div class="text-info fs-2 mb-1"><i class="bi bi-display"></i></div>
            <h4 class="fw-bold mb-0 text-dark">1</h4>
            <span class="text-muted small">Laboratorium</span>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card border-0 shadow-sm rounded-4 p-3 text-center bg-white h-100 hover-elevate">
            <div class="text-success fs-2 mb-1"><i class="bi bi-heart-pulse-fill"></i></div>
            <h4 class="fw-bold mb-0 text-dark">1</h4>
            <span class="text-muted small">Ruang UKS</span>
          </div>
        </div>
      </div>

      <!-- Data Table Card -->
      <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white">
        <div class="card-header bg-white py-3 px-4 d-flex justify-content-between align-items-center border-bottom">
          <h5 class="mb-0 fw-bold text-dark d-flex align-items-center">
            <i class="bi bi-table text-warning me-2"></i> Rekapitulasi Data Sarpras
          </h5>
          <span class="badge bg-light text-muted border px-3 py-2 rounded-pill">Data Pokok Pendidikan (Dapodik)</span>
        </div>

        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0 text-center">
              <thead class="table-light text-secondary" style="font-size: 14px;">
                <tr>
                  <th class="py-3 text-start ps-4" style="width: 60px;">No</th>
                  <th class="py-3 text-start">Jenis Sarana & Prasarana</th>
                  <th class="py-3" style="width: 180px;">Jml 2020 Ganjil</th>
                  <th class="py-3" style="width: 180px;">Jml 2020 Genap</th>
                  <th class="py-3" style="width: 140px;">Status</th>
                </tr>
              </thead>
              <tbody style="font-size: 14px;">
                @php
                  $sarpras = [
                    ['no' => 1, 'nama' => 'Ruang Kelas', 'ganjil' => 8, 'genap' => 8, 'status' => 'Baik'],
                    ['no' => 2, 'nama' => 'Ruang Perpustakaan', 'ganjil' => 1, 'genap' => 1, 'status' => 'Baik'],
                    ['no' => 3, 'nama' => 'Ruang Laboratorium', 'ganjil' => 1, 'genap' => 1, 'status' => 'Baik'],
                    ['no' => 4, 'nama' => 'Ruang Pimpinan / Kepala Sekolah', 'ganjil' => 1, 'genap' => 1, 'status' => 'Baik'],
                    ['no' => 5, 'nama' => 'Ruang Guru', 'ganjil' => 1, 'genap' => 1, 'status' => 'Baik'],
                    ['no' => 6, 'nama' => 'Ruang Tata Usaha (TU)', 'ganjil' => 1, 'genap' => 1, 'status' => 'Baik'],
                    ['no' => 7, 'nama' => 'Ruang Ibadah', 'ganjil' => 1, 'genap' => 1, 'status' => 'Baik'],
                    ['no' => 8, 'nama' => 'Ruang UKS', 'ganjil' => 1, 'genap' => 1, 'status' => 'Baik'],
                    ['no' => 9, 'nama' => 'Ruang Toilet', 'ganjil' => 4, 'genap' => 4, 'status' => 'Baik'],
                    ['no' => 10, 'nama' => 'Ruang Gudang', 'ganjil' => 1, 'genap' => 1, 'status' => 'Baik'],
                    ['no' => 11, 'nama' => 'Ruang Sirkulasi', 'ganjil' => 1, 'genap' => 1, 'status' => 'Baik'],
                    ['no' => 12, 'nama' => 'Ruang Bermain / Lapangan Olahraga', 'ganjil' => 1, 'genap' => 1, 'status' => 'Baik'],
                    ['no' => 13, 'nama' => 'Ruang Konseling', 'ganjil' => 1, 'genap' => 1, 'status' => 'Baik'],
                    ['no' => 14, 'nama' => 'Bangunan Utama Sekolah', 'ganjil' => 1, 'genap' => 1, 'status' => 'Baik'],
                  ];
                @endphp

                @foreach ($sarpras as $item)
                  <tr>
                    <td class="text-start ps-4 fw-semibold text-muted">{{ $item['no'] }}</td>
                    <td class="text-start fw-medium text-dark">{{ $item['nama'] }}</td>
                    <td><span class="badge bg-light text-dark border px-3 py-1 rounded-pill">{{ $item['ganjil'] }}</span></td>
                    <td><span class="badge bg-light text-dark border px-3 py-1 rounded-pill">{{ $item['genap'] }}</span></td>
                    <td><span class="badge bg-success-subtle text-success px-3 py-1 rounded-pill"><i class="bi bi-check-circle me-1"></i>{{ $item['status'] }}</span></td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot class="table-light fw-bold" style="font-size: 14px;">
                <tr>
                  <td colspan="2" class="text-start ps-4">Total Ruang & Fasilitas</td>
                  <td>24</td>
                  <td>24</td>
                  <td>-</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>

        <div class="card-footer bg-light py-3 px-4 text-muted small d-flex justify-content-between align-items-center">
          <span><i class="bi bi-info-circle me-1"></i> Sumber data resmi: <strong>dapo.kemdikbud.go.id</strong></span>
          <span class="badge bg-secondary-subtle text-secondary">Terverifikasi</span>
        </div>
      </div>
    </div>
  </section>
@endsection
