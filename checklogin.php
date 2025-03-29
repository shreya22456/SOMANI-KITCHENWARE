<?php
include("con1.php");
session_start();
$foundBlank=0;
$blankfields=" ";

if(isset($_POST['username'])&& $_POST['username']!= "")
{
	$username=$_POST["username"];
}
else
{
	$foundBlank=1;
	$blankfields .=  " username, ";
}

if(isset($_POST['password'])&& $_POST['password']!= "")
{
	$password=$_POST["password"];
}
else
{
	$foundBlank=1;
	$blankfields .=  " password, ";
}





if($foundBlank==1)
{
echo '<script>
	alert("These Fields cannot be left blank: ' . $blankfields . ' Please fill them","Fields are blank");
	window.history.back();
	</script>	
   ';
	}
else
{

$query="select * from login where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);

if($count<=0)
{
	$query="select * from registration where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	$count=mysqli_num_rows($result);
	if($count<=0)
	{?>
		
		<script>
		alert("username and password is incorrect please try again later");
		window.location="login.php";
		</script>
	<?php
	}
	else
	{
		$_SESSION['user']=$_POST["username"];
		echo "welcome";
	header("location:index.php");
	}
}
else
{
	$_SESSION['user']=$_POST["username"];
		header("location:admin/home.php");
	
}
}
?>