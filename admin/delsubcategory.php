<?php
include('include/connect.php');
$subcid=$_GET['id'];
$query="delete from subcategory where subcat_id=$subcid";
$res=mysqli_query($con,$query);
if($res)
{
	header("location:managesubcategory.php");
	//echo "Error while";
}
else
{
	echo "Error while deleting product.Pls Try Again".mysqli_error($con);
}
?>