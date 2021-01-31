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
  <link href="styles/accunt/bootstrap.min.css" rel="stylesheet">
  <link href="styles/accunt/backend.css" rel="stylesheet">
  <!-- <link href="styles/style.css" rel="stylesheet"> -->
  <?php

  session_start();

  if (!isset($_SESSION['customer_email'])) {

    echo "<script>window.open('checkout.php','_self')</script>";
  } else {

   

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

    <div id="content">
      <!-- content Starts -->
      <div class="container">
        <!-- container Starts -->



        <div class="col-md-12">
          <!-- col-md-12 Starts -->

          <?php

          $c_email = $_SESSION['customer_email'];

          $get_customer = "select * from customers where customer_email='$c_email'";

          $run_customer = mysqli_query($con, $get_customer);

          $row_customer = mysqli_fetch_array($run_customer);

          $customer_confirm_code = $row_customer['customer_confirm_code'];

          $c_name = $row_customer['customer_name'];
          ?>



        </div><!-- col-md-12 Ends -->

        <div class="col-md-3">
          <!-- col-md-3 Starts -->

         <?php  include("includes/sidebar.php"); ?>

        </div><!-- col-md-3 Ends -->

        <div class="col-md-9">
          <!--- col-md-9 Starts -->

          <div class="box">
            <!-- box Starts -->

           
<?php 


            if (isset($_GET['my_orders'])) {

              include("my_orders.php");
            }

            if (isset($_GET['pay_offline'])) {

              include("pay_offline.php");
            }

            if (isset($_GET['edit_account'])) {

              include("edit_account.php");
            }

            if (isset($_GET['change_pass'])) {

              include("change_pass.php");
            }

            if (isset($_GET['delete_account'])) {

              include("delete_account.php");
            }

            if (isset($_GET['my_wishlist'])) {

              include("my_wishlist.php");
            }

            if (isset($_GET['delete_wishlist'])) {

              include("delete_wishlist.php");
            }

            ?>

          </div><!-- box Ends -->


        </div>
        <!--- col-md-9 Ends -->

      </div><!-- container Ends -->
    </div><!-- content Ends -->



    <?php

include("includes/footer.php");
?>





    

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
<?php } ?>