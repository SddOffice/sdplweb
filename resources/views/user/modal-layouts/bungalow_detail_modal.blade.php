
{{-- START MAIN MODAL --}}
<div class="modal fade main_modal" id="createProjectModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">4
    <div class="modal-dialog modal-sm modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_name"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="grad">
               <div class="my-3"></div>
                <form class="form_name" id="createProjectForm">
                    @csrf
                    <div id="errors"></div>
                    <div id="project_module"></div>

                    <input type="hidden" name="project_id" id="project_id">
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm hide" id="previousModalBtn">Previous</button>
                <button type="button" class="btn btn-primary btn-sm" id="saveModalBtn">Save</button>
                <button type="button" class="btn btn-primary btn-sm hide" id="updateModalBtn">Update</button>
                <button type="button" class="btn btn-danger btn-sm" id="nextModalBtn">Next</button>
            </div>
        </div>
    </div>
</div>
{{-- END MAIN MODAL --}}



{{-- START CREATE PROJECT MODAL --}}
<div class="row hide" id="project_modal">
    <span id="project_url" url="project" modal-index="0"></span>
    <div class="row">
        <div class="col-md-6">
            <select name="project_group_id" id="project_group_id" class="form-select form-select-sm" >
                <option selected disabled>Project Group</option>
                @foreach ($project_group as $group)
                    <option value="{{$group->id}}">{{ucwords($group->project_group)}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <select name="project_type_id" id="project_type_id" class="form-select form-select-sm">
            </select>
        </div>
    </div>

    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-4">
            <select name="prefix" id="prefix" class="form-select form-select-sm">
                <option selected disabled>select</option>
                <option value="{{MyApp::MR}}">Mr</option>
                <option value="{{MyApp::MRS}}">Mrs</option>
                <option value="{{MyApp::MS}}">Ms</option>
                <option value="{{MyApp::M_S}}">M/S</option>
            </select>
        </div>  
        <div class="col-md-4 mb-1">
            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="firstname">
        </div>
        <div class="col-md-4">
            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="lastname" >
        </div>
    </div>

    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">Email</label>
        </div>
        <div class="col-md-9">
            <input type="text" name="email" id="email" class="form-control" placeholder="Email" >
        </div>
    </div>

    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">Project Address</label>
        </div>
        <div class="col-md-9">
            <div class="input-group">
                <textarea class="form-control" id="address" name="address" aria-label="With textarea" placeholder="Address"></textarea>
              </div>
        </div>
    </div>
    
    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">Country</label>
        </div>
        <div class="col-md-9">
            <select name="country" id="country" class="form-select form-select-sm" onchange="getState(this.value);">
                <option selected disabled>Choose Country</option>
                @foreach ($countries as $country)
                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                @endforeach 											
            </select>
        </div>
    </div>

    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">State</label>
        </div>
        <div class="col-md-9">
            <select id="state" name="state" class="form-select form-select-sm"></select>
        </div>
    </div>

    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">City</label>
        </div>
        <div class="col-md-9">
            <select id="city" name="city" class="form-select form-select-sm"></select>
        </div>
    </div>
    <hr>

    <label for="">Peoperty Details</label>
    <div class="row">
        <div class="col-md-4">
            <div class="form-check plot_type">
                <input class="form-check-input form-check-input-sm plot_type" type="radio" name="plot_type" value="{{MyApp::REGULAR_PLOT}}" style="border-radius:20%;">
                <label class="form-check-label  form-check-label-sm">Regular Plot</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check mb-1 plot_type">
                <input class="form-check-input form-check-input-sm plot_type" type="radio" id="ir_regular_plot" name="plot_type" value="{{MyApp::IR_REGULAR_PLOT}}" style="border-radius:20%;">
                <label class="form-check-label form-check-label-sm">Irregular Plot</label>
            </div>
        </div>
        <div class="offset-md-1 col-md-3">
            <select class="form-select form-select-sm" id="dimention" style="flex: 0.3 0 auto">
                <option value="{{MyApp::FT}}">Ft.</option>
                <option value="{{MyApp::MTR}}">Mtr</option>
            </select>
        </div>
    </div>

    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group mb-1">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control input"  id="plot_length"  name="plot_length" placeholder="Length" required>
                {{-- <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select> --}}
            </div>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control input" id="plot_width"  name="plot_width" placeholder="Width" required>
                {{-- <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select> --}}
            </div>
        </div>
        <div class="col-md-6 onirregular">
            <div class="input-group mb-1">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control" id="diagonal_1"  name="diagonal_1" placeholder="Diagonal1" required>
                {{-- <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select> --}}
            </div>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="diagonal_2" name="diagonal_2" placeholder="Diagonal2" required>
                {{-- <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select> --}}
            </div>
        </div>
    </div>

    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-4">
            <label class="form-check-label  form-check-label-sm">Plot Size</label>
            <span style="color:#ff0000">*</span>
        </div>
        <div class="col-md-8">
            <div class="input-group">
                <input type="text" class="form-control" id="plot_size" name="plot_size" placeholder="Plot Area"  style="width:50%;"  readonly>
                {{-- <select class="form-select form-select-sm" style="flex: 1.5 auto;">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>  --}}
               
            </div>
        </div>
    </div>

    <div class="my-1"></div>
    <label class="form-check-label"><small>Upload a Hand Sketch Image</small></label>
    <div class="row">
        <div class="col-md-1">
            <img src="{{asset('public/sdpl-assets/user/images/Form_Img/cloud-upload.png')}}" alt="" width="20" height="20">  
        </div>
        <div class="col-md-8">
            <div class="input-group">
                <input type="file" class="form-control" id="hand_sketch_img"  name="hand_sketch_img" aria-describedby="" aria-label="Upload">
            </div>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-primary disabled btn-sm">Preview</button>
        </div>
    </div>

    <div class=""></div>
    <div class="row">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="apmt" name="apmt" value="1">
            <label class="form-check-label">Appoint a Surveyor</label>
        </div> 
    </div>

    <div class="my-1"></div>
    <label class="form-check-label">Plot Borders</label>
    <div class="row">
        <div class="col-md-2">
            <label class="form-check-label">East</label>
        </div>
        <div class="col-md-7">
            <div class="form-check east_property">
                <input class="form-check-input" type="radio" name="east_property" value="{{MyApp::PLOT_BORDER_PROPERTY}}" style="border-radius: 20%;">
                <label class="form-check-label">Other Property</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input class="form-check-input east_property ck_east_road " type="radio" name="east_property" value="{{MyApp::PLOT_BORDER_ROAD}}" style="border-radius:20%;">
                <label class="form-check-label">Road</label>
            </div>
        </div> 
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="input-group">
                <input type="text" class="form-control input_east_show" id="east_road_width" name="east_road_width" placeholder="east road width" style="width:50%;" required>
                {{-- <select class="form-select form-select-sm input_east_show" style="flex: 1.5 auto;">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>  --}}
            </div>
        </div> 
    </div>
    
    <div class="row">
        <div class="col-md-2">
            <label class="form-check-label">West</label>
        </div>
        <div class="col-md-7">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="west_property" name="west_property" value="{{MyApp::PLOT_BORDER_PROPERTY}}" style="border-radius: 20%;">
                <label class="form-check-label">Other Property</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input class="form-check-input  ck_west_road" type="radio" name="west_property" value="{{MyApp::PLOT_BORDER_ROAD}}" style="border-radius:20%;">
                <label class="form-check-label">Road</label>
            </div>
        </div>  
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="input-group">
                <input type="text" class="form-control input_west_show" id="west_road_width" name="west_road_width" placeholder="west road width" style="width:50%;" required>
                {{-- <select class="form-select form-select-sm input_west_show" style="flex: 1.5 auto;">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>  --}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <label class="form-check-label">North</label>
        </div>
        <div class="col-md-7">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="north_property" name="north_property" value="{{MyApp::PLOT_BORDER_PROPERTY}}" style="border-radius: 20%;">
                <label class="form-check-label">Other Property</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input class="form-check-input ck_north_road" type="radio" name="north_property" value="{{MyApp::PLOT_BORDER_ROAD}}" style="border-radius:20%;">
                <label class="form-check-label ">Road</label>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="input-group">
                <input type="text" class="form-control input_north_show" id="north_road_width" name="north_road_width" placeholder="north road width" style="width:50%;" required>
                {{-- <select class="form-select form-select-sm input_north_show" style="flex: 1.5 auto;">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>  --}}
            </div>
        </div>  
    </div>
    <div class="row">
        <div class="col-md-2">
            <label class="form-check-label">South</label>
        </div>
        <div class="col-md-7">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="south_property" name="south_property" value="{{MyApp::PLOT_BORDER_PROPERTY}}" style="border-radius: 20%;">
                <label class="form-check-label">Other Property</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check">
                <input class="form-check-input ck_south_road" type="radio" name="south_property" value="{{MyApp::PLOT_BORDER_ROAD}}" style="border-radius:20%;">
                <label class="form-check-label">Road</label>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="input-group">
                <input type="text" class="form-control input_south_show" id="south_road_width" name="south_road_width" placeholder="south road width" style="width:50%;" required>
                {{-- <select class="form-select form-select-sm input_south_show" style="flex: 1.5 auto;">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>  --}}
            </div>
        </div>  
    </div>
   
    <div class="my-1"></div>
    <div class="row bg-white">
        <div class="form-check">
            <input class="form-check-input form-check-input-sm perpendicularly_north"  type="checkbox" id="plot_orientation" name="plot_orientation" value="1">
            <label class="form-check-label"><small>Plot is not oriented perpendicularly with north</small></label>
        </div>
    </div>
    <div class="row bg-white input_hand_sketch_orientation_img">
        <label class="form-check-label"><small>Upload hand sketch image with orientation</small></label>
        <div class="col-md-1">
            <img src="{{asset('public/sdpl-assets/user/images/Form_Img/cloud-upload.png')}}" alt="" width="20" height="20">  
        </div>
        <div class="col-md-8">
            <div class="input-group">
                <input type="file" class="form-control" id="hand_sketch_orientation_img" name="hand_sketch_orientation_img" aria-describedby="" aria-label="Upload">
            </div>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-primary disabled btn-sm">Preview</button>
        </div>
    </div>
    
    <div class="my-1"></div>
    <label class="form-check-label">Down/up of ground from abuting front</label>
    <div class="row">     
        <div class="col-md-6">
            <select class="form-select form-select-sm" id="level" name="level">
                <option selected disabled>Select level</option>
                <option value="{{MyApp::LEVEL_ALMOST}}">Almost Same</option>
                <option value="{{MyApp::LEVEL_UP}}">Up</option>
                <option value="{{MyApp::LEVEL_DOWN}}">Down</option>
            </select> 
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" class="form-control" id="level_value" name="level_value" placeholder="enter value"  style="width:50%;">
                {{-- <select class="form-select form-select-sm" style="flex: 1.5 auto;">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>  --}}
            </div>
        </div>
    </div>     
    <input type="hidden" name="user_id" id="user_id" value="{{session('USER_ID')}}">   
</div>
{{-- END CREATE PROJECT MODAL --}}


{{-- START BUNGALOW ENTRANCE MODAL --}}
<div class="row hide" id="bungalow_entrance_modal">
    <span id="project_url" url="bungalow-entrance" function-name="BungalowEntrance" modal-index="1"></span>

    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">Floors</label>
        </div>
        <div class="col-md-9">
            <div class="input-group">
                <select id="floor" name="floor" class="form-select form-select-sm">
                    <option selected disabled>Select floors</option>
                    <option value="{{MyApp::FLOOR_G}}">1</option>
                    <option value="{{MyApp::FLOOR_G_1}}">2</option>
                    <option value="{{MyApp::FLOOR_G_2}}">3</option>
                    <option value="{{MyApp::FLOOR_G_3}}">4</option>
                </select>  
            </div>
        </div>
    </div>

    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">Vastu</label>
        </div>
        <div class="col-md-9">
            <div class="form-check vastu">
                <input class="form-check-input" type="radio" name="vastu" value="Moderate Condiderations" style="border-radius:20%;">
                <label class="form-check-label">Moderate condideration</label>
            </div>
            <div class="form-check vastu">
                <input class="form-check-input" type="radio" name="vastu" value="Consult Expert" style="border-radius:20%;">
                <label class="form-check-label">Consult Expert</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">Entrance Gate</label>
        </div>
        <div class="col-md-9">  
            <div class="form-check entrance_gate">
                <input class="form-check-input entrance_ONE_GATE_width" type="radio" name="entrance_gate" value="One gate" style="border-radius:20%;">
                <label class="form-check-label">One gate</label>
            </div> 
            <div class="row entrance_one_gate_width">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <div class="input-group">
                        <select id="one_gate" name="one_gate" class="form-select form-select-sm">
                            <option selected disabled value="Select gate width">Select gate width</option>
                            <option value="{{MyApp::WIDE_12}}">12' - 0' wide</option>
                            <option value="{{MyApp::WIDE_14}}">14' - 0' wide</option>
                            <option value="{{MyApp::MORE_WIDE}}">More wide</option>
                        </select>  
                    </div>
                </div>
            </div>
            <div class="form-check entrance_gate">
                <input class="form-check-input entrance_TWO_GATE_width" type="radio" name="entrance_gate" value="Two gate" style="border-radius:20%;">
                <label class="form-check-label">Two gate</label>
            </div>
        </div> 
    </div>

    <div class="row entrance_two_gate_width">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="form-check two_gate">
                <input class="form-check-input entrance_two_gate_adjacent_width" type="radio" name="two_gate" value="Adjacent" style="border-radius:20%;">
                <label class="form-check-label">Adjacent</label>
            </div>
        </div>
        <div class="row entrance_two_gate_adjacent_mainsidecar_width">
            <div class="col-md-5">
                <label class="form-check-label form-check-label-sm">Main car gate</label>
                <div class="input-group">
                    <select id="main_car_gate" name="main_car_gate" class="form-select form-select-sm">
                        <option selected disabled value="Select gate width">Select gate width</option>
                        <option value="{{MyApp::WIDE_12}}">12' - 0' wide</option>
                        <option value="{{MyApp::WIDE_14}}">14' - 0' wide</option>
                        <option value="{{MyApp::MORE_WIDE}}">More wide</option>
                    </select>  
                </div>
            </div>
            <div class="col-md-7">
                <label class="form-check-label form-check-label-sm">Side padestrian gate</label>
                <div class="input-group">
                    <select id="side_padestrian_gate" name="side_padestrian_gate" class="form-select form-select-sm">
                        <option selected disabled value="Select gate width">Select gate width</option>
                        <option value="{{MyApp::WIDE_3}}">3' - 0' wide</option>
                        <option value="{{MyApp::WIDE_4}}">4' - 0' wide</option>
                        <option value="{{MyApp::MORE_WIDE}}">More wide</option>
                    </select>  
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="form-check two_gate">
                <input class="form-check-input entrance_two_gate_different_width" type="radio" name="two_gate" value="Different custom location" style="border-radius:20%;">
                <label class="form-check-label">Different custom location</label>
            </div> 
        </div>
        <div class="col-md-12 entrance_two_gate_different_customlocation_width">
            <label class="form-check-label">Brief about different customed location</label>
            <div class="input-group mb-1">
                <input type="text" class="form-control" id="different_customized_location" name="different_customized_location" placeholder="Enter Brief about different customed location">
            </div>
        </div>
    </div>
                                        
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card bg-light">
                <div class="card-header" style="padding: 2px;"><b>Security Kiosq</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-check-label">Length</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="security_kiosq_length"  name="security_kiosq_length" placeholder="length" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-check-label">Width</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="security_kiosq_width"  name="security_kiosq_width" placeholder="width" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <label class="form-check-label">Security Kiosq Area</label>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="security_kiosq_area"  name="security_kiosq_area" placeholder="secutiy kiosq area" required>
                                <select class="form-select form-select-sm" style="flex: 0.5 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check security_kiosq">
                            <input class="form-check-input" type="radio" name="security_kiosq" value="With Sleeping Space" style="border-radius:20%;">
                            <label class="form-check-label">With Sleeping Space</label>
                        </div>           
                        <div class="form-check security_kiosq">
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
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card bg-light">
                <div class="card-header" style="padding: 2px;"><b>Porch</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-check-label">Length</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="porch_length"  name="porch_length" placeholder="length" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-check-label">Width</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="porch_width"  name="porch_width" placeholder="width" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-check-label">Porch Area</label>
                        </div>
                        <div class="col-md-8">
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="porch_area"  name="porch_area" placeholder="porch area" required>
                                <select class="form-select form-select-sm" style="flex: 0.5 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="porch">
                            <div class="card-header ml-3" style="padding: 2px;">
                                <input class="form-check-input visual_nature" type="radio" name="porch" value="Visual nature" style="border-radius:20%;">
                                <label class="form-check-label">Visual Nature</label>
                            </div>
                            <div class="input-group visual_height mt-1">
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
                        <div class="porch">
                            <div class="card-header ml-3" style="padding: 2px;">
                                <input class="form-check-input car_parking" type="radio" name="porch" value="Car parking space" style="border-radius:20%;">
                                <label class="form-check-label">Car Parking Space</label>
                            </div>
                            <div class="input-group car_parking_height mt-1">
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
        <div class="col-md-12">
            <div class="card bg-light">
                <div class="card-header" style="padding: 2px;"><b>Foyer/Welcome Lobby</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-check-label">Length</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="foyer_length"  name="foyer_length" placeholder="length" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-check-label">Width</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="foyer_width"  name="foyer_width" placeholder="width" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label class="form-check-label">Area of Foyer</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="foyer_area" name="foyer_area" placeholder="foyer area" required>
                                <select class="form-select form-select-sm" style="flex: 0.5 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-5">
                            <label class="form-check-label">Lobby design</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <select id="foyer_lobby" name="foyer_lobby" class="form-select form-select-sm">
                                    <option selected disabled>Choose design</option>
                                    <option value="Hilighter/Welcome Wall">Hilighter/Welcome Wall</option>
                                    <option value="Shoe Rack Space">Shoe Rack Space</option>
                                </select>  
                            </div>
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
        <div class="col-md-12">
            <div class="card bg-light">
                <div class="card-header" style="padding: 2px;"><b>Varandah</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-check-label">Length</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="verandah_length"  name="verandah_length" placeholder="length" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-check-label">Width</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="verandah_width"  name="verandah_width" placeholder="width" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label class="form-check-label">Varandah Area</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="verandah_area"  name="verandah_area" placeholder="area" required>
                                <select class="form-select form-select-sm" style="flex: 0.5 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check verandah">
                            <input class="form-check-input" type="radio" name="verandah" value="Out Side Open" style="border-radius:20%;">
                            <label class="form-check-label">Out Side Open</label>
                        </div>    
                        <div class="form-check verandah">
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
    {{-- <input type="hidden" name="project_id" id="bungalow_entrance_project_id"> --}}
</div>
{{-- END BUNGALOW ENTRANCE MODAL --}}


{{-- Start Bungalow DrawingHall Modal --}}
<div class="row hide" id="bungalow_drawing_hall_modal">
    <span id="project_url" url="bungalow-drawing-hall" function-name="BungalowDrawingHall" modal-index="2"></span>

    <label class="form-label">Living Hall Family Lounge:</label>
    <div class="row">
        <div class="col-md-6">
            <label class="form-check-label">Length</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="drawing_hall_length"  name="drawing_hall_length" placeholder="length" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label class="form-check-label">Width</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="drawing_hall_width"  name="drawing_hall_width" placeholder="width" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label class="form-check-label">Living Area</label>
        </div>
        <div class="col-md-8">
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="drawing_hall_area"  name="drawing_hall_area" placeholder="living area" required>
                <select class="form-select form-select-sm" style="flex: 0.5 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>
    
    <div class="my-1"></div>
    <label class="form-check-label">Living hall features:</label>
    <div class="row">
        {{-- <label class="form-label">Living hall features</label> --}}
        <div class="form-check">
            <input class="form-check-input living_hall" type="checkbox" name="living_hall[]" value="Fire place inside" >
            <label class="form-check-label">Fire place inside</label><br>
        </div>
        <div class="form-check">
            <input class="form-check-input living_hall" type="checkbox" name="living_hall[]" value="Double height">
            <label class="form-check-label">Double height</label>
        </div>
        <div class="form-check">
            <input class="form-check-input living_hall" type="checkbox" name="living_hall[]" value="Powder toilet">
            <label class="form-check-label">Powder toilet</label>
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
        
        <label class="form-check-label">Special features</label>
        <div class="input-group">
            <input class="form-control" type="text" name="living_hall_text" id="living_hall_text" placeholder="Breif about special features">
        </div>
    </div>
 
    <div class="my-2"></div> 
    <div class="row">
        <label class="form-label form-label-sm">Exclusive Drawing Hall</label>
        <div class="col-md-6">
            <label class="form-check-label">Length</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="living_hall_length"  name="living_hall_length" placeholder="length" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label class="form-check-label">Width</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="living_hall_width"  name="living_hall_width" placeholder="width" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label class="form-check-label">Drawing Hall Area</label>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="living_hall_area"  name="living_hall_area" placeholder="drawing hall area" required>
                <select class="form-select form-select-sm" style="flex: 0.5 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="drawing_hall" id="drawing_hall" value="{{MyApp::ZERO_ONE}}">
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
        <label class="form-check-label">Special features</label>
        <div class="input-group">
            <input class="form-control" type="text" name="drawing_hall_text" id="drawing_hall_text" placeholder="Breif about special features">
        </div>
    </div>
    
    <div class="my-2"></div>
    <div class="row">
        <div class="col-md-12">
            <label class="form-label form-label-sm">Kitchen Details</label>
            <div class="row">
                
                <div class="col-md-6">
                    <label class="form-check-label">Length</label>
                    <div class="input-group">
                        {{-- <span style="color:#ff0000">*</span> --}}
                        <input type="text" class="form-control"  id="kitchen_length"  name="kitchen_length" placeholder="length" required>
                        <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                            <option value="{{MyApp::FT}}">Ft.</option>
                            <option value="{{MyApp::MTR}}">Mtr</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-check-label">Width</label>
                    <div class="input-group">
                        {{-- <span style="color:#ff0000">*</span> --}}
                        <input type="text" class="form-control"  id="kitchen_width"  name="kitchen_width" placeholder="width" required>
                        <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                            <option value="{{MyApp::FT}}">Ft.</option>
                            <option value="{{MyApp::MTR}}">Mtr</option>
                        </select>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-6">
                    <label class="form-check-label">kitchen Area</label>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        {{-- <span style="color:#ff0000">*</span> --}}
                        <input type="text" class="form-control"  name="kitchen_area" id="kitchen_area" placeholder="kitchen area" required>
                        <select class="form-select form-select-sm" style="flex: 0.5 0 auto">
                            <option value="{{MyApp::FT}}">Ft.</option>
                            <option value="{{MyApp::MTR}}">Mtr</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-5">
                    <label class="form-check-label">Kitchen area</label>
                </div>
                <div class="col-7">
                    <div class="input-group input-group-sm mb-1">
                        <input type="text" class="form-control" name="kitchen_area" id="kitchen_area" placeholder="kitchen areA">
                        <span class="input-group-text">SqFt</span>
                    </div>
                </div>     --}}
                <div class="col-6">
                    <label class="form-check-label">Kitchen location</label>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
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
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" name="other_kitchen_location" id="other_kitchen_location" placeholder="other kitchen location">
                    </div>
                </div>
                <div class="input-group">
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
    
    <div class="row">
        <div class="col-md-12">
            <div class="input-group">
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
    </div>


    <div class="row">
        <div class="form-check">
            <input class="form-check-input attached_store kitchen_features" type="checkbox" name="kitchen_features[]" value="Attached store area">
            <label class="form-check-label">Attached store area</label>
        </div>
            {{-- <div class="input-group attached_store_input mb-1">
                <input type="text" class="form-control" name="attached_store" id="attached_store" placeholder="Attached store area">
                <span class="input-group-text">SqFt</span>
            </div> --}}
        <div class="input-group attached_store_input">
            {{-- <span style="color:#ff0000">*</span> --}}
            <input type="text" class="form-control"  name="attached_store" id="attached_store" placeholder="Attached store area" required>
            <select class="form-select form-select-sm" style="flex: 0.5 0 auto">
                <option value="{{MyApp::FT}}">Ft.</option>
                <option value="{{MyApp::MTR}}">Mtr</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="form-check">
            <input class="form-check-input utility_washroom kitchen_features" type="checkbox" name="kitchen_features[]" value="Utility wash room">
            <label class="form-check-label">Utility wash room</label>
        </div>
        <div class="input-group utility_washroom_input">
            {{-- <span style="color:#ff0000">*</span> --}}
            <input type="text" class="form-control"  name="utility_wash_room" id="utility_wash_room" placeholder="Utility wash room"required>
            <select class="form-select form-select-sm" style="flex: 0.5 0 auto">
                <option value="{{MyApp::FT}}">Ft.</option>
                <option value="{{MyApp::MTR}}">Mtr</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="form-check">
            <input class="form-check-input washroom_area kitchen_features" type="checkbox" name="kitchen_features[]" value="Wash area open">
            <label class="form-check-label">Wash area open</label>
        </div>
        <div class="input-group washroom_area_input">
            {{-- <span style="color:#ff0000">*</span> --}}
            <input type="text" class="form-control"  name="wash_area_open" id="wash_area_open" placeholder="Wash area open" required>
            <select class="form-select form-select-sm" style="flex: 0.5 0 auto">
                <option value="{{MyApp::FT}}">Ft.</option>
                <option value="{{MyApp::MTR}}">Mtr</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-check">
            <input class="form-check-input kitchen_features" type="checkbox" name="kitchen_features[]" value="Breakfast Table area inside">
            <label class="form-check-label">Breakfast Table area inside</label>
        </div>
        <div class="form-check">
            <input class="form-check-input kitchen_features" type="checkbox" name="kitchen_features[]" value="Central Island">
            <label class="form-check-label">Central Island</label>
        </div>
    </div>
    <div class="row">
        <label class="form-check-label">Specific Requirements</label>
        <div class="input-group mb-1">
            <input type="text" class="form-control" name="specific_req" id="specific_req" placeholder="Specific Requirement">
        </div>
    </div>   


    {{-- <div class="row">
        
        <div class="col-md-12">
            

            <div class="row">
                <div class="col-6 col-sm-6">
                    
                </div>
                <div class="col-6 col-sm-5 utility_washroom_input">
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" name="utility_wash_room" id="utility_wash_room" placeholder="Utility wash room">
                        <span class="input-group-text">SqFt</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input washroom_area" type="checkbox" name="kitchen_features[]" value="Wash area open">
                        <label class="form-check-label">Wash area open</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-group mb-1 washroom_area_input">
                        <input type="text" class="form-control"  name="wash_area_open" id="wash_area_open" placeholder="Wash area open">
                        <span class="input-group-text">SqFt</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="kitchen_features[]" value="Breakfast Table area inside">
                        <label class="form-check-label">Breakfast Table area inside</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="kitchen_features[]" value="Central Island">
                        <label class="form-check-label">Central Island</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="form-check-label">Specific Requirements</label>
                </div>
                <div class="col-md-8">
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" name="specific_req" id="specific_req" placeholder="Specific Requirement">
                    </div>
                </div>
            </div>   
        </div>
    </div> --}}
    {{-- <input type="hidden" name="project_id" id="bungalow_drawing_hall_project_id"> --}}
