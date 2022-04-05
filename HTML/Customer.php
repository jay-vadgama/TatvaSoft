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
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "icon" href = "Images/logo1.png" type = "image/x-icon">
  <link rel="shortcut icon" href="#">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  
  
  <link rel="stylesheet" type="text/css" href="NavCSS/CustCommanNav.css"> 
  <link rel="stylesheet" type="text/css" href="CSS/style31.css">
  
  <script src="JS/cust.js"></script>

</head>
<body style="height: auto;">

<!-- Navbar -->
<?php include('Navbar/CustCommanNav.php'); ?>

<div class="container-fluid welcome">
  <p class="head-title">Welcome, <b><?php echo $_SESSION['uID']; echo $_SESSION['uName'];?></b></p>
</div>

<div class="container-fluid">
  <div class="content">

  <!-- Sidebar -->
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

  <!-- ------------------ TAB 1 ------------------ -->
  <div class="dashboard" id="tab1_Dashboard">
    <div id="dashboardMSG"></div>
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
          <th style="text-align: left;">Service Provider</th>
          <th>Payment</th>
          <th style="text-align: center;">Actions</th>
        </tr>
      </thead>
      <tbody id="DashboardTableBody">

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
                  <form id="RescheduleForm" class="was-validated" method="POST">
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <input class="form-control form-check-inline date" name="ServiceDate" id="NewDateofService" type="date" required>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <select class="form-control" id="NewTimeforService" name="ServiceStartTime" required>
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
                  <button class="btn button-blue RescheduleBTN" type="submit">Reschedule</button>
                </form>
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
                    <form id="CancelModalForm" class="was-validated" method="POST">
                    <div class="form-group ">
                      <textarea class="form-control" style="height: 100px;" type="text" id="ReasonTxt" name="message" placeholder="Message" required></textarea>
                    </div>
                    <button class="btn text-center CancelBTN button-blue1" type="submit">Cancel Now</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </section>

        <!-- ServiceDetails Modal -->
        <section class="ServiceDetails">
          <div class="modal fade" id="ServiceDetailCust">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                
                <div class="modal-header">
                  <h4 class="modal-title">Service Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" id="SDModalBody">

                </div>
              </div>
            </div>
          </div>
        </section>  
        
      </tbody>
    </table>
  </div>

