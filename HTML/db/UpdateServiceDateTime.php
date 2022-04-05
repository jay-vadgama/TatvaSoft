<?php

use function PHPSTORM_META\map;
session_start();
$id = $_SESSION['uID'];
$uEmail = $_SESSION['uEmail'];
include '../config.php';

    if(isset($_POST['newDate']) && isset($_POST['newTime']) && isset($_POST['newResId']) )
    {
        $newResId = $_POST['newResId'];
        $newDate = $_POST['newTime'];
        $newTime = $_POST['newDate'];
        

        // converting date and time in single entity
        $temp_date = strtotime($newDate.' '.$newTime);
        $DBdate = date('Y-m-d h:i:s', $temp_date);

        $updateTimeDateQuery = "UPDATE `servicerequest` SET `ServiceStartDate`='$DBdate' WHERE ServiceRequestId = '$newResId'";
        $RESupdateTimeDateQuery = mysqli_query($conn,$updateTimeDateQuery);
        if($RESupdateTimeDateQuery == TRUE){
            // echo "New Date And Time Updated!";
            echo 1;
        }else{
            echo 0;
        }
    }else
    {
        echo 0;
    }






?>