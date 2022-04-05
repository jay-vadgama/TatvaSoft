<?php
use function PHPSTORM_META\map;
session_start();
$id = $_SESSION['uID'];
include '../config.php'; 

if(isset($_POST['RowId']))
{
    $RowId = $_POST['RowId'];
    $selectquery = "SELECT u.FirstName,  
                            u.LastName, 
                            u.Mobile , 
                            sr.ServiceRequestId , sr.HasPets,
                            sr.ServiceStartDate,sr.ServiceHours, sr.ExtraHours,
                            date_format(sr.ServiceStartDate, '%d-%m-%Y') as `date`, 
                            date_format(sr.ServiceStartDate, '%H:%i') as `time` , 
                            sr.TotalCost , 
                            sra.AddressLine1 , 
                            sra.AddressLine2 , 
                            sra.City , 
                            sra.PostalCode 
                    FROM user u 
                    JOIN servicerequest sr ON u.UserId = sr.UserId 
                    JOIN servicerequestaddress sra ON sr.ServiceRequestId = sra.ServiceRequestId
                    WHERE sr.Status ='1' AND sr.ServiceRequestId='$RowId'";

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