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
  <div class="container-fluid overflow-auto bg-">
    @include('dashboard.layouts.header')
    <div class="sm:ml-60 mx-1 ">
      @include('dashboard.layouts.sidebar')
         <main class=" my-24">   
          @yield('container')
            
         </main>
    </div>     
  </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();
</script>
</html>