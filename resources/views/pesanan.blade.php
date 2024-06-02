@extends('layout.main')

@section('title', 'Pesanan')

@section('content')

<p class="text-center font-semibold text-3xl">PESANAN</p>
<div class="my-6 flex flex-col space-y-6">
    <div class="bg-rose-50 p-3">
        <p class="text-red-700 font-medium text-end">Status Pesanan : Selesai</p>
        <div class="flex">
            <img src="/images/mobil.png" alt="Mobil" class="w-96">
            <div class="my-4 ml-20">
                <p class="text-4xl font-bold">BMW X5 (2010)</p>
                <table>
                    <tr>
                        <td class="text-red-700 font-medium py-4 pr-6">Pengambilan</td>
                        <td>Delivery</td>
                    </tr>
                    <tr>
                        <td class="text-red-700 font-medium py-4 pr-6">Metode Pembayaran</td>
                        <td>Transfer</td>
                    </tr>
                    <tr>
                        <td class="text-red-700 font-medium py-4 pr-6">Total Harga</td>
                        <td class="text-xl font-bold">Rp 1.945.000.000,00</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="bg-rose-50 p-3">
        <p class="text-red-700 font-medium text-end">Status Pesanan : Sedang dikirim</p>
        <div class="flex">
            <img src="/images/mobil.png" alt="Mobil" class="w-96">
            <div class="my-4 ml-20">
                <p class="text-4xl font-bold">BMW X5 (2010)</p>
                <table>
                    <tr>
                        <td class="text-red-700 font-medium py-4 pr-6">Pengambilan</td>
                        <td>Delivery</td>
                    </tr>
                    <tr>
                        <td class="text-red-700 font-medium py-4 pr-6">Metode Pembayaran</td>
                        <td>Transfer</td>
                    </tr>
                    <tr>
                        <td class="text-red-700 font-medium py-4 pr-6">Total Harga</td>
                        <td class="text-xl font-bold">Rp 1.945.000.000,00</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection