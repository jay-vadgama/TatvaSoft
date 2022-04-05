<?php
session_start();
$id = $_SESSION['uID'];
    include '../config.php';
    extract($_POST);

// insert
if(isset($_POST['streetName']) && isset($_POST['houseNo']) && isset($_POST['postalCode']) && isset($_POST['city'])  && isset($_POST['MobileNo']))
{
    if(!empty($streetName) && !empty($houseNo) && !empty($postalCode) && !empty($city) && !empty($MobileNo))
    {
        $insertQuery = "INSERT INTO `useraddress`(`UserId`,`AddressLine1`, `AddressLine2`, `City`, `PostalCode`, `Mobile`) VALUES ( '$id','$streetName','$houseNo','$city','$postalCode','$MobileNo')";
    
        $res = mysqli_query($conn,$insertQuery);
        if($res==TRUE)
        {
            echo " Address added Successfully.";
        }else
        {
            echo "Opps! Data is not inserted.";
        }
        
        
    }else
    {
        echo "Please Fill all the fileds.";
    }
}
    

// delete 
if(isset($_POST['AddId']))
{
    $deleteQuery = "DELETE FROM `useraddress` WHERE AddressId = '$AddId' ";
    $res = mysqli_query($conn,$deleteQuery);
    if($res==TRUE)
    {
        echo 1;
    }else
    {
        echo 0;   
    }
}

    
?>