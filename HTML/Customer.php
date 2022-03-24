<?php
session_start();

if(!isset($_SESSION['uName'])){
  header("Location: Home.php");

}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Helperland | Customer Service History</title>
  <?php include('include/links.php'); ?>
  <link rel="stylesheet" type="text/css" href="CSS/CustCommanNav.css">
  <link rel="stylesheet" type="text/css" href="CSS/style31.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="main.js"></script>
  <link rel="stylesheet" type="text/css" href="NavCSS/CustCommanNav.css">
  
</head>
<body style="height: auto;">

<!-- Navbar -->
<?php include('Navbar/CustCommanNav.php'); ?>


<div class="container-fluid welcome">
  <p class="head-title">Welcome, <b><?php echo $_SESSION['uID']; echo $_SESSION['uName'];?></b></p>
</div>


<div class="container-fluid">
  <div class="content">

    <div class="leftPart">
      <div class="sidebar">
        <a href="#" id="side1" class="activeSidebar" onclick="dashboard()">Dashboard</a>
        <a href="#" id="side2" class="" onclick="Service_History()">Service History</a>
        <a href="#" id="side3" class="" onclick="Service_Schedule()">Service Schedule</a>
        <a href="#" id="side4" class="" onclick="Favourite_Pros()">Favourite Pros</a>
        <a href="#" id="side5" class="" onclick="Invoices()">Invoices</a>
        <a href="#" id="side6" class="" onclick="Notifications()">Notifications</a>
      </div>
    </div>

    <div class="rightPart">
      <div class="dashboard" id="tab1_Dashboard">
          <div class="tbl-left">
            <p>Current Service Requests</p>
          </div>
          <div class="tbl-right">
            <a href="Book-Now.php" class="btn btn-add-new">Add New Service Request</a>
          </div>
        

        <table id="example" class="table" style="width:80%">
          <thead>
              <tr>
                  <th style="text-align: center;">Service Id</th>
                  <th>Service Date</th>
                  <th>Service Provider</th>
                  <th>Payment</th>
                  <th style="text-align: center;">Actions</th>
                </tr>
                
          </thead>
          <tbody>

          <!-- Reschedule Modal-->
          <section class="Res">
            <div class="modal fade" id="Reschedule">
              <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h4 class="modal-title">Reschedule Service Request</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
        
                  <!-- Modal body -->
                  <div class="modal-body">
                    <p class="Delet-modal-text">Select New Date & Time</p>
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <input class="form-control form-check-inline date" name="ServiceDate" id="datepicker" type="date" required>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <select class="form-control" onclick="" id="time" name="ServiceStartTime" required>
                            <option value="8:00">8:00</option>
                            <option>8:30</option>
                            <option>9:00</option>
                            <option>9:30</option>
                            <option>10:00</option>
                            <option>10:30</option>
                            <option>11:00</option>
                            <option>11:30</option>
                            <option>12:00</option>
                            <option>12:30</option>
                            <option>13:00</option>
                            <option>13:30</option>
                            <option>14:00</option>
                            <option>14:30</option>
                            <option>15:00</option>
                            <option>15:30</option>
                            <option>16:00</option>
                            <option>16:30</option>
                            <option>17:00</option>
                            <option>17:30</option>
                            <option>18:00</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <button class="btn button-blue btn-reschedule" type="submit">Reschedule</button>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Cancel Request Modal-->
          <section class="CancelRes">
            <div class="modal fade" id="CancelRequest">
                <div class="modal-dialog modal-md modal-dialog-centered">
                  <div class="modal-content">
                    
                    <div class="modal-header">
                      <h4 class="modal-title">Cancel Service Request</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
          
                    <!-- Modal body -->
                    <div class="modal-body">
                      <p class="Delet-modal-text">Why you want to cancel the service request?</p>
                      <form class="was-validated" action="">
                      <div class="form-group ">
                        <textarea class="form-control" style="height: 100px;" type="text" id="message" name="message" placeholder="Message" required></textarea>
                      </div>
                      <button class="btn text-center button-blue1" type="submit">Cancel Now</button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
          </section>

          <!-- ServiceDetails Modal -->
          <section class="ServiceDetails">
          <div class="modal fade" id="ServiceDetail">
                <div class="modal-dialog modal-md modal-dialog-centered">
                  <div class="modal-content">
                    
                    <div class="modal-header">
                      <h4 class="modal-title">Service Details</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
          
                    <!-- Modal body -->
                    <div class="modal-body">
                      
                      <form class="was-validated" action="">
                      
                      </form>
                    </div>
                  </div>
                </div>
            </div>
          </section>



          <?php 
            include 'config.php';
            $id = $_SESSION['uID'];
            $selectquery = "SELECT `ServiceRequestId`, date_format(ServiceStartDate, '%d-%m-%Y') as `date`, date_format(ServiceStartDate, '%H:%i:%s') as `time`, `TotalCost`  FROM `servicerequest` ";
            // WHERE UserID='$id'
            $query =mysqli_query($conn,$selectquery);
            $num = mysqli_num_rows($query);
            
            while($res = mysqli_fetch_assoc($query))
            {
              // echo $res['TotalCost'] . "<br>";
              ?>
              
              <tr>
                <td style="cursor: pointer;" class="tr1" data-toggle="modal" data-target="#ServiceDetail"><?php echo $res['ServiceRequestId']; ?></td>
                <td style="text-align: left; cursor: pointer;" data-toggle="modal" data-target="#ServiceDetail"><span> <img src="Images/calendar2.png" alt="">   <?php echo $res['date']; ?></span> <p style="margin-bottom: 0px !important;"><span><img src="Images/clock.png" alt="">   <?php echo $res['time']; ?></span></p></td>
                <td></td>
                <td style="text-align: left;color: #146371;font-size: 25px;font-weight: bold;cursor: pointer;" data-toggle="modal" data-target="#ServiceDetail"><?php echo $res['TotalCost']; ?> €</td>
                <td>
                  <div class="d-flex justify-content-center">
                    <a class="btn btn-sm btn-res text-white" data-toggle="modal" data-target="#Reschedule">Reschedule</a>
                    <a class="btn btn-sm btn-cnl text-white" data-toggle="modal" data-target="#CancelRequest">cancel</a>
                  </div>
                </td>
            </tr>
            <?php
            }
          ?>
            
          
          
        

          </tbody>
       
      </table>
      </div>






