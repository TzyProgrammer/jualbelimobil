<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\MerekMobil;
use App\Models\MobilFavorite;
use App\Models\Pembeli;

class DetailProdukController extends Controller
{
    public function TampilkanDetail ($kode_mobil) {
        $mobil= Mobil::where('kode_mobil', $kode_mobil )->first();
        $merek = MerekMobil::where('kode_merek', $mobil->kode_merek)->first();
        $harga = 'Rp' . number_format($mobil->harga_mobil, 2, ',', '.');

        return view('detail_produk', compact('mobil', 'merek', 'harga'));
    }

    public function favorit(Request $request) {
        $kode_mobil = $request->input('kode_mobil');
        $user = Pembeli::find($request->session()->get('loginIdPembeli'));
        $id_pembeli = $user->id_pembeli;
        
        $mobil_favorit = MobilFavorite::where('id_pembeli', $id_pembeli)->where('kode_mobil', $kode_mobil)->first();

        if ($mobil_favorit) {
            return redirect()->back();
        } else {
            $favorit = new MobilFavorite;
            $favorit->id_pembeli = $id_pembeli;
            $favorit->kode_mobil = $kode_mobil;
            $favorit->save();

            return redirect()->back();
        }
    }
}
