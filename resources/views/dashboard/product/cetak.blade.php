@vite(['./resources/css/app.css', './resources/js/app.js'])



<div class="flex items-center flex-column md:flex-row flex-wrap space-y-4  p-4 bg-gray-50">
    {{-- h1 Product table --}}
    <a href="/dashboard/product" class="flex ms-2 md:me-24">
        <img src="/src/img/logo.png" class="h-8 me-3" alt="FlowBite Logo" />
        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-gray-900">UpGadget</span>
      </a>
    <div class="w-full text-center">
        <h1 class="text-xl font-extrabold text-gray-900 lg:text-4xl">Product Table</h1>
    </div>
    </div>
</div>
<div class="w-full"> 
<table class="w-full text-sm  text-gray-500  ">
    <thead class=" text-gray-900 uppercase bg-gray-50 ">
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
                     
        
    </tr>
</thead>
<tbody>
    @foreach ($products as $product)
    <tr class="border-b text-gray-900 bg-gray-50">
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
        
    </tr>
        
    @endforeach
    
</table>
</div>

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/feather-icons"></script>