<?php 
include('header.php');  
include('connect.php');  
$msg="";
if(isset($_POST['btnlogin']))
{
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$phoneno=$_POST['phoneno'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$query="insert into signup(fname,lname,password,email,phoneno,state,city,country) values('$firstname','$lastname','$password','$email',$phoneno,'$state','$city','$country')";
	$res=mysqli_query($con,$query);
	if($res)
	{
		$msg="Registration successfull";
	}
	else
	{
		$msg="error in insertion".mysqli_error($con);
	}
	mysqli_close($con);
}
?>
	
<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Create your account</h3>  
			<div class="login-body">
				<form  method="post">
					<input type="text" class="user" name="fname" placeholder="Enter your firstname" required="">
					<input type="text" class="user" name="lname" placeholder="Enter your lastname" required="">
					<input type="text" class="user" name="email" placeholder="Enter your email" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<input type="text" name="phoneno" class="lock" placeholder="Enter your phone number" required="">
					<input type="text" name="city" class="lock" placeholder="Enter your city">
					<input type="text" name="country" class="lock" placeholder="Enter your country" required="">
					<select name="state" class="lock">
						<option>Assam</option>
						<option>Haryana</option>
						<option>Punjab</option>
						<option>Uttarpardesh</option>
						<option>Sikkim</option>
					</select></br>
				    <input type="radio" name="rbgender"/>Male
					<input type="radio" name="rbgender"/>Female
					<input type="submit" name="btnlogin"value="Sign Up ">
					<p><?php echo $msg; ?></p>
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Remember me</label>
						<div class="forgot">
							<a href="#">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6>Already have an account? <a href="login.php">Login Now »</a> </h6>  
		</div>
	</div>
	<!-- //sign up-page --> 
	<!-- footer-top -->
	<?php include('footer.php');?>