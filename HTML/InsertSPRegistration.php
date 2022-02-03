<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helperland";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}



if(isset($_POST['btnStart']))
{
	$firstname = $_POST['firstname']; 
	$lastname = $_POST['lastname']; 
	$email = $_POST['email']; 
	$Pass = ($_POST['Pass']);
	$ChangePass = ($_POST['ChangePass']);
	$MobileNo = $_POST['MobileNo'];


	if($Pass == $ChangePass){

		// inserting into database
	$query =  "INSERT INTO user (`FirstName`, `Lastname`, `Email`, `Password`, `Mobile`) VALUES ('$firstname','$lastname','$email','$Pass','$MobileNo')";

	$res = mysqli_query($conn,$query);
	if($res){
		?>
		<script>
			alert("User Registration Successfully!");
			window.location='become.php';
			</script>
			<?php
	}else{
		?>
		<script>
			alert("Oops! Something Went Wrong.");
			window.location='become.php';
			</script>
			<?php
	}



	}else{
		echo 
		"<script>
		alert('Password Not Matched.');
		window.location='become.php';
		</script>";
	}

	
}

 
?>