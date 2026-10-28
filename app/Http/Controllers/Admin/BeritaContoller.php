<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Berita;
use Illuminate\Http\Request;
use Storage;

class BeritaContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $query = Berita::query();

        if ($request->q) {
            $query->where('judul', 'like', '%' . $request->q . '%');
        }

        $beritas = $query->latest()->paginate(10);
        $total = Berita::count();
        $draft = Berita::where('status', 'Draft')->count();

        return view('admin.berita.berita', compact('beritas', 'total', 'draft'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('public/berita');
            $gambar = basename($gambar);
        }

        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $gambar,
            'status' => $request->status,
        ]);


        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan!');
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
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'status' => 'required|in:publish,draft',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($berita->gambar) {
                Storage::delete('public/berita/' . $berita->gambar);
            }

            $gambar = $request->file('gambar')->store('public/berita');
            $berita->gambar = basename($gambar);
        }

        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->status = $request->status;
        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diupdate!');
    }






    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar) {
            Storage::delete('public/berita/' . $berita->gambar);
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
    }



}
