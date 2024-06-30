@extends('layout.main')

@section('title', 'Katalog')

@section('content')

<div class="p-6 my-6 bg-red-800 rounded-xl">
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
                    <a href="/detailproduk/{{$data->kode_mobil}}" class="inline-flex bg-red-200 items-center rounded-md  px-3 py-2 text-md font-black text-center text-red-900 hover:bg-red-100">{{$data->harga_mobil}}</a>
                </div> 
            </div> 

        @endforeach
    </div>
</div>

@endsection

