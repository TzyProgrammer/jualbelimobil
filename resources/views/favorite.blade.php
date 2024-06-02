@extends('layout.main')

@section('title', 'Favorite')

@section('content')

<p class="text-center mb-20 font-semibold text-3xl">FAVORITE</p>

    <div class="w-full flex flex-row bg-gray-300 my-5">
    <div class= "basis-1/2  mx-10 my-8"> <img src="images/bmw -m.png" class=" w-72 " > </div>
    <div class= "basis-1/2 flex flex-col text-center font-semibold my-8 text-xl ">
        <p class= "font-black ml-60" >BMW M2 C</p><br>
        <p class= "font-semibold ml-28 w-full" >Rp 1.558.000.000,00</p>

    </div class="justify-left">
    <div class= "flex flex-col basis-1/4 my-4 ml-96">
        <button> <img src="images/logo_bmw.png" class="w-10 my-2"> </button>
        <button> <img src="images/love.png" class="w-10 my-2"> </button>
        <button type="button" class="mr-60 font-semibold hover:text-red-500 hover:outline-blue-800 hover:ring-blue-800 font-medium font-underline rounded-sm text-center me-2 mb-2 ">Hapus</button>
    </div>
    </div>


    <div class="w-full flex flex-row bg-gray-300 my-5">
    <div class= "basis-1/2  mx-10 my-8"> <img src="images/mobil.png" class=" w-72 " > </div>
    <div class= "basis-1/2 flex flex-col text-center font-semibold my-8 text-xl ">
        <p class= "font-black ml-60" >Inova 000</p><br>
        <p class= "font-semibold ml-28 w-full" >Rp 558.000.000,00</p>

    </div class="justify-left">
    <div class= "flex flex-col basis-1/4 my-4 ml-96">
        <button> <img src="images/logo_bmw.png" class="w-10 my-2"> </button>
        <button> <img src="images/love.png" class="w-10 my-2"> </button>
        <button type="button" class="mr-60 font-semibold hover:text-red-500 hover:outline-blue-800 hover:ring-blue-800 font-medium font-underline rounded-sm text-center me-2 mb-2 ">Hapus</button>
    </div>
    </div>

    <div class="w-full flex flex-row bg-gray-300 my-5">
    <div class= "basis-1/2  mx-10 my-8"> <img src="images/bmw-3.png" class=" w-72 " > </div>
    <div class= "basis-1/2 flex flex-col text-center font-semibold my-8 text-xl ">
        <p class= "font-black ml-60" >BMW 3 M</p><br>
        <p class= "font-semibold ml-28 w-full" >Rp 1.558.000.000,00</p>

    </div class="justify-left">
    <div class= "flex flex-col basis-1/4 my-4 ml-96">
        <button> <img src="images/logo_bmw.png" class="w-10 my-2"> </button>
        <button> <img src="images/love.png" class="w-10 my-2"> </button>
        <button type="button" class="mr-60 font-semibold hover:text-red-500 hover:outline-blue-800 hover:ring-blue-800 font-medium font-underline rounded-sm text-center me-2 mb-2 ">Hapus</button>
    </div>
    </div>


   
</body>
</html>

@endsection