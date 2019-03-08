<?php
  session_start();
			$id= $_SESSION['userid'];
			if(isset($_SESSION['userid']))
			{ include('iheader.php');
			}
			else{
			 include('header.php');
			}
 
 include('connect.php');
?>
<style>
.agile-products {
    width: 213px;
height: 200px;
}
.glry-w3agile-grids a {
	height:177px;
}
.cd-dropdown-content .cd-secondary-dropdown > li > a {
    color: #3f8654;
    font-size: 1.6rem;
    margin-bottom: 10px;
    line-height: 30px;
    height: 30px;
    pointer-events: auto;
    text-transform: uppercase;
}

</style>
<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right">
				<!-- breadcrumbs --> 
				<ol class="breadcrumb breadcrumb1">
					<li><a href="index.php">Home</a></li>
					<li class="active">Products</li>
				</ol> 
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
					<h4>Categories</h4>
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">
					
					<?php 
					
					 $query="select * from category";
					 $res=mysqli_query($con,$query);
					while($row=mysqli_fetch_array($res))
					{
					
					?>
					
					
					
					<div class="col-md-3 product-grids">
						<div class="agile-products">
						
							<a href="subcategories.php?id=<?php echo $row['cat_id']; ?>"><img height="100px" src="<?php echo $row['cat_image']; ?>" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="subcategories.php"><?php echo $row['cat_name']; ?></a></h5> 
								 
								
							</div>
						</div>
					</div>
					<?php 
					
					}
					?>
					
					
					
					
					
					
					<div class="clearfix"> </div>
				</div>
				<!-- add-products -->  
				<!-- //add-products -->
			</div>
			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="slider-left">
						<h4>Filter By Price</h4>            
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>0 - $100 </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100 - $200 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200 - $250  </label> 
							
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$350 - $400 </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$450 - $500  </label> 
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>More</label> 
						</div> 
					</div>
					<div class="sidebar-row">
						<h4> Categories</h4>
						<ul class="faq">
							<?php 
					
								 $query="select * from category";
								 $res=mysqli_query($con,$query);
								 while($row=mysqli_fetch_array($res))
								 {
							
							?>
							<li class="item1"><a href="#"><?php echo $row['cat_name']; ?><span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
								<?php 
					
												 $query1="select * from subcategory where cat_id=".$row['cat_id'];
												 $res1=mysqli_query($con,$query1);
												while($row1=mysqli_fetch_array($res1))
												{
												
								?>
									<li class="subitem1"><a href="tempbycat.php?id=<?php echo $row1['subcat_id']; ?>"><?php echo $row1['subcat_name']; ?></a>
									</li>
								<?php
								}
								?>
								</ul>
								</li>
							<?php
							}
							?>
							
						</ul>
						
						<!-- script for tabs -->
						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->
					</div>
					<div class="sidebar-row">
						<h4>DISCOUNTS</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Upto - 10% (20)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>70% - 60% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>50% - 40% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						</div>
					</div>
						 
				</div>
			</div>
	</div>
</div>
			</div>
			<div class="clearfix"> </div>
			<!-- recommendations -->
			<div class="recommend">
				<div id="myTabContent" class="tab-content">
					
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						
							<div class="tabcontent-grids"> 
                    					
							
								<div id="owl-demo" class="owl-carousel"> 
								<?php 
					
					 $query="select * from category";
					 $res=mysqli_query($con,$query);
					while($row=mysqli_fetch_array($res))
					{
					
					?>		
									<div class="item">
						                <div class="glry-w3agile-grids agileits"> 
											<a href="subcategories.php"><img height="100px" src="<?php echo $row['cat_image']; ?>" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="categories.php"><?php echo $row['cat_name']; ?></a></h4>
												<p>Lorem ipsum dolor sit amet consectetur</p>
												<h5>$100</h5> 
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
													<input type="hidden" name="amount" value="100.00" /> 
													<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>  
											</div>   
										</div>   
									</div>
					        <?php 
					
					        }
					        ?>
					            </div> 
							</div>
						</div>
						
				<script>
					$(document).ready(function() { 
						$("#owl-demo5").owlCarousel({
					 
						  autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true
					 
						});
						
					}); 
				</script>
				</div>
				  
			<!-- //recommendations -->
	
		<?php include('footer.php');?>