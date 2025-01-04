<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" class="w-[15rem]" href="{{ asset('logo.png') }}" type="image/x-icn">
    <title>Prabotku.com</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- Navbar --}}
    @include('components.navbar')
    
    {{-- Dekstop --}}
        <section class=" max-md:hidden">
        <div class="min-h-screen flex flex-col justify-center items-center">
          <img src="https://www.svgrepo.com/show/426192/cogs-settings.svg" alt="Logo" class="mb-8 h-40">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-center text-gray-700 dark:text-white mb-4">Sedang Dalam Perbaikan</h1>
          <p class="text-center text-gray-500 dark:text-gray-300 text-lg md:text-xl lg:text-2xl mb-8">Kami tengah berupaya keras untuk meningkatkan pengalaman pengguna. Nantikan terus!</p>
          <div class="flex space-x-4">
            <a href=" https://wa.me/6285648080941 " target=" _blank" class=" text-white bg-orange-600 hover:bg-green-600 hover:text-white font-bold py-3 px-6 rounded-lg duration-500">Contact Us</a>
            <a href=" /" class="border-2 border-gray-800 text-black font-bold py-3 px-6 rounded-lg dark:text-white dark:border-white">Reload</a>
          </div>
        </div>
        </section>

        {{-- Dekstop --}}
        <section class=" md:hidden">
            <div class="min-h-screen flex flex-col justify-center items-center">
              <img src="https://www.svgrepo.com/show/426192/cogs-settings.svg" alt="Logo" class="mb-8 h-40">
              <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-center text-gray-700 dark:text-white mb-4">Sedang Dalam Perbaikan</h1>
              <p class="text-center text-gray-500 dark:text-gray-300 text-lg md:text-xl lg:text-2xl mb-8">Kami tengah berupaya keras untuk meningkatkan pengalaman pengguna. Nantikan terus!</p>
              <div class="flex space-x-4">
                <a href=" https://wa.me/6285648080941 " target=" _blank" class=" text-white bg-orange-600 hover:bg-green-600 hover:text-white font-bold py-3 px-6 rounded-lg duration-500">Contact Us</a>
                <a href=" /" class="border-2 border-gray-800 text-black font-bold py-3 px-6 rounded-lg dark:text-white dark:border-white">Reload</a>
              </div>
            </div>
            </section>

      
      {{-- Footer --}}
    @include('components.footer')
</body>
</html>