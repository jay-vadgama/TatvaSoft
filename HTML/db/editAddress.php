<?php
session_start();
$id = $_SESSION['uID'];
    include '../config.php';
    
// Fetch
if(isset($_POST['getId']))
{
    $getId = $_POST['getId'];
    $Editquery = "SELECT `AddressLine1`, `AddressLine2`, `City`, `PostalCode`, `Mobile` FROM `useraddress` WHERE AddressId = '$getId' AND UserId='$id'";
    $result = mysqli_query($conn,$Editquery);
    $data = mysqli_fetch_assoc($result);
    // print_r($data);
    echo json_encode($data);
}

// Update
if(isset($_POST['editId']) && isset($_POST['houseNo']) && isset($_POST['streetName']) && isset($_POST['postalCode']) && isset($_POST['city']) && isset($_POST['MobileNo']))
{
    $editId = $_POST['editId'];
    $houseNo = $_POST['houseNo'];
    $streetName = $_POST['streetName'];
    $postalCode = $_POST['postalCode'];
    $city = $_POST['city'];
    $MobileNo = $_POST['MobileNo'];

    $updateQuery = "UPDATE `useraddress` SET `AddressLine1`='$streetName',`AddressLine2`='$houseNo',`City`='$city',`PostalCode`='$postalCode',`Mobile`='$MobileNo'  WHERE `AddressId`='$editId'";
    $result = mysqli_query($conn,$updateQuery);
    
    if($result){
        echo 1;
    }
    else{
        echo 0;
    }
    
}

?>