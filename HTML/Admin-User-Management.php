<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style4.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    
    <title>Admin | User Management</title>
</head>
<body style="height: 100% !important;  background-color: #f9f9f9 !important;">

<!-- Navbar -->
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


<!-- Sidebar -->
<div class="sidebar">
  <a href="Admin-Service-Request.php" >Service Requests</a>
  <a href="Admin-User-Management.php" class="active">User Management</a>
</div>

<div class="content">
  <div class="text">
    <div class="User">
      <p class="head">User Management<button class="btn right"> + Add New User</button></p>
    </div>

    <!-- Filters -->
    <div class="filter">

      
        <div class="d-flex">

          <div class="form-group dropdown1">                
            <select class="form-control select">
              <option value="" hidden>User Name</option>
                <option value="Service" >Admin</option>
                <option value="Contact">Customer</option>
                <option value="Inquiry">Service Provider</option>
              </select>
          </div>
          <div class="form-group">                
            <select class="form-control select1">
              <option value="" hidden>User Type</option>
                <option value="Admin" >Admin</option>
                <option value="Customer">Customer</option>
                <option value="Service">Service Provider</option>
              </select>
          </div>
          <div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">+91</div>
              </div>
                <input class="form-control" type="tel" id="MobileNo" name="MobileNo" placeholder="Mobile Number">
            </div>
        </div>
        <div class="form-group">
          <input class="form-control" type="text" placeholder="Zipcode">
        </div>
          <button type="button" class="btn btn3">Search</button>
          <button type="submit" class="btn btn4">Clear</button>
      
        </div>
      </form>
    </div>
    
    

    <!-- TABLE -->
    <table id="UserDetails" class="table" style="width:100%">
      <thead>
        <tr>
            <th>User Name</th>
            <th>Role</th>
            <th>Date of Registration</th>
            <th>User Type</th>
            <th>Phone</th>
            <th>Postal Code</th>
            <th style="text-align: center;">User Status</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
          
          <tr>
              <td>Michael Silva</td>
              <td></td>
              <td style="text-align: left;"> <img src="Images/calendar2.png" alt="" srcset=""> 2012/11/27</td>
              <td>Customer</td>
              <td>9624527786</td>
              <td >362002</td>
              <td style="text-align: center;"><button style="font-size: 13px; text-align: center; width: 63px; border: 1px solid rgb(139, 247, 39); background-color: rgb(139, 247, 39); color: white;">Active</button></td>
              <td style="text-align: left;">
                <div class="dropout">
                  <button class="more">
                  <span></span>
                  <span></span>
                  <span></span>
                  </button>
                  <ul>
                    <li><a class="btn btn-sm ACTIVEbtn"> Active </a></li>
                    <li><a class="btn btn-sm InACTIVEbtn"> Inactive </a></li>
                  </ul>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
<script>
$(document).ready(function () {
  
  $('.ACTIVEbtn').click(function (e) { 
   console.log("active btn clicked");
    
  });

});



</script>
    <p style="color: #4d4d4d9a !important; font-size: 14px; margin-top: 0px !important;">©2018 Helperland. All rights reserved.</p>
  </div>
</div> 


<script>

document.querySelector('table').onclick = ({
  target
  }) => {
  if (!target.classList.contains('more')) return
  document.querySelectorAll('.dropout.active').forEach(
    (d) => d !== target.parentElement && d.classList.remove('active')
  )
  target.parentElement.classList.toggle('active')
}

  $(document).ready(function() {
    $('#UserDetails').DataTable();
  } );
</script>
</body>
</html>