@extends('layouts.user.app')
@section('page_title', 'demo modal')
@section('style')
<style>
   .hide{
   display: none;
   }
</style>
@endsection
@section('content')
{{--Stast basic detail model --}}
<div class="modal fade " id="IformBasicDetailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">IForm Basic Detail</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         {{-- 
         <form action="{{route('iform.iform-basic')}}" method="POST"> --}}
         <form id='basicIform'>
            @csrf
            <div class="modal-body">
               <div id="save_err_list"></div>
               <div class="row">
                  <div class="col-md-2">
                     <select id="title" name="title" class="title form-select">
                        <option selected disabled>Choose...</option>
                        <option value="{{MyApp::MR}}">Mr</option>
                        <option value="{{MyApp::MRS}}">Mrs</option>
                     </select>
                  </div>
                  <div class="col-md-5">
                     <div class="form-group mb-3">
                        <input type="text" name="first_name" id="first_name" class="first_name form-control" placeholder="First name" aria-required="true" aria-invalid="false" >
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="form-group mb-3">
                        <input type="text" name="last_name" id="last_name" class="last_name form-control" placeholder="Last name" >
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3">
                     <div class="form-group mb-3">
                        <input type="text" name="mobile" id="mobile" class="mobile form-control" placeholder="Mobile no" >
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3">
                        <input type="email" name="email" id="email" class="email form-control" placeholder="Email id" >
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group mb-3">
                        <input type="text" name="city" id="city" class="city form-control" placeholder="City" >
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-5">
                     <div class="form-group mb-3">
                        <select id="floor" name="floor" class="floor form-select" >
                           <option selected disabled>Floors...</option>
                           <option value="{{MyApp::ONE_FLOOR_G}}">One Floor (G)</option>
                           <option value="{{MyApp::TWO_FLOOR_G}}">2 Floor (G+1)</option>
                           <option value="{{MyApp::THREE_FLOOR_G}}">3 Floor (G+2)</option>
                           <option value="{{MyApp::FOUR_FLOOR_G}}">4 Floor (G+3)</option>
                           <option value="{{MyApp::TEXT}}">Text</option>
                        </select>
                        <input type="text" name="floor_text" class="floor_text form-control hide" id="floor_text" placeholder="Input text here" >
                     </div>
                  </div>
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-2">
                           <label for="">Vastu :</label>
                        </div>
                        <div class="col-md-9">
                           <div class="form-group mb-3">
                              <div class="form-check col-sm-8">
                                 <input class="form-check-input vastu"  type="checkbox" name="vastu[]" value="Moderate Considerations" id="flexCheckDefault">
                                 <label class="form-check-label" for="flexCheckDefault">
                                 Moderate Considerations 
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input vastu" type="checkbox" name="vastu[]" value="Consult Expert" id="flexCheckChecked">
                                 <label class="form-check-label" for="flexCheckChecked">
                                 Consult Expert
                                 </label>
                                 <button type="button" class="btn badge bg-info btn-sm vastuRead" data-bs-toggle="modal" data-bs-target="#ReadVastuModal">Read</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary savebtn">Save Detail</button>
            </div>
         </form>
      </div>
   </div>
</div>
{{-- Read vastu expert model --}}
<div class="modal fade" id="ReadVastuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <ol >
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
               <li>This is a list.</li>
            </ol>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
         </div>
      </div>
   </div>
</div>
{{-- Read vastu expert model --}}
{{-- Entrance detail model --}}
<div class="modal fade " id="IformEntranceGateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">IForm Entrance Gate Detail</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         {{-- <form action="{{route('iform.iform-entrance')}}" method="POST"> --}}
         <form id='entranceIform'>
            @csrf
            <div class="modal-body">
               <div id="save_err_list"></div>
               <div class="row">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="entrancegate" name="entrancegate" class="title form-select" onchange="fentrancegate(this.value);">
                           <option selected disabled>Entrance Gate</option>
                           <option value="One Gate">One Gate</option>
                           <option value="Two Gate">Two Gate</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3">
                        <input type=file name= "egateimg" class="form-control" id="egate">  
                     </div>
                  </div>
               </div>
               <div class="row" id="one_gate">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="onegate" name="onegate" class="onegate form-select">
                           <option selected disabled>One Gate</option>
                           <option value="">12' 0" Wide</option>
                           <option value="">14' 0" Wide</option>
                           <option value="">--- feet Wide</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3">
                        <input type=file name= "onegateimg" class="form-control" id="onegateimg">  
                     </div>
                  </div>
               </div>
               <div class="row" id ="two_gate">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="twogateselect" name="twogateselect" class="twogate form-select" onchange="ftwogate(this.value);">
                           <option selected disabled>Two gate</option>
                           <option value="Adjucent">Adjucent</option>
                           <option value="Different Customised Location">Different Customised Location</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3">
                        <input type=file name="twogateimg" class="form-control" id="twogateimg">  
                     </div>
                  </div>
               </div>
               <div class="row" id="adj">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="adjucent" name="adjucent" class="adjucent form-select" onchange="fadjucent(this.value);">
                           <option selected disabled>Adjucent</option>
                           <option value="Main Car Gate">Main Car Gate</option>
                           <option value="Side Padestrian Gate">Side Padestrian Gate</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3">
                        <input type=file name= "tgadjucentimg" class="form-control" id="tgadjucentimg">  
                     </div>
                  </div>
               </div>
               <div class="row" id ="cust">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="differentcustomisedlocation" name="differentcustomisedlocation" class="title form-select">
                           <option selected disabled>Different Customised Location</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3">
                        <input type=file name= "differentcustomisedlocationimg" class="form-control" id="differentcustomisedlocationimg">  
                     </div>
                  </div>
               </div>
               <!-- if main car gate selected then -->
               <div class="row" id="main_car_gate">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="maincargate" name="maincargate" class="maincargate form-select">
                           <option selected disabled>Main Car Gate</option>
                           <option value="">12' 0" Wide</option>
                           <option value="">14' 0" Wide</option>
                           <option value="">--- Feet Wide</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                  </div>
               </div>
               <!-- if side padestrain -->
               <div class="row" id="side_padestrain_gate">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="sidepadestriangate" name="sidepadestriangate" class="sidepadestriangate form-select">
                           <option selected disabled>Side Padestrian Gate</option>
                           <option value="">3'- 0" Wide</option>
                           <option value="">4'- 0" Wide</option>
                           <option value="">--- Feet Wide</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                  </div>
               </div>
               <!-- if security kiosq -->
               <div class="row">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="securitykiosq" name="securitykiosq" class="securitykiosq form-select">
                           <option selected disabled>Security Kiosq</option>
                           <option value="withsleeping">With Sleeping Space</option>
                           <option value="withoutsleeping">Without Sleeping Space</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                  </div>
               </div>
               <!-- porch -->
               <div class="row">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="porch" name="porch" class="title form-select" onchange="fporch(this.value);">
                           <option selected disabled>Porch</option>
                           <option value="Visual Nature">Visual Nature</option>
                           <option value="Car Parking space">Car Parking space</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                  </div>
               </div>
               <div class="row" id="visual_nature">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="visualnature" name="visualnature" class="visualnature form-select" onchange="fvisualnature(this.value);">
                           <option selected disabled>Visual Nature</option>
                           <option value="Single Height">Single Height</option>
                           <option value="Double Height">Double Height</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3">
                        <span id="visual_nature_img"><input type="file" name= "visualnatureimg" class="form-control" id="visualnatureimg"></span>  
                     </div>
                  </div>
               </div>
               <div class="row" id ="car_parking_space">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="carparking" name="carparking" class="carparking form-select" onchange="fcarparking(this.value);">
                           <option selected disabled>Carparking Space</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="Text For More">Text For More</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3">
                        <span id="car_parking_space_img"><input type="file" name="carparkingspaceimg" class="form-control" id="carparkingspaceimg"></span><span id="car_parking_space_text"><input type="text" name="carparkingspacetxt" class="form-control" id="carparkingspacetxt"></span>  
                     </div>
                  </div>
               </div>
               <!-- porch -->
               <!-- foyer/welcomelobby -->
               <div class="row" id ="">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="foyer" name="foyer" class="foyer form-select" onchange="ffoyer(this.value);">
                           <option selected disabled>Foyer/welcome lobby</option>
                           <option value="Hilighter">Hilighter/Welcome Wall</option>
                           <option value="Shue Rack Space">Shue Rack Space</option>
                           <option value="Approx Area">Approx Area</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3">
                        <span id="foyer_img"><input type="file" name="foyerimg" class="form-control" id="foyerimg"></span><span id="foyer_text"><input type="text" name="foyertxt" class="form-control" id="foyertxt"></span>
                     </div>
                  </div>
               </div>
               <!-- foyer/welcomelobby -->
               <!-- verandah -->
               <div class="row" id ="">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="verandah" name="verandah" class="verandah form-select" onchange="fverandah(this.value);">
                           <option selected disabled>Verandah</option>
                           <option value="Out Side Open">Out Side Open</option>
                           <option value="Out Side Closed With Glass or Grill">Out Side Closed With Glass or Grill</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3">
                        <span id="verandah_img"><input type=file name="verandahimg" class="form-control" id="verandahimg"></span>  
                     </div>
                  </div>
               </div>
               <!-- verandah -->
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary savebtn">Save Detail</button>
            </div>
         </form>
      </div>
   </div>
