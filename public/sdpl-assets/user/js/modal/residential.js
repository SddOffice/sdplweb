$(document).ready(function () {

    //Create Projects
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

    // $(document).on('click','#saveProjectBtn', function (e) {
    //     e.preventDefault();
    //     const url = "{{MyApp::API_URL}}project";
    //     alert(url);
    //     //saveProject(url);
    // });

    //Bungalow Property Model
    

    // $(function () {
    //     $(document).on("click", function () {
    //     if($('#ir_regular_plot').prop("checked") == true){
    //         $('.onirregular').show();
    //     }
    //     else if($('#ir_regular_plot').prop("checked") == false){
    //         $('.onirregular').hide();
    //     }
    //     });
    // });

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

    // $(document).on("keyup",".input_east_show", function(){
    //     var east_road_width = $("#east_road_width").val();
    //     // var plot_width = $("#plot_width").val();
    //     var plot_area = FeettoMeterConversion(plot_length, plot_width);
    //     $('#plot_size').val(plot_area);
    //     alert(plot_area);
    // });   
    // $(document).on("change",".input_east_show", function () {
        
    //     var dimention = $("#dimention").val();
    //     //alert(dimention);
    //     var east_road_width = $("#east_road_width"). val();
    //     var feet_roadWidth = toFeet(east_road_width);
    //     var meter_roadWidth = toMeter(east_road_width);

    //     if(dimention == 1){
    //         console.log(feet_roadWidth);
    //         //$(".input_east_show").val(feet_roadWidth);
    //     }else if(dimention == 2){
    //         console.log(meter_roadWidth);
    //         //$(".input_east_show").val(meter_roadWidth);
    //     }
    //     alert(feet_roadWidth);
    //     alert(meter_roadWidth);
    //   });

    $(document).on("change","#dimention", function () {

        // var dimention = $("#dimention").val();
        // alert(dimention);
        var plot_aarea = conversion();
        alert(plot_aarea);
        //console.log(plot_area);
        $('#plot_length').val(plot_aarea);
        // alert("Plot lengh" + " "+plot_area);
        // $('#plot_width').val(plot_area);
        // alert("Plot width" + " "+plot_area);
        //$('#plot_size').val(plot_area);
        // $('#east_road_width').val(plot_area);
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

    $(function () {
        $(document).on("click", function () {
        if($('.perpendicularly_north').prop("checked") == true){
            $('.input_hand_sketch_orientation_img').show();
        }
        else if($('.perpendicularly_north').prop("checked") == false){
            $('.input_hand_sketch_orientation_img').hide();
        }
        });
    });

    
    


    //Bungalow Entrance Model
    $(document).on('click','.bungalowEntrance', function (e) {
        e.preventDefault();
        
        var project_id = $(this).val();
        $('#bungalowEntranceModel').modal('show');
        $('#bungalow_entrance_err').html('');
        $('#bungalow_entrance_err').removeClass('alert alert-danger');
        $("#bungalowEntranceForm").trigger("reset"); 
        $('.entrance_one_gate_width').hide();
        $('.entrance_two_gate_width').hide();
        $('.entrance_two_gate_adjacent_mainsidecar_width').hide();
        $('.entrance_two_gate_different_customlocation_width').hide();
        $('.visual_height').hide();
        $('.car_parking_height').hide();
        $('#bungalow_entrance_project_id').val(project_id);
        $('.show_design').css('display','none');
        $('#saveBungalowEntranceBtn').removeClass('hide');
        $('#updateBungalowEntranceBtn').addClass('hide');
    });

    $(function () {
        $(document).on("click", function () {
        if($('.entrance_ONE_GATE_width').prop("checked") == true){
            $('.entrance_one_gate_width').show();
        }
        else if($('.entrance_ONE_GATE_width').prop("checked") == false){
            $('.entrance_one_gate_width').hide();
        }
        });
    });

    $(function () {
        $(document).on("click", function () {
        if($('.entrance_TWO_GATE_width').prop("checked") == true){
            $('.entrance_two_gate_width').show();
        }
        else if($('.entrance_TWO_GATE_width').prop("checked") == false){
            $('.entrance_two_gate_width').hide();
        }
        });
    });

    $(function () {
        $(document).on("click", function () {
        if($('.entrance_two_gate_adjacent_width').prop("checked") == true){
            $('.entrance_two_gate_adjacent_mainsidecar_width').show();
        }
        else if($('.entrance_two_gate_adjacent_width').prop("checked") == false){
            $('.entrance_two_gate_adjacent_mainsidecar_width').hide();
        }
        });
    });

    $(function () {
        $(document).on("click", function () {
        if($('.entrance_two_gate_different_width').prop("checked") == true){
            $('.entrance_two_gate_different_customlocation_width').show();
        }
        else if($('.entrance_two_gate_different_width').prop("checked") == false){
            $('.entrance_two_gate_different_customlocation_width').hide();
        }
        });
    });

    $(function () {
        $(document).on("click", function () {
        if($('.visual_nature').prop("checked") == true){
            $('.visual_height').show();
        }
        else if($('.visual_nature').prop("checked") == false){
            $('.visual_height').hide();
        }
        });
    });

    $(function () {
        $(document).on("click", function () {
        if($('.car_parking').prop("checked") == true){
            $('.car_parking_height').show();
        }
        else if($('.car_parking').prop("checked") == false){
            $('.car_parking_height').hide();
        }
        });
    });

    
    // $(function () {
    //     $(document).on("click", function () {
    //     if($('.en_tranceBtn').prop("checked") == true){
    //         $('.bungalow_entrance_modal').show();
    //     }
    //     else if($('.en_tranceBtn').prop("checked") == false){
    //         $('.bungalow_entrance_modal').hide();
    //     }
    //     });
    // });
    // $(document).on('click','#updateBungalowEntranceBtn', function (e) {
    //     e.preventDefault();
    //     const project_id = $(this).val();
    //     updateBungalowEntrance(project_id);
    // });


    //Bungalow Drawing-Hall Model
    $(document).on('click','.bungalowDrawingHallBtn', function (e) {
        e.preventDefault();
        
        var project_id = $(this).val();
        $('#bungalowDrawingHallModel').modal('show');
        $('#bungalow_drawinghall_err').html('');
        $('#bungalow_drawinghall_err').removeClass('alert alert-danger');
        $("#bungalowDrawingHallForm").trigger("reset");
        $('.other_kitchen_location_col').addClass('hide'); 
        $('.attached_store_input').hide(); 
        $('.utility_washroom_input').hide();
        $('.washroom_area_input').hide();
        $('#bungalow_drawing_hall_project_id').val(project_id);
        $('.show_design').css('display','none');
        $('#savebungalowDrawingHallBtn').removeClass('hide');
        $('#updatebungalowDrawingHallBtn').addClass('hide');
    });

    $(document).on('change','#kitchen_floor', function (e) {
        e.preventDefault();

        if($('#kitchen_floor').val() == 'other') {
            $('.other_kitchen_location_col').removeClass('hide');
        }else {
            $('.other_kitchen_location_col').addClass('hide'); 
        } 
    });

    $(function () {
        $(document).on("click", function () {
        if($('.attached_store').prop("checked") == true){
            $('.attached_store_input').show();
        }
        else if($('.attached_store').prop("checked") == false){
            $('.attached_store_input').hide();
        }
        });
    });

    $(function () {
        $(document).on("click", function () {
        if($('.utility_washroom').prop("checked") == true){
            $('.utility_washroom_input').show();
        }
        else if($('.utility_washroom').prop("checked") == false){
            $('.utility_washroom_input').hide();
        }
        });
    });

    $(function () {
        $(document).on("click", function () {
        if($('.washroom_area').prop("checked") == true){
            $('.washroom_area_input').show();
        }
        else if($('.washroom_area').prop("checked") == false){
            $('.washroom_area_input').hide();
        }
        });
    });

    $(document).on('click','.editDrawingHallBtn', function (e) {
        e.preventDefault();
        const project_id = $(this).val();
        editBungalowDrawingHall(project_id);
    });

    //Bungalow Pantry Model
    $(document).on('click','.bungalowPantryBtn', function (e) {
        e.preventDefault();
        
        var project_id = $(this).val();
        $('#bungalowPantryModel').modal('show');
        $('#bungalow_pantry_err').html('');
        $('#bungalow_pantry_err').removeClass('alert alert-danger');
        $("#bungalowPantryForm").trigger("reset"); 
        $('#other_pantry_text_row').addClass('hide');
        $('#other_dinning_floor_text_row').addClass('hide');
        $('#other_dinning_seat_text_row').addClass('hide'); 
        $('#bungalow_pantry_project_id').val(project_id);
        $('.show_design').css('display','none');
        $('#savebungalowPantryBtn').removeClass('hide');
        $('#updatebungalowPantryBtn').addClass('hide');
    });

    $(document).on('change','#pantry_floor', function (e) {
        e.preventDefault();

        if($('#pantry_floor').val() == 'other') {
            $('#other_pantry_text_row').removeClass('hide');
        }else {
            $('#other_pantry_text_row').addClass('hide'); 
        } 
    });

    $(document).on('change','#dining_floor', function (e) {
        e.preventDefault();

        if($('#dining_floor').val() == 'other') {
            $('#other_dinning_floor_text_row').removeClass('hide');
        }else {
            $('#other_dinning_floor_text_row').addClass('hide'); 
        } 
    });

    $(document).on('change','#dining_seat', function (e) {
        e.preventDefault();

        if($('#dining_seat').val() == 'other') {
            $('#other_dinning_seat_text_row').removeClass('hide');
        }else {
            $('#other_dinning_seat_text_row').addClass('hide'); 
        } 
    });


    //Bungalow Floor-Store Model
    $(document).on('click','.bungalowFloorStoreBtn', function (e) {
        e.preventDefault();
        
        var project_id = $(this).val();
        $('#bungalowFloorStoreModel').modal('show');
        $('#bungalow_floorstore_err').html('');
        $('#bungalow_floorstore_err').removeClass('alert alert-danger');
        $("#bungalowFloorStoreForm").trigger("reset");
        $('.capecity_passenger').addClass('hide');  
        $('.poojaroom_specific_location').addClass('hide'); 
        $('.store_floor_specific').addClass('hide'); 
        $('#bungalow_floor_store_project_id').val(project_id);
        $('.show_design').css('display','none');
        $('#savebungalowFloorStoreBtn').removeClass('hide');
        $('#updatebungalowFloorStoreBtn').addClass('hide');
    });

    $(document).on('change','#passanger_capacity', function (e) {
        e.preventDefault();

        if($('#passanger_capacity').val() == 'more') {
            $('.capecity_passenger').removeClass('hide');
        }else {
            $('.capecity_passenger').addClass('hide'); 
        } 
    });

    $(document).on('change','#store_floor', function (e) {
        e.preventDefault();

        if($('#store_floor').val() == 'other') {
            $('.store_floor_specific').removeClass('hide');
        }else {
            $('.store_floor_specific').addClass('hide'); 
        } 
    });

    $(document).on('change','#pooja_room_floor', function (e) {
        e.preventDefault();

        if($('#pooja_room_floor').val() == 'other') {
            $('.poojaroom_specific_location').removeClass('hide');
        }else {
            $('.poojaroom_specific_location').addClass('hide'); 
        } 
    });

    //Bungalow Bedroom Model
    $(document).on('click','.bungalowBedroomBtn', function(e) {
        e.preventDefault();
        
        var project_id = $(this).val();
        $('#bungalowBedroomModel').modal('show');
        $('#bungalow_bedroom_err').html('');
        $('#bungalow_bedroom_err').removeClass('alert alert-danger');
        $("#bungalowBedroomForm").trigger("reset"); 
        $('#bedroom_floor_specific_req').addClass('hide');
        $('#bedroom_nos_specific_req').addClass('hide'); 
        $('#bedroom_toilet_specific_req').addClass('hide');
        $('#bedroom_dress_specific_req').addClass('hide'); 
        $('#bedroom_facilities_specific_req').addClass('hide'); 
        $('#bungalow_bedroom_project_id').val(project_id);
        $('.show_design').css('display','none');
        $('#savebungalowBedroomBtn').removeClass('hide');
        $('#updatebungalowBedroomBtn').addClass('hide');
    });


    $(document).on('change','.bedroom_floor_req', function (e) {
        e.preventDefault();

        if($('.bedroom_floor_req').val() == 'other') {
            $('#bedroom_floor_specific_req').removeClass('hide');
        }else {
            $('#bedroom_floor_specific_req').addClass('hide'); 
        } 
    });

    $(document).on('change','.bedroom_nos_req', function (e) {
        e.preventDefault();

        if($('.bedroom_nos_req').val() == 'other') {
            $('#bedroom_nos_specific_req').removeClass('hide');
        }else {
            $('#bedroom_nos_specific_req').addClass('hide'); 
        } 
    });

    $(document).on('change','.bedroom_toilet_req', function (e) {
        e.preventDefault();

        if($('.bedroom_toilet_req').val() == 'other') {
            $('#bedroom_toilet_specific_req').removeClass('hide');
        }else {
            $('#bedroom_toilet_specific_req').addClass('hide'); 
        } 
    });

    $(document).on('change','.bedroom_dress_req', function (e) {
        e.preventDefault();

        if($('.bedroom_dress_req').val() == 'other') {
            $('#bedroom_dress_specific_req').removeClass('hide');
        }else {
            $('#bedroom_dress_specific_req').addClass('hide'); 
        } 
    });

    $(document).on('change','.bedroom_facilities_req', function (e) {
        e.preventDefault();

        if($('.bedroom_facilities_req').val() == 'other') {
            $('#bedroom_facilities_specific_req').removeClass('hide');
        }else {
            $('#bedroom_facilities_specific_req').addClass('hide'); 
        } 
    });

    //Bungalow Bedroom
    $(document).on('change','.bedroom', function () {
        var bedroom_id = $(this).attr('value');
        if($(this).prop('checked')) {
            $('#bungalow_bedroom_type_detail').append($('.bedroom_modal').html());
            $('#bungalow_bedroom_type_detail').find('#bedroom_type_modal').attr('id','bedroom_type_modal_'+bedroom_id);
        } else {
            $('#bungalow_bedroom_type_detail').find('#bedroom_type_modal_'+bedroom_id).hide('#bedroom_type_modal_'+bedroom_id);
        }	 
    });

    //Designs
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
        

    //Bungalow Basement Model
    $(document).on('click','.bungalowBasementBtn', function (e) {
        e.preventDefault();
        
        var project_id = $(this).val();
        $('#bungalowBasementModel').modal('show');
        $('#bungalow_basement_err').html('');
        $('#bungalow_basement_err').removeClass('alert alert-danger');
        $("#bungalowBasementForm").trigger("reset"); 
        $('.home_theater_other').addClass('hide');
        $('.home_theater_seat_other').addClass('hide');  
        $('#bungalow_basement_project_id').val(project_id);
        $('.show_design').css('display','none');
        $('#savebungalowBasementBtn').removeClass('hide');
        $('#updatebungalowBasementBtn').addClass('hide');
    });
    
    $(document).on('change','#home_theater_floor', function (e) {
        e.preventDefault();

        if($('#home_theater_floor').val() == 'other') {
            $('.home_theater_other').removeClass('hide');
        }else {
            $('.home_theater_other').addClass('hide'); 
        } 
    });

    $(document).on('change','#home_theater_seats', function (e) {
        e.preventDefault();

        if($('#home_theater_seats').val() == 'other') {
            $('.home_theater_seat_other').removeClass('hide');
        }else {
            $('.home_theater_seat_other').addClass('hide'); 
        } 
    });

    $(function () {
        $(document).on("click", function () {
        if($('.HOME_THEATER').prop("checked") == true){
            $('.home_theater_card').show();
        }
        else if($('.HOME_THEATER').prop("checked") == false){
            $('.home_theater_card').hide();
        }
        });
    });

    $(function () {
        $(document).on("click", function () {
        if($('.PARKING_GARAGE').prop("checked") == true){
            $('.psrking_garage_card').show();
        }
        else if($('.PARKING_GARAGE').prop("checked") == false){
            $('.psrking_garage_card').hide();
        }
        });
    });

    $(function () {
        $(document).on("click", function () {
        if($('.SERVENT_QUARTER').prop("checked") == true){
            $('.servent_quarter_card').show();
        }
        else if($('.SERVENT_QUARTER').prop("checked") == false){
            $('.servent_quarter_card').hide();
        }
        });
    });

    $(function () {
        $(document).on("click", function () {
        if($('.OFFICE').prop("checked") == true){
            $('.office_card').show();
        }
        else if($('.OFFICE').prop("checked") == false){
            $('.office_card').hide();
        }
        });
    });


    $(document).on("keyup",".input", function(){
        var plot_length = $("#plot_length").val();
        var plot_width = $("#plot_width").val();
        var plot_area = plotArea();
        $('#plot_size').val(plot_area);
        
    });   

    
});

