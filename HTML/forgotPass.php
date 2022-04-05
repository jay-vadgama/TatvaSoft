<?php

include('config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function sendmail($email,$reset_token){

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'helperland.services.test@gmail.com';                     //SMTP username
        $mail->Password   = 'Help@others';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('helperland.services.test@gmail.com', 'HelperLand');
        $mail->addAddress( $email);     //Add a recipient
        
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Password Reset Link from Helperland';
        $mail->Body    = "We got a request from you to reset your password!<br>Click on the link <a href='http://localhost/TatvaSoft/HTML/updatePass.php?email=$email&reset_token=$reset_token'>Reset Password</a>";
        
    
        $mail->send();
        return true;
        // echo 'Message has been sent';
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}

if(isset($_POST['send']))
{
    $email = $_POST['email'];
    $query = "SELECT * FROM `user` WHERE `Email` = '$email'";
    $res = mysqli_query($conn,$query);
    
    if($res)
    {
        if(mysqli_num_rows($res)==1)
        {
            // echo "row found";
            $reset_token = bin2hex(random_bytes(16));
            date_default_timezone_set('Asia/kolkata');
            $date = date("Y-m-d");
            $update_query= "UPDATE `user` SET `reset_token`='$reset_token',`token_expire`='$date'";
            $update_res = mysqli_query($conn,$update_query);
            if($update_res && sendmail($email,$reset_token))
            {
                ?>
                <script>
                    alert('Password Reset Link Sent to mail.');
                    window.location.href='Home.php';
                </script>
                <?php
            }else{
                session_unset();
                ?>
                <script>
                    alert('Opps! Server goes Down.');
                    window.location.href='Home.php';
                </script>
                <?php
            }
            

        }else
        {
            session_unset();
            ?>
            <script>
                alert('Email not found!');
                window.location.href='Home.php';
            </script>
            <?php
        }

    }
    else
    {
        session_unset();
        ?>
        <script>
            alert('Opps! Server goes Down.');
            window.location.href='Home.php';
        </script>
        <?php
    }


}
?>