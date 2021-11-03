<?php 
session_start();

$con = mysqli_connect("localhost","root","Mounvi@123");

if (!$con)
    echo('Could not connect: ' . mysqli_error());
else {
    mysqli_select_db($con,"dataleakage" );
    $sql = "UPDATE leaker SET probability=0.0 WHERE 1=1 ";
    $result = mysqli_query($con,$sql) or die ("Could not send data into DB: " . mysqli_error($con));
    header("Location: leakfile.php");
}
?>