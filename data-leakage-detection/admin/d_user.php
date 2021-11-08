<?php
// Start a session for error reporting
session_start();
require("config.php");
// Get our POSTed variables
$id = $_GET['id'];
$con = mysqli_connect("localhost","root",$dbPass);
    if (!$con)
        echo('Could not connect: ' . mysqli_error());
    else
    {
        mysqli_select_db($con,"dataleakage" );
        $sql = "delete from register where username='$id'";
        $result = mysqli_query($con,$sql) or die ("Could not insert data into DB: " . mysqli_error());
        echo "<script>
        alert('User deleted successfully!');
        window.location.href='http://localhost/ISAA-Project/data-leakage-detection/admin/admin.php';
        </script>";
        exit;
    }
?>
