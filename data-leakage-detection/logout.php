<?php
session_start(); //Start the current session
session_destroy(); //Destroy it! So we are logged out now
header("location:http://localhost/ISAA-Project/data-leakage-detection/index.php?msg=Successfully Logged out"); 
?>