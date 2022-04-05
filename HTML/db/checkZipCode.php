<?php

use function PHPSTORM_META\map;
session_start();
$id = $_SESSION['uID'];
$uEmail = $_SESSION['uEmail'];
$lastID;
include '../config.php';

    // ----------TAB-1----------
    if(isset($_POST['zipcode'])){
        $postalcode = $_POST['zipcode'];
        $query =  "SELECT PostalCode FROM `useraddress` WHERE `Type` ='2' AND PostalCode = '$postalcode' ";
        $res = mysqli_query($conn,$query);
        // mysqli_num_rows($res);
        if($res->num_rows > 0){
            // $row = mysqli_fetch_assoc($res);
            // print_r($row);
            echo 1;
        }
        else{
            echo 0;
            // '<div class="alert alert-danger"><strong>Sorry!</strong> Service is not available at this Zipcode.</div>'
        }
    }

?>