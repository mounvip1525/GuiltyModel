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
        <h3><a href="view file.php">ARTICLES</a></h3>
		<h3><a href="viewmsg.php" class="user-active-nav">MESSAGES</a></h3>
        <h3><a href="viewkey.php">KEYS</a></h3>
        <h3><a href="logout.php">LOGOUT</a></h3>
    </nav>	
	<div class="n-main">
        <div>
            <img src="../img/notifications.png" alt="Your notifications" />
        </div>
        <ul>
		<?PHP
			require("config.php");
			$con = mysqli_connect("localhost","root",$dbPass);
			if (!$con)
				echo('Could not connect: ' . mysqli_error());
			else
			{
				mysqli_select_db( $con,"dataleakage");
				$qry="Select * FROM msg where reciver='$_SESSION[name]'";
					$result=mysqli_query($con,$qry);
				$count=mysqli_num_rows($result);
				if($count===0){
					echo '<h1 style="text-align:center;margin:15% auto">No messages yet</h1>';
				} else 
				while($w1=mysqli_fetch_array($result))
				{	
					echo "<li>".$w1['sender']. ' says '.$w1['msg']."</li>";		
				}
			}
		?>	 
        </ul>
    </div>	
</body>
</html>