</div>
{{-- end Entrance detail model --}}
{{-- exclusive formal drawing hall --}}
<div class="modal fade " id="IformFormalDrawingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">IForm Formal Drawing Detail</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         {{-- 
         <form action="{{route('iform.iform-formaldrawing')}}" method="POST"> --}}
         <form id='entranceIform'>
            @csrf
            <div class="modal-body">
               <div id="save_err_list"></div>
               <div class="row">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="drawinghall" name="drawinghall" class="title form-select" onchange="fdrawinghall(this.value);">
                           <option selected disabled> Formal Drawing Hall</option>
                           <option value="Guest Toilet Connectivity">Guest Toilet Connectivity</option>
                           <option value="Fire Placed Inside">Fire Placed Inside</option>
                           <option value="Special Featured Inside Text">Special Featured Inside Text</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3">
                        <span id="drawing_hall_img">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="drawinghallimg" id="drawinghallimg1" value="option1">
                              <label class="form-check-label" for="inlineRadio1"><img src="" alt="" width="100px" height="100px"></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="drawinghallimg" id="drawinghallimg2" value="option2" checked="checked">
                                <label class="form-check-label" for="inlineRadio2"><img src="" alt="" width="100px" height="100px"></label>
                           </div>
                           </span><span id="drawing_hall_text"><input type="text" name= "drawinghalltxt" class="form-control" id="drawinghalltxt"></span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="livinghall" name="livinghall" class="title form-select" onchange="flivinghall(this.value)">
                           <option selected disabled> Living Drawing Hall</option>
                           <option value="Powder Toilet">Powder Toilet</option>
                           <option value="Fire Placed Inside">Fire Placed Inside</option>
                           <option value="Double Height">Double Height</option>
                           <option value="Special Featured Inside Text">Special Featured Inside Text</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3">
                        <span id="living_hall_img">
                        <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="livinghallimg" id="livinghallimg1" value="option1">
                              <label class="form-check-label" for="inlineRadio1"><img src="" alt="" width="100px" height="100px"></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="livinghallimg" id="livinghallimg2" value="option2" checked="checked">
                                <label class="form-check-label" for="inlineRadio2"><img src="" alt="" width="100px" height="100px"></label>
                           </div>   
                        </span><span id="living_hall_text"><input type="text" name= "livinghalltxt" class="form-control" id="livinghalltxt"></span>  
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="kitchen" name="kitchen" class="kitchen form-select" onchange="ffkitchen(this.value)">
                           <option selected disabled>kitchen</option>
                           <option value="floor">Floor</option>
                           <option value="Kitchen Dining Function">Kitchen Dining Function</option>
                           <option value="Central Island">Central Island</option>
                           <option value="Attached Store">Attached Store</option>
                           <option value="Wash Area Open">Wash Area Open</option>
                           <option value="Utility Wash Room">Utility Wash Room</option>
                           <option value="Refrigerator size">Refrigerator size</option>
                           <option value="Breakfast Table Area Inside">Breakfast Table Area Inside</option>
                           <option value="Test Your Specific Requirement">Test Your Specific Requirement</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-3" >
                        <span id="kitchen_sqft_txt"><input type="text" name= "kitchensqft"  class ="form-control" id="kitchensqft" placeholder="Kitchen SqFt"></span>
                     </div>
                     
                        <div class="col-md-3" >
                        <span id="kitchen_sqft_attached_wash_utility"><input type="text" name= "kitchensqftattached"  class ="form-control" id="kitchensqftattached" placeholder="Square Feet"></span><span id="kitchen_sqft_textyourrequirement"><input type="text" name= "kitchensqfttextyourrequirement"  class ="form-control" id="kitchensqfttextyourrequirement" placeholder="Text Your Requirement"></span>
                         </div>
                </div>
                         <div class="row">
                            <div class="col-md-6">
                           <div id="kitchen_sqft_img">
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="kitchensqft" id="kitchensqft1" value="option1">
                              <label class="form-check-label" for="inlineRadio1"><img src="" alt="" width="100px" height="100px"></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kitchensqft" id="kitchensqft2" value="option2" checked="checked">
                                <label class="form-check-label" for="inlineRadio2"><img src="" alt="" width="100px" height="100px"></label>
                           </div>   
                        </div>
                     </div>
                     </div>
               <div class="row" id="kitchen_floor">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="floor" name="floor" class="floor form-select" onchange="f_kitchen_floor(this.value);">
                           <option selected disabled>Floor</option>
                           <option value="Ground">Ground</option>
                           <option value="First">First</option>
                           <option value="Text Your Requirement">Text Your Requirement</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3" >
                        <span id="floortextyourrequirementtxt"><input type=text name= "floortextyourrequirement" class ="form-control" id="floortextyourrequirement"></span>
                        
                     </div>
                  </div>
               </div>
               <div class="row" id="kitchenfloor">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="floor" name="floor" class="floor form-select">
                           <option selected disabled>Kitchen Dining Function</option>
                           <option value="full open to dining">full open to dining</option>
                           <option value="partial open to dining">partial open to dining</option>
                           <option value="open with a resonable opening">open with a resonable opening</option>
                           <option value="open with a door">open with a door</option>
                        </select>
                     </div>
                  </div>
               </div>
               <!-- pantry -->
               <div class="row">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="pantry" name="pantry" class="pantry form-select" onchange="fpantry(this.value);">
                           <option selected disabled>Pantry</option>
                           <option value="Floor">Floor</option>
                           <option value="Ground">Ground</option>
                           <option value="First">First</option>
                           <option value="Text Your Requirement">Text Your Requirement</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3" >
                        <span id="pantry_sqft"><input type=text name= "pantrysqft" class ="form-control" id="pantrysqft" placeholder="Floor SqFt"></span><span id="textyourrequirementsqftpantry"><input type="text" name= "textyourrequirementsqftpantry" class ="form-control" placeholder="Text Your Requirement"></span>
                     </div>
                  </div>
               </div>
               <!-- Pantry -->
               <!-- Dining -->
               <div class="row">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="Dining" name="Dining" class="Dining form-select" onchange="fdining(this.value)">
                           <option selected disabled>Dining</option>
                           <option value="Floor">Floor</option>
                           <option value="Dining Seats">Dining Seats</option>
                           <option value="With Crockery Storage And Display">With Crockery Storage And Display</option>
                           <option value="with NearBy Wash Basin">with NearBy Wash Basin</option>
                           <option value="Double Height">Double Height</option>
                           <option value="Test Your Requirement">Test Your Requirement</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3" >
                        <span id="test_your_requirements"><input type=text name= "test_your_requirements_sqft" class ="form-control" id="test_your_requirements_sqft" placeholder="Test Your Requirement"></span>
                     </div>
                  </div>
               </div>
               <div class="row" id="d_floor">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="dfloor" name="dfloor" class="dfloor form-select"onchange="fdfloor(this.value)">
                           <option selected disabled>Floor</option>
                           <option value="Ground">Ground</option>
                           <option value="First">First</option>
                           <option value="Text Your Requirement">Text Your Requirement</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3" >
                        <span id="dining_sqft"><input type=text name= "diningsqft" class ="form-control" id="diningsqft" placeholder="Dining Floor Text Your Requirement"></span>
                     </div>
                  </div>
               </div>
               <div class="row" id="dining_seats">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="diningseats" name="diningseats" class="diningseats form-select" onchange="fdining_seats(this.value)">
                           <option selected disabled>Dining Seats</option>
                           <option value="6">6</option>
                           <option value="8">8</option>
                           <option value="12">12</option>
                           <option value="Text Your Requirement">Text Your Requirement</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group mb-3" >
                        <span id="dining_seats_sqft"><input type="text" name= "diningsqft" class ="form-control" id="diningsqft" placeholder="Dining Seats Text Your Requirement"></span>
                     </div>
                  </div>
               </div>
               <!-- Dining -->
               <!-- floor store -->
               <div class="row">
                  <div class= "col-md-6">
                     <div class="form-group mb-3">
                        <select id="floorstore" name="floorstore" class="floorstore form-select" onchange="ffloorstore(this.value)">
                           <option selected disabled>Floor Store / Floor</option>
                           <!-- <option value="dsfloor">Floor</option> -->
                           <option value="Ground">Ground</option>
                           <option value="First">First</option>
                           <option value="Text Your Requirement">Text Your Requirement</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-3">
                  <span id="floorstoresqft"><input type="text" name= "floorstoresqft" class ="form-control" placeholder="Floor Store Sqft"></span> 
               </div>
                      <div class=" col-md-3" >
                      <span id="text_your_requirement"><input type="text" name= "textyourrequirement" class ="form-control" id="textyourrequirement" placeholder="Text Your Requirement"></span>
                     </div> 
               </div>
               <!-- floor store -->
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary savebtn">Save Detail</button>
            </div>
         </form>
      </div>
   </div>
</div>
{{-- exclusive formal drawing hall --}}
{{-- exclusive pooja room --}}
<div class="modal fade " id="IformPoojaRoomModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">IForm Stair Case lift Pooja Room Detail</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         {{-- 
         <form action="{{route('iform.iform-kitchen')}}" method="POST"> --}}
         <form id='kitchenIform'>
            @csrf
            <div class="modal-body">
               <div id="save_err_list"></div>

               <div class="card">
                  <div class="card-header">Stair Case</div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-3">
                           <select id="staircase" name="staircase" class="staircase form-select" onchange="fstaircase(this.value);">
                           <option selected disabled>Stair Case</option>
                           <option value="Dog Lagged">Dog Lagged</option>
                           <option value="Open Well">Open Well</option>
                           <option value="Spiral">Spiral</option>
                           <option value="Style 1">Style 1</option>
                           <option value="Style 2">Style 2</option>
                           <option value="Style 3">Style 3</option>
                           <option value="Style 4">Style 4</option>
                           <option value="Upload Ref Sketch">Upload Ref Sketch</option>
                           </select>
                        </div>
                        <div class="form-group col-md-3">
                        <span id="stair_case_img"><input type="file" name= "staircaseupload" class="form-control" id="staircaseupload"></span><span id="staircaserefrence"><img src="" alt="" width="100px" height="100px"></span>
                        </div>
                        <div class="col-md-3">
                        <select id="lift" name="lift" class="lift form-select" onchange="flift(this.value);">
                           <option selected disabled>Lift Capacity</option>
                           <option value="4">4</option>
                           <option value="6">6</option>
                           <option value="8">8</option>
                           <option value="Text Your Requirements">Text Your Requirements</option>
                        </select>
                        </div>
                        <div class="form-group col-md-3">
                        <span id="passanger_capacity_text"><input type="text" name= "passangercapacitytext" class="form-control" id="passangercapacitytext"></span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- card end -->
               <div class="card">
                        <div class="card-header">
                           <div class="row">
                              <div class= "col-md-3">
                                  <label>Pooja Room</label>
                                  </div>
                                  <div class= "col-md-3">
                                 <span id="pooja_room_sqft"><input type="text" name= "poojaroomsqft" class ="form-control" id="poojaroomsqft" placeholder="Pooja Room SqFt"></span>
                                 </div>
                            </div>
                        </div>
                  <div class="card-body">
                  <div class="row" id="pooja_room_floor">
                     <label class="card card-header"> Floor</label>
                              <div class= "col-md-3">
                                 <input type="checkbox" name="floorgroundchk" id="floorgroundchk" value=""> Ground 
                              </div>
                              <div class= "col-md-2">
                                 <input type="checkbox" name="floorfirstchk" id="floorfirstchk" value=""> First
   
                              </div>
                              <div class= "col-md-4">
                                 <input type="checkbox" name="floortextyourrequirementchk" id="floortextyourrequirementchk" value=""> Text Your Requirement
                              </div>
                              <div class= "col-md-3">
                                 <span id="pooja_room_text"><input type="text" name= "poojaroomtext" class ="form-control" id="poojaroomtext"></span>
                              </div>
                           </div>
                           <div class="row" id="pooja_room_type">
                           <label class="card card-header"> Type</label>
                              <div class= "col-md-4">
                                 <input type="checkbox" name="typeproperroomchk" id="typeproperroomchk" value=""> Proper Room
                                 <span id="pooja_room_type_sqft"><input type="text" name= "properroomtypesqft" class ="form-control" id="properroomtypesqft"></span><span id="pooja_room_type_img"><img src="" alt="Pooja Room" width="100px" height="100px"></span>
                              </div>
                              <div class= "col-md-4">
                                 <input type="checkbox" name="typeonlyplacechk" id="typeonlyplacechk" value=""> Only Place
                                 <div id="pooja_room_type_onlyplace_img"><img src="" alt="Pooja Room" width="100px" height="100px"></div>
                              </div>
                              <div class= "col-md-4">
                                 <input type="checkbox" name="typeopeningtowardslivinghallchk" id="typeopeningtowardslivinghallchk" value=""> Opening Towards Living Hall
                                 
                              </div>
                           </div>
                  </div>
               </div>
               
              <!-- pooja room completed  -->  
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary savebtn">Save Detail</button>
            </div>
         </form>
      </div>
   </div>
