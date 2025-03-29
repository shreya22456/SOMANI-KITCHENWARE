<?php
include("con1.php");
$category=$_POST["category"];
$itemnm=$_POST["itemnm"];
$itemdes=$_POST["itemdes"];
$price=$_POST["price"];
$image=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"img_project/".$image);
$imagepath="img_project/".$image;
$query="insert into item(category,itemnm,itemdes,price,image)values('$category','$itemnm','$itemdes','$price','$imagepath')";
$result=mysqli_query($con,$query);

	header("location:itemmaster.php");

?>
