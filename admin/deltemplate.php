<?php
include('include/connect.php');
$proid=$_GET['id'];
$query="delete from template where template_id=$proid";
$res=mysqli_query($con,$query);
if($res)
{
	header("location:datatable.php");
	//echo "Error while";
}
else
{
	echo "Error while deleting product.Pls Try Again".mysqli_error($con);
}
?>