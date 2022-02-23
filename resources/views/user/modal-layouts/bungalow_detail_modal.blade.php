
{{-- Start Create Project Modal --}}
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
                        <div class="col-md-2 mb-1">
                            <input type="text" name="first_name" id="first_name" class=" form-control form-control-sm" placeholder="First Name">
                        </div>
                        <div class="col-md-2 mb-1">
                            <input type="text" name="last_name" id="last_name" class="form-control form-control-sm" placeholder="Last Name" >
                        </div>
                        
                    </div>

                    <div class="row">
                        {{-- <div class="col-md-3">
                            <input type="text" name="phone" id="phone" class="form-control form-control-sm" placeholder="Mobile" >
                        </div> --}}
                        <div class="col-md-3 mb-1">
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
                        <div class="col-md-3">
                            <select id="city" name="city" class="form-select form-select-sm"></select>
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col-9">
                            <input type="text"  id="address" name="address" class="form-control form-control-sm" placeholder="Address">
                        </div>
                    </div>

                    {{-- <div class="row">
                        <p>Design Type</p>
                    </div> --}}

                    {{-- <div class="row">
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
                    </div> --}}

                    <div class="row mt-3">
                        <div class="col-md-3">
                            <div class="form-check plot_type">
                                <input class="form-check-input form-check-input-sm " type="radio" name="plot_type" value="Regular Plot" style="border-radius:20%;">
                                <label class="form-check-label  form-check-label-sm">Regular Plot</label>
                            </div>
                            <div class="form-check mb-1 plot_type">
                                <input class="form-check-input form-check-input-sm " type="radio" name="plot_type" value="Irregular Plot" style="border-radius:20%;">
                                <label class="form-check-label form-check-label-sm">Irregular Plot</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-1">
                            <div class="input-group input-group-sm">
                                <span style="color:#ff0000">*</span>
                                <input type="text" class="form-control form-control-sm" id="plot_size"  name="plot_size" placeholder="Plot Area" required>
                                <span class="input-group-text" id="basic-addon2">Sqft</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group input-group-sm mb-1">
                                <span style="color:#ff0000">*</span>
                                <input type="text" class="form-control form-control-sm" id="plot_width"  name="plot_width" placeholder="Width" required>
                                <span class="input-group-text" id="basic-addon2">Sqft</span>
                            </div>
                            <div class="input-group input-group-sm mb-1">
                                <span style="color:#ff0000">*</span>
                                <input type="text" class="form-control form-control-sm"  id="plot_length"  name="plot_length" placeholder="Length" required>
                                <span class="input-group-text" id="basic-addon2">Sqft</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group input-group-sm mb-1">
                                <span style="color:#ff0000">*</span>
                                <input type="text" class="form-control form-control-sm" id="diagonal_1"  name="diagonal_1" placeholder="Digonal-1" required>
                                <span class="input-group-text input-group-text-sm" id="basic-addon2">Sqft</span>
                            </div>
                            <div class="input-group input-group-sm">
                                <span style="color:#ff0000">*</span>
                                <input type="text" class="form-control form-control-sm"  id="diagonal_2" name="diagonal_2" placeholder="Diagonal-2" required>
                                <span class="input-group-text input-group-text-sm" id="basic-addon2">Sqft</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <label class="form-check-label mb-1">Hand Sketch Image</label>
                        <div class="col-md-6 ">
                            <div class="input-group input-group-sm">
                                <input type="file" class="form-control form-control-sm" id="hand_sketch_img"  name="hand_sketch_img" aria-describedby="" aria-label="Upload">
                                <!-- <button class="btn btn-outline-secondary btn-sm" type="button" id="button" name="button"><small>Upload</small></button> -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="apmt" name="apmt" value="1">
                                <label class="form-check-label">Appoint a Surveyor</label>
                            </div> 
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label class="form-check-label">Plot Border</label>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-check">
                                    <label class="form-check-label">East</label>
                                    <span style="color:#ff0000">*</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check east_property">
                                    <input class="form-check-input" type="radio" name="east_property" value="{{MyApp::PLOT_BORDER_PROPERTY}}" style="border-radius: 20%;">
                                    <label class="form-check-label">Other Property</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input east_property ck_east_road " type="radio" name="east_property" value="{{MyApp::PLOT_BORDER_ROAD}}" style="border-radius:20%;">
                                    <label class="form-check-label">East road</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm input_east_show" id="east_road_width" name="east_road_width" placeholder="East Road Width">
                                    <select class="form-select form-select-sm input_east_show" style="flex: 0.2 auto;">
                                        <option value="2">ft</option>
                                        <option value="3">mtr</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-check">
                                    <label class="form-check-label">West</label>
                                    <span style="color:#ff0000">*</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="west_property" name="west_property" value="{{MyApp::PLOT_BORDER_PROPERTY}}" style="border-radius: 20%;">
                                    <label class="form-check-label">Other Property</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input  ck_west_road" type="radio" name="west_property" value="{{MyApp::PLOT_BORDER_ROAD}}" style="border-radius:20%;">
                                    <label class="form-check-label">West road</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm input_west_show" id="west_road_width" name="west_road_width" placeholder="West Road Width">
                                    <select class="form-select form-select-sm input_west_show" style="flex: 0.2 auto;">
                                        <option value="2"><h6>ft</h6></option>
                                        <option value="3">mtr</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-check">
                                    <label class="form-check-label">North</label>
                                    <span style="color:#ff0000">*</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="north_property" name="north_property" value="{{MyApp::PLOT_BORDER_PROPERTY}}" style="border-radius: 20%;">
                                    <label class="form-check-label">Other Property</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input ck_north_road" type="radio" name="north_property" value="{{MyApp::PLOT_BORDER_ROAD}}" style="border-radius:20%;">
                                    <label class="form-check-label ">North road</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm input_north_show" id="north_road_width" name="north_road_width" placeholder="North Road Width">
                                    <select class="form-select form-select-sm input_north_show" style="flex: 0.2 auto;">
                                        <option value="2">ft</option>
                                        <option value="3">mtr</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-check">
                                    <label class="form-check-label">South</label>
                                    <span style="color:#ff0000">*</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="south_property" name="south_property" value="{{MyApp::PLOT_BORDER_PROPERTY}}" style="border-radius: 20%;">
                                    <label class="form-check-label">Other Property</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input ck_south_road" type="radio" name="south_property" value="{{MyApp::PLOT_BORDER_ROAD}}" style="border-radius:20%;">
                                    <label class="form-check-label">South road</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm input_south_show" id="south_road_width" name="south_road_width" placeholder="South Road Width">
                                    <select class="form-select form-select-sm input_south_show" style="flex: 0.2 auto;">
                                        <option value="2">ft</option>
                                        <option value="3">mtr</option>
                                    </select>
                                </div>
                            </div>
                        </div>        
                    </div>

                    <div class="row mt-2">
                        <div class="form-check">
                            <input class="form-check-input form-check-input-sm perpendicularly_north"  type="checkbox" id="plot_orientation" name="plot_orientation" value="1">
                            <label class="form-check-label">The Plot is not Oriented Perpendicularly with North</label>
                        </div>
                    </div>
                    
                    <div class="row mt-2">
                        <div class="col-md-6 input_hand_sketch_orientation_img">
                            <div class="row">
                                <div class="form-check-label mb-1">Upload a Hand Sketch Image with Orientation</div>
                                <div class="input-group input-group-sm">
                                    <input type="file" class="form-control form-control-sm mb-1" id="hand_sketch_orientation_img" name="hand_sketch_orientation_img" style="width:30%;">
                                </div>
                            </div>                     
                        </div>
                        <div class="col-md-6">
                            <div class="row"> 
                                <div class="form-check-label mb-1">Down/Up of Ground from Abuting Front</div>
                                <div class="col-md-6">
                                    <select class="form-select form-select-sm" id="level" name="level">
                                        <option selected disabled>Choose...</option>
                                        <option value="{{MyApp::LEVEL_ALMOST}}">Almost Same</option>
                                        <option value="{{MyApp::LEVEL_UP}}">Up</option>
                                        <option value="{{MyApp::LEVEL_DOWN}}">Down</option>
                                    </select> 
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control form-control-sm" id="level_value" name="level_value" placeholder="Up/Down value"  style="width:50%;">
                                        <select class="form-select form-select-sm">
                                            <option value="2">ft</option>
                                            <option value="3">mtr</option>
                                        </select> 
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input form-check-input-sm" type="radio" name="level" value="Almost Same" style="border-radius:20%;">
                                        <label class="form-check-label form-check-label-sm">Almost Same</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="row"> --}}
                                {{-- <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input form-check-input-sm" type="radio" name="level" value="1" style="border-radius:20%;">
                                        <label class="form-check-label form-check-label-sm">Up</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input form-check-input-sm" type="radio" name="level" value="2" style="border-radius:20%;">
                                        <label class="form-check-label form-check-label-sm">Down</label>
                                    </div>
                                </div> --}}
                                {{-- </div> --}}
                            </div>     
                        </div>
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

