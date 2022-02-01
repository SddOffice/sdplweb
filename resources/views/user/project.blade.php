@extends('layouts.user.app')
@section('page_title', 'Projects')


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



<div class="modal fade" id="bungalowEntranceModel" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
	    <div class="modal-content">
		    <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Bungalow Entrance</h5>
			    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		    </div>
		    <div class="modal-body">
			    <form id="bungalowEntranceForm">
				    @csrf
					<div id="bungalow_entrance_err"></div>
					<form class="">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="row">
                                    <label class="form-label">Entrance Gate</label>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input ck_south_road" type="radio" id="" name="" style="border-radius:20%;">
                                        <label class="form-check-label">One gate</label>
                                    </div>           
                                    <div class="form-check">
                                        <input class="form-check-input ck_south_road" type="radio" id="" name="" style="border-radius:20%;">
                                        <label class="form-check-label">Two gate</label>
                                    </div>            
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <label class="form-label">Security Kiosq</label>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input ck_south_road" type="radio" id="" name="" style="border-radius:20%;">
                                        <label class="form-check-label">With Sleeping Space</label>
                                    </div>           
                                    <div class="form-check">
                                        <input class="form-check-input ck_south_road" type="radio" id="" name="" style="border-radius:20%;">
                                        <label class="form-check-label">Without Sleeping Space</label>
                                    </div>            
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="1000">
                                        <img src="{{asset('public/sdpl-assets/images/slider/slide3.jpg')}}" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{asset('public/sdpl-assets/images/slider/slide3.jpg')}}" class="d-block w-100" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{asset('public/sdpl-assets/images/slider/slide3.jpg')}}" class="d-block w-100" alt="...">
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                            
				        
				        <div class="row mt-3">
					        <div class="col-md-4">
                                <div class="input-group mb-3 input-group-sm">
                                    <span class="" style="color:rgb(197, 9, 9)">*</span>
                                    <input type="text" class="form-control form-control-sm" id=""  name="" placeholder="Width" required>
                                    <span class="input-group-text" id="basic-addon2">SqFt</span>
                                </div>
					        </div>
					        <div class="col-md-4">
						        <div class="input-group mb-3 input-group-sm">
                                    <span class="" style="color:rgb(197, 9, 9)">*</span>
                                    <input type="text" class="form-control form-control-sm"  id=""  name="" placeholder="Length" required >
                                    <span class="input-group-text" id="basic-addon2">SqFt</span>
                                </div>
					        </div>
                            <div class="col-md-4">
                                <div class="input-group mb-3 input-group-sm"><span class="requiredshow" style="color:rgb(197, 9, 9)">*</span>
                                    <input type="text" class="form-control form-control-sm" id=""  name="" placeholder="Digonal-1" required >
                                    <span class="input-group-text input-group-text-sm" id="basic-addon2">SqFt</span>
                                </div>
                            </div>
				        </div> 
				        <div class="row">
					        <div class="col-md-4 mt-4">
                                <div class="input-group mb-3 input-group-sm"><span class="requiredshow" style="color:rgb(197, 9, 9)">*</span>
                                    <input type="text" class="form-control form-control-sm"  id="" name="" placeholder="Diagonal-2" required>
                                    <span class="input-group-text input-group-text-sm" id="basic-addon2">SqFt</span>
                                </div>
					        </div>
					        <div class="col-md-4">
						        <small>Hand Sketch Image</small>
						        <div class="input-group input-group-sm">
						            <input type="file" class="form-control form-control-sm" id=""  name="" aria-describedby="" aria-label="Upload">
						            <button class="btn btn-outline-secondary btn-sm" type="button" id="button" name="button">Button</button>
					            </div>
					        </div>
					        <div class="col-4  mt-4">
						        <div class="form-check">
						            <input class="form-check-input" type="checkbox" id="" name="">
						            <label class="form-check-label">Appoint a surveyor</label>
                                </div>
				            </div>
                        </div>  
					    <div class="row mb-2">
				            <div class="row">
						        <label class="form-label">Plot border</label>
					        </div>	
					        <div class="row">
						        <div class="col-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="" name="" style="border-radius:20%;">
                                        <label class="form-check-label">East<font color="red">*</font></label>
                                    </div>
						        </div>
                                <div class="col-1 pl-4">
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" id="" name="" style="border-radius:20%;">
                                        <label class="form-check-label">West<font color="red">*</font></label>
                                    </div>
                                </div>
					            <div class="col-3 pl-5">
                                    <div class="form-check">
                                        <input class="form-check-input  ck_east_road " type="radio"  id="" name="" style="border-radius:20%;">
                                        <label class="form-check-label">East road</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm input_east_show" id=""  name="" placeholder="Road Width"  style="width:30%;">
                                        <select class="form-select form-select-sm input_east_show" style="width:40%;">
                                            <option value="2">ft</option>
                                            <option value="3">mtr</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3  pl-4">
                                    <div class="form-check">
                                        <input class="form-check-input  ck_west_road" type="radio"  id="" name="" style="border-radius:20%;">
                                        <label class="form-check-label">West road</label>
                                    </div>
						        </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm input_west_show" id=""  name="" placeholder="Road Width"  style="width:30%;">
                                            <select class="form-select form-select-sm input_west_show"  style="width:40%;">
                                                <option value="2">ft</option>
                                                <option value="3">mtr</option>
                                            </select>
                                        </div>
                                    </div>
					            </div>
					            <div class="row">
						            <div class="col-1">
                                <div class="form-check">
                                <input class="form-check-input " type="radio" id="" name="" style="border-radius:20%;">
                                    <label class="form-check-label">North<font color="red">*</font></label>
                            </div>
						</div>
                        <div class="col-1 pl-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="" name="" style="border-radius:20%;">
                                <label class="form-check-label">South<font color="red">*</font></label>
                            </div>
                        </div>
                        <div class="col-3 pl-5">
                            <div class="form-check">
                                <input class="form-check-input ck_north_road" type="radio" id="" name="" style="border-radius:20%;">
                                <label class="form-check-label ">North road</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm input_north_show" id=""  name="" placeholder="Road Width"  style="width:30%;">
                                <select class="form-select form-select-sm input_north_show"  style="width:40%;">
                                    <option value="2">ft</option>
                                    <option value="3">mtr</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 pl-4">
                            <div class="form-check">
                                <input class="form-check-input ck_south_road" type="radio" id="" name="" style="border-radius:20%;">
                                <label class="form-check-label">South road</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm input_south_show"  id="up"  name="up" placeholder="Road Width"  style="width:30%;">
                                <select class="form-select form-select-sm input_south_show"  style="width:40%;">
                                    <option value="2">ft</option>
                                    <option value="3">mtr</option>
                                </select>
                            </div>
                        </div>
					</div>
					<div class="row  mt-2 mb-2">
					    <div class="col-10 ml-4">
						    <input class="form-check-input" type="checkbox" id="" name="">
						    <label><b>Plot Is Not oriented perpendicularly With North</b></label>
					    </div>
                    </div>
					<div class="row">
						<div class="col-md-5">
						    <small>Upload a hand sketch image With orientation</small>
						</div>
					    <div class="col-md-6">
							<small>Down/Up of ground from abuting front</small>
						</div>
				    </div>	
				    <div class="row">
				        <div class="col-md-4 mb-3">
						    <div class="input-group input-group-sm">
						        <input type="file" class="form-control form-control-sm" id="" name="">
							    <button class="btn btn-outline-secondary btn-sm" type="button" id="" name="">Button</button>
						    </div>
						</div>
						<div class="col-4">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id=""  name="" placeholder="Up"  style="width:60%;">
                                <select class="form-select form-select-sm">
                                    <option value="2">ft</option>
                                    <option value="3">mtr</option>
                                </select>
                            </div>
						</div>
						<div class="col-4">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id="" name="" placeholder="Down" style="width:60%;">
                                    <select class="form-select form-select-sm">
                                        <option value="2">ft</option>
                                        <option value="3">mtr</option>
                                    </select>
                                </div>
						    </div>
					    </div> 
					    <div class="row">
						    <div class="col-3">
						        <div class="form-check">
						            <input class="form-check-input form-check-input-sm" type="checkbox" id="" name="">
						            <label class="form-check-label form-check-label-sm">Almost On same</label></div>
					            </div>
					            <div class="col-3">
					                <select id="" name="" class="form-select form-select-sm">
						                <option selected>Select Floors</option>
						                <option>1 st floor</option>
                                        <option>2 st floor</option>
                                        <option>3 st floor</option>
                                        <option>other</option>
						            </select>
					            </div>
					            <div class="col-1">
						            <label for="Floor" class="form-label">Vastu</label>
					            </div>
                                <div class="col-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" style="border-radius:20%;">
                                        <label class="form-check-label">Moderate</label>
                                    </div>
					            </div>
					            <div class="col-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"  name="" style="border-radius:20%;">
                                        <label class="form-check-label">Consult Expert</label>
                                    </div>
					            </div>
					        </div>
				        </div>
			        </div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
						<button type="button" id="saveBungalowEntranceBtn" class="btn btn-primary btn-sm ">Save Bungalow Entrance</button>
					    <button type="button" id="updateBungalowEntranceBtn" class="btn btn-primary btn-sm hide">Update Bungalow Entrance</button>
				    </div>
				</form>
			</div>
		</div>
	</div>
<div>

<div class="row ">
	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
		<button type="button" id="bungalowEntranceModel" class="btn btn-primary btn-flat btn-sm mt-2">Bungalow Entrance</button>
	</div>
</div> 


{{$count = ""}}
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

@endforeach 

@endsection
    
@section('script')
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


            $(document).on('click','#bungalowEntranceModel', function (e) {
                e.preventDefault();
                
                $('#bungalowEntranceModel').modal('show');
                $('#bungalow_entrance_err').html('');
                $('#bungalow_entrance_err').removeClass('alert alert-danger');
                $("#bungalowEntranceForm").trigger("reset"); 
                $('.show_design').css('display','none');
                $('#saveBungalowEntranceBtn').removeClass('hide');
                $('#updateBungalowEntranceBtn').addClass('hide');
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