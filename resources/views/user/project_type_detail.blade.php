@extends('layouts.user.app')
    @php
        $project_type_name = ucwords($project_type_name);
    @endphp
@section('page_title', $project_type_name)


@section('content')

    @include('user.modal-layouts.bungalow_detail_modal')

    {{-- <div class="py-3">
        <div class="card p-2">
            <h6 class="border-bottom pb-2 mb-0"><strong>Existing Projects</strong></h6>
            <div class="d-flex text-muted pt-2">
                <img src="{{asset('public/sdpl-assets/images/logo/businessman.png')}}" width="35" height="35" class="rounded-circle me-3" alt="..."> 
                <div class="pb-2 mb-0 w-100 border-bottom">
                    <div class="d-flex">
                        <strong class="text-gray-dark">Bungalow</strong>
                    </div>
                    <span class="d-block"><h6>#AmanTiwari</h6></span>
                </div>
            </div> 
        </div>
    </div> --}}
    
    <div class="row py-3">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header"><b>Our Prestigious Bungalow Projects</b></div>
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
                <div class="card-header"><strong>Other Details</strong></div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                <a href="#"><h5>Gallery</h5></a>
                                </div>
                                <div class="card-body">
                                    <a href=""><img src="{{asset('public/sdpl-assets/images/icons/gallery.png')}}" class="card-img-top" ></a>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                <a href="#"><h5>Sample Designs</h5></a>
                                </div>
                                <div class="card-body">
                                    <img src="{{asset('public/sdpl-assets/images/icons/pdf.png')}}" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" id="createProject">
                                <div class="card-header">
                                <a href="#"><h5>Interested Next</h5></a>
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
            
            $(document).on('click','#saveProjectBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}project";
            // alert(url);
            saveProject(url);
            });
        });

    </script>

@endsection

