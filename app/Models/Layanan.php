<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    // Mengizinkan kolom-kolom ini diisi melalui proses create() atau update()
    protected $fillable = [
        'nama_layanan', 
        'deskripsi', 
        'gambar'
    ];
}