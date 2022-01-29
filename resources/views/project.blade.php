@extends('layouts.app')
@section('page_title','Project')

@section('content')

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center"  style="background-image:url(public/sdpl-assets/images/banner/pd.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white">Projects</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li>Project</li>
                        </ul>
                    </div>
                
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full small-device  p-t80 p-b50 bg-gray">
        <div class="container">
            <!-- PAGINATION START -->
            <div class="filter-wrap p-b30 text-center">
                <ul class="filter-navigation masonry-filter text-uppercase">
                    <li class="active"><a data-filter="*" data-hover="All" href="#">All</a></li>
                    <li><a data-filter=".cat-1" data-hover="Hotel" href="javascript:;">Hotel</a></li>
                    <li><a data-filter=".cat-4" data-hover="Hospital" href="javascript:;">Hospital</a></li>
                    <li><a data-filter=".cat-2" data-hover="Bunglow" href="javascript:;">Bunglow</a></li>
                    <li><a data-filter=".cat-3" data-hover="Restaurant" href="javascript:;">Restaurant</a></li>
                    <li><a data-filter=".cat-5" data-hover="Flats" href="javascript:;">Flats</a></li>
                    <li><a data-filter=".cat-6" data-hover="Living Area" href="javascript:;">Living Area</a></li>
                </ul>
            </div>
            <!-- PAGINATION END -->
            <!-- GALLERY CONTENT START -->
            <div class="portfolio-wrap mfp-gallery work-grid row clearfix">
                <!-- COLUMNS 1 -->
                <div class="masonry-item cat-1  col-md-6 col-sm-6 m-b30">
                    <div class="wt-box">
                        <div class="work-hover-grid">
                            <img src="public/sdpl-assets/images/our_work/new2.jpg" alt=""/>
                            <div class="work-hover-discription">
                                <h4>Arihant RajVillas</h4>
                                <h4><a href="{{url('project-detail')}}" class="site-button m-t10 m-b30">Project Detail</a></h4>
                            </div>
                        </div>                            
                    </div>
                </div>
                <!-- COLUMNS 2 -->
                <div class="masonry-item cat-2 col-md-6 col-sm-6 m-b30">
                    <div class="wt-box">
                        <div class="work-hover-grid">
                            <img src="public/sdpl-assets/images/our_work/new1.jpg" alt=""/>
                            <div class="work-hover-discription">
                                <h4>Shawn Elizey</h4>
                                <h4><a href="{{url('project-detail1')}}" class="site-button m-t10 m-b30">Project Detail</a></h4>
                            </div>
                        </div>                            
                    </div>                            
                </div>
                <!-- COLUMNS 3 -->
                <div class="masonry-item cat-3 col-md-6 col-sm-6 m-b30">
                    <div class="wt-box">
                        <div class="work-hover-grid">
                            <img src="public/sdpl-assets/images/our_work/new3.jpg" alt=""/>
                            <div class="work-hover-discription">
                                <h4>Hotel Viraj</h4>
                                <h4><a href="{{url('project-detail2')}}" class="site-button m-t10 m-b30">Project Detail</a></h4>
                            </div>
                        </div>                            
                    </div>                            
                </div>
                <!-- COLUMNS 4 -->
                <div class="masonry-item cat-4 col-md-6 col-sm-6 m-b30">
                    <div class="wt-box">
                        <div class="work-hover-grid">
                            <img src="public/sdpl-assets/images/our_work/new4.jpg" alt=""/>
                            <div class="work-hover-discription">
                                <h4>Royal Orbit</h4>
                                <h4><a href="{{url('royalorbit')}}" class="site-button m-t10 m-b30">Project Detail</a></h4>
                            </div>
                        <a href="#"></a>
                        </div>                            
                    </div>                            
                </div>
                {{--<!-- COLUMNS 5 -->
                <div class="masonry-item cat-5 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <div class="work-hover-grid">
                            <img src="public/sdpl-assets\images\project/AGRAWALji.jpg" alt=""/>
                            <div class="work-hover-discription">
                                <h4>Events and More</h4>
                                <h4><a href="{{url('project-detail2')}}" class="site-button m-t10 m-b30">Project Detail</a></h4>
                            </div>
                        <a href="#"></a>
                        </div>                            
                    </div>                            
                </div>
                <!-- COLUMNS 6 -->
                <div class="masonry-item cat-6 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <div class="work-hover-grid">
                            <img src="public/sdpl-assets\images\project/ankitji.jpg" alt=""/>
                            <div class="work-hover-discription">
                                <h4>Remind~Me More</h4>
                                <h4><a href="{{url('project-detail2')}}" class="site-button m-t10 m-b30">Project Detail</a></h4>
                            </div>
                        <a href="#"></a>
                        </div>                            
                    </div>                            
                </div>
                <!-- COLUMNS 7 -->
                <div class="masonry-item cat-1 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <div class="work-hover-grid">
                            <img src="public/sdpl-assets\images\exterior/OxyHomes.jpg" alt=""/>
                            <div class="work-hover-discription">
                                <h4>Workout Buddy</h4>
                                <h4><a href="{{url('project-detail2')}}" class="site-button m-t10 m-b30">Project Detail</a></h4>
                            </div>
                        <a href="#"></a>
                        </div>                            
                    </div>                            
                </div>
                <!-- COLUMNS 8 -->
                <div class="masonry-item cat-2 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <div class="work-hover-grid">
                            <img src="public/sdpl-assets\images\pooja-room/pujaroom3.jpg" alt=""/>
                            <div class="work-hover-discription">
                                <h4>Speed Detector</h4>
                                <h4><a href="{{url('project-detail2')}}" class="site-button m-t10 m-b30">Project Detail</a></h4>
                            </div>
                        <a href="#"></a>
                        </div>                            
                    </div>                            
                </div>
                
                <!-- COLUMNS 9 -->
                <div class="masonry-item cat-3 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <div class="work-hover-grid">
                            <img src="public/sdpl-assets\images\pooja-room/pujaroom3.jpg" alt=""/>
                            <div class="work-hover-discription">
                                <h4>Generic Apps</h4>
                                <h4><a href="{{url('project-detail2')}}" class="site-button m-t10 m-b30">Project Detail</a></h4>
                            </div>
                        <a href="#"></a>
                        </div>                            
                    </div>                            
                </div>  --}}     

            </div>            
        </div>
    </div>
    

@endsection