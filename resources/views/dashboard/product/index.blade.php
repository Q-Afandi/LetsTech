
@extends('dashboard.layouts.main')

@section('container')
{{-- Main --}}
<div class="p-4 border-2 border-dashed rounded-lg border-gray-700 mt-20">

{{-- User Table --}}
<div class="relative overflow-x-auto">
    <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4  p-4 bg-gray-900">
        {{-- h1 Product table --}}
        <div>
            <h1 class="text-xl font-extrabold text-white lg:text-4xl">Product Table</h1>
        </div>
        </div>
    </div>
    <div class="relative overflow-x-auto">
        <div class="flex items-center flex-column  md:flex-row flex-wrap px-6 py-2 bg-gray-900">
            {{-- Button Tambah --}}
        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="relative inline-flex p-0.5 mb-2 me-4 overflow-hidden text-sm font-medium rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 text-white focus:ring-4 focus:outline-none focus:ring-green-200 ">
            <span class="flex flex-row px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <span data-feather="plus"></span>
                Tambah Data
            </span>
        </button>
        {{-- button PDF --}}
        <button onclick="window.location.href='/dashboard/product/cetak'" class="relative inline-flex p-0.5 mb-2 me-4 overflow-hidden text-sm font-medium rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 text-white focus:ring-4 focus:outline-none focus:ring-green-200 ">
            <span class="flex flex-row px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <span data-feather="printer"></span>
                Print To PDF
            </span>
        </button>

  <!-- Main modal -->
  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden shadow-xl overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-gray-50">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600 mb-5">
                <h3 class="text-xl font-semibold text-gray-900 ">
                    TAMBAH PRODUCT
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="max-w-md mx-auto bg-gray-9" action="/dashboard/product/create" method="post">
              @csrf
              <div class="relative z-0 w-full mb-5 group">
                  <input type="text" name="nama_product" id="nama_product" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                  <label for="nama_product" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Product</label>
              </div>
              <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="slug" id="slug" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                <label for="slug" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Slug</label>
            </div>
              <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="harga" id="harga" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2  appearance-none  border-gray-600  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="harga" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Harga</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="stok" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2  appearance-none  border-gray-600  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="stok" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Stok</label>
                </div>
              </div>
              <div class="col-span-2 sm:col-span-1 mb-5">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                <select id="category" name="kategori_id" class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  placeholder-gray-400 ">
                    <option selected="">Select category</option>
                    <option value="1">Apple</option>
                    <option value="2">Redmi</option>
                    <option value="3">Oppo</option>
                    <option value="4">Samsung</option>
                </select>
            </div>
              <div class="relative z-0 w-full mb-5 group">
                  <input type="textarea" name="deskripsi" id="deskripsi" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                  <label for="deskripsi" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi</label>
              </div>
              <div class="relative z-0 w-full mb-5 group">
                    <input type="text"  name="gambar" id="gambar" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                    <label for="gambar" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Gambar</label>
              </div>
          
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-600 rounded-b mt-5">
              <button  type="submit" class="text-white bg-blue-700 mr-10 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>  
            </div>
          </form>
        </div>
    </div>
</div>
{{-- modal tutup --}}

  <label for="table-search" class="sr-only">Search</label>
        <div class="relative items-center">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-50 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search-users" class="block pt-2 ps-10 text-sm  text-white border rounded-lg w-80 bg-gray-500 focus:ring-blue-500 " placeholder="Search for users">
        </div>
    </div>
<div class="w-full"> 
            {{-- Table --}}
        <table class="w-full text-sm  text-gray-500  ">
            <thead class=" text-gray-50 uppercase bg-gray-900 ">
            <tr>
                <th scope="col" class="w-2 px-6 py-3">
                    No
                </th>
                
                <th scope="col" class="w-8 px-14 py-3">
                    Nama Product
                </th>
                <th scope="col" class="w-8 px-14 py-3">
                    Kategori
                </th>  
                <th scope="col" class="w-8 px-14 py-3">
                    Harga
                </th>
                <th scope="col" class="w-8 px-14 py-3">
                    Jumlah
                </th>    
                             
                <th scope="col" class="w-5 px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr class="border-b text-gray-50 bg-gray-800">
                <td class="px-6 py-3 text-center">
                    <div class="text-base font-semibold item-center">{{ $loop->iteration }}</div>
                </td>
                <td class="px-14 py-4 text-center">
                    {{ $product->nama_product }}
                </td>
                <td class="px-12 py-4 text-center">
                    {{ $product->kategori->name }}
                </td>
                <td class="px-12 py-4 text-center">
                    Rp. {{ $product->harga }}
                </td>
                <td class="px-12 py-4 text-center">
                    {{ $product->stok }}
                </td>
                <td class="flex justify-center px-10 py-6">
                    <!-- Modal toggle -->
                    <a href="/dashboard/product/{{ $product->id }}/view"><span data-feather="eye"></span></a>
                    <a href="/dashboard/product/{{ $product->id }}/edit"><span data-feather="edit"></span></a>
                    <form action="/dashboard/product/{{ $product->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button><span data-feather="trash-2"></span></button>
                    </form>
                </td>
            </tr>
                
            @endforeach
            
        </table>
    </div>

    
{{-- End User Table --}}
</div>
</div>
  {{-- End Content Main --}}

</div>

@endsection
