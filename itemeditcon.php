<?php
include("con1.php");
$item_id=$_POST["item_id"];
$pname=$_POST["itemnm"];
$price=$_POST["price"];
$image=$_POST["image"];
move_uploaded_file($_FILES['image']['tmp_name'],"img_project/".$image);
$imagepath="img_project/".$image;
$category=$_POST["category"];
$description=$_POST["itemdes"];
$query="UPDATE `item` SET `itemnm` = '$pname',  `price` = '$price', `category` = '$category',`image` = '$imagepath' ,`itemdes` = '$description' WHERE `item`.`item_id` =". $item_id;

$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
	alert("Record Not Updated");
	window location="Itemmaster.php";
</script>
<?php
}
else
{
	header("location:Itemmaster.php");
}
?>