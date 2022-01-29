@extends('layouts.app')
@section('page_title','contact')

@section('content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center"  style="background-image:url(public/sdpl-assets/images/banner/pd.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h1 class="text-white">Contact Us</h1>
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

    <div class="section-full p-t80 p-b50 ">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-center">
                <div class="wt-separator-outer separator-center">
                    <!--<div class="wt-separator">
                        <span class="text-primary text-uppercase sep-line-one ">What You Prefer</span>
                    </div>-->
                </div> 
                <h2>Have Some Question?</h2>
            </div>
            <!-- TITLE END -->

            <!--Section: Contact v.2-->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7 bg-gray">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
          
                            <div class="row">
                                <div class="col-md-6" >
                                    <div class="md-form mb-0">
                                        <label for="name" class="">Your name</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="enter your full name..">
                                    </div>
                                </div>
                                   
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="email" class="">Your email</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com">
                                    </div>
                                </div>
                                        
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Mobile Number</label>
                                        <input type="number" id="subject" name="subject" class="form-control" placeholder="enter your mobile number..">
                                    </div>
                                </div>
                        
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <label for="message">Your message</label>
                                        <textarea type="text" id="message" placeholder="Write here.." name="message" rows="4" class="form-control md-textarea"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="site-button m-t30 m-b30" type="submit"> SUBMIT FORM </button>
                                </div>
                            </div>

                        </form>    
                    </div>
                
                    <div class="col-md-5">
                        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                    style="border:0" width="100%" height="350px" allowfullscreen >
                        </iframe>
                    </div> 

                </div> 

            </div>

        </div>   
    </div>


@endsection