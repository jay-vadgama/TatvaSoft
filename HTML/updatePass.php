<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/links.php'); ?>
    <title>Update Password</title>
    <style>
        .update{
        display: flex;
        justify-content:center;
        flex-direction: column;
    }
    </style>
</head>
<body>

<?php
    
    include('config.php');

    if(isset($_GET['email']) && isset($_GET['reset_token']))
    {
        $email =  $_GET['email'];
        $reset_token = $_GET['reset_token'];
        date_default_timezone_set('Asia/kolkata');
        $date = date("Y-m-d");
        
        // echo $reset_token;
        // echo $email;
        $query = "SELECT * FROM `user` WHERE `email`='$email' AND `reset_token` = '$reset_token' AND `token_expire` = '$date'";
        $res = mysqli_query($conn,$query);
        if($res)
        {
            if(mysqli_num_rows($res)==1)
            {
                ?>
                <div class="container">
                    <div class="container mt-5">
                        <h1 class="text-center text-success">Update Password</h1>
                    </div>
                    <div class="row">
                    <div class="col-lg-3 col-md-2"></div>
                    <div class="col-lg-6 col-md-8">
                    <form method="post" class="was-validated">
                        <div class="update">
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password" required>
                            </div>
                            <div class="form-group">
                                <label for="Cpassword">Confirm Password:</label>
                                <input class="form-control" type="password" id="Cpassword" name="Cpassword" placeholder="Enter Password" required>
                            </div>
                            <div class="btn-center text-center">
                                <button type="submit" name="updatePassbtn" class="btn btn-success" >Change Password</button>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type='hidden' value="<?php echo $email; ?>" >
                            </div>
                        </div>
                    </form>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-2"></div>
                </div>
                <?php
            }else
            {
                ?>
                <script>
                    alert('Oops! Invalid or Expired Link.');
                    window.location.href='login.php';
                </script>
                <?php
            }
        }else
        {
            ?>
            <script>
                alert('Opps! Server goes Down.');
                window.location.href='login.php';
            </script>
            <?php
        }
    
    }

?>


<?php

    if(isset($_POST['updatePassbtn']))
    {
        
        
        $pass= $_POST['password'];
        $Cpass= $_POST['Cpassword'];
        if($pass === $Cpass)
        {
            $pass_new = password_hash($pass,PASSWORD_BCRYPT);
            $updatePass_query = "UPDATE `user` SET `Password`='$pass_new',`reset_token`=NULL,`token_expire`=NULL WHERE `Email`='$email'";
            // echo $email;
            if(mysqli_query($conn,$updatePass_query)){
                ?>
                <script>
                    alert('Password Updated Successfully!');
                    window.location.href='Home.php';
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    alert('Opps! Server goes Down.');
                </script>
                <?php
            }
        }
        else
        {
            ?>
            <script>
                alert('Password & Confirm Passwords are not matched!');
            </script>
            <?php
        }
    }
?>


</body>
</html>