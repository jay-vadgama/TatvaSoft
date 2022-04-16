<?php

use function PHPSTORM_META\map;
session_start();

include '../config.php';

$selectquery = "SELECT u.FirstName, u.LastName , sr.ServiceRequestId , sr.ServiceStartDate,
                date_format(sr.ServiceStartDate, '%d-%m-%Y') as `date`, 
                date_format(sr.ServiceStartDate, '%H:%i') as `time`, sr.ExtraHours, sr.ServiceHours, 
                sr.TotalCost ,sr.ServiceProviderId, sr.Status,
                sra.AddressLine1 , 
                sra.AddressLine2 , 
                sra.City , 
                sra.PostalCode 
                FROM user u 
                JOIN servicerequest sr ON u.UserId = sr.UserId 
                JOIN servicerequestaddress sra ON sr.ServiceRequestId = sra.ServiceRequestId ";

    $query = mysqli_query($conn,$selectquery);
    $res = mysqli_fetch_all($query , MYSQLI_ASSOC);

    
    if(count($res)>0)
    {
        for($i = 0 ; $i<count($res); $i++)
        {
            // echo '<pre>';
            // print_r($res[$i]);

            if(isset($res[$i]['ServiceProviderId']) ? $res[$i]['ServiceProviderId'] : null)
            {
                $spID = $res[$i]['ServiceProviderId'];
                // echo $spID;
            }
            


            $selectquery2 = "SELECT * FROM `user` WHERE `UserTypeId`='2' AND UserId='$spID' ";
            $query2 = mysqli_query($conn,$selectquery2);
            $res2 = mysqli_fetch_all($query2 , MYSQLI_ASSOC);
            // echo '<pre>';
            
            $res[$i]['SPname'] = $res2[0]['FirstName'].' '.$res2[0]['LastName'];
            $res[$i]['SPprofile'] = $res2[0]['UserProfilePicture'];
            // print_r($res2);
        }
        echo json_encode($res);
    }else
    {
        echo 0;
    }
   
    
    


?>