<script>
$(document).ready(function () {

  function DashboardTable(){
    $.ajax({
      type: "get",
      url: "db/FetchCustomersDashboardTable.php",
      success: function (res) {
        // console.log(res);
        const data = JSON.parse(res);
        // ${data[i].AddressId}
        console.log(data);

        let content = ``;
        Date.prototype.addHours = function(h) {
            this.setTime(this.getTime() +
                         (h * 60 * 60 * 1000));
            return this;
        }
        for(let i=0; i<data.length; i++){
          let StartTime = data[i].time;
          let extraHour = data[i].ExtraHours;
          let ServiceHour = data[i].ServiceHours;
          let TotalDuration = parseFloat(extraHour) + parseFloat(ServiceHour); 
          // console.log(TotalDuration);
          var a = new Date(data[i].ServiceStartDate);
          a.addHours(TotalDuration);
          let EndTime = `${a.getHours()}:${a.getMinutes()}`;
          
          let SPname = ``;
          if(data[i].FirstName != null ){
            SPname =  `${data[i].FirstName} ${data[i].LastName}`;            
          }
          let SPrate = ``;
          let Stars = ``;
          if(data[i].Ratings != '0.0' ){
            SPrate = data[i].Ratings ; 
            Stars =`<span>
                      <img src="Images/star1.png">
                      <img src="Images/star1.png">
                      <img src="Images/star1.png">
                      <img src="Images/star1.png">
                      <img src="Images/star1.png"> 
                    </span>`;           
          }
          let SPprofile = ``;
          if(data[i].UserProfilePicture != null ){
            SPprofile = `<img style="height: 50px; width: 50px;" src="Images/avatar-${data[i].UserProfilePicture}.png" >`;            
          }
          
          
          // console.log(EndTime);
          // ${    timeNew.addHours(4)}
          content +=  `<tr>
                        <td class="SDmodal" data-sid="${data[i].ServiceRequestId}" style="cursor: pointer;" > ${data[i].ServiceRequestId} </td>
                        <td class="SDmodal" data-sid="${data[i].ServiceRequestId}" style="text-align: left; cursor: pointer;">
                          <span> 
                            <img src="Images/calendar2.png" alt=""> ${data[i].date}
                          </span> 
                          <p style="margin-bottom: 0px !important;">
                            <span> <img src="Images/clock.png" alt=""> ${data[i].time} - ${EndTime}</span>
                          </p>
                        </td>       
                        <td style="text-align: left">
                          <div class="row">
                            <div class="col-md-3">
                              ${SPprofile}
                            </div>
                            <div class="col-md-6">
                              <p style="margin-bottom:0px;" >${SPname}</p>
                              ${Stars}
                              <p style="margin-bottom:0px;">${SPrate}</p>
                            </div>
                          </div>
                        </td>
                        <td class="SDmodal" data-sid="${data[i].ServiceRequestId}" style="text-align: left;color: #146371;font-size: 25px;font-weight: bold;cursor: pointer;" >${data[i].TotalCost} €</td>
                        <td>
                          <div class="d-flex justify-content-center">
                            <a class="btn btn-sm btn-res RescheduleBtnAction text-white" data-sid="${data[i].ServiceRequestId}" data-toggle="modal" data-target="#Reschedule">Reschedule</a>
                            <a class="btn btn-sm btn-cnl CancelBtnAction text-white" data-sid="${data[i].ServiceRequestId}" data-toggle="modal" data-target="#CancelRequest">cancel</a>
                          </div>
                        </td>
                      </tr>`;
        }
        $('#DashboardTableBody').html(content);
      }
    });
    
  }
  DashboardTable();

  // <p class="SDmodaldate">07/10/2021 <span>08:00 - 11:00</span></p>
  // <p class="SDmodalDuration">Duration :<span class="SDmodalDurationTxt"> 3 Hrs</span> </p>
  // <hr>
  // <p class="SDmodalDuration">Service Id:<span class="SDmodalDurationTxt"> 8845</span> </p>
  // <p class="SDmodalDuration">Extras :<span class="SDmodalDurationTxt"> Inside Fridge</span> </p>
  // <p class="SDmodalDuration">Net Amount:<span class="SDmodalPaymentTxt"> 54 €</span> </p>
  // <hr>
  // <p class="SDmodalDuration">Service Address:<span class="SDmodalDurationTxt"> 101, shivnagar, Ahmedabad, 362001</span> </p>
  // <p class="SDmodalDuration">Mobile :<span class="SDmodalDurationTxt"> cust 884648648</span> </p>
  // <p class="SDmodalDuration">Email :<span class="SDmodalDurationTxt"> cust 884648648</span> </p>
  // <hr>
  // <p class="SDmodalDuration">Comments</p>
  // <p class="SDmodalDurationTxt"><i class="fad fa-window-close closeIcon text-white"></i> I don't have pets at home.</p>
  // <p class="SDmodalDurationTxt"><i class="fas fa-check-square AgreeIcon "></i> I have pets at home.</p>
  // // <hr>
  // <button class="btn btn-res btn-AcceptServiceRequest text-white" data-dismiss="modal" data-toggle="modal" data-target="#Reschedule"> <i class="fas fa-redo-alt"></i> Reschedule</button>
  // <button class="btn btn-cnl btn-AcceptServiceRequest text-white" data-dismiss="modal" data-toggle="modal" data-target="#CancelRequest"> <i class="fas fa-times"></i> Cancel</button>
                  




  $("tbody").on("click", ".SDmodal" , function(){
    console.log("Service modal clicked");
    let rowId = $(this).attr("data-sid");
    // alert(rowId);
    console.log(rowId);

    $.ajax({
      type: "post",
      url: "db/FetchSDmodalCUST.php",
      data:{ RowId :rowId }, 
      success: function (res) {
        // console.log(res);
        data = JSON.parse(res);
        // alert(data);
        console.log(data);
        

        let modalData = ``;
        Date.prototype.addHours = function(h) {
            this.setTime(this.getTime() +
                         (h * 60 * 60 * 1000));
            return this;
        }
        if(res)
        {
          let StartTime = data[0].time;
          let extraHour = data[0].ExtraHours;
          let ServiceHour = data[0].ServiceHours;
          let TotalDuration = parseFloat(extraHour) + parseFloat(ServiceHour); 
          
          var a = new Date(data[0].ServiceStartDate);
          a.addHours(TotalDuration);
          let EndTime = `${a.getHours()}:${a.getMinutes()}`;

          let pet = data[0].HasPets;
          let petmsg = ``
          if(pet == 1){
            petmsg = `<p class="SDmodalDurationTxt"><i class="fas fa-check-square AgreeIcon "></i> I have pets at home.</p>`;
          }else{
            petmsg = `<p class="SDmodalDurationTxt"><i class="fad fa-window-close closeIcon text-white"></i> I don't have pets at home.</p>`;
          } 
           modalData += ` <p class="SDmodaldate"> ${data[0].date}   <span>${StartTime} - ${EndTime}</span></p>
                          <p class="SDmodalDuration">Duration :<span class="SDmodalDurationTxt"> ${TotalDuration} Hrs</span> </p>
                          <hr>
                          <p class="SDmodalDuration">Service Id:<span class="SDmodalDurationTxt"> ${data[0].ServiceRequestId}</span> </p>
                          <p class="SDmodalDuration">Extras :<span class="SDmodalDurationTxt"> Inside Fridge</span> </p>
                          <p class="SDmodalDuration">Total Payment:<span class="SDmodalPaymentTxt"> ${data[0].TotalCost} €</span> </p>
                          <hr>
                          <p class="SDmodalDuration">Customer Name:<span class="SDmodalDurationTxt"> ${data[0].FirstName} ${data[0].LastName}</span> </p>
                          <p class="SDmodalDuration">Service Address:<span class="SDmodalDurationTxt"> ${data[0].AddressLine2}, ${data[0].AddressLine1}, ${data[0].City}, ${data[0].PostalCode}</span> </p>
                          <p class="SDmodalDuration">Mobile :<span class="SDmodalDurationTxt"> ${data[0].Mobile}</span> </p>
                          <hr>
                          <p class="SDmodalDuration">Comments</p>
                          ${petmsg}
                          <hr>
                          <button class="btn btn-res btn-AcceptServiceRequest text-white" data-dismiss="modal" data-toggle="modal" data-target="#Reschedule"> <i class="fas fa-redo-alt"></i> Reschedule</button>
                          <button class="btn btn-cnl btn-AcceptServiceRequest text-white" data-dismiss="modal" data-toggle="modal" data-target="#CancelRequest"> <i class="fas fa-times"></i> Cancel</button>
                          
                        `;
                        DashboardTable();

          
        }else {
          alert("Something went wrong!");
        }
          $('#SDModalBody').html(modalData);
          $('#ServiceDetailCust').modal('show');
      }
    
    });


  });


  $("tbody").on("click", ".RescheduleBtnAction" , function(){
    console.log("RescheduleBtnAction clicked");
  
    let resId = $(this).attr("data-sid");
    // console.log(resId);
    $('.RescheduleBTN').attr('data-sid', resId);
  });
  
  $('#RescheduleForm').submit(function (e) { 
    e.preventDefault();
    console.log("Modal Reschdule BTN clicked!");
    let newResId = $('.RescheduleBTN')[0].getAttribute('data-sid');
    console.log(newResId);
    let newDate = $('#NewDateofService').val();
    let newTime = $('#NewTimeforService').val();
    // console.log(newDate + newTime);
    $.ajax({
    type: "post",
    url: "db/UpdateServiceDateTime.php",
    data: { newResId: newResId,
            newDate: newDate,
            newTime: newTime
          },
    success: function (response) {
      // console.log(response);
      if(response == 1)
      {
        $('#Reschedule').modal('toggle');
        msg = '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Hurray!</strong> New Date and Time are Successfully Updated.</div>';
        DashboardTable();
      }
      else{
        msg = '<div class="alert alert-danger" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Opps!</strong>Something went wrong.</div>';
      }
      $('#dashboardMSG').html(msg);
      
      window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
          }, 4000);
      }
    });



  });
  

  $("tbody").on("click", ".CancelBtnAction" , function(){
    console.log("CancelBtnAction clicked");
    let cnlId = $(this).attr("data-sid");
    console.log(cnlId);
    // alert(cnlId);
    $('.CancelBTN').attr('data-sid', cnlId);
  });

  $('#CancelModalForm').submit(function (e) {
    e.preventDefault(); 
    console.log("Modal Cancel BTN clicked!");
    let newCnlId = $('.CancelBTN')[0].getAttribute('data-sid');
    // alert(newCnlId);
    let Reason = $('#ReasonTxt').val();
    
    $.ajax({
      type: "post",
      url: "db/UpdateStatusByCust.php",
      data: { newCnlId: newCnlId,
              Reason: Reason},
      success: function (response) {
        // console.log(response);
        if(response == 1)
        { 
          $('#CancelRequest').modal('toggle');
          msg = '<div class="alert alert-warning" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Alright!</strong> Service is successfully cancelled by you.</div>';
          DashboardTable();
        }else{
          msg = '<div class="alert alert-danger" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Opps!</strong> Something went wrong.</div>';
        }
        $('#dashboardMSG').html(msg);

        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
      }
    });

  });

});
  
