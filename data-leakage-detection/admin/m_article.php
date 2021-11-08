<?php
// Start a session for error reporting
session_start();





// Get our POSTed variables
$id = $_GET['id'];



require("config.php");
 $con = mysqli_connect("localhost","root",$dbPass);
                                if (!$con)
                                    echo('Could not connect: ' . mysqli_error());
                                else
                                {
                                    mysqli_select_db( $con,"dataleakage");
	$sql = "delete from presentation where subject='$id'";
	$result = mysqli_query($con,$sql) or die ("Could not insert data into DB: " . mysqli_error());
	header("Location: admin.php");
	exit;
								}
?>
