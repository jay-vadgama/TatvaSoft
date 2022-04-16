<?php

use function PHPSTORM_META\map;
session_start();
$id = $_SESSION['uID'];

include '../config.php';

    $selectquery = "SELECT sr.ServiceRequestId , sr.ServiceStartDate, sr.ServiceHours, sr.ExtraHours, 
                    date_format(sr.ServiceStartDate, '%d-%m-%Y') as `date`, 
                    date_format(sr.ServiceStartDate, '%H:%i') as `time` , 
                    sr.TotalCost ,sr.Status, u.FirstName , u.LastName ,u.UserProfilePicture ,
                    r.Ratings ,r.Comments 
                    FROM user u 
                    RIGHT JOIN servicerequest sr ON sr.UserId = u.UserId 
                    RIGHT JOIN rating r ON sr.ServiceRequestId = r.ServiceRequestId 
                    WHERE sr.Status='3' AND r.RatingTo='$id'";

    $query = mysqli_query($conn,$selectquery);
    $num = mysqli_num_rows($query);
    if($query)
    {
        $data = array();
        while($res = mysqli_fetch_assoc($query))
        {
            $data[] = $res;
        }
    }
echo json_encode($data);






?>