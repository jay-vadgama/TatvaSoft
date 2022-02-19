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

    public function insert($array){
        $firstname = $array['firstname']; 
	    $lastname = $array['lastname']; 
	    $MobileNo = $array['MobileNo']; 
	    $email = $array['email']; 
	    $subject = $array['subject'];
	    $message = $array['message']; 
	    $file = $array['tname'];

            
        // inserting into database
	$query =  "INSERT INTO contactus (`Firstname`, `Lastname`, `Email`, `Subject`, `PhoneNumber`, `Message`,`UploadFileName`) VALUES ('$firstname','$lastname','$email','$subject','$MobileNo','$message','$tname')";
	$stmt= $conn->prepare($query);
	$stmt->execute($array);
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




















}

?>