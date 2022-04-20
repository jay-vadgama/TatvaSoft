<?php

use function PHPSTORM_META\map;
session_start();
$id = $_SESSION['uID'];
$uEmail = $_SESSION['uEmail'];
include '../config.php';

    $selectquery = "SELECT sr.ServiceRequestId , 
                        sr.ServiceStartDate, sr.ServiceHours, sr.ExtraHours,
                        date_format(sr.ServiceStartDate, '%d-%m-%Y') as `date`, 
                        date_format(sr.ServiceStartDate, '%H:%i') as `time` , 
                        sr.TotalCost ,sr.Status, u.FirstName , u.LastName ,u.UserProfilePicture ,
                        (SELECT ROUND(AVG(Ratings),2) AS ratings FROM rating WHERE RatingTo = r.RatingTo ) AS Ratings  
                    FROM user u 
                    RIGHT JOIN servicerequest sr ON sr.ServiceProviderId = u.UserId 
                    RIGHT JOIN rating r ON sr.ServiceRequestId = r.ServiceRequestId
                    WHERE sr.UserId = '$id' AND (sr.Status IS NULL || sr.Status=1 ) ";
    
    $query = mysqli_query($conn,$selectquery);
    $num = mysqli_num_rows($query);
    if($query){
        $data = array();
        while($res = mysqli_fetch_assoc($query))
        {
            $data[] = $res;
        }
    }
    echo json_encode($data);





// -------------------- SP NAME AND RATING FOR THE SERVICE ----------------

// $selectSPQuery = "SELECT sr.ServiceRequestId ,
//                         u.UserProfilePicture ,
//                         u.FirstName, 
//                         u.LastName ,    
//                         r.Ratings 
//                     FROM user u 
//                     JOIN servicerequest sr ON u.UserId = sr.ServiceProviderId 
//                     JOIN rating r ON sr.ServiceRequestId = r.ServiceRequestId 
//                     WHERE sr.UserId = '8' AND sr.Status = '1'";

// $query2 = mysqli_query($conn,$selectSPQuery);
//     $num2 = mysqli_num_rows($query2);
//     if($query2){
//         $data1 = array();
//         while($res1 = mysqli_fetch_assoc($query))
//         {
//             $data1[] = $res;
//         }
//     }
//     echo json_encode($data1);






// include 'config.php';
//         $id = $_SESSION['uID'];
//         $selectquery = "SELECT `ServiceRequestId`, date_format(ServiceStartDate, '%d-%m-%Y') as `date`, date_format(ServiceStartDate, '%H:%i:%s') as `time`, `TotalCost`  FROM `servicerequest` WHERE UserId = '$id' ";
        
//         $selectquery =  "SELECT * FROM servicerequest
//                           JOIN servicerequestaddress ON servicerequest.ServiceRequestId  = servicerequestaddress.ServiceRequestId
//                           JOIN user ON servicerequest.UserId = user.UserId;";
//         WHERE UserID='$id'

//         $query =mysqli_query($conn,$selectquery);
//         $num = mysqli_num_rows($query);
        
//         while($res = mysqli_fetch_assoc($query))
//         { 
//           echo $res['TotalCost'] . "<br>";

// echo $res['date']; echo $res['time']; 
// echo $res['TotalCost'];
// echo 1;

?>