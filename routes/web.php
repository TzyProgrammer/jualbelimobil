<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\DashboardPesananController;
use App\Http\Controllers\DashboardStatistikController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ResiController;
use App\Http\Controllers\UbahProfilController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboardproduk', function () {
    return view('dashboard_produk');
});

Route::get('/dashboardtambahproduk', function () {
    return view('dashboard_tambah_produk');
});

Route::get('/dashboardlihatproduk', function () {
    return view('dashboard_lihat_produk');
});

Route::get('/dashboardubahproduk', function () {
    return view('dashboard_ubah_produk');
});

Route::get('/dashboardpesanan', function () {
    return view('dashboard_pesanan');
});

Route::get('/dashboardstatistik', function () {
    return view('dashboard_statistik');
});

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

Route::get('/resi', function () {
    return view('resi');
});

Route::get('/checkout', function () {
    return view('checkout');
});