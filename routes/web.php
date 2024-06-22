<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\DashboardPesananController;
use App\Http\Controllers\DashboardStatistikController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KatalogController;

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ResiController;
use App\Http\Controllers\UbahProfilController;

use App\Http\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

use App\Http\Controllers\DaftarController;
Route::get('/daftar', [DaftarController::class, 'showDaftarForm'])->name('daftar');
Route::post('/daftar', [DaftarController::class, 'daftar'])->name('daftar');

Route::get('/home', function () {
    return "Home - Pembeli";
})->name('home');

// Route::get('/dashboardproduk', function () {
//     return "Dashboard Produk - Penjual";
// })->name('dashboardproduk');


Route::get('/welcome', function () {
    return view('welcome');
});

Route::prefix('dashboard')->group(function () {
    
    Route::prefix('produk')->group(function () {

        Route::get('/', [DashboardProdukController::class, 'lihat']);

        Route::delete('/{kode_merek}', [DashboardProdukController::class, 'hapusMerek'])->name('merek.hapus');

        Route::get('/tambah', [DashboardProdukController::class, 'pilihanMerek']);

        Route::post('/tambah', [DashboardProdukController::class, 'tambahProduk'])->name('produk.tambah');

        Route::get('/lihat/{kode_mobil}', [DashboardProdukController::class, 'lihatProduk']);

        Route::get('/ubah/{kode_mobil}', [DashboardProdukController::class, 'ambilDataProduk']);

        Route::post('/ubah', [DashboardProdukController::class, 'ubahProduk'])->name('produk.ubah');

    });

    Route::prefix('merek')->group(function () {

        Route::get('/tambah', [DashboardProdukController::class, 'dashboardTambahMerek']);

        Route::post('/tambah', [DashboardProdukController::class, 'tambahMerek'])->name('merek.tambah');

        Route::get('/ubah/{kode_merek}', [DashboardProdukController::class, 'ambilDataMerek']);

        Route::post('/ubah', [DashboardProdukController::class, 'ubahMerek'])->name('merek.ubah');

    });

    Route::get('/pesanan', function () {
        return view('dashboard_pesanan');
    });
    
    Route::get('/statistik', function () {
        return view('dashboard_statistik');
    });

});

// Route::get('/dashboardproduk', [DashboardProdukController::class, 'lihat']);

// Route::delete('/dashboardproduk/{kode_merek}', [DashboardProdukController::class, 'hapusMerek'])->name('merek.hapus');

// Route::get('/dashboardtambahproduk', [DashboardProdukController::class, 'pilihanMerek']);

// Route::post('/dashboardtambahproduk', [DashboardProdukController::class, 'tambahProduk'])->name('produk.tambah');

// Route::get('/dashboardlihatproduk/{kode_mobil}', [DashboardProdukController::class, 'lihatProduk']);

// Route::get('/dashboardubahproduk/{kode_mobil}', [DashboardProdukController::class, 'ambilDataProduk']);

// Route::post('/dashboardubahproduk', [DashboardProdukController::class, 'ubahProduk'])->name('produk.ubah');

// Route::get('/dashboardtambahmerek', [DashboardProdukController::class, 'dashboardTambahMerek']);

// Route::post('/dashboardtambahmerek', [DashboardProdukController::class, 'tambahMerek'])->name('merek.tambah');

// Route::get('/dashboardubahmerek/{kode_merek}', [DashboardProdukController::class, 'ambilDataMerek']);

// Route::post('/dashboardubahmerek', [DashboardProdukController::class, 'ubahMerek'])->name('merek.ubah');

// Route::get('/dashboardpesanan', function () {
//     return view('dashboard_pesanan');
// });

// Route::get('/dashboardstatistik', function () {
//     return view('dashboard_statistik');
// });

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/ubahprofil', function () {
    return view('ubah_profil');
});

Route::get('/detailproduk', function () {
    return view('detail_produk');
});

Route::get('/favorite', function () {
    return view('favorite');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/pesanan', function () {
    return view('pesanan');
});

Route::get('/resi', function () {
    return view('resi');
});

Route::get('/checkout', function () {
    return view('checkout');
});