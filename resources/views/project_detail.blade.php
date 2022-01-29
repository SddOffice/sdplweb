@extends('layouts.app')
@section('page_title','project_details')

@section('style')
    <style>
       
    </style>  
@endsection

@section('content')


    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center"  style="background-image:url(public/sdpl-assets/images/banner/pd.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white">Project Details</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="javascript:void(0);">Project Detail</a></li>
                        </ul>
                    </div>
                
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!--WELCOME SECTION START-->
        <!-- SECTION CONTENT START -->
        <div class="section-full small-device  p-tb80">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <!-- BLOG START -->
                        <div class="blog-post date-style-1 blog-detail text-black">
                            <div class="wt-post-media">
                                <!--Fade slider-->
                                <div class="owl-carousel owl-fade-slider-one owl-btn-vertical-center m-b30">
                                
                                    <div class="item">
                                        <div class="aon-thum-bx">
                                            <img src="public/sdpl-assets/images/our_work/new2.jpg" alt="">
                                        </div>
                                    </div>
                                    {{--
                                    <div class="item">
                                        <div class="aon-thum-bx">
                                            <img src="public/sdpl-assets/images/our_work/shawn-elizey-800x533.jpg" alt="">
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <div class="aon-thum-bx">
                                            <img src="public/sdpl-assets/images/our_work/vijan-mahal-800x533.jpg" alt="">
                                        </div>
                                    </div>   --}}                                 
                                </div>
                                <!--fade slider END-->
                            </div>
                        </div>

                        <!-- OUR CLIENT -->
                        <div class="widget widget_gallery mfp-gallery">
                            <h4 class="widget-title">Our Gallery</h4>
                            <div class="owl-carousel widget-gallery p-t10 owl-btn-vertical-center">
                            
                                <!-- COLUMNS 1 --> 
                                <div class="item">
                                    <div class="wt-post-thum">
                                        <a href="public/sdpl-assets/images/our_work/new2.jpg" class="mfp-link" ><img src="public/sdpl-assets/images/our_work/new2.jpg" alt=""></a>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 --> 
                                <div class="item">
                                    <div class="wt-post-thum">
                                        <a href="public/sdpl-assets/images/our_work/new2.jpg" class="mfp-link" ><img src="public/sdpl-assets/images/our_work/new2.jpg" alt=""></a>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 --> 
                                <div class="item">
                                    <div class="wt-post-thum">
                                        <a href="public/sdpl-assets/images/our_work/new2.jpg" class="mfp-link" ><img src="public/sdpl-assets/images/our_work/new2.jpg" alt=""></a>
                                    </div>
                                </div>
                                
                                <!-- COLUMNS 1 --> 
                                <div class="item">
                                    <div class="wt-post-thum">
                                        <a href="public/sdpl-assets/images/our_work/new2.jpg" class="mfp-link" ><img src="public/sdpl-assets/images/our_work/new2.jpg" alt=""></a>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 --> 
                                <div class="item">
                                    <div class="wt-post-thum">
                                        <a href="public/sdpl-assets/images/our_work/new2.jpg" class="mfp-link" ><img src="public/sdpl-assets/images/our_work/new2.jpg" alt=""></a>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 --> 
                                <div class="item">
                                    <div class="wt-post-thum">
                                        <a href="public/sdpl-assets/images/our_work/new2.jpg" class="mfp-link" ><img src="public/sdpl-assets/images/our_work/new2.jpg" alt=""></a>
                                    </div>
                                </div>                                            
              
                            </div>
                        </div>           
                    </div>

                    <!-- SIDE BAR START -->
                    <div class="col-md-5 col-sm-12 bg-white">
                        <aside  class="side-bar">    
                            <div class="index-about3 bg-white" style="text-align: center; margin-top: -15px; ">
                                <!-- TITLE START -->
                                <div class="section-head">
                                    <div class="wt-separator-outer separator-center">
                                        <div class="wt-separator">
                                            <span class="text-primary text-uppercase sep-line-one ">Welcome to SDPL</span>
                                        </div>
                                    </div>
                                    <h2>Arihant RajVillas</h2>
                                </div>
                                <!-- TITLE END -->                            
                                <p>Making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text aking it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text aking it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,  web page editors now use Lorem Ipsum as their default model text  web page editors now use Lorem Ipsum as their default model text</p>
                                <div class="col-md-6 col-sm-6 m-b30">
                                    <h4 class="m-b10">Date</h4>
                                    <p>Feb 04, 2019</p>
                                </div>
                                                    
                                <div class="col-md-6 col-sm-6 m-b30">
                                    <h4 class="m-b10">Duration</h4>
                                    <p> 6 Months </p>
                               </div>                                                                                                                  
                            </div>                                                                                                        
                        </aside>
                    </div>
                    <!-- SIDE BAR END -->  
                    
                    <div class="col-md-12 col-sm-12 bg-white">
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30 p-t30">
                        <div class="hover-box-effect v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t20 bg-gray">
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary"><!--<img src="public/sdpl-assets/images/What-we-do/gardening.png" alt="">--></span>
                                </div>
                                <div class="icon-content text-black">
                                    <h4 class="wt-tilte m-b25">Categories</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                    <!--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>-->
                                </div>
                            </div>
                            
                        </div>
                    </div>            
        
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30 p-t30">
                        <div class="hover-box-effect v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t20 bg-gray">
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary"><!--<img src="public/sdpl-assets/images/What-we-do/gardening.png" alt="">--></span>
                                </div>
                                <div class="icon-content text-black">
                                    <h4 class="wt-tilte m-b25">Creative Director</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                    <!--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>-->
                                </div>
                            </div>
                            
                        </div>
                    </div>           
        
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30 p-t30">
                        <div class="hover-box-effect v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t20 bg-gray">
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary"><!--<img src="public/sdpl-assets/images/What-we-do/gardening.png" alt="">--></span>
                                </div>
                                <div class="icon-content text-black">
                                    <h4 class="wt-tilte m-b25">Project type</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                    <!--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>-->
                                </div>
                            </div>
                            
                        </div>
                    </div>           
        
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30 p-t30">
                        <div class="hover-box-effect v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t20 bg-gray">
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary"><!--<img src="public/sdpl-assets/images/What-we-do/gardening.png" alt="">--></span>
                                </div>
                                <div class="icon-content text-black">
                                    <h4 class="wt-tilte m-b25">Client</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                    <!--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>           
                </div>
                </div>
            </div>
        </div>
        <!-- SECTION CONTENT END -->
    
    <!-- CONTENT END -->
    <!--WELCOME SECTION END-->

    {{--
    <!-- SECOND SECTION START-->
    <div class="section-full p-t80 p-b50 bg-gray">
        <div class="container">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                <div class="hover-box-effect v-icon-effect">
                    <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t20 bg-white">
                        <div class="icon-lg text-primary m-b25">
                            <span class="icon-cell text-primary"><!--<img src="public/sdpl-assets/images/What-we-do/gardening.png" alt="">--></span>
                        </div>
                        <div class="icon-content text-black">
                            <h4 class="wt-tilte m-b25">Categories</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <!--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>-->
                        </div>
                    </div>
                    
                </div>
            </div>            

            <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                <div class="hover-box-effect v-icon-effect">
                    <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t20 bg-white">
                        <div class="icon-lg text-primary m-b25">
                            <span class="icon-cell text-primary"><!--<img src="public/sdpl-assets/images/What-we-do/gardening.png" alt="">--></span>
                        </div>
                        <div class="icon-content text-black">
                            <h4 class="wt-tilte m-b25">Creative Director</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <!--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>-->
                        </div>
                    </div>
                    
                </div>
            </div>           

            <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                <div class="hover-box-effect v-icon-effect">
                    <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t20 bg-white">
                        <div class="icon-lg text-primary m-b25">
                            <span class="icon-cell text-primary"><!--<img src="public/sdpl-assets/images/What-we-do/gardening.png" alt="">--></span>
                        </div>
                        <div class="icon-content text-black">
                            <h4 class="wt-tilte m-b25">Project type</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <!--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>-->
                        </div>
                    </div>
                    
                </div>
            </div>           

            <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                <div class="hover-box-effect v-icon-effect">
                    <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t20 bg-white">
                        <div class="icon-lg text-primary m-b25">
                            <span class="icon-cell text-primary"><!--<img src="public/sdpl-assets/images/What-we-do/gardening.png" alt="">--></span>
                        </div>
                        <div class="icon-content text-black">
                            <h4 class="wt-tilte m-b25">Client</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <!--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>-->
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
    <!-- SECOND SECTION END-->    
    --}}

    {{--
    <!-- THIRD SECTION START -->
    <div class="section-full small-device p-t80 p-b50 bg-gray">
        <!-- GALLERY CONTENT START -->
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-center">
                <div class="wt-separator-outer separator-center">
                    <div class="wt-separator">
                        <span class="text-primary text-uppercase sep-line-one ">Project gallery</span>
                    </div>
                </div>
                <h2>Gallery</h2>
            </div>
            <!-- TITLE END -->        
            <!-- GALLERY CONTENT START -->
            <div class="portfolio-wrap mfp-gallery work-grid row clearfix">
                <!-- COLUMNS 1 -->
                <div class="masonry-item col-lg-3  col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <img src="public/sdpl-assets/images/project/latest1.jpg" alt=""/>
                        <!--<div class="work-hover-grid">
                            
                            <div class="work-hover-discription">
                                <h4>Rooms & Halls</h4>
                                <h5>Sultanate of Oman</h5>
                            </div>
                        <a href="#"></a>
                        </div> -->                           
                    </div>
                </div>
                <!-- COLUMNS 2 -->
                <div class="masonry-item col-lg-3  col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <img src="public/sdpl-assets/images/sdpl/blog2.jpg" alt=""/>
                        <!--<div class="work-hover-grid">
                            
                            <div class="work-hover-discription">
                                <h4>Events and More</h4>
                                <h5>Perth, Australia </h5>
                            </div>
                        <a href="#"></a>
                        </div>  -->                          
                    </div>
                </div>
                <!-- COLUMNS 3 -->
                <div class="masonry-item col-lg-3  col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <img src="public/sdpl-assets/images/project/latest1.jpg" alt=""/>
                        <!--<div class="work-hover-grid">
                            
                            <div class="work-hover-discription">
                                <h4>To-Do Dashboard</h4>
                                <h5>Aqaba, Jordan</h5>
                            </div>
                        <a href="#"></a>
                        </div> -->                           
                    </div>
                </div>
                <!-- COLUMNS 4 -->
                <div class="masonry-item col-lg-3  col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <img src="public/sdpl-assets/images/sdpl/blog2.jpg" alt=""/>
                        <!--<div class="work-hover-grid">
                        
                            <div class="work-hover-discription">
                                <h4>Generic Apps</h4>
                                <h5>Sultanate of Oman</h5>
                            </div>
                        <a href="#"></a>
                        </div>-->                            
                    </div>
                </div>
                <!-- COLUMNS 5 -->
                <div class="masonry-item col-lg-3  col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <img src="public/sdpl-assets/images/project/latest1.jpg" alt=""/>
                        <!--<div class="work-hover-grid">
                            
                            <div class="work-hover-discription">
                                <h4>WhereTO App</h4>
                                <h5>Ultanate of Oman</h5>
                            </div>
                        <a href="#"></a>
                        </div> -->                           
                    </div>
                </div>
                <!-- COLUMNS 6
                <div class="masonry-item col-lg-3  col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <img src="public/sdpl-assets/images/sdpl/blog2.jpg" alt=""/>
                        <div class="work-hover-grid">
                            
                            <div class="work-hover-discription">
                                <h4>Speed Detector</h4>
                                <h5>Perth, Australia </h5>
                            </div>
                        <a href="#"></a>
                        </div>                            
                    </div>
                </div>-->
                <!-- COLUMNS 7 -->
                <div class="masonry-item col-lg-3  col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <img src="public/sdpl-assets/images/project/latest1.jpg" alt=""/>
                        <!--<div class="work-hover-grid">
                            
                            <div class="work-hover-discription">
                                <h4>Workout Buddy</h4>
                                <h5>North House</h5>
                            </div>
                        <a href="#"></a>
                        </div>-->                            
                    </div>
                </div>
                <!-- COLUMNS 8 -->
                <div class="masonry-item col-lg-3  col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <img src="public/sdpl-assets/images/sdpl/blog2.jpg" alt=""/>
                        <!--<div class="work-hover-grid">
                            
                            <div class="work-hover-discription">
                                <h4>Remind~Me More</h4>
                                <h5>Aqaba, Jordan</h5>
                            </div>
                        <a href="#"></a>
                        </div> -->                           
                    </div>
                </div>
                <!-- COLUMNS 9 -->
                <div class="masonry-item col-lg-3  col-md-4 col-sm-6 m-b30">
                    <div class="wt-box">
                        <img src="public/sdpl-assets/images/sdpl/blog2.jpg" alt=""/>
                        <!--<div class="work-hover-grid">
                            
                            <div class="work-hover-discription">
                                <h4>Rooms & Halls</h4>
                                <h5>Perth, Australia </h5>
                            </div>
                        <a href="#"></a>
                        </div>   -->                         
                    </div>
                </div>                                     
            </div>
            <!-- GALLERY CONTENT END -->  
        </div>
        <!-- GALLERY CONTENT END -->
    </div>
    <!-- THIRD SECTION END  -->
    --}}



             
           
@endsection

@section('script')
    <script>
        
    </script>    
@endsection