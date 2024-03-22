<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'username',
        'email',
        'id_pelanggan',
        'password',
        'alamat',
        'no_hp',
        'is_pelanggan',
        'id_level',
        'google_id',
        'gambar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class, 'id_level');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'id_customer');
    }

    public function isAdmin()
    {
        return ($this->id_level === 1 ? true : false);
    }

    public function isBank()
    {
        return ($this->id_level === 3 ? true : false);
    }

    public function isCustomer()
    {
        return ($this->id_level === 2 ? true : false);
    }
}
