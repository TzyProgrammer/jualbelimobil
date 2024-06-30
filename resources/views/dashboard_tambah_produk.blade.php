@extends('layout.dashboard')

@section('title', 'Dashboard Tambah Produk')

@section('judul', 'PRODUK')

@section('content')

<div class="bg-gray-100 p-4">
    @if (session('error'))
        <div class="font-bold text-lg text-red-600 p-3">
            {{ session('error') }}
        </div>
    @endif
    <form method="POST" enctype="multipart/form-data" action="{{ route('produk.tambah') }}">
        @csrf
        <table>
            <tr>
                <td class="p-1.5"><label for="nama">Nama Mobil</label></td>
                <td class="p-1.5">:</td>
                <td class="p-1.5">
                    <input type="text" id="nama" class="border-transparent rounded-md" name="nama" required>
                    @error('nama')
                        <span class="font-bold text-lg text-red-600 p-3">
                            NAMA MOBIL TIDAK BISA MELEBIHI 50 HURUF!
                        </span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="p-1.5"><label for="merek">Merek</label></td>
                <td class="p-1.5">:</td>
                <td class="p-1.5">
                    <select id="merek" class="border-transparent rounded-md p-2" name="merek" required>
                        <option value="Pilih Merek" selected>Pilih Merek</option>
                        @foreach ($data_merek as $data)
                        <option value="{{ $data->merek }}">{{ $data->merek }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td class="p-1.5"><label for="harga">Harga</label></td>
                <td class="p-1.5">:</td>
                <td class="p-1.5">
                    <input type="number" id="harga" class="border-transparent rounded-md" min="0" name="harga" required>
                    @error('harga')
                        <span class="font-bold text-lg text-red-600 p-3">
                            HARGA HARUS BERUPA ANGKA DAN TIDAK BISA MELEBIHI 20 ANGKA!
                        </span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="p-1.5"><label for="deskripsi">Deskripsi</label></td>
                <td class="p-1.5">:</td>
                <td class="p-1.5">
                    <textarea id="deskripsi" cols="60" rows="4" class="border-transparent rounded-md p-2" name="deskripsi" required></textarea>
                    @error('deskripsi')
                        <span class="font-bold text-lg text-red-600 p-3">
                            DESKRIPSI TIDAK BISA MELEBIHI 1000 HURUF!
                        </span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="p-1.5"><label for="gambar">Gambar</label></td>
                <td class="p-1.5">:</td>
                <td class="p-1.5">
                    <input type="file" id="gambar" class="border-transparent rounded-md bg-white" name="gambar" required>
                    @error('gambar')
                        <span class="font-bold text-lg text-red-600 p-3">
                            HARUS MERUPAKAN GAMBAR DENGAN EKSTENSI JPEG/PNG/JPG DENGAN MAKSIMAL 2048 KB!
                        </span>
                    @enderror
                </td>
            </tr>
        </table>
        <div class="flex justify-end space-x-3">
            <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-red-700 rounded-lg text-center">Tambah</button>
            <a href="/dashboard/produk" role="button" class="px-5 py-2.5 text-sm font-medium text-gray-900 bg-white rounded-lg text-center border">Batal</a>
        </div>
    </form>
</div>

@endsection