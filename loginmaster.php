 

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    
</head>

<br><br><br>
<body background="img_project/bg/b28.jpg" alt="" width="1500" height="700" align="center" >

<center><img src="Kitchenware logo/l6.png"></center>
<br><br><br>

    <script src="js/vendor/jquery-1.9.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <a href="home.php"><img src="img_project/bg/icon1.png" align="right" width="80" height="80"><h1><b></b></h1></a>  
    <!-- Slider -->
    <script type="text/javascript"> 
    $(function() {
        var Page = (function() {
            var $navArrows = $( '#nav-arrows' ),
            slitslider = $( '#slider' ).slitslider( {
                autoplay : true
            } ),
            init = function() {
                initEvents();
            },
            initEvents = function() {
                $navArrows.children( ':last' ).on( 'click', function() {
                    slitslider.next();
                    return false;
                });
                $navArrows.children( ':first' ).on( 'click', function() {
                    slitslider.previous();
                    return false;
                });
            };
            return { init : init };
        })();
        Page.init();
    });
    </script>
    <!-- /Slider -->

<?php
include("con1.php");
$query="SELECT * FROM `login` ";
$result=mysqli_query($con,$query);

echo"<table border='5' align='center' bgcolor='white'>
<h1 colspan='1' align='center'><font color='black' size='+5'><u> LOGIN MASTER </u></font></h1>
<th><font color='purple' size=+2><ul>Id</font></ul></th>
<th><font color='purple' size=+2><ul>Username</font></ul></th>
<th><font color='purple' size=+2><ul>Password</font></ul></th>
<th><font color='purple' size=+2><ul>Edit</font></ul></th>
<th><font color='purple' size=+2><ul>Delete</font></ul></th>";
while($row=mysqli_fetch_array($result))
{
echo"<tr><td>";
echo $row["id"];
echo "</td><td>";
echo $row["username"];
echo "</td><td>";
echo $row["password"];
echo "</td><td><a href='loginedit.php? id=".$row[0]."'><font color='purple'><ul>Edit</ul></font></a></td>
<td><a href='logindelete.php?id=".$row[0]."'><font color='purple'><ul>Delete</ul></font></a></td>";
}
echo"</tr><tr>";
echo"<td colspan='10' align='center'><a href='logininsert.php'>
<font color='purple' size=+3><ul> Insert New Admin </ul></font></a></td>";
echo"</tr></table>";
?>
<br><br>
<?php include("footer.php"); ?>
</body>

