<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar akun</title>
  <script src="https://cdn.tailwindcss.com"></script>

  
  <section class="bg-red-900 dark:bg-red-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-2xl xl:p-0 dark:bg-gray-800 dark:border-gray-700">
      <img class="mx-auto my-auto mt-6" src="images/logo.png" alt="logo" width="150" >
      @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <form class="space-y-2 md:space-y-2" method="POST" action="{{ route('daftar') }}">
              <div>
                      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                      <input type="text" name="username" id="username" class="bg-red-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukkan Username" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-red-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                  </div>
                  <div>
                      <label for="nama_pembeli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pembeli</label>
                      <input type="text" name="nama_pembeli" id="nama_pembeli" class="bg-red-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukkan Nama" required="">
                  </div>
                  <div>
                      <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                      <input type="text" name="alamat" id="alamat" class="bg-red-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukkan Alamat" required="">
                  </div>
                  <div>
                      <label for="nomor_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor HP</label>
                      <input type="number" name="nomor_hp" id="nomor_hp" class="bg-red-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="+62..." required="">
                  </div>
                  
                    <div class="flex items-center justify-between">
                      <div class="flex items-start">
                    </div>
                    
                  </div>
                  <button type="submit" class=" w-full text-white bg-red-700 hover:bg-red-700 focus:ring-6 focus:outline-1 focus:ring-primary-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Daftar</button>
                  <p class="text-sm font-light text-gray-500 ">
                      Sudah memiliki akun? <a href="/login" class="font-medium text-primary-600 hover:underline">Login</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>

