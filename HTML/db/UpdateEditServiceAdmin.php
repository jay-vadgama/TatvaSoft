<?php

session_start();
$id = $_SESSION['uID'];
include '../config.php'; 


if(isset($_POST['modalUpdateID']) && isset($_POST['serviceDate']) && isset($_POST['servicetime']) && isset($_POST['streetName']) && isset($_POST['houseNo']) && isset($_POST['postalCode']) && isset($_POST['city']) && isset($_POST['ReasonTxt'])) 
{
    $modalUpdateID = $_POST['modalUpdateID'];

    $serviceDate = $_POST['serviceDate'];
    $servicetime = $_POST['servicetime'];

    // converting date and time in single entity
    $temp_date = strtotime($serviceDate.' '.$servicetime);
    $Sdate = date('Y-m-d h:i:s', $temp_date);
    // echo $Sdate; 2022-04-02 08:00:00
    



    $streetName = $_POST['streetName'];
    $houseNo = $_POST['houseNo'];
    $postalCode = $_POST['postalCode'];
    $city = $_POST['city'];
    $ReasonTxt = $_POST['ReasonTxt'];

    $updateQuery = "UPDATE `servicerequest` 
                    SET `ServiceStartDate`='$Sdate',`ZipCode`='$postalCode',`Status`='1',`ReasonForReschedule`='$ReasonTxt',
                    `ModifiedDate`=NOW(),`ModifiedBy`='3',`HasIssue`='1' 
                    WHERE `ServiceRequestId` = '$modalUpdateID' ";
    $result = mysqli_query($conn,$updateQuery);
    if($result)
    {
        // echo "date and time updated";
        $updateAddressQuery ="UPDATE `servicerequestaddress` 
                                SET `AddressLine1`='$streetName',
                                `AddressLine2`='$houseNo',
                                `City`='$city',
                                `PostalCode`='$postalCode' WHERE ServiceRequestId = '$modalUpdateID'";
        $result2 = mysqli_query($conn,$updateAddressQuery);
        if($result2){
            // echo 'both updated';
            echo 1;
        }
        else{
            echo "something went wrong!";
        }
        

    }


}



?>
