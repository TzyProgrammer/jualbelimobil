<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardPesananController;
use App\Http\Controllers\DashboardStatistikController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ResiController;

use App\Http\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('alreadyLoggedIn');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

use App\Http\Controllers\DaftarController;
Route::get('/daftar', [DaftarController::class, 'showDaftarForm'])->name('daftar')->middleware('alreadyLoggedIn');
Route::post('/daftar', [DaftarController::class, 'daftar'])->name('daftar');

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'home']);

use App\Http\Controllers\KatalogController;
Route::get('/katalog', [KatalogController::class, 'lihat']);

Route::get('/welcome', function () {
    return view('welcome');
});

use App\Http\Controllers\DashboardProdukController;
Route::prefix('dashboard')->middleware('authcheck')->group(function () {
    
    Route::prefix('produk')->group(function () {

        Route::get('/', [DashboardProdukController::class, 'lihat']);

        Route::delete('/{kode_merek}', [DashboardProdukController::class, 'hapusMerek'])->name('merek.hapus');

        Route::get('/tambah', [DashboardProdukController::class, 'pilihanMerek']);

        Route::post('/tambah', [DashboardProdukController::class, 'tambahProduk'])->name('produk.tambah');

        Route::get('/lihat/{kode_mobil}', [DashboardProdukController::class, 'lihatProduk']);

        Route::get('/ubah/{kode_mobil}', [DashboardProdukController::class, 'ambilDataProduk']);

        Route::post('/ubah', [DashboardProdukController::class, 'ubahProduk'])->name('produk.ubah');

        Route::post('/', [DashboardProdukController::class, 'hapusProduk'])->name('produk.hapus');

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

use App\Http\Controllers\ProfilController;
Route::get('/profil', [ProfilController::class, 'showProfile'])->name('profil');

use App\Http\Controllers\UbahProfilController;
Route::get('/ubahprofil', [UbahProfilController::class, 'showEditProfileForm'])->name('ubahprofil');
Route::put('/profil', [UbahProfilController::class, 'updateProfile'])->name('updateProfile');

use App\Http\Controllers\DetailProdukController;
Route::get('/detailproduk/{kode_mobil}', [DetailProdukController::class , 'TampilkanDetail']);

Route::get('/favorite', function () {
    return view('favorite');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/login', function () {
    return view('login');
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