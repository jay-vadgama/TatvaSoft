<?php
session_start();

if(!isset($_SESSION['uName'])){
  header("Location: Home.php");

}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Service Provider Dashboard</title>
  <link rel = "icon" href = "Images/logo1.png" type = "image/x-icon">
  <link rel="stylesheet" type="text/css" href="NavCSS/CustCommanNav.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  

  <link rel="stylesheet" type="text/css" href="CSS/style31.css">
  <script src="JS/sp.js"></script>
</head>
<body style="height: auto;">

<!-- Navbar -->
<?php include('Navbar/SpCommanNav.php'); ?> 

<!-- Title -->
<div class="container-fluid welcome">
  <p class="head-title">Welcome, <b><?php echo $_SESSION['uName']; ?></b></p>
</div>
<!-- echo $_SESSION['uName']; -->

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
          <form id="CancelServiceForm" class="was-validated" method="POST">
            <div class="form-group ">
              <textarea class="form-control" style="height: 100px;" type="text" id="ReasonForCancel" name="message" placeholder="Message" ></textarea>
            </div>
            <button class="btn text-center ModalCancelBtn button-blue1" type="submit">Cancel Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ServiceDetails Modal -->
<section class="ServiceDetails">
  <div class="modal fade" id="ServiceDetailSP">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        
        <div class="modal-header">
          <h4 class="modal-title">Service Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body" >
          <div id="BODYServiceDetailSP">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="container-fluid">
  <div class="content">

    <div class="leftPart" >
      <div class="sidebar">
        <a href="#" id="side1" class="activeSidebar" onclick="New_Service_Request()">New Service Request</a>
        <a href="#" id="side2" class="" onclick="Upcoming_Services()">Upcoming Services</a>
        <a href="#" id="side3" class="" onclick="Service_History()">Service History</a>
        <a href="#" id="side4" class="" onclick="My_Ratings()">My Ratings</a>
        <a href="#" id="side5" class="" onclick="Block_Customer()">Block Customer</a>
      </div>
    </div>

    <div class="rightPart">
      <!-- ------------------ TAB 1 ------------------ -->
      <div class="dashboard" id="tab1_Dashboard">
        <div id="AcceptStatus"></div>
        <div class="tbl-left" style="margin-bottom: 0px !important;">
          <p>New Service Requests</p>
        </div>
        <table id="NewServiceTBL" class="table" style="width:80%">
          <thead>
            <tr>
              <th style="text-align: center;">Service Id</th>
              <th>Service Date</th>
              <th>Customer Details</th>
              <th>Payment</th>
              <th style="text-align: center;">Actions</th>
            </tr>
          </thead>
          <tbody id="SPNewServiceRequestTableBody">
            <!-- data fatched from function SPNewServiceRequestTable() -->
          </tbody>
        </table>
      </div>

      <!-- ------------------ TAB 2 ------------------ -->
      <div class="UpcomingServices" id="tab2_UpcomingServices" style="display: none;">
        <div id="CancelStatus"></div>       
        <div class="tbl-left" style="margin-bottom: 0px !important;">
          <p>Upcoming Services</p>
        </div>

        <table id="example1" class="table" style="width:80%">
          <thead>
            <tr>
              <th style="text-align: center;">Service Id</th>
              <th>Service Date</th>
              <th>Customer Details</th>
              <th>Payment</th>
              <th style="text-align: center;">Action</th>
            </tr>
          </thead>
          <tbody id="AcceptedServiceTableBody">
            
          </tbody>
        </table>
      </div>




