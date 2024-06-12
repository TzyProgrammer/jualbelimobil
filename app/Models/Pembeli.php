<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Pembeli extends Authenticatable
{
    protected $table = 'pembeli';
    protected $primaryKey = 'id_pembeli';
    protected $fillable = ['username', 'password', 'nama_pembeli', 'nomor_hp', 'alamat', 'foto_profil'];
    protected $hidden = ['password'];
    public $timestamps = false;
}
