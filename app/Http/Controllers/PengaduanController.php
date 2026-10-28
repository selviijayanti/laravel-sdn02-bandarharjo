<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Mail;
use App\Mail\PengaduanMail;

class PengaduanController extends Controller
{
    // Menampilkan form pengaduan
    public function showForm()
    {
        return view('pengaduan');
    }

    // Menyimpan pengaduan dan mengirim email
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'kontak' => 'nullable|string|max:20',
            'deskripsi' => 'nullable|string',
        ]);

        // Simpan ke database
        $pengaduan = Pengaduan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'kontak' => $request->kontak,
            'deskripsi' => $request->deskripsi,
        ]);

        // Kirim email ke admin jika mail terkonfigurasi
        try {
            if (env('MAIL_USERNAME')) {
                Mail::to(env('MAIL_USERNAME'))->send(new PengaduanMail($pengaduan));
            }
        } catch (\Exception $e) {
            // Silently continue if mail server is not configured in local environment
        }

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pengaduan berhasil dikirim!');
    }

    // Menampilkan daftar pengaduan di panel admin
    public function adminIndex(Request $request)
    {
        $query = Pengaduan::query();

        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function ($w) use ($q) {
                $w->where('nama', 'like', "%{$q}%")
                  ->orWhere('email', 'like', "%{$q}%")
                  ->orWhere('deskripsi', 'like', "%{$q}%");
            });
        }

        $pengaduans = $query->latest()->paginate(10);
        $total = Pengaduan::count();

        return view('admin.pengaduan.pengaduan', compact('pengaduans', 'total'));
    }

    // Menghapus data pengaduan
    public function destroy($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->delete();

        return redirect()->route('admin.pengaduan.index')->with('success', 'Data pengaduan berhasil dihapus!');
    }
}
