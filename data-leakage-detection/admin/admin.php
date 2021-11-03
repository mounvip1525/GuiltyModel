<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Leakage Detection</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="stylesheet.css" type="text/css" />
	<link rel="stylesheet" href="../stylesheet.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
session_start(); //Start the session
if (!isset($_SESSION['name'])) {
        echo "Please Login";
		//$_SESSION['error'] = "Please Login First";
		echo "<script type=\"text/javascript\">"." alert('Please Login'); " ."</script>";
		} if (!$_SESSION['name']){
		      echo  header("Location: http://localhost/data-leakage-detection/adminlogin.php");
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
<body>
	<div class="a-landing">
        <div>
            <h1>WELCOME ADMIN!</h1>
            <ul>
                <li>You have super priviledges</li>
                <li>You can manage users!</li>
                <li>You can decide whom to share your keys with</li>
                <li>You can blacklist users to maintain authencity</li>
            </ul>
        </div>
        <div>
            <div>
                <div>
                    <img src="../img/keys.png" alt="gma" />
                    <h2><a href="m_user.php">Manage Users</a></h2>
                </div>
                <div>
                    <img src="../img/article.png" alt="gma" />
                    <h2><a href="m_arti.php">Manage Articles</a></h2>
                </div>
                <div>
                    <img src="../img/security.png" alt="gma" />
                    <h2><a href="sendmsg.php">Manage Requests</a></h2>
                </div>
                <div>
                    <img src="../img/landing1.png" alt="gma" />
                    <h2><a href="upload.php">Manage Uploads</a></h2>
                </div>
            </div>
        </div>
   </div>
</body>
</html>