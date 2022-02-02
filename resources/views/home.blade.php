@extends('layouts.app')
{{-- @section('page_title','SDPL') --}}
@section('keywords', 'engineers and architects, civil and structural engineering, interior design and mechanical engineers')
@section('description','SDPL is a engineers and architects firm in jabalpur. we are professionals in architectural engineering, structural design engineer, civil engineering and architecture, mechanical engineers, and 3d interior design, modern interior and building planning and drawing and building services.')
@section('page_title', 'SDPL - Shrikhande Designs Pvt. Ltd.')


@section('style')
    <style>
        .responsive {
        width: 100%;
        height: auto;
        }
    </style>  
@endsection

@section('content')
    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active"data-bs-interval="2500">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/3d Hotel/ari.jpg')}}" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item"data-bs-interval="2500">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/3d Hotel/eli.jpg')}}" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item"data-bs-interval="2500">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/3d Hotel/roy.jpg')}}" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item"data-bs-interval="2500">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/3d Hotel/vir.jpg')}}" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item"data-bs-interval="2500">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner1.jpg')}}" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item"data-bs-interval="2500">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner16.jpg')}}" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item"data-bs-interval="2500">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner19.jpg')}}" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item"data-bs-interval="2500">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner14.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>  
     
    </section>

    

    <!--WHAT WE DO SECTION START-->
    <div class="section-full p-t80 p-b50 bg-gray">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-center">
                <div class="wt-separator-outer separator-center">
                    <div class="wt-separator">
                        <span class="text-primary text-uppercase sep-line-one ">What You Prefer</span>
                    </div>
                </div>
                <h2>Our Expertise</h2>
            </div>
            <!-- TITLE END -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                        <div class="hover-box-effect v-icon-effect">
                           <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t50  bg-white">
                               <div class="icon-lg text-primary m-b25">
                                   <span class="icon-cell text-primary"><img src="public/sdpl-assets/images/what-we-do/consultation.png" alt=""></span>
                               </div>
                               <div class="icon-content text-black">
                                   <h4 class="wt-tilte m-b25">Consultation</h4>
                                   <p>Our architect will consult with you and advise you during your construction process.</p>
                                   {{--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>--}}
                               </div>
                           </div>
                           
                        </div>
                   </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                        <div class="hover-box-effect  v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t50 bg-white">
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary">
                                        <!-- <i class="v-icon flaticon-sketch"></i> -->
                                            <img src="public/sdpl-assets/images/what-we-do/sketch.png" alt="">

                                        </span>
                                    <!--<span class="icon-cell text-primary"><i class="fas fa-user"></i></i></span>-->
                                </div>
                                <div class="icon-content text-black">
                                    <h4 class="wt-tilte m-b25">Planning</h4>
                                    <p>Planning may control the environment by the design of architectural forms that may modify the effects of natural forces. </p>
                                    {{--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>--}}
                                </div>
                            </div>
                            
                        </div>
                    </div> 
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                        <div class="hover-box-effect v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t50 bg-white">
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary"><img src="public/sdpl-assets/images/what-we-do/blueprint.png" alt=""></span>
                                </div>
                                <div class="icon-content text-black">
                                    <h4 class="wt-tilte m-b25">Architecture</h4>
                                    <p>We develop the full cycle of project documentation full details. Our clients satisfaction is most</p>
                                    {{--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>--}}
                                </div>
                            </div>
                            
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                        <div class="hover-box-effect v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t50  bg-white">
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary"><img src="public/sdpl-assets/images/what-we-do/structure.png" alt=""></span>
                                </div>
                                <div class="icon-content text-black">
                                    <h4 class="wt-tilte m-b25">Structure Design</h4>
                                    <p>The process of structural design has passed through a long and still continuous phase of improvements. </p>
                                    {{--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>--}}
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                        <div class="hover-box-effect v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t50  bg-white">
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary"><img src="public/sdpl-assets/images/what-we-do/interior-design.png" alt="" ></span>
                                    <!-- <i class="v-icon flaticon-window"></i> -->
                                </div>
                                <div class="icon-content text-black">
                                    <h4 class="wt-tilte m-b25">Interior</h4>
                                    <p>You may engage your architect to provides the interior design service, advising on loose the furniture.</p>
                                    {{--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>--}}
                                </div>
                            </div>
                            
                        </div>
                    </div>                         
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                        <div class="hover-box-effect v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t50  bg-white">
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary"><img src="public/sdpl-assets/images/what-we-do/image.png" alt=""></span>
                                </div>
                                <div class="icon-content text-black">
                                    <h4 class="wt-tilte m-b25">Landscape</h4>
                                    <p>Landscape design is an independent profession and a design and art tradition, practiced by landscape designers.</p>
                                    {{--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>--}}
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>                                
            </div>
        </div>  
    </div>   
    <!--WHAT WE DO SECTION END-->
   
     
    <!-- OUR LATEST PROJECT SECTION START -->
    <div class="section-full p-t80 p-b20 bg-white">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-center">
                <div class="wt-separator-outer separator-center">
                    <div class="wt-separator">
                        <span class="text-primary text-uppercase sep-line-one ">Recently finished</span>
                    </div>
                </div>
                <h2>Our latest Projects</h2>
            </div>
            <!-- TITLE END -->
        </div>                                     
         <!-- IMAGE CAROUSEL START -->
        <div class="section-content">
            <div class="owl-carousel owl-carousel-filter2  owl-btn-bottom-center">
                <!-- COLUMNS 1 --> 
                <div class="item">
                    <div class="line-filter-outer bg-cover" style="background-image:url(public/sdpl-assets/images/our_work/KHAREMANISH.jpg);">
                        <div class="hover-effect-1">
                            <div class="hover-effect-content">
                                <h4 class="m-t0 m-b10">SDPL Design, corporate and retail architecture</h4>
                                <p class="hide">When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                {{--<a href="project-detail.html" class="site-button-link" data-hover="Read More">Read More</a>--}}
                            </div>
                        </div>                                     
                    </div>
                </div>
                
                <!-- COLUMNS 2 --> 
                <div class="item">
                    <div class="line-filter-outer bg-cover" style="background-image:url(public/sdpl-assets/images/our_work/DATTEXOTICA.jpg);">
                        <div class="hover-effect-1">
                            <div class="hover-effect-content">
                                <h4 class="m-t0 m-b10">Distinctive designs for distinctive interiors.</h4>
                                <p class="hide">Architecture Is a Visual Art and Building Speaks for Themselve</p> 
                                {{--<a href="project-detail.html" class="site-button-link" data-hover="Read More">Read More</a>--}}
                            </div>
                        </div>                                       
                    </div>
                </div>
                
                <!-- COLUMNS 3 --> 
                <div class="item">
                    <div class="line-filter-outer bg-cover" style="background-image:url(public/sdpl-assets/images/our_work/latest3.jpg);">
                        <div class="hover-effect-1">
                            <div class="hover-effect-content">
                                <h4 class="m-t0 m-b10">A small efficient interior design team.</h4>
                                <p class="hide">It was popularised in the 1960s with the release of Letraset sheets containing passages.</p>
                                {{--<a href="project-detail.html" class="site-button-link" data-hover="Read More">Read More</a>--}}
                            </div>
                        </div>                                         
                    </div>
                </div>

                <!-- COLUMNS 6 --> 
                <div class="item">
                    <div class="line-filter-outer bg-cover" style="background-image:url(public/sdpl-assets/images/our_work/latest3.jpg);">
                        <div class="hover-effect-1">
                            <div class="hover-effect-content">
                                <h4 class="m-t0 m-b10">We design thoughtful, livable spaces.</h4>
                                <p class="hide">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                {{--<a href="project-detail.html" class="site-button-link" data-hover="Read More">Read More</a>--}}
                            </div>
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>                   	
    </div>
    <!-- OUT LATEST PROJECT SECTION END -->
    
    <div class="section-full">
        <img src="public/sdpl-assets/images/slider/krishnajyoti.jpg" alt="Nature" class="responsive" width="600" height="400">
    </div>
    
    <!-- OUR WORK CONTENT START -->
    <div class="section-full small-device  p-t80 p-b50 bg-gray">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-center">
                <div class="wt-separator-outer separator-center">
                    <div class="wt-separator">
                        <span class="text-primary text-uppercase sep-line-one ">Our Work gallery</span>
                    </div>
                </div>
                <h2>Our Work Showcase</h2>
            </div>
            <!-- TITLE END -->                  
            
            <!-- GALLERY CONTENT START -->
             <div class="portfolio-wrap mfp-gallery work-grid row">
                <!-- COLUMNS 1 -->
                <div class="stamp col-md-4 m-b40">
                    <div class="bg-white p-a30 p-b20 stamp-secion-2">
                        <h4 class="wt-tilte m-t0">Whatever your style, we’ll help you achieve it.</h4>
                        <p>We believe that architecture and design matter, and that through the application of our skills, and hard work we can make a difference in the world.</p>
                        <div class="filter-wrap">
                            <ul class="filter-navigation masonry-filter text-uppercase">
                                    <li class="active"><a data-filter="*" data-hover="All" href="#">All</a></li>
                                    <li><a data-filter=".cat-1" data-hover="Hotel" href="javascript:;">Hotel</a></li>
                                    <li><a data-filter=".cat-2" data-hover="Hospital" href="javascript:;">Hospital</a></li>
                                    <li><a data-filter=".cat-3" data-hover="Bunglow" href="javascript:;">Bunglow</a></li>
                                    <li><a data-filter=".cat-4" data-hover="Bunglow" href="javascript:;">Institutional</a></li>
                            </ul>
                        </div>                          
                    </div>            
                </div>    
                
                <div class="masonry-item  cat-1 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box   work-hover-content">
                        <div class="wt-thum-bx img-center-icon">
                            <a href="javascript:;"><img src="public/sdpl-assets/images/our_work/new1.jpg" alt=""></a>
                        </div>
                        <div class="wt-info  p-t20">
                            <h4 class="wt-tilte m-b10 m-t0"><a href="#">Shawn Elizey</a></h4>
                            <p class="m-b0">Jabalpur(MP)</p>      
                        </div>                                 
                    </div>
                </div> 
                <div class="masonry-item  cat-2 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box   work-hover-content">
                        <div class="wt-thum-bx img-center-icon">
                            <a href="javascript:;"><img src="public/sdpl-assets/images/our_work/legendcity.jpg" alt=""></a>
                        </div>
                        <div class="wt-info  p-t20">
                            <h4 class="wt-tilte m-b10 m-t0"><a href="#">Legend Hospital</a></h4>
                            <p class="m-b0">Jabalpur(MP)</p>      
                        </div>                                 
                    </div>
                </div>
                <div class="masonry-item  cat-3 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box   work-hover-content">
                        <div class="wt-thum-bx img-center-icon">
                            <a href="javascript:;"><img src="public/sdpl-assets/images/bunglows/amantiwariji_crop.jpg" alt=""></a>
                        </div>
                        <div class="wt-info  p-t20">
                            <h4 class="wt-tilte m-b10 m-t0"><a href="#">Bunglow1</a></h4>
                            <p class="m-b0">Jabalpur(MP)</p>      
                        </div>                                 
                    </div>
                </div>      
                <div class="masonry-item  cat-4 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box   work-hover-content">
                        <div class="wt-thum-bx img-center-icon">
                            <a href="javascript:;"><img src="public/sdpl-assets/images/bunglows/stemfeildinterschool1.jpg" alt=""></a>
                        </div>
                        <div class="wt-info  p-t20">
                            <h4 class="wt-tilte m-b10 m-t0"><a href="#">Stemfield International School</a></h4>
                            <p class="m-b0">Jabalpur(MP)</p>      
                        </div>                                 
                    </div>
                </div> 
                <div class="masonry-item  cat-1 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box   work-hover-content">
                        <div class="wt-thum-bx img-center-icon">
                            <a href="javascript:;"><img src="public/sdpl-assets/images/our_work/new4.jpg" alt=""></a>
                        </div>
                        <div class="wt-info  p-t20">
                            <h4 class="wt-tilte m-b10 m-t0"><a href="#">Royal Orbit</a></h4>
                            <p class="m-b0">Jabalpur(MP)</p>      
                        </div>                                 
                    </div>
                </div>
                <!-- <div class="masonry-item  cat-2 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box   work-hover-content">
                        <div class="wt-thum-bx img-center-icon">
                            <a href="javascript:;"><img src="public/sdpl-assets/images/our_work/globalmedicity.jpg" alt=""></a>
                        </div>
                        <div class="wt-info  p-t20">
                            <h4 class="wt-tilte m-b10 m-t0"><a href="#">Global Medicity</a></h4>
                            <p class="m-b0">Jabalpur(MP)</p>      
                        </div>                                 
                    </div>
                </div>    -->
                <div class="masonry-item  cat-3 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box   work-hover-content">
                        <div class="wt-thum-bx img-center-icon">
                            <a href="javascript:;"><img src="public/sdpl-assets/images/bunglows/sharadagrawalji.jpg" alt=""></a>
                        </div>
                        <div class="wt-info  p-t20">
                            <h4 class="wt-tilte m-b10 m-t0"><a href="#">Bunglow2</a></h4>
                            <p class="m-b0">Jabalpur(MP)</p>      
                        </div>                                 
                    </div>
                </div> 
                <div class="masonry-item  cat-1 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box   work-hover-content">
                        <div class="wt-thum-bx  img-center-icon">
                            <a href="javascript:;"><img src="public/sdpl-assets/images/our_work/new3.jpg" alt=""></a>
                        </div>
                        <div class="wt-info  p-t20">
                            <h4 class="wt-tilte m-b10 m-t0"><a href="#">Hotel Viraj</a></h4>
                            <p class="m-b0">Jabalpur(MP)</p>      
                        </div>                                   
                    </div>
                </div>    
                <div class="masonry-item  cat-3 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box   work-hover-content">
                        <div class="wt-thum-bx img-center-icon">
                            <a href="javascript:;"><img src="public/sdpl-assets/images/bunglows/baderiyaji.jpg" alt=""></a>
                        </div>
                        <div class="wt-info  p-t20">
                            <h4 class="wt-tilte m-b10 m-t0"><a href="#">Bunglow3</a></h4>
                            <p class="m-b0">Jabalpur(MP)</p>      
                        </div>                                 
                    </div>
                </div>         
                <div class="masonry-item  cat-1 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box   work-hover-content">
                        <div class="wt-thum-bx  img-center-icon">
                            <a href="javascript:;"><img src="public/sdpl-assets/images/our_work/ARIHANT.jpg" alt=""></a>
                        </div>
                        <div class="wt-info  p-t20">
                            <h4 class="wt-tilte m-b10 m-t0"><a href="#">Arihant RajVillas</a></h4>
                            <p class="m-b0">Jabalpur(MP)</p>      
                        </div>                                   
                    </div>
                </div>    
                <div class="masonry-item  cat-3 col-md-4 col-sm-6 m-b30">
                    <div class="wt-box   work-hover-content">
                        <div class="wt-thum-bx img-center-icon">
                            <a href="javascript:;"><img src="public/sdpl-assets/images/bunglows/nagrathji.jpg" alt=""></a>
                        </div>
                        <div class="wt-info  p-t20">
                            <h4 class="wt-tilte m-b10 m-t0"><a href="#">Bunglow4</a></h4>
                            <p class="m-b0">Jabalpur(MP)</p>      
                        </div>                                 
                    </div>
                </div>                                                                                      
             </div>
            <!-- GALLERY CONTENT END -->                    
        </div>
    </div>
    <!-- OUR WORK CONTENT END  --> 
    
        

@endsection
    