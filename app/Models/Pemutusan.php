<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemutusan extends Model
{
    protected $table = 'pemutusan';
    protected $fillable = [
        'id_pelanggan',
        'nama',
        'alamat'
    ];
}
