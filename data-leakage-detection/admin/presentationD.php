<head>
	<title>Download Presentation</title>
</head>
<body>
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
                                    mysqli_select_db($con,"dataleakage");
                                    $sql = 'SELECT subject, topic, fname FROM presentation';
                                    $retval = mysqli_query(  $con,$sql );
                                    if(! $retval )
                                    {
                                        die('Could not get data: ' . mysqli_error());
                                    }
                                    while($row = mysqli_fetch_assoc($retval))
                                    {
                                           echo "SUBJECT: {$row['subject']} <br> " .
                                                "NOTICE: {$row['topic']} <br> " .
                                                "DOWNLOAD FILE: <a href='download.php?id=". "{$row['fname']}'>{$row['fname']}</a>" .
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
</body>
</html>

