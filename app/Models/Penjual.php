<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Penjual extends Authenticatable
{
    protected $table = 'penjual';
    protected $primaryKey = 'id_penjual';
    protected $fillable = ['username', 'password'];
    protected $hidden = ['password'];
}

