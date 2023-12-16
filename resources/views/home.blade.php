@extends('layouts.main')

@section('container')
<main>
<!-- JumboTron-->
<section class="jumbotron jumbotron-fluid">
<div class="drop-shadow-2xl bg-white mx-4 lg:mx-52 mt-10 rounded-2xl flex flex-1 max-w-full lg:max-h-100 items-center justify-between p-0" aria-label="Global">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="drop-shadow-lg relative h-56 overflow-hidden rounded-2xl md:h-80" >
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/src/img/jt1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/src/img/jt2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/src/img/jt3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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


    <!-- searching -->
    <section class="bg-white py-10">
<form>
    <div class=" drop-shadow-lg bg-white py-2  mx-4 lg:mx-64 mt-10 rounded-2xl  lg:max-h-100 items-center justify-between p-4 " aria-label="Global">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari barang" required>
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
    </div>
</form>
    </section>
<hr class="my-20 border-t-4" />

<!-- about -->
<section id="about" class="pt-30 pb-32 mx-52">
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


