{{-- <h1>Modal Layouts Here</h1> --}}
<div class="modal fade" id="bungalowPropertyModel" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
	    <div class="modal-content">
		    <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Bungalow Property</h5>
			    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		    </div>
		    <div class="modal-body">
			    <form id="bungalowPropertyForm">
				    @csrf
					  <div id="bungalow_property_err"></div>
					    <form class="">
				        <div class="row  mb-2">
					        <div class="col-4">
					          <div class="form-check">
                      <input class="form-check-input form-check-input-sm" type="radio" id="plot_type" name="plot_type"  style="border-radius:20%;">
					            <label class="form-check-label  form-check-label-sm">Regular Plot</label>
						        </div>
					        </div>
					        <div class="col-4">
						        <div class="form-check">
                      <input class="form-check-input form-check-input-sm ckrequired" type="radio" id="plot_type" name="plot_type"   style="border-radius:20%;">
					            <label class="form-check-label form-check-label-sm">Irregular Plot</label>
					          </div>
					        </div>
					        <div class="col-md-4">
                    <div class="input-group mb-3 input-group-sm">
                      <span class="" style="color:rgb(197, 9, 9)">*</span>
                        <input type="text" class="form-control form-control-sm" id="plot_size"  name="plot_size" placeholder="plot area..." required>
                        <span class="input-group-text" id="basic-addon2">SqFt</span>
                    </div>
						      </div>
				        </div> 
				        <div class="row mt-3">
					        <div class="col-md-4">
                    <div class="input-group mb-3 input-group-sm">
                      <span class="" style="color:rgb(197, 9, 9)">*</span>
                      <input type="text" class="form-control form-control-sm" id="plot_width"  name="plot_width" placeholder="Width" required>
                      <span class="input-group-text" id="basic-addon2">SqFt</span>
                    </div>
					        </div>
					        <div class="col-md-4">
						        <div class="input-group mb-3 input-group-sm">
                      <span class="" style="color:rgb(197, 9, 9)">*</span>
                      <input type="text" class="form-control form-control-sm"  id="plot_length"  name="plot_length" placeholder="Length" required >
                      <span class="input-group-text" id="basic-addon2">SqFt</span>
                    </div>
					        </div>
                  <div class="col-md-4">
                    <div class="input-group mb-3 input-group-sm"><span class="requiredshow" style="color:rgb(197, 9, 9)">*</span>
                      <input type="text" class="form-control form-control-sm" id="diagonal_1"  name="diagonal_1" placeholder="Digonal-1" required >
                      <span class="input-group-text input-group-text-sm" id="basic-addon2">SqFt</span>
                    </div>
                  </div>
				        </div> 
				        <div class="row">
					        <div class="col-md-4 mt-4">
                    <div class="input-group mb-3 input-group-sm"><span class="requiredshow" style="color:rgb(197, 9, 9)">*</span>
                      <input type="text" class="form-control form-control-sm"  id="diagonal_2" name="diagonal_2" placeholder="Diagonal-2" required>
                      <span class="input-group-text input-group-text-sm" id="basic-addon2">SqFt</span>
                    </div>
					        </div>
					        <div class="col-md-4">
						        <small>Hand Sketch Image</small>
						        <div class="input-group input-group-sm">
						          <input type="file" class="form-control form-control-sm" id="hand_sketch_img"  name="hand_sketch_img" aria-describedby="" aria-label="Upload">
						          <button class="btn btn-outline-secondary btn-sm" type="button" id="button" name="button">Button</button>
					          </div>
					        </div>
					        <div class="col-4  mt-4">
						        <div class="form-check">
						          <input class="form-check-input" type="checkbox" id="apmt" name="apmt">
						          <label class="form-check-label">Appoint a surveyor</label>
                    </div>
				          </div>
                </div>  
					      <div class="row mb-2">
				          <div class="row">
						        <label class="form-label">Plot border</label>
					        </div>	
					        <div class="row">
						        <div class="col-1">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="east_property" name="east_property" style="border-radius:20%;">
                        <label class="form-check-label">East<font color="red">*</font></label>
                      </div>
						        </div>
                    <div class="col-1 pl-4">
                      <div class="form-check">
                        <input class="form-check-input " type="radio" id="west_property" name="west_property" style="border-radius:20%;">
                        <label class="form-check-label">West<font color="red">*</font></label>
                      </div>
                    </div>
					          <div class="col-3 pl-5">
                      <div class="form-check">
                        <input class="form-check-input  ck_east_road " type="radio"  id="east_road_width" name="east_road_width" style="border-radius:20%;">
                        <label class="form-check-label">East road</label>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <input type="text" class="form-control form-control-sm input_east_show" id="up"  name="up" placeholder="Road Width"  style="width:30%;">
                        <select class="form-select form-select-sm input_east_show" style="width:40%;">
                          <option value="2">ft</option>
                          <option value="3">mtr</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-3  pl-4">
                      <div class="form-check">
                        <input class="form-check-input  ck_west_road" type="radio"  id="west_road_width" name="west_road_width" style="border-radius:20%;">
                        <label class="form-check-label">West road</label>
                      </div>
						        </div>
                    <div class="col-2">
                      <div class="input-group">
                        <input type="text" class="form-control form-control-sm input_west_show" id="up"  name="up" placeholder="Road Width"  style="width:30%;">
                        <select class="form-select form-select-sm input_west_show"  style="width:40%;">
                          <option value="2">ft</option>
                          <option value="3">mtr</option>
                        </select>
                      </div>
                    </div>
					        </div>
					        <div class="row">
						        <div class="col-1">
                      <div class="form-check">
                        <input class="form-check-input " type="radio" id="north_property" name="north_property" style="border-radius:20%;">
                        <label class="form-check-label">North<font color="red">*</font></label>
                      </div>
						        </div>
                    <div class="col-1 pl-4">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="south_property" name="south_property" style="border-radius:20%;">
                        <label class="form-check-label">South<font color="red">*</font></label>
                      </div>
                    </div>
                    <div class="col-3 pl-5">
                      <div class="form-check">
                        <input class="form-check-input ck_north_road" type="radio" id="north_road_width" name="north_road_width" style="border-radius:20%;">
                        <label class="form-check-label ">North road</label>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <input type="text" class="form-control form-control-sm input_north_show" id="up"  name="up" placeholder="Road Width"  style="width:30%;">
                        <select class="form-select form-select-sm input_north_show"  style="width:40%;">
                          <option value="2">ft</option>
                          <option value="3">mtr</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-3 pl-4">
                      <div class="form-check">
                        <input class="form-check-input ck_south_road" type="radio" id="south_road_width" name="south_road_width" style="border-radius:20%;">
                        <label class="form-check-label">South road</label>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group">
                        <input type="text" class="form-control form-control-sm input_south_show"  id="up"  name="up" placeholder="Road Width"  style="width:30%;">
                        <select class="form-select form-select-sm input_south_show"  style="width:40%;">
                          <option value="2">ft</option>
                          <option value="3">mtr</option>
                        </select>
                      </div>
                    </div>
					        </div>
					        <div class="row  mt-2 mb-2">
					          <div class="col-10 ml-4">
						          <input class="form-check-input" type="checkbox" id="plot_orientation" name="plot_orientation">
						          <label><b>Plot Is Not oriented perpendicularly With North</b></label>
					          </div>
                  </div>
					        <div class="row">
						        <div class="col-md-5">
						          <small>Upload a hand sketch image With orientation</small>
						        </div>
						        <div class="col-md-6">
							        <small>Down/Up of ground from abuting front</small>
							      </div>
				          </div>	
				          <div class="row">
				            <div class="col-md-4 mb-3">
						          <div class="input-group input-group-sm">
						            <input type="file" class="form-control form-control-sm" id="hand_plot_orientation_img" name="hand_plot_orientation_img">
							          <button class="btn btn-outline-secondary btn-sm" type="button" id="" name="">Button</button>
						          </div>
						        </div>
						        <div class="col-4">
                      <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="up"  name="up" placeholder="Up"  style="width:60%;">
                        <select class="form-select form-select-sm">
                          <option value="2">ft</option>
                          <option value="3">mtr</option>
                        </select>
                      </div>
						        </div>
						        <div class="col-4">
                      <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="down" name="down" placeholder="Down" style="width:60%;">
                        <select class="form-select form-select-sm">
                          <option value="2">ft</option>
                          <option value="3">mtr</option>
                        </select>
                      </div>
						        </div>
					        </div> 
					        <div class="row">
						        <div class="col-3">
						          <div class="form-check">
						            <input class="form-check-input form-check-input-sm" type="checkbox" id="almost_same" name="almost_same">
						            <label class="form-check-label form-check-label-sm">Almost On same</label></div>
					            </div>
					          <div class="col-3">
					            <select id="floor" name="floor" class="form-select form-select-sm">
						            <option selected>Select Floors</option>
						            <option>1 st floor</option>
                        <option>2 st floor</option>
                        <option>3 st floor</option>
                        <option>other</option>
						          </select>
					          </div>
					          <div class="col-1">
						          <label for="Floor" class="form-label">Vastu</label>
					          </div>
                    <div class="col-2">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="vastu" style="border-radius:20%;">
                        <label class="form-check-label">Moderate</label>
                      </div>
					          </div>
					          <div class="col-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio"  name="vastu" style="border-radius:20%;">
                        <label class="form-check-label">Consult Expert</label>
                      </div>
					          </div>
					        </div>
				        </div>
			        </div>
					    <div class="modal-footer">
						    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
						    <button type="button" id="saveBungalowPropertyBtn" class="btn btn-primary btn-sm ">Save Bungalow Property</button>
						    <button type="button" id="updateBungalowPropertyBtn" class="btn btn-primary btn-sm hide">Update Bungalow Property</button>
					    </div>
					  </form>
				  </div>
			  </div>
		  </div>
	  <div>

    <div class="row ">
      <div class="offset-md-11 col-md-1">
        <button type="button" id="bungalowPropertyBtn" class="btn btn-block btn-primary btn-flat btn-sm mt-2" >Bungalow Property </button>
      </div>
    </div> 