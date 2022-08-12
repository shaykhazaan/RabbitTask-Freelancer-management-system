
<?php 
// ob_start();
// session_start();
// echo $_SESSION['amount']
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      
	  <style>
	  input[type="password"]
{
	    width: 34%;
    font-size: 14px;
    height: 46px;
    border-radius: 3px;
    border: 1px solid #ccc;
    padding: 10px;
}

</style>
   </head>
   <body>


              <?php
              // require_once('header.php');

              ?>


<section class="pricing-table " id="pricing" style="margin: 120px 0px;">
		<div class="container">
				   <h2 class="heading mb-sm-5 mb-4" >Pay Now</h2><br>
				   <div id="paypal-button" class="both"></div>
				   <!-- //stripe -->
					<div class="both" >
			          <!-- <a href="checkout.php">    <img src="images/st.png" id="imgstr"> </a> -->

			             <style type="text/css">
			             	#imgstr {
							border-radius: 20px;
							width: 200px;
							height: 70px;
						    }
						    .both {
						    	display: inline-block;
						    	margin-right: 120px;
						    	/*vertical-align: center;*/
						    }
				       </style>
				     </div>  
				    <!-- //stripe  end  -->
				  
		</div>   	<!-- End container -->

   </section>
  <?php
     // require_once('footer.php');
  ?>
   </body>
</html>