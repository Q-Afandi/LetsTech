
@extends('dashboard.layouts.main')

@section('container')
{{-- Main --}}
<div class="p-4 border-2 border-dashed rounded-lg border-gray-700 mt-20">

{{-- User Table --}}
<div class="relative overflow-x-auto">
    <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4  p-4 bg-gray-900">
        {{-- h1 user table --}}
        <div>
            <h1 class="text-xl font-extrabold text-white lg:text-4xl">User Table</h1>
        </div>
        </div>
    </div>
    <div class="relative overflow-x-auto">
        <div class="flex items-center justify-between flex-column  md:flex-row flex-wrap px-6 py-2 bg-gray-900">
            {{-- Button Tambah --}}
        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="relative inline-flex p-0.5 mb-2 me-4 overflow-hidden text-sm font-medium rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 text-white focus:ring-4 focus:outline-none focus:ring-green-200 ">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Tambah Data
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
                      TAMBAH USER
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form class="max-w-md mx-auto bg-gray-9" action="/dashboard/user/create" method="post">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                    <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="name" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                    <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                    <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="alamat" name="alamat" id="alamat" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                    <label for="alamat" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                      <input type="tel"  name="phone" id="phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                      <label for="phone" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No Handphone</label>
                </div>
            
              <!-- Modal footer -->
              <div class="flex justify-end p-4 md:p-5 border-t  rounded-b border-gray-600">
                <button  type="submit" class="text-white bg-blue-700 mr-10 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>  
              </div>
            </form>
          </div>
      </div>
  </div>
  {{-- modal tutup --}}


        {{-- Search --}}
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative items-center">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-50 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search-users" class="block pt-2 ps-10 text-sm  text-white border rounded-lg w-80 bg-gray-500 focus:ring-blue-500 " placeholder="Cari user">
        </div>
    </div>
    {{-- Table --}}
    <table class="w-full text-sm  text-gray-500  ">
        <thead class=" text-gray-50 uppercase bg-gray-900 ">
            <tr>
                <th scope="col" class="w-2 px-6 py-3">
                    No
                </th>
                <th scope="col" class="w-8 px-14 py-3">
                    Foto
                </th>
                <th scope="col" class="w-8 px-14 py-3">
                    Email
                </th>
                <th scope="col" class="w-8 px-14 py-3">
                    Nama
                </th>
                
                <th scope="col" class="w-5 px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="border-b text-gray-50 bg-gray-800">
                <td class="px-6 py-3 text-center">
                    <div class="text-base font-semibold item-center">{{ $loop->iteration }}</div>
                </td>
                <td class="px-14 py-4 text-center">
                    @if ($user->image)
                    <img src="{{ asset('storage/' . $user->gambar) }}" class="rounded-2xl w-16 h-16">
                @else
                    <img class="w-10 h-10 rounded-full" src="/src/img/no-photo.jpeg">
               @endif
                </td>
                <td class="px-14 py-4 text-center">
                    <div class="text-base font-semibold">{{ $user->email }}</div>
                </td>
                <td class="px-14 py-4 text-center">
                    {{ $user->name }}
                </td>
                
                <td class="flex justify-center px-10 py-6">
                    <!-- Modal toggle -->
                    <a href="/dashboard/user/{{ $user->id }}/edit"><span data-feather="edit"></span></a>
                    <form action="/dashboard/user/{{ $user->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button><span data-feather="trash-2"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
    </table>

    
{{-- End User Table --}}
</div>
</div>
  {{-- End Content Main --}}

</div>

@endsection