</div>
{{-- END Bungalow DrawingHall Modal --}}
                

{{-- START BUNGALOW PANTRY MODAL --}}
<div class="row hide" id="bungalow_pantry_modal" >
    <span id="project_url" url="bungalow-pantry" function-name="BungalowPantry" modal-index="3"></span>
           
    <label class="form-label">Pantry Details:</label>
    <div class="row">
        <div class="col-md-6">
            <label class="form-check-label">Length</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="pantry_length"  name="pantry_length" placeholder="length"  required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label class="form-check-label">Width</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="pantry_width"  name="pantry_width" placeholder="width" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label class="form-check-label">Pantry Area</label>
        </div>
        <div class="col-md-8">
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="pantry_area"  name="pantry_area" placeholder="pantry area" required>
                <select class="form-select form-select-sm" style="flex: 0.2 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label class="form-check-label">Pantry Floors</label>
        </div>
        <div class="col-md-7">
            <div class="input-group">
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
    </div> 
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-7 hide" id="other_pantry_text_row">
            <div class="input-group">
                <input type="text" class="form-control" name="other_pantry_floor_text" id="other_pantry_floor_text" placeholder="Pantry location">
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-12">
        <label class="form-check-label">Special requirements</label>
        <div class="input-group">
            <input type="text" class="form-control" name="specific_req" id="specific_req" placeholder="Text your specific requirements">
        </div>
    </div>
    </div>
   
    <div class="my-2"></div>
    <label class="form-label mt-2">Dinning Details:</label>
    <div class="row">
        <div class="col-md-6">
            <label class="form-check-label">Length</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="dining_length"  name="dining_length" placeholder="length" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label class="form-check-label">Width</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="dining_width"  name="dining_width" placeholder="width" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label class="form-check-label">Dinning Area</label>
        </div>
        <div class="col-md-7">
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="dining_area"  name="dining_area" placeholder="dinning area" required>
                <select class="form-select form-select-sm" style="flex: 0.2 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label class="form-check-label">Dinning Floors</label>
        </div>
        <div class="col-md-7">
            <div class="input-group">
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
        <div class="col-md-5"></div>
        <div class="col-md-7 hide" id="other_dinning_floor_text_row">
            <div class="input-group">
                <input type="text" class="form-control" name="other_dinning_floor_text" id="other_dinning_floor_text" placeholder="Dinning Floors">
            </div>
        </div>
    </div>

    <div class="row mt-1">
        <div class="col-md-5">
            <label class="form-check-label">Dinning Seats</label>
        </div>
        <div class="col-md-7">
            <div class="input-group">
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
        <div class="col-md-5"></div>
        <div class="col-md-7 hide" id="other_dinning_seat_text_row">
            <div class="input-group">
                <input type="text" class="form-control" name="other_dinning_seat_text" id="other_dinning_seat_text" placeholder="Dinning Seats">
            </div>
        </div>
    </div>
    

    <div class="row mt-2">
        <div class="form-check">
            <input class="form-check-input dining_features" type="checkbox" name="dining_features[]" value="With crockery storage and display">
            <label class="form-check-label">With crockery storage & display</label>
        </div>
        <div class="form-check">
            <input class="form-check-input dining_features" type="checkbox" name="dining_features[]" value="Without crockery storage and display">
            <label class="form-check-label">Without crockery storage & display</label>
        </div>
        <div class="form-check">
            <input class="form-check-input dining_features" type="checkbox" name="dining_features[]" value="With nearby washroom">
            <label class="form-check-label">With nearby washroom</label>
        </div>
        <div class="form-check">
            <input class="form-check-input dining_features" type="checkbox" name="dining_features[]" value="Double height">
            <label class="form-check-label">Double height</label>
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
        <div class="col-md-12">
            <label class="form-check-label">Specific requirements</label>
            <div class="input-group">
                <input type="text" class="form-control" name="dining_text" id="dining_text" placeholder="Text your specific requirements">
            </div>
        </div>
    </div> 

    {{-- <div class="row"> --}}
        {{-- <label class="form-label">Dinning Details</label>
        <div class="row">
            <div class="col-md-4">
                <label class="form-check-label">Dinning Floors</label>
            </div>
            <div class="col-md-8">
                <div class="input-group">
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
            <div class="col-md-9 hide" id="other_dinning_floor_text_row">
                <div class="input-group">
                    <input type="text" class="form-control" name="other_dinning_floor_text" id="other_dinning_floor_text" placeholder="Dinning Floors">
                </div>
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="col-md-3">
                <label class="form-check-label">Dinning Seats</label>
            </div>
            <div class="col-md-9">
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
            <div class="col-md-9 hide" id="other_dinning_seat_text_row">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="other_dinning_seat_text" id="other_dinning_seat_text" placeholder="Dinning Seats">
                </div>
            </div>
        </div> --}}
        
        
    {{-- </div> --}}
    {{-- <input type="hidden" name="project_id" id="bungalow_pantry_project_id"> --}}
