<?php
use function PHPSTORM_META\map;
session_start();
$id = $_SESSION['uID'];
include '../config.php'; 

if(isset($_POST['RowId']))
{
    $RowId = $_POST['RowId'];
    $selectquery = "SELECT sr.ServiceRequestId , sr.ServiceStartDate, sr.ServiceHours, sr.ExtraHours,sr.HasPets, 
                    date_format(sr.ServiceStartDate, '%d-%m-%Y') as `date` , 
                    date_format(sr.ServiceStartDate, '%H:%i') as `time` , 
                    sr.TotalCost , sr.Status, sr.TotalCost , 
                    u.FirstName , u.LastName , 
                    sra.AddressLine1, sra.AddressLine2, sra.City ,sra.PostalCode, sra.Mobile, sra.Email 
                    FROM user u 
                    RIGHT JOIN servicerequest sr ON sr.UserId = u.UserId 
                    JOIN servicerequestaddress sra ON sr.ServiceRequestId = sra.ServiceRequestId 
                    WHERE sr.UserId = '$id' AND (sr.Status IS NULL || sr.Status=1 ) AND sr.ServiceRequestId='$RowId'";

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


}
    
?>