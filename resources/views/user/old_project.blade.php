@extends('layouts.user.app')
@section('page_title', 'Projects')


@section('content')


    @include('user.modal-layouts.bungalow_detail_modal')
  
    <div class="row py-2">
        <div class="text-right mt-2">
            <button type="button" id="mainModalBtn" modal-name="createProject" class="btn btn-primary btn-flat btn-sm">Create New Project</button>
            {{-- <button type="button" id="createProject" class="btn btn-primary btn-flat btn-sm">Create New Project</button> --}}
        </div>
    </div> 

    {{-- {{$count = ""}}
    @foreach ($projects as $key => $list)
        <div class="row py-1">
            <div class="col-md-9 mt-3">
                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3 class="card-title">Projects Details</h3>
                                </div>
                                <div class="col-md-8">
                                    <button type="button" value="{{$list->id}}" class="btn btn-primary btn-flat btn-sm mt-2 bungalowEntrance">Entrance</button>
                                    <button type="button" value="{{$list->id}}" class="btn btn-primary btn-flat btn-sm mt-2 bungalowDrawingHallBtn">Drawing Hall</button>
                                    <button type="button" value="{{$list->id}}" class="btn btn-primary btn-flat btn-sm mt-2 bungalowPantryBtn">Pantry</button>
                                    <button type="button" value="{{$list->id}}" class="btn btn-primary btn-flat btn-sm mt-2 bungalowFloorStoreBtn">Floor Store</button>
                                    <button type="button" value="{{$list->id}}" class="btn btn-primary btn-flat btn-sm mt-2 bungalowBedroomBtn">Bedroom</button>
                                    <button type="button" value="{{$list->id}}" class="btn btn-primary btn-flat btn-sm mt-2 bungalowBasementBtn">Basement</button>
                                </div>
                                <div class="col-md-1">
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 150px;">
                            <table class="table table-striped table-head-fixed projects">
                                <thead>
                                    <tr>
                                        <th style="width: 2%">#</th>
                                        <th style="width: 15%">Project Name</th>
                                        <th style="width: 10%">Project Type</th>
                                        <th style="width: 25%">Design Type</th>
                                        <th style="width: 15%" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="mb-2">
                                        <td>{{++$count}}</td>
                                        <td>
                                            <span>{{ucwords($list->first_name . " " . $list->last_name)}}</span><br/>
                                            <small>Created On - {{date('d-m-Y', strtotime($list->create_date))}}</small>
                                        </td>
                                        <td>{{ucwords($list->project_type)}}</td>
                                        <td> --}}
                                            {{-- @foreach ($design_type_name[$key] as $type)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" style="width: 13px; height:13px;" checked disabled><small>{{$type->design_type}}</small>
                                                </div>
                                            @endforeach --}}
                                        {{-- </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-dark btn-flat btn-sm editProjectBtn" value="{{$list->id}}">Edit</button>
                                            <button type="button" class="btn btn-outline-info btn-flat btn-sm viewProjectBtn" value="{{$list->id}}">Project Detail</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">
                                            <div class="progress progress-sm mt-2">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div> --}}

            {{-- <div class="col-md-3 mt-3">
                <div class="card">
                    <div class="card-body table-responsive p-0" style="height: 200px;">
                        <table class="table table-striped table-head-fixed projects">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>    
                                <tr class="mb-2">
                                    <td>1</td>
                                    <td>Entrance </td>
                                    <td >
                                        <button type="button" class="btn btn-secondary btn-flat btn-sm editEntranceBtn" value="{{$list->id}}">Edit</button>
                                        <button type="button" class="btn btn-info btn-flat btn-sm viewEntranceBtn" value="{{$list->id}}">View</button>                                    
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <td>2</td>
                                    <td>Drawing Hall </td>
                                    <td >
                                        <button type="button" class="btn btn-secondary btn-flat btn-sm editDrawingHallBtn" value="{{$list->id}}">Edit</button>
                                        <button type="button" class="btn btn-info btn-flat btn-sm viewDrawingHallBtn" value="{{$list->id}}">View</button>                                    
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <td>3</td>
                                    <td> Pantry</td>
                                    <td >
                                        <button type="button" class="btn btn-secondary btn-flat btn-sm editPantryBtn" value="{{$list->id}}">Edit</button>
                                        <button type="button" class="btn btn-info btn-flat btn-sm viewPantryBtn" value="{{$list->id}}">View</button>                                    
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <td>4</td>
                                    <td>Floor Store</td>
                                    <td >
                                        <button type="button" class="btn btn-secondary btn-flat btn-sm editFloorStoreBtn" value="{{$list->id}}">Edit</button>
                                        <button type="button" class="btn btn-info btn-flat btn-sm viewFloorStoreBtn" value="{{$list->id}}">View</button>                                    
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <td>5</td>
                                    <td>Bedroom</td>
                                    <td >
                                        <button type="button" class="btn btn-secondary btn-flat btn-sm editBedroomBtn" value="{{$list->id}}">Edit</button>
                                        <button type="button" class="btn btn-info btn-flat btn-sm viewBedroomBtn" value="{{$list->id}}">View</button>                                    
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <td>6</td>
                                    <td>Basement</td>
                                    <td >
                                        <button type="button" class="btn btn-secondary btn-flat btn-sm editBasementBtn" value="{{$list->id}}">Edit</button>
                                        <button type="button" class="btn btn-info btn-flat btn-sm viewBasementBtn" value="{{$list->id}}">View</button>                                    
                                    </td>
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
        {{-- </div>
    @endforeach --}}

    <div class="py-2"></div>
    @foreach($projects as $key => $list)
        <div class="card p-2">
            {{-- <h6 class="border-bottom pb-2 mb-0"><strong>Existing Projects</strong></h6> --}}
            <div class="d-flex text-muted pt-2">
                <img src="{{asset('public/sdpl-assets/images/logo/businessman.png')}}" width="35" height="35" class="me-3" alt="..."> 
                <div class="pb-1 mb-0 w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark editProjectBtn" modal-name="createProject" url="edit-project" project-id="{{$list->id}}">{{ucwords($list->project_type)}}</strong>
                        <a href="#">Date & Time - {{date('d-m-Y', strtotime($list->create_date)) . " " . $list->create_time}} </a>
                    </div>
                    <span class="d-block">{{$list->first_name . " " . $list->last_name}}</span>
                </div>
            </div> 
        </div>
    @endforeach

@endsection
   




@section('script')

    <script src="{{asset('public/sdpl-assets/user/js/modal/residential.js')}}" ></script>

    <script>
        $(document).ready(function () {

            $(document).on('click','#mainModalBtn', function () {
                var modal_name = $(this).attr('modal-name');
                var new_modal_name = modal_name+'Modal';
                var form_name = modal_name+'Form';
                $('.main_modal').attr('id',new_modal_name);
                $('.form_name').attr('id',form_name);
                
                $('#project_module').html("");
                $('#project_module').html($('#project_modal').html());


                $('#'+new_modal_name).modal('show');
            });

            $(document).on('click','#saveModalBtn', function (e) {
                e.preventDefault();
                var modal_name = $('.main_modal').attr('id');
                var form_name = $('.form_name').attr('id');

                var modal_url = $('#project_url').attr('url');
                const url = "{{MyApp::API_URL}}"+modal_url;

                saveProject(modal_name,form_name,url);
            });

            $(document).on('click','.editProjectBtn', function (e) {
                e.preventDefault();
                const project_id = $(this).attr("project-id");
                var modal_name = $(this).attr('modal-name');
                var new_modal_name = modal_name+'Modal';
                var form_name = modal_name+'Form';
                $('.main_modal').attr('id',new_modal_name);
                $('.form_name').attr('id',form_name);
                
                var modal_url = $(this).attr('url');
                const url = "{{MyApp::API_URL}}"+modal_url+"/"+project_id;
               editProject(new_modal_name,form_name,url);
            });

            $(document).on('click','#updateModalBtn', function (e) {
                e.preventDefault();
                const project_id = $(this).val();
                var modal_name = $('.main_modal').attr('id');
                var new_modal_name = modal_name+'Modal';
               
                var form_name = $('.form_name').attr('id');

                var modal_url = $('#updateModalBtn').attr('url');
                const url = "{{MyApp::API_URL}}"+modal_url+"/"+project_id;
                updateProject(new_modal_name,form_name,url);
            });

            

            
            $(document).on('click','#saveBungalowEntranceBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}bungalow-entrance";
            saveBungalowEntrance(url);
            });

            $(document).on('click','#editEntranceBtn', function (e) {
                e.preventDefault();
                const project_id = $(this).val();
                //alert(project_id);
                editBungalowEntrance(project_id);
            });

            $(document).on('click','#updateBungalowEntranceBtn', function (e) {
            e.preventDefault();
            var project_id = $(this).val();
            const url = "{{MyApp::API_URL}}update-bungalow-entrance/"+project_id;
            updateBungalowEntrance(url);
            });

           
            $(document).on('click','#savebungalowDrawingHallBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}bungalow-drawing-hall";
            saveBungalowDrawingHall(url);
            });

            $(document).on('click','#savebungalowPantryBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}bungalow-pantry";
            saveBungalowPantry(url);
            });

            $(document).on('click','#savebungalowFloorStoreBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}bungalow-floor-store";
            saveBungalowFloorStore(url);
            });

            $(document).on('click','#savebungalowBedroomBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}bungalow-bedroom";
            saveBungalowBedroom(url);
            });

            $(document).on('click','#savebungalowBasementBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}bungalow-basement";
            saveBungalowBasement(url);
            });



            
        });
    </script>
@endsection 


