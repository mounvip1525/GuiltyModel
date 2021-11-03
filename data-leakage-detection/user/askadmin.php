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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body class="body">
	
	<header class="mainHeader">
		<img src="img/logo.gif">
		<nav><ul>
			
			<li ><a href="user.php">Home</a></li>
			<li><a href="view file.php">View File</a></li>
			<li><a href="viewmsg.php">View msg</a></li>
			<li ><a href="leakfile.php">LeakFile</a></li>
			<li class="active"><a href="viewkey.php">ViewKey</a></li>
	</ul></nav>
	</header>
		
	<div class="mainContent1">
		<div class="content">	
				<article class="topcontent1">	
					<header>
						<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE"> Ask Key To Admin</a></h2>
					</header>
					
					
					
            <table align="center" cellpadding="" cellspacing="" width="">
              <tr> 
                <td colspan="2" align="center"><font size="2"><b>
                  </b></font></td>
              </tr>
              <tr> 
                <td><font face="Courier New" size="+1"><strong>YOU ARE THE LEAKER</strong></font></td>
                <td></td>
              </tr>
              

            
          
            </table>
          </form>
        </div>
   




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
		<p>CSE3501 Project</p>
	</footer>

</body>
</html>