@extends('layout.main')

@section('title', 'Katalog')

@section('content')

<div class="my-4 flex justify-between space-x-4">
    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-3 w-full text-xl dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">BARU</button>
    <button type="button" class="focus:outline-none text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-3 w-full text-xl dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">SECOND</button>
</div>
<div class="flex justify-between py-2 px-8">
    <a href=""><p class="text-lg">Hatchback</p></a>
    <a href=""><p class="text-lg">MPV</p></a>
    <a href=""><p class="text-lg">SUV</p></a>
    <a href=""><p class="text-lg">Sedan</p></a>
    <a href=""><p class="text-lg">Wagon</p></a>
    <a href=""><p class="text-lg">Coupe</p></a>
    <a href=""><p class="text-lg">Van</p></a>
    <a href=""><p class="text-lg">Sport</p></a>
</div>
<div class="flex justify-center mt-4 mb-8 space-x-8">
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