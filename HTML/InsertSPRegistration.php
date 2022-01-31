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
	$Pass = $_POST['Pass'];
	$MobileNo = $_POST['MobileNo'];



	// inserting into database
	$query =  "INSERT INTO user (`FirstName`, `Lastname`, `Email`, `Password`, `Mobile`) VALUES ('$firstname','$lastname','$email','$Pass','$MobileNo')";

	$res = mysqli_query($conn,$query);
	if($res){
		?>
		<script>
			alert("Data Inserted Successfully!");
			window.location='become.php';
			</script>
			<?php
	}else{
		?>
		<script>
			alert("Data Not Inserted");
			window.location='become.php';
			</script>
			<?php
	}
}

 
?>