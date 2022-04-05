<?php
use function PHPSTORM_META\map;
session_start();
$id = $_SESSION['uID'];
include '../config.php'; 

if(isset($_POST['srId']))
{
    $ServiceId = $_POST['srId'];
    $updateQuery = "UPDATE `servicerequest` SET `ServiceProviderId`='$id',`SPAcceptedDate`= 'CURDATE()',`Status`='1' WHERE `ServiceRequestId`='$ServiceId'";
    $res = mysqli_query($conn,$updateQuery);
    if($res==TRUE)
    {
        echo 1;
    }else
    {
        echo 0;   
    }
}

?>