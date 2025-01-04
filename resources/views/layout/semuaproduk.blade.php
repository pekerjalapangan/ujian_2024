<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" class="w-[15rem]" href="{{ asset('logo.png') }}" type="image/x-icn">
    <title>Semua Prabotan</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- Navbar --}}
    @include('components.navbar')
    
    {{-- Produk Rumah tangga --}}
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
                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
    
    
        <section class="md:hidden">
            {{-- Mobile--}}
            <div class=" pt-[5rem] flex justify-center items-center">
                <h1 class=" text-2xl text-red-600 font-bold">
                    Kategori
                </h1>
            </div>
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                    <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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






                {{-- Profuk kamar mandi --}}
                <section class=" max-md:hidden">
                    {{-- Dekstop --}}
                    
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
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                    Beli Sekarang
                                </button>
                                </a>
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
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                    Beli Sekarang
                                </button>
                                </a>
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
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                    Beli Sekarang
                                </button>
                                </a>
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
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                
                
                    <section class="md:hidden">
                        {{-- Mobile--}}
                        <div class=" pt-[5rem] flex justify-center items-center">
                            <h1 class=" text-2xl text-red-600 font-bold">
                                Kategori
                            </h1>
                        </div>
                        {{-- Card section1 Mobile --}}
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
                                {{-- Button --}}
                            <div class=" flex justify-center items-center pt-[1rem]">
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                <img class=" w-[10rem] h-[9rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk_9LRiCVybeyFippYbeIrQRWMR_mX7N7afQ&s"/>
                                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                                <p class=" text-[0.6rem]">
                                    Cermin kamar mandi modern
                                    dengan harga murah
                                </p>
                                <p class=" text-[1rem] font-bold">
                                    Rp.80.000
                                </p>
                                {{-- Button --}}
                            <div class=" flex justify-center items-center pt-[1rem]">
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                <img class=" w-[10rem] h-[9rem]" src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/10/31/111a9543-05c6-4b0e-82c0-b49d3a2e4cea.jpg"/>
                                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat3,0.png">
                                <p class=" text-[0.6rem]">
                                    Shower 2 suhu air
                                    dengan kualitas modern
                                </p>
                                <p class=" text-[1rem] font-bold">
                                    Rp.130.000
                                </p>
                               {{-- Button --}}
                            <div class=" flex justify-center items-center pt-[1rem]">
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                <img class=" w-[10rem] h-[9rem]" src="https://images.tokopedia.net/img/cache/700/product-1/2020/7/31/30408905/30408905_e759b08c-7cb3-4036-b8aa-37ed3547529f_700_700"/>
                                <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,0.png">
                                <p class=" text-[0.6rem]">
                                    Bathub Minimalis kamar 
                                    mandi modern
                                </p>
                                <p class=" text-[1rem] font-bold">
                                    Rp.500.000
                                </p>
                                {{-- Button --}}
                            <div class=" flex justify-center items-center pt-[1rem]">
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                    Beli Sekarang
                                </button>
                                </a>
                                </div>
                                </div>
                            </div>
                        </div>
                
                        </section>
                
                
                
                
                
                        {{-- Card section2 Mobile --}}
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
                                    {{-- Button --}}
                            <div class=" flex justify-center items-center pt-[1rem]">
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                    Beli Sekarang
                                </button>
                                </a>
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
                                    {{-- Button --}}
                            <div class=" flex justify-center items-center pt-[1rem]">
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                    Beli Sekarang
                                </button>
                                </a>
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
                                    {{-- Button --}}
                            <div class=" flex justify-center items-center pt-[1rem]">
                                <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                    Beli Sekarang
                                </button>
                                </a>
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
                                    {{-- Button --}}
                            <div class=" flex justify-center items-center pt-[1rem]">
                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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



                            {{-- Produk kamar tidur --}}
                            <section class=" max-md:hidden">
                                {{-- Dekstop --}}
                                
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
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                            <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                                Beli Sekarang
                                            </button>
                                            </a>
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
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                            <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                                Beli Sekarang
                                            </button>
                                            </a>
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
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                            <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                                Beli Sekarang
                                            </button>
                                            </a>
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
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                            {{-- Button --}}
                                        <div class=" flex justify-center items-center pt-[1rem]">
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                            <img class=" w-[10rem] h-[9rem]" src="https://down-id.img.susercontent.com/file/89addd4fd929cf1a136ea45b6695aafd"/>
                                            <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                                            <p class=" text-[0.6rem]">
                                                Bantal empuk dapat 4
                                                empuk awet minimalis
                                            </p>
                                            <p class=" text-[1rem] font-bold">
                                                Rp.80.000
                                            </p>
                                            {{-- Button --}}
                                        <div class=" flex justify-center items-center pt-[1rem]">
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                            <img class=" w-[10rem] h-[9rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkV5zf9fTYWmsNZfphbGN1Tl1Rk3FC7Q2CSQ&s"/>
                                            <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                                            <p class=" text-[0.6rem]">
                                                Selimut tebal lembut halus
                                                murah modern minimalis
                                            </p>
                                            <p class=" text-[1rem] font-bold">
                                                Rp.60.000
                                            </p>
                                           {{-- Button --}}
                                        <div class=" flex justify-center items-center pt-[1rem]">
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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
                                            <img class=" w-[10rem] h-[9rem]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2XI6BWtFiXGFy7IAfkN_AiNCd5d1-AHbtag&s"/>
                                            <img class=" w-[6rem] h-auto mt-[-1rem]" src=" rat4,5.png">
                                            <p class=" text-[0.6rem]">
                                                Seprai Halus bahan lembut
                                                murah ekonomis minimalis
                                            </p>
                                            <p class=" text-[1rem] font-bold">
                                                Rp.45.000
                                            </p>
                                            {{-- Button --}}
                                        <div class=" flex justify-center items-center pt-[1rem]">
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                            <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                                Beli Sekarang
                                            </button>
                                            </a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    </section>
                            
                            
                            
                            
                            
                                    {{-- Card section2 Mobile --}}
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
                                                {{-- Button --}}
                                        <div class=" flex justify-center items-center pt-[1rem]">
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                            <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                                Beli Sekarang
                                            </button>
                                            </a>
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
                                                {{-- Button --}}
                                        <div class=" flex justify-center items-center pt-[1rem]">
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                            <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                                Beli Sekarang
                                            </button>
                                            </a>
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
                                                {{-- Button --}}
                                        <div class=" flex justify-center items-center pt-[1rem]">
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
                                            <button class=" bg-orange-600 text-white  p-2 rounded-md duration-500 shadow-lg hover:bg-green-600 hover:text-white">
                                                Beli Sekarang
                                            </button>
                                            </a>
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
                                                {{-- Button --}}
                                        <div class=" flex justify-center items-center pt-[1rem]">
                                            <a href=" https://wa.me/6285648080?text=Saya%20ingin%20beli%20produk%20ini" target=" _blank">
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