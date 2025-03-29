<?php
include("con1.php");

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$country=$_POST['country'];
$city=$_POST['city'];
$state=$_POST['state'];
$contactno=$_POST['contactno'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];


mysqli_query($con,"INSERT INTO `registration` (`firstname`,`lastname`,`address`,`country`, `city`, `state`, `contactno`, `email`, `username`, `password`) 
VALUES ('$firstname','$lastname', '$address','$country', '$city', '$state', '$contactno', '$email','$username', '$password')");
header("location:login.php");
?>


