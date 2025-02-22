<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendidikController extends Controller
{
    public function index(){
        $dataPendidik = [
            ['id' => 1, 'nama' => 'PURWANTO, S.Pd.SD', 'jabatan' => 'KEPALA SEKOLAH', 'foto' => '/images/profil_pendidik/kepala_sekolah.png'],
            ['id' => 2, 'nama' => 'SRI MIHARSIH, S. Pd.', 'jabatan' => 'GURU KELAS 6A', 'foto' => '/images/profil_pendidik/guru_kelas_6a.png'],
            ['id' => 3, 'nama' => 'ARGA WIDYATAMA, S.Pd', 'jabatan' => 'GURU KELAS 6B', 'foto' => '/images/profil_pendidik/guru_kelas_6b.png'],
            ['id' => 4, 'nama' => 'HAIDY HERMAWAN, S.Pd.', 'jabatan' => 'GURU KELAS 5A', 'foto' => '/images/profil_pendidik/guru_kelas_5a.png'],
            ['id' => 5, 'nama' => 'NOFIYANTI HAPSARI, S.Pd.', 'jabatan' => 'GURU KELAS 5B', 'foto' => '/images/profil_pendidik/guru_kelas_5b.png'],
            ['id' => 6, 'nama' => 'ERA CATUR SETYO RINI, S.Pd.', 'jabatan' => 'GURU KELAS 4A', 'foto' => '/images/profil_pendidik/guru_kelas_4a.png'],
            ['id' => 7, 'nama' => 'AAT AHMAD IZUDIN, S.Pd.', 'jabatan' => 'GURU KELAS 4B', 'foto' => '/images/profil_pendidik/guru_kelas_4b.png'],
            ['id' => 8, 'nama' => 'SENO, S.Pd.', 'jabatan' => 'GURU KELAS 3A', 'foto' => '/images/profil_pendidik/guru_kelas_3a.png'],
            ['id' => 9, 'nama' => 'SRI LESTARI, S.Pd.', 'jabatan' => 'GURU KELAS 3B', 'foto' => '/images/profil_pendidik/guru_kelas_3b.png'],
            ['id' => 10, 'nama' => 'BARTHOLOMEUS BALOK, S.Pd.SD.', 'jabatan' => 'GURU KELAS 2A', 'foto' => '/images/profil_pendidik/guru_kelas_2a.png'],
            ['id' => 11, 'nama' => 'EKO SUPRIYANI, S.Pd.', 'jabatan' => 'GURU KELAS 2B', 'foto' => '/images/profil_pendidik/guru_kelas_2b.png'],
            ['id' => 12, 'nama' => 'DJOHARIN ISMOJOWATI, S.Pd.SD', 'jabatan' => 'GURU KELAS 1A', 'foto' => '/images/profil_pendidik/guru_kelas_1a.png'],
            ['id' => 13, 'nama' => 'WIDIASTUTIK, S.Pd.', 'jabatan' => 'GURU KELAS 1B', 'foto' => '/images/profil_pendidik/guru_kelas_1b.png'],
            ['id' => 14, 'nama' => 'SIGIT NURHIDAYATULLOH, S.Pd.', 'jabatan' => 'GURU PAI', 'foto' => '/images/profil_pendidik/guru_pai.png'],
            ['id' => 15, 'nama' => 'AHMAD SULISTIYO, M.Pd.', 'jabatan' => 'GURU PAI', 'foto' => '/images/profil_pendidik/guru_pai2.png'],
            ['id' => 16, 'nama' => 'LEONARDUS BENY WIJAYA, S.Pd.', 'jabatan' => 'GURU PJOK', 'foto' => '/images/profil_pendidik/guru_pjok.png'],
            ['id' => 17, 'nama' => 'ALFIAN PUTRANDIYO, S.Pd.', 'jabatan' => 'GURU PJOK', 'foto' => '/images/profil_pendidik/guru_pjok2.png'],
            ['id' => 18, 'nama' => 'DIAN PUTRI PUSPYTA SARI, SE.', 'jabatan' => 'TATA USAHA', 'foto' => '/images/profil_pendidik/tu.png'],
            ['id' => 19, 'nama' => 'SUTARMO', 'jabatan' => 'PRAMU BAKTI', 'foto' => '/images/profil_pendidik/pramu_bakti.png'],
            ['id' => 20, 'nama' => 'ANDIKA ADE PUTRA', 'jabatan' => 'PRAMU BAKTI', 'foto' => '/images/profil_pendidik/pramu_bakti2.png'],
        ];
        return view('profil.pendidik', compact('dataPendidik'));
    }
}