</div>
{{-- exclusive pooja room hall --}}
{{-- exclusive Bed Room Detail --}}
<div class="modal fade " id="IformbedroomModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">IForm Bed Room Detail</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         {{-- 
         <form action="{{route('iform.iform-kitchen')}}" method="POST"> --}}
         <form id='kitchenIform'>
            @csrf
            <div class="modal-body">
               <div id="save_err_list"></div>
               <div class="card">
                  <div class="card-header">Bed Rooms</div>
                  <div class="card-body">
                     <div class="row">
                        <div class= "col-md-2">
                           <div class= "col-md-2">   
                              <input type="checkbox" name="masterbedroomschk" id="masterbedroomschk" value="">
                           </div>
                           <div class= "col-md-10">
                              Master Bed Rooms
                              <!-- <input type="text"name="masterbedroomssqft" class="form-control">     -->
                           </div>
                        </div>
                        <div class= "col-md-2">
                           <div class= "col-md-2">   
                              <input type="checkbox" name="sonbedroomschk" id="sonbedroomschk" value="">
                           </div>
                           <div class= "col-md-10">
                              Son Bed Rooms    
                           </div>
                        </div>
                        <div class= "col-md-2">
                           <div class= "col-md-2">   
                              <input type="checkbox" name="daughterbedroomschk" id="daughterbedroomschk" value="">
                           </div>
                           <div class= "col-md-10">
                              Daughter Bed Rooms    
                           </div>
                        </div>
                        <div class= "col-md-2">
                           <div class= "col-md-2">   
                              <input type="checkbox" name="parentsbedroomschk" id="parentsbedroomschk" value="">
                           </div>
                           <div class= "col-md-10">
                              Parents Bed Rooms    
                           </div>
                        </div>
                        <div class= "col-md-2">
                           <div class= "col-md-2">   
                              <input type="checkbox" name="guestbedroomschk" id="guestbedroomschk" value="">
                           </div>
                           <div class= "col-md-10">
                              Guest Bed Rooms    
                           </div>
                        </div>
                        <div class= "col-md-2">
                           <div class= "col-md-2">   
                              <input type="checkbox" name="otherbedroomschk" id="otherbedroomschk" value="">
                           </div>
                           <div class= "col-md-10">
                              Other Bed Rooms    
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row" id="masterbedrooms">
                  <div class= "col-md-12">
                     <div class="card">
                        <div class="card-header">Master Bed Rooms</div>
                        <div class="card-body">
                           <div class="row">
                              <div class= "col-md-3">
                                 <select id="masterbedroom" name="masterbedroom" class="masterbedroom form-select" onchange="flocation(this.value);">
                                    <option selected disabled>Location</option>
                                    <option value="Ground">Ground</option>
                                    <option value="First">First</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <input type="text"name="locationtext" id="locationdpdn" class="form-control" placeholder="Location Text">
                              </div>
                              <div class= "form-group col-md-3">
                                 <!-- <div class= "form-group col-md-3">    -->
                                 <select id="nos" name="nos" class="nos form-select" onchange="fnos(this.value);">
                                    <option selected disabled>Choose</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="nostext"><input type="text"name="nostext" class="form-control" placeholder="Nos Text"></span>
                              </div>
                              <div class= "col-md-3">
                                 <select id="facility" name="facility" class="facility form-select" onchange="ffacility(this.value);">
                                    <option selected disabled> Toilet Facility</option>
                                    <option value="Shower Encloser">Shower Encloser</option>
                                    <option value="Jacuzee Bath Tub">Jacuzee Bath Tub</option>
                                    <option value="Both">Both</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="toiletfacilitytext"><input type="text"name="facilitytext" class="form-control" placeholder="Facility Text"></span>            
                              </div>
                              <div class= "form-group col-md-3" >
                                 <input type="text"name="toilet" class="form-control" placeholder="Toilet Square Feet">
                              </div>
                           </div>
                           <div class="row">
                              <div class= "col-md-3">
                                 <select id="dressfacility" name="dressfacility" class="dressfacility form-select" onchange="fdfacility(this.value);">
                                    <option selected disabled>Dress Facility</option>
                                    <option value="Vanity">Vanity</option>
                                    <option value="Cupboard">Cupboard</option>
                                    <option value="Walk In Cupboard">Walk In Cupboard</option>
                                    <option value="Text">Text</option>
                                    <option value="Upload Ref Image">Upload Ref Image</option>
                                 </select>
                                 <span id="dressfacilitytext"><input type="text"name="dressfacilitytext" class="form-control" placeholder="Dress Facility Text"></span><span id="dressfacilityimg"><input type="file"name="dressfacilityimg" class="form-control"></span>            
                              </div>
                              <div class= "form-group col-md-3" >
                                 <input type="text" name="dresssquarefeet" class="form-control" placeholder="Dress Square Feet">
                              </div>
                              <div class= "col-md-3">
                                 <select id="roomfacility" name="roomfacility" class="roomfacility form-select" onchange="froomfacility(this.value);">
                                    <option selected disabled>Room Facility</option>
                                    <option value="Sofa Arrangement">Sofa Arrangement</option>
                                    <option value="Chair Arrangement">Chair Arrangement</option>
                                    <option value="Laptop Table">Laptop Table</option>
                                    <option value="Mini Bar">Mini Bar</option>
                                    <option value="Tv">Tv</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="roomfacilitytext"><input type="text" name="roomfacilitytext" class="form-control" placeholder="Room Facility Text"></span><span id="roomfacilityimg"><img src="" alt="Room facility image" width="100" height="100" class="form-control"></span>            
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- mastercomplete -->
               <!-- Son Start -->
               <div class="row" id="sonbedrooms">
                  <div class= "col-md-12">
                     <div class="card">
                        <div class="card-header">Son Bed Rooms</div>
                        <div class="card-body">
                           <div class="row">
                              <div class= "col-md-3">
                                 <select id="sonbedroom" name="sonbedroom" class="sonbedroom form-select" onchange="fsonlocation(this.value);">
                                    <option selected disabled>Location</option>
                                    <option value="Ground">Ground</option>
                                    <option value="First">First</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <input type="text"name="sonlocationtext" id="sonlocationdpdn" class="form-control" placeholder="Location Text">
                              </div>
                              <div class= "form-group col-md-3">
                                 <!-- <div class= "form-group col-md-3">    -->
                                 <select id="nos" name="nos" class="nos form-select" onchange="fsonnos(this.value);">
                                    <option selected disabled>Choose</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="sonnostext"><input type="text"name="sonnostext" class="form-control" placeholder="Nos Text"></span>
                              </div>
                              <div class= "col-md-3">
                                 <select id="sonfacility" name="sonfacility" class="sonfacility form-select" onchange="fsonfacility(this.value);">
                                    <option selected disabled>Toilet Facility</option>
                                    <option value="Shower Encloser">Shower Encloser</option>
                                    <option value="Jacuzee Bath Tub">Jacuzee Bath Tub</option>
                                    <option value="Both">Both</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="sontoiletfacilitytext"><input type="text"name="sonfacilitytext" class="form-control" placeholder="Facility Text"></span>            
                              </div>
                              <div class= "form-group col-md-3" >
                                 <input type="text"name="sontoilet" class="form-control" placeholder="Toilet Square Feet">
                              </div>
                           </div>
                           <div class="row">
                              <div class= "col-md-3">
                                 <select id="sondressfacility" name="sondressfacility" class="sondressfacility form-select" onchange="fsondfacility(this.value);">
                                    <option selected disabled>Dress Facility</option>
                                    <option value="Vanity">Vanity</option>
                                    <option value="Cupboard">Cupboard</option>
                                    <option value="Walk In Cupboard">Walk In Cupboard</option>
                                    <option value="Text">Text</option>
                                    <option value="Upload Ref Image">Upload Ref Image</option>
                                 </select>
                                 <span id="sondressfacilitytext"><input type="text"name="sondressfacilitytext" class="form-control" placeholder="Dress Facility Text"></span><span id="sondressfacilityimg"><input type="file"name="sondressfacilityimg" class="form-control"></span>            
                              </div>
                              <div class= "form-group col-md-3" >
                                 <input type="text" name="sondresssquarefeet" class="form-control" placeholder="Dress Square Feet">
                              </div>
                              <div class= "col-md-3">
                                 <select id="sonroomfacility" name="sonroomfacility" class="sonroomfacility form-select" onchange="fsonroomfacility(this.value);">
                                    <option selected disabled>Room Facility</option>
                                    <option value="Sofa Arrangement">Sofa Arrangement</option>
                                    <option value="Chair Arrangement">Chair Arrangement</option>
                                    <option value="Laptop Table">Laptop Table</option>
                                    <option value="Mini Bar">Mini Bar</option>
                                    <option value="Tv">Tv</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="sonroomfacilitytext"><input type="text" name="sonroomfacilitytext" class="form-control" placeholder="Room Facility Text"></span><span id="sonroomfacilityimg"><img src="" alt="Room facility image" width="100" height="100" class="form-control"></span>            
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- son ended -->
               <!-- daughter started -->
               <div class="row" id="daughterbedrooms">
                  <div class= "col-md-12">
                     <div class="card">
                        <div class="card-header">Daughter Bed Rooms</div>
                        <div class="card-body">
                           <div class="row">
                              <div class= "col-md-3">
                                 <select id="daughterbedroom" name="daughtermasterbedroom" class="daughterbedroom form-select" onchange="fdaughterlocation(this.value);">
                                    <option selected disabled>Location</option>
                                    <option value="Ground">Ground</option>
                                    <option value="First">First</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <input type="text"name="daughterlocationtext" id="daughterlocationdpdn" class="form-control" placeholder="Location Text">
                              </div>
                              <div class= "form-group col-md-3">
                                 <select id="daughternos" name="daughternos" class="daughternos form-select" onchange="fdaughternos(this.value);">
                                    <option selected disabled>Choose</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="daughternostext"><input type="text"name="daughternostext" class="form-control" placeholder="Nos Text"></span>
                              </div>
                              <div class= "col-md-3">
                                 <select id="daughterfacility" name="daughterfacility" class="daughterfacility form-select" onchange="fdaughterfacility(this.value);">
                                    <option selected disabled>Toilet Facility</option>
                                    <option value="Shower Encloser">Shower Encloser</option>
                                    <option value="Jacuzee Bath Tub">Jacuzee Bath Tub</option>
                                    <option value="Both">Both</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="daughtertoiletfacilitytext"><input type="text"name="daughterfacilitytext" class="form-control" placeholder="Facility Text"></span>            
                              </div>
                              <div class= "form-group col-md-3" >
                                 <input type="text"name="daughtertoilet" class="form-control" placeholder="Toilet Square Feet">
                              </div>
                           </div>
                           <div class="row">
                              <div class= "col-md-3">
                                 <select id="daughterdressfacility" name="daughterdressfacility" class="daughterdressfacility form-select" onchange="fdaughterdfacility(this.value);">
                                    <option selected disabled>Dress Facility</option>
                                    <option value="Vanity">Vanity</option>
                                    <option value="Cupboard">Cupboard</option>
                                    <option value="Walk In Cupboard">Walk In Cupboard</option>
                                    <option value="Text">Text</option>
                                    <option value="Upload Ref Image">Upload Ref Image</option>
                                 </select>
                                 <span id="daughterdressfacilitytext"><input type="text"name="daughterdressfacilitytext" class="form-control" placeholder="Dress Facility Text"></span><span id="daughterdressfacilityimg"><input type="file"name="daughterdressfacilityimg" class="form-control"></span>            
                              </div>
                              <div class= "form-group col-md-3" >
                                 <input type="text" name="daughterdresssquarefeet" class="form-control" placeholder="Dress Square Feet">
                              </div>
                              <div class= "col-md-3">
                                 <select id="daughterroomfacility" name="daughterroomfacility" class="daughterroomfacility form-select" onchange="fdaughterroomfacility(this.value);">
                                    <option selected disabled>Room Facility</option>
                                    <option value="Sofa Arrangement">Sofa Arrangement</option>
                                    <option value="Chair Arrangement">Chair Arrangement</option>
                                    <option value="Laptop Table">Laptop Table</option>
                                    <option value="Mini Bar">Mini Bar</option>
                                    <option value="Tv">Tv</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="daughterroomfacilitytext"><input type="text" name="daughterroomfacilitytext" class="form-control" placeholder="Room Facility Text"></span><span id="daughterroomfacilityimg"><img src="" alt="Room facility image" width="100" height="100" class="form-control"></span>            
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- daughter ended -->
               <!-- parent started    -->
               <div class="row" id="parentsbedrooms">
                  <div class= "col-md-12">
                     <div class="card">
                        <div class="card-header">Parents Bed Rooms</div>
                        <div class="card-body">
                           <div class="row">
                              <div class= "col-md-3">
                                 <select id="parentsbedroom" name="parentsbedroom" class="parentsbedroom form-select" onchange="fparentslocation(this.value);">
                                    <option selected disabled>Location</option>
                                    <option value="Ground">Ground</option>
                                    <option value="First">First</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <input type="text"name="parentslocationtext" id="parentslocationdpdn" class="form-control" placeholder="Location Text">
                              </div>
                              <div class= "form-group col-md-3">
                                 <!-- <div class= "form-group col-md-3">    -->
                                 <select id="parentsnos" name="parentsnos" class="parentsnos form-select" onchange="fparentsnos(this.value);">
                                    <option selected disabled>Choose</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="parentsnostext"><input type="text"name="parentsnostext" class="form-control" placeholder="Nos Text"></span>
                              </div>
                              <div class= "col-md-3">
                                 <select id="parentsfacility" name="parentsfacility" class="parentsfacility form-select" onchange="fparentsfacility(this.value);">
                                    <option selected disabled>Toilet Facility</option>
                                    <option value="Shower Encloser">Shower Encloser</option>
                                    <option value="Jacuzee Bath Tub">Jacuzee Bath Tub</option>
                                    <option value="Both">Both</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="parentstoiletfacilitytext"><input type="text"name="parentsfacilitytext" class="form-control" placeholder="Facility Text"></span>            
                              </div>
                              <div class= "form-group col-md-3" >
                                 <input type="text"name="parentstoilet" class="form-control" placeholder="Toilet Square Feet">
                              </div>
                           </div>
                           <div class="row">
                              <div class= "col-md-3">
                                 <select id="parentsdressfacility" name="parentsdressfacility" class="parentsdressfacility form-select" onchange="fparentsdfacility(this.value);">
                                    <option selected disabled>Dress Facility</option>
                                    <option value="Vanity">Vanity</option>
                                    <option value="Cupboard">Cupboard</option>
                                    <option value="Walk In Cupboard">Walk In Cupboard</option>
                                    <option value="Text">Text</option>
                                    <option value="Upload Ref Image">Upload Ref Image</option>
                                 </select>
                                 <span id="parentsdressfacilitytext"><input type="text"name="parentsdressfacilitytext" class="form-control" placeholder="Dress Facility Text"></span><span id="parentsdressfacilityimg"><input type="file"name="dressfacilityimg" class="form-control"></span>            
                              </div>
                              <div class= "form-group col-md-3" >
                                 <input type="text" name="parentsdresssquarefeet" class="form-control" placeholder="Dress Square Feet">
                              </div>
                              <div class= "col-md-3">
                                 <select id="parentsroomfacility" name="parentsroomfacility" class="parentsroomfacility form-select" onchange="fparentsroomfacility(this.value);">
                                    <option selected disabled>Room Facility</option>
                                    <option value="Sofa Arrangement">Sofa Arrangement</option>
                                    <option value="Chair Arrangement">Chair Arrangement</option>
                                    <option value="Laptop Table">Laptop Table</option>
                                    <option value="Mini Bar">Mini Bar</option>
                                    <option value="Tv">Tv</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="parentsroomfacilitytext"><input type="text" name="parentsroomfacilitytext" class="form-control" placeholder="Room Facility Text"></span><span id="parentsroomfacilityimg"><img src="" alt="Room facility image" width="100" height="100" class="form-control"></span>            
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- parent ended -->
               <!-- guest started -->
               <div class="row" id="guestbedrooms">
                  <div class= "col-md-12">
                     <div class="card">
                        <div class="card-header">Guest Bed Rooms</div>
                        <div class="card-body">
                           <div class="row">
                              <div class= "col-md-3">
                                 <select id="guestbedroom" name="guestbedroom" class="guestbedroom form-select" onchange="fguestlocation(this.value);">
                                    <option selected disabled>Location</option>
                                    <option value="Ground">Ground</option>
                                    <option value="First">First</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <input type="text"name="guestlocationtext" id="guestlocationdpdn" class="form-control" placeholder="Location Text">
                              </div>
                              <div class= "form-group col-md-3">
                                 <!-- <div class= "form-group col-md-3">    -->
                                 <select id="guestnos" name="guestnos" class="guestnos form-select" onchange="fguestnos(this.value);">
                                    <option selected disabled>Choose</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="guestnostext"><input type="text"name="guestnostext" class="form-control" placeholder="Nos Text"></span>
                              </div>
                              <div class= "col-md-3">
                                 <select id="guestfacility" name="guestfacility" class="guestfacility form-select" onchange="fguestfacility(this.value);">
                                    <option selected disabled>Toilet Facility</option>
                                    <option value="Shower Encloser">Shower Encloser</option>
                                    <option value="Jacuzee Bath Tub">Jacuzee Bath Tub</option>
                                    <option value="Both">Both</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="guesttoiletfacilitytext"><input type="text"name="guestfacilitytext" class="form-control" placeholder="Facility Text"></span>            
                              </div>
                              <div class= "form-group col-md-3" >
                                 <input type="text"name="guesttoilet" class="form-control" placeholder="Toilet Square Feet">
                              </div>
                           </div>
                           <div class="row">
                              <div class= "col-md-3">
                                 <select id="guestdressfacility" name="guestdressfacility" class="guestdressfacility form-select" onchange="fguestdfacility(this.value);">
                                    <option selected disabled>Dress Facility</option>
                                    <option value="Vanity">Vanity</option>
                                    <option value="Cupboard">Cupboard</option>
                                    <option value="Walk In Cupboard">Walk In Cupboard</option>
                                    <option value="Text">Text</option>
                                    <option value="Upload Ref Image">Upload Ref Image</option>
                                 </select>
                                 <span id="guestdressfacilitytext"><input type="text"name="guestdressfacilitytext" class="form-control" placeholder="Dress Facility Text"></span><span id="guestdressfacilityimg"><input type="file"name="guestdressfacilityimg" class="form-control"></span>            
                              </div>
                              <div class= "form-group col-md-3" >
                                 <input type="text" name="guestdresssquarefeet" class="form-control" placeholder="Dress Square Feet">
                              </div>
                              <div class= "col-md-3">
                                 <select id="guestroomfacility" name="guestroomfacility" class="guestroomfacility form-select" onchange="fguestroomfacility(this.value);">
                                    <option selected disabled>Room Facility</option>
                                    <option value="Sofa Arrangement">Sofa Arrangement</option>
                                    <option value="Chair Arrangement">Chair Arrangement</option>
                                    <option value="Laptop Table">Laptop Table</option>
                                    <option value="Mini Bar">Mini Bar</option>
                                    <option value="Tv">Tv</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="guestroomfacilitytext"><input type="text" name="guestroomfacilitytext" class="form-control" placeholder="Room Facility Text"></span><span id="guestroomfacilityimg"><img src="" alt="Room facility image" width="100" height="100" class="form-control"></span>            
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- guest ended -->
               <!-- other started -->
               <div class="row" id="otherbedrooms">
                  <div class= "col-md-12">
                     <div class="card">
                        <div class="card-header">Other Bed Rooms</div>
                        <div class="card-body">
                           <div class="row">
                              <div class= "col-md-3">
                                 <select id="masterbedroom" name="masterbedroom" class="masterbedroom form-select" onchange="fotherlocation(this.value);">
                                    <option selected disabled>Location</option>
                                    <option value="Ground">Ground</option>
                                    <option value="First">First</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <input type="text"name="otherlocationtext" id="otherlocationdpdn" class="form-control" placeholder="Location Text">
                              </div>
                              <div class= "form-group col-md-3">
                                 <!-- <div class= "form-group col-md-3">    -->
                                 <select id="nos" name="othernos" class="othernos form-select" onchange="fothernos(this.value);">
                                    <option selected disabled>Choose</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="othernostext"><input type="text"name="othernostext" class="form-control" placeholder="Nos Text"></span>
                              </div>
                              <div class= "col-md-3">
                                 <select id="otherfacility" name="otherfacility" class="otherfacility form-select" onchange="fotherfacility(this.value);">
                                    <option selected disabled>Toilet Facility</option>
                                    <option value="Shower Encloser">Shower Encloser</option>
                                    <option value="Jacuzee Bath Tub">Jacuzee Bath Tub</option>
                                    <option value="Both">Both</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="othertoiletfacilitytext"><input type="text"name="facilitytext" class="form-control" placeholder="Facility Text"></span>            
                              </div>
                              <div class= "form-group col-md-3" >
                                 <input type="text"name="othertoilet" class="form-control" placeholder="Toilet Square Feet">
                              </div>
                           </div>
                           <div class="row">
                              <div class= "col-md-3">
                                 <select id="otherdressfacility" name="otherdressfacility" class="otherdressfacility form-select" onchange="fotherdfacility(this.value);">
                                    <option selected disabled>Dress Facility</option>
                                    <option value="Vanity">Vanity</option>
                                    <option value="Cupboard">Cupboard</option>
                                    <option value="Walk In Cupboard">Walk In Cupboard</option>
                                    <option value="Text">Text</option>
                                    <option value="Upload Ref Image">Upload Ref Image</option>
                                 </select>
                                 <span id="otherdressfacilitytext"><input type="text"name="otherdressfacilitytext" class="form-control" placeholder="Dress Facility Text"></span><span id="otherdressfacilityimg"><input type="file"name="otherdressfacilityimg" class="form-control"></span>            
                              </div>
                              <div class= "form-group col-md-3" >
                                 <input type="text" name="otherdresssquarefeet" class="form-control" placeholder="Dress Square Feet">
                              </div>
                              <div class= "col-md-3">
                                 <select id="otherroomfacility" name="otherroomfacility" class="otherroomfacility form-select" onchange="fotherroomfacility(this.value);">
                                    <option selected disabled>Room Facility</option>
                                    <option value="Sofa Arrangement">Sofa Arrangement</option>
                                    <option value="Chair Arrangement">Chair Arrangement</option>
                                    <option value="Laptop Table">Laptop Table</option>
                                    <option value="Mini Bar">Mini Bar</option>
                                    <option value="Tv">Tv</option>
                                    <option value="Text">Text</option>
                                 </select>
                                 <span id="otherroomfacilitytext"><input type="text" name="otherroomfacilitytext" class="form-control" placeholder="Room Facility Text"></span><span id="otherroomfacilityimg"><img src="" alt="Room facility image" width="100" height="100" class="form-control"></span>            
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- other ended -->   
            </div>
            <!--modalbody -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary savebtn">Save Detail</button>
            </div>
         </form>
      </div>
   </div>
