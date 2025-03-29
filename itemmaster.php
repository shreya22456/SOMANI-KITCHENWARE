
<body background="img_project/bg/b28.jpg" alt="" width="1500" height="600" align="center"></body>
<br><br><br>
<center><img src="Kitchenware%20logo/l6.png"></center>
<br><br><br>
<a href="home.php"><img src="img_project/bg/icon1.png" align="right" width="80" height="80"><h1><b></b></h1></a>  
    <!-- Slider -->
<table class="tbl" border="5" cellpadding="7" cellspacing="7" align="center" bgcolor="white">
<tr>
	<h1 align="center" class="hed" ><font color="black">Item Master</font></h1>
</tr>
<tr class="th1">
	<td><B>Item Id</B></td>
	<td><B>Category</B></td>
	<td><B>Item Name</B></td>
    <td><B>Item Description</B></td>
    <td><B>Price</B></td>
    <td><B>Image</B></td>
	<td><B>Edit</B></td>
	<td><B>Delete</B></td>
	
</tr>
<?php
	include("con1.php");
	$query="select * from item";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr><td>";
		echo $row["item_id"];
		echo"</td><td>";
		echo $row["category"];
		echo"</td><td>";
		echo $row["itemnm"];
		echo"</td><td>";
		echo $row["itemdes"];
		echo"</td><td>";
		echo $row["price"];
		echo"</td><td>";
		echo"<img src='".$row['image']."' height=50 width=50>";
		echo"</td><td>";
		echo"<a href='itemedit.php?id=".$row[0]."'>Edit</a>";
		echo"</td><td>";
		echo"<a href='itemdelete.php?id=".$row[0]."'>Delete</a>";
		echo"</td></tr>";
	}
?>
<tr>
	<td colspan="10" align="center" class="hed">
	<a href="iteminsert.php">Item Insert</a></td>
</tr>
</table>
<?php include("footer.php"); ?>