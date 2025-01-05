<?php

namespace App\Models;

use App\Models\KategoriBerita;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';

    protected $fillable = [
        'judul_berita',
        'isi_berita',
        'kategori_berita_id'
    ];

    public function kategoriBerita()
    {
        return $this->belongsTo(KategoriBerita::class, 'kategori_berita_id');
    }
}
