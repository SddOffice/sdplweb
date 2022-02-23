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
                    <a href="{{url('/login')}}" class="h2"><b>SDPL</b>Web</a>
                </div>
                <div class="card-body">
                    @if(session()->has('msg'))
                        <div class="alert alert-info" role="alert">
                            {{session('msg')}} 
                        </div>
                    @endif    
                    <form action="{{url('login-auth')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="mobile_no" class="form-control form-control-sm" placeholder="Mobile Number">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-mobile"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control form-control-sm" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary btn-sm">Login</button>
                            </div>
                            <div class="col-6">
                                <p class="mb-1">
                                    <a href="{{url('/registration')}}" style="margin-left: 50%;">Registration</a>
                                </p>
                            </div>
                        </div>
                        {{-- @if(session()->has('errors'))
                            <div class="alert alert-danger mt-2" role="alert">
                                {{session('errors')}} 
                            </div>
                        @endif --}}
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