</script>



<!-- Service History -->
<div class="ServiceHistory" id="tab2_ServiceHistory">
  <div class="tbl-left">
    <p>Service History</p>
  </div>
  <div class="tbl-right">
    <a href="Book-Now.php" class="btn btn-add-new">Export</a>
  </div>

  <table id="CUSTServiceHistoryTable" class="table" style="width:80%">
    <thead>
      <tr>
        <th style="text-align: center;">Service Id</th>
        <th>Service Date</th>
        <th >Service Provider</th>
        <th class="text-center">Payment</th>
        <th style="text-align: center;">Status</th>
        <th style="text-align: center;">Rate SP</th>
      </tr>
    </thead>
    <tbody id="CustServiceHistoryTableBody">
      
    </tbody>
  </table>
</div>

<script>
  $(document).ready(function () {
    
    function CustServiceHistoryTbl(){
    $.ajax({
      type: "get",
      url: "db/FetchCustServiceHistory.php",
      success: function (res) {
        // console.log(res);
        const data = JSON.parse(res);
        // ${data[i].AddressId}
        console.log(data);

        let content = ``;
        Date.prototype.addHours = function(h) {
            this.setTime(this.getTime() +
                         (h * 60 * 60 * 1000));
            return this;
        }
        for(let i=0; i<data.length; i++)
        {



          let StartTime = data[i].time;
          let extraHour = data[i].ExtraHours;
          let ServiceHour = data[i].ServiceHours;
          let TotalDuration = parseFloat(extraHour) + parseFloat(ServiceHour); 
          // console.log(TotalDuration);
          var a = new Date(data[i].ServiceStartDate);
          a.addHours(TotalDuration);
          let EndTime = `${a.getHours()}:${a.getMinutes()}`;
          // console.log(EndTime);

          let SPname = ``;
          if(data[i].FirstName != null ){
            SPname =  `${data[i].FirstName} ${data[i].LastName}`;            
          }

          let SPrate = ``;
          let Stars = ``;
          if(data[i].Ratings != '0.0' ){
            SPrate = data[i].Ratings; 
            Stars =`<span>
                      <img src="Images/star1.png">
                      <img src="Images/star1.png">
                      <img src="Images/star1.png">
                      <img src="Images/star1.png">
                      <img src="Images/star1.png"> 
                    </span>`;           
          }
          let SPprofile = ``;
          if(data[i].UserProfilePicture != null ){
            SPprofile = `<img style="height: 50px; width: 50px;" src="Images/avatar-${data[i].UserProfilePicture}.png" >`;            
          }
          let SPstatus = ``;
          let SPratebtn = ``;
          // status= 2 means Cancelled 
          if(data[i].Status == '2')
          {
            SPstatus = `<button style="border: 1px solid rgb(255, 65, 65); background-color: rgb(255, 65, 65); color: white;">Cancelled</button>`;
            SPratebtn = `<button disabled="disabled" class="btn btn-sm btn-res text-white" id="ratingBTN" data-toggle="modal" data-target="#RateSP">Rate SP</button>`;
          }else if(data[i].Status == '3')
          {
            SPstatus = `<button style="border: 1px solid rgb(139, 247, 39); background-color: rgb(139, 247, 39); color: white;">Completed</button>`;
            SPratebtn = `<button  class="btn btn-sm btn-res text-white" id="ratingBTN" data-toggle="modal" data-target="#RateSP">Rate SP</button>`;
          }else{
            SPratebtn = `<button disabled="disabled" class="btn btn-sm btn-res text-white" id="ratingBTN" data-toggle="modal" data-target="#RateSP">Rate SP</button>`;

          }
          
          
          content +=  `<tr>
                        <td style="text-align: center;" class="tr1"> ${data[i].ServiceRequestId} </td>
                        <td style="text-align: left; "><span> <img src="Images/calendar2.png" alt=""> ${data[i].date}</span> <p style="margin-bottom: 0px !important;"><span><img src="Images/clock.png" alt=""> ${data[i].time} - ${EndTime}</span></p></td>       
                        <td style="text-align: left">
                          <div class="row">
                            <div class="col-md-3">
                              ${SPprofile}
                            </div>
                            <div class="col-md-6">
                              <p style="margin-bottom:0px;" >${SPname}</p>
                              ${Stars}
                              <p style="margin-bottom:0px;">${SPrate}</p>
                            </div>
                          </div>
                        </td>
                        <td style="text-align: center;color: #146371;font-size: 25px;font-weight: bold;">${data[i].TotalCost} €</td>
                        
                        <td style="text-align: center;"> ${SPstatus}</td>

                        <td>
                          <div class="d-flex justify-content-center">
                            ${SPratebtn}
                          </div>
                        </td>
                      </tr>`;
        }
        $('#CustServiceHistoryTableBody').html(content);
      }
    });
    
  }
  CustServiceHistoryTbl();



  });
