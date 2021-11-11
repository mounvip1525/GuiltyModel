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
		      echo  header("Location: http://localhost/GuiltyModel/data-leakage-detection/adminlogin.php");
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
        <h3><a href="../index.php">HOME</a></h3>
        <h3><a href="view file.php" class="user-active-nav">ARTICLES</a></h3>
		<h3><a href="viewmsg.php">MESSAGES</a></h3>
        <h3><a href="viewkey.php">KEYS</a></h3>
        <h3><a href="logout.php">LOGOUT</a></h3>
    </nav>	
	<div class="upload-main">
        <div class="auth-form">
        <h1>LOCK FILE</h1>
	<?PHP
	require("config.php");
	$con = mysqli_connect("localhost","root",$dbPass);
	if (!$con)
		echo('Could not connect: ' . mysqli_error());
	else
	{
		mysqli_select_db($con,"dataleakage");
		$id=$_GET['id'];
		$qry="Select * FROM presentation WHERE subject = '$id'";
		$result=mysqli_query($con,$qry);
		$uname = $_SESSION['name'];
		echo $uname;
		while($w1=mysqli_fetch_array($result))
		{
		echo '
		<form name="frm" id="frm" method="post" action="detail1.php?id='.$w1["subject"].'?file='.$w1["fname"].'">
		
            <label>Enter Key</label>
            <input type="text" name="s1" id="s1" >
			<label>Will you follow the privacy norms</label>
			<input type="text" name="yesno" id="yesno" placeholder="Yes/No"/>
			<input type="hidden" name="s2" id="s2" value='.$w1["Topic"].'>
			<input type="hidden" name="s3" id="s3" value='.$uname.'>
			<input type="hidden" name="s4" id="s4" value='.$id.'>
			<button type="submit" name="encr" value="Download" style="height:3rem"><img src="../img/download.png" style="height:2rem"class="rotate-img" /></button>
			</form>		
			';
		}
    }
	?>
	        </div>
    </div>				
</body>
</html>