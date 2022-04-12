<?php

use function PHPSTORM_META\map;
session_start();

include '../config.php';


if(isset($_POST['servicecancelId']))
{
    $srId = $_POST['servicecancelId'];

    $updateStatusQuery = "UPDATE `servicerequest` SET `Status`='2' WHERE ServiceRequestId ='$srId'";
    $res = mysqli_query($conn,$updateStatusQuery);
    if($res){
        // echo "Cancelled By Admin!";
        echo 1;
    }else{
        echo 0;
    }



}



?>