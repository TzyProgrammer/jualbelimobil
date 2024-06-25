@extends('layout.main')

@section('title', 'Katalog')

@section('content')

<div class="my-4 flex justify-between space-x-4">
    
    <form class="w-full" >   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-red-50 focus:ring-red-500 focus:border-red-500" placeholder="Cari Mobil" required />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2">Cari</button>
        </div>
    </form>

</div>
<div class="flex justify-center mt-2 mb-8 space-x-8">
    <a href=""><img src="images/logo_hyundai.png" alt="Logo Hyundai" class="w-16"></a>
    <a href=""><img src="images/logo_nissan2.png" alt="Logo Nissan" class="w-16"></a>
    <a href=""><img src="images/logo_honda.png" alt="Logo Honda" class="w-16"></a>
    <a href=""><img src="images/logo_suzuki2.png" alt="Logo Suzuki" class="w-16"></a>
    <a href=""><img src="images/logo_bmw.png" alt="Logo BMW" class="w-16"></a>
    <a href=""><img src="images/logo_chevrolet.png" alt="Logo Chevrolet" class="w-16"></a>
</div>
<div class="p-6 mb-6 bg-red-800 rounded-xl">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
        @foreach ($data_mobil as $data)
        <div class="max-w-sm bg-white border-gray-200 rounded-lg shadow :bg-gray-800 :border-gray-700 mt-4 mb-4">
                <a href="/detailproduk/{{$data->kode_mobil}}">
                    <img class="w-64 rounded-t-lg my-8 mx-8" src="/images/produk/{{$data->gambar_mobil}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="/detailproduk/{{$data->kode_mobil}}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 :text-white">{{$data->nama_mobil}}</h5>
                    </a>
                    <p class="mb-3 text-sm text-gray-700">{{$data->deskripsi_mobil}}</p>
                    <a href="/detailproduk/{{$data->kode_mobil}}" class="inline-flex bg-red-200 items-center rounded-md  px-3 py-2 text-md font-black text-center text-red-900 hover:bg-red-100">{{$data->harga_mobil}}</a>
                </div> 
            </div> 

        @endforeach
    </div>
</div>

@endsection

