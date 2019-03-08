<?php
include ("connect.php");
	$tempid=$_GET['id'];
	$querycart="delete from cart where cart_id=$tempid";
	$rescart=mysqli_query($con,$querycart);
	if($rescart)
	{
		header("location:cart.php");
		//echo "Error while";
	}
	else
	{
		echo "Error while deleting product.Pls Try Again".mysqli_error($con);
	}
	?>