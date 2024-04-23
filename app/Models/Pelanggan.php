<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'pelanggans';
    protected $fillable = [
        'nama_pelanggan',
        'nomor_meter',
        'alamat',
        'id_kategori',
        'status',
    ];

}
