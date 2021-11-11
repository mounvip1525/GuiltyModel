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
        <h3><a href="admin.php">HOME</a></h3>
		<h3><a href="m_user.php">USERS</a></h3>
		<h3><a href="m_arti.php">ARTICLES</a></h3>
        <h3><a href="upload.php">UPLOAD</a></h3>
		<h3><a href="sendmsg.php">MESSAGES</a></h3>
		<h3><a href="leakfile.php" class="admin-active-nav">LEAK USER</a></h3>
        <h3><a href="sendkey.php">REQUESTS</a></h3>
        <h3><a href="logout.php">LOGOUT</a></h3>
    </nav>	

	<div class="leak-main">
		<form name="leaker" action="probability.php" method="POST">
			<button type="submit" class="find-p">Find Probability</button>
		</form>
		<div class="leak-box">
            <h2>Guilty Model Results</h2>
			<div class="leak-div">				
				<?PHP
					require("config.php");
					$con = mysqli_connect("localhost","root",$dbPass);
					if (!$con)
						echo('Could not connect: ' . mysqli_error());
					else {
						mysqli_select_db($con, "dataleakage");
						$qry="Select * FROM leaker";
						$qryRec="SELECT * FROM record";
						$result=mysqli_query($con, $qry);
						while($w1=mysqli_fetch_array($result)) {
							// $q1 ="Select subject FROM record WHERE sendto=".$w1["name"]."";
							// $fileName = mysqli_query($con,$q1);
							$luName=$w1["name"];
							$fileName='';
							$accesType ='';
							$qryExist = "EXISTS(SELECT 1 FROM record WITH(NOLOCK) WHERE sendto = $luName)";
    					$resExist=mysqli_query($con,$qryExist);
						echo
							'<div class="leak-deets">'.
								'<p>'.((floor($w1["probability"]*100)/100)*100).'%</p>'.
								"<div>".
									"<h3>".$w1["name"]."</h3>".
									"<p></p>".
								"</div>".
								"<div class='leak-send'>".
									"<button>".
										"<a href='sendmsg.php?".$w1["name"]."'>".
											"<img src='../img/send.png' alt='send message' />".
										"</a>".
									"</button>".
								"</div>".
							"</div>";
						}
					}
				?>
			</div>	
		</div>	
			
		<form action="resetprobability.php" class="reset-div">
			<button type="submit">
				<img src="../img/reset.png" alt="reset"/>
            	<p>Reset</p>
			</button>
		</form>		
</body>
</html>