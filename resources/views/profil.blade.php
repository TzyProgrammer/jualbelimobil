@extends('layout.main')

@section('title', 'Profil')

@section('content')

<div class="flex flex-row">

  <div class="w-64 mt-16 ml-8">
    <img src="images/profil.jpg" alt="">
  </div>
  
  <form method="POST" action="{{ route('logout') }}" class="max-w-sm mx-24 mb-20">
    @csrf
    <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-gray-900">Username</label>
      <input type="text" id="username" class="w-96 shadow-sm bg-red-50 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="" disabled value="{{ $user->username }}" />
    </div>
    <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
      <input type="text" id="nama_pembeli" class="w-96 shadow-sm bg-red-50 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="" disabled value="{{ $user->nama_pembeli ?? $user->username }}" />
    </div>
    @if (isset($user->alamat))
    <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
      <input type="text" id="alamat" class="w-96 shadow-sm bg-red-50 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="" disabled value="{{ $user->alamat }}" />
    </div>
    @endif
    @if (isset($user->nomor_hp))
    <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-gray-900">No HP</label>
      <input type="text" id="nomor_hp" class="w-96 shadow-sm bg-red-50 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5" placeholder="" disabled value="{{ $user->nomor_hp }}" />
    </div>
    @endif

    <div class="mt-16">
      <a href="/ubahprofil" class="mr-9 text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-16 py-2.5 text-center">Ubah</a>
      <button type="submit" class="text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-16 py-2.5 text-center">Logout</button>
    </div>

  </form>



</div>

@endsection
