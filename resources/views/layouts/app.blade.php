<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  {{-- lllllllll --}}
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


 
  <!-- Vendor CSS Files -->
  {{-- <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet"> --}}
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('profile/css/lib/themify-icons.css')}}" rel="stylesheet">

  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="profile/css/style.css">
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  

  {{-- <link rel="stylesheet" href="/admin/css/sb-admin-2.css"> --}}


  <div>
    @yield('link')
  </div>

</head>
<body>
    <div id="app">
        
        <header>
            @include('layouts.header')
        </header>

        <main class="py-4  content">
            @yield('content')
        </main>
        
        <div>
            @include('/layouts.footer')
        </div>




            
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        {{-- <script src="{{asset('assets/vendor/aos/aos.js')}}"></script> --}}
        {{-- <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        {{-- <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script> --}}
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        {{-- <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script> --}}

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        
        <script src="{{ asset('js/main.js') }}" ></script>
        

</div>
@yield('script')
</body>
</html>
