<body background="img_project/bg/b28.jpg" alt="" width="1500" height="700" align="center" >
<br><br><br>
<center><img src="Kitchenware logo/l6.png"></center>
<br><br><br>
<a href="home.php"><img src="img_project/bg/icon1.png" align="right" width="80" height="80"><h1><b></b></h1></a>  
    <!-- Slider -->
   <h1 align="center" class="hed">REGISTRATION MASTER</h1>
<?php
include("con1.php");
$query="select * from registration";
$result=mysqli_query($con,$query);

echo "<table cellpadding='6' class='tb1' align='center' cellspacing='6' border='5' bgcolor='white' ><tr class='th1'><th>Id</th><th>Firstname</th><th>Lastname</th><th>Address</th><th>Country</th><th>City</th><th>State</th><th>Contact No</th><th>Email</th><th>Username</th><th>Password</th><th>Delete</th></tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr><td>";
	echo $row["id"];
	echo"</td><td>";
	echo $row["firstname"];
	echo"</td><td>";
	echo $row["lastname"];
	echo"</td><td>";
	echo $row["address"];
	echo"</td><td>";
	echo $row["country"];
	echo"</td><td>";
	echo $row["city"];
	echo"</td><td>";
	echo $row["state"];
	echo"</td><td>";
	echo $row["contactno"];
	echo"</td><td>";
	echo $row["email"];
	echo"</td><td>";
	echo $row["username"];
	echo"</td><td>";
	echo $row["password"];
	echo"</td>";
	echo"<td><a href='registrationdelete.php?id=".$row[0]."'>Delete</a></td></tr>";
	
}
echo"</table>";
?>
<BR><br><BR><br><BR><br>
      <?php include("footer.php"); ?>

}   
