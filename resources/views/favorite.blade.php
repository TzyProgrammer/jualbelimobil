@extends('layout.main')

@section('title', 'Favorite')

@section('content')

<p class="text-center mb-20 font-semibold text-3xl">FAVORIT</p>

    @if (!empty($kode_mobil))
        @foreach ($kode_mobil as $index => $kode)
        <div class="w-full flex flex-row bg-gray-300 my-5">
            <div class= "basis-1/2  mx-10 my-8">
                <a href="/detailproduk/{{$kode}}"><img src="images/produk/{{ $gambar_mobil[$index] }}" class=" w-72 " ></a>
            </div>
            <div class= "basis-1/2 flex flex-col text-center font-semibold my-8 text-xl ">
                <p class= "font-black ml-60" >{{ $merek[$index] }} {{ $nama[$index] }}</p><br>
                <p class= "font-semibold ml-28 w-full" >{{ $harga[$index] }}</p>
                
            </div class="justify-left">
            <div class= "flex flex-col basis-1/4 my-4 ml-96">
                <img src="images/merek/{{ $gambar_merek[$index] }}" class="w-10 my-6">
                <form method="POST" action="{{ route('hapus.favorit') }}">
                    @csrf
                    <input type="hidden" name="kode_mobil" value="{{ $kode }}">
                    <button type="submit" class="mr-60 font-semibold hover:text-red-500 hover:outline-blue-800 hover:ring-blue-800 font-medium font-underline rounded-sm text-center mt-6 me-2 mb-2 ">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach
    @endif
   
</body>
</html>

@endsection