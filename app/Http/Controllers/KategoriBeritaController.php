<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class KategoriBeritaController extends Controller
{
    // Menampilkan daftar kategori berita
    public function index()
    {
        $kategoriBerita = KategoriBerita::all();
        return view('kategori-berita.index', compact('kategoriBerita')); // Ubah view dari kategoriBerita.index menjadi kategori-berita.index
    }

    // Menampilkan form untuk membuat kategori berita baru
    public function create()
    {
        return view('kategori-berita.create'); // Ubah view dari kategoriBerita.create menjadi kategori-berita.create
    }

    // Menyimpan kategori berita baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        KategoriBerita::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('kategori-berita.index'); // Ubah route dari kategoriBerita.index menjadi kategori-berita.index
    }

    // Menampilkan form untuk mengedit kategori berita
    public function edit($id)
    {
        $kategoriBerita = KategoriBerita::findOrFail($id);
        return view('kategori-berita.edit', compact('kategoriBerita')); // Ubah view dari kategoriBerita.edit menjadi kategori-berita.edit
    }

    // Memperbarui kategori berita
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        $kategoriBerita = KategoriBerita::findOrFail($id);
        $kategoriBerita->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('kategori-berita.index'); // Ubah route dari kategoriBerita.index menjadi kategori-berita.index
    }

    // Menghapus kategori berita
    public function destroy($id)
    {
        $kategoriBerita = KategoriBerita::findOrFail($id);
        $kategoriBerita->delete();

        return redirect()->route('kategori-berita.index'); // Ubah route dari kategoriBerita.index menjadi kategori-berita.index
    }
}
