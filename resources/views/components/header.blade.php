<!-- Header untuk Desktop -->
<header class="relative max-md:hidden">
    <div class="relative">
        <!-- Gambar latar belakang -->
        <img class="w-full h-[37rem] object-cover brightness-75" src="{{ asset('bg.jpg') }}" alt="Background Image" />

        <!-- Teks promosi utama -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center">
            <h1 class="text-5xl font-bold mb-4">Terlengkap, Termurah, Terhemat</h1>
            <p class="text-lg mb-6">Temukan segala kebutuhan rumah tangga Anda di sini!</p>
            <a href="/semuaproduk" class="bg-yellow-400 hover:bg-yellow-500 text-black px-6 py-3 rounded-full font-semibold">Belanja Sekarang</a>
        </div>
    </div>
</header>

<!-- Header untuk Mobile -->
<header class="relative md:hidden">
    <div class="relative">
        <!-- Gambar latar belakang -->
        <img class="w-full h-[25rem] object-cover brightness-75" src="{{ asset('bg.jpg') }}" alt="Background Image" />

        <!-- Teks promosi utama -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center">
            <h1 class="text-3xl font-bold mb-3">Terlengkap, Termurah, Terhemat</h1>
            <p class="text-sm mb-4">Temukan segala kebutuhan rumah tangga Anda di sini!</p>
            <a href="/semuaproduk" class="bg-yellow-400 hover:bg-yellow-500 text-black px-4 py-2 rounded-full font-semibold">Belanja Sekarang</a>
        </div>
    </div>
</header>
