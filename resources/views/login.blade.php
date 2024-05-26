<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>

  
  <section class=" bg-red-900 dark:bg-red-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 ">
      <img class="mx-auto my-auto mt-6" src="images/logo.png" alt="logo" width="150" >

          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <form class="space-y-4 md:space-y-4" action="#">
              <div>
                      <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                      <input type="username" name="username" id="username" class="bg-red-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukkan username " required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-red-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          
                          
                      </div>
                    
                  </div>
                  <button type="submit" class="w-full text-white bg-red-700 hover:bg-red-700 focus:ring-4 focus:outline-1 focus:ring-primary-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Login</button>
                  <p class="text-sm font-light text-gray-500">
                      Belum memiliki akun? <a href="/daftar" class="font-medium text-primary-600 hover:underline">Daftar</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>

