<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class KatalogController extends Controller
{
    public function lihat () {
        $data_mobil = Mobil::get();
        return view('katalog', compact('data_mobil'));
    }

}
