<?php
define('DB_HOST','localhost');
define('DB_NAME','cashknowledge');
define('DB_USER', 'badmusmalik');
define('DB_PASSWORD','tusukiyomi');
$conn=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("failed to connect to MySQL:". mysql_error());
$db=mysql_select_db(DB_NAME,$conn) or die("failed to connect to MySQL:". mysql_error());
session_start();
if(!empty($_POST['username'])) 
{
$query=mysql_query("SELECT * FROM members_profile WHERE Username ='$_POST[username]' AND Password = '$_POST[password]'") or die (mysql_error());
$row = mysql_fetch_array($query);
if(!empty($row['Username'])AND !empty($row['password']))
{
$_SESSION['Username'] = $row['password'];
echo "SUCCESFULLY LOGIN TO USER PROFILE PAGE.....";
}
else
{
echo "SORRY";
}
}

if(isset($_POST['submit']))
{
login();
}
?>
