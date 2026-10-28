@extends('admin.layouts.main')

@section('title', 'Edit Galeri - SDN BANDARHARJO 02 SEMARANG')

@section('content')
    <div class="container-fluid">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-white">
                    <h5 class="mb-0">Edit Galeri</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Foto</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                value="{{ old('judul', $galeri->judul) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select name="kategori" id="kategori" class="form-select" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="Kegiatan" {{ $galeri->kategori == 'Kegiatan' ? 'selected' : '' }}>Kegiatan
                                </option>
                                <option value="Lomba" {{ $galeri->kategori == 'Lomba' ? 'selected' : '' }}>Lomba</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label">Foto (Opsional, jika mau ganti)</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                            @if ($galeri->gambar)
                                <div class="mt-2">
                                    <small>Foto saat ini:</small><br>
                                    <img src="{{ asset('storage/galeri/' . $galeri->gambar) }}" alt="Galeri Lama"
                                        class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <div class="text-end">
                            <a href="{{ route('galeri.index') }}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection