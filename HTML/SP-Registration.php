<!DOCTYPE html>
<html>
<head>
    <title>Helperland | Become a Service Provider</title>
    <?php include('include/links.php'); ?>
    <link rel="stylesheet" href="CSS/style1.css">
    <script src="JS/main.js"></script>
    <script src="JS/main3.js"></script>
</head>
<body style="scroll-behavior: smooth;">
    <div class="img-fluid" id="top">
    <?php 
        include('include/home_navbar.php');
        include('include/login-forgot-Modal.php');
    ?>

<!-- SP-Form -->
<section class="become-pro-section" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="left-side-text col-lg-4">
                <p class="left-side-text-head">Do not feel like housework?</p>
                <div class="left-ul">
                    <ul>
                        <li><img src="Images/forma-1-copy-10.png" style="margin-right:7px;" >open time-management</li>
                        <li><img src="Images/forma-1-copy-10.png" style="margin-right:7px;" >only accept suitable requests</li>
                        <li><img src="Images/forma-1-copy-10.png" style="margin-right:7px;" >fair and fixed hourly wage</li>
                        <li><img src="Images/forma-1-copy-10.png" style="margin-right:7px;" >ideal part time job</li>
                        <li><img src="Images/forma-1-copy-10.png" style="margin-right:7px;" >personal contact person</li>
                    </ul>
                </div>
            </div>
            <div class="register col-lg-4 col-md-12 d-flex justify-content-center">
                <form action="InsertSPRegistration.php" method="post" class="was-validated become-pro-form"> 
                    <p class="register-now">Register as Helper!</p>
                    <div class="form-group">
                        <input class="form-control" type="text" id="fname" name="firstname" value="" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" id="lname" name="lastname" value="" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+91</div>
                            </div>
                            <input class="form-control" type="tel" id="MobileNo" name="MobileNo" minlength="10" maxlength="10" placeholder="Mobile Number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="Pass" id="Password1" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="ChangePass"  id="Password2" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Check1">
                        <label class="form-check-label" for="Check1">
                            Send me newsletters from Helperland.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Check2">
                        <label class="form-check-label" for="Check2">
                            I accept <a href="#">terms and conditions</a> & <a href="#">privacy policy.</a>
                        </label>
                    </div>
                    <div class="text-center">
                        <div class="row justify-content-center">
                            <button name="btnStart" class="form-btn">Get Started 
                                <img src="Images/shape-1 - Copy.png">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="parent">
    <a href="#how">
        <img src="Images/Scroll_Down_Arrow.png" alt="Scroll_Down_Arrow">
    </a>
</div>

</div>



<!-- Steps -->
<section class="how-it-works">
    <div class="container-fluid right-left-img" id="how">
        <img src="Images/blog-left-bg.png" class="left-img">
        <img src="Images/blog-right-bg.png" class="right-img"> 
        <div class="container-fluid">
            <p class="txt">How it works</p>
        </div>

        <!-- How-it-works-Steps Starts -->
        <section class="how-it-works-services">
            <div class="container steps">
                <div class="row justify-content-center">
                    <div class="step1">
                        <div class="step1-left">
                            <p class="how-it-works-services-title">Register yourself</p>
                            <p class="how-it-works-services-content">Provide your basic information to register yourself as a service provider.</p>
                        </div>
                        <div class="step1-right">
                            <img class="step-img" src="Images/Page-6-Img-1.png">
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="step2">
                        <div class="step2-left">
                            <img class="step-img" src="Images/Page-6-Img-2.png">
                        </div>
                        <div class="step2-right">
                            <p class="how-it-works-services-title">Get service requests</p>
                            <p class="how-it-works-services-content">You will get service requests from customes depend on service area and profile.</p>
                        </div>
                        
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="step3">
                        <div class="step3-left">
                            <p class="how-it-works-services-title">Complete service</p>
                            <p class="how-it-works-services-content">Accept service requests from your customers and just complete your work.</p>
                        </div>
                        <div class="step3-right">
                            <img class="step-img" src="Images/Page-6-Img-3.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How-it-works-Steps Ends -->

    </div>
</section>



<a href="#top" class="to-top">
    <img src="Images/forma-111.png">
</a>

<?php include 'include/comman_footer.php' ?>

<script>
    $(function () {
        const toTop = document.querySelector(".to-top");

        window.addEventListener("scroll", () => {
            if(window.pageYOffset > 300) 
            {
                toTop.classList.add("active");
            }
            else
            {
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