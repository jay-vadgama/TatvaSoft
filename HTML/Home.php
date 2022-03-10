<?php
  session_start();
  if(isset($_SESSION['FirstName'])){
    header("Location: Customer-Service-History.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/S.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="JS/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Helperland | Welcome to homepage.</title>
    <link rel = "icon" href = "Images/logo1.png" type = "image/x-icon">
</head>
<body style="scroll-behavior: smooth !important;">
  <div class="img-fluid">

  <?php include 'include/home_navbar.php' ?>

<!-- Login-Modal Starts -->
<section class="Login-Modal">

  <!-- The Modal -->
  <div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content" >

        <!-- Modal body -->
        <div class="modal-body" >
          <h3 class="title">Login to your account</h3>
          <button type="button" class="btn close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
          <div class="row justify-content-center">
            <div class="col-10">
              <form action="loginCheck.php" method="post">

                <div class="form-group">
                  <span class="input-icon"><i class="fa fa-user"></i></span>
                  <input type="email" class="form-control" value="" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <span class="input-icon"><i class="fas fa-key"></i></span>
                  <input type="password" class="form-control" value="" name="pass" placeholder="Password">
                </div>
                <div class="after-form">
                  <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">Remember me</label>
                  </div>
                  <div class="forgot">
                    <a href="" data-toggle="modal" data-target="#ForgotModal" data-dismiss="modal" class="forgot-pass"><p>Forgot Password?</p></a>
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                  <button class="btn btn-login" name="login">Login</button>
                </div>
                <div class="after-btn">
                  <p>Don't have an account?<a href="Customer-Registration.php"> Create an account</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- Login-Modal Ends -->


<!-- Forgot-Modal Starts -->
<section class="Forgot-Modal">

  <!-- The Modal -->
    <div class="modal fade" id="ForgotModal" >
      <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">

          <!-- Modal body -->
          <div class="modal-body">
            <h3 class="title">Forgot password</h3>
            <button type="button" class="btn close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
            <div class="row justify-content-center">
              <div class="col-10">
                <form action="" method="post">

                  <div class="form-group">
                    <span class="input-icon"><i class="fa fa-user"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                  </div>

                  <div class="d-flex justify-content-center">
                    <button class="btn btn-send" name="send">Send</button>
                  </div>
                  <div class="after-btn">
                    <a href=""><p>Login Now!</p></a>
                  </div>

                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</section>
<!-- Forgot-Modal Ends -->

        <section class="part1">
          <!-- left-Side Text: Starts-->
          <div class="left-text">
            <h1>Do not feel like housework?</h1>
            <p>Great! Book now for Helperland and enjoy the benefits</p>
            <ul>
              <li><img src="Images/forma-1-copy-10.png" style="margin-right:7px;" />certified & insured helper</li>
              <li><img src="Images/forma-1-copy-10.png" style="margin-right:7px;" />easy booking procedure</li>
              <li><img src="Images/forma-1-copy-10.png" style="margin-right:7px;" />friendly customer service</li>
              <li><img src="Images/forma-1-copy-10.png" style="margin-right:7px;" />secure online payment method</li>
            </ul>
        </div>
        <!-- Right-Side Text: Ends-->

        <!-- Center Button: Starts -->
          <button class="btn btn-home"> Let's Book a Cleaner</button>
        <!-- Center Button: Ends -->

        <!-- Image Steps: Starts -->
          <div class="container d-flex mx-auto">
            <div class="home-image">

              <div class="img1">
                <img class="home-img1" src="Images/home1.png">
                <p class="txt">Enter your Passcode</p>
              </div>

              <img class="home-img" src="Images/step-arrow-1.png">
              <div class="img2">
                <img class="home-img1" src="Images/group-22.png">
                <p class="txt">Select your plan</p>
              </div>

              <img class="home-img" src="Images/step-arrow-1-copy.png">
              <div class="img3">
                <img class="home-img1" src="Images/forma-1.png">
                <p class="txt">Pay securely online</p>
              </div>

              <img class="home-img" src="Images/step-arrow-1.png">
              <div class="img4">
                <img class="home-img1" src="Images/forma-12.png">
                <p class="txt">Enjoy amazing service</p>
              </div>

            </div>



          </div>
          <!-- Image Steps: Ends -->

          <div class="parent">
            <a href="#part2">
              <img src="Images/Scroll_Down_Arrow.png" alt="Scroll_Down_Arrow">
            </a>
          </div>

        </section>
      </div>


<div class="container-fluid" id="part2">
  <p class="heading">Why Helperland</p>

  <div class="container d-flex mx-auto">

  <div class="center-content">
    <div class="class1">
      <img src="Images/group-21.png" class="Group-21">
      <p class="h-text"> Experience & Vetted Professionals</p>
      <p class="p-text">dominate the industry in scale and scope with an adaptable, extensive network that consistently delivers exceptional results.</p>
  </div>
  <div class="class2">
    <img src="Images/group-23.png" class="Group-21">
    <p class="h-text"> Secure Online Payment</p>
    <p class="p-text">Payment is proccessed securely online. Customers pay safely online and manage the booking.</p>
  </div>

  <div class="class3">
      <img src="Images/group-24.png" class="Group-21">
      <p class="h-text"> Dedicated Customer Service</p>
      <p class="p-text">to our customers and are guided in all we do by their needs. The team is always happy to support you and offer all the information.</p>
  </div>
  </div>

</div>
</div>



<div class="container-fluid right-left-img">
  <img src="Images/blog-left-bg.png" class="left-img" style="float: left;">
  <img src="Images/blog-right-bg.png" class="right-img" style="float: right;">

  <div class="container part3">
    <div class="row justify-content-center">
      <div class="what-makes-happy">
        <div class="left">
          <p class="left-head">We do not know what makes you happy, but ...</p>
          <p class="left-body">If it's not dusting off, our friendly helpers will free you from this burden - do not worry anymore about spending valuable time doing housework, but savor life, you're well worth your time with beautiful experiences. Free yourself and enjoy the gained time: Go celebrate, relax, play with your children, meet friends or dare to jump on the bungee.Other leisure ideas and exclusive events can be found in our blog - guaranteed free from dust and cleaning tips!</p>
        </div>
        <div class="right">
          <img src="Images/group-36.png" class="part3-img">
        </div>
      </div>
    </div>
  </div>



<section class="home-blogs">
  <div class="container home-blog">
  <p class="heading3" >Our Blogs</p>
  <div class="container-fluid blogs">
    <div class="blog1">
      <img class="img-responsive blog-img" src="Images/group-28.png">
      <div class="blog-body">
        <p class="blog-heading">Lorem ipsum dolor sit amet</p>
        <p class="blog-text">January 28, 2019</p>
        <p class="blog-sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet.</p>
      </div>

    </div>
    <div class="blog2">
      <img class="img-responsive blog-img" src="Images/group-29.png">
      <div class="blog-body">
        <p class="blog-heading">Lorem ipsum dolor sit amet</p>
        <p class="blog-text">January 28, 2019</p>
        <p class="blog-sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet.</p>
      </div>
    </div>
    <div class="blog3">
      <img class="img-responsive blog-img" src="Images/group-30.png">
      <div class="blog-body">
        <p class="blog-heading">Lorem ipsum dolor sit amet</p>
        <p class="blog-text">January 28, 2019</p>
        <p class="blog-sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet.</p>
      </div>
    </div>
  </div>

</div>
</section>
</div>



<div class="part4">
  <p class="heading3" >What Our Customers Say</p>
    <div class="container-fluid section4 ">

      <div class="rect">
        <img class="rect-img" src="Images/group-31.png">
        <img class="rect-msg" src="Images/message.png" >
        <p class="p11">Lary Watson </p>
          <p class="rect-sub-head">Manchester</p>
            <p class="rect-feedback">We would like to extend our thanks for a wonderful job. The gentlemen you sent to clean and polish our floors worked very hard and did a fantastic job.<p class="rect-feedback">Very impressed with the quality of work being delivered.</p>
      </div>

      <div class="rect">
        <img class="rect-img" src="Images/group-32.png">
        <img class="rect-msg" src="Images/message.png" >
        <p class="p11">John Smith</p>
          <p class="rect-sub-head">Manchester</p>
            <p class="rect-feedback">It is a wonderful service, that makes our lives much more manageable. Their attention to detail is excellent, as is their personnel and attention to our needs.<p class="rect-feedback">A really impressive result!</p></p>
      </div>

      <div class="rect">
        <img class="rect-img" src="Images/group-33.png">
        <a href="#"><img class="rect-msg" src="Images/message.png" ></a>
        <p class="p11">Lars Johnson</p>
          <p class="rect-sub-head">Manchester</p>
            <p class="rect-feedback">Thanks for a great job cleaning the exterior of our home in readiness for the painter. The house came up so good that we didn’t need as much painting as we thought.<p class="rect-feedback">Thanks for a great job!</p>
      </div>

    </div>

  </div>




<?php 
  include 'include/home_footer.php';
?>



<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
</script>
</body>
</html>
