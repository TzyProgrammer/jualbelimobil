<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>

@yield('ubah profil')
<!-- resources/views/profile/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold">Ubah Profil</h1>
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-input mt-1 block w-full">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-input mt-1 block w-full">
            </div>
            <div class="container mx-auto">
        <h1 class="text-3xl font-semibold">Ubah Profil</h1>
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-input mt-1 block w-full">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-input mt-1 block w-full">
            </div>
            <!-- Ubah Foto -->
            <div class="mb-4">
                <label for="photo" class="block text-sm font-medium text-gray-700">Foto Profil</label>
                <input type="file" id="photo" name="photo" class="form-input mt-1 block w-full">
            </div>
            <!-- Ubah Kata Sandi -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi Baru</label>
                <input type="password" id="password" name="password" class="form-input mt-1 block w-full">
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Kata Sandi Baru</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-input mt-1 block w-full">
            </div>
            <!-- ubah alamat -->
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">ubah alamat</label>
                <textarea id="address" name="address" class="form-textarea mt-1 block w-full">{{ old('address', $user->address) }}</textarea>
            <!-- ubah nomor telepon -->
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Ubah Nomor Telepon</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone', $user->phone) }}" class="form-input mt-1 block w-full">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
            </div>
        </form>
    </div>
@endsection

<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Saya</title>
    <!-- Tambahkan link CSS untuk Tailwind CSS dan Flowbite -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
    <nav class="bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <a href="#" class="text-white text-2xl font-bold">Aplikasi Saya</a>
                
            </div>
        </div>
    </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-4">
    <div class="container mx-auto px-4">
        <p>&copy; 2024 Aplikasi Saya. All rights reserved.</p>
    </div>
</footer>

</body>
</html>

