<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles/registration.css"> -->
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <title>Machineries</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
    <link href="../plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="../plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="../styles/responsive.css"> -->

    <link rel="stylesheet" type="text/css" href="customer/styles/registration.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->


</head>




<div style=" margin-bottom: 1px"></div>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <!-- <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" /> -->
            <h3>Welcome</h3>
            <p>To insure your safe and secure online shopping <strong>happyhome.com</strong> are always there</p>
            <!-- <input type="submit" name="" value="Login" /> -->
            <br />
        </div>
        
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">LogIn</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show  " id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">New Account </h3>
                    <form action="checkout.php" method="post">
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="c_name" class="form-control" placeholder="Name *" value="" />
                            </div>

                            <div class="form-group">
                                <input type="password" id="pass" name="c_pass" required class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" id="con_pass" required class="form-control" placeholder="Confirm Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="c_address" required class="form-control" placeholder="address *" value="" />
                            </div>
                            <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="male" checked>
                                        <span> Male </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="female">
                                        <span>Female </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="c_email" class="form-control" placeholder="Your Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text"  name="c_contact"  minlength="0" maxlength="12" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="c_country" required  placeholder="country *">
                            </div>

                            <div class="form-group">
                                <input type="text" name="c_city" required class="form-control" placeholder="city*" />
                            </div>
                            <div class="form-group">
                                <!-- form-group Starts -->

                                <label> Customer Image </label>

                                <input type="file" class="form-control" name="c_image" required>

                            </div><!-- form-group Ends -->


                            <input type="submit" name="register" class="btnRegister" value="Register" />
                        </div>
                    </div>
                </form>
                </div>
                
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Login</h3>
                    <form action="checkout.php" method="post">
                    <div class="row register-form">
                        <div class="col-md-12">

                            <div class="form-group rounded">
                                <input type="email" name="c_email" required class="form-control rounded" placeholder="Email *" />
                            </div>

                            <div class="form-group rounded">
                                <input type="password" name="c_pass" required class="form-control rounded" placeholder="Password *" />
                            </div>
                            <!-- <input class="btnRegister" name="login" value="Login" /> -->
                            <button name="login" value="Login" class="btnRegister">

                                <i class="fa fa-sign-in"></i> Log in


                            </button>


                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

</div>


<?php

if (isset($_POST['register'])) {

    // $secret = "6Lc-WxYUAAAAAN5j2OdDsryWwGfREg5eeuZFpKMv";

    // $response = $_POST['g-recaptcha-response'];

    // $remoteip = $_SERVER['REMOTE_ADDR'];

    // $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");

    // $result = json_decode($url, TRUE);

    if (isset($_POST['register'])) {

        $c_name = $_POST['c_name'];

        $c_email = $_POST['c_email'];

        $c_pass = $_POST['c_pass'];

        $c_country = $_POST['c_country'];

        $c_city = $_POST['c_city'];

        $c_contact = $_POST['c_contact'];

        $c_address = $_POST['c_address'];

        $c_image = $_FILES['c_image']['name'];

        $c_image_tmp = $_FILES['c_image']['tmp_name'];

        $c_ip = getRealUserIp();

        move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

        $get_email = "select * from customers where customer_email='$c_email'";

        $run_email = mysqli_query($con, $get_email);

        $check_email = mysqli_num_rows($run_email);

        if ($check_email == 1) {

            echo "<script>alert('This email is already registered, try another one')</script>";

            exit();
        }






        $headers = "From: $from \r\n";

        $headers .= "Content-type: text/html\r\n";

        mail($c_email, $subject, $message, $headers);

        $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip,customer_confirm_code) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip','$customer_confirm_code')";


        $run_customer = mysqli_query($con, $insert_customer);

        $sel_cart = "select * from cart where ip_add='$c_ip'";

        $run_cart = mysqli_query($con, $sel_cart);

        $check_cart = mysqli_num_rows($run_cart);

        if ($check_cart > 0) {

            $_SESSION['customer_email'] = $c_email;
            $_SESSION['customer_name']=$c_name;

            echo "<script>alert('You have been Registered Successfully')</script>";

            echo "<script>window.open('checkout.php','_self')</script>";
        } else {

            $_SESSION['customer_email'] = $c_email;
            $_SESSION['customer_name']=$c_name;

            echo "<script>alert('You have been Registered Successfully')</script>";

            echo "<script>window.open('index.php','_self')</script>";
        }
    } else {

        echo "<script>alert('Please Select Captcha, Try Again')</script>";
    }
}

?>







<?php


if (isset($_POST['login'])) {

    $customer_email = $_POST['c_email'];

    $customer_pass = $_POST['c_pass'];

    $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
    
    $run_customer = mysqli_query($con, $select_customer);
    $customer_name="";
    while($row_products=mysqli_fetch_array($run_customer)){
        $customer_name = $row_products['customer_name'];
    }
    // $customer_name=$run_customer['customer_name'];
    $get_ip = getRealUserIp();

    $check_customer = mysqli_num_rows($run_customer);
    

    $select_cart = "select * from cart where ip_add='$get_ip'";

    $run_cart = mysqli_query($con, $select_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if ($check_customer == 0) {

        echo "<script>alert('password or email is wrong')</script>";

        exit();
    }

    if ($check_customer == 1 and $check_cart == 0) {

        $_SESSION['customer_email'] = $customer_email;
        $_SESSION['customer_name']=$customer_name;

        // echo "<script>alert('You are Logged In')</script>";

        echo "<script>window.open('my_account.php?my_orders','_self')</script>";
    } else {

        $_SESSION['customer_email'] = $customer_email;
        $_SESSION['customer_name']=$customer_name;

        // echo "<script>alert('You are Logged In')</script>";

        echo "<script>window.open('checkout.php','_self')</script>";
    }
}

?>