
// function getProjectType(project_group_id){
//     fetch(`get-project-type/${project_group_id}`)
//     .then(response => response.json())
//     .then(response => {
//         if(response.status == 200){
//             $('#project_type_id').html("");
//             $('#project_type_id').html(response.html);
//         }
//     });
// }


//Create Projects
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

function getState(country_id) {
    fetch(`get-state/${country_id}`)
    .then(response => response.json())
    .then(response => {
        $('#state').html("");
        $('#city').html("");
        $('#state').append(response.html);
    });
}	
function getCity(state_id) {
    fetch(`get-city/${state_id}`)
    .then(response => response.json())
    .then(response => {
        $('#city').html("");
        $('#city').append(response.html);
    });
}


//Save ProjectS
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
                $('#create_project_err').html('');
                $('#create_project_err').addClass('alert alert-danger');
                var count = 1;
                $.each(response.errors, function (key, err_value) { 
                    $('#create_project_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                });

            }else{
                $('#create_project_err').html('');
                $('#createProjectModal').modal('hide');
                window.location.reload();

            }
        }
    });
}


//Edit Projects
function editProject(project_id) {
    fetch(`edit-project/${project_id}`)
    .then(response => response.json())
    .then(response => {
        console.log( response);
        if(response.status == 200){ 
            
            $('#createProjectModal').modal('show');
            $('#create_project_err').html('');
            $('#create_project_err').removeClass('alert alert-danger');
            $("#createProjectForm").trigger( "reset" );
            $('#saveProjectBtn').addClass('hide');
            $('#updateProjectBtn').removeClass('hide');
            $('#project_group_id').val(response.project.project_group_id);

            $('#project_type_id').html("");
            $('#project_type_id').append("<option selected disabled>Choose...</option>");

            $.each(response.project_type, function (key, value) { 
                $('#project_type_id').append("<option value='"+value.id+"'>"+value.project_type+"</option>").css("text-transform","capitalize");
            });
            $('#project_type_id').val(response.project.project_type_id);

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

            $('#updateProjectBtn').val(response.project.id);
        }
    });
}

//update project
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
                    $('#create_project_err').html('');
                    $('#create_project_err').addClass('alert alert-danger');
                    var count = 1;
                    $.each(response.errors, function (key, err_value) { 
                        $('#create_project_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                    });
    
                }else{
                    $('#create_project_err').html('');
                    $('#createProjectModal').modal('hide');
                    window.location.reload();
                }
            }
        });
    }
    


//Save Bungalow Property
function saveBungalowProperty(url){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = new FormData($("#bungalowPropertyForm")[0]);
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
                $('#bungalow_property_err').html('');
                $('#bungalow_property_err').addClass('alert alert-danger');
                var count = 1;
                $.each(response.errors, function (key, err_value) { 
                    $('#bungalow_property_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                });

            }else{
                $('#bungalow_property_err').html('');
                $('#bungalowPropertyModel').modal('hide');
                window.location.reload();
            }
        }
    });
}


//Save Bungalow Entrance 
function saveBungalowEntrance(url){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = new FormData($("#bungalowEntranceForm")[0]);
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
                $('#bungalow_entrance_err').html('');
                $('#bungalow_entrance_err').addClass('alert alert-danger');
                var count = 1;
                $.each(response.errors, function (key, err_value) { 
                    $('#bungalow_entrance_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                });

            }else{
                $('#bungalow_entrance_err').html('');
                $('#bungalowEntranceModel').modal('hide');
                window.location.reload();

            }
        }
    });
}


//Save Bungalow Drawing Hall 
function saveBungalowDrawingHall(url){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = new FormData($("#bungalowDrawingHallForm")[0]);
    $.ajax({
        type: "post",
        url: url,
        data: formData,
        dataType: "json",
        cache: false,
        contentType: false, 
        processData: false, 
        success: function (response) {
            console.log(response);
            if(response.status === 400)
            {
                $('#bungalow_drawinghall_err').html('');
                $('#bungalow_drawinghall_err').addClass('alert alert-danger');
                var count = 1;
                $.each(response.errors, function (key, err_value) { 
                    $('#bungalow_drawinghall_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                });

            }else{
                $('#bungalow_drawinghall_err').html('');
                $('#bungalowDrawingHallModel').modal('hide');
                window.location.reload();

            }
        }
    });
}


//Save Bungalow Pantry 
function saveBungalowPantry(url){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = new FormData($("#bungalowPantryForm")[0]);
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
                $('#bungalow_pantry_err').html('');
                $('#bungalow_pantry_err').addClass('alert alert-danger');
                var count = 1;
                $.each(response.errors, function (key, err_value) { 
                    $('#bungalow_pantry_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                });

            }else{
                $('#bungalow_pantry_err').html('');
                $('#bungalowPantryModel').modal('hide');
                window.location.reload();

            }
        }
    });
}


//Save Bungalow Floor Store 
function saveBungalowFloorStore(url){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = new FormData($("#bungalowFloorStoreForm")[0]);
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
                $('#bungalow_floorstore_err').html('');
                $('#bungalow_floorstore_err').addClass('alert alert-danger');
                var count = 1;
                $.each(response.errors, function (key, err_value) { 
                    $('#bungalow_floorstore_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                });

            }else{
                $('#bungalow_floorstore_err').html('');
                $('#bungalowFloorStoreForm').modal('hide');
                window.location.reload();

            }
        }
    });
}


//Save Bungalow Bedroom Model 
function saveBungalowBedroom(url){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = new FormData($("#bungalowBedroomForm")[0]);
    $.ajax({
        type: "post",
        url: url,
        data: formData,
        dataType: "json",
        cache: false,
        contentType: false, 
        processData: false, 
        success: function (response) {
            console.log(response);
            if(response.status === 400)
            {
                $('#bungalow_bedroom_err').html('');
                $('#bungalow_bedroom_err').addClass('alert alert-danger');
                var count = 1;
                $.each(response.errors, function (key, err_value) { 
                    $('#bungalow_bedroom_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                });

            }else{
                $('#bungalow_bedroom_err').html('');
                $('#bungalowBedroomForm').modal('hide');
                window.location.reload();

            }
        }
    });
}


//Save Bungalow Basement Model 
function saveBungalowBasement(url){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = new FormData($("#bungalowBasementForm")[0]);
    $.ajax({
        type: "post",
        url: url,
        data: formData,
        dataType: "json",
        cache: false,
        contentType: false, 
        processData: false, 
        success: function (response) {
            console.log(response);
            if(response.status === 400)
            {
                $('#bungalow_basement_err').html('');
                $('#bungalow_basement_err').addClass('alert alert-danger');
                var count = 1;
                $.each(response.errors, function (key, err_value) { 
                    $('#bungalow_basement_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                });

            }else{
                $('#bungalow_basement_err').html('');
                $('#bungalowBasementForm').modal('hide');
                window.location.reload();

            }
        }
    });
}





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
