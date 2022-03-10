<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style6.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <script src="JS/main2.js"></script>
    <script src="JS/main3.js"></script>
    <title>Helperland | Book Now</title>
    <link rel = "icon" href = "Images/logo1.png" type = "image/x-icon">
</head>
<body style="height: auto;">

<!-- Navbar Starts -->
  <section class="header">
    <div class="container-fluid">  
      <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="Home.php"><img class="logo" src="Images/Logo_Helperland.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item round" >
                  <a class="nav-link" href="Book-Now.php">Book now</a>
                </li>
              <li class="nav-item r1">
                <a class="nav-link" href="#">Prices & Services</a>
              </li>
              <li class="nav-item r1">
                <a class="nav-link" href="#">Warrenty</a>
              </li>
              <li class="nav-item r1">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item r1">
                <a class="nav-link" href="Contact.php">Contact</a>
              </li>
              <li class="nav-item round">
                <a class="nav-link " href="#">Login</a>
              </li>
              <li class="nav-item round">
                <a class="nav-link " href="#">Beacome a Helper</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
  </section>
<!-- Navbar Ends -->

<!-- Book-now BG img  -->
<div class="bg-book">
  <img src="Images/book-service-banner.jpg" class="img-responsive book-img" >
</div>

<!-- Book-now Heading Starts -->
<section class="book-now-heading">
  <div class="container-fluid">
    <p class="txt">Set up your cleaning service</p>
  </div>
  <div class="line-div">
    <hr class="left-line">
      <img src="Images/separator.png" style="width: 24px;height: 25px;">
    <hr class="right-line">
  </div>
</section>   
<!-- Book-now Heading Ends -->
 


