<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Helperland | Price Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="CSS/S1.css">
	<link rel = "icon" href = "Images/logo1.png" type = "image/x-icon">
</head>
<body>

<?php
if(isset($_SESSION['typeId']))
{


if($_SESSION['typeId'] == 1) {
    ?>
        
    <?php
        include('Navbar/CustCommanNav.php');
    ?>
    <!-- <script>
            alert("type id = 1");
        </script> -->
        <style>
            <?php include('NavCSS/CustCommanNav.css'); ?>
        </style>
    <?php
}elseif($_SESSION['typeId'] == 2 )
{
    ?>
        <!-- <script>
            alert("type id = 2");
        </script> -->
    <?php
        // echo "2";
        include('Navbar/SpCommanNav.php');
    ?>
        <style>
            <?php include('NavCSS/CustCommanNav.css'); ?>
        </style>
    <?php
}

}else{
?>

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
                <li class="nav-item r">
                  <a class="nav-link text-white active" href="Price.php">Prices & Services</a>
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
}

?>


<div class="bg-price">
	<img src="Images/bg-price.png" class="img-responsive price-bg" alt="faq" >
</div>

<!-- Price Heading Starts -->
<div class="container-fluid">
	<p class="txt">Set up your cleaning service</p>
</div>
	<div class="line-div">
	  <hr class="left-line">
		<img src="Images/separator.png" class="img-sep">
	  <hr class="right-line">
	</div>
<!-- Price Heading Ends -->

<!-- Card Started -->
<section class="card-part">
	<div class="card-section container d-flex justify-content-center">
		<div class="card" >
			<h5 class="card-header">One Time</h5>
			<div class="card-body">
				<p class="card-head-text" >€20<a class="card-head-txt">/hr</a></p>
				<div class="card-text">
					<div class="row">
						<p class="text-row">
							<img  class="card-text-img" src="Images/check-price.png">Lower prices</p>
						<p class="text-row">
							<img  class="card-text-img" src="Images/check-price.png">Easy online & secure payment</p>
						<p class="text-row">
							<img  class="card-text-img" src="Images/check-price.png">Easy amendment</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Card Ends -->



<!-- Extra-services Starts -->
	<section class="extra-service">
		<hr class="seperator-line">

		<!-- Extra-Service Heading Starts -->
		<div class="container-fluid">
			<p class="txt">Extra services</p>
		</div>
		<div class="line-div">
			<hr class="left-line">
				<img src="Images/separator.png" class="img-sep">
			<hr class="right-line">
		</div>
		<!-- Extra-Service Heading Ends-->

	<div class="container-fluid">
		<div class="Services">
			<div class="service-div" >
				<div class="Circle-ring">
					<img src="Images/price-1.png">
				</div>
				<p class="s-body">Inside cabinets</p>
				<p class="sub-body"> 30 minutes</p>
			</div>

			<div class="service-div">
				<div class="Circle-ring">
					<img src="Images/price-2.png">
				</div>
				<p class="s-body">Inside Fridge</p>
				<p class="sub-body"> 30 minutes</p>
			</div>

			<div class="service-div">
				<div class="Circle-ring">
					<img src="Images/price-3.png">
				</div>
				<p class="s-body">Inside oven</p>
				<p class="sub-body"> 30 minutes</p>
			</div>

			<div class="service-div">
				<div class="Circle-ring">
					<img src="Images/price-4.png">
				</div>
				<p class="s-body">Laundary wash & dry</p>
				<p class="sub-body"> 30 minutes</p>
			</div>

			<div class="service-div">
				<div class="Circle-ring">
					<img src="Images/price-5.png">
				</div>
				<p class="s-body">Interior windows</p>
				<p class="sub-body"> 30 minutes</p>
			</div>
		</div>
	</div>
	</section>
<!-- Extra-services Ends -->


<!-- Cleaning-Description Starts -->
<section class="Cleaning-Description">

<!-- cleaning-desc-heading starts -->
<div class="container-fluid part3" >
	<div class="container-fluid">
		<p class="txt">What we include in cleaning</p>
	</div>
	<div class="line-div">
		<hr class="left-line">
			<img src="Images/separator.png" class="img-sep">
		<hr class="right-line">
	</div>

	<div class="container">
	<div class="price-blogs d-flex justify-content-center">
		<div class="blog1">
			<img class="p-blog img-responsive" src="Images/price-blog-1.png">
			<p class="blog-head" >Bedroom and Living Room</p>
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Dust all accessible surfaces</p>
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Wipe down all mirrors and glass fixtures</p>
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Clean all floor surfaces</p>
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Take out garbage and recycling</p>
		</div>

		<div class="blog2">
			<img class="p-blog" src="Images/price-blog-2.png">
			<p class="blog-head" >Bathrooms</p>
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Wash and sanitize the toilet, shower, tub, sink</p>
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Dust all accessible surfaces</p>
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Wipe down all mirrors and glass fixtures</p>	
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Clean all floor surfaces</p>
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Take out garbage and recycling</p>
		</div>

		<div class="blog3">
			<img class="p-blog" src="Images/price-blog-3.png">
			<p class="blog-head" >Kitchen</p>
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Dust all accessible surfaces</p>
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Empty sink and load up dishwasher</p>
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Wipe down exterior of stove, oven and fridge</p>	
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Clean all floor surfaces</p>
			<p class="blog-body"> 
				<img class="blog-img" src="Images/check-price.png">Take out garbage and recycling</p>
		</div>
	</div>
</div>

</div>		
</section>
<!-- Cleaning-Description Ends -->



<!-- Why-Helperland Starts -->
<section class="why-helperland">

<!-- Part4 Heading Starts -->
	<div class="container-fluid">
		<p class="txt">Why Helperland</p>
	</div>
	<div class="line-div">
		<hr class="left-line">
			<img src="Images/separator.png" class="img-sep">
		<hr class="right-line">
	</div>

	<div class="container">
		<div class="why d-flex justify-content-center">

			<div class="part-left">
				<p class="left-text-head">Experienced and vetted professionals</p>
				<p class="left-text-body">dominate the industry in scale and scope with an adaptable, extensive network that consistently delivers exceptional results.</p>
				<p class="left-text-head">Dedicated customer service</p>
				<p class="left-text-body">to our customers and are guided in all we do by their needs. The team is always happy to support you and offer all the information. you need.</p>
			</div>
			<div class="part-center">
				<img class="center-img" src="Images/price-last.png">
			</div>
			<div class="part-right">
				<p class="right-text-head">Every cleaning is insured</p>
				<p class="right-text-body">and seek to provide exceptional service and engage in proactive behavior. We‘d be happy to clean your homes.</p>
				<p class="right-text-head">Secure online payment</p>
				<p class="right-text-body">Payment is processed securely online. Customers pay safely online and manage the booking.</p>
			</div>

		</div>
	</div>
</section>
<!-- Why-Helperland Ends -->


<div class="circle">
	<a href="#"><img src="Images/forma-111.png" ></a>
</div>


<?php include 'include/comman_footer.php' ?>

  
  	<script src="JS/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
</body>
</html>