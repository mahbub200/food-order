<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Canteen Foood Order</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	
<style>
.checked{
	color:yellow;
}
body
{background-color:#554e6e;
}
.mySlides(display:none);

.link{
	border-radius:10px;
}
.link:hover{
background-color:green;
}	
.zoom
{
	transition:transform 0.6s;

}
.zoom:hover {
	transform :scale(1.05);
	
}
</style>
	
</head>
<body>
<table border ="0" width ="100%" height="10%">
<tr>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="pink" > <a href="index.php"<font color="white" > Home</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="white" > <a href="about.php"<font color="white" >About us</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="white" >Contact us</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="white" > <a href="menu.php">Menu</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="white" >varieties</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="white" >Feedback</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link">  <font color ="white"><a href="register.php">Signup</td>
<td width="12.5%" align ="center" bgcolor="#ab9d35" class="link"> <font color ="white" ><a href ="login.php">Login</td>
</tr>
</table>
<div class="w3-content w3-display-container">
  <img class="mySlides" src="banner.jpg" style="width:100%">
  <img class="mySlides" src="banner2.jpg" style="width:100%">
  <img class="mySlides" src="banner4.jpg" style="width:90%" height ="25%">
  </div>
  
<br>
<br>
<h1 align ="center">Top rated food</h1>
<table border ="0" width ="100%">
<tr>


<td class ="zoom"> <img src ="mutton.jpg" width="80%" height="150%"</td>
<td class ="zoom"> <img src ="chicken.jpg" width="80%" height="150%"</td>
<td class ="zoom"> <img src ="hydrabadi.jpg" width="80%" height="160%"</td>
</tr>
<tr>
	<td align ="center" ><font size="4"><b>Mutton biryani </b></td>
	<td align ="center" ><font size="4"><b>chicken biryani </b></td>
	<td align ="center" ><font size="4"><b>hydrabadi biryani </b></td>
</tr>

<tr>
<td align ="center">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</td>
<td align ="center">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</td>
<td align ="center">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</td>
</tr>
<tr>
	<td align ="center" ><font size="4"><b>Price:200 Tk </b></td>
	<td align ="center" ><font size="4"><b>Price:230 Tk  </b></td>
	<td align ="center" ><font size="4"><b>Price:180 Tk </b></td>
</tr>


<tr>


<td class ="zoom"> <img src ="curry.jpg"</td>
<td class ="zoom">  <img src ="meat.jpg"</td>
<td class ="zoom"> <img src ="vegetable.jpg" height ="125%"</td>
</tr>
<tr>
	<td align ="center" ><font size="4"><b>Curry </b></td>
	<td align ="center" ><font size="4"><b>Meat </b></td>
	<td align ="center" ><font size="4"><b>Vegetable </b></td>
</tr>
<tr>
<td align ="center">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star " ></span>
</td>
<td align ="center">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
</td>
<td align ="center">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
</td>
</tr>
<tr>
	<td align ="center" ><font size="4"><b>Price:200 Tk </b></td>
	<td align ="center" ><font size="4"><b>Price:230 Tk  </b></td>
	<td align ="center" ><font size="4"><b>Price:180 Tk </b></td>
</tr>
</table>

<table border="0" width ="100%" bgcolor="#ab9d35" height ="10%">

<tr>
<td align ="center"><font color="brown" >Designed by Mahbub Faruque Ahmed</font>
</tr>
</table>
</body>
</html>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); 
}
</script>