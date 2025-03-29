 

<!DOCTYPE html><head></head>

<body background="img_project/bg/b28.jpg" alt="" width="1500" height="600" align="center"></body>
<br><br><br>
<center><img src="Kitchenware logo/l6.png"></center>
<br><br><br>
<a href="home.php"><img src="img_project/bg/icon1.png" align="right" width="80" height="80"><h1><b></b></h1></a>  
    <!-- Slider -->

				
    <script src="js/vendor/jquery-1.9.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    
     
<?php
include("con1.php");
$query="select * from feedback";
$result=mysqli_query($con,$query);

echo"<table border='5' align='center' bgcolor='white'>
<h1 align='center'><font color='black' size='+5'><u> Feedback </u></font></h1>
<th><font color='' size='+2'><ul >Id </font></ul></th>
<th><font color=''  size='+2'><ul> FirstName </font></ul></th>
<th><font color=''  size='+2'><ul> lastname </font></ul></th>
<th><font color=''  size='+2'><ul> email </font></ul></th>

<th><font color=''  size='+2'><ul> Feedback </font></ul></th>";

while($row=mysqli_fetch_array($result))
{
echo"<tr><td>";
echo $row["id"];
echo "</td><td>";
echo $row["firstname"];
echo "</td><td>";
echo $row["lastname"];
echo "</td><td>";
echo $row["email"];
echo "</td><td>";

echo $row["feedback"];     
echo"</td>
<td><a href='feedbackdelete.php? id=".$row[0]."'><font color='purple'><ul> Delete </ul></font></a></td>";
}
echo"</tr></table>";
?>


<br><br><br><br>
<?php include("footer.php");?>
</body>
</html>

	