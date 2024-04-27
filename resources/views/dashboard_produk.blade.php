@extends('layout.dashboard')

@section('title', 'Dashboard Produk')

@section('judul', 'PRODUK')

@section('content')

<div class="flex py-5 items-center">
    <h2 class="font-medium text-xl">KATEGORI</h2>
    <div class="container px-16 flex justify-between">
        <img src="images/logo_hyundai.png" alt="Logo Hyundai" class="w-16">
        <img src="images/logo_nissan2.png" alt="Logo Nissan" class="w-16">
        <img src="images/logo_honda.png" alt="Logo Honda" class="w-16">
        <img src="images/logo_suzuki2.png" alt="Logo Suzuki" class="w-16">
        <img src="images/logo_bmw.png" alt="Logo BMW" class="w-16">
        <img src="images/logo_chevrolet.png" alt="Logo Chevrolet" class="w-16">
    </div>
</div>

<div class="bg-gray-100 dark:bg-gray-800 p-4">
    <div class="flex justify-end space-x-2">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
          </svg>
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
          </svg>
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
          </svg>                              
    </div>
    <table>
        <tr>
            <td class="p-1.5"><label for="nama">Nama Mobil</label></td>
            <td class="p-1.5">:</td>
            <td class="p-1.5"><input type="text" id="nama" class="border-transparent rounded-md"></td>
        </tr>
        <tr>
            <td class="p-1.5"><label for="jenis">Jenis</label></td>
            <td class="p-1.5">:</td>
            <td class="p-1.5"><input type="text" id="jenis" class="border-transparent rounded-md"></td>
        </tr>
        <tr>
            <td class="p-1.5"><label for="stok">Stok</label></td>
            <td class="p-1.5">:</td>
            <td class="p-1.5"><input type="number" id="stok" class="border-transparent rounded-md"></td>
        </tr>
        <tr>
            <td class="p-1.5"><label for="harga">Harga</label></td>
            <td class="p-1.5">:</td>
            <td class="p-1.5"><input type="number" id="harga" class="border-transparent rounded-md"></td>
        </tr>
        <tr>
            <td class="p-1.5"><label for="deskripsi">Deskripsi</label></td>
            <td class="p-1.5">:</td>
            <td class="p-1.5"><textarea id="deskripsi" cols="60" rows="4" class="border-transparent rounded-md"></textarea></td>
        </tr>
        <tr>
            <td class="p-1.5"><label for="gambar">Gambar</label></td>
            <td class="p-1.5">:</td>
            <td class="p-1.5"><input type="file" id="gambar" class="border-transparent rounded-md bg-white"></td>
        </tr>
    </table>
</div>

@endsection