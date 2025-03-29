<?php include("header.php");?>
  <br>
  <br>
  <br><br><br><br><br> 
  <body background="img_project/bg/b8.jpg">
         
<form method="post" action="feedbacksave.php"  name="feedform">
<table cellpadding='6' cellspacing='6' border='5' width="30%" class="tbl" background="" align="center">
	<h1 align="center" class="hed"> Feedback</h1>
  

  <tr>
    <td><B><font color="#000000">Firstname</font></B></td>
    <td><label>
      <input type="text" name="firstname" />
    </label></td>
  </tr>
  
  
  <tr>
    <td><B><font color="#000000">Lastname</font></B></td>
    <td><label>
      <input type="text" name="lastname" />
    </label></td>
  </tr>
  <tr>
    
    <td><B><font color="#000000">Email</font></B></td>
    <td><label>
      <input type="text" name="email" />
    </label></td>
  </tr>
  
  <tr>
    <td><B><font color="#000000">Feedback</font></B></td>
    <td><label>
      <input type="text" name="feedback" />
    </label></td>
  </tr>
  
  	<tr>
  	<br />
    </p>      <label></label></td>
  </tr>
  
     <td align="center" colspan="2"><label>
      <input type="submit" name="Submit" value="Submit" class="button" onClick=" return validate(feedform)" />
      <input type="submit" name="Reset" value="Reset" class='button'/>
    </label></td>
  </tr>
</table>
</form>
</body>
<br>
<br><br>
<?php include("footer.php");?>
