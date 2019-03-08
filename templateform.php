<?php 
include('header.php');
include('connect.php');
$msg="";
if(isset($_POST['btnadd']))
{
	$Templatetitle=$_POST['txtname'];
	$Description=$_POST['txtdesc'];
	$category=$_POST['ddlcat'];
	$subcategory=$_POST['ddlsubcat'];
	$templateprice=$_POST['txtprice'];
	$templatetags=$_POST['txttags'];
	
	if($_POST['type']=="Free")
	{
			$templatetype="Free";
	}
	else
	{
			$templatetype="Paid";
		
	}
	
	move_uploaded_file($_FILES['fimage']['tmp_name'],"images/".$_FILES['fimage']['name']);
	$filepath="images/".$_FILES['fimage']['name'];
	move_uploaded_file($_FILES['tfile']['tmp_name'],"files/".$_FILES['tfile']['name']);
	$filepaths="files/".$_FILES['tfile']['name'];
	
	 $query="insert into template(template_title,template_desc,tcat_id,tsubcat_id,template_image,template_files,
	template_price,template_type,template_tags) values('$Templatetitle','$Description',$category,$subcategory,'$filepath','$filepaths',$templateprice,'$templatetype','$templatetags')";
	$res=mysqli_query($con,$query);
	if($res)
	{
		$msg="Template added successfull";
	}
	else
	{
		$msg="error in insertion".mysqli_error($con);
	}
	//mysqli_close($con);
}
?>
<style>

.login-body {
    width: 74%!important;
}
</style>
<div class="login-page">
	<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Add templates</h3>  
			<div class="login-body">
				<form  method="post" enctype="multipart/form-data">
				   <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Template Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtname" placeholder="Enter your template name" class="form-control"></div>
                   </div>
				   <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label"> Description</label></div>
                            <div class="col-12 col-md-9"><textarea name="txtdesc" id="textarea-input" rows="9" placeholder="Enter description" class="form-control"></textarea></div>
                   </div>
				   <div class="row form-group">
					<div class="col col-md-3"><label for="textarea-input" class=" form-control-label"> Category</label></div>
					<div class="col-12 col-md-9">
						<select  class=" form-control" name="ddlcat">
			
								<?php
									$querycat="select * from category";
									$res_cat=mysqli_query($con,$querycat);
									while($row_cat=mysqli_fetch_array($res_cat))
										{
									
								?>
								<option value="<?php echo $row_cat['cat_id'];?>"><?php echo $row_cat['cat_name'];?></option>
								<?php 
									}
								?>

						</select>
					</div>
				  </div>
				   <div class="row form-group">
						<div class="col col-md-3"><label for="textarea-input" class=" form-control-label"> SubCategory</label></div>
						<div class="col-12 col-md-9">
						<select class=" form-control" name="ddlsubcat">

								<?php
									$querycat="select * from category";
									$res_cat=mysqli_query($con,$querycat);
									while($row_cat=mysqli_fetch_array($res_cat))
										{
									
								?>
								<option value=" <?php echo $row_cat['cat_id'];?>"><?php echo $row_cat['cat_name'];?></option>
								<?php 
									}
								?>
								
							 </select>
						</div>
				    </div>
				    <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Template Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="fimage" class="form-control-file"></div>
                    </div>
					<div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Template files</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="tfile" class="form-control-file"></div>
                    </div>
					<div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Template tags</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="txttags" placeholder="Enter template tag" class="form-control"></div>
                    </div>
					<div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Template price</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtprice" placeholder="Enter price" class="form-control"></div>
                    </div>
					<div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Template Type</label></div>
                            <div class="col-12 col-md-9" >	
								<input type="radio" name="type" value="Free" style="    margin-left: -484px;"/>Free
								<input type="radio" name="type" value="Paid"/>Paid
							</div>
					</div>
                        
					<div class="row form-group">
					  <div class="col col-md-3">
								
							</div>
                            <div class="col col-md-3">
								<input type="submit" name="btnadd" value="Add template">
								<p><?php echo $msg;  ?></p>
							</div>
                            <div class="col-12 col-md-6">	
								
							</div>
                     </div>
					 
				
				
					
					
					
				</form>
				 </div>
			</div>
	</div>

<?php include('footer.php');?>