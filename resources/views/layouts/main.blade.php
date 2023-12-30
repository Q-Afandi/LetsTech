<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- styles -->
    <link href="{{ asset('asset/css/owl.carousel.min')}}" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>UpGadget</title>
</head>
<body>
    @include('partials.navbar')
    <div>
        @yield('container')
        
    </div>
    @include('partials.footer')

</body>
<!-- Scripts -->
<script src="{{  asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{  asset('assets/js/mixitup.min.js')}}"></script>
<script src="{{  asset('assets/js/main.js')}}"></script>
<script src="{{ asset('asset/css/owl.carousel.min')}}" ></script>

<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
    })
    
</script>
</html>