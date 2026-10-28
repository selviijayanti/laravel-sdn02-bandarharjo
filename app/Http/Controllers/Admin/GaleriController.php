<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Galeri;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeris = Galeri::latest()->get();

        return view('admin.galeri.galeri', compact('galeris'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|image|max:2048'
        ]);

        $file = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/galeri', $filename);

        Galeri::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'gambar' => $filename,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'gambar' => 'image|max:2048'
        ]);

        $galeri = Galeri::findOrFail($id);

        if ($request->hasFile('gambar')) {
            // hapus gambar lama
            Storage::delete('public/galeri/' . $galeri->gambar);

            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/galeri', $filename);
            $galeri->gambar = $filename;
        }

        $galeri->judul = $request->judul;
        $galeri->kategori = $request->kategori;
        $galeri->save();

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galeri = Galeri::findOrFail($id);
        Storage::delete('public/galeri/' . $galeri->gambar);
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dihapus!');
    }
}
