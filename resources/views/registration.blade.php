<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SDPL Web</title>
    
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{asset('public/sdpl-assets/css/bootstrap.min.5.1.css')}}" >
        <link rel="stylesheet" href="{{asset('public/sdpl-assets/user/css/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/sdpl-assets/user/css/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/sdpl-assets/user/css/adminlte.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/sdpl-assets/css/login.style.css')}}">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="{{url('/registration')}}" class="h2"><b>SDPL </b>Web <b> Registration </b> </a> <br>
                </div>
                <div class="card-body">

                    @if(session()->has('msg'))
                        <div class="alert alert-danger mt-2" role="alert">
                            {{session('msg')}}
                        </div>
                    @endif
                    
                    <form action="{{url('user-registration')}}" method="post">
                        @csrf
                        {{-- <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control form-control-sm" placeholder="Name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-at"></span>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control form-control-sm" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div> --}}
                        <div class="input-group mb-3">
                            <input type="text" name="mobile_no" class="form-control form-control-sm" placeholder="Mobile No">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone-square"></span>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control form-control-sm" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary btn-sm">Register</button>
                            </div>
                            <div class="col-6">
                                <p class="mb-1">
                                    <a href="#">I forgot my password</a>
                                </p>
                            </div>
                        </div>
                        {{-- @if(session()->has('error'))
                            <div class="alert alert-danger mt-2" role="alert">
                                {{session('error')}} 
                            </div>
                        @endif --}}
                    </form>
            
                </div>
            </div>
        </div>
    </body>
</html>
