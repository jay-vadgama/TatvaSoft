<?php
  session_start();
  if(isset($_SESSION['FirstName']) ){
    header("Location: Customer-Service-History.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Helperland | Welcome Customer!</title>
  <?php include('../include/links.php'); ?>
  <link rel="stylesheet" href="css/Home.css">
  <link rel="stylesheet" href="CustHomeNav.css">
  <script src="../JS/main.js"></script>
</head>

<body style="scroll-behavior: smooth !important;">

<div class="img-fluid">
  <?php 
    include 'CustHomeNav.php';
    include '../include/login-forgot-Modal.php'; 
  ?>
  
  <!-- Let's Book Cleaner -->
  <section class="part1">
    
    <!-- left-Side Text: Starts-->
    <div class="left-text">
      <h1>Do not feel like housework?</h1>
      <p>Great! Book now for Helperland and enjoy the benefits</p>
      <ul>
        <li><img src="../Images/forma-1-copy-10.png" style="margin-right:7px;" />certified & insured helper</li>
        <li><img src="../Images/forma-1-copy-10.png" style="margin-right:7px;" />easy booking procedure</li>
        <li><img src="../Images/forma-1-copy-10.png" style="margin-right:7px;" />friendly customer service</li>
        <li><img src="../Images/forma-1-copy-10.png" style="margin-right:7px;" />secure online payment method</li>
      </ul>
    </div>
  
    <!-- Center Button: Starts -->
    <a href="Book-Now.php" style="text-decoration: none !important;"><button class="btn btn-home"> Let's Book a Cleaner</button></a>
  
    <!-- Image Steps: Starts -->
    <div class="container d-flex mx-auto">
      <div class="home-image">
        <div class="img1">
          <img class="home-img1" src="../Images/home1.png">
          <p class="txt">Enter your Passcode</p>
        </div>
        <img class="home-img" src="../Images/step-arrow-1.png">
        <div class="img2">
          <img class="home-img1" src="../Images/group-22.png">
          <p class="txt">Select your plan</p>
        </div>
        <img class="home-img" src="../Images/step-arrow-1-copy.png">
        <div class="img3">
          <img class="home-img1" src="../Images/forma-1.png">
          <p class="txt">Pay securely online</p>
        </div>
        <img class="home-img" src="../Images/step-arrow-1.png">
        <div class="img4">
          <img class="home-img1" src="../Images/forma-12.png">
          <p class="txt">Enjoy amazing service</p>
        </div>
      </div>
    </div>
  
    <!-- Scroll-down-arrow -->
    <div class="parent">
      <a href="#part2">
        <img src="../Images/Scroll_Down_Arrow.png" alt="Scroll_Down_Arrow">
      </a>
    </div>
  </section>
</div>

<!-- Why Helperland -->
<section class="Why-helperland">
  <div class="container-fluid" id="part2">
    <p class="heading">Why Helperland</p>
    <div class="container d-flex mx-auto">

      <div class="center-content">
        <div class="class1">
          <img src="../Images/group-21.png" class="Group-21">
          <p class="h-text"> Experience & Vetted Professionals</p>
          <p class="p-text">dominate the industry in scale and scope with an adaptable, extensive network that consistently delivers exceptional results.</p>
        </div>
        <div class="class2">
          <img src="../Images/group-23.png" class="Group-21">
          <p class="h-text"> Secure Online Payment</p>
          <p class="p-text">Payment is proccessed securely online. Customers pay safely online and manage the booking.</p>
        </div>
        <div class="class3">
          <img src="../Images/group-24.png" class="Group-21">
          <p class="h-text"> Dedicated Customer Service</p>
          <p class="p-text">to our customers and are guided in all we do by their needs. The team is always happy to support you and offer all the information.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Left-Right img -->
<div class="container-fluid right-left-img">
  <img src="../Images/blog-left-bg.png" class="left-img" style="float: left;">
  <img src="../Images/blog-right-bg.png" class="right-img" style="float: right;">
  
  <!-- what-makes-happy  -->
  <div class="container part3">
    <div class="row justify-content-center">
      <div class="what-makes-happy">
        <div class="left">
          <p class="left-head">We do not know what makes you happy, but ...</p>
          <p class="left-body">If it's not dusting off, our friendly helpers will free you from this burden - do not worry anymore about spending valuable time doing housework, but savor life, you're well worth your time with beautiful experiences. Free yourself and enjoy the gained time: Go celebrate, relax, play with your children, meet friends or dare to jump on the bungee.Other leisure ideas and exclusive events can be found in our blog - guaranteed free from dust and cleaning tips!</p>
        </div>
        <div class="right">
          <img src="../Images/group-36.png" class="part3-img">
        </div>
      </div>
    </div>
  </div>

  <section class="home-blogs">
    <div class="container home-blog">
      <p class="heading3" >Our Blogs</p>
      <!-- Our Blogs -->
      <div class="container-fluid blogs">
        <div class="blog1">
          <img class="img-responsive blog-img" src="../Images/group-28.png">
          <div class="blog-body">
            <p class="blog-heading">Lorem ipsum dolor sit amet</p>
            <p class="blog-text">January 28, 2019</p>
            <p class="blog-sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet.</p>
          </div>
        </div>
        <div class="blog2">
          <img class="img-responsive blog-img" src="../Images/group-29.png">
          <div class="blog-body">
            <p class="blog-heading">Lorem ipsum dolor sit amet</p>
            <p class="blog-text">January 28, 2019</p>
            <p class="blog-sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum metus pulvinar aliquet.</p>
          </div>
        </div>
        <div class="blog3">
          <img class="img-responsive blog-img" src="../Images/group-30.png">
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


<!-- What-Our-Customers-Say -->
<div class="part4">
  <p class="heading3" >What Our Customers Say</p>

  <!-- Rectangles -->
  <div class="container-fluid section4 ">
    <div class="rect">
      <img class="rect-img" src="../Images/group-31.png">
      <img class="rect-msg" src="../Images/message.png" >
      <p class="p11">Lary Watson </p>
      <p class="rect-sub-head">Manchester</p>
      <p class="rect-feedback">We would like to extend our thanks for a wonderful job. The gentlemen you sent to clean and polish our floors worked very hard and did a fantastic job.<p class="rect-feedback">Very impressed with the quality of work being delivered.</p>
    </div>
    <div class="rect">
      <img class="rect-img" src="../Images/group-32.png">
      <img class="rect-msg" src="../Images/message.png" >
      <p class="p11">John Smith</p>
      <p class="rect-sub-head">Manchester</p>
      <p class="rect-feedback">It is a wonderful service, that makes our lives much more manageable. Their attention to detail is excellent, as is their personnel and attention to our needs.<p class="rect-feedback">A really impressive result!</p></p>
    </div>
    <div class="rect">
      <img class="rect-img" src="../Images/group-33.png">
      <a href="#"><img class="rect-msg" src="../Images/message.png" ></a>
      <p class="p11">Lars Johnson</p>
      <p class="rect-sub-head">Manchester</p>
      <p class="rect-feedback">Thanks for a great job cleaning the exterior of our home in readiness for the painter. The house came up so good that we didn’t need as much painting as we thought.<p class="rect-feedback">Thanks for a great job!</p>
    </div>
  </div>

</div>

<?php include '../include/home_footer.php'; ?>



<script>
  $(function () {
    const toTop = document.querySelector(".to-top");

      window.addEventListener("scroll", () => {
        if (window.pageYOffset > 300) {
          toTop.classList.add("active");
        } else{
          toTop.classList.remove("active");
        }
      })

    $(document).scroll(function () {
      var $nav = $(".fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });
</script>
</body>
</html>
