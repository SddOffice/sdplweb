
<div class="sticky-header main-bar-wraper">
    <div class="main-bar bg-white">
        <div class="header-center">
            <div class="wt-header-right">
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="{{url('/')}}">
                            <img src="{{asset('public/sdpl-assets/images/logo/logo_new.png')}}"  alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="wt-header-center"> 
                <!-- NAV Toggle Button -->
                <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                        
                <!-- MAIN Vav -->
                <div class="header-nav navbar-collapse collapse nav-dark">
                    <ul class=" nav navbar-nav nav-line-animation">
                        <li class="active">
                            <a href="{{url('/')}}" >Home</a>
                        </li>
                        <li>
                            <a href="{{url('/about')}}">About Us</a>
                        </li>
                        <li>
                            <a href="{{url('/project')}}">Project</a>
                        </li>
                        
                        <li>
                            <a href="{{url('/team')}}" >team</a>
                        </li>
                        
                        <li>
                            <a href="{{url('/contact')}}">Contact us</a>
                        </li>     
                        <li>
                            <a href="{{url('/login')}}">Login</a>
                        </li>                           
                    </ul>
                </div>
            </div>
            {{-- <button class="btn btn-danger">Start Services <br> With <br> SDPLweb</button> --}}
            <div class="wt-header-right ">
                <div class="bg-primary text-center">
                    
                    {{-- <div class="extra-nav">
                        <div class="extra-cell">
                            <a href="#search" class="site-search-btn"><i class="bi bi-search"></i></a>
                            
                        </div>
                     </div>                                 
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <div class="right-arrow-btn">
                                <button type="button" class="btn-open contact-slide-show text-white notification-animate"><i class="bi bi-chevron-double-left"></i></button>
                            </div>                                         
                        </div>
                    </div> --}}

                </div>                                 
           </div>  
            <!-- Contact Nav -->                            
            <div class="contact-slide-hide"> 
                <div class="contact-nav">
                     <a href="javascript:void(0)" class="contact_close">&times;</a>
                     <div class="contact-nav-form p-a30">
                        <form class="cons-contact-form" method="post" action="form-handler.php">
                            <div class="m-b30">
                                <!-- TITLE START -->
                                <div class="section-head text-left">
                                    <h4 class="m-b5">Get In Touch</h4>
                                </div>
                                <!-- TITLE END --> 
                                <div class="input input-animate">
                                    <label for="name">Name</label>
                                    <input type="text" name="username"  id="name" required>
                                    <span class="spin"></span>
                                </div>
                                <div class="input input-animate">
                                    <label for="email">Email</label>
                                    <input type="email" name="email"   id="email" required>
                                    <span class="spin"></span>
                                </div>                                            
                                <div class="input input-animate">
                                    <label for="message">Textarea</label>
                                    <textarea name="message"  id="message" required></textarea>
                                    <span class="spin"></span>
                                </div>
                                <div class="text-center">
                                    <button name="submit" type="submit" value="Submit" class="btn-half site-button m-b15">
                                          <span>Submit</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="contact-info text-black m-b30">
                            <!-- TITLE START -->
                            <div class="section-head text-left">
                                <h4 class="m-b5">Contact Info</h4>
                            </div>
                            <!-- TITLE END --> 
                            <div class="wt-icon-box-wraper left p-b40 icon-shake-outer">
                                <div class="icon-xs"><i class="bi bi-telephone-outbound-fill"></i></div>
                                <div class="icon-content">
                                    <h5 class="m-t0 font-weight-500">Phone number</h5>
                                    <p>+918109093551</p>
                                </div>
                            </div>
                            <div class="wt-icon-box-wraper left p-b40 icon-shake-outer">
                                <div class="icon-xs"><i class="bi bi-envelope-check-fill"></i></div>
                                <div class="icon-content">
                                    <h5 class="m-t0 font-weight-500">Email address</h5>
                                    <p>office@sdplweb.com</p>
                                </div>
                            </div>
                            <div class="wt-icon-box-wraper left icon-shake-outer">
                                <div class="icon-xs"><i class="bi bi-geo-alt-fill"></i></div>
                                <div class="icon-content">
                                    <h5 class="m-t0 font-weight-500">Address info</h5>
                                    <p>G-1, Abhishek Apartment,<br> Shastri Bridge, Jabalpur(482001),<br>Madhya Pradesh, India</p>
                                </div>
                            </div>
                        </div>                                        
                     </div>
                </div> 
            </div>       
             <!-- Search popup -->
            <div id="search"> 
                <span class="close"></span>
                <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                    <div class="input-group">
                        <input value="" name="q" type="search" placeholder="Type to search"  class="text-lowercase" style="width:80%;">
                        <span class="input-group-btn"><button type="button" class="search-btn"><i class="bi bi-search"></i></button></span>
                    </div>   
                </form>
            </div>
        </div>
    </div>
</div>

