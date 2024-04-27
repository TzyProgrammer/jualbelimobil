<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <title>@yield('title', 'Dashboard')</title>
</head>
<body>
    @include('components.sidebar_dashboard')

    <div class="sm:ml-64">
        <h1 class="bg-gray-100 dark:bg-gray-800 flex justify-center font-bold text-3xl py-5">@yield('judul', 'Judul Halaman')</h1>
        <div class="p-4">
            @yield('content')
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>