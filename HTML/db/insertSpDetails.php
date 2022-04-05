<?php
session_start();
$id = $_SESSION['uID'];
$uEmail = $_SESSION['uEmail'];
    include '../config.php';
    extract($_POST);

// insert
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['MobileNo'])  && isset($_POST['dateOfBirth']) && isset($_POST['nationality']) && isset($_POST['selectedLang']) && isset($_POST['gender']) && isset($_POST['avtar']) && isset($_POST['workWithPet'])) 
{
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $MobileNo = $_POST['MobileNo'];
   $dateOfBirth = $_POST['dateOfBirth'];
   $nationality = $_POST['nationality'];
   $selectedLang = $_POST['selectedLang'];
   $gender = $_POST['gender'];
   $avtar = $_POST['avtar'];
   $workWithPet = $_POST['workWithPet'];

    $updateQuery = "UPDATE `user` SET `FirstName`='$fname',`LastName`='$lname',`Email`='$email',`Mobile`='$MobileNo',`Gender`='$gender',`DateOfBirth`='$dateOfBirth',`UserProfilePicture`='$avtar',`WorksWithPets`='$workWithPet',`LanguageId`='$selectedLang',`NationalityId`='$nationality' WHERE UserId='$id'";
    $res = mysqli_query($conn,$updateQuery);
        if($res==TRUE)
        {
            echo 1;
        }else
        {
            echo 0;
        }

}


// Update SP Address
if(isset($_POST['SPstreetName']) && isset($_POST['SPhouseNo']) && isset($_POST['SPpostalCode']) && isset($_POST['SPcity'])) 
{
    $SPstreetName = $_POST['SPstreetName'];
    $SPhouseNo = $_POST['SPhouseNo'];
    $SPpostalCode = $_POST['SPpostalCode'];
    $SPcity = $_POST['SPcity'];
    // echo $uEmail;

    if(!empty($SPstreetName) && !empty($SPhouseNo) && !empty($SPpostalCode) && !empty($SPcity)){
        $slct = "SELECT * FROM `useraddress` WHERE UserId='$id' ";
        $r = mysqli_query($conn,$slct);
        if($r->num_rows){
            $updateSPadd = "UPDATE `useraddress` SET `AddressLine1`='$SPstreetName',`AddressLine2`='$SPhouseNo',`City`='$SPcity',`PostalCode`='$SPpostalCode',`Email`='$uEmail',`Type`='2' WHERE UserId='$id'";
            $res = mysqli_query($conn,$updateSPadd);
            echo 'yes';
        }else
        {        
            $ins  = "INSERT INTO `useraddress` (`UserId`) VALUES ('$id')";
            $r1 = mysqli_query($conn,$ins);
            if($r1){
                $updateSPadd = "UPDATE `useraddress` SET `AddressLine1`='$SPstreetName',`AddressLine2`='$SPhouseNo',`City`='$SPcity',`PostalCode`='$SPpostalCode',`Email`='$uEmail',`Type`='2' WHERE UserId='$id'";
                $res = mysqli_query($conn,$updateSPadd);

                if($res){
                    // echo $SPpostalCode;
                    $insZip = "INSERT INTO `zipcode` (`ZipcodeValue`) VALUES ('$SPpostalCode')";
                    $rInsZip = mysqli_query($conn,$insZip);
                    echo 11;
                }
                echo 1;
                
            }else{
                echo 0;
            }
        }
    }


}
?>