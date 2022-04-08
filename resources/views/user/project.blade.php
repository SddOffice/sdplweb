@extends('layouts.user.app')
@section('page_title','Projects')


@section('content')

    @include('user.modal-layouts.bungalow_detail_modal')
  
    <div class="py-2"></div>
    <div class="p-3 shadow-sm">
        <h5 class="border-bottom pb-2 mb-0">All Projects</h5>
        @foreach($projects as $key => $list)
            <div class="d-flex text-muted pt-3">
                <img class="me-3" src="{{asset('public/sdpl-assets/user/images/bungalow_details/report.png')}}" alt="" width="32" height="32">
                <div class="pb-2 mb-0 small lh-sm border-bottom w-100 show_cursor editProjectBtn" modal-name="createProject" url="edit-project" project-id="{{$list->id}}">
                    <div class="d-flex justify-content-between">
                        <h6><a href="#"><strong class="text-gray-dark">{{ucwords($list->project_type)}}</strong></a></h6> 
                        <a href="#">{{date('d-m-Y -', strtotime($list->create_date)) . "  ". $list->create_time}}</a>
                    </div>
                    <h6> <span class="d-block">{{ucwords($list->first_name . " " . $list->last_name)}}</span></h6>
                </div>
            </div> 
        @endforeach  
    </div>

@endsection
   


@section('script')

    <script src="{{asset('public/sdpl-assets/user/js/modal/residential.js')}}" ></script>

    <script>
        $(document).ready(function () {
            
            $(document).on('click','#mainModalBtn', function (e) {
                e.preventDefault();
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
                if(project_id > 0){
                    editBungalow(url,function_name);
                } 
            });

            $(document).on('click','#updateModalBtn', function (e) {
                e.preventDefault();
                const project_id = $(this).val();
                var modal_url = $(this).attr('url');
                const url = "{{MyApp::API_URL}}"+modal_url+"/"+project_id;
                updateProject(url);
            });

            $(document).on('click','#previousModalBtn', function (e) {
                e.preventDefault();
                previousModal();
                const project_id = $("#project_id").val();
                var modal_url = $("#project_url").attr('url');
                var function_name = $("#project_url").attr("function-name");
                const url = "{{MyApp::API_URL}}edit-"+modal_url+"/"+project_id;
                if(project_id > 0){
                    editBungalow(url,function_name);
                }
            });

        });

    </script>

@endsection 


