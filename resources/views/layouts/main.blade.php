<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>UpGadget</title>
</head>
<body>
    @include('partials.navbar')
    <div>
        @yield('container')
    </div>
    


</body>
</html>