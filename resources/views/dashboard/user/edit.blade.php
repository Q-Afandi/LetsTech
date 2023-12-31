@extends('dashboard.layouts.main')

@section('container')

<div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14 bg-black dark:bg-gray-900">
    <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4  p-4 bg-black dark:bg-gray-900">
        {{-- h1 user table --}}
        <div>
            <h1 class="text-xl font-extrabold text-gray-900 dark:text-white lg:text-6xl">Edit User</h1>
        </div>
        </div>
        
        <a href="/dashboard/user"><button type="button" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Kembali</button></a>
        <form class="max-w-md mx-auto bg-gray-9" action="/dashboard/user/{{ $user->id }}/update" method="post">
            @csrf
            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="email" value="{{ $user->email }}" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-50 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="name" name="name" value="{{ $user->name }}" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-50 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="password" value="{{ $user->password }}" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-50 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="alamat" name="alamat" value="{{ $user->alamat }}" id="alamat" class="block py-2.5 px-0 w-full text-sm text-gray-50 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                <label for="alamat" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                  <input type="tel"  name="handphone" value="{{ $user->handphone }}" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-50 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
                  <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No Handphone</label>
            </div>
        
          <!-- Modal footer -->
          <div class="flex justify-end p-4 md:p-5 border-t  rounded-b border-gray-600">
            <button  type="submit" class="text-white bg-blue-700 mr-10 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>  
          </div>
        </form>
    </div>

  
</div>

@endsection