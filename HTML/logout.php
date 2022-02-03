<?php

session_start();
session_destroy();
?>
    <script> 
    alert("Login Successfully");
    </script>
  <?php
header("Location: Home.php");

?>