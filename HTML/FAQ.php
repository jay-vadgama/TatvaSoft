<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" type="text/css" href="CSS/S1.css">
      <title>Helperland | FAQ</title>
      <link rel = "icon" href = "Images/logo1.png" type = "image/x-icon">
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

<div class="bg-faq">
	<img src="Images/FAQ-BG.png" class="img-responsive price-bg" alt="faq" >
</div>

<!-- FAQ Heading Starts -->
<div class="container-fluid">
	<p class="txt">FAQs</p>
  </div>
	<div class="line-div">
	  <hr class="left-line">
		<img src="Images/separator.png" class="img-sep">
	  <hr class="right-line">
	</div>
<!-- FAQ Heading Ends -->

	<p class="faq-provides">Whether you are Customer or Service provider,</p>
  <p class="faq-provides">We have tried our best to solve all your queries and questions.</p>

<div class="container-fluid">
  <div class="faq-header d-flex justify-content-center">
    <div class="cust" id="customer" onclick="activeCust()">
      <p  class="for-cust" id="custtxt">FOR CUSTOMERS</p></div>
    <div class="spv" id="serviceP" onclick="activeSpv()">
      <p  class="for-spv" id="servicetxt">FOR SERVICE PROVIDERS</p></div>        
  </div>
</div>

<div class="container">
<!-- Customer's FAQ Starts -->
  <div class="FAQ-cust" id="faqCust">
    <div class="que">
      <a class="que-text">
        <img class="r-arrow" data-toggle="collapse" data-target="#q1" id="rImg" src="Images/right.png">What's include in a cleaning?</a>
    </div>
      <div id="q1" class="collapse">
        <div class="ans">
          <p class="ans-text">Bedroom, Living Room & Common Areas, Bathrooms, Kitchen, Extras.</p>
        </div>
      </div>

      <div class="que">
        <a class="que-text">
          <img class="r-arrow" data-toggle="collapse" data-target="#q2" id="rImg" src="Images/right.png">Which Helperland professional will come to my place?
        </a>
      </div>
        <div id="q2" class="collapse">
          <div class="ans">
            <p class="ans-text">Helperland has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to assign the best professional available.Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all future bookings.You will receive an email with details about your professional prior to your appointment.</p>
          </div>
        </div>

        <div class="que">
          <a class="que-text">
            <img class="r-arrow" data-toggle="collapse" data-target="#q3" id="rImg" src="Images/right.png">Can I skip or reschedule bookings?
          </a>
        </div>
          <div id="q3" class="collapse">
            <div class="ans">
              <p class="ans-text">You can reschedule any booking for free at least 24 hours in advance of the scheduled start time. If you need to skip a booking within the minimum commitment, we???ll credit the value of the booking to your account. You can use this credit on future cleanings and other Helperland services.</p>
            </div>
          </div>

          <div class="que">
            <a class="que-text">
              <img class="r-arrow" data-toggle="collapse" data-target="#q4" id="rImg" src="Images/right.png">Do I need to be home for the booking?
            </a>
          </div>
            <div id="q4" class="collapse">
              <div class="ans">
                <p class="ans-text">We strongly recommend that you are home for the first clean of your booking to show your cleaner around. Some customers choose to give a spare key to their cleaner, but this decision is based on individual preferences.</p>
              </div>         
            </div>
    </div>
<!-- Customer's FAQ Ends -->

<!-- SPV's FAQ Starts -->
  <div class="FAQ-spv" id="faqSpv">
    <div class="que">
      <a class="que-text" >
        <img class="r-arrow" data-toggle="collapse" data-target="#spq1" id="rImg" src="Images/right.png">How much do service providers earn?
      </a>
    </div>
      <div id="spq1" class="collapse">
        <div class="ans">
          <p class="ans-text">The self-employed service providers working with Helperland set their own payouts, this means that they decide how much they earn per hour.</p>
        </div>
      </div>
      
      <div class="que">
        <a class="que-text">
          <img class="r-arrow" data-toggle="collapse" data-target="#spq2" id="rImg" src="Images/right.png">What support do you provide to the service providers?
        </a>
      </div>
        <div id="spq2" class="collapse">
          <div class="ans">
            <p class="ans-text">Our call-centre is available to assist the service providers with all queries or issues in regards to their bookings during office hours. Before a service provider starts receiving jobs, every individual partner receives an orientation session to familiarise with the online platform and their profile.</p>
          </div>
        </div>                    
  </div>
<!-- SPV's FAQ Ends -->
</div>


<?php include 'include/comman_footer.php' ?>




<script src="JS/main2.js"></script>
<script src="JS/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
</body>
</html>