</div>
{{-- exclusive Bed Room Detail --}}
{{-- exclusive Basement --}}
<div class="modal fade " id="IformBasementModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">IForm Basement Detail</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         {{-- 
         <form action="{{route('iform.iform-kitchen')}}" method="POST"> --}}
         <form id='kitchenIform'>
            @csrf
            <div class="modal-body">
               <div id="save_err_list"></div>
               <div class="card">
                  <div class="card-header">Basement</div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-3">
                           <select id="basement" name="basement" class="basement form-select" onchange="fbasement(this.value);">
                              <option selected disabled>Choose</option>
                              <option value="For Parking">For Parking</option>
                              <option value="For Amenities">For Amenities</option>
                           </select>
                        </div>
                        <div class="form-group col-md-3">
                           <span id="basementparkingimg"><img src="" alt="" width="150" height="150"></span><span id="basementamenitiesimg"><img src="" alt="" width="150" height="150"></span>
                        </div>
                        <div class="col-md-3">
                           <select id="stilt" name="stilt" class="stilt form-select" onchange="fstlit(this.value);">
                              <option selected disabled>Stilt</option>
                              <option value="For Parking">For Parking</option>
                              <option value="For Amenities">For Amenities</option>
                           </select>
                        </div>
                        <div class="form-group col-md-3">
                           <span id="stiltparkingimg"><img src="" alt="" width="150" height="150"></span><span id="stiltamenitiesimg"><img src="" alt="" width="150" height="150"></span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- card end -->
               <!-- basement ended -->
               <!-- Amenities started -->
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <div class="row">
                              <div class= "col-md-6">
                                 <div class= "form-group col-md-6">   
                                    Amenities 
                                 </div>
                                 <div class= "col-md-6">
                                    <input type="text" name="office" class="form-control" placeholder="Office Square Feet">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="row">
                              <div class= "col-md-4">
                                 <div class= "col-md-6">   
                                    <input type="checkbox" name="basementchk" id="basementchk" value=""> Basement
                                 </div>
                              </div>
                              <div class= "col-md-4">
                                 <div class= "col-md-6">   
                                    <input type="checkbox" name="stiltchk" id="stiltchk" value=""> Stilt
                                 </div>
                              </div>
                              <div class= "col-md-4">
                                 <div class= "col-md-6">   
                                 <input type="checkbox" name="pantrychk" id="pantrychk" value=""> Pantry   
                                 <!-- <input type="checkbox" name="basementtextchk" id="basementtextchk" value=""> Text -->
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class= "col-md-4">
                                 <div class= "col-md-6">   
                                 <input type="checkbox" name="toiletchk" id="toiletchk" value=""> Toilet
                                 </div>
                              </div>
                              <div class= "col-md-4">
                                 <div class= "col-md-6">   
                                 <input type="checkbox" name="stafftoiletchk" id="stafftoiletchk" value=""> Staff Toilet
                                 </div>
                              </div>
                              <div class= "col-md-4">
                                 <div class= "col-md-9">   
                                 <input type="checkbox" name="textrequirementschk" id="textrequirementsbasementchk" value=""> Text Requirements
                                    <span id="textrequirementstxt"><input type="text" name="textrequirementstxt" id="textrequirementsbasementtxt" class="form-control" value=""></span> 
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="row">
                              <div class= "col-md-4">
                                 <div class= "col-md-9">   
                                    
                                 </div>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Amenities Ended -->
               <!-- Servant Quarter started -->
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <div class="row">
                              <div class= "col-md-6">
                                 <div class= "form-group col-md-6">   
                                    Servent Quarter 
                                 </div>
                                 <div class= "col-md-6">
                                    <input type="text" name="serventquarter" class="form-control" placeholder="Servent Quarter Square Feet">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="row">
                              <div class= "col-md-5">
                                 <input type="checkbox" name="oneroomsmallkittoiletchk" id="oneroomsmallkittoiletchk" value=""> One Room + Small Kit + Toilet
                              </div>
                              <div class= "col-md-3">
                                 <input type="checkbox" name="servantquartertextchk" id="servantquartertextchk" value=""> Text
                                 <span id="servantquartertext"><input type="text" name="servantquartertext" class="form-control" value=""></span>
                              </div>
                              <div class= "col-md-4">
                                 <input type="checkbox" name="servantlocationtextchk" id="servantlocationtextchk" value=""> location
                              </div>
                           </div>
                           <div class="row" id="stiltgroundtext">
                              <div class= "col-md-4">
                                 <input type="checkbox" name="locationstiltchk" id="locationstiltchk" value=""> Stilt
                              </div>
                              <div class= "col-md-4">
                                 <input type="checkbox" name="locationgroundotherchk" id="locationgroundotherchk" value=""> Ground Other Than Stilt Area
                              </div>
                              <div class= "col-md-4">
                                 <input type="checkbox" name="locationtextchk" id="location_ground_other_chk" value=""> Text
                                 <span id="location_text"><input type="text" name="locationtext" class="form-control" value=""></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- servent quarter ended -->
               <!-- parking garage started -->
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <div class="row">
                              <div class= "col-md-6">
                                 <div class= "form-group col-md-6">   
                                    Parking Garage 
                                 </div>
                                 <div class= "col-md-6">
                                    <input type="text" name="parkinggarage" class="form-control" placeholder="Parking Garage Square Feet">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="row">
                              <div class= "col-md-4">
                                 <input type="checkbox" name="howmanycarschk" id="howmanycarschk" value=""> For How Many Cars 
                              </div>
                              <div class= "col-md-4">
                                 <input type="checkbox" name="howmanycarstextchk" id="howmanycarstextchk" value=""> Text
                                 <span id="how_many_cars_text"><input type="text" name="howmanycarstext" class="form-control" value=""></span>
                              </div>
                              <div class= "col-md-4">
                                 <input type="checkbox" name="parkinglocationtextchk" id="parkinglocationtextchk" value=""> location
                              </div>
                           </div>
                           <div class="row" id="parkingstiltgroundtext">
                              <div class= "col-md-4">
                                 <input type="checkbox" name="parkinglocationstiltchk" id="parkinglocationstiltchk" value=""> Stilt
                              </div>
                              <div class= "col-md-4">
                                 <input type="checkbox" name="parkinggroundotherchk" id="parkinggroundotherchk" value=""> Ground Other Than Stilt Area
                              </div>
                              <div class= "col-md-4">
                                 <input type="checkbox" name="parkingtextchk" id="parkingtextchk" value=""> Text
                                 <span id="parking_garage_text"><input type="text" name="parking_garagetext" class="form-control" value=""></span>
                              </div>
                           </div>
                           <div class="row">
                              <div class= "col-md-4">
                                 <input type="checkbox" name="saperateshadechk" id="saperateshadechk" value=""> Saperate Shade 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- parking garage ended -->
               <!-- Home Theater started -->
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <div class="row">
                              <div class= "col-md-6">
                                 <div class= "form-group col-md-6">   
                                    Home Theater 
                                 </div>
                                 <div class= "col-md-6">
                                    <input type="text" name="hometheater" class="form-control" placeholder="Home Theater Square Feet">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="row">
                              <div class= "col-md-4">
                              <div class="checkbox">
                              <label><input type="checkbox" name="hometheaterfloorchk" id="hometheaterfloorchk" value=""> Floor</label> 
                              </div>
                              <span id="groundamenityfloortext">
                              <div class="checkbox">
                                 <label><input type="checkbox" name="hometheatergroundchk" value=""> Ground/Stilt</label>
                                </div>
                              <div class="checkbox">
                                 <label><input type="checkbox" name="hometheateramenityfloorchk" value=""> Amenity Floor</label>
                              </div>
                              <div class="checkbox">
                                 <label><input type="checkbox" name="hometheatertextchk" id="hometheatertextchk" value=""> Text</label>
                                 <span id="home_theater_text"><input type="text" name="hometheatertext" class="form-control" value=""></span>
                              </div>
                            </span>
                              </div>
                               
                              <div class= "col-md-4">
                              <div class="checkbox">
                                    <label><input type="checkbox" name="hometheaterfloorseatschk" id="hometheaterfloorseatschk" value=""> Seats</label>
                                    </div>
                                    <span id="hometheaterseatstext">
                                    <div class="row">
                                    <div class= "form- group col-md-4">
                                 <div class="checkbox">
                                    <label><input type="checkbox" name="hometheaterseatschk" value="8"> 8</label> 
                                 </div>
                                 <div class="checkbox">
                                    <label><input type="checkbox" name="hometheaterseatschk" value="10"> 10</label> 
                                 </div>
                                 <div class="checkbox">
                                    <label><input type="checkbox" name="hometheaterseatschk" value="12"> 12</label> 
                                 </div>
                                 <div class="checkbox">
                                    <label><input type="checkbox" name="hometheaterseatstextchk" id="hometheaterseatstextchk" value=""> text</label>
                                    <span id="home_theater_seats_text"><input type="text" name="hometheaterseatstext" class="form-control" value=""></span>
                                 </div>
                              </div>
                              
                              <div class= "col-md-4">
                              <div class="checkbox">
                              <label><input type="checkbox" name="hometheaterseatschk" value="14"> 14</label>
                                </div>
                              <div class="checkbox">
                              <label><input type="checkbox" name="hometheaterseatschk" value="16"> 16</label>    
                            </div>
                              <div class="checkbox">
                              <label><input type="checkbox" name="hometheaterseatschk" value="18"> 18</label>
                                </div>
                                </div>
                               </div><!-- row ended-->
                               </span>
                        </div>
                        </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- home theater ended -->    
            </div>
            <!--modal body -->
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary savebtn">Save Detail</button>
            </div>
         </form>
      </div>
   </div>
