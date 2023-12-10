<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/feather-icons"></script>

@extends('dashboard.layouts.main')

@section('container')
{{-- Main --}}
<div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

{{-- User Table --}}
<div class="relative overflow-x-auto">
    <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4  p-4 bg-black dark:bg-gray-900">
        {{-- h1 user table --}}
        <div>
            <h1 class="text-xl font-extrabold text-gray-900 dark:text-white lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">USER</span> Table</h1>
        </div>
        </div>
    </div>
    <div class="relative overflow-x-auto">
        <div class="flex items-center justify-between flex-column  md:flex-row flex-wrap px-6 py-2 bg-black dark:bg-gray-900">
            {{-- Button Tambah --}}
        <button class="relative inline-flex p-0.5 mb-2 me-4 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Tambah Data
                </span>
                </button>
        {{-- Search --}}
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative items-center">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search-users" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
        </div>
    </div>
    {{-- Table --}}
    <table class="w-full text-sm text-gray-500 dark:text-gray-400">
        <thead class=" text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="w-2 px-6 py-3">
                    No
                </th>
                <th scope="col" class="w-8 px-14 py-3">
                    Email
                </th>
                <th scope="col" class="w-8 px-14 py-3">
                    Nama
                </th>
                <th scope="col" class="w-8 px-14 py-3">
                    Password
                </th>
                <th scope="col" class="w-5 px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-3 text-center">
                    <div class="text-base font-semibold item-center">{{ $loop->iteration }}</div>
                </td>
                <td class="px-14 py-4 text-center">
                    <div class="text-base font-semibold">{{ $user->email }}</div>
                </td>
                <td class="px-14 py-4 text-center">
                    {{ $user->name }}
                </td>
                <td class="px-14 py-4 text-center">
                    {{ $user->password }}
                </td>
                <td class="px-12 py-4 text-center" role="group">
                    <!-- Modal toggle -->
                    <a href=""><span data-feather="edit"></span></a>
                    <a href=""><span data-feather="trash-2"></span></a>
                </td>
            </tr>
                
            @endforeach
    </table>
{{-- End User Table --}}
</div>
</div>
  {{-- End Content Main --}}

</div>
<script>
    feather.replace();
</script>
@endsection