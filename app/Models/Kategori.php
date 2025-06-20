<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'nama_kategori',
    ];  

    // Relasi ke baju-baju adat
    public function bajus()
    {
        return $this->hasMany(Baju::class);
    }
}
