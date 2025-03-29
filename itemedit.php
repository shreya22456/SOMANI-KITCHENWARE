<br><br><br>
<body background="img_project/bg/b28.jpg" alt="" width="1500" height="600" align="center" >
<center><img src="Kitchenware logo/l6.png"></center>
<br><br><br><br><br>
<?php
$item_id=$_GET['id'];
include("con1.php");
$query="select * from item where item_id=".$item_id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<form action="itemeditcon.php" method="post">
<table class="tbl" border="5" align="center" cellpadding="6"cellspacing="6" bgcolor="white">
<tr>
<h1 align="center" class="hed">ITEM EDIT
</h1></tr>
<input type="hidden" name="item_id" value="<?php echo $_GET['id'];?>"/>
<tr>
<td>Item Name</td>
<td><input type="text" id="itemnm" name="itemnm" value="
<?php echo $row ["itemnm"] ?> ">
</td>
</tr>
<tr>
<td>Price</td>
<td><input type="text" name="price" id="price" value="
<?php echo $row["price"] ?>">
</td>
</tr>
<tr>
<tr>
	<td>Image</td>
	<td>
	<input name="image" type="file" id="image" value="<?php echo $row["image"];?>"/>
	</td>
</tr>
<tr>
<td>Category</td>
<td><input type="text" name="category" id="category" value="
<?php echo $row["category"] ?>">
</td>
</tr>

<tr>
<td>Description</td>
<td><input type="text" name="itemdes" id="itemdes" value="
<?php echo $row["itemdes"] ?>">
</td>
</tr>
<tr>
<td colspan="7" align="center" class="hed">
<input type="submit" value="Edit" class="btn" name="submit">
</td>
</tr>
</table>
</form>
<?php
}
?>
<?php
include ("footer.php");
?>