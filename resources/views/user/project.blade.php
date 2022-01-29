@extends('layouts.user.app')
@section('page_title', 'Projects')

@section('style')
    <link rel="stylesheet" href="{{asset('public/sdpl-assets/user/css/slider.css')}}">
    <style>
        
     
    </style>
@endsection

@section('content')

<div class="modal fade" id="createProjectModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Project Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createProjectForm">
                    @csrf
                    <div id="create_project_err"></div>
                    <div class="row">
                        <div class="col-md-3">
                            <select name="project_group_id" id="project_group_id" class="form-select form-select-sm" >
                                <option selected disabled>Project Group</option>
                                @foreach ($project_group as $group)
                                    <option value="{{$group->id}}">{{ucwords($group->project_group)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="project_type_id" id="project_type_id" class="form-select form-select-sm">
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="prefix" id="prefix" class="form-select form-select-sm">
                                <option selected disabled>Prefix</option>
                                <option value="{{MyApp::MR}}">Mr</option>
                                <option value="{{MyApp::MRS}}">Mrs</option>
                                <option value="{{MyApp::MS}}">Ms</option>
                                <option value="{{MyApp::M_S}}">M/S</option>
                            </select>
                        </div>  
                        <div class="col-md-2">
                            <input type="text" name="first_name" id="first_name" class=" form-control form-control-sm" placeholder="First Name">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="last_name" id="last_name" class="form-control form-control-sm" placeholder="Last Name" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" name="phone" id="phone" class="form-control form-control-sm" placeholder="Mobile" >
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="email" id="email" class="form-control form-control-sm" placeholder="Email" >
                        </div>
                        
                        <div class="col-md-3">
                            <select name="country" id="country" class="form-select form-select-sm" onchange="getState(this.value);">
                                <option selected disabled>Choose Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                                @endforeach 											
                            
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select id="state" name="state" class="form-select form-select-sm">
                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <select id="city" name="city" class="form-select form-select-sm">
                                
                            </select>
                        </div>
                        
                        <div class="col-9">
                            <input type="text"  id="address" name="address" class="form-control form-control-sm" placeholder="Address">
                        </div>
                    </div>

                    <div class="row">
                        <p>Design Type</p>
                    </div>

                    <div class="row">
                        @foreach ($design_type as $key => $item) 
                            <div class="col-md-3">
                                <div class="card ">
                                    <div class="card-header">
                                        <div class="form-check design_checkbox">
                                            <input type="checkbox" name="design_type[]" class="form-check-input design_type" id="design_type_{{$item->id}}" value="{{$item->id}}"> 
                                            <label class="form-check-label" for="flexCheckDefault">{{$item->design_type}}</label>
                                        </div>
                                    </div>
                                    <div class="card-body show_design overflow-auto" id="show_design_{{$item->id}}" style="height: 250px;">

                                        @foreach ($design_list[$key] as $list)
                                            <div class="form-check design_checkbox">
                                                <input type="checkbox" name="design_id[{{$key}}][]" id="design_id_{{$list->id}}" class="form-check-input" value="{{$list->id}}">
                                                <label class="form-check-label design_checkbox_label" for="flexCheckDefault" >{{$list->design}}</label>
                                            </div>
                                        @endforeach
                                        
                                    </div>		
                                </div>
                            </div>
                        @endforeach 
                    </div>

                    <input type="hidden" name="user_id" id="user_id" value="{{session('USER_ID')}}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="saveProjectBtn" class="btn btn-primary btn-sm ">Save Project</button>
                        <button type="button" id="updateProjectBtn" class="btn btn-primary btn-sm hide">Update Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row ">
	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
		<button type="button" id="createProject" class="btn btn-primary btn-flat btn-sm mt-2">Create Project</button>
	</div>
</div>
@include('user.modal-layouts.bungalow_detail_modal')



{{-- @foreach ($project_prestigious_img as $item)
    
    <img src="{{MyApp::MAIN_URL.'public/storage/'.$item['img_path']}}" class="card-img-top img-thumbnail " alt="...">
@endforeach --}}

<div class="row">
    <div class="col-md-4">

        <div class="carousel-container">

            @foreach ($project_prestigious_img as $item)
                <div class="mySlides firstSlider animate">
                    <img src="{{MyApp::MAIN_URL.'public/storage/'.$item['img_path']}}"  alt="...">
                </div>
            @endforeach
            
            <a class="prev" onclick="prevSlide(1)">&#10094;</a>
            <a class="next" onclick="nextSlide(1)">&#10095;</a>
            
            <div class="dots-container">
                <span class="dots" onclick="currentSlide(1)"></span>
                <span class="dots" onclick="currentSlide(2)"></span>
                <span class="dots" onclick="currentSlide(3)"></span>
                <span class="dots" onclick="currentSlide(4)"></span>
                <span class="dots" onclick="currentSlide(5)"></span>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <h1>second</h1>
        <div class="carousel-container">

            @foreach ($project_recent_project_img as $item)
                <div class="mySlides secondSlider animate">
                    <img src="{{MyApp::MAIN_URL.'public/storage/'.$item['img_path']}}"  alt="...">
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

    <div class="col-md-6">

        




    </div>


</div>

  





{{-- {{$count = ""}}
@foreach ($projects as $key => $list)
<div class="row mt-2">
    <div class="col-md-9">
        <section class="content">
            <div class="card">
                <div class="card-header">

                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="card-title">Projects Details</h3>
                        </div>
                        <div class="col-md-8">
                            <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Property</button>
                            <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Entrance</button>
                            <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Drawing Hall</button>
                            <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Pantry</button>
                            <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Floor Store</button>
                            <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Bedroom</button>
                            <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Basement</button>
                        </div>
                        <div class="col-md-1">
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0" style="height: 150px;">
                    <table class="table table-striped table-head-fixed projects">
                        <thead>
                            <tr>
                                <th style="width: 2%">#</th>
                                <th style="width: 15%">Project Name</th>
                                <th style="width: 10%">Project Type</th>
                                <th style="width: 15%">Client Name</th>
                                <th style="width: 25%">Design Type</th>
                                <th style="width: 15%" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr class="mb-2">
                                <td>{{++$count}}</td>
                                <td>
                                    <span>{{ucwords($list->first_name . " " . $list->last_name)}}</span><br/>
                                    <small>Created On - {{date('d-m-Y', strtotime($list->create_date))}}</small>
                                </td>
                                <td>{{ucwords($list->project_type)}}</td>
                                <td>{{ucwords($list->client_name)}}</td>
                                
                                <td>
                                    @foreach ($design_type_name[$key] as $type)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" style="width: 13px; height:13px;" checked disabled><small>{{$type->design_type}}</small>
                                        </div>
                                    @endforeach
                                </td>
                                <td >
                                    <button type="button" class="btn btn-outline-dark btn-flat btn-sm editProjectBtn" value="{{$list->id}}">Edit</button>
                                    <button type="button" class="btn btn-outline-info btn-flat btn-sm viewProjectBtn" value="{{$list->id}}">Project Detail</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <div class="progress progress-sm mt-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                </td>
                            </tr>
                                
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body table-responsive p-0" style="height: 200px;">
                <table class="table table-striped table-head-fixed projects">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            
                        <tr class="mb-2">
                            <td>#</td>
                            <td>Property</td>
                            <td >
                                <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                            </td>
                            
                        </tr>
                        <tr class="mb-2">
                            <td>#</td>
                            <td>Entrance </td>
                            <td >
                                <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                            </td>
                            
                        </tr>
                        <tr class="mb-2">
                            <td>#</td>
                            <td>Drawing Hall </td>
                            <td >
                                <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                            </td>
                            
                        </tr>
                        <tr class="mb-2">
                            <td>#</td>
                            <td> Pantry</td>
                            <td >
                                <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                            </td>
                            
                        </tr>
                        <tr class="mb-2">
                            <td>#</td>
                            <td>Floor Store</td>
                            <td >
                                <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                            </td>
                            
                        </tr>
                        <tr class="mb-2">
                            <td>#</td>
                            <td>Bedroom</td>
                            <td >
                                <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                            </td>
                            
                        </tr>
                        <tr class="mb-2">
                            <td>#</td>
                            <td>Basement</td>
                            <td >
                                <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                            </td>
                            
                        </tr>
                                    
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endforeach --}}

@endsection
    
@section('script')
    <script src="{{asset('public/sdpl-assets/user/js/slider.js')}}" ></script>
    <script>





        $(document).ready(function () {



            $(document).on('click','#createProject', function (e) {
                e.preventDefault();
                
                $('#createProjectModal').modal('show');
                $('#create_project_err').html('');
                $('#create_project_err').removeClass('alert alert-danger');
                $("#createProjectForm").trigger("reset"); 
                $('.show_design').css('display','none');
                $('#saveProjectBtn').removeClass('hide');
                $('#updateProjectBtn').addClass('hide');
            });

            
			$(document).on('change','#project_group_id', function (e) {
				e.preventDefault();
				var project_group_id = $(this).val();
				getProjectType(project_group_id);
			});

			$(document).on('change','#state', function () {
                const state_id = $(this).val();
                getCity(state_id);
            });

            // $(document).on('change','#city', function () {
            //     const city_id = $(this).val();
            //     getCity(city_id);
            // });

		
			$(document).on('change','.design_type', function () {
                var design_type_id = $(this).attr('value');
                if($(this).prop('checked')) {
                    
                    $('#show_design_'+design_type_id +" "+'input[type="checkbox"]').each(function(){
                        this.checked = false; 
                    });
                    $('#show_design_'+design_type_id).show();
                } else {
                    $('#show_design_'+design_type_id).hide();
                }	 
  			});

			$(document).on('click','#saveProjectBtn', function (e) {
				e.preventDefault();
				const url = "{{MyApp::API_URL}}project";
				saveProject(url);
			});
			$(document).on('click','.editProjectBtn', function (e) {
				e.preventDefault();
				const project_id = $(this).val();
				editProject(project_id);
			});


            $(document).on('click','#bungalowPropertyBtn', function (e) {
                e.preventDefault();
            
                $('#bungalowPropertyModel').modal('show');
                $('#bungalow_property_err').html('');
                $('#bungalow_property_err').removeClass('alert alert-danger');
                $("#bungalowPropertyForm").trigger("reset"); 
                $('#saveBungalowPropertyBtn').removeClass('hide');
                $('#updateBungalowPropertyBtn').addClass('hide');
            });

            $(function () {
                    $(document).on("click", function () {
                    if($('.ckrequired').prop("checked") == true){
                        $('.requiredshow').show();
                    }
                    else if($('.ckrequired').prop("checked") == false){
                        $('.requiredshow').hide();
                    }
                });            
            });

            $(function () {
                $(document).on("click", function () {
                if($('.ck_east_road').prop("checked") == true){
                    $('.input_east_show').show();
                }
                else if($('.ck_east_road').prop("checked") == false){
                    $('.input_east_show').hide();
                }
                });
            });

            $(function () {
                $(document).on("click", function () {
                if($('.ck_west_road').prop("checked") == true){
                    $('.input_west_show').show();
                }
                else if($('.ck_west_road').prop("checked") == false){
                    $('.input_west_show').hide();
                }
                });
            });
                
            $(function () {
                $(document).on("click", function () {
                if($('.ck_north_road').prop("checked") == true){
                    $('.input_north_show').show();
                }
                else if($('.ck_north_road').prop("checked") == false){
                    $('.input_north_show').hide();
                }
                });
            });

            $(function () {
                $(document).on("click", function () {
                if($('.ck_south_road').prop("checked") == true){
                    $('.input_south_show').show();
                }
                else if($('.ck_south_road').prop("checked") == false){
                    $('.input_south_show').hide();
                }
                });
            });

        });



        

            


   
	
		
		
		
</script>



@endsection