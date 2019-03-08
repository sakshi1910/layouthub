<?php 
ob_start();
 session_start();
			//$id= $_SESSION['userid'];
			if(isset($_SESSION['userid']))
			{ include('iheader.php');
			}
			else{
			 include('header.php');
			}
include('connect.php');
$tid=$_GET['id'];
$query="select * from template where template_id=$tid";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);

$query1="select * from category where cat_id=".$row['tcat_id'];
$res1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($res1);

$query2="select * from subcategory where subcat_id=".$row['tsubcat_id'];
$res2=mysqli_query($con,$query2);
$row2=mysqli_fetch_array($res2);

if(isset($_POST['btndownload']))
{
	ignore_user_abort(true);
	set_time_limit(0); // disable the time limit for this script
	 
	$path = ''; // change the path to fit your websites document structure
	 
	//$dl_file = preg_replace("([^\w\s\d\-_~,;:\[\]\(\).]|[\.]{2,})", '', $row['template_files']); // simple file name validation
	//$dl_file = filter_var($dl_file, FILTER_SANITIZE_URL); // Remove (more) invalid characters
	$fullPath =  $row['template_files'];
	 
	if ($fd = fopen ($fullPath, "r")) {
		$fsize = filesize($fullPath);
		$path_parts = pathinfo($fullPath);
		$ext = strtolower($path_parts["extension"]);
		switch ($ext) {
			case "pdf":
			header("Content-type: application/pdf");
			header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a file download
			break;
			// add more headers for other content types here
			default;
			header("Content-type: application/octet-stream");
			header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
			break;
		}
		header("Content-length: $fsize");
		header("Cache-control: private"); //use this to open files directly
		while(!feof($fd)) {
			$buffer = fread($fd, 2048);
			echo $buffer;
		}
	}
	fclose ($fd);
	exit;
}

if(isset($_POST['addcart']))
{ if(isset($_SESSION['userid']))
	{
	$tempid=$tid;
	//session_start();
	$user_id=$_SESSION['userid'];
	
	
	$price=$row['template_price'];
	$total=$quantity * $price;
	
	$rquery="insert into cart(template_id,user_id,price,total) values($tempid,$user_id,$price,$total)";
	
	$res=mysqli_query($con,$rquery);
	if($res)
	{
			header("location:cart.php");
	}
	else
	{
		echo 'error in insertion'.mysqli_error($con);
	}
	}
	else{
		header("location:login.php");
	}
}

?>
<div class="products">	 
		<div class="container">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
							
								<li data-thumb="images/s1.jpg">
									<div class="thumb-image detail_images"> <img src="<?php  echo $row['template_image']; ?>"data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
					
						<h3 class="item_name"><?php  echo $row['template_title']; ?></h3><br/><br/>
						<h3 class="item_name"style="color:#5555ca; font-size:20px"><?php  echo $row1['cat_name']; ?></h3><br/><br/>
						<h3 class="item_name" style="color:#5555ca; font-size:20px"><?php  echo $row2['subcat_name']; ?></h3><br/><br/>
						<h3 class="item_name" style="color:#5555ca; font-size:20px"><?php  echo $row['template_tags']; ?></h3><br/><br/>
						
						<div class="single-price">
							
						</div> 
						
						<form  method="post">
						<?php
						if($row['template_type']=='free')
						{
						?>
							<button class="w3ls-cart w3ls-cart-like" name="btndownload"><i class="fa fa-heart-o" aria-hidden="true"></i>Download</button>							
							
							<?php
						}else
						{
							?>
							<button type="submit" class="w3ls-cart" name="addcart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
						<?php
						}
						?>
						
						</form>
						
					</div>
				   <div class="clearfix"> </div>  
				</div>
				<?php
				ob_flush();
				?>