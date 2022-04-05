<?php
session_start();
$id = $_SESSION['uID'];
    include '../config.php';

    // read
    $displayQuery = "SELECT `AddressId`, `AddressLine1`, `AddressLine2`, `City`, `PostalCode`, `Mobile` FROM `useraddress` WHERE UserId = '$id'";
    $result = mysqli_query($conn,$displayQuery); 

    if(mysqli_num_rows($result) > 0)
    {
        $data = array();
        while($row = mysqli_fetch_array($result)){
           
            $data[] = $row;
        }
    }

    echo json_encode($data);
?>