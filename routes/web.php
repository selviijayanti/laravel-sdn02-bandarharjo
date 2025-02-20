<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/akademik/kalender-pendidikan', function () {
    return view('akademik.kalender_pendidikan');
})->name('akademik.kalender_pendidikan');
Route::get('/akademik/ekstrakurikuler', function () {
    return view('akademik.ekstrakurikuler');
})->name('akademik.ekstrakurikuler');
Route::get('/akademik/prestasi-siswa', function () {
    return view('akademik.prestasi_siswa');
})->name('akademik.prestasi_siswa');
Route::get('/akademik/ebook-siswa', function () {
    return view('akademik.ebook_siswa');
})->name('akademik.ebook_siswa');

Route::get('/profil/sejarah-sekolah', function () {
    return view('profil.sejarah_sekolah');
})->name('profil.sejarah_sekolah');
Route::get('/profil/visi-misi', function () {
    return view('profil.visi_misi');
})->name('profil.visi_misi');
Route::get('/profil/pendidik', function () {
    return view('profil.pendidik');
})->name('profil.pendidik');
Route::get('/profil/siswa', function () {
    return view('profil.siswa');
})->name('profil.siswa');
Route::get('/profil/sarana-prasarana', function () {
    return view('profil.sarana_prasarana');
})->name('profil.sarana_prasarana');

Route::get('/galeri/galeri-foto', function () {
    return view('galeri.galeri_foto');
})->name('galeri.galeri_foto');
Route::get('/galeri/galeri-video', function () {
    return view('galeri.galeri_video');
})->name('galeri.galeri_video');

Route::get('/mpls', function () {
    return view('mpls');
});
Route::get('/simulasi_asesmen', function () {
    return view('simulasi_asesmen');
});
Route::get('/glaber_asesmen', function () {
    return view('glaber_asesmen');
});
Route::get('/pelaksanaan_asesmen', function () {
    return view('pelaksanaan_asesmen');
});
Route::get('/survei_lingkungan', function () {
    return view('survei_lingkungan');
});
Route::get('/survei_lingkungan', function () {
    return view('survei_lingkungan');
});
Route::get('/penilaian_pekerja', function () {
    return view('penilaian_pekerja');
});
Route::get('/kompetisi_sains', function () {
    return view('kompetisi_sains');
});
Route::get('/imunisasi', function () {
    return view('imunisasi');
});
Route::get('/upacara', function () {
    return view('upacara');
});
Route::get('/sarapan_bersama', function () {
    return view('sarapan_bersama');
});
Route::get('/menanam', function () {
    return view('menanam');
});

Route::get('/pengumuman/berita', function () {
    return view('pengumuman.berita');
})->name('pengumuman.berita');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/pengaduan', function () {
    return view('pengaduan');
})->name('pengaduan');
