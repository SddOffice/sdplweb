@extends('layouts.user.app')
@section('page_title', 'User-Dashboard')

@section('style')
    {{-- <link rel="stylesheet" href="{{asset('public/sdpl-assets/user/css/slider.css')}}"> --}}
    <style>
      
    </style>
@endsection



@section('content')


    <div class="py-4">
        <div class="row">
            <div class="offset-md-2 col-md-8 ">
                <div class="row">
                    <div class="col-md-4 offset-md-2">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <a href="#"><img src="{{asset('public/sdpl-assets/images/bunglows/gopikashraddha.jpg')}}" class="img-thumbnail" alt="..."></a>
                                <a href="#"><h6 style="text-align: center; margin-top:10px;">Mix Use Buildings</h6></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <a href="#"><img src="{{asset('public/sdpl-assets/images/bunglows/krishnajyoti.jpg')}}" class="img-thumbnail" alt="..."></a>
                                <a href="#"><h6 style="text-align: center; margin-top:10px;">Mall/Multiplxer</h6></a>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <a href="#"><img src="{{asset('public/sdpl-assets/images/bunglows/legendcityhospital.jpg')}}" class="img-thumbnail" alt="..."></a>
                                <a href="#"><h6 style="text-align: center; margin-top:10px;">Hospitals</h6></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        {{-- <div class="card shadow-sm">
                            <div class="card-body">
                                <a href="#"><img src="{{asset('public/sdpl-assets/images/bunglows/bungalowrakeshagrawal.jpg')}}" class="img-thumbnail" alt="..."></a>
                                <a href="#"><h6 style="text-align: center; margin-top:10px;">Township</h6></a>
                            </div>
                        </div> --}}
                    </div> 
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <a href="#"><img src="{{asset('public/sdpl-assets/images/bunglows/shawnelizey.jpg')}}" class="img-thumbnail" alt="..."></a>
                                <a href="#"><h6 style="text-align: center; margin-top:10px;">Hospitality</h6></a>
                            </div>
                        </div>
                    </div>   
                </div>

                <div class="row">
                    <div class="col-md-4 offset-md-2">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <a href="{{url('user/residential/'. MyApp::RESIDENTIAL)}}"><img src="{{asset('public/sdpl-assets/images/bunglows/bungalowrakeshagrawal.jpg')}}" class="img-thumbnail" alt="..."></a>
                                {{-- <a href="{{url('user/residential/'. MyApp::RESIDENTIAL)}}"><h6 style="text-align: center; margin-top:10px; ">Residential</h6></a> --}}
                                <a href="{{url('user/residential',['project_group_id' => Crypt::encrypt(MyApp::RESIDENTIAL) ])}}"><h6 style="text-align: center; margin-top:10px; ">Residential</h6></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <a href="#"><img src="{{asset('public/sdpl-assets/images/bunglows/gopikaseoni.jpg')}}" class="img-thumbnail" alt="..."></a>
                                <a href="#"><h6 style="text-align: center; margin-top:10px;">Comm. Show./Offices</h6></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="col-md-2">
                
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">
                    <b>Our Prestigious</b>
                </div>
                <div class="card-body" >
                    <div class="carousel-container" >
                        @foreach ($project_prestigious_img as $item)
                            <div class="mySlides firstSlider animate">
                                <img src="{{MyApp::MAIN_URL.'public/storage/'.$item['img_path']}}"  style="height: 350px;" >
                            </div>
                        @endforeach
                        
                        <a class="prev" onclick="prevSlide(1)">&#10094;</a>
                        <a class="next" onclick="nextSlide(1)">&#10095;</a>
                        
                        <div class="dots-container hide">
                            <span class="dots" onclick="currentSlide(1)"></span>
                            <span class="dots" onclick="currentSlide(2)"></span>
                            <span class="dots" onclick="currentSlide(3)"></span>
                            <span class="dots" onclick="currentSlide(4)"></span>
                            <span class="dots" onclick="currentSlide(5)"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">
                    <b>Our Recent Projects</b>
                </div>
                <div class="card-body">
                    <div class="carousel-container" >
                        @foreach ($project_recent_project_img as $item)
                            <div class="mySlides secondSlider animate" >
                                <img src="{{MyApp::MAIN_URL.'public/storage/'.$item['img_path']}}"  class="img-thumbnail"  alt="..." style="height: 350px;" >
                            </div>
                        @endforeach

                        <a class="prev" onclick="prevSlide(2)">&#10094;</a>
                        <a class="next" onclick="nextSlide(2)">&#10095;</a>
                        
                        <div class="dots-container">
                            <span class="dots" onclick="currentSlide(1)"></span>
                            <span class="dots" onclick="currentSlide(2)"></span>
                            <span class="dots" onclick="currentSlide(3)"></span>
                            <span class="dots" onclick="currentSlide(4)"></span>
                            <span class="dots" onclick="currentSlide(5)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
          
 
@endsection



@section('script')
    <script src="{{asset('public/sdpl-assets/user/js/slider.js')}}" ></script>
    <script>
        
        $(document).ready(function () {

        // const data = { 
        //     name: 'example',
        //     email: 'example1@gmail.com',
        //     mobile_no: '1231',
        //     password: 'demo',
        //     };

        //     $.ajax({
        //         type: "post",
        //         url: "http://192.168.1.99:8080/sdplserver/api/registration",
        //         data: data,
        //         dataType: "json",
        //         success: function (response) {
        //             console.log(response);
        //         }
        //     });

        // fetch('http://192.168.1.99:8080/sdplserver/api/registration', {
        // method: 'POST', // or 'PUT'
        // headers: {
        //     'Content-Type': 'application/json',
        // },
        // body: JSON.stringify(data),
        // })
        // .then(response => response.json())
        // .then(data => {
        // console.log('Success:', data);
        // })
        // .catch((error) => {
        // console.error('Error:', error);
        });
    </script>
@endsection

    

