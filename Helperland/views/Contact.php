<?php
  $base_url = "http://localhost/TatvaSoft/Helperland/";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" type="text/css" href="../assets/CSS/S1.css">
	<script src="../assets/JS/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
  <title>Contact us</title>
</head>
<body>

<!-- Navbar Starts -->
<section class="header">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg fixed-top">
			  <a class="navbar-brand" href=""><img class="logo" src="../assets/Images/Logo_Helperland.png"></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
			  </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item round" >
                <a class="nav-link" href="#">Book now</a>
              </li>
              <li class="nav-item r1">
                <a class="nav-link" href="Price.html">Prices & Services</a>
              </li>
              <li class="nav-item r1">
                <a class="nav-link" href="#">Warrenty</a>
              </li>
              <li class="nav-item r1">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item r">
                <a class="nav-link" href="#">Contact</a>
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

<div class="bg-price">
  <img src="../assets/Images/contact_BG.png" class="img-responsive price-bg" alt="faq" >
</div>

<!-- Contact Heading Starts -->
    <div class="container-fluid">
      <p class="txt1">Contact us</p>
      </div>
      <div class="line-div">
        <hr class="left-line">
        <img src="../assets/Images/separator.png" class="img-sep">
        <hr class="right-line">
      </div>
<!-- Contact Heading Ends -->

<!-- Contact-us Starts -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-4 col-sm-4 text-center">
      <img src="../assets/Images/Location_Contact.png" class="group-img">
      <p class="contact-body">1111 Lorem ipsum text 100,<br>Lorem ipsum AB </p>
    </div>
    <div class="col-lg-4 col-sm-4 text-center">
      <img src="../assets/Images/phone-call_Contact.png" class="group-img">
      <p class="contact-body" >+49 (40) 123 56 7890<br>+49 (40) 987 56 0000</p>
    </div>
    <div class="col-lg-4 col-sm-4 text-center">
      <img src="../assets/Images/Email_Contact.png" class="group-img">
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
    <form action="http://localhost/TatvaSoft/Helperland/?controller=Contact&function=Contact" method="post" enctype="multipart/form-data">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="form-group">
         <input class="form-control" type="text" id="fname" name="firstname" placeholder="First Name">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="form-group">
         <input class="form-control" type="text" id="lname" name="lastname" placeholder="Last Name">
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
                <input class="form-control" type="tel" id="MobileNo" name="MobileNo" placeholder="Mobile Number" minlength="10" maxlength="10">
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="form-group text-pad-top" >
          <input class="form-control" type="email" id="email" name="email" placeholder="Email address">
        </div>
      </div>
    </div>

    <div class="row justify-content-center" >
      <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="form-group text-pad-top">
          <select class="form-control" name="subject">
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
  <img src="../assets/Images/Location.png" class="img-responsive" alt="faq" style="padding-top: 50px;width: 100%; height:auto;padding-bottom: 50px;">
</div>


<!-- Footer Started -->
<section class="footer-part">
	<div class="container-fluid footer" id="mainFooter">
	  <div class="row f-row">
		<div class="col-sm-3 logo_position">
		  <a href=#><img src="../assets/Images/logo1.png" class="footer_logo"></a>
		</div>
		  <div class="col-sm-6 footer_links">
			<p class="footer_p">
			  <a href="#" class="footer_link_decoration">HOME</a>   
			  <a href="#" class="footer_link_decoration">ABOUT</a>   
			  <a href="#" class="footer_link_decoration">TESTIMONIALS</a>   
			  <a href="#" class="footer_link_decoration">FAQS</a>  
			  <a href="#" class="footer_link_decoration">INSURANCE</a>   
			  <a href="#" class="footer_link_decoration">POLICY</a>   
			  <a href="#" class="footer_link_decoration">IMPRESSUM</a>  
			</p>
		  </div>
			<div class="col-sm-3 footer_media_icon" >
				<a href=#><img src="../assets/Images/fb.png" class="footer_media_logo"></a>
				<a href=#><img src="../assets/Images/insta.png" class="footer_media_logo"></a>
			</div>
	  </div>
	</div>     
  
  <!-- footer-policy starts-->
	<div class="container-fluid footer_policy" id="privacyPolicy">
	  <p class="policy_p">©2018 Helperland. All rights reserved. 
		<a href=# style="color: #9ba0a3;">Terms and Conditions</a> | <a href=# style="color: #9ba0a3;">Privacy Policy</a> </p>
	  <div class="okay-btn">
		<button type="submit" onclick="footerPolicy()" class="btn btn2">OK!</button>
	  </div>
	</div>
  <!-- footer-policy ends -->
  
  </section>
  <!-- Footer Ended -->

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


  

