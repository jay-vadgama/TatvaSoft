<?php
session_start();

if(!isset($_SESSION['FirstName'])){
  header("Location: Home.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Customer-Service-History</title>
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-light w-100 ">
    <div class="container-fluid ">
        <a class="navbar-brand" href="HomePage.html">
            <img src="Images/logo1.png" alt="logo" style="width:74px; height: 54px;" >
          </a>
          <div class="center-icon justify-content" >
            <a href="#" ><img src="Images/notification_logo.png"  style="  border-left: 1px solid white;border-right: 1px solid white;padding-left: 10px;padding-right: 10px;"></a>
         </div>
      <button class="navbar-toggler modal-btn" data-toggle="modal" data-target="#collapsiblemodal">
        <span class="navbar-toggler-icon">
            <i class="fas fa-bars" style="color: white;font-size: 28px;"></i>
        </span>
    </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item Rounded-Rectangle">
            <a class="nav-link" aria-current="page" href="#">Book now</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Price.html">Prices & services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Warranty</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item vertical-line remove">
            <a href="#">
                <img src="Images/notification_logo.png" alt="">
            </a>
          </li>
          <li class="nav-item remove">
            <a href="logout.php">
                <img src="Images/user_logo.png" alt="">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container-fluid welcome">
<p class="head-title"> <?php echo "Welcome, " . $_SESSION['FirstName'];?></p>
</div>

<div class="container modal-menu">
  <!-- The Modal -->
  <div class="modal fade" id="collapsiblemodal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <div class="container">
                <div>
                  <h5 class="modal-title">Welcome</h5>
                </div>
                <div>
                  <p class="modal-title">User!</p>
                </div>
            </div>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
                      <a href="#" >Dashboard</a>
                      <a href="#">New Service Request</a>
                      <a href="#" class="active">Upcoming Service</a>
                      <a href="#">Service Schedule</a>
                      <a href="#">Service History</a>
                      <a href="#">My Rating</a>
                      <a href="#">Block Customer</a>
                      <a href="#">My Setting</a>
                      <a href="#"></a>
            </div>
        </div>

        <!-- Modal footer -->
        <div  class="modal-footer">
          <div class="container">
          <a href="#" >Prices & Services</a>
          <a href="#">Warranty</a>
          <a href="#">Blog</a>
          <a href="#">Content</a>
          </div>
        </div>
        <div  class="modal-footer">
          <div class="container" style="display: flex;margin: auto;justify-content: space-around;">
          <a href="#" ><img src="Images/fb.png"></a>
          <a href="#"><img src="Images/insta.png"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row d-flex">
    <div class="col-lg-3 ">
      <div class="sidebar">
        <a href="#home">Dashboard</a>
        <a class="active" href="#">Service History</a>
        <a href="#">Service Schedule</a>
        <a href="#">Favourite Pros</a>
        <a href="#">Invoices</a>
        <a href="#">Notifications</a>
      </div>
    </div>


    <div class="col-lg-9 table-responsive">
      <div class="left">
        <p> Service History </p>
      </div>
      <div class="right">
        <button class="btn btn-right">Export</button>
      </div>


      <table class="table table-hover ">
        <thead>
          <tr>
            <th>Service Details<img src="Images/sort.png" style="margin-left: 5px;"> </th>
            <th>Service Provider<img src="Images/sort.png" style="margin-left: 5px;"></th>
            <th style="text-align: center;">Payment<img src="Images/sort.png" style="margin-left: 5px;"></th>
            <th style="text-align: center;">Status<img src="Images/sort.png" style="margin-left: 5px;"></th>
            <th style="text-align: center;">Rate SP<img src="Images/sort.png" style="margin-left: 5px;"></th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td> <img src="Images/calendar.png"> 09/04/2018 <br> 12:00 - 18:00  </td>
          <td>
          <div class="row">
            <div class="col-md-3">
              <img src="./Images/cap.png" style=" border: 1px solid gray; border-radius: 50%; padding: 13px;">
            </div>
            <div class="col-md-6">
              <p class="text-table">Lyum Watson</p>
                <span>
                   <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png"> 5
                  </span>
                </div>
              </div>
          </td>
          <td style="text-align: center; color: #146371; font-size: 25px; font-weight: bold;">€20</td>
          <td style="text-align: center;"><button style="border: 1px solid rgb(139, 247, 39); background-color: rgb(139, 247, 39); color: white;">Completed</button></td>
          <td style="text-align: center;"> <button class="btn btn-rate">Rate SP</button> </td>
        </tr>

        <tr>
          <td> <img src="Images/calendar.png"> 09/04/2018 <br> 12:00 - 18:00  </td>
          <td>
          <div class="row">
            <div class="col-md-3">
              <img src="./Images/cap.png" style=" border: 1px solid gray; border-radius: 50%; padding: 13px;">
            </div>
            <div class="col-md-6">
              <p class="text-table">Lyum Watson</p>
                <span>
                   <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png"> 5
                  </span>
                </div>
              </div>
          </td>
          <td style="text-align: center; color: #146371; font-size: 25px; font-weight: bold;">€20</td>
          <td style="text-align: center;"><button style="border: 1px solid rgb(139, 247, 39); background-color: rgb(139, 247, 39); color: white;">Completed</button></td>
          <td style="text-align: center;"> <button class="btn btn-rate">Rate SP</button> </td>
        </tr>

        <tr>
          <td> <img src="Images/calendar.png"> 09/04/2018 <br> 12:00 - 18:00  </td>
          <td>
          <div class="row">
            <div class="col-md-3">
              <img src="./Images/cap.png" style=" border: 1px solid gray; border-radius: 50%; padding: 13px;">
            </div>
            <div class="col-md-6">
              <p class="text-table">Lyum Watson</p>
                <span>
                   <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png"> 5
                  </span>
                </div>
              </div>
          </td>
          <td style="text-align: center; color: #146371; font-size: 25px; font-weight: bold;">€20</td>
          <td style="text-align: center;"><button style="border: 1px solid rgb(139, 247, 39); background-color: rgb(139, 247, 39); color: white;">Completed</button></td>
          <td style="text-align: center;"> <button class="btn btn-rate">Rate SP</button> </td>
        </tr>

        <tr>
          <td> <img src="Images/calendar.png"> 09/04/2018 <br> 12:00 - 18:00  </td>
          <td>
          <div class="row">
            <div class="col-md-3">
              <img src="./Images/cap.png" style=" border: 1px solid gray; border-radius: 50%; padding: 13px;">
            </div>
            <div class="col-md-6">
              <p class="text-table">Lyum Watson</p>
                <span>
                   <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png"> 5
                  </span>
                </div>
              </div>
          </td>
          <td style="text-align: center; color: #146371; font-size: 25px; font-weight: bold;">€20</td>
          <td style="text-align: center;"><button style="border: 1px solid rgb(139, 247, 39); background-color: rgb(139, 247, 39); color: white;">Completed</button></td>
          <td style="text-align: center;"> <button class="btn btn-rate">Rate SP</button> </td>
        </tr>

        <tr>
          <td> <img src="Images/calendar.png"> 09/04/2018 <br> 12:00 - 18:00  </td>
          <td>
          <div class="row">
            <div class="col-md-3">
              <img src="./Images/cap.png" style=" border: 1px solid gray; border-radius: 50%; padding: 13px;">
            </div>
            <div class="col-md-6">
              <p class="text-table">Lyum Watson</p>
                <span>
                   <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png"> 5
                  </span>
                </div>
              </div>
          </td>
          <td style="text-align: center; color: #146371; font-size: 25px; font-weight: bold;">€20</td>
          <td style="text-align: center;"><button style="border: 1px solid rgb(139, 247, 39); background-color: rgb(139, 247, 39); color: white;">Completed</button></td>
          <td style="text-align: center;"> <button class="btn btn-rate">Rate SP</button> </td>
        </tr>


        <tr>
          <td> <img src="Images/calendar.png"> 09/04/2018 <br> 12:00 - 18:00  </td>
          <td>
          <div class="row">
            <div class="col-md-3">
              <img src="./Images/cap.png" style=" border: 1px solid gray; border-radius: 50%; padding: 13px;">
            </div>
            <div class="col-md-6">
              <p class="text-table">Lyum Watson</p>
                <span>
                   <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png"> 5
                  </span>
                </div>
              </div>
          </td>
          <td style="text-align: center; color: #146371; font-size: 25px; font-weight: bold;">€20</td>
          <td style="text-align: center;"><button style="border: 1px solid rgb(139, 247, 39); background-color: rgb(139, 247, 39); color: white;">Completed</button></td>
          <td style="text-align: center;"> <button class="btn btn-rate">Rate SP</button> </td>
        </tr>

        <tr>
          <td> <img src="Images/calendar.png"> 09/04/2018 <br> 12:00 - 18:00  </td>
          <td>
          <div class="row">
            <div class="col-md-3">
              <img src="./Images/cap.png" style=" border: 1px solid gray; border-radius: 50%; padding: 13px;">
            </div>
            <div class="col-md-6">
              <p class="text-table">Lyum Watson</p>
                <span>
                   <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png"> 5
                  </span>
                </div>
              </div>
          </td>
          <td style="text-align: center; color: #146371; font-size: 25px; font-weight: bold;">€20</td>
          <td style="text-align: center;"><button style="border: 1px solid rgb(139, 247, 39); background-color: rgb(139, 247, 39); color: white;">Completed</button></td>
          <td style="text-align: center;"> <button class="btn btn-rate">Rate SP</button> </td>
        </tr>

        <tr>
          <td> <img src="Images/calendar.png"> 09/04/2018 <br> 12:00 - 18:00  </td>
          <td>
          <div class="row">
            <div class="col-md-3">
              <img src="./Images/cap.png" style=" border: 1px solid gray; border-radius: 50%; padding: 13px;">
            </div>
            <div class="col-md-6">
              <p class="text-table">Lyum Watson</p>
                <span>
                   <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png">
                    <img src="./Images/star1.png"> 5
                  </span>
                </div>
              </div>
          </td>
          <td style="text-align: center; color: #146371; font-size: 25px; font-weight: bold;">€20</td>
          <td style="text-align: center;"><button style="border: 1px solid rgb(139, 247, 39); background-color: rgb(139, 247, 39); color: white;">Completed</button></td>
          <td style="text-align: center;"> <button class="btn btn-rate">Rate SP</button> </td>
        </tr>






</tbody>
</table>
</div>

</div>
</div>


<div class="container-fluid" style=" background-color: black;padding-top: 10px; margin-bottom: 0px;">
<div class="row">
  <div class="col-sm-3" style="display: flex;justify-content: center;align-items: center;" >
      <a href=#><img src="Images/logo1.png" style="width: 120px;height: 92px;"></a>
  </div>
  <div class="col-sm-6" style="text-decoration: none ;text-align: center;display: flex;justify-content: center;align-items: center;">
      <p style="word-spacing: 15px;color: #f1f1f1;">

          <a href="#" style="text-decoration: none ;">HOME</a>
          <a href="#" style="text-decoration: none ;">ABOUT</a>
          <a href="#" style="text-decoration: none ;">TESTIMONIALS</a>
          <a href="#" style="text-decoration: none ;">FAQS</a>
          <a href="#" style="text-decoration: none ;">INSURANCE</a>
          <a href="#" style="text-decoration: none ;">POLICY</a>
          <a href="#" style="text-decoration: none ;">IMPRESSUM</a>

      </p>
  </div>
  <div class="col-sm-3" style=" background-color: black;display: flex;justify-content: center;align-items: center;">

          <a href=#><img src="Images/fb.png" style="padding-right: 15px;"></a>
          <a href=#><img src="Images/insta.png"></a>
  </div>
</div>
<div style="text-align: center;display: flex;justify-content: center;align-items: center;color: #9ba0a3;">
  <hr style="border: #424242 1px solid;text-align: center;width: 1150px;">
</div>

<div style="text-align: center;display: flex;justify-content: center;align-items: center;color: #9ba0a3;">
  <p>©2018 Helperland. All rights reserved. <a href=# style="color: #9ba0a3;">Terms and Conditions</a> | <a href=# style="color: #9ba0a3;">Privacy Policy</a></p>
</div>
</div>



</body>
</html>