<script>
$(document).ready(function () {

  $('#NewServiceTBL').DataTable();
  $('#example1').DataTable();
  $('#HistoryTable').DataTable();

  

  function SPNewServiceRequestTable(){
    $.ajax({
      type: "get",
      // db/FetchNewService.php
      url: "db/FetchNewService.php",
      success: function (res) {
        // console.log(res);
        const data = JSON.parse(res);
        // ${data[i].AddressId}
        // console.log(data);

        let content = ``;
        for(let i=0; i<data.length; i++){
          content +=  `<tr>
                        <td class="tr1" data-toggle="modal"  data-target="#ServiceDetailSP1"> ${data[i].ServiceRequestId} </td>
                        <td style="text-align: left;">
                          <span> <img src="Images/calendar2.png" alt=""> ${data[i].date}  </span> 
                          <p style="margin-bottom: 0px !important;">
                            <span><img src="Images/clock.png" alt=""> ${data[i].time} </span>
                          </p>
                        </td>
                        <td style="text-align: left;"> 
                          ${data[i].FirstName} ${data[i].LastName} <br> 
                          <img src="Images/home.png"> ${data[i].AddressLine1} ${data[i].AddressLine2}, ${data[i].City} ${data[i].PostalCode}. 
                        </td>
                        <td style="text-align: left;color: #146371;font-size: 25px;font-weight: bold;">${data[i].TotalCost}€</td>
                        <td>
                          <div class="d-flex justify-content-center">
                            <a class="btn btn-sm AcceptBtn btn-res text-white" data-sid="${data[i].ServiceRequestId}" >Accept</a>
                          </div>
                        </td>
                      </tr>`;
        }
        $('#SPNewServiceRequestTableBody').html(content);
      }
    });
    
  }
  SPNewServiceRequestTable();

  $("tbody").on("click", ".AcceptBtn" , function(){
    console.log("Accept Btn clicked!");
    let srId = $(this).attr("data-sid");
    // alert(srId);
    console.log(srId);
    mythis = this;
    $.ajax({
      type: "post",
      url: "db/AcceptService.php",
      data: { srId: srId},
      success: function (response) {
        if(response == 1){
          msg = '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Hurray!</strong> Service Request Accepted Successfully.</div>';
          
          $(mythis).closest("tr").fadeOut();
          
          
        }else{
          msg = '<div class="alert alert-warning" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Opps!</strong> Something went wrong.</div>';
        }
        $('#AcceptStatus').html(msg);


        window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
        }, 4000);

      }
    });

  });


  function AcceptedServiceTable(){
    $.ajax({
      type: "get",
      url: "db/FetchAcceptedService.php",
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

          var a = new Date(data[i].ServiceStartDate);
          a.addHours(TotalDuration);
          let EndTime = `${a.getHours()}:${a.getMinutes()}`; 

          content +=  `<tr>
                        <td class="SDmodalID" style="cursor: pointer;" data-sid="${data[i].ServiceRequestId}" > ${data[i].ServiceRequestId} </td>
                        <td class="SDmodalID" style="cursor: pointer; text-align: left;" data-sid="${data[i].ServiceRequestId}" data-toggle="modal" data-target="#ServiceDetailSP"><span> <img src="Images/calendar2.png" alt="">  ${data[i].date} </span> <p style="margin-bottom: 0px !important;"><span><img src="Images/clock.png" alt=""> ${StartTime} - ${EndTime} </span></p></td>
                        <td class="SDmodalID" style="cursor: pointer; text-align: left;" data-sid="${data[i].ServiceRequestId}" data-toggle="modal" data-target="#ServiceDetailSP"> 
                          ${data[i].FirstName} ${data[i].LastName} <br> 
                          <img src="Images/home.png"> ${data[i].AddressLine1} ${data[i].AddressLine2}, ${data[i].City} ${data[i].PostalCode}. 
                        </td>
                        <td class="SDmodalID" style="cursor: pointer; text-align: left;color: #146371;font-size: 25px;font-weight: bold;" data-sid="${data[i].ServiceRequestId}" data-toggle="modal" data-target="#ServiceDetailSP">${data[i].TotalCost}€</td>
                        <td>
                          <div class="d-flex justify-content-center">
                            <a class="btn btn-sm BtnCancel btn-cnl text-white" data-sid="${data[i].ServiceRequestId}" data-toggle="modal" data-target="#CancelRequest">Cancel</a>
                          </div>
                        </td>
                      </tr>`;
        }
        $('#AcceptedServiceTableBody').html(content);
        
        
      }
    });
    
  }
  AcceptedServiceTable();
  
  $("tbody").on("click", ".BtnCancel" , function(){
    console.log("Action-Cancel clicked");
    let editId = $(this).attr("data-sid");
    console.log(editId);
    $('.ModalCancelBtn').attr('data-sid', editId);
  });

  $("#CancelServiceForm").submit(function (e) { 
    e.preventDefault();
    console.log("Modal-Cancel clicked!");
    
    let srId = $('.ModalCancelBtn')[0].getAttribute('data-sid');    
    // alert(srId);
    console.log(srId);
    let ReasonForCancel = $('#ReasonForCancel').val();
    // alert(ReasonForCancel);
    mythis = this;

    $.ajax({
      type: "post",
      url: "db/UpdateServiceStatus.php",
      data: { srId: srId,
              ReasonForCancel: ReasonForCancel
            },
      success: function (response) {
        console.log(response);
        if(response == 1)
        {
          $('#CancelRequest').modal('toggle');
          msg = '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Alright!</strong> Service Cancelled Successfully.</div>';
          $(mythis).closest("tr").fadeOut();
          AcceptedServiceTable();

        }else{
          msg = '<div class="alert alert-warning" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Opps!</strong> Something went wrong.</div>';
        }
        
        $('#CancelStatus').html(msg);

        window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
        }, 4000);
      }
    });
  });


  $("tbody").on("click", ".SDmodalID" , function(){
    console.log("modal td clicked");
    let ClickId = $(this).attr("data-sid");
    console.log(ClickId);
    // $('.SDmodalCancelBTN').attr('data-sid', ClickId);
    // $('.SDmodalCompleteBTN').attr('data-sid', ClickId);

    $.ajax({
      type: "post",
      url: "db/FetchSDmodalSP.php",
      data:{ RowId :ClickId }, 
      success: function (res) {
        console.log(res);
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
                          <button data-toggle="modal" data-dismiss="modal" data-target="#CancelRequest" class="btn btn-md btn-cnl SDmodalCancelBTN text-center text-white">Cancel</button>
                          <button type="submit" data-sid="${data[0].ServiceRequestId}"  class=" SDmodalCompleteBTN btn btn-md btn-res text-center text-white">Complete</button>
                        `;
          
        }else {
          alert("Something went wrong!");
        }
          $('#BODYServiceDetailSP').html(modalData);
          $('#ServiceDetailSP').modal('show');
      }
    
    });


$('#BODYServiceDetailSP').on("click", ".SDmodalCompleteBTN" , function(){
  // alert("complete btn clicked");
  let completeID = $(this).attr("data-sid");
  
  console.log(" Complete ID: " + completeID);
  newThis = this;
  $.ajax({
    type: "post",
    url: "db/UpdateServiceStatus.php",
    data: { completeID : completeID},
    success: function (response) {
      if(response == 3)
      {
        $('#ServiceDetailSP').modal('toggle');
        CompleteMsg = '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Okay!</strong> Service Completed Successfully.</div>';

        $(newThis).closest("tr").fadeOut();
        AcceptedServiceTable();
       
      }else{
        CompleteMsg = '<div class="alert alert-danger" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Opps!</strong> Something went wrong.</div>';
        AcceptedServiceTable();
      }
      $('#CancelStatus').html(CompleteMsg);

    }
  });




});

  });


  
    // SDmodalID
  // SDmodalCancelBTN

});  
</script>








<!-- ------------------ TAB 3 ------------------ -->
<div class="ServiceHistory" id="tab3_ServiceHistory" style="display: none;">
  <div class="tbl-left" style="margin-bottom: 0px !important;">
    <p>Service History</p>
  </div>

  <table id="HistoryTable" class="table" style="width:80%">
    <thead>
      <tr>
        <th style="text-align: center;">Service Id</th>
        <th>Service Date</th>
        <th>Customer Details</th>
        <!-- <th>Payment</th>
        <th style="text-align: center;">Action</th> -->
      </tr>
    </thead>
    <tbody id="ServiceHistoryTableBody">
      
    </tbody>
  </table>
</div>

<script>
  $(document).ready(function () {
    
    function ServiceHistoryTable(){
    $.ajax({
      type: "get",
      url: "db/FetchServiceHistorySP.php",
      success: function (res) {
        // console.log(res);
        const data = JSON.parse(res);
        // ${data[i].AddressId}
        console.log(data);

        let content = ``;
        for(let i=0; i<data.length; i++){
          content +=  `<tr>
                        <td class="SDmodalID" data-sid="${data[i].ServiceRequestId}" > ${data[i].ServiceRequestId} </td>
                        <td class="SDmodalID" style="text-align: left;" data-sid="${data[i].ServiceRequestId}" ><span> <img src="Images/calendar2.png" alt="">  ${data[i].date} </span> <p style="margin-bottom: 0px !important;"><span><img src="Images/clock.png" alt=""> ${data[i].time} </span></p></td>
                        <td class="SDmodalID" style="text-align: left;" data-sid="${data[i].ServiceRequestId}" > 
                          ${data[i].FirstName} ${data[i].LastName} <br> 
                          <img src="Images/home.png"> ${data[i].AddressLine1} ${data[i].AddressLine2}, ${data[i].City} ${data[i].PostalCode}. 
                        </td>
                      </tr>`;
        }
        $('#ServiceHistoryTableBody').html(content);
      }
    });
    
  }
  ServiceHistoryTable();






  });
</script>




<!-- ------------------ TAB 4 ------------------ -->
<div class="MyRatings" id="tab4_MyRatings" style="display: none;">
  <div class="tbl-left" style="margin-bottom: 0px !important;">
    <p>My Ratings</p>
  </div>
</div>

<!-- ------------------ TAB 5 ------------------ -->
<div class="BlockCustomer" id="tab5_BlockCustomer" style="display: none;">
  <div class="tbl-left" style="margin-bottom: 0px !important;">
    <p>Block Customer</p>
  </div>
</div>





















<!-- ------------------ My Setting TAB ------------------ -->
<div class="mySettings" id="tab_mySettings" >
  <div class="tabs">
    <div class="tab activeTAB" id="tb1" onclick="tab1_show()" >
      <a href="#" class="tabStyle"><span id="tab1head">My Details</span> <span id="tab1icon"><i class="fa-solid fa-address-card"></i></span></a>
    </div>
    <div class="tab" id="tb2" onclick="tab2_show()">
      <a href="#" class="tabStyle"><span id="tab2head">My Address</span> <span id="tab3icon"><i class="fa-solid fa-key"></i></span></a>
    </div>
    <div class="tab" id="tb3" onclick="tab3_show()">
      <a href="#" class="tabStyle"><span id="tab3head">Change Password</span> <span id="tab3icon"><i class="fa-solid fa-key"></i></span></a>
    </div>
  </div>





<!-- My Setting Tab-1 -->
<div class="myDetails" id="tab_body1" >
<?php 
    include 'config.php';
    $id = $_SESSION['uID'];
    $selectDetailsSQL = "SELECT  `FirstName`, `LastName`, `Email`,`Mobile`,`Gender`,`DateOfBirth`,`UserProfilePicture`,`WorksWithPets`,`LanguageId`,`NationalityId` FROM `user` WHERE UserId='$id'";
    
    $ResQuery =mysqli_query($conn,$selectDetailsSQL);
    // print_r($ResQuery);
    $FetchRes = mysqli_fetch_assoc($ResQuery);
    // print_r($FetchRes);
?>

 


<form id="SpDetailsForm" method="POST">
  <div class="d-flex avtarRow">
  
    <div class="avtarRow-left">
      <p class="lable-text">Account Status: <span class="text-success">Active</span></p>
      <p class="lable-text">Basic Details </p>
    </div>
    <div style="float:right;">
    <?php
    if($FetchRes['UserProfilePicture'] == 'car' ){
      echo '<img id="avtarDisplay" alt="Avtar" src="Images/avatar-car.png" />';
    }else if($FetchRes['UserProfilePicture'] == 'female' ){
      echo '<img id="avtarDisplay" alt="Avtar" src="Images/avatar-female.png" />';
    }else if($FetchRes['UserProfilePicture'] == 'hat' ){
      echo '<img id="avtarDisplay" alt="Avtar" src="Images/avatar-hat.png" />';
    }else if($FetchRes['UserProfilePicture'] == 'iron' ){
      echo '<img id="avtarDisplay" alt="Avtar" src="Images/avatar-iron.png" />';
    }else if($FetchRes['UserProfilePicture'] == 'male' ){
      echo '<img id="avtarDisplay" alt="Avtar" src="Images/avatar-male.png" />';
    }else if($FetchRes['UserProfilePicture'] == 'ship' ){
      echo '<img id="avtarDisplay" alt="Avtar" src="Images/avatar-ship.png" />';
    }else{
      echo  '<img id="avtarDisplay" alt="Avtar" src="Images/avatar-car.png" />';
    }


    ?>  
   

    </div>
  </div>
  
  <hr>
  
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="form-group">
          <label class="lable-text" >First name</label>
          <input class="form-control" value="<?php echo $FetchRes['FirstName']; ?>" type="text" id="SPfname" name="firstname" placeholder="First Name">
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="form-group">
          <label class="lable-text" >Last name</label>
          <input class="form-control" type="text" value="<?php echo $FetchRes['LastName']; ?>" id="SPlname" name="lastname" placeholder="Last Name">
          </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <label class="lable-text" for="">E-mail address</label>
          <input class="form-control" type="email" value="<?php echo $FetchRes['Email']; ?>" id="SPemail" name="email" placeholder="Email address" readonly>
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
            <input class="form-control" type="tel" value="<?php echo $FetchRes['Mobile']; ?>" id="SPMobileNo" name="MobileNo" placeholder="Mobile Number" minlength="10" maxlength="10">
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="form-group">
          <label class="lable-text" for="">Date of Birth:</label>
          <input class="form-control form-check-inline date" name="DoB" value="<?php echo date('Y-m-d', strtotime($FetchRes['DateOfBirth'])); ?>" id="SPdob" type="date" required>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
        <label class="lable-text" >Nationality</label>
          <div class="form-group">
            <select class="form-control" id="SPnationality" name="Nationality">
              <option value="" hidden>Choose</option>
              <option value='1' <?php if($FetchRes['NationalityId'] =="1") echo 'selected="selected"'; ?>>Indian</option>
              <option value='2' <?php if($FetchRes['NationalityId'] =="2") echo 'selected="selected"'; ?>>Foreigner</option>
            </select>
          </div>
        </div>

    </div>

    <hr>
    <div class="row">
      
      <div class="col-lg-4">
        <label class="lable-text" >My Preferred Language</label>
        <div class="form-group">
          <select class="form-control" name="language" id="SPlanguage" required>
            <option value="0" hidden>Choose</option>
            <option value='1' <?php if($FetchRes['LanguageId'] =="1") echo 'selected="selected"'; ?> >English</option>
            <option value='2' <?php if($FetchRes['LanguageId'] =="2") echo 'selected="selected"'; ?> >Hindi</option>
            <option value='3' <?php if($FetchRes['LanguageId'] =="3") echo 'selected="selected"'; ?> >Gujarati</option>
          </select>
        </div>
      </div>
    </div>
    <hr>
    <label class="lable-text" >Gender:</label>
  
    <div class="row">
      <div class="col-lg-2">
        <div class="form-check">
          <label class="form-check-label" for="radio1">
            <input type="radio" style="font-family: roboto;" class="form-check-input" id="radio1" name="GenderRadio" value="1" <?php echo ($FetchRes['Gender']=='1')?'checked':'' ?> required>Male </label>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="form-check">
          <label class="form-check-label" for="radio2">
            <input type="radio" style="font-family: roboto;" class="form-check-input" id="radio2" name="GenderRadio" value="2" <?php echo ($FetchRes['Gender']=='2')?'checked':'' ?> required>Female </label>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="form-check">
          <label class="form-check-label" for="radio3">
            <input type="radio" style="font-family: roboto;" class="form-check-input" id="radio3" name="GenderRadio" value="3" <?php echo ($FetchRes['Gender']=='3')?'checked':'' ?> required>Rather not to say </label>
        </div>
      </div>
    </div>
    <hr>
    <div class="avtar">
      <label class="lable-text " >Select Avtar:</label>
      <div class="row justify-content-left form-group">
        <div>
          <input type="radio" id="avatar1" name="avtar" value="car" <?php echo ($FetchRes['UserProfilePicture']=='car')?'checked':'' ?> >
          <label for="avatar1" class="check-label1" onclick="changeToCar()"><img class="avtarImg" src="Images/avatar-car.png"></label>
        </div>
        <div>
          <input type="radio" id="avatar2" name="avtar" value="female" <?php echo ($FetchRes['UserProfilePicture']=='female')?'checked':'' ?> >
          <label for="avatar2" class="check-label1" onclick="changeToFemale()"><img class="avtarImg" src="Images/avatar-female.png"></label>
        </div>
        <div>
          <input type="radio" id="avatar3" name="avtar" value="hat" <?php echo ($FetchRes['UserProfilePicture']=='hat')?'checked':'' ?> >
          <label for="avatar3" class="check-label1" onclick="changeToHat()"><img class="avtarImg" src="Images/avatar-hat.png"></label>
        </div>
        <div>
          <input type="radio" id="avatar4" name="avtar" value="iron" <?php echo ($FetchRes['UserProfilePicture']=='iron')?'checked':'' ?> >
          <label for="avatar4" class="check-label1" onclick="changeToIron()"><img class="avtarImg" src="Images/avatar-iron.png"></label>
        </div>
        <div>
          <input type="radio" id="avatar5" name="avtar" value="male" <?php echo ($FetchRes['UserProfilePicture']=='male')?'checked':'' ?> >
          <label for="avatar5" class="check-label1" onclick="changeToMale()"><img class="avtarImg" src="Images/avatar-male.png"></label>
        </div>
        <div>
          <input type="radio" id="avatar6" name="avtar" value="ship" <?php echo ($FetchRes['UserProfilePicture']=='ship')?'checked':'' ?> >
          <label for="avatar6" class="check-label1" onclick="changeToShip()"><img class="avtarImg" src="Images/avatar-ship.png"></label>
        </div>
      
      </div>


    </div>
    <hr>
    <label class="lable-text " >Interested to work with pets:</label>
    <div class="row">
      <div class="col-lg-1 col-md-6 col-sm-6">
        <div class="form-check">
          <label class="form-check-label" for="PetRadio1">
          <input type="radio" style="font-family: roboto;" <?php echo ($FetchRes['WorksWithPets']=='1')?'checked':'' ?> class="form-check-input" id="PetRadio1" name="workWithPet" value="1" required>Yes</label>
        </div>
      </div>
      <div class="col-lg-1 col-md-6 col-sm-6">
        <div class="form-check">
          <label class="form-check-label" for="PetRadio2">
          <input type="radio" style="font-family: roboto;" <?php echo ($FetchRes['WorksWithPets']=='0')?'checked':'' ?> class="form-check-input" id="PetRadio2" name="workWithPet" value="0" required>No</label>
        </div>
      </div>
    </div>

    <button type="submit" class="mt-3 btn button-blue">Save</button>
  </form>
</div>


<!-- My Setting Tab-2 -->
<div class="myAdd" id="tab_body2" >
<?php 
    include 'config.php';
    $id = $_SESSION['uID'];
    $selectDetailsSQL = "SELECT `AddressLine1`, `AddressLine2`, `City`, `PostalCode` FROM `useraddress` WHERE UserId='$id' ";
    
    $ResQuery =mysqli_query($conn,$selectDetailsSQL);
    // print_r($ResQuery);
    $FetchRes = mysqli_fetch_assoc($ResQuery);
    
    // print_r($FetchRes);
?>

  <div id="SpAddMSG"></div>
<form id="SpAddressForm" method="post">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="form-group">
            <label class="lable-text">Street Name</label>
            <input class="form-control" value="<?php if(isset($FetchRes['AddressLine1'])){ echo $FetchRes['AddressLine1']; } ?>" type="text" id="SPstreetName" name="streetName" placeholder="Street Name" required>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="form-group">
            <label class="lable-text">House Number</label>
            <input class="form-control" type="text" value="<?php if(isset($FetchRes['AddressLine2'])){ echo $FetchRes['AddressLine2']; } ?>" id="SPhouseNo" name="houseNo" placeholder="House No." required>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="form-group">
            <label class="lable-text">Postal Code</label>
            <input class="form-control" type="text" id="SPpostalCode" value="<?php if(isset($FetchRes['PostalCode'])){ echo $FetchRes['PostalCode'];} ?>" name="postalCode" required>
          </div>
        </div>    
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="form-group">
            <label class="lable-text">City</label>
            <input class="form-control" type="text" value="<?php if(isset($FetchRes['City'])){ echo $FetchRes['City']; }  ?>" id="SPcity" name="city" required>
          </div>
        </div>    
      </div>
      <button type="submit" class="mt-3 btn button-blue">Save Address</button>

    </form>
</div>


<!-- My Setting Tab-3 -->
<div class="ChangePass" id="tab_body3" >
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
          ststus1 = '<div class="alert alert-success alert-dismissible fade show"> <button type="button" class="close" data-dismiss="alert">&times;</button> <strong>Hurray!</strong> Password updated Successfully! </div>';
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

          window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
          });
          }, 4000);
        }

      });

    });
  </script>
</div>

</div>
          
          <!-- <button type="submit" class="btn button-blue" data-toggle="modal" data-target="#addNew">Add New Address</button> -->
            
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
          
            <!-- <a data-toggle="tooltip" data-placement="bottom" title="Edit">
              <i class="fas fa-edit" data-toggle="modal" data-target="#EditaddNew"></i>
            </a> -->
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

            <!-- <a data-toggle="tooltip" data-placement="bottom" title="Delete">
              <i class="fa-solid fa-trash-can" data-toggle="modal" data-target="#DeleteaddNew"></i>
            </a> -->
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


            
            <!-- <a href="" data-toggle="modal" data-target="#WarningModal">Warning</a> -->
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

  </div> 
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

</div>

</div>
</div>  -->










<?php include 'include/comman_footer.php' ?>
<script>

// Insert-Update-SP Details

$('#SpDetailsForm').submit(function (e){
  console.log("Hello");
  e.preventDefault();
  let fname = $('#SPfname').val();
  let lname = $('#SPlname').val(); 
  let email = $('#SPemail').val();
  let MobileNo = $('#SPMobileNo').val();
  let dateOfBirth = $('#SPdob').val();
  let nationality = $("#SPnationality option:selected").val();
  let selectedLang = $("#SPlanguage option:selected").val();
  let gender =  $('input[name="GenderRadio"]:checked').val();
  let avtar =  $('input[name="avtar"]:checked').val();
  let workWithPet =  $('input[name="workWithPet"]:checked').val();  
  
  
  console.log(fname);
  console.log(lname);
  console.log(email);
  console.log(MobileNo);
  console.log(dateOfBirth);
  console.log(nationality);
  console.log(selectedLang);
  console.log(gender);
  console.log(avtar);
  console.log(workWithPet);

  $.ajax({
    url:"db/insertSpDetails.php",
    method:'POST',
    data: { fname : fname,
            lname: lname,
            email: email,
            MobileNo: MobileNo,
            dateOfBirth: dateOfBirth,
            nationality: nationality,
            selectedLang: selectedLang,
            gender: gender,
            avtar: avtar,
            workWithPet: workWithPet
          },
    success:function(data){
      
      console.log(data);
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



// Insert-Update-SP Address
$(document).ready(function () {
  $('#SpAddressForm').submit(function (e) { 
  e.preventDefault();
  let SPstreetName = $('#SPstreetName').val();
  let SPhouseNo = $('#SPhouseNo').val(); 
  let SPpostalCode = $('#SPpostalCode').val();
  let SPcity = $('#SPcity').val();
  
  console.log(SPstreetName);
  console.log(SPhouseNo);
  console.log(SPpostalCode);
  console.log(SPcity);
  $.ajax({
    url:"db/insertSpDetails.php",
    method:'POST',
    data: { SPstreetName : SPstreetName,
            SPhouseNo: SPhouseNo,
            SPpostalCode: SPpostalCode,
            SPcity: SPcity
          },
    success:function(data){
      console.log(data);
      if(data == 'yes' || data == 1 || data == 111)
      {
        msg = '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Hurray!</strong> Address Updated Successfully.</div>';
      }else {
        msg = '<div class="alert alert-warning" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Opps!</strong> Something went wrong.</div>';
      }

      $('#SpAddMSG').html(msg);


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



</body>
</html>
