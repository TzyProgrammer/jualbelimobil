<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MerekMobil;
use App\Models\Mobil;
use App\Models\MobilFavorite;
use App\Models\Pesanan;

class DashboardProdukController extends Controller
{
    public function lihat(Request $request)
    {
        $tab_aktif = $request->input('tab', 'produk');
        $data_merek = MerekMobil::get();
        $data_mobil = Mobil::get();
        $jumlah_data_mobil = Mobil::count();

        if ($jumlah_data_mobil > 0) {

            foreach ($data_mobil as $mobil) {
                $kode_mobil[] = $mobil->kode_mobil;
                $merek[] = MerekMobil::where('kode_merek', $mobil->kode_merek)->first()->merek;
                $nama_mobil[] = $mobil->nama_mobil;
                $harga_mobil[] = 'Rp' . number_format($mobil->harga_mobil, 2, ',', '.');
            }

            return view('dashboard_produk', compact('data_merek', 'kode_mobil', 'merek', 'nama_mobil', 'harga_mobil', 'tab_aktif'));
        } else {
            return view('dashboard_produk', compact('data_merek', 'tab_aktif'));
        }
    }

    public function pilihanMerek()
    {
        $jumlah_data_merek = MerekMobil::count();

        if ($jumlah_data_merek > 0) {
            $data_merek = MerekMobil::get();

            return view('dashboard_tambah_produk', compact('data_merek'));
        } else {
            return redirect('/dashboard/produk')->with('error', 'TAMBAH MEREK TERLEBIH DAHULU!');
        }
    }

