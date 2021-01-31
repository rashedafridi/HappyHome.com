<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="typeahead.min.js"></script>
<script>
	$(document).ready(function() {
		$('input.typeahead').typeahead({
			name: 'typeahead',
			remote: 'search.php?key=%QUERY',
			limit: 10
		});
	});
</script>
<style type="text/css">
	.bs-example {
		font-family: sans-serif;

		/* margin: 50px; */
	}

	.typeahead,
	.tt-query,
	.tt-hint {
		/* border: 2px solid #CCCCCC;
	border-radius: 8px;*/
		/* font-size: 24px;
	height: 30px; 
	line-height: 30px; */
		/* outline: medium none; */
		/* padding: 8px 12px; */
		width: 296px;
	}

	.typeahead {
		background-color: #FFFFFF;
	}

	.typeahead:focus {
		border: 2px solid rgb(207, 110, 0);
	}

	.tt-query {
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
	}

	.tt-hint {
		display: block;
		/* position: relative; */
		width: calc((100% - 50px) * 0.601);
		height: 100%;
		line-height: 50px;
		border: none !important;
		outline: none !important;
		padding-left: 26px;
		color: #999999;
		float: left;


	}

	.tt-dropdown-menu {

		background-color: #FFFFFF;
		border: 1px solid rgba(0, 0, 0, 0.2);
		border-radius: 8px;
		box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
		margin-top: 12px;
		padding: 8px 0;
		width: 422px;
		
	}

	.tt-suggestion {
		font-size: 24px;
		line-height: 24px;
		padding: 3px 20px;
		text-align: left;
	}

	.tt-suggestion.tt-is-under-cursor {
		background-color: #FF9900;
		color: #FFFFFF;
		
	}
</style>




</head>

