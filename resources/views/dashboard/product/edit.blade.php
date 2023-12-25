@extends('dashboard.layouts.main')

@section('container')

<div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14 bg-black dark:bg-gray-900">
    <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4  p-4 bg-black dark:bg-gray-900">
        {{-- h1 user table --}}
        <div>
            <h1 class="text-xl font-extrabold text-gray-900 dark:text-white lg:text-6xl">Edit Product</h1>
        </div>
        </div>
        
        <a href="/dashboard/product"><button type="button" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Kembali</button></a>
        <form class="max-w-md mx-auto bg-gray-9" action="/dashboard/product/{{ $product->id }}/update" method="post">
            @csrf
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="nama_product" value="{{ $product->nama_product }}" id="nama_product" class="block py-2.5 px-0 w-full text-sm text-gray-50 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                <label for="nama_product" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Product</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
              <input type="text" name="slug" id="slug" value="{{ $product->slug }}" class="block py-2.5 px-0 w-full text-sm text-gray-50 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
              <label for="slug" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Slug</label>
          </div>
            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 w-full mb-5 group">
                  <input type="text" name="harga" id="harga" value="{{ $product->harga }}" class="block py-2.5 px-0 w-full text-sm text-gray-50 bg-transparent border-0 border-b-2  appearance-none  border-gray-600  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="harga" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Harga</label>
              </div>
              <div class="relative z-0 w-full mb-5 group">
                  <input type="text" name="stok" id="floating_last_name" value="{{ $product->stok }}" class="block py-2.5 px-0 w-full text-sm text-gray-50 bg-transparent border-0 border-b-2  appearance-none  border-gray-600  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="stok" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Stok</label>
              </div>
            </div>
            <div class="col-span-2 sm:col-span-1 mb-5">
              <label for="category" class="block mb-2 text-sm font-medium text-gray-50">Category</label>
              <select id="category" name="kategori_id" class="bg-gray-600 border border-gray-900 text-gray-50 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  placeholder-gray-400 ">
                  <option selected="">Select category</option>
                  <option value="1">Apple</option>
                  <option value="2">Redmi</option>
                  <option value="3">Oppo</option>
                  <option value="4">Samsung</option>
              </select>
          </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="textarea" name="deskripsi" id="deskripsi" value="{{ $product->deskripsi }}" class="block py-2.5 px-0 w-full text-sm text-gray-50 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                <label for="deskripsi" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                  <input type="text"  name="gambar" id="gambar" value="{{ $product->gambar }}" class="block py-2.5 px-0 w-full text-sm text-gray-50 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                  <label for="gambar" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Gambar</label>
            </div>
        
          <!-- Modal footer -->
          <div class="flex items-center p-4 md:p-5 border-t border-gray-600 rounded-b mt-5">
            <button  type="submit" class="text-white bg-blue-700 mr-10 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>  
          </div>
        </form>
    </div>

  
</div>
@endsection