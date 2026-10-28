@extends('admin.layouts.main')

@section('title', 'Galeri - SDN BANDARHARJO 02 SEMARANG')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Kelola Galeri</h4>
            <a href="{{ route('galeri.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Tambah Foto
            </a>
        </div>

        {{-- Grid Galeri --}}
        <div class="row">
            @forelse ($galeris as $item)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/galeri/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}">
                        <div class="card-body">
                            <p class="card-text mb-1"><strong>Judul:</strong> {{ $item->judul }}</p>
                            <p class="card-text text-muted"><small>Kategori: {{ $item->kategori }}</small></p>
                            <div class="d-flex justify-content-end gap-1">
                                <a href="{{ route('galeri.edit', $item->id) }}" class="btn btn-sm btn-warning"><i
                                        class="fas fa-edit"></i></a>
                                <form action="{{ route('galeri.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus foto ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">Belum ada galeri ditambahkan.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection