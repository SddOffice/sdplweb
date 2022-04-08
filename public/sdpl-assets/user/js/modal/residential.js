$(document).ready(function () {

    //CREATE PROJECTS
    // $(document).on('click','#createProject', function (e) {
    //     e.preventDefault();
        
    //     $('#createProjectModal').modal('show');
    //     $('#create_project_err').html('');
    //     $('#create_project_err').removeClass('alert alert-danger');
    //     $("#createProjectForm").trigger("reset"); 
    //     $('.show_design').css('display','none');
    //     $('#saveProjectBtn').removeClass('hide');
    //     $('#updateProjectBtn').addClass('hide');
    // });
    
    $(document).on('change','#project_group_id', function (e) {
        e.preventDefault();
        var project_group_id = $(this).val();
        getProjectType(project_group_id);
    });

    $(document).on('change','#state', function () {
        const state_id = $(this).val();
        getCity(state_id);
    });

    // $(function () {
    //     $(document).on("click", function () {
    //         if($('.ckrequired').prop("checked") == true){
    //             $('.requiredshow').show();
    //         }
    //         else if($('.ckrequired').prop("checked") == false){
    //             $('.requiredshow').hide();
    //         }
    //     }); 
    // });     
   
    

    // $(document).on('change',".plot_type", function (e) {
    //     e.preventDefault();

    //     var plot_type = $("input[type='radio'].plot_type:checked").val(); 
        
    //     $('#plot_size').val('');
    //     if (plot_type == 1) {
    //         $('#plot_length').val('');
    //         $('#plot_width').val(''); 
    //         $(".diagonal").addClass('hide');
    //     } else if(plot_type == 2) {
    //         $('#plot_length').val('');
    //         $('#plot_width').val(''); 
    //         $(".diagonal").removeClass('hide');
    //     }
    // });

    $(document).on("click",".plot_type", function () {
        var plot_type = $("input[type='radio'].plot_type:checked").val(); 
        // alert(plot_type_value);
        plotTYpe(plot_type);    
        // plotAreaDimention();
    });


    $(document).on('keyup',".input", function (e) {
        e.preventDefault();

        var dimension = $('#dimention').val();
        if(dimension == null){
            alert("Please first select dimension!");
            $(".input").val("");
            return false;
        }

        // var field_value = $(this).val();
        // var field_id = $(this).attr("id");
        // assignUnitValue(field_value,field_id);

        var plot_size = plotArea();
        $('#plot_size').val(plot_size);
    });

    // $(document).on('keyup',"#plot_length", function (e) {
    //     e.preventDefault();
    //     alert($(this).val());
        
    //     // exactPlotLength();  
    // });

    $(document).on('change',"#dimention", function (e) {
        e.preventDefault();

        var dimension = $('#dimention').val(); 
        $('#dimension').val(dimension); 
        
        plotAreaDimention();
        roadWidth();
    });

    $(document).on('change',"#level", function (e) {
        e.preventDefault();

        // $('#level_value').val('');
        var lavel_value = $('#level').val();     
        levelProject(lavel_value); 
    });

    // $(document).on('click','.existing_project', function (e) {
    //     e.preventDefault();

    //     if($('.ck_east_road').prop("checked") == 2){
    //         $('.input_east_show').addClass('hide');
    //     }
    //     $('.input_east_show').removeClass('hide');
    //     if($('.ck_west_road').prop("checked") == 2){
    //         $('.input_west_show').addClass('hide');
    //     }
    //     $('.input_west_show').removeClass('hide');
    //     if($('.ck_north_road').prop("checked") == 2){
    //         $('.input_north_show').addClass('hide');
    //     }
    //     $('.input_north_show').removeClass('hide');
    //     if($('.ck_south_road').prop("checked") == 2){
    //         $('.input_south_show').addClass('hide');
    //     }
    //     $('.input_south_show').removeClass('hide');
    //     if($('.level_val').prop("checked") == 1){
    //         $('.level_val').addClass('hide'); 
    //     }
    //     $('.level_val').removeClass('hide');
    // });
    $(document).on('click',".apmt_req", function (e) {
        e.preventDefault();

        var apmt_value = $("input[name='apmt']:checked").val();
        if(apmt_value == 1){
            alert('This Service is Not Start Yet!');
        }
    });
    


    $(document).on("click",".east_plot_border", function () {
        var property_value = $("input[name='east_property']:checked").val();
        eastProperty(property_value);    
    });

    $(document).on("click",".west_plot_border", function () {
        var west_property_value = $("input[name='west_property']:checked").val();
        westProperty(west_property_value);    
    });
   
    $(document).on("click",".north_plot_border", function () {
        var north_property_value = $("input[name='north_property']:checked").val();
        northProperty(north_property_value);    
    });

    $(document).on("click",".south_plot_border", function () {
        var south_property_value = $("input[name='south_property']:checked").val();
        southProperty(south_property_value);    
    });

    $(document).on("click",".perpendicularly_north", function () {
        var perticularly_value = $("input[name='plot_orientation']:checked").val();
        perticularlyNorth(perticularly_value);    
    });

    // $(document).on("keyup",".input_other_field", function () {
    //     var field_value = $(this).val();
    //     var field_id = $(this).attr("id");
    //     assignUnitValue(field_value,field_id);
    // });
   





    // $(document).on("click",".entrance_gate", function () {
    //     var gate_value = $("input[name='entrance_gate']:checked").val();
    //     alert(gate_value);
        
       
    //     entranceGate(gate_value);    
    // });


    //AREA CALCULATE
    $(document).on('keyup',".kiosq_area", function (e) {
        e.preventDefault();
        
        var security_kiosq_length = $('#security_kiosq_length').val();
        var security_kiosq_width = $('#security_kiosq_width').val();
        var security_kiosq_area = $('#security_kiosq_area').val();

        var kiosq_area = plotAreaOtherModal(security_kiosq_length, security_kiosq_width);
        $('#security_kiosq_area').val(kiosq_area);
        //alert(kiosq_area);
    });

    $(document).on('keyup',".porch_area", function (e) {
        e.preventDefault();
        
        var porch_length = $('#porch_length').val();
        var porch_width = $('#porch_width').val();
        var porch_area = $('#porch_area').val();

        var porch_areaa = plotAreaOtherModal(porch_length, porch_width);
        $('#porch_area').val(porch_areaa);
        //alert(porch_area);
    });

    $(document).on('keyup',".foyer_area", function (e) {
        e.preventDefault();
        
        var foyer_length = $('#foyer_length').val();
        var foyer_width = $('#foyer_width').val();
        var foyer_area = $('#foyer_area').val();

        var foyer_areaa = plotAreaOtherModal(foyer_length, foyer_width);
        $('#foyer_area').val(foyer_areaa)
    });

    $(document).on('keyup',".varandah_area", function (e) {
        e.preventDefault();
        
        var verandah_length = $('#verandah_length').val();
        var verandah_width = $('#verandah_width').val();
        var verandah_area = $('#verandah_area').val();

        var varandah_areaa = plotAreaOtherModal(verandah_length, verandah_width);
        $('#verandah_area').val(varandah_areaa);
        //alert(porch_area);
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

    $(document).on('change','#floor', function (e) {
        e.preventDefault();

        if($('#floor').val() == 5) {
            $('.entrence_more_floor').removeClass('hide');
        }else {
            $('.entrence_more_floor').addClass('hide'); 
        } 
    });

    $(document).on('change','#one_gate', function (e) {
        e.preventDefault();

        if($('#one_gate').val() == 99) {
            $('.onegate_more_wide').removeClass('hide');
        }else {
            $('.onegate_more_wide').addClass('hide'); 
        } 
    });

    $(document).on('change','#main_car_gate', function (e) {
        e.preventDefault();

        if($('#main_car_gate').val() == 99) {
            $('.main_catgate_more_wide').removeClass('hide');
        }else {
            $('.main_catgate_more_wide').addClass('hide'); 
        } 
    });

    $(document).on('change','#side_padestrian_gate', function (e) {
        e.preventDefault();

        if($('#side_padestrian_gate').val() == 99) {
            $('.side_pad_more_wide').removeClass('hide');
        }else {
            $('.side_pad_more_wide').addClass('hide'); 
        } 
    });




    

    
    $(document).on("click",'.porch_req', function () {
        const required_value = $(".porch_req input[type='radio']:checked").val();
        const required_body = $(".porch_req input[type='radio']:checked").attr('req-body');
        reqNotReq(required_value, required_body);
    });
    $(document).on("click",'.foyer_req', function () {
        const required_value = $(".foyer_req input[type='radio']:checked").val();
        const required_body = $(".foyer_req input[type='radio']:checked").attr('req-body');
        reqNotReq(required_value, required_body);
    });
    $(document).on("click",'.security_kiosq_req', function () {
        const required_value = $(".security_kiosq_req input[type='radio']:checked").val();
        const required_body = $(".security_kiosq_req input[type='radio']:checked").attr('req-body');
        reqNotReq(required_value, required_body);
    });
    $(document).on("click",'.verandah_req', function () {
        const required_value = $(".verandah_req input[type='radio']:checked").val();
        const required_body = $(".verandah_req input[type='radio']:checked").attr('req-body');
        reqNotReq(required_value, required_body);
    });
    

    $(document).on('change','#car_parking_space', function (e) {
        e.preventDefault();

        if($('#car_parking_space').val() == 'more') {
            $('.no_of_car_parking_more').removeClass('hide');
        }else {
            $('.no_of_car_parking_more').addClass('hide'); 
        } 
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

    

    //BUNGALOW DRAWING HALL
    $(document).on('click','.bungalowDrawingHallBtn', function (e) {
        e.preventDefault();
        
        var project_id = $(this).val();
        $('#bungalowDrawingHallModel').modal('show');
        $('#bungalow_drawinghall_err').html('');
        $('#bungalow_drawinghall_err').removeClass('alert alert-danger');
        $("#bungalowDrawingHallForm").trigger("reset");
        // $('.other_kitchen_location_col').addClass('hide'); 
        $('.attached_store_input').hide(); 
        $('.utility_washroom_input').hide();
        $('.washroom_area_input').hide();
        $('#bungalow_drawing_hall_project_id').val(project_id);
        $('.show_design').css('display','none');
        $('#savebungalowDrawingHallBtn').removeClass('hide');
        $('#updatebungalowDrawingHallBtn').addClass('hide');
    });

    // $(document).on('change','#kitchen_floor', function (e) {
    //     e.preventDefault();

    //     if($('#kitchen_floor').val() == 5) {
    //         $('.other_kitchen_location_col').removeClass('hide');
    //     }else {
    //         $('.other_kitchen_location_col').addClass('hide'); 
    //     } 
    // });

    $(document).on("click",'.living_hall_req', function () {
        const required_value = $(".living_hall_req input[type='radio']:checked").val();
        const required_body = $(".living_hall_req input[type='radio']:checked").attr('req-body');
        reqNotReq(required_value, required_body);
    });

    $(document).on("click",'.drawing_hall_req', function () {
        const required_value = $(".drawing_hall_req input[type='radio']:checked").val();
        const required_body = $(".drawing_hall_req input[type='radio']:checked").attr('req-body');
        reqNotReq(required_value, required_body);
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

    // $(document).on('click',function () {
        
    //     if($('.living_hall_required').prop("checked") == true){
    //         $('.living_hall_required_body').show();
    //     }else if($('.living_hall_required').prop("checked") == false){
    //         $('.living_hall_required_body').hide();
    //     }
    // });

    // $(document).on('click',function () {
        
    //     if($('.drawing_hall_required').prop("checked") == true){
    //         $('.drawing_hall_required_body').show();
    //     }else if($('.drawing_hall_required').prop("checked") == false){
    //         $('.drawing_hall_required_body').hide();
    //     }
    // });

    //AREA CALCULATE
    $(document).on('keyup',".living_area", function (e) {
        e.preventDefault();
        
        var living_hall_length = $('#living_hall_length').val();
        var living_hall_width = $('#living_hall_width').val();
        var living_hall_area = $('#living_hall_area').val();

        var living_area = plotAreaOtherModal(living_hall_length, living_hall_width);
        $('#living_hall_area').val(living_area);
        //alert(kiosq_area);
    });

    $(document).on('keyup',".drawing_area", function (e) {
        e.preventDefault();
        
        var drawing_hall_length = $('#drawing_hall_length').val();
        var drawing_hall_width = $('#drawing_hall_width').val();
        var drawing_hall_area = $('#drawing_hall_area').val();

        var drawing_area = plotAreaOtherModal(drawing_hall_length, drawing_hall_width);
        $('#drawing_hall_area').val(drawing_area);
        //alert(kiosq_area);
    });

    $(document).on('keyup',".kitchen_area", function (e) {
        e.preventDefault();
        
        var kitchen_length = $('#kitchen_length').val();
        var kitchen_width = $('#kitchen_width').val();
        var kitchen_area = $('#kitchen_area').val();

        var kitchen_areaa = plotAreaOtherModal(kitchen_length, kitchen_width);
        $('#kitchen_area').val(kitchen_areaa);
        //alert(kiosq_area);
    });

    $(document).on('keyup',".atached_store_area", function (e) {
        e.preventDefault();
        
        var attach_store_length = $('#attach_store_length').val();
        var attach_store_width = $('#attach_store_width').val();
        var attach_store_area = $('#attach_store_area').val();

        var atached_store_area = plotAreaOtherModal(attach_store_length, attach_store_width);
        $('#attach_store_area').val(atached_store_area);
        //alert(kiosq_area);
    });

    $(document).on('keyup',".utility_wash_area", function (e) {
        e.preventDefault();
        
        var utility_wash_length = $('#utility_wash_length').val();
        var utility_wash_width = $('#utility_wash_width').val();
        var utility_wash_area = $('#utility_wash_area').val();

        var utility_wash_areaa = plotAreaOtherModal(utility_wash_length, utility_wash_width);
        $('#utility_wash_area').val(utility_wash_areaa);
        //alert(kiosq_area);
    });

    $(document).on('keyup',".wash_area", function (e) {
        e.preventDefault();
        
        var wash_area_length = $('#wash_area_length').val();
        var wash_area_width = $('#wash_area_width').val();
        var wash_area = $('#wash_area').val();

        var wash_areaa = plotAreaOtherModal(wash_area_length, wash_area_width);
        $('#wash_area').val(wash_areaa);
        //alert(kiosq_area);
    });

    // $(document).on('click','.editDrawingHallBtn', function (e) {
    //     e.preventDefault();
    //     const project_id = $(this).val();
    //     editBungalowDrawingHall(project_id);
    // });

    

    //BUNGALOW PANTRY
    $(document).on('click','.bungalowPantryBtn', function (e) {
        e.preventDefault();
        
        var project_id = $(this).val();
        $('#bungalowPantryModel').modal('show');
        $('#bungalow_pantry_err').html('');
        $('#bungalow_pantry_err').removeClass('alert alert-danger');
        $("#bungalowPantryForm").trigger("reset"); 
        // $('#other_pantry_text_row').addClass('hide');
        // $('#other_dinning_floor_text_row').addClass('hide');
        // $('#other_dinning_seat_text_row').addClass('hide'); 
        $('#bungalow_pantry_project_id').val(project_id);
        $('.show_design').css('display','none');
        $('#savebungalowPantryBtn').removeClass('hide');
        $('#updatebungalowPantryBtn').addClass('hide');
    });


    $(document).on("click",'.pantry_req', function () {
        const required_value = $(".pantry_req input[type='radio']:checked").val();
        const required_body = $(".pantry_req input[type='radio']:checked").attr('req-body');
        reqNotReq(required_value, required_body);
    });


    $(document).on('change','#pantry_floor', function (e) {
        e.preventDefault();

        if($('#pantry_floor').val() == 5) {
            $('.other_pantry_text_row').removeClass('hide');
        }else {
            $('.other_pantry_text_row').addClass('hide'); 
        } 
    });

    $(document).on('change','#dining_floor', function (e) {
        e.preventDefault();

        if($('#dining_floor').val() == 5) {
            $('.other_dinning_floor_text_row').removeClass('hide');
        }else {
            $('.other_dinning_floor_text_row').addClass('hide'); 
        } 
    });

    $(document).on('change','#dining_seat', function (e) {
        e.preventDefault();

        if($('#dining_seat').val() == 'other') {
            $('.other_dinning_seat_text_row').removeClass('hide');
        }else {
            $('.other_dinning_seat_text_row').addClass('hide'); 
        } 
    });

    //AREA CALCULATE
    $(document).on('keyup',".pantry_area", function (e) {
        e.preventDefault();
        
        var pantry_length = $('#pantry_length').val();
        var pantry_width = $('#pantry_width').val();
        var pantry_area = $('#pantry_area').val();

        var pantry_areaa = plotAreaOtherModal(pantry_length, pantry_width);
        $('#pantry_area').val(pantry_areaa);
        //alert(kiosq_area);
    });

    $(document).on('keyup',".dinning_area", function (e) {
        e.preventDefault();
        
        var dining_length = $('#dining_length').val();
        var dining_width = $('#dining_width').val();
        var dining_area = $('#dining_area').val();

        var dinning_area = plotAreaOtherModal(dining_length, dining_width);
        $('#dining_area').val(dinning_area);
        //alert(kiosq_area);
    });



    //BUNGALOW FLOOR-STORE
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

    // $(document).on('change',function () {
        
    //     if($('.pooja_room_required').prop("checked") == true){
    //         $('.pooja_room_required_body').show();
    //     }else if($('.pooja_room_required').prop("checked") == false){
    //         $('.pooja_room_required_body').hide();
    //     }
    // });

    // $(document).on('change',function(e) {
    //     $('.lift_requirement').hide();
    //     if($('.lift_req').prop("checked") == true){
    //         $('.lift_requirement').show();
    //     }
    // });

    $(document).on("click",'.pooja_room_req', function () {
        const required_value = $(".pooja_room_req input[type='radio']:checked").val();
        const required_body = $(".pooja_room_req input[type='radio']:checked").attr('req-body');
        reqNotReq(required_value, required_body);
    });

    $(document).on("click",'.lift_req', function () {
        const required_value = $(".lift_req input[type='radio']:checked").val();
        const required_body = $(".lift_req input[type='radio']:checked").attr('req-body');
        reqNotReq(required_value, required_body);
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

    //AREA CALCULATE
    $(document).on('keyup',".flor_store_area", function (e) {
        e.preventDefault();
        
        var floor_store_length = $('#floor_store_length').val();
        var floor_store_width = $('#floor_store_width').val();
        var floor_store_area = $('#floor_store_area').val();

        var flor_store_area = plotAreaOtherModal(floor_store_length, floor_store_width);
        $('#floor_store_area').val(flor_store_area);
        //alert(kiosq_area);
    });
    
    $(document).on('keyup',".puja_room_area", function (e) {
        e.preventDefault();
        
        var pooja_room_length = $('#pooja_room_length').val();
        var pooja_room_width = $('#pooja_room_width').val();
        var pooja_room_area = $('#pooja_room_area').val();

        var puja_room_area = plotAreaOtherModal(pooja_room_length, pooja_room_width);
        $('#pooja_room_area').val(puja_room_area);
        //alert(kiosq_area);
    });


    //BUNGALOW BEDROOM
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

    //AREA CALCULATE
    $(document).on('keyup',".bedroom_areaa", function (e) {
        e.preventDefault();
        
        var bedroom_length = $('#bedroom_length').val();
        var bedroom_width = $('#bedroom_width').val();
        var bedroom_area = $('#bedroom_area').val();

        var bedroom_areaa = plotAreaOtherModal(bedroom_length, bedroom_width);
        $('#bedroom_area').val(bedroom_areaa);
        //alert(kiosq_area);
    });

    $(document).on('keyup',".bedroom_toilet_areaa", function (e) {
        e.preventDefault();
        
        var bedroom_toilet_length = $('#bedroom_toilet_length').val();
        var bedroom_toilet_width = $('#bedroom_toilet_width').val();
        var bedroom_toilet_area = $('#bedroom_toilet_area').val();

        var bedroom_toilet_areaa = plotAreaOtherModal(bedroom_toilet_length, bedroom_toilet_width);
        $('#bedroom_toilet_area').val(bedroom_toilet_areaa);
        //alert(kiosq_area);
    });

    $(document).on('keyup',".bedroom_dress_areaa", function (e) {
        e.preventDefault();
        
        var bedroom_dress_length = $('#bedroom_dress_length').val();
        var bedroom_dress_width = $('#bedroom_dress_width').val();
        var bedroom_dress_area = $('#bedroom_dress_area').val();

        var bedroom_dress_areaa = plotAreaOtherModal(bedroom_dress_length, bedroom_dress_width);
        $('#bedroom_dress_area').val(bedroom_dress_areaa);
        //alert(kiosq_area);
    });

    // BEDROOM CHECKBOXES 
    $(document).on('change','.bedroom', function () {

        var bedroom_id = $(this).val();
        if($(this).prop('checked')) {
            $('#bungalow_bedroom_type_detail').append($('.bedroom_modal').html());
            $('#bungalow_bedroom_type_detail').find('#bedroom_type_modal').attr('id','bedroom_type_modal_'+bedroom_id);
        } else {
            $('#bungalow_bedroom_type_detail').find('#bedroom_type_modal_'+bedroom_id).remove('#bedroom_type_modal_'+bedroom_id);
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

    //AREA CALCULATE
    $(document).on('keyup',".basement_areaa", function (e) {
        e.preventDefault();
        
        var basement_length = $('#basement_length').val();
        var basement_width = $('#basement_width').val();
        var basement_area = $('#basement_area').val();

        var basement_areaa = plotAreaOtherModal(basement_length, basement_width);
        $('#basement_area').val(basement_areaa);
        //alert(kiosq_area);
    });

    $(document).on('keyup',".office_areaa", function (e) {
        e.preventDefault();
        
        var office_length = $('#office_length').val();
        var office_width = $('#office_width').val();
        var office_area = $('#office_area').val();

        var office_areaa = plotAreaOtherModal(office_length, office_width);
        $('#office_area').val(office_areaa);
        //alert(kiosq_area);
    });

    $(document).on('keyup',".servent_quarter_areaa", function (e) {
        e.preventDefault();
        
        var servent_quarter_length = $('#servent_quarter_length').val();
        var servent_quarter_width = $('#servent_quarter_width').val();
        var servent_quarter_area = $('#servent_quarter_area').val();

        var servent_quarter_areaa = plotAreaOtherModal(servent_quarter_length, servent_quarter_width);
        $('#servent_quarter_area').val(servent_quarter_areaa);
        //alert(kiosq_area);
    });

    $(document).on('keyup',".parking_garage_areaa", function (e) {
        e.preventDefault();
        
        var parking_garage_length = $('#parking_garage_length').val();
        var parking_garage_width = $('#parking_garage_width').val();
        var parking_garage_area = $('#parking_garage_area').val();

        var parking_garage_areaa = plotAreaOtherModal(parking_garage_length, parking_garage_width);
        $('#parking_garage_area').val(parking_garage_areaa);
        //alert(kiosq_area);
    });

    $(document).on('keyup',".home_theater_areaa", function (e) {
        e.preventDefault();
        
        var home_theater_length = $('#home_theater_length').val();
        var home_theater_width = $('#home_theater_width').val();
        var home_theater_area = $('#home_theater_area').val();

        var home_theater_areaa = plotAreaOtherModal(home_theater_length, home_theater_width);
        $('#home_theater_area').val(home_theater_areaa);
        //alert(kiosq_area);
    });


    
    //BUNGALOW DESIGNS
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

    $(document).on('click','#stepOneBtn', function () {

        $('#previousModalBtn').addClass('hide');
        $('#project_module').html($('#project_modal').html());
        $('#modal_name').text("Project Details");
        $('#nextModalBtn').removeClass('hide');
    });

    $(document).on('click','#stepTwoBtn', function () {

        $('#project_module').html($('#bungalow_entrance_modal').html());
        $('#modal_name').text("Bungalow Entrance"); 
        $('#previousModalBtn').removeClass('hide');
        $('#nextModalBtn').removeClass('hide');
    });

    $(document).on('click','#stepThreeBtn', function () {

        $('#project_module').html($('#bungalow_drawing_hall_modal').html());
        $('#modal_name').text("Bungalow Drawing-Hall");
    });

    $(document).on('click','#stepFourBtn', function () {

        $('#project_module').html($('#bungalow_pantry_modal').html());
        $('#modal_name').text("Bungalow Pantry");
    });

    $(document).on('click','#stepFiveBtn', function () {

        $('#project_module').html($('#bungalow_floor_store_modal').html());
        $('#modal_name').text("Bungalow Floor Store");
    });

    $(document).on('click','#stepSixBtn', function () {

        $('#project_module').html($('#bungalow_bedroom_modal').html());
        $('#modal_name').text("Bungalow Bedroom");
    });

    $(document).on('click','#stepSevenBtn', function () {

        $('#project_module').html($('#bungalow_basement_modal').html());
        // $('#nextModalBtn').addClass('hide');
        $('#modal_name').text("Bungalow Basement");

        // get Built Up Area
        var project_id = $('#project_id').val();
        //alert(project_id);
        const url = "http://192.168.1.99:8080/sdplserver/api/project-builtup-area/"+project_id;
        getBuiltUpArea(url);
    });

    $(document).on('click','#stepEightBtn', function () {

        $('#project_module').html($('#bungalow_designs_modal').html());
        $('#nextModalBtn').addClass('hide');
        $('#modal_name').text("Design Requirements");
    });

    $(document).on('click','#stepNineBtn', function () {

        $('#project_module').html($('#Payment').html());
        $('#nextModalBtn').addClass('hide');
        $('#modal_name').text("Payment");
    });
        
});

