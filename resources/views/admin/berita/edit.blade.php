@extends('admin.layouts.main')

@section('title', 'Edit Berita - SDN BANDARHARJO 02 SEMARANG')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Edit Berita</h4>
            <a href="{{ route('berita.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Judul --}}
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror"
                            value="{{ old('judul', $berita->judul) }}" placeholder="Masukkan judul berita" required>
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Isi --}}
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi Berita</label>
                        <textarea name="isi" id="isi" rows="6" class="form-control @error('isi') is-invalid @enderror"
                            placeholder="Masukkan isi berita" required>{{ old('isi', $berita->isi) }}</textarea>
                        @error('isi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Gambar --}}
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar (Opsional)</label>
                        <input type="file" name="gambar" id="gambar"
                            class="form-control @error('gambar') is-invalid @enderror">
                        @if ($berita->gambar)
                            <small class="text-muted">Gambar saat ini: {{ $berita->gambar }}</small>
                        @endif
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Status --}}
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="draft" {{ $berita->status == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="publish" {{ $berita->status == 'publish' ? 'selected' : '' }}>Publish</option>
                        </select>
                    </div>


                    {{-- Tombol --}}
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection