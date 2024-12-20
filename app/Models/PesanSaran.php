<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesanSaran extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'pesan',
    ];
}
