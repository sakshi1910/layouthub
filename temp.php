<?php include('header.php');
include('connect.php');?>
 <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                         
                          
						  
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product Title</label></div>
                            <div class="col-5 col-md-7"><input type="text" id="text-input" name="txtptit" placeholder="Text" class="form-control"></div>
                          </div>
                          
                         
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Product Description</label></div>
                            <div class="col-5 col-md-7"><textarea name="txtpdesc" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Category</label></div>
                            <div class="col-5 col-md-7">
                              <select name="ddlpcat" id="select" class="form-control">
                                <option>Select Category</option>
                                
                              </select>
                            </div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-10"><label for="select" class=" form-control-label">Sub Category</label></div>
                            <div class="col-10 col-md-9">
                              <select name="ddlpcat" id="select" class="form-control">
                                <option>Select Subcategory</option>
                                
                              </select>
                            </div>
                          </div>
                          
                        <div class="row form-group">
                            <div class="col col-md-10"><label for="text-input" class=" form-control-label">Product Price</label></div>
                            <div class="col-10 col-md-9"><input type="text" id="text-input" name="txtprice" placeholder="Text" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-10"><label for="text-input" class=" form-control-label">Product Manufacturer</label></div>
                            <div class="col-10 col-md-9"><input type="text" id="text-input" name="txtpmanufacture" placeholder="Text" class="form-control"></div>
                          </div>
                        
                     
                          <div class="row form-group">
                            <div class="col col-md-10"><label class=" form-control-label">Product Type</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="radio">
                                  <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Prescription 
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Non-Prescription
                                  </label>
                                </div>
                              
                              </div>
                            </div>
                          </div>
                        
                    
                          <div class="row form-group">
                            <div class="col col-md-10"><label for="file-input" class=" form-control-label">Product Image</label></div>
                            <div class="col-10 col-md-9"><input type="file" id="file-input" name="fpimage" class="form-control-file"></div>
                          </div>
                        
                        </form>
						<?php include('footer.php');?>