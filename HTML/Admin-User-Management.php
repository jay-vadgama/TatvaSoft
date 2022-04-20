<?php

session_start();
if(!isset($_SESSION['uName'])){
  header("Location: Home.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSS/style4.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Datatable Scripts -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    
  <title>Admin | User Management</title>
  <link rel = "icon" href = "Images/logo1.png" type = "image/x-icon">
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
            <p style="display: inline;"><?php echo $_SESSION['uName']; ?></p>
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
        <form id="FormFilter">
          <div class="row">
            <div class="col-lg-3">
              <input class="form-control" type="text" onkeyup="serchcol1(this.value)" placeholder="User Name">
            </div>
            <div class="col-lg-3">
              <input type="date" class="form-control" onchange="serchcol2(this.value)" placeholder="From Date">
            </div>
            <div class="col-lg-3">              
              <select class="form-control select1" onchange="serchcol3(this.value)">
                <option value="" hidden>User Type</option>
                <option value="Admin" >Admin</option>
                <option value="Customer">Customer</option>
                <option value="Service">Service Provider</option>
              </select>
            </div>
            <div class="col-lg-3">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">+91</div>
                </div>
                  <input class="form-control" type="tel" onkeyup="serchcol4(this.value)" id="MobileNo" name="MobileNo" placeholder="Mobile Number">
              </div>
            </div>
          </div>
          <div style="margin-top: 20px;">
            <div class="row">
              <div class="col-lg-3 btnclassdflex">
                <input class="form-control" type="text" onkeyup="serchcol5(this.value)" placeholder="Postalcode">
              </div>
              <div class="col-lg-3 btnclassdflex">                
                <select class="form-control select1" onchange="serchcol6(this.value)">
                  <option value="" hidden>User Status</option>
                  <option value="Active" >Active</option>
                  <option value="Inactive">Inactive</option>
                </select>
              </div>
              <div class="col-lg-3 btnclassdflex">
                <button type="button" class="btn btnserchFilter">Search</button>
                <button type="submit" class="btn btnClearFilter">Clear</button>
              </div>
            </div>
          </div>
        </form>
      </div>
   
    
    

    <!-- TABLE -->
    <table id="UserDetails" class="table" style="width:100%">
      <thead>
        <tr>
            <th>User Name</th>
            <th>Date of Registration</th>
            <th>User Type</th>
            <th>Phone</th>
            <th style="text-align: center;">Postal Code</th>
            <th style="text-align: center;">User Status</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody id="UserTableBody">
        <!-- Daynamic data from AdminUserTable() function -->
      </tbody>
    </table>


    <p style="color: #4d4d4d9a !important; font-size: 14px; margin-top: 0px !important;">©2018 Helperland. All rights reserved.</p>
  </div>
</div> 

<script>
  $('.btnClearFilter').click(function (e) { 
    location.reload();
    // console.log("clear btn clicked");
  });
  var x = $('#UserDetails').DataTable();

  function serchcol1(val) {
    x.column(0).search(val).draw(); 
  }

  function serchcol2(val) {
    // alert(val);
    var dateAr = val.split('-');
    var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0];
    // alert(newDate);
    x.column(1).search(newDate).draw(); 
  }

  function serchcol3(val) {
    x.column(2).search(val).draw(); 
  }
  function serchcol4(val) {
    x.column(3).search(val).draw(); 
  }
  function serchcol5(val) {
    x.column(4).search(val).draw(); 
  }
  function serchcol6(val) {
    x.column(5).search(val).draw(); 
  }
  
</script>

<script>
  $(document).ready(function() {


  function AdminUserTable(){
  x = $('#UserDetails').DataTable();

  $.ajax({
      type: "get",
      url: "db/FetchAdminUserTable.php",
      success: function (response) {
        // console.log(response);

        const data = JSON.parse(response);
        console.log(data);
        
          for(let i=0; i<data.length; i++)
          {
          
            let UserType = ``;
            if(data[i].UserTypeId == '1' )
            {
              UserType =  `Customer`;            
            }else if(data[i].UserTypeId == '2')
            {
              UserType =  `Service Provider`;
            }

            let UserActiveStatus = ``;
            if(data[i].Status == '1')
            {
              UserActiveStatus = `<p class="UserActiveStatus">Active</p>`;
            }else if(data[i].Status == null || data[i].Status == 0)
            {
              UserActiveStatus  = `<p class="UserInactiveStatus">Inactive</p>`;
            }
            var counter = 1;
            const tr = $(`<tr>
                          <td>${data[i].FirstName +` `+ data[i].LastName}</td>
                          <td><img src="Images/calendar2.png" alt="" srcset=""> ${data[i].date}</td>
                          <td>${UserType}</td>
                          <td>${data[i].Mobile}</td>
                          <td style="text-align: center;">${data[i].ZipCode}</td>
                          <td style="text-align: center;">
                            <div class="d-flex  justify-content-center">
                              ${UserActiveStatus}
                            </div>                        
                          </td>
                          <td style="text-align: left;">
                            <div class="dropout">
                              <button class="more">
                              <span></span>
                              <span></span>
                              <span></span>
                              </button>
                              <ul>
                                <li class="hoverLI"><a data-sid="${data[i].UserId}" class="btn btn-sm ACTIVEbtn"> Active </a></li>
                                <li class="hoverLI"><a data-sid="${data[i].UserId}" class="btn btn-sm InACTIVEbtn"> Inactive </a></li>
                              </ul>
                            </div>
                          </td>
                        </tr>`);
            x.row.add(tr).draw();
          }
        }
      });
  }
AdminUserTable();


$("tbody").on("click", ".ACTIVEbtn" , function(){
    console.log("Active btn clicked");
  
    let rowId = $(this).attr("data-sid");
    // console.log(resId);

    $.ajax({
      type: "post",
      url: "db/UpdateUserStatusAdmin.php",
      data: {rowId: rowId},
      success: function (response) {
        if(response == 1){
          AdminUserTable();
          location.reload()
        }
        else{
          alert('Something Went Wrong!');
        }
      }
    });
    
  });
  
  $("tbody").on("click", ".InACTIVEbtn" , function(){
    console.log("Inctive btn clicked");
  
    let btnId = $(this).attr("data-sid");
    // console.log(resId);

    $.ajax({
      type: "post",
      url: "db/UpdateUserStatusAdmin.php",
      data: {btnId: btnId},
      success: function (response) {
        if(response == 1){
          AdminUserTable();
          location.reload();
        }
        else{
          alert('Something Went Wrong!');
        }
      }
    });
    
  });



});
      

 
  

  document.querySelector('table').onclick = ({
  target }) => {
  if (!target.classList.contains('more')) return
  document.querySelectorAll('.dropout.active').forEach(
    (d) => d !== target.parentElement && d.classList.remove('active')
  )
  target.parentElement.classList.toggle('active')
  }

</script>



</body>
</html>