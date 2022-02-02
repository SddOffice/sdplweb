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