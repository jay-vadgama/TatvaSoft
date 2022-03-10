<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Helperland | Customer's Registration</title>
  <link rel = "icon" href = "Images/logo1.png" type = "image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="CSS/S1.css">
  <script src="JS/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
</head>
<body>

<!-- Navbar Starts -->
<section class="header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg fixed-top">
          <a class="navbar-brand" href="Home.html"><img class="logo" src="Images/Logo_Helperland.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item round">
                  <a class="nav-link" href="#">Book now</a>
                </li>
                <li class="nav-item r1 ">
                  <a class="nav-link" href="#">Prices & Services</a>
                </li>
                <li class="nav-item r1">
                  <a class="nav-link" href="#">Warrenty</a>
                </li>
                <li class="nav-item r1">
                  <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item r1">
                  <a class="nav-link" href="Contact.html">Contact</a>
                </li>
                <li class="nav-item round">
                  <a class="nav-link " href="#">Login</a>
                </li>
                <li class="nav-item round">
                  <a class="nav-link " href="#">Beacome a Helper</a>
                </li>
            </ul>
          </div>
        </nav>
    </div>
</section>
<!-- Navbar Ends -->

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
           <input class="form-control" type="password" id="re-password" name="re-password" placeholder="Repeat Password" required>
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


<?php include 'include/comman_footer.php' ?>

    
</body>
</html>