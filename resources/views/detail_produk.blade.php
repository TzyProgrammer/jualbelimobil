@extends('layout.main')

@section('title', 'Detail Produk')

@section('content')

   <div class="text-5xl fontsemibold leading-loose text-black ps-45 mt-4 mb-2" >
      <p>{{$merek->merek}} {{$mobil->nama_mobil}}</p>
   </div>

   <div class="flex-col flex p-10 justify-around mt-18 mb-2 md:flex-row">
      <div class="w-96 mt-5 ps-1 ">
          <img src="/images/produk/{{$mobil->gambar_mobil}}" />
          <br>
         <p class="text-sm mt-20" >
            All Inclusive Price <br>
            * 1-Year Warranty (Engine, Transmission, AC) <br>
            * Road Tax <br>
            * 1 Year TLO Insurance</p>
      </div>
      <div class="">
         <p class="text-xl ps-8 leading-7">{{$mobil->deskripsi_mobil}}</p>
         <p class="ps-8 font-black mt-8 text-3xl">{{$harga}}</p>
         <div class="flex flex-row ps-8 mt-20 mb-20">
            <button type="submit" class=" w-64 text-white bg-red-700 hover:bg-red-700 focus:ring-4 focus:outline-1 focus:ring-primary-300 font-medium rounded-full text-xl px-5 py-2.5 text-center">BELI</button>
            <form method="POST" action="{{ route('favorit') }}">
               @csrf
               <input type="hidden" name="kode_mobil" value="{{$mobil->kode_mobil}}">
               <button type="submit">
                  <img src="/images/love.png" class="w-16  ps-4">
               </button>
            </form>
         </div>

      </div>
   </div>

   <div>

   </div>

@endsection