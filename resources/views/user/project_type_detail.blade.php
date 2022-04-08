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
                    <div class="d-flex align-items-center bg-gray p-1 my-2 rounded shadow-sm PDPFC show_cursor exsting_pro">
                        <img class="me-4" src="{{asset('public/sdpl-assets/user/images/bungalow_details/report.png')}}" alt="" height="38">
                        {{-- <a href="{{url('/user/project')}}"></a> --}}
                        <h5 class="text-black existing_project"><span class="spain"></span> Existing Projects</h5>
                    </div>
                    <div class="d-flex align-items-center bg-gray p-1 mb-2 rounded shadow-sm PDPFC show_cursor conta">
                        <img class="me-4" src="{{asset('public/sdpl-assets/user/images/bungalow_details/gallery.png')}}" alt="" height="38">
                        <h5 class="text-black project_gallery"><span class="spanner"></span> Gallery</h5>
                    </div>
                    <div class="d-flex align-items-center bg-gray p-1 mb-2 rounded shadow-sm PDPFC show_cursor contain">
                        <img class="me-4" src="{{asset('public/sdpl-assets/user/images/bungalow_details/pdf.png')}}" alt="" height="38">
                        <a href="{{url('/public/sdpl-assets/pdf/technicaldrawingbook.pdf')}}" target="_blank"> <h5 class="text-black"><span class="linkSpanner"></span>Sample Drawing Book</h5></a>
                    </div>
                    <div class="d-flex align-items-center bg-gray p-1 mb-2 rounded shadow-sm PDPFC show_cursor" id="mainModalBtn" modal-name="createProject">
                        <img class="me-4" src="{{asset('public/sdpl-assets/user/images/bungalow_details/redo.png')}}" height="38">
                        <h5 class="text-black">Interested Next</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" id="dublegame"></div>
    </div>

    <div class="py-2"></div>
    <div class="row">
        <div class="col-md-6 get_gallery hide">
            <div class="card card-tall">
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
        <div class="col-md-6 hide exitingproject">
            <div class="p-3 shadow-sm">
                <h5 class="border-bottom pb-2 mb-0">Existing Projects</h5>
                @foreach($existing_projects as $key => $list)
                    <div class="d-flex text-muted pt-3 show_cursor">
                        <img class="me-3" src="{{asset('public/sdpl-assets/user/images/bungalow_details/report.png')}}" alt="" width="32" height="32">
                        <div class="pb-2 mb-0 small lh-sm border-bottom w-100 project_row" modal-name="createProject" url="edit-project" project-id="{{$list['id']}}">
                            <div class="d-flex justify-content-between">
                                <h6><a href="#"><strong class="text-gray-dark">{{ucwords($project_type_name) . " " . $list['id'] }}</strong></a></h6>
                                <a href="#">{{date('d-m-Y -', strtotime($list['create_date'])) . "  ". $list['create_time']}}</a>
                            </div>
                            <h6> <span class="d-block">{{ucwords($list['first_name'] . " " . $list['last_name'])}}</span></h6>
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{asset('public/sdpl-assets/user/js/slider.js')}}" ></script>
    <script src="{{asset('public/sdpl-assets/user/js/modal/residential.js')}}" ></script>
    
    <script>
        $(document).ready(function () {

            $(document).on('click','#mainModalBtn', function (e) {
                e.preventDefault();

                $('#project_module').html("");
                $('#project_module').html($('#project_modal').html());
                $(".level_val").addClass('hide');
                $(".another").text('');
                $("#updateModalBtn").addClass('hide');
                $("#saveModalBtn").removeClass('hide');
                $('.input_east_show').addClass('hide');
                $('.input_west_show').addClass('hide');
                $('.input_north_show').addClass('hide');
                $('.input_south_show').addClass('hide');

                var country_id = $("#country").val();
                getState(country_id);

                previousModal();
            });

            $(document).on('click','#saveModalBtn', function (e) {
                e.preventDefault();
                var modal_url = $('#project_url').attr('url');
                const url = "{{MyApp::API_URL}}"+modal_url;
                saveProject(url);
            });

            $(document).on('click','.existing_project', function (e) {
                e.preventDefault();
                $('#dublegame').html($('.exitingproject').html()); 
            }); 

            $(document).on('click','.project_gallery', function (e) {
                e.preventDefault();
                $('#dublegame').html($('.get_gallery').html()); 
            });

            $(document).on('click','.project_row', function (e) {
                e.preventDefault();
                
                const project_id = $(this).attr("project-id");
                $('#modal_name').text("Project Details");
                var modal_url = $(this).attr('url');
                const url = "{{MyApp::API_URL}}"+modal_url+"/"+project_id;
                editProject(url);               
            });

            $(document).on('click','#nextModalBtn', function (e) {
                e.preventDefault();
                nextModal();

                const project_id = $("#project_id").val();
                // alert(project_id);
                var modal_url = $("#project_url").attr('url');
                var function_name = $("#project_url").attr("function-name");
                const url = "{{MyApp::API_URL}}edit-"+modal_url+"/"+project_id;
                if(project_id > 0){
                    editBungalow(url,function_name);
                }
            });

            $(document).on('click','#updateModalBtn', function (e) {
                e.preventDefault();
                const project_id = $(this).val();
                var modal_url = $(this).attr('url');
                const url = "{{MyApp::API_URL}}"+modal_url+"/"+project_id;
                updateProject(url);
            });

            $(document).on('click','#previousModalBtn', function (e) {
                e.preventDefault();
                previousModal();
                const project_id = $("#project_id").val();
                var modal_url = $("#project_url").attr('url');
                var function_name = $("#project_url").attr("function-name");
                const url = "{{MyApp::API_URL}}edit-"+modal_url+"/"+project_id;
                if(project_id > 0){
                    editBungalow(url,function_name);
                }
            });
            
        });
    </script>

@endsection