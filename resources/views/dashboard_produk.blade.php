@extends('layout.dashboard')

@section('title', 'Dashboard Produk')

@section('judul', 'PRODUK')

@section('content')



<div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
    <ul class="flex flex-wrap -mb-px" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist" data-tabs-active-classes="text-red-600 hover:text-red-600 border-red-600" data-tabs-inactive-classes="text-gray-500 hover:text-gray-600 border-gray-100 hover:border-gray-300">
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="produk-tab" data-tabs-target="#produk" type="button" role="tab" aria-controls="produk" aria-selected="false">Produk</button>
        </li>
        <li role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="merek-tab" data-tabs-target="#merek" type="button" role="tab" aria-controls="merek" aria-selected="false">Merek</button>
        </li>
    </ul>
</div>
<div id="default-tab-content">
    <div class="hidden rounded-lg" id="produk" role="tabpanel" aria-labelledby="produk-tab">
        <a href="/dashboard/produk/tambah" role="button" class="mt-4 px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-center">
            <svg class="w-4 h-4 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
              </svg>      
            <span>Tambah Produk</span>
        </a>
        @if (session('error'))
            <span class="font-bold text-lg text-red-600 p-3">
                {{ session('error') }}
            </span>
        @endif
        <div class="relative overflow-x-auto pt-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 border-b-2 border-slate-500 uppercase">
                    <tr class="bg-red-300">
                        <th scope="col" class="px-6 py-3 w-1/12 text-center">
                            Nomor
                        </th>
                        <th scope="col" class="px-6 py-3 w-6/12 text-left">
                            Nama Mobil
                        </th>
                        <th scope="col" class="px-6 py-3 w-3/12 text-right">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($kode_mobil))
                        @foreach ($kode_mobil as $index => $kode)
                        <form method="POST" action="{{ route('produk.hapus') }}">
                            @csrf
                            <tr class="odd:bg-white even:bg-red-100 border-b border-slate-300 text-black">
                                <input type="hidden" name="kode_mobil" value="{{ $kode }}">
                                <input type="hidden" name="nama_mobil" value="{{ $nama_mobil[$index] }}">
                                <td scope="row" class="px-6 py-3 whitespace-nowrap text-center">
                                    {{ $index + 1 }}
                                </td>
                                <td class="px-6 py-3">
                                    <span class="font-bold">{{ $merek[$index] }}</span> {{ $nama_mobil[$index] }}
                                </td>
                                <td class="px-6 py-3 text-right">
                                    {{ $harga_mobil[$index] }}
                                </td>
                                <td class="px-6 py-4 flex justify-around">
                                    <a href="/dashboard/produk/lihat/{{ $kode }}">
                                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                        </svg>
                                    </a>
                                    <a href="/dashboard/produk/ubah/{{ $kode }}">
                                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                        </svg>
                                    </a>
                                    <button data-modal-target="produk-modal-{{ $kode }}" data-modal-toggle="produk-modal-{{ $kode }}" class="block" type="button">
                                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            
                            <!-- Main modal -->
                            <div id="produk-modal-{{ $kode }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                            <h3 class="text-xl font-semibold text-gray-900">
                                                Konfirmasi Penghapusan Produk
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="produk-modal-{{ $kode }}">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            <p class="text-base leading-relaxed text-gray-500">
                                                Apakah Anda yakin ingin menghapus produk Nomor {{ $index + 1 }} dengan Nama Mobil {{ $merek[$index] }} {{ $nama_mobil[$index] }}?
                                            </p>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                            <button data-modal-hide="produk-modal-{{ $kode }}" type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Setuju</button>
                                            <button data-modal-hide="produk-modal-{{ $kode }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Batal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="hidden rounded-lg" id="merek" role="tabpanel" aria-labelledby="merek-tab">
        <a href="/dashboard/merek/tambah" role="button" class="mt-4 px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-center">
            <svg class="w-4 h-4 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
              </svg>      
            <span>Tambah Merek</span>
        </a>
        @if (session('error'))
            <span class="font-bold text-lg text-red-600 p-3">
                {{ session('error') }}
            </span>
        @endif
        <div class="mt-5">
            <div class="grid grid-cols-4 gap-8">
                @foreach ($data_merek as $merek)
                <form method="POST" action="{{ route('merek.hapus', $merek->kode_merek) }}">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="merek" value="{{ $merek->merek }}">
                    <div class="mx-6 grid justify-items-stretch">
                        <img src="/images/merek/{{ $merek->gambar }}" alt="Logo" class="w-24 justify-self-center">
                        <p class="my-4">Merek: <span class="font-bold">{{ $merek->merek }}</span></p>
                        <div class="flex justify-between">
                            <a href="/dashboard/merek/ubah/{{ $merek->kode_merek }}" role="button" class="px-5 py-2.5 text-sm font-medium text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-center self-center">Ubah</a>
                            <button data-modal-target="merek-modal-{{ $merek->kode_merek }}" data-modal-toggle="merek-modal-{{ $merek->kode_merek }}" type="button" class="px-5 py-2.5 text-sm font-medium text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 rounded-lg text-center self-center">Hapus</button>
                        </div>
                    </div>

                    <div id="merek-modal-{{ $merek->kode_merek }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                    <h3 class="text-xl font-semibold text-gray-900">
                                        Konfirmasi Penghapusan Merek
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="merek-modal-{{ $merek->kode_merek }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500">
                                        Apakah Anda yakin ingin menghapus Merek {{ $merek->merek }}?
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                    <button data-modal-hide="merek-modal-{{ $merek->kode_merek }}" type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Setuju</button>
                                    <button data-modal-hide="merek-modal-{{ $merek->kode_merek }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);
        const tabAktif = urlParams.get('tab') || 'produk';

        const produkTab = document.getElementById('produk-tab');
        const merekTab = document.getElementById('merek-tab');
        const produkContent = document.getElementById('produk');
        const merekContent = document.getElementById('merek');

        if (tabAktif === 'merek') {
            produkTab.setAttribute('aria-selected', 'false');
            merekTab.setAttribute('aria-selected', 'true');
            produkContent.classList.add('hidden');
            merekContent.classList.remove('hidden');
        } else {
            produkTab.setAttribute('aria-selected', 'true');
            merekTab.setAttribute('aria-selected', 'false');
            produkContent.classList.remove('hidden');
            merekContent.classList.add('hidden');
        }
    });

</script>

@endsection