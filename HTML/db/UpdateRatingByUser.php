<?php
session_start();
$rateFrom = $_SESSION['uID'];
$custName = $_SESSION['uName'];
include '../config.php'; 

if(isset($_POST['newRateId']) && isset($_POST['onTimeArrival']) && isset($_POST['Friendly']) && isset($_POST['QualityOfService']) && isset($_POST['comment']))
{
    $newRateId = $_POST['newRateId'];
    $onTimeArrival = $_POST['onTimeArrival'];
    $Friendly = $_POST['Friendly'];
    $QualityOfService = $_POST['QualityOfService'];

    $tempOTA = $onTimeArrival/5;
    $tempF = $Friendly/5;
    $tempQOS = $QualityOfService/5;
    
    $rating = ($tempOTA + $tempF + $tempQOS)/3;
    // echo $rating;
    
    $comment = $_POST['comment'];

    $selectSP = "SELECT ServiceProviderId FROM `servicerequest` WHERE ServiceRequestId = '$newRateId'";
    $resselectSP = mysqli_query($conn,$selectSP);
    $count = mysqli_num_rows($resselectSP);

    if($count > 0)
    {
        $fetchedID = mysqli_fetch_assoc($resselectSP);
        // print_r($fetchedID['ServiceProviderId']);
        $rateTO = $fetchedID['ServiceProviderId'];
        // echo $rateTO;

        $updateRate = "UPDATE `rating` 
                    SET `RatingFrom`='$rateFrom',`RatingTo`='$rateTO',
                    `Ratings`='$rating',`Comments`='$comment',
                    `RatingDate`=NOW() ,
                    `OnTimeArrival`='$tempOTA',
                    `Friendly`='$tempF',
                    `QualityOfService`='$tempQOS' WHERE `ServiceRequestId`='$newRateId'";
        $Res = mysqli_query($conn , $updateRate);
        if($Res == TRUE){
            // echo "Rating Given Successfully!";
            echo 1;
        }else{
            echo 0;
        }

    }else{
        echo 0;
    }
}else{
    echo 0;
}


?>