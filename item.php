<?php include("header.php"); ?>
<br><br><br><br><br><br>
<form action="itemmaster.php" method="post" enctype="multipart/form-data">
<table class="tbl" border="5" cellpadding="6" cellspacing="6" align="center" bgcolor="#666666">
<tr>
	  <h1 align="center" class="hed">ITEM FORM</h1>
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
	<input type="submit" name="submit"  value="Insert" class="btn">
	</td>
</tr>
</table>
</form>
<?php include("footer.php"); ?>