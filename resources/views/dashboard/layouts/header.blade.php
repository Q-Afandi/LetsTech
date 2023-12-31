
{{-- Navbar Admin --}}

<nav class="fixed top-0 z-50 w-full h-20   bg-primary ">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end mt-5">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm  rounded-lg sm:hidden  focus:outline-none focus:ring-2  text-gray-400 hover:bg-gray-700 focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a href="/" class="flex ms-2 md:me-24">
            <img src="/src/img/logo.png" class="h-8 me-3" alt="FlowBite Logo" />
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">UpGadget</span>
          </a>
        </div>
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
      </div>
    </div>
  </nav>
  {{-- End Navbar Admin --}}