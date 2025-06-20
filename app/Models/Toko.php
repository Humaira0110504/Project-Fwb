<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nama_toko'];

    public function bajus()
    {
        return $this->hasMany(Baju::class);
    }
}
