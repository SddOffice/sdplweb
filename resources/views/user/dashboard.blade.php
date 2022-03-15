@extends('layouts.user.app')
@section('page_title', 'User Dashboard')


@section('content')

    <div class="row pt-3">
        <div class="offset-md-2 col-md-8 ">
            <div class="row">
                <div class="col-md-4 offset-md-2">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::MIX_USE)])}}"><img src="{{asset('public/sdpl-assets/images/project-group/mix-use.jpg')}}" class="img-thumbnail" alt="..." style="height: 160px;"></a>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::MIX_USE)])}}">Mix Use Buildings</a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::MALL_MULTIPLESER)])}}"><img src="{{asset('public/sdpl-assets/images/project-group/mall.jpg')}}" class="img-thumbnail" alt="..." style="height: 160px;"></a>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::MALL_MULTIPLESER)])}}">Mall/Multiplxer</a> 
                        </div>
                    </div>
                </div> 
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::HOSPITAL)])}}"><img src="{{asset('public/sdpl-assets/images/project-group/hospital.jpg')}}" class="img-thumbnail" alt="..." style="height: 160px;"></a>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::HOSPITAL)])}}">Hospitals</a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::HOSPITALITY) ])}}"><img src="{{asset('public/sdpl-assets/images/project-group/hospitality.jpg')}}" class="img-thumbnail" alt="..." style="height: 160px;"></a>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::HOSPITALITY) ])}}">Hospitality</a> 
                        </div>
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::RESIDENTIAL) ])}}"><img src="{{asset('public/sdpl-assets/images/project-group/residential.jpg')}}" class="img-thumbnail" alt="..." style="height: 160px;"></a>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::RESIDENTIAL) ])}}">Residential</a> 
                        </div>
                    </div>
                </div>  
            </div>

            <div class="row">
                <div class="col-md-4 offset-md-2">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::PG_INTERIOR_DESIGNS) ])}}"><img src="{{asset('public/sdpl-assets/images/project-group/interior.jpg')}}" class="img-thumbnail" alt="..." style="height: 160px;"></a>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::PG_INTERIOR_DESIGNS) ])}}">Interior Designs</a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::COMMERCIAL_SHOWROOM_OFFICE) ])}}"><img src="{{asset('public/sdpl-assets/images/project-group/commercial.jpg')}}" class="img-thumbnail" alt="..." style="height: 160px;"></a>
                        </div>
                        <div class="card-footer">
                            <a href="{{url('user/project-types',['project_group_id' => Crypt::encrypt(MyApp::COMMERCIAL_SHOWROOM_OFFICE) ])}}">Comm. Show./Offices</a> 
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    <div class="py-2"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8"><h5><b><i>Our Prestigeous</i></b></h5></div>
                        <div class="offset-md-2 col-md-2"><a href="http://sdplweb.com/" target="_blank">See More</a></div>
                    </div>
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
                    <div class="row">
                        <div class="col-md-8"><h5><b><i>Our Recent Projects</i></b></h5></div>
                        <div class="offset-md-2 col-md-2"><a href="http://sdplweb.com/" target="_blank">See More</a></div>
                    </div>
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

@endsection

    

