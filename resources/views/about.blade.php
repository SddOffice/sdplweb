@extends('layouts.app')
@section('page_title','About')

@section('style')
<style>
    .responsive {
      width: 100%;
      height: auto;
    }
    </style>   

<style>
    #quote-carousel {
padding: 0 10px 30px 10px;
}
#quote-carousel .carousel-control {
background: none;
color: #CACACA;
font-size: 2.3em;
text-shadow: none;
margin-top: 30px;
}
#quote-carousel .carousel-indicators {
position: relative;
right: 50%;
top: auto;
bottom: 0px;
margin-top: 20px;
margin-right: -19px;
}
#quote-carousel .carousel-indicators li {
width: 50px;
height: 50px;
cursor: pointer;
border: 1px solid #ccc;
box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
border-radius: 50%;
opacity: 0.4;
overflow: hidden;
transition: all .4s ease-in;
vertical-align: middle;
}
#quote-carousel .carousel-indicators .active {
width: 128px;
height: 128px;
opacity: 1;
transition: all .2s;
}
.item blockquote {
border-left: none;
margin: 0;
}
.item blockquote p:before {
content: "\f10d";
font-family: 'Fontawesome';
float: left;
margin-right: 10px;
}
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
                        <h1 class="text-white">About Us</h1>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="index.html">About Us</a></li>
                        </ul>
                    </div>
                
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
     
    <!-- WELCOME SECTION START -->
    <div class="section-full p-t80 p-b50 bg-white">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="welcome-carousel-outer m-b60">
                            <div class="welcome-bg-block clearfix">
                                <div class="welcome-carousel-1 ">
                                    <div class="owl-carousel home-carousel-1 owl-btn-bottom-left">
                                        <!-- COLUMNS 1 -->
                                        <div class="item">
                                            <div class="ow-img">
                                                <a href="javascript:void(0);"><img src="public/sdpl-assets/images/aboutus/p5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 2 -->
                                        <div class="item">
                                            <div class="ow-img">
                                                <a href="javascript:void(0);"><img src="public/sdpl-assets/images/aboutus/p5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 3 -->
                                        <div class="item">
                                            <div class="owl-img">
                                                <a href="javascript:void(0);"><img src="public/sdpl-assets/images/aboutus/p5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 4 -->
                                        <div class="item">
                                            <div class="owl-img">
                                                <a href="javascript:void(0);"><img src="public/sdpl-assets/images/aboutus/p5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 5 -->
                                        <div class="item">
                                            <div class="owl-img">
                                                <a href="javascript:void(0);"><img src="public/sdpl-assets/images/aboutus/p5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                   </div>
                                </div>                                 
                           </div>
                       </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="wt-separator-outer separator-left">
                                <div class="wt-separator">
                                    <span class="text-primary text-uppercase sep-line-one ">Welcome to SDPL</span>
                                </div>
                            </div>
                            <h2>Who We Are</h2>
                        </div>
                        <!-- TITLE END -->                            
                        <p>Earlier Its name was Shri Design Desk (SDD), Now it's converted to Shrikhande Designs Pvt Ltd (SDPL)is an architectural & civil engineering consultancy providing established in 2021 with this name, while it is earlier known as SHRl'S BUILDCON which has provided services since the year 2001. SDD is specialized in the field of architecture, civil engineering, and interior work by its innovative and creative way of designing.</p>
                        <p>The aim of the company is to shape up a better built-up environment for society, by crafting designer spaces that pulse with life & in-coherence with its surroundings and integer nature to give its best to humankind.</p>
                         {{--<a href="javascript:void(0);" class="site-button m-t15 m-b15">Read More</a>--}}
                    </div>                            
                </div>  
            </div>
        </div>
    </div>   
    <!-- WELCOME  SECTION END --> 

   
    <!-- WHAT WE DO SECTION START -->
    <div class="section-full p-t80 p-b50 bg-gray">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-center">
                <div class="wt-separator-outer separator-center">
                    <div class="wt-separator">
                        <span class="text-primary text-uppercase sep-line-one ">what you prefer</span>
                    </div>
                </div>
                <h2>What We Do</h2>
            </div>
            <!-- TITLE END -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
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
                                    <p>Our master architects provide comprehensive plans to look at where an organization is a today.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>                       
                    
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                        <div class="hover-box-effect v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t50  bg-white">
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary"><img src="public/sdpl-assets/images/what-we-do/blueprint.png" alt=""></span>
                                </div>
                                <div class="icon-content text-black">
                                    <h4 class="wt-tilte m-b25">Architecture</h4>
                                    <p>We develop the full cycle of project documentation & full details. Our client's satisfaction is most.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                        <div class="hover-box-effect v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t50 bg-white">
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary"><img src="public/sdpl-assets/images/what-we-do/structure.png" alt=""></span>
                                </div>
                                <div class="icon-content text-black">
                                    <h4 class="wt-tilte m-b25">Structure Design</h4>
                                    <p>The process of structural design has passed through a long and still continuous phase of improvements. </p>
                                </div>
                            </div>
                            
                         </div>
                    </div>   

                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                        <div class="hover-box-effect v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t50  bg-white">
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary"><img src="public/sdpl-assets/images/what-we-do/interior-design.png" alt="" ></span>
                                    <!-- <i class="v-icon flaticon-window"></i> -->
                                </div>
                                <div class="icon-content text-black">
                                    <h4 class="wt-tilte m-b25">Interior</h4>
                                    <p>You may engage your architect to provide an interior design service, advising on loose furniture.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>                                
            </div>
        </div>  
    </div>   
    <!-- WHAT WE DO  SECTION END --> 


    {{--
    <!-- OUR MISION & VISION SECTION START -->
    <div class="section-full p-t50 p-b50 bg-gray">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-center">
                <div class="wt-separator-outer separator-center">
                    <div class="wt-separator">
                        <span class="text-primary text-uppercase sep-line-one ">OUR MISSION & VISION</span>
                    </div>
                </div>
                <h2>Our Mision & Vision</h2>
            </div>
            <!-- TITLE END -->

            <div class="section-content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                        <div class="hover-box-effect  v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t20 bg-white">
                                <!--wt-icon-box-wraper center p-lr30  p-b50 p-t20 bg-white-->
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary">
                                        <!-- <i class="v-icon flaticon-sketch"></i> -->
                                    </span>
                                    <!--<span class="icon-cell text-primary"><i class="fas fa-user"></i></i></span>-->
                                </div>
                               
                                    <div class="icon-content">
                                        <h3 class="wt-tilte m-b25">Mision</h3>
                                        <p class="fw-normal">"It’s our mission at Architectural Design Associates to <br>provide client focused service through our responsible <br>practice of Architecture.  Our tradition of dedication, <br>professionalism and outstanding customer service is <br>a testament to that mission as we strive each day for <br>excellence in bringing our valued clients’ ideas to life."</p>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                        <div class="hover-box-effect v-icon-effect">
                            <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t20 bg-white">
                                <div class="icon-lg text-primary m-b25">
                                    <span class="icon-cell text-primary">
                                    </span>
                                </div>
                                 <div class="icon-content">
                                    <h3 class="wt-tilte m-b25">Vision</h3>
                                    <p class="fw-normal">"The Architecture Vision is essentially the architect's <br>"elevator pitch" - the key opportunity to sell the benefits of <br>the proposed development to the decision-makers within the <br>enterprise. The goal is to articulate an Architecture<br> Vision that enables the business goals, responds to the <br>strategic drivers, conforms with the principles."</p>
                                </div>
                            </div>
                        </div>
                    </div>                                
            </div>
        </div>  
    </div>
    <!-- OUR MISION & VISION SECTION END --> 
    --}}

    <!-- PROJECT SECTION START -->
    <div  class="section-full p-t50 p-b50 bg-gray">
        <div class="container">
            <div class="section-head text-center">
                <div class="wt-separator-outer separator-center">
                    <div class="wt-separator">
                        <span class="text-primary text-uppercase sep-line-one ">OUR GOAL</span>
                    </div>
                </div>
                <h2>Our Mission & Vision</h2>  
            </div>

            <!-- TI END -->    
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center bg-white shadow mb-5 bg-body rounded">
                                <!-- Quote 1 -->
                                <div class="item active" >
                                    <div class="row">
                                        <div class="col-sm-10 col-md-offset-1" >
                                            <u><h4 class="pt-5">Our Vision</h4></u>
                                            <h5 class="pb-3">"Our vision is grasping how you feel and generating a real impact of that which should be "eye smoothing". We want to settle a milestone in this field with new technology, innovation, and creative designs. We always try to make aesthetic and functional designs with their strength & durability. Our purpose is to mold the structure with our creative work. We believe in delivering desired results to our clients."</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item " >
                                    <div class="row">
                                        <div class="col-sm-10 col-md-offset-1" >
                                            <u><h4 class="pt-5">Our Mission</h4></u>
                                            <h5 class="pb-3">"It's our mission at Architectural Design Associates to provide client-focused services through our responsible practice in the field.  Our tradition of dedication, professionalism, and outstanding customer service is a testament to that mission as we strive each day for excellence in bringing our valued clients' ideas to life. with our creative work."</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bottom Carousel Indicators -->
                        </div>
                    </div>
                </div>  
            </div>
        </div>        
    </div>   
    
    <div>
        <img src="public/sdpl-assets/images/our_work/hotelviraj.jpg" alt="Nature" class="responsive" width="600" height="400">
    </div>

   
    <!-- PROJECT SECTION END -->  

    

    <!-- WHY WE CHOOSE SECTION START-->
    <div class="section-full p-t80 p-b50 bg-gray">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-center">
                <div class="wt-separator-outer separator-center">
                    <div class="wt-separator">
                        <span class="text-primary text-uppercase sep-line-one ">WHY CHOOSE US</span>
                    </div>
                </div>
                <h2>Why Choose Us</h2>
            </div>
            <!-- TITLE END --> 
            
            <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                <div class="hover-box-effect v-icon-effect">
                    <div class="wt-icon-box-wraper center p-lr30  p-b50 p-t20 bg-white">
                        <div class="icon-lg text-primary m-b25">
                            <span class="icon-cell text-primary"><!--<img src="public/sdpl-assets/images/What-we-do/gardening.png" alt="">--></span>
                        </div>
                        <div class="icon-content text-black">
                            <h4 class="wt-tilte m-b25">Unique Design</h4>
                            <p>Unique design simply means an improved version of an already better product or design.</p>
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
                            <h4 class="wt-tilte m-b25">Fast Working</h4>
                            <p>Understand the difference between “effective” and “efficient”. Effective is doing the right things.</p>
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
                            <h4 class="wt-tilte m-b25">Design Skill</h4>
                            <p>Design skills are extremely important, regardless of whether you’re creating a new piece of machinery.</p>
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
                            <h4 class="wt-tilte m-b25">Product Quality</h4>
                            <p>Product quality is important affects the success of the company and helps to grow.</p>
                            <!--<a href="#" class="site-button-link" data-hover="Read More">Read More</a>-->
                        </div>
                    </div>
                    
                 </div>
            </div>           

            <!--
                <div class="space-45"></div>
                <div class="row">
                <div class="col-lg-4 wow fadeInUp">
                    <div class="single-heart-item">
                        <span class="single-icon">
                            <i class="fa fa-heart"></i>
                        </span>
                        <h4>Renovation</h4>
                        <p>Our various areas of expertise are available on a consulting basis as an additional support</p>
                    </div>
                </div>
                        
                <div class="col-lg-4 wow fadeInUp">
                    <div class="single-heart-item">
                        <span class="single-icon">
                            <i class="fa fa-heart"></i>
                        </span>
                        <h4>Installation</h4>
                        <p>Our various areas of expertise are available on a consulting basis as an additional support</p>
                    </div>
                </div>
                
                <div class="col-lg-4 wow fadeInUp">
                    <div class="single-heart-item">
                        <span class="single-icon">
                            <i class="fa fa-heart"></i>
                        </span>
                        <h4>Rebuilding</h4>
                        <p>Our various areas of expertise are available on a consulting basis as an additional support</p>
                    </div>
                </div> 
            -->
        </div>
    </div>
    <!-- WHY WE CHOOSE SECTION END-->    

  

 
@endsection