</div>
{{-- END BUNGALOW PANTRY MODAL --}}
              

{{-- START BUNGALOW FLOORSTORE MODAL --}}
<div class="row hide" id="bungalow_floor_store_modal" >
    <span id="project_url" url="bungalow-floor-store" function-name="BungalowFloorStore" modal-index="4"></span>

    <div class="row">
        <div class="col-md-6">
            <label class="form-check-label">Length</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="floor_store_length"  name="floor_store_length" placeholder="length" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label class="form-check-label">Width</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="floor_store_width"  name="floor_store_width" placeholder="width" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label class="form-check-label">Floorstore Area</label>
        </div>
        <div class="col-md-7">
            <div class="input-group mb-1">
                <input type="text" class="form-control" name="floor_store_area" id="floor_store_area" placeholder="floor store area">
                <select class="form-select form-select-sm" style="flex: 0.2 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <label class="form-check-label">Location</label>
        </div>
        <div class="col-md-7">
            <div class="input-group">
                <select id="store_floor" name="store_floor" class="form-select form-select-sm">
                    <option selected disabled>floor store location</option>
                    <option value="{{MyApp::FLOOR_G_1}}">1st floor</option>
                    <option value="{{MyApp::FLOOR_G_2}}">2nd floor</option>
                    <option value="{{MyApp::FLOOR_G_3}}">3rd floor</option>
                    <option value="{{MyApp::OTHER_FLOOR}}">other</option>
                </select>  
            </div> 
        </div>
    </div>

    <div class="row hide store_floor_specific mb-1">
        <div class="col-md-5"></div>
        <div class="col-md-7">
            <div class="input-group">
                <input type="text" class="form-control" name="floor_store_other_text" id="floor_store_other_text" placeholder="floor store location">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-5">
            <label class="form-check-label">Bungalow Stair Case</label>
        </div>
        <div class="col-md-7">
            <div class="input-group">
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
    
    <div class="my-1"></div>
    <div class="row bg-white">
        <label class="form-check-label"><small>Upload Stair Image</small></label>
        <div class="col-md-1">
            <img src="{{asset('public/sdpl-assets/user/images/Form_Img/cloud-upload.png')}}" alt="" width="20" height="20">  
        </div>
        <div class="col-md-8">
            <div class="input-group">
                <input type="file" class="form-control" id="stair_case_image" name="stair_case_image" aria-describedby="" aria-label="Upload">
            </div>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-primary disabled btn-sm">Preview</button>
        </div>
    </div>

    <div class="mt-2"></div>
    <label class="form-label">Lift</label>
    <div class="row">
        <div class="col-md-6">
            <label class="form-check-label">Length</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="lift_length"  name="lift_length" placeholder="length" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label class="form-check-label">Width</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="lift_width"  name="lift_width" placeholder="width" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label class="form-check-label">Lift Area</label>
        </div>
        <div class="col-md-8">
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="lift_area"  name="lift_area" placeholder="lift area" required>
                <select class="form-select form-select-sm" style="flex: 0.2 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <label class="form-check-label">Passenger Capecity</label>
        </div>
        <div class="col-md-5">
            <div class="input-group">
                <select id="passanger_capacity" name="passanger_capacity" class="form-select form-select-sm">
                    <option selected disabled>Select</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                    <option value="{{MyApp::MORE}}">More</option>
                </select>  
            </div> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 capecity_passenger hide">
            <div class="input-group">
                <input type="text" class="form-control" name="passenger_capacity_other_text" id="passenger_capacity_other_text" placeholder="passenger capecity">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <label class="form-check-label">Specific requirements</label>
            <div class="input-group">
                <input type="text" class="form-control" name="lift_req" id="lift_req" value="" placeholder="lift requirements">
            </div>
        </div>
    </div>

    <div class="mt-2"></div>
    <label class="form-label">Pooja Room</label>
    <div class="row">
        <div class="col-md-6">
            <label class="form-check-label">Length</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="pooja_room_length"  name="pooja_room_length" placeholder="length" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label class="form-check-label">Width</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="pooja_room_width"  name="pooja_room_width" placeholder="width" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label class="form-check-label">Pooja Area</label>
        </div>
        <div class="col-md-8">
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  name="pooja_room_area" id="pooja_room_area" placeholder="area of pooja room" required>
                <select class="form-select form-select-sm" style="flex: 0.2 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <label class="form-check-label">Location</label>
        </div>
        <div class="col-md-8">
            <div class="input-group">
                <select id="pooja_room_floor" name="pooja_room_floor" class="form-select form-select-sm">
                    <option selected disabled>select location</option>
                    <option value="{{MyApp::FLOOR_G_1}}">1st floor</option>
                    <option value="{{MyApp::FLOOR_G_2}}">2nd floor</option>
                    <option value="{{MyApp::FLOOR_G_3}}">3rd floor</option>
                    <option value="{{MyApp::OTHER_FLOOR}}">other</option>
                </select>  
            </div> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8 hide poojaroom_specific_location mb-1">
            <div class="input-group">
                <input type="text" class="form-control" name="pooja_room_other_text" id="pooja_room_other_text" placeholder="location of poojaroom">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <label class="form-check-label">Types</label>
        </div>
        <div class="col-md-8">
            <div class="input-group">
                <select id="pooja_room_type" name="pooja_room_type" class="form-select form-select-sm">
                    <option selected disabled>Pooja room types</option>
                    <option value="{{MyApp::PROPER_ROOM}}">Proper room</option>
                    <option value="{{MyApp::ONLY_PLACE}}">Only place</option>
                </select>
                <select class="form-select form-select-sm" style="flex: 0.2 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
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
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="opening_to_li_ha" name="opening_to_li_ha" value="{{MyApp::ZERO_ONE}}">
            <label class="form-check-label">Opening towards living hall</label>
        </div>
    </div>
    {{-- <input type="hidden" name="project_id" id="bungalow_floor_store_project_id"> --}}