</div>
{{-- exclusive kitchen hall --}}
{{--End basic detail model --}}
{{-- @if(session()->has('msg'))
<div class="alert alert-success" role="alert">
   {{session('msg')}} 
</div>
@endif --}}
{{-- @if (session()->has('errmsg'))
<div class="alert alert-danger" role="alert">
   {{session('errmsg')}} 
</div>
@endif --}}
<div id="success_message"></div>
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-body">
            <a href="#" data-bs-toggle="modal" data-bs-target="#IformBasicDetailModal" class="btn btn-primary btn-sm">Basic Detail</a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#IformEntranceGateModal" class="btn btn-primary btn-sm">Entrance Detail</a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#IformFormalDrawingModal" class="btn btn-primary btn-sm">Drawing Hall Detail</a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#IformPoojaRoomModal" class="btn btn-primary btn-sm">Pooja Room Detail</a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#IformbedroomModal" class="btn btn-primary btn-sm">Bed Room Detail</a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#IformBasementModal" class="btn btn-primary btn-sm">Basement Detail</a>
            <a href="#" id="getBtn" class="btn btn-primary btn-sm">Get Latest Iform</a>
         </div>
      </div>
   </div>
</div>
<br>
{{-- Latest iform information --}}
<div class="latestIform">
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">IForm Details 
               {{-- <button type="button" id="final_iform_btn"  class="final_iform_btn btn btn-outline-primary float-end btn-sm">Final</button> --}}
            </div>
            <div class="card-body">
               <table class="table latestIformBody">
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
{{-- End atest iform information --}}

