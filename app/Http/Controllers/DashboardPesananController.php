<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Pembeli;
use App\Models\Mobil;
use App\Models\MerekMobil;

class DashboardPesananController extends Controller
{
    public function listPesanan()
    {
        $data_pesanan = Pesanan::get();
        $jumlah_data_pesanan = Pesanan::count();

        if ($jumlah_data_pesanan > 0) {
            foreach ($data_pesanan as $pesanan) {
                $nomor_pesanan[] = $pesanan->kode_pesanan;
                $tanggal_pesan[] = $pesanan->tanggal_pesan;
                $data_pembeli = Pembeli::where('id_pembeli', $pesanan->id_pembeli)->first();
                $username[] = $data_pembeli->username;
                $kode_mobil = $pesanan->kode_mobil;
                $data_mobil = Mobil::where('kode_mobil', $kode_mobil)->first();
                $merek[] = MerekMobil::where('kode_merek', $data_mobil->kode_merek)->first()->merek;
                $nama_mobil[] = $data_mobil->nama_mobil;
                $harga[] = 'Rp' . number_format($data_mobil->harga_mobil, 2, ',', '.');
                $metode_pengiriman[] = $pesanan->metode_pengiriman;
                $status_pesanan[] = $pesanan->status_pesanan;
    
                if ($pesanan->metode_pengiriman == 'Pick Up') {
                    $alamat[] = 'Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, blok M no 98, Kepulauan Riau, 29461';
                } else {
                    $alamat[] = $data_pembeli->alamat;
                }
            }
    
            return view('dashboard_pesanan', compact('nomor_pesanan', 'tanggal_pesan', 'username', 'merek', 'nama_mobil', 'harga', 'metode_pengiriman', 'status_pesanan', 'alamat'));
        } else {
            return view('dashboard_pesanan');
        }
    }

    public function updateStatusPesanan(Request $request, $nomor_orderan)
    {
        Pesanan::where('kode_pesanan', $nomor_orderan)->update([
            'status_pesanan' => $request->input('status_pesanan'),
        ]);
        
        return redirect()->back();
    }
}
