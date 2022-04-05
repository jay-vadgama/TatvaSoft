<?php
session_start();
$id = $_SESSION['uID'];
    include '../config.php';
    extract($_POST);

// insert
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['MobileNo'])  && isset($_POST['dateOfBirth']) && isset($_POST['selectedLang']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $MobileNo = $_POST['MobileNo'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $selectedLang = $_POST['selectedLang'];
    
    $updateQuery = "UPDATE `user` SET `FirstName`='$fname', `LastName`='$lname', `Email`='$email', `Mobile`='$MobileNo',`DateOfBirth`='$dateOfBirth',`LanguageId`='$selectedLang' WHERE UserId='$id'";
    $res = mysqli_query($conn,$updateQuery);
        if($res==TRUE)
        {
            echo 1;
        }else
        {
            echo 0;
        }

}
?>