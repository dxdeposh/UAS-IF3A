<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Menentukan tabel jika nama tabel tidak mengikuti konvensi plural
    protected $table = 'barang';

    // Menentukan kolom yang bisa diisi
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'qty',
        'harga',
    ];
}
