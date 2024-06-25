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
            <tr class="bg-white border-b :bg-gray-800 :border-gray-700 hover:bg-gray-50 :hover:bg-gray-600">
                <td class="px-6 py-4">
                    1
                </td>
                <td class="px-6 py-4">
                    01/04/2024
                </td>
                <td class="px-6 py-4">
                    Asadika
                </td>
                <td class="px-6 py-4">
                    BMW X6
                </td>
                <td class="px-6 py-4">
                    Rp. 2.067.000.000,00
                </td>
                <td class="px-6 py-4">
                    Lokasi 1
                </td>
                <td class="px-6 py-4 text-right flex">
                <a href="#" class="text-black block w-full bg-green-400 font-medium text-sm px-4 py-2.5 text-center ml-1 mr-1">Delivery</a>
                <a href="#" class="text-black block w-full bg-gray-200 font-medium text-sm px-4 py-2.5 text-center ml-1 mr-1">Pickup</a>
                </td>
                <td class="px-6 py-4">
                    <form>
                        <select name="" id="">
                            <option value="">Menunggu</option>
                            <option value="">Dibatalkan</option>
                            <option value="">Dikirim</option>
                            <option value="">Selesai</option>
                        </select>
                    </form>
                </td>
            </tr>
            <tr class="bg-white border-b :bg-gray-800 :border-gray-700 hover:bg-gray-50 :hover:bg-gray-600">
                <td class="px-6 py-4">
                    2
                </td>
                <td class="px-6 py-4">
                    07/04/2024
                </td>
                <td class="px-6 py-4">
                    Kmuna23
                </td>
                <td class="px-6 py-4">
                    Brio RS
                </td>
                <td class="px-6 py-4">
                    Rp. 243.100.000,00
                </td>
                <td class="px-6 py-4">
                    Lokasi 2
                </td>
                <td class="px-6 py-4 text-right flex">
                <a href="#" class="text-black block w-full bg-green-400 font-medium text-sm px-4 py-2.5 text-center ml-1 mr-1">Delivery</a>
                <a href="#" class="text-black block w-full bg-gray-200 font-medium text-sm px-4 py-2.5 text-center ml-1 mr-1">Pickup</a>
                </td>
                <td class="px-6 py-4">
                    <form>
                        <select name="" id="">
                            <option value="">Menunggu</option>
                            <option value="">Dibatalkan</option>
                            <option value="">Dikirim</option>
                            <option value="">Selesai</option>
                        </select>
                    </form>
                </td>
            </tr>
            <tr class="bg-white :bg-gray-800 hover:bg-gray-50 :hover:bg-gray-600">
                <td class="px-6 py-4">
                    3
                </td>
                <td class="px-6 py-4">
                    19/04/2024
                </td>
                <td class="px-6 py-4">
                    Dewo_L
                </td>
                <td class="px-6 py-4">
                    Nissan MARCH
                </td>
                <td class="px-6 py-4">
                    Rp. 69.000.000,00
                </td>
                <td class="px-6 py-4">
                    Lokasi 3
                </td>
                <td class="px-6 py-4 text-right flex">
                <a href="#" class="text-black block w-full bg-gray-200 font-medium text-sm px-4 py-2.5 text-center ml-1 mr-1">Delivery</a>
                <a href="#" class="text-black block w-full bg-green-400 font-medium text-sm px-4 py-2.5 text-center ml-1 mr-1">Pickup</a>
                </td>
                <td class="px-6 py-4">
                    <form>
                        <select name="" id="">
                            <option value="">Menunggu</option>
                            <option value="">Dibatalkan</option>
                            <option value="">Dikirim</option>
                            <option value="">Selesai</option>
                        </select>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection