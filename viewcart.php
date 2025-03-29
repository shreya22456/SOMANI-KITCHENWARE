<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:login.php");
}
else
{

?>
<?php
include("header.php") 
?>
<br><br><br><br><br>


<script type="text/javascript">
function validateForm()
{
var a=document.forms["viewcart"]["quantity"].value;
if (a==null || a=="")
}
{
  alert("quantity must be filled out");
  return false;
}

</script>

<!-- ##### Call To Action Start ###### -->
    <section class="cta-area d-flex flex-wrap">
        <!-- Cta Thumbnail -->
        <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/21.jpg);"></div>

        <!-- Cta Content -->
<form id="form1" method="post" action="deletecart.php">
<table>
<?php
include("con1.php");
$tot=0;
$user=$_SESSION['user'];
$query="select * from addtocart where username='$user'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<tr><td rowspan="5"><img src="<?php echo $row[5]?>" height=200 width=200></td></tr>
<tr><td><font color='#01910' size="+2"><B>NAME  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</B><input type="text" name="nm" value="<?php echo $row[1];?>"></font></td></tr>
<tr><td><font color='#01910' size="+2"><B>PRICE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</B><input type="text"name="pr"id="textfield"value="<?php echo $row[2];?>"/></font></td></tr>
<tr><td><font color='#01910' size="+2"><B>QUANTITY&nbsp;</B><input type="text"name="qu"id="textfield"value="<?php echo $row[3];?>"onSubmit="return validateForm()"/></font></td></tr>
<tr><td><font color='#01910' size="+2"><B>TOTAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B><input type="text"name="tot"id="textfield"value="<?php echo $row[4];?>"/></font></td></tr>
<tr><td>
<?php echo "<a href='deletecartitem.php?id=".$row['0']."'><h4 ><font color='#01910'>Delete</font></h4></a>"?>
</td></tr>
<?php
$a=$row['4'];
$tot=$tot+$a;
?><?php
}
?>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='#2A33BA' size='+3'>Total Amount=</font>
<td><font color='#2A33BA' size='+3'><?php echo $tot;?></font></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input align="middle" name="submit" value="purchase"/id="bt" type="submit"class="btn credit-btn box-shadow">
</td>
</tr>
</table>
</form>
</div>
    </section>
    <br>
    
<?php
include("footer.php") 
?>
<?php }?> 