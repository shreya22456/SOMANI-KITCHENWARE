<?php
include("con1.php");
$id=$_GET['id'];
$name=$_GET['nm'];
$price=$_GET['price'];
$quantity=$_GET['quantity'];
$image=$_GET['image'];
$username=$_GET['username'];
$query="DELETE FROM `addtocart` WHERE `addtocart`.`id` = '$id'";
mysqli_query($con,$query);
header("location:addtocart.php");
?>