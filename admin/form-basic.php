<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
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
							<label class="col-sm-12 col-md-2 col-form-label">template Title</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Title">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">template Desc</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="description" type="desc">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Category</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="category" type="category">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Sub Category</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="sub category" type="subcat">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">template Price</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="template price" type="price">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">template Manufacturer</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="tmanufacture" type="manufacture">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">template Type</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="ttype" type="type">
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