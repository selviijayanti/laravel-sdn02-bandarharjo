<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    // Halaman utama ekstrakurikuler
    public function index()
    {
        return view('ekstrakurikuler.blade.php');
    }

    // Halaman detail berdasarkan nama ekstrakurikuler
    public function show($nama)
    {
        return view('ekstrakurikuler', ['nama' => ucfirst(str_replace('-', ' ', $nama))]);
    }
}
