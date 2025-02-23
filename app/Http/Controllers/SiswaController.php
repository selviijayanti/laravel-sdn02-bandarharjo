<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $dataSiswa = [
            ['id' => 1, 'nama' => 'KELAS 1A', 'foto' => '/images/profil_siswa/1a.png'],
            ['id' => 2, 'nama' => 'KELAS 1B', 'foto' => '/images/profil_siswa/1b.png'],
            ['id' => 3, 'nama' => 'KELAS 2A', 'foto' => '/images/profil_siswa/2a.png'],
            ['id' => 4, 'nama' => 'KELAS 2B', 'foto' => '/images/profil_siswa/2b.png'],
            ['id' => 5, 'nama' => 'KELAS 3A', 'foto' => '/images/profil_siswa/3a.png'],
            ['id' => 6, 'nama' => 'KELAS 3B', 'foto' => '/images/profil_siswa/3b.png'],
            ['id' => 7, 'nama' => 'KELAS 4A', 'foto' => '/images/profil_siswa/4a.png'],
            ['id' => 8, 'nama' => 'KELAS 4B', 'foto' => '/images/profil_siswa/4b.png'],
            ['id' => 9, 'nama' => 'KELAS 5A', 'foto' => '/images/profil_siswa/5a.png'],
            ['id' => 10, 'nama' => 'KELAS 5B', 'foto' => '/images/profil_siswa/5b.png'],
            ['id' => 11, 'nama' => 'KELAS 6A', 'foto' => '/images/profil_siswa/6a.png'],
            ['id' => 12, 'nama' => 'KELAS 6B', 'foto' => '/images/profil_siswa/6b.png']
        ];
        return view('profil.siswa', compact('dataSiswa'));
    }
}
