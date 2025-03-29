<br><br><br>
<body background="img_project/bg/b28.jpg" alt="" width="1500" height="600" align="center" >
<center><img src="Kitchenware logo/l6.png"></center>
<body background="img_project/bg/b3.jpg" alt="" width="1500" height="600" align="center"></body>
<br><br><br><br>
<form action="iteminsertsave.php" method="post" enctype="multipart/form-data">
<table class="tbl" border="5" cellpadding="7" cellspacing="7" align="center" bgcolor="white">
<tr>
	  <h1 align="center" class="hed">Item Form</h1>
</tr>

<td>Category</td>
<!-- <td><input type="text" name="category"id="category"></td> --> <td>
<?php
	include("con1.php");
	$query="select catname from category";
	$result=mysqli_query($con,$query);
    echo "<select name=category>";
    While($row=mysqli_fetch_array($result))
    {
        echo "<option>";
        echo $row["catname"];
		echo "<option></option>";
        echo "</option>";
        
    }
    echo "</select>";
echo "</td>";
echo "</tr>";
?>
<tr>
<tr>
	  <td>Item Name</td>
	<td><input name="itemnm" type="text" id="itemnm"></td>
</tr>
<tr>
	  <td>Item Description</td>
	<td><input name="itemdes" type="text" id="itemdes"></td>
</tr>

<tr>

	  <td>Price</td>
	<td><input name="price" type="text" id="price"></td>
</tr>
<tr>
	  <td>Image</td>
	<td><input name="image" type="file" id="image"></td>
</tr>
<tr>
	<td colspan="6" align="center" class="hed">
	<input type="submit" name="submit"  value="Insert" class="button">
	</td>
</tr>
</table>
</form>
<?php include("footer.php"); ?>