@extends('layout.dashboard')

@section('title', 'Dashboard Lihat Produk')

@section('judul', 'PRODUK')

@section('content')

<div class="mb-4">
    <a href="/dashboardproduk" role="button" class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-center">
        <svg class="w-6 h-6 text-white mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
          </svg>          
        <span>Kembali</span>
    </a>
</div>
<div class="bg-gray-100 p-4">
    <table>
        <tr>
            <td class="p-1.5 text-nowrap">Nama Mobil</td>
            <td class="p-1.5">:</td>
            <td class="p-1.5">BMW M2 C</td>
        </tr>
        <tr>
            <td class="p-1.5">Merek</td>
            <td class="p-1.5">:</td>
            <td class="p-1.5">BMW</td>
        </tr>
        <tr>
            <td class="p-1.5">Harga</td>
            <td class="p-1.5">:</td>
            <td class="p-1.5">Rp 1.558.000.000</td>
        </tr>
        <tr>
            <td class="p-1.5">Deskripsi</td>
            <td class="p-1.5">:</td>
            <td class="p-1.5">Stok Terbatas!!!</td>
        </tr>
        <tr>
            <td class="p-1.5">Gambar</td>
            <td class="p-1.5">:</td>
            <td class="p-1.5">
                <img src="/images/bmw-3.png" alt="Gambar Mobil" class="w-2/3">
            </td>
        </tr>
    </table>
</div>

@endsection