<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Fungsi untuk menampilkan daftar buku
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    // Fungsi untuk menampilkan form tambah buku
    public function create()
    {
        return view('buku.create');
    }

    // Fungsi untuk menyimpan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required|string|max:255',
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    // Fungsi untuk menampilkan form edit buku
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    // Fungsi untuk memperbarui buku
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_buku' => 'required|string|max:255',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui!');
    }

    // Fungsi untuk menghapus buku
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus!');
    }
}
