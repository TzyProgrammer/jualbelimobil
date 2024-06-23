@extends('layout.main')

@section('title', 'Checkout')

@section('content')

<p class="text-center font-semibold text-3xl">CHECKOUT</p>
            <div class="flex-col flex p-16 justify-around mt-14 md:flex-row">
                <div class="mb-10">
                    <img src="images/bmw-3.png" width="663px" height="409.8px"/>
                </div>
                <div class="">
                    <p class="text-5xl font-semibold">BMW X5 (2010)</p>
                    <p class="text-2xl py-6 leading-9">
                        <span class="font-bold"
                            >BMW X5 3.0 Bensin-AT 2010 Abu-Abu</span>

                        STNK dan BPKB asli & sesuai*<br />
                        Pajak : 2024-07-01<br />
                        Dokumen Lengkap a/n : 2 Perorangan<br />
                        Odometer : 113,604 km<br />
                        Transmisi : AT<br />
                        Plat : Ganjil / Genap<br />
                        Warna : Abu-Abu
                    </p>
                </div>
            </div>
    <div>
            <!-- input  -->
 <div class="mx-auto w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-7xl xl:p-0 pb-6">
                <div class="p-6 space-y-2">
                    <p class="text-xl text-red-600">Total Harga</p>
                    <div
                        class="w-full bg-gray-200 flex items-center p-2"
                        style="height: 70px"
                    >
                        <p class="text-xl font-bold">Rp 1.945.000.000,00</p>
                    </div>
                </div>
                <!-- Pengambilan  -->
                <div class="p-6 pb-0 space-y-2">
                    <p class="text-xl text-red-600">Pengambilan</p>
                    <div class="flex flex-col bg-gray-200 p-6 gap-2">
                        <label
                            class="inline-flex items-center mr-6 justify-between"
                        >
                            <span class="text-xl">Delivery</span>
                            <input
                                type="radio"
                                class="form-radio h-6 w-6"
                                name="Pengambilan"
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
                                name="Pengambilan"
                                value="Delivery"
                            />
                        </label>
                    </div>
                </div>
                <!-- METODE PEMBAYARAN  -->
                <div class="p-6 pb-0 space-y-2">
                    <p class="text-xl text-red-600">Metode Pembayaran</p>
                    <div class="flex flex-col bg-gray-200 p-6 gap-2">
                        <label
                            class="inline-flex items-center mr-6 justify-between"
                        >
                            <span class="text-xl">Tunai</span>
                            <input
                                type="radio"
                                class="form-radio h-6 w-6 "
                                name="Pembayaran"
                                value="Tunai"
                            />
                        </label>
                        <label
                            class="inline-flex items-center mr-6 justify-between"
                        >
                            <p class="text-xl">Transfer</p>
                            <input
                                type="radio"
                                class="form-radio h-6 w-6"
                                name="Pembayaran"
                                value="Transfer"
                            />
                        </label>
                    </div>
                </div>
                <div class="p-6 pb-0 space-y-2">
                    <p class="text-xl text-red-600">Alamat Pengantaran</p>
                    <input
                        class="w-full bg-gray-200 flex items-center p-6 tracking-wider"
                        style="height: 70px"
                        placeholder="Silahkan isi alamat pengantaran.."
                    />
                </div>
                <div class="p-6 pb-6 space-y-2">
                    <p class="text-xl text-red-600">No Hp</p>
                    <input
                        class="w-full bg-gray-200 flex items-center p-6 tracking-wider"
                        style="height: 70px"
                        type="number"
                        placeholder="Silahkan isi Nomor Hp disini.."
                    />
                </div>
            </div>
</div>

        <div class="w-full flex justify-center mt-10 mb-16">
            <button type="submit" class="w-80 text-white bg-red-700 hover:bg-red-700 focus:ring-6 focus:outline-1 focus:ring-primary-300 font-medium rounded-full text-2xl px-5 py-2.5 text-center ">PESAN</button>
        </div>
        
    </body>
</html>

@endsection