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
		include'config.php';
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
        <?php
			if(!empty($_POST))
			{
				require("config.php");
				$con = mysqli_connect("localhost","root",$dbPass);
				if (!$con)
					echo('Could not connect: ' . mysqli_error());
				else
				{					
					if (file_exists("download/" . $_FILES["file"]["name"]))
					{
						echo '<script language="javascript">alert(" Sorry!! Filename Already Exists...")</script>';
					}
					else
					{
						move_uploaded_file($_FILES["file"]["tmp_name"],"download/" . $_FILES["file"]["name"]) ;
						mysqli_select_db($con, "dataleakage");
						$sql = "INSERT INTO presentation(subject,Topic,fname,time,sendto,objNames) VALUES ('" . $_POST["sub"] ."','" . $_POST["pre"] . "','" . $_FILES["file"]["name"] ."','".date("y/m/d")."','".""."','".""."');";
						$result6 = mysqli_query($con,$sql) or die ("Could not send data into DB: " . mysqli_error($con));
						}
				}
				mysqli_close($con);
			}
        ?>	
    </head>
     <body>
	 <nav>
        <h3><a href="admin.php">HOME</a></h3>
		<h3><a href="m_user.php">USERS</a></h3>
		<h3><a href="m_arti.php">ARTICLES</a></h3>
        <h3><a href="upload.php" class="admin-active-nav">UPLOAD</a></h3>
		<h3><a href="sendmsg.php">MESSAGES</a></h3>
		<h3><a href="leakfile.php">LEAK USER</a></h3>
        <h3><a href="sendkey.php">REQUESTS</a></h3>
        <h3><a href="logout.php">LOGOUT</a></h3>
    </nav>	

	<div class="admin-upload">
	<div class="upload-main">
        <div class="auth-form">
        <h1>UPLOAD FILE</h1>
		<form id="form3" enctype="multipart/form-data" method="post" action="upload.php">
			<label for="sub">Subject: </label>
			<input type="text" name="sub" id="sub" />
			<label for="key">Key:</label>
			<input type="text" name="pre" cols="50" rows="10" id="pre">
			<label for="file">File:</label>
			<input type="file" name="file" id="file" />
			<button type="submit" name="upload" id="upload" style="margin:auto;display:block;padding:2% 5%"><img src="../img/download.png" style="height:2rem" class="rotate-img"/></button>
		</form>	
	    </div>
    </div>	
	</div>	
</body>
</html>