</div>
{{-- END BUNGALOW FLOORSTORE MODAL --}}
                

{{-- START BUNGALOW BEDROOM MODAL --}}
<div class="row hide" id="bungalow_bedroom_modal">
    <span id="project_url" url="bungalow-bedroom" function-name="BungalowBedroom" modal-index="5"></span>             
    <div class="row mb-2">
        @foreach($bedrooms as $bedroom)
            {{-- <div class="card"> --}}
                <div class="form-check">
                    <input class="form-check-input bedroom" type="checkbox" name="bedroom[]" value="{{$bedroom->id}}" id="bungalow_bedroom_type_{{$bedroom->id}}" bedroom-type="{{ucwords($bedroom->bedroom_name)}}">
                    <label class="form-check-label">{{ucwords($bedroom->bedroom_name)}}</label>
                </div>
            {{-- </div> --}}
        @endforeach 
    </div>
    <hr class="my-3">
    <div id="bungalow_bedroom_type_detail"></div>
</div>
{{-- END BUNGALOW BEDROOM MODAL --}}

{{-- START BUNGALOW BEDROOM FORM MODAL --}}
{{-- <div class="hide bedroom_modal"> --}}
<div class="hide bedroom_modal" >

    <div id="bedroom_type_modal">


        <div class="row">
            <div class="col-md-6">
                <label class="form-check-label">Length</label>
                <div class="input-group">
                    {{-- <span style="color:#ff0000">*</span> --}}
                    <input type="text" class="form-control"  id="bedroom_length"  name="bedroom_length[]" placeholder="length" required>
                    <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                        <option value="{{MyApp::FT}}">Ft.</option>
                        <option value="{{MyApp::MTR}}">Mtr</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-check-label">Width</label>
                <div class="input-group">
                    {{-- <span style="color:#ff0000">*</span> --}}
                    <input type="text" class="form-control"  id="bedroom_width"  name="bedroom_width[]" placeholder="width" required>
                    <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                        <option value="{{MyApp::FT}}">Ft.</option>
                        <option value="{{MyApp::MTR}}">Mtr</option>
                    </select>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-4">
                <label class="form-check-label">Room Area</label>
            </div>
            <div class="col-md-8">
                <div class="input-group">
                    {{-- <span style="color:#ff0000">*</span> --}}
                    <input type="text" class="form-control"  id="bedroom_area" name="bedroom_area[]"  placeholder="bed room area" required>
                    <select class="form-select form-select-sm" style="flex: 0.2 0 auto">
                        <option value="{{MyApp::FT}}">Ft.</option>
                        <option value="{{MyApp::MTR}}">Mtr</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class="form-check-label">Location</label>
            </div>
            <div class="col-md-9 bed_loc_firstgroundtext">
                {{-- <div class="input-group mb-1">
                    <input type="text" class="form-control" name="bedroom_area[]"  placeholder="bed room area">
                </div> --}}
                <div class="input-group">
                    <select name="bedroom_floor[]" id="bedroom_floor" class="form-select form-select-sm bedroom_floor_req">
                        <option selected disabled>Select location</option>
                        <option value="{{MyApp::FLOOR_G}}">1st floor</option> 
                        <option value="{{MyApp::FLOOR_G_1}}">2nd floor</option> 
                        <option value="{{MyApp::FLOOR_G_2}}">3rd floor</option> 
                        <option value="{{MyApp::OTHER_FLOOR}}">other</option> 
                    </select>  
                </div> 
                <div class="input-group hide mb-1">
                    <input type="text" class="form-control" name="" placeholder="Bed room floor location">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class="form-check-label">NOS</label>
            </div>
            <div class="col-md-9">
                <div class="input-group">
                    <select name="bedroom_nos[]" id="bedroom_nos" class="form-select form-select-sm bedroom_nos_req">
                        <option selected disabled>Select floor</option>
                        <option value="{{MyApp::FLOOR_G}}">1st floor</option> 
                        <option value="{{MyApp::FLOOR_G_1}}">2nd floor</option> 
                        <option value="{{MyApp::FLOOR_G_2}}">3rd floor</option> 
                        <option value="{{MyApp::OTHER_FLOOR}}">other</option> 
                    </select>  
                </div> 
                <div class="input-group hide mb-1">
                    <input type="text" class="form-control" name=""  placeholder="NOS specific requirement">
                </div>    
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label class="form-check-label">Length</label>
                <div class="input-group">
                    {{-- <span style="color:#ff0000">*</span> --}}
                    <input type="text" class="form-control"  id="bedroom_toilet_length"  name="bedroom_toilet_length[]" placeholder="length" required>
                    <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                        <option value="{{MyApp::FT}}">Ft.</option>
                        <option value="{{MyApp::MTR}}">Mtr</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-check-label">Width</label>
                <div class="input-group">
                    {{-- <span style="color:#ff0000">*</span> --}}
                    <input type="text" class="form-control"  id="bedroom_toilet_width"  name="bedroom_toilet_width[]" placeholder="width" required>
                    <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                        <option value="{{MyApp::FT}}">Ft.</option>
                        <option value="{{MyApp::MTR}}">Mtr</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-5">
                <label class="form-check-label">Toilet Area</label>
            </div>
            <div class="col-md-7">
                <div class="input-group">
                    {{-- <span style="color:#ff0000">*</span> --}}
                    <input type="text" class="form-control" id="bedroom_toilet_area" name="bedroom_toilet_area[]"  placeholder="toilet area" required>
                    <select class="form-select form-select-sm" style="flex: 0.2 0 auto">
                        <option value="{{MyApp::FT}}">Ft.</option>
                        <option value="{{MyApp::MTR}}">Mtr</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <label class="form-check-label">Toilet Facility</label>
            </div>
            <div class="col-md-7">
                <div class="input-group">
                    <select name="bedroom_toilet_facility[]" id="bedroom_toilet_facility" class="form-select form-select-sm bedroom_toilet_req">
                        <option selected disabled>Select toilet facility</option>
                        <option value="shower encloser">Shower encloser</option> 
                        <option value="jacuzzi bathtubs">Jacuzzi Bathtubs</option> 
                        <option value="both">Both</option> 
                        <option value="{{MyApp::OTHER_FLOOR}}">other</option> 
                    </select>  
                </div> 
                <div class="input-group mb-1">
                    <input type="text" class="form-control" id="bedroom_toilet_req_text" name="bedroom_toilet_req_text[]" placeholder="toilet facility">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label class="form-check-label">Length</label>
                <div class="input-group">
                    {{-- <span style="color:#ff0000">*</span> --}}
                    <input type="text" class="form-control"  id="bedroom_dress_length"  name="bedroom_dress_length[]" placeholder="length" required>
                    <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                        <option value="{{MyApp::FT}}">Ft.</option>
                        <option value="{{MyApp::MTR}}">Mtr</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-check-label">Width</label>
                <div class="input-group">
                    {{-- <span style="color:#ff0000">*</span> --}}
                    <input type="text" class="form-control"  id="bedroom_dress_width"  name="bedroom_dress_width[]" placeholder="width" required>
                    <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                        <option value="{{MyApp::FT}}">Ft.</option>
                        <option value="{{MyApp::MTR}}">Mtr</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <label class="form-check-label">Dress Area</label>
            </div>
            <div class="col-md-7">
                <div class="input-group mb-1">
                    <input type="text" class="form-control" id="bedroom_dress_area" name="bedroom_dress_area[]" placeholder="dress area">
                    <select class="form-select form-select-sm" style="flex: 0.2 0 auto">
                        <option value="{{MyApp::FT}}">Ft.</option>
                        <option value="{{MyApp::MTR}}">Mtr</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <label class="form-check-label">Dress Facility</label>
            </div>
            <div class="col-md-7">
                <div class="form-check">
                    <input class="form-check-input bedroom_dress_facility" type="checkbox" name="bedroom_dress_facility[]" value="{{MyApp::WALK_IN_CUPBOARD}}">
                    <label class="form-check-label">Walk-in cupboard</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input bedroom_dress_facility" type="checkbox" name="bedroom_dress_facility[]" value="{{MyApp::VANITY}}">
                    <label class="form-check-label">Vanity</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input bedroom_dress_facility" type="checkbox" name="bedroom_dress_facility[]" value="{{MyApp::CUPBOARD}}">
                    <label class="form-check-label">Cupboard</label>
                </div>
                <div class="input-group mb-1">
                    <input type="text" class="form-control" id="bedroom_dress_req_text" name="bedroom_dress_req_text[]" placeholder="More facilities">
                </div>
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
        <div class="my-1"></div>
        <div class="row bg-white">
            <label class="form-check-label"><small>Upload Reference Image</small></label>
            <div class="col-md-1">
                <img src="{{asset('public/sdpl-assets/user/images/Form_Img/cloud-upload.png')}}" alt="" width="20" height="20">  
            </div>
            <div class="col-md-8">
                <div class="input-group">
                    <input type="file" class="form-control bedroom_img" id="bedroom_img" name="bedroom_img" aria-describedby="" aria-label="Upload">
                </div>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-primary disabled btn-sm">Preview</button>
            </div>
        </div>

        <div class="row">
            <label class="form-check-label">Room Facility</label>
            <div class="card-body bed_roomfacility_text">
                <div class="form-check">
                    <input class="form-check-input bedroom_facility" type="checkbox" name="bedroom_facility[]" value="{{MyApp::CHAIR_ARRANGEMENT}}">
                    <label class="form-check-label">Chair Arrangement</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input bedroom_facility" type="checkbox" name="bedroom_facility[]" value="{{MyApp::SOFA_ARRANGEMENT}}">
                    <label class="form-check-label">Sofa Arrangement</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input bedroom_facility" type="checkbox" name="bedroom_facility[]" value="{{MyApp::WRITING_LAPTOP_TABLE}}">
                    <label class="form-check-label">Writing laptop table</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input bedroom_facility" type="checkbox" name="bedroom_facility[]" value="{{MyApp::TV}}">
                    <label class="form-check-label">TV</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input bedroom_facility" type="checkbox" name="bedroom_facility[]" value="{{MyApp::MINI_BAAR}}">
                    <label class="form-check-label">Mini Baar</label>
                </div>
                <div class="input-group mb-1">
                    <input type="text" class="form-control" id="bedroom_facility_req_text" name="bedroom_facility_req_text[]" placeholder="More facilities">
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
        <hr>

    </div>

