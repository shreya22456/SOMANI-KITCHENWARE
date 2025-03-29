        <br><br><br>
<body background="img_project/bg/b28.jpg" alt="" width="1500" height="700" align="center" >

<center><img src="Kitchenware logo/l6.png"></center>
		<BR><BR><BR><BR><BR><BR>
	  <?php
include("con1.php");
$id=$_GET['id'];
$query="select * from login where id=".$id;
$result=mysqli_query($con,$query);


while($row=mysqli_fetch_array($result))
{?>
	 
<form method="post" action="logineditsave.php">
<table cellpadding='6' border="6"cellspacing='6' class='lbl' align="center" bgcolor="white">
<tr>
    <td colspan="2" align="center" class="hed"><strong>Admin Edit</strong></td>
</tr>
   
      <input type="hidden" name="id" value="<?php echo $_GET["id"]?>" />
  
  <tr>
    <td>UserName</td>
    <td><label>
      <input type="text" name="username" value="<?php echo $row['1'];?>" >
    </label></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label>
      <input type="password" name="password" value="<?php echo $row['2'];?>" />
    </label></td>
  </tr>
  <tr>
    
    <td align="center" colspan="2"><label>
      <input type="submit" name="Submit" value="Edit" class="btn" />
    </label></td>
  </tr>
</table>
</form>
<?php }?>
<br><br><br><br>
      <?php include("footer.php"); ?>
