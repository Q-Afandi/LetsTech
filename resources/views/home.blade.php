@extends('layouts.main')

@section('container')
<main>
<!-- JumboTron-->
<section class="jumbotron jumbotron-fluid translate-y-28"> 
<div class="drop-shadow mb-10 mx-4 items-center bg-transparant justify-between ">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="drop-shadow-lg relative w-auto h-56 overflow-hidden rounded-2xl md:h-96" >
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/src/img/home1.jpg" class="absolute block w-4/5  rounded-2xl lg:rounded-2xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/src/img/hom2.jpg" class="absolute block w-4/5 rounded-2xl lg:rounded-2xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/src/img/home3.jpg" class="absolute block w-4/5 rounded-2xl lg:rounded-2xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-0 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-4  dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-4  dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>
</section>


{{-- Garansi dll --}}
<section class="translate-y-28 w-full pt-2 ">
    <div class="container bg-white w-full">
            <ul class="w-full font-medium text-gray-500 flex flex-col p-3 mt-4 border border-gray-100 rounded-lg md:flex-row  rtl:space-x-reverse md:mt-0 ">
                <li class="flex w-24">
                    <img src="/src/img/garansi.png" class="h-20" alt="">
                <li>
                    <span class="text-black">Garansi 6 Bulan</span>
                    <p class="text-xs">Kerusakan gadget dijamin oleh UpGadget</p>
                </li>
                </li>
                <li class="flex w-20">
                    <img src="/src/img/fungsi.png" class="h-20" alt="">
                </li>
                <li>
                    <span class="text-black">Fungsi Normal</span>
                    <p class="text-xs">Kerusakan gadget dijamin oleh UpGadget</p>
                </li>
                <li class="flex w-28">
                    <img src="/src/img/coba (2).png" class="h-20" alt="">
                </li>
                <li>
                    <span class="text-black">Coba Dulu</span>
                    <p class="text-xs">Bisa ditukar jika tidak berfungsi normal</p>
                </li>
                <li class="flex w-20">
                    <img src="/src/img/produk.png" class="h-20" alt="">
                </li>
                <li>
                    <span class="text-black">Produk Original</span>
                    <p class="text-xs">Semua gadget telah melalui QC</p>
                </li>
                <li class="flex w-24">
                    <img src="/src/img/service.png" class="h-20" alt="">
                </li>
                <li>
                    <span class="text-black">Customer Service</span>
                    <p class="text-xs">Chat kamu bakal dijawab < 10 menit </p>
                </li>
            </ul>
    </div>
</section>
{{-- End Tes --}}

<!-- about -->
<section id="about" bg-b class="pt-30 pb-32 mx-52 mt-52">
    <div class="container mx-auto w-full px-4 lg:w-3/4 border rounded-lg shadow-lg">
        <div class="flex justify-between items-center">
            <div class ="flex flex-col px-25 mb-48 lg:w-3/5 p-5">
                <h2 class="font-bold text-black text-center text-3xl mb-3 lg:w-3/4 lg:mb-12 ">Tentang Kami</h2>     
                <blockquote class="text-center  italic font-semibold text-black-500 dark:text-white">
                    <p>"Di UpGadget kamu bisa beli gadget dengan kualitas terjamin.Setiap produk sudah melewati prosedur pengecekan secara detail dan menyeluruh. Dengan standar yang sangat jelas."</p>
                </blockquote>
            </div>
            <div class="w-3/5">
                <img src="/src/img/cewe.png" alt="" >
            </div>
        </div>
    </div>
    <div>
        <div class="flex justify-between items-center">
            <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
            <blockquote class="text-center  italic font-semibold text-gray-600 dark:text-white">
                <p>"Di UpGadget kamu bisa beli gadget dengan kualitas terjamin.Setiap produk sudah melewati prosedur pengecekan secara detail dan menyeluruh. Dengan standar yang sangat jelas."</p>
            </blockquote>
        </div>
    </div>

</section>


<!-- review -->
<section>
    <div class="container mx-auto py-12 pt-15 mt-24">
        <h3 class="text-center text-xl font-semibold ">Review Dari Customer </h3>
        <div class="flex gap-3 mt-5">
            <div class="mx-auto p-10 rounded-xl shadow-lg">
                <div class="flex">
                    <div class="w-1/4">
                        <img class ="w-10" src="/src/img/testimoni1.png" alt>
                    </div>
                    <h4 class="text-left w-3/4 font-bold">Freya</h4>
                </div>
                <p class="mt-2">
                    Layanannya sangat oke dan rekomen untuk membeli handphone
                </p>
            </div>
            <div class="mx-auto p-10 rounded-xl shadow-lg">
                <div class="flex">
                    <div class="w-1/4">
                        <img class ="w-10" src="/src/img/testimoni2.png" alt>
                    </div>
                    <h4 class="w-3/4 font-bold">Ucup</h4>
                </div>
                <p class="mt-2">
                    Selama pemakaian 3 bulan ini aman-aman saja tidak ada kendala apapun.
                </p>
            </div>
            <div class="mx-auto p-10 rounded-xl shadow-lg">
                <div class="flex">
                    <div class="w-1/4">
                        <img class ="w-10" src="/src/img/testimoni3.png" alt>
                    </div>
                    <h4 class="w-3/4 font-bold">Susi</h4>
                </div>
                <p class="mt-2">
                    harga yang ditawar cukup terjangkau dan service cukup memuaskan.
                </p>
            </div>

        </div>
    </div>
</section>


</div>
</section>


</main>
@endsection


