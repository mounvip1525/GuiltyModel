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
        <h3><a href="admin.php">HOME</a></h3>
		<h3><a href="m_user.php" class="admin-active-nav">USERS</a></h3>
		<h3><a href="m_arti.php">ARTICLES</a></h3>
        <h3><a href="upload.php">UPLOAD</a></h3>
		<h3><a href="sendmsg.php">MESSAGES</a></h3>
		<h3><a href="leakfile.php">LEAK USER</a></h3>
        <h3><a href="sendkey.php">REQUESTS</a></h3>
        <h3><a href="logout.php">LOGOUT</a></h3>
    </nav>	
	<table>
		<thead>
			<th>User Name</th>
			<th>User ID</th>
			<th>EmailID</th>
			<th>Block</th> <!--Actually delete but mentioned block here -->
		</thead>
		<tbody>
		<?php
			require("config.php");
			$row="";
			$con = mysqli_connect("localhost","root",$dbPass);
			if (!$con)
				echo('Could not connect: ' . mysqli_error());
			else
			{
				mysqli_select_db($con,"dataleakage");
				$sql = 'SELECT * FROM register';
				$retval = mysqli_query( $con,$sql );
				if(! $retval )
				{
					die('Could not get data: ' . mysqli_error());
				}
				while($row = mysqli_fetch_assoc($retval))
				{
					echo "<tr>
							<td> {$row['username']} </td> " .
							"<td> {$row['userid']} </td> " .
							"<td> {$row['emailid']} </td> " .
							"<td><a href='d_user.php?id=". "{$row['username']}'><img src='../img/block.png' alt='block' /></a>" ."</td>
						</tr>" ;
				} 
			}
			mysqli_close($con);
		?> 				                          
</tbody>
</table>
</body>
</html>