{{-- Start Bungalow Property Modal --}}
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
                    {{-- <div class="row">
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input form-check-input-sm" type="radio" id="plot_type" name="plot_type" value="Regular Plot" style="border-radius:20%;">
                                <label class="form-check-label  form-check-label-sm">Regular Plot</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input form-check-input-sm" type="radio" id="plot_type" name="plot_type" value="Irregular Plot" style="border-radius:20%;">
                                <label class="form-check-label form-check-label-sm">Irregular Plot</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-1">
                            <div class="input-group input-group-sm">
                                <span style="color:#ff0000">*</span>
                                <input type="text" class="form-control form-control-sm" id="plot_size"  name="plot_size" placeholder="Plot Area" required>
                                <span class="input-group-text" id="basic-addon2">Sqft</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group input-group-sm mb-1">
                                <span style="color:#ff0000">*</span>
                                <input type="text" class="form-control form-control-sm" id="plot_width"  name="plot_width" placeholder="Width" required>
                                <span class="input-group-text" id="basic-addon2">Sqft</span>
                            </div>
                            <div class="input-group input-group-sm mb-1">
                                <span style="color:#ff0000">*</span>
                                <input type="text" class="form-control form-control-sm"  id="plot_length"  name="plot_length" placeholder="Length" required>
                                <span class="input-group-text" id="basic-addon2">Sqft</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group input-group-sm mb-1">
                                <span style="color:#ff0000">*</span>
                                <input type="text" class="form-control form-control-sm" id="diagonal_1"  name="diagonal_1" placeholder="Digonal-1" required>
                                <span class="input-group-text input-group-text-sm" id="basic-addon2">Sqft</span>
                            </div>
                            <div class="input-group input-group-sm">
                                <span style="color:#ff0000">*</span>
                                <input type="text" class="form-control form-control-sm"  id="diagonal_2" name="diagonal_2" placeholder="Diagonal-2" required>
                                <span class="input-group-text input-group-text-sm" id="basic-addon2">Sqft</span>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="row mt-2">
                        <label class="form-label">Hand Sketch Image</label>
                        <div class="col-md-6">
                            <div class="input-group input-group-sm">
                                <input type="file" class="form-control form-control-sm" id="hand_sketch_img"  name="hand_sketch_img" aria-describedby="" aria-label="Upload">
                                <!-- <button class="btn btn-outline-secondary btn-sm" type="button" id="button" name="button"><small>Upload</small></button> -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="apmt" name="apmt" value="1">
                                <label class="form-check-label">Appoint a Surveyor</label>
                            </div> 
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label class="form-label">Plot Border</label>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-check">
                                    <label class="form-check-label">East</label>
                                    <span style="color:#ff0000">*</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="east_property" value="{{MyApp::PLOT_BORDER_PROPERTY}}" style="border-radius: 20%;">
                                    <label class="form-check-label">Other Property</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input  ck_east_road " type="radio" name="east_property" value="{{MyApp::PLOT_BORDER_ROAD}}" style="border-radius:20%;">
                                    <label class="form-check-label">East road</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm input_east_show" id="east_road_width" name="east_road_width" placeholder="East Road Width">
                                    <select class="form-select form-select-sm input_east_show" style="flex: 0.2 auto;">
                                        <option value="2">ft</option>
                                        <option value="3">mtr</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-check">
                                    <label class="form-check-label">West</label>
                                    <span style="color:#ff0000">*</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="west_property" name="west_property" value="{{MyApp::PLOT_BORDER_PROPERTY}}" style="border-radius: 20%;">
                                    <label class="form-check-label">Other Property</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input  ck_west_road" type="radio" name="west_property" value="{{MyApp::PLOT_BORDER_ROAD}}" style="border-radius:20%;">
                                    <label class="form-check-label">West road</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm input_west_show" id="west_road_width" name="west_road_width" placeholder="West Road Width">
                                    <select class="form-select form-select-sm input_west_show" style="flex: 0.2 auto;">
                                        <option value="2"><h6>ft</h6></option>
                                        <option value="3">mtr</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-check">
                                    <label class="form-check-label">North</label>
                                    <span style="color:#ff0000">*</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="north_property" name="north_property" value="{{MyApp::PLOT_BORDER_PROPERTY}}" style="border-radius: 20%;">
                                    <label class="form-check-label">Other Property</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input ck_north_road" type="radio" name="north_property" value="{{MyApp::PLOT_BORDER_ROAD}}" style="border-radius:20%;">
                                    <label class="form-check-label ">North road</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm input_north_show" id="north_road_width" name="north_road_width" placeholder="North Road Width">
                                    <select class="form-select form-select-sm input_north_show" style="flex: 0.2 auto;">
                                        <option value="2">ft</option>
                                        <option value="3">mtr</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-check">
                                    <label class="form-check-label">South</label>
                                    <span style="color:#ff0000">*</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="south_property" name="south_property" value="{{MyApp::PLOT_BORDER_PROPERTY}}" style="border-radius: 20%;">
                                    <label class="form-check-label">Other Property</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input ck_south_road" type="radio" name="south_property" value="{{MyApp::PLOT_BORDER_ROAD}}" style="border-radius:20%;">
                                    <label class="form-check-label">South road</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm input_south_show" id="south_road_width" name="south_road_width" placeholder="South Road Width">
                                    <select class="form-select form-select-sm input_south_show" style="flex: 0.2 auto;">
                                        <option value="2">ft</option>
                                        <option value="3">mtr</option>
                                    </select>
                                </div>
                            </div>
                        </div>        
                    </div> --}}

                    {{-- <div class="row mt-2">
                        <div class="form-check">
                            <input class="form-check-input form-check-input-sm perpendicularly_north"  type="checkbox" id="plot_orientation" name="plot_orientation" value="1">
                            <label class="form-check-label">The Plot is not Oriented Perpendicularly with North</label>
                        </div>
                    </div>
                    
                    <div class="row mt-2">
                        <div class="col-md-6 input_hand_sketch_orientation_img">
                            <div class="row">
                                <label>Upload a Hand Sketch Image with Orientation</label>
                                <div class="input-group input-group-sm">
                                    <input type="file" class="form-control form-control-sm" id="hand_sketch_orientation_img" name="hand_sketch_orientation_img" style="width:30%;">
                                </div>
                            </div>                     
                        </div>
                        <div class="col-md-6">
                            <div class="row"> 
                                <label>Down/Up of Ground from Abuting Front</label>
                                <div class="col-md-6">
                                    <select class="form-select form-select-sm" name="level">
                                        <option selected disabled>Choose...</option>
                                        <option value="{{MyApp::ALMOST_SAME}}">Almost Same</option>
                                        <option value="{{MyApp::UP}}">Up</option>
                                        <option value="{{MyApp::DOWN}}">Down</option>
                                    </select> 
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control form-control-sm" name="level_value" placeholder="Up/Down"  style="width:50%;">
                                        <select class="form-select form-select-sm">
                                            <option value="2">ft</option>
                                            <option value="3">mtr</option>
                                        </select> 
                                    </div>
                                </div> --}}
                                {{-- <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input form-check-input-sm" type="radio" name="level" value="Almost Same" style="border-radius:20%;">
                                        <label class="form-check-label form-check-label-sm">Almost Same</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="row"> --}}
                                {{-- <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input form-check-input-sm" type="radio" name="level" value="1" style="border-radius:20%;">
                                        <label class="form-check-label form-check-label-sm">Up</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input form-check-input-sm" type="radio" name="level" value="2" style="border-radius:20%;">
                                        <label class="form-check-label form-check-label-sm">Down</label>
                                    </div>
                                </div> --}}
                                {{-- </div> --}}
                            {{-- </div>     
                        </div>
                    </div>  --}}
                    <input type="hidden" name="project_id" id="bungalow_project_id">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" id="saveBungalowPropertyBtn" class="btn btn-primary btn-sm ">Save Bungalow Property</button>
                <button type="button" id="updateBungalowPropertyBtn" class="btn btn-primary btn-sm hide">Update Bungalow Property</button>
            </div>
        </div>
    </div>
