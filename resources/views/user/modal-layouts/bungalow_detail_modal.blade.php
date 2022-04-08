{{-- START MAIN MODAL --}}
<div class="modal fade main_modal" id="createProjectModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_name"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="grad">

                {{-- <div class="scrollbar">
                    <button type="button" class="btn btn-info btn-xs" id="stepOneBtn">Step1</button>
                    <button type="button" class="btn btn-info btn-xs" id="stepTwoBtn">Step2</button>
                    <button type="button" class="btn btn-info btn-xs" id="stepThreeBtn">Step3</button>
                    <button type="button" class="btn btn-info btn-xs" id="stepFourBtn">Step4</button>
                    <button type="button" class="btn btn-info btn-xs" id="stepFiveBtn">Step5</button>
                    <button type="button" class="btn btn-info btn-xs" id="stepSixBtn">Step6</button>
                    <button type="button" class="btn btn-info btn-xs" id="stepSevenBtn">Step7</button>
                    <button type="button" class="btn btn-info btn-xs" id="stepEightBtn">Step8</button>
                    <button type="button" class="btn btn-info btn-xs" id="stepNineBtn">Payment</button>
                </div> --}}

               <div class="my-3"></div>
                <form class="form_name" id="createProjectForm">
                    @csrf
                    <div id="errors"></div>
                    <div id="project_module"></div>

                    <input type="hidden" name="project_id" id="project_id">
                    <input type="hidden" name="dimension" id="dimension">
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
    <span id="project_url" url="project" modal-index="0" function-name="Project"></span>
    {{-- <div class="row">
        <div class="col-md-6">
            <select name="project_group_id" id="project_group_id" class="form-select form-select-sm" >
                <option selected disabled>Project Group{{$project_group_id}}</option>
                @foreach ($project_group as $group)
                    <option value="{{$group->id}}">{{ucwords($group->project_group)}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <select name="project_type_id" id="project_type_id" class="form-select form-select-sm">
            </select>
        </div>
    </div> --}}

    <input type="hidden" name="project_group_id" id="project_group_id" value="{{@$project_group_id}}">
    <input type="hidden" name="project_type_id" id="project_type_id" value="{{@$project_type_id}}">

    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">Name</label> <span style="color: #ff0000">*</span>
        </div>
        <div class="col-2">
            <select name="prefix" id="prefix" class="form-select form-select-sm">
                <option selected disabled>Select</option>
                <option value="{{MyApp::MR}}">Mr</option>
                <option value="{{MyApp::MRS}}">Mrs</option>
                <option value="{{MyApp::MS}}">Ms</option>
                <option value="{{MyApp::M_S}}">M/S</option>
            </select>
        </div>  
        <div class="col-4 mb-1">
            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name">
        </div>
        <div class="col-3">
            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name" >
        </div>
    </div>

    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">Email</label> <span style="color: #ff0000">*</span>
        </div>
        <div class="col-md-9">
            <input type="text" name="email" id="email" class="form-control" placeholder="Email" >
        </div>
    </div>

    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">Address</label> <span style="color: #ff0000">*</span>
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
            <label class="form-check-label">Country</label><span style="color: #ff0000">*</span>
        </div>
        <div class="col-md-9">
            <select name="country" id="country" class="form-select form-select-sm" onchange="getState(this.value);">
                <option selected disabled>Select Country</option>
                @foreach ($countries as $country)
                    <option value="{{$country->id}}" selected>{{$country->country_name}}</option>
                @endforeach 											
            </select>
        </div>
    </div>

    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">State</label> <span style="color: #ff0000">*</span>
        </div>
        <div class="col-md-9">
            <select id="state" name="state" class="form-select form-select-sm"></select>
        </div>
    </div>

    <div class="my-1"></div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">City</label> <span style="color: #ff0000">*</span>
        </div>
        <div class="col-md-9">
            <select id="city" name="city" class="form-select form-select-sm"></select>
        </div>
    </div>
    <hr>

    {{-- <div class="form-check-label mt-3"><b>Peoperty Details</b></div> --}}
    <div class="row">
        <div class="col-6">
            <label for="">Peoperty Details</label>
        </div>
        <div class="offset-md-2 col-4">
            <select class="form-select form-select-sm" id="dimention" style="flex: 0.3 0 auto">
                <option selected disabled>Select Dimension</option>
                <option value="{{MyApp::FT}}">ft</option>
                <option value="{{MyApp::MTR}}">m</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input form-check-input-sm plot_type" type="radio" name="plot_type" value="{{MyApp::REGULAR_PLOT}}" checked>
                <label class="form-check-label form-check-label-sm">Regular Plot</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check mb-1">
                <input class="form-check-input form-check-input-sm plot_type" type="radio" name="plot_type" value="{{MyApp::IR_REGULAR_PLOT}}">
                <label class="form-check-label form-check-label-sm">Irregular Plot</label>
            </div>
        </div>
    </div>

    <div class="my-1"></div>

    <div class="row">
        <div class="col-md-2">
            <label class="form-check-label">Length</label> <span style="color: #ff0000">*</span>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-1">
                <input type="text" class="form-control input gradiantclass" id="plot_length" name="plot_length" placeholder="Length" required>
                <span class="input-group-text another"></span> 
            </div>
        </div>
        <div class="col-md-2 diagonal hide">
            <label class="form-check-label">Diagonal1</label>
        </div>
        <div class="col-md-4 diagonal hide">
            <div class="input-group mb-1">
                <input type="text" class="form-control input gradiantclass" id="diagonal_1" name="diagonal_1" placeholder="Diagonal1" required>
                <span class="input-group-text another"></span> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <label class="form-check-label">Width</label> <span style="color: #ff0000">*</span>
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <input type="text" class="form-control input gradiantclass" id="plot_width" name="plot_width" placeholder="Width" required>
                <span class="input-group-text another"></span> 
            </div>
        </div>
        <div class="col-md-2 diagonal hide">
            <label class="form-check-label">Diagonal2</label>
        </div>
        <div class="col-md-4 diagonal hide"> 
            <div class="input-group">
                <input type="text" class="form-control input gradiantclass"  id="diagonal_2" name="diagonal_2" placeholder="Diagonal2" required>
                <span class="input-group-text another"></span> 
            </div>
        </div>
    </div>

    <div class="my-1"></div>

    <div class="row">
        <div class="col-md-2">
            <label class="form-check-label form-check-label-sm">Plot Size</label> <span style="color: #ff0000">*</span>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" class="form-control gradiantclass" id="plot_size" name="plot_size" placeholder="Plot area" readonly>
                <span class="input-group-text plot_type_another"></span> 
            </div>
        </div>
    </div>

    <div class="my-1"></div>

    <div class="irregular_image hide">
    <label class="form-check-label">For irregular plot sketch is required</label> <span style="color: #ff0000">*</span>
    <div class="row">
        <div class="col-md-1">
            <img src="{{asset('public/sdpl-assets/user/images/Form_Img/cloud-upload.png')}}" width="20" height="20">  
        </div>
        <div class="col-md-11">
            <div class="input-group">
                <input type="file" class="form-control" id="hand_sketch_img" name="hand_sketch_img" aria-label="Upload">
                {{-- <br><img id="myImg" src="#"> --}}
            </div>
        </div>
        {{-- <div class="col-md-3">
            <button type="button" class="btn btn-primary btn-sm">Preview</button> 
        </div> --}}
    </div>
    </div>

    <div class="form-check-label mt-3"><b>Appoint a Surveyor</b></div>
    <div class="row">
        
        <div class="col-4">
            <div class="form-check apmt_req">
                <input class="form-check-input" type="radio" name="apmt" value="{{MyApp::APMT_REQ}}">
                <label class="form-check-label">Required</label>
            </div> 
        </div>
        <div class="col-6">
            <div class="form-check apmt_req">
                <input class="form-check-input" type="radio" name="apmt" value="{{MyApp::APMT_NOT_REQ}}" checked>
                <label class="form-check-label">Not Required</label>
            </div> 
        </div>
    </div>

    <div class="my-1"></div>

    <div class="form-check-label mt-2"><b>Plot Borders</b></div>
    <div class="row">
        <div class="col-md-2">
            <label class="form-check-label">East</label> <span style="color: #ff0000">*</span>
        </div>
        <div class="col-md-4">
            <div class="form-check east_plot_border">
                <input class="form-check-input" type="radio" name="east_property" value="{{MyApp::EAST_OTHER_PROPERTY}}">
                <label class="form-check-label">Other Property</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check east_plot_border">
                <input class="form-check-input ck_east_road " type="radio" name="east_property" value="{{MyApp::EAST_ROAD}}">
                <label class="form-check-label">Road</label>
            </div>
        </div> 
        {{-- <div class="col-md-2"></div> --}}
        <div class="col-md-4">
            <div class="input-group input_east_show hide">
                <input type="text" class="form-control gradiantclass input_other_field" id="east_road_width" name="east_road_width" placeholder="east road width" style="width:50%;" required>
                <span class="input-group-text another"></span> 
            </div>
        </div> 
    </div>

    <div class="row">
        <div class="col-md-2">
            <label class="form-check-label">West</label> <span style="color: #ff0000">*</span>
        </div>
        <div class="col-md-4">
            <div class="form-check west_plot_border">
                <input class="form-check-input" type="radio" name="west_property" value="{{MyApp::WEST_OTHER_PROPERTY}}">
                <label class="form-check-label">Other Property</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check west_plot_border">
                <input class="form-check-input ck_west_road" type="radio" name="west_property" value="{{MyApp::WEST_ROAD}}">
                <label class="form-check-label">Road</label>
            </div>
        </div>  
        {{-- <div class="col-md-2"></div> --}}
        <div class="col-md-4">
            <div class="input-group input_west_show hide">
                <input type="text" class="form-control gradiantclass input_other_field" id="west_road_width" name="west_road_width" placeholder="west road width" style="width:50%;" required>
                <span class="input-group-text another"></span> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <label class="form-check-label">North</label> <span style="color: #ff0000">*</span>
        </div>
        <div class="col-md-4">
            <div class="form-check north_plot_border">
                <input class="form-check-input" type="radio" id="north_property" name="north_property" value="{{MyApp::NORTH_OTHER_PROPERTY}}">
                <label class="form-check-label">Other Property</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check north_plot_border">
                <input class="form-check-input ck_north_road" type="radio" name="north_property" value="{{MyApp::NORTH_ROAD}}">
                <label class="form-check-label">Road</label>
            </div>
        </div>
        {{-- <div class="col-md-4"></div> --}}
        <div class="col-md-4">
            <div class="input-group input_north_show hide">
                <input type="text" class="form-control gradiantclass input_other_field" id="north_road_width" name="north_road_width" placeholder="north road width" style="width:50%;" required>
                <span class="input-group-text another"></span> 
            </div>
        </div>  
    </div>
    <div class="row">
        <div class="col-md-2">
            <label class="form-check-label">South</label> <span style="color: #ff0000">*</span>
        </div>
        <div class="col-md-4">
            <div class="form-check south_plot_border">
                <input class="form-check-input" type="radio" id="south_property" name="south_property" value="{{MyApp::SOUTH_OTHER_PROPERTY}}">
                <label class="form-check-label">Other property</label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-check south_plot_border">
                <input class="form-check-input ck_south_road" type="radio" name="south_property" value="{{MyApp::SOUTH_ROAD}}">
                <label class="form-check-label">Road</label>
            </div>
        </div>
        {{-- <div class="col-md-2"></div> --}}
        <div class="col-md-4">
            <div class="input-group input_south_show hide">
                <input type="text" class="form-control gradiantclass input_other_field" id="south_road_width" name="south_road_width" placeholder="south road width" style="width:50%;" required>
                <span class="input-group-text another"></span> 
            </div>
        </div>  
    </div>
   
    <div class="my-1"></div>

    <div class="row bg-white">
        <div class="form-check">
            <input class="form-check-input form-check-input-sm perpendicularly_north" type="checkbox" id="plot_orientation" name="plot_orientation" value="{{MyApp::PLOT_NOT_ORIENTED}}">
            <label class="form-check-label"><small>Plot is not oriented perpendicularly with north</small></label>
        </div>
    </div>
    <div class="row bg-white input_hand_sketch_orientation_img hide">
        <label class="form-check-label"><small>Upload hand sketch image with orientation</small></label>
        <div class="col-md-1">
            <img src="{{asset('public/sdpl-assets/user/images/Form_Img/cloud-upload.png')}}" width="20" height="20">  
        </div>
        <div class="col-md-10">
            <div class="input-group">
                <input type="file" class="form-control" id="hand_sketch_orientation_img" name="hand_sketch_orientation_img" aria-label="Upload">
            </div>
        </div>
        
    </div>
    
    <div class="my-1"></div>

    <label class="form-check-label">Down/up of ground from abuting front</label>
    <div class="row">     
        <div class="col-md-6">
            <select class="form-select form-select-sm" id="level" name="level">
                {{-- <option selected disabled>Select level</option> --}}
                <option value="{{MyApp::LEVEL_ALMOST}}">Almost Same</option>
                <option value="{{MyApp::LEVEL_UP}}">Up</option>
                <option value="{{MyApp::LEVEL_DOWN}}">Down</option>
            </select> 
        </div>
        <div class="col-md-6">
            <div class="input-group level_val hide">
                <input type="text" class="form-control gradiantclass input_other_field" id="level_value" name="level_value" placeholder="enter value" style="width:50%;">
                <span class="input-group-text another"></span> 
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
            <label class="form-check-label">No. of Floors</label>
        </div>
        <div class="col-md-5">
            <div class="input-group">
                <select id="floor" name="floor" class="form-select form-select-sm">
                    <option selected disabled>Select floor</option>
                    <option value="{{MyApp::G_FLOOR}}">Ground Floor (G)</option>
                    <option value="{{MyApp::G_1_FLOOR}}">1st Floor (G+1)</option>
                    <option value="{{MyApp::G_2_FLOOR}}">2nd Floor (G+2)</option>
                    <option value="{{MyApp::G_3_FLOOR}}">3rd Floor (G+3)</option>
                    <option value="{{MyApp::MORE_FLOOR}}">More floors</option>
                </select>  
            </div>
        </div>
        <div class="col-md-4 entrence_more_floor hide">
            <input type="text" class="form-control gradiantclass" id="more_floor" name="more_floor" placeholder="More floors">
        </div>
    </div>

    <div class="mt-1"></div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">Vastu</label>
        </div>
        <div class="col-md-5">
            <div class="form-check vastu">
                <input class="form-check-input" type="radio" name="vastu" value="{{MyApp::MODERATE_CONSIDERATION}}" style="border-radius:20%;">
                <label class="form-check-label">Moderate Condideration</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check vastu">
                <input class="form-check-input" type="radio" name="vastu" value="{{MyApp::CONSULT_EXPERT}}" style="border-radius:20%;">
                <label class="form-check-label">Consult Expert</label>
            </div>
        </div>
    </div>
    <hr>
    {{-- <label class="form-check-label">Entrance</label> --}}
    <label class="form-check-label">Entrance Gate <span style="color: #ff0000">*</span></label>
    <div class="row">
        <div class="col-md-3">  
            <div class="form-check entrance_gate">
                <input class="form-check-input entrance_ONE_GATE_width" type="radio" name="entrance_gate" value="{{MyApp::ONE_GATE}}" style="border-radius:20%;">
                <label class="form-check-label">One gate</label>
            </div> 
        </div> 
        <div class="col-md-5">
            <div class="row entrance_one_gate_width one_gate_body hide">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <div class="input-group">
                        <select id="one_gate" name="one_gate" class="form-select form-select-sm">
                            <option selected disabled>Select gate width</option>
                            <option value="{{MyApp::WIDE_10}}">10</option>
                            <option value="{{MyApp::WIDE_12}}">12</option>
                            <option value="{{MyApp::WIDE_14}}">14</option>
                            <option value="{{MyApp::MORE_WIDE}}">More wide</option>
                        </select>  
                        {{-- <span class="input-group-text another"></span>  --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 onegate_more_wide hide">
            <input type="text" class="form-control gradiantclass" id="one_gate_more_wide" name="one_gate_more_wide" placeholder="More wide">
        </div>
    </div>
    <div class="row">
        {{-- <div class="col-md-3"></div> --}}
        <div class="col-md-3">
            <div class="form-check entrance_gate">
                <input class="form-check-input entrance_TWO_GATE_width" type="radio" name="entrance_gate" value="{{MyApp::TWO_GATE}}" style="border-radius:20%;">
                <label class="form-check-label">Two gate</label>
            </div>
        </div>
        <div class="col-md-3 entrance_two_gate_width two_gate_body hide">
            <div class="form-check two_gate">
                <input class="form-check-input entrance_two_gate_adjacent_width" type="radio" name="two_gate" value="{{MyApp::ADJACENT}}" style="border-radius:20%;">
                <label class="form-check-label">Adjacent</label>
            </div>
        </div>
        <div class="col-md-6 entrance_two_gate_width two_gate_body hide">
            <div class="form-check two_gate">
                <input class="form-check-input entrance_two_gate_different_width" type="radio" name="two_gate" value="{{MyApp::DIFF_CUS_LOC}}" style="border-radius:20%;">
                <label class="form-check-label">Different custom location</label>
            </div> 
        </div>
    </div>

    <div class="row entrance_two_gate_width">
        <div class="col-md-3"></div>
        {{-- <div class="col-md-9">
            <div class="form-check two_gate">
                <input class="form-check-input entrance_two_gate_adjacent_width" type="radio" name="two_gate" value="Adjacent" style="border-radius:20%;">
                <label class="form-check-label">Adjacent</label>
            </div>
        </div> --}}
        <div class="row entrance_two_gate_adjacent_mainsidecar_width adjecent_body hide">
            <div class="col-md-3"></div>
            <div class="col-md-4">
                <label class="form-check-label form-check-label-sm">Main car gate</label>
                <div class="input-group">
                    <select id="main_car_gate" name="main_car_gate" class="form-select form-select-sm">
                        <option selected disabled value="Select gate width">Select</option>
                        <option value="{{MyApp::WIDE_10}}">10</option>
                        <option value="{{MyApp::WIDE_12}}">12</option>
                        <option value="{{MyApp::WIDE_14}}">14</option>
                        <option value="{{MyApp::MORE_WIDE}}">More wide</option>
                    </select>  
                    <span class="input-group-text another"></span> 
                </div>
            </div>
            <div class="col-md-5">
                <label class="form-check-label form-check-label-sm">Side padestrian gate</label>
                <div class="input-group">
                    <select id="side_padestrian_gate" name="side_padestrian_gate" class="form-select form-select-sm">
                        <option selected disabled value="Select gate width">Select</option>
                        <option value="{{MyApp::WIDE_3}}">3</option>
                        <option value="{{MyApp::WIDE_4}}">4</option>
                        <option value="{{MyApp::MORE_WIDE}}">More wide</option>
                    </select>  
                    <span class="input-group-text another"></span> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4 main_catgate_more_wide hide">
                <input type="text" class="form-control gradiantclass" id="main_car_gate_more_wide" name="main_car_gate_more_wide" placeholder="More wide">
            </div>
            <div class="offset-md-4 col-md-5 side_pad_more_wide hide">
                <input type="text" class="form-control gradiantclass" id="side_padestrian_gate_more_wide" name="side_padestrian_gate_more_wide" placeholder="More wide">
            </div>
        </div>
        <div class="col-md-3"></div>
        {{-- <div class="col-md-9">
            <div class="form-check two_gate">
                <input class="form-check-input entrance_two_gate_different_width" type="radio" name="two_gate" style="border-radius:20%;">
                <label class="form-check-label">Different custom location</label>
            </div> s
        </div> --}}
        <div class="offset-md-3 col-md-9 entrance_two_gate_different_customlocation_width diff_cus_loc_body hide">
            <label class="form-check-label">Brief about different customed location</label>
            <div class="input-group mb-1">
                <input type="text" class="form-control gradiantclass" id="different_customized_location" name="different_customized_location" placeholder="Enter location">
            </div>
        </div>
    </div>
    <hr>
                                        
    <div class="card bg-light">
        <div class="card-header" style="padding: 2px;"><b>Security Kiosq</b></div>
        <div class="row mt-1">
            <div class="col-md-4">
                <div class="form-check security_kiosq_req">
                    <input class="form-check-input " type="radio" name="security_kiosq_req" id="security_kiosq_req" req-body="security_kiosq_body" value="{{MyApp::REQ}}" style="border-radius:20%;">
                    <label class="form-check-label">Required</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check security_kiosq_req">
                    <input class="form-check-input " type="radio" name="security_kiosq_req" id="security_kiosq_not_req" req-body="security_kiosq_body" value="{{MyApp::NOT_REQ}}" style="border-radius:20%;" checked>
                    <label class="form-check-label">Not Required</label>
                </div>
            </div>
        </div>
        <div class="card-body security_kiosq_body hide">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Length</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass kiosq_area" id="security_kiosq_length" name="security_kiosq_length" placeholder="length" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Width</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass kiosq_area" id="security_kiosq_width" name="security_kiosq_width" placeholder="width" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row hide">
                <div class="col-md-4">
                    <label class="form-check-label">Kiosq Area</label>
                </div>
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="hidden" class="form-control gradiantclass"  id="security_kiosq_area"  name="security_kiosq_area" placeholder="kiosq area" required readonly>
                        <span class="input-group-text another"></span> 
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="form-check security_kiosq">
                    <input class="form-check-input" type="radio" name="security_kiosq" value="{{MyApp::KIOSQ_WITH_SLEEPING}}" style="border-radius:20%;">
                    <label class="form-check-label">With sleeping space</label>
                </div>           
                <div class="form-check security_kiosq">
                    <input class="form-check-input" type="radio" name="security_kiosq" value="{{MyApp::KIOSQ_WITHOUT_SLEEPING}}" style="border-radius:20%;">
                    <label class="form-check-label">Without sleeping space</label>
                </div>   
            </div> --}}
            <div class="row mt-2">
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
       
    <div class="card bg-light">
        <div class="card-header" style="padding: 2px;"><b>Porch</b></div>
        <div class="row mt-1">
            <div class="col-md-4">
                <div class="form-check porch_req">
                    <input class="form-check-input " type="radio" name="porch_req" id="porch_req" req-body="porch_body" value="{{MyApp::REQ}}" style="border-radius:20%;">
                    <label class="form-check-label">Required</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check porch_req">
                    <input class="form-check-input " type="radio" name="porch_req" id="porch_not_req" req-body="porch_body" value="{{MyApp::NOT_REQ}}" style="border-radius:20%;" checked>
                    <label class="form-check-label">Not Required</label>
                </div>
            </div>
        </div>
        <div class="card-body porch_body hide">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Length</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control porch_area gradiantclass" id="porch_length" name="porch_length" placeholder="length" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Width</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control porch_area gradiantclass"  id="porch_width"  name="porch_width" placeholder="width" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row hide">
                <div class="col-md-4">
                    <label class="form-check-label">Porch Area</label>
                </div>
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="hidden" class="form-control gradiantclass" id="porch_area" name="porch_area" placeholder="porch area" required readonly>
                        <span class="input-group-text another"></span> 
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="porch">
                    <div class="card-header ml-3" style="padding: 2px;">
                        <input class="form-check-input visual_nature" type="radio" name="porch" value="Visual nature" style="border-radius:20%;">
                        <label class="form-check-label">Visual nature</label>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="input-group visual_height mt-1">
                                <select id="visual_nature" name="visual_nature" class="form-select form-select-sm">
                                    <option selected disabled>Select visual design</option>
                                    <option value="{{MyApp::SINGLE_HEIGHT}}">Single height</option>
                                    <option value="{{MyApp::DOUBLE_HEIGHT}}">Double height</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
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
                    <div class="row">
                        <div class="col-md-7">
                            <div class="input-group car_parking_height mt-1">
                                <select id="car_parking_space" name="car_parking_space" class="form-select form-select-sm">
                                    <option selected disabled>Select no of cars</option>
                                    <option value="{{MyApp::ONE_CAR}}">1</option>
                                    <option value="{{MyApp::TWO_CAR}}">2</option>
                                    <option value="{{MyApp::THREE_CAR}}">3</option>
                                    <option value="{{MyApp::FOUR_CAR}}">4</option>
                                    <option value="{{MyApp::FIVE_CAR}}">5</option>
                                    <option value="{{MyApp::MORE_CAR}}">More Car</option>
                                </select>  
                            </div>
                        </div>
                        <div class="col-md-5 mt-1 no_of_car_parking_more hide">
                            <input type="text" class="form-control gradiantclass" id="" name="" placeholder="No of cars">
                        </div>
                    </div>
                    <div class="row mt-2">
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
    
    <div class="card bg-light">
        <div class="card-header" style="padding: 2px;"><b>Foyer/Welcome Lobby</b></div>
        <div class="row mt-1">
            <div class="col-md-4">
                <div class="form-check foyer_req">
                    <input class="form-check-input " type="radio" name="foyer_req" id="foyer_req" req-body="foyer_body" value="{{MyApp::REQ}}" style="border-radius:20%;">
                    <label class="form-check-label">Required</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check foyer_req">
                    <input class="form-check-input " type="radio" name="foyer_req" id="foyer_not_req" req-body="foyer_body" value="{{MyApp::NOT_REQ}}" style="border-radius:20%;" checked>
                    <label class="form-check-label">Not Required</label>
                </div>
            </div>
        </div>
        <div class="card-body foyer_body hide">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Length</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control foyer_area gradiantclass"  id="foyer_length"  name="foyer_length" placeholder="length" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Width</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control foyer_area gradiantclass"  id="foyer_width"  name="foyer_width" placeholder="width" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hide">
                <div class="col-md-5 hide">
                    <label class="form-check-label">Area of foyer</label>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="hidden" class="form-control gradiantclass"  id="foyer_area" name="foyer_area" placeholder="foyer area" required readonly>
                        <span class="input-group-text another">Ft</span> 
                    </div>
                </div>
            </div>
            
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Lobby design</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <select id="foyer_lobby" name="foyer_lobby" class="form-select form-select-sm">
                                    <option selected disabled>Select lobby design</option>
                                    <option value="{{MyApp::HILIGHTER_WALL}}">Hilighter/welcome wall</option>
                                    <option value="{{MyApp::SHOE_RACK_SPACE}}">Shoe rack space</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
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

    <div class="card bg-light">
        <div class="card-header" style="padding: 2px;"><b>Varanda</b>
        </div>
            <div class="row mt-1">
                <div class="col-md-4">
                    <div class="form-check verandah_req">
                        <input class="form-check-input " type="radio" name="verandah_req" id="verandah_req" req-body="verandah_body" value="{{MyApp::REQ}}" style="border-radius:20%;">
                        <label class="form-check-label">Required</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check verandah_req">
                        <input class="form-check-input " type="radio" name="verandah_req" id="verandah_not_req" req-body="verandah_body" value="{{MyApp::NOT_REQ}}" style="border-radius:20%;" checked>
                        <label class="form-check-label">Not Required</label>
                    </div>
                </div>
            </div>
        
        <div class="card-body verandah_body hide">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Length</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass varandah_area"  id="verandah_length"  name="verandah_length" placeholder="length">
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Width</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass varandah_area"  id="verandah_width"  name="verandah_width" placeholder="width">
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="row hide">
                <div class="col-md-5">
                    <label class="form-check-label">Varandah Area</label>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="hidden" class="form-control gradiantclass"  id="verandah_area"  name="verandah_area" placeholder="varandah area" required readonly>
                        <span class="input-group-text another"></span> 
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="form-check verandah">
                    <input class="form-check-input" type="radio" name="verandah" value="Out Side Open" style="border-radius:20%;">
                    <label class="form-check-label">Out side open</label>
                </div>    
                <div class="form-check verandah">
                    <input class="form-check-input" type="radio" name="verandah" value="Out Side Closed with glass" style="border-radius:20%;">
                    <label class="form-check-label">Out side closed with glass & grill</label>
                </div> 
            </div>
            <div class="row mt-2">
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
    {{-- <input type="hidden" name="project_id" id="bungalow_entrance_project_id"> --}}
</div>
{{-- END BUNGALOW ENTRANCE MODAL --}}


{{-- Start Bungalow DrawingHall Modal --}}
<div class="row hide" id="bungalow_drawing_hall_modal">
    <span id="project_url" url="bungalow-drawing-hall" function-name="BungalowDrawingHall" modal-index="2"></span>

    <div class="card bg-light">
        <div class="card-header" style="padding: 2px;"><b>Living Hall/Family Lounge</b></div>
        <div class="row mt-1">
            <div class="col-md-4">
                <div class="form-check living_hall_req">
                    <input class="form-check-input" type="radio" name="living_hall_req" id="living_hall_req" req-body="living_hall_body" value="{{MyApp::REQ}}" style="border-radius:20%;">
                    <label class="form-check-label">Required</label>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-check living_hall_req">
                    <input class="form-check-input" type="radio" name="living_hall_req" id="living_hall_req" req-body="living_hall_body" value="{{MyApp::NOT_REQ}}" style="border-radius:20%;" checked>
                    <label class="form-check-label">Not Required</label>
                </div>
            </div>
        </div>
        
        <div class="card-body living_hall_body hide">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="form-check-label">Location</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <select id="living_hall_location" name="living_hall_location" class="form-select form-select-sm">
                                    <option selected disabled>Select</option>
                                    <option value="{{MyApp::G_FLOOR}}">Ground floor </option>
                                    <option value="{{MyApp::G_1_FLOOR}}">1st floor </option>
                                    <option value="{{MyApp::G_2_FLOOR}}">2nd floor</option>
                                    {{-- <option value="{{MyApp::MORE_FLOOR}}">More floor</option> --}}
                                </select>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="form-check-label">Length</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass living_area" id="living_hall_length" name="living_hall_length" placeholder="length" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Width</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass living_area" id="living_hall_width" name="living_hall_width" placeholder="width" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="row hide">
                <div class="col-md-5">
                    <label class="form-check-label">Living Hall Area</label>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="text" class="form-control gradiantclass" id="living_hall_area"  name="living_hall_area" placeholder="living hall area" required readonly>
                        <span class="input-group-text another"></span> 
                    </div>
                </div>
            </div>

            <label class="form-check-label ml-1"><b>Features</b></label>
            <div class="row ml-1">
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input living_hall" type="checkbox" name="living_hall[]" value="{{MyApp::DOUBLE_HEIGHT}}">
                        <label class="form-check-label">Double height</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input living_hall" type="checkbox" name="living_hall[]" value="{{MyApp::POWDER_TOILET}}">
                        <label class="form-check-label">Powder toilet</label>
                    </div>
                </div>
                <div class="col-md-4"></div>
                {{-- <div class="form-check">
                    <input class="form-check-input living_hall" type="checkbox" name="living_hall[]" value="{{MyApp::FIRE_PLACE_INSIDE}}" >
                    <label class="form-check-label">Fire place inside</label><br>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="form-check-label ml-2"><b>Special features</b></label>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <input class="form-control gradiantclass" type="text" name="living_hall_text" id="living_hall_text" placeholder="Breif about special features">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
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
 
    <div class="card bg-light">
        <div class="card-header" style="padding: 2px;"><b>Exclusive Drawing Hall</b></div>
        <div class="row mt-1">
            <div class="col-md-4">
                <div class="form-check drawing_hall_req">
                    <input class="form-check-input" type="radio" name="drawing_hall_req" id="drawing_hall_req" req-body="drawing_hall_body" value="{{MyApp::REQ}}" style="border-radius:20%;">
                    <label class="form-check-label">Required</label>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-check drawing_hall_req">
                    <input class="form-check-input" type="radio" name="drawing_hall_req" id="drawing_hall_req" req-body="drawing_hall_body" value="{{MyApp::NOT_REQ}}" style="border-radius:20%;" checked>
                    <label class="form-check-label">Not Required</label>
                </div>
            </div>
        </div>

        <div class="card-body drawing_hall_body hide">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="form-check-label">Location</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <select id="drawing_hall_location" name="drawing_hall_location" class="form-select form-select-sm">
                                    <option selected disabled>Select</option>
                                    <option value="{{MyApp::G_FLOOR}}">Ground floor </option>
                                    <option value="{{MyApp::G_1_FLOOR}}">1st floor </option>
                                    <option value="{{MyApp::G_2_FLOOR}}">2nd floor</option>
                                    {{-- <option value="{{MyApp::MORE_FLOOR}}">More floor</option> --}}
                                </select>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="form-check-label">Length</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control drawing_length gradiantclass drawing_area" id="drawing_hall_length" name="drawing_hall_length" area-id="drawing_hall_area" placeholder="length" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Width</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control drawing_width gradiantclass drawing_area" id="drawing_hall_width" name="drawing_hall_width" area-id="drawing_hall_area" placeholder="width" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hide">
                <div class="col-md-6">
                    <label class="form-check-label">Drawing Hall Area</label>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control gradiantclass" id="drawing_hall_area" name="drawing_hall_area" placeholder="drawing area" required readonly>
                        <span class="input-group-text another"></span> 
                    </div>
                </div>
            </div>
            {{-- <label class="form-check-label ml-1"><b>Features</b></label>
            <div class="row">
                <div class="col-md-4 ml-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="drawing_hall" id="drawing_hall" value="{{MyApp::DRAWING_HALL_FEATURES}}">
                        <label class="form-check-label">Fire Place Inside</label>
                    </div>
                </div>
            </div> --}}
            <div class="row mt-1">
                <div class="col-md-4">
                    <label class="form-check-label ml-2"><b>Special features</b></label>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <input class="form-control gradiantclass" type="text" name="drawing_hall_text" id="drawing_hall_text" placeholder="Breif about special features">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
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

    <div class="card bg-light">
        <div class="card-header" style="padding: 2px;"><b>Kitchen Details</b>
            {{-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button> --}}
        </div>
        <div class="card-body">
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="form-check-label">Location</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <select id="kitchen_floor" name="kitchen_floor" class="form-select form-select-sm">
                                    <option selected disabled>Select</option>
                                    <option value="{{MyApp::G_FLOOR}}">Ground Floor </option>
                                    <option value="{{MyApp::G_1_FLOOR}}">1st Floor </option>
                                    <option value="{{MyApp::G_2_FLOOR}}">2nd Floor</option>
                                    {{-- <option value="{{MyApp::MORE_FLOOR}}">More</option> --}}
                                </select>  
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 other_kitchen_location_col hide">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="other_kitchen_location" id="other_kitchen_location" placeholder="other kitchen location">
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
           
            <div class="row"> 
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="form-check-label">Length</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass kitchen_area" id="kitchen_length" name="kitchen_length" placeholder="length" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Width</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass kitchen_area" id="kitchen_width" name="kitchen_width" placeholder="width" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="row hide">
                <div class="col-md-5">
                    <label class="form-check-label">kitchen Area</label>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="text" class="form-control gradiantclass"  name="kitchen_area" id="kitchen_area" placeholder="kitchen area" required readonly>
                        <span class="input-group-text another"></span> 
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <label class="form-check-label"><b>Kitchen dinning functions</b></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="input-group">
                                <select id="kitchen_dining_function" name="kitchen_dining_function" class="form-select form-select-sm">
                                    <option selected disabled>Select</option>
                                    <option value="{{MyApp::FULL_OPEN_TO_DINNING}}">Full open to dinning</option>
                                    <option value="{{MyApp::PARTIAL_OPEN_TO_DINNING}}">Open with a reasonable openning</option>
                                    <option value="{{MyApp::OPEN_WITH_A_REASONABLE_OPENNING}}">Open with a door</option>
                                    <option value="{{MyApp::OPEN_WITH_A_DOOR}}">Partial open to dinning</option>
                                </select>  
                            </div> 
                        </div>
                    </div>
                </div>
            </div>   
            <div class="row mt-2">
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

            <div class="row my-3">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <label class="form-check-label"><b>Refrigerator Types</b></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="input-group">
                                <select id="refrigerator_size" name="refrigerator_size" class="form-select form-select-sm">
                                    <option selected disabled>Select</option>
                                    <option value="{{MyApp::SINGLE_DOOR}}">Single door</option>
                                    <option value="{{MyApp::DOUBLE_DOOR}}">Double door</option>
                                </select>  
                            </div> 
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row mt-2">
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
    

        <div class="row mt-1 ml-2">
            <div class="form-check">
                <input class="form-check-input attached_store kitchen_features" type="checkbox" name="kitchen_features[]" value="Attached store area">
                <label class="form-check-label">Attached store area</label>
            </div>
            
            <div class="attached_store_input">
                <div class="row"> 
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <label class="form-check-label">Length</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <input type="text" class="form-control gradiantclass atached_store_area" id="attach_store_length" name="attach_store_length" placeholder="length" required>
                                    <span class="input-group-text another"></span> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <label class="form-check-label">Width</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <input type="text" class="form-control gradiantclass atached_store_area" id="attach_store_width" name="attach_store_width" placeholder="width" required>
                                    <span class="input-group-text another"></span> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group hide">
                    <input type="text" class="form-control gradiantclass" name="attach_store_area" id="attach_store_area" placeholder="Attached store area" required readonly>
                    <span class="input-group-text another"></span> 
                </div>
            </div> 
        </div>

        <div class="row mt-1 ml-2">
            <div class="form-check">
                <input class="form-check-input utility_washroom kitchen_features" type="checkbox" name="kitchen_features[]" value="Utility wash room">
                <label class="form-check-label">Utility wash area</label>
            </div>

            <div class="utility_washroom_input">
                <div class="row"> 
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <label class="form-check-label">Length</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <input type="text" class="form-control gradiantclass utility_wash_area" id="utility_wash_length" name="utility_wash_length" placeholder="length" required>
                                    <span class="input-group-text another"></span> 
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <label class="form-check-label">Width</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <input type="text" class="form-control gradiantclass utility_wash_area" id="utility_wash_width" name="utility_wash_width" placeholder="width" required>
                                    <span class="input-group-text another"></span> 
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="input-group hide">
                    <input type="text" class="form-control gradiantclass" name="utility_wash_area" id="utility_wash_area" placeholder="Utility wash room"required readonly>
                    <span class="input-group-text another"></span> 
                </div>
            </div>
        </div>

        <div class="row mt-1 ml-2">
            <div class="form-check">
                <input class="form-check-input washroom_area kitchen_features" type="checkbox" name="kitchen_features[]" value="Wash area open">
                <label class="form-check-label">Wash area in open</label>
            </div>

            <div class="washroom_area_input">
                <div class="row hide"> 
                    <div class="col-md-6">
                        <label class="form-check-label">Length</label>
                        <div class="input-group">
                            <input type="text" class="form-control gradiantclass wash_area" id="wash_area_length" name="wash_area_length" placeholder="length" required>
                            <span class="input-group-text another"></span> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label">Width</label>
                        <div class="input-group">
                            <input type="text" class="form-control gradiantclass wash_area" id="wash_area_width" name="wash_area_width" placeholder="width" required>
                            <span class="input-group-text another"></span> 
                        </div>
                    </div>
                </div>

                <div class="input-group hide">
                    <input type="text" class="form-control gradiantclass" name="wash_area" id="wash_area" placeholder="Wash area open" required readonly>
                    <span class="input-group-text another"></span> 
                </div>
            </div>
        </div>
        <div class="row mt-1 ml-2">
            <div class="form-check">
                <input class="form-check-input kitchen_features" type="checkbox" name="kitchen_features[]" value="Breakfast Table area inside">
                <label class="form-check-label">Breakfast Table area inside</label>
            </div>
            <div class="form-check">
                <input class="form-check-input kitchen_features" type="checkbox" name="kitchen_features[]" value="Central Island">
                <label class="form-check-label">Central Island</label>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <label class="form-check-label"><b>Specific Requirements</b></label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-11">
                        <div class="input-group mb-1">
                            <input type="text" class="form-control gradiantclass" name="specific_req" id="specific_req" placeholder="Enter">
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
</div>
{{-- END Bungalow DrawingHall Modal --}}
                

{{-- START BUNGALOW PANTRY MODAL --}}
<div class="row hide" id="bungalow_pantry_modal" >
    <span id="project_url" url="bungalow-pantry" function-name="BungalowPantry" modal-index="3"></span>
           
    <div class="card bg-light">
        <div class="card-header" style="padding: 2px;"><b>Pantry Details</b></div>
        <div class="row mt-1">
            <div class="col-md-4">
                <div class="form-check pantry_req">
                    <input class="form-check-input" type="radio" name="pantry_req" id="pantry_req" req-body="pantry_body" value="{{MyApp::REQ}}" style="border-radius:20%;">
                    <label class="form-check-label">Required</label>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-check pantry_req">
                    <input class="form-check-input" type="radio" name="pantry_req" id="pantry_req" req-body="pantry_body" value="{{MyApp::NOT_REQ}}" style="border-radius:20%;" checked>
                    <label class="form-check-label">Not Required</label>
                </div>
            </div>
        </div>
        <div class="card-body pantry_body hide">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <label class="form-check-label">Pantry Floor</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="pantry_floor" name="pantry_floor" class="form-select form-select-sm">
                                    <option selected disabled>Select</option>
                                    <option value="{{MyApp::G_FLOOR}}">G</option>
                                    <option value="{{MyApp::G_1_FLOOR}}">G+1</option>
                                    <option value="{{MyApp::G_2_FLOOR}}">G+2</option>
                                    <option value="{{MyApp::MORE_FLOOR}}">More</option>
                                </select>  
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 other_pantry_text_row hide">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="other_pantry_floor_text" id="other_pantry_floor_text" placeholder="Pantry location">
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row my-2">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="form-check-label">Length</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass pantry_area" id="pantry_length" name="pantry_length" placeholder="length"  required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Width</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass pantry_area" id="pantry_width" name="pantry_width" placeholder="width" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hide">
                <div class="col-md-4">
                    <label class="form-check-label">Pantry Area</label>
                </div>
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control gradiantclass" id="pantry_area" name="pantry_area" placeholder="pantry area" required readonly>
                        <span class="input-group-text another"></span> 
                    </div>
                </div>
            </div>
           
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <label class="form-check-label"><b>Specific Requirements</b></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="specific_req" id="specific_req" placeholder="Text your specific requirements">
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
   
    <div class="card bg-light">
        <div class="card-header" style="padding: 2px;"><b>Dinning Details</b></div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="form-check-label">Length</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass dinning_area" id="dining_length" name="dining_length" placeholder="length" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Width</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass dinning_area" id="dining_width" name="dining_width" placeholder="width" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hide">
                <div class="col-md-5">
                    <label class="form-check-label">Dinning Area</label>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="text" class="form-control gradiantclass"  id="dining_area"  name="dining_area" placeholder="dinning area" required readonly>
                        <span class="input-group-text another">f</span> 
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <label class="form-check-label">Dinning floor</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="dining_floor" name="dining_floor" class="form-select form-select-sm">
                                    <option selected disabled>Select</option>
                                    <option value="{{MyApp::G_FLOOR}}">G</option>
                                    <option value="{{MyApp::G_1_FLOOR}}">G+1</option>
                                    <option value="{{MyApp::G_2_FLOOR}}">G+2</option>
                                    <option value="{{MyApp::MORE_FLOOR}}">More</option>
                                </select>  
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 other_dinning_floor_text_row hide">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="other_dinning_floor_text" id="other_dinning_floor_text" placeholder="Dinning Floors">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <label class="form-check-label">Dinning seat</label>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="dining_seat" name="dining_seat" class="form-select form-select-sm">
                                    <option selected disabled>Select</option>
                                    <option value="{{MyApp::SEAT_ONE}}">1</option>
                                    <option value="{{MyApp::SEAT_TWO}}">2</option>
                                    <option value="{{MyApp::SEAT_THREE}}">3</option>
                                    <option value="{{MyApp::SEAT_FOUR}}">4</option>
                                    <option value="{{MyApp::SEAT_OTHER}}">Other</option>
                                </select>  
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 other_dinning_seat_text_row hide">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="other_dinning_seat_text" id="other_dinning_seat_text" placeholder="Dinning Seats">
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
    
            <div class="row mt-2 ml-2">
                <div class="form-check">
                    <input class="form-check-input dining_features" type="checkbox" name="dining_features[]" value="{{MyApp::WITH_GROCERY_AND_DISPLAY}}">
                    <label class="form-check-label">With crockery storage & display</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input dining_features" type="checkbox" name="dining_features[]" value="{{MyApp::WITHOUT_GROCERY_AND_DISPLAY}}">
                    <label class="form-check-label">Without crockery storage & display</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input dining_features" type="checkbox" name="dining_features[]" value="{{MyApp::WITH_NEARBY_WASHROOM}}">
                    <label class="form-check-label">With nearby washroom</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input dining_features" type="checkbox" name="dining_features[]" value="{{MyApp::DINNING_DOUBLE_HEIGHT}}">
                    <label class="form-check-label">Double height</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <label class="form-check-label"><b>Specific Requirements</b></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="dining_text" id="dining_text" placeholder="Text your specific requirements">
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="row mt-2">
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
    {{-- <input type="hidden" name="project_id" id="bungalow_pantry_project_id"> --}}
</div>
{{-- END BUNGALOW PANTRY MODAL --}}
              

{{-- START BUNGALOW FLOORSTORE MODAL --}}
<div class="row hide" id="bungalow_floor_store_modal" >
    <span id="project_url" url="bungalow-floor-store" function-name="BungalowFloorStore" modal-index="4"></span>

    <div class="card bg-light">
        {{-- <div class="card-header" style="padding: 2px;"><b>Pantry Details</b></div> --}}
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="form-check-label">Length</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass flor_store_area" id="floor_store_length" name="floor_store_length" placeholder="length" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Width</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass flor_store_area" id="floor_store_width" name="floor_store_width" placeholder="width" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hide">
                <div class="col-md-5">
                    <label class="form-check-label">Floorstore Area</label>
                </div>
                <div class="col-md-7">
                    <div class="input-group mb-1">
                        <input type="text" class="form-control gradiantclass" name="floor_store_area" id="floor_store_area" placeholder="floor store area" readonly>
                        <span class="input-group-text another"></span> 
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="form-check-label">Location</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <select id="store_floor" name="store_floor" class="form-select form-select-sm">
                                    <option selected disabled>Select</option>
                                    <option value="{{MyApp::G_FLOOR}}">G</option>
                                    <option value="{{MyApp::G_1_FLOOR}}">G+1</option>
                                    <option value="{{MyApp::G_2_FLOOR}}">G+2</option>
                                    <option value="{{MyApp::MORE_FLOOR}}">More</option>
                                </select>  
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 store_floor_specific hide">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="floor_store_other_text" id="floor_store_other_text" placeholder="floor store location">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 ml-3">
                            <label class="form-check-label">Bungalow Stair Case</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <select id="stair_case" name="stair_case" class="form-select form-select-sm">
                                    <option selected disabled>Select</option>
                                    <option value="{{MyApp::DOG_LAGGED}}">Dog lagged</option>
                                    <option value="{{MyApp::OPEN_WALL}}">Open wall</option>
                                    <option value="{{MyApp::SPIRAL}}">Spiral</option>
                                    <option value="{{MyApp::U_SHAPED}}">U-shaped</option>
                                    <option value="{{MyApp::L_SHAPED}}">L-shaped</option>
                                    <option value="{{MyApp::CURVED}}">Curved</option>
                                </select>  
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 ml-3">
                            <label class="form-check-label">Upload Stair Image</label>
                        </div>
                        {{-- <div class="col-md-1">
                            <img src="{{asset('public/sdpl-assets/user/images/Form_Img/cloud-upload.png')}}" alt="" width="20" height="20">  
                        </div> --}}
                    
                
                
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="file" class="form-control" id="stair_case_image" name="stair_case_image" aria-describedby="" aria-label="Upload">
                            </div>
                        </div>
                        {{-- <div class="col-md-3">
                            <button type="button" class="btn btn-primary disabled btn-sm">Preview</button>
                        </div> --}}
                    </div>
                </div>
                
            </div>
            <div class="row mt-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10">
                            <img src="{{asset('public/sdpl-assets/images/slider/slide1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('public/sdpl-assets/images/slider/slide2.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('public/sdpl-assets/images/slider/slide3.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    

    <div class="card bg-light">
        <div class="card-header" style="padding: 2px;"><b>Lift Details</b></div>
        <div class="row mt-1">
            <div class="col-md-4">
                <div class="form-check lift_req">
                    <input class="form-check-input" type="radio" name="lift_req" req-body="lift_body" value="{{MyApp::REQ}}" style="border-radius:20%;">
                    <label class="form-check-label">Required</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check lift_req">
                    <input class="form-check-input" type="radio" name="lift_req" req-body="lift_body" value="{{MyApp::NOT_REQ}}" style="border-radius:20%;" checked>
                    <label class="form-check-label">Not Required</label>
                </div>
            </div>
        </div>
    
        <div class="caed-body lift_body hide">
            <div class="row my-1">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                            <label class="form-check-label">Passenger Capecity</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <select id="passanger_capacity" name="passanger_capacity" class="form-select form-select-sm">
                                    <option selected disabled>Select</option>
                                    <option value="{{MyApp::FOUR_PESSENGER}}">4</option>
                                    <option value="{{MyApp::SIX_PESSENGER}}">6</option>
                                    <option value="{{MyApp::EIGHT_PESSENGER}}">8</option>
                                    <option value="{{MyApp::TEN_PESSENGER}}">10</option>
                                    <option value="{{MyApp::MORE}}">More</option>
                                </select>  
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 capecity_passenger hide">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="passenger_capacity_other_text" id="passenger_capacity_other_text" placeholder="passenger capecity">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <label class="form-check-label"><b>Specific Requirements</b></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="lift_special_req" id="lift_special_req"  placeholder="lift requirements">
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>


    <div class="card bg-light">
        <div class="card-header" style="padding: 2px;"><b>Pooja Room Details</b></div>
        <div class="row mt-1">
            <div class="col-md-4">
                <div class="form-check pooja_room_req">
                    <input class="form-check-input" type="radio" name="pooja_room_req" id="pooja_room_req" value="{{MyApp::REQ}}" req-body="pooja_room_body" style="border-radius:20%;">
                    <label class="form-check-label">Required</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check pooja_room_req">
                    <input class="form-check-input" type="radio" name="pooja_room_req" id="pooja_room_req" value="{{MyApp::NOT_REQ}}" req-body="pooja_room_body" style="border-radius:20%;" checked>
                    <label class="form-check-label">Not Required</label>
                </div>
            </div>
        </div>

        <div class="card-body pooja_room_body hide">

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="form-check-label">Location</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <select id="pooja_room_floor" name="pooja_room_floor" class="form-select form-select-sm">
                                    <option selected disabled>Select</option>
                                    <option value="{{MyApp::G_FLOOR}}">G</option>
                                    <option value="{{MyApp::G_1_FLOOR}}">G+1</option>
                                    <option value="{{MyApp::G_2_FLOOR}}">G+2</option>
                                    <option value="{{MyApp::MORE_FLOOR}}">More</option>
                                </select>  
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 hide poojaroom_specific_location">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="pooja_room_other_text" id="pooja_room_other_text" placeholder="location of poojaroom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="form-check-label">Length</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass puja_room_area" id="pooja_room_length" name="pooja_room_length" placeholder="length" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="form-check-label">Width</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass puja_room_area" id="pooja_room_width" name="pooja_room_width" placeholder="width" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hide">
                <div class="col-md-4">
                    <label class="form-check-label">Pooja Area</label>
                </div>
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control gradiantclass" name="pooja_room_area" id="pooja_room_area" placeholder="area of pooja room" required readonly>
                        <span class="input-group-text another"></span> 
                    </div>
                </div>
            </div>
            
            <div class="row mt-1">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="form-check-label">Types</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group">
                                <select id="pooja_room_type" name="pooja_room_type" class="form-select form-select-sm">
                                    <option selected disabled>Select</option>
                                    <option value="{{MyApp::PROPER_ROOM}}">Proper room</option>
                                    <option value="{{MyApp::ONLY_PLACE}}">Only place</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="opening_to_li_ha" name="opening_to_li_ha" value="{{MyApp::ZERO_ONE}}">
                                <label class="form-check-label">Opening towards living hall</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
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
    {{-- <input type="hidden" name="project_id" id="bungalow_floor_store_project_id"> --}}
</div>
{{-- END BUNGALOW FLOORSTORE MODAL --}}
                

{{-- START BUNGALOW BEDROOM MODAL --}}
<div class="row hide" id="bungalow_bedroom_modal">
    <span id="project_url" url="bungalow-bedroom" function-name="BungalowBedroom" modal-index="5"></span>             
    <div class="row mb-3">
        <h5>Bedrooom's</h5>
        @foreach($bedrooms as $bedroom)
            <div class="col-md-6">
                <div class="form-check bedroom_list">
                    <input class="form-check-input bedroom" type="checkbox" name="bedroom[]" value="{{$bedroom->id}}" id="bungalow_bedroom_type_{{$bedroom->id}}" bedroom-type="{{ucwords($bedroom->bedroom_name)}}">
                    <label class="form-check-label">{{ucwords($bedroom->bedroom_name)}}</label>
                </div>
            </div>
        @endforeach 
    </div>
    {{-- <hr class="my-3"> --}}
    <div id="bungalow_bedroom_type_detail"></div>
</div>
{{-- END BUNGALOW BEDROOM MODAL --}}

{{-- START BUNGALOW BEDROOM FORM MODAL --}}
<div class="hide bedroom_modal">
    <div id="bedroom_type_modal">
        <div class="card bg-light">
            {{-- <div class="card-header" style="padding: 2px;"><b></b></div> --}}

        <div class="card-body row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <label class="form-check-label">Length</label>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                            <input type="text" class="form-control bedroom_length gradiantclass bedroom_areaa" id="bedroom_length" name="bedroom_length[]" placeholder="length" required>
                            <span class="input-group-text another"></span> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <label class="form-check-label">Width</label>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                            <input type="text" class="form-control bedroom_width gradiantclass bedroom_areaa" id="bedroom_width" name="bedroom_width[]" placeholder="width" required>
                            <span class="input-group-text another"></span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row hide">
            <div class="col-md-4">
                <label class="form-check-label">Room Area</label>
            </div>
            <div class="col-md-8">
                <div class="input-group">
                    <input type="text" class="form-control bedroom_area gradiantclass" id="bedroom_area" name="bedroom_area[]" placeholder="bed room area" required readonly>
                    <span class="input-group-text another"></span> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <label class="form-check-label">Location</label>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                            <select class="form-select form-select-sm bedroom_floor_req bedroom_floor" name="bedroom_floor[]" id="bedroom_floor">
                                <option selected disabled>Select</option>
                                <option value="{{MyApp::G_FLOOR}}">G</option>
                                <option value="{{MyApp::G_1_FLOOR}}">G+1</option>
                                <option value="{{MyApp::G_2_FLOOR}}">G+2</option>
                                <option value="{{MyApp::MORE_FLOOR}}">More</option> 
                            </select>  
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-6 bed_loc_firstgroundtext">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="input-group">
                            <input type="text" class="form-control gradiantclass" name="" placeholder="Bed room floor location">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3">
                <label class="form-check-label">NOS</label>
            </div>
            <div class="col-md-9">
                <div class="input-group">
                    <select class="form-select form-select-sm bedroom_nos_req bedroom_nos" name="bedroom_nos[]" id="bedroom_nos">
                        <option selected disabled>Select floor</option>
                        <option value="{{MyApp::G_FLOOR}}">G</option>
                        <option value="{{MyApp::G_1_FLOOR}}">G+1</option>
                        <option value="{{MyApp::G_2_FLOOR}}">G+2</option>
                        <option value="{{MyApp::MORE_FLOOR}}">More</option>
                    </select>  
                </div> 
                <div class="input-group hide mb-1">
                    <input type="text" class="form-control gradiantclass" placeholder="nos specific requirement">
                </div>    
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label class="form-check-label">Length</label>
                <div class="input-group">
                    <input type="text" class="form-control bedroom_toilet_length gradiantclass bedroom_toilet_areaa" id="bedroom_toilet_length" name="bedroom_toilet_length[]" placeholder="length" required>
                    <span class="input-group-text another"></span> 
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-check-label">Width</label>
                <div class="input-group">
                    <input type="text" class="form-control bedroom_toilet_width gradiantclass bedroom_toilet_areaa" id="bedroom_toilet_width" name="bedroom_toilet_width[]" placeholder="width" required>
                    <span class="input-group-text another"></span> 
                </div>
            </div>
        </div>
        
        <div class="row mt-1 mb-1">
            <div class="col-md-5">
                <label class="form-check-label">Toilet Area</label>
            </div>
            <div class="col-md-7">
                <div class="input-group">
                    <input type="text" class="form-control bedroom_toilet_area gradiantclass" id="bedroom_toilet_area" name="bedroom_toilet_area[]"  placeholder="toilet area" required readonly>
                    <span class="input-group-text another"></span> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <label class="form-check-label">Toilet Facility</label>
            </div>
            <div class="col-md-7">
                <div class="input-group">
                    <select class="form-select form-select-sm bedroom_toilet_req bedroom_toilet_facility" name="bedroom_toilet_facility[]" id="bedroom_toilet_facility">
                        <option selected disabled>Select toilet facility</option>
                        <option value="shower encloser">Shower encloser</option> 
                        <option value="jacuzzi bathtubs">Jacuzzi Bathtubs</option> 
                        <option value="both">Both</option> 
                        <option value="{{MyApp::OTHER_FLOOR}}">other</option> 
                    </select>  
                </div> 
                <div class="input-group mb-1">
                    <input type="text" class="form-control bedroom_toilet_req_text gradiantclass" id="bedroom_toilet_req_text" name="bedroom_toilet_req_text[]" placeholder="toilet facility">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label class="form-check-label">Length</label>
                <div class="input-group">
                    <input type="text" class="form-control bedroom_dress_length gradiantclass bedroom_dress_areaa" id="bedroom_dress_length"  name="bedroom_dress_length[]" placeholder="length" required>
                    <span class="input-group-text another"></span> 
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-check-label">Width</label>
                <div class="input-group">
                    <input type="text" class="form-control bedroom_dress_width gradiantclass bedroom_dress_areaa" id="bedroom_dress_width"  name="bedroom_dress_width[]" placeholder="width" required>
                    <span class="input-group-text another"></span> 
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-5">
                <label class="form-check-label">Dress Area</label>
            </div>
            <div class="col-md-7">
                <div class="input-group mb-1">
                    <input type="text" class="form-control bedroom_dress_area gradiantclass" id="bedroom_dress_area" name="bedroom_dress_area[]" placeholder="dress area" readonly>
                    <span class="input-group-text another"></span> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <label class="form-check-label">Dress Facility</label>
            </div>
            <div class="col-md-7">
                <div class="form-check bed_dress_facility">
                    <input class="form-check-input " type="checkbox" name="bedroom_dress_facility[]" value="{{MyApp::WALK_IN_CUPBOARD}}">
                    <label class="form-check-label">Walk-in cupboard</label>
                </div>
                <div class="form-check bed_dress_facility">
                    <input class="form-check-input " type="checkbox" name="bedroom_dress_facility[]" value="{{MyApp::VANITY}}">
                    <label class="form-check-label">Vanity</label>
                </div>
                <div class="form-check bed_dress_facility">
                    <input class="form-check-input " type="checkbox" name="bedroom_dress_facility[]" value="{{MyApp::CUPBOARD}}">
                    <label class="form-check-label">Cupboard</label>
                </div>
                <div class="input-group mb-1">
                    <input type="text" class="form-control bedroom_dress_req_text gradiantclass" id="bedroom_dress_req_text" name="bedroom_dress_req_text[]" placeholder="More facilities">
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
                <div class="form-check bedroom_facility">
                    <input class="form-check-input" type="checkbox" name="bedroom_facility[]" value="{{MyApp::CHAIR_ARRANGEMENT}}">
                    <label class="form-check-label">Chair Arrangement</label>
                </div>
                <div class="form-check bedroom_facility">
                    <input class="form-check-input" type="checkbox" name="bedroom_facility[]" value="{{MyApp::SOFA_ARRANGEMENT}}">
                    <label class="form-check-label">Sofa Arrangement</label>
                </div>
                <div class="form-check bedroom_facility">
                    <input class="form-check-input" type="checkbox" name="bedroom_facility[]" value="{{MyApp::WRITING_LAPTOP_TABLE}}">
                    <label class="form-check-label">Writing laptop table</label>
                </div>
                <div class="form-check bedroom_facility">
                    <input class="form-check-input" type="checkbox" name="bedroom_facility[]" value="{{MyApp::TV}}">
                    <label class="form-check-label">TV</label>
                </div>
                <div class="form-check bedroom_facility">
                    <input class="form-check-input" type="checkbox" name="bedroom_facility[]" value="{{MyApp::MINI_BAAR}}">
                    <label class="form-check-label">Mini Baar</label>
                </div>
                <div class="input-group mb-1">
                    <input type="text" class="form-control bedroom_facility_req_text gradiantclass" id="bedroom_facility_req_text" name="bedroom_facility_req_text[]" placeholder="More facilities">
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
</div>
{{-- END BUNGALOW BEDROOM FORM MODAL --}}


{{-- START BUNGALOW BASEMENT MODAL --}}
<div class="row hide" id="bungalow_basement_modal" >
    <span id="project_url" url="bungalow-basement" function-name="BungalowBasement" modal-index="6"></span> 
    
    <div class="row">
        <div class="col-md-3">
            <label class="form-check-label">Base Area</label>
        </div>
        <div class="col-md-3 ml-3">
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
        <div class="col-md-3">
            <label class="form-check-label">Basement</label>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <select id="basement" name="basement" class="form-select form-select-sm">
                    <option selected disabled>Select</option>
                    <option value="{{MyApp::PARKING}}">for Parking</option> 
                    <option value="{{MyApp::AMENITIES}}">for Amenities</option>
                </select>  
            </div> 
        </div>
    </div>  
    <div class="row my-1">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-3 ml-1">
                    <label class="form-check-label">Length</label>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="text" class="form-control gradiantclass basement_areaa" id="basement_length" name="basement_length" placeholder="length" required>
                        <span class="input-group-text another"></span> 
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-check-label">Width</label>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                        <input type="text" class="form-control gradiantclass basement_areaa" id="basement_width" name="basement_width" placeholder="width" required>
                        <span class="input-group-text another"></span> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row hide">
        <div class="col-md-5">
            <label class="form-check-label">Basement Area</label>
        </div>
        <div class="col-md-7">
            <div class="input-group">
                <input type="text" class="form-control gradiantclass"  id="basement_area" name="basement_area"  placeholder="basement area" required readonly>
                <span class="input-group-text another"></span> 
            </div>
        </div>
    </div>
    <hr class="my-1">

    <div class="row mt-2">
        <label class="form-check-label form-label-check-sm">Amenities</label>
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
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4">
                                    <label class="form-check-label">Location</label>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <select id="office_location" name="office_location" class="form-select form-select-sm bedroom_floor_req">
                                            <option selected disabled>Select</option>
                                            <option value="{{MyApp::BASEMENT}}">Basement</option> 
                                            <option value="{{MyApp::STILT}}">Stilt</option>
                                            <option value="{{MyApp::GROUND_OTHER_THAN_STILT_AREA}}">Ground other than stilt area</option> 
                                        </select>  
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4">
                                    <label class="form-check-label">Length</label>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control gradiantclass office_areaa" id="office_length" name="office_length" placeholder="length" required>
                                        <span class="input-group-text another"></span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <label class="form-check-label">Width</label>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control gradiantclass office_areaa" id="office_width" name="office_width" placeholder="width" required>
                                        <span class="input-group-text another"></span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row hide">
                        <div class="col-4">
                            <label class="form-check-label">Office Area</label>
                        </div>
                        <div class="col-8">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="office_area" id="office_area" placeholder="enter area" readonly>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div> 
                    </div>
                    
                    <div class="row mt-1">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <label class="form-check-label">Facilities</label>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input office_facility" type="checkbox" name="office_facility[]" value="pantry">
                                        <label class="form-check-label">Pantry</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input office_facility" type="checkbox" name="office_facility[]" value="toilet">
                                        <label class="form-check-label">Toilet</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input office_facility" type="checkbox" name="office_facility[]" value="staf toilet">
                                        <label class="form-check-label">Staff toilet</label>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <label class="form-check-label"><b>Specific Requirements</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="input-group">
                                        <input type="text" class="form-control gradiantclass" name="office_specific_area" id="office_specific_area" placeholder="other requirement">
                                    </div>
                                </div>
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
                                <input type="text" class="form-control gradiantclass servent_quarter_areaa" id="servent_quarter_length" name="servent_quarter_length" placeholder="length" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-check-label">Width</label>
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass servent_quarter_areaa" id="servent_quarter_width" name="servent_quarter_width" placeholder="width" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-7">
                            <label class="form-check-label">Servent Quarter Area</label>
                        </div>
                        <div class="col-5">
                            <div class="input-group mb-1">
                                <input type="text" class="form-control gradiantclass" name="servent_quarter_area" id="servent_quarter_area" placeholder="enter area" readonly>
                                <span class="input-group-text another"></span> 
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
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-check-label">Facilities</label>
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
                                <input type="text" class="form-control gradiantclass" name="servent_quarter_facility_area" id="servent_quarter_facility_area" placeholder="other facilities">
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
                                <input type="text" class="form-control gradiantclass parking_garage_areaa" id="parking_garage_length" name="parking_garage_length" placeholder="length" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-check-label">Width</label>
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass parking_garage_areaa" id="parking_garage_width" name="parking_garage_width" placeholder="width" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1 mb-1">
                        <div class="col-7">
                            <label class="form-check-label">Parking garage area</label>
                        </div>
                        <div class="col-5">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="parking_garage_area" id="parking_garage_area" placeholder="enter area" readonly>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div> 
                    </div>
                    <div class="row mb-1">
                        <div class="col-7">
                            <label class="form-check-label">For how many cars</label>
                        </div>
                        <div class="col-5">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="no_of_cars" id="no_of_cars" placeholder="cars quantity">
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
                        <div class="col-6">
                            <label class="form-check-label">Seperate Shade</label>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="saperate_shade" id="saperate_shade" placeholder="seperate shade">
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
                                <input type="text" class="form-control gradiantclass home_theater_areaa" id="home_theater_length" name="home_theater_length" placeholder="length" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-check-label">Width</label>
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass home_theater_areaa" id="home_theater_width" name="home_theater_width" placeholder="width" required>
                                <span class="input-group-text another"></span> 
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1 mb-1">
                        <div class="col-6">
                            <label class="form-check-label">Home theater Area</label>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="home_theater_area" id="home_theater_area" placeholder="enter area" readonly>
                                <span class="input-group-text another"></span> 
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
                                    <option value="{{MyApp::G_FLOOR}}">G</option>
                                    <option value="{{MyApp::G_1_FLOOR}}">G+1</option>
                                    <option value="{{MyApp::G_2_FLOOR}}">G+2</option>
                                    <option value="{{MyApp::MORE_FLOOR}}">More</option> 
                                </select>  
                            </div> 
                        </div>
                        <div class="col-5 hide home_theater_other">
                            <div class="input-group">
                                <input type="text" class="form-control gradiantclass" name="" id="" placeholder="other floor">
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
                                <input type="text" class="form-control gradiantclass" name="" id="" placeholder="other seats">
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

    <div class="card">
        <div class="card-header">
            <strong>Total Built-Up Area</strong>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                  <div class="row">
                      <div class="col-md-6">Plot area</div>
                    <div class="offset-md-2 col-md-4"><span id="builtup_plot_area"></span></div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6">Floors</div>
                    <div class="offset-md-2 col-md-4"><span id="builtup_floor"></span></div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6">Security kiosq</div>
                    <div class="offset-md-2 col-md-4"><span id="builtup_security_kiosq"></span></div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6">Wall thickness</div>
                    <div class="offset-md-2 col-md-4"><span id="builtup_wall_thickness"></span></div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6">Total built-up area</div>
                    <div class="offset-md-2 col-md-4"><span id="builtup_total_area"></span></div>
                </div>
            </li>
        </ul>
    </div>
    
    <div class="card-body gradiantclass my-4">
        <div class="row">
            <div class="offset-md-3 col-md-3"><h5>Total Price <span> &#61;</span></h5></div>
            <div class="col-md-6">
                <h5><span id="total_builtup_area"></span></h5>
            </div>
        </div>
    </div>
    
     


    <div class="row">
        @foreach ($design_type as $key => $item) 
            <div class="col-md-12">
                <div class=" ">
                    <div class="form-check design_checkbox gradiantclass">
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
       
{{-- PAYMENT --}}
{{-- <div class="row hide" id="payment_modal" >
    <span id="project_url" url="" function-name="Payment" modal-index="8"></span>
    
    <h1>PAYMENT</h1>
</div> --}}


  


     

