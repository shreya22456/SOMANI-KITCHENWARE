<?php
include("con1.php");
$item_id=$_GET['id'];
$query="delete from item where item_id=".$item_id;
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert("Record Not Delete");
window.location="itemmaster.php";
</script>
<?php
}
else
{
	header("location:itemmaster.php");
}
?>