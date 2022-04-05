<!-- Navbar -->
<section class="header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md fixed-top">
          <a class="navbar-brand" href="Home.php"><img class="logo" src="Images/Logo_Helperland.png"></a>
          <div class="center-icon justify-content" >
            <a href="#" ><img src="Images/notification_logo.png"  style=" border-left: 1px solid white;border-right: 1px solid white;padding-left: 10px;padding-right: 10px;"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item round">
                    <a class="nav-link link1 text-white " href="Book-now.php">Book Now</a>
                  </li>
                <li class="nav-item r1">
                  <a class="nav-link text-white" href="Price.php">Prices & Services</a>
                </li>
                <li class="nav-item r1" >
                  <a class="nav-link text-white" href="Warrenty.php">Warrenty</a>
                </li>
                <li class="nav-item r1">
                  <a class="nav-link text-white"  href="#">Blog</a>
                </li>
                <li class="nav-item r1">
                  <a class="nav-link text-white active" href="">Contact</a>
                </li>
                <li class="nav-item vertical-line remove">
                    <a href="#" >
                        <img class="dropdown-toggle" data-toggle="dropdown" src="Images/notification_logo.png" alt="">
                    </a>
                </li>
                <li class="nav-item remove">
                    <div class="dropdown show">
                        <a class="dropdown-toggle" href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="Images/user_logo.png" alt=""><i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <h5 class="dropdown-header">Welcome,<p class="uname"> <b><?php echo $_SESSION['uName']; ?></b> </p></h5>
                            <hr>
                            <a class="dropdown-item" href="Customer.php" onclick="openMyDashboard()">My Dashboard</a>
                            <a class="dropdown-item" href="#" onclick="openMySetting()">My Setting</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
          </div>
        </nav>
    </div>
</section>