</script>
















<div class="mySettings" id="tab_mySettings" >
  <div class="tabs">
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

  <!-- My Setting Tab-1 -->
  <div class="myDetails" id="tab_body1" >
    <?php 
      include 'config.php';
      $id = $_SESSION['uID'];
      $selectDetailsSQL = "SELECT  `FirstName`, `LastName`, `Email`,`Mobile`, `DateOfBirth`, `LanguageId`  FROM `user` WHERE UserId='$id'";
      
      $ResQuery =mysqli_query($conn,$selectDetailsSQL);
      // print_r($ResQuery);
      $FetchRes = mysqli_fetch_assoc($ResQuery);
      // print_r($FetchRes);
      // echo $FetchRes['Email'];
      // echo $FetchRes['LanguageId'];
      // echo $FetchRes['DateOfBirth'];
    
      
    ?>
    <div id="#myDetailsMsg"></div>
    <form id="custDetailsForm" method="POST" action="">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="form-group">
            <label class="lable-text" for="">First name</label>
            <input class="form-control" type="text" value="<?php echo $FetchRes['FirstName']; ?>" id="fname" name="firstname" placeholder="First Name">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="form-group">
            <label class="lable-text" for="">Last name</label>
            <input class="form-control" type="text" id="lname" value="<?php echo $FetchRes['LastName']; ?>" name="lastname" placeholder="Last Name">
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="form-group">
            <label class="lable-text" for="">E-mail address</label>
            <input class="form-control" type="email" value="<?php echo $FetchRes['Email']; ?>" id="email" name="email" placeholder="Email address" readonly>
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
              <input class="form-control" type="tel" value="<?php echo $FetchRes['Mobile']; ?>" id="callno" name="MobileNo" placeholder="Mobile Number" minlength="10" maxlength="10">
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="form-group">
            <label class="lable-text" for="">Date of Birth:</label> 
            <input class="form-control form-check-inline date" value="<?php echo date('Y-m-d', strtotime($FetchRes['DateOfBirth'])); ?>" name="DoB" id="dateOfBirth" type="date" >
          </div>
        </div>
        
      </div>

      <hr>
      <div class="row">
        
        <div class="col-lg-4">
          <label class="lable-text">My Preferred Language</label>
          <div class="form-group">
            <select class="form-control"  id="language" name="language">
              <option value="" hidden>Choose</option>
              <option value='1' <?php if($FetchRes['LanguageId'] =="1") echo 'selected="selected"'; ?> >English</option>
              <option value='2' <?php if($FetchRes['LanguageId'] =="2") echo 'selected="selected"'; ?> >Hindi</option>
              <option value='3' <?php if($FetchRes['LanguageId'] =="3") echo 'selected="selected"'; ?>>Gujarati</option>
            </select>
          </div>
        </div>
      </div>
        <button class="btn button-blue">Save</button>
    </form>
  </div>

  <!-- My Setting Tab-2 -->
  <div class="myAddress" id="tab_body2">
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
              <form id="myForm">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="streetName" class="lable-text">Street Name</label>
                      <input class="form-control" type="text" id="streetName" name="streetName" placeholder="Street Name" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="houseNo" class="lable-text">House Number</label>
                      <input class="form-control" type="text" id="houseNo" name="houseNo" placeholder="House No." required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="postalCode" class="lable-text">Postal Code</label>
                      <input class="form-control" type="text" id="postalCode" name="postalCode" >
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="city" class="lable-text">City</label>
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
                        <input class="form-control" type="tel" id="Mobile" name="mobileNo" maxlength="10" placeholder="Mobile Number" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                  <button class="btn button-blue1" id="btnaddData" >Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Add New Address Modal Ends -->
    
    <!-- Update Address Modal Starts -->
    <div class="modal fade" id="UpdateNew">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Address</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            <div class="newAdd" id="newAdd">
              <form id="myFormUpdate">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="streetName" class="lable-text">Street Name</label>
                      <input class="form-control" type="text" id="streetName1" name="streetName" placeholder="Street Name" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="houseNo" class="lable-text">House Number</label>
                      <input class="form-control" type="text" id="houseNo1" name="houseNo" placeholder="House No." required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="postalCode" class="lable-text">Postal Code</label>
                      <input class="form-control" type="text" id="postalCode1" name="postalCode" >
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="city" class="lable-text">City</label>
                      <input class="form-control" type="text" id="city1" name="city" required>
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
                        <input class="form-control" type="tel" id="MobileNo1" name="mobileNo" maxlength="10" placeholder="Mobile Number" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                  <button class="btn button-blue1 btnUpdateData" >Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Update Address Modal Ends -->

    <div > 
      <div id="msg"></div>
        <table id="CustAddressTable" class="table">
          <thead>
            <tr>
              <th style="text-align: center;">No.</th>
              <th>Addresses</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody id="tbody">
          </tbody>
        </table>
    </div>
  
  </div>  

  <!-- My Setting Tab-3 -->
  <div class="ChangePass" id="tab_body3">
    <div id="statusMsg"></div>
      <form id="custPassUpdate" class="was-validated" method="POST" action="">
        <div class="col-lg-4">
          <div class="form-group">
            <label class="lable-text" for="">Old Password</label>
            <input class="form-control" type="text" id="oldPass" name="oldPass" placeholder="Old Password" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="lable-text" for="">New Password</label>
            <input class="form-control" type="text" id="newPass" name="newPass" placeholder="New Password" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="lable-text" for="">Confirm Password</label>
            <input class="form-control" type="text" id="finalPass" name="finalPass" placeholder="Confirm Password" required>
          </div>
        </div>
        <div class="col-lg-2">
          <button class="btn button-blue">Update Password</button>
        </div>
      </form>
    <script>
      $("#custPassUpdate").submit(function (e){
        e.preventDefault();
        $.ajax({
          url:"http://localhost/TatvaSoft/HTML/PassUpdate.php",
          method:"post",
          data:$('#custPassUpdate').serialize(),
          success:function(res){      
            $('#statusMsg').html("");
            // alert(res);
            ststus1 = '<div class="alert alert-success bookalert alert-dismissible fade show"> <button type="button" class="close" data-dismiss="alert">&times;</button> <strong>Hurray!</strong> Password updated Successfully! </div>';
            ststus2 = '<div class="alert alert-warning alert-dismissible fade show"> <button type="button" class="close" data-dismiss="alert">&times;</button> <strong>Opps!</strong> Something went wrong! Try later. </div>';
            ststus3 = '<div class="alert alert-warning alert-dismissible fade show"> <button type="button" class="close" data-dismiss="alert">&times;</button> <strong>Opps!</strong> New and Confirm passwords are not matched. </div>';
            ststus4 = '<div class="alert alert-danger alert-dismissible fade show"> <button type="button" class="close" data-dismiss="alert">&times;</button> <strong>Opps!</strong> Your old password is wrong. </div>';
            if(res == 12)
            {
              // alert("Password updated Successfully!");
              $('#statusMsg').html(ststus1);
            }else if(res == 13){
                alert("Something went wrong!");
                $('#statusMsg').html(ststus2);
            }else if(res == 14){
                // alert("New and Confirm passwords are not matched");
                $('#statusMsg').html(ststus3);
            }else{
              // alert("Your old password is wrong!");
              $('#statusMsg').html(ststus4);
            }

          }

        });

      });

      window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
          $(this).remove();
        });
      }, 5000);
    </script>
  </div>

