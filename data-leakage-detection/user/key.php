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
	$sql = "insert into askkey (user, filename, status, reciver,k) values ('$_SESSION[name]','$id','no','admin','')";
	$result = mysqli_query($con,$sql) or die ("Could not insert data into DB: " . mysqli_error());
	echo "<script>
	alert('Key request sent!');
	window.location.href='http://localhost/ISAA-Project/data-leakage-detection/user/user.php';
	</script>";
	exit;
	}
?>
