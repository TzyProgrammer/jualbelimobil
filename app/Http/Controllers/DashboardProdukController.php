<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MerekMobil;
use App\Models\Mobil;

class DashboardProdukController extends Controller
{
    public function pilihanMerek()
    {
        $data_merek = MerekMobil::get();

        return view('/dashboard_tambah_produk', compact('data_merek'));
    }

    public function tambahProduk(Request $request)
    {
        $merek = $request->input('merek');

        if ($merek == 'Pilih Merek') {
            return redirect('/dashboardtambahproduk')->with('error', 'PILIH MEREK!');
        } else {
            $data_merek = MerekMobil::where('merek', $merek)->first();
            $kode_merek = $data_merek->kode_merek;
        }

        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
            $tempat = public_path('/images/produk');
            $gambar->move($tempat, $nama_gambar);

            $mobil = new Mobil;
            $mobil->nama_mobil = $request->input('nama');
            $mobil->kode_merek = $kode_merek;
            $mobil->harga_mobil = $request->input('harga');
            $mobil->gambar_mobil = $nama_gambar;
            $mobil->deskripsi_mobil = $request->input('deskripsi');
            $mobil->save();

            return redirect('/dashboardproduk');
        }
    }

    public function tambahMerek(Request $request)
    {
        $request->validate([
            // 'merek' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
            $tempat = public_path('/images/merek');
            $gambar->move($tempat, $nama_gambar);

            $merekmobil = new MerekMobil;
            $merekmobil->merek = $request->input('merek');
            $merekmobil->gambar = $nama_gambar;
            $merekmobil->save();

            return redirect('/dashboardproduk');
        }
    }

    public function lihatMerek()
    {
        $data_merek = MerekMobil::get();

        return view('/dashboard_produk', compact('data_merek'));
    }

    public function ambilDataMerek($kode_merek)
    {
        $data = MerekMobil::where('kode_merek', $kode_merek)->first();
        $merek = $data->merek;

        return view('/dashboard_ubah_merek', compact('kode_merek', 'merek'));
    }

    public function ubahMerek(Request $request)
    {
        $kode_merek = $request->input('kode_merek');
        $data = MerekMobil::where('kode_merek', $kode_merek)->first();

        $nama_gambar = $data->gambar;

        if ($request->hasFile('gambar')) {

            if ($data->gambar) {
                $gambar_lama = public_path('/images/merek/' . $data->gambar);

                if (file_exists($gambar_lama)) {
                    unlink($gambar_lama);
                }
            }

            $gambar = $request->file('gambar');
            $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
            $tempat = public_path('/images/merek');
            $gambar->move($tempat, $nama_gambar);
        }

        MerekMobil::where('kode_merek', $kode_merek)->update([
            'merek' => $request->input('merek'),
            'gambar' => $nama_gambar,
        ]);

        return redirect('/dashboardproduk');
    }

    public function hapusMerek($kode_merek)
    {
        $data = MerekMobil::where('kode_merek', $kode_merek)->first();

        if ($data->gambar) {
            $gambar = public_path('/images/merek/' . $data->gambar);

            if (file_exists($gambar)) {
                unlink($gambar);
            }
        }

        MerekMobil::where('kode_merek', $kode_merek)->delete();

        return redirect('/dashboardproduk');
    }
}
