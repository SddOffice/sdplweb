@extends('layouts.user.app')
@section('page_title', 'Project Type')


@section('content')
    <div class="row pt-3">
        @foreach ($project_type as $type)
            <div class="col">
                <div class="card project_card" style="height: 170px;">
                    <div class="card-body"> 
                        <a href="#"><img src="{{MyApp::MAIN_URL.'public/storage/' .$type['img_path']}}" class="img-thumbnail" alt="{{$type['project_type']}}"></a> 
                    </div>
                    <div class="card-footer text-center fw-normal">
                        <form method="POST" action="{{url('user/project-type-detail')}}">
                            <input type="hidden" name="project_type_id" value="{{ Crypt::encrypt($type['id']) }}">  
                            @csrf
                           <button class="btn btn-link h6"><span class="projecttypespanner"></span>{{ucwords($type['project_type'])}}</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="py-2"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8"><h5><b><i>Our Prestigeous Projects</i></b></h5></div>
                        <div class="offset-md-2 col-md-2"><a href="http://sdplweb.com/" target="_blank">See More</a></div>
                    </div>
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
                    <div class="row">
                        <div class="col-md-8"><h5><b><i>Recent Projects</i></b></h5></div>
                        <div class="offset-md-2 col-md-2"><a href="http://sdplweb.com/" target="_blank">See More</a></div>
                    </div>
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