<div class="ServiceHistory" id="tab2_ServiceHistory">
  <div class="dashboard" id="tab1_Dashboard">
    <div class="tbl-left">
      <p>Service History</p>
    </div>
    <div class="tbl-right">
      <a href="Book-Now.php" class="btn btn-add-new">Export</a>
    </div>     
  </div>

  <table id="example1" class="table" style="width:80%">
    <thead>
      <tr>
        <th style="text-align: center;">Service Id</th>
        <th>Service Date</th>
        <th>Service Provider</th>
        <th>Payment</th>
        <th style="text-align: center;">Status</th>
        <th style="text-align: center;">Rate SP</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="tr1"></td>
        <td style="text-align: left;"><span> <img src="Images/calendar2.png" alt="">   </span> <p style="margin-bottom: 0px !important;"><span><img src="Images/clock.png" alt="">   </span></p></td>
        <td></td>
        <td style="text-align: left;color: #146371;font-size: 25px;font-weight: bold;"> €</td>
        <td></td>
        <td>
          <div class="d-flex justify-content-center">
            <a class="btn btn-sm btn-res text-white" data-toggle="modal" data-target="#RateSP">Rate SP</a>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>

      <div class="mySettings" id="tab_mySettings" >
        <div class="tabs">
          <!-- onmouseover="hover1()" onmouseout="normal1()" -->
          <div class="tab activeTAB" id="tb1" onclick="tab1_show()" >
            <a href="#" class="tabStyle"><span id="tab1head">My Details</span> <span id="tab1icon"><i class="fa-solid fa-address-card"></i></span></a>
          </div>
          <div class="tab " id="tb2"  onclick="tab2_show()">
            <a href="#" class="tabStyle"><span id="tab2head">My Addresses</span> <span id="tab2icon"><i class="fa-solid fa-map-location-dot"></i></span></a>
          </div>
          <div class="tab" id="tb3"  onclick="tab3_show()">
            <a href="#" class="tabStyle"><span id="tab3head">Change Password</span> <span id="tab3icon"><i class="fa-solid fa-key"></i></span></a>
          </div>
        </div>

        <div class="myDetails" id="tab_body1" >
          
          <form action="">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="form-group">
                  <label class="lable-text" for="">First name</label>
                  <input class="form-control" type="text" id="fname" name="firstname" placeholder="First Name">
                 </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="form-group">
                  <label class="lable-text" for="">Last name</label>
                  <input class="form-control" type="text" id="lname" name="lastname" placeholder="Last Name">
                 </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="form-group">
                  <label class="lable-text" for="">E-mail address</label>
                  <input class="form-control" type="email" id="email" name="email" placeholder="Email address">
                </div>
              </div>
            </div>

            <div class="row d-flex">
              <div class="col-lg-4 col-md-6">
                <div class="form-group text-pad-top">
                  <label class="lable-text" for="">Mobile number</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">+91</div>
                    </div>
                    <input class="form-control" type="tel" id="MobileNo" name="MobileNo" placeholder="Mobile Number" minlength="10" maxlength="10">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="form-group">
                  <label class="lable-text" for="">Date of Birth:</label>
                  <input class="form-control form-check-inline date" name="DoB" id="datepicker" type="date" >
                 </div>
              </div>
            </div>

            <hr>
            <div class="row">
              
              <div class="col-lg-4">
                <label class="lable-text" for="">My Preferred Language</label>
                <div class="form-group">
                  <select class="form-control" name="YoB">
                    <option value="" hidden>Choose</option>
                    <option value=''>English</option>
                    <option value=''>Hindi</option>
                    <option value=''>Gujarati</option>
                  </select>
                </div>
              </div>
            </div>
              <button class="btn button-blue">Save</button>
          </form>
        </div>




        <div class="myAddress" id="tab_body2">
          <div id="record_table">

          </div>
          <button type="submit" class="btn button-blue" data-toggle="modal" data-target="#addNew">Add New Address</button>
            
          <!-- Add New Address Modal Starts -->
            <div class="modal fade" id="addNew">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h4 class="modal-title">Add New Address</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
        
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="newAdd" id="newAdd">
                      <form id="" action="">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="lable-text">Street Name</label>
                              <input class="form-control" type="text" id="streetName" name="streetName" placeholder="Street Name" required>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="lable-text">House Number</label>
                              <input class="form-control" type="text" id="houseNo" name="houseNo" placeholder="House No." required>
                            </div>
                          </div>
                        </div>
        
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="lable-text">Postal Code</label>
                              <input class="form-control" type="text" id="postalCode" name="postalCode" >
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="lable-text">City</label>
                              <input class="form-control" type="text" id="city" name="city" required>
                            </div>
                          </div>
                        </div>
                  
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group text-pad-top">
                              <div class="input-group ">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">+91</div>
                                </div>
                                <input class="form-control" type="tel" id="MobileNo" name="mobileNo" maxlength="10" placeholder="Mobile Number" required>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-center">
                          <button class="btn button-blue1" onclick="addrecord()">Add</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- Add New Address Modal Ends -->
          
            <a data-toggle="tooltip" data-placement="bottom" title="Edit">
              <i class="fas fa-edit" data-toggle="modal" data-target="#EditaddNew"></i>
            </a>
            <!-- Edit-New Address Modal Starts -->
            <div class="modal fade" id="EditaddNew">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Address</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
        
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="newAdd" id="newAdd">
                      <form id="" action="">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="lable-text">Street Name</label>
                              <input class="form-control" type="text" id="streetName" name="streetName" placeholder="Street Name" required>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="lable-text">House Number</label>
                              <input class="form-control" type="text" id="houseNo" name="houseNo" placeholder="House No." required>
                            </div>
                          </div>
                        </div>
        
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="lable-text">Postal Code</label>
                              <input class="form-control" type="text" id="postalCode" name="postalCode" readonly>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="lable-text">City</label>
                              <input class="form-control" type="text" id="city" name="city" required>
                            </div>
                          </div>
                        </div>
                  
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group text-pad-top">
                              <div class="input-group ">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">+91</div>
                                </div>
                                <input class="form-control" type="tel" id="MobileNo" name="mobileNo" maxlength="10" placeholder="Mobile Number" required>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-center">
                          <button class="btn button-blue1" onclick="">Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Edit-New Address Modal Ends -->

            <a data-toggle="tooltip" data-placement="bottom" title="Delete">
              <i class="fa-solid fa-trash-can" data-toggle="modal" data-target="#DeleteaddNew"></i>
            </a>
            <!-- Delete Address Modal Starts -->
            <div class="modal fade" id="DeleteaddNew">
              <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h4 class="modal-title">Delete Address</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
        
                  <!-- Modal body -->
                  <div class="modal-body">
                    <p class="Delet-modal-text">Are you sure you want to delete this address?</p>
                    <button class="btn button-blue1" type="submit">Delete</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Delete Address Modal Ends -->


            
            <a href="" data-toggle="modal" data-target="#WarningModal">Warning</a>
            <!-- Warning Address Modal Starts -->
            <div class="modal fade" id="WarningModal">
              <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h4 class="modal-title">Warning</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
        
                  <!-- Modal body -->
                  <div class="modal-body">
                    <p class="warning-modal-text">To delete this address kindly change your default address to another address.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Warning Address Modal Starts -->




          </div>
        <div class="ChangePass" id="tab_body3" >
          <form action="">
            <div class="col-lg-4">
              <div class="form-group">
                <label class="lable-text" for="">Old Password</label>
                <input class="form-control" type="text" id="oldPass" name="oldPass" placeholder="Old Password">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label class="lable-text" for="">New Password</label>
                <input class="form-control" type="text" id="newPass" name="newPass" placeholder="New Password">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label class="lable-text" for="">Confirm Password</label>
                <input class="form-control" type="text" id="finalPass" name="finalPass" placeholder="Confirm Password">
              </div>
            </div>
            <div class="col-lg-2">
              <button class="btn button-blue">Update Password</button>
            </div>
          </form>


        </div>

      </div>
      
    </div>

  </div> 
