<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class DetailProdukController extends Controller
{
    public function TampilkanDetail ($kode_mobil) {
        $mobil= Mobil::where('kode_mobil', $kode_mobil )->first();
        return view('detail_produk', compact('mobil'));
    }
}
