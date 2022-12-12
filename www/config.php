<?php
$mysql_hostname="localhost";
$mysql_user="badmusmalik";
$mysql_password="tusukiyomi";
$mysql_database="cashknowledge";
$bd = mysql_connect($mysql_hostname,$mysql_user,$mysql_password);
/* if (!$bd)
{
echo "Error connecting.\n";
}
else
{
echo "succesfully connected";
}*/
mysql_select_db($mysql_database,$bd);
?>