<!-- Book-now body Starts -->
<div class="container-fluid">
  <div class=" d-flex justify-content-center">
    
    <!-- left-side starts -->
    <section class="left-side">
      <!-- tabs-div starts -->
      <div class="tabs">

        <!-- tabs-Header Starts -->
        <div class="d-flex justify-content-center flex-nowrap">
          <div class="tab1">
            <button class="setup-btn1" id="tabbtn1" onclick="show1();"><img id="tabimg1" class="tab-img" src="Images/setup-service-white.png" alt=""><p id="tabtxt1" class="setup">Setup Service</p></button>
          </div>
          <div class="tab2">
            <button class="setup-btn" id="tabbtn2" onclick="show2();" disabled><img id="tabimg2" class="tab-img" src="Images/schedule.png" alt=""><p id="tabtxt2" class="setup">Schedule & Plan</p></button>
          </div>
          <div class="tab3">
            <button class="setup-btn" id="tabbtn3" onclick="show3();" disabled><img id="tabimg3" class="tab-img" src="Images/details.png" alt=""><p id="tabtxt2" class="setup"><p id="tabtxt3" class="setup">Your Details</p></button>
          </div>
          <div class="tab4">
            <button class="setup-btn" id="tabbtn4" onclick="show4();" disabled><img id="tabimg4" class="tab-img" src="Images/payment.png" alt=""><p id="tabtxt4" class="setup">Make Payment</p></button>
          </div>
        </div>
        <!-- tabs-Header Ends -->

        <!-- tabs-Body Starts -->
        <div class="tabs-body">

          <!-- tab-body 1 starts -->
          <div class="tab-body1" id="body1">
            <div id="tab-err1"></div>
            <form id="tab-form1" class="was-validated" method="POST"> 
            
              <label class="postal-label" for="postalcode">Enter your Postal Code:</label>
              
                <div class="checkZipDiv">
                  <div class="form-group">
                    <input type="text" pattern="[0-9]{6}" class="form-control" placeholder="Postal Code" name="zipcode" id="Zipcode" required>
                  </div>
                </div>

                <div class="CheckbtnDiv" style="display: flex; justify-content: center; text-align: center;">
                  <div class="form-group">
                    <button type="submit" name="CheckZipcode"  class="btn btn-check">Check Availability</button>
                  </div>
                </div>  

            </form>
            <script>
              
              $("#tab-form1").submit(function (e){
                e.preventDefault();
                $.ajax({
                  url:"http://localhost/TatvaSoft/HTML/insertBooknow.php",
                  method:"post",
                  data:$('#tab-form1').serialize(),
                  success:function(res){
                    console.log(res);
                    $('#tab-err1').html("");
                    if(res=='<div class="alert alert-danger"><strong>Sorry!</strong> Service is available not at this Zipcode.</div>'){
                      $('#tab-err1').html(res);
                    }else{
                      $('#tab-err1').html(res);
                      document.getElementById("tabbtn2").removeAttribute('disabled');
                      show2();
                    }
                  }


                });
              });

              


              </script>
          </div>
          <!-- tab-body 1 ends -->



          <!-- tab-body 2 strats  -->
          <div class="tab-body2" id="body2">
          
            <form class="was-validated" id="tab-form2" action="" method="post">
              <div class="row">
                <div class="col-lg-6">
                  <label class="form-label">When do you need the cleaner?</label>
                    <!-- sub-row class -->
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="form-group">
                          <input class="form-control form-check-inline date" name="ServiceDate" id="datepicker" type="date" required>
                        </div>
                      </div>
                      <div class="col-sm-4">
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
                </div>
          
                <div class="col-lg-6">
                  <label class="form-label">How long do you need your cleaner to stay?</label>
                  <div class="form-group">
                    <select class="form-control" id="HourSelected" onclick="Hour()" name="ServiceHour">
                      <option value="3">3.0 Hrs</option>
                      <option value="3.5">3.5 Hrs</option>
                      <option value="4">4.0 Hrs</option>
                      <option value="4.5">4.5 Hrs</option>
                      <option value="5">5.0 Hrs</option>
                      <option value="5.5">5.5 Hrs</option>
                      <option value="6">6.0 Hrs</option>
                      <option value="6.5">6.5 Hrs</option>
                      <option value="7">7.0 Hrs</option>
                      <option value="7.5">7.5 Hrs</option>
                      <option value="8">8.0 Hrs</option>
                      <option value="8.5">8.5 Hrs</option>
                      <option value="9">9.0 Hrs</option>
                      <option value="9.5">9.5 Hrs</option>
                      <option value="10">10.0 Hrs</option>
                      <option value="10.5">10.5 Hrs</option>
                      <option value="11">11.0 Hrs</option>
                      <option value="11.5">11.5 Hrs</option>
                      <option value="12">12.0 Hrs</option>
                    </select>
                  </div>
                </div>
              </div>

              <hr>

              <label class="form-label">Extra Services</label>
              <div class="justify-content-center custom-checkboxes">
                <div class="Cust-checkbox">
                    <input type="checkbox" name="check[]" value="0.5" class="CustomBox" id="Check1">
                    <label for="Check1" class="label1" onclick="Check1();">
                        <img src="Images\price-1.png" id="CheckImg1" >
                      </label>
                    <p class="check-text">Inside cabinets</p>
                </div>
                <div class="Cust-checkbox">
                    <input type="checkbox" name="check[]" value="0.5" class="CustomBox" id="Check2" >
                    <label for="Check2" class="label1" onclick="Check2();">
                        <img src="Images\price-2.png" id="CheckImg2" >
                    </label>
                    <p class="check-text">Inside Fridge</p>
                </div>
                <div class="Cust-checkbox">
                    <input type="checkbox" name="check[]" value="0.5" class="CustomBox" id="Check3" >
                    <label for="Check3" class="label1" onclick="Check3();">
                        <img src="Images\price-3.png" id="CheckImg3" >
                    </label>
                    <p class="check-text">Inside Oven</p>
                </div>
                <div class="Cust-checkbox">
                    <input type="checkbox" name="check[]" value="0.5" class="CustomBox" id="Check4" >
                    <label for="Check4" class="label1" onclick="Check4();">
                        <img src="Images\price-4.png" id="CheckImg4" >
                    </label>
                    <p class="check-text">Laundry Wash & Dry</p>
                </div>
                <div class="Cust-checkbox">
                    <input type="checkbox" name="check[]" value="0.5" class="CustomBox" id="Check5">
                    <label for="Check5" class="label1" onclick="Check5();">
                        <img src="Images\price-5.png" id="CheckImg5" >
                    </label>
                    <p class="check-text">Interior Windows</p>
                </div>
            </div>
        
              <hr>
          
              <label class="form-label">Comments</label>
              <div class="form-group "> 
                <textarea class="form-control form-comment" type="text" id="comments" name="comments" placeholder="Comments"></textarea>
              </div>
              <div class="form-check">
                <input class="form-check-input check-pet" type="checkbox" value="1" id="checkPet" name="HasPet">
                  <label class="form-check-label label-txt" for="checkPet">
                    I have pets at home.
                  </label>
              </div>
        
              <hr>
              <button class="btn-cnt" value="true" name="ContinueToTab3" >Continue</button>
        
            </form>
            <script>
              
              $("#tab-form2").submit(function (e){
                e.preventDefault();
                $.ajax({
                  url:"http://localhost/TatvaSoft/HTML/insertBooknow.php",
                  method:"post",
                  data:$('#tab-form2').serialize(),
                  success:function(res){
                    console.log(res);
                    if(res=='true'){
                      document.getElementById("tabbtn2").removeAttribute('disabled');
                      document.getElementById("tabbtn3").removeAttribute('disabled');
                      show3();
                    }
                    else{
                      alert('Something went Wrong!');
                    }
                  }
                });
              });

              


              </script>
          </div>
          <!-- tab-body 2 ends -->


          <!-- tab-body 3 starts -->
          <div class="tab-body3" id="body3">
            <form action="" method="post" class="was-validated">
              <p class="head-text">Enter your contact details, so we can serve you in better way!</p>
              <div class="form-check form-address">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                  <label class="form-check-label" for="exampleRadios2">
                    <p class="p-address"><b>Address:</b> Street 2 40, Troisdorf 53844</p>
                    <p class="p-address"><b>Phone no:</b> 9624527786</p>
                  </label>
              </div>
            </form>
            <div class="add-btn">
              <button class="btn-address" onclick="addnewAddress()" id="Addnew">+ Add New Address</button>
            </div>
        
            <div class="newAdd" id="newAdd">
              <form id="tab-form3" action="">
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
                      <input class="form-control" type="text" id="houseNo" name="houseNo" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="lable-text">Postal Code</label>
                      <input class="form-control" type="text" id="postalCode" name="postalCode">
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
                <div class="btns">
                  <button class="btn-save" name="tab-btn3" onclick="">Save</button>
                  <button class="btn-cancel"  onclick="btnclose()">Cancel</button>
                </div>
              </form>
            </div>
            <p class="head-text1">Your favourite service Providers</p>

            <hr>

            <p class="fvrt">You can choose your favorite service provider from below list.</p>
            <div class="sp-fvrt d-flex">
              <div class="fvrt-sp">
                <img class="sp-img" src="Images/cap.png" >
                <p class="sp-txt">Sandip Patel</p>
                <button class="btn-select">Select</button>
              </div>
          
              <div class="fvrt-sp">
                <img class="sp-img" src="Images/cap.png" >
                <p class="sp-txt">Raj Sharma</p>
                <button class="btn-select">Select</button>
              </div>
            </div>
            
            <hr>
            
            <button class="btn-cnt">Continue</button>
          </div>
          <!-- tab-body 3 ends -->
            <script>
                $("#tab-form3").submit(function (e){
                e.preventDefault();
                $.ajax({
                  url:"http://localhost/TatvaSoft/HTML/insertBooknow.php",
                  method:"post",
                  data:$('#tab-form3').serialize(),
                  success:function(data){
                    if(data=='true'){
                      document.getElementById("tabbtn4").removeAttribute('disabled');
                      show4();                    
                    }
                    else{
                      console.log(data);
                      alert('Something went Wrong!');
                    }
                  }
                });
              });
            </script>   
            
            
          <!-- tab-body 4 starts -->
          <div class="tab-body4" id="body4">
            <label class="form-label">Pay securely with Helperland payment gateway!</label>
            
            <hr>
            <form method="post" id="tab-form4" class="was-validated">
            <div class="row">
              <div class="col-lg-6">
                <label class="form-label">Card Number</label>
                <input class="form-control cardNo" placeholder="1234 1234 1234 1234" id="cardNum" pattern="[0-9]" type="tel" name="cardNumber" minlength="19" maxlength="19"  readonly>
              </div>
              <div class="col-lg-6">

                <!-- sub-row class -->
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="form-label">Month</label>
                      <select class="form-control" id="Expmonth" name="cardMonth" required>
                        <option value="" hidden>--</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="form-label">Expiry year</label>
                      <select class="form-control" name="cardYear" id="Expyear" required>
                        <option value="" hidden>--</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                        <option>2028</option>
                        <option>2029</option>
                        <option>2030</option>
                        <option>2031</option>
                        <option>2032</option>
                        <option>2033</option>
                        <option>2034</option>
                        <option>2035</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="form-label">CVV/CVC</label>
                      <input type="password" class="form-control" name="cardCVV" placeholder="***" minlength="3" maxlength="3" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <hr>

            <div class="cardImg">
              <p class="form-label">Accepted Cards</p>
              <div>
                <img class="svgImg" src="Images/mastercard.svg">
                <img class="svgImg" src="Images/visa.svg">
                <img class="svgImg" src="Images/rupay.svg">
              </div>
            </div>

            <hr>
            
            <div class="form-check">
              <input type="checkbox" class="form-check-input" value="">
              <label class="form-check-label checkbox-lable"><p>I accepted <a href="">terms and conditions</a>, the <a href="">cancellation policy</a> and the <a href="">privacy policy</a>. I confirm that Helperland starts to execute the contract before the expiry of the withdrawal period and I lose my right of withdrawal as a consumer with full performance of the contract.</p></label>
            </div>
          
            <button class="btn-cnt">Complete Booking</button>
            
              
          </form>
          </div>
          <!-- tab-body 4 ends -->
          <script>
                $("#tab-form4").submit(function (e){
                e.preventDefault();
                $.ajax({
                  url:"http://localhost/TatvaSoft/HTML/insertBooknow.php",
                  method:"post",
                  data:$('#tab-form4').serialize(),
                  success:function(res){
                    if(res=='true'){
                      document.getElementById("tabbtn2").removeAttribute('disabled');
                      document.getElementById("tabbtn3").removeAttribute('disabled');
                      document.getElementById("tabbtn4").removeAttribute('disabled');
                      console.log(res);                    
                    }
                    else{
                      console.log(res);
                      alert('Something went Wrong!');
                    }
                  }
                });
              });
            </script>    
        </div>
        <!-- tabs-Body Ends -->
      
      </div>
      <!-- tabs-div ends -->
    </section>
    <!-- left-side ends -->

    
    <!-- right-side starts -->
    <section class="right-side">
      <div class="payment">
        
        <!-- payment-card starts -->
        <section class="payment-card">
          <div class="card">
            <div class="card-header">Payment Summary</div>
            <div class="card-body">
              <div class="extraS">
                <p class="body-text" id="newDate">19/01/2022</p>
                <p class="body-right" id="newTime">08:00</p>
              </div>
              <p class="body-text1">Duration</p>
              <div class="extraS">
                <p class="body-text" id="Basic">Basic</p>
                <p class="body-right" id="BasicNewHour">3 Hrs</p>
              </div>
              <p class="body-text" id="extraaa"><b>Extra</b></p>
              <div class="extraS">
                <p class="body-text" id="extraService1"></p>
                <p class="body-right" id="extraRight1"></p>
              </div>
              <div class="extraS">
                <p class="body-text" id="extraService2"></p>
                <p class="body-right" id="extraRight2"></p>
              </div>
              <div class="extraS">
                <p class="body-text" id="extraService3"></p>
                <p class="body-right" id="extraRight3"></p>
              </div>
              <div class="extraS">
                <p class="body-text" id="extraService4"></p>
                <p class="body-right" id="extraRight4"></p>
              </div>
              <div class="extraS">
                <p class="body-text" id="extraService5"></p>
                <p class="body-right" id="extraRight5"></p>
              </div>
              <hr>
              <div class="extraS">
                <p class="body-text" id="TotalSerivice"><b>Total Service Time</b></p>
                <p class="body-right" id="TotalSeriviceTime">3 Hrs</p>
              </div>
              <hr>
              <div class="extraS">
                <p class="body-text" id="">Per Hour Cleaning Rate</p>
                <p class="body-right" id="">20.00 €</p>
              </div>
              <hr>
              <div class="extraS">
                <p class="body-head" id=""><b>Total Payment</b></p>
                <p class="body-head-right" id="TotalCost">60.00 €</p>
              </div>
            </div>
            <div class="card-footer" data-toggle="modal" data-target="#IncludeServices">
              <p class="footer-text"><img class="footer-img" src="Images/smiley.png">See What is always included</p> 
            </div>
          </div>
        </section>
        <!-- payment-card ends -->
      
        <!-- Include Service Modal Starts -->
        <section class="Include-Service">
          
          <!-- The Modal -->
          <div class="modal fade" id="IncludeServices">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">What we include in cleaning</h4>
                  <button type="button" class="btn close" data-dismiss="modal">&times;</button>
                </div>
              
                <!-- Modal body -->
                <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <p class="ul-head">Bedroom and Living Room</p>
                      <ul class="modal-ul">
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Included Dust all accessible surfaces</li>
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Included Wipe down all mirrors and glass fixtures</li>
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Not Included Clean all floor surfaces</li>
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Included Take out garbage and recycling</li>
                        <li><img class="li-img" src="Images/Green-check.png" alt="">To clean up</li>
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Make beds</li>
                      </ul>
                    </div>
                    <div class="col-lg-4">
                      <p class="ul-head">Bathrooms</p>
                      <ul class="modal-ul">
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Included Wash and sanitize the toilet, shower, tub, sink</li>
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Not Included Dust all accessible surfaces</li>
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Included Wipe down all mirrors and glass fixtures</li>
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Not Included Clean all floor surfaces</li>
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Included Take out garbage and recycling</li>
                      </ul>
                    </div>
                    <div class="col-lg-4">
                      <p class="ul-head">Kitchen</p>
                      <ul class="modal-ul">
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Included Dust all accessible surfaces</li>
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Included Empty sink and load up dishwasher</li>
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Included Clean all floor surfaces</li>
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Included Take out garbage and recycling</li>
                        <li><img class="li-img" src="Images/Green-check.png" alt="">Cleaning the sink and the oven (outside)</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
        <!-- Include Service Modal Ends -->
  
        <!-- QA-div Starts -->
        <section class="FAQ">
          <div class="Questions">
            <div class="que-head">
              <p class="que-heading">Questions?</p>
            </div>
          
            <!-- Question1 Starts -->
            <div class="que">
              <a class="que-text" href="" data-toggle="collapse" data-target="#q1">
                <img class="r-arrow" id="rImg" src="Images/right.png">What's include in a cleaning?</a>
            </div>
            <div id="q1" class="collapse">
              <div class="ans">
                <p class="ans-text">Bedroom, Living Room & Common Areas,Bathrooms,Kitchen,Extras</p>
              </div>
            </div>
          
            <!-- Question2 Starts -->
            <div class="que">
              <a class="que-text" href="" data-toggle="collapse" data-target="#q2">
                <img class="r-arrow" src="Images/right.png">Which Helperland professional will come to my place?</a>
            </div>
            <div id="q2" class="collapse">
              <div class="ans">
                <p class="ans-text">Helperland has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to assign the best professional available.Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all future bookings.You will receive an email with details about your professional prior to your appointment.</p>
              </div>
            </div>
          
            <!-- Question3 Starts -->
            <div class="que">
              <a class="que-text" href="" data-toggle="collapse" data-target="#q3">
                <img class="r-arrow" src="Images/right.png">Can I skip or reschedule bookings?</a>
            </div>
            <div id="q3" class="collapse">
              <div class="ans">
                <p class="ans-text">You can reschedule any booking for free at least 24 hours in advance of the scheduled start time. If you need to skip a booking within the minimum commitment, we’ll credit the value of the booking to your account. You can use this credit on future cleanings and other Helperland services.</p>
              </div>
            </div>
          
            <div class="q-footer">
              <a href="" class="que-footer">For more help </a>
            </div>
          </div>
        </section>
        <!-- QA-div Starts -->

      </div>
    </section>
    <!-- right-side ends -->
  
  </div>
