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
        <h3><a href="../index.php">HOME</a></h3>
        <h3><a href="view file.php" class="user-active-nav">ARTICLES</a></h3>
		<h3><a href="viewmsg.php">MESSAGES</a></h3>
        <h3><a href="viewkey.php">KEYS</a></h3>
        <h3><a href="logout.php">LOGOUT</a></h3>
    </nav>
		
		<table>
        <thead>
            <th>Article Name</th>
            <th>Date</th>
            <th>Detail</th>
            <th>View</th>
            <th>Click to ask</th>
        </thead>
		<tbody>
<?php
		{
			$row="";
			$con = mysqli_connect("localhost","root","Mounvi@123");
			if (!$con)
				echo('Could not connect: ' . mysqli_error());
			else
			{
				mysqli_select_db( $con, "dataleakage");
				$sql = 'SELECT * FROM presentation';
				$retval = mysqli_query($con , $sql);
				if(! $retval )
				{
					die('Could not get data: ' . mysqli_error());
				}
				while($row = mysqli_fetch_assoc($retval))
				{
						echo "<tr>
								<td> {$row['subject']} </td> " .
								"<td> {$row['time']} </td> " .
								"<td> {$row['fname']} </td> " .
								"<td><a href='detail.php?id=". "{$row['subject']}'><img src='../img/download.png' alt='download'></a>" .
							    "<td></br><a href='key.php?id=". "{$row['subject']}'?f=". "{$row['fname']}'><img src='../img/ask.png' alt='ask' /></a> " ."</td>" ;
				} 
			}
			mysqli_close($con);
		}
	?> 
	</tbody>
</table>
</body>
</html>