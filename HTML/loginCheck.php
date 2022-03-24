<?php

    include 'config.php';

    session_start();

    if(isset($_SESSION['FirstName']))
    {
        header("Location: Home.php");
    }

    if(isset($_POST['login']))
    {
        $username = $_POST['email']; 
	    $pass = $_POST['pass'];

        $email_search = "SELECT * FROM `user` WHERE Email = '$username' ";
        $query = mysqli_query($conn,$email_search);
        $email_count = mysqli_num_rows($query);

        // echo $email_count;
        if($email_count)
        {
            $email_pass = mysqli_fetch_assoc($query);
            // print_r($email_pass);

            $_SESSION['uID'] = $email_pass['UserId'];
            $_SESSION['uName'] = $email_pass['FirstName'];

            // $id = $email_pass['UserId'];
            // echo $id;
            
            $db_pass = $email_pass['Password'];
            // echo $pass;
            // print_r($db_pass);
            $_SESSION['typeId'] = $email_pass['UserTypeId'];
            $typeId = $email_pass['UserTypeId'];
            echo $typeId;
            
            if (password_verify($pass, $db_pass)) 
            {
                if($typeId=='1')
                {
                    header("Location: Customer.php");
                    // header("Location: Home.php");
                }
                elseif($typeId=='2')
                {
                    ?>
                    
                    <script>
                        console.log("SP Done");
                    </script>
                    <?php
                    
                    header("Location: ServiceProvider.php");
                }
            } 
            // else {
            //     echo 'Invalid password.';
            // }
            // if($verify)
            // {
            //     echo "hello";
                
                    
            //             header("Location: Customer-Service-History.php");
                
            // }
            
            // if(password_verify($pass,$db_pass) && $typeId=='2'){
            //     echo "hello";
            // }
        //     else{
        //         
        //     }
             
        //         // header("Location: Up-Coming-Service.html");
            
        // }
        // else
        // {
        //     
        }

    }


?>