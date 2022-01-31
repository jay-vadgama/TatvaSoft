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


if(isset($_POST['registerBtn']))
{
	$firstname = $_POST['firstname']; 
	$lastname = $_POST['lastname']; 
	$email = $_POST['email']; 
	$password = $_POST['password'];
	$MobileNo = $_POST['MobileNo'];



	// inserting into database
	$query =  "INSERT INTO user (`FirstName`, `Lastname`, `Email`, `Password`, `Mobile`) VALUES ('$firstname','$lastname','$email','$password','$MobileNo')";

	$res = mysqli_query($conn,$query);
	if($res){
		?>
		<script>
			alert("Data Inserted Successfully!");
			window.location='Customer-Registration.php';
			</script>
			<?php
	}else{
		?>
		<script>
			alert("Data Not Inserted");
			window.location='Customer-Registration.php';
			</script>
			<?php
	}
}

 
?>