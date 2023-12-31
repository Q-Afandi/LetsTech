@extends('layouts.main')

@section('container')

<!-- review -->
<section>
    <div class="container mx-auto py-12 pt-15 mt-24">
        <h3 class="xl:text-center text-xl font-semibold ">Review Dari Customer </h3>
        <div class="xl:flex gap-3 mt-5">
            <div class="mx-auto p-10 rounded-xl shadow-lg">
                <div class="xl:flex">
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
                <div class="xl:flex">
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
                <div class="xl:flex">
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
    </div>
</section>

@endsection
