<!DOCTYPE html>
<html lang="en">

<head>
    <title>happyHome.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
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
    <link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <!-- <link rel="stylesheet" type="text/css" href="styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="styles/shop_responsive.css"> -->


    <link rel="stylesheet" type="text/css" href="styles/product_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/product_responsive.css">


    <link rel="stylesheet" type="text/css" href="styles/gift-product-long.css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->

    <link href="product_detaile_style/design/product_detaile.css" rel="stylesheet">


    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    <?php

    session_start();

    include("includes/db.php");
    // include("includes/header.php");
    include("functions/functions.php");
    include("includes/main.php");

    ?>


    <?php
    if (isset($_GET['pro_id'])) {

        $product_id = $_GET['pro_id'];

        $get_product = "select * from products where product_id='$product_id'";

        $run_product = mysqli_query($con, $get_product);

        $check_product = mysqli_num_rows($run_product);

        if ($check_product == 0) {

            echo "<script> window.open('index.php','_self') </script>";
        } else {



            $row_product = mysqli_fetch_array($run_product);

            $p_cat_id = $row_product['p_cat_id'];

            $pro_id = $row_product['product_id'];

            $pro_title = $row_product['product_title'];

            $pro_price = $row_product['product_price'];

            $pro_desc = $row_product['product_desc'];

            $pro_img1 = $row_product['product_img1'];

            $pro_img2 = $row_product['product_img2'];

            $pro_img3 = $row_product['product_img3'];

            $pro_label = $row_product['product_label'];

            $pro_psp_price = $row_product['product_psp_price'];

            $pro_features = $row_product['product_features'];

            $pro_video = $row_product['product_video'];

            $status = $row_product['status'];

            $pro_url = $row_product['product_url'];
        }
    }
    ?>
    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
        <div class="home_overlay"></div>
        <div class="home_content d-flex flex-column align-items-center justify-content-center">
            <h2 class="home_title"> <?php echo $pro_title; ?></h2>
        </div>
    </div>


    <!-- Single Product -->

    <div class="single_product">
        <div class="container">
            <div class="row">

                <!-- Images -->
                <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        <li data-image="admin_area/product_images/<?php echo $pro_img1; ?>"><img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt=""></li>
                        <li data-image="admin_area/product_images/<?php echo $pro_img2; ?>"><img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt=""></li>
                        <li data-image="admin_area/product_images/<?php echo $pro_img3; ?>"><img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt=""></li>
                    </ul>
                </div>

                <!-- Selected Image -->
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="image_selected"><img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt=""></div>
                </div>

                <!-- Description -->
                <div class="col-lg-5 order-3">
                    <div class="product_description">
                        <div class="product_category">Industrial</div>
                        <div class="product_name"><?php echo $pro_title; ?></div>
                        <div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
                        <div class="product_text">
                            <p><?php echo  $pro_desc; ?></p>
                        </div>
                        <div class="order_info d-flex flex-row">
                            <form action="" method="post">
                                <div class="clearfix" style="z-index: 1000;">

                                    <!-- Product Quantity -->
                                    <div class="product_quantity clearfix">
                                        <span>Quantity: </span>
                                        <input id="quantity_input" type="text" name="product_size" pattern="[0-9]*" value="1">
                                        <div class="quantity_buttons">
                                            <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                                            <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                                        </div>
                                    </div>

                                    <!-- Product Color -->
                                    <ul class="product_color">
                                        <li>
                                            <span>Color: </span>
                                            <div class="color_mark_container">
                                                <div id="selected_color" class="color_mark"></div>
                                            </div>
                                            <div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

                                            <ul class="color_list">
                                                <li>
                                                    <div class="color_mark" style="background: #999999;"></div>
                                                </li>
                                                <li>
                                                    <div class="color_mark" style="background: #b19c83;"></div>
                                                </li>
                                                <li>
                                                    <div class="color_mark" style="background: #000000;"></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="installation_service" value="yes" class="form-check-input" id="installation_service">
                                    <label class="form-check-label" for="exampleCheck1" style="color: #ffb35c; ">Include installation service</label>
                                </div>
                                <div class="product_price">$<?php echo  $pro_price; ?></div>
                                <br>
                                <div>
                                    <button type="submit" name="add_cart" class="button cart_button">Add to Cart</button>
                                    <button class="button cart_button" type="submit" name="add_wishlist">Add to wishlist</button>
                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                </div>




                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>







    <!-- <div class="container">
        <h2 class="text-center">Bootstrap 4 User Rating Form / Comment Form</h2>
        
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                        <p class="text-secondary text-center">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-10">
                        <p>
                            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
    
                       </p>
                       <div class="clearfix"></div>
                        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>
                            <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                       </p>
                    </div>
                </div>
                    <div class="card card-inner">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                                    <p class="text-secondary text-center">15 Minutes Ago</p>
                                </div>
                                <div class="col-md-10">
                                    <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>
                                    <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>
                                        <a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>
                                        <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
	</div> -->



    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 padding-right">

                    <div class="category-tab shop-details-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#details" data-toggle="tab">Product Features</a></li>
                                <li><a href="#companyprofile" data-toggle="tab">More information</a></li>
                                <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="details">
                                <div class="col-sm-3">
                                    <p> <?php echo  $pro_features; ?> </p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="companyprofile">
                                <div class="col-sm-3">
                                    <p><?php echo  $pro_desc; ?></p>
                                </div>
                            </div>
                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>User name</a></li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>HH:MM:SS</a></li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i>DD:MM:YYYY</a></li>
                                    </ul>
                                    <p>This is the review for the product <br>Line 1................... <br>Line 2................... <br>Line 3................... </p>
                                    <p><b>Write Your Review</b></p>

                                    <!-- <form >
                                        <span>
                                            <input type="text" placeholder="Your Name" />
                                            <input type="email" placeholder="Email Address" />
                                        </span>
                                        <textarea name=""></textarea>
                                        <button type="button btn btn-warning" class="btn btn-default pull-right">
                                            Submit
                                        </button>
                                    </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php

    include("includes/footer.php");

    ?>
    <?php
    if (isset($_POST['add_cart'])) {
       
        $ip_add = getRealUserIp();

        $p_id = $pro_id;
        if ($_POST['installation_service'] == 'yes') {
            $product_size = 'yes';
        } else {
            $product_size = 'no';
        }
        $product_qty = $_POST['product_size'];




        $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";

        $run_check = mysqli_query($con, $check_product);

        if (mysqli_num_rows($run_check) > 0) {

            echo "<script>alert('This Product is already added in cart')</script>";

            // echo "<script>window.open('$pro_url','_self')</script>";
        } else {

            $get_price = "select * from products where product_id='$p_id'";

            $run_price = mysqli_query($con, $get_price);

            $row_price = mysqli_fetch_array($run_price);

            $pro_price = $row_price['product_price'];

            $pro_psp_price = $row_price['product_psp_price'];

            $pro_label = $row_price['product_label'];

            if ($pro_label == "Sale" or $pro_label == "Gift") {

                $product_price = $pro_psp_price;
            } else {

                $product_price = $pro_price;
            }

            $query = "insert into cart (p_id,ip_add,qty,p_price,size) values ('$p_id','$ip_add','$product_qty','$product_price','$product_size')";

            $run_query = mysqli_query($db, $query);

            // echo "<script>window.open('$pro_url','_self')</script>";
            echo "<script>alert('product addet')</script>";
        }
    }


    ?>

    <?php

    if (isset($_POST['add_wishlist'])) {

        if (!isset($_SESSION['customer_email'])) {

            echo "<script>alert('You Must Login To Add Product In Wishlist')</script>";

            echo "<script>window.open('checkout.php','_self')</script>";
        } else {

            $customer_session = $_SESSION['customer_email'];

            $get_customer = "select * from customers where customer_email='$customer_session'";

            $run_customer = mysqli_query($con, $get_customer);

            $row_customer = mysqli_fetch_array($run_customer);

            $customer_id = $row_customer['customer_id'];

            $select_wishlist = "select * from wishlist where customer_id='$customer_id' AND product_id='$pro_id'";

            $run_wishlist = mysqli_query($con, $select_wishlist);

            $check_wishlist = mysqli_num_rows($run_wishlist);

            if ($check_wishlist == 1) {

                echo "<script>alert('This Product Has Been already Added In Wishlist')</script>";

                // echo "<script>window.open('$pro_url','_self')</script>";
            } else {

                $insert_wishlist = "insert into wishlist (customer_id,product_id) values ('$customer_id','$pro_id')";

                $run_wishlist = mysqli_query($con, $insert_wishlist);

                if ($run_wishlist) {

                    echo "<script> alert('Product Has Inserted Into Wishlist') </script>";

                    // echo "<script>window.open('$pro_url','_self')</script>";
                }
            }
        }
    }

    ?>
    <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
    <!-- <script src="styles/bootstrap4/popper.js"></script>
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
    <script src="js/shop_custom.js"></script> -->



    <script src="js/product_custom.js"></script>

    <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <!-- <script src="plugins/greensock/TweenMax.min.js"></script> -->
    <!-- <script src="plugins/greensock/TimelineMax.min.js"></script> -->
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <!-- <script src="plugins/greensock/ScrollToPlugin.min.js"></script> -->
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/slick-1.8.0/slick.js"></script>
    <!-- <script src="plugins/easing/easing.js"></script> -->
    <script src="js/custom.js"></script>
    </body>



</html>