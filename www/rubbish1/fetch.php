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
$dbhost = 'localhost';
$dbuser = 'badmusmalik';
$dbpass = 'tusukiyomi';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Username, Password FROM  members_profile';
mysql_select_db('cashknowledge');
$retval = mysql_query( $sql, $conn );
if(! $retval ) {
die('Could not get data: ' . mysql_error());
}
if(! get_magic_quotes_gpc() ) {
$Username = addslashes ($_POST['Username']);
$password = addslashes ($_POST['password']);
}else {
$Username = $_POST['Username'];
$password = $_POST['password'];
}
if( $Username == $_POST['Username'] AND $Password == $_POST['Password']  ) {
 echo "Have a nice day!";

}else  {
echo "Have a nice d";

}

mysql_free_result($retval);
echo "Fetched data successfully\n";

?>
<div class="container">
<div class="header">
<div class="nav">

<p><h1 align="center"><font face="Bradley Hand ITC" size="10pt" color="black">CASHKNOWLEDGE</font><h1></p>
<h2 align="center"><font face="Bradley Hand ITC" size="5pt" color="black">Welcome to CASHKNOWLEDGE where your<br> knowledge and skill Are transform into money</font><h2><br>
<h3 align="center"><font face="arial" size="5pt" color="black">Login</font></h3>
<form>
<p align="center"><font face="arial" size="5pt" color="black">Username:</font>
<input type="text" size="35" name="Username"></p>
<br>
<p align="center"><font face="arial" size="5pt" color="black">Password:</font>
<input type="text" size="35" name="password"></p><br>
<p align="center"><input type="submit" size="35" value="Login"></p>
</form>
<p align="center"><font face="arial" size="3pt" color="black">You dont have an account?</font><a href="file:///C:/Users/SHUKURAT/Saved%20Games/Favorites/Documents/Project/CASHKNOWLEDGE/Rawcode2.html"><font face="arial" size="3pt" color="black">Register</font></a><p><br><br><br><br><br><br><br><b>
<footer><center><h4> &copy Copyright Badmus Malik.All Rights Reserved.</h4></center></footer>
</div>
</div>
</div>
</body>
</html>