    public function tambahProduk(Request $request)
    {
        $merek = $request->input('merek');

        if ($merek == 'Pilih Merek') {
            return redirect()->back()->with('error', 'PILIH MEREK!');
        } else {
            $data_merek = MerekMobil::where('merek', $merek)->first();
            $kode_merek = $data_merek->kode_merek;
        }

        $nama_mobil = $request->input('nama');
        $data_mobil = Mobil::where('nama_mobil', $nama_mobil)->first();

        if ($data_mobil) {

            if (($data_mobil->kode_merek == $kode_merek) && ($data_mobil->nama_mobil == $nama_mobil)) {
                return redirect()->back()->with('error', 'NAMA MOBIL "'.$nama_mobil.'" DENGAN MEREK "'.$merek.'" SUDAH ADA!');
            } else {
                $request->validate([
                    'nama' => 'required|max:50',
                    'harga' => 'required|digits_between:1,20',
                    'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                    'deskripsi' => 'required|max:1000',
                ]);
        
                if ($request->hasFile('gambar')) {
                    $gambar = $request->file('gambar');
                    $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
                    $tempat = public_path('/images/produk');
                    $gambar->move($tempat, $nama_gambar);
        
                    $mobil = new Mobil;
                    $mobil->nama_mobil = $nama_mobil;
                    $mobil->kode_merek = $kode_merek;
                    $mobil->harga_mobil = $request->input('harga');
                    $mobil->gambar_mobil = $nama_gambar;
                    $mobil->deskripsi_mobil = $request->input('deskripsi');
                    $mobil->save();
        
                    return redirect('/dashboard/produk');
                }
            }

        } else {
            $request->validate([
                'nama' => 'required|max:50',
                'harga' => 'required|digits_between:1,20',
                'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'deskripsi' => 'required|max:1000',
            ]);
    
            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
                $tempat = public_path('/images/produk');
                $gambar->move($tempat, $nama_gambar);
    
                $mobil = new Mobil;
                $mobil->nama_mobil = $nama_mobil;
                $mobil->kode_merek = $kode_merek;
                $mobil->harga_mobil = $request->input('harga');
                $mobil->gambar_mobil = $nama_gambar;
                $mobil->deskripsi_mobil = $request->input('deskripsi');
                $mobil->save();
    
                return redirect('/dashboard/produk');
            }
        }
    }

    public function lihatProduk($kode_mobil)
    {
        $data = Mobil::where('kode_mobil', $kode_mobil)->first();
        $nama_mobil = $data->nama_mobil;
        $kode_merek = MerekMobil::where('kode_merek', $data->kode_merek)->first();
        $merek = $kode_merek->merek;
        $harga_mobil = 'Rp' . number_format($data->harga_mobil, 2, ',', '.');
        $deskripsi_mobil = $data->deskripsi_mobil;
        $gambar_mobil = $data->gambar_mobil;

        return view('dashboard_lihat_produk', compact('nama_mobil', 'merek', 'harga_mobil', 'deskripsi_mobil', 'gambar_mobil'));
    }

    public function ambilDataProduk($kode_mobil)
    {
        $data = Mobil::where('kode_mobil', $kode_mobil)->first();
        $nama_mobil = $data->nama_mobil;
        $kode_merek = $data->kode_merek;

        $data_merek = MerekMobil::get();

        $harga_mobil = $data->harga_mobil;
        $deskripsi_mobil = $data->deskripsi_mobil;

        $data_nama_untuk_ubahProduk = $nama_mobil;
        $data_merek_untuk_ubahProduk = $kode_merek;

        session(['data_nama_untuk_ubahProduk' => $data_nama_untuk_ubahProduk]);
        session(['data_merek_untuk_ubahProduk' => $data_merek_untuk_ubahProduk]);

        return view('dashboard_ubah_produk', compact('kode_mobil', 'nama_mobil', 'kode_merek', 'data_merek', 'harga_mobil', 'deskripsi_mobil'));
    }

    public function ubahProduk(Request $request)
    {
        $data_nama_untuk_ubahProduk = session('data_nama_untuk_ubahProduk');
        $data_merek_untuk_ubahProduk = session('data_merek_untuk_ubahProduk');

        $merek = $request->input('merek');

        if ($merek == 'Pilih Merek') {
            return redirect()->back()->with('error', 'PILIH MEREK!');
        } else {
            $data_merek = MerekMobil::where('merek', $merek)->first();
            $kode_merek = $data_merek->kode_merek;
        }

        $nama_mobil = $request->input('nama');
        $data_mobil = Mobil::where('kode_merek', $kode_merek)->where('nama_mobil', $nama_mobil)->first();

        if ($data_mobil) {

            if (($kode_merek !== $data_merek_untuk_ubahProduk) || ($nama_mobil !== $data_nama_untuk_ubahProduk)) {
                return redirect()->back()->with('error', 'NAMA MOBIL "'.$nama_mobil.'" DENGAN MEREK "'.$merek.'" SUDAH ADA!');
            } else {
                $request->validate([
                    'nama' => 'required|max:50',
                    'harga' => 'required|digits_between:1,20',
                    'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
                    'deskripsi' => 'required|max:1000',
                ]);

                $kode_mobil = $request->input('kode_mobil');
                $data = Mobil::where('kode_mobil', $kode_mobil)->first();

                $nama_gambar = $data->gambar_mobil;

                if ($request->hasFile('gambar')) {

                    if ($data->gambar_mobil) {
                        $gambar_lama = public_path('/images/produk/' . $data->gambar_mobil);

                        if (file_exists($gambar_lama)) {
                            unlink($gambar_lama);
                        }
                    }

                    $gambar = $request->file('gambar');
                    $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
                    $tempat = public_path('/images/produk');
                    $gambar->move($tempat, $nama_gambar);
                }

                Mobil::where('kode_mobil', $kode_mobil)->update([
                    'kode_merek' => $kode_merek,
                    'nama_mobil' => $request->input('nama'),
                    'harga_mobil' => $request->input('harga'),
                    'gambar_mobil' => $nama_gambar,
                    'deskripsi_mobil' => $request->input('deskripsi'),
                ]);

                return redirect('/dashboard/produk');
            }
        } else {
            $request->validate([
                'nama' => 'required|max:50',
                'harga' => 'required|digits_between:1,20',
                'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
                'deskripsi' => 'required|max:1000',
            ]);

            $kode_mobil = $request->input('kode_mobil');
            $data = Mobil::where('kode_mobil', $kode_mobil)->first();

            $nama_gambar = $data->gambar_mobil;

            if ($request->hasFile('gambar')) {

                if ($data->gambar_mobil) {
                    $gambar_lama = public_path('/images/produk/' . $data->gambar_mobil);

                    if (file_exists($gambar_lama)) {
                        unlink($gambar_lama);
                    }
                }

                $gambar = $request->file('gambar');
                $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
                $tempat = public_path('/images/produk');
                $gambar->move($tempat, $nama_gambar);
            }

            Mobil::where('kode_mobil', $kode_mobil)->update([
                'kode_merek' => $kode_merek,
                'nama_mobil' => $request->input('nama'),
                'harga_mobil' => $request->input('harga'),
                'gambar_mobil' => $nama_gambar,
                'deskripsi_mobil' => $request->input('deskripsi'),
            ]);

            return redirect('/dashboard/produk');
        }
    }

    public function hapusProduk(Request $request)
    {
        $kode_mobil = $request->input('kode_mobil');
        $nama_mobil = $request->input('nama_mobil');
        $data = Mobil::where('kode_mobil', $kode_mobil)->where('nama_mobil', $nama_mobil)->first();

        $mobil_favorit = MobilFavorite::where('kode_mobil', $kode_mobil)->count();
        $pesanan = Pesanan::where('kode_mobil', $kode_mobil)->count();

        if (($mobil_favorit > 0) || ($pesanan > 0)) {
            return redirect()->back()->with('error', 'MOBIL TIDAK DAPAT DIHAPUS KARENA ADA PEMBELI YANG MEMFAVORITKAN / PESAN!');
        } else {

            if ($data) {
    
                if ($data->gambar_mobil) {
                    $gambar = public_path('/images/produk/' . $data->gambar_mobil);
    
                    if (file_exists($gambar)) {
                        unlink($gambar);
                    }
                }
    
                Mobil::where('kode_mobil', $kode_mobil)->delete();
    
                return redirect('/dashboard/produk');
            }
        }
    }

    public function dashboardTambahMerek()
    {
        return view('dashboard_tambah_merek');
    }

    public function tambahMerek(Request $request)
    {
        $merek = $request->input('merek');
        $data = MerekMobil::where('merek', $merek)->first();

        if ($data) {
            return redirect()->back()->with('error', 'MEREK SUDAH ADA!');
        } else {
            $request->validate([
                'merek' => 'required|max:30',
                'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
                $tempat = public_path('/images/merek');
                $gambar->move($tempat, $nama_gambar);
    
                $merekmobil = new MerekMobil;
                $merekmobil->merek = $merek;
                $merekmobil->gambar = $nama_gambar;
                $merekmobil->save();
    
                return redirect('/dashboard/produk?tab=merek');
            }
        }
    }

    public function ambilDataMerek($kode_merek)
    {
        $data = MerekMobil::where('kode_merek', $kode_merek)->first();
        $merek = $data->merek;

        $data_untuk_ubahMerek = $merek;

        session(['data_untuk_ubahMerek' => $data_untuk_ubahMerek]);

        return view('dashboard_ubah_merek', compact('kode_merek', 'merek'));
    }

    public function ubahMerek(Request $request)
    {
        $merek = $request->input('merek');
        $data_untuk_ubahMerek = session('data_untuk_ubahMerek');

        $data_merek = MerekMobil::where('merek', $merek)->first();

        if ($data_merek) {
            if ($data_merek->merek !== $data_untuk_ubahMerek) {
                return redirect()->back()->with('error', 'MEREK SUDAH ADA!');
            } else {
                $request->validate([
                    'merek' => 'required|max:30',
                    'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
                ]);
    
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
                    'merek' => $merek,
                    'gambar' => $nama_gambar,
                ]);
    
                return redirect('/dashboard/produk?tab=merek');
            }
        } else {
            $request->validate([
                'merek' => 'required|max:30',
                'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

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
                'merek' => $merek,
                'gambar' => $nama_gambar,
            ]);

            return redirect('/dashboard/produk?tab=merek');
        }
    }

    public function hapusMerek(Request $request, $kode_merek)
    {
        $nama_merek = $request->input('merek');
        $data = MerekMobil::where('kode_merek', $kode_merek)->where('merek', $nama_merek)->first();

        if ($data) {
            $merek = $data->merek;

            $data_mobil = Mobil::where('kode_merek', $kode_merek)->first();

            if ($data_mobil) {
                return redirect('/dashboard/produk?tab=merek')->with('error', 'TERDAPAT MOBIL YANG MEMILIKI MEREK "'.$merek.'", SEHINGGA TIDAK DAPAT DIHAPUS!');
            } else {

                if ($data->gambar) {
                    $gambar = public_path('/images/merek/' . $data->gambar);
        
                    if (file_exists($gambar)) {
                        unlink($gambar);
                    }
                }
        
                MerekMobil::where('kode_merek', $kode_merek)->delete();
        
                return redirect('/dashboard/produk?tab=merek');
            }
        }
    }
}
