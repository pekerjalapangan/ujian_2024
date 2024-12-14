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
            <img class=" w-[12rem] h-[10rem]" src="data:image/jpeg;base64,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">
            <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,5.png">
            <p class=" text-[0.8rem]">
                Sofabed kasur busa lipat 
                minimalis kain katun modern 
            </p>
            <h1 class=" text-md font-bold">
                Rp.120.000
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
            <img class=" w-[12rem] h-[10rem]" src="https://down-id.img.susercontent.com/file/89addd4fd929cf1a136ea45b6695aafd"/>
            <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,5.png">
            <p class=" text-[0.8rem]">
                Bantal empuk dapat 4
                empuk awet minimalis
            </p>
            <h1 class=" text-md font-bold">
                Rp.80.000
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
            <img class=" w-[12rem] h-[10rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkV5zf9fTYWmsNZfphbGN1Tl1Rk3FC7Q2CSQ&s"/>
            <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,5.png">
            <p class=" text-[0.8rem]">
                Selimut tebal lembut halus
                murah modern minimalis
            </p>
            <h1 class=" text-md font-bold">
                Rp.60.000
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
            <img class=" w-[12rem] h-[10rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2XI6BWtFiXGFy7IAfkN_AiNCd5d1-AHbtag&s"/>
            <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,5.png">
            <p class=" text-[0.8rem]">
                Seprai Halus bahan lembut
                murah ekonomis minimalis
            </p>
            <h1 class=" text-md font-bold">
                Rp.45.000
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
                <img class=" w-[12rem] h-[10rem]" src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2024/4/3/283a6133-62b4-4b20-a057-75cb40e97d46.jpg"/>
                <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,5.png">
                <p class=" text-[0.8rem]">
                    Lemari pakai kamar Tidur
                    minimalis ekonomis 
                </p>
                <h1 class=" text-md font-bold">
                    Rp.650.0000
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
                <img class=" w-[12rem] h-[10rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAMDftjwIkJvGYD1HqXjS0ty8xt_V8g-R9gQ&s"/>
                <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,5.png">
                <p class=" text-[0.8rem]">
                    Lampu tidur murah
                    minimalis awet
                </p>
                <h1 class=" text-md font-bold">
                    Rp.70.000
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
                <img class=" w-[12rem] h-[10rem]" src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/9/19/dc1f099c-93fb-462d-8e04-4427a3b8fee0.jpg"/>
                <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,5.png">
                <p class=" text-[0.8rem]">
                    Gantungan baju stenlis
                    kuat minimalis ekonomis
                </p>
                <h1 class=" text-md font-bold">
                    Rp.20.000
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
                <img class=" w-[12rem] h-[10rem]" src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/6/15/97624357/97624357_d65cb75d-980f-47de-b05c-b745b628c195_676_676.jpg"/>
                <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,5.png">
                <p class=" text-[0.8rem]">
                    Rak kamar tidur ekonomis
                    minimalis dengan desain modern
                </p>
                <h1 class=" text-md font-bold">
                    Rp.140.000
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
                <img class=" w-[10rem] h-[9rem]" src="data:image/jpeg;base64,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"/>
                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                <p class=" text-[0.6rem]">
                    Sofabed kasur busa lipat 
                    minimalis kain katun modern 
                </p>
                <p class=" text-[1rem] font-bold">
                    Rp.120.000
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
                <img class=" w-[10rem] h-[9rem]" src="https://down-id.img.susercontent.com/file/89addd4fd929cf1a136ea45b6695aafd"/>
                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                <p class=" text-[0.6rem]">
                    Bantal empuk dapat 4
                    empuk awet minimalis
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
                <img class=" w-[10rem] h-[9rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkV5zf9fTYWmsNZfphbGN1Tl1Rk3FC7Q2CSQ&s"/>
                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                <p class=" text-[0.6rem]">
                    Selimut tebal lembut halus
                    murah modern minimalis
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


        {{-- Card4 --}}
        <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                <img class=" w-[10rem] h-[9rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2XI6BWtFiXGFy7IAfkN_AiNCd5d1-AHbtag&s"/>
                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                <p class=" text-[0.6rem]">
                    Seprai Halus bahan lembut
                    murah ekonomis minimalis
                </p>
                <p class=" text-[1rem] font-bold">
                    Rp.45.000
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
                    <img class=" w-[10rem] h-[9rem]" src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2024/4/3/283a6133-62b4-4b20-a057-75cb40e97d46.jpg"/>
                    <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                    <p class=" text-[0.6rem]">
                        Lemari pakai kamar Tidur
                        minimalis ekonomis 
                    </p>
                    <p class=" text-[1rem] font-bold">
                        Rp.650.000
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
                    <img class=" w-[10rem] h-[9rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAMDftjwIkJvGYD1HqXjS0ty8xt_V8g-R9gQ&s"/>
                    <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                    <p class=" text-[0.6rem]">
                        Meja lengkap ukuran 28cm
                        Dengan fitur lengkap
                    </p>
                    <p class=" text-[1rem] font-bold">
                        Rp.120.000
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
                    <img class=" w-[10rem] h-[9rem]" src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/9/19/dc1f099c-93fb-462d-8e04-4427a3b8fee0.jpg"/>
                    <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                    <p class=" text-[0.6rem]">
                        Gantungan baju stenlis
                        kuat minimalis ekonomis
                    </p>
                    <p class=" text-[1rem] font-bold">
                        Rp.20.000
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
                    <img class=" w-[10rem] h-[9rem]" src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/6/15/97624357/97624357_d65cb75d-980f-47de-b05c-b745b628c195_676_676.jpg"/>
                    <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                    <p class=" text-[0.6rem]">
                        Rak kamar tidur ekonomis
                        minimalis dengan desain modern
                    </p>
                    <p class=" text-[1rem] font-bold">
                        Rp.140.000
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