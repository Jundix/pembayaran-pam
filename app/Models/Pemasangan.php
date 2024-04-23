<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasangan extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'nama_pelanggan',
        // 'nomor_meter',
        // 'alamat',
        // 'id_tarif',
        // 'id_kota'
        'nama', 
        'alamat', 
        'gambar',
        'id_kategori'
    ];
}
