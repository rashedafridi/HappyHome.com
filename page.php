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

<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css"> 

<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">



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
   
    <div class="container" style="background: #ffae00;
    background: linear-gradient(to right, rgb(248, 151, 25), rgb(241, 178, 96)); ">
        <div class="row">
            <div class="cal-9">
                <p style="font-size: 3rem">This page is under construction due to corona pandemic.
                 We apologize for the inconvenience</p>
            </div>
            <div class="cal-3">
            <img src="product/apology.jpg" class="rounded mx-auto d-block" alt="Responsive image">
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