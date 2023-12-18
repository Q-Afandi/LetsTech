@extends('layouts.main')

@section('container')
<main>
<!-- JumboTron-->
<section class="jumbotron jumbotron-fluid">
<div class="drop-shadow-sm bg-white mx-4 mt-4  rounded-2xl items-center justify-between p-0">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="drop-shadow-lg relative h-56 overflow-hidden rounded-2xl md:h-96" >
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/src/img/jt1.jpg" class="absolute block w-4/5 rounded-2xl lg:rounded-2xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/src/img/jt2.jpg" class="absolute block w-4/5 rounded-2xl lg:rounded-2xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/src/img/jt3.jpg" class="absolute block w-4/5 rounded-2xl lg:rounded-2xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
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
<section>
    <div class="container bg-white">
        <div class="drop-shadow-2xl mx-1 lg:mx-36 mt-14 flex flex-1 max-w-xl lg:max-h-80 p-2 pt-2 items-center justify-between">
            <ul class="font-medium text-gray-500 flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-5 rtl:space-x-reverse md:mt-0 md:border-0">
                <li class="flex w-40">
                    <img src="/src/img/logo.png" class="h-20" alt="">
                <li>
                    <span class="text-black">Garansi 6 Bulan</span>
                    <p class="text-xs">Kerusakan gadget dijamin oleh UpGadget</p>
                </li>
                </li>
                <li class="flex w-40">
                    <img src="/src/img/logo.png" class="h-20" alt="">
                </li>
                <li>
                    <span class="text-black">Fungsi Normal</span>
                    <p class="text-xs">Kerusakan gadget dijamin oleh UpGadget</p>
                </li>
                <li class="flex w-40">
                    <img src="/src/img/logo.png" class="h-20" alt="">
                </li>
                <li>
                    <span class="text-black">Coba Dulu</span>
                    <p class="text-xs">Bisa ditukar jika tidak berfungsi normal</p>
                </li>
                <li class="flex w-40">
                    <img src="/src/img/logo.png" class="h-20" alt="">
                </li>
                <li>
                    <span class="text-black">Produk Original</span>
                    <p class="text-xs">Semua gadget telah melalui QC</p>
                </li>
                <li class="flex w-40">
                    <img src="/src/img/logo.png" class="h-20" alt="">
                </li>
                <li>
                    <span class="text-black">Customer Service</span>
                    <p class="text-xs">Chat kamu bakal dijawab < 10 menit </p>
                </li>
            </ul>
        </div>
    </div>
</section>
{{-- End Tes --}}


<!-- about -->
<section id="about" class="pt-30 pb-32 mx-52 mt-52">
        <div class="container px-10">
            <div class="flex flex-wrap text-center items-center justify-center   ">
                
                <div class ="flex flex-col px-25 mb-30 lg:w-3/5 p-5">
                    <h2 class="text-center font-bold text-black text-3xl mb-4 lg:w-3/4 lg:mb-12 ">Tentang Kami</h2>
                    <p class="text-center  text-black text-35 mb-4 lg:w-3/4 lg:mb-12">Di UpGadget kamu bisa beli gadget dengan kualitas terjamin.Setiap produk sudah melewati prosedur pengecekan secara detail dan menyeluruh. Dengan standar yang sangat jelas.</p>
                    
                </div>
                
                <section class="md:mb-4 container px-4 md:px-8 lg:px-16 mx-auto py-5 flex flex-wrap items-center">
                <div class="w-full lg:w-1/2 flex mb-4">
                    <img src="/src/img/cewe.png" class="h-35 md:h-50 lg:h-auto w-auto" alt>
                </div>
                <div class="w-full px-4 lg:w-1/2 border rounded-lg shadow-lg text-left">
                    <h3 class="font-bold text-primary text-20 mb-3">Cerita Kami</h3>
                    <h5 class="font-bold text-10 mb-3">Dimulai pada tahun 2021 dan telah berkembang menjadi mitra yang terpercaya dalam pasar elektronik di Indonesia.</h5>
                    <p clas=" font-medium text-10 mb-3">Perjalanan kami telah didorong oleh komitmen kami yang teguh terhadap kepuasan pelanggan. Tujuan kami sebagai sebuah platform adalah untuk membantu Anda menjual dan membeli gadget yang tepat dengan harga yang sesuai dan mendapatkan pengalaman terbaik. Ambisi kami pun menjadi lebih tinggi ketika kami menjadi bagian dari Carousell Group pada tahun 2022.</p>

                </div>
                </section>
            </div>
        </div>
</section>



</main>
@endsection


