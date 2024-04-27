<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboardproduk', function () {
    return view('dashboard_produk');
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