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
  <!--<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">-->
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
  <link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/responsive.css">
  <!-- <link href="styles/accunt/backend.css" rel="stylesheet"> -->
  <style>
    .bg_title{
  background-color: rgb(255, 178, 89);
}
.bg_orange{
  background-color:rgb(250, 221, 178);
}
  </style>
  <?php

  session_start();

  include("includes/db.php");
  // include("includes/header.php");
  include("functions/functions.php");
  include("includes/main.php");

  ?>

  <div class="container">


    <div class="row bg_orange d-flex justify-content-center pt-5">
      <div class="col-md-10 pt-3">

        <div class="col-md-12">
          <!-- col-md-12 Starts -->

          <div class="box">
            <!-- box Starts -->

            <div class="box-header">
              <!-- box-header Starts -->

              <center>
                <!-- center Starts -->

                <?php

                $get_contact_us = "select * from contact_us";

                $run_conatct_us = mysqli_query($con, $get_contact_us);

                $row_conatct_us = mysqli_fetch_array($run_conatct_us);

                $contact_heading = $row_conatct_us['contact_heading'];

                $contact_desc = $row_conatct_us['contact_desc'];

                $contact_email = $row_conatct_us['contact_email'];

                ?>

                <h2> <?php echo $contact_heading; ?> </h2>

                <p class="text-muted">
                  <?php echo $contact_desc; ?>
                </p>

              </center><!-- center Ends -->

            </div><!-- box-header Ends -->

            <form action="contact.php" method="post">
              <!-- form Starts -->

              <div class="form-group">
                <!-- form-group Starts -->

                <label>Name</label>

                <input type="text" class="form-control" name="name" required>

              </div><!-- form-group Ends -->

              <div class="form-group">
                <!-- form-group Starts -->

                <label>Email</label>

                <input type="text" class="form-control" name="email" required>

              </div><!-- form-group Ends -->

              <div class="form-group">
                <!-- form-group Starts -->

                <label> Subject </label>

                <input type="text" class="form-control" name="subject" required>

              </div><!-- form-group Ends -->

              <div class="form-group">
                <!-- form-group Starts -->

                <label> Message </label>

                <textarea class="form-control" name="message"> </textarea>

              </div><!-- form-group Ends -->


              <div class="form-group">
                <!-- form-group Starts -->

                <label> Select Enquiry Type </label>


                <select name="enquiry_type" class="form-control">
                  <!-- select Starts -->

                  <option> Select Enquiry Type </option>

                  <?php

                  $get_enquiry_types = "select * from enquiry_types";

                  $run_enquiry_types = mysqli_query($con, $get_enquiry_types);

                  while ($row_enquiry_types = mysqli_fetch_array($run_enquiry_types)) {

                    $enquiry_title = $row_enquiry_types['enquiry_title'];

                    echo "<option> $enquiry_title </option>";
                  }

                  ?>

                </select><!-- select Ends -->

              </div><!-- form-group Ends -->


              <div class="text-center">
                <!-- text-center Starts -->

                <button type="submit" name="submit" class="btn btn-warning">

                  <i class="fa fa-user-md"></i> Send Message

                </button>

              </div><!-- text-center Ends -->

            </form><!-- form Ends -->

            <?php

            if (isset($_POST['submit'])) {

              // Admin receives email through this code

              $sender_name = $_POST['name'];

              $sender_email = $_POST['email'];

              $sender_subject = $_POST['subject'];

              $sender_message = $_POST['message'];

              $enquiry_type = $_POST['enquiry_type'];

              $new_message = "

<h1> This Message Has Been Sent By $sender_name </h1>

<p> <b> Sender Email :  </b> <br> $sender_email </p>

<p> <b> Sender Subject :  </b> <br> $sender_subject </p>

<p> <b> Sender Enquiry Type :  </b> <br> $enquiry_type </p>

<p> <b> Sender Message :  </b> <br> $sender_message </p>

";

              $headers = "From: $sender_email \r\n";

              $headers .= "Content-type: text/html\r\n";

              mail($contact_email, $sender_subject, $new_message, $headers);

              // Send email to sender through this code

              $email = $_POST['email'];

              $subject = "Welcome to my website";

              $msg = "I shall get you soon, thanks for sending us email";

              $from = "sad.ahmed22224@gmail.com";

              mail($email, $subject, $msg, $from);

              echo "<h2 align='center'>Your message has been sent successfully</h2>";
            }


            ?>

          </div><!-- box Ends -->

        </div><!-- col-md-12 Ends -->



      </div><!-- container Ends -->
    </div><!-- content Ends -->

  </div>
  </div>
  </div>

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