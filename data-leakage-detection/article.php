
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
		<nav><ul>
						<li ><a href="index.php">Home</a></li>
			<li><a href="register.html">Registration</a></li>
			<li ><a href="userlogin.php">UserLogin</a></li>
			<li ><a href="adminlogin.php">AdminLogin</a></li>
			<li class="active"><a href="article.php">Articles</a></li>
			
		</ul></nav>
	</header>
		
	<div class="mainContent1">
		<div class="content">	
				<article class="topcontent1">	
					<header>
						<h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">Articles</a></h2>
					</header>
					
					<footer>
						<p class="post-info">This Article is designed by admin . </p>
					</footer>
					
					<content>
						<p>
						
						

    <table width="552" height="200" style="border-radius: 10px; box-shadow: 0 0 2px 2px #888;
            	font-family:'Comic Sans MS';font-size: 14px;" >
        <tr>
            <td>
                  <marquee behavior="scroll" direction="up" scrolldelay="150" onMouseOver="this.stop();" onMouseOut="this.start();">
                        <?php
                            {
                                $row="";
                                $con = mysqli_connect("localhost","root","Mounvi@123");
                                if (!$con)
                                    echo('Could not connect: ' . mysqli_error());
                                else
                                {
                                    mysqli_select_db($con, "dataleakage");
                                    $sql = 'SELECT * FROM presentation';
                                    $retval = mysqli_query($con, $sql);
                                    if(! $retval )
                                    {
                                        die('Could not get data: ' . mysqli_error());
                                    }
                                    while($row = mysqli_fetch_assoc($retval))
                                    {
                                           echo "Article SUBJECT: {$row['subject']} <br> " .
                                                "Timetosend: {$row['time']} <br> " .
                                                
											    "<hr><br>" ;
                                    } 
                                }
                                mysqli_close($con);
                            }
                        ?> 
                  </marquee>
            </td>
        </tr>
    </table>
						</p>
						</content>
					
				</article>

				
		</div>
			
				
	</div>
	
	<footer class="mainFooter">
		<p>CSE3501 Project </p>
	</footer>

</body>
</html>