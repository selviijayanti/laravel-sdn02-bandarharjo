<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Lomba;
use Illuminate\Http\Request;
use Storage;

class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lombas = Lomba::latest()->get();
        return view('admin.lomba.lomba', compact('lombas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.lomba.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'tanggal' => 'required|date',
            'status' => 'required',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('public/lomba');
        }

        Lomba::create($validated);
        return redirect()->route('lomba.index')->with('success', 'Lomba berhasil ditambahkan!');
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
    public function edit(Lomba $lomba)
    {
        return view('admin.lomba.edit', compact('lomba'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lomba $lomba)
    {
        //
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'tanggal' => 'required|date',
            'status' => 'required',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($lomba->gambar) {
                Storage::delete($lomba->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('public/lomba');
        }

        $lomba->update($validated);
        return redirect()->route('lomba.index')->with('success', 'Lomba berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lomba $lomba)
    {
        if ($lomba->gambar) {
            Storage::delete($lomba->gambar);
        }
        $lomba->delete();
        return redirect()->route('lomba.index')->with('success', 'Lomba berhasil dihapus!');
    }
}
