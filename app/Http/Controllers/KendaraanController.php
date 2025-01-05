<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{

    // Contoh menyimpan nama pengguna di session
    public function login(Request $request)
    {
        // Setelah login atau proses lainnya
        session(['user_name' => $request->input('name')]);
        return redirect()->route('dashboard');
    }


    // Menampilkan daftar kendaraan
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
    }

    // Menampilkan form untuk membuat kendaraan baru
    public function create()
    {
        return view('kendaraan.create');
    }

    // Menyimpan kendaraan baru
    public function store(Request $request)
    {
        $request->validate([
            'nomor_kendaraan' => 'required',
            'jenis_kendaraan' => 'required',
        ]);

        Kendaraan::create($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit kendaraan
    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit', compact('kendaraan'));
    }

    // Memperbarui data kendaraan
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $request->validate([
            'nomor_kendaraan' => 'required',
            'jenis_kendaraan' => 'required',
        ]);

        $kendaraan->update($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil diperbarui!');
    }

    // Menghapus kendaraan
    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil dihapus!');
    }
}
