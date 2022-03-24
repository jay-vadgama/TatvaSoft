<!DOCTYPE html>
<html>
<head>
  <title>Helperland | Contact us</title>
	<link rel="stylesheet" type="text/css" href="CSS/S1.css">
	<script src="Js/main.js"></script>
  <?php include('include/links.php'); ?>
  
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
                <li class="nav-item r">
                  <a class="nav-link text-white active" href="Contact.php">Contact</a>
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

<div class="bg-price">
  <img src="Images/contact_BG.png" class="img-responsive price-bg" alt="faq" >
</div>

<!-- Contact Heading Starts -->
<div class="container-fluid">
  <p class="txt1">Contact us</p>
</div>
<div class="line-div">
  <hr class="left-line">
    <img src="Images/separator.png" class="img-sep">
  <hr class="right-line">
</div>
<!-- Contact Heading Ends -->

<!-- Contact-us Starts -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-4 col-sm-4 text-center">
      <img src="Images/Location_Contact.png" class="group-img">
      <p class="contact-body">1111 Lorem ipsum text 100,<br>Lorem ipsum AB </p>
    </div>
    <div class="col-lg-4 col-sm-4 text-center">
      <img src="Images/phone-call_Contact.png" class="group-img">
      <p class="contact-body" >+49 (40) 123 56 7890<br>+49 (40) 987 56 0000</p>
    </div>
    <div class="col-lg-4 col-sm-4 text-center">
      <img src="Images/Email_Contact.png" class="group-img">
      <p class="contact-body3" >info@helperland.com</p>
    </div>
  </div>  
</div>
<!-- Contact-us Ends -->


<div class="container"><hr></div>

<div class="container-fluid">
  <p class="txt2">Get in touch with us</p>
</div>


<section class="form-section">
  <div class="container">
    <form action="insert.php" class="was-validated" method="post" enctype="multipart/form-data">
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
        <div class="form-group text-pad-top">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">+91</div>
              </div>
                <input class="form-control" type="tel" id="MobileNo" name="MobileNo" placeholder="Mobile Number" minlength="10" maxlength="10" required>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="form-group text-pad-top" >
          <input class="form-control" type="email" id="email" name="email" placeholder="Email address" required>
        </div>
      </div>
    </div>

    <div class="row justify-content-center" >
      <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="form-group text-pad-top">
          <select class="form-control" name="subject" required>
            <option value="" hidden>Subject</option>
            <option value="Service">Service</option>
            <option value="Contact">Contact</option>
            <option value="Inquiry">Inquiry</option>
          </select>
        </div>
      </div> 
    </div>
  
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="form-group text-pad-top"> 
          <textarea class="form-control" style="height: 146px;" type="text" id="message" name="message" placeholder="Message"></textarea>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="file" class="custom-file-input" id="File1"
              aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="File1">Choose file</label>
          </div>
        </div>
      </div>
    </div>

      <div class="text-center">
        <button type="submit" name="submit" class="btn btn-submit">Submit</button>
      </div>
    

   </form>
  </div>
</section>

<div class="bg-faq">
  <img src="Images/Location.png" class="img-responsive" alt="faq" style="padding-top: 50px;width: 100%; height:auto;padding-bottom: 50px;">
</div>


<?php include 'include/comman_footer.php' ?>
  <script>
    $('#File1').on('change',function(){
        //get the file name
    var fileName = $(this).val();
        //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
}); 
  </script>
    
</body>
</html>


  

