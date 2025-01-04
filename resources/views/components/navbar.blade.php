<nav class="flex row justify-between items-center p-2 shadow-lg">
    <div class="flex row justify-center items-center">
        <h1 class="text-2xl font-bold">
            <span class="text-black">Prabot</span><span class="text-orange-600">Ku.com</span>
        </h1>
    </div>

    <!-- Desktop Navigation -->
    <section>
    <div class="hidden md:flex row justify-center items-center gap-6">
        <a href="/"><p class=" hover:text-orange-600 hover:underline underline-offset-8 cursor-pointer duration-500">Beranda</p></a>
        <div class="relative group">
            <p id="kategori-button" class="focus:outline-none hover:text-orange-600 hover:underline underline-offset-8 cursor-pointer duration-500">Kategori</p>
            <div id="kategori-dropdown" class="hidden absolute bg-white shadow-lg rounded-lg mt-2 w-48">
                <a href="/rumahtangga" class="block px-4 py-2 text-black hover:bg-orange-600 hover:text-white duration-100 cursor-pointer">Prabot Rumah Tangga</a>
                <a href="/mandi" class="block px-4 py-2 text-black hover:bg-orange-600 hover:text-white duration-100 cursor-pointer">Prabot Mandi</a>
                <a href="/tidur" class="block px-4 py-2 text-black hover:bg-orange-600 hover:text-white duration-100 cursor-pointer">Prabot Tidur</a>
            </div>
        </div>
        <a href=" /semuaproduk"><p class=" hover:text-orange-600 hover:underline underline-offset-8 cursor-pointer duration-500">Semua Produk</p></a>
        <a href=" /service"><p class=" hover:text-orange-600 hover:underline underline-offset-8 cursor-pointer duration-500">Service</p></a>
        <a href=" https://wa.me/6285648080941" target=" _blank">
        <div>
            <button class="bg-green-600 text-white hover:bg-orange-600 duration-500 shadow-lg p-2 rounded-lg">Contact Me</button>
        
        </div>
        </a>
        
    </div>

    <!-- Mobile Hamburger Menu -->
    <div class="md:hidden flex items-center">
        <button id="hamburger-button" class="p-2">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Slidebar Menu -->
<div id="mobile-menu" class="fixed top-0 left-0 w-64 h-full bg-black shadow-lg transform -translate-x-full transition-transform duration-300 z-40">
    <div class="flex justify-between items-center p-4 border-b">
        <h1 class="text-2xl font-bold">
            <span class="text-orange-600">Prabot</span><span class="text-white">Ku.com</span>
        </h1>
        <button id="close-button" class="p-2">
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div class="p-4 flex text-white flex-col gap-4">
        <a href="/"><p class="hover:text-orange-600 hover:underline underline-offset-8 cursor-pointer duration-500">Beranda</p></a>
        <div>
            <p id="mobile-kategori-button" class="hover:text-orange-600 hover:underline underline-offset-8 cursor-pointer duration-500">Kategori</p>
            <div id="mobile-kategori-dropdown" class="hidden pl-4 flex-col bg-white gap-2">
                <a href="/rumahtangga" class="block text-black hover:bg-orange-600 hover:text-white cursor-pointer duration-500">Prabot Rumah Tangga</a>
                <a href="/mandi" class="block text-black hover:bg-orange-600 hover:text-white cursor-pointer duration-500">Prabot Mandi</a>
                <a href="/tidur" class="block text-black hover:bg-orange-600 hover:text-white cursor-pointer duration-500">PrabotTidur</a>
            </div>
        </div>
        <a href=" /semuaproduk"><p class="hover:text-orange-600 hover:underline underline-offset-8 cursor-pointer duration-500">Semua Produk</p></a>
        <a href="/service"><p class="hover:text-orange-600 hover:underline underline-offset-8 cursor-pointer duration-500">Service</p></a>
        <a href=" https://wa.me/6285648080941" target="_blank">
        <div class="">
            <button class="bg-green-600 text-white hover:bg-orange-600 p-2 rounded-lg w-[7rem]">Contact Me</button>
        </div>
        </a>
    </div>
</div>

</nav>

<script>
    // Toggle dropdown for kategori
    const kategoriButton = document.getElementById('kategori-button');
    const kategoriDropdown = document.getElementById('kategori-dropdown');

    kategoriButton.addEventListener('click', () => {
        kategoriDropdown.classList.toggle('hidden');
    });

    // Toggle dropdown for kategori in mobile menu
    const mobileKategoriButton = document.getElementById('mobile-kategori-button');
    const mobileKategoriDropdown = document.getElementById('mobile-kategori-dropdown');

    mobileKategoriButton.addEventListener('click', () => {
        mobileKategoriDropdown.classList.toggle('hidden');
    });


    // JavaScript to toggle the mobile menu
    const hamburgerButton = document.getElementById('hamburger-button');
    const closeButton = document.getElementById('close-button');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburgerButton.addEventListener('click', () => {
        mobileMenu.classList.remove('-translate-x-full');
    });

    closeButton.addEventListener('click', () => {
        mobileMenu.classList.add('-translate-x-full');
    });
</script>

<style>
    /* Ensure dropdown displays above other content */
    #kategori-dropdown {
        z-index: 50;
    }

    #mobile-kategori-dropdown {
    z-index: 50;
    }

    /* Dropdown style for mobile */
#mobile-kategori-dropdown {
    background-color: #f8f9fa; /* Light gray for better contrast */
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for better visibility */
    padding: 0.5rem;
    margin-top: 0.5rem;
}

#mobile-kategori-dropdown a {
    padding: 0.75rem 1rem; /* Add spacing for touch-friendly design */
    border-radius: 0.25rem; /* Rounded corners for items */
    display: block;
    transition: background-color 0.3s ease, color 0.3s ease;
}

#mobile-kategori-dropdown a:hover {
    background-color: #ff6600; /* Highlight color on hover */
    color: white;
}

#mobile-kategori-button {
    font-size: 1rem; /* Ukuran font yang sama dengan Beranda */
    font-weight: normal; /* Tidak tebal, sama seperti menu lain */
    display: flex;
    justify-content: space-between;
    align-items: center;
}


#mobile-kategori-button::after {
    content: '\25BC'; /* Down arrow for dropdown */
    transition: transform 0.3s ease;
}

#mobile-kategori-button.active::after {
    transform: rotate(180deg); /* Rotate arrow on dropdown open */
}

</style>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

