<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" class="w-[15rem]" href="{{ asset('logo.png') }}" type="image/x-icn">
    <title>Prabot Rumah Tangga</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- NavBar --}}
    @include('components.navbar')
    <section class=" max-md:hidden pt-[5rem]">
    {{-- Dekstop --}}
    {{-- Card section1 Dekstop --}}
    <section class=" flex row justify-center items-center pt-[1.5rem] gap-4 ">
    {{-- Card1 --}}
    <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
        <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
            <img class=" w-[12rem] h-[10rem]" src="https://pirahome.com/assets/upload/product/397e7fb906aaca7d6ade466cbde31a86.jpg"/>
            <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,5.png">
            <p class=" text-[0.8rem]">
                Meja lengkap ukuran 28cm
                Dengan fitur lengkap
            </p>
            <h1 class=" text-md font-bold">
                Rp.120.000-
            </h1>
            {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
            <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
            <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                Beli Sekarang
            </button>
            </a>
            </div>
            </div>
        </div>
    </div>

    {{-- Card2 --}}
    <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
        <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
            <img class=" w-[12rem] h-[10rem]" src="data:image/jpeg;base64,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"/>
            <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat3,5.png">
            <p class=" text-[0.8rem]">
                Lemari Dewasa Ukuran 
                Lebar 45cm -60cm
            </p>
            <h1 class=" text-md font-bold">
                Rp.200.000
            </h1>
            {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Card3 --}}
    <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
        <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
            <img class=" w-[12rem] h-[10rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8FL2OJQrn9CX-n51iq-Ugh1Zb1e2P3TT9WQ&s"/>
            <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat3,0.png">
            <p class=" text-[0.8rem]">
                PaketKursi Modern 
                Minimals Ukuran 20-28cm
            </p>
            <h1 class=" text-md font-bold">
                Rp.180.000
            </h1>
            {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Card4 --}}
    <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
        <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
            <img class=" w-[12rem] h-[10rem]" src="https://images.tokopedia.net/img/cache/700/hDjmkQ/2024/6/28/256f7111-1e3a-40e5-9bb1-9816ec7b64dc.jpg"/>
            <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,0.png">
            <p class=" text-[0.8rem]">
                Kipas Angin minimalis
                dengan slinder modern
            </p>
            <h1 class=" text-md font-bold">
                Rp.99.0000
            </h1>
            {{-- Button --}}
            {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
            </div>
        </div>
    </div>
    </section>

    {{-- Card section2 Dekstop --}}
    <section class=" flex row justify-center items-center pt-[1.5rem] gap-4 ">
        {{-- Card1 --}}
        <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
                <img class=" w-[12rem] h-[10rem]" src="https://down-id.img.susercontent.com/file/id-11134207-7r98u-lx7s81mg3x2m15"/>
                <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat3,0.png">
                <p class=" text-[0.8rem]">
                    Tv Minimalis dengan
                    kualitas hd modern
                </p>
                <h1 class=" text-md font-bold">
                    Rp.130.0000
                </h1>
                {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
                </div>
            </div>
        </div>
    
        {{-- Card2 --}}
        <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
                <img class=" w-[12rem] h-[10rem]" src="https://img.freepik.com/premium-photo/big-powerful-modern-sound-speakers-close-up-audio-stereo-system-neural-network-ai-generated-art_76080-19171.jpg"/>
                <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat3,5.png">
                <p class=" text-[0.8rem]">
                    Sound System Dengan suara
                    merdu kualitas pro modern
                </p>
                <h1 class=" text-md font-bold">
                    Rp.150.000
                </h1>
                {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
                </div>
            </div>
        </div>
    
        {{-- Card3 --}}
        <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
                <img class=" w-[12rem] h-[10rem]" src="https://lancarfurniture.com/wp-content/uploads/bufet-minimalis-terbaru.jpg"/>
                <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,5.png">
                <p class=" text-[0.8rem]">
                    Bopet dengan desain
                    minimalis dan modern
                </p>
                <h1 class=" text-md font-bold">
                    Rp.450.000
                </h1>
                {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
                </div>
            </div>
        </div>
    
        {{-- Card4 --}}
        <div class=" bg-white w-[14rem] h-[20rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class="bg-white w-[12rem] h-[10rem] mt-[-8rem] rounded-md">
                <img class=" w-[12rem] h-[10rem]" src=" https://down-id.img.susercontent.com/file/a6497dc0c4caad64eea8aa263d96549d"/>
                <img class=" w-[8rem] h-auto  mt-[-1.2rem]" src=" rat4,0.png">
                <p class=" text-[0.8rem]">
                    Rak dinding dengan model
                    minimalis dan modern 
                </p>
                <h1 class=" text-md font-bold">
                    Rp.50.000
                </h1>
                {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
                </div>
            </div>
        </div>
        </section>
    </section>


    <section class="md:hidden pt-[5rem]">
        {{-- Mobile--}}
        {{-- Card section1 Mobile --}}
        <section class=" flex row justify-center items-center grid grid-cols-2 pt-[1.5rem] gap-2 ">
        {{-- Card1 --}}
        <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                <img class=" w-[10rem] h-[9rem]" src="https://pirahome.com/assets/upload/product/397e7fb906aaca7d6ade466cbde31a86.jpg"/>
                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                <p class=" text-[0.6rem]">
                    Tv Minimalis dengan
                    kualitas hd modern
                </p>
                <p class=" text-[1rem] font-bold">
                    Rp.130.000
                </p>
                {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
                </div>
            </div>
        </div>

        {{-- Card2 --}}
        <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                <img class=" w-[10rem] h-[9rem]" src="data:image/jpeg;base64,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"/>
                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat3,5.png">
                <p class=" text-[0.6rem]">
                    Lemari Dewasa Ukuran 
                    Lebar 45cm-60cm
                </p>
                <p class=" text-[1rem] font-bold">
                    Rp.120.000
                </p>
                {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
                </div>
            </div>
        </div>


        {{-- Card3 --}}
        <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                <img class=" w-[10rem] h-[9rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8FL2OJQrn9CX-n51iq-Ugh1Zb1e2P3TT9WQ&s"/>
                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat3,0.png">
                <p class=" text-[0.6rem]">
                    Paket Kursi Modern 
                    Minimals Ukuran 20-28cm
                </p>
                <p class=" text-[1rem] font-bold">
                    Rp.120.000
                </p>
                {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
                </div>
            </div>
        </div>


        {{-- Card4 --}}
        <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
            <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                <img class=" w-[10rem] h-[9rem]" src="https://images.tokopedia.net/img/cache/700/hDjmkQ/2024/6/28/256f7111-1e3a-40e5-9bb1-9816ec7b64dc.jpg"/>
                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,0.png">
                <p class=" text-[0.6rem]">
                    Kipas Angin minimalis
                    dengan slinder modern
                </p>
                <p class=" text-[1rem] font-bold">
                    Rp.99.000
                </p>
                {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
                </div>
            </div>
        </div>

        </section>





        {{-- Card section1 Mobile --}}
        <section class=" flex row justify-center items-center grid grid-cols-2 pt-[1.5rem] gap-2 ">
            {{-- Card1 --}}
            <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
                <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                    <img class=" w-[10rem] h-[9rem]" src="https://down-id.img.susercontent.com/file/id-11134207-7r98u-lx7s81mg3x2m15"/>
                    <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat3,0.png">
                    <p class=" text-[0.6rem]">
                        Tv Minimalis dengan
                        kualitas hd modern
                    </p>
                    <p class=" text-[1rem] font-bold">
                        Rp.130.000
                    </p>
                    {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
                    </div>
                </div>
            </div>
    
            {{-- Card2 --}}
            <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
                <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                    <img class=" w-[10rem] h-[9rem]" src="https://img.freepik.com/premium-photo/big-powerful-modern-sound-speakers-close-up-audio-stereo-system-neural-network-ai-generated-art_76080-19171.jpg"/>
                    <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat3,5.png">
                    <p class=" text-[0.6rem]">
                        Sound System Dengan suara
                        merdu kualitas pro modern
                    </p>
                    <p class=" text-[1rem] font-bold">
                        Rp.150.000
                    </p>
                    {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
                    </div>
                </div>
            </div>
    
    
            {{-- Card3 --}}
            <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
                <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                    <img class=" w-[10rem] h-[9rem]" src="https://lancarfurniture.com/wp-content/uploads/bufet-minimalis-terbaru.jpg"/>
                    <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                    <p class=" text-[0.6rem]">
                        Bopet dengan desain
                        minimalis dan modern
                    </p>
                    <p class=" text-[1rem] font-bold">
                        Rp.450.000
                    </p>
                    {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
                </div>
                    </div>
                </div>
            </div>
    
    
            {{-- Card4 --}}
            <div class=" bg-white w-[12rem] h-[18rem] flex row justify-center items-center rounded-lg shadow-lg hover:s">
                <div class=" bg-white w-[10rem] h-[9rem] rounded-md mt-[-6rem]">
                    <img class=" w-[10rem] h-[9rem]" src="https://down-id.img.susercontent.com/file/a6497dc0c4caad64eea8aa263d96549d"/>
                    <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,0.png">
                    <p class=" text-[0.6rem]">
                        Rak dinding dengan model
                        minimalis dan modern 
                    </p>
                    <p class=" text-[1rem] font-bold">
                        Rp.50.000
                    </p>
                    {{-- Button --}}
            <div class=" flex justify-center items-center pt-[1rem]">
                <a href=" https://wa.me/85648080941?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                    Beli Sekarang
                </button>
                </a>
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