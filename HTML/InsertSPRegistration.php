<?php

include 'config.php';



if(isset($_POST['btnStart']))
{
	$firstname = $_POST['firstname']; 
	$lastname = $_POST['lastname']; 
	$email = $_POST['email']; 
	$Pass = ($_POST['Pass']);
	$ChangePass = ($_POST['ChangePass']);
	$MobileNo = $_POST['MobileNo'];


	$emailQuery = " SELECT * FROM `user` WHERE Email = '$email' ";
	$query = mysqli_query($conn,$emailQuery);
	$emailCount = mysqli_num_rows($query);

		if($emailCount>0)
		{
			?>
					<script>
						alert('Opps ! email already exist!');
						window.location.href='SP-Registration.php';
					</script>
					<?php
		}
		else
		{
			if($Pass === $ChangePass)
			{
				$password = password_hash($Pass,PASSWORD_BCRYPT);
				$insertquery = "INSERT INTO user (`FirstName`, `Lastname`, `Email`, `Password`, `Mobile`,`UserTypeId`) VALUES ('$firstname','$lastname','$email','$password','$MobileNo','2')";
				$iquery = mysqli_query($conn,$insertquery);
				if($iquery)
				{
					
					?>
					<script>
						alert('User Registerd Successfully!');
						window.location.href='Home.php';
					</script>
					<?php
				}
				else
				{
					?>
					<script>
						alert('Something Went Wrong!');
						window.location.href='SP-Registration.php';
					</script>
					<?php
				}
			}
			else
			{
				?>
					<script>
						alert('Password are not match!');
						window.location.href='SP-Registration.php';
					</script>
					<?php
			}
		}

	
}

 
?>