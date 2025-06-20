<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    use HasFactory;

    protected $fillable = [
        'toko_id',
        'nama_baju',
        'ukuran',
        'stok',
        'harga_sewa',
        'deskripsi',
        'gambar',
    ];

    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}