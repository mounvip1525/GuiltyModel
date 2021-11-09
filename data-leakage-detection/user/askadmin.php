<?php
session_start(); //Start the session

if (!isset($_SESSION['name'])) {
        echo "Please Login";
		//$_SESSION['error'] = "Please Login First";
		echo "<script type=\"text/javascript\">"." alert('Please Login'); " ."</script>";
		} if (!$_SESSION['name']){
		      echo  header("Location: http://localhost/data-leakage-detection/userlogin.php");
		}
		else{
		define('ADMIN',$_SESSION['name']); //Get the user name from the previously registered super global variable
		//if(!session_is_registered("admin")){ //If session not registered
		//header("location:login.php"); // Redirect to login.php page
		//}
		//else //Continue to current page
		header( 'Content-Type: text/html; charset=utf-8' );
		//include'includes/conn.php';
 	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Leakage Detection</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="stylesheet.css" type="text/css" />
	<link rel="stylesheet" href="../stylesheet.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<nav>
        <h3><a href="../index.php">HOME</a></h3>
        <h3><a href="view file.php" class="user-active-nav">ARTICLES</a></h3>
		<h3><a href="viewmsg.php">MESSAGES</a></h3>
        <h3><a href="viewkey.php">KEYS</a></h3>
        <h3><a href="logout.php">LOGOUT</a></h3>
    </nav>
	
	<div class="invalid-user">
		<img src="./img/invalid.png" alt="invalid" />
		<div>
			<p>You will be notified to the admin about your inpropriate request to access the article.<p>
		</div>
		<button><a href="view file.php">Request Valid access</a></button>
	</div>

</body>
</html>