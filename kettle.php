<?php
include("header.php"); 
?> 
      <!-- items -->
        
  <br>      
<?php
echo"<br><br><br>";
include("con1.php");
$query="select *from item where itemnm='kettle'";
$result=mysqli_query($con,$query);

echo"<table align='center' style='margin-left:50px'>
<h1 align='center'>KETTLE</h1>";
while($row=mysqli_fetch_array($result))
{

echo "<td>";
echo " <img src='$row[5]' height=300 width=300 >"; 
echo "<br>";
echo "<font size='+2'>";
echo $row["itemnm"];
echo "<br>";
echo $row["category"];
echo "<br>";
echo $row["price"];
echo "</font>";
echo "<br>";
echo "<a href='addtocart.php?id=".$row[0]."'><img src='atc/a2.jpg' height='80' width='150'></a>";
echo "</td>";

}


echo"</tr>";
echo"<br>";

echo"</table>";
?>
  
<?php
include("footer.php");
?> 
  