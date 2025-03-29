<?php include("header.php"); ?>
<br><br><br><h1 align="center">ADD TO CART</h1>
<!-- ##### Call To Action Start ###### -->
    <section class="cta-area d-flex flex-wrap">
        <!-- Cta Thumbnail -->
        <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/21.jpg);"></div>   
<?php
include("con1.php");
$id=$_GET['id'];
$query="select * from item where item_id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<form method="post" action="purchase.php">
<table class="tbl" border="5"cellpadding="6"cellspacing="6" align="center" background="back.png">
<tr>
<td>
<input type="hidden" name="id" value="<?php echo $id;?>"/>
<label><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Item Name</h4></label>
</td>
<td><font size='+2'>
<input type="text" name="itemnm" value="<?php echo $row['2'];?>"/>
</td>
</tr>
<tr>
<td>
<label><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price</h4></label>
</td>
<td><font size='+2'>
<input type="text"name="price" height="100%" value="<?php echo $row['4'];?>"/>
</td>
</tr>
<tr>
<td>
<label><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity</h4></label>
</td>
<td><font size='+2'>
<input type="text" name="quantity" />
</td>
</tr>
<tr>
<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="<?php echo "$row[5]"?>" height=200 width=200 />
<?php
$img="$row[5]";
?>
<input type="hidden" name="im" value="<?php echo $img;?>"/>
</td>
</tr>
<br><br>
<tr>
<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input align="middle" name="Add to cart" type="submit" value="Add to cart"  class="btn credit-btn box-shadow">
</td>
</tr>
</font>
</table>
</form>
</div>
</section>
<br> 
<?php
}
?>
<?php include("footer.php"); ?>