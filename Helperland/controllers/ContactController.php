<?php

class ContactController{

    function __construct()
    {
        include('models\ContactModel.php');
        $this->model = new ContactModel();
    }

    public function Contact(){
        if (isset($_POST)) {
            $base_url = "http://localhost/TatvaSoft/Helperland/Contact";
            $firstname = $_POST['firstname']; 
            $lastname = $_POST['lastname']; 
            $MobileNo = $_POST['MobileNo']; 
            $email = $_POST['email']; 
            $subject = $_POST['subject'];
            $message = $_POST['message']; 
            $file = $_FILES['file'];

            $pname = $_FILES["file"]["name"];

            // temp location
            $tname = $_FILES["file"]["tmp_name"];

            // permanent location
            $uploads_dir = 'assets/Uploads/';

            //moving from temp to permanent
            move_uploaded_file($tname, $uploads_dir.'/'.$pname);

            $array = [
                'firstname' => $firstname,
                'lastname' => $lastname,
                'MobileNo' => $MobileNo,
                'email' => $email,
                'subject' => $subject,
                'message' => $message,
                'file' => $file

            ];
            $res = $this->model->Contact($array);
            header('Location:' . $base_url);
        }
    }





}


?>