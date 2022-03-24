<!DOCTYPE html>
<html>
<head>
  <title>Helperland | About us</title>
  <link rel="stylesheet" type="text/css" href="CSS/S1.css">
  <script src="JS/main.js"></script>
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
                  <a class="nav-link text-white" href="Warrenty.php">Warrenty</a>
                </li>
                <li class="nav-item r1">
                  <a class="nav-link text-white" href="#">Blog</a>
                </li>
                <li class="nav-item r1">
                  <a class="nav-link text-white" href="Contact.php">Contact</a>
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



<div class="bg-about">
	<img src="Images/About_BG.png" class="img-responsive price-bg" alt="About BG" style="width: 100%; height:auto;">
</div>

<!-- About Heading Starts -->
  <div class="container-fluid">
    <p class="txt">A Few words about us</p>
  </div>
    <div class="line-div">
      <hr class="left-line">
        <img src="Images/separator.png" class="img-sep">
      <hr class="right-line">
    </div>
<!-- About Heading Ends -->

<div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-12">
      <p class="text-p">We are providers of professional home cleaning services, offering hourly based house cleaning options, which mean that you don’t have to fret about getting your house cleaned anymore. We will handle everything for you, so that you can focus on spending your precious time with your family members.</p>
      <p class="text-p">We have a number of experienced cleaners to help you make cleaning out or shifting your home an easy affair.</p>
    </div>
  </div>
</div>

<!-- About Heading2 Starts -->
<div class="container-fluid">
  <p class="txt">Our Story</p>
</div>
  <div class="line-div">
    <hr class="left-line">
      <img src="Images/separator.png" class="img-sep">
    <hr class="right-line">
  </div>
<!-- About Heading2 Ends -->

<div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-12">
      <p class="text-p1">A cleaner is a type of industrial or domestic worker who cleans homes or commercial premises for payment. Cleaners may specialise in cleaning particular things or places, such as window cleaners. Cleaners often work when the people who otherwise occupy the space are not around. They may clean offices at night or houses during the workday.</p>
    </div>
  </div>
</div>



<?php include 'include/comman_footer.php' ?>

</body>
</html>