</div>
      
    </div>

  </div> 
</div>

<!-- <a data-toggle="tooltip" data-placement="bottom" title="Delete">
        <i class="fa-solid fa-trash-can" data-toggle="modal" data-target="#DeleteaddNew"></i>
      </a>
      Delete Address Modal Starts
      <div class="modal fade" id="DeleteaddNew">
        <div class="modal-dialog modal-md modal-dialog-centered">
          <div class="modal-content">
            
            <div class="modal-header">
              <h4 class="modal-title">Delete Address</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              <p class="Delet-modal-text">Are you sure you want to delete this address?</p>
              <button class="btn button-blue1" type="submit">Delete</button>
            </div>
          </div>
        </div>
      </div>
      Delete Address Modal Ends


      
      <a href="" data-toggle="modal" data-target="#WarningModal">Warning</a>
      Warning Address Modal Starts
      <div class="modal fade" id="WarningModal">
        <div class="modal-dialog modal-md modal-dialog-centered">
          <div class="modal-content">
            
            <div class="modal-header">
              <h4 class="modal-title">Warning</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            Modal body
            <div class="modal-body">
              <p class="warning-modal-text">To delete this address kindly change your default address to another address.</p>
            </div>
          </div>
        </div>
      </div>
Warning Address Modal Starts -->

 



  

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





