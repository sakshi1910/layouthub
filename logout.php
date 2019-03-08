<?php
include('connect.php');
session_start();

	$id=$_SESSION['userid'];
	$querycart="delete from cart where user_id=$id";
	echo $querycart;
	$rescart=mysqli_query($con,$querycart);

$_SESSION['userid']="";
session_destroy();
header("location:login.php");



?>