</div>


  

<!-- <div class="container modal-menu">
  
  <div class="modal fade" id="collapsiblemodal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">

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
</div> -->





 <!-- <div class="container-fluid"> 
  <div class=" d-flex">
    <div class="">
      <div class="sidebar">
        <a href="#home">Dashboard</a>
        <a class="active" href="#">Service History</a>
        <a href="#">Service Schedule</a>
        <a href="#">Favourite Pros</a>
        <a href="#">Invoices</a>
        <a href="#">Notifications</a>
      </div>
    </div>

    <div  class=" table-responsive">
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
</div>  -->










<?php include 'include/comman_footer.php' ?>

<script>

function readRecord(){
  var readrecord = "readrecord";
  $.ajax({
    url:"crudCustomerAddress.php",
    type:'get',
    data:{ readrecord : readrecord},
    success:function(data,status){
      
      $('#record_table').html(data);
    }



  });
}


function addrecord(){
  
  var streetName = $('#streetName').val();
  var houseNo = $('#houseNo').val();
  var postalCode = $('#postalCode').val();
  var city = $('#city').val();
  var MobileNo = $('#MobileNo').val();
  
  $.ajax({
    url:"crudCustomerAddress.php",
    type:'post',
    data:{streetName : streetName,
          houseNo: houseNo,
          postalCode: postalCode,
          city: city,
          MobileNo: MobileNo
        },
        success:function(data,status){
          console.log(data);
          // readRecord();
        }
  });
}
</script>


<script>
  $(document).ready(function() {
  $('#example').DataTable();
  $('#example1').DataTable();
} );
</script>
</body>
</html>
