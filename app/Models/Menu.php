<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_menu',
        'harga',
        'foto',
    ];

    // Relasi ke Keranjang
    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'id_menu', 'id');
    }
}
