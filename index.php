<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HappyHome.com</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="HappyHome.com">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
 <!-- <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css"> -->
<!--<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">-->
<!-- <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css"> -->
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css"> 

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->

<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<!-- <link rel="stylesheet" type="text/css" href="styles/slide.css"> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script> -->

<!-- <link rel="stylesheet" type="text/css" href="styles/slide.css"> -->

<?php



include("includes/db.php");
//include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>
	<!-- Banner -->

	<div class="banner">
		<div class="banner_background"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="Icons/sa.jpg" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text"></h1>
						<div class="banner_price"><span></span></div>
						<div class="banner_product_name"></div>
						<!-- <div class="button banner_button"><a href="#"></a></div> -->
					</div>
				</div>
			</div>
		</div>
	</div>


   	<!-- Hot New Arrivals -->

       <div class="new_arrivals">
	   <div class="container">
				<div class="row">
					<div class="col">
						<div class="tabbed_container">
							<div class="tabs clearfix tabs-right">
								<div class="new_arrivals_title">Hot New arrivals</div>
								<ul class="clearfix">
									<!-- <li class="active">Featured</li> -->
									<li>featture</li>
									<!-- <li>Laptops & Computers</li> -->
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>
							<div class="row ml-5">
						<!-- <div class="row">
							<div class="col-lg-12" style="z-index:1;">

								Product Panel 
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">  -->

<?php

getPro(0,8);

?>

									

								

							<!--<div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><img src="images/new_single.png" alt=""></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="#">Smartphones</a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
												<div class="arrivals_single_price text-right">$379</div>
											</div>
											<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<form action="#"><button class="arrivals_single_button">Add to Cart</button></form>
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
							</div>-->

						<!-- </div>
								
					</div> 
				</div>-->
			</div>
		</div>		
	</div>
    



    	<!-- popular -->

		<div class="new_arrivals">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="tabbed_container">
							<div class="tabs clearfix tabs-right">
								<div class="new_arrivals_title">Popular</div>
								<ul class="clearfix">
									<!-- <li class="active">Featured</li> -->
									<li>product</li>
									<!-- <li>Laptops & Computers</li> -->
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>
							<div class="row ml-5">
								<!-- <div class="col-lg-12" style="z-index:1;"> -->
	
									<!-- Product Panel -->
									<!-- <div class="product_panel panel active">
										<div class="arrivals_slider slider"> -->


<?php

getPro(8,8);

?>
										

										
										</div>
										<div class="arrivals_slider_dots_cover"></div>
									</div>
	
								</div>
	
								<!--<div class="col-lg-3">
									<div class="arrivals_single clearfix">
										<div class="d-flex flex-column align-items-center justify-content-center">
											<div class="arrivals_single_image"><img src="images/new_single.png" alt=""></div>
											<div class="arrivals_single_content">
												<div class="arrivals_single_category"><a href="#">Smartphones</a></div>
												<div class="arrivals_single_name_container clearfix">
													<div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
													<div class="arrivals_single_price text-right">$379</div>
												</div>
												<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
												<form action="#"><button class="arrivals_single_button">Add to Cart</button></form>
											</div>
											<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
											<ul class="arrivals_single_marks product_marks">
												<li class="arrivals_single_mark product_mark product_new">new</li>
											</ul>
										</div>
									</div>
								</div>-->
	
							<!-- </div>
									
						</div> -->
					</div>
				</div>
			</div>		
		</div>





    














<?php

include("includes/footer.php");
?>





    

        <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
		<script src="styles/bootstrap4/popper.js"></script>
		<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
        <script src="styles/bootstrap4/bootstrap.min.js"></script>
        <!-- <script src="plugins/greensock/TweenMax.min.js"></script> -->
        <!-- <script src="plugins/greensock/TimelineMax.min.js"></script> -->
        <!-- <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="plugins/greensock/animation.gsap.min.js"></script> -->
        <!-- <script src="plugins/greensock/ScrollToPlugin.min.js"></script> -->
        <!-- <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script> -->
        <script src="plugins/slick-1.8.0/slick.js"></script>
        <!-- <script src="plugins/easing/easing.js"></script> -->
		<script src="js/custom.js"></script>
		
</body>



</html>