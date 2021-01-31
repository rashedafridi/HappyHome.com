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
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <!-- <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css"> -->
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <!-- <link href="styles/accunt/backend.css" rel="stylesheet"> -->
    <link href="styles/accunt/style.css" rel="stylesheet">

    <?php

    session_start();

    include("includes/db.php");
    // include("includes/header.php");
    include("functions/functions.php");
    include("includes/main.php");

    ?>
	<!-- Banner -->

	<div class="banner">
		<div class="banner_background" ></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<!-- <div class="banner_product_image"><img src="Icons/sa.jpg" alt=""></div> -->
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						
                        <!-- <div class="banner_price"><span></span></div> -->
                        <h1 class="text-white">Shopping Cart</h1>
						<div class="banner_product_name"></div>
						<div ><a href="#"></a></div>
					</div>
				</div>
			</div>
		</div>
    </div>
<br>
    <div id="content">
        <!-- content Starts -->
        <div class="container">
            <!-- container Starts -->

            <div class="row">

                <div class="col-md-9" id="cart">
                    <!-- col-md-9 Starts -->

                    <div class="box">
                        <!-- box Starts -->

                        <form action="cart.php" method="post" enctype="multipart-form-data">
                            <!-- form Starts -->

                            <h2> Shopping Cart </h2>

                            <?php

                            $ip_add = getRealUserIp();

                            $select_cart = "select * from cart where ip_add='$ip_add'";

                            $run_cart = mysqli_query($con, $select_cart);

                            $count = mysqli_num_rows($run_cart);

                            ?>

                            <p class="text-muted"> You currently have <?php echo $count; ?> item(s) in your cart. </p>

                            <div class="table-responsive">
                                <!-- table-responsive Starts -->

                                <table class="table">
                                    <!-- table Starts -->

                                    <thead>
                                        <!-- thead Starts -->

                                        <tr>

                                            <th colspan="2">Product</th>

                                            <th>product quantity </th>

                                            <th>Unit Price</th>

                                            <th>Installation service</th>

                                            <th colspan="1">Delete</th>

                                            <th colspan="2"> Installation fee </th>


                                        </tr>

                                    </thead><!-- thead Ends -->

                                    <tbody>
                                        <!-- tbody Starts -->

                                        <?php

                                        $total = 0;
                                        $order =0;
                                       $Shipping =0;

                                        while ($row_cart = mysqli_fetch_array($run_cart)) {

                                            $pro_id = $row_cart['p_id'];

                                            $pro_size = $row_cart['size'];

                                            $pro_qty = $row_cart['qty'];

                                            $only_price = $row_cart['p_price'];

                                            $get_products = "select * from products where product_id='$pro_id'";

                                            $run_products = mysqli_query($con, $get_products);

                                            while ($row_products = mysqli_fetch_array($run_products)) {

                                                $product_title = $row_products['product_title'];

                                                $product_img1 = $row_products['product_img1'];

                                                $sub_total =  $row_products['product_psp_price'];

                                                $_SESSION['pro_qty'] = $pro_qty;

                                                $total += $only_price + $sub_total;
                                                $order += $only_price;
                                                $Shipping +=  $sub_total;

                                        ?>

                                                <tr>
                                                    <!-- tr Starts -->

                                                    <td>

                                                        <img src="admin_area/product_images/<?php echo $product_img1; ?>">

                                                    </td>

                                                    <td>

                                                        <a href="#"> <?php echo $product_title; ?> </a>

                                                    </td>

                                                    <td>
                                                        <input type="text" name="quantity" value="<?php echo $_SESSION['pro_qty']; ?>" data-product_id="<?php echo $pro_id; ?>" class="quantity form-control">
                                                    </td>

                                                    <td>

                                                        $<?php echo $only_price; ?>.00

                                                    </td>

                                                    <td>

                                                        <?php echo $pro_size; ?>

                                                    </td>

                                                    <td>
                                                        <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                                    </td>

                                                    <td>

                                                        $<?php echo $sub_total; ?>.00

                                                    </td>

                                                </tr><!-- tr Ends -->

                                        <?php }
                                        } ?>

                                    </tbody><!-- tbody Ends -->

                                    <tfoot>
                                        <!-- tfoot Starts -->

                                        <tr>

                                            <th colspan="5"> Total </th>

                                            <th colspan="2"> $<?php echo $total; ?>.00 </th>

                                        </tr>

                                    </tfoot><!-- tfoot Ends -->

                                </table><!-- table Ends -->

                                <div class="form-inline pull-right float-left">
                                    <!-- form-inline pull-right Starts -->

                                    <div class="form-group">
                                        <!-- form-group Starts -->

                                        <label>Coupon Code : </label>

                                        <input type="text" name="code" class="form-control">

                                    </div><!-- form-group Ends -->

                                    <input class="btn  btn-warning" type="submit" name="apply_coupon" value="Apply Coupon Code">

                                </div><!-- form-inline pull-right Ends -->
                                <button class="btn  btn-outline-warning float-right" type="submit" name="update" value="Update Cart">

                                    <i class="fa fa-refresh"></i> Update Cart

                                </button>

                            </div><!-- table-responsive Ends -->


                            <div class="box-footer">
                                <!-- box-footer Starts -->

                                <div class="pull-left">
                                    <!-- pull-left Starts -->

                                    <a href="index.php" class="btn  btn-warning float-left">

                                        <i class="fa fa-chevron-left"></i> Continue Shopping

                                    </a>

                                </div><!-- pull-left Ends -->

                                <div class="pull-right">
                                    <!-- pull-right Starts -->



                                    <a href="checkout.php" class="btn btn-warning float-right">

                                        Proceed to checkout <i class="fa fa-chevron-right"></i>

                                    </a>

                                </div><!-- pull-right Ends -->

                            </div><!-- box-footer Ends -->

                        </form><!-- form Ends -->


                    </div><!-- box Ends -->

                    <?php

                    if (isset($_POST['apply_coupon'])) {

                        $code = $_POST['code'];

                        if ($code == "") {
                        } else {

                            $get_coupons = "select * from coupons where coupon_code='$code'";

                            $run_coupons = mysqli_query($con, $get_coupons);

                            $check_coupons = mysqli_num_rows($run_coupons);

                            if ($check_coupons == 1) {

                                $row_coupons = mysqli_fetch_array($run_coupons);

                                $coupon_pro = $row_coupons['product_id'];

                                $coupon_price = $row_coupons['coupon_price'];

                                $coupon_limit = $row_coupons['coupon_limit'];

                                $coupon_used = $row_coupons['coupon_used'];


                                if ($coupon_limit == $coupon_used) {

                                    echo "<script>alert('Your Coupon Code Has Been Expired')</script>";
                                } else {

                                    $get_cart = "select * from cart where p_id='$coupon_pro' AND ip_add='$ip_add'";

                                    $run_cart = mysqli_query($con, $get_cart);

                                    $check_cart = mysqli_num_rows($run_cart);


                                    if ($check_cart == 1) {

                                        $add_used = "update coupons set coupon_used=coupon_used+1 where coupon_code='$code'";

                                        $run_used = mysqli_query($con, $add_used);

                                        $update_cart = "update cart set p_price='$coupon_price' where p_id='$coupon_pro' AND ip_add='$ip_add'";

                                        $run_update = mysqli_query($con, $update_cart);

                                        echo "<script>alert('Your Coupon Code Has Been Applied')</script>";

                                        echo "<script>window.open('cart.php','_self')</script>";
                                    } else {

                                        echo "<script>alert('Product Does Not Exist In Cart')</script>";
                                    }
                                }
                            } else {

                                echo "<script> alert('Your Coupon Code Is Not Valid') </script>";
                            }
                        }
                    }


                    ?>

                    <?php

                    function update_cart()
                    {

                        global $con;

                        if (isset($_POST['update'])) {

                            foreach ($_POST['remove'] as $remove_id) {


                                $delete_product = "delete from cart where p_id='$remove_id'";

                                $run_delete = mysqli_query($con, $delete_product);

                                if ($run_delete) {
                                    echo "<script>window.open('cart.php','_self')</script>";
                                }
                            }
                        }
                    }

                    echo @$up_cart = update_cart();



                    ?>







                </div><!-- col-md-9 Ends -->

                <div class="col-md-3">
                    <!-- col-md-3 Starts -->

                    <div class="box" id="order-summary">
                        <!-- box Starts -->

                        <div class="box-header">
                            <!-- box-header Starts -->

                            <h3>Order Summary</h3>

                        </div><!-- box-header Ends -->

                        <p class="text-muted">
                            Shipping and additional costs are calculated based on the values you have entered.
                        </p>

                        <div class="table-responsive">
                            <!-- table-responsive Starts -->

                            <table class="table">
                                <!-- table Starts -->

                                <tbody>
                                    <!-- tbody Starts -->

                                    <tr>

                                        <td> Order Subtotal </td>

                                        <th> $<?php echo $order; ?>.00 </th>

                                    </tr>

                                    <tr>

                                        <td> Shipping and handling </td>

                                        <th>$<?php echo $Shipping ;?>.00 </th>

                                    </tr>

                                    <tr>

                                        <td>Tax</td>

                                        <th>$0.00</th>

                                    </tr>

                                    <tr class="total">

                                        <td>Total</td>

                                        <th>$<?php echo $total; ?>.00</th>

                                    </tr>
                                    <tr>
                                        <th><a href="checkout.php" class="btn btn-warning float-right">

                                           checkout <i class="fa fa-chevron-right"></i>

                                        </a></th>
                                    </tr>


                                </tbody><!-- tbody Ends -->

                            </table><!-- table Ends -->

                        </div><!-- table-responsive Ends -->

                    </div><!-- box Ends -->

                </div><!-- col-md-3 Ends -->
            </div>

        </div><!-- container Ends -->
    </div><!-- content Ends -->



    <?php

    include("includes/footer.php");

    ?>

    <!-- <script src="js/jquery.min.js"> </script>

    <script src="js/bootstrap.min.js"></script> -->

    <script>
        $(document).ready(function(data) {

            $(document).on('keyup', '.quantity', function() {

                var id = $(this).data("product_id");

                var quantity = $(this).val();

                if (quantity != '') {

                    $.ajax({

                        url: "change.php",

                        method: "POST",

                        data: {
                            id: id,
                            quantity: quantity
                        },

                        success: function(data) {

                            $("body").load('cart_body.php');

                        }




                    });


                }




            });




        });
    </script>






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