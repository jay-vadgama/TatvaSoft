<?php

session_start();
if(!isset($_SESSION['uName']) && !isset($_SESSION['typeId'])){
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <!-- Datatable Scripts -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
 
  <title>Admin | Service Requests</title>
  <link rel = "icon" href = "Images/logo1.png" type = "image/x-icon">
</head>

<body style="height: 100% !important;  background-color: #f9f9f9 !important;">

<!-- NAVBAR -->
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

<!-- SideBar -->
<div class="sidebar">
  <a href="Admin-Service-Request.php" class="active">Service Requests</a>
  <a href="Admin-User-Management.php" >User Management</a>
</div>

<!-- Cancel-Address Modal Starts -->
<div class="modal fade" id="CancelService">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-header">
        <h4 class="modal-title">Cancel Service Request</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p class="text-dark" style="font-size: 20px; font-family:roboto;">Are you sure you want to Cancel this Service Request?</p>
        <button class="btn btn-danger modalCancelBTN" type="submit">Yes! Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- Reschedule Modal-->
<section class="Res">
  <div class="modal fade" id="ServiceReschedule">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
        
        <div class="modal-header">
          <h4 class="modal-title">Reschedule Service Request</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
          <form id="RescheduleForm" class="was-validated" method="POST">
            <div class="row">
              <div class="col-6">
                <label for="NewDateofService" class="text-dark">Date:</label>
                <input class="form-control form-check-inline date" name="ServiceDate" id="NewDateofService" type="date" required>
              </div>
              <div class="col-6">
                <label for="NewTimeforService" class="text-dark">Time:</label>
                <select class="form-control select1" id="NewTimeforService" name="ServiceStartTime" required>
                  <option value="" hidden>--</option>
                  <option>08:00</option>
                  <option>08:30</option>
                  <option>09:00</option>
                  <option>09:30</option>
                  <option>10:00</option>
                  <option>10:30</option>
                  <option>11:00</option>
                  <option>11:30</option>
                  <option>12:00</option>
                  <option>12:30</option>
                  <option>01:00</option>
                  <option>01:30</option>
                  <option>02:00</option>
                  <option>02:30</option>
                  <option>03:00</option>
                  <option>03:30</option>
                  <option>04:00</option>
                  <option>04:30</option>
                  <option>05:00</option>
                  <option>05:30</option>
                  <option>06:00</option>
                </select>
              </div>
            </div>
            <p class="text-dark" style="font-family:roboto;padding-top:15px;font-size:18px;font-weight:bold ;margin-bottom: 0px !important;">Update Address:</p>
            <hr>
            <div class="row">
              <div class="col-6">
                <label for="addLine1">Street Name:</label>
                <input type="text" class="form-control" id="addLine1" required>
              </div>
              <div class="col-6">
                <label for="addLine2">House No:</label>
                <input type="text" class="form-control" id="addLine2" required>
              </div>
            </div>
            <div class="row" style="padding-top: 10px;">
              <div class="col-6">
                <label for="postalcode">Postal Code:</label>
                <input type="text" class="form-control" id="postalcode" required>
              </div>
              <div class="col-6">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" required>
              </div>
            </div>
            <p class="text-dark" style="font-family:roboto;padding-top:15px;font-size:18px;font-weight:bold ;margin-bottom: 0px !important;">Why you want to Reschedule?</p>
            <hr>
            <textarea class="form-control" style="height: 80px;" type="text" id="ReasonTxt" name="message" placeholder="Message" required></textarea>
            <hr>
          <button class="btn btn-primary modalRescheduleBTN text-white" style="width: 100%;font-family:roboto;" type="submit">Reschedule</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>





<div class="content">
  <div class="text">
    <div class="User">
      <p class="head">Service Requests</p>
    </div>
    
    <!-- Filters -->
    <div class="filter1">
      <form id="SerchFilterForm">
        <div class="row">
          <div class="col-3">
            <input type="text" class="form-control" id="ServiceIDserch" onkeyup="serchcol1(this.value)" placeholder="Serch Service ID">
          </div>
          <div class="col-3">
            <input type="text" class="form-control" id="CustomerNameSerch" onkeyup="serchcol2(this.value)" placeholder="Serch Customer name">
          </div>
          <div class="col-3">
            <input type="text" class="form-control" id="SpNameSerch" onkeyup="serchcol3(this.value)" placeholder="Serch SP name">
          </div>
          <div class="col-3">
            <select class="form-control select1" onchange="serchcol4(this.value)">
              <option value="" hidden>Serch Status</option>
              <option value="New">New</option>
              <option value="Accepted">Accepted</option>
              <option value="Completed">Completed</option>
              <option value="Cancelled">Cancelled</option>
            </select>
          </div>
        </div>
        
        <div style="margin-top: 20px;">
          <div class="row">
            <div class="col-3">
              <input type="text" class="form-control" onkeyup="serchcol5(this.value)" id="AmountSerch" placeholder="Amount">
            </div>
            <div class="col-3">
              <input type="date" class="form-control" onchange="serchcol6(this.value)" placeholder="From Date">
            </div>
            <div class="col-3 btnclassdflex">
              <button type="submit" class="btn btnserchFilter">Search</button>
              <button type="reset" value="Reset" class="btn btnClearFilter">Clear</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    

    <!-- Table Service-Request -->
    <table id="ServiceRequestTable" class="table" style="width:100%">
      <thead>
        <tr>
          <th class="text-center">Service ID</th>
          <th>Service Date</th>
          <th >Customer Details</th>
          <th>Service Provider</th>
          <th style="text-align: center !important;">Amount</th>
          <th>Status</th>
          <th style="text-align: center !important;">Action</th>
        </tr>
      </thead>
      <tbody id="ServiceTableBody">
        
        <!-- Data Fetched from AdminServiceTable() Function-->

      </tbody>
    </table>

    <p style="color: #4d4d4d9a !important; font-size: 14px; margin-top: 0px !important;">©2018 Helperland. All rights reserved.</p>
  </div>
</div> 

<script>
  $('.btnClearFilter').click(function (e) { 
    location.reload();
    console.log("clear btn clicked");
  });
  var x = $('#ServiceRequestTable').DataTable();
  function serchcol1(val) {
    x.column(0).search(val).draw(); 
  }
  function serchcol2(val) {
    x.column(2).search(val).draw(); 
  }
  function serchcol3(val) {
    x.column(3).search(val).draw(); 
  }
  function serchcol4(val) {
    x.column(5).search(val).draw(); 
  }
  function serchcol5(val) {
    x.column(4).search(val).draw(); 
  }
  function serchcol6(val) {
    // alert(val);
    var dateAr = val.split('-');
    var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0];
    // alert(newDate);
    x.column(1).search(newDate).draw(); 
  }



