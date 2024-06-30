<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MerekMobil;
use App\Models\Mobil;
use App\Models\Pembeli;
use App\Models\Pesanan;

class CheckoutController extends Controller
{
    public function dataProduk($kode_mobil)
    {
        $data_mobil = Mobil::where('kode_mobil', $kode_mobil)->first();

        $gambar = $data_mobil->gambar_mobil;
        $merek = MerekMobil::where('kode_merek', $data_mobil->kode_merek)->first()->merek;
        $nama_mobil = $data_mobil->nama_mobil;
        $deskripsi = $data_mobil->deskripsi_mobil;
        $harga = 'Rp' . number_format($data_mobil->harga_mobil, 2, ',', '.');

        return view('checkout', compact('gambar', 'merek', 'nama_mobil', 'deskripsi', 'harga', 'kode_mobil'));
    }

    public function checkout(Request $request)
    {
        $user = Pembeli::find($request->session()->get('loginIdPembeli'));
        $id_pembeli = $user->id_pembeli;
        $tanggal_pesan = date("Y-m-d");
        $kode_mobil = $request->input('kode_mobil');
        $metode_pengiriman = $request->input('pengambilan');

        if ($metode_pengiriman == '') {
            return redirect()->back()->with('error', 'PILIH METODE PENGIRIMAN!');
        } else {
            $pesanan = new Pesanan;
            $pesanan->id_pembeli = $id_pembeli;
            $pesanan->tanggal_pesan = $tanggal_pesan;
            $pesanan->kode_mobil = $kode_mobil;
            $pesanan->metode_pengiriman = $metode_pengiriman;
            $pesanan->status_pesanan = 'Menunggu';
            $pesanan->save();

            return redirect('/pesanan');
        }
    }
}
