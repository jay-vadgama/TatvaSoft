<?php

use function PHPSTORM_META\map;
session_start();

include '../config.php';

if(isset($_POST['rowId']))
{
    $rowId = $_POST['rowId'];
    $upadteQuery = "UPDATE `user` SET `IsApproved`='1',`IsActive`='1' ,`Status`='1' WHERE `UserId`='$rowId'";
    $res = mysqli_query($conn,$upadteQuery);
    if($res){
        // echo "User is Activated!";
        echo 1;
    }else{
        echo 0;
    }
    
}

if(isset($_POST['btnId']))
{
    $btnId = $_POST['btnId'];
    $upadteQuery = "UPDATE `user` SET `IsApproved`='0',`IsActive`='0' ,`Status`= '0'  WHERE `UserId`='$btnId'";
    $res = mysqli_query($conn,$upadteQuery);
    if($res){
        // echo "User is De-activated!";
        echo 1;
    }else{
        echo 0;
    }
    
}







?>