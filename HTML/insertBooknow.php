<?php

use function PHPSTORM_META\map;

include 'config.php';


    if(isset($_POST['zipcode']))
    {
        $postalcode = $_POST['zipcode'];
        $query =  "SELECT ZipCode FROM user WHERE ZipCode ='$postalcode' ";
        $res = mysqli_query($conn,$query);
        if($res->num_rows > 0){
            $row = mysqli_fetch_assoc($res);
            echo '<div class="alert alert-success"><strong>Hurray!</strong> Service is available at this Zipcode.</div>';
        }else{
            echo '<div class="alert alert-danger"><strong>Sorry!</strong> Service is available not at this Zipcode.</div>';
        }
    }
    
    if(isset($_POST['ServiceDate']) || isset($_POST['ServiceStartTime']) || isset($_POST['ServiceHour']) || isset($_POST['comments']) || isset($_POST['HasPet']) || isset($_POST['check']) )
    {
        $ServiceDate = $_POST['ServiceDate'];
        $ServiceStartTime = $_POST['ServiceStartTime'];
        $ServiceHour = $_POST['ServiceHour'];
        $comments = isset($_POST['comments'])!=""? $_POST['comments'] : '';
        $HasPet = isset($_POST['HasPet'])!=""? $_POST['HasPet'] : '';
        $check = isset($_POST['check'])!=""? $_POST['check']: [];
        $checksum = count($check);
        $charge_extra = $checksum* 10;
        $total = $charge_extra + $ServiceHour*20;
        $temp_date = strtotime($ServiceDate.' '.$ServiceStartTime);
        $date = date('Y-m-d h:i:s', $temp_date);



        $sql =  "INSERT INTO servicerequest (`ServiceStartDate`,`ServiceHours`,`ExtraHours`, `Comments`, `ServiceHourlyRate`,`HasPets`,`SubTotal`,`TotalCost`) VALUES ('$date','$ServiceHour','$checksum','$comments','20','$HasPet','$total','$total')";
        $res = mysqli_query($conn,$sql);
        if($res==1){
            echo 'true';
        }   
        else{
            echo 'false';
        }    
    }

     
    if(isset($_POST['streetName']) || isset($_POST['houseNo']) || isset($_POST['postalCode']) || isset($_POST['city']) || isset($_POST['mobileNo'])  ){
        $streetName = $_POST['streetName'];
        $postalCode = $_POST['postalCode'];
        $city = $_POST['city'];
        $mobileNo = $_POST['mobileNo'];
        $houseNo = $_POST['houseNo'];
        $sql = "INSERT INTO useraddress (AddressLine1, AddressLine2, PostalCode, State, City, Mobile, Email) VALUES('$streetName', '$houseNo', '$postalCode', 'Gujarat',  '$city', '$mobileNo', null)"; 
        $res = mysqli_query($conn,$sql);
        // echo $res;
        if($res==1){
            echo 'true';
        }
        else{
            echo 'false';
        }
    }

    if(isset($_POST['cardNumber']) || isset($_POST['cardMonth']) || isset($_POST['cardYear']) || isset($_POST['cardCVV']) ){
        $cardNumber = $_POST['cardNumber'];
        $cardMonth = $_POST['cardMonth'];
        $cardYear = $_POST['cardYear'];
        $cardCVV = $_POST['cardCVV'];
        
        // $Query = "SELECT `ServiceRequestId` FROM `servicerequest` WHERE cvv = '$cardCVV'";
        $query = "INSERT INTO servicerequest (cvv)  VALUES('$cardCVV')";
        $result = mysqli_query($conn,$query); 
        
    }
?>