@endsection
{{-- Script here --}}
@section('script')
<script>
   $(document).ready(function () {
       //alert("hi")
       //getIformDetail();
       $("#kitchenfloor").hide();
       $("#kitchen_sqft_attached_wash_utility").hide();
       $("#kitchen_sqft_textyourrequirement").hide();
       $("#text_your_requirement").hide();
       $("#floortextyourrequirementtxt").hide();
       $("#floortextyourrequirementimg").hide();
       $("#floor_store").hide();
       $("#test_your_requirement").hide();
       $("#verandah_img").hide();
       $("#foyer_text").hide();
       $("#foyer_img").hide();
       $("#one_gate").hide();
       $("#two_gate").hide();
       $("#adj").hide();
       $("#cust").hide();
       $("#main_car_gate").hide();
       $("#side_padestrain_gate").hide();
       $("#visual_nature").hide();
       $("#car_parking_space").hide();
       $("#drawing_hall_img").hide();
       $("#drawing_hall_text").hide();
       $("#living_hall_img").hide();
       $("#living_hall_text").hide();
       $("#kitchen_floor").hide();
       $("#passanger_capacity").hide();
       $("#kdf").hide();
       $("#staircaserefrence").hide();
       $("#kitchen_sqft_img").hide();
       $("#d_floor").hide();
       $("#dining_seats").hide();
       $("#dsqft").hide();
       $("#dining_seats_sqft").hide();
       $("#dining_sqft").hide();
       $("#vnimg").hide();
       $("#car_parking_space_img").hide();
       $("#car_parking_space_text").hide();
       $("#pantry_sqft").hide();
       $("#textyourrequirementsqftpantry").hide();
       $("#test_your_requirements").hide();
       $("#passanger_capacity_text").hide();
       $("#pooja_room_type_sqft").hide();
       $("#pooja_room_type_img").hide();
       $("#pooja_room_type_onlyplace_img").hide();
       $("#stair_case_img").hide();
       $("#pooja_room_text").hide();
       $("#masterbedrooms").hide();
       $("#sonbedrooms").hide();
       $("#daughterbedrooms").hide();
       $("#parentsbedrooms").hide();
       $("#guestbedrooms").hide();
       $("#otherbedrooms").hide();
       //master
       $("#locationdpdn").hide();
       $("#locationtext").hide();
       $("#nostext").hide();
       $("#toiletfacilitytext").hide();
       $("#dressfacilityimg").hide();
       $("#roomfacilityimg").hide();
       $("#dressfacilitytext").hide();
       $("#roomfacilitytext").hide();
   //son
       $("#sonlocationdpdn").hide();
       $("#sonlocationtext").hide();
       $("#sonnostext").hide();
       $("#sontoiletfacilitytext").hide();
       $("#sondressfacilityimg").hide();
       $("#sonroomfacilityimg").hide();
       $("#sondressfacilitytext").hide();
       $("#sonroomfacilitytext").hide();
   //daughter
       $("#daughterlocationdpdn").hide();
       $("#daughterlocationtext").hide();
       $("#daughternostext").hide();
       $("#daughtertoiletfacilitytext").hide();
       $("#daughterdressfacilityimg").hide();
       $("#daughterroomfacilityimg").hide();
       $("#daughterdressfacilitytext").hide();
       $("#daughterroomfacilitytext").hide();
   //parents
       $("#parentslocationdpdn").hide();
       $("#parentslocationtext").hide();
       $("#parentsnostext").hide();
       $("#parentstoiletfacilitytext").hide();
       $("#parentsdressfacilityimg").hide();
       $("#parentsroomfacilityimg").hide();
       $("#parentsdressfacilitytext").hide();
       $("#parentsroomfacilitytext").hide();
   //guests
       $("#guestlocationdpdn").hide();
       $("#guestlocationtext").hide();
       $("#guestnostext").hide();
       $("#guesttoiletfacilitytext").hide();
       $("#guestdressfacilityimg").hide();
       $("#guestroomfacilityimg").hide();
       $("#guestdressfacilitytext").hide();
       $("#guestroomfacilitytext").hide();
   //other
       $("#otherlocationdpdn").hide();
       $("#otherlocationtext").hide();
       $("#othernostext").hide();
       $("#othertoiletfacilitytext").hide();
       $("#otherdressfacilityimg").hide();
       $("#otherroomfacilityimg").hide();
       $("#otherdressfacilitytext").hide();
       $("#otherroomfacilitytext").hide();
    //basement start   
       $("#basementparkingimg").hide();
       $("#basementamenitiesimg").hide();
       $("#stiltparkingimg").hide();
       $("#stiltamenitiesimg").hide();
       $("#textrequirementstxt").hide();
       $("#servantquartertext").hide();
       $("#location_text").hide();
       $("#how_many_cars_text").hide();
       $("#parking_garage_text").hide();
       $("#home_theater_seats_text").hide();
       $("#home_theater_text").hide();
       $("#stiltgroundtext").hide();
       $("#parkingstiltgroundtext").hide();
       $("#groundamenityfloortext").hide();
       $("#hometheaterseatstext").hide();
   //basement end
       $("#floor").change(function (e) { 
           e.preventDefault();
   
           if($(this).val() == '{{MyApp::TEXT}}') {
               $("#floor_text").css("display", "block");
   
           } else {
               $("#floor_text").css("display", "none");
           } 
       });
       
   $("#textrequirementsbasementchk").change(function(){
       if(this.checked){
           $("#textrequirementstxt").fadeIn("slow");
       }
       else{
           $("#textrequirementstxt").fadeOut("slow");
       }
   });
   $("#location_ground_other_chk").change(function(){
       if(this.checked){
           $("#location_text").fadeIn("slow");
       }
       else{
           $("#location_text").fadeOut("slow");
       }
   });
   $("#servantquartertextchk").change(function(){
       if(this.checked){
           $("#servantquartertext").fadeIn("slow");
       }
       else{
           $("#servantquartertext").fadeOut("slow");
       }
   });
   $("#parkingtextchk").change(function(){
       if(this.checked){
           $("#parking_garage_text").fadeIn("slow");
       }
       else{
           $("#parking_garage_text").fadeOut("slow");
       }
   });
   $("#howmanycarstextchk").change(function(){
       if(this.checked){
           $("#how_many_cars_text").fadeIn("slow");
       }
       else{
           $("#how_many_cars_text").fadeOut("slow");
       }
   });
   $("#hometheatertextchk").change(function(){
       if(this.checked){
           $("#home_theater_text").fadeIn("slow");
       }
       else{
           $("#home_theater_text").fadeOut("slow");
       }
   });
   $("#hometheaterseatstextchk").change(function(){
       if(this.checked){
          //alert();
           $("#home_theater_seats_text").fadeIn("slow");
       }
       else{
           $("#home_theater_seats_text").fadeOut("slow");
       }
   });
   $("#servantlocationtextchk").change(function(){
       if(this.checked){
           $("#stiltgroundtext").fadeIn("slow");
       }
       else{
           $("#stiltgroundtext").fadeOut("slow");
       }
   });
   $("#parkinglocationtextchk").change(function(){
       if(this.checked){
           $("#parkingstiltgroundtext").fadeIn("slow");
       }
       else{
           $("#parkingstiltgroundtext").fadeOut("slow");
       }
   });
   $("#hometheaterfloorchk").change(function(){
       if(this.checked){
           $("#groundamenityfloortext").fadeIn("slow");
       }
       else{
           $("#groundamenityfloortext").fadeOut("slow");
       }
   });
   $("#hometheaterfloorseatschk").change(function(){
       if(this.checked){
           $("#hometheaterseatstext").fadeIn("slow");
       }
       else{
           $("#hometheaterseatstext").fadeOut("slow");
       }
   });
       $("#masterbedroomschk").change(function(){
       if(this.checked){
           $("#masterbedrooms").fadeIn("slow");
       }
       else{
           $("#masterbedrooms").fadeOut("slow");
       }
   });
   $("#sonbedroomschk").change(function(){
       if(this.checked){
           $("#sonbedrooms").fadeIn("slow");
       }
       else{
           $("#sonbedrooms").fadeOut("slow");
       }
   });
   $("#daughterbedroomschk").change(function(){
       if(this.checked){
           $("#daughterbedrooms").fadeIn("slow");
       }
       else{
           $("#daughterbedrooms").fadeOut("slow");
       }
   });
   $("#parentsbedroomschk").change(function(){
       if(this.checked){
           $("#parentsbedrooms").fadeIn("slow");
       }
       else{
           $("#parentsbedrooms").fadeOut("slow");
       }
   });
   $("#guestbedroomschk").change(function(){
       if(this.checked){
           $("#guestbedrooms").fadeIn("slow");
       }
       else{
           $("#guestbedrooms").fadeOut("slow");
       }
   });
   $("#otherbedroomschk").change(function(){
       if(this.checked){
           $("#otherbedrooms").fadeIn("slow");
       }
       else{
           $("#otherbedrooms").fadeOut("slow");
       }
   });
   $("#floortextyourrequirementchk").change(function(){
       if(this.checked){
           $("#pooja_room_text").fadeIn("slow");
       }
       else{
           $("#pooja_room_text").fadeOut("slow");
       }
   });
   $("#typeproperroomchk").change(function(){
       if(this.checked){
           $("#pooja_room_type_sqft").fadeIn("slow");
           $("#pooja_room_type_img").fadeIn("slow");
       }
       else{
           $("#pooja_room_type_img").fadeOut("slow");
           $("#pooja_room_type_sqft").fadeOut("slow");
       }
   });
   $("#typeonlyplacechk").change(function(){
       if(this.checked){
           $("#pooja_room_type_onlyplace_img").fadeIn("slow");
       }
       else{
           $("#pooja_room_type_onlyplace_img").fadeOut("slow");
       }
   });
       $(document).on('click','#getBtn', function () {
           getIformDetail();
       });
   
      
   
       function getIformDetail()
       {
           $.ajax({
               type: "GET",
               url: "get-iform-detail",
               dataType: "json",
               success: function (response) {
                   //console.log(response);
                   if(response.status == 200)
                   {   
                       $('.latestIformBody').html('');
                       $('.latestIformBody').append(response.html);
                   }
   
                   // if(response.status == 200)
                   // {
                   //     $('.latestIformBody').html('');
                   //     var title ="";
                   //     var floor = "";
                   //     title = (response.iforms.title == {{MyApp::MR}}) ? "Mr" : "Mrs";
                   //     floor = (response.iforms.floor == '{{MyApp::TEXT}}') ? response.iforms.floor_text : response.iforms.floor;
                   //     $('#final_iform_btn').val(response.iforms.id);
                   //     $('.latestIformBody').append('<tr>\
                   //         <td>'+title+'</td>\
                   //         <td>'+response.iforms.first_name+'</td>\
                   //         <td>'+response.iforms.last_name+'</td>\
                   //         <td>'+response.iforms.mobile+'</td>\
                   //         <td>'+response.iforms.email+'</td>\
                   //         <td>'+response.iforms.city+'</td>\
                   //         <td>'+floor+'</td>\
                   //         <td>'+response.iforms.vastu+'</td>\
                   //         <td><button type="button" value="'+response.iforms.id+'" class="edit_basic_iform btn btn-outline-secondary btn-sm">Edit</button></td>\
                   //         <td><button type="button" value="'+response.iforms.id+'" class="final_iform btn btn-outline-primary btn-sm">Delete</button></td>\
                   //     </tr>'
                   //     )
                   // }
               }
           });
       }
   
       $(document).on('click','.savebtn', function (e) {
           e.preventDefault();  
   
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
          
           $.ajax({
               type: "POST",
               url: "/admin/save-iform-basic",
               data: $('#basicIform').serialize(),
               dataType: "json",
               success: function (response) {
                  console.log(response);
                   if(response.status == 200)
                   {
                       $('#save_err_list').html('');
                       $('#success_message').addClass('alert alert-success');
                       $('#success_message').text(response.message);
                       
                       $('#IformBasicDetailModal').modal('hide');
                       $('#IformBasicDetailModal').find('input').val('');
                       getIformDetail();
                   }else{
                       $('#save_err_list').html('');
                       $('#save_err_list').addClass('alert alert-danger');
                       var count = 1;
                       $.each(response.errors, function (key, err_value) { 
                           //$('#save_err_list').append('<li>'+err_value+'</li>');
                           $('#save_err_list').append('<span>' + count++ +'.'+ err_value+'</span></br>');
                       });
                   
                   }
               }
           });      
           
       });
   
     
   });
   
   function fverandah(f_verandah){
        if(f_verandah == "Out Side Open"){
               $("#verandah_img").show();
       }else if(f_verandah == "Out Side Closed With Glass or Grill"){
           $("#verandah_img").show();
           }
           else{
               $("#verandah_img").hide();
           }
   }
   function flift(f_lift){
        if(f_lift == "Text Your Requirements"){
               //$("#passanger_capacity").show();
               $("#passanger_capacity_text").show();
       }
           else{
               //$("#passanger_capacity").hide();
               $("#passanger_capacity_text").hide();
           }
   }
   //Basement start
   function fbasement(f_basement){
        if(f_basement == "For Parking"){
               $("#basementparkingimg").show();
               $("#basementamenitiesimg").hide();
       }
       else if(f_basement == "For Amenities"){
           $("#basementamenitiesimg").show();
           $("#basementparkingimg").hide();
       }
           else{
               $("#basementparkingimg").hide();
               $("#basementamenitiesimg").hide();
               
           }
   }
   //Basement end
   //Stlit Begins
   function fstlit(f_stlit){
        if(f_stlit == "For Parking"){
               $("#stiltparkingimg").show();
               $("#stiltamenitiesimg").hide();
       }
       else if(f_stlit == "For Amenities"){
           $("#stiltamenitiesimg").show();
           $("#stiltparkingimg").hide();
       }
           else{
               $("#stiltparkingimg").hide();
               $("#stiltamenitiesimg").hide();
               
           }
   }
   //Stlit Ends
   // masterbedroom functionality begins
   function flocation(f_location){
        if(f_location == "Text"){
               $("#locationdpdn").show();
              }
           else{
               $("#locationdpdn").hide();
           }
   }
       function fnos(f_nos){
        if(f_nos == "Text"){
               $("#nostext").show();
              }
           else{
               $("#nostext").hide();
               
           }
   }
   function ffacility(f_facility){
        if(f_facility == "Text"){
               $("#toiletfacilitytext").show();
              }
           else{
               $("#toiletfacilitytext").hide();
           }
   }
   function fdfacility(f_dfacility){
        if(f_dfacility == "Text"){
               $("#dressfacilitytext").show();
               $("#dressfacilityimg").hide();
              }
         else if(f_dfacility == "Upload Ref Image"){
               $("#dressfacilityimg").show();
               $("#dressfacilitytext").hide();
              }
              else {
               $("#dressfacilitytext").hide();
               $("#dressfacilityimg").hide();
           }
   }
   function froomfacility(f_roomfacility){
        if(f_roomfacility == "Text"){
               $("#roomfacilitytext").show();
               $("#roomfacilityimg").hide();
              }
         else if(f_roomfacility == "Sofa Arrangement"){
               $("#roomfacilityimg").show();
               $("#roomfacilitytext").hide();
              }
              else if(f_roomfacility == "Chair Arrangement"){
               $("#roomfacilityimg").show();
               $("#roomfacilitytext").hide();
              }
              else if(f_roomfacility == "Laptop Table"){
               $("#roomfacilityimg").show();
               $("#roomfacilitytext").hide();
              }
              else if(f_roomfacility == "Mini Bar"){
               $("#roomfacilityimg").show();
               $("#roomfacilitytext").hide();
              }
              else if(f_roomfacility == "Tv"){
               $("#roomfacilityimg").show();
               $("#roomfacilitytext").hide();
              }
              else {
               $("#roomfacilitytext").hide();
               $("#roomfacilitytext").hide();
           }
   }
   // masterbedroom functionality finished
   // sonbedroom functionality begins
   function fsonlocation(f_sonlocation){
        if(f_sonlocation == "Text"){
               $("#sonlocationdpdn").show();
              
              }
           else{
               $("#sonlocationdpdn").hide();
              
           }
   }
       function fsonnos(f_sonnos){
        if(f_sonnos == "Text"){
               $("#sonnostext").show();
              
              }
           else{
               $("#sonnostext").hide();
              
           }
   }
   function fsonfacility(f_sonfacility){
        if(f_sonfacility == "Text"){
               $("#sontoiletfacilitytext").show();
              }
           else{
               $("#sontoiletfacilitytext").hide();
           }
   }
   function fsondfacility(f_sondfacility){
        if(f_sondfacility == "Text"){
               $("#sondressfacilitytext").show();
               $("#sondressfacilityimg").hide();
              }
         else if(f_sondfacility == "Upload Ref Image"){
               $("#sondressfacilityimg").show();
               $("#sondressfacilitytext").hide();
              }
              else {
               $("#sondressfacilitytext").hide();
               $("#sondressfacilityimg").hide();
           }
   }
   function fsonroomfacility(f_sonroomfacility){
        if(f_sonroomfacility == "Text"){
               $("#sonroomfacilitytext").show();
               $("#sonroomfacilityimg").hide();
              }
         else if(f_sonroomfacility == "Sofa Arrangement"){
               $("#sonroomfacilityimg").show();
               $("#sonroomfacilitytext").hide();
              }
              else if(f_sonroomfacility == "Chair Arrangement"){
               $("#sonroomfacilityimg").show();
               $("#sonroomfacilitytext").hide();
              }
              else if(f_sonroomfacility == "Laptop Table"){
               $("#sonroomfacilityimg").show();
               $("#sonroomfacilitytext").hide();
              }
              else if(f_sonroomfacility == "Mini Bar"){
               $("#sonroomfacilityimg").show();
               $("#sonroomfacilitytext").hide();
              }
              else if(f_sonroomfacility == "Tv"){
               $("#sonroomfacilityimg").show();
               $("#sonroomfacilitytext").hide();
              }
              else {
               $("#showroomfacilitytext").hide();
               $("#showroomfacilitytext").hide();
           }
   }
   // sonbedroom functionality finished
   // daughterbedroom functionality begins
   function fdaughterlocation(f_daughterlocation){
        if(f_daughterlocation == "Text"){
               $("#daughterlocationdpdn").show();
              // $("#locationdpdn1").show();
              }
           else{
               $("#daughterlocationdpdn").hide();
               //$("#locationdpdn1").hide();
           }
   }
       function fdaughternos(f_daughternos){
        if(f_daughternos == "Text"){
               $("#daughternostext").show();
              // $("#locationdpdn1").show();
              }
           else{
               $("#daughternostext").hide();
               //$("#locationdpdn1").hide();
           }
   }
   function fdaughterfacility(f_daughterfacility){
        if(f_daughterfacility == "Text"){
               $("#daughtertoiletfacilitytext").show();
              }
           else{
               $("#daughtertoiletfacilitytext").hide();
           }
   }
   function fdaughterdfacility(f_daughterdfacility){
        if(f_daughterdfacility == "Text"){
               $("#daughterdressfacilitytext").show();
               $("#daughterdressfacilityimg").hide();
              }
         else if(f_daughterdfacility == "Upload Ref Image"){
               $("#daughterdressfacilityimg").show();
               $("#daughterdressfacilitytext").hide();
              }
              else {
               $("#daughterdressfacilitytext").hide();
               $("#daughterdressfacilityimg").hide();
           }
   }
   function fdaughterroomfacility(f_daughterroomfacility){
        if(f_daughterroomfacility == "Text"){
               $("#daughterroomfacilitytext").show();
               $("#daughterroomfacilityimg").hide();
              }
         else if(f_daughterroomfacility == "Sofa Arrangement"){
               $("#daughterroomfacilityimg").show();
               $("#daughterroomfacilitytext").hide();
              }
              else if(f_daughterroomfacility == "Chair Arrangement"){
               $("#daughterroomfacilityimg").show();
               $("#daughterroomfacilitytext").hide();
              }
              else if(f_daughterroomfacility == "Laptop Table"){
               $("#daughterroomfacilityimg").show();
               $("#daughterroomfacilitytext").hide();
              }
              else if(f_daughterroomfacility == "Mini Bar"){
               $("#daughterroomfacilityimg").show();
               $("#daughterroomfacilitytext").hide();
              }
              else if(f_daughterroomfacility == "Tv"){
               $("#daughterroomfacilityimg").show();
               $("#daughterroomfacilitytext").hide();
              }
              else {
               $("#daughterroomfacilitytext").hide();
               $("#daughterroomfacilitytext").hide();
           }
   }
   // daughterbedroom functionality finished
   // parentsbedroom functionality begins
   function fparentslocation(f_parentslocation){
        if(f_parentslocation == "Text"){
               $("#parentslocationdpdn").show();
              // $("#locationdpdn1").show();
              }
           else{
               $("#parentslocationdpdn").hide();
               //$("#locationdpdn1").hide();
           }
   }
       function fparentsnos(f_parentsnos){
        if(f_parentsnos == "Text"){
               $("#parentsnostext").show();
              // $("#locationdpdn1").show();
              }
           else{
               $("#parentsnostext").hide();
               //$("#locationdpdn1").hide();
           }
   }
   function fparentsfacility(f_parentsfacility){
        if(f_parentsfacility == "Text"){
               $("#parentstoiletfacilitytext").show();
              }
           else{
               $("#parentstoiletfacilitytext").hide();
           }
   }
   function fparentsdfacility(f_parentsdfacility){
        if(f_parentsdfacility == "Text"){
               $("#parentsdressfacilitytext").show();
               $("#parentsdressfacilityimg").hide();
              }
         else if(f_parentsdfacility == "Upload Ref Image"){
               $("#parentsdressfacilityimg").show();
               $("#parentsdressfacilitytext").hide();
              }
              else {
               $("#parentsdressfacilitytext").hide();
               $("#parentsdressfacilityimg").hide();
           }
   }
   function fparentsroomfacility(f_parentsroomfacility){
        if(f_parentsroomfacility == "Text"){
               $("#parentsroomfacilitytext").show();
               $("#parentsroomfacilityimg").hide();
              }
         else if(f_parentsroomfacility == "Sofa Arrangement"){
               $("#parentsroomfacilityimg").show();
               $("#parentsroomfacilitytext").hide();
              }
              else if(f_parentsroomfacility == "Chair Arrangement"){
               $("#parentsroomfacilityimg").show();
               $("#parentsroomfacilitytext").hide();
              }
              else if(f_parentsroomfacility == "Laptop Table"){
               $("#parentsroomfacilityimg").show();
               $("#parentsroomfacilitytext").hide();
              }
              else if(f_parentsroomfacility == "Mini Bar"){
               $("#parentsroomfacilityimg").show();
               $("#parentsroomfacilitytext").hide();
              }
              else if(f_parentsroomfacility == "Tv"){
               $("#parentsroomfacilityimg").show();
               $("#parentsroomfacilitytext").hide();
              }
              else {
               $("#parentsroomfacilitytext").hide();
               $("#parentsroomfacilitytext").hide();
           }
   }
   // parentsbedroom functionality finished
   // guestbedroom functionality begins
   function fguestlocation(f_guestlocation){
        if(f_guestlocation == "Text"){
               $("#guestlocationdpdn").show();
              // $("#locationdpdn1").show();
              }
           else{
               $("#guestlocationdpdn").hide();
               //$("#locationdpdn1").hide();
           }
   }
       function fguestnos(f_guestnos){
        if(f_guestnos == "Text"){
               $("#guestnostext").show();
              // $("#locationdpdn1").show();
              }
           else{
               $("#guestnostext").hide();
               //$("#locationdpdn1").hide();
           }
   }
   function fguestfacility(f_guestfacility){
        if(f_guestfacility == "Text"){
               $("#guesttoiletfacilitytext").show();
              }
           else{
               $("#guesttoiletfacilitytext").hide();
           }
   }
   function fguestdfacility(f_guestdfacility){
        if(f_guestdfacility == "Text"){
               $("#guestdressfacilitytext").show();
               $("#guestdressfacilityimg").hide();
              }
         else if(f_guestdfacility == "Upload Ref Image"){
               $("#guestdressfacilityimg").show();
               $("#guestdressfacilitytext").hide();
              }
              else {
               $("#guestdressfacilitytext").hide();
               $("#guestdressfacilityimg").hide();
           }
   }
   function fguestroomfacility(f_guestroomfacility){
        if(f_guestroomfacility == "Text"){
               $("#guestroomfacilitytext").show();
               $("#guestroomfacilityimg").hide();
              }
         else if(f_guestroomfacility == "Sofa Arrangement"){
               $("#guestroomfacilityimg").show();
               $("#guestroomfacilitytext").hide();
              }
              else if(f_guestroomfacility == "Chair Arrangement"){
               $("#guestroomfacilityimg").show();
               $("#guestroomfacilitytext").hide();
              }
              else if(f_guestroomfacility == "Laptop Table"){
               $("#guestroomfacilityimg").show();
               $("#guestroomfacilitytext").hide();
              }
              else if(f_guestroomfacility == "Mini Bar"){
               $("#guestroomfacilityimg").show();
               $("#guestroomfacilitytext").hide();
              }
              else if(f_guestroomfacility == "Tv"){
               $("#guestroomfacilityimg").show();
               $("#guestroomfacilitytext").hide();
              }
              else {
               $("#guestroomfacilitytext").hide();
               $("#guestroomfacilitytext").hide();
           }
   }
   // guestbedroom functionality finished
   // otherbedroom functionality begins
   function fotherlocation(f_otherlocation){
        if(f_otherlocation == "Text"){
               $("#otherlocationdpdn").show();
              }
           else{
               $("#otherlocationdpdn").hide();
           }
   }
       function fothernos(f_othernos){
        if(f_othernos == "Text"){
               $("#othernostext").show();
               }
           else{
               $("#othernostext").hide();
           }
   }
   function fotherfacility(f_otherfacility){
        if(f_otherfacility == "Text"){
               $("#othertoiletfacilitytext").show();
              }
           else{
               $("#othertoiletfacilitytext").hide();
           }
   }
   function fotherdfacility(f_otherdfacility){
        if(f_otherdfacility == "Text"){
               $("#otherdressfacilitytext").show();
               $("#otherdressfacilityimg").hide();
              }
         else if(f_otherdfacility == "Upload Ref Image"){
               $("#otherdressfacilityimg").show();
               $("#otherdressfacilitytext").hide();
              }
              else {
               $("#otherdressfacilitytext").hide();
               $("#otherdressfacilityimg").hide();
           }
   }
   function fotherroomfacility(f_otherroomfacility){
        if(f_otherroomfacility == "Text"){
               $("#otherroomfacilitytext").show();
               $("#otherroomfacilityimg").hide();
              }
         else if(f_otherroomfacility == "Sofa Arrangement"){
               $("#otherroomfacilityimg").show();
               $("#otherroomfacilitytext").hide();
              }
              else if(f_otherroomfacility == "Chair Arrangement"){
               $("#otherroomfacilityimg").show();
               $("#otherroomfacilitytext").hide();
              }
              else if(f_otherroomfacility == "Laptop Table"){
               $("#otherroomfacilityimg").show();
               $("#otherroomfacilitytext").hide();
              }
              else if(f_otherroomfacility == "Mini Bar"){
               $("#otherroomfacilityimg").show();
               $("#otherroomfacilitytext").hide();
              }
              else if(f_otherroomfacility == "Tv"){
               $("#otherroomfacilityimg").show();
               $("#otherroomfacilitytext").hide();
              }
              else {
               $("#otherroomfacilitytext").hide();
               $("#otherroomfacilitytext").hide();
           }
   }
   function fstaircase(f_staircase){
        if(f_staircase == "Upload Ref Sketch"){
               $("#staircaserefrence").hide();
               $("#stair_case_img").show();
       }
           else{
               $("#staircaserefrence").show();
               $("#stair_case_img").hide();
           }
   }
   function ffoyer(f_foyer){
       //alert(f_foyer);
       if(f_foyer == "Hilighter"){
              $("#foyer_text").hide();
              $("#foyer_img").show();
   
          }else if(f_foyer == "Shue Rack Space"){
              $("#foyer_text").hide();
              $("#foyer_img").show();
   
          }else if(f_foyer == "Approx Area"){
              $("#foyer_text").show();
              $("#foyer_img").hide();
   
          }else{
           $("#foyer_img").hide();
           $("#foyer_text").hide();
   
          }
   }
   function fentrancegate(eg){
          
          if(eg == "One Gate"){
              $("#one_gate").show();
              $("#two_gate").hide();
   
          }else if(eg == "Two Gate"){
           $("#two_gate").show();
           $("#one_gate").hide();
   
          }else{
           $("#one_gate").hide();
           $("#two_gate").hide();
          }
       }
       function ftwogate(tg){
           //alert(tg);     
          if(tg == "Adjucent"){
              $("#adj").show();
              $("#cust").hide();
          }else if(tg == "Different Customised Location"){
           $("#cust").show();
           $("#adj").hide();
           }else{
               $("#adj").hide();
               $("#cust").hide();
               }
        }
       function fadjucent(f_adjucent){
        
          if(f_adjucent == "Main Car Gate"){
              $("#main_car_gate").show();
              $("#side_padestrian_gate").hide();
          }
          else
          {
           alert(f_adjucent);      
           $("#side_padestrian_gate").show();
           $("#main_car_gate").hide();
          }
       }
       function fporch(f_porch){
      //alert(s);     
          if(f_porch == "Visual Nature"){
              $("#visual_nature").show();
              $("#car_parking_space").hide();
              $("#visual_nature_img").hide();
   
          }else if(f_porch == "Car Parking space"){
           $("#car_parking_space").show();
           $("#visual_nature").hide();
           $("#visual_nature_img").show();
          }else{
           $("#car_parking_space").show();
           $("#visual_nature").hide();
           $("#visual_nature_img").show();
          }
       }
       function fcarparking(f_carparking){
       if(f_carparking == 2){
              $("#car_parking_space_img").show();
              $("#car_parking_space_text").hide();
             
             }else if(f_carparking == 3){
           $("#car_parking_space_text").hide();
           $("#car_parking_space_img").show();
           
          }else if(f_carparking == "Text For More"){
           $("#car_parking_space_text").hide();
           $("#car_parking_space_img").show();
           
          }else{
            $("#car_parking_space_text").hide();
           $("#car_parking_space_img").hide();
   
          }
       }
       function fdrawinghall(f_drawinghall){
      //alert(s);     
          if(f_drawinghall == "Fire Placed Inside"){
              $("#drawing_hall_img").show();
              $("#drawing_hall_text").hide();
   
          }else if(f_drawinghall == "Special Featured Inside Text"){
           $("#drawing_hall_img").hide();
           $("#drawing_hall_text").show();
   
          }else{
           $("#drawing_hall_img").hide();
           $("#drawing_hall_text").hide();
   
          }
       }
       
       function flivinghall(f_livinghall){
      //alert(s);     
          if(f_livinghall == "Fire Placed Inside"){
              $("#living_hall_img").show();
              $("#living_hall_text").hide();
          }else if(f_livinghall == "Special Featured Inside Text"){
           $("#living_hall_img").hide();
           $("#living_hall_text").show();
           }else{
           $("#living_hall_img").hide();
           $("#living_hall_text").hide();
          }
       }
       function ffkitchen(f_kitchen){
      //alert(s);     
          if(f_kitchen == "floor"){
              $("#kitchen_floor").show();
              $("#kitchenfloor").hide();
              $("#kitchen_sqft_img").hide();
              $("#kitchen_sqft_textyourrequirement").hide();
          }else if(f_kitchen == "Kitchen Dining Function"){
           $("#kitchen_floor").hide();
           $("#kitchenfloor").show();
           $("#kitchen_sqft_img").hide();
           $("#kitchen_sqft_attached_wash_utility").hide();
           $("#kitchen_sqft_textyourrequirement").hide();
          }else if(f_kitchen == "Central Island"){
           $("#kitchen_sqft_attached_wash_utility").hide();
           $("#kitchen_sqft_textyourrequirement").hide();
           $("#kitchen_floor").hide();
           $("#kitchenfloor").hide();
           $("#kitchen_sqft_img").show();
          }else if(f_kitchen == "Refrigerator size"){
           $("#kitchen_sqft_attached_wash_utility").hide();
           $("#kitchen_sqft_textyourrequirement").hide();
           $("#kitchen_floor").hide();
           $("#kitchenfloor").hide();
           $("#kitchen_sqft_img").hide();
          }else if(f_kitchen == "Test Your Specific Requirement"){
           $("#kitchen_sqft_attached_wash_utility").hide();
           $("#kitchen_sqft_textyourrequirement").show();
           $("#kitchen_floor").hide();
           $("#kitchenfloor").hide();
           $("#kitchen_sqft_img").hide();
          }else if(f_kitchen == "Breakfast Table Area Inside"){
           $("#kitchen_sqft_attached_wash_utility").hide();
           $("#kitchen_sqft_textyourrequirement").hide();
           $("#kitchen_floor").hide();
           $("#kitchenfloor").hide();
           $("#kitchen_sqft_img").show();
          }else{
           $("#kitchen_floor").hide();
              $("#kitchenfloor").hide();
              $("#kitchen_sqft_attached_wash_utility").show();
              $("#kitchen_sqft_textyourrequirement").hide();
              $("#kitchen_sqft_img").hide();
          }
         
       }
       function f_kitchen_floor(f_kitchenfloor){
     //alert(f_kitchenfloor);     
          if(f_kitchenfloor == "Text Your Requirement"){
              $("#floortextyourrequirementtxt").show();
              
          }else if(f_kitchenfloor == "Ground"){
              $("#floortextyourrequirementtxt").hide();
          }else if(f_kitchenfloor == "First"){
              $("#floortextyourrequirementtxt").hide();
          }else{
           $("#floortextyourrequirementtxt").hide();
           }
       }
       function fpantry(f_pantry){
      //alert(s);     
          if(f_pantry == "Text Your Requirement"){
              $("#textyourrequirementsqftpantry").show();
              $("#pantry_sqft").hide();   
          }else if(f_pantry == "Floor"){
           $("#pantry_sqft").show();
           $("#textyourrequirementsqftpantry").hide();
           }else{
           $("#pantry_sqft").hide();
           $("#textyourrequirementsqftpantry").hide();
          }
       }
       function fdining(f_dining){
      //alert(s);     
          if(f_dining == "Floor"){
              $("#d_floor").show();
              $("#dining_seats").hide();
              $("#test_your_requirements").hide();
              }else if(f_dining == "Dining Seats"){
           $("#dining_seats").show();
           $("#d_floor").hide();
           $("#test_your_requirements").hide();
           }else if(f_dining == "Test Your Requirement"){
           $("#test_your_requirements").show();
           $("#d_floor").hide();
           $("#dining_seats").hide();
           }else{
               $("#dining_seats").hide();
           $("#d_floor").hide();
           $("#test_your_requirements").hide();
           }
       }
       function fdfloor(fd_floor){
      //alert(s);     
          if(fd_floor == "Text Your Requirement"){
              $("#dining_sqft").show();
          }else{
           $("#dining_sqft").hide();
   
          }
       }
       function fdining_seats(f_dining_seats){
      //alert(s);     
          if(f_dining_seats == "Text Your Requirement"){
              $("#dining_seats_sqft").show();
          }else{
           $("#dining_seats_sqft").hide();
   
          }
       }
       function fvisualnature(f_visualnature){
      //alert(fvn);     
          if(f_visualnature == "Single Height"){
              $("#visual_nature_img").show();
              
          }else if(f_visualnature == "Double Height"){
           $("#visual_nature_img").show();
           }
           else{
   
               $("#visual_nature_img").hide();
           }
       }
       function ffloorstore(ffl){
      //alert(s);     
          if(ffl == "Text Your Requirement"){
              $("#text_your_requirement").show();
          }else if(ffl == "Ground"){
              $("#text_your_requirement").hide();
          }else if(ffl == "First"){
              $("#text_your_requirement").hide();
          }else{
           $("#text_your_requirement").hide();
           }
       }
        
</script>
@endsection