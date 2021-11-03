<?PHP
				
				$con = mysqli_connect("localhost","root","Mounvi@123");
                                if (!$con)
                                    echo('Could not connect: ' . mysqli_error());
                                else
                                {
                                    mysqli_select_db($con,"dataleakage");
									


$qry="Select * FROM askkey where reciver='admin' and status='no'";
	$result=mysqli_query($con,$qry);
while($w1=mysqli_fetch_array($result))
{
	echo'			<tr bgcolor="white">
	
	<td>'.$w1["id"].'    </td><td>     '.$w1["user"].'	
					</td><td>'.$w1["filename"].'

	</td>
</tr>


	
	';
		
}
								}

?>
						