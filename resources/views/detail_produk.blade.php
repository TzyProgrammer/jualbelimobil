@extends('layout.main')

@section('title', 'Detail Produk')

@section('content')

<div class="p-6 bg-white">
  <h1 class="text-4xl mb-16 mt-4">Nama Mobil</h1>
   <div class="bg-white p-2">
    <h1 class="text-3xl mb-2">Judul Besar</h1>
     <p class="text-2xl text-black">Deskripsi</p>
     <p class="text-2xl text-black">Deskripsi</p>
     <p class="text-2xl text-black">Deskripsi</p>
     <p class="text-2xl text-black">Deskripsi</p>
</div>
<div class="text-3xl text-black mb-2 mt-2">Rp 1.000.000.000</div>
<div>
   <div class="bg-white p-2">
    <h1 class="mb-2">Note</h1>
     <p class="text-black">Deskripsi</p>
     <p class="text-black">Deskripsi</p>
     <p class="text-black">Deskripsi</p>
     <p class="text-black">Deskripsi</p>
</div>
   <div class="flex space-x-4 mb-6 text-sm font-medium">
      <div class="flex-auto flex space-x-44">
   <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-16 rounded">
    Beli
  </button>
</div>

@endsection