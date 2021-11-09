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
    <nav>
        <h3><a href="../index.php" class="user-active-nav">HOME</a></h3>
        <h3><a href="view file.php">ARTICLES</a></h3>
		<h3><a href="viewmsg.php">MESSAGES</a></h3>
        <h3><a href="viewkey.php">KEYS</a></h3>
        <h3><a href="logout.php">LOGOUT</a></h3>
    </nav>
    <div class="u-landing">
        <h1>Welcome <?php echo $_SESSION['name']?>!</h1>
        <img src="../img/welcome.png" alt="welcome" />
        <div>
            <div>
                <img src="../img/article.png" alt="article" />
                <p><strong>You can view all the open files in the catalog. Request for the key in order to access files. The admin has sole privileges to grant access to the files catalog which will automatically update your Guilt Score.</strong></p>
            </div>
            <div>
                <img src="../img/keys.png" alt="security" />
                <p><strong>The keys will be updated in the 'KEYS' tab. Once you receive the key from the admin, you can access the file. Make sure to use this sensitive data responsibly in order to mantain the security of the ecosystem.</strong></p>
            </div>
            <div>
                <img src="../img/message.png" alt="keys" />
                <p><strong>Your activity is closely monitored alongwith real time updation of your Guilt Score. You will receive messages from the admin and can even be blacklisted from the platform in case any suspicious activity is found on your end.</strong></p>
            </div>
        </div>
	</div>
</body>
</html>
