@extends('layouts.user.app')
    @php
        $project_type_name = ucwords($project_type_name);
    @endphp
@section('page_title', $project_type_name)


@section('content')
    @include('user.modal-layouts.bungalow_detail_modal')
    
    <div class="row pt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body fluid-container">
                    <div class="d-flex align-items-center bg-gray p-1 my-2 rounded shadow-sm PDPFC">
                        <img class="me-4" src="{{asset('public/sdpl-assets/user/images/bungalow_details/report.png')}}" alt=""  height="38">
                        <a href="{{url('/user/project')}}">
                        </a>
                        <h5 class="text-black existing_project" project-type-id="{{$project_type_id}}" user-id="{{session('USER_ID')}}">Existing Projects</h5>
                    </div>
                    <div class="d-flex align-items-center bg-gray p-1 mb-2 rounded shadow-sm PDPFC">
                        <img class="me-4" src="{{asset('public/sdpl-assets/user/images/bungalow_details/gallery.png')}}" alt="" height="38">
                        <h5 class="text-black">Gallery</h5>
                    </div>
                    <div class="d-flex align-items-center bg-gray p-1 mb-2 rounded shadow-sm PDPFC">
                        <img class="me-4" src="{{asset('public/sdpl-assets/user/images/bungalow_details/pdf.png')}}" alt="" height="38">
                        <a href="{{url('/public/sdpl-assets/pdf/technicaldrawingbook.pdf')}}" target="_blank"><h5 class="text-black">Sample Drawing Book</h5></a>
                    </div>
                    <div class="d-flex align-items-center bg-gray p-1 mb-2 rounded shadow-sm PDPFC" id="mainModalBtn" modal-name="createProject">
                        <img class="me-4" src="{{asset('public/sdpl-assets/user/images/bungalow_details/redo.png')}}" height="38">
                        <h5 class="text-black">Interedted Next</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Bungalow Existing Projects</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8"><h5><b><i>Our Prestigeous Bungalow Projects</i></b></h5></div>
                        <div class="offset-md-2 col-md-2"><a href="http://sdplweb.com/" target="_blank">See More</a></div>
                    </div>
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
    </div>
@endsection


@section('script')
    <script src="{{asset('public/sdpl-assets/user/js/slider.js')}}" ></script>
    <script src="{{asset('public/sdpl-assets/user/js/modal/residential.js')}}" ></script>
    
    <script>
        $(document).ready(function () {

            // var user_id = {{session('USER_ID')}}";
            // alert(user_id);
            
            $(document).on('click','#mainModalBtn', function () {

                $('#project_module').html("");
                $('#project_module').html($('#project_modal').html());
                previousModal();
            });

            $(document).on('click','#saveModalBtn', function (e) {
                e.preventDefault();

                var modal_url = $('#project_url').attr('url');
                const url = "{{MyApp::API_URL}}"+modal_url;
                saveProject(url);
            });

            $(document).on('click','#nextModalBtn', function (e) {
                e.preventDefault();
                nextModal();
            });

            $(document).on('click','#previousModalBtn', function (e) {
                e.preventDefault();
                previousModal();
            });        

            
            $(document).on('click','.existing_project', function (e) {
                e.preventDefault();

                var user_id  = $(".existing_project").attr("user-id");
                var project_type_id  = $(".existing_project").attr("project-type-id");
                fetch(`{{MyApp::API_URL}}existing-project/${user_id}/${project_type_id}`)
                .then(response => response.json())
                .then(response => {
                    console.log(response);
                    
                });  
            }); 


            $(document).on('click','#nextModalBtn', function (e) {
                e.preventDefault();
                
                
                const tba_url = `{{MyApp::API_URL}}project-builtup-area/${project_id}`;
                totalbuiltuparea(tba_url);
            }); 

        });
    </script>

@endsection