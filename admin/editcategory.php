 <!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<?php 
	include('include/header.php'); 
	include('include/sidebar.php'); 
	include('include/connect.php'); 
	
	$catid=$_GET['id'];
$query="select * from category where cat_id=$catid";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);

	
	?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Basic</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Default Basic Forms</h4>
							
						</div>
						
					</div>
					<form>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Category Title</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" value="<?php echo $row['cat_name'];  ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Category Desc</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control"  type="desc">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Category</label>
							<div class="col-sm-12 col-md-10">
								<select name="ddlpcat" id="select" class="form-control">
									<option>Select Category</option>
                                </select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Sub Category</label>
							<div class="col-sm-12 col-md-10">
								<select name="ddlpcat" id="select" class="form-control">
									<option>Select SubCategory</option>
                                </select>
							</div>
						</div>
						
					
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Category Type</label>
							<div class="col-sm-12 col-md-10">
								<div class="radio">
                                  <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Prescription 
                                  </label>
                                </div>
								<div class="radio">
                                  <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Non-Prescription
                                  </label>
                                </div>
							</div>
						</div>	
						<div class="row form-group">
								<div class="col col-md-3"><label for="file-input" class=" form-control-label">template Image</label></div>
								<div class="col-12 col-md-9"><input type="file" id="file-input" name="fpimage" class="form-control-file"></div>
							</div>
					</form>
					</div>
						<div class="card-footer">
							<button type="submit"  name="btnsubmit" class="btn btn-primary btn-sm">
							<i class="fa fa-dot-circle-o"></i> Submit
							</button>
						</div>
				</div>
				
				</div>

			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>