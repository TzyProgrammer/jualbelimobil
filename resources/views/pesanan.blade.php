@extends('layout.main')

@section('title', 'Pesanan')

@section('content')

<p class="text-center font-semibold text-3xl">PESANAN</p>
<div class="my-6 flex flex-col space-y-6">
    @if (!empty($kode_pesanan))
        @foreach ($kode_pesanan as $index => $kode)
        <div class="bg-rose-50 p-3">
            <a href="/resi/{{ $kode }}">
                <p class="text-red-700 font-medium text-end">Status Pesanan : {{ $status_pesanan[$index] }}</p>
                <div class="flex">
                    <img src="/images/produk/{{ $gambar[$index] }}" alt="Mobil" class="w-96 mr-20 my-auto">
                    <div>
                        <p class="text-4xl font-bold">{{ $merek[$index] }} {{ $nama_mobil[$index] }}</p>
                        <table>
                            <tr>
                                <td class="text-red-700 font-medium py-4 pr-6">Pengambilan</td>
                                <td>{{ $metode_pengiriman[$index] }}</td>
                            </tr>
                            <tr>
                                <td class="text-red-700 font-medium py-4 pr-6">Tanggal Pesan</td>
                                <td>{{ $tanggal_pesan[$index] }}</td>
                            </tr>
                            <tr>
                                <td class="text-red-700 font-medium py-4 pr-6">Total Harga</td>
                                <td class="text-xl font-bold">{{ $harga[$index] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    @endif
</div>

@endsection