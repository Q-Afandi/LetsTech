<script src="https://cdn.tailwindcss.com"></script>



<div class="container-fluid">
    @include('dashboard.layouts.header')
    {{-- Main Content --}}
  <div class="p-4 sm:ml-64">
    @include('dashboard.layouts.sidebar')
       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('container')

       </main>

 </div>
</div>
{{-- End Content Main --}}