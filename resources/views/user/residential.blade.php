@extends('layouts.user.app')
@section('page_title', 'residential')


@section('content')

    <div class="py-4">
        <div class="row">
            <div class="row">
                <div class="col-md-2 offset-md-1">
                    <div class="card shadow-sm" style="height:150px;">
                        <div class="card-body">
                            <a href="#"><img src="{{asset('public/sdpl-assets/images/bunglows/dattsolitaire.jpg')}}" class="img-thumbnail" alt="..." ></a>
                            <a href="#"><h6 style="text-align: center; margin-top:10px;">Hi-rise Apartment</h6></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card shadow-sm" style="height:150px;">
                        <div class="card-body">
                            <a href="#"><img src="{{asset('public/sdpl-assets/images/bunglows/shrikrishna.jpg')}}" class="img-thumbnail" alt="..." ></a>
                        </div>
                        <div class="card-footer">
                            <a href="#"><h6 style="text-align: center; margin-top:10px;">Mid-rise Apartment</h6></a>
                        </div>
                    </div>

                </div> 
                <div class="col-md-2">
                    <div class="card shadow-sm" style="height:150px;">
                        <div class="card-body">
                            <a href="#"><img src="{{asset('public/sdpl-assets/images/bunglows/amantiwariji.jpg')}}" class="img-thumbnail" alt="..." ></a>
                        </div>
                        <div class="card-footer">
                            <a href="#"><h6 style="text-align: center; margin-top:10px;">Bungalow</h6></a>
                        </div>
                    </div>
                </div> 
                <div class="col-md-2">
                    <div class="card shadow-sm" style="height:150px;">
                        <div class="card-body">
                            <a href="#"><img src="{{asset('public/sdpl-assets/images/bunglows/snehgreen.jpg')}}" class="img-thumbnail" alt="..."></a>
                        </div>
                        <div class="card-footer">
                            <a href="#"><h6 style="text-align: center; margin-top:10px;">Duplex</h6></a>
                        </div>
                    </div>
                </div>    
                <div class="col-md-2">
                    <div class="card shadow-sm" style="height:150px;">
                        <div class="card-body">
                            <a href="#"><img src="{{asset('public/sdpl-assets/images/bunglows/shawnelizey.jpg')}}" class="img-thumbnail" alt="..."></a>
                        </div>
                        <div class="card-footer">
                            <a href="#"><h6 style="text-align: center; margin-top:10px;">House/Flat</h6></a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    

@endsection