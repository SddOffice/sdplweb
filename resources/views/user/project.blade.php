@extends('layouts.user.app')
@section('page_title', 'Projects')


@section('content')


    @include('user.modal-layouts.bungalow_detail_modal')
  
    {{-- <div class="row py-2">
        <div class="text-right mt-2">
            <button type="button" id="createProject" class="btn btn-primary btn-flat btn-sm">Create New Project</button>
        </div>
    </div>  --}}

    {{$count = ""}}
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
                                    {{-- <button type="button" id="bungalowPropertyBtn" value="{{$list->id}}" class="btn btn-primary btn-flat btn-sm mt-2">Property</button> --}}
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
                                        <td>
                                            {{-- @foreach ($design_type_name[$key] as $type)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" style="width: 13px; height:13px;" checked disabled><small>{{$type->design_type}}</small>
                                                </div>
                                            @endforeach --}}
                                        </td>
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
            </div>

            <div class="col-md-3 mt-3">
                <div class="card">
                    <div class="card-body table-responsive p-0" style="height: 200px;">
                        <table class="table table-striped table-head-fixed projects">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>    
                                <tr class="mb-2">
                                    <td>#</td>
                                    <td>Entrance </td>
                                    <td >
                                        <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                        <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <td>#</td>
                                    <td>Drawing Hall </td>
                                    <td >
                                        <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                        <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <td>#</td>
                                    <td> Pantry</td>
                                    <td >
                                        <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                        <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <td>#</td>
                                    <td>Floor Store</td>
                                    <td >
                                        <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                        <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <td>#</td>
                                    <td>Bedroom</td>
                                    <td >
                                        <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                        <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                                    </td>
                                </tr>
                                <tr class="mb-2">
                                    <td>#</td>
                                    <td>Basement</td>
                                    <td >
                                        <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                        <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                                    </td>
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach 
@endsection
  


@section('script')

    <script src="{{asset('public/sdpl-assets/user/js/modal/residential.js')}}" ></script>

    <script>
        $(document).ready(function () {

            $(document).on('click','#saveProjectBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}project";
            // alert(url);
            saveProject(url);
            });

            $(document).on('click','#updateProjectBtn', function (e) {
            e.preventDefault();
            var project_id = $(this).val();
            const url = "{{MyApp::API_URL}}update-project/"+project_id;
            updateProject(url);
            });

            // $(document).on('click','#saveBungalowPropertyBtn', function (e) {
            // e.preventDefault();
            // const url = "{{MyApp::API_URL}}bungalow-property";
            // //alert(url);
            // saveBungalowProperty(url);
            // });

            $(document).on('click','#saveBungalowEntranceBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}bungalow-entrance";
            //alert(url);
            saveBungalowEntrance(url);
            });
           
            $(document).on('click','#savebungalowDrawingHallBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}bungalow-drawing-hall";
            //alert(url);
            saveBungalowDrawingHall(url);
            });

            $(document).on('click','#savebungalowPantryBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}bungalow-pantry";
            //alert(url);
            saveBungalowPantry(url);
            });

            $(document).on('click','#savebungalowFloorStoreBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}bungalow-floor-store";
            //alert(url);
            saveBungalowFloorStore(url);
            });

            $(document).on('click','#savebungalowBedroomBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}bungalow-bedroom";
            //alert(url);
            saveBungalowBedroom(url);
            });

            $(document).on('click','#savebungalowBasementBtn', function (e) {
            e.preventDefault();
            const url = "{{MyApp::API_URL}}bungalow-basement";
            //alert(url);
            saveBungalowBasement(url);
            });
            
        });
    </script>
@endsection 