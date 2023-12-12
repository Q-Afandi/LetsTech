{{-- End Content Main --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   

    @vite(['./resources/css/app.css', './resources/js/app.js'])

    <title>UpGadget</title>
</head>
<body>
  <div class="container-fluid overflow-hidden">
    @include('dashboard.layouts.header')
    <div class="p-4 sm:ml-64">
      @include('dashboard.layouts.sidebar')
         <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-20">
              @yield('container')
            
         </main>


</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();
</script>
</html>