<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Leakage Detection</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="stylesheet.css" type="text/css" />
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
<body class="body">
	
	<header class="mainHeader">
		<img src="img/logo.gif">
		<nav><ul>
			<li class="active"><a href="index.html">Home</a></li>
			<li><a href="upload.php">Publish Article</a></li>
			<li><a href="view file.php">View File</a></li>
			<li ><a href="leakfile.php">LeakFile</a></li>
			
			
			
		</ul></nav>
	</header>
		
	<div class="mainContent1">
		<div class="content">	
				<article class="topcontent1">	
					
					<content>
						<p>
							<table align="center" cellpadding="50" cellspacing="20" width="3"><tr bgcolor="white"><td >THANKU FOR DOWNLAOAD</td></tr>
					<tr><td><a href=".php">CLICK ME </a></td></tr>

</table>

						</content>
					
				</article>

			</div>
		</div>
			
				
	</div>
	
	<footer class="mainFooter">
		<p>CSE3501 Project</p>
	</footer>

</body>
</html>