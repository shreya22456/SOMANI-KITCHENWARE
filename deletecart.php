<?php
session_start();
if(!isset($_SESSION['user']))
header("location:login.php");
else
{
?>

<?php
include("con1.php");
$user=$_SESSION['user'];
$tot=$_POST['tot'];
$nm=$_POST['nm'];
$q1="select * from registration where username='$user'";
$res=mysqli_query($con,$q1);

while($row=mysqli_fetch_array($res))
{
$name= $row['1'];
$add=$row['2'];
$city= $row['3'];
}
mysqli_query($con,"INSERT INTO `purchase` (`name`, `address`, `city`, `item`, `total`, `payment`) VALUES ('$name', '$add', '$city', '$nm', '$tot', '$tot');");
$q="delete from addtocart where username='$user'";
mysqli_query($con,$q);
//header("location:home.php");
?>
<script type="text/javascript">
alert("Congratulations! your order is conformed....");
window.location.href="index.php";
</script>



<?php
}
?>