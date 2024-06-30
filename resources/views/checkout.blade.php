@extends('layout.main')

@section('title', 'Checkout')

@section('content')

<p class="text-center font-semibold text-3xl">CHECKOUT</p>
@if (session('error'))
    <div class="font-bold text-lg text-red-600 p-3">
        {{ session('error') }}
    </div>
@endif
            <div class="flex-col flex p-16 justify-around mt-14 md:flex-row">
                <div class="mb-10 mr-10">
                    <img src="/images/produk/{{ $gambar }}" width="663px" height="409.8px"/>
                </div>
                <div class="">
                    <p class="text-5xl font-semibold">{{ $merek }} {{ $nama_mobil }}</p>
                    <p class="text-2xl py-6 leading-9">{{ $deskripsi }}</p>
                </div>
            </div>
            <form method="POST" action="{{ route('checkout') }}">
                @csrf
    <div>
            <!-- input  -->
 <div class="mx-auto w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-7xl xl:p-0 pb-6">
                <div class="p-6 space-y-2">
                    <p class="text-xl text-red-600">Total Harga</p>
                    <div
                        class="w-full bg-gray-200 flex items-center p-2"
                        style="height: 70px"
                    >
                        <p class="text-xl font-bold">{{ $harga }}</p>
                    </div>
                </div>
                <!-- Pengambilan  -->
                <div class="p-6 pb-6 space-y-2">
                    <p class="text-xl text-red-600">Pengambilan</p>
                    <div class="flex flex-col bg-gray-200 p-6 gap-2">
                        <label
                            class="inline-flex items-center mr-6 justify-between"
                        >
                            <span class="text-xl">Delivery</span>
                            <input
                                type="radio"
                                class="form-radio h-6 w-6"
                                name="pengambilan"
                                value="Delivery"
                            />
                        </label>
                        <label
                            class="inline-flex items-center mr-6 justify-between"
                        >
                            <p class="text-xl">Pick Up</p>
                            <input
                                type="radio"
                                class="form-radio h-6 w-6"
                                name="pengambilan"
                                value="Pick Up"
                            />
                        </label>
                    </div>
                </div>
            </div>
</div>

        <div class="w-full flex justify-center mt-10 mb-16">
                <input type="hidden" name="kode_mobil" value="{{ $kode_mobil }}">
                <button type="submit" class="w-80 text-white bg-red-700 hover:bg-red-700 focus:ring-6 focus:outline-1 focus:ring-primary-300 font-medium rounded-full text-2xl px-5 py-2.5 text-center ">PESAN</button>
            </div>
            
        </form>
    </body>
</html>

@endsection