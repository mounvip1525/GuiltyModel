<?php
session_start(); //Start the session

if (!isset($_SESSION['name'])) {
        echo "Please Login";
		//$_SESSION['error'] = "Please Login First";
		echo "<script type=\"text/javascript\">"." alert('Please Login'); " ."</script>";
		} if (!$_SESSION['name']){
		      echo  header("Location: http://localhost/data lekage detaction/adminlogin.php");
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
        <h3><a href="admin.php">HOME</a></h3>
		<h3><a href="m_user.php">USERS</a></h3>
		<h3><a href="m_arti.php">ARTICLES</a></h3>
        <h3><a href="upload.php">UPLOAD</a></h3>
		<h3><a href="viewmsg.php" class="admin-active-nav">MESSAGES</a></h3>
		<h3><a href="leakfile.php">LEAK USER</a></h3>
        <h3><a href="sendkey.php">REQUESTS</a></h3>
        <h3><a href="logout.php">LOGOUT</a></h3>
    </nav>

	<div style="width:40%;margin:auto">
	<br>
        <img src="../img/message.png" alt="message" class="msg-img"/>
	<br>
        <form name="s" action="msg.php" method="POST" onsubmit="return valid()" class="a-msg auth-form">
            <label for="name">User Name</label>
            <input type="text" name="a2" id="a2" >
            <label for="email">User Email</label>
            <input type="text" name="a1" id="a1" >
            <label for="msg">Send Message</label>
            <textarea name="a3" rows="5" id="a3" cols="40"></textarea>
			<button type="submit" name="s" class="c-btn">SEND </button>
		</form>
    </div>
</body>
</html>