<?php include 'include/comman_footer.php' ?>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
    $('#example1').DataTable();
    $('#CustAddressTable').DataTable();

    $("#CUSTServiceHistoryTable").dataTable({
    "sPaginationType": "full_numbers",
    "bJQueryUI": true,
    "bAutoWidth": false, // Disable the auto width calculation 
    "aoColumns": [
      { "sWidth": "15%" }, // 1st column width 
      { "sWidth": "20%" }, // 2nd column width 
      { "sWidth": "30%" }, // 3rd column width and so on 
      { "sWidth": "20%" }, // 3rd column width and so on 
      { "sWidth": "15%" }, // 3rd column width and so on 

    ]
  });

  });
</script>

<script>

//read data
function displayData(){
  output = "";

  $.ajax({
    url:"db/retriveAddress.php",
    method:'GET',
    dataType:'json',
    success:function(data){
      // console.log(data);
      if(data)
      {
        x=data;
      }else
      {
        x="";
      }
      $num = 1;
      for(i=0;i<x.length;i++){
        // console.log(x[i].AddressLine2);
        // x[i].AddressId
      output += "<tr><td style='text-align:center;'>" + $num + "</td><td style='text-align:left;'><b>Address: </b>" 
                  +x[i].AddressLine2+ ", " + x[i].AddressLine1 + ", " + x[i].City + ", "
                  + x[i].PostalCode + " " + "<br><b>Phone no. </b>" + x[i].Mobile + "</td>\
                                              <td>\
                                              <a data-toggle='tooltip' data-placement='bottom' title='Edit'>\
                                              <button  class='btn-edit'  data-sid="+ x[i].AddressId +" style='border: none !important; background:transparent !important;'>\
                                              <i class='fas fa-edit '></i>\
                                              </button>\
                                              </a>\
                                              <a data-toggle='tooltip' data-placement='bottom' title='Delete'>\
                                              <button class='btn-del'  data-sid="+ x[i].AddressId +" style='border: none !important; background:transparent !important;'>\
                                              <i class='fas fa-trash-alt'></i>\
                                              </button>\
                                              </a>\  </td>";
        $num++;
      }
      $('#tbody').html(output);
    }
  });
}
displayData();

