
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
                //$('#'+modal_name).modal('hide');
                // $('#bungalowEntranceModel').modal('show');
                $('#project_id').val(response.project_id);
                // alert(response.project_id);
                //window.location.reload();

                nextModal();
                // previousModal();
            }
        }
    });
}

//EDIT PROJECTS
function editProject(url) {
    alert(url);
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
            $('#saveModalBtn').addClass('hide');
            $('#updateModalBtn').removeClass('hide');

            //project ids
            $('#project_group_id').val(response.project.project_group_id);
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
            $("input:radio[name='plot_type'][value='"+response.project.plot_type+"']").prop("checked", true);
            $('#plot_size').val(response.project.plot_size);
            $('#plot_length').val(response.project.plot_length);
            $('#plot_width').val(response.project.plot_width);
            $('#diagonal_1').val(response.project.diagonal_1);
            $('#diagonal_2').val(response.project.diagonal_2);
            if(response.project.apmt > 0){
                $('#apmt').prop("checked", true);
            }
            $("input:radio[name='east_property'][value='"+response.project.east_property+"']").prop("checked", true);
            $('#east_road_width').val(response.project.east_road_width);           
            $("input:radio[name='west_property'][value='"+response.project.west_property+"']").prop("checked", true);
            $('#west_road_width').val(response.project.west_road_width);
            $("input:radio[name='north_property'][value='"+response.project.north_property+"']").prop("checked", true);
            $('#north_road_width').val(response.project.north_road_width);
            $("input:radio[name='south_property'][value='"+response.project.south_property+"']").prop("checked", true);
            $('#south_road_width').val(response.project.south_road_width);
            if(response.project.plot_orientation > 0){
                $('#plot_orientation').prop("checked", true);
            }
            $('#level').val(response.project.level);
            $('#level_value').val(response.project.level_value);


            $('#updateModalBtn').val(response.project.id);
            $('#project_id').val(response.project.id);
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
            $('#security_kiosq_length').val(response.bungalow_entrance.security_kiosq_length);
            $('#security_kiosq_width').val(response.bungalow_entrance.security_kiosq_width);
            $('#security_kiosq_area').val(response.bungalow_entrance.security_kiosq_area);
            $("input:radio[name='security_kiosq'][value='"+response.bungalow_entrance.security_kiosq+"']").prop("checked", true);

            //porch
            $('#porch_length').val(response.bungalow_entrance.porch_length);
            $('#porch_width').val(response.bungalow_entrance.porch_width);
            $('#porch_area').val(response.bungalow_entrance.porch_area);
            $("input:radio[name='porch'][value='"+response.bungalow_entrance.porch+"']").prop("checked", true);
            $('#visual_nature').val(response.bungalow_entrance.visual_nature);
            $('#car_parking_space').val(response.bungalow_entrance.car_parking_space);

            //foyer
            $('#foyer_length').val(response.bungalow_entrance.foyer_length);
            $('#foyer_width').val(response.bungalow_entrance.foyer_width);
            $('#foyer_area').val(response.bungalow_entrance.foyer_area);
            $('#foyer_lobby').val(response.bungalow_entrance.foyer_lobby);

            //varandah
            $('#verandah_length').val(response.bungalow_entrance.verandah_length);
            $('#verandah_width').val(response.bungalow_entrance.verandah_width);
            $('#verandah_area').val(response.bungalow_entrance.verandah_area);
            $("input:radio[name='verandah'][value='"+response.bungalow_entrance.verandah+"']").prop("checked", true);
            
            
            $('#project_id').val(response.bungalow_entrance.project_id);
            $('#updateModalBtn').attr('url',"update-bungalow-entrance");
            
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


            $('#attached_store').val(response.bungalow_drawing_hall.attached_store);
            $('#utility_wash_room').val(response.bungalow_drawing_hall.utility_wash_room);
            $('#wash_area_open').val(response.bungalow_drawing_hall.wash_area_open);
            $('#specific_req').val(response.bungalow_drawing_hall.specific_req);
            
            
            $('#project_id').val(response.bungalow_drawing_hall.project_id);
            $('#updateModalBtn').attr('url',"update-bungalow-drawing-hall");
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


            $('#project_id').val(response.bungalow_pantry.project_id);
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
            $('#lift_length').val(response.bungalow_floor_store.lift_length);
            $('#lift_width').val(response.bungalow_floor_store.lift_width);
            $('#lift_area').val(response.bungalow_floor_store.floor_store_area);
            $('#passanger_capacity').val(response.bungalow_floor_store.passanger_capacity);
            $('#lift_req').val(response.bungalow_floor_store.lift_req);

            //pooja room
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
            //bedroom checkboxes
            var bedroom = response.bungalow_bedroom;
            $.each(bedroom, function (indexInArray, value) { 
                //var bedroom_id = $(this).attr('value');
                //if($('.bedroom input[value="'+value+'"]').val() == value){
                    // $('#bungalow_bedroom_type_'+value.bedroom).prop('checked',true);
                    // $('#bungalow_bedroom_type_detail').append($('.bedroom_modal').html());

                    
                    // if ($('#bungalow_bedroom_type_'+value.bedroom_id).prop('checked',true)) {
                    //     $('#bungalow_bedroom_type_detail').append($('.bedroom_modal').html());
                    // } else {
                    //     $('#bungalow_bedroom_type_detail').find('#bedroom_type_modal').hide('#bedroom_type_modal');  
                    // }
                    
                //}
                
            });
            // var bdrms = [];
            // $.each($("input[name='bedroom']:checked"), function() {
            //     bdrms.push($(this).val());
            // });
            // alert(bdrms);

            // var bungalow_bedroom_type_ = response.bungalow_bedroom.bungalow_bedroom_type_;
            // $.each(bungalow_bedroom_type_, function (indexInArray, id) { 
            //     if($('input[id="'+id+'"]').val() == id){
            //         $('input[id="'+value+'"]').prop('checked',true);
            //     }
            // });
            
            

            
           

            //bedroom
            // $('#bedroom_length').val(response.bungalow_bedroom.bedroom_length);
            // $('#bedroom_width').val(response.bungalow_bedroom.bedroom_width);
            // $('#bedroom_area').val(response.bungalow_bedroom.bedroom_area);

            // $('#bedroom_floor').val(response.bungalow_bedroom.bedroom_floor);
            // $('#bedroom_nos').val(response.bungalow_bedroom.bedroom_nos);

            //bedroom toilet
            // $('#bedroom_toilet_length').val(response.bungalow_bedroom.bedroom_toilet_length);
            // $('#bedroom_toilet_width').val(response.bungalow_bedroom.bedroom_toilet_width);
            // $('#bedroom_toilet_area').val(response.bungalow_bedroom.bedroom_toilet_area);
            // $('#bedroom_toilet_facility').val(response.bungalow_bedroom.bedroom_toilet_facility);
            // $('#bedroom_toilet_req_text').val(response.bungalow_bedroom.bedroom_toilet_req_text);

            //bedroom dress
            // $('#bedroom_dress_length').val(response.bungalow_bedroom.bedroom_dress_length);
            // $('#bedroom_dress_width').val(response.bungalow_bedroom.bedroom_dress_width);
            // $('#bedroom_dress_area').val(response.bungalow_bedroom.bedroom_dress_area);
            // var bedroom_dress_facility = response.bungalow_bedroom.bedroom_dress_facility.split(',');
            // $.each(bedroom_dress_facility, function (indexInArray, value) { 
            //     if($('input[value="'+value+'"]').val() == value){
            //         $('input[value="'+value+'"]').prop('checked',true);
            //     }
            // });
            // $('#bedroom_dress_req_text').val(response.bungalow_bedroom.bedroom_dress_req_text);

            // $('#bedroom_img').val(response.bungalow_bedroom.bedroom_img);
            // var bedroom_facility = response.bungalow_bedroom.bedroom_facility.split(',');
            // $.each(bedroom_facility, function (indexInArray, value) { 
            //     if($('input[value="'+value+'"]').val() == value){
            //         $('input[value="'+value+'"]').prop('checked',true);
            //     }
            // });
            // $('#bedroom_facility_req_text').val(response.bungalow_bedroom.bedroom_facility_req_text);
            
            
            $('#project_id').val(response.bungalow_bedroom.project_id);
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

            
            $('#project_id').val(response.bungalow_basement.project_id);
            $('#updateModalBtn').attr('url',"update-bungalow-basement");
        }
    });
}


//NEXT BUTTON MODAL
function nextModal() {
    var next_index = parseFloat($('#project_module').children().attr('modal-index'));
    $('#project_module').html("");
    
    next_index += 1;
    
    $('#previousModalBtn').removeClass('hide');
    if (next_index == 0) {
        $('#previousModalBtn').addClass('hide');
        $('#modal_name').text("Project Details");
    } else if(next_index == 1) {
        $('#project_module').html($('#bungalow_entrance_modal').html());
        $('#modal_name').text("Bungalow Entrance");
    }else if(next_index == 2) {
        $('#project_module').html($('#bungalow_drawing_hall_modal').html());
        $('#modal_name').text("Bungalow Drawing-Hall");
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
    }else if(next_index == 7) {
        $('#project_module').html($('#bungalow_designs_modal').html());
        $('#nextModalBtn').addClass('hide');
        $('#modal_name').text("Design Requirements");
        
    }  

    
}

//PREVIOUS BUTTON MODAL
function previousModal() {
    var previous_index = parseFloat($('#project_module').children().attr('modal-index'));
    // alert(previous_index);
    $('#project_module').html("");
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
        $('#modal_name').text("Bungalow Drawing-Hall");
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
                    $('#errors').html('');
                    //$('#project_id').val(response.project_id);
                    // window.location.reload();
                    //nextModal();
                    //previousModal();
                }
            }
        });
}

function plotArea() {
    var plot_size;
    var plot_length = $("#plot_length").val();
    var plot_width = $("#plot_width").val();
    var dimention = $("#dimention").val();

    if (dimention == 1) {
        plot_size = plot_length * plot_width;
    } else if (dimention == 2){
        plot_size = plot_length * plot_width;
    }

    return plot_size;
}

// function feetToMeterWithRegularPlot() {
//     var dimention = $("#dimention").val();
//     var convertedtofeet;
//     if(dimention == 1){
//         convertedtofeet = (plotArea() * 0.3048);
//     }else if(dimention == 2){
//         convertedtofeet = (plotArea() * 3.288399);
//     }
//     return convertedtofeet;
// }

// function feetToMeterWithIrregularPlot() {
//     var plot_type = $(".plot_type").val();
//     var diagonal_1 = $("#diagonal_1").val();
//     var diagonal_2 = $("#diagonal_2").val();
//     var convertedtofeet;
//     if(plot_type == 1){
//         convertedtofeet = (plotArea() * diagonal_1 * 0.3048);
//     }else if(plot_type == 2){
//         convertedtofeet = (plotArea() * diagonal_2 * 3.288399);
//     }
//     return convertedtofeet;
// }

// function lengthWidthConvert() {
//     var plot_length = $("#plot_length").val();
//     var plot_width = $("#plot_width").val();
//     var dimention = $("#dimention").val();
//     var CNVRTD;
//     if(dimention == 1){
//         CNVRTD = plot_length * 0.3048;

//     }else if(dimention == 2){
//         CNVRTD = plot_width
//     }
// }

function conversion() {
    var plot_type = $("input[type='radio'].plot_type:checked").val(); 
    alert("plottype"+" "+plot_type);

    var diagonal_1 = $("#diagonal_1").val();
    var diagonal_2 = $("#diagonal_2").val();
    var east_road_width = $("#east_road_width").val();
    var west_road_width = $("#west_road_width").val();
    var north_road_width = $("#north_road_width").val();
    var south_road_width = $("#south_road_width").val();
    var level_value = $("#level_value").val();

    var plot_length = $("#plot_length").val();
    var plot_width = $("#plot_width").val();
    
    var dimention = $("#dimention").val();
    alert("dimention"+" "+dimention);

    var toFeet = 0.3048;
    var toMeter = 3.288399;

    var convertedtofeet;
    var convertedEastRoad;
    var convertedWestRoad;
    var convertedNorthtRoad;
    var convertedSouthRoad;
    var convertedLevelValue;
    var convertedtofeetpl;
    var convertedtofeetpw;

    if(plot_type == 1){
        $(".onirregular").addClass('hide');
        if (dimention == 1) {
            convertedtofeet = (plotArea() * toFeet);
            convertedEastRoad = (east_road_width * toFeet);
            convertedWestRoad = (west_road_width * toFeet);
            convertedNorthtRoad = (north_road_width * toFeet);
            convertedSouthRoad = (south_road_width * toFeet);
            convertedLevelValue = (level_value * toFeet);
        } else if (dimention == 2){
            convertedtofeet = (plotArea() * toMeter);
            convertedEastRoad = (east_road_width * toMeter);
            convertedWestRoad = (west_road_width * toMeter);
            convertedNorthtRoad = (north_road_width * toMeter);
            convertedSouthRoad = (south_road_width * toMeter);
            convertedLevelValue = (level_value * toMeter);
        }
        
    }else if(plot_type == 2){
        $(".onirregular").removeClass('hide');
        if (dimention == 1) {
            convertedtofeet = (plotArea() * 0.5 * diagonal_1 * diagonal_2 * toFeet);
            convertedEastRoad = (east_road_width * toFeet);
            convertedWestRoad = (west_road_width * toFeet);
            convertedNorthtRoad = (north_road_width * toFeet);
            convertedSouthRoad = (south_road_width * toFeet);
            convertedLevelValue = (level_value * toFeet);
        } else if (dimention == 2){
            convertedtofeet = (plotArea() * 0.5 * diagonal_1 * diagonal_2 * toMeter);
            convertedEastRoad = (east_road_width * toMeter); 
            convertedWestRoad = (west_road_width * toMeter);
            convertedNorthtRoad = (north_road_width * toMeter);
            convertedSouthRoad = (south_road_width * toMeter);
            convertedLevelValue = (level_value * toMeter);
        }
    }
    return convertedtofeet;
}


// function FeettoMeter(length, width, eastRoad, westRoad, northRoad, southRoad, upDownLevelValue) {

//     var dimention = $("#dimention").val();
//     // alert(dimention);
//     var footToMeterConversionRate = 0.3048;
//     var meterToFeetConversionRate = 3.2808399;
//     var plot_size;
//     var east_road;
//     var west_road;
//     var north_road;
//     var south_road;
//     var updown_levelvalue;

//     if(dimention == 1){
//         plot_size = (length * width) * footToMeterConversionRate;
//         east_road = eastRoad * footToMeterConversionRate;
//         west_road = westRoad * footToMeterConversionRate;
//         north_road = northRoad * footToMeterConversionRate;
//         south_road = southRoad * footToMeterConversionRate;
//         updown_levelvalue = southRoad * footToMeterConversionRate;

//     }else if(dimention == 2){
//         plot_size = (length * width) * meterToFeetConversionRate;
//         east_road = eastRoad * meterToFeetConversionRate;
//         west_road = westRoad * meterToFeetConversionRate;
//         north_road = northRoad * meterToFeetConversionRate;
//         south_road = southRoad * meterToFeetConversionRate;
//         updown_levelvalue = upDownLevelValue * meterToFeetConversionRate;
//     }
//     return plot_size;
//}




// function toFeet(feet_input) {
//     var convertTOFeet;
//     var feetConversionRate = 0.3048;
//     convertTOFeet = feet_input * feetConversionRate;
//     return convertTOFeet;
// }

// function toMeter(meter_input) {
//     var convertTOMeter;
//     var meterConversionRate = 3.2808399;
//     convertTOFeet = meter_input * meterConversionRate;
//     return convertTOMeter;
// }

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
