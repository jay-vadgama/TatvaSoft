<?php 
class ContactModel{
	
    public function __construct(){

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
    }

    public function insert($firstname,$lastname,$MobileNo,$email,$subject,$message,$file){
                   
    // inserting into database
	$query =  "INSERT INTO contactus (`Firstname`, `Lastname`, `Email`, `Subject`, `PhoneNumber`, `Message`,`UploadFileName`) VALUES ('$firstname','$lastname','$email','$subject','$MobileNo','$message')";
	$stmt=  $this->conn->prepare($query);
	if($stmt){
		?>
		<script>
			alert("Data Inserted Successfully!");
			
			</script>
			<?php
	}else{
		?>
		<script>
			alert("Data Not Inserted");
			// window.location='Contact.php';
			</script>
			<?php
	}
    }




















}

?>