<?php
if(isset($_POST['Login'])) {
include('config.php');

session_start();
$Username=addslashes($_POST['Username']);
$Password=addslashes($_POST['Password']);

$sql="SELECT ID FROM members_profile WHERE Username='$Username' and Password='$Password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);
if($count==1)
{

$_SESSION['login_user']=$username;
header("location: Login.php");
}
else
{
echo "<b>Your login name or password is invalid</b>";
}
}


?> 