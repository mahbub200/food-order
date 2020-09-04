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
<h1 > Canteen Food Management</h1>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  <table border="0" width ="100%" bgcolor="#ab9d35" height ="10%">

<tr>
<td align ="center"><font color="brown" >Designed by Mahbub Faruque Ahmed</font>
</tr>
</table>
</body>
</html>