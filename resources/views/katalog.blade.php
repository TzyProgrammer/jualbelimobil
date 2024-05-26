@extends('layout.main')

@section('title', 'Katalog')

@section('content')

<div class="my-4 flex justify-between space-x-4">
    
    <form class="w-full" >   
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
<div class="flex justify-center mt-2 mb-8 space-x-8">
    <a href=""><img src="images/logo_hyundai.png" alt="Logo Hyundai" class="w-16"></a>
    <a href=""><img src="images/logo_nissan2.png" alt="Logo Nissan" class="w-16"></a>
    <a href=""><img src="images/logo_honda.png" alt="Logo Honda" class="w-16"></a>
    <a href=""><img src="images/logo_suzuki2.png" alt="Logo Suzuki" class="w-16"></a>
    <a href=""><img src="images/logo_bmw.png" alt="Logo BMW" class="w-16"></a>
    <a href=""><img src="images/logo_chevrolet.png" alt="Logo Chevrolet" class="w-16"></a>
</div>
<div class="p-6 mb-6 bg-red-800 rounded-xl">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg">
            <a href="/detailproduk">
                <div class="bg-gray-300 rounded-t-lg flex justify-center">
                    <img src="images/mobil.png" alt="Mobil" class="w-72">
                </div>
                <div class="flex justify-between items-center p-2">
                    <p class="text-2xl font-medium">Kijang Innova</p>
                    <a href="#">
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                          </svg>
                    </a>
                </div>
                <p class="text-xl font-medium p-2">Rp 500.000.000</p>
            </a>
        </div>
        <div class="bg-white rounded-lg">
            <a href="/detailproduk">
                <div class="bg-gray-300 rounded-t-lg flex justify-center">
                    <img src="images/mobil.png" alt="Mobil" class="w-72">
                </div>
                <div class="flex justify-between items-center p-2">
                    <p class="text-2xl font-medium">Kijang Innova</p>
                    <a href="#">
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                          </svg>
                    </a>
                </div>
                <p class="text-xl font-medium p-2">Rp 500.000.000</p>
            </a>
        </div>
        <div class="bg-white rounded-lg">
            <a href="/detailproduk">
                <div class="bg-gray-300 rounded-t-lg flex justify-center">
                    <img src="images/mobil.png" alt="Mobil" class="w-72">
                </div>
                <div class="flex justify-between items-center p-2">
                    <p class="text-2xl font-medium">Kijang Innova</p>
                    <a href="#">
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                          </svg>
                    </a>
                </div>
                <p class="text-xl font-medium p-2">Rp 500.000.000</p>
            </a>
        </div>
        <div class="bg-white rounded-lg">
            <a href="/detailproduk">
                <div class="bg-gray-300 rounded-t-lg flex justify-center">
                    <img src="images/mobil.png" alt="Mobil" class="w-72">
                </div>
                <div class="flex justify-between items-center p-2">
                    <p class="text-2xl font-medium">Kijang Innova</p>
                    <a href="#">
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                          </svg>
                    </a>
                </div>
                <p class="text-xl font-medium p-2">Rp 500.000.000</p>
            </a>
        </div>
        <div class="bg-white rounded-lg">
            <a href="/detailproduk">
                <div class="bg-gray-300 rounded-t-lg flex justify-center">
                    <img src="images/mobil.png" alt="Mobil" class="w-72">
                </div>
                <div class="flex justify-between items-center p-2">
                    <p class="text-2xl font-medium">Kijang Innova</p>
                    <a href="#">
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                          </svg>
                    </a>
                </div>
                <p class="text-xl font-medium p-2">Rp 500.000.000</p>
            </a>
        </div>
        <div class="bg-white rounded-lg">
            <a href="/detailproduk">
                <div class="bg-gray-300 rounded-t-lg flex justify-center">
                    <img src="images/mobil.png" alt="Mobil" class="w-72">
                </div>
                <div class="flex justify-between items-center p-2">
                    <p class="text-2xl font-medium">Kijang Innova</p>
                    <a href="#">
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                          </svg>
                    </a>
                </div>
                <p class="text-xl font-medium p-2">Rp 500.000.000</p>
            </a>
        </div>
        <div class="bg-white rounded-lg">
            <a href="/detailproduk">
                <div class="bg-gray-300 rounded-t-lg flex justify-center">
                    <img src="images/mobil.png" alt="Mobil" class="w-72">
                </div>
                <div class="flex justify-between items-center p-2">
                    <p class="text-2xl font-medium">Kijang Innova</p>
                    <a href="#">
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                          </svg>
                    </a>
                </div>
                <p class="text-xl font-medium p-2">Rp 500.000.000</p>
            </a>
        </div>
        <div class="bg-white rounded-lg">
            <a href="/detailproduk">
                <div class="bg-gray-300 rounded-t-lg flex justify-center">
                    <img src="images/mobil.png" alt="Mobil" class="w-72">
                </div>
                <div class="flex justify-between items-center p-2">
                    <p class="text-2xl font-medium">Kijang Innova</p>
                    <a href="#">
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                          </svg>
                    </a>
                </div>
                <p class="text-xl font-medium p-2">Rp 500.000.000</p>
            </a>
        </div>
        <div class="bg-white rounded-lg">
            <a href="/detailproduk">
                <div class="bg-gray-300 rounded-t-lg flex justify-center">
                    <img src="images/mobil.png" alt="Mobil" class="w-72">
                </div>
                <div class="flex justify-between items-center p-2">
                    <p class="text-2xl font-medium">Kijang Innova</p>
                    <a href="#">
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                          </svg>
                    </a>
                </div>
                <p class="text-xl font-medium p-2">Rp 500.000.000</p>
            </a>
        </div>
        <div class="bg-white rounded-lg">
            <a href="/detailproduk">
                <div class="bg-gray-300 rounded-t-lg flex justify-center">
                    <img src="images/mobil.png" alt="Mobil" class="w-72">
                </div>
                <div class="flex justify-between items-center p-2">
                    <p class="text-2xl font-medium">Kijang Innova</p>
                    <a href="#">
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                          </svg>
                    </a>
                </div>
                <p class="text-xl font-medium p-2">Rp 500.000.000</p>
            </a>
        </div>
        <div class="bg-white rounded-lg">
            <a href="/detailproduk">
                <div class="bg-gray-300 rounded-t-lg flex justify-center">
                    <img src="images/mobil.png" alt="Mobil" class="w-72">
                </div>
                <div class="flex justify-between items-center p-2">
                    <p class="text-2xl font-medium">Kijang Innova</p>
                    <a href="#">
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                          </svg>
                    </a>
                </div>
                <p class="text-xl font-medium p-2">Rp 500.000.000</p>
            </a>
        </div>
        <div class="bg-white rounded-lg">
            <a href="/detailproduk">
                <div class="bg-gray-300 rounded-t-lg flex justify-center">
                    <img src="images/mobil.png" alt="Mobil" class="w-72">
                </div>
                <div class="flex justify-between items-center p-2">
                    <p class="text-2xl font-medium">Kijang Innova</p>
                    <a href="#">
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                          </svg>
                    </a>
                </div>
                <p class="text-xl font-medium p-2">Rp 500.000.000</p>
            </a>
        </div>
    </div>
</div>

@endsection