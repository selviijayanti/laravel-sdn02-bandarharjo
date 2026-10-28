@extends('admin.layouts.main')

@section("title", "Tambah Galeri - SDN BANDARHARJO 02 SEMARANG")

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Tambah Galeri</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                            value="{{ old('judul') }}" placeholder="Masukkan judul galeri">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" id="kategori" class="form-select @error('kategori') is-invalid @enderror"
                            required>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="Kegiatan" {{ old('kategori') == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                            <option value="Lomba" {{ old('kategori') == 'Lomba' ? 'selected' : '' }}>Lomba</option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group mb-3">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-plus-circle"></i> Simpan
                    </button>
                    <a href="{{ route('galeri.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection