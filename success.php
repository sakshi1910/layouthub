<?php
ob_start();
 session_start();
			$id= $_SESSION['userid'];
			if(isset($_SESSION['userid']))
			{ include('iheader.php');
			}
			else{
			 include('header.php');
			}
include('connect.php');
$msg="";



$id=$_SESSION['userid'];
$temp_names=$_SESSION['temp_names'];
$temp_ids=$_SESSION['temp_ids'];
$temp_price=$_SESSION['temp_price'];

$query1="select * from signup where regid=$id";
	$res1=mysqli_query($con,$query1);
	$row1=mysqli_fetch_array($res1);

	$count=count($temp_ids);
	
	
	
$item_name = $_POST['item_name'];
$item_number = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$payment_amount = $_POST['mc_gross'];  //bring from session
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];

$payer_email = $_POST['payer_email'];	
$payment_date = $_POST['payment_date'];
$i=0;
$htmlcontent="";
   foreach($temp_ids as $value)
	{
		
	
	
	
	  $rquery="insert into payment(item_name,temp_id,payer_email,payment_amount,payment_status,payment_currency,txn_id,payment_date,user_id) values('".$temp_names[$i]."',$value,'$payer_email',".$temp_price[$i].",'$payment_status','$payment_currency','$txn_id','$payment_date',$id)";
    //echo $query1;
	// $res=mysqli_query($conn,$query1);
	   $res=mysqli_query($con,$rquery);
	   $htmlcontent.="<tr style='min-height:100px;padding-bottom:5px' bgcolor='#FFFFFF'>
					<td style='border-left:1px solid #efefef;padding-right:10px;line-height:35px'>1.</td>
					<td style='padding-left:15px'><b>".$temp_names[$i]."</b>
					<p>Download the template from below link:
					<a href='http://localhost/layouthub/user/tempdownload.php?id=$value'>".$temp_names[$i]."</a>
					</p></td>
					<td style='border-left:1px solid #efefef;padding-right:10px;line-height:35px' align='right'><b>".$temp_price[$i]."</b></td>
					<td style='border-left:1px solid #efefef' align='center'><b>1</b></td>
				</tr>";
	   
	   
	   
	 $i++;
	}
	

?>
<?php
date_default_timezone_set('Etc/UTC');

require 'send/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages

$mail->SMTPDebug =0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port =587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
/*$mail->smtpConnect([
'ssl' =>[
'verify_peer' => false,
'verify_peer_name' =>false,
'allow_self_signed' => true
] 
]);*/
//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "sakshidhimanbusiness@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "sakshi$1030";

//Set who the message is to be sent from
$mail->setFrom('sakshidhimanbusiness@gmail.com', 'entiremeds');

//Set an alternative reply-to address
//$mail->addReplyTo('rimpusidhu7007@gmail.com', 'Administrator TemplateMart');

//Set who the message is to be sent to
$mail->addAddress($row1['email'],$row1['fname']);

//Set the subject line
$mail->Subject = 'Thanks For Visiting our website';
$mail->smtpConnect([
'ssl'=>[
'verify_peer'=>false,
'verify_peer_name'=>false,
'allow_self_signed'=>true
]
]);

