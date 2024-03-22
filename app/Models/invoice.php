<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';
    protected $fillable = [
        'order_id',
        'id_pelanggan',
        'nama',
        'bulan',
        'nominal',
        'status_pembayaran',
    ];
}
