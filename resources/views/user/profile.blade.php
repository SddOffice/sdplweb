@extends('layouts.user.app')
@section('page_title', 'profile')

@section('content')

    <div class="container-fluid">
        <!-- <div class="content-wrapper"> -->
            <section class="content">
                <div class="row mb-3"></div>
                <div class="row ">
                    <div class="col-md-5">
                        <!-- <div class="col-md-6"> -->
                            <div class="card card-primary">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"src="{{asset('public/sdpl-assets/images/logo/user.png')}}"alt="User profile picture">
                                    </div>  
                                    <h3 class="profile-username text-center" id="user_name">{{$user_detail->name}}</h3>
                                    <p class="text-muted text-center" id="user_id">{{$user_detail->id}}</p> 
                                    <ul class="list-group list-group-unbordered text-light mb-3">
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="float-right" id="user_email">{{$user_detail->email}}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Mobile</b> <a class="float-right" id="user_mobile">{{$user_detail->mobile_no}}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Country</b> <a class="float-right" id="">{{$user_detail->country_name}}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>State</b> <a class="float-right" id="">{{$user_detail->state_name}}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>City</b> <a class="float-right" id="">{{$user_detail->city_name}}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Address</b> <a class="float-right" id="">{{$user_detail->address}}</a>
                                        </li>
                                    </ul>
                                    <!-- Button trigger modal -->

                                    <button type="button" class="btn btn-primary btn-sm" id="updateUserDetailBtn" value="{{$user_detail->id}}">Update Profile</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="userDetailModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Update Your Profile</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form class="row g-2" id="userDetailForm">
                                                    @csrf
                                                    <div id="user_detail_err"></div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="name" id="name" class="form-control form-control-sm"  placeholder="Enter your name" required>   
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="email" name="email" id="email" class="form-control form-control-sm"  placeholder="Enter email id" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" name="mobile_no" id="mobile_no" class="form-control form-control-sm"  placeholder="Enter mobile no" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        
                                                        <select name="country" id="country" class="form-select form-select-sm" onchange="getState(this.value);">
                                                            <option selected disabled>Choose Country</option>
                                                            @foreach ($countries as $country)
                                                                <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select name="state" id="state" class="form-select form-select-sm" >
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select name="city" id="city" class="form-select form-select-sm">

                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea name="address" id="address" class="form-control form-control-sm"  placeholder="Enter your address" rows="2"></textarea>
                                                    </div>
                                                </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" id="saveUserDetailBtn" class="btn btn-primary btn-sm">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>

                    <div class="col-md-7">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card text-center text-white bg-secondary mb-3" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <h5 style="font-size: 2rem;">Total Projects</h5>
                                        <p style="font-size: 1.5rem;  margin-bottom: 0rem;" >5</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-center text-white bg-primary mb-3" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <h5 style="font-size: 2rem;">Running Project</h5>
                                        <p  style="font-size: 1.5rem; margin-bottom: 0rem;" >2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Running Projects</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-success table-striped">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Project Name</th>
                                            <th>Start Date</th>
                                            <th>Project Type</th>
                                            <th>Budget</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Global Medicity</td>
                                            <td>12/03/2022</td>
                                            <td>Interior</td>
                                            <td>90,0000</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bunglow</td>
                                            <td>01/01/2021</td>
                                            <td>Structure</td>
                                            <td>80,0000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Completed Projects</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-success table-striped">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Project Name</th>
                                            <th>Completed Date</th>
                                            <th>Project Type</th>
                                            <th>Budget</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Global Medicity</td>
                                            <td>12/03/2022</td>
                                            <td>Residential</td>
                                            <td>120000</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Shri Bhawan</td>
                                            <td>01/01/2021</td>
                                            <td>Bunglow</td>
                                            <td>7834585</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- </div> -->
    </div>


@endsection

@section('script')
    <script>
         $(document).ready(function () {

            $(document).on('click','#updateUserDetailBtn', function (e) {
                e.preventDefault();
                const user_id = $(this).val();
                $('#userDetailModal').modal('show');
                $('#user_detail_err').html('');
                $('#user_detail_err').removeClass('alert alert-danger');
                $("#userDetailForm").trigger("reset");

                editUserDetail(user_id);
              
            });

            $(document).on('change','#state', function () {
                const state_id = $(this).val();
                getCity(state_id);
            });
         });

         function editUserDetail(user_id) {
            $.ajax({
                type: "get",
                url: "edit-user-detail/"+user_id,
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    if(response.status == 200){
                        $('#name').val(response.user_detail.name);
                        $('#email').val(response.user_detail.email);
                        $('#mobile_no').val(response.user_detail.mobile_no);
                        $('#country').val(response.user_detail.country);
                        getState(response.user_detail.country)
                        getCity(response.user_detail.state)
                        
                        setTimeout(() => {
                            $('#state').val(response.user_detail.state);
                        }, 300);
                        
                        
                        setTimeout(() => {
                            $('#city').val(response.user_detail.city);
                        }, 300);

                        $('#address').val(response.user_detail.address);
                    }
                }
            });
        }

        function updateUserDetail(user_id) {
            alert("user_id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var formData = new FormData($("#userDetailForm")[0]);
        $.ajax({
            type: "post",
            url: "update-user-detail/"+user_id,
            data: formData,
            dataType: "json",
            cache: false,
            contentType: false, 
            processData: false, 
            success: function (response) {
                if(response.status === 400)
                {
                    $('#user_detail_err').html('');
                    $('#user_detail_err').addClass('alert alert-danger');
                    var count = 1;
                    $.each(response.errors, function (key, err_value) { 
                        $('#user_detail_err').append('<span>' + count++ +'. '+ err_value+'</span></br>');
                    });
                }else{
                    $('#user_detail_err').html('');
                    $('#designModal').modal('hide');
                    window.location.reload();
                }
            }
        });
        }
    </script>

@endsection

