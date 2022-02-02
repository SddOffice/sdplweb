

{{--start create project modal --}}
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
{{--end create project modal --}}

{{-- <h1>Modal Layouts Here</h1> --}}
<div class="modal fade" id="bungalowPropertyModel" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
	    <div class="modal-content">
		    <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Bungalow Property</h5>
			    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		    </div>
		    <div class="modal-body">
			    <form id="bungalowPropertyForm">
				    @csrf
					  <div id="bungalow_property_err"></div>
					    <form class="">
				            <div class="row  mb-2">
					            <div class="col-4">
					                <div class="form-check">
                                        <input class="form-check-input form-check-input-sm" type="radio" id="plot_type" name="plot_type"  style="border-radius:20%;">
					                    <label class="form-check-label  form-check-label-sm">Regular Plot</label>
						            </div>
					            </div>
					            <div class="col-4">
						            <div class="form-check">
                                        <input class="form-check-input form-check-input-sm ckrequired" type="radio" id="plot_type" name="plot_type"   style="border-radius:20%;">
					                    <label class="form-check-label form-check-label-sm">Irregular Plot</label>
					                </div>
					            </div>
					            <div class="col-md-4">
                                    <div class="input-group mb-3 input-group-sm">
                                        <span class="" style="color:rgb(197, 9, 9)">*</span>
                                        <input type="text" class="form-control form-control-sm" id="plot_size"  name="plot_size" placeholder="plot area..." required>
                                        <span class="input-group-text" id="basic-addon2">SqFt</span>
                                    </div>
						        </div>
				            </div> 
				            <div class="row mt-3">
					            <div class="col-md-4">
                                    <div class="input-group mb-3 input-group-sm">
                                        <span class="" style="color:rgb(197, 9, 9)">*</span>
                                        <input type="text" class="form-control form-control-sm" id="plot_width"  name="plot_width" placeholder="Width" required>
                                        <span class="input-group-text" id="basic-addon2">SqFt</span>
                                    </div>
					            </div>
					            <div class="col-md-4">
						            <div class="input-group mb-3 input-group-sm">
                                        <span class="" style="color:rgb(197, 9, 9)">*</span>
                                        <input type="text" class="form-control form-control-sm"  id="plot_length"  name="plot_length" placeholder="Length" required >
                                        <span class="input-group-text" id="basic-addon2">SqFt</span>
                                    </div>
					            </div>
                                <div class="col-md-4">
                                    <div class="input-group mb-3 input-group-sm"><span class="requiredshow" style="color:rgb(197, 9, 9)">*</span>
                                        <input type="text" class="form-control form-control-sm" id="diagonal_1"  name="diagonal_1" placeholder="Digonal-1" required >
                                        <span class="input-group-text input-group-text-sm" id="basic-addon2">SqFt</span>
                                    </div>
                                </div>
				            </div> 
				            <div class="row">
					            <div class="col-md-4 mt-4">
                                    <div class="input-group mb-3 input-group-sm"><span class="requiredshow" style="color:rgb(197, 9, 9)">*</span>
                                        <input type="text" class="form-control form-control-sm"  id="diagonal_2" name="diagonal_2" placeholder="Diagonal-2" required>
                                        <span class="input-group-text input-group-text-sm" id="basic-addon2">SqFt</span>
                                    </div>
					            </div>
					            <div class="col-md-4">
						            <small>Hand Sketch Image</small>
						            <div class="input-group input-group-sm">
						                <input type="file" class="form-control form-control-sm" id="hand_sketch_img"  name="hand_sketch_img" aria-describedby="" aria-label="Upload">
						                <button class="btn btn-outline-secondary btn-sm" type="button" id="button" name="button">Button</button>
					                </div>
					            </div>
					            <div class="col-4  mt-4">
						            <div class="form-check">
						            <input class="form-check-input" type="checkbox" id="apmt" name="apmt">
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
                                            <input class="form-check-input" type="radio" id="east_property" name="east_property" style="border-radius:20%;">
                                            <label class="form-check-label">East<font color="red">*</font></label>
                                        </div>
						            </div>
                                    <div class="col-1 pl-4">
                                        <div class="form-check">
                                            <input class="form-check-input " type="radio" id="west_property" name="west_property" style="border-radius:20%;">
                                            <label class="form-check-label">West<font color="red">*</font></label>
                                        </div>
                                    </div>
					                <div class="col-3 pl-5">
                                        <div class="form-check">
                                            <input class="form-check-input  ck_east_road " type="radio"  id="east_road_width" name="east_road_width" style="border-radius:20%;">
                                            <label class="form-check-label">East road</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm input_east_show" id="up"  name="up" placeholder="Road Width"  style="width:30%;">
                                            <select class="form-select form-select-sm input_east_show" style="width:40%;">
                                                <option value="2">ft</option>
                                                <option value="3">mtr</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3  pl-4">
                                        <div class="form-check">
                                            <input class="form-check-input  ck_west_road" type="radio"  id="west_road_width" name="west_road_width" style="border-radius:20%;">
                                            <label class="form-check-label">West road</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm input_west_show" id="up"  name="up" placeholder="Road Width"  style="width:30%;">
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
                                            <input class="form-check-input " type="radio" id="north_property" name="north_property" style="border-radius:20%;">
                                            <label class="form-check-label">North<font color="red">*</font></label>
                                        </div>
						            </div>
                                    <div class="col-1 pl-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="south_property" name="south_property" style="border-radius:20%;">
                                            <label class="form-check-label">South<font color="red">*</font></label>
                                        </div>
                                    </div>
                                    <div class="col-3 pl-5">
                                        <div class="form-check">
                                            <input class="form-check-input ck_north_road" type="radio" id="north_road_width" name="north_road_width" style="border-radius:20%;">
                                            <label class="form-check-label ">North road</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm input_north_show" id="up"  name="up" placeholder="Road Width"  style="width:30%;">
                                            <select class="form-select form-select-sm input_north_show"  style="width:40%;">
                                                <option value="2">ft</option>
                                                <option value="3">mtr</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3 pl-4">
                                        <div class="form-check">
                                            <input class="form-check-input ck_south_road" type="radio" id="south_road_width" name="south_road_width" style="border-radius:20%;">
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
                                        <input class="form-check-input" type="checkbox" id="plot_orientation" name="plot_orientation">
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
						                    <input type="file" class="form-control form-control-sm" id="hand_plot_orientation_img" name="hand_plot_orientation_img">
							                <button class="btn btn-outline-secondary btn-sm" type="button" id="" name="">Button</button>
						                </div>
						            </div>
						            <div class="col-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" id="up"  name="up" placeholder="Up"  style="width:60%;">
                                            <select class="form-select form-select-sm">
                                                <option value="2">ft</option>
                                                <option value="3">mtr</option>
                                            </select>
                                        </div>
						            </div>
						            <div class="col-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" id="down" name="down" placeholder="Down" style="width:60%;">
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
						                    <input class="form-check-input form-check-input-sm" type="checkbox" id="almost_same" name="almost_same">
						                    <label class="form-check-label form-check-label-sm">Almost On same</label></div>
					                    </div>
					                <div class="col-3">
					                    <select id="floor" name="floor" class="form-select form-select-sm">
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
                                            <input class="form-check-input" type="radio" name="vastu" style="border-radius:20%;">
                                            <label class="form-check-label">Moderate</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"  name="vastu" style="border-radius:20%;">
                                            <label class="form-check-label">Consult Expert</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					    <div class="modal-footer">
						    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
						    <button type="button" id="saveBungalowPropertyBtn" class="btn btn-primary btn-sm ">Save Bungalow Property</button>
						    <button type="button" id="updateBungalowPropertyBtn" class="btn btn-primary btn-sm hide">Update Bungalow Property</button>
					    </div>
					</form>
				</div>
			</div>
		</div>
	<div>

    {{-- Bungalow Entrance Model start --}}
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
                        <div class="row">
                            <div class="col-md-3">
                                <div class="row">
                                    <label class="form-label">Entrance Gate</label>
                                </div>
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="" name="" style="border-radius:20%;">
                                        <label class="form-check-label">One gate</label>
                                    </div>           
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="" name="" style="border-radius:20%;">
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
                                        <input class="form-check-input" type="radio" id="" name="" style="border-radius:20%;">
                                        <label class="form-check-label">With Sleeping Space</label>
                                    </div>           
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="" name="" style="border-radius:20%;">
                                        <label class="form-check-label">Without Sleeping Space</label>
                                    </div>            
                                </div>
                            </div>
                            <div class="col-md-3">
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
                            <div class="col-md-1"></div>
                        </div>

                        <div class="row" style="margin-top: 1rem;">
                            <label class="form-label">Porch</label>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input ck_south_road" type="radio" id="" name="" style="border-radius:20%;">
                                    <label class="form-check-label">Visual nature</label>
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
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input ck_south_road" type="radio" id="" name="" style="border-radius:20%;">
                                    <label class="form-check-label">Car Parking Space</label>
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
                            <div class="col-md-4"></div>
                        </div>

                        <div class="row" style="margin-top: 1rem;">
                            <label class="form-label">Foyer/Welcome Lobby</label>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-check-label">Area of Lobby</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group input-group-sm mb-1">
                                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <span class="input-group-text" id="">SqFt</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-check-label">Lobby Design</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group input-group-sm">
                                            <select id="" name="" class="form-select form-select-sm">
                                                <option selected>Hilighter/Welcome Wall</option>
                                                <option>Shoe rack space</option>
                                            </select>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
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
                            <div class="col-md-2"></div>
                        </div>
                        

                        <div class="row" style="margin-top: 1rem;">
                            <label class="form-label">Varadah</label>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input ck_south_road" type="radio" id="" name="" style="border-radius:20%;">
                                    <label class="form-check-label">Visual nature</label>
                                </div>    
                                <div class="form-check">
                                    <input class="form-check-input ck_south_road" type="radio" id="" name="" style="border-radius:20%;">
                                    <label class="form-check-label">Car Parking Space</label>
                                </div> 
                            </div>
                            <div class="col-md-3">
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
                            <div class="col-md-4"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="saveBungalowEntranceBtn" class="btn btn-primary btn-sm ">Save & Continue</button>
                            <button type="button" id="updateBungalowEntranceBtn" class="btn btn-primary btn-sm hide">Update Bungalow Entrance</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  {{-- Bungalow Entrance Model end --}}


     

