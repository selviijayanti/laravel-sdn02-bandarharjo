<!DOCTYPE html>
<html>
<head>
    <title>Pengaduan Baru</title>
</head>
<body>
    <h3>Detail Pengaduan:</h3>
    <p><strong>Nama:</strong> {{ $pengaduan->nama}}</p>
    <p><strong>Email:</strong> {{ $pengaduan->email }}</p>
    <p><strong>Kontak:</strong> {{ $pengaduan->kontak }}</p>
    <p><strong>Deskripsi:</strong> {{ $pengaduan->deskripsi }}</p>
</body>
</html>
