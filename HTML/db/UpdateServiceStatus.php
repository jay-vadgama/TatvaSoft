<?php
use function PHPSTORM_META\map;
session_start();
$id = $_SESSION['uID'];
include '../config.php'; 

if(isset($_POST['srId']) && isset($_POST['ReasonForCancel']))
{
    $srId = $_POST['srId'];
    $ReasonForCancel = $_POST['ReasonForCancel'];

    $updateStatusQuery = "UPDATE `servicerequest` SET `Status`='2' ,`ReasonForCancel`='$ReasonForCancel' WHERE ServiceRequestId ='$srId'";
    $res = mysqli_query($conn,$updateStatusQuery);
    if($res){
        // echo "Cancelled By SP!";
        echo 1;
    }

}


if(isset($_POST['completeID']))
{
    $completeID = $_POST['completeID'];
    $updateComplete = "UPDATE `servicerequest` SET `Status`='3' WHERE `ServiceRequestId` = '$completeID'";
    $RESupdateComplete = mysqli_query($conn,$updateComplete);
    if($RESupdateComplete)
    {
        echo 3;
    }
    else{
        echo 03;
    }

}

?>