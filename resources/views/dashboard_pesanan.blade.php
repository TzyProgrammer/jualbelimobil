@extends('layout.dashboard')

@section('title', 'Dashboard Pesanan')

@section('judul', 'PESANAN')

@section('content')



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                    Mobil
                </th>
                <th scope="col" class="px-6 py-3">
                    Jenis Pengambilan
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    1
                </td>
                <td class="px-6 py-4">
                    01/04/24
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
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td class="px-6 py-4">
                    Sedang Diantar
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td class="px-6 py-4">
                    Sedang Diantar
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
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
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td class="px-6 py-4">
                    Menunggu Untuk Diambil
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection