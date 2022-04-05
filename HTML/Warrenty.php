<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Helperland | Warrenty</title>
    <link rel="stylesheet" href="CSS/warrenty.css">
    <link rel="stylesheet" href="CSS/warrenty.css">
    <?php include('include/links.php'); ?>
    <script src="JS\nav.js"></script>
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
                <li class="nav-item r">
                  <a class="nav-link text-white active" href="Warrenty.php">Warrenty</a>
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
                  <a class="nav-link link1 text-white" href="#">Beacome a Helper</a>
                </li>
            </ul>
          </div>
        </nav>
    </div>
</section>
<?php
}



?>



<!-- BG -->
<div class="bg-warrenty">
	<img src="Images/warrenty_BG.jpg" class="img-responsive price-bg" alt="faq" >
</div>

<!-- Heading -->
<div class="container-fluid">
	<p class="txt">Our Guarantee<?php if(isset($_SESSION['typeId'])) {echo $_SESSION['typeId']; }?></p>
</div>
<div class="line-div">
    <hr class="left-line">
        <img src="Images/separator.png" class="img-sep">
    <hr class="right-line">
</div>

<!-- Sky Div -->
<div class="sky-div">
    <div class="container-fluid">
        <p class="txt">We covered your damage</p>
    </div>
    <div class="line-div">
        <hr class="left-line">
            <img src="Images/separator.png" class="img-sep">
        <hr class="right-line">
    </div>

    <div class="text-center container d-flex justify-content-center">
        <p class="sky-div-txt">In the rare event of damage, Helperland’s got your back. Every booking on the Helperland platform is insured.</p>
    </div>
</div>

<!-- Backed-div -->
<div class="backed-div container">
    <div class="row">
        <div class="col-sm-3">
            <div class="backed-div-img">
                <img src="Images/guarantee.png" alt="">
            </div>            
        </div>
        <div class="col-sm-6 backed-txt">
            <div class="">
                <p class="backed-div-txt">Backed by the Helperland Service Guarantee</p>
                <p class="backed-div-subtxt">Your happiness is our goal. If you're not happy, we'll work to make it right. Helperland strives to match you with the right pro for you and your home every time. If you’re not satisfied with the quality of the service, we'll send another pro at no extra charge for your next booking.</p>
            </div>            
        </div>
        <div class="col-sm-3 backed-div-btn ">
            <div >
                <a href="" ><button class="btn btn-lg btn-book-cleaner ">Book a Cleaner</button></a>
            </div>            
        </div>
    </div>
</div>



<?php 
    include('include/login-forgot-Modal.php');
    include('include/comman_footer.php'); 
?>

</body>
</html>