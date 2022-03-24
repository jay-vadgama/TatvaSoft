<!-- Navbar Started -->
<section class="Header">
    <nav class="navbar navbar-expand-lg bgcolor fixed-top">
        <a class="navbar-brand" href="Home.php"><img class="logo" src="imges/Logo_Helperland.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color: white;font-size: 28px;"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item round" >
                    <a class="nav-link" href="Book-Now.php">Book a Cleaner</a>
                </li>
                <li class="nav-item r1">
                    <a class="nav-link" href="Price.php">Prices</a>
                </li>
                <li class="nav-item r2">
                    <a class="nav-link" href="Warrenty.php">Our Guarrantee</a>
                </li>
                <li class="nav-item r3">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item r4">
                    <a class="nav-link" href="Contact-Customer.php">Contact us</a>
                </li>
                <li class="nav-item vertical-line remove">
                    <a href="#" >
                        <img class="dropdown-toggle" data-toggle="dropdown" src="../Images/notification_logo.png" alt="">
                    </a>
                </li>
                <li class="nav-item remove">
                    <div class="dropdown show">
                        <a class="dropdown-toggle" href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../Images/user_logo.png" alt=""><i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <h5 class="dropdown-header">Welcome,<p class="uname"> <b>echo $_SESSION['uName'];</b> </p></h5>
                            <hr>
                            <a class="dropdown-item" href="#" onclick="openMyDashboard()">My Dashboard</a>
                            <a class="dropdown-item" href="#" onclick="openMySetting()">My Setting</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</section>
<!-- Navbar Ends -->


