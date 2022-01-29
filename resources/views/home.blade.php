@extends('layouts.app')
@section('page_title','SDPL')

@section('style')
<style>
    .responsive {
      width: 100%;
      height: auto;

    </style>  
@endsection


@section('content')
    <section>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active"data-bs-interval="2500">
                <img src="{{asset('public/sdpl-assets/images/slider/banner/3d Hotel/ari.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    {{--<h1 class="lh-sm">Design of interior, the art of organizing interior space</h1>
                    <a href="javascript:void(0);" class="site-button m-t15 m-b15">Read More</a>--}}
                </div>
               
            </div>

            <div class="carousel-item"data-bs-interval="2500">
                <img src="{{asset('public/sdpl-assets/images/slider/banner/3d Hotel/eli.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    {{--<h1  class="lh-sm">Spectrum to Create Something Imaginative</h1>
                    <a href="javascript:void(0);" class="site-button m-t15 m-b15">Read More</a>--}}
                </div>
            </div>

            <div class="carousel-item"data-bs-interval="2500">
                <img src="{{asset('public/sdpl-assets/images/slider/banner/3d Hotel/roy.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    {{--<h1 class="lh-sm">Thoughts Can Be Reflected in One Powerful Peace of Art</h1>
                    <a href="javascript:void(0);" class="site-button m-t15 m-b15">Read More</a>--}}
                </div>
            </div>

            <div class="carousel-item"data-bs-interval="2500">
                <img src="{{asset('public/sdpl-assets/images/slider/banner/3d Hotel/vir.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    {{--<h1 class="lh-sm">Good design is obvious, Great design is transparent</h1>
                    <a href="javascript:void(0);" class="site-button m-t15 m-b15">Read More</a>--}}
                </div>
            </div>

            <div class="carousel-item"data-bs-interval="2500">
                <img src="{{asset('public/sdpl-assets/images/slider/banner/banner1.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    {{--<h1 class="lh-sm">Architecture is the will of an epoch translated into space</h1>
                    <a href="javascript:void(0);" class="site-button m-t15 m-b15">Read More</a>--}}
                </div>
            </div>

            <div class="carousel-item"data-bs-interval="2500">
                <img src="{{asset('public/sdpl-assets/images/slider/banner/banner16.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    {{--<h1 class="lh-sm">We are architecturer!<br>We create landscapes!!</h1>
                    <a href="javascript:void(0);" class="site-button m-t15 m-b15">Read More</a>--}}
                </div>
            </div>

            <div class="carousel-item"data-bs-interval="2500">
                <img src="{{asset('public/sdpl-assets/images/slider/banner/banner19.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    {{--<h1 class="lh-sm">The innovative design to enhance the human experience</h1>
                    <a href="javascript:void(0);" class="site-button m-t15 m-b15">Read More</a>--}}
                </div>
            </div>

            <div class="carousel-item"data-bs-interval="2500">
                <img src="{{asset('public/sdpl-assets/images/slider/banner/banner14.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    {{--<h1 class="lh-sm">We build innovations so that we fulfill our commitments</h1>
                    <a href="javascript:void(0);" class="site-button m-t15 m-b15">Read More</a>--}}
                </div>
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
    {{--
    <div id="rev_slider_26_1_wrapper" class="section-full small-device  p-b80" class="rev_slider_wrapper fullscreen-container bg-primary" data-alias="mask-showcase" data-source="gallery" style="padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_26_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>	
                <!-- SLIDE  -->
                <li data-index="rs-73" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/sdpl-assets/images/slider/banner/banner1-800.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner1-800.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina alt="">  
                    
                    <!-- LAYER NR. 1 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-73-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>                
                                            
                    <!-- LAYERS 1 border block-->
                    <div class="tp-caption rev-btn  tp-resizeme slider-block" 
                        id="slide-73-layer-1" 
                        data-x="['left','left','left','center']" data-hoffset="['0','100','60','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[250,250,250,200]"
                        data-paddingright="[250,150,150,150]"
                        data-paddingbottom="[250,250,250,200]"
                        data-paddingleft="[250,150,150,150]"

                        style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>                                 
                                
                    <!-- LAYER 2 button -->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-73-layer-2" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power2.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button">Read More</a></div>

                    <!-- LAYER 5 title-->
                    <div class="tp-caption   tp-resizeme slider-tag-line" 
                        id="slide-73-layer-5" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: nowrap; font-size: 18px; line-height: 20px; font-weight: 400;font-family: 'Poppins', sans-serif; text-transform:uppercase;"> Trust and recommend </div>

                    <!-- LAYER 6  tag line-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-73-layer-6" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']" 
                        data-fontsize="['40','45','40','40']"
                        data-lineheight="['70','60','70','50']"
                        data-width="['700','650','620','380']"
                        data-height="none"
                        data-whitespace="normal"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','center']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: normal;font-weight: 800; color: #ffffff;font-family: 'Martel', serif;">Architecture is not<br> Simply a Service, It's an Inspiration</div>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-74" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/sdpl-assets/images/slider/banner/banner2-800.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="2" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner2-800.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina alt="">  
                                            
                    <!-- LAYERS 1 border block-->
                    <div class="tp-caption rev-btn  tp-resizeme slider-block" 
                        id="slide-74-layer-1" 
                        data-x="['left','left','left','center']" data-hoffset="['0','100','60','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[250,250,250,200]"
                        data-paddingright="[250,150,150,150]"
                        data-paddingbottom="[250,250,250,200]"
                        data-paddingleft="[250,150,150,150]"

                        style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>   
                                                    
                    <!-- LAYER NR. 1 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-74-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>  
                                                                
                    <!-- LAYER 2 button -->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-74-layer-2" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power2.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button">Read More</a></div>



                    <!-- LAYER 5 title-->
                    <div class="tp-caption   tp-resizeme slider-tag-line" 
                        id="slide-74-layer-5" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: nowrap; font-size: 18px; line-height: 20px; font-weight: 400;font-family: 'Poppins', sans-serif; text-transform:uppercase ; "> Trust and recommend </div>

                    <!-- LAYER 6  tag line-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-74-layer-6" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']" 
                        data-fontsize="['40','45','40','40']"
                        data-lineheight="['70','60','70','50']"
                        data-width="['700','650','620','380']"
                        data-height="none"
                        data-whitespace="normal"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','center']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: normal;font-weight: 800; color: #ffffff;font-family: 'Martel', serif;">Inspiring World<br> With Innovative Space Design</div>
                </li>
                
                <!-- SLIDE  -->
                <li data-index="rs-75" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/sdpl-assets/images/slider/banner/banner3-800.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="3" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner3-800.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina alt=""> 
                    
                    <!-- LAYER NR. 1 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-75-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>    
                                                                        
                    <!-- LAYERS 1 border block-->
                    <div class="tp-caption rev-btn  tp-resizeme slider-block" 
                        id="slide-75-layer-1" 
                        data-x="['left','left','left','center']" data-hoffset="['0','100','60','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[250,250,250,200]"
                        data-paddingright="[250,150,150,150]"
                        data-paddingbottom="[250,250,250,200]"
                        data-paddingleft="[250,150,150,150]"

                        style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>                                 
                                
                    <!-- LAYER 2 button -->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-75-layer-2" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power2.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button">Read More</a></div>


                                                        
                    <!-- LAYER 5 title-->
                    <div class="tp-caption   tp-resizeme slider-tag-line" 
                        id="slide-75-layer-5" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: nowrap; font-size: 18px; line-height: 20px; font-weight: 400;font-family: 'Poppins', sans-serif; text-transform:uppercase;"> Trust and recommend </div>

                    <!-- LAYER 6  tag line-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-75-layer-6" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']" 
                        data-fontsize="['40','45','40','40']"
                        data-lineheight="['70','60','70','50']"
                        data-width="['700','650','620','380']"
                        data-height="none"
                        data-whitespace="normal"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','center']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: normal;font-weight: 800; color: #ffffff;font-family: 'Martel', serif;">Delivering High Quality, <br>Effective, and Inspiring Built Space</div>
                </li>  
                
                <!-- SLIDE  -->
                <li data-index="rs-76" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/sdpl-assets/images/slider/banner/banner11.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="4" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner11.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina alt="">  
                    
                    <!-- LAYER NR. 1 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-76-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>                
                                            
                    <!-- LAYERS 1 border block-->
                    <div class="tp-caption rev-btn  tp-resizeme slider-block" 
                        id="slide-76-layer-1" 
                        data-x="['left','left','left','center']" data-hoffset="['0','100','60','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[250,250,250,200]"
                        data-paddingright="[250,150,150,150]"
                        data-paddingbottom="[250,250,250,200]"
                        data-paddingleft="[250,150,150,150]"

                        style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>                                 
                                
                    <!-- LAYER 2 button -->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-76-layer-2" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power2.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button">Read More</a></div>

                    <!-- LAYER 5 title-->
                    <div class="tp-caption   tp-resizeme slider-tag-line" 
                        id="slide-76-layer-5" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: nowrap; font-size: 18px; line-height: 20px; font-weight: 400;font-family: 'Poppins', sans-serif; text-transform:uppercase;"> Trust and recommend </div>

                    <!-- LAYER 6  tag line-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-76-layer-6" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']" 
                        data-fontsize="['40','45','40','40']"
                        data-lineheight="['70','60','70','50']"
                        data-width="['700','650','620','380']"
                        data-height="none"
                        data-whitespace="normal"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','center']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: normal;font-weight: 800; color: #ffffff;font-family: 'Martel', serif;">Architecture is not<br> Simply a Service, It's an Inspiration</div>
                </li>
            
                <!-- SLIDE  -->
                <li data-index="rs-77" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/sdpl-assets/images/slider/banner/banner12.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="5" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner12.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina alt="">  
                    
                    <!-- LAYER NR. 1 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-77-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>                
                                            
                    <!-- LAYERS 1 border block-->
                    <div class="tp-caption rev-btn  tp-resizeme slider-block" 
                        id="slide-77-layer-1" 
                        data-x="['left','left','left','center']" data-hoffset="['0','100','60','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[250,250,250,200]"
                        data-paddingright="[250,150,150,150]"
                        data-paddingbottom="[250,250,250,200]"
                        data-paddingleft="[250,150,150,150]"

                        style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>                                 
                                
                    <!-- LAYER 2 button -->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-77-layer-2" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power2.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button">Read More</a></div>

                    <!-- LAYER 5 title-->
                    <div class="tp-caption   tp-resizeme slider-tag-line" 
                        id="slide-77-layer-5" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: nowrap; font-size: 18px; line-height: 20px; font-weight: 400;font-family: 'Poppins', sans-serif; text-transform:uppercase;"> Trust and recommend </div>

                    <!-- LAYER 6  tag line-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-77-layer-6" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']" 
                        data-fontsize="['40','45','40','40']"
                        data-lineheight="['70','60','70','50']"
                        data-width="['700','650','620','380']"
                        data-height="none"
                        data-whitespace="normal"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','center']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: normal;font-weight: 800; color: #ffffff;font-family: 'Martel', serif;">Architecture is not<br> Simply a Service, It's an Inspiration</div>
                </li>


                 <!-- SLIDE  -->
                 <li data-index="rs-78" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/sdpl-assets/images/slider/banner/banner15.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="6" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner15.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina alt="">  
                    
                    <!-- LAYER NR. 1 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-78-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>                
                                            
                    <!-- LAYERS 1 border block-->
                    <div class="tp-caption rev-btn  tp-resizeme slider-block" 
                        id="slide-78-layer-1" 
                        data-x="['left','left','left','center']" data-hoffset="['0','100','60','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[250,250,250,200]"
                        data-paddingright="[250,150,150,150]"
                        data-paddingbottom="[250,250,250,200]"
                        data-paddingleft="[250,150,150,150]"

                        style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>                                 
                                
                    <!-- LAYER 2 button -->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-78-layer-2" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power2.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button">Read More</a></div>

                    <!-- LAYER 5 title-->
                    <div class="tp-caption   tp-resizeme slider-tag-line" 
                        id="slide-78-layer-5" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: nowrap; font-size: 18px; line-height: 20px; font-weight: 400;font-family: 'Poppins', sans-serif; text-transform:uppercase;"> Trust and recommend </div>

                    <!-- LAYER 6  tag line-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-78-layer-6" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']" 
                        data-fontsize="['40','45','40','40']"
                        data-lineheight="['70','60','70','50']"
                        data-width="['700','650','620','380']"
                        data-height="none"
                        data-whitespace="normal"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','center']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: normal;font-weight: 800; color: #ffffff;font-family: 'Martel', serif;">Architecture is not<br> Simply a Service, It's an Inspiration</div>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-79" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/sdpl-assets/images/slider/banner/banner14.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="7" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner14.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina alt="">  
                    
                    <!-- LAYER NR. 1 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-79-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>                
                                            
                    <!-- LAYERS 1 border block-->
                    <div class="tp-caption rev-btn  tp-resizeme slider-block" 
                        id="slide-79-layer-1" 
                        data-x="['left','left','left','center']" data-hoffset="['0','100','60','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[250,250,250,200]"
                        data-paddingright="[250,150,150,150]"
                        data-paddingbottom="[250,250,250,200]"
                        data-paddingleft="[250,150,150,150]"

                        style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>                                 
                                
                    <!-- LAYER 2 button -->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-79-layer-2" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power2.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button">Read More</a></div>

                    <!-- LAYER 5 title-->
                    <div class="tp-caption   tp-resizeme slider-tag-line" 
                        id="slide-79-layer-5" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: nowrap; font-size: 18px; line-height: 20px; font-weight: 400;font-family: 'Poppins', sans-serif; text-transform:uppercase;"> Trust and recommend </div>

                    <!-- LAYER 6  tag line-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-79-layer-6" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']" 
                        data-fontsize="['40','45','40','40']"
                        data-lineheight="['70','60','70','50']"
                        data-width="['700','650','620','380']"
                        data-height="none"
                        data-whitespace="normal"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','center']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: normal;font-weight: 800; color: #ffffff;font-family: 'Martel', serif;">Architecture is not<br> Simply a Service, It's an Inspiration</div>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-80" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/sdpl-assets/images/slider/banner/banner16.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="8" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner16.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina alt="">  
                    
                    <!-- LAYER NR. 1 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-80-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>                
                                            
                    <!-- LAYERS 1 border block-->
                    <div class="tp-caption rev-btn  tp-resizeme slider-block" 
                        id="slide-80-layer-1" 
                        data-x="['left','left','left','center']" data-hoffset="['0','100','60','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[250,250,250,200]"
                        data-paddingright="[250,150,150,150]"
                        data-paddingbottom="[250,250,250,200]"
                        data-paddingleft="[250,150,150,150]"

                        style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>                                 
                                
                    <!-- LAYER 2 button -->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-80-layer-2" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power2.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button">Read More</a></div>

                    <!-- LAYER 5 title-->
                    <div class="tp-caption   tp-resizeme slider-tag-line" 
                        id="slide-80-layer-5" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: nowrap; font-size: 18px; line-height: 20px; font-weight: 400;font-family: 'Poppins', sans-serif; text-transform:uppercase;"> Trust and recommend </div>

                    <!-- LAYER 6  tag line-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-80-layer-6" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']" 
                        data-fontsize="['40','45','40','40']"
                        data-lineheight="['70','60','70','50']"
                        data-width="['700','650','620','380']"
                        data-height="none"
                        data-whitespace="normal"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','center']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: normal;font-weight: 800; color: #ffffff;font-family: 'Martel', serif;">Architecture is not<br> Simply a Service, It's an Inspiration</div>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-81" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/sdpl-assets/images/slider/banner/banner17.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="9" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner17.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina alt="">  
                    
                    <!-- LAYER NR. 1 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-81-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>                
                                            
                    <!-- LAYERS 1 border block-->
                    <div class="tp-caption rev-btn  tp-resizeme slider-block" 
                        id="slide-81-layer-1" 
                        data-x="['left','left','left','center']" data-hoffset="['0','100','60','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[250,250,250,200]"
                        data-paddingright="[250,150,150,150]"
                        data-paddingbottom="[250,250,250,200]"
                        data-paddingleft="[250,150,150,150]"

                        style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>                                 
                                
                    <!-- LAYER 2 button -->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-81-layer-2" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power2.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button">Read More</a></div>

                    <!-- LAYER 5 title-->
                    <div class="tp-caption   tp-resizeme slider-tag-line" 
                        id="slide-81-layer-5" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: nowrap; font-size: 18px; line-height: 20px; font-weight: 400;font-family: 'Poppins', sans-serif; text-transform:uppercase;"> Trust and recommend </div>

                    <!-- LAYER 6  tag line-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-81-layer-6" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']" 
                        data-fontsize="['40','45','40','40']"
                        data-lineheight="['70','60','70','50']"
                        data-width="['700','650','620','380']"
                        data-height="none"
                        data-whitespace="normal"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','center']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: normal;font-weight: 800; color: #ffffff;font-family: 'Martel', serif;">Architecture is not<br> Simply a Service, It's an Inspiration</div>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-82" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/sdpl-assets/images/slider/banner/banner18.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="10" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{asset('public/sdpl-assets/images/slider/banner/banner18.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina alt="">  
                    
                    <!-- LAYER NR. 1 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-82-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="on" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 5;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>                
                                            
                    <!-- LAYERS 1 border block-->
                    <div class="tp-caption rev-btn  tp-resizeme slider-block" 
                        id="slide-82-layer-1" 
                        data-x="['left','left','left','center']" data-hoffset="['0','100','60','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[250,250,250,200]"
                        data-paddingright="[250,150,150,150]"
                        data-paddingbottom="[250,250,250,200]"
                        data-paddingleft="[250,150,150,150]"

                        style="z-index: 8;"><div class="rs-wave"  data-speed="1" data-angle="0" data-radius="2px"></div></div>                                 
                                
                    <!-- LAYER 2 button -->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        id="slide-82-layer-2" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','0']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"                     
                        data-type="button" 
                        data-responsive_offset="on" 

                        data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power2.easeIn"}]'
                        
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index:9; line-height:30px;"><a href="Javascript:;" class="site-button">Read More</a></div>

                    <!-- LAYER 5 title-->
                    <div class="tp-caption   tp-resizeme slider-tag-line" 
                        id="slide-82-layer-5" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: nowrap; font-size: 18px; line-height: 20px; font-weight: 400;font-family: 'Poppins', sans-serif; text-transform:uppercase;"> Trust and recommend </div>

                    <!-- LAYER 6  tag line-->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-82-layer-6" 
                        data-x="['left','left','left','center']" data-hoffset="['100','140','140','20']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']" 
                        data-fontsize="['40','45','40','40']"
                        data-lineheight="['70','60','70','50']"
                        data-width="['700','650','620','380']"
                        data-height="none"
                        data-whitespace="normal"
            
                        data-type="text" 
                        data-responsive_offset="on" 

                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','center']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: normal;font-weight: 800; color: #ffffff;font-family: 'Martel', serif;">Architecture is not<br> Simply a Service, It's an Inspiration</div>
                </li>
            </ul>
            <div class="tp-bannertimer" style="height: 10px; background: rgba(0, 0, 0, 0.15);"></div>
        </div>
    </div>    --}}
    {{--
    <!-- WELCOME SECTION START -->
    <div class="section-full p-tb80 bg-white">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="welcome-block-two">
                            <div class="wt-media">
                                <img src="{{asset('public\sdpl-assets\images\slider\banner/latest-project-4.jpg')}}" alt="">
                            </div>
                       </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="index-about2 bg-gray">
                            <!-- TITLE START -->
                            <div class="section-head">
                                <div class="wt-separator-outer separator-left">
                                    <div class="wt-separator">
                                        <span class="text-primary text-uppercase sep-line-one ">Welcome to SDPL</span>
                                    </div>
                                </div>
                                <h2>We Create Beautiful Designs</h2>
                            </div>
                            <!-- TITLE END -->                            
                            <p>“A successful website does three things:
                                It attracts the right kinds of visitors.
                                Guides them to the main services or product you offer.
                                Collect Contact details for future ongoing relation.”
                            </p>
                                <div class="wt-tabs tabs-default border">
                                    <ul class="nav nav-tabs ">
                                        <li class="active"><a data-toggle="tab" href="#web-design-7">Architecture Design</a></li>
                                        <li><a data-toggle="tab" href="#graphic-design-7">Interior Design</a></li>
                                        <li><a data-toggle="tab" href="#developement-7">Structure Design</a></li>
                                    </ul>
                                    <div class="tab-content">
                                    
                                        <div id="web-design-7" class="tab-pane active">
                                            <p class="m-b0">“I want to make beautiful things, even if nobody cares, as opposed to ugly things. That’s my intent.”</p>
                                            <ul class="list-angle-right p-t15 m-b0">
                                                <li>Great Furniture Better Prices 2021</li>
                                                <li>Furnishing Your Home For Less.</li>
                                                <li>Quality Doesn’t Have To Be Expensive</li>
                                            </ul>
                                        </div>
                                        
                                        <div id="graphic-design-7" class="tab-pane">
                                            <p class="m-b0">Graphic design is the profession and academic discipline whose activity consists in projecting visual communications intended to transmit specific messages to social groups, with specific objectives.</p>
                                            <ul class="list-angle-right p-t15 m-b0">
                                                <li>Quality Doesn’t Have To Be Expensive</li>
                                                <li>Great Furniture Better Prices 2017</li>
                                                <li>Furnishing Your Home For Less.</li>
                                                
                                            </ul>
                                        </div>
                                        
                                        <div id="developement-7" class="tab-pane">
                                            <p class="m-b0">All growth depends upon activity. There is no development physically or intellectually without effort, and effort means work.</p>
                                            <ul class="list-angle-right p-t15 m-b0">
                                                <li>Furnishing Your Home For Less.</li>                                                    
                                                <li>Great Furniture Better Prices 2021</li>
                                                <li>Quality Doesn’t Have To Be Expensive</li>
                                            </ul>
                                        </div>   
                                    </div>
                                </div>
                        </div>                               
                    </div>                            
                </div>  
            </div>
        </div>
    </div>--}} 
    <!-- WELCOME SECTION END -->     

    
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
    

    {{--
    <!-- OUR TEAM SECTION START -->
    <div class="section-full small-device p-t80 p-b50 bg-gray">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-center">
                <div class="wt-separator-outer separator-center">
                    <div class="wt-separator">
                        <span class="text-primary text-uppercase sep-line-one ">Our Best Team</span>
                    </div>
                </div>
                <h2>Our Team</h2>
            </div>
            <!-- TITLE END --> 
           
            <!-- IMAGE CAROUSEL START -->
            <div class="row">
                <div class="col-md-4 col-sm-4 m-b30">
                    <div class="our-team-one">
                        <div class="team-bg">
                              <h4>Ajit Singh</h4><!--name -->
                        </div>
                        <div class="team-img">
                            <img src="public/sdpl-assets/images/our team/user.png" alt="" />
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void(0);" class="fab fa-google"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fab fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                                </ul>
                       </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 m-b30">
                    <div class="our-team-one">
                        <div class="team-bg">
                            <h4>Rajkumar</h4><!--name -->
                        </div>
                        <div class="team-img">
                            <img src="public/sdpl-assets/images/our team/user.png" alt="" />
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void(0);" class="fab fa-google"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fab fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 m-b30">
                    <div class="our-team-one">
                        <div class="team-bg">
                            <h4>Pradeep</h4><!--name -->
                        </div>
                        <div class="team-img">
                            <img src="public/sdpl-assets/images/our team/user.png" alt="" />
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void(0);" class="fab fa-google"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fab fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                                </ul>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>   
    <!-- OUR TEAM SECTITON END -->
    --}}
     
    <div class="section-full">
        <img src="public/sdpl-assets/images/slider/krishnajyoti.jpg" alt="Nature" class="responsive" width="600" height="400">
    </div>
    {{--
    <!-- LATEST NEWS SECTION START -->
    <div class="section-full small-device bg-gray p-t80 p-b40">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-center">
                <div class="wt-separator-outer separator-center">
                    <div class="wt-separator">
                        <span class="text-primary text-uppercase sep-line-one ">Our latest blog</span>
                    </div>
                </div>
                <h2>Latest News</h2>
            </div>
            <!-- TITLE END -->                   
           
            <!-- IMAGE CAROUSEL START -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="blog-post latest-blog-1  date-style-1">
                            <div class="wt-post-media wt-img-effect zoom-slow">
                                <a href="javascript:;"><img src="public/sdpl-assets/images/sdpl/blog1.jpg" alt=""></a>
                            </div>
                            <div class="wt-post-info">
                                <div class="post-date"> <strong>04 Feb 2019 </strong></div>                                     
                                <div class="wt-post-title">
                                    <h4 class="post-title"><a href="#">What a perfect and beautiful three day weekend in Brooklyn</a></h4>
                                </div>
                                <div class="wt-post-text">
                                    <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusd veritatis quis quam laboriosam asperiores</p> 
                                </div> 
                                <div class="wt-post-meta">
                                    <ul class="clearfix">
                                        <li class="post-author">
                                            <div class="post-author-pic">
                                                <a href="javascript:void(0);">
                                                    <span><img src="public/sdpl-assets/images/sdpl/Userteam.png" alt=""></span>
                                                    <span><strong> By</strong> Loretta Shelton</span>
                                                </a>
                                            </div> 
                                        </li>
                                        <li class="post-like"><i class="fa fa-heart-o"></i><a href="javascript:void(0);">5</a> </li>
                                        <li class="post-comment"><i class="fa fa fa-comments"></i><a href="javascript:void(0);">10</a> </li>                                                
                                    </ul>
                                </div>                                                                                                                          
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-12">
                        <div class="blog-post latest-blog-1 date-style-1">
                            <div class="wt-post-media wt-img-effect zoom-slow">
                                <a href="javascript:;"><img src="public/sdpl-assets/images/sdpl/blog2.jpg" alt=""></a>
                            </div>
                            <div class="wt-post-info">
                                <div class="post-date"> <strong>06 Feb 2019 </strong></div>                                     
                                <div class="wt-post-title">
                                    <h4 class="post-title"><a href="#">Interior design firm specializing in eco friendly design.</a></h4>
                                </div>
                                <div class="wt-post-text">
                                    <p>Internet tend to repeat predefined chunks as necessary, laboriosam asperiores making this the first true genera tor on the Internet.</p> 
                                </div> 
                                <div class="wt-post-meta">
                                    <ul class="clearfix">
                                        <li class="post-author">
                                            <div class="post-author-pic">
                                                <a href="javascript:void(0);">
                                                    <span><img src="public/sdpl-assets/images/sdpl/Userteam.png" alt=""></span>
                                                    <span><strong> By</strong> Loretta Shelton</span>
                                                </a>
                                            </div> 
                                        </li>
                                        <li class="post-like"><i class="fa fa-heart-o"></i><a href="javascript:void(0);">5</a> </li>
                                        <li class="post-comment"><i class="fa fa fa-comments"></i><a href="javascript:void(0);">10</a> </li>                                                
                                    </ul>
                                </div>                                                                                                                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-12">
                        <div class="blog-post latest-blog-1  date-style-1">
                            <div class="wt-post-media wt-img-effect zoom-slow">
                                <a href="javascript:;"><img src="public/sdpl-assets/images/sdpl/blog3.jpg" alt=""></a>
                            </div>
                            <div class="wt-post-info">
                                <div class="post-date"> <strong>04 Feb 2019 </strong></div>                                     
                                <div class="wt-post-title">
                                    <h4 class="post-title"><a href="#">What a perfect and beautiful three day weekend in Brooklyn</a></h4>
                                </div>
                                <div class="wt-post-text">
                                    <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusd veritatis quis quam laboriosam asperiores</p> 
                                </div> 
                                <div class="wt-post-meta">
                                    <ul class="clearfix">
                                        <li class="post-author">
                                            <div class="post-author-pic">
                                                <a href="javascript:void(0);">
                                                    <span><img src="public/sdpl-assets/images/sdpl/Userteam.png" alt=""></span>
                                                    <span><strong> By</strong> Loretta Shelton</span>
                                                </a>
                                            </div> 
                                        </li>
                                        <li class="post-like"><i class="far fa-heart-o"></i><a href="javascript:void(0);">5</a> </li>
                                        <li class="post-comment"><i class="far fa fa-comments"></i><a href="javascript:void(0);">10</a> </li>                                                
                                    </ul>
                                </div>                                                                                                                          
                            </div>
                        </div>
                    </div>                                                                                                            
                </div>
            </div>
        </div>   
    </div>   
    <!-- LATEST NEWS SECTION END -->
    --}}
    {{--
    <!-- OUR CLIENTS SECTION START -->
    <div class="section-full small-device bg-white   p-t80 p-b60">
        <div class="container">
        
            <!-- TITLE START -->
            <div class="section-head text-center">
                <div class="wt-separator-outer separator-center">
                    <div class="wt-separator">
                        <span class="text-primary text-uppercase sep-line-one ">Meet our clients</span>
                    </div>
                </div>
                <h2>Our Clients</h2>
            </div>
            <!-- TITLE END -->   

            <div class="section-content p-tb10 owl-btn-vertical-center">
                <div class="owl-carousel home-client-carousel-2">
                        
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="javascript:void(0);"><img src="public/sdpl-assets/images/our clients png/srit.jpg" alt=""></a></div>
                            <img src="public\sdpl-assets\images\What-we-do/next.png" alt="">
                        </div>
                    </div>
                            
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="javascript:void(0);"><img src="public/sdpl-assets/images/our clients png/srit.jpg" alt=""></a></div>
                            <img src="public\sdpl-assets\images\What-we-do/next.png" alt="">
                        </div>
                    </div>
                            
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="javascript:void(0);"><img src="public/sdpl-assets/images/our clients png/srit.jpg" alt=""></a></div>
                            <img src="public\sdpl-assets\images\What-we-do/next.png" alt="">
                        </div>
                    </div>
                            
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="javascript:void(0);"><img src="public/sdpl-assets/images/our clients png/srit.jpg" alt=""></a></div>
                            <img src="public\sdpl-assets\images\What-we-do/next.png" alt="">
                        </div>
                    </div>
                            
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="javascript:void(0);"><img src="public/sdpl-assets/images/our clients png/srit.jpg" alt=""></a></div>
                            <img src="public\sdpl-assets\images\What-we-do/next.png" alt="">
                        </div>
                    </div>
                            
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                            <a href="javascript:void(0);"><img src="public/sdpl-assets/images/our clients png/srit.jpg" alt=""></a></div>
                            <img src="public\sdpl-assets\images\What-we-do/next.png" alt="">
                        </div>
                    </div>            
                </div>
            </div>
        </div>
    </div>
    <!-- OUR CLIENTS SECTION END -->     
    --}}

    
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
    {{--
    <!-- LAST SECTION START -->
    <div class="section-full small-device  p-t80 p-b80 bg-white bg-repeat" style="background-image:url(public/sdpl-assets/images/background/ptn-1.png)">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7 m-b30">
                        <div class="owl-carousel testimonial-home owl-btn-top-right active">
                            <div class="item">
                                <div class="testimonial-5">

                                    <div class="testimonial-text">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-left text-primary"></span>
                                            <p>Thanks to the entire team at Archisoul for designing a stunning home, catering for every one of our desires: cathedral ceilings, spacious living areas, northern light, nil wasted space, internal storage and work spaces, indoor/outdoor living solution, media room, separate rumpus for the kids, and enhancing the miraculous views.</p>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name text-black">Shri Design Desk</strong>
                                            <span class="testimonial-position p-t5">Founder</span>
                                        </div>                                            
                                        <div class="testimonial-pic-block"> 
                                            <div class="testimonial-pic">
                                                <img src="public/sdpl-assets/images/sdpl/Userteam.png" width="132" height="132" alt="">
                                            </div>
                                        </div>
                                    </div>                                            
                                    
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-5">

                                    <div class="testimonial-text">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-left text-primary"></span>
                                            <p>We have just finished building a new home on the northern beaches of Sydney. In choosing an architect, we brought a challenging brief to the table, in terms of site constraints, land orientation, budget, and most importantly, a contemporary ‘beach-living’ design style.

                                                I am happy to say Jo Gillies and her team “got us” immediately. </p>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name text-black">Somil Jain</strong>
                                            <span class="testimonial-position p-t5">Chief Executive Officer</span>
                                        </div>                                            
                                        <div class="testimonial-pic-block"> 
                                            <div class="testimonial-pic">
                                                <img src="public/sdpl-assets/images/sdpl/Userteam.png" width="132" height="132" alt="">
                                            </div>
                                        </div>
                                    </div>                                            
                                    
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-5">

                                    <div class="testimonial-text">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-left text-primary"></span>
                                            <p>Archisoul are a great team of forward-thinking Architects who maintain an ecologically aware soul! With awareness of permaculture, the uniquiness of each site and the sacred geometry of spaces, they are equally at home when designing large and complex projects as they are with creating the tiniest beautiful detail.</p>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name text-black">Anupam khare</strong>
                                            <span class="testimonial-position p-t5">Managing Director</span>
                                        </div>                                            
                                        <div class="testimonial-pic-block"> 
                                            <div class="testimonial-pic">
                                                <img src="public/sdpl-assets/images/sdpl/Userteam.png" width="132" height="132" alt="">
                                            </div>
                                        </div>
                                    </div>                                            
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="counter-section-one">
                            <div class="counter-sec-top">
                                <div class="p-a20 text-black wt-icon-box-wraper center">
                                    <div class="counter font-40 m-b5">250</div>
                                    <h4>Total Projects</h4>
                                </div>                                    	
                            </div>
                            <div class="counter-sec-bottom">
                                <div class="p-a20 text-black wt-icon-box-wraper center">
                                    <div class="counter font-40 m-b5">47</div>
                                    <h4>Expert Designer's</h4>
                                </div>                                    	
                            </div>                                    
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>--}}
    <!-- LAST SECTION END-->
        

@endsection
    