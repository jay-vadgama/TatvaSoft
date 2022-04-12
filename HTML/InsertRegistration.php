<?php

include 'config.php';

	if(isset($_POST['registerBtn']))
	{
		$firstname = $_POST['firstname']; 
		$lastname = $_POST['lastname']; 
		$email = $_POST['email'];
		$MobileNo = $_POST['MobileNo']; 
		$password = $_POST['password'];
		$Cpassword = $_POST['Cpassword'];
		
		$emailQuery = " SELECT * FROM `user` WHERE Email = '$email' ";
		$query = mysqli_query($conn,$emailQuery);
		$emailCount = mysqli_num_rows($query);

		if($emailCount>0)
		{
			?>
					<script>
						alert('Opps ! email already exist!');
						window.location.href='Customer-Registration.php';
					</script>
					<?php
		}
		else
		{
			if($password === $Cpassword)
			{
				$pass = password_hash($password,PASSWORD_BCRYPT);
				$insertquery = "INSERT INTO user (`FirstName`, `Lastname`, `Email`, `Password`, `Mobile`,`UserTypeId`,`CreatedDate`) VALUES ('$firstname','$lastname','$email','$pass','$MobileNo','1',NOW())";
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
						window.location.href='Customer-Registration.php';
					</script>
					<?php
				}
			}
			else
			{
				?>
					<script>
						alert('Password are not match!');
						window.location.href='Customer-Registration.php';
					</script>
					<?php
			}
		}
	}





	


 
?>