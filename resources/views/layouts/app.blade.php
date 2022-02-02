<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="" />
    <meta name="robots" content="index" />    
    <meta name="description" content="@yield('description')" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/sdpl-assets/images/logo/sdpl-favicon-icon.jpg')}}" />
    <title>@yield('page_title')</title>

    <link rel="stylesheet" type="text/css" href="{{asset('public/sdpl-assets/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('public/sdpl-assets/css/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/sdpl-assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/sdpl-assets/font/css/all.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('public/sdpl-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/sdpl-assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/sdpl-assets/css/loader.min.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('public/sdpl-assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/sdpl-assets/css/flaticon.min.css')}}">
    <link rel="stylesheet" class="skin" type="text/css" href="{{asset('public/sdpl-assets/css/skin-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/sdpl-assets/css/switcher.css')}}"> 
    
<!-- CSS only -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}

    <link rel="stylesheet" type="text/css" href="{{asset('public/sdpl-assets/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/sdpl-assets/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('public/sdpl-assets/css/custom_style.css')}}" >
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,800,800i,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Martel:200,300,400,600,700,800,900" rel="stylesheet">

    <script src="{{asset('public/sdpl-assets/js/jquery-1.12.4.min.js')}}"></script><!-- JQUERY.MIN JS -->
    <script src="{{asset('public/sdpl-assets/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{asset('public/sdpl-assets/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="{{asset('public/sdpl-assets/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
    <script src="{{asset('public/sdpl-assets/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('public/sdpl-assets/js/waypoints-sticky.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('public/sdpl-assets/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->

    <!-- <script  src="js/owl.carousel.min.js')}}"></script> -->
    <script src="{{asset('public/sdpl-assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/sdpl-assets/js/jquery.owl-filter.js')}}"></script>
    <script src="{{asset('public/sdpl-assets/js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   --> 
    <script src="{{asset('public/sdpl-assets/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{asset('public/sdpl-assets/js/shortcode.js')}}"></script><!-- SHORTCODE FUCTIONS  -->
    <script src="{{asset('public/sdpl-assets/js/switcher.js')}}"></script><!-- SHORTCODE FUCTIONS  -->
    <!-- REVOLUTION JS FILES -->

    <script src="{{asset('public/sdpl-assets/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('public/sdpl-assets/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
    <script src="{{asset('public/sdpl-assets/js/revolution-plugin.js')}}"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="{{asset('public/sdpl-assets/js/rev-script-1.js')}}"></script>

</head>
<body>

    <div class="page-wraper">

        <header class="site-header header-style-1 nav-wide">
            @include('layouts.header')
        </header>

        <div class="page-content">
            @yield('style')
            
            @yield('content')
                
            @yield('script')
        </div>

        <footer class="site-footer footer-large footer-light footer-wide">
            @include('layouts.footer')
        </footer>

        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    </div>
    {{-- <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="cssload-box-loading"></div>
        </div>
    </div> --}}
    <a href="{{ url('/dashboard') }}" class="float text-blue">
        Start Services <br> With <br> SDPL<small>web</small> 
    </a>

    {{-- <div class="bg-text"> <a href="#"> Start Services <br> With <br> SDPL<small>web</small> </a> </div> --}}

    
</body>
</html>
