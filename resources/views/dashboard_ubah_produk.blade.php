@extends('layout.dashboard')

@section('title', 'Dashboard Ubah Produk')

@section('judul', 'PRODUK')

@section('content')

<div class="bg-gray-100 p-4">
    @if (session('error'))
        <div class="font-bold text-lg text-red-600 p-3">
            {{ session('error') }}
        </div>
    @endif
    <form method="POST" enctype="multipart/form-data" action="{{ route('produk.ubah') }}">
        @csrf
        <input type="hidden" name="kode_mobil" value="{{ $kode_mobil }}">
        <table>
            <tr>
                <td class="p-1.5"><label for="nama">Nama Mobil</label></td>
                <td class="p-1.5">:</td>
                <td class="p-1.5"><input type="text" id="nama" class="border-transparent rounded-md" name="nama_mobil" value="{{ $nama_mobil }}"></td>
            </tr>
            <tr>
                <td class="p-1.5"><label for="merek">Merek</label></td>
                <td class="p-1.5">:</td>
                <td class="p-1.5">
                    <select id="merek" class="border-transparent rounded-md p-2" name="merek">
                        <option value="Pilih Merek">Pilih Merek</option>
                        @foreach ($data_merek as $data)
                        <option value="{{ $data->merek }}" @if ($kode_merek == $data->kode_merek) selected @endif>{{ $data->merek }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td class="p-1.5"><label for="harga">Harga</label></td>
                <td class="p-1.5">:</td>
                <td class="p-1.5"><input type="number" id="harga" class="border-transparent rounded-md" min="0" name="harga_mobil" value="{{ $harga_mobil }}"></td>
            </tr>
            <tr>
                <td class="p-1.5"><label for="deskripsi">Deskripsi</label></td>
                <td class="p-1.5">:</td>
                <td class="p-1.5"><textarea id="deskripsi" cols="60" rows="4" class="border-transparent rounded-md p-2" name="deskripsi_mobil">{{ $deskripsi_mobil }}</textarea></td>
            </tr>
            <tr>
                <td class="p-1.5"><label for="gambar">Gambar</label></td>
                <td class="p-1.5">:</td>
                <td class="p-1.5"><input type="file" id="gambar" class="border-transparent rounded-md bg-white" name="gambar_mobil"></td>
            </tr>
        </table>
        <span class="text-gray-400">*Jika tidak ingin mengubah gambar mobil, maka tidak perlu diisi.</span>
        <div class="flex justify-end space-x-3">
            <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-red-700 rounded-lg text-center">Simpan</button>
            <a href="/dashboardproduk" role="button" class="px-5 py-2.5 text-sm font-medium text-gray-900 bg-white rounded-lg text-center border">Batal</a>
        </div>
    </form>
</div>

@endsection