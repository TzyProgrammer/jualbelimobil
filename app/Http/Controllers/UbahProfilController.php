<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UbahProfilController extends Controller
{
    public function show()
    {
        //update
    $profil = ubah_profil::find();
    $profil -> username ='username';
    $profil -> nama = 'nama';
    $profil -> alamat ='alamat';
    $profil -> no_hp = 'no_hp';
    $profil -> save();
    }
}
