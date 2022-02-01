@extends('layouts.user.app')
@section('page_title', 'Project Type')

@section('content')

        <div class="row py-2">

            @foreach ($project_type as $type)
                <div class=" col-md-2 ">
                    <div class="card text-center" >
                        <div class="card-body" style="height:150px;">
                            <a href="#"><img src="{{MyApp::MAIN_URL.'public/storage/' .$type['img_path']}}" class="img-thumbnail" alt="{{$type['project_type']}}" ></a>
                        </div>
                        {{-- <div class="card-footer text-muted"><a href="{{url('user/'. str_replace(' ', '-', $type['project_type']))}}">{{ucwords($type['project_type'])}}</a> </div> --}}
                        <div class="card-footer text-muted"><a href="{{url('user/project-type-detail',['project_type_id' => Crypt::encrypt($type['id']) ])}}">{{ucwords($type['project_type'])}}</a> </div>
                        {{-- <div class="card-footer text-muted"><a href="{{url('user/project-type-detail',['project_type_id' => $type['id'] ])}}">{{ucwords($type['project_type'])}}</a> </div> --}}
                    </div>
                </div>
            @endforeach
            
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header">
                        <b>Our Prestigious </b>
                    </div>
                    <div class="card-body" >
                        <div class="carousel-container">
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
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header">
                        <b>Our Recent Projects</b>
                    </div>
                    <div class="card-body">
                        <div class="carousel-container" >
                            @foreach ($residential_recent_project_img as $item)
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

@section ('script')
<script src="{{asset('public/sdpl-assets/user/js/slider.js')}}" ></script>
    

@endsection