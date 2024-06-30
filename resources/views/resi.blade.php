@extends('layout.main')

@section('title', 'Resi')

@section('content')

  
<p class="text-center font-semibold text-3xl">RESI</p>
    
  <main class="p-8">
    <div class="bg-rose-50 flex flex-col justify-between p-8 pb-20 w-full">
        <p class="text-red-700 font-medium text-end">Status Pesanan : {{ $status_pesanan }}</p>
      <div class="flex justify-around items-end p-5">
        <div class="space-y-8 ">
          <div class="ms-5">
            <p class="text-5xl font-bold">{{ $merek }} {{ $nama_mobil }}</p>
          </div>
          <div class="relative overflow-x-auto">
    <table class="max-w-2xl text-sm text-left rtl:text-right text-gray-500 ">
        <tbody>
            <tr class=" ">
                <th scope="row" class="px-6 py-4 text-2xl font-semibold text-red-700 whitespace-nowrap">
                    Tanggal Pesan
                </th>
                <td class="px-6 py-4 text-xl">
                    {{ $tanggal_pesan }}
                </td>
            
            </tr>
            <tr class=" ">
                <th scope="row" class="px-6 py-4 font-medium text-red-700 whitespace-nowrap ">
                    Total Harga
                </th>
                <td class="px-6 py-4">
                    {{ $harga }}
                </td>

            </tr>
            <tr class=" ">
                <th scope="row" class="px-6 py-4 font-medium text-red-700 whitespace-nowrap ">
                    Pengambilan
                </th>
                <td class="px-6 py-4">
                    {{ $metode_pengiriman }}
                </td>
            </tr>
            <tr class=" ">
                <th scope="row" class="px-6 py-4 font-medium text-red-700 whitespace-nowrap ">
                    Alamat Pengantaran
                </th>
                <td class="px-6 py-4">
                    {{ $alamat }}
                </td>
            </tr>
        </tbody>
    </table>
</div>
        </div>

        <div class="border border-transparent mt-5" style="width: 452px; height: 250px">
      <img src="/images/produk/{{ $gambar }}">
      </div>
      </div>
    </div>
  </main>
</body>
</html>

@endsection