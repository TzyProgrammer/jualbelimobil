<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
use App\Models\MobilFavorite;
use App\Models\Mobil;
use App\Models\MerekMobil;

class FavoriteController extends Controller
{
    public function favorit(Request $request)
    {
        if ($request->session()->has('loginIdPembeli')) {
            $user = Pembeli::find($request->session()->get('loginIdPembeli'));
            $id_pembeli = $user->id_pembeli;

            $mobil_favorit = MobilFavorite::where('id_pembeli', $id_pembeli)->get();
            $jumlah_mobil_favorit = MobilFavorite::where('id_pembeli', $id_pembeli)->count();

            if ($jumlah_mobil_favorit > 0) {

                foreach ($mobil_favorit as $favorit) {
                    $mobil = Mobil::where('kode_mobil', $favorit->kode_mobil)->first();
                    $kode_mobil[] = $mobil->kode_mobil;
                    $gambar_mobil[] = $mobil->gambar_mobil;
                    $merek[] = MerekMobil::where('kode_merek', $mobil->kode_merek)->first()->merek;
                    $gambar_merek[] = MerekMobil::where('kode_merek', $mobil->kode_merek)->first()->gambar;
                    $nama[] = $mobil->nama_mobil;
                    $harga[] = 'Rp' . number_format($mobil->harga_mobil, 2, ',', '.');
                }

                return view('favorite', compact('kode_mobil', 'gambar_mobil', 'merek', 'gambar_merek', 'nama', 'harga'));
            } else {
                return view('favorite');
            }
        } else {
            return redirect('/login')->with('fail', 'You have to login first.');
        }
    }

    public function hapusFavorit(Request $request)
    {
        $user = Pembeli::find($request->session()->get('loginIdPembeli'));
        $id_pembeli = $user->id_pembeli;
        $kode_mobil = $request->input('kode_mobil');

        MobilFavorite::where('id_pembeli', $id_pembeli)->where('kode_mobil', $kode_mobil)->delete();

        return redirect()->back();
    }
}
