<?php

use function PHPSTORM_META\map;
session_start();

include '../config.php';

$selectquery = "SELECT `UserId`, `FirstName`, `LastName`,`UserTypeId`,`Mobile`,`ZipCode`,date_format(CreatedDate, '%d-%m-%Y') as `date` ,`Status` FROM `user` WHERE (UserTypeId ='1' || UserTypeId ='2') ";

$query = mysqli_query($conn,$selectquery);
    $num = mysqli_num_rows($query);
    if($query)
    {
        $data = array();
        while($res = mysqli_fetch_assoc($query))
        {
            $data[] = $res;
        }
    }else{
        echo 0;
    }
    echo json_encode($data);


?>