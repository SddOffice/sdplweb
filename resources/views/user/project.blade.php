@extends('layouts.user.app')
@section('page_title', 'Projects')


@section('content')

    @include('user.modal-layouts.bungalow_detail_modal')
    @include('user.modal-layouts.bungalow_detail_modal')
    @include('user.modal-layouts.bungalow_detail_modal')

    <div class="row ">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" id="createProject" class="btn btn-primary btn-flat btn-sm mt-2">Create Project</button>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" id="bungalowPropertyBtn" class="btn btn-primary btn-flat btn-sm mt-2">Bungalow Property</button>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" id="bungalowEntranceModel" class="btn btn-primary btn-flat btn-sm mt-2">Bungalow Entrance</button>
        </div>
    </div> 


    {{$count = ""}}
    @foreach ($projects as $key => $list)
    <div class="row mt-2">
        <div class="col-md-9">
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="card-title">Projects Details</h3>
                            </div>
                            <div class="col-md-8">
                                <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Property</button>
                                <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Entrance</button>
                                <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Drawing Hall</button>
                                <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Pantry</button>
                                <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Floor Store</button>
                                <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Bedroom</button>
                                <button type="button" class="btn btn-outline-dark btn-flat btn-sm">Basement</button>
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
                                    <th style="width: 15%">Client Name</th>
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
                                    <td>{{ucwords($list->client_name)}}</td>

                                    <td>
                                        @foreach ($design_type_name[$key] as $type)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" style="width: 13px; height:13px;" checked disabled><small>{{$type->design_type}}</small>
                                            </div>
                                        @endforeach
                                    </td>
                                    <td >
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

        <div class="col-md-3">
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
                                <td>Property</td>
                                <td >
                                    <button type="button" class="btn btn-secondary btn-flat btn-sm">Edit</button>
                                    <button type="button" class="btn btn-info btn-flat btn-sm">View</button>                                    
                                </td> 
                            </tr>
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
@endsection 