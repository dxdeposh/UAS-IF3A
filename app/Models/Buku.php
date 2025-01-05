<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model
    protected $table = 'buku';

    // Menentukan kolom-kolom yang dapat diisi
    protected $fillable = [
        'judul_buku',
    ];

    // Menentukan kolom timestamps otomatis yang digunakan oleh Laravel
    public $timestamps = true;
}
