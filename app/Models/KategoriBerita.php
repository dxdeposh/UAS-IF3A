<?php

namespace App\Models;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;

    // Nama tabel pada database, karena Laravel menggunakan penamaan tabel dalam bentuk plural
    // (misalnya, 'kategori_berita' untuk model 'KategoriBerita'),
    // jika Anda ingin menggunakan nama tabel yang berbeda, tentukan di sini.
    protected $table = 'KategoriBerita';

    // Kolom-kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_kategori',
    ];

    // Kolom yang tidak boleh diisi (guarded) jika ada
    // protected $guarded = ['id'];

    public function beritas()
    {
        return $this->hasMany(Berita::class);
    }
}
