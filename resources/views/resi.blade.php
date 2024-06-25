@extends('layout.main')

@section('title', 'Resi')

@section('content')

  
<p class="text-center font-semibold text-3xl">RESI</p>
    
  <main class="p-8">
    <div class="bg-rose-50 flex flex-col justify-between p-8 pb-20 w-full">
      <div class="flex justify-end gap-5 items-center">
      <button type="submit" class="mt-1 -35 text-white bg-red-700 hover:bg-red-700 focus:ring-6 focus:outline-1 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center :bg-primary-600 :hover:bg-primary-700 :focus:ring-primary-800">Cetak Faktur</button>
      </div>

      <div class="flex justify-around items-end p-5">
        <div class="space-y-8 ">
          <div class="ms-5">
            <p class="text-5xl font-bold">BMW X5 (2010)</p>
            <p class="text-2xl font-semibold">BMW X5 3.0 Bensin-AT 2010 Abu-Abu</p>
          </div>
          <div class="relative overflow-x-auto">
    <table class="max-w-2xl text-sm text-left rtl:text-right text-gray-500 ">
        <tbody>
            <tr class=" border-b ">
                <th scope="row" class="px-6 py-4 text-2xl font-semibold text-red-700 whitespace-nowrap">
                    Estimasi Pengantaran
                </th>
                <td class="px-6 py-4 text-xl">
                    2-4 Desember 2024
                </td>
            
            </tr>
            <tr class=" ">
                <th scope="row" class="px-6 py-4 font-medium text-red-700 whitespace-nowrap ">
                    Total Harga
                </th>
                <td class="px-6 py-4">
                    Rp. 1.945.000.000,00
                </td>

            </tr>
            <tr class=" ">
                <th scope="row" class="px-6 py-4 font-medium text-red-700 whitespace-nowrap ">
                    Pengambilan
                </th>
                <td class="px-6 py-4">
                    Delivery
                </td>
            </tr>
            <tr class=" ">
                <th scope="row" class="px-6 py-4 font-medium text-red-700 whitespace-nowrap ">
                    Metode Pembayaran
                </th>
                <td class="px-6 py-4">
                    Transfer
                </td>
            </tr>
            <tr class=" ">
                <th scope="row" class="px-6 py-4 font-medium text-red-700 whitespace-nowrap ">
                    Alamat Pengantaran
                </th>
                <td class="px-6 py-4">
                Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam,
                blok M no 98, Kepulauan Riau 29461
                </td>
            </tr>
        </tbody>
    </table>
</div>
        </div>

        <div class="border border-transparent mt-5" style="width: 452px; height: 250px">
      <img src="images/bmw-xx.png">
      </div>
      </div>
    </div>
  </main>
</body>
</html>

@endsection