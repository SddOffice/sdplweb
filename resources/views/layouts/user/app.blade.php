
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('page_title')</title>

  <!-- CSS only -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="{{asset('public/sdpl-assets/user/css/bootstrap.min.css')}}" >
  <link rel="stylesheet" href="{{asset('public/sdpl-assets/user/css/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/sdpl-assets/user/css/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/sdpl-assets/user/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/sdpl-assets/user/css/colorbox.css')}}">
  <link rel="stylesheet" href="{{asset('public/sdpl-assets/user/css/style.css')}}">


  
  <!-- JS only -->
  <script src="{{asset('public/sdpl-assets/user/js/jquery-3.6.0.min.js')}}" ></script>
  <script src="{{asset('public/sdpl-assets/user/js/popper.min.js')}}" ></script>
  
  <script src="{{asset('public/sdpl-assets/user/js/bootstrap/js/bootstrap.bundle.min.js')}}" ></script>
  <script src="{{asset('public/sdpl-assets/user/js/bootstrap.bundle.min.js')}}" ></script>
  
  <script src="{{asset('public/sdpl-assets/user/js/jquery.colorbox.js')}}" ></script>
  <script src="{{asset('public/sdpl-assets/user/js/jquery.colorbox-min.js')}}" ></script>
  <script src="{{asset('public/sdpl-assets/user/js/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  {{-- <script src="{{asset('public/sdpl-assets/user/js/adminlte.js')}}"></script> --}}
  <script src="{{asset('public/sdpl-assets/user/js/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{asset('public/sdpl-assets/user/js/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('public/sdpl-assets/user/js/jquery-mapael/jquery.mapael.min.js')}}"></script>
  <script src="{{asset('public/sdpl-assets/user/js/jquery-mapael/maps/usa_states.min.js')}}"></script>
  <script src="{{asset('public/sdpl-assets/user/js/chart/Chart.min.js')}}"></script>

  <script src="{{asset('public/sdpl-assets/user/js/head.js')}}" ></script>
  <script src="{{asset('public/sdpl-assets/user/js/master.js')}}" ></script>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-dark">
    @include('layouts.user.header')
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    @include('layouts.user.sidenav')
  </aside>

  <div class="container-fluid">
    <div class="content-wrapper">
      <section class="content">
          @yield('style')
          @yield('content')
          @yield('script')
        </section>
    </div>
  </div>
  
  <aside class="control-sidebar control-sidebar-dark">
    @include('layouts.user.sidesetting')
    
  </aside>
  
    <footer class="main-footer">
        <strong>Copyright &copy; 2020-2021 <a href="https://intoloindia.com">Intoloindia.com</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.1.0
        </div>
    </footer>
</div>

</body>
</html>

