@extends('layout.main')

@section('title', 'home')

@section('content')



    <img class="flex w-full" src="images/carhome.jpg" alt="page">
    
    <div class="flex flex-row items-center justify-center my-10 bg-red-900 space-x-4 px-4">
        @if (!empty($kode))
            @foreach ($kode as $index => $kode_mobil)
            <div class="max-w-sm bg-white border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-4 mb-4">
                <a href="/detailproduk/{{$kode_mobil}}">
                    <img class="w-64 rounded-t-lg my-8 mx-8" src="/images/produk/{{$gambar[$index]}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="/detailproduk/{{$kode_mobil}}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$merek[$index]}} {{$nama[$index]}}</h5></a>
                    <a href="/detailproduk/{{$kode_mobil}}" class="inline-flex bg-red-200 items-center rounded-md  px-3 py-2 text-md font-black text-center text-red-900 hover:bg-red-100">{{$harga[$index]}}</a>
                </div> 
            </div> 
            @endforeach          
        @endif
    </div>
    <a href="/katalog">
        <p class="text-center mb-10 text-red-600">Lihat lebih banyak...</p>
    </a>
    
@endsection

