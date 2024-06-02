@extends('layout.dashboard')

@section('title', 'Dashboard Ubah Merek')

@section('judul', 'PRODUK')

@section('content')

<div class="bg-gray-100 p-4">
    <table>
        <tr>
            <td class="p-1.5"><label for="merek">Merek</label></td>
            <td class="p-1.5">:</td>
            <td class="p-1.5"><input type="text" id="merek" class="border-transparent rounded-md" value="Hyundai"></td>
        </tr>
        <tr>
            <td class="p-1.5"><label for="gambar">Gambar</label></td>
            <td class="p-1.5">:</td>
            <td class="p-1.5"><input type="file" id="gambar" class="border-transparent rounded-md bg-white"></td>
        </tr>
    </table>
    <div class="flex justify-end space-x-3">
        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white bg-red-700 rounded-lg text-center">Simpan</button>
        <a href="dashboardproduk" role="button" class="px-5 py-2.5 text-sm font-medium text-gray-900 bg-white rounded-lg text-center border">Batal</a>
    </div>
</div>

@endsection