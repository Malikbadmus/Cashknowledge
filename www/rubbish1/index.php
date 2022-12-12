<?php
ini_set('display_errors', 1);
session_start();
require_once('db_connect.inc.php');
require_once('functions.inc.php');
if($_SESSION['loginid']) {
echo "yes";
}
else
{
header('location:/login.php');
}
?>
<html>
<head>
<title>simple login tutorial</title>
<meta http_equiv="content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
include "login.php";
?>
</body>
</html>