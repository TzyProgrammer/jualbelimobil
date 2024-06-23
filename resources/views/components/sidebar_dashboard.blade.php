<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>
 
 <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="relative h-full px-3 py-4 overflow-y-auto bg-gray-100">
       <a href="" class="flex items-center justify-center ps-2.5">
          <img src="/images/logokecil.png" class="h-20 me-3 sm:h-20" alt="Logo" />
        </a>
        <span class="flex self-center justify-center text-xl font-semibold whitespace-nowrap mb-10 text-red-600">Dashboard</span>
       <ul class="space-y-2 font-medium">
          <li>
             <a href="/dashboard/produk" class="flex items-center justify-center p-2 text-gray-900 group">
                <button type="button" class="bg-gray-300 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center mx-2 w-full">
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5"/>
                      </svg>                      
                    Produk
                    </button>
             </a>
          </li>
          <li>
             <a href="/dashboard/statistik" class="flex items-center justify-center p-2 text-gray-900 group">
                <button type="button" class="bg-gray-300 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center mx-2 w-full">
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v15a1 1 0 0 0 1 1h15M8 16l2.5-5.5 3 3L17.273 7 20 9.667"/>
                      </svg>                                            
                    Statistik
                    </button>
             </a>
          </li>
          <li>
             <a href="/dashboard/pesanan" class="flex items-center justify-center p-2 text-gray-900 group">
                <button type="button" class="bg-gray-300 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center mx-2 w-full">
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z"/>
                      </svg>
                                            
                    Pesanan
                    </button>
             </a>
          </li>
         </ul>
         <div class="font-medium absolute bottom-0 inset-x-0 mb-2">
            <form method="POST" action="{{ route('logout') }}" class="flex items-center justify-center p-2 me-4 text-gray-900 rounded-lg hover:bg-gray-100 group">
               @csrf
               <svg class="w-6 h-6 text-gray-800 rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                 </svg>
                 
               <button type="submit" class="ms-3 whitespace">Log Out</>
            </form>
         </div>
    </div>
 </aside>