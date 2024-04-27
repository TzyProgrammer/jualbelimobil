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