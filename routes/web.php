<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriBeritaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa/{kelas}/{nim}', function ($kelas, $nim) {
    if ($kelas === 'IF3A' && $nim === '231420051') {
        $nama = "Depo Sadrila Hadi";
        return "NIM : $nim<br>Nama : $nama";
    } else {
        return "Data tidak ditemukan.";
    }
});

Route::get('/hello/{nama}', function ($nama) {
    return "hello " . $nama;
});

Route::get('/biodata/{nim}', function ($nim) {
    if ($nim === '231420051') {
        $nama = "Depo Sadrila Hadi";
        return "NIM : $nim<br>Nama : $nama";
    } else {
        return "Data tidak ditemukan.";
    }
});

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::get('/berita/{id}/show', [BeritaController::class, 'show'])->name('berita.show');
Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

Route::resource('kategori-berita', KategoriBeritaController::class);

Route::resource('kendaraan', KendaraanController::class);

Route::resource('buku', BukuController::class);
