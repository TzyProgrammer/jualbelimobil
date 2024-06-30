<nav class="relative z-50">
    <div class="fixed top-0 left-0 right-0 bg-gray-100 px-6 py-1 flex justify-between items-center">
        <a href="/">
            <img src="/images/logokecil.png" alt="Logo" class="w-32">
        </a>
        <div class="flex items-center font-medium">
            <a href="/" class="px-4 text-primary-600 hover:underline">
                Beranda
            </a>
            <a href="/pesanan" class="px-4 text-primary-600 hover:underline">
                Pesanan
            </a>
            <a href="/favorite" class="px-4 text-primary-600 hover:underline">
                Favorit
            </a>
            <a href="{{ route('profil') }}" class="pl-4 flex items-center">
                <svg class="w-9 h-9 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                </svg>              
                <span class="pl-1"></span>
            </a>
        </div>
    </div>
</nav>