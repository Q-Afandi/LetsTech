@extends('layouts.main')

@section('container')


<section class="pt-40 pb-20">
    {{-- Kategori --}}
    <div class="container px-10 mx-auto">
        <div class="mb-5 text-center">
            <h1 class="w-full text-4xl text-black font-semibold">Merk Handphone</h1>
        </div>
        {{-- Card --}}
        <div class="flex gap-5 justify-center"> {{-- Menambahkan class justify-center untuk mengatur item di tengah --}}
            @foreach ($kategoris as $kategori)
                <div class="w-24 h-24 max-w-sm rounded-2xl shadow-2xl  bg-white  ">
                    <form action="/product" enctype="multipart/form-data">
                        <input type="hidden" name="kategori" value="{{ $kategori->name }}">
                        <button type="submit">
                            <img class="p-2 w-56 mx-auto" src="{{ asset('storage/' . $kategori->gambar) }}"
                                alt="kategori image" />
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
        {{-- End Card --}}
    </div>
</section>


{{-- section product --}}
{{-- section product --}}
<section id="product" class="pt-20 pb-80 mx-4 sm:mx-10 md:mx-20 lg:mx-32 xl:mx-40">
    {{-- Card --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 justify-center">
        @foreach ($products as $product)
            <div class="w-56 max-w-sm rounded-2xl shadow-2xl border bg-gray-50 border-gray-700">
                <a href="#">
                    <img class="p-2 w-56 mx-auto" src="{{ asset('storage/' . $product->gambar) }}"
                        alt="product image" />
                </a>
                <div class="p-2 w-56 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">{{ $product->nama_product }}</h5>
                    </a>
                    <div class="mt-2">
                        <span class="text-3xl font-bold text-gray-900 ">Rp. {{ $product->harga }}</span>
                    </div>
                    <div class="mt-5">
                        <a href="https://api.whatsapp.com/send/?phone=+62877-5240-6734&text=saya mau pesan"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- End Card --}}
</section>


@endsection




