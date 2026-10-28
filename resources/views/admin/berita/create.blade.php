@extends('admin.layouts.main')

@section('title', 'Tambah Berita - SDN BANDARHARJO 02 SEMARANG')

@section('content')
    <div class="container-fluid">
        <h4 class="mb-4">Tambah Berita Baru</h4>

        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="judul">Judul Berita</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                    placeholder="Masukkan judul berita" value="{{ old('judul') }}" required>
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="isi">Isi Berita</label>
                <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="6"
                    placeholder="Tulis isi berita di sini..." required>{{ old('isi') }}</textarea>
                @error('isi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="draft" {{ old('status', $berita->status ?? '') == 'draft' ? 'selected' : '' }}>Draft
                    </option>
                    <option value="publish" {{ old('status', $berita->status ?? '') == 'publish' ? 'selected' : '' }}>Publish
                    </option>
                </select>
            </div>


            <div class="form-group mb-3">
                <label for="gambar">Thumbnail / Gambar Berita</label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Simpan
            </button>
            <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection