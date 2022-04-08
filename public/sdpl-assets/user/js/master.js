
//CREATE PROJECTS
function getProjectType(project_group_id){
    fetch(`get-project-type/${project_group_id}`)
    .then(response => response.json())
    .then(response => {
        if(response.status == 200){
            $('#project_type_id').html("");
            $('#project_type_id').html(response.html);
        }
    });   
}

//GET STATE
function getState(country_id) {
    fetch(`get-state/${country_id}`)
    .then(response => response.json())
    .then(response => {
        $('#state').html("");
        $('#city').html("");
        $('#state').append(response.html);
    });
}	

//GET CITY
function getCity(state_id) {
    fetch(`get-city/${state_id}`)
    .then(response => response.json())
    .then(response => {
        $('#city').html("");
        $('#city').append(response.html);
    });
}

//SAVE PROJECTS
function saveProject(url){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = new FormData($("#createProjectForm")[0]);
    $.ajax({
        type: "post",
        url: url,
        data: formData,
        dataType: "json",
        cache: false,
        contentType: false, 
        processData: false, 
        success: function (response) {
            //console.log(response);
            if(response.status === 400)
            {
                $('#errors').html('');
                $('#errors').addClass('alert alert-danger');
                var count = 1;
                $.each(response.errors, function (key, err_value) { 
                    $('#errors').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                });

            }else{
                $('#errors').html('');
                $('#project_id').val(response.project_id);
                nextModal();
               
            }
        }
    });
}

//EDIT PROJECTS
function editProject(url) {
    fetch(url)
    .then(response => response.json())
    .then(response => {
        console.log(response);
        if(response.status == 200){ 
            
            //project details
            $('#project_module').html("");
            $('#project_module').html($('#project_modal').html());
            $('#createProjectModal').modal('show');
            $('#errors').html('');
            $('#errors').removeClass('alert alert-danger');
            $('#createProjectForm').trigger( "reset" );
            //$('#saveModalBtn').removeClass('hide');
            $('#saveModalBtn').addClass('hide');
            $('#updateModalBtn').removeClass('hide');

           

            //project ids
            $('#project_group_id').val(response.project.project_group_id);
            // alert('edit' +project_group_id);
            $('#project_type_id').html("");
            $('#project_type_id').append("<option selected disabled>Choose...</option>");
            $.each(response.project_type, function (key, value) { 
                $('#project_type_id').append("<option value='"+value.id+"'>"+value.project_type+"</option>").css("text-transform","capitalize");
            });
            $('#project_type_id').val(response.project.project_type_id);

            //user details
            $('#prefix').val(response.project.prefix);
            $('#first_name').val(response.project.first_name);
            $('#last_name').val(response.project.last_name);
            $('#phone').val(response.project.phone);
            $('#email').val(response.project.email);
            $('#country').val(response.project.country);
            $('#state').html("");
            $('#state').append("<option selected disabled>Choose...</option>");
            $.each(response.states, function (key, state) { 
                $('#state').append("<option value='"+state.id+"'>"+state.state_name+"</option>").css("text-transform","capitalize");
            });
            $('#state').val(response.project.state);
            $('#city').html("");
            $('#city').append("<option selected disabled>Choose...</option>");
            $.each(response.cities, function (key, city) { 
                $('#city').append("<option value='"+city.id+"'>"+city.city_name+"</option>").css("text-transform","capitalize");
            });
            $('#city').val(response.project.city);
            $('#address').val(response.project.address);

            // var design_type = response.project.design_type.split(',');
            // $('.show_design').css('display','none');
            // $.each(design_type, function (key, design_type_id) { 
            //     $('#design_type_'+design_type_id).prop('checked',true);
            //     $('#show_design_'+design_type_id).show();
            // });
            
            // $.each(response.designs, function (indexInArray, design) { 
            //     var design_id = design.design_id.split(',');
            //     $.each(design_id, function (indexInArray, value) { 
            //         $('#design_id_'+value).prop('checked',true);
            //     });
            // });

            //project property
            var dimension = response.project.dimension;
            $('#dimension').val(dimension);
            $('#dimention').val(dimension);
            plotAreaDimention(dimension);
            
            
            $("input:radio[name='plot_type'][value='"+response.project.plot_type+"']").prop("checked", true);
            $('#plot_length').val(response.project.plot_length_feet);
            // $('#plot_length').attr('unit-value',response.project.plot_length_feet);
            $('#plot_width').val(response.project.plot_width_feet);
            // $('#plot_width').attr('unit-value',response.project.plot_width_feet);
            $('#diagonal_1').val(response.project.diagonal_1_feet);
            // $('#diagonal_1').attr('unit-value',response.project.diagonal_1_feet);
            $('#diagonal_2').val(response.project.diagonal_2_feet);
            // $('#diagonal_2').attr('unit-value',response.project.diagonal_2_feet);
            $('#plot_size').val(response.project.plot_size_feet);
            
            $("input:radio[name='apmt'][value='"+response.project.apmt+"']").prop("checked", true);

            $("input:radio[name='east_property'][value='"+response.project.east_property+"']").prop("checked", true);
            $('#east_road_width').val(response.project.east_road_width_feet); 
            eastProperty(response.project.east_property);          
            // $('#east_road_width').attr('unit-value',response.project.east_road_width_feet);
            $("input:radio[name='west_property'][value='"+response.project.west_property+"']").prop("checked", true);
            $('#west_road_width').val(response.project.west_road_width_feet);
            westProperty(response.project.west_property);
            // $('#west_road_width').attr('unit-value',response.project.west_road_width_feet);
            $("input:radio[name='north_property'][value='"+response.project.north_property+"']").prop("checked", true);
            $('#north_road_width').val(response.project.north_road_width_feet);
            northProperty(response.project.north_property);
            // $('#north_road_width').attr('unit-value',response.project.north_road_width_feet);
            $("input:radio[name='south_property'][value='"+response.project.south_property+"']").prop("checked", true);
            $('#south_road_width').val(response.project.south_road_width_feet);
            southProperty(response.project.south_property);
            // $('#south_road_width').attr('unit-value',response.project.south_road_width_feet);
            if(response.project.plot_orientation > 0){
                $('#plot_orientation').prop("checked", true);
            }
            $('#level').val(response.project.level);
            $('#level_value').val(response.project.level_value_feet);
            // $('#level_value').attr('unit-value',response.project.level_value_feet);
            levelProject(response.project.level_value);

           
            $('#updateModalBtn').val(response.project.id);
            $('#project_id').val(response.project.id);
            // $('#dimension').val(response.project.dimension);
            $('#updateModalBtn').attr('url',"update-project");
        }
    });
}


//EDIT BUNGALOW FUNCTION
function editBungalow(url, function_name) {
    eval("edit"+function_name+"(url)");
}

// EDIT BUNGALOW ENTRANCE
function editBungalowEntrance(url) {
    fetch(url)
    .then(response => response.json())
    .then(response => {
        console.log(response);
        if(response.status == 200){ 
           
            //floor
            $('#floor').val(response.bungalow_entrance.floor);
            
            //vastu
            $("input:radio[name='vastu'][value='"+response.bungalow_entrance.vastu+"']").prop("checked", true);

            //entrance
            $("input:radio[name='entrance_gate'][value='"+response.bungalow_entrance.entrance_gate+"']").prop("checked", true);
            $('#one_gate').val(response.bungalow_entrance.one_gate);
            $("input:radio[name='two_gate'][value='"+response.bungalow_entrance.two_gate+"']").prop("checked", true);
            $('#main_car_gate').val(response.bungalow_entrance.main_car_gate);
            $('#side_padestrian_gate').val(response.bungalow_entrance.side_padestrian_gate);
            $('#different_customized_location').val(response.bungalow_entrance.different_customized_location);

            //security kiosq
            $("input:radio[name='security_kiosq_req'][value='"+response.bungalow_entrance.security_kiosq_req+"']").prop("checked", true);
            if(response.bungalow_entrance.security_kiosq_req > 0){
                $(".security_kiosq_body").removeClass('hide');
            }
            $('#security_kiosq_length').val(response.bungalow_entrance.security_kiosq_length_feet);
            $('#security_kiosq_width').val(response.bungalow_entrance.security_kiosq_width_feet);
            $('#security_kiosq_area').val(response.bungalow_entrance.security_kiosq_area_feet);
            $("input:radio[name='security_kiosq'][value='"+response.bungalow_entrance.security_kiosq+"']").prop("checked", true);

            //porch
            $("input:radio[name='porch_req'][value='"+response.bungalow_entrance.porch_req+"']").prop("checked", true);
            if(response.bungalow_entrance.porch_req > 0){
                $(".porch_body").removeClass('hide');
            }
            $('#porch_length').val(response.bungalow_entrance.porch_length_feet);
            $('#porch_width').val(response.bungalow_entrance.porch_width_feet);
            $('#porch_area').val(response.bungalow_entrance.porch_area_feet);
            $("input:radio[name='porch'][value='"+response.bungalow_entrance.porch+"']").prop("checked", true);
            $('#visual_nature').val(response.bungalow_entrance.visual_nature);
            $('#car_parking_space').val(response.bungalow_entrance.car_parking_space);

            //foyer
            $("input:radio[name='foyer_req'][value='"+response.bungalow_entrance.foyer_req+"']").prop("checked", true);
            if(response.bungalow_entrance.foyer_req > 0){
                $(".foyer_body").removeClass('hide');
            }
            $('#foyer_length').val(response.bungalow_entrance.foyer_length_feet);
            $('#foyer_width').val(response.bungalow_entrance.foyer_width_feet);
            $('#foyer_area').val(response.bungalow_entrance.foyer_area_feet);
            $('#foyer_lobby').val(response.bungalow_entrance.foyer_lobby);

            //varandah
            //required not required
            // var verandah_required = $('.verandah_required').val();
            $("input:radio[name='verandah_req'][value='"+response.bungalow_entrance.verandah_req+"']").prop("checked", true);
            if(response.bungalow_entrance.verandah_req > 0){
                $(".verandah_body").removeClass('hide');
            }
            $('#verandah_length').val(response.bungalow_entrance.verandah_length_feet);
            $('#verandah_width').val(response.bungalow_entrance.verandah_width_feet);
            $('#verandah_area').val(response.bungalow_entrance.verandah_area_feet);
            $("input:radio[name='verandah'][value='"+response.bungalow_entrance.verandah+"']").prop("checked", true);
            
            
            // $('#project_id').val(response.bungalow_entrance.project_id);
            $('#updateModalBtn').attr('url',"update-bungalow-entrance");
            
        }else{
            $('#saveModalBtn').removeClass('hide');
            $('#updateModalBtn').addClass('hide');
        }
    });
}

//EDIT BUNGALOW DRAWING HALL
function editBungalowDrawingHall(url) {
    fetch(url)
    .then(response => response.json())
    .then(response => {
        console.log(response);
        if(response.status == 200){

            //living hall
            // var living_hall_required = $('.living_hall_required').val();
            // $("input:radio[name='living_hall_required'][value= '"+ 1 +"']").prop("checked", true);
            // $("input:radio[name='living_hall_req'][value='"+response.bungalow_drawing_hall.living_hall_req+"']").prop("checked", true);


            $('#living_hall_length').val(response.bungalow_drawing_hall.living_hall_length);
            $('#living_hall_width').val(response.bungalow_drawing_hall.living_hall_width);
            $('#living_hall_area').val(response.bungalow_drawing_hall.living_hall_area);
            var living_hall = response.bungalow_drawing_hall.living_hall.split(',');
            $.each(living_hall, function (indexInArray, value) { 
                if($('input[value="'+value+'"]').val() == value){
                    $('input[value="'+value+'"]').prop('checked',true);
                }
            });
            $('#living_hall_text').val(response.bungalow_drawing_hall.living_hall_text);

            //drawing hall
            // var drawing_hall_required = $('.drawing_hall_required').val();
            // $("input:radio[name='drawing_hall_required'][value= '"+ 1 +"']").prop("checked", true);
            // $("input:radio[name='drawing_hall_req'][value='"+response.bungalow_drawing_hall.drawing_hall_req+"']").prop("checked", true);


            $('#drawing_hall_length').val(response.bungalow_drawing_hall.drawing_hall_length);
            $('#drawing_hall_width').val(response.bungalow_drawing_hall.drawing_hall_width);
            $('#drawing_hall_area').val(response.bungalow_drawing_hall.drawing_hall_area);
            if(response.bungalow_drawing_hall.drawing_hall > 0){
                $('#drawing_hall').prop("checked", true);
            }
            $('#drawing_hall_text').val(response.bungalow_drawing_hall.drawing_hall_text);

            //kitchen
            $('#kitchen_length').val(response.bungalow_drawing_hall.kitchen_length);
            $('#kitchen_width').val(response.bungalow_drawing_hall.kitchen_width);
            $('#kitchen_area').val(response.bungalow_drawing_hall.kitchen_area);
            $('#kitchen_floor').val(response.bungalow_drawing_hall.kitchen_floor);
            $('#kitchen_dining_function').val(response.bungalow_drawing_hall.kitchen_dining_function);
            $('#refrigerator_size').val(response.bungalow_drawing_hall.refrigerator_size);
    
            var kitchen_features = response.bungalow_drawing_hall.kitchen_features.split(',');
            $.each(kitchen_features, function (indexInArray, value) { 
                if($('input[value="'+value+'"]').val() == value){
                    $('input[value="'+value+'"]').prop('checked',true);
                }
            });

            // attached area 
            $('#attach_store_length').val(response.bungalow_drawing_hall.attach_store_length);
            $('#attach_store_width').val(response.bungalow_drawing_hall.attach_store_width);
            $('#attach_store_area').val(response.bungalow_drawing_hall.attach_store_area);

            // utility wash
            $('#utility_wash_length').val(response.bungalow_drawing_hall.utility_wash_length);
            $('#utility_wash_width').val(response.bungalow_drawing_hall.utility_wash_width);
            $('#utility_wash_area').val(response.bungalow_drawing_hall.utility_wash_area);

            // wash area
            $('#wash_area_length').val(response.bungalow_drawing_hall.wash_area_length);
            $('#wash_area_width').val(response.bungalow_drawing_hall.wash_area_width);
            $('#wash_area').val(response.bungalow_drawing_hall.wash_area);

            //specific requirement
            $('#specific_req').val(response.bungalow_drawing_hall.specific_req);
            
            
            // $('#project_id').val(response.bungalow_drawing_hall.project_id);
            $('#updateModalBtn').attr('url',"update-bungalow-drawing-hall");
            
        }else{
            $('#saveModalBtn').removeClass('hide');
            $('#updateModalBtn').addClass('hide');
        }
    });
}

//EDIT BUNGALOW PANTRY
function editBungalowPantry(url) {
    fetch(url)
    .then(response => response.json())
    .then(response => {
        console.log(response);
        if(response.status == 200){
            
            //pantry
            $('#pantry_length').val(response.bungalow_pantry.pantry_length);
            $('#pantry_width').val(response.bungalow_pantry.pantry_width);
            $('#pantry_area').val(response.bungalow_pantry.pantry_area);
            $('#pantry_floor').val(response.bungalow_pantry.pantry_floor);
            $('#specific_req').val(response.bungalow_pantry.specific_req);

            //dinning
            $('#dining_length').val(response.bungalow_pantry.dining_length);
            $('#dining_width').val(response.bungalow_pantry.dining_width);
            $('#dining_area').val(response.bungalow_pantry.dining_area);
            $('#dining_floor').val(response.bungalow_pantry.dining_floor);
            $('#dining_seat').val(response.bungalow_pantry.dining_seat);

            var dining_features = response.bungalow_pantry.dining_features.split(',');
            $.each(dining_features, function (indexInArray, value) { 
                if($('input[value="'+value+'"]').val() == value){
                    $('input[value="'+value+'"]').prop('checked',true);
                }
            });
            $('#dining_text').val(response.bungalow_pantry.dining_text);


            // $('#project_id').val(response.bungalow_pantry.project_id);
            $('#updateModalBtn').attr('url',"update-bungalow-pantry");
        }
    });
}

//EDIT BUNGALOW FLOORESTORE
function editBungalowFloorStore(url) {
    fetch(url)
    .then(response => response.json())
    .then(response => {
        console.log(response);
        if(response.status == 200){
        
            //floor store
            $('#floor_store_length').val(response.bungalow_floor_store.floor_store_length);
            $('#floor_store_width').val(response.bungalow_floor_store.floor_store_width);
            $('#floor_store_area').val(response.bungalow_floor_store.floor_store_area);
            $('#store_floor').val(response.bungalow_floor_store.store_floor);
            $('#stair_case').val(response.bungalow_floor_store.stair_case);
            $('#stair_case_image').val(response.bungalow_floor_store.stair_case_image);

            //lift
            // $('#lift_length').val(response.bungalow_floor_store.lift_length);
            // $('#lift_width').val(response.bungalow_floor_store.lift_width);
            // $('#lift_area').val(response.bungalow_floor_store.floor_store_area);
            $("input:radio[name='lift_req'][value='"+response.bungalow_floor_store.lift_req+"']").prop("checked", true);
            $('#passanger_capacity').val(response.bungalow_floor_store.passanger_capacity);
            $('#lift_special_req').val(response.bungalow_floor_store.lift_special_req);

            //pooja room
            var pooja_room_required = $('.pooja_room_required').val();
            $("input:radio[name='pooja_room_required'][value= '"+ 1 +"']").prop("checked", true);

            $('#pooja_room_length').val(response.bungalow_floor_store.pooja_room_length);
            $('#pooja_room_width').val(response.bungalow_floor_store.pooja_room_width);
            $('#pooja_room_area').val(response.bungalow_floor_store.pooja_room_area);
            $('#pooja_room_floor').val(response.bungalow_floor_store.pooja_room_floor);
            $('#pooja_room_type').val(response.bungalow_floor_store.pooja_room_type);
            
            if(response.bungalow_floor_store.opening_to_li_ha > 0){
                $('#opening_to_li_ha').prop("checked", true);
            }
            
            $('#project_id').val(response.bungalow_floor_store.project_id);
            $('#updateModalBtn').attr('url',"update-bungalow-floor-store");
        }
    });
}

//EDIT BUNGALOW BEDROOM
function editBungalowBedroom(url) {
    fetch(url)
    .then(response => response.json())
    .then(response => {
        console.log(response);
        if(response.status == 200){
            
            var bedroom = response.bungalow_bedroom;
            console.log(bedroom);
            $.each(bedroom, function (indexInArray, list) { 
                if($('.bedroom_list input[value="'+list.bedroom+'"]').val() == list.bedroom){   
                    if ($('#bungalow_bedroom_type_'+list.bedroom).prop('checked',true)) {
                        $('#bungalow_bedroom_type_detail').append($('.bedroom_modal').html()); 
                        $('#bungalow_bedroom_type_detail').find('#bedroom_type_modal').attr('id','bedroom_type_modal_'+list.bedroom);
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_length').attr('length-index','length_index_'+indexInArray).val(list.bedroom_length);
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_width').attr('width-index','width_index_'+indexInArray).val(list.bedroom_width);
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_area').attr('area-index','area_index_'+indexInArray).val(list.bedroom_area);
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_floor').attr('bedroom-floor-index','bedroom_floor_index_'+indexInArray).val(list.bedroom_floor);
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_nos').attr('bedroom-nos-index','bedroom_nos_index_'+indexInArray).val(list.bedroom_nos);

                        //bedroom toilet
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_toilet_length').attr('toilet-length-index','toilet_length_index_'+indexInArray).val(list.bedroom_toilet_length);
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_toilet_width').attr('toilet-width-index','toilet_width_index_'+indexInArray).val(list.bedroom_toilet_width);
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_toilet_area').attr('toilet-area-index','toilet_area_index_'+indexInArray).val(list.bedroom_toilet_area);
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_toilet_facility').attr('toilet-facility-index','toilet_facility_index_'+indexInArray).val(list.bedroom_toilet_facility);
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_toilet_req_text').attr('toilet-reqtext-index','toilet_reqtext_index_'+indexInArray).val(list.bedroom_toilet_req_text);

                        //bedroom dress
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_dress_length').attr('dress-length-index','dress_length_index_'+indexInArray).val(list.bedroom_dress_length);
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_dress_width').attr('dress-width-index','dress_width_index_'+indexInArray).val(list.bedroom_dress_width);
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_dress_area').attr('dress-area-index','dress_area_index_'+indexInArray).val(list.bedroom_dress_area);
                    
                        //checkboxes
                        var bedroom_dress_facility = list.bedroom_dress_facility.split(',');
                        $.each(bedroom_dress_facility, function (indexInArray, list_1) {
                            if($('.bed_dress_facility input[value="'+list_1+'"]').val() == list_1){
                                $('.bed_dress_facility input[value="'+list_1+'"]').prop('checked',true);
                            }
                        });
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_dress_req_text').attr('dress-reqtext-index','dress_reqtext_index_'+indexInArray).val(list.bedroom_dress_req_text);
                        
                        //room facility checkboxes
                        var bedroom_facility = list.bedroom_facility.split(',');
                        $.each(bedroom_facility, function (indexInArray, list_2) {
                            if($('.bedroom_facility input[value="'+list_2+'"]').val() == list_2){
                                $('.bedroom_facility input[value="'+list_2+'"]').prop('checked',true);
                            }
                        });
                        $('#bedroom_type_modal_'+list.bedroom).find('.bedroom_facility_req_text').attr('bedroom-facilityreqtext-index','bedroom_facilityreqtext_index_'+indexInArray).val(list.bedroom_facility_req_text);
                    }   
                }
            });

            // $('#project_id').val(response.bungalow_bedroom.project_id);
            $('#updateModalBtn').attr('url',"update-bungalow-bedroom");
        }
    });
}

//EDIT BUNGALOW BASEMENT
function editBungalowBasement(url) {
    fetch(url)
    .then(response => response.json())
    .then(response => {
        console.log(response);
        if(response.status == 200){
           
            //basement
            $("input:radio[name='basement_type'][value='"+response.bungalow_basement.basement_type+"']").prop("checked", true);
            $('#basement').val(response.bungalow_basement.basement);
            $('#basement_length').val(response.bungalow_basement.basement_length);
            $('#basement_width').val(response.bungalow_basement.basement_width);
            $('#basement_area').val(response.bungalow_basement.basement_area);

            //amenities
            var amenities = response.bungalow_basement.amenities.split(',');
            $.each(amenities, function (indexInArray, value) { 
                if($('input[value="'+value+'"]').val() == value){
                    $('input[value="'+value+'"]').prop('checked',true);
                }
            });
            
            //office
            $('#office_length').val(response.bungalow_basement.office_length);
            $('#office_width').val(response.bungalow_basement.office_width);
            $('#office_area').val(response.bungalow_basement.office_area);
            $('#office_location').val(response.bungalow_basement.office_location);

            var office_facility = response.bungalow_basement.office_facility.split(',');
            $.each(office_facility, function (indexInArray, value) { 
                if($('input[value="'+value+'"]').val() == value){
                    $('input[value="'+value+'"]').prop('checked',true);
                }
            });

            //servent quarter
            $('#servent_quarter_length').val(response.bungalow_basement.servent_quarter_length);
            $('#servent_quarter_width').val(response.bungalow_basement.servent_quarter_width);
            $('#servent_quarter_area').val(response.bungalow_basement.servent_quarter_area);
            $('#servent_quarter_location').val(response.bungalow_basement.servent_quarter_location);
            if(response.bungalow_basement.servent_quarter_facility > 0){
                $('#servent_quarter_facility').prop("checked", true);
            }

            //parking garage
            $('#parking_garage_length').val(response.bungalow_basement.parking_garage_length);
            $('#parking_garage_width').val(response.bungalow_basement.parking_garage_width);
            $('#parking_garage_area').val(response.bungalow_basement.parking_garage_area);
            $('#no_of_cars').val(response.bungalow_basement.no_of_cars);
            $('#parking_garage_location').val(response.bungalow_basement.parking_garage_location);
            $('#saperate_shade').val(response.bungalow_basement.saperate_shade);

            //home theater
            $('#home_theater_length').val(response.bungalow_basement.home_theater_length);
            $('#home_theater_width').val(response.bungalow_basement.home_theater_width);
            $('#home_theater_area').val(response.bungalow_basement.home_theater_area);
            $('#home_theater_floor').val(response.bungalow_basement.home_theater_floor);
            $('#home_theater_seats').val(response.bungalow_basement.home_theater_seats);

            
            // $('#project_id').val(response.bungalow_basement.project_id);
            $('#updateModalBtn').attr('url',"update-bungalow-basement");
        }
    });
}

// Designs Edit 
// function editDesigns(url) {
//     fetch(url)
//     .then(response => response.json())
//     .then(response => {
//         console.log(response);
//         alert(response);
//         if(response.status == 200){
//             alert('hii');
            

//         }
//     });
// }

//NEXT BUTTON MODAL
function nextModal() {
    var next_index = parseFloat($('#project_module').children().attr('modal-index'));
    $('#project_module').html("");
    
    var project_id = $('#project_id').val();
    next_index += 1;
    // alert(next_index);

    $('#previousModalBtn').removeClass('hide');
    if (next_index == 0) {
        $('#previousModalBtn').addClass('hide');
        $('#modal_name').text("Project Details");
        
    } else if(next_index == 1) {
        // getBuiltUpArea();
        $('#project_module').html($('#bungalow_entrance_modal').html());
        $('#modal_name').text("Bungalow Entrance"); 
    }else if(next_index == 2) {
        $('#project_module').html($('#bungalow_drawing_hall_modal').html());
        $('#modal_name').text("Exclusive Drawing Hall");
    }else if(next_index == 3) {
        $('#project_module').html($('#bungalow_pantry_modal').html());
        $('#modal_name').text("Bungalow Pantry");
    }else if(next_index == 4) {
        $('#project_module').html($('#bungalow_floor_store_modal').html());
        $('#modal_name').text("Bungalow Floor Store");
    }else if(next_index == 5) {
        $('#project_module').html($('#bungalow_bedroom_modal').html());
        $('#modal_name').text("Bungalow Bedroom");
    }else if(next_index == 6) {
        $('#project_module').html($('#bungalow_basement_modal').html());
        // $('#nextModalBtn').addClass('hide');
        $('#modal_name').text("Bungalow Basement");

        // get Built Up Area
        const url = "http://192.168.1.99:8080/sdplserver/api/project-builtup-area/"+project_id;
        getBuiltUpArea(url);

    }else if(next_index == 7) {
        $('#project_module').html($('#bungalow_designs_modal').html());
        $('#nextModalBtn').addClass('hide');
        $('#modal_name').text("Design Requirements");
    } 
    var country_id = $("#country").val();
    getState(country_id);
    
    // } else if(next_index == 8){
    //     $('#project_module').html($('#Payment').html());
    //     $('#nextModalBtn').addClass('hide');
    //     $('#modal_name').text("Payment");
    // }   
}

//PREVIOUS BUTTON MODAL
function previousModal() {
    var previous_index = parseFloat($('#project_module').children().attr('modal-index'));
    $('#project_module').html("");    
    $('#nextModalBtn').removeClass('hide');
    if(previous_index != 0){
        previous_index -= 1;
    }
    if (previous_index == 0) {
        $('#project_module').html($('#project_modal').html());
        $('#previousModalBtn').addClass('hide');
        $('#modal_name').text("Project Details");

    } else if(previous_index == 1) {
        $('#project_module').html($('#bungalow_entrance_modal').html());
        $('#modal_name').text("Bungalow Entrance");
       
    }else if(previous_index == 2) {
        $('#project_module').html($('#bungalow_drawing_hall_modal').html());
        $('#modal_name').text("Exclusive Drawing Hall");
    }else if(previous_index == 3) {
        $('#project_module').html($('#bungalow_pantry_modal').html());
        $('#modal_name').text("Bungalow Pantry");
    }else if(previous_index == 4) {
        $('#project_module').html($('#bungalow_floor_store_modal').html());
        $('#modal_name').text("Bungalow Floor Store");
    }else if(previous_index == 5) {
        $('#project_module').html($('#bungalow_bedroom_modal').html());
        $('#modal_name').text("Bungalow Bedroom");
    }else if(previous_index == 6) {
        $('#project_module').html($('#bungalow_basement_modal').html());
        $('#modal_name').text("Bungalow Basement");
    } else if(previous_index == 7) {
        $('#project_module').html($('#bungalow_designs_modal').html());
        $('#modal_name').text("Design Requirements");
    } 
   $('#createProjectModal').modal('show');
}

//UPDATE PROJECTS
function updateProject(url){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        var formData = new FormData($("#createProjectForm")[0]);
        $.ajax({
            type: "post",
            url: url,
            data: formData,
            dataType: "json",
            cache: false,
            contentType: false, 
            processData: false, 
            success: function (response) {
                if(response.status === 400)
                {
                    $('#errors').html('');
                    $('#errors').addClass('alert alert-danger');
                    var count = 1;
                    $.each(response.errors, function (key, err_value) { 
                        $('#errors').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                    });
                    
                }else{
                    alert('Updated Successfully');
                    $('#errors').html('');
                }
            }
        });
}

//GET BUILT UP AREA
function getBuiltUpArea(url) {
    fetch(`${url}`)
    .then(response => response.json())
    .then(response => {
        console.log(response);
        
        $('#builtup_plot_area').text(response.plot_size);
        $('#builtup_floor').text(response.floor);
        $('#builtup_security_kiosq').text(response.security_kiosq);
        $('#builtup_wall_thickness').text(response.wall_thikness);
        $('#builtup_total_area').text(response.builtup_area);

        var service_charge = 3000;
        $('#total_builtup_area').text(response.builtup_area * service_charge);
    });
}


//PROJECT PROPERTY RE & IRRE
function plotArea() {
    var plot_type = $("input[type='radio'].plot_type:checked").val(); 

    if(plot_type == 1){
       var plot_size = regularPlotArea();
    }else if(plot_type == 2){
        var plot_size = irregularPlotArea();
    }
    return plot_size;
}


function eastProperty(property_value) {
    if (property_value == 1) {
        $('.input_east_show').removeClass('hide');
        // $("#east_road_width").val("");
    }else{
        $('.input_east_show').addClass('hide');
    }
}

function westProperty(west_property_value) {
    if (west_property_value == 1) {
        $('.input_west_show').removeClass('hide');
        // $("#west_road_width").val("");
    }else{
        $('.input_west_show').addClass('hide');
    }
}

function northProperty(north_property_value) {
    if (north_property_value == 1) {
        $('.input_north_show').removeClass('hide');
        // $("#north_road_width").val("");
    }else{
        $('.input_north_show').addClass('hide');
    }
}

function southProperty(south_property_value) {
    if (south_property_value == 1) {
        $('.input_south_show').removeClass('hide');
        // $("#south_road_width").val("");
    }else{
        $('.input_south_show').addClass('hide');
    }
}

function perticularlyNorth(perticularly_value) {
    if (perticularly_value == 1) {
        $('.input_hand_sketch_orientation_img').removeClass('hide');
    }else{
        $('.input_hand_sketch_orientation_img').addClass('hide');
    }
}

function plotTYpe(plot_type) {

    $(".diagonal").addClass('hide');
    if (plot_type == 1) {
        var plot_size = plotArea();
        $('#plot_size').val(plot_size);
        $(".diagonal").addClass('hide');
        $(".irregular_image").addClass('hide');
    } else if(plot_type == 2) {
        var plot_size = plotArea();
        $('#plot_size').val(plot_size);
        $(".diagonal").removeClass('hide');
        $(".irregular_image").removeClass('hide');
    }
}

function levelProject(lavel_value) {

    $(".level_val").addClass('hide');
    if(lavel_value != 1) {
        $(".level_val").removeClass('hide');
    }
}

// function entranceGate(gate_value) {
//     var one_gate = $('#one_gate').val();
//     alert(one_gate);
//     var two_gate =$("input[name='two_gate']:checked").val();
//     var main_car_gate = $('#main_car_gate').val();
//     var side_padestrian_gate = $('#side_padestrian_gate').val();

//     alert(two_gate);
//     alert(main_car_gate);
//     alert(side_padestrian_gate);

//     if (gate_value == 1) {
//         $('.one_gate_body').removeClass('hide');
//         if (one_gate == 99) {
//             $('.onegate_more_wide').removeClass('hide');
//         } 
//     }else if(gate_value == 2){
//         $('.two_gate_body').removeClass('hide');
//         if (two_gate == 3) {
//             $('.adjecent_body').removeClass('hide');
//             if(main_car_gate == 99){
//                 $('.main_catgate_more_wide').removeClass('hide');
//             } else if(side_padestrian_gate == 99){
//                 $('.side_pad_more_wide').removeClass('hide');
//             }  
//         }else if(two_gate == 4){
//             $('.diff_cus_loc_body').removeClass('hide');
//         }
//     }
// }

//PROJECT PROPERTY DIMENTION FT METER
// function plotAreaDimention() {
//     var dimention = $("#dimention").val();
//     var plot_type = $("input[type='radio'].plot_type:checked").val();  
//     var feet_to_meter = 0.3048;
//     var meter_to_feet = 3.28084;
//     var length = 0;
//     var width = 0;
//     var diagonal_one = 0;
//     var diagonal_two = 0;

    
//     if(plot_type == 1){
//         var plot_length = $("#plot_length").val();
//         var plot_width = $("#plot_width").val(); 
//         if (dimention == 1) {
//             $('.another').text('F');
//             length = (plot_length * meter_to_feet) ;
//             width = (plot_width * meter_to_feet) ;
//         } else if (dimention == 2){
//             $('.another').text('M');
//             length = (plot_length * feet_to_meter) ;
//             width = (plot_width * feet_to_meter) ;
//         } 
//         $("#plot_length").val('');
//         $("#plot_width").val('');
//         $("#plot_length").val(length.toFixed(3));
//         $("#plot_width").val(width.toFixed(3));
//         $("#plot_size").val((length * width).toFixed(3));
//         //console.log(plot_size);
//      }else if(plot_type == 2){
//         var plot_length = $("#plot_length").val();
//         var plot_width = $("#plot_width").val(); 
//         var diagonal_1 = $("#diagonal_1").val();
//         var diagonal_2 = $("#diagonal_2").val();
//         if(dimention == 1){
//             $('.another').val('F');
//             length = (plot_length * meter_to_feet) ;
//             width = (plot_width * meter_to_feet) ;
//             diagonal_one = (diagonal_1 * meter_to_feet);
//             diagonal_two = (diagonal_2 * meter_to_feet);
//         }else if(dimention == 2){
//             $('.another').val('M');
//             length = (plot_length * feet_to_meter) ;
//             width = (plot_width * feet_to_meter) ;
//             diagonal_one = (diagonal_1 * feet_to_meter);
//             diagonal_two = (diagonal_2 * feet_to_meter);
//         }
//         $("#plot_length").val('');
//         $("#plot_width").val('');
//         $("#diagonal_1").val("");
//         $("#diagonal_2").val("");
//         $("#plot_length").val(length.toFixed(3));
//         $("#plot_width").val(width.toFixed(3));
//         $("#diagonal_1").val(diagonal_one.toFixed(3));
//         $("#diagonal_2").val(diagonal_two.toFixed(3));
//         $("#plot_size").val((diagonal_one * diagonal_two * 0.5).toFixed(3))
        
//      }
    
// }

function dimensionShow() {
    var dimention = $("#dimention").val();
    if(dimention == 1){
        $('.another').text('f');
    }else if(dimention == 2){
        $('.another').text('m');
    }
}

// function assignUnitValue(field_value,field_id) {
//     $('#'+field_id).attr('unit-value',field_value); 
// }

function plotAreaDimention() {
    
    var feet_to_meter = 3.28084;
    var length = 0;
    var width = 0;
    var diagonal_one = 0;
    var diagonal_two = 0;
    var area = 0;
    
    var dimension = $("#dimention").val();
    var plot_type = $("input[type='radio'].plot_type:checked").val();
    // var plot_length = $("#plot_length").attr("unit-value");
    // var plot_width = $("#plot_width").attr("unit-value");
    // var diagonal_1 = $("#diagonal_1").attr("unit-value");
    // var diagonal_2 = $("#diagonal_2").attr("unit-value");

    var plot_length = $("#plot_length").val();
    var plot_width = $("#plot_width").val();
    var diagonal_1 = $("#diagonal_1").val();
    var diagonal_2 = $("#diagonal_2").val();

    if(dimension == 1){
        $('.another').text('ft');
    }else if(dimension == 2){
        $('.another').text('m');
    }
    
    if(plot_type == 1){
        if(isNaN(plot_length) ){
            $("#plot_length").val("");
            return false;
        }
        if(isNaN(plot_width) ){
            $("#plot_width").val("");
            return false;
        }
    }else{

        // if(isNaN(plot_length) ){
        //     alert("Please enter plot length");
        //     $("#plot_length").val("");
        //     // $("#dimention").val("");
        //     return false;
        // }
        // if(isNaN(plot_width) ){
        //     alert("Please enter plot width");
        //     $("#plot_width").val("");
        //     // $("#dimention").val("");
        //     return false;
        // }
        if(isNaN(diagonal_1) ){
            $("#diagonal_1").val("");
            return false;
        }
        if(isNaN(diagonal_2) ){
            $("#diagonal_2").val("");
            return false;
        }
    }
    
    // var le = 0;
    // if(dimension == 1){
    //     var le = plot_length * 3.28084 ;
    //     $("#plot_length").val(le);
    //     console.log("Meter To Feet " +  le);
    // }else{
    //     var le = plot_length / 3.28084 ;
    //     $("#plot_length").val(le);
    //     console.log("feet to meter " + le);
    // }

// return ;

    if(dimension == 1){
        length = plot_length * 3.28084 ;
        width = plot_width * 3.28084 ;
        diagonal_one = diagonal_1 * 3.28084;
        diagonal_two = diagonal_2 * 3.28084;
        
        if(plot_type == 1){
            $("#plot_length").val(length);
            $("#plot_width").val(width);
            area = length * width;
            $("#plot_size").val(area );
            
        }else{
            $("#plot_length").val(length);
            $("#plot_width").val(width);
            $("#diagonal_1").val(diagonal_one);
            $("#diagonal_2").val(diagonal_two);
            area = diagonal_one * diagonal_two;
            $("#plot_size").val(area * 0.5);
        }
        $('.another').text('ft');
        $('.plot_type_another').text('sqft');
    }else{
        length = plot_length / 3.28084 ;
        width = plot_width / 3.28084;
        diagonal_one = diagonal_1 / 3.28084;
        diagonal_two = diagonal_2 / 3.28084;
       
        if(plot_type == 1){
            $("#plot_length").val(length);
            $("#plot_width").val(width);
            area = length * width;
            $("#plot_size").val(area );
        }else{
            $("#plot_length").val(length);
            $("#plot_width").val(width);
            $("#diagonal_1").val(diagonal_one);
            $("#diagonal_2").val(diagonal_two);
            area = diagonal_one * diagonal_two;
            $("#plot_size").val(area * 0.5);
        }
        $('.another').text('m');
        $('.plot_type_another').text('sqmt');
    }

}

//COMMON AREA CALCUATE FOR OTHER FORM
function plotAreaOtherModal(length,width) {
    var area = length * width;
    return area.toFixed(2);
}

//REGULAR PLOT TYPE AREA
function regularPlotArea(){
    var plot_length = $("#plot_length").val();
    var plot_width = $("#plot_width").val();
    var plot_size = plot_length * plot_width ;
    return plot_size.toFixed(2) ;
}

//IR-REGULAR PLOT TYPE AREA
function irregularPlotArea(){
    var diagonal_1 = $("#diagonal_1").val();
    var diagonal_2 = $("#diagonal_2").val();
    var plot_size = diagonal_1 * diagonal_2 * 0.5;
    return plot_size.toFixed(2) ;
}

//PROJECT PROPERTY ROADWIDTH 
function roadWidth() {

    // var feet_to_meter = 0.3048;
    // var meter_to_feet = 3.28084;
    var unit_base_value = 3.28084;
    
    var east = 0;
    var west = 0;
    var north = 0;
    var south = 0;
    var value_level = 0;
    
    var east_road_width = $("#east_road_width").val();
    var west_road_width = $("#west_road_width").val();
    var north_road_width = $("#north_road_width").val();
    var south_road_width = $("#south_road_width").val();
    var level_value = $("#level_value").val();

    // var east_road_width = $("#east_road_width").attr("unit-value");
    // var west_road_width = $("#west_road_width").attr("unit-value");
    // var north_road_width = $("#north_road_width").attr("unit-value");
    // var south_road_width = $("#south_road_width").attr("unit-value");
    // var level_value = $("#level_value").attr("unit-value");

    if(dimension == 1){
        $('.another').text('ft');
    }else if(dimension == 2){
        $('.another').text('m');
    }

    // if(isNaN(east_road_width) ){
    //     $("#east_road_width").val("");
    //     return false;
    // }
    // if(isNaN(west_road_width) ){
    //     $("#west_road_width").val("");
    //     return false;
    // }
    // if(isNaN(north_road_width) ){
    //     $("#north_road_width").val("");
    //     return false;
    // }
    // if(isNaN(south_road_width) ){
    //     $("#south_road_width").val("");
    //     return false;
    // }
    // if(isNaN(level_value) ){
    //     $("#level_value").val("");
    //     return false;
    // }
    
    var dimention = $("#dimention").val();
    
    if(dimention == 1){
        // if(isNaN(east_road_width)){
        //     east = "";
        // }else{
        //     east = (east_road_width * unit_base_value).toFixed(2);
        // }

        // if(isNaN(west_road_width)){
        //     west = "";
        // }else{
        //     west = (west_road_width * unit_base_value).toFixed(2);
        // }

        // if(isNaN(north_road_width)){
        //     north = "";
        // }else{
        //     north = (north_road_width * unit_base_value).toFixed(2);
        // }

        // if(isNaN(south_road_width)){
        //     south = "";
        // }else{
        //     south = (south_road_width * unit_base_value).toFixed(2);
        // }

        // if(isNaN(level_value)){
        //     level_value = "";
        // }else{
        //     value_level = (level_value * unit_base_value).toFixed(2);
        // }
        
        east = east_road_width * unit_base_value;
        west = west_road_width * unit_base_value;
        north = north_road_width * unit_base_value;
        south = south_road_width * unit_base_value;
        value_level = level_value * unit_base_value;
        $('.another').val('ft');
    }else if(dimention == 2){
        // if(isNaN(east_road_width)){
        //     east = "";
        // }else{
        //     east = (east_road_width * unit_base_value).toFixed(2);
        // }

        // if(isNaN(west_road_width)){
        //     west = "";
        // }else{
        //     west = (west_road_width * unit_base_value).toFixed(2);
        // }

        // if(isNaN(north_road_width)){
        //     north = "";
        // }else{
        //     north = (north_road_width * unit_base_value).toFixed(2);
        // }

        // if(isNaN(south_road_width)){
        //     south = "";
        // }else{
        //     south = (south_road_width * unit_base_value).toFixed(2);
        // }

        // if(isNaN(level_value)){
        //     level_value = "";
        // }else{
        //     value_level = (level_value * unit_base_value).toFixed(2);
        // }
        east = east_road_width / unit_base_value;
        west = west_road_width / unit_base_value;
        north = north_road_width / unit_base_value;
        south = south_road_width / unit_base_value;
        value_level = level_value / unit_base_value;
        $('.another').val('m');
    }

    // $("#east_road_width").attr("unit-value",east);
    // $("#west_road_width").attr("unit-value",west);
    // $("#north_road_width").attr("unit-value",north);
    // $("#south_road_width").attr("unit-value",south);
    // $("#level_value").attr("unit-value",value_level);

    // $("#east_road_width").val('');
    // $("#west_road_width").val('');
    // $("#north_road_width").val('');
    // $("#south_road_width").val('');
    // $("#level_value").val('');

    $("#east_road_width").val(east);
    $("#west_road_width").val(west);
    $("#north_road_width").val(north);
    $("#south_road_width").val(south);
    $("#level_value").val(value_level);


    // var east_road_width = $('#east_road_width').val();
    // var west_road_width = $('#west_road_width').val();
    // var north_road_width = $('#north_road_width').val();
    // var south_road_width = $('#south_road_width').val();
    // var level_value = $('#level_value').val();

    // if(dimention == 1){
    //     $('.another').val('ft');
    //     east = east_road_width * meter_to_feet;
    //     west = west_road_width * meter_to_feet;
    //     north = north_road_width * meter_to_feet;
    //     south = south_road_width * meter_to_feet;
    //     value_level = level_value * meter_to_feet;
    // }
    // if(dimention == 2){
        
    //     $('.another').val('m');
    //     east = east_road_width * feet_to_meter;
    //     west = west_road_width * feet_to_meter;
    //     north = north_road_width * feet_to_meter;
    //     south = south_road_width * feet_to_meter;
    //     value_level = level_value * feet_to_meter;
    // }
    // $("#east_road_width").val('');
    // $("#west_road_width").val('');
    // $("#north_road_width").val('');
    // $("#south_road_width").val('');
    // $("#level_value").val('');
    // $("#east_road_width").val(east.toFixed(2));
    // $("#west_road_width").val(west.toFixed(2));
    // $("#north_road_width").val(north.toFixed(2));
    // $("#south_road_width").val(south.toFixed(2));
    // $("#level_value").val(value_level.toFixed(2));

}

function reqNotReq(required_value, required_body) {
    if(required_value > 0){
        $("."+required_body).removeClass('hide');
    }else{
        $("."+required_body).addClass('hide');
    } 
}













//Save Bungalow Entrance 
// function saveBungalowEntrance(url){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#bungalowEntranceForm")[0]);
//     $.ajax({
//         type: "post",
//         url: url,
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             //console.log(response);
//             if(response.status === 400)
//             {
//                 $('#bungalow_entrance_err').html('');
//                 $('#bungalow_entrance_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#bungalow_entrance_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#bungalow_entrance_err').html('');
//                 $('#bungalowEntranceModel').modal('hide');
//                 $('#bungalowDrawingHallModel').modal('show');
//                 $('#bungalow_drawing_hall_project_id').val(response.project_id);
//                 alert(response.project_id);
//                 // window.location.reload();

//             }
//         }
//     });
// }



// update entrance
// function updateBungalowEntrance(url){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#bungalowEntranceForm")[0]);
//     $.ajax({
//         type: "post",
//         url: url,
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#bungalow_entrance_err').html('');
//                 $('#bungalow_entrance_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#bungalow_entrance_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#bungalow_entrance_err').html('');
//                 $('#bungalowEntranceModel').modal('hide');
//                 window.location.reload();
//             }
//         }
//     });
// }


//Save Bungalow Drawing Hall 
// function saveBungalowDrawingHall(url){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#bungalowDrawingHallForm")[0]);
//     $.ajax({
//         type: "post",
//         url: url,
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             console.log(response);
//             if(response.status === 400)
//             {
//                 $('#bungalow_drawinghall_err').html('');
//                 $('#bungalow_drawinghall_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#bungalow_drawinghall_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#bungalow_drawinghall_err').html('');
//                 $('#bungalowDrawingHallModel').modal('hide');
//                 $('#bungalowPantryModel').modal('show');
//                 $('#bungalow_pantry_project_id').val(response.project_id);
//                 alert(response.project_id);
//                 //window.location.reload();

//             }
//         }
//     });
// }




//Save Bungalow Pantry 
// function saveBungalowPantry(url){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#bungalowPantryForm")[0]);
//     $.ajax({
//         type: "post",
//         url: url,
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             //console.log(response);
//             if(response.status === 400)
//             {
//                 $('#bungalow_pantry_err').html('');
//                 $('#bungalow_pantry_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#bungalow_pantry_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#bungalow_pantry_err').html('');
//                 $('#bungalowPantryModel').modal('hide');
//                 $('#bungalowFloorStoreModal').modal('show');
//                 $('#bungalow_floor_store_project_id').val(response.project_id);
//                 alert(response.project_id);
//                 //window.location.reload();

//             }
//         }
//     });
// }


//Save Bungalow Floor Store 
// function saveBungalowFloorStore(url){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#bungalowFloorStoreForm")[0]);
//     $.ajax({
//         type: "post",
//         url: url,
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             //console.log(response);
//             if(response.status === 400)
//             {
//                 $('#bungalow_floorstore_err').html('');
//                 $('#bungalow_floorstore_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#bungalow_floorstore_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#bungalow_floorstore_err').html('');
//                 $('#bungalowFloorStoreModal').modal('hide');
//                 $('#bungalowBedroomModal').modal('show');
//                 $('#bungalow_bedroom_project_id').val(response.project_id);
//                 alert(response.project_id);
//                 //window.location.reload();

//             }
//         }
//     });
// }


//Save Bungalow Bedroom Model 
// function saveBungalowBedroom(url){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#bungalowBedroomForm")[0]);
//     $.ajax({
//         type: "post",
//         url: url,
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             console.log(response);
//             if(response.status === 400)
//             {
//                 $('#bungalow_bedroom_err').html('');
//                 $('#bungalow_bedroom_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#bungalow_bedroom_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#bungalow_bedroom_err').html('');
//                 $('#bungalowBedroomModal').modal('hide');
//                 $('#bungalowBasementModel').modal('show');
//                 $('#bungalow_basement_project_id').val(response.project_id);
//                 alert(response.project_id)
//                 //window.location.reload();

//             }
//         }
//     });
// }


//Save Bungalow Basement Model 
// function saveBungalowBasement(url){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#bungalowBasementForm")[0]);
//     $.ajax({
//         type: "post",
//         url: url,
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             console.log(response);
//             if(response.status === 400)
//             {
//                 $('#bungalow_basement_err').html('');
//                 $('#bungalow_basement_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#bungalow_basement_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#bungalow_basement_err').html('');
//                 $('#bungalowBasementForm').modal('hide');
//                 window.location.reload();

//             }
//         }
//     });
// }

// save country
// function saveCountry(){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#countryForm")[0]);
//     $.ajax({
//         type: "post",
//         url: "save-country",
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#country_err').html('');
//                 $('#country_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#country_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#country_err').html('');
//                 $('#countryModal').modal('hide');
//                 window.location.reload();

//             }
//         }
//     });
// }

// function editCountry(country_id){
//     $.ajax({
//         type: "get",
//         url: "edit-country/"+country_id,
//         dataType: "json",
//         success: function (response) {
//             if(response.status == 200){
//                 $('#countryModal').modal('show');
//                 $('#country_err').html('');
//                 $('#country_err').removeClass('alert alert-danger');
//                 $("#countryForm").trigger( "reset" ); 
//                 $('#saveCountryBtn').addClass('hide');
//                 $('#updateCountryBtn').removeClass('hide');
//                 $('#country_name').val(response.country.country_name);
//                 $('#updateCountryBtn').val(response.country.id);
//             }
//         }
//     });
// }

// function updateCountry(country_id){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#countryForm")[0]);
//     $.ajax({
//         type: "post",
//         url: "update-country/"+country_id,
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#country_err').html('');
//                 $('#country_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#country_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#country_err').html('');
//                 $('#countryModal').modal('hide');
//                 window.location.reload();
//             }
//         }
//     });
// }

// function deleteCountry(country_id){
//     $.ajax({
//         type: "get",
//         url: "delete-country/"+country_id,
//         dataType: "json",
//         success: function (response) {
//             if(response.status == 200){
//                 window.location.reload();
//             }
//         }
//     });
// }

/////////////////////// Manage State /////////////////////////////

// function saveState(){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#stateForm")[0]);
//     $.ajax({
//         type: "post",
//         url: "save-state",
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#state_err').html('');
//                 $('#state_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#state_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#state_err').html('');
//                 $('#stateModal').modal('hide');
//                 window.location.reload();

//             }
//         }
//     });
// }
// function editState(state_id){
//     $.ajax({
//         type: "get",
//         url: "edit-state/"+state_id,
//         dataType: "json",
//         success: function (response) {
//             if(response.status == 200){
//                 $('#stateModal').modal('show');
//                 $('#state_err').html('');
//                 $('#state_err').removeClass('alert alert-danger');
//                 $("#stateForm").trigger( "reset" ); 
//                 $('#saveStateBtn').addClass('hide');
//                 $('#updateStateBtn').removeClass('hide');
//                 $('#country_id').val(response.state.country_id);
//                 $('#state_name').val(response.state.state_name);
//                 $('#updateStateBtn').val(response.state.id);
//             }
//         }
//     });
// }

// function updateState(state_id){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#stateForm")[0]);
//     $.ajax({
//         type: "post",
//         url: "update-state/"+state_id,
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#state_err').html('');
//                 $('#state_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#state_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#state_err').html('');
//                 $('#stateModal').modal('hide');
//                 window.location.reload();
//             }
//         }
//     });
// }
// function deleteState(state_id){
//     $.ajax({
//         type: "get",
//         url: "delete-state/"+state_id,
//         dataType: "json",
//         success: function (response) {
//             if(response.status == 200){
//                 window.location.reload();
//             }
//         }
//     });
// }

// function getState(country_id){
//     $.ajax({
//         type: "get",
//         url: "get-state/"+country_id,
//         dataType: "json",
//         success: function (response) {
//             if(response.status == 200){
//                 $('#state_id').html(response.html);
//             }
//         }
//     });

//     // fetch('get-state/'+country_id)
//     // .then((response) => response.json())
//     // .then((data )=> console.log(data))

// }

/////////////// Manage City ////////////////

// function saveCity(){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#cityForm")[0]);
//     $.ajax({
//         type: "post",
//         url: "save-city",
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#city_err').html('');
//                 $('#city_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#city_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#city_err').html('');
//                 $('#cityModal').modal('hide');
//                 window.location.reload();
//             }
//         }
//     });
// }

// function editCity(city_id){
//     $.ajax({
//         type: "get",
//         url: "edit-city/"+city_id,
//         dataType: "json",
//         success: function (response) {
//             if(response.status == 200){
//                 $('#cityModal').modal('show');
//                 $('#city_err').html('');
//                 $('#city_err').removeClass('alert alert-danger');
//                 $("#cityForm").trigger( "reset" ); 
//                 $('#saveCityBtn').addClass('hide');
//                 $('#updateCityBtn').removeClass('hide');
//                 $('#country_id').val(response.cities.country_id);
//                 $('#state_id').html(response.html);
//                 $('#city_name').val(response.cities.city_name);
//                 $('#updateCityBtn').val(response.cities.id);
//             }
//         }
//     });
// }
// function updateCity(city_id){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#cityForm")[0]);
//     $.ajax({
//         type: "post",
//         url: "update-city/"+city_id,
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#city_err').html('');
//                 $('#city_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#city_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#city_err').html('');
//                 $('#cityModal').modal('hide');
//                 window.location.reload();
//             }
//         }
//     });
// }
// function deleteCity(city_id){
//     $.ajax({
//         type: "get",
//         url: "delete-city/"+city_id,
//         dataType: "json",
//         success: function (response) {
//             if(response.status == 200){
//                 window.location.reload();
//             }
//         }
//     });
// }

// function saveProjectType(){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

//     var formData = new FormData($("#projectTypeForm")[0]);
//     $.ajax({
//         type: "post",
//         url: "save-project-type",
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#project_type_err').html('');
//                 $('#project_type_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#project_type_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });

//             }else{
//                 $('#project_type_err').html('');
//                 $('#projectTypeModal').modal('hide');
//                 window.location.reload();
//             }
//         }
//     });
// }

// function saveDesign() {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     var formData = new FormData($("#designForm")[0]);
//     $.ajax({
//         type: "post",
//         url: "save-design",
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#design_err').html('');
//                 $('#design_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#design_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });
//             }else{
//                 $('#design_err').html('');
//                 $('#designModal').modal('hide');
//                 window.location.reload();
//             }
//         }
//     });
// }

// function editDesign(design_id){
//     $.ajax({
//         type: "get",
//         url: "edit-design/"+design_id,
//         dataType: "json",
//         success: function (response) {
//             if(response.status == 200){
//                 $('#designModal').modal('show');
//                 $('#design_err').html('');
//                 $('#design_err').removeClass('alert alert-danger');
//                 $("#designForm").trigger( "reset" ); 
//                 $('#saveDesignBtn').addClass('hide');
//                 $('#updateDesignBtn').removeClass('hide');
//                 $('#design_type_id').val(response.design.design_type_id);
//                 $('#design').val(response.design.design);
//                 $('#updateDesignBtn').val(response.design.id);
//             }
//         }
//     });
// }

// function updateDesign(design_id) {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     var formData = new FormData($("#designForm")[0]);
//     $.ajax({
//         type: "post",
//         url: "update-design/"+design_id,
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#design_err').html('');
//                 $('#design_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#design_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });
//             }else{
//                 $('#design_err').html('');
//                 $('#designModal').modal('hide');
//                 window.location.reload();
//             }
//         }
//     });
// }

// function saveProjectImage() {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     var formData = new FormData($("#projectImageForm")[0]);
//     $.ajax({
//         type: "post",
//         url: "save-project-image",
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#project_image_err').html('');
//                 $('#project_image_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#project_image_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });
//             }else{
//                 $('#project_image_err').html('');
//                 $('#projectImageModal').modal('hide');
//                 window.location.reload();
//             }
//         }
//     });
// }

// function deleteProjectImage(image_id) {
//     $.ajax({
//         type: "get",
//         url: `delete-project-image/${image_id}`,
//         dataType: "json",
//         success: function (response) {
//             if(response.status == 200){
//                 window.location.reload();
//             }
//         }
//     });
// }

// function saveBungalowImage() {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     var formData = new FormData($("#bungalowImageForm")[0]);
//     $.ajax({
//         type: "post",
//         url: "save-bungalow-image",
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#bungalow_image_err').html('');
//                 $('#bungalow_image_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#bungalow_image_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });
//             }else{
//                 $('#bungalow_image_err').html('');
//                 $('#bungalowImageModal').modal('hide');
//                 window.location.reload();
//             }
//         }
//     });
// }

// function deleteBungalowImage(image_id) {
//     $.ajax({
//         type: "get",
//         url: `delete-bungalow-image/${image_id}`,
//         dataType: "json",
//         success: function (response) {
//             if(response.status == 200){
//                 window.location.reload();
//             }
//         }
//     });
// }




// function saveBedroom() {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     var formData = new FormData($("#bedroomForm")[0]);
//     $.ajax({
//         type: "post",
//         url: "save-bedroom",
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#bedroom_err').html('');
//                 $('#bedroom_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#bedroom_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });
//             }else{
//                 $('#bedroom_err').html('');
//                 $('#bedroomModal').modal('hide');
//                 window.location.reload();
//             }
//         }
//     });
// }


// function saveFeedback() {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     var formData = new FormData($("#feedbackForm")[0]);
//     $.ajax({
//         type: "post",
//         url: "save-feedback",
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#feedback_err').html('');
//                 $('#feedback_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#feedback_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });
//             }else{
//                 $('#feedback_err').html('');
//                 $('#feedbackModal').modal('hide');
//                 window.location.reload();
//             }
//         }
//     });
// }

// function editFeedback(feedback_id){
//     fetch(`edit-feedback/${feedback_id}`)
//     .then((response) => response.json())
//     .then((response) => {
//         if (response.status == 200) {
//             $('#feedbackModal').modal('show');
//             $('#feedback_err').html('');
//             $('#feedback_err').removeClass('alert alert-danger');
//             $("#feedbackForm").trigger("reset");
//             $('#saveFeedbackBtn').addClass('hide');
//             $('#updateFeedbackBtn').removeClass('hide');
//             $('#feedback').val(response.feedback.feedback);
//             $('#updateFeedbackBtn').val(response.feedback.id);
//         }
//     });
// }

// function updateFeedback(feedback_id) {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     var formData = new FormData($("#feedbackForm")[0]);
//     $.ajax({
//         type: "post",
//         url: `update-feedback/${feedback_id}`,
//         data: formData,
//         dataType: "json",
//         cache: false,
//         contentType: false, 
//         processData: false, 
//         success: function (response) {
//             if(response.status === 400)
//             {
//                 $('#feedback_err').html('');
//                 $('#feedback_err').addClass('alert alert-danger');
//                 var count = 1;
//                 $.each(response.errors, function (key, err_value) { 
//                     $('#feedback_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
//                 });
//             }else{
//                 $('#feedback_err').html('');
//                 $('#feedbackModal').modal('hide');
//                 window.location.reload();
//             }
//         }
//     });
// }

// function deleteFeedback(feedback_id) {
//     fetch(`delete-feedback/${feedback_id}`)
//     .then((response) => response.json())
//     .then((responce) => {
//         if(responce.status == 200){
//             window.location.reload();
//         }
//     });
// }
