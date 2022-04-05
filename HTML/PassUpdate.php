<?php

use LDAP\Result;

    include 'config.php';
session_start();

$uName = $_SESSION['uName'];
$typeId = $_SESSION['typeId'];
$uID = $_SESSION['uID'];
// echo $uID;
if(isset($_POST['oldPass']) || isset($_POST['newPass']) || isset($_POST['finalPass']))
{
    $oldPass = $_POST['oldPass'];
    $newPass = $_POST['newPass'];
    $finalPass = $_POST['finalPass'];
    // echo $uID;
    $email_search = " SELECT * FROM `user` WHERE UserId = '$uID' ";
    $query = mysqli_query($conn,$email_search);
    $email_count = mysqli_num_rows($query);
    
    // echo $email_count;
    if($email_count)
    {
        $email_pass = mysqli_fetch_assoc($query);
        // print_r($email_pass);
    
        $db_pass = $email_pass['Password'];
        // echo $db_pass;
        if(password_verify($oldPass, $db_pass))
        {
            echo 1;
            // echo 'you can insert pass';
            if( $newPass == $finalPass)
            {
                $newPasshash = password_hash($newPass,PASSWORD_BCRYPT);
                // echo $newPasshash;
                $uID;
                $updatePassQuery = "UPDATE `user` SET `Password`='$newPasshash' WHERE UserId='$uID' ";
                $result = mysqli_query($conn,$updatePassQuery);
                if($result)
                {
                    echo 2;
                }else
                {
                    echo 3;
                }
                
            }else
            {
                echo 4;
            }
        }else
        {
            echo "old pass is wrong!";
        }
    }
}
?>