$mail->msgHTML("<html>
<div>
<td>
			<table style='width:605px;font-family:Arial,Helvetica,sans-serif' cellspacing='0px' cellpadding='0px'>
				<tbody><tr>
					<td><img src=''>
						+91 - 8283840797
						</span>
						<div style='text-align:right;font-size:14px;color:#262626;font-family:Arial,Helvetica,sans-serif'>
							Customer Support
						</div>
					</td>
				</tr>
			</tbody></table>
			
			<table style='width:605px;font-family:Arial,Helvetica,sans-serif;margin-top:10px' cellspacing='0px' cellpadding='0px' border='0'>
				<tbody><tr>
					<td valign='top'>
						
						<div style='font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#000000;line-height:22px;padding:10px 0px 5px 0px;width:605px;margin:0 auto'><b>Dear Snehlata,</b>
						<br>

						Thank you for your booking <a href='http://www.bookshow.in' target='_blank' data-saferedirecturl='https://www.google.com/url?hl=en-GB&amp;q=http://www.trideal.in&amp;source=gmail&amp;ust=1525409392570000&amp;usg=AFQjCNG93CYiepdqCWHmgZ15idHNITJDCA'>www.trideal.in</a>. This email contains important information 
						regarding your recent purchase . please save it for reference.
						<br>
						<br>
						For your convenience, we have included a copy of your order below.

					 </div>
					</td>
				</tr>
			</tbody></table>
			
	
	
			<table style='width:605px;font-family:Arial,Helvetica,sans-serif;margin-top:10px;font-size:12px' cellspacing='0px' cellpadding='0px' border='0'>
				<tbody><tr>
					<td colspan='4' valign='top'>
					<div style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#282828;padding-bottom:6px'>
						<b>Product Information</b>
					 </div>
					</td>
				</tr>
			</tbody></table>
			<table style='width:605px;font-family:Arial,Helvetica,sans-serif;margin-top:2px;font-size:11px;border:1px solid #efefef' cellspacing='0px' cellpadding='0px' border='0'>
				<tbody><tr bgcolor='#393939'>
					<td style='line-height:25px;padding-left:15px' width='50px'><font color='#FFFFFF'><b>S.no</b></font></td>
					<td style='line-height:25px;padding-left:15px' width='300px'><font color='#FFFFFF'><b>Item</b></font></td>
					<td style='border-left:1px solid #efefef;padding-right:10px' align='right' width='55px'><font color='#FFFFFF'><b>Price</b></font></td>
					<td style='border-left:1px solid #efefef' align='center' width='95px'><font color='#FFFFFF'><b>Quantity</b></font></td>
				</tr>
				".$htmlcontent."
				

				

				
			</tbody></table>
			
			
			<table style='width:605px;font-family:Arial,Helvetica,sans-serif;margin-top:10px' cellspacing='0px' cellpadding='0px' border='0'>
				<tbody><tr>
					<td valign='top'>						
						<div style='font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#000000;line-height:22px;padding:30px 5px 25px 0px;width:605px;margin:0 auto'>				
			If you have a question about your order status, you can contact the seller directly by e-mail at : <a href='mailto:info@trideal.in' target='_blank'>info@trideal.in</a>.
						</div>
					</td>
				</tr>
			</tbody></table>
				
			<table style='width:605px;font-family:Arial,Helvetica,sans-serif;margin-top:15px' cellspacing='0px' cellpadding='0px'>
				<tbody><tr>
					<td><a href='http://www.facebook.com/pages/tridealin/205292929545268' target='_blank' data-saferedirecturl='https://www.google.com/url?hl=en-GB&amp;q=http://www.facebook.com/pages/tridealin/205292929545268&amp;source=gmail&amp;ust=1525409392570000&amp;usg=AFQjCNH7cUGwa1SBgbGIOTk0muhG_xHvew'><img src='https://ci4.googleusercontent.com/proxy/86Dg7DHbUAJSWhTUbx6IjKbpYA1EmToAksC0oh4nLqfSgklA_6-vwJCoW2v_b0EBg0BVLlF7zfGW1xqBK6g=s0-d-e1-ft#http://www.trideal.in/images/fb-icon.png' align='left' border='0' class='CToWUd'></a></td>
					<td align='right'>
						<div style='text-align:right;font-size:12px;color:#262626;font-family:Arial,Helvetica,sans-serif'>
							<b>For any feedback, write to us on</b>
							<br>
							<a href='mailto:info@trideal.in' target='_blank'>info@trideal.in</a>
						</div>
					</td>
				</tr>
			</tbody></table>
		</td>
		</div>
		</html>");
		
		
		

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->addAttachment('send/images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
   echo "<p style='font-size:20px;text-align:center'>Check your Email!";
}
ob_flush();
?>
<html>
<div>
<td>
			<table style='width:605px;font-family:Arial,Helvetica,sans-serif' cellspacing='0px' cellpadding='0px'>
				<tbody><tr>
					<td><img src=''>
						+91 - 8283840797
						</span>
						<div style='text-align:right;font-size:14px;color:#262626;font-family:Arial,Helvetica,sans-serif'>
							Customer Support
						</div>
					</td>
				</tr>
			</tbody></table>
			
			<table style='width:605px;font-family:Arial,Helvetica,sans-serif;margin-top:10px' cellspacing='0px' cellpadding='0px' border='0'>
				<tbody><tr>
					<td valign='top'>
						
						<div style='font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#000000;line-height:22px;padding:10px 0px 5px 0px;width:605px;margin:0 auto'><b>Dear <?php echo $row1['fname']; ?>,</b>
						<br>

						Thank you for purchasing from layoutshub. This email contains important information 
						regarding your recent purchase . please save it for reference.
						<br>
						<br>
						For your convenience, we have included a copy of your order below.

					 </div>
					</td>
				</tr>
			</tbody></table>
			
		 
			<table style='width:605px;font-family:Arial,Helvetica,sans-serif;margin-top:10px;font-size:12px' cellspacing='0px' cellpadding='0px' border='0'>
				<tbody><tr>
					<td colspan='4' valign='top'>
					<div style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#282828;padding-bottom:6px'>
						<b>Product Information</b>
					 </div>
					</td>
				</tr>
			</tbody></table>
			<table style='width:605px;font-family:Arial,Helvetica,sans-serif;margin-top:2px;font-size:11px;border:1px solid #efefef' cellspacing='0px' cellpadding='0px' border='0'>
				<tbody><tr bgcolor='#393939'>
					<td style='line-height:25px;padding-left:15px' width='50px'><font color='#FFFFFF'><b>S.no</b></font></td>
					<td style='line-height:25px;padding-left:15px' width='300px'><font color='#FFFFFF'><b>Item</b></font></td>
					<td style='border-left:1px solid #efefef;padding-right:10px' align='right' width='55px'><font color='#FFFFFF'><b>Price</b></font></td>
					<td style='border-left:1px solid #efefef' align='center' width='95px'><font color='#FFFFFF'><b>Quantity</b></font></td>
				</tr>
				<?php echo $htmlcontent;?>
				

				 <tr>
 
 </tr>

				<tr>
					<td style='border:1px solid #efefef' colspan='5' bgcolor='#FFFFFF'><b>Terms &amp; Conditions</b>
			
					</td>
				</tr>
			</tbody></table>
			
			
			<table style='width:605px;font-family:Arial,Helvetica,sans-serif;margin-top:10px' cellspacing='0px' cellpadding='0px' border='0'>
				<tbody><tr>
					<td valign='top'>						
						<div style='font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#000000;line-height:22px;padding:30px 5px 25px 0px;width:605px;margin:0 auto'>				
			If you have a question about your order status, you can contact the seller directly by e-mail at : <a href='mailto:info@trideal.in' target='_blank'>info@trideal.in</a>.
						</div>
					</td>
				</tr>
			</tbody></table>
				
			<table style='width:605px;font-family:Arial,Helvetica,sans-serif;margin-top:15px' cellspacing='0px' cellpadding='0px'>
				<tbody><tr>
					<td><a href='http://www.facebook.com/pages/tridealin/205292929545268' target='_blank' data-saferedirecturl='https://www.google.com/url?hl=en-GB&amp;q=http://www.facebook.com/pages/tridealin/205292929545268&amp;source=gmail&amp;ust=1525409392570000&amp;usg=AFQjCNH7cUGwa1SBgbGIOTk0muhG_xHvew'><img src='https://ci4.googleusercontent.com/proxy/86Dg7DHbUAJSWhTUbx6IjKbpYA1EmToAksC0oh4nLqfSgklA_6-vwJCoW2v_b0EBg0BVLlF7zfGW1xqBK6g=s0-d-e1-ft#http://www.trideal.in/images/fb-icon.png' align='left' border='0' class='CToWUd'></a></td>
					<td align='right'>
						<div style='text-align:right;font-size:12px;color:#262626;font-family:Arial,Helvetica,sans-serif'>
							<b>For any feedback, write to us on</b>
							<br>
							<a href='mailto:info@trideal.in' target='_blank'>info@trideal.in</a>
						</div>
					</td>
				</tr>
			</tbody></table>
		</td>
		</div>
		</html>