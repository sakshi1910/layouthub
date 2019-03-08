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
  ?>
<style>
.content{
	width:1091px;
	margin: 0 auto;
}
</style>
   <!--banner-->
<div class="modal-content" style="margin-top:20px; margin-bottom:20px;">
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</h4>
    </div>
    <div class="modal-body">
            <?php 
			
                    		$querycart="select t.*,c.* from cart c join template t on c.template_id=t.template_id where user_id=$id";
                            $res_cart=mysqli_query($con,$querycart);
                            $total=0;
                           $count=mysqli_num_rows($res_cart);
						   if($count>0)
						   {
							   ?>
							   <table class="table table-hover table-responsive" id="my-cart-table">
							   <tbody>
							   <?php
							    $temp_names=array();
								$temp_ids=array();
								$temp_price=array();
                            while($row_cart=mysqli_fetch_array($res_cart))
                            {
								
								
								$temp_names[]=$row_cart['template_title'];
								$temp_ids[]=$row_cart['template_id'];
								$temp_price[]=$row_cart['price'];  
								
                                $total=$total+$row_cart['price'];
                             ?>
                <tr title="summary 9" data-id="9" data-price="1.50">
                    <td class="text-center" style="width: 30px;">
                        <img width="30px" height="30px" src="<?php echo $row_cart['template_image'];?>">
                    </td>
                    <td><h6><?php echo $row_cart['template_title'];?></h6></td>
                    <td title="Unit Price">$<?php echo $row_cart['price'];?></td>
                   
                    <td title="Total" class="my-product-total">$<?php echo $row_cart['price'];?></td>
                    <td title="Remove from Cart" class="text-center" style="width: 30px;">
                        <a href="cartremove.php?id=<?php  echo $row_cart['cart_id'];?>" 
						class="btn btn-xs btn-danger ">X</a>
						 
                    </td>
                </tr>
                <?php
                            }
							$_SESSION['temp_names']=$temp_names;
                            $_SESSION['temp_ids']=$temp_ids;
                            $_SESSION['temp_price']=$temp_price;
                ?>
                
                <tr>
                    <td></td>
                    <td><strong>Total</strong></td>
                    <td></td>
                    <td></td>
                    <td><strong id="my-cart-grand-total">$<?php echo $total;?></strong></td>
                    <td></td>
                </tr>
               
        </tbody>
    </table>
</div>
<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='sakshidhiman1910@gmail.com'; // Personal email ID
?>
 <div class="btn">
    <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="PHPGang Payment">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="<?php echo $total;?>">
    <input type="hidden" name="cpp_header_image" value="http://www.phpgang.com/wp-content/uploads/gang.jpg">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return"  value="http://localhost:8080/paypalsite/cancel.php">
    <input type="hidden" name="return" value="http://localhost/layouthub/user/success.php">
	<input type="hidden" name="rm" value="2"/>
    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form> 
    </div>
</tbody>
    </table>
	<?php
		}
		else
		{
			echo "<h2 class='text-center' style='margin-top:20px;margin-bottom:80px;'>YOUR CART IS EMPTY</h2>";
		}
	?>
</div>

</div>
	
			

<!--footer-->
<?php include('footer.php');
ob_flush();
?>