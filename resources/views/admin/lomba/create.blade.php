@extends('admin.layouts.main')

@section('title', 'Tambah Lomba')

@section('content')
    <div class="container-fluid">
        <h4 class="mb-4">Tambah Lomba</h4>

        @if ($errors->any())
            <div class="alert alert-danger rounded-3">
                <strong><i class="fas fa-exclamation-triangle me-1"></i> Perhatian:</strong> Terdapat kesalahan pengisian data:<br><br>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('lomba.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Lomba</label>
                <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="4">{{ old('deskripsi') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Lomba</label>
                <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal') }}" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-select" required>
                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="publish" {{ old('status') == 'publish' ? 'selected' : '' }}>Publish</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('lomba.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection