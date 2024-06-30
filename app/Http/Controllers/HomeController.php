<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\MerekMobil;

class HomeController extends Controller
{
    public function home()
    {
        $mobil = Mobil::orderBy('kode_mobil', 'desc')->take(4)->get();
        $jumlah_mobil = Mobil::count();

        if ($jumlah_mobil > 0) {

            foreach ($mobil as $data) {
                $kode[] = $data->kode_mobil;
                $gambar[] = $data->gambar_mobil;
                $merek[] = MerekMobil::where('kode_merek', $data->kode_merek)->first()->merek;
                $nama[] = $data->nama_mobil;
                $harga[] = 'Rp' . number_format($data->harga_mobil, 2, ',', '.');
            }

            return view('home', compact('kode', 'gambar', 'merek', 'nama', 'harga'));
        } else {
            return view('home');
        }
    }
       
}
