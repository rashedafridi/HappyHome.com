<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Happyhome.com</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="rating/responsive.css">
<!-- <link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css"> -->
<link rel="stylesheet" type="text/css" href="styles/shop_styles.css">
<!-- <link rel="stylesheet" type="text/css" href="styles/shop_responsive.css"> -->


<!-- <link rel="stylesheet" type="text/css" href="styles/gift-product-long.css"> -->
<?php
include("includes/db.php");
// include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");
?>









 	<!-- Home -->

	 <div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Product</h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">



					<div class="card" >
						<article class="card-group-item" >
							<header class="card-header">
								<h6 class="title">Warranty Type </h6>
							</header>
							<div class="filter-content" style="margin-left:30px;">
								<div class="card-body">
								<form>
									<label class="form-check">
									<input class="form-check-input" type="checkbox" value="">
									<span class="form-check-label">
										No Warranty
									</span>
									</label> <!-- form-check.// -->
									<label class="form-check">
									<input class="form-check-input" type="checkbox" value="">
									<span class="form-check-label">
										Seller Warranty
									</span>
									</label>  <!-- form-check.// -->
									<label class="form-check">
									<input class="form-check-input" type="checkbox" value="">
									<span class="form-check-label">
									Warranty
									</span>
									</label>  <!-- form-check.// -->
								</form>
					
								</div> <!-- card-body.// -->
							</div>
						</article> <!-- card-group-item.// -->
						
						<article class="card-group-item">
							<header class="card-header">
								<h6 class="title">Warranty Period </h6>
							</header>
							<div class="filter-content" style="margin-left:30px;">
								<div class="card-body">
								<label class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadio" value="">
								<span class="form-check-label">
									1 Year
								</span>
								</label>
								<label class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadio" value="">
								<span class="form-check-label">
									2 Year
								</span>
								</label>
								<label class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadio" value="">
								<span class="form-check-label">
									6 Month
								</span>
								</label>
								</div> <!-- card-body.// -->
							</div>
						</article> <!-- card-group-item.// -->
					</div> <!-- card.// -->

					<article class="card-group-item">
						<header class="card-header">
							<h6 class="title">Rating </h6>
						</header>
						<div class="row rating-desc" >
							<div class="col-xs-3 col-md-3 text-right" >
								<span class="glyphicon glyphicon-star"></span>5
							</div>
							<div class="col-xs-8 col-md-9">
								<label class="form-check">
								<input class="form-check-input" type="checkbox" value="">
								<div class="progress progress-striped">
									<div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="20"
										aria-valuemin="0" aria-valuemax="100" style="width: 80%">
										<span class="sr-only">80%</span>
									</div>
								</div>
							</div>
							<!-- end 5 -->
							<div class="col-xs-3 col-md-3 text-right">
								<span class="glyphicon glyphicon-star"></span>4
							</div>
							<div class="col-xs-8 col-md-9">
								<label class="form-check">
								<input class="form-check-input" type="checkbox" value="">
								<div class="progress">
									<div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="20"
										aria-valuemin="0" aria-valuemax="100" style="width: 60%">
										<span class="sr-only">60%</span>
									</div>
								</div>
							</div>
							<!-- end 4 -->
							<div class="col-xs-3 col-md-3 text-right">
								<span class="glyphicon glyphicon-star"></span>3
							</div>
							<div class="col-xs-8 col-md-9">
								<label class="form-check">
								<input class="form-check-input" type="checkbox" value="">
								<div class="progress">
									<div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="20"
										aria-valuemin="0" aria-valuemax="100" style="width: 40%">
										<span class="sr-only">40%</span>
									</div>
								</div>
							</div>
							<!-- end 3 -->
							<div class="col-xs-3 col-md-3 text-right">
								<span class="glyphicon glyphicon-star"></span>2
							</div>
							<div class="col-xs-8 col-md-9">
								<label class="form-check">
								<input class="form-check-input" type="checkbox" value="">	
								<div class="progress">
									<div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="20"
										aria-valuemin="0" aria-valuemax="100" style="width: 20%">
										<span class="sr-only">20%</span>
									</div>
								</div>
							</div>
							<!-- end 2 -->
							<div class="col-xs-3 col-md-3 text-right">
								<span class="glyphicon glyphicon-star"></span>1
							</div>
							<div class="col-xs-8 col-md-9">
								<label class="form-check">
								<input class="form-check-input" type="checkbox" value="">
								<div class="progress">
									<div class="progress-bar bg-warning progress-bar-striped"role="progressbar" aria-valuenow="80"
										aria-valuemin="0" aria-valuemax="100" style="width: 15%">
										<span class="sr-only">15%</span>
									</div>
								</div>
							</div>
							<!-- end 1 -->
						</div>
						<!-- end row -->
					</article> <!-- card-group-item.// -->




					<!-- Shop Sidebar -->
					<div class="shop_sidebar" style="margin-left:40px;">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<ul class="sidebar_categories">
								<li><a href="#">Sanitary product</a></li>
								<li><a href="#">Home Appliances</a></li>
								<li><a href="#">Sanitaryware</a></li>
								<li><a href="#">Smartphones & Tablets</a></li>
								<li><a href="#">Industrial</a></li>
								<li><a href="#">Machinery</a></li>
								<li><a href="#">Electronics</a></li>

							</ul>
						</div>
						<div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Filter By</div>
							<div class="sidebar_subtitle">Price</div>
							<div class="filter_price">
								<div id="slider-range" class="slider_range"></div>
								<p>Range: </p>
								<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle color_subtitle">Color</div>
							<ul class="colors_list">
								<li class="color"><a href="#" style="background: #b19c83;"></a></li>
								<li class="color"><a href="#" style="background: #000000;"></a></li>
								<li class="color"><a href="#" style="background: #999999;"></a></li>
								<li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
								<li class="color"><a href="#" style="background: #df3b3b;"></a></li>
								<li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
							</ul>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle">Brands</div>
							<ul class="brands_list">
								<li class="brand"><a href="#">RFL</a></li>
								<li class="brand"><a href="#">Konka</a></li>
								<li class="brand"><a href="#">Panasonic</a></li>
								<li class="brand"><a href="#">Sharp</a></li>
								<li class="brand"><a href="#">Miyako</a></li>
								<li class="brand"><a href="#">Samsung</a></li>
								<li class="brand"><a href="#">Philips</a></li>
								<li class="brand"><a href="#">HITICHI</a></li>
								<li class="brand"><a href="#">general</a></li>
								<li class="brand"><a href="#">LG</a></li>
								<li class="brand"><a href="#">GAZI</a></li>
								<li class="brand"><a href="#">regal</a></li>
								<li class="brand"><a href="#">walton</a></li>
								<li class="brand"><a href="#">goldesh</a></li>
							</ul>
						</div>
					</div>

				</div>

				<div class="col-lg-9">















					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>186</span> products found</div>
							<div class="shop_sorting">
								<span>Sort by:</span>
								<ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>






<!-- 
						<div class="product_grid">
							<div class="product_grid_border"></div> -->
<div class="row">
					
<?php
if( !empty( $_GET['typeahead'] ) ){
	getPro1_search($_GET['typeahead']);

}
else{
	getPro1();
}



?>

</div>

							

						<!-- </div>





					

						</div> -->

						<!-- Shop Page Navigation -->

						<div class="shop_page_nav d-flex flex-row">
							<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
							<ul class="page_nav d-flex flex-row">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">21</a></li>
							</ul>
							<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>


<?php

include("includes/footer.php");
?>





<!-- <script src="js/jquery-3.3.1.min.js"></script> -->
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/shop_custom.js"></script>

</body>



</html>


 




