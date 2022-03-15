@extends('layouts.user.app')
@section('page_title','Projects')


@section('content')

    @include('user.modal-layouts.bungalow_detail_modal')
  
    <div class="py-2"></div>
    @foreach($projects as $key => $list)
        <div class="card p-2">
            <div class="d-flex text-muted pt-2">
                <img src="{{asset('public/sdpl-assets/images/logo/businessman.png')}}" width="35" height="35" class="me-3" alt="..."> 
                <div class="pb-1 mb-0 w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark editProjectBtn" modal-name="createProject" url="edit-project" project-id="{{$list->id}}">{{ucwords($list->project_type)}}</strong>
                        <small>{{date('d-m-Y', strtotime($list->create_date)) . " " . $list->create_time}}</small>
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

                $('#project_module').html("");
                $('#project_module').html($('#project_modal').html());   
            });

            $(document).on('click','.editProjectBtn', function (e) {
                e.preventDefault();
                const project_id = $(this).attr("project-id");
                $('#modal_name').text("Project Details");
                var modal_url = $(this).attr('url');
                const url = "{{MyApp::API_URL}}"+modal_url+"/"+project_id;
                editProject(url);
            });

            $(document).on('click','#nextModalBtn', function (e) {
                e.preventDefault();

                nextModal();
                const project_id = $("#project_id").val();
                var modal_url = $("#project_url").attr('url');
                var function_name = $("#project_url").attr("function-name");
                const url = "{{MyApp::API_URL}}edit-"+modal_url+"/"+project_id;
                editBungalow(url,function_name);  
            });

            $(document).on('click','#updateModalBtn', function (e) {
                e.preventDefault();

                const project_id = $(this).val();
                var modal_url = $(this).attr('url');
                const url = "{{MyApp::API_URL}}"+modal_url+"/"+project_id;

                alert(url);
                updateProject(url);
            });

            $(document).on('click','#previousModalBtn', function (e) {
                e.preventDefault();

                previousModal();
            });

            // $(document).on('click','#saveBungalowEntranceBtn', function (e) {
            // e.preventDefault();
            // const url = "{{MyApp::API_URL}}bungalow-entrance";
            // saveBungalowEntrance(url);
            // });  
        });

    </script>

@endsection 


