<?php
include("con1.php");
$id=$_GET['id'];
$name=$_GET['nm'];
$address=$_GET['address'];
$city=$_GET['city'];
$item=$_GET['item'];
$total=$_GET['total'];
$payment=$_GET['payment'];
$query="DELETE FROM `purchase` WHERE `purchase`.`id` = '$id'";
mysqli_query($con,$query);
header("location:purchase.php");
?>