</div>
{{-- </div> --}}
{{-- END BUNGALOW BEDROOM FORM MODAL --}}


{{-- START BUNGALOW BASEMENT MODAL --}}
<div class="row hide" id="bungalow_basement_modal" >
    <span id="project_url" url="bungalow-basement" function-name="BungalowBasement" modal-index="6"></span> 
    
    <div class="row">
        <div class="col-md-5">
            <label class="form-check-label">Base Area:</label>
        </div>
        <div class="col-md-4">
            <input class="form-check-input" type="radio" name="basement_type" value="1">
            <label class="form-check-label">Basement</label>
        </div>
        <div class="col-md-3">
            <input class="form-check-input" type="radio" name="basement_type" value="1">
            <label class="form-check-label">Stilt</label>
        </div>
    </div>
    <div class="mt-1"></div>
    <div class="row">
        <div class="col-md-4">
            <label class="form-check-label">Basement:</label>
        </div>
        <div class="col-md-8">
            <div class="input-group">
                <select id="basement" name="basement" class="form-select form-select-sm">
                    <option selected disabled>Basement</option>
                    <option value="{{MyApp::PARKING}}">for Parking</option> 
                    <option value="{{MyApp::AMENITIES}}">for Amenities</option>
                </select>  
            </div> 
        </div>
    </div>  
    <div class="row">
        <div class="col-md-6">
            <label class="form-check-label">Length</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="basement_length"  name="basement_length" placeholder="length" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <label class="form-check-label">Width</label>
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="basement_width"  name="basement_width" placeholder="width" required>
                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label class="form-check-label">Basement Area:</label>
        </div>
        <div class="col-md-7">
            <div class="input-group">
                {{-- <span style="color:#ff0000">*</span> --}}
                <input type="text" class="form-control"  id="basement_area" name="basement_area"  placeholder="basement area" required>
                <select class="form-select form-select-sm" style="flex: 0.2 0 auto">
                    <option value="{{MyApp::FT}}">Ft.</option>
                    <option value="{{MyApp::MTR}}">Mtr</option>
                </select>
            </div>
        </div>
    </div>
    <hr class="my-1">

    <div class="row mt-2">
        <label class="form-check-label form-label-check-sm">Amenities:</label>
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input amenities OFFICE" type="checkbox" name="amenities[]" value="office">
                <label class="form-check-label">Office</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input amenities SERVENT_QUARTER" type="checkbox" name="amenities[]" value="servent quarter">
                <label class="form-check-label">Servent quater</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input amenities HOME_THEATER" type="checkbox" name="amenities[]" value="home theater">
                <label class="form-check-label">Home theater</label>
            </div>   
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input amenities PARKING_GARAGE" type="checkbox" name="amenities[]" value="parking garage">
                <label class="form-check-label">Parking garage</label>
            </div>
        </div>
    </div>  
    <hr class="my-1"> 

    <div class="row">
        <div class="col-md-12 office_card">
            <div class="card">
                <div class="card-header" style="padding: 3px;"><b>Office</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-check-label">Length</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="office_length"  name="office_length" placeholder="length" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-check-label">Width</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="office_width"  name="office_width" placeholder="width" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="form-check-label">Office Area:</label>
                        </div>
                        <div class="col-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="office_area" id="office_area" placeholder="office area">
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option selected disabled>SqFt</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="form-check-label">Location:</label>
                        </div>
                        <div class="col-8">
                            <div class="input-group">
                                <select id="office_location" name="office_location" class="form-select form-select-sm bedroom_floor_req">
                                    <option selected disabled>Choose location</option>
                                    <option value="{{MyApp::BASEMENT}}">Basement</option> 
                                    <option value="{{MyApp::STILT}}">Stilt</option>
                                    <option value="{{MyApp::GROUND_OTHER_THAN_STILT_AREA}}">Ground other than stilt area</option> 
                                </select>  
                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-check-label">Office Facilities:</label>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input office_facility" type="checkbox" name="office_facility[]" value="pantry">
                                <label class="form-check-label">Pantry</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input office_facility" type="checkbox" name="office_facility[]" value="toilet">
                                <label class="form-check-label">Toilet</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input office_facility" type="checkbox" name="office_facility[]" value="staf toilet">
                                <label class="form-check-label">Staff toilet</label>
                            </div>
                        </div> 
                    </div>
                    <div class="row hide">
                        <div class="col-md-12">
                            <label class="form-check-label">Other requirement</label>
                        </div>
                        {{-- <div class="col-md-5">Other requirement</div> --}}
                        <div class="col-md-12"> 
                            <div class="input-group">
                                <input type="text" class="form-control" name="office_specific_area" id="office_specific_area" placeholder="other requirement">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 servent_quarter_card">
            <div class="card">
                <div class="card-header" style="padding: 3px;"><b>Servent Quarter</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-check-label">Length</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="servent_quarter_length"  name="servent_quarter_length" placeholder="length" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-check-label">Width</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="servent_quarter_width"  name="servent_quarter_width" placeholder="width" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <label class="form-check-label">Servent Quarter Area</label>
                        </div>
                        <div class="col-5">
                            <div class="input-group mb-1">
                                <input type="text" class="form-control" name="servent_quarter_area" id="servent_quarter_area" placeholder="servent quater area">
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="form-check-label">Location</label>
                        </div>
                        <div class="col-8">
                            <div class="input-group">
                                <select id="servent_quarter_location" name="servent_quarter_location" class="form-select form-select-sm bedroom_floor_req">
                                    <option selected disabled>Choose location</option>
                                    <option value="{{MyApp::BASEMENT}}">Basement</option> 
                                    <option value="{{MyApp::STILT}}">Stilt</option>
                                    <option value="{{MyApp::GROUND_OTHER_THAN_STILT_AREA}}">Ground other than stilt area</option> 
                                </select>  
                            </div> 
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3">
                            <label class="form-check-label">Facilities:</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="servent_quarter_facility" name="servent_quarter_facility" value="1">
                                <label class="form-check-label">Oneroom+Smallkit+Toilet</label>
                            </div>
                        </div> 
                    </div>
                    <div class="row hide">
                        <div class="col-md-12">
                            <label class="form-check-label">Other Facilities</label>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group mb-1">
                                <input type="text" class="form-control" name="servent_quarter_facility_area" id="servent_quarter_facility_area" placeholder="other facilities">
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 psrking_garage_card">
            <div class="card">
                <div class="card-header" style="padding: 3px;"><b>Parking Garage</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-check-label">Length</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="parking_garage_length"  name="parking_garage_length" placeholder="length" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-check-label">Width</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="parking_garage_width"  name="parking_garage_width" placeholder="width" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <label class="form-check-label">Parking garage area:</label>
                        </div>
                        <div class="col-5">
                            <div class="input-group">
                                <input type="text" class="form-control" name="parking_garage_area" id="parking_garage_area" placeholder="area">
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-check-label">For how many cars</label>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <input type="text" class="form-control" name="no_of_cars" id="no_of_cars" placeholder="No. of cars">
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="form-check-label">Location</label>
                        </div>
                        <div class="col-8">
                            <div class="input-group">
                                <select id="parking_garage_location" name="parking_garage_location" class="form-select form-select-sm bedroom_floor_req">
                                    <option selected disabled>Choose location</option>
                                    <option value="{{MyApp::BASEMENT}}">Basement</option> 
                                    <option value="{{MyApp::STILT}}">Stilt</option>
                                    <option value="{{MyApp::GROUND_OTHER_THAN_STILT_AREA}}">Ground other than stilt area</option>
                                </select>  
                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="form-check-label">Seperate Shade</label>
                        </div>
                        <div class="col-12">
                            <div class="input-group">
                                <input type="text" class="form-control" name="saperate_shade" id="saperate_shade" placeholder="seperate shade">
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 home_theater_card">
            <div class="card">
                <div class="card-header" style="padding: 3px;"><b>Home theater</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-check-label">Length</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="home_theater_length"  name="home_theater_length" placeholder="length" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-check-label">Width</label>
                            <div class="input-group">
                                {{-- <span style="color:#ff0000">*</span> --}}
                                <input type="text" class="form-control"  id="home_theater_width"  name="home_theater_width" placeholder="width" required>
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-check-label">Home theater Area</label>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <input type="text" class="form-control" name="home_theater_area" id="home_theater_area" placeholder="home theater area">
                                <select class="form-select form-select-sm" style="flex: 0.3 0 auto">
                                    <option value="{{MyApp::FT}}">Ft.</option>
                                    <option value="{{MyApp::MTR}}">Mtr</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="row">
                        <div class="col-2">
                            <label class="form-check-label">Floor</label>
                        </div>
                        <div class="col-5">
                            <div class="input-group">
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
                            <div class="input-group">
                                <input type="text" class="form-control" name="" id="" placeholder="other floor">
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label class="form-check-label">Seats</label>
                        </div>
                        <div class="col-5">
                            <div class="input-group">
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
                            <div class="input-group">
                                <input type="text" class="form-control" name="" id="" placeholder="other seats">
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
{{-- END BUNGALOW BASEMENT MODAL --}}




