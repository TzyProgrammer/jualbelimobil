<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','My App')</title>
</head>
<body>
    <h1>ubah profil</h1>
    <div class="container">
        <main>
            @yield('content')
        <main>
</div>
</body>
</html>

<!-- resources/views/profil.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold">Profil Pengguna</h1>
        <p>Nama Pengguna: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>kata sandi: {{$user->password_get_info}}</p>
        <p>foto : {{$user->img}}</p>
    </div>
@endsection

<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Saya</title>
    
    <link rel=”stylesheet” href=”https://cdn.tailwindcss.com/3.4.1”>
    <link href="https://cdn.tailwindcss/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel=”stylesheet” href=”asset/style/tailwindcss3.4.1.js”>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
    <nav>
    <ul>
        <li><a href="/">Beranda</a></li>
        <li><a href="/profile">Profil</a></li>
    </ul>
</nav>

    </header>

    <main>
        @yield('content')
        @extends('layouts.app')

        @section('content')
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Profil Pengguna</h1>
            <p>Nama Pengguna: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>kata sandi: {{$user->password_get_info}}</p>
            <p>foto : {{$user->img}}</p>
        </div>
        @endsection

    </main>

    <footer>
        <p>&copy; 2024 Aplikasi Saya. All rights reserved.</p>
    </footer>
</body>
</html>

