<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $fillable = [
        'id_menu',
        'qty',
        'harga',
    ];


    // Relasi ke Menu
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu', 'id'); // 'id_menu' adalah foreign key di tabel keranjang, 'id' adalah primary key di tabel menu
    }
}
