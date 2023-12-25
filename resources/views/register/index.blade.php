<script src="https://cdn.tailwindcss.com"></script>

<section class="bg-gray-900 ">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-50">
          <img class="w-8 h-8 mr-2" src="/src/img/logo.png" alt="logo">
          Up Gadget  
      </a>
      <div class="w-full  rounded-lg bg-gray-800 shadow md:mt-0 sm:max-w-md xl:p-0">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-white">
                  Create and account
              </h1>
              <form class="space-y-4 md:space-y-6" action="/register" method="POST">
                  @csrf
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-white">Nama</label>
                    <input type="text" name="name" id="name" class=" border  text-gray-50 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400  focus:ring-blue-500 focus:border-blue-500 @error('name') is-invalid @enderror" placeholder="name">
                    @error('name')
                        <div class="invalid:border-red-600 text-red-600"> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                      <input type="text" name="email" id="email" class=" border  text-gray-50 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400  focus:ring-blue-500 focus:border-blue-500 @error('email') is-invalid @enderror" placeholder="name@gmail.com">
                      @error('email')
                      <div class="invalid:border-red-600 text-red-600"> 
                          {{ $message }}
                      </div>
                  @enderror
                    </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class=" border  text-gray-50 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400  focus:ring-blue-500 focus:border-blue-500 @error('password') is-invalid @enderror">
                      @error('password')
                      <div class="invalid:border-red-600 text-red-600"> 
                          {{ $message }}
                      </div>
                  @enderror
                    </div>                  
                  <button type="submit" class="mx-28 bg-gray-500 text-white bg-primary-600 hover:bg-primary-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create an account</button>
                  <p class="text-sm font-light text-gray-500 ">
                      Sudah punya akun? <a href="/login" class="font-medium text-primary-600 hover:underline ">Login Disini</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>