</div>

{{-- Start Bungalow Entrance Modal --}}
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
                            <label class="form-label form-label-sm">Select floors</label>
                            <div class="input-group input-group-sm">
                                <select id="floor" name="floor" class="form-select form-select-sm">
                                    <option selected disabled>Select Floors</option>
                                    <option value="{{MyApp::FLOOR_G}}">One Floor</option>
                                    <option value="{{MyApp::FLOOR_G_1}}">Two Floor</option>
                                    <option value="{{MyApp::FLOOR_G_2}}">Three Floor</option>
                                    <option value="{{MyApp::FLOOR_G_3}}">Four Floor</option>
                                </select>  
                            </div>
                        </div>
                        <div class="col-md-4"> 
                            <label class="form-label form-label-sm">Vastu</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vastu" value="Moderate Condiderations" style="border-radius:20%;">
                                <label class="form-check-label">Moderate Condiderations</label>
                            </div>    
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vastu" value="Consult Expert" style="border-radius:20%;">
                                <label class="form-check-label">Consult Expert</label>
                            </div> 
                        </div>
                        <div class="col-md-2">    
                            <label class="form-label form-label-sm">Entrance</label>
                            <div class="form-check">
                                <input class="form-check-input entrance_ONE_GATE_width" type="radio" name="entrance_gate" value="One gate" style="border-radius:20%;">
                                <label class="form-check-label">One gate</label>
                            </div>           
                            <div class="form-check">
                                <input class="form-check-input entrance_TWO_GATE_width" type="radio" name="entrance_gate" value="Two gate" style="border-radius:20%;">
                                <label class="form-check-label">Two gate</label>
                            </div>  
                        </div>

                        <div class="col-md-3">
                            <div class="row entrance_one_gate_width">
                                <div class="input-group input-group-sm">
                                    <select id="one_gate" name="one_gate" class="form-select form-select-sm">
                                        <option selected disabled value="Select gate width">Select gate width</option>
                                        <option value="{{MyApp::WIDE_12}}">12' - 0' wide</option>
                                        <option value="{{MyApp::WIDE_14}}">14' - 0' wide</option>
                                        <option value="{{MyApp::MORE_WIDE}}">More wide</option>
                                    </select>  
                                </div>
                            </div>
                            <div class="row entrance_two_gate_width"> 
                                <div class="form-check">
                                    <input class="form-check-input entrance_two_gate_adjacent_width" type="radio" name="two_gate" value="Adjacent" style="border-radius:20%;">
                                    <label class="form-check-label">Adjacent</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input entrance_two_gate_different_width" type="radio" name="two_gate" value="Different custom location" style="border-radius:20%;">
                                    <label class="form-check-label">Different custom location</label>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="row entrance_two_gate_adjacent_mainsidecar_width">
                        <div class="col-md-3">
                            <label class="form-check-label form-check-label-sm">Main car gate</label>
                            <div class="input-group input-group-sm">
                                <select id="main_car_gate" name="main_car_gate" class="form-select form-select-sm">
                                    <option selected disabled value="Select gate width">Select gate width</option>
                                    <option value="{{MyApp::WIDE_12}}">12' - 0' wide</option>
                                    <option value="{{MyApp::WIDE_14}}">14' - 0' wide</option>
                                    <option value="{{MyApp::MORE_WIDE}}">More wide</option>
                                </select>  
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-check-label form-check-label-sm">Side padestrian gate</label>
                            <div class="input-group input-group-sm">
                                <select id="side_padestrian_gate" name="side_padestrian_gate" class="form-select form-select-sm">
                                    <option selected disabled value="Select gate width">Select gate width</option>
                                    <option value="{{MyApp::WIDE_3}}">3' - 0' wide</option>
                                    <option value="{{MyApp::WIDE_4}}">4' - 0' wide</option>
                                    <option value="{{MyApp::MORE_WIDE}}">More wide</option>
                                </select>  
                            </div>
                        </div>
                        </div>
                        <div class="col-md-5 entrance_two_gate_different_customlocation_width">
                            <label class="form-check-label form-check-label-sm">Brief about different customed location</label>
                            <div class="input-group input-group-sm mb-1">
                                <input type="text" class="form-control" id="different_customized_location" name="different_customized_location" placeholder="Enter Brief about different customed location">
                            </div>
                        </div>
                    </div>
                                                           
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-header" style="padding: 2px;"><b>Security Kiosq</b></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="security_kiosq" value="With Sleeping Space" style="border-radius:20%;">
                                            <label class="form-check-label">With Sleeping Space</label>
                                        </div>           
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="security_kiosq" value="Without Sleeping Space" style="border-radius:20%;">
                                            <label class="form-check-label">Without Sleeping Space</label>
                                        </div>   
                                    </div>
                                    <div class="row">
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
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card bg-light">
                                <div class="card-header" style="padding: 2px;"><b>Porch</b></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-header ml-3" style="padding: 2px;">
                                                <input class="form-check-input visual_nature" type="radio" name="porch" value="Visual nature" style="border-radius:20%;">
                                                <label class="form-check-label">Visual Nature</label>
                                            </div>
                                            <div class="input-group input-group-sm visual_height">
                                                <select id="visual_nature" name="visual_nature" class="form-select form-select-sm">
                                                    <option selected disabled>Select height</option>
                                                    <option value="single height">Single height</option>
                                                    <option value="double height">Double height</option>
                                                </select>  
                                            </div>
                                            <div class="card-body">
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
                                        <div class="col-md-6">
                                            <div class="card-header ml-3" style="padding: 2px;">
                                                <input class="form-check-input car_parking" type="radio" name="porch" value="Car parking space" style="border-radius:20%;">
                                                <label class="form-check-label">Car Parking Space</label>
                                            </div>
                                            <div class="input-group input-group-sm car_parking_height">
                                                <select id="car_parking_space" name="car_parking_space" class="form-select form-select-sm">
                                                    <option selected disabled>Select Car Parking Space</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="5">5</option>
                                                    <option value="more">More</option>
                                                </select>  
                                            </div>
                                            <div class="card-body">
                                                <div class="row"></div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-light" style="width: 20rem;">
                                <div class="card-header" style="padding: 2px;"><b>Foyer/Welcome Lobby</b></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label class="form-check-label">Area of Lobby</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" id="approx_area" name="approx_area" placeholder="Approx Area">
                                                <span class="input-group-text" id="">SqFt</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label class="form-check-label">Lobby Design</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group input-group-sm">
                                                <select id="foyer_lobby" name="foyer_lobby" class="form-select form-select-sm">
                                                    <option selected disabled>Select lobby design</option>
                                                    <option value="Hilighter/Welcome Wall">Hilighter/Welcome Wall</option>
                                                    <option value="Shoe Rack Space">Shoe Rack Space</option>
                                                </select>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="width: 15rem;">
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
                            </div>
                        </div>
                        <div class="col-md-4 offset-md-1">
                            <div class="card bg-light">
                                <div class="card-header" style="padding: 2px;"><b>Varandah</b></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="verandah" value="Out Side Open" style="border-radius:20%;">
                                            <label class="form-check-label">Out Side Open</label>
                                        </div>    
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="verandah" value="Out Side Closed with glass" style="border-radius:20%;">
                                            <label class="form-check-label">Out Side Closed with glass</label>
                                        </div> 
                                    </div>
                                    <div class="row">
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
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="project_id" id="bungalow_entrance_project_id">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="saveBungalowEntranceBtn" class="btn btn-primary btn-sm ">Save Bungalow Entrance</button>
                        <button type="button" id="updateBungalowEntranceBtn" class="btn btn-primary btn-sm hide">Update Bungalow Entrance</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Start Bungalow DrawingHall Modal --}}
