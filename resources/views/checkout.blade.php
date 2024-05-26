@extends('layout.main')

@section('title', 'Checkout')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
        <title>Invoice Pembeli</title>
    </head>
    <body>
            <!-- card  -->
            <div class="flex-col flex p-16 justify-around mt-14 md:flex-row">
                <div class="mb-10">
                    <img
                        src="public/images/bmwx5.png"
                        width="663px"
                        height="409.8px"
                        alt=""
                    />
                </div>
                <div class="">
                    <p class="text-5xl font-semibold">BMW X5 (2010)</p>
                    <p class="text-2xl py-6 leading-9">
                        <span class="font-bold"
                            >BMW X5 3.0 Bensin-AT 2010 Abu-Abu</span
                        >
                        <br /><br />

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
            <!-- input  -->
            <div>
                <div class="p-16 pb-0 space-y-2">
                    <p class="text-4xl text-red-600">Total Harga</p>
                    <div
                        class="w-full bg-gray-200 flex items-center p-6"
                        style="height: 116px"
                    >
                        <p class="text-5xl font-bold">Rp 1.945.000.000,00</p>
                    </div>
                </div>
                <!-- Pengambilan  -->
                <div class="p-16 pb-0 space-y-2">
                    <p class="text-4xl text-red-600">Pengambilan</p>
                    <div class="flex flex-col bg-gray-200 p-6 gap-6">
                        <label
                            class="inline-flex items-center mr-6 justify-between"
                        >
                            <span class="text-4xl">Delivery</span>
                            <input
                                type="radio"
                                class="form-radio h-11 w-11"
                                name="Pengambilan"
                                value="Delivery"
                            />
                        </label>
                        <label
                            class="inline-flex items-center mr-6 justify-between"
                        >
                            <p class="text-4xl">Pick Up</p>
                            <input
                                type="radio"
                                class="form-radio h-11 w-11"
                                name="Pengambilan"
                                value="Delivery"
                            />
                        </label>
                    </div>
                </div>
                <!-- METODE PEMBAYARAN  -->
                <div class="p-16 pb-0 space-y-2">
                    <p class="text-4xl text-red-600">Pengambilan</p>
                    <div class="flex flex-col bg-gray-200 p-6 gap-6">
                        <label
                            class="inline-flex items-center mr-6 justify-between"
                        >
                            <span class="text-4xl">Tunai</span>
                            <input
                                type="radio"
                                class="form-radio h-11 w-11"
                                name="Pembayaran"
                                value="Tunai"
                            />
                        </label>
                        <label
                            class="inline-flex items-center mr-6 justify-between"
                        >
                            <p class="text-4xl">Transfer</p>
                            <input
                                type="radio"
                                class="form-radio h-11 w-11"
                                name="Pembayaran"
                                value="Transfer"
                            />
                        </label>
                    </div>
                </div>
                <div class="p-16 pb-0 space-y-2">
                    <p class="text-4xl text-red-600">Alamat Pengantaran</p>
                    <input
                        class="w-full bg-gray-200 flex items-center p-6 tracking-wider"
                        style="height: 93px"
                        placeholder="Silahkan isi alamat pengantaran.."
                    />
                </div>
                <div class="p-16 pb-0 space-y-2">
                    <p class="text-4xl text-red-600">No Hp</p>
                    <input
                        class="w-full bg-gray-200 flex items-center p-6 tracking-wider"
                        style="height: 93px"
                        type="number"
                        placeholder="Silahkan isi Nomor Hp disini.."
                    />
                </div>
            </div>
            <div class="w-full flex justify-center my-24">
                <button
                    class="bg-red-700 text-5xl rounded-full text-white font-semibold"
                    style="width: 471px; height: 103px"
                >
                    PESAN
                </button>
            </div>
        </main>
    </body>
</html>

@endsection

