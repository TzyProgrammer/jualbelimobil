<div>
  <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./style.css" rel="stylesheet" />
  <link href="./output.css" rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />

  <link
    href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
    rel="stylesheet"
  />
  <title>Document</title>
</head>
<body>
  <header>
    <div
      class="p-3 border border-black text-4xl flex justify-around items-center"
    >
      <div class="w-48 h-24 bg-slate-800 border border-black"></div>
      <!-- <div class="w-[917px] h-[59px] bg--800 border border-black "> -->
      <div
        class="p-3 h-14 bg-slate-800 border border-black flex justify-between items-center"
        style="width: 917px"
      >
        <p class="text-2xl">Search</p>
        <i class="fa fa-search"></i>
      </div>
      <div class="w-20 h-20 bg-slate-800 border border-black"></div>
      <div class="w-20 h-20 bg-slate-800 border border-black"></div>
    </div>
    <nav class="flex items-center justify-between p-3">
      <i class="fas fa-arrow-left"></i>
      <p class="text-5xl">Resi</p>
      <p class="text-4xl">Home</p>
    </nav>
  </header>
  <main class="p-8">
    <div class="flex flex-col justify-between p-8 pb-28 w-full border border-black">
      <div class="flex justify-end gap-5 items-center">
        <div class="w-14 h-14 border border-black"></div>
        <p class="text-4xl">Cetak Faktur</p>
      </div>

      <div class="flex justify-around items-end p-5">
        <div class="space-y-8 ">
          <div>
            <p class="text-5xl">BMW X5 (2010)</p>
            <p class="text-2xl">BMW X5 3.0 Bensin-AT 2010 Abu-Abu</p>
          </div>
          <div class="space-y-5" >
            <p class="text-4xl">Estimasi Pengantaran</p>
            <p class="text-2xl">Total Harga   rp</p> 
            <p class="text-2xl">Pengambilan</p>
            <p class="text-2xl">Metode Pembayaran</p>
            <p class="text-2xl">Alamat Pengantaran</p>
          </div>
        </div>

        <div class="border border-transparent m-5" style="width: 452px; height: 250px">
      <img src="image/bmw.png">
      </div>
      </div>
    </div>
  </main>
</body>
</html>