//delete data
$("tbody").on("click", ".btn-del" , function(){
  console.log("Delete icon clicked");
  let AddId = $(this).attr("data-sid");
  mythis = this;
  // console.log(AddId);
  $.ajax({
    url:"db/ajaxcrud.php",
      method:'POST',
      data: { AddId : AddId},
      success:function(data){
        // console.log(data);
        if(data==1)
        {
          msg = '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success!</strong> Address deleted Successfully.</div>';
          $(mythis).closest("tr").fadeOut();
          displayData();
          // location.reload();
        }else
        {
          msg = '<div class="alert alert-warning" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Opps!</strong> Something went wrong.</div>';
        }
        
        $('#msg').html(msg);
        // displayData();

        window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
        }, 4000);
        
      }
  });  
}); 

//insert data
$('#myForm').submit(function (e){
  // console.log("Hello");
  e.preventDefault();
  let streetName = $('#streetName').val();
  let houseNo = $('#houseNo').val();
  let postalCode = $('#postalCode').val();
  let city = $('#city').val();
  let MobileNo = $('#Mobile').val();

  console.log(streetName);
  console.log(houseNo);
  console.log(postalCode);
  console.log(city);
  console.log(MobileNo);
  $.ajax({
    url:"db/ajaxcrud.php",
    method:'POST',
    data: {streetName : streetName,
            houseNo: houseNo,
            postalCode: postalCode,
            city: city,
            MobileNo: MobileNo
          },
    success:function(data){
      console.log(data);
      $('#addNew').modal('toggle');
      $('#myForm')[0].reset();
      
      msg = '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success!</strong>' + data + '</div>';
      $('#msg').html(msg);
      displayData();

      window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
      }, 4000);

    }
    
  });
  
});



