<?php include("header.php");?>
<br><br><br><br><br><br>
<body background="img_project/bg/b8.jpg">
    </body>
<form method="post" action="registrationsave.php" name="regform">
<div align="center">
  <table cellpadding="6" cellspacing="6" border="6" width="30%" class="fonts" bgcolor="white">
  <h1 align="center" class="hed">Create Account</h1>
   
      <tr>
	  	<td><B>firstname</B></td>
		<td><label>
			<input type="text" name="firstname"/>
		</label></td>
	  </tr>
	  
	  <tr>
	  	<td><B>lastname</B></td>
		<td><label>
			<input type="text" name="lastname"/>
		</label></td>
	  </tr>
	  <tr>
	  	<td><B>address</B></td>
		<td><label>
			<textarea name="address"></textarea>
		</label></td>
	  </tr>
	  <tr>
	  	<td><B>country</B></td>
		<td><label>
			<input type="text" name="country"/>
		</label></td>
	  </tr>
	  <tr>
	  	<td><B>city</B></td>
	  	<td><label>
			<input type="text" name="city"/>
		</label></td>
	  </tr>
	  <tr>
	  	<td><B>state</B></td>
		<td><label>
			<input type="text" name="state"/>
		</label></td>
	  </tr>
	  <tr>
	  	<td><B>contactno</B></td>
		<td><label>
			<input type="text" name="contactno"/>
		</label></td>
	  </tr>
	  <tr>
	  	<td><B>email</B></td>
		<td><label>
			<input type="text" name="email"/>
		</label></td>
	  </tr>
	  
	  <br/>
	  </p>   <label></label></td>
	  </tr>
	  <tr>
	  	<td><B>username</B></td>
		<td><label>
			<input type="text" name="username"/>
		</label></td>
	  </tr>
	  <tr>
	  	<td><B>password</B></td>
		<td><label>
			<input type="password" name="password"/>
		</label></td>
	  </tr>
	  
	  <td align="center" colspan="2"><label>
	  	<input type="submit" name="Submit" value="Submit" class="button"/>
		<input type="submit" name="Reset" value="Reset" class='button'/>
	  </label></td>
	  </tr>
  </table>
</form>
<br><br><br><br><br><br>
<?php include("footer.php");?>
