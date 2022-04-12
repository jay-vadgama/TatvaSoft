<?php
use function PHPSTORM_META\map;
session_start();
$id = $_SESSION['uID'];
include '../config.php'; 

// Fetch
if(isset($_POST['getId']))
{
    $getId = $_POST['getId'];
    $Fetchquery = "SELECT u.FirstName, u.LastName , sr.ServiceRequestId , sr.ServiceStartDate,
                        date_format(sr.ServiceStartDate, '%Y-%m-%d') as `date`, 
                        date_format(sr.ServiceStartDate, '%H:%i') as `time` , 
                        sr.TotalCost , 
                        sra.AddressLine1 , 
                        sra.AddressLine2 , 
                        sra.City , 
                        sra.PostalCode 
                    FROM user u 
                    JOIN servicerequest sr ON u.UserId = sr.UserId 
                    JOIN servicerequestaddress sra ON sr.ServiceRequestId = sra.ServiceRequestId
                    WHERE sr.ServiceRequestId = '$getId' ";
    $result = mysqli_query($conn,$Fetchquery);
    $data = mysqli_fetch_assoc($result);
    // print_r($data);
    echo json_encode($data);
}





?>