</div>
<!-- Book-now body Ends -->
      

<div class="payment-modal">
  <button class="btn btn-success btn-payment" data-toggle="modal" data-target="#payment">Payment Summary</button>
</div>

<!-- Payment-Summary Modal Starts -->
<section class="Payment-Summary-Modal">
  <div class="modal fade" id="payment">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="card-header">Payment Summary <button type="button" class="btn close" data-dismiss="modal">&times;</button></div>
          <div class="modal-body">
            <div class="card-body">

              <div class="extraS">
                <p class="body-text" id="Date-Selected">19/01/2022</p>
                <p class="body-right" id="time-Selected" >8:00</p>
              </div>
              
              <p class="body-text" id="duration"><b>Duration</b></p>
              
              <p class="body-text" >Basic<span class="body-right">3 Hrs</span></p>
              <p class="body-text" id="extra1"></p>
              <div class="extraS">
                <p class="body-text" id="extraService11"></p>
                <p class="body-right" id="extraRight11"></p>
              </div>
              <p class="body-text" id="extra1"></p>
              <div class="extraS">
                <p class="body-text" id="extraService22"></p>
                <p class="body-right" id="extraRight22"></p>
              </div>
              <p class="body-text" id="extra1"></p>
              <div class="extraS">
                <p class="body-text" id="extraService33"></p>
                <p class="body-right" id="extraRight33"></p>
              </div>
              <p class="body-text" id="extra1"></p>
              <div class="extraS">
                <p class="body-text" id="extraService44"></p>
                <p class="body-right" id="extraRight44"></p>
              </div>
              <p class="body-text" id="extra1"></p>
              <div class="extraS">
                <p class="body-text" id="extraService55"></p>
                <p class="body-right" id="extraRight55"></p>
              </div>
              <hr>
              <div class="extraS">
                <p class="body-text" id="totalServiceTime"><b>Total Service Time</b></p>
                <p class="body-right" id="totalSeriveHours"><b>3 Hrs</b></p>
              </div>
              <hr>
              <p class="body-text">Per Cleaning<span class="body-right"><b>60.00 €</b></span></p>
              <hr>
              <p class="body-head">Total Payment<span class="body-head-right">60.00 €</span></h6>
            </div>
            <div class="card-footer" data-toggle="modal" data-target="#IncludeServices1">
              <p class="footer-text"><img class="footer-img" src="Images/smiley.png">See What is always included</p> 
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
<!-- Payment-Summary Modal Ends -->


