<?php include('header.php');
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
<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">  
                <div class="item active"><!-- First-Slide -->
                    <img src="images/hand.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated flipInX">Flat <span>50%</span> Discount</h3>
                        <h4 data-animation="animated flipInX">Hot Offer Today Only</h4>
                    </div>
                </div>  
                <div class="item"> <!-- Second-Slide -->
                    <img src="images/pic.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated fadeInDown">Our Latest Fashion Editorials</h3>
                        <h4 data-animation="animated fadeInUp">cupidatat non proident</h4>
                    </div>
                </div> 
                <div class="item"><!-- Third-Slide -->
                    <img src="images/r.jpg" alt="" class="img-responsive"/>
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated fadeInLeft">End Of Season Sale</h3>
                        <h4 data-animation="animated flipInX">cupidatat non proident</h4>
                    </div>
                </div> 
            </div> 
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a> 
            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> 
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
		
				
				
		 	
	
	
				