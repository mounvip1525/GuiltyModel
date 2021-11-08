<?php
// Start a session for error reporting
session_start();
require("config.php");
// Get our POSTed variables
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
 $con = mysqli_connect("localhost","root",$dbPass);
	if (!$con)
		echo('Could not connect: ' . mysqli_error());
	else
	{
		mysqli_select_db( $con,"dataleakage");
		$sql = "UPDATE askkey SET k='$a2',status='yes' WHERE filename='$a3'and user='$a1' ";
		$result = mysqli_query($con,$sql) or die ("Could not send data into DB: " . mysqli_error($con));
		$sql = "INSERT INTO record(subject,topic,sendto,time) VALUES ('" . $_POST["a3"] ."','" . $_POST["a2"] . "','" . 
		$_POST["a1"] ."','".date("y/m/d")."');";
		if (!mysqli_query($con,$sql))
			echo('Error : ' . mysqli_error($con));
		else
		echo "<script>
		alert('Key has been shared successfully!');
		window.location.href='http://localhost/ISAA-Project/data-leakage-detection/admin/admin.php';
		</script>";
		exit;
		exit;
	}
?>
