<?php
if(!session_is_registered('loginid')|| !session_is_registered('username'))
{
if(isset($_POST['cmdlogin']))
{
$u=strip_tags($_POST['username']);
$p=md5(strip_tags($_POST['password']));
$query=sprintf("SELECT loginid FROM login WHERE username='%' AND password = '%' ;", mysql_real_escape_string($u), mysql_real_escape_string($p));
$result=mysql_query($query);
if(mysql_num_rows($result)!=1)
{
echo "wrong username or password";

include"loginform.php";
}
else
{
$row=mysql_fetch_array($result);
$_SESSION['loginid']=$row['loginid'];
$_SESSION['username']=$u;

show_userbox();
}
}else
{
include"loginform.php";
}
else
{
show_userbox();
}

?>

