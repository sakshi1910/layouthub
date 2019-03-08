<?php 
ob_start();
include('header.php');  
include('connect.php');  
$msg="";
if(isset($_POST['btnlogin']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	
	$querylogin="select * from signup where email='$email' and password='$password'";
	//echo $querylogin;
	$res=mysqli_query($con,$querylogin);
	$count=mysqli_num_rows($res);
	if($count==1)
	{   $row=mysqli_fetch_array($res);
		session_start();
		$_SESSION['userid']=$row['regid'];
		//echo $_SESSION['userid']."ddd";
		//die();
		header("location:profile1.php");
	}
	else
	{
		$msg= "Invalid Username/Password";
	}
}


  ?>
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Login to your account</h3>  
			<div class="login-body">
				<form method="post">
					<input type="text" class="user" name="email" placeholder="Enter your email" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<input type="submit" name="btnlogin" value="Login">
					<p><?php echo $msg; ?></p>
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Remember me</label>
						<div class="forgot">
							<a href="changepassword.php">change Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6> Not a Member? <a href="signup.php">Sign Up Now »</a> </h6> 
			
		</div>
	</div>
	<!-- //login-page --> 
	<?php include('footer.php');
	ob_flush();
	?>