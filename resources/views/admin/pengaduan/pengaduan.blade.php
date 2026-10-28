@extends('admin.layouts.main')

@section('title', 'Data Pengaduan - SDN BANDARHARJO 02 SEMARANG')

@section('content')
  <div class="container-fluid">
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
      <div>
        <h4 class="mb-1 fw-bold text-dark">Data Layanan Pengaduan</h4>
        <p class="text-muted small mb-0">Daftar aspirasi, pengaduan, dan masukan dari wali murid dan masyarakat.</p>
      </div>
      <div>
        <span class="badge bg-primary px-3 py-2 rounded-pill fs-6">
          <i class="fas fa-inbox me-1"></i> Total: {{ $total }} Pengaduan
        </span>
      </div>
    </div>

    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4" role="alert">
        <i class="fas fa-check-circle me-1"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
      <div class="card-header bg-white py-3 px-4 border-bottom">
        <form class="d-flex" method="GET">
          <div class="input-group">
            <span class="input-group-text bg-light border-end-0"><i class="fas fa-search text-muted"></i></span>
            <input
              type="text"
              name="q"
              class="form-control bg-light border-start-0"
              placeholder="Cari pengirim, email, atau isi pengaduan..."
              value="{{ request('q') }}"
            />
            <button class="btn btn-primary px-4" type="submit">Cari</button>
            @if (request('q'))
              <a href="{{ route('admin.pengaduan.index') }}" class="btn btn-outline-secondary">Reset</a>
            @endif
          </div>
        </form>
      </div>

      <div class="card-body p-0 table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead class="table-light text-secondary" style="font-size: 14px;">
            <tr>
              <th class="py-3 ps-4" style="width: 60px;">No</th>
              <th class="py-3" style="width: 180px;">Nama Pengirim</th>
              <th class="py-3" style="width: 200px;">Kontak / Email</th>
              <th class="py-3">Isi Pengaduan</th>
              <th class="py-3" style="width: 140px;">Waktu Kirim</th>
              <th class="py-3 pe-4 text-center" style="width: 120px;">Aksi</th>
            </tr>
          </thead>
          <tbody style="font-size: 14px;">
            @forelse ($pengaduans as $index => $item)
              <tr>
                <td class="ps-4 fw-semibold text-muted">{{ $pengaduans->firstItem() + $index }}</td>
                <td>
                  <span class="fw-bold text-dark d-block">{{ $item->nama }}</span>
                </td>
                <td>
                  <div class="small">
                    <div><i class="fas fa-envelope text-muted me-1"></i> <a href="mailto:{{ $item->email }}" class="text-decoration-none">{{ $item->email }}</a></div>
                    @if ($item->kontak)
                      <div><i class="fas fa-phone text-muted me-1"></i> <a href="tel:{{ $item->kontak }}" class="text-decoration-none text-muted">{{ $item->kontak }}</a></div>
                    @endif
                  </div>
                </td>
                <td>
                  <p class="mb-0 text-truncate text-secondary" style="max-width: 320px;" title="{{ $item->deskripsi }}">
                    {{ $item->deskripsi }}
                  </p>
                </td>
                <td class="text-muted small">
                  {{ $item->created_at ? $item->created_at->format('d M Y H:i') : '-' }}
                </td>
                <td class="pe-4 text-center">
                  <div class="d-inline-flex gap-1">
                    <!-- Tombol Detail Modal -->
                    <button
                      type="button"
                      class="btn btn-sm btn-info text-white rounded-3"
                      data-bs-toggle="modal"
                      data-bs-target="#detailModal{{ $item->id }}"
                      title="Lihat Detail"
                    >
                      <i class="fas fa-eye"></i>
                    </button>

                    <!-- Tombol Hapus -->
                    <form
                      action="{{ route('admin.pengaduan.destroy', $item->id) }}"
                      method="POST"
                      class="d-inline"
                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus data pengaduan ini?')"
                    >
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-sm btn-danger rounded-3" title="Hapus">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                  </div>

                  <!-- Modal Detail Pengaduan -->
                  <div
                    class="modal fade text-start"
                    id="detailModal{{ $item->id }}"
                    tabindex="-1"
                    aria-labelledby="detailModalLabel{{ $item->id }}"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content rounded-4 border-0 shadow">
                        <div class="modal-header bg-light border-bottom">
                          <h6 class="modal-title fw-bold" id="detailModalLabel{{ $item->id }}">
                            <i class="fas fa-comment-dots text-warning me-2"></i> Detail Pengaduan
                          </h6>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                          <div class="mb-3">
                            <label class="form-label text-muted small mb-0">Nama Pengirim:</label>
                            <p class="fw-bold mb-0 text-dark">{{ $item->nama }}</p>
                          </div>
                          <div class="row g-2 mb-3">
                            <div class="col-6">
                              <label class="form-label text-muted small mb-0">Email:</label>
                              <p class="fw-semibold mb-0">{{ $item->email }}</p>
                            </div>
                            <div class="col-6">
                              <label class="form-label text-muted small mb-0">No. Telepon / WA:</label>
                              <p class="fw-semibold mb-0">{{ $item->kontak ?? '-' }}</p>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label text-muted small mb-0">Waktu Pengiriman:</label>
                            <p class="mb-0 text-muted small">{{ $item->created_at ? $item->created_at->format('l, d F Y - H:i:s') : '-' }}</p>
                          </div>
                          <div class="p-3 bg-light rounded-3 border">
                            <label class="form-label text-muted small mb-1 fw-bold">Isi Pesan / Pengaduan:</label>
                            <p class="mb-0 text-dark" style="white-space: pre-wrap;">{{ $item->deskripsi }}</p>
                          </div>
                        </div>
                        <div class="modal-footer border-top bg-light">
                          <a href="mailto:{{ $item->email }}?subject=Balasan%20Pengaduan%20SDN%20Bandarharjo%2002" class="btn btn-primary btn-sm rounded-pill px-3">
                            <i class="fas fa-reply me-1"></i> Balas via Email
                          </a>
                          <button type="button" class="btn btn-secondary btn-sm rounded-pill px-3" data-bs-dismiss="modal">Tutup</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="6" class="text-center py-5 text-muted">
                  <i class="fas fa-inbox fs-1 d-block mb-2 text-secondary opacity-50"></i>
                  Belum ada data pengaduan masuk.
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      @if ($pengaduans->hasPages())
        <div class="card-footer bg-white py-3 px-4 d-flex justify-content-end">
          {{ $pengaduans->links() }}
        </div>
      @endif
    </div>
  </div>
@endsection
