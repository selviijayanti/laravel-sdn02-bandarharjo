@extends('admin.layouts.main')

@section('title', 'Kelola Lomba')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Kelola Lomba</h4>
            <a href="{{ route('lomba.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Tambah Lomba
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
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
                        @forelse ($lombas as $lomba)
                            <tr>
                                <td>{{ $lomba->judul }}</td>
                                <td>{{ \Carbon\Carbon::parse($lomba->tanggal)->format('d M Y') }}</td>
                                <td>
                                    <span class="badge bg-{{ $lomba->status == 'publish' ? 'success' : 'secondary' }}">
                                        {{ ucfirst($lomba->status) }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('lomba.edit', $lomba->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('lomba.destroy', $lomba->id) }}" method="POST" class="d-inline"
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
                                <td colspan="4" class="text-center">Belum Ada Lomba</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection