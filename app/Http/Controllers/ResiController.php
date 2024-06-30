<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
use App\Models\Pesanan;
use App\Models\Mobil;
use App\Models\MerekMobil;

class ResiController extends Controller
{
    public function pesanan(Request $request)
    {
        $user = Pembeli::find($request->session()->get('loginIdPembeli'));
        $id_pembeli = $user->id_pembeli;

        $data_pesanan = Pesanan::where('id_pembeli', $id_pembeli)->get();
        $jumlah_data_pesanan = Pesanan::where('id_pembeli', $id_pembeli)->count();

        if ($jumlah_data_pesanan > 0) {
            foreach ($data_pesanan as $pesanan) {
                $kode_pesanan[] = $pesanan->kode_pesanan;
                $status_pesanan[] = $pesanan->status_pesanan;
                $tanggal_pesan[] = $pesanan->tanggal_pesan;
                $metode_pengiriman[] = $pesanan->metode_pengiriman;
                $kode_mobil = $pesanan->kode_mobil;
                $data_mobil = Mobil::where('kode_mobil', $kode_mobil)->first();
                $gambar[] = $data_mobil->gambar_mobil;
                $merek[] = MerekMobil::where('kode_merek', $data_mobil->kode_merek)->first()->merek;
                $nama_mobil[] = $data_mobil->nama_mobil;
                $harga[] = 'Rp' . number_format($data_mobil->harga_mobil, 2, ',', '.');
            }
    
            return view('pesanan', compact('kode_pesanan', 'status_pesanan', 'tanggal_pesan', 'metode_pengiriman', 'gambar', 'merek', 'nama_mobil', 'harga'));
        } else {
            return view('pesanan');
        }
    }

    public function detailPesanan($kode_pesanan, Request $request)
    {
        $data_pesanan = Pesanan::where('kode_pesanan', $kode_pesanan)->first();
        $status_pesanan = $data_pesanan->status_pesanan; 
        $tanggal_pesan = $data_pesanan->tanggal_pesan;
        $metode_pengiriman = $data_pesanan->metode_pengiriman;
        $kode_mobil = $data_pesanan->kode_mobil;

        $data_mobil = Mobil::where('kode_mobil', $kode_mobil)->first();
        $merek = MerekMobil::where('kode_merek', $data_mobil->kode_merek)->first()->merek;
        $nama_mobil = $data_mobil->nama_mobil;
        $harga = 'Rp' . number_format($data_mobil->harga_mobil, 2, ',', '.');
        $gambar = $data_mobil->gambar_mobil;

        if ($metode_pengiriman == 'Pick Up') {
            $alamat = 'Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, blok M no 98, Kepulauan Riau, 29461';
        } else {
            $user = Pembeli::find($request->session()->get('loginIdPembeli'));
            $alamat = $user->alamat;
        }

        return view('resi', compact('status_pesanan', 'tanggal_pesan', 'metode_pengiriman', 'merek', 'nama_mobil', 'harga', 'gambar', 'alamat'));
    }
}
