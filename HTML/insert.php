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


if(isset($_POST['submit']))
{
	$firstname = $_POST['firstname']; 
	$lastname = $_POST['lasttname']; 
	$MobileNo = $_POST['MobileNo']; 
	$email = $_POST['email']; 
	$subject = $_POST['subject'];
	$message = $_POST['message']; 
	$file = $_FILES['file'];

	$pname = $_FILES["file"]["name"];

	// temp location
	$tname = $_FILES["file"]["tmp_name"];

	// permanent location
	$uploads_dir = 'Uploads/';

	//moving from temp to permanent
	move_uploaded_file($tname, $uploads_dir.'/'.$pname);

	// inserting into database
	$query =  "INSERT INTO contactus (`Firstname`, `Lastname`, `Email`, `Subject`, `PhoneNumber`, `Message`,`UploadFileName`) VALUES ('$firstname','$lastname','$email','$subject','$MobileNo','$message','$pname')";

	$res = mysqli_query($conn,$query);
	if($res){
		?>
		<script>
			alert("Data Inserted Successfully!");
			window.location='Contact.php';
			</script>
			<?php
	}else{
		?>
		<script>
			alert("Data Not Inserted");
			window.location='Contact.php';
			</script>
			<?php
	}
}

 
?>