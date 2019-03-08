<?php
include('header.php');
include('connect.php');
$msg="";
echo '<pre>';
print_r($_POST);
echo '</pre>';
$item_name = $_POST['item_name'];
$item_number = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$payment_amount = $_POST['mc_gross'];  //bring from session
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];

$payer_email = $_POST['payer_email'];	
$payment_date = $_POST['payment_date'];
$price = '10.00';
$currency='USD';

    echo $item_name."   ".$txn_id."   ".$payment_status."    ".$payment_currency."    ".$item_number." ".$payer_email." ".$payment_date.

	
$rquery="insert into payment(item_name,item_number,payer_email,payment_amount,payment_status,payment_currency,txn_id,payment_date) values('$item_name',$item_number,'$payer_email',$payment_amount,'$payment_status','$payment_currency','$txn_id','$payment_date')";
  $res=mysqli_query($con,$rquery);
	if($res)
	{
		$msg="amount paid successfully";
	}
	else
	{
		$msg="error in insertion".mysqli_error($con);
	}
	

?>