<div class="modal fade" id="bungalowDrawingHallModel" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
	    <div class="modal-content">
            <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Bungalow Drawing Hall</h5>
			    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		    </div>
            <div class="modal-body">
                <form id="bungalowDrawingHallForm">
                    @csrf
                    <div id="bungalow_drawinghall_err"></div> 
                    <div class="row">  
                        <div class="col-md-4">
                            <label class="form-label form-label-sm">Living hall family lounge</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="living_hall[]" value="Double height">
                                <label class="form-check-label">Double height</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="living_hall[]" value="Powder toilet">
                                <label class="form-check-label">Powder toilet</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="living_hall[]" value="Fire place inside">
                                <label class="form-check-label">Fire place inside</label>
                            </div>
                            <div class="card-body">
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
                            <label class="form-label  form-label-sm">Special features</label>
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-sm" type="text" name="living_hall_text" id="living_hall_text" placeholder="Breif about special features">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label  form-label-sm">Exclusive Drawing Hall</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="drawing_hall" id="drawing_hall" value="Fire Place Inside">
                                <label class="form-check-label">Fire Place Inside</label>
                            </div>
                            <div class="card-body">
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
                            <label class="form-label  form-label-sm">Special features</label>
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-sm" type="text" name="drawing_hall_text" id="drawing_hall_text" placeholder="Breif about special features">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label  form-label-sm">Kitchen Details</label>
                            <div class="row">
                                <div class="col-5">
                                    <label class="form-check-label">Kitchen area</label>
                                </div>
                                <div class="col-7">
                                    <div class="input-group input-group-sm mb-1">
                                        <input type="text" class="form-control" name="kitchen_area" id="kitchen_area" placeholder="kitchen areA">
                                        <span class="input-group-text">SqFt</span>
                                    </div>
                                </div>    
                                <div class="col-6">
                                    <label class="form-check-label">Kitchen location</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <select id="kitchen_floor" name="kitchen_floor" class="form-select form-select-sm">
                                            <option selected disabled>Select floors</option>
                                            <option value="{{MyApp::G_Floor}}">Ground Floor</option>
                                            <option value="{{MyApp::FLOOR_G}}">One Floor</option>
                                            <option value="{{MyApp::FLOOR_G_1}}">Two Floor</option>
                                            <option value="{{MyApp::FLOOR_G_2}}">Three Floor</option>
                                            <option value="{{MyApp::FLOOR_G_3}}">Four Floor</option>
                                            <option value="{{MyApp::OTHER_FLOOR}}">other</option>
                                        </select>  
                                    </div>
                                </div>
                                <div class="col-12 other_kitchen_location_col hide">
                                    <div class="input-group input-group-sm mb-1">
                                        <input type="text" class="form-control" name="other_kitchen_location" id="other_kitchen_location" placeholder="other kitchen location">
                                    </div>
                                </div>
                                <div class="input-group input-group-sm">
                                    <select id="kitchen_dining_function" name="kitchen_dining_function" class="form-select form-select-sm">
                                        <option selected disabled>Kitchen dinning functions</option>
                                        <option value="Full open to dinning">Full open to dinning</option>
                                        <option value="Partial open to dinning">Partial open to dinning</option>
                                        <option value="Open with a reasonable openning">Open with a reasonable openning</option>
                                        <option value="Open with a door">Open with a door</option>
                                    </select>  
                                </div> 
                            </div> 
                            <div class="card-body">
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
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="input-group input-group-sm">
                                <select id="refrigerator_size" name="refrigerator_size" class="form-select form-select-sm">
                                    <option selected disabled>Refrigerator Types</option>
                                    <option value="Single door">Single door</option>
                                    <option value="Double door">Double door</option>
                                </select>  
                            </div> 
                            <div class="card-body">
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
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-6 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input attached_store" type="checkbox" name="kitchen_features[]" value="Attached store area">
                                        <label class="form-check-label">Attached store area</label>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-5 attached_store_input">
                                    <div class="input-group input-group-sm mb-1">
                                        <input type="text" class="form-control" name="attached_store" id="attached_store" placeholder="Attached store area">
                                        <span class="input-group-text">SqFt</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input utility_washroom" type="checkbox" name="kitchen_features[]" value="Utility wash room">
                                        <label class="form-check-label">Utility wash room</label>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-5 utility_washroom_input">
                                    <div class="input-group input-group-sm mb-1">
                                        <input type="text" class="form-control" name="utility_wash_room" id="utility_wash_room" placeholder="Utility wash room">
                                        <span class="input-group-text">SqFt</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input washroom_area" type="checkbox" name="kitchen_features[]" value="Wash area open">
                                        <label class="form-check-label">Wash area open</label>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-5">
                                    <div class="input-group input-group-sm mb-1 washroom_area_input">
                                        <input type="text" class="form-control"  name="wash_area_open" id="wash_area_open" placeholder="Wash area open">
                                        <span class="input-group-text">SqFt</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kitchen_features[]" value="Breakfast Table area inside">
                                        <label class="form-check-label">Breakfast Table area inside</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kitchen_features[]" value="Central Island">
                                        <label class="form-check-label">Central Island</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 col-sm-4">
                                    <label class="form-check-label">Specific Requirements</label>
                                </div>
                                <div class="col-8 col-sm-7">
                                    <div class="input-group input-group-sm mb-1">
                                        <input type="text" class="form-control" name="specific_req" id="specific_req" placeholder="Specific Requirement">
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <input type="hidden" name="project_id" id="bungalow_drawing_hall_project_id">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" id="savebungalowDrawingHallBtn" class="btn btn-primary btn-sm ">Save Bungalow Drawing Hall</button>
                <button type="button" id="updatebungalowDrawingHallBtn" class="btn btn-primary btn-sm hide">Update Bungalow Drawing Hall</button>
            </div>
        </div>
    </div>
