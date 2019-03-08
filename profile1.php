<?php
ob_start();

include('connect.php');
//$tid=$_GET['id'];
 session_start();
			$id= $_SESSION['userid'];
			if(isset($_SESSION['userid']))
			{ include('iheader.php');
			}
			else{
			 include('header.php');
			}
//echo $id."dddd";
$query="select * from signup where regid=$id";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
if(isset($_POST['update']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$city=$_POST['city'];
	$phone_no=$_POST['phoneno'];
	
	move_uploaded_file($_FILES['fimage']['tmp_name'],"images/".$_FILES['fimage']['name']);
	$filepath="images/".$_FILES['fimage']['name'];
	
	$rquery="update signup set fname='$fname',lname='$lname',city='$city',phoneno=$phone_no ,profile_image='$filepath' where regid=$id";
	//echo $rquery;
	$resq=mysqli_query($con,$rquery);
	if($resq)
	{
		header("location:profile1.php");
	}
}
	
?>
<style>
.demo-data
{
    padding: 31px;
    border: 1px solid #eee;
    background:#eee;
}
.single-top-right h4
{
	color:#5555ca ! important;
	  
    line-height: 1.6;
    text-decoration: underline;
}
input[type="text"]
{
	padding: 5px;
    width: 298px;
}
.single-top-right .w3ls-cart 
{
	margin-top:20px;
}
</style>
<div class="products">	 
		<div class="container"> 
		<div class="col-md-3 rsidebar">
		<?php include('userside.php'); ?>
		</div>

<div class="col-md-9 product-w3ls-right">		
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
					
							<img src="<?php echo $row['profile_image']; ?>"  class="img-responsive" alt="image">
							<form  method="post" enctype="multipart/form-data">
							<div class="row form-group">
							  <div class="col col-md-3"><label for="file-input" class=" form-control-label">Profile Pic</label></div>
							  <div class="col-12 col-md-9"><input type="file" id="file-input" name="fimage" class="form-control-file"></div>
							</div>
					  
						
					</div>
					<div class="col-md-6 single-top-right">
						<div class="demo-data">
							<h4 class="item_name" style="color:#5555ca;"><?php  echo $row['fname']; ?></h4>
							<h4 class="item_name" style="color:#5555ca;"><?php  echo $row['email']; ?></h4>
							<h4 class="item_name" style="color:#5555ca;"><?php  echo $row['phoneno']; ?></h4>
						
					    </div>		
						<div class="demo-data">
							<input type="text" class="user" value="<?php  echo $row['fname']; ?>" name="fname" placeholder="Edit your Fname" required="">
							<br/>
							<br/>
							<input type="text" class="user" value="<?php  echo $row['lname']; ?>" name="lname" placeholder="Edit your Lname" required="">
							<br/>
							<br/>
							<input type="text"  value="<?php  echo $row['city']; ?>" name="city" class="lock" placeholder="Edit your city">
							<br/>
							<br/>
							<input type="text"  value="<?php  echo $row['phoneno']; ?>" name="phoneno" class="lock" placeholder="Edit your Phoneno">
							<br/>
							
							
							<button type="submit" class="w3ls-cart" name="update"> Update</button>
						</div>
						
						</form>
						
					</div>
				   <div class="clearfix"> </div>  
				</div>
				</div>
				</div>
				</div>
				
				<?php
				include('footer.php');
				echo 'ddddd';
				ob_flush();
				?>
				