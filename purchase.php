<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:login.php");
}
else
{

include("con1.php");
$id=$_POST['id'];
$name=$_POST['itemnm'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$tot=$price*$quantity;
$a=$_SESSION['user'];
echo $tot;
$image=$_POST['im'];
$q="INSERT INTO `addtocart` (`name`, `price`, `quantity`, `total`, `image`, `username`)VALUES ('$name', '$price', '$quantity', '$tot', '$image', '$a');";
mysqli_query($con,$q);
header("location:viewcart.php");
?>
<?php
}
?>