</div>

{{-- Start Bungalow Pantry Modal --}}
<div class="modal fade" id="bungalowPantryModel" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
	    <div class="modal-content">
            <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Bungalow Pantry</h5>
			    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		    </div>
            <div class="modal-body">
                <form id="bungalowPantryForm">
                    @csrf
                    <div id="bungalow_pantry_err"></div>
                    <div class="row">     
                        <label class="form-label form-label-sm">Pantry Details</label>
                        <div class="row">
                            <div class="col-3 col-sm-3">
                                <label class="form-check-label">Pantry Floors</label>
                            </div>
                            <div class="col-4 col-sm-4">
                                <div class="input-group input-group-sm">
                                    <select id="pantry_floor" name="pantry_floor" class="form-select form-select-sm">
                                        <option selected disabled>Select Floor</option>
                                        <option value="{{MyApp::G_Floor}}">Ground floor</option>
                                        <option value="{{MyApp::FLOOR_G}}">1 floor</option>
                                        <option value="{{MyApp::FLOOR_G_1}}">2 floor</option>
                                        <option value="{{MyApp::FLOOR_G_2}}">3 floor</option>
                                        <option value="{{MyApp::FLOOR_G_3}}">4 floor</option>
                                        <option value="{{MyApp::OTHER_FLOOR}}">Other</option>
                                    </select>  
                                </div> 
                            </div>
                            <div class="col-5 col-sm-5 hide" id="other_pantry_text_row">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" name="other_pantry_floor_text" id="other_pantry_floor_text" placeholder="Pantry location">
                                </div>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-6 col-sm-5">
                                <label class="form-check-label">Specific Requirement</label>
                            </div>
                            <div class="col-6 col-sm-7">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" name="specific_req" id="specific_req" placeholder="Text your specific requirements">
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="row mt-3">
                        <label class="form-label form-label-sm">Dinning Details</label>
                        <div class="row">
                            <div class="col-3 col-sm-3">
                                <label class="form-check-label">Dinning Floors</label>
                            </div>
                            <div class="col-4 col-sm-4">
                                <div class="input-group input-group-sm">
                                    <select id="dining_floor" name="dining_floor" class="form-select form-select-sm">
                                        <option selected disabled>Dinning Floor</option>
                                        <option value="{{MyApp::G_Floor}}">Ground floor</option>
                                        <option value="{{MyApp::FLOOR_G}}">1 floor</option>
                                        <option value="{{MyApp::FLOOR_G_1}}">2 floor</option>
                                        <option value="{{MyApp::FLOOR_G_2}}">3 floor</option>
                                        <option value="{{MyApp::FLOOR_G_3}}">4 floor</option>
                                        <option value="{{MyApp::OTHER_FLOOR}}">Other</option>
                                    </select>  
                                </div> 
                            </div>
                            <div class="col-5 col-sm-5 hide" id="other_dinning_floor_text_row">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" name="other_dinning_floor_text" id="other_dinning_floor_text" placeholder="Dinning Floors">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 col-sm-3">
                                <label class="form-check-label">Dinning Seats</label>
                            </div>
                            <div class="col-4 col-sm-4">
                                <div class="input-group input-group-sm">
                                    <select id="dining_seat" name="dining_seat" class="form-select form-select-sm">
                                        <option selected disabled>Select Seats</option>
                                        <option value="{{MyApp::SEAT_ONE}}">1 Seat</option>
                                        <option value="{{MyApp::SEAT_TWO}}">2 Seats</option>
                                        <option value="{{MyApp::SEAT_THREE}}">3 Seats</option>
                                        <option value="{{MyApp::SEAT_FOUR}}">4 Seats</option>
                                        <option value="{{MyApp::SEAT_OTHER}}">Other</option>
                                    </select>  
                                </div> 
                            </div>
                            <div class="col-5 col-sm-5 hide" id="other_dinning_seat_text_row">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" name="other_dinning_seat_text" id="other_dinning_seat_text" placeholder="Dinning Seats">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-5">
                                <label class="form-check-label">Specific Requirement</label>
                            </div>
                            <div class="col-6 col-sm-7">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" name="dining_text" id="dining_text" placeholder="Text your specific requirements">
                                </div>
                            </div>
                        </div> 
                        <div class="row mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="dining_features[]" value="With crockery storage and display">
                                <label class="form-check-label">With crockery storage and display</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="dining_features[]" value="Without crockery storage and display">
                                <label class="form-check-label">Without crockery storage and display</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="dining_features[]" value="With nearby washroom">
                                <label class="form-check-label">With nearby washroom</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="dining_features[]" value="Double height">
                                <label class="form-check-label">Double height</label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="project_id" id="bungalow_pantry_project_id">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" id="savebungalowPantryBtn" class="btn btn-primary btn-sm ">Save Bungalow Pantry</button>
                <button type="button" id="updatebungalowPantryBtn" class="btn btn-primary btn-sm hide">Update Bungalow Pantry</button>
            </div>
        </div>
    </div>
