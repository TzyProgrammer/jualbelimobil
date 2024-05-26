@extends('layout.dashboard')

@section('title', 'Dashboard Produk')

@section('judul', 'PRODUK')

@section('content')



<div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px">
        <li class="me-2">
            <a href="/dashboardproduk" class="inline-block p-4 text-red-600 border-b-2 border-red-600 rounded-t-lg active dark:text-red-500 dark:border-red-500" aria-current="page">Produk</a>
        </li>
        <li class="me-2">
            <a href="/dashboardmerek" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Merek</a>
        </li>
    </ul>
</div>
<button type="button" class="mt-4 px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
    <svg class="w-4 h-4 mr-1 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
      </svg>      
    <span>Tambah Produk</span>
</button>
<div class="flex pt-2 pb-5 items-center">
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



<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 border-b-2 border-slate-500 uppercase dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center bg-red-100">
                    Nomor
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Mobil
                </th>
                <th scope="col" class="px-6 py-3 text-center bg-red-100">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Deskripsi
                </th>
                <th scope="col" class="px-6 py-3 text-center bg-red-100">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b border-slate-300 dark:bg-gray-800 dark:border-gray-700 text-black">
                <td scope="row" class="px-6 py-4 whitespace-nowrap text-center bg-red-100">
                    1
                </td>
                <td class="px-6 py-4">
                    BMW
                </td>
                <td class="px-6 py-4 text-right bg-red-100">
                    Rp. 1.000.000.000
                </td>
                <td class="px-6 py-4">
                    Stok terbatas!!! Stok terbatas!!! Stok terbatas!!! Stok terbatas!!!
                </td>
                <td class="px-6 py-4 flex justify-between bg-red-100">
                    <a href="/dashboardlihatproduk">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                          </svg>
                    </a>
                    <a href="/dashboardubahproduk">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                          </svg>
                    </a>
                    <a href="">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                          </svg>
                    </a>
                </td>
            </tr>
            <tr class="bg-white border-b border-slate-300 dark:bg-gray-800 dark:border-gray-700 text-black">
                <td scope="row" class="px-6 py-4 whitespace-nowrap text-center bg-red-100">
                    2
                </td>
                <td class="px-6 py-4">
                    Toyota
                </td>
                <td class="px-6 py-4 text-right bg-red-100">
                    Rp. 500.000.000
                </td>
                <td class="px-6 py-4">
                    Stok terbatas!!! Stok terbatas!!! Stok terbatas!!! Stok terbatas!!!
                </td>
                <td class="px-6 py-4 flex justify-between bg-red-100">
                    <a href="/dashboardlihatproduk">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                          </svg>
                    </a>
                    <a href="/dashboardubahproduk">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                          </svg>
                    </a>
                    <a href="">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                          </svg>
                    </a>
                </td>
            </tr>
            <tr class="bg-white border-b border-slate-300 dark:bg-gray-800 dark:border-gray-700 text-black">
                <td scope="row" class="px-6 py-4 whitespace-nowrap text-center bg-red-100">
                    3
                </td>
                <td class="px-6 py-4">
                    Honda
                </td>
                <td class="px-6 py-4 text-right bg-red-100">
                    Rp. 1.300.000.000
                </td>
                <td class="px-6 py-4">
                    Stok terbatas!!! Stok terbatas!!! Stok terbatas!!! Stok terbatas!!!
                </td>
                <td class="px-6 py-4 flex justify-between bg-red-100">
                    <a href="/dashboardlihatproduk">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                          </svg>
                    </a>
                    <a href="/dashboardubahproduk">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                          </svg>
                    </a>
                    <a href="">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                          </svg>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection