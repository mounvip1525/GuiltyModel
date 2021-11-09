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
                <li>As a super user you have access to all secret files and keys.</li>
                <li>You are solely responsible for managing the files catalog.</li>
                <li>Only you have the privilege to grant download access with secret keys.</li>
                <li>Head over to the 'Leak User' tab to receive real time Guilt Scores.</li>
                <li>You can send warnings and blacklist users to maintain authenticity.</li>
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
                    <h2><a href="sendkey.php">Manage Requests</a></h2>
                </div>
                <div>
                    <img src="../img/fileupload.png" alt="gma" />
                    <h2><a href="upload.php">Manage Uploads</a></h2>
                </div>
            </div>
        </div>
   </div>
</body>
</html>
