<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
.link{
	border-radius:10px;
}
.link:hover{
background-color:green;
}	
body
{background-color:#554e6e;
}
</style>
</head>
<body>
<table border ="0" width ="100%" height="10%">
<tr>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="pink" > <a href="index.php"<font color="white" > Home</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="white" > <a href="about.php"<font color="white" >About us</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="white" >Contact us</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="white" ><a href="menu.php">Menu</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="white" >varieties</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="white" >Feedback</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link">  <font color ="white"><a href="register.php">Signup</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="white" ><a href ="login.php">Login</td>
</tr>
</table>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <br> <br> <br> <br> <br> <br> <br> <br> <br>
  <table border="0" width ="100%" bgcolor="#ab9d35" height ="10%">

<tr>
<td align ="center"><font color="brown" >Designed by Mahbub Faruque Ahmed</font>
</tr>
</table>
</body>
</html>