</script>

<script>

  $(document).ready(function() {


  function AdminServiceTable(){
    
    x = $('#ServiceRequestTable').DataTable();

    $.ajax({
      type: "get",
      url: "db/FetchAdminServiceTable.php",
      dataType: 'text',
      success: function (response) {
        // console.log(response);

        
        let data = JSON.parse(response);
        console.log(data);
        
          for(let i=0; i<data.length; i++)
          {
            let profileImage = ``;
            if(data[i].SPprofile == 'male' && data[i].ServiceProviderId !== null){
              profileImage = `<img src="./Images/avatar-car.png" style=" width:58px; height:58px;border: 1px solid gray; border-radius: 50%; ">`;
            }else if(data[i].SPprofile == 'female' && data[i].ServiceProviderId !== null){
              profileImage = `<img src="./Images/avatar-female.png" style=" width:58px; height:58px;border: 1px solid gray; border-radius: 50%; ">`;
            }else if(data[i].SPprofile == 'hat' && data[i].ServiceProviderId !== null){
              profileImage = `<img src="./Images/avatar-hat.png" style=" width:58px; height:58px;border: 1px solid gray; border-radius: 50%; ">`;
            }else if(data[i].SPprofile == 'iron' && data[i].ServiceProviderId !== null){
              profileImage = `<img src="./Images/avatar-iron.png" style=" width:58px; height:58px;border: 1px solid gray; border-radius: 50%; ">`;
            }else if(data[i].SPprofile == 'ship' && data[i].ServiceProviderId !== null){
              profileImage = `<img src="./Images/avatar-ship.png" style=" width:58px; height:58px;border: 1px solid gray; border-radius: 50%; ">`;
            }else if(data[i].SPprofile == 'iron' && data[i].ServiceProviderId !== null ){
              profileImage = `<img src="./Images/avatar-iron.png" style=" width:58px; height:58px;border: 1px solid gray; border-radius: 50%; ">`;
            }else {
              profileImage = ``;
            }
          
            let spname = ``;
            if(data[i].ServiceProviderId !== null) {
              spname = data[i].SPname;
            }else{
              spname = ``;
            }
            
            let dropdown = ``;
            if(data[i].Status == 3){
              dropdown       = `<button class="more" disabled>
                                  <span></span>
                                  <span></span>
                                  <span></span>
                                </button>
                                <ul>
                                  <li class="hoverLI"><a data-sid="${data[i].ServiceRequestId}" data-toggle="modal" data-target="#ServiceReschedule" data-dismiss="modal" class="btn btn-sm "> Edit & Reschedule</a></li>
                                  <li class="hoverLI"><a data-sid="${data[i].ServiceRequestId}" data-toggle="modal" data-target="#CancelService" data-dismiss="modal" style="width:100%;" class="btn btn-sm CancelDROPbtn"> Cancel </a></li>
                                </ul>`;

            }else{
              dropdown       = `<button class="more" >
                                  <span></span>
                                  <span></span>
                                  <span></span>
                                </button>
                                <ul>
                                  <li class="hoverLI"><a data-sid="${data[i].ServiceRequestId}" data-toggle="modal" data-target="#ServiceReschedule" data-dismiss="modal" class="btn btn-sm EditDROPbtn"> Edit & Reschedule</a></li>
                                  <li class="hoverLI"><a data-sid="${data[i].ServiceRequestId}" data-toggle="modal" data-target="#CancelService" data-dismiss="modal" style="width:100%;" class="btn btn-sm CancelDROPbtn"> Cancel </a></li>
                                </ul>`;

            }
            let ServiceStatus = ``;
            if(data[i].Status == null)
            {
              ServiceStatus = `<p style='font-size: 13px; text-align: center !important; font-family: roboto;width: 75px;border: none; background-color: rgb(139, 247, 39); color: white; padding: 2px 0px; margin-bottom: 0px !important;'>New</p>`;
            }else if(data[i].Status == 1)
            {
              ServiceStatus  = `<p style='font-size: 13px; text-align: center !important; font-family: roboto;width: 75px;border: none; background-color: #ff9a02; color: white; padding: 2px 0px; margin-bottom: 0px !important;'>Accepted</p>`;
            }else if(data[i].Status == 2)
            {
              ServiceStatus  = `<p class="UserInactiveStatus">Cancelled</p>`;
            }else if(data[i].Status == 3)
            {
              ServiceStatus  = `<p style='font-size: 13px; text-align: center !important; font-family: roboto;width: 75px;border: none; background-color: #29aaeb; color: white; padding: 2px 0px; margin-bottom: 0px !important;'>Completed</p>`;
              
            }
            


            Date.prototype.addHours = function(h) {
            this.setTime(this.getTime() +
                         (h * 60 * 60 * 1000));
            return this;


            
            
            }

            let StartTime = data[i].time;
            let extraHour = data[i].ExtraHours;
            let ServiceHour = data[i].ServiceHours;
            let TotalDuration = parseFloat(extraHour) + parseFloat(ServiceHour); 
            
            var a = new Date(data[i].ServiceStartDate);
            a.addHours(TotalDuration);
            let EndTime = `${a.getHours()}:${a.getMinutes()}`;
           
            const tr = $(`<tr>
                            <td class="text-center">${data[i].ServiceRequestId}</td>
                            <td> <img src="Images/calendar2.png"> ${data[i].date} <br> <img src="Images/clock.png">  ${StartTime} - ${EndTime}</td>
                            <td>${data[i].FirstName} ${data[i].LastName}<br> <img src="Images/home.png"> ${data[i].AddressLine1}  ${data[i].AddressLine2}, ${data[i].City} ${data[i].PostalCode}</td>
                            <td>
                                <div class="row">
                                  <div class="col-md-4">
                                  
                                     ${profileImage}
                                  </div>
                                  <div class="col-md-8 d-flex " style="align-items: center;">
                                    <p class="text-table" style=" color: #646464 !important; font-family: roboto; margin-bottom: 0px !important;">${spname}</p>
                                      
                                      </div>
                                    </div>
                                </td>
                                <td class="tdcosttext">${data[i].TotalCost} €</td>
                            <td>
                              <div class="d-flex justify-content-center">
                                ${ServiceStatus}
                              </div>
                            </td>
                            <td>
                              <div class="dropout">
                                ${dropdown}
                              </div>
                            </td>
                          </tr>`);
            x.row.add(tr).draw();
          }
        }
      });
      
  }
AdminServiceTable();



$("tbody").on("click", ".EditDROPbtn" , function(){
    console.log("Edit dropdown btn clicked");
    let editId = $(this).attr("data-sid");
    console.log(editId);
    $('.modalRescheduleBTN').attr('data-sid', editId);

    $.ajax({
      url:"db/FetchRescheduleModalAdmin.php",
      method:'POST',
      data:{ getId : editId},
      success:function(data){
        data = JSON.parse(data);
        // console.log(data);
        
        let serviceDate = $('#NewDateofService').val(data.date);
        let servicetime = $('#NewTimeforService').val(data.time);;
        // console.log(servicetime);
        let streetName = $('#addLine1').val(data.AddressLine1);
        let houseNo = $('#addLine2').val(data.AddressLine2);
        let postalCode = $('#postalcode').val(data.PostalCode);
        let city = $('#city').val(data.City);
         
      }
    });
});

  $('#RescheduleForm').submit(function (e) { 
    e.preventDefault();
    console.log("Modal Reschdule BTN clicked!");
    let modalUpdateID = $('.modalRescheduleBTN')[0].getAttribute('data-sid');
    // alert(modalUpdateID);
    // console.log(modalUpdateID);
    let serviceDate = $('#NewDateofService').val();
    let servicetime = $('#NewTimeforService').val();;
    
    let streetName = $('#addLine1').val();
    let houseNo = $('#addLine2').val();
    let postalCode = $('#postalcode').val();
    let city = $('#city').val();
    let ReasonTxt = $('#ReasonTxt').val();
    console.log(modalUpdateID  , serviceDate , servicetime , streetName , houseNo , postalCode , city , ReasonTxt);
    
    $.ajax({
      type: "post",
      url: "db/UpdateEditServiceAdmin.php",
      data: { modalUpdateID : modalUpdateID,
              serviceDate : serviceDate, 
              servicetime : servicetime,
              streetName : streetName,
              houseNo : houseNo, 
              postalCode : postalCode, 
              city : city,
              ReasonTxt : ReasonTxt
            },
      success: function (response) {
        console.log(response);
        if(response == 1)
        {
          $('#ServiceReschedule').modal('toggle');
          AdminServiceTable();
          alert("Service Rescheduled Successfully!");
          location.reload();
        }
      }
    });



  });



$("tbody").on("click", ".CancelDROPbtn" , function(){
    console.log("Cancel dropdown btn clicked");
    let editId = $(this).attr("data-sid");
    console.log(editId);
    $('.modalCancelBTN').attr('data-sid', editId);
});


  $(".modalCancelBTN").click(function (e) { 
    console.log("Cancel modal btn clicked");
    let servicecancelId = $(this).attr("data-sid");
    // alert(servicecancelId);

    $.ajax({
      type: "post",
      url: "db/UpdateServiceStatusAdmin.php",
      data: {servicecancelId : servicecancelId},
      success: function (response) {
        // console.log(response);
        if(response == 1)
        {
          $('#CancelService').modal('toggle');
          AdminServiceTable();
          // alert("Service cancelled Successfully!");
          location.reload();

        }else{
          alert("Something went wrong!");
        }
      }
    });

  });

 
  // 

  $('#SerchFilterForm').submit(function (e) { 
    e.preventDefault();
    
  });



  document.querySelector('table').onclick = ({
  target }) => {
  if (!target.classList.contains('more')) return
  document.querySelectorAll('.dropout.active').forEach(
    (d) => d !== target.parentElement && d.classList.remove('active')
  )
  target.parentElement.classList.toggle('active')
  }

  });

</script>
</body>
</html>