<!-- Include-Service1 Modal Starts -->
<section class="Include-Service1-Modal">
  <div class="modal fade" id="IncludeServices1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">What we include in cleaning</h4>
          <button type="button" class="btn close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-4">
              <p class="ul-head">Bedroom and Living Room</p>
                <ul class="modal-ul">
                  <li><img class="li-img" src="Images/Green-check.png" alt="">Included Dust all accessible surfaces</li>
                  <li><img class="li-img" src="Images/Green-check.png" alt="">Included Wipe down all mirrors and glass fixtures</li>
                  <li><img class="li-img" src="Images/Green-check.png" alt="">Not Included Clean all floor surfaces</li>
                  <li><img class="li-img" src="Images/Green-check.png" alt="">Included Take out garbage and recycling</li>
                  <li><img class="li-img" src="Images/Green-check.png" alt="">To clean up</li>
                  <li><img class="li-img" src="Images/Green-check.png" alt="">Make beds</li>
                </ul>
            </div>
            <div class="col-lg-4">
              <p class="ul-head">Bathrooms</p>
                <ul class="modal-ul">
                  <li><img class="li-img" src="Images/Green-check.png" alt="">Included Wash and sanitize the toilet, shower, tub, sink</li>
                  <li><img class="li-img" src="Images/Green-check.png" alt="">Not Included Dust all accessible surfaces</li>
                  <li><img class="li-img" src="Images/Green-check.png" alt="">Included Wipe down all mirrors and glass fixtures</li>
                  <li><img class="li-img" src="Images/Green-check.png" alt="">Not Included Clean all floor surfaces</li>
                  <li><img class="li-img" src="Images/Green-check.png" alt="">Included Take out garbage and recycling</li>
                </ul>
            </div>
            <div class="col-lg-4">
              <p class="ul-head">Kitchen</p>
              <ul class="modal-ul">
                <li><img class="li-img" src="Images/Green-check.png" alt="">Included Dust all accessible surfaces</li>
                <li><img class="li-img" src="Images/Green-check.png" alt="">Included Empty sink and load up dishwasher</li>
                <li><img class="li-img" src="Images/Green-check.png" alt="">Included Clean all floor surfaces</li>
                <li><img class="li-img" src="Images/Green-check.png" alt="">Included Take out garbage and recycling</li>
                <li><img class="li-img" src="Images/Green-check.png" alt="">Cleaning the sink and the oven (outside)</li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
<!-- Include-Service1 Modal Ends -->




 
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
    <script>
      $('.cardNo').on('keyup', function() {
      var foo = $(this).val().split(" ").join(""); 
      if (foo.length > 0) {
        foo = foo.match(new RegExp('.{1,4}', 'g')).join(" ");
      }
      $(this).val(foo);
    });
    </script>
  </body>
</html>