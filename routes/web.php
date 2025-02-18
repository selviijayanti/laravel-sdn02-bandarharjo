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
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/ebook', function () {
    return view('ebook');
});
Route::get('/ekskul', function () {
    return view('ekskul');
});
Route::get('/prestasi', function () {
    return view('prestasi');
});
Route::get('/galerifoto', function () {
    return view('galerifoto');
});
Route::get('/galerivideo', function () {
    return view('galerivideo');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/pengaduan', function () {
    return view('pengaduan');
});
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

Route::get('/akademik/kalender-pendidikan', function () {
    return view('akademik.kalender_pendidikan');
});
