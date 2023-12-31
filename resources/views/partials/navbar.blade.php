<nav>
  <div class="absolute z-10 w-full flex flex-wrap items-center justify-between mx-auto p-4">
    <div class="bg-white drop-shadow-2xl  mx-3 lg:mx-64 mt-2  sm:rounded-none md:rounded-full flex flex-1 max-w-full lg:max-h-20 items-center justify-between p-2" aria-label="Global">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse ml-6">
          <img src="/src/img/logo.png" class="h-8" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-primary">Up Gadget</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto py-2" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-5 rtl:space-x-reverse md:mt-0 md:border-0 ">
          <li>
            <a href="/about" class="block py-2 px-3 mt-1.5 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Tentang Kami</a>
          </li>
          <li>
            <a href="/product" class="block py-2 px-3 mt-1.5 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Product</a>
          </li>
          <li>
            <a href="/review" class="block py-2 px-3 mt-1.5 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Review</a>
          </li>
          <li>
            <a href="testimoni" class="block py-2 px-3 mt-1.5 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 me-16">Testimoni</a>
          </li>
          @auth
          <div class="relative items-center">
            
            <div class="flex items-center ">
              <div>
                <button type="button" class="flex text-sm me-6 bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  @if (auth()->user()->image)
                    <img src="{{ asset('storage/' . auth()->user()->image) }}" class="rounded-2xl w-16 h-16">
                @else
                    <img class="w-10 h-10 rounded-full" src="/src/img/no-photo.jpeg">
               @endif
                </button>
              </div>
              <div class="absolute z-50 hidden my-4 text-base list-none  divide-y divide-gray-100 rounded shadow bg-primary dark:divide-gray-600" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                  <a href="/profile" class="text-sm text-white">
                    Profile
                  </a>
                  <p class="text-sm text-white" role="none">
                  {{ auth()->user()->name }}
                  </p>
                  <p class="text-sm font-medium text-gray-300" role="none">
                    {{ auth()->user()->email }}
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          
          </div>
              @else
              <li>
                <a href ="/login" <button type="button" class=" text-white bg-blue-900 hover:bg-blue-800 font-sm rounded-full text-sm px-8 py-2 text-center me-5 mb-2 ">Login</button></a>
              </li>
          @endauth
        </ul>

      </div>
    </div>
  </div>
</nav>
  