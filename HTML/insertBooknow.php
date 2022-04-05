<?php

use function PHPSTORM_META\map;
session_start();
$id = $_SESSION['uID'];
$uEmail = $_SESSION['uEmail'];
$lastID;
include 'config.php';

    // ----------TAB-3----------
    if(isset($_POST['streetName']) && isset($_POST['houseNo']) && isset($_POST['postalCode']) && isset($_POST['city']) && isset($_POST['mobileNo'])  )
    {
        $streetName = $_POST['streetName'];
        $postalCode = $_POST['postalCode'];
        $city = $_POST['city'];
        $mobileNo = $_POST['mobileNo'];
        $houseNo = $_POST['houseNo'];
        $sql = "INSERT INTO useraddress (UserId ,AddressLine1, AddressLine2, PostalCode, State, City, Mobile, Email) VALUES('$id','$streetName', '$houseNo', '$postalCode', 'Gujarat',  '$city', '$mobileNo', '$uEmail') "; 
        $res = mysqli_query($conn,$sql);
        // echo $res;
        if($res==1){
            echo 'true';
        }
        else{
            echo 'false';
        }
    }
    
    // ----------TAB-FINAL----------
    if(isset($_POST['zipcode']) && isset($_POST['SeviceDate']) && isset($_POST['ServiceStarttime']) && isset($_POST['ServiceHour']) && isset($_POST['checkExtra']) && isset($_POST['comments']) && isset($_POST['checkPet']) && isset($_POST['address'])  )
    {
        $zipcode = $_POST['zipcode'];
        $SeviceDate = $_POST['SeviceDate'];
        $ServiceStarttime = $_POST['ServiceStarttime'];

        // converting date and time in single entity
        $temp_date = strtotime($SeviceDate.' '.$ServiceStarttime);
        $Sdate = date('Y-m-d h:i:s', $temp_date);

        $ServiceHour = $_POST['ServiceHour'];
        $checkExtra = $_POST['checkExtra'];
        // print_r($checkExtra);
        $comments = $_POST['comments'];
        $checkPet = $_POST['checkPet'];
        $address = $_POST['address'];

    // Normal Service Hour Cost
        $ServiceHourlyRate = $ServiceHour*20;
    // count
        $cntExtraHours = count($checkExtra);
    // extra-hours
        $ExtraHours = $cntExtraHours*(0.5); 
    // extrahours-Cost
        $ExtraCost = $ExtraHours*20;
    // Total Cost
        $totalcost = $ServiceHourlyRate + $ExtraCost;

        $insertBookQuery = "INSERT INTO `servicerequest`(`UserId`, `ServiceStartDate`, `ZipCode`, `ServiceHourlyRate`, `ServiceHours`, `ExtraHours`, `SubTotal`, `Discount`, `TotalCost`, `Comments`, `HasPets`) VALUES ('$id','$Sdate','$zipcode','$ServiceHourlyRate','$ServiceHour','$ExtraHours','$totalcost','0','$totalcost','$comments','$checkPet' )";
        $result = mysqli_query($conn,$insertBookQuery);
        if($result)
        {
            // echo "Service Booked!";
            
            $lastID =  mysqli_insert_id($conn);
            // echo $lastID;
            $res = json_encode($lastID);
            echo $res;
            // echo $address;
            
            $insertRatingQuery = "INSERT INTO `rating`(`ServiceRequestId`) VALUES ('$lastID')";
            $RESinsertRatingQuery = mysqli_query($conn,$insertRatingQuery);



// select address from user address by selected address ID ----------------------------
            $selectAddUser = "SELECT * FROM `useraddress` WHERE AddressId ='$address';";
            $RESselectAddUser = mysqli_query($conn,$selectAddUser);
            $numRow =  mysqli_num_rows($RESselectAddUser);
            // echo $numRow;
            if($numRow>0)
            {
                // echo "address found";

                for($i=0; $i<$cntExtraHours; $i++)
                {
                    $insExtra = "INSERT INTO `servicerequestextra`(`ServiceRequestId`, `ServiceExtraId`) VALUES ('$lastID','$checkExtra[$i]' )";
                    $RESinsExtra = mysqli_query($conn,$insExtra);
                    // echo "extra added!";
                }
            
                

            // Fetch and Inserted Address into ServiceRequestAddress ----------------------------
                $AddressData = mysqli_fetch_assoc($RESselectAddUser);
                $insAddressLine1 = $AddressData['AddressLine1'];
                $insAddressLine2 = $AddressData['AddressLine2'];
                $insCity = $AddressData['City'];
                $insPostalCode = $AddressData['PostalCode'];
                $insMobile = $AddressData['Mobile']; 
                // echo $uEmail;

                $insAddress = "INSERT INTO `servicerequestaddress`( `ServiceRequestId`, `AddressLine1`, `AddressLine2`, `City`, `State`, `PostalCode`, `Mobile`, `Email`) VALUES ('$lastID','$insAddressLine1','$insAddressLine2','$insCity','Gujarat','$insPostalCode','$insMobile','$uEmail')";
                $RESinsAddress = mysqli_query($conn,$insAddress);
                if($RESinsAddress){
                    // echo $lastID;
                    // echo "Address added to database for that service";

                    

                }else{
                    // echo "Something went wrong with Address!";
                }




            }else{
                echo "address not found!";
            }

                        
        }else{
            echo "Something Went wrong!";
        }
    }


    // echo $lastID;












    




    // if(isset($_POST['ServiceDate']) || isset($_POST['ServiceStartTime']) || isset($_POST['ServiceHour']) || isset($_POST['comments']) || isset($_POST['HasPet']) || isset($_POST['check']) )
    // {
    //     $ServiceDate = $_POST['ServiceDate'];
    //     $ServiceStartTime = $_POST['ServiceStartTime'];
    //     $ServiceHour = $_POST['ServiceHour'];
    //     $comments = isset($_POST['comments'])!=""? $_POST['comments'] : '';
    //     $HasPet = isset($_POST['HasPet'])!=""? $_POST['HasPet'] : '';
    //     $check = isset($_POST['check'])!=""? $_POST['check']: [];
        
    //     $checksum = count($check);
    //     $extra_hour = $checksum/2;
    //     $charge_extra = $checksum* 10;
    //     $total = $charge_extra + $ServiceHour*20;
    //     $temp_date = strtotime($ServiceDate.' '.$ServiceStartTime);
    //     $date = date('Y-m-d h:i:s', $temp_date);



    //     $sql =  "INSERT INTO servicerequest (`ServiceStartDate`,`ServiceHours`,`ExtraHours`, `Comments`, `ServiceHourlyRate`,`HasPets`,`SubTotal`,`TotalCost`) VALUES ('$date','$ServiceHour','$extra_hour','$comments','20','$HasPet','$total','$total')";
    //     $res = mysqli_query($conn,$sql);
    //     if($res==1){
    //         echo 'true';
    //     }   
    //     else{
    //         echo 'false';
    //     }    
    // }

     
    // if(isset($_POST['streetName']) || isset($_POST['houseNo']) || isset($_POST['postalCode']) || isset($_POST['city']) || isset($_POST['mobileNo'])  ){
    //     $streetName = $_POST['streetName'];
    //     $postalCode = $_POST['postalCode'];
    //     $city = $_POST['city'];
    //     $mobileNo = $_POST['mobileNo'];
    //     $houseNo = $_POST['houseNo'];
    //     $sql = "INSERT INTO useraddress (AddressLine1, AddressLine2, PostalCode, State, City, Mobile, Email) VALUES('$streetName', '$houseNo', '$postalCode', 'Gujarat',  '$city', '$mobileNo', null)"; 
    //     $res = mysqli_query($conn,$sql);
    //     // echo $res;
    //     if($res==1){
    //         echo 'true';
    //     }
    //     else{
    //         echo 'false';
    //     }
    // }

    // if(isset($_POST['cardNumber']) || isset($_POST['cardMonth']) || isset($_POST['cardYear']) || isset($_POST['cardCVV']) ){
    //     $cardNumber = $_POST['cardNumber'];
    //     $cardMonth = $_POST['cardMonth'];
    //     $cardYear = $_POST['cardYear'];
    //     $cardCVV = $_POST['cardCVV'];
    //     echo $cardCVV;
    //     // $Query = "SELECT `ServiceRequestId` FROM `servicerequest` WHERE cvv = '$cardCVV'";
    //     // $query = "INSERT INTO servicerequest VALUES cvv = '$cardCVV' ";
    //     // $result = mysqli_query($conn,$query); 
    //     echo mysqli_insert_id($conn);        
    // }
?>