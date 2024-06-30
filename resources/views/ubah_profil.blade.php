@extends('layout.main')

@section('title', 'Ubah Profil')

@section('content')

<div class="flex flex-row">
  <div class="w-64 mt-16 mx-10 mr-28">
    <img src="{{ $user->foto_profil ? asset('images/fotoprofil/' . $user->foto_profil) : asset('images/profil.jpg') }}" alt="Profile Photo">
    <label class="mt-3 ml-20 text-md text-gray-500 hover:text-red-300 cursor-pointer">
        Unggah Foto
        <input type="file" name="foto_profil" accept="image/jpeg,image/jpg,image/png" class="hidden">
    </label>
  </div>

  <form action="{{ route('updateProfile') }}" method="POST" enctype="multipart/form-data" class="max-w-sm mx-24 mb-20 ml-20">
    @csrf
    <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-gray-900">Username</label>
      <input type="text" name="username" class="w-96 shadow-sm bg-red-50 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Ubah username" value="{{ $user->username }}" disabled/>
    </div>
    <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
      <input type="text" name="nama_pembeli" class="w-96 shadow-sm bg-red-50 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Ubah nama" value="{{ $user->nama_pembeli }}" />
    </div>
    <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
      <input type="text" name="alamat" class="w-96 shadow-sm bg-red-50 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Ubah alamat" value="{{ $user->alamat }}" />
    </div>
    <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-gray-900">No HP</label>
      <input type="text" name="nomor_hp" class="w-96 shadow-sm bg-red-50 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Ubah No Hp" value="{{ $user->nomor_hp }}" />
    </div>
    <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-gray-900">Password</label>
      <input type="password" name="password" class="w-96 shadow-sm bg-red-50 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="Ubah Password" value="" />
    </div>

    <div>
      <button type="submit" class="mb-40 mr-8 w-44 text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Simpan</button>
      <a href="{{ route('profil') }}" class="text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-16 py-2.5 text-center">Batal</a>
    </div>
  </form>
</div>

@endsection