</div>

{{-- Start Bungalow FloorStore Modal --}}
<div class="modal fade" id="bungalowFloorStoreModel" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
	    <div class="modal-content">
            <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Bungalow Floor Store</h5>
			    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		    </div>
            <div class="modal-body">
                <form id="bungalowFloorStoreForm">
                    @csrf
                    <div id="bungalow_floorstore_err"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label form-label-sm">Store floor</label>
                            <div class="row">
                                <div class="input-group input-group-sm mb-1">
                                    <input type="text" class="form-control" name="floor_store_area" id="floor_store_area" placeholder="floor store area">
                                    <label class="input-group-text">SqFt</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group input-group-sm">
                                    <select id="store_floor" name="store_floor" class="form-select form-select-sm">
                                        <option selected disabled>floor store location</option>
                                        <option value="{{MyApp::FLOOR_G_1}}">1st floor</option>
                                        <option value="{{MyApp::FLOOR_G_2}}">2nd floor</option>
                                        <option value="{{MyApp::FLOOR_G_3}}">3rd floor</option>
                                        <option value="{{MyApp::OTHER_FLOOR}}">other</option>
                                    </select>  
                                </div> 
                            </div>
                            <div class="row hide store_floor_specific">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" name="floor_store_other_text" id="floor_store_other_text" placeholder="floor store location">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label form-label-sm">Bungalow Stair Case</label>
                            <div class="row">
                                <div class="input-group input-group-sm">
                                    <select id="stair_case" name="stair_case" class="form-select form-select-sm">
                                        <option selected disabled>Select Stair case</option>
                                        <option value="dog lagged">Dog lagged</option>
                                        <option value="open wall">Open wall</option>
                                        <option value="spira_l">Spiral</option>
                                        <option value="style_1">U-shaped</option>
                                        <option value="style_2">L-shaped</option>
                                        <option value="style_3">Curved</option>
                                    </select>  
                                </div> 
                            </div>
                            <div class="card-body">
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
                            <div class="row">
                                <small>Upload staire image</small>
                                <div class="input-group input-group-sm">
                                    <input type="file" class="form-control" id="stair_case_image" name="stair_case_image">
                                    {{-- <label class="input-group-text" for="">Upload</label> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label class="form-label form-label-sm">Lift</label>
                            <div class="row">
                                <div class="input-group input-group-sm">
                                    <select id="passanger_capacity" name="passanger_capacity" class="form-select form-select-sm">
                                        <option selected disabled>Passanger Capacity</option>
                                        <option value="4">4</option>
                                        <option value="6">6</option>
                                        <option value="8">8</option>
                                        <option value="{{MyApp::MORE}}">More</option>
                                    </select>  
                                </div> 
                            </div>
                            <div class="row capecity_passenger hide">
                                <div class="input-group input-group-sm mb-1">
                                    <input type="text" class="form-control" name="passenger_capacity_other_text" id="passenger_capacity_other_text" placeholder="passenger capecity">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group input-group-sm mb-1">
                                    <input type="text" class="form-control" name="lift_req" id="lift_req" value="" placeholder="lift requirements">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label form-label-sm">Pooja Room</label>
                            <div class="row mb-1">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" name="pooja_room_area" id="pooja_room_area" placeholder="area of pooja room">
                                    <label class="input-group-text">SqFt</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group input-group-sm">
                                    <select id="pooja_room_floor" name="pooja_room_floor" class="form-select form-select-sm">
                                        <option selected disabled>select location</option>
                                        <option value="{{MyApp::FLOOR_G_1}}">1st floor</option>
                                        <option value="{{MyApp::FLOOR_G_2}}">2nd floor</option>
                                        <option value="{{MyApp::FLOOR_G_3}}">3rd floor</option>
                                        <option value="{{MyApp::OTHER_FLOOR}}">other</option>
                                    </select>  
                                </div> 
                            </div>
                            <div class="row mb-1 hide poojaroom_specific_location">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" name="pooja_room_other_text" id="pooja_room_other_text" placeholder="location of poojaroom">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group input-group-sm">
                                    <select id="pooja_room_type" name="pooja_room_type" class="form-select form-select-sm">
                                      <option selected disabled>Pooja room types</option>
                                      <option value="{{MyApp::PROPER_ROOM}}">Proper room</option>
                                      <option value="{{MyApp::ONLY_PLACE}}">Only place</option>
                                    </select>
                                    <label class="input-group-text" style="height: 31px;">SqFt</label>
                                </div>
                                <div class="card-body">
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
                            {{-- <div class="row">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" name="" id="" placeholder="Text Your Requirements">
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="opening_to_li_ha" name="opening_to_li_ha" value="Opening towards living hall">
                                    <label class="form-check-label">Opening towards living hall</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="project_id" id="bungalow_floor_store_project_id">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" id="savebungalowFloorStoreBtn" class="btn btn-primary btn-sm ">Save Floor Store</button>
                <button type="button" id="updatebungalowFloorStoreBtn" class="btn btn-primary btn-sm hide">Update Floor Store</button>
            </div>
        </div>
    </div>
</div>

{{-- Start Bungalow Bedroom Modal --}}
<div class="modal fade" id="bungalowBedroomModel" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
	    <div class="modal-content">
            <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Bungalow Bedroom</h5>
			    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		    </div>
            <div class="modal-body">
                <form id="bungalowBedroomForm">
                    @csrf
                    <div id="bungalow_bedroom_err"></div>
                    <div class="row mb-2">
                        @foreach($bedrooms as $bedroom)
                            <div class="col-md-2">
                                <div class="card">
                                    <div class="form-check bedroom">
                                        <input class="form-check-input " type="checkbox" name="bedroom[]" value="{{$bedroom->id}}" bedroom-type="{{ucwords($bedroom->bedroom_name)}}">
                                        <label class="form-check-label">{{ucwords($bedroom->bedroom_name)}}</label>
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                    </div>

                    <div id="bungalow_bedroom_type_detail"></div>

                    <input type="hidden" name="project_id" id="bungalow_bedroom_project_id">
                </form>
            </div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" id="savebungalowBedroomBtn" class="btn btn-primary btn-sm">Save Bedroom</button>
                <button type="button" id="updatebungalowBedroomBtn" class="btn btn-primary btn-sm hide">Update Bedroom</button>
            </div>
        </div>
    </div>
</div>

{{-- bedroom form start --}}
<div class="hide" id="bedroom_modal">


<div class="card bedroom_modal" id="">
   <div class="card-header"></div>
    <div class="card-body row">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">
                    <div class="form-check">
                        <label class="form-check-label">Location</label>
                    </div>
                </div>
                <div class="card-body bed_loc_firstgroundtext">
                    <div class="input-group input-group-sm mb-1">
                        <input type="text" class="form-control" name="bedroom_area" id="bedroom_area" placeholder="bed room area">
                    </div>
                    <div class="input-group input-group-sm">
                        <select id="bedroom_floor" name="bedroom_floor" class="form-select form-select-sm bedroom_floor_req">
                            <option selected disabled>Select location</option>
                            <option value="{{MyApp::FLOOR_G}}">1st floor</option> 
                            <option value="{{MyApp::FLOOR_G_1}}">2nd floor</option> 
                            <option value="{{MyApp::FLOOR_G_2}}">3rd floor</option> 
                            <option value="{{MyApp::OTHER_FLOOR}}">other</option> 
                        </select>  
                    </div> 
                    <div class="input-group input-group-sm" id="bedroom_floor_specific_req">
                        <input type="text" class="form-control" name="" id="" placeholder="Bed room floor location">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">
                    <div class="form-check">
                        <label class="form-check-label">Nos</label>
                    </div>
                </div>
                <div class="card-body bed_nos_onetwotext">
                    <div class="input-group input-group-sm">
                        <select id="bedroom_nos" name="bedroom_nos" class="form-select form-select-sm bedroom_nos_req">
                            <option selected disabled>Select floor</option>
                            <option value="{{MyApp::FLOOR_G}}">1st floor</option> 
                            <option value="{{MyApp::FLOOR_G_1}}">2nd floor</option> 
                            <option value="{{MyApp::FLOOR_G_2}}">3rd floor</option> 
                            <option value="{{MyApp::OTHER_FLOOR}}">other</option> 
                        </select>  
                    </div> 
                    <div class="input-group input-group-sm" id="bedroom_nos_specific_req">
                        <input type="text" class="form-control" name="" id="" placeholder="NOS specific requirement">
                    </div>    
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">
                    <div class="form-check">
                        <label class="form-check-label">Toilet Area</label>
                    </div>
                </div>
                <div class="card-body bed_toilet_text">
                    <div class="input-group input-group-sm mb-1">
                        <input type="text" class="form-control" name="bedroom_toilet_area" id="bedroom_toilet_area" placeholder="toilet area">
                    </div>
                    <div class="input-group input-group-sm">
                        <select id="bedroom_toilet_facility" name="bedroom_toilet_facility" class="form-select form-select-sm bedroom_toilet_req">
                            <option selected disabled>Select toilet facility</option>
                            <option value="shower encloser">Shower encloser</option> 
                            <option value="jacuzzi bathtubs">Jacuzzi Bathtubs</option> 
                            <option value="both">Both</option> 
                            <option value="{{MyApp::OTHER_FLOOR}}">other</option> 
                        </select>  
                    </div> 
                    <div class="input-group input-group-sm" id="bedroom_toilet_specific_req">
                        <input type="text" class="form-control" name="" id="" placeholder="toilet facility">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <div class="form-check">
                        <label class="form-check-label">Dress Area</label>
                    </div>
                </div>
                <div class="card-body bed_dress_text">
                    <div class="input-group input-group-sm mb-1">
                        <input type="text" class="form-control" name="bedroom_dress_area" id="bedroom_dress_area" placeholder="Enter dress area">
                    </div>
                    <div class="row">
                        <label class="form-check-label form-check-label-sm">Dress Facility</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="bedroom_dress_facility[]">
                            <label class="form-check-label">Walk-in cupboard</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="bedroom_dress_facility[]">
                            <label class="form-check-label">Vanity</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="bedroom_dress_facility[]">
                            <label class="form-check-label">Cupboard</label>
                        </div>
                        <div class="input-group input-group-sm mb-1">
                            <input type="text" class="form-control" name="" id="" placeholder="More facilities">
                        </div>
                    </div> 
                    <div class="card-body">
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
                    <small>Upload reference image</small>
                    <div class="input-group input-group-sm">
                        <input type="file" class="form-control" id="bedroom_img" class="bedroom_img">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <div class="form-check">
                        <label class="form-check-label">Room Facility</label>
                    </div>
                </div>
                <div class="card-body bed_roomfacility_text">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="bedroom_facility[]">
                        <label class="form-check-label">Chair Arrangement</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="bedroom_facility[]">
                        <label class="form-check-label">Sofa Arrangement</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="bedroom_facility[]">
                        <label class="form-check-label">Writing laptop table</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="bedroom_facility[]">
                        <label class="form-check-label">TV</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="bedroom_facility[]">
                        <label class="form-check-label">Mini Baar</label>
                    </div>
                    <div class="input-group input-group-sm mb-1">
                        <input type="text" class="form-control" name="" id="" placeholder="More facilities">
                    </div>
                    <div class="card-body">
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
            </div>
        </div>
    </div>
</div>
</div>
{{-- bedroom form end --}}

{{-- Start Bungalow Basement Modal --}}
<div class="modal fade" id="bungalowBasementModel" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
	    <div class="modal-content">
            <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Bungalow Basement</h5>
			    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		    </div>
            <div class="modal-body">
                <form id="bungalowBasementForm">
                    @csrf
                    <div id="bungalow_basement_err"></div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="input-group input-group-sm">
                                <select id="basement" name="basement" class="form-select form-select-sm">
                                    <option selected disabled>Basement</option>
                                    <option value="{{MyApp::PARKING}}">for Parking</option> 
                                    <option value="{{MyApp::AMENITIES}}">for Amenities</option>
                                </select>  
                            </div> 
                        </div>
                        <div class="col-md-3">
                            <div class="input-group input-group-sm">
                                <select id="stilt" name="stilt" class="form-select form-select-sm">
                                    <option selected disabled>Stilt</option>
                                    <option value="{{MyApp::PARKING}}">for Parking</option> 
                                    <option value="{{MyApp::AMENITIES}}">for Amenities</option>
                                </select>  
                            </div> 
                        </div>
                    </div>  

                    <div class="row mt-2">
                        <label class="form-check-label form-label-check-sm">Amenities</label>
                        <div class="col-md-3">
                            <div class="form-check card">
                                <input class="form-check-input OFFICE" type="checkbox" name="amenities[]" value="office">
                                <label class="form-check-label">Office</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check card">
                                <input class="form-check-input SERVENT_QUARTER" type="checkbox" name="amenities[]" value="servent quarter">
                                <label class="form-check-label">Servent Quater</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check card">
                                <input class="form-check-input HOME_THEATER" type="checkbox" name="amenities[]" value="home theater">
                                <label class="form-check-label">Home Theater</label>
                            </div>   
                        </div>
                        <div class="col-md-3">
                            <div class="form-check card">
                                <input class="form-check-input PARKING_GARAGE" type="checkbox" name="amenities[]" value="parking garage">
                                <label class="form-check-label">Parking Garage</label>
                            </div>
                        </div>
                    </div>   
 
                    <div class="row">
                        <div class="col-md-6 office_card">
                            <div class="card">
                                <div class="card-header" style="padding: 3px;"><b>Office</b></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="form-check-label">Office Area</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="office_area" id="office_area" placeholder="office area">
                                                <span class="input-group-text">SqFt</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="form-check-label">Location</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group input-group-sm">
                                                <select id="office_location" name="office_location" class="form-select form-select-sm bedroom_floor_req">
                                                    <option selected disabled>Choose location</option>
                                                    <option value="{{MyApp::BASEMENT}}">Basement</option> 
                                                    <option value="{{MyApp::STILT}}">Stilt</option>
                                                    <option value="{{MyApp::GROUND_OTHER_THAN_STILT_AREA}}">Ground other than stilt area</option> 
                                                </select>  
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-2">
                                            <label class="form-check-label form-check-label-sm">Facilities</label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="office_facility[]" value="pantry">
                                                <label class="form-check-label">Pantry</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="office_facility[]" value="toilet">
                                                <label class="form-check-label">Toilet</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="office_facility[]" value="staf toilet">
                                                <label class="form-check-label">Staf Toilet</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-5">Other requirement</div>
                                        <div class="col-md-7"> 
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="office_specific_area" id="office_specific_area" placeholder="other requirement">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 servent_quarter_card">
                            <div class="card">
                                <div class="card-header" style="padding: 3px;"><b>Servent Quarter</b></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-check-label">Servent Quarter Area</label>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="servent_quarter_area" id="servent_quarter_area" placeholder="servent quater area">
                                                <span class="input-group-text">SqFt</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="form-check-label">Location</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group input-group-sm">
                                                <select id="servent_quarter_location" name="servent_quarter_location" class="form-select form-select-sm bedroom_floor_req">
                                                    <option selected disabled>Choose location</option>
                                                    <option value="{{MyApp::BASEMENT}}">Basement</option> 
                                                    <option value="{{MyApp::STILT}}">Stilt</option>
                                                    <option value="{{MyApp::GROUND_OTHER_THAN_STILT_AREA}}">Ground other than stilt area</option> 
                                                </select>  
                                            </div> 
                                        </div>
                                        {{-- <div class="col-4">
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="servent_quarter_specific_area" id="servent_quarter_specific_area" placeholder="Enter texts">
                                            </div>
                                        </div>  --}}
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-4">
                                            <label class="form-check-label form-check-label-sm">Facilities</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="servent_quarter_facility" value="One room + Small kit + Toilet">
                                                <label class="form-check-label">One room + small kit + toilet</label>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-4">
                                            <label class="form-check-label form-check-label-sm">Other Facilities</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="servent_quarter_facility_area" id="servent_quarter_facility_area" placeholder="other facilities">
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 psrking_garage_card">
                            <div class="card">
                                <div class="card-header" style="padding: 3px;"><b>Parking Garage</b></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-check-label">Parking Garage Area</label>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="parking_garage_area" id="parking_garage_area" placeholder="parking area">
                                                <span class="input-group-text">SqFt</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-check-label">for how many cars</label>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="no_of_cars" id="no_of_cars" placeholder="No. of cars">
                                                <span class="input-group-text">SqFt</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="form-check-label">Location</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group input-group-sm">
                                                <select id="parking_garage_location" name="parking_garage_location" class="form-select form-select-sm bedroom_floor_req">
                                                    <option selected disabled>Choose location</option>
                                                    <option value="{{MyApp::BASEMENT}}">Basement</option> 
                                                    <option value="{{MyApp::STILT}}">Stilt</option>
                                                    <option value="{{MyApp::GROUND_OTHER_THAN_STILT_AREA}}">Ground other than stilt area</option>
                                                </select>  
                                            </div> 
                                        </div>
                                        {{-- <div class="col-5">
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="parking_garage_specific_area" id="parking_garage_specific_area" placeholder="Enter texts">
                                            </div>
                                        </div>  --}}
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="form-check-label">Seperate Shade</label>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="saperate_shade" id="saperate_shade" placeholder="seperate shade">
                                                {{-- <span class="input-group-text">SqFt</span> --}}
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 home_theater_card">
                            <div class="card">
                                <div class="card-header" style="padding: 3px;"><b>Home theater</b></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-check-label">Home theater Area</label>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="home_theater_area" id="home_theater_area" placeholder="home theater area">
                                                <span class="input-group-text">SqFt</span>
                                            </div>
                                        </div> 
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="form-check-label">Floor</label>
                                        </div>
                                        <div class="col-5">
                                            <div class="input-group input-group-sm">
                                                <select id="home_theater_floor" name="home_theater_floor" class="form-select form-select-sm bedroom_floor_req">
                                                    <option selected disabled>Select floor</option>
                                                    <option value="{{MyApp::FLOOR_G}}">1st floor</option> 
                                                    <option value="{{MyApp::FLOOR_G_1}}">2nd floor</option> 
                                                    <option value="{{MyApp::FLOOR_G_2}}">3rd floor</option> 
                                                    <option value="{{MyApp::OTHER_FLOOR}}">other</option> 
                                                </select>  
                                            </div> 
                                        </div>
                                        <div class="col-5 hide home_theater_other">
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="" id="" placeholder="other floor">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="form-check-label">Seats</label>
                                        </div>
                                        <div class="col-5">
                                            <div class="input-group input-group-sm">
                                                <select id="home_theater_seats" name="home_theater_seats" class="form-select form-select-sm bedroom_floor_req">
                                                    <option selected disabled>Select Seats</option>
                                                    <option value="{{MyApp::SEAT_ONE}}">1 Seat</option>
                                                    <option value="{{MyApp::SEAT_TWO}}">2 Seats</option>
                                                    <option value="{{MyApp::SEAT_THREE}}">3 Seats</option>
                                                    <option value="{{MyApp::SEAT_FOUR}}">4 Seats</option>
                                                    <option value="{{MyApp::SEAT_OTHER}}">Other</option>
                                                </select>  
                                            </div> 
                                        </div>
                                        <div class="col-5 home_theater_seat_other hide">
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="" id="" placeholder="other seats">
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="project_id" id="bungalow_basement_project_id">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" id="savebungalowBasementBtn" class="btn btn-primary btn-sm ">Save Basement</button>
                <button type="button" id="updatebungalowBasementBtn" class="btn btn-primary btn-sm hide">Update Basement</button>
            </div>
        </div>
    </div>
</div>



  


     

