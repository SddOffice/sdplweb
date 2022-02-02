@extends('layouts.user.app')
@php
    $project_type_name = ucwords($project_type_name);
@endphp
@section('page_title', $project_type_name )


@section('content')

    @include('user.modal-layouts.bungalow_detail_modal')

    <div class="row ">
	    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
		    <button type="button" id="createProject" class="btn btn-primary btn-flat btn-sm mt-2">Create Project</button>
	    </div>
    </div>  
     

    <div class="row py-2">        
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <b> Project Detail </b>
                </div>
                <div class="card-body" >
                    
                </div>
            </div>
        </div>
            
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">
                    <b>Our Prestigious </b>
                </div>
                <div class="card-body" >
                    <div class="carousel-container" slider-type="{{MyApp::FIRST_SLIDER}}">
                        @foreach ($gallery as $item)
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
                    <b> Other Details </b>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                <a href="#"><h4>Gallery</h4></a>
                                </div>
                                <div class="card-body">
                                    <a href=""><img src="{{asset('public/sdpl-assets/images/icons/gallery.png')}}" class="card-img-top" alt="..."></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                <a href="#"><h4>Sample Designs</h4></a>
                                </div>
                                <div class="card-body">
                                    <img src="{{asset('public/sdpl-assets/images/icons/pdf.png')}}" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                <a href="#"><h4>Interested Next</h4></a>
                                </div>
                                <div class="card-body">
                                    <img src="{{asset('public/sdpl-assets/images/icons/next.png')}}" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection


@section('script')
    <script src="{{asset('public/sdpl-assets/user/js/slider.js')}}" ></script>
    <script src="{{asset('public/sdpl-assets/user/js/modal/residential.js')}}" ></script>

    <script>
        $(document).ready(function () {
                
        });

    </script>


@endsection