// fetch data
$("tbody").on("click", ".btn-edit" , function(){
  console.log("Edit icon clicked");
  
  let editId = $(this).attr("data-sid");
  
  // mydata = { editId : editId};
  // console.log(mydata);
  $.ajax({
      url:"db/editAddress.php",
      method:'POST',
      data:{ getId : editId},
      success:function(data){
        data = JSON.parse(data);
        // btnUpdateData
        // console.log(data.Mobile);
        let streetName = $('#streetName1').val(data.AddressLine1);
        let houseNo = $('#houseNo1').val(data.AddressLine2);
        let postalCode = $('#postalCode1').val(data.PostalCode);
        let city = $('#city1').val(data.City);
        let MobileNo = $('#MobileNo1').val(data.Mobile);
        
        $('.btnUpdateData').attr('data-sid', editId);
        // console.log(data);       
        $('#UpdateNew').modal('show');
        
      }
    });

});



// Update
$('#myFormUpdate').submit(function (e){
    e.preventDefault();
    let streetName = $('#streetName1').val();
    let houseNo = $('#houseNo1').val();
    let postalCode = $('#postalCode1').val();
    let city = $('#city1').val();
    let MobileNo = $('#MobileNo1').val();
  
    let editId = $('.btnUpdateData')[0].getAttribute('data-sid');
    const form = new FormData();
    form.append('streetName', streetName);
    form.append('houseNo', houseNo);
    form.append('editId', editId);
    form.append('postalCode', postalCode);
    form.append('city', city);
    form.append('MobileNo', MobileNo);
    form.append('editId', editId);
    console.log(form);
    $.ajax({
      url:"db/editAddress.php",
      method:'POST',
      contentType:false,
      processData:false,
      data:form,
      success:function(data){
        // data = JSON.parse(data);
        console.log(data);
        $('#UpdateNew').modal('toggle');
        if(data==1){
          msg = '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success!</strong> Address Updated Successfully.</div>';
        }
        else{
          msg = '<div class="alert alert-warning" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Opps!</strong> Something went wrong.</div>';
        }
        $('#msg').html(msg);
        displayData();
        
        window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
        }, 4000);
        
      }
    });
});

</script>



<script>
  
    
  
    // var now = new Date();
    // var day = ("0" + now.getDate()).slice(-2);
    // var month = ("0" + (now.getMonth() + 1)).slice(-2);
    // var today = (day)+"-"+(month)+"-"+ now.getFullYear();
    // $('#dateOfBirth').val(today);
    // alert(today);



// Insert-Update-cust Details
$('#custDetailsForm').submit(function (e){
  // console.log("Hello");
  e.preventDefault();
  let fname = $('#fname').val();
  let lname = $('#lname').val(); 
  let email = $('#email').val();
  let MobileNo = $('#callno').val();
  let dateOfBirth = $('#dateOfBirth').val();
  let selectedLang = $("#language option:selected").val();

  console.log(fname);
  console.log(lname);
  console.log(email);
  console.log(MobileNo);
  console.log(dateOfBirth);
  console.log(selectedLang);

  $.ajax({
    url:"db/insertCustDetails.php",
    method:'POST',
    data: {fname : fname,
            lname: lname,
            email: email,
            MobileNo: MobileNo,
            dateOfBirth: dateOfBirth,
            selectedLang: selectedLang
          },
    success:function(data){
      
      // console.log(data);
      // $('#myDetailsMsg').html("");
      if(data == 1)
      {
        alert('Details Updated Successfully!');
        // status = '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success!</strong> Details Updated Successfully.</div>';
        
        
      }
      else
      {
        alert('Something Went Wrong!');
        // status = '<div class="alert alert-warning" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Opps!</strong> Something went wrong.</div>';
      }

      // $('#myDetailsMsg').html(status);
      // window.setTimeout(function() {
      //   $(".alert").fadeTo(500, 0).slideUp(500, function(){
      //       $(this).remove(); 
      //   });
      // }, 4000);

    }
    
  });
  
});


</script>


</body>
</html>
