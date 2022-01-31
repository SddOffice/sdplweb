@extends('layouts.user.app')
@section('page_title', 'Bungalow')



@section('content')
    <h1>bungalow</h1>


    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">
                    <b>Our Prestigious </b>
                </div>
                <div class="card-body" >
                    <div class="carousel-container" slider-type="{{MyApp::FIRST_SLIDER}}">
                        @foreach ($residential_prestigious_img as $item)
                            <div class="mySlides firstSlider animate">
                                <img src="{{MyApp::MAIN_URL.'public/storage/'.$item['img_path']}}" style="height: 350px;" >
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
        
    </div>


@endsection

@section ('script')
<script src="{{asset('public/sdpl-assets/user/js/slider.js')}}" ></script>
    

@endsection



