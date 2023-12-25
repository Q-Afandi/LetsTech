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
<section id="about" class="pt-30 pb-32 mx-52 mt-52">
        <div class="container px-10">
            <div class="flex flex-wrap text-center items-center justify-center">
                <div class ="flex flex-col px-25 mb-26 lg:w-3/5 p-5">
                    <h2 class="text-center font-bold text-black text-3xl mb-4 lg:w-3/4 lg:mb-12 ">Tentang Kami</h2>
                    <p class="text-center  text-black text-35 mb-4 lg:w-3/4 lg:mb-12">Di UpGadget kamu bisa beli gadget dengan kualitas terjamin.Setiap produk sudah melewati prosedur pengecekan secara detail dan menyeluruh. Dengan standar yang sangat jelas.</p>
                    
                </div>
                <section class="md:mb-4 container px-4 md:px-8 lg:px-16 mx-auto py-5 flex flex-wrap items-center">
                <div class="w-full lg:w-1/2 flex mb-4">
                    <img src="/src/img/cewe.png" class="h-30 md:h-40 lg:h-auto w-auto" alt>
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

<!-- review -->
<section class="justify-items-center w-fit lg:mx-4 mt-7 flex flex-auto max-w pt-2 items-center justify-between">
    <div class="flex flex-col justify-items-center mb-5 text-center">
        <h2 class="mb-2 font-bold">Berbagai Cerita Dari #ReviewerGaget</h2>
    </div>
    <div class="max-w-xl mx-auto">
        <div class="" dir="ltr">
        {{-- <div id="divHomeTestimonialSectionNext" class="bg-gray-200 hover:bg-primary absolute w-8 h-8 rounded-full items-center justify-center cursor-pointer shadow-lg group transition-colors">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="group-hover:text-white rotate-180 hidden">
                <path d="M15 20.67C14.81 20.67 14.62 20.6 14.47 20.45L7.95003 13.93C6.89003 12.87 6.89003 11.13 7.95003 10.07L14.47 3.55002C14.76 3.26002 15.24 3.26002 15.53 3.55002C15.82 3.84002 15.82 4.32002 15.53 4.61002L9.01003 11.13C8.53003 11.61 8.53003 12.39 9.01003 12.87L15.53 19.39C15.82 19.68 15.82 20.16 15.53 20.45C15.38 20.59 15.19 20.67 15 20.67Z" fill="currentColor"></path>
            </svg>
        </div> --}}
        </div>
    </div>
</section>







<!-- testimoni -->



{{-- Product --}}
<section id="product" class="mb-10 md:mb-16 container px-4 md:px-8 lg:px lg:px-16 mx-auto">
  <div class="inline-block w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
      <a href="#">
          <img class="p-8 rounded-t-lg w-60" src="/src/img/hp2.jpg" alt="product image" />
      </a>
      <div class="px-5 pb-5">
          <a href="#">
              <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">iPhone 13</h5>
          </a>
          <div class="flex items-center mt-2.5 mb-5">
              <div class="flex items-center space-x-1 rtl:space-x-reverse">
                  <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                  <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
              </div>
              <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
          </div>
          <div class="flex items-center justify-between">
              <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
              <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
          </div>
      </div>
  </div>

  <div class="inline-block w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
      <a href="#">
          <img class="p-8 rounded-t-lg w-60" src="/src/img/hp3.jpg" alt="product image" />
      </a>
      <div class="px-5 pb-5">
          <a href="#">
              <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">iPhone 13 Pro Max</h5>
          </a>
          <div class="flex items-center mt-2.5 mb-5">
              <div class="flex items-center space-x-1 rtl:space-x-reverse">
                  <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                  <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
              </div>
              <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
          </div>
          <div class="flex items-center justify-between">
              <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
              <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
          </div>
      </div>
  </div>

  <div class="inline-block w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
      <a href="#">
          <img class="p-8 rounded-t-lg w-60" src="/src/img/hp3.jpg" alt="product image" />
      </a>
      <div class="px-5 pb-5">
          <a href="#">
              <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">iPhone 13 Pro Max</h5>
          </a>
          <div class="flex items-center mt-2.5 mb-5">
              <div class="flex items-center space-x-1 rtl:space-x-reverse">
                  <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                  <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                      <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
              </div>
              <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
          </div>
          <div class="flex items-center justify-between">
              <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
              <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
          </div>
      </div>
</div>
</section>





</main>
@endsection


