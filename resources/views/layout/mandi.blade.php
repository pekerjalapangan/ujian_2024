<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- NavBar --}}
    @include('components.navbar')
    <section class=" max-md:hidden">
    {{-- Dekstop --}}
    <div class=" pt-[5rem] flex justify-center items-center">
        <h1 class=" text-4xl font-bold">
            Kategori
        </h1>
    </div>
    {{-- Card section1 Dekstop --}}
    <section class=" flex row justify-center items-center pt-[1.5rem] gap-4 ">
    {{-- Card1 --}}
    <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
        <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
            <img class=" w-[12rem] h-[10rem]" src="https://lancarfurniture.com/wp-content/uploads/bufet-minimalis-terbaru.jpg"/>
            <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat3,5.png">
            <p class=" text-[0.8rem]">
                Wastafel modern kualitas
                preium harga terjangkau
            </p>
            <h1 class=" text-md font-bold">
                Rp.110.0000
            </h1>
            {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
            <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                Beli Sekarang
            </button>
            </div>
            </div>
        </div>
    </div>

    {{-- Card2 --}}
    <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
        <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
            <img class=" w-[12rem] h-[10rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk_9LRiCVybeyFippYbeIrQRWMR_mX7N7afQ&s"/>
            <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,5.png">
            <p class=" text-[0.8rem]">
                Cermin kamar mandi modern
                dengan harga murah
            </p>
            <h1 class=" text-md font-bold">
                Rp.80.0000
            </h1>
            {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
            <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                Beli Sekarang
            </button>
            </div>
            </div>
        </div>
    </div>

    {{-- Card3 --}}
    <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
        <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
            <img class=" w-[12rem] h-[10rem]" src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/10/31/111a9543-05c6-4b0e-82c0-b49d3a2e4cea.jpg"/>
            <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat3,0.png">
            <p class=" text-[0.8rem]">
                Shower 2 suhu air
                dengan kualitas modern
            </p>
            <h1 class=" text-md font-bold">
                Rp.130.0000
            </h1>
            {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
            <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                Beli Sekarang
            </button>
            </div>
            </div>
        </div>
    </div>

    {{-- Card4 --}}
    <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
        <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
            <img class=" w-[12rem] h-[10rem]" src="https://images.tokopedia.net/img/cache/700/product-1/2020/7/31/30408905/30408905_e759b08c-7cb3-4036-b8aa-37ed3547529f_700_700"/>
            <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,0.png">
            <p class=" text-[0.8rem]">
                Bathub Minimalis kamar 
                mandi modern
            </p>
            <h1 class=" text-md font-bold">
                Rp.500.000
            </h1>
            {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
            <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                Beli Sekarang
            </button>
            </div>
            </div>
        </div>
    </div>
    </section>

    {{-- Card section2 Dekstop --}}
    <section class=" flex row justify-center items-center pt-[1.5rem] gap-4 ">
        {{-- Card5 --}}
        <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
                <img class=" w-[12rem] h-[10rem]" src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/6/21/52df5e31-29b1-4966-b5e6-480dd76268c5.jpg"/>
                <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,0.png">
                <p class=" text-[0.8rem]">
                    Wc duduk minimalis
                    tahan lama desain modern
                </p>
                <h1 class=" text-md font-bold">
                    Rp.180.000
                </h1>
                {{-- Button --}}
                <div class=" flex justify-center items-center pt-[1rem]">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </div>
                </div>
            </div>
        </div>
    
        {{-- Card6 --}}
        <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
                <img class=" w-[12rem] h-[10rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsFFwkar0MDsmvaySbOP7Ktfw2vvQuJeP19Q&s"/>
                <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat3,0.png">
                <p class=" text-[0.8rem]">
                   Rak gantung kamar mandi
                   minimalis modern
                </p>
                <h1 class=" text-md font-bold">
                    Rp.40.0000
                </h1>
                {{-- Button --}}
                <div class=" flex justify-center items-center pt-[1rem]">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </div>
                </div>
            </div>
        </div>
    
        {{-- Card7 --}}
        <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
                <img class=" w-[12rem] h-[10rem]" src="https://pirahome.com/assets/upload/product/397e7fb906aaca7d6ade466cbde31a86.jpg"/>
                <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,5.png">
                <p class=" text-[0.8rem]">
                    Keset kamar mandi minimalis 
                    bahan awet modern
                </p>
                <h1 class=" text-md font-bold">
                    Rp.40.0000
                </h1>
                {{-- Button --}}
                <div class=" flex justify-center items-center pt-[1rem]">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </div>
                </div>
            </div>
        </div>
    
        {{-- Card8 --}}
        <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
                <img class=" w-[12rem] h-[10rem]" src="https://images.tokopedia.net/img/cache/700/hDjmkQ/2022/1/31/c8332243-bdf8-49bf-b9e3-0ccec646da6f.jpg"/>
                <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat3,5.png">
                <p class=" text-[0.8rem]">
                    Tempat sabun dan sampo
                    murah minimalis modern
                </p>
                <h1 class=" text-md font-bold">
                    Rp.125.000
                </h1>
                {{-- Button --}}
                <div class=" flex justify-center items-center pt-[1rem]">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </div>
                </div>
            </div>
        </div>
        </section>
    </section>


    <section class="md:hidden">
        {{-- Mobile--}}
        <div class=" pt-[5rem] flex justify-center items-center">
            <h1 class=" text-2xl text-red-600 font-bold">
                Kategori
            </h1>
        </div>
        {{-- Card section1 Dekstop --}}
        <section class=" flex row justify-center items-center grid grid-cols-2 pt-[1.5rem] gap-2 ">
        {{-- Card1 --}}
        <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                <img class=" w-[10rem] h-[9rem]" src="https://lancarfurniture.com/wp-content/uploads/bufet-minimalis-terbaru.jpg"/>
                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat3,5.png">
                <p class=" text-[0.6rem]">
                    Wastafel modern kualitas
                    preium harga terjangkau
                </p>
                <p class=" text-[1rem] font-bold">
                    Rp.110.000
                </p>
                <div class=" flex justify-center items-center pt-[1rem]">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </div>
                </div>
            </div>
        </div>

        {{-- Card2 --}}
        <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                <img class=" w-[10rem] h-[9rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk_9LRiCVybeyFippYbeIrQRWMR_mX7N7afQ&s"/>
                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                <p class=" text-[0.6rem]">
                    Cermin kamar mandi modern
                    dengan harga murah
                </p>
                <p class=" text-[1rem] font-bold">
                    Rp.80.000
                </p>
                <div class=" flex justify-center items-center pt-[1rem]">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </div>
                </div>
            </div>
        </div>


        {{-- Card3 --}}
        <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                <img class=" w-[10rem] h-[9rem]" src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/10/31/111a9543-05c6-4b0e-82c0-b49d3a2e4cea.jpg"/>
                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat3,0.png">
                <p class=" text-[0.6rem]">
                    Shower 2 suhu air
                    dengan kualitas modern
                </p>
                <p class=" text-[1rem] font-bold">
                    Rp.130.000
                </p>
                <div class=" flex justify-center items-center pt-[1rem]">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </div>
                </div>
            </div>
        </div>


        {{-- Card4 --}}
        <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                <img class=" w-[10rem] h-[9rem]" src="https://images.tokopedia.net/img/cache/700/product-1/2020/7/31/30408905/30408905_e759b08c-7cb3-4036-b8aa-37ed3547529f_700_700"/>
                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,0.png">
                <p class=" text-[0.6rem]">
                    Bathub Minimalis kamar 
                    mandi modern
                </p>
                <p class=" text-[1rem] font-bold">
                    Rp.500.000
                </p>
                <div class=" flex justify-center items-center pt-[1rem]">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </div>
                </div>
            </div>
        </div>

        </section>





        {{-- Card section1 Mobile --}}
        <section class=" flex row justify-center items-center grid grid-cols-2 pt-[1.5rem] gap-2 ">
            {{-- Card5 --}}
            <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
                <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                    <img class=" w-[10rem] h-[9rem]" src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/6/21/52df5e31-29b1-4966-b5e6-480dd76268c5.jpg"/>
                    <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,0.png">
                    <p class=" text-[0.6rem]">
                        Wc duduk minimalis
                        tahan lama desain modern
                    </p>
                    <p class=" text-[1rem] font-bold">
                        Rp.180.000
                    </p>
                    <div class=" flex justify-center items-center pt-[1rem]">
                    <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                        Beli Sekarang
                    </button>
                    </div>
                    </div>
                </div>
            </div>
    
            {{-- Card6 --}}
            <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
                <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                    <img class=" w-[10rem] h-[9rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsFFwkar0MDsmvaySbOP7Ktfw2vvQuJeP19Q&s"/>
                    <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat3,0.png">
                    <p class=" text-[0.6rem]">
                        Rak gantung kamar mandi
                        minimalis modern
                    </p>
                    <p class=" text-[1rem] font-bold">
                        Rp.60.000
                    </p>
                    <div class=" flex justify-center items-center pt-[1rem]">
                    <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                        Beli Sekarang
                    </button>
                    </div>
                    </div>
                </div>
            </div>
    
    
            {{-- Card7 --}}
            <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
                <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                    <img class=" w-[10rem] h-[9rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTI8Lme32bUF40qHNhFh_9Ui3aovizUqIKZwg&s"/>
                    <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                    <p class=" text-[0.6rem]">
                        Keset kamar mandi minimalis 
                        bahan awet modern
                    </p>
                    <p class=" text-[1rem] font-bold">
                        Rp.35.000
                    </p>
                    <div class=" flex justify-center items-center pt-[1rem]">
                    <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                        Beli Sekarang
                    </button>
                    </div>
                    </div>
                </div>
            </div>
    
    
            {{-- Card8 --}}
            <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
                <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                    <img class=" w-[10rem] h-[9rem]" src="https://images.tokopedia.net/img/cache/700/hDjmkQ/2022/1/31/c8332243-bdf8-49bf-b9e3-0ccec646da6f.jpg"/>
                    <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat3,5.png">
                    <p class=" text-[0.6rem]">
                        Tempat sabun dan sampo
                        murah minimalis modern
                    </p>
                    <p class=" text-[1rem] font-bold">
                        Rp.25.000
                    </p>
                    <div class=" flex justify-center items-center pt-[1rem]">
                    <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                        Beli Sekarang
                    </button>
                    </div>
                    </div>
                </div>
            </div>
    
            </section>
            </section>
            {{-- Footer --}}
            @include('components.footer')

</body>
</html>