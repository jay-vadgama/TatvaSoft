<?php
use function PHPSTORM_META\map;
session_start();
$id = $_SESSION['uID'];
include '../config.php'; 

if(isset($_POST['newCnlId']) && isset($_POST['Reason']))
{
    $newCnlId = $_POST['newCnlId'];
    $Reason = $_POST['Reason'];

    $updateStatusQuery = "UPDATE `servicerequest` SET `Status`='2' ,`ReasonForCancel`='$Reason' WHERE ServiceRequestId ='$newCnlId'";
    $res = mysqli_query($conn,$updateStatusQuery);
    if($res){
        // echo "Cancelled By CUST!";
        echo 1;
    }else{
        echo 0;
    }

}else{
    echo 0;
}



?>