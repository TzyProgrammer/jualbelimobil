@extends('layout.dashboard')

@section('title', 'Dashboard Pesanan')

@section('judul', 'PESANAN')

@section('content')



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 :text-gray-400 border-spacing-2">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 :bg-gray-700 :text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nomor Orderan
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Mobil
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Jenis Pengambilan
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
            </tr>
        </thead>
        <tbody>
            @if (!empty($nomor_pesanan))
                @foreach ($nomor_pesanan as $index => $nomor_orderan)
                <tr class="bg-white border-b :bg-gray-800 :border-gray-700 hover:bg-gray-50 :hover:bg-gray-600">
                    <td class="px-6 py-4">
                        {{ $nomor_orderan }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $tanggal_pesan[$index] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $username[$index] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $merek[$index] }} {{ $nama_mobil[$index] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $harga[$index] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $alamat[$index] }}
                    </td>
                    <td class="px-6 py-4 text-right flex">
                    <a href="#" class="text-black block w-full {{ $metode_pengiriman[$index] == 'Delivery' ? 'bg-green-400' : 'bg-gray-200' }} font-medium text-sm px-4 py-2.5 text-center ml-1 mr-1">Delivery</a>
                    <a href="#" class="text-black block w-full {{ $metode_pengiriman[$index] == 'Pick Up' ? 'bg-green-400' : 'bg-gray-200' }} font-medium text-sm px-4 py-2.5 text-center ml-1 mr-1">Pick Up</a>
                    </td>
                    <td class="px-6 py-4">
                        <form method="POST" action="{{ route('update.status.pesanan', $nomor_orderan) }}">
                            @csrf
                            <select name="status_pesanan" onchange="this.form.submit()">
                                <option value="Menunggu" {{ $status_pesanan[$index] == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                                <option value="Dibatalkan" {{ $status_pesanan[$index] == 'Dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
                                <option value="Dikirim" {{ $status_pesanan[$index] == 'Dikirim' ? 'selected' : '' }}>Dikirim</option>
                                <option value="Selesai" {{ $status_pesanan[$index] == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>
                        </form>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>


@endsection