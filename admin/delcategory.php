<?php
include('include/connect.php');
$catid=$_GET['id'];
$query="delete from category where cat_id=$catid";
$res=mysqli_query($con,$query);
if($res)
{
	header("location:managecategory.php");
	//echo "Error while";
}
else
{
	echo "Error while deleting product.Pls Try Again".mysqli_error($con);
}
?>