<!DOCTYPE html>
<html>
<head>
  <?php include 'include/links.php' ?>
  <title>Helperland | Customer's Registration</title>
  <script src="JS/main.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/S1.css">
  
	
</head>
<body>

<!-- Navbar -->
<section class="header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg fixed-top">
          <a class="navbar-brand" href="Home.php"><img class="logo" src="Images/Logo_Helperland.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item round">
                    <a class="nav-link link1 text-white " href="#">Book Now</a>
                  </li>
                <li class="nav-item r1">
                  <a class="nav-link text-white" href="Price.php">Prices & Services</a>
                </li>
                <li class="nav-item r1">
                  <a class="nav-link text-white " href="Warrenty.php">Warrenty</a>
                </li>
                <li class="nav-item r1">
                  <a class="nav-link text-white" href="#">Blog</a>
                </li>
                <li class="nav-item r1">
                  <a class="nav-link text-white " href="Contact.php">Contact</a>
                </li>
                <li class="nav-item round">
                  <a class="nav-link link1 text-white"  data-toggle="modal" data-target="#loginModal" href="#">Login</a>
                </li>
                <li class="nav-item round">
                  <a class="nav-link link1 text-white" href="SP-Registration.php">Beacome a Helper</a>
                </li>
            </ul>
          </div>
        </nav>
    </div>
</section>


<?php 
        include 'include/login-forgot-Modal.php';
    ?>
<div class="price-bg">
    <div class="container-fluid">
        <p class="txt">Create an Account</p>
    </div>
	<div class="line-div">
	  <hr class="left-line">
		<img src="Images/separator.png" class="img-sep">
	  <hr class="right-line">
	</div>
</div>


<!-- Registration-Form starts -->
<section class="form-section">
  <div class="container-fluid">
    <form action="InsertRegistration.php" class="was-validated" method="post">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="form-group">
            <input class="form-control" type="text" id="fname" name="firstname" placeholder="First Name" required>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="form-group">
           <input class="form-control" type="text" id="lname" name="lastname" placeholder="Last Name" required>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="form-group text-pad-top" >
            <input class="form-control" type="email" id="email" name="email" placeholder="Email address" required>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="form-group text-pad-top">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">+91</div>
              </div>
              <input class="form-control" type="tel" id="MobileNo" name="MobileNo" minlength="10" maxlength="10" placeholder="Mobile Number" required>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 ">
          <div class="form-group">
           <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password" required>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ">
          <div class="form-group">
           <input class="form-control" type="password" id="re-password" name="Cpassword" placeholder="Repeat Password" required>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-6 col-sm-6 ">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="Check1">
              <label class="form-check-label" for="Check1">
                I have read the <a href=""> privacy policy.</a>
              </label>
            </div>
          </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-6 col-sm-6 ">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="Check2">
            <label class="form-check-label" for="Check2">
              I agree with the <a href="#"> terms and conditions</a> of Helperland.
            </label>
          </div>
        </div>
      </div>
      <div class="btn-center">
        <button type="submit" name="registerBtn" class="btn btn-center-submit" >Register</button>
      </div>
    </form>
  </div>
</section>
<!-- Registration-Form Ends -->

<!-- <div class="text-center">
  <p>Already have an account?<a data-toggle="modal" data-target="#loginModal" href="#">Login</a></p>
</div> -->

<?php include 'include/comman_footer.php'; ?>

    
</body>
</html>