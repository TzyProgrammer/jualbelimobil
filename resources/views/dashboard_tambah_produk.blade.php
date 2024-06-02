@extends('layout.dashboard')

@section('title', 'Dashboard Tambah Produk')

@section('judul', 'PRODUK')

@section('content')

<div class="bg-gray-100 p-4">
    <table>
        <tr>
            <td class="p-1.5"><label for="nama">Nama Mobil</label></td>
            <td class="p-1.5">:</td>
            <td class="p-1.5"><input type="text" id="nama" class="border-transparent rounded-md"></td>
        </tr>
        <tr>
            <td class="p-1.5"><label for="merek">Merek</label></td>
            <td class="p-1.5">:</td>
            <td class="p-1.5">
                <select id="merek" class="border-transparent rounded-md p-2">
                    <option value="Pilih Merek" selected>Pilih Merek</option>
                    <option value="Hyundai">Hyundai</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Honda">Honda</option>
                    <option value="Suzuki">Suzuki</option>
                    <option value="BMW">BMW</option>
                    <option value="Chevrolet">Chevrolet</option>
                </select>
            </td>
        </tr>
        <tr>
            <td class="p-1.5"><label for="harga">Harga</label></td>
            <td class="p-1.5">:</td>
            <td class="p-1.5"><input type="number" id="harga" class="border-transparent rounded-md" min="0"></td>
        </tr>
        <tr>
            <td class="p-1.5"><label for="deskripsi">Deskripsi</label></td>
            <td class="p-1.5">:</td>
            <td class="p-1.5"><textarea id="deskripsi" cols="60" rows="4" class="border-transparent rounded-md p-2"></textarea></td>
        </tr>
        <tr>
            <td class="p-1.5"><label for="gambar">Gambar</label></td>
            <td class="p-1.5">:</td>
            <td class="p-1.5"><input type="file" id="gambar" class="border-transparent rounded-md bg-white"></td>
        </tr>
    </table>
    <div class="flex justify-end space-x-3">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white bg-red-700 rounded-lg text-center">Tambah</button>
        <a href="dashboardproduk" role="button" class="px-5 py-2.5 text-sm font-medium text-gray-900 bg-white rounded-lg text-center border">Batal</a>
    </div>
</div>

@endsection