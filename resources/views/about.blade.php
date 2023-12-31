@extends('layouts.main')

@section('container')


<!-- about -->
<section id="about" class="pt-40 pb-20 mx-40">
    <div class="container mx-auto w-full px-4 lg:w-3/4 border rounded-lg shadow-lg">
        <div class="xl:flex xl:justify-between xl:items-center">
            <div class ="2xl:flex flex-col px-25 mb-48 lg:w-3/5 p-5">
                <h2 class="font-bold text-black sm:text-center text-3xl mb-3 lg:w-3/4 lg:mb-12 ">Tentang Kami</h2>     
                <blockquote class="xl:text-center  italic font-semibold text-black-500 ">
                    <p>"Di UpGadget kamu bisa beli gadget dengan kualitas terjamin.Setiap produk sudah melewati prosedur pengecekan secara detail dan menyeluruh. Dengan standar yang sangat jelas."</p>
                </blockquote>
            </div>
            <div class="w-3/5">
                <img src="/src/img/cewe.png" alt="" >
            </div>
        </div>
    </div>
    <div>
        <div class="2xl:flex sm:justify-between sm:items-center">
            <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
            <blockquote class="sm:text-center  italic font-semibold text-gray-600 ">
                <p>"Di UpGadget kamu bisa beli gadget dengan kualitas terjamin.Setiap produk sudah melewati prosedur pengecekan secara detail dan menyeluruh. Dengan standar yang sangat jelas."</p>
            </blockquote>
        </div>
    </div>
</section>

{{-- about us --}}
<section class="pt-10 pb-20 ">
    {{-- Kategori --}}
    <div class="container mx-auto">
        <div class="mb-5 text-center">
            <h1 class="w-full text-4xl text-black font-semibold">UpGadget</h1>
            <h1 class="text-xl text-black font-semibold">Team</h1>
            <h1 class="text-lg text-black font-semibold">
                Aplikasi berbasis website ini diajukan untuk memenuhi tugas besar mata kuliah Praktikum Web
            </h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 ">
            {{-- Afandi --}}
            <div class="flex flex-col ml-96 items-center px-1">
                <div class="rounded-2xl shadow-2xl border-blue-950 border-8 overflow-hidden">
                    <form enctype="multipart/form-data">
                        <input type="hidden" name="kategori">
                        <img class="w-56 h-56 object-cover rounded-lg" src="/src/img/afandi-1.jpg" alt="kategori image"/>
                    </form>
                </div>
                <div class="mt-5 text-center">
                    <h1 class="text-xl text-black font-semibold">Mohamad Afandi Hidayat</h1>
                    <p class="mt-2 text-base text-gray-500">Project Manager</p>
                    <h1 class="text-lg text-black font-semibold">Full-Stack Developer</h1>
                </div>
            </div>
            {{-- End Card --}}
            {{-- Revina --}}
            <div class="flex flex-col mr-96 items-center">
                <div class="rounded-2xl shadow-2xl border-blue-950 border-8 overflow-hidden">
                    <form enctype="multipart/form-data">
                        <input type="hidden" name="kategori">
                        <img class="w-56 h-56 object-cover rounded-lg" src="/src/img/revina-1.jpg" alt="kategori image"/>
                    </form>
                </div>
                <div class="mt-5 text-center">
                    <h1 class="text-xl text-black font-semibold">Revina Bella Trisna</h1>
                    <p class="mt-2 text-base text-gray-500">Member</p>
                    <h1 class="text-lg text-black font-semibold">Front-End</h1>
                </div>
            </div>
            {{-- End Card --}}
        </div>
    </div>
</section>



@endsection