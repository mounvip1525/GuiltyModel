<?php
// Start a session for error reporting
session_start();
// Get our POSTed variables
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
require("config.php");
 $con = mysqli_connect("localhost","root",$dbPass);
    if (!$con)
        echo('Could not connect: ' . mysqli_error());
    else
    {
        mysqli_select_db( $con,"dataleakage");
	$sql = "insert into msg (sender, email, reciver, msg) values ('$_SESSION[name]', '$a1','$a2', '$a3')";
	$result = mysqli_query($con,$sql) or die ("Could not insert data into DB: " . mysqli_error());
	echo "<script>
	alert('Message sent!');
	window.location.href='http://localhost/ISAA-Project/data-leakage-detection/admin/admin.php';
	</script>";
	exit;
								}
?>
