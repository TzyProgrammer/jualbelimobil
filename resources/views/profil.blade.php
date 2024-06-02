@extends('layout.main')

@section('title', 'Profil')

@section('content')

<div class= "flex flex-row" >

  <div class="w-64 my-10"><img src="images/profil.jpg" alt=""></div>
  

<form class="max-w-sm mx-24 mb-20 ">
  <div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900">Username</label>
    <input type="email" id="email" class="w-96 shadow-sm bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="" disabled value="Username" />
  </div>
  <div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
    <input type="email" id="email" class="w-96 shadow-sm bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="" disabled value="Nama" />
  </div>
  <div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
    <input type="email" id="email" class="w-96 shadow-sm bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="" disabled value="Alamat" />
  </div>
  <div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900">No HP</label>
    <input type="email" id="email" class="w-96 shadow-sm bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="" disabled value="No Hp" />
  </div>

  <div>
    <button type="submit" class="mr-8 w-44 text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Ubah</button>

    <a href="/login" class=" text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-16 py-2.5 text-center">logout</a>


    


  </div>

</form>


</div>

@endsection