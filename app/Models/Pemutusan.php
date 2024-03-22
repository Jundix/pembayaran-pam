<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemutusan extends Model
{
    protected $fillable = [
        'id_pelanggan',
        'nama',
        'alamat'
    ];
}