{{-- START DESIGN --}}
<div class="row hide" id="bungalow_designs_modal" >
    <span id="project_url" url="project-design" function-name="Design Requirements" modal-index="7"></span>

    <div class="row">
        <div class="col-md-6">
            <label class="form-check-label">Total built-up area:</label>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" class="form-control" name="" id="total_builtup_area" placeholder="">
            </div>
        </div>
    </div>
    <div class="my-3"></div>
    <div class="row">
        @foreach ($design_type as $key => $item) 
            <div class="col-md-12">
                <div class="card ">
                    <div class="form-check design_checkbox">
                        <input type="checkbox" name="design_type_id[]" class="form-check-input design_type" id="design_type_{{$item->id}}" value="{{$item->id}}"> 
                        <label class="form-check-label" for="flexCheckDefault">{{$item->design_type}}</label>
                    </div>
                    <div class="card-body show_design hide overflow-auto" id="show_design_{{$item->id}}">
                        @foreach ($design_list[$key] as $list)

                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-check design_checkbox">
                                    <input type="checkbox" name="design_id[{{$key}}][]" id="design_id_{{$list->id}}" class="form-check-input" value="{{$list->id}}">
                                    <label class="form-check-label design_checkbox_label" for="flexCheckDefault" >{{$list->design}}</label>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <img title="Simple PDF File" src="{{asset('public/sdpl-assets/user/images/bungalow_details/pdf.png')}}" alt="" width="20" height="20">
                            </div>
                        </div>
                        @endforeach
                    </div>		
                </div>
            </div>
        @endforeach 
    </div>
</div> 
{{-- END DESIGN --}}
               


  


     

