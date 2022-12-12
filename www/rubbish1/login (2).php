<iDOCTYPE>
<html>
<head>
<title>CASHKNOWLEDGE</title>
</head>
<style>
body{
background:white;
}
.container{
width:70%;
height:700px;
background:white;
position:relative;
left:190px;
box-shadow:4px 8px 8px 12px green;
}

.header{
width:100%;
height:170px;
background:lightgreen;
position:center;
}

}
.footer{
width:100%;
height:80px;
background:grey;
position:center;
}
h4{
color:black;
background:lightgreen;
position:relative;
top:20px;
}
</style>
<body>
<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=addslashes($_POST['Username']);
$Password=addslashes($_POST['Password']);

$sql="SELECT id FROM members_profile WHERE username='$username' and Password='$Password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result) or die('invalid row:'.mysql_error());
$active=$row['active'];
$count=mysql_num_rows($result)or die('invalid row:'.mysql_error());
if($count==1)
{
session_register("username");
$_SESSION['login_user']=$username;
header("location: welcome.php");
}
else
{
$error="your login name or password is invalid";
}
}
?> 
<div class="container">
<div class="header">
<div class="nav">

<p><h1 align="center"><font face="Bradley Hand ITC" size="10pt" color="black">CASHKNOWLEDGE</font><h1></p>
<h2 align="center"><font face="Bradley Hand ITC" size="5pt" color="black">Welcome to CASHKNOWLEDGE where your<br> knowledge and skill Are transform into money</font><h2><br>
<h3 align="center"><font face="arial" size="5pt" color="black">Login</font></h3>
<form method = "POST" action="">
<p align="center"><font face="arial" size="5pt" color="black">Username:</font>
<input type="text" size="35" name="Username"></p>
<br>
<p align="center"><font face="arial" size="5pt" color="black">Password:</font>
<input type="password" size="35"name="Password"></p><br>
<p align="center"><input type="submit" name="submit" value="Login"></p>
</form>
<p align="center"><font face="arial" size="3pt" color="black">You dont have an account?</font><a href="file:///C:/Users/SHUKURAT/Saved%20Games/Favorites/Documents/Project/CASHKNOWLEDGE/Rawcode2.html"><font face="arial" size="3pt" color="black">Register</font></a><p><br><br><br><br><br><br><br><b>
<footer><center><h4> &copy Copyright Badmus Malik.All Rights Reserved.</h4></center></footer>
</div>
</div>
</div>
</body>
</html>
