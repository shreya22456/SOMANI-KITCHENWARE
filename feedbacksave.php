
 
<?php
include("con1.php");

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
mysqli_query($con,"INSERT INTO `feedback` ( `firstname`, `lastname`, `email`, `feedback`)VALUES (  '$firstname' , '$lastname ', '$email' , '$feedback')");
header("location:index.php");
?>


	
