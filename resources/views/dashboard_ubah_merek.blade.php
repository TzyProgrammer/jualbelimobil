@extends('layout.dashboard')

@section('title', 'Dashboard Ubah Merek')

@section('judul', 'PRODUK')

@section('content')

<div class="bg-gray-100 p-4">
    @if (session('error'))
        <div class="font-bold text-lg text-red-600 p-3">
            {{ session('error') }}
        </div>
    @endif
    <form method="POST" enctype="multipart/form-data" action="{{ route('merek.ubah') }}">
        @csrf
        <input type="hidden" name="kode_merek" value="{{ $kode_merek }}">
        <table>
            <tr>
                <td class="p-1.5"><label for="merek">Merek</label></td>
                <td class="p-1.5">:</td>
                <td class="p-1.5">
                    <input type="text" id="merek" class="border-transparent rounded-md" name="merek" value="{{ $merek }}" required>
                    @error('merek')
                        <span class="font-bold text-lg text-red-600 p-3">
                            MEREK TIDAK BISA MELEBIHI 30 HURUF!
                        </span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td class="p-1.5"><label for="gambar">Gambar</label></td>
                <td class="p-1.5">:</td>
                <td class="p-1.5">
                    <input type="file" id="gambar" class="border-transparent rounded-md bg-white" name="gambar">
                    @error('gambar')
                        <span class="font-bold text-lg text-red-600 p-3">
                            HARUS MERUPAKAN GAMBAR DENGAN EKSTENSI JPEG/PNG/JPG DENGAN MAKSIMAL 2048 KB!
                        </span>
                    @enderror
                </td>
            </tr>
        </table>
        <span class="text-gray-400">*Jika tidak ingin mengubah gambar merek, maka tidak perlu diisi.</span>
        <div class="flex justify-end space-x-3">
            <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-red-700 rounded-lg text-center">Simpan</button>
            <a href="/dashboard/produk" role="button" class="px-5 py-2.5 text-sm font-medium text-gray-900 bg-white rounded-lg text-center border">Batal</a>
        </div>
    </form>
</div>

@endsection