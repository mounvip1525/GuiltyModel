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
<body class="body">
	
	<header class="mainHeader">
		<nav><ul>
			<li ><a href="user.php">Home</a></li>
			<li><a href="viewmsg.php">View msg</a></li>
			<li class="active"><a href="view file.html">View Articles</a></li>
			<li ><a href="viewkey.php">View Key</a></li>
			
			
		</ul></nav>
	</header>
		
	<div class="mainContent1">
		<div class="content">	
				<article class="topcontent1">	
					<header>
						<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">User Menu</a></h2>
					</header>
					
					<footer>
					</footer>
					
					<content>
						<p>
							
					
					            <h4>LOCK FILE</h4>
            <div align="center" style="background-color: #FFF2EF">             
                <?PHP
				
				$con = mysqli_connect("localhost","root","Mounvi@123");
                                if (!$con)
                                    echo('Could not connect: ' . mysqli_error());
                                else
                                {
                                    mysqli_select_db($con,"dataleakage");
									

$id=$_GET['id'];
$qry="Select * FROM presentation WHERE subject = '$id'";
	$result=mysqli_query($con,$qry);
while($w1=mysqli_fetch_array($result))
{





echo '

<form name="frm" id="frm" method="post" action="detail1.php?id='.$w1["subject"].'?file='.$w1["fname"].'"> <!-- same-document reference -->
  <table>  
   


<tr>
<td>Enter Key</td>
<td><input type="text" name="s1" id="s1"></td>
</tr>
<tr>
      <td></td>
      <td><input type="hidden" name="s2" id="s2" value='.$w1["Topic"].'></td>
    </tr>
    
    
  </table>



<input type="submit" name="encr" value="Download">

</form>	
			
			
			





';


}

}
	?>			
				
				
				
				
            
					
					
				
									                          
			</p>
						</content>
					
				</article>

			</div>
<aside class="top-sidebar">
					<article>
					<h2>Welcome: <?php echo $_SESSION['name']/*Echo the username */ ?></h2>
					<li><a href="logout.php">Logout</a></li>
					
					<p></p>
				    </article>
				</aside>	
		</div>
			
				
	</div>
	
	<footer class="mainFooter">
		<p>CSE3501 Project </p>
	</footer>

</body>
</html>