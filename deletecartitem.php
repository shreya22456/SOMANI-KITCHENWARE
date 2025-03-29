<?php
session_start();
if(!isset($_SESSION['user']))
header("location:login.php");
else
{
?>
<?php
include("con1.php");
$id=$_GET['id'];
$user=$_SESSION['user'];
$q="delete from addtocart where id='$id'";
mysqli_query($con,$q);
header("location:viewcart.php");
?>
<script type="text/javascript">
alert("your order is cancelled...");
window.location="home.php";
</script>
<?php
}
?>
