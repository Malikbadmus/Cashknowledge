<?php
define("HOST", "localhost");
define("DBUSER", "badmusmalik");
define("PASS", "tusukiyomi");
define("DB", "cashknowledge");
$conn=mysql_connect(HOST, DBUSER, PASS);
if(!$conn)
{
die('could not connect!<br/>please contact the site\'s administrator.');
}
$db=mysql_select_db(DB);
if(!$db)
{
die('could not connect to database!<br/>please contact the site\'s administrator.');
}
?>