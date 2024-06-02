@extends('layout.main')

@section('title', 'Profil')

@section('content')

<div class= "flex flex-row" >

  <div class="w-64 my-10 mx-44">
    <img src="images/profil.jpg" alt="">
    <button class="mt-2 text-sm text-gray-500 hover:text-gray-77 ">Unggah Foto</button>
    <input type="file" style="display: none;">
</div>


<form action="/profil" method="POST">
<form class="max-w-sm mx-24 mb-20 ml-20">
  <div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900">Username</label>
    <input type="text" id="text" class="w-96 shadow-sm bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="" value="Username" />
  </div>
  <div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
    <input type="text" id="text" class="w-96 shadow-sm bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder=""  value="Nama" />
  </div>
  <div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
    <input type="text" id="text" class="w-96 shadow-sm bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder=""value="Alamat" />
  </div>
  <div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900">No HP</label>
    <input type="text" id="text" class="w-96 shadow-sm bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="" value="No Hp" />
  </div>

  <div>
    <button type="submit" a href="/ubahprofil" class="mb-40 mr-8 w-44 text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Simpan</button>

    <a href="/profil" class=" text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-16 py-2.5 text-center">batal</a>


    


  </div>

</form>
</form>


</div>

@endsection