<body>

	<div style="padding-bottom: 120px;">
		<!-- Header -->
		<header class="header">
			<!-- Top Bar -->
			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">



							<a href="https://www.facebook.com/rashed.afridi.1">
								<div class="top_bar_contact_item">
									<div class="top_bar_icon"><img src="Icons/Twitter-1.png" alt=""></div>
								</div>
							</a>
							<a href="https://www.facebook.com/rashed.afridi.1">
								<div class="top_bar_contact_item">
									<div class="top_bar_icon"><img src="Icons/Twitter.png" alt=""><a href="https://www.facebook.com/rashed.afridi.1"></div>
								</div>
							</a>
							<a href="https://www.facebook.com/rashed.afridi.1">
								<div class="top_bar_contact_item">
									<div class="top_bar_icon"><img src="Icons/Instagram.png" alt=""></div>
								</div>
							</a>

							<div class="top_bar_content ml-auto">
								<div class="top_bar_menu">
									<ul class="standard_dropdown top_bar_dropdown">
										<li>
											<a href="#">English<i class="fas fa-chevron-down" class="top_bar_icon"><img src="Icons/d.png" alt=""></i></a>
											<ul>
												<li><a href="#">Italian</a></li>
												<li><a href="#">Spanish</a></li>
												<li><a href="#">Japanese</a></li>
											</ul>
										</li>
										<li>
											<a href="#">$ TAKA<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li><a href="#">EUR Euro</a></li>
												<li><a href="#">GBP British Pound</a></li>
												<li><a href="#">USD </a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="top_bar_user">
									<div class="user_icon"><img src="Icons/d.png" alt=""></div>
									<div><a href="#">Help</a></div>
									<div><a href="#">Delivary</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Header Main -->

				<div class="header_main">
					<div class="container">
						<div class="row">

							<!-- Logo -->
							<div class="col-lg-2 col-sm-3 col-3 order-1">
								<a href="index.php">
									<div class="logo_container">

										<div class="top_bar_contact_item">
											<div><img src="Icons/wabsite_logo.svg" alt=""></div>
										</div>
									</div>
								</a>
							</div>

							<!-- Search -->
							<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right ">
								<div class="header_search">
									<div class="header_search_content">
										<div class="header_search_form_container">
											<form action="search1.php" method=GET class="header_search_form  d-flex">
												<!-- <input type="search" required="required" class="header_search_input" placeholder="Search for products..."> -->
												<input type="search" name="typeahead" class="order-1 typeahead tt-query header_search_input" autocomplete="off" spellcheck="false" placeholder="search">
												<div class="custom_dropdown order-2">
													<div class="custom_dropdown_list">
														<span class="custom_dropdown_placeholder clc">All Categories</span>
														<i class="fas fa-chevron-down"></i>
														<ul class="custom_list clc">

															<?php
															$get_p_cats = "select * from product_categories";

															$run_p_cats = mysqli_query($con, $get_p_cats);

															while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

																$p_cat_id = $row_p_cats['p_cat_id'];

																$p_cat_title = $row_p_cats['p_cat_title'];
																echo "<li><a class='clc' href='#'>$p_cat_title</a></li>";

																// echo "<option value='$p_cat_id' >$p_cat_title</option>";
															}
															?>







														</ul>
													</div>
												</div>
												<button type="submit" name="search" class="header_search_button trans_300" value="Search_submit"><img src="icons/search.png" alt="">

												</button>
											</form>
										</div>
									</div>
								</div>
							</div>

							<!-- Wishlist -->
							<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
								<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
									<div class="wishlist d-flex flex-row align-items-center justify-content-end">
										<div class="wishlist_icon"><a href="my_account.php?my_wishlist"><img src="Icons/wislisr.svg" alt=""></div>
										<div class="wishlist_content">
											<div class="wishlist_text"><a href="my_account.php?my_wishlist">Wishlist</a></div>
											<div class="wishlist_count"></div>
										</div>
									</div>


									<!-- Cart -->
									<div class="cart">
										<a href="cart.php">
											<div class="cart_container d-flex flex-row align-items-center justify-content-end">
												<div class="cart_icon">
													<img src="Icons/card.svg" alt="">
													<div class="cart_count"><span> <?php items(); ?></span></div>
												</div>
												<div class="cart_content">
													<div class="cart_text"><a href="cart.php">Cart</a></div>

												</div>
											</div>
										</a>
									</div>
									<!--  user -->
									<div class="wishlist d-flex flex-row align-items-center justify-content-end">
										<div class="wishlist_icon"><img src="Icons/user.svg" alt=""></div>
										<div class="wishlist_content">
											<div class="wishlist_text">
												<?php
													if (!isset($_SESSION['customer_email'])) {
														echo '<a href="checkout.php" Sign In/join</a>';
														} 
													// 	else {
													// 		echo '<a href="logout.php" class="login__link">Log out</a>';
													// }
												?>
												<?php
												if (!isset($_SESSION['customer_email'])) {
													echo "Sign In/Join";
												} else {
													echo "Welcome : " . $_SESSION['customer_name'] . "";
													// echo "Welcome : " . $_SESSION['customer_email'] . "";
												}
												?>
												</a></div>
											<!-- <div class="wishlist_count">My Account ^</div> -->
											<div class="dropdown show">
												<a class="text-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Account
												</a>

												<div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
													<a class="dropdown-item text-warning" href="my_account.php?my_orders">My Accunt</a>
													<a class="dropdown-item text-warning" href="my_account.php?my_wishlist">Wishlist</a>
													<a class="dropdown-item text-warning" href="cart.php">card</a>
													<?php
													if (isset($_SESSION['customer_email'])) {
														echo '<a href="logout.php" class="dropdown-item text-warning">Log out</a>';
														} 
													?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Main Navigation -->

				<nav class="main_nav">
					<div class="container">
						<div class="row">
							<div class="col">

								<div class="main_nav_content d-flex flex-row">

									<!-- Categories Menu -->

									<div class="cat_menu_container">
										<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
											<div class="cat_burger"><span></span><span></span><span></span></div>
											<div class="cat_menu_text">categories</div>
										</div>

										<ul class="cat_menu">
											<li><a href="product_view.php">Sanitary product <i class="fas fa-chevron-right ml-auto"></i></a></li>

											<li class="hassubs">
												<a href="product_view.php">Home appliance<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li class="hassubs">
														<a href="#">Large Appliances<i class="fas fa-chevron-right"></i></a>
														<ul>
															<li><a href="#">Television<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Refrigerator<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Washing Machine<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Microwave Oven<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Air Conditioner<i class="fas fa-chevron-right"></i></a></li>
														</ul>
													</li>
													<li class="hassubs">
														<a href="#">Small Appliances<i class="fas fa-chevron-right"></i></a>
														<ul>
															<li><a href="#">Water Heaters<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Room Heaters<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Mixer Grinders<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Cookware<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Chimneys<i class="fas fa-chevron-right"></i></a></li>
														</ul>
													</li>
													<!-- <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li> -->
												</ul>
											</li>
											<li class="hassubs">
												<a href="product_view.php">Sanitaryware<i class="fas fa-chevron-right"></i></a>
												<ul>

													<li><a href="#">EWCs<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Wash basins<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Bathtub<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Sink<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Cisterns<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Seat Covers<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Water Saving Products<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Kids range<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Bathroom accessories<i class="fas fa-chevron-right"></i></a></li>

												</ul>
											</li>
											<li class="hassubs">
												<a href="product_view.php">Industrial<i class="fas fa-chevron-right"></i></a>
												<ul>

													<li><a href="#">Pump<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Motor<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Bathtub<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Sink<i class="fas fa-chevron-right"></i></a></li>
													<li class="hassubs">
														<a href="#">Manufacturing Compan<i class="fas fa-chevron-right"></i></a>
														<ul>
															<li><a href="#">Industrial Papers<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">uPvc<i class="fas fa-chevron-right"></i></a></li>
														</ul>
													</li>
													<li class="hassubs">
														<a href="#">Machinery<i class="fas fa-chevron-right"></i></a>
														<ul>
															<li><a href="#">Sewing Machines<i class="fas fa-chevron-right"></i></a></li>
															<li><a href="#">Cutting Machines<i class="fas fa-chevron-right"></i></a></li>
														</ul>
													</li>


												</ul>
											</li>


											<li class="hassubs">
												<a href="product_view.php">Industrial<i class="fas fa-chevron-right"></i></a>
												<ul>

													<li><a href="#">Electronics<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Automotive<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Building Materials<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Electrical & Lighting<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Farm & Ranch Products<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Heating, Cooling & Venting<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Hand Tools<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Car Electronics<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Housewares<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>


												</ul>
											</li>

										</ul>
									</div>

									<!-- Main Nav Menu -->

									<div class="main_nav_menu ml-auto">
										<ul class="standard_dropdown main_nav_dropdown">
											<li><a href="product_view.php">Products<i class="fas fa-chevron-down"></i></a></li>
											<li class="hassubs">
												<a href="product_view.php">Super Deals<i class="fas fa-chevron-down"></i></a>
												<ul>
													<!-- <li>
												<a href="#">Today's Deals<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li> -->
													<li><a href="product_view.php">Today's Deals<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="product_view.php">Bkash cashback offer<i class="fas fa-chevron-down"></i></a></li>
													<!-- <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li> -->
												</ul>
											</li>
											<li class="hassubs">
												<a href="product_view.php">Featured Brands<i class="fas fa-chevron-down"></i></a>
												<ul>
													<!-- <li>
												<a href="#">RFL<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">WALTON<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li> -->
													<li><a href="#">RFL<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">WALTON<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="brand_page.html">Click to see more<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<!-- <li class="hassubs">
										<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li> -->
											<!-- <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li> -->
											<li><a href="contact.php">Contact<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</div>

									<!-- Menu Trigger -->

									<div class="menu_trigger_container ml-auto">
										<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
											<div class="menu_burger">
												<div class="menu_trigger_text">menu</div>
												<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</nav>

				<!-- Menu -->

				<div class="page_menu">
					<div class="container">
						<div class="row">
							<div class="col">

								<div class="page_menu_content">

									<div class="page_menu_search">
										<form action="#">
											<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
										</form>
									</div>
									<ul class="page_menu_nav">
										<li class="page_menu_item has-children">
											<a href="#">Language<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Bangla<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">BANGLA<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<li class="page_menu_item has-children">
											<a href="#">Currency<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>

											</ul>
										</li>
										<li class="page_menu_item">
											<a href="#">Home<i class="fa fa-angle-down"></i></a>
										</li>
										<li class="page_menu_item has-children">
											<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">Today's Deals<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Bkash cashback offer<i class="fa fa-angle-down"></i></a></li>

											</ul>
										</li>
										<li class="page_menu_item has-children">
											<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">RFL<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">WALTON<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Click for more<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<!-- <li class="page_menu_item has-children">
									<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li> -->
										<li class="page_menu_item"><a href="contact.php">contact<i class="fa fa-angle-down"></i></a></li>
									</ul>

									<!-- <div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>

		</header>
	</div>




	<div style=" margin-bottom: 1px"></div>

	<!-- Banner -->

	<!-- <div class="banner">
		<div class="banner_background"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="Icons/sa.jpg" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text"></h1>
						<div class="banner_price"><span></span></div>
						<div class="banner_product_name"></div>
						<div class="button banner_button"><a href="#"></a></div>
					</div>
				</div>
			</div>
		</div>
	</div> -->