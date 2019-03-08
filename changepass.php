<?php 
ob_start();
include('header.php');
include('connect.php');
$msg="";
if(isset($_POST['btnsubmit']))
 { 
	 $oldpas=$_POST['txtoldpass'];
	 $newpas=$_POST['txtnewpass'];
	 $confirmpas=$_POST['txtconfirmpass']
	  session_start();
	  $id=$_SESSION['userid'];
	 $querypass="select * from register where reg_id='1' and password='$oldpass'";
	 
	 $respass=mysqli_query($con,$querypass);
	 $countpass=mysqli_num_rows($respass);
	 if($countpass==1)
	 {
		 "update register set password='$newpas' where reg_id='1'";
	 }
	 else
	 {
		 $msg= "Invalid Username/Password";
	 }
 }
	 
	 

?>
<div class="banner-top">
	<div class="container">
		<h3 >Change Password</h3>
		<h4><a href="index.html">Home</a><label>/</label>Change Password</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--change password-->

	<div class="changepass">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Change Password</h3>
					<form method="post">
                    <div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="text" value="Old Password" name="txtoldpass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
					</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="text" value=" New Password" name="txtnewpass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="text" value="Confirm Password" name="txtconfirmpass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="update" name="btnsubmit">
					</form>
				</div>
				<div class="forg">
					
					<a href="register.php" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
<?php include('footer.php');
ob_flush();
?>