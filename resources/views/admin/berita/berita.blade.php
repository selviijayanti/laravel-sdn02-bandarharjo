@extends('admin.layouts.main')

@section('title', 'Kelola Berita - SDN BANDARHARJO 02 SEMARANG')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Kelola Berita</h4>
            <a href="{{ route('berita.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Tambah Berita
            </a>
        </div>

        {{-- Statistik Mini --}}
        <div class="row mb-3">
            <div class="col-md-3">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $total }}</h3>
                        <p>Total Berita</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $draft }}</h3>
                        <p>Draft</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tabel Daftar Berita --}}
        <div class="card">
            <div class="card-header">
                <form class="d-flex" method="GET">
                    <input type="text" name="q" class="form-control me-2" placeholder="Cari berita..."
                        value="{{ request('q') }}">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </form>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th style="width: 130px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($beritas as $berita)
                            <tr>
                                <td>{{ $berita->judul }}</td>
                                <td>{{ \Carbon\Carbon::parse($berita->created_at)->format('d M Y') }}</td>
                                <td>
                                    <span class="badge bg-{{ $berita->status == 'Publish' ? 'success' : 'secondary' }}">
                                        {{ $berita->status }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin hapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Belum ada berita</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- Pagination --}}
                <div class="mt-3">
                    {{ $beritas->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection