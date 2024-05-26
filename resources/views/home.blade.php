@extends('layout.main')

@section('title', 'Katalog')

@section('content')


  <title>Home</title>
  <script src="https://cdn.tailwindcss.com"></script>


    <img class="flex w-full" src="images/carhome.jpg" alt="page">

    <div class="my-4 flex justify-between space-x-4">
    
    <form class="w-full mx-5" >   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-red-50 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="Cari Mobil" required />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-blue-800">Cari</button>
        </div>
    </form>

</div>
    

    <div class="flex flex-row items-center justify-center my-20 " >
    <button type="button" class="focus:outline-none text-black bg-white-0 focus:ring-1 focus:ring-red-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2">Hatchback</button>
    <button type="button" class="focus:outline-none text-black bg-white-0 focus:ring-1 focus:ring-red-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2">MPV</button>
    <button type="button" class="focus:outline-none text-black bg-white-0 focus:ring-1 focus:ring-red-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2">SUV</button>
    <button type="button" class="focus:outline-none text-black bg-white-0 focus:ring-1 focus:ring-red-300 font-medium rounded-lg text-lg px-5 lg-2.5 me-2 mb-2">Sedan</button>
    <button type="button" class="focus:outline-none text-black bg-white-0 focus:ring-1 focus:ring-red-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2">Wagon</button>
    <button type="button" class="focus:outline-none text-black bg-white-0 focus:ring-1 focus:ring-red-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2">Coupe</button>
    <button type="button" class="focus:outline-none text-black bg-white-0 focus:ring-1 focus:ring-red-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2">Van</button>
    <button type="button" class="focus:outline-none text-black bg-white-0 focus:ring-1 focus:ring-red-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2">Sport</button>
    </div>

    <div class="flex flex-row items-center justify-center my-20 space-x-2">
        <div class="container px-16 flex justify-between ">
        <a href=""><img src="images/logo_hyundai.png" alt="Logo Hyundai" class="w-16"></a>
        <a href=""><img src="images/logo_nissan.png" alt="Logo Nissan" class="w-16"></a>
        <a href=""><img src="images/logo_honda.png" alt="Logo Honda" class="w-16"></a>
        <a href=""><img src="images/logo_suzuki.png" alt="Logo Suzuki" class="w-16"></a>
        <a href=""><img src="images/logo_bmw.png" alt="Logo BMW" class="w-16"></a>
        <a href=""><img src="images/logo_chevrolet.png" alt="Logo Chevrolet" class="w-16"></a>
    
    </div>
    </div>
    

    <div class="flex flex-row items-center justify-center my-20 bg-red-900 space-x-4">
            <div class="max-w-sm bg-white border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-4 mb-4">
                <a href="#">
                    <img class="rounded-t-lg" src="images/bmw-3.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BMW 5 Series</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-200 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Rp. 1.987.897.900,00
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div> 
            </div> 
            <div class="max-w-sm bg-white border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-4 mb-4">
                <a href="#">
                    <img class="rounded-t-lg" src="images/bmw-3.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BMW 5 Series</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-200 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Rp. 1.987.897.900,00
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div> 
            </div>
            <div class="max-w-sm bg-white border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-4 mb-4">
                <a href="#">
                    <img class="rounded-t-lg" src="images/bmw-3.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BMW 5 Series</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-200 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Rp. 1.987.897.900,00
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div> 
            </div>            
    </div>



</div>

