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
<body style="overflow:hidden">
	<nav>
        <h3><a href="admin.php">HOME</a></h3>
		<h3><a href="m_user.php">USERS</a></h3>
		<h3><a href="m_arti.php">ARTICLES</a></h3>
        <h3><a href="upload.php">UPLOAD</a></h3>
		<h3><a href="viewmsg.php">MESSAGES</a></h3>
		<h3><a href="leakfile.php">LEAK USER</a></h3>
        <h3><a href="sendkey.php" class="admin-active-nav">KEYS</a></h3>
        <h3><a href="logout.php">LOGOUT</a></h3>
    </nav>
	<div class="req-main">
        <form name="s" action="sendkeytouser.php" method="POST" onsubmit="return valid()" class="auth-form">
            <h1>SEND KEYS</h1>
            <label for="name">Send to User</label>
            <input type="text" name="a1" id="a1">
            <label for="file">File Name</label>
            <input type="text" name="a3" id="a3">
            <label for="key">Key</label>
            <input type="text" name="a2" id="a2">
			<input type="submit" name="s" value="Share Key" class="c-btn c-btn-2" style="width:50%!important"> 
		</form>
        <div>
            <ul class="admin-requests">
			<?PHP
			$con = mysqli_connect("localhost","root","Mounvi@123");
				if (!$con)
					echo('Could not connect: ' . mysqli_error());
				else
				{
					mysqli_select_db($con, "dataleakage");
					$qry="Select * FROM askkey where reciver='admin' and status='no'";
						$result=mysqli_query($con, $qry);
					while($w1=mysqli_fetch_array($result))
					{
						echo
						'<li>'.$w1["id"].' requests for <b>'.$w1["filename"].'</b></li>';
					}
				}
			?>
            </ul>
        </div>
    </div>
</body>
</html>