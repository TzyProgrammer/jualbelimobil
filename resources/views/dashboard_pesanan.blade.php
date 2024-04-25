@extends('layout.dashboard')

@section('title', 'Dashboard Pesanan')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orderan</title>
</head>
<body class="bg-gray-100">
    <div class="overflow-x-auto">
      <table class="table-auto w-full">
        <thead>
          <tr>
            <th class="px-4 py-2">Nomor orderan</th>
            <th class="px-4 py-2">Tanggal</th>
            <th class="px-4 py-2">Username</th>
            <th class="px-4 py-2">Mobil</th>
            <th class="px-4 py-2">Harga</th>
            <th class="px-4 py-2">Jenis Pengambilan</th>
            <th class="px-4 py-2">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border px-4 py-2">1</td>
            <td class="border px-4 py-2">01/04/2024</td>
            <td class="border px-4 py-2">Asadika</td>
            <td class="border px-4 py-2">BMW X6</td>
            <td class="border px-4 py-2"></td>
            <td class="border px-4 py-2 text-red-500 font-bold">Delivery</td>
            <td class="border px-4 py-2"></td>
          </tr>
          <tr>
            <td class="border px-4 py-2">2</td>
            <td class="border px-4 py-2">07/04/2024</td>
            <td class="border px-4 py-2">Kmuna23</td>
            <td class="border px-4 py-2">Brio RS</td>
            <td class="border px-4 py-2"></td>
            <td class="border px-4 py-2 text-red-500 font-bold">Delivery</td>
            <td class="border px-4 py-2"></td>
          </tr>
          <tr>
            <td class="border px-4 py-2">3</td>
            <td class="border px-4 py-2">19/04/2024</td>
            <td class="border px-4 py-2">Dewo_L</td>
            <td class="border px-4 py-2">Nissan MARCH</td>
            <td class="border px-4 py-2"></td>
            <td class="border px-4 py-2 text-green-500 font-bold">Pickup</td>
            <td class="border px-4 py-2"></td>
          </tr>
        </tbody>
      </table>
    </div>
</body>
</html>