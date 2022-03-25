<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin | Service Requests</title>
  <?php include('include/links.php'); ?>
  <link rel="stylesheet" type="text/css" href="CSS/style5.css">
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    
    
    
</head>
<body style="height: 100% !important;  background-color: #f9f9f9 !important;">


    <nav class="navbar navbar-expand-md navbar-default fixed-top">
        <a class="navbar-brand" href="HomePage.html">heperland</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                  <img src="Images/admin-user.png" alt="adminUser">
                  <p style="display: inline;"> Jay Vadgama </p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link img" data-toggle="tooltip" data-placement="bottom" title="Logout" href="logout.php"><img src="Images/logout.png" alt=""></a>
            </li>
          </ul>
        </div>
      </nav>


    <div class="sidebar">
      <a href="Admin-Service-Request.php" class="active">Service Requests</a>
      <a href="Admin-User-Management.php" >User Management</a>
    </div>

      <div class="content">
          <div class="text">
            <div class="User">
              <p class="head">Service Requests</p>
            </div>
            <!-- Filter Section - Start-->
            <div class="filter">

              <form action="">
                <div class="d-flex">
                  <div class="form-group">
                    <input type="text" class="form-control box1" id="exampleFormControlInput1" placeholder="Service ID">
                  </div>
                  <div class="form-group dropdown1">                
                    <select class="form-control select">
                      <option value="" hidden>Customer</option>
                        <option value="" ></option>
                        <option value=""></option>
                        <option value=""></option>
                      </select>
                  </div>
                  
                  <div class="form-group">                
                    <select class="form-control select">
                      <option value="" hidden>Service Provider</option>
                        <option value="Service" ></option>
                        <option value="Contact"></option>
                        <option value="Inquiry"></option>
                      </select>
                  </div>
                  
                   
                <!-- <div class="form-group">
                  <input class="date" type="date" id="birthday" name="birthday">
                </div> -->
                <div class="form-group">                
                  <select class="form-control select">
                    <option value="" hidden>Status</option>
                      <option value="New">New</option>
                      <option value="Pending">Pending</option>
                      <option value="Completed">Completed</option>
                      <option value="Cancelled">Cancelled</option>
                    </select>
                </div>

                <div class="form-group">
                  <input type="text" id="date1" class="form-control" placeholder="From Date">               
                </div>
                <div class="form-group">  
                  <input type="text" id="date2" class="form-control" placeholder="To Date">               
                </div>

                <button type="button" class="btn btn3">Search</button>
                <button type="submit" class="btn btn4">Clear</button>
              
                </div>
              </form>

            </div>
            <!-- Filter Section - End -->


            <table id="tbl" class="table" style="width:100%">
              <thead>
                  <tr>
                      <th>Service ID</th>
                      <th>Service Date</th>
                      <th >Customer Details</th>
                      <th>Service Provider</th>
                      <th>Status</th>
                      <th>Action</th>
                      
                  </tr>
              </thead>
              <tbody>
                 
                  <tr>
                      <td>323436</td>
                      <td> <img src="Images/calendar2.png"> 09/04/2018 <br> <img src="Images/clock.png"> 12:00 - 18:00  </td>
                      <td> David Bough <br> <img src="Images/home.png"> Musterstrabe 5,12345 Bonn </td>
                      <td>
                          <div class="row">
                            <div class="col-md-3">
                              <img src="./Images/cap.png" style=" border: 1px solid gray; border-radius: 50%; padding: 13px;"> 
                            </div>
                            <div class="col-md-6">
                              <p class="text-table" style="color: #646464 !important;">Lyum Watson</p>
                                <span>
                                   <img src="./Images/star1.png">
                                    <img src="./Images/star1.png">
                                    <img src="./Images/star1.png">
                                    <img src="./Images/star1.png">
                                    <img src="./Images/star1.png"> 
                                  </span>
                                </div>
                              </div>
                          </td>
                      <td><a style="font-size: 13px; text-align: center; width: 63px; border: 1px solid rgb(139, 247, 39); background-color: rgb(139, 247, 39); color: white;">New</a></td>
                      <td>
                        <div class="dropdown-container" tabindex="-1">
                          <div class="three-dots"></div>
                          <div class="dropdown">
                            <a href="#"><div>Delete</div></a>
                          </div>
                        </div>
                      </td>
                      
                  </tr>

                  

      <tr>
        <td>323436</td>
        <td> <img src="Images/calendar2.png"> 09/04/2018 <br> <img src="Images/clock.png"> 12:00 - 18:00  </td>
        <td> David Bough <br> <img src="Images/home.png"> Musterstrabe 5,12345 Bonn </td>
        <td>
            <div class="row">
              <div class="col-md-3">
                <img src="./Images/cap.png" style=" border: 1px solid gray; border-radius: 50%; padding: 13px;"> 
              </div>
              <div class="col-md-6">
                <p class="text-table" style="color: #646464 !important;">Lyum Watson</p>
                  <span>
                     <img src="./Images/star1.png">
                      <img src="./Images/star1.png">
                      <img src="./Images/star1.png">
                      <img src="./Images/star1.png">
                      <img src="./Images/star1.png"> 
                    </span>
                  </div>
                </div>
            </td>
        <td><a style="font-size: 13px; text-align: center; width: 63px; border: 1px solid rgb(139, 247, 39); background-color: rgb(139, 247, 39); color: white;">New</a></td>
        <td>
          <div class="dropdown-container" tabindex="-1">
            <div class="three-dots"></div>
            <div class="dropdown">
              <a href="#"><div>Delete</div></a>
            </div>
          </div>
        </td>
        
    </tr>
                </tbody>
           
          </table>

          <p style="color: #4d4d4d9a !important; font-size: 14px; margin-top: 0px !important;">©2018 Helperland. All rights reserved.</p>
          </div>
        </div> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function() {
    $('#tbl').DataTable();

    $('#date1').datepicker({
                    autoclose: true,
                    format: "dd/mm/yyyy"
                });
                $('#date2').datepicker({
                    autoclose: true,
                    format: "dd/mm/yyyy"
                });

  } );

</script>
</body>
</html>