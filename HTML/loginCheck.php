<?php

    include 'config.php';

    session_start();

    if(isset($_SESSION['FirstName'])){
        header("Location: Home.php");
      }

    if(isset($_POST['login'])){
        $username = $_POST['email']; 
	    $pass = ($_POST['pass']);

        $query =  "SELECT * FROM user WHERE Email='$username' AND Password='$pass'";
        $res = mysqli_query($conn,$query);
        if($res->num_rows > 0){
            $row = mysqli_fetch_assoc($res);
            $_SESSION['FirstName'] = $row['FirstName'];
            header("Location: Customer-Service-History.php");
            
        }else{
            ?>
            <script> 
            alert("Username or Password is Wrong.");
			window.location='Home.php';
            </script>
            <?php
        }

    }


?>