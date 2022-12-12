<?php
$dbhost = 'localhost';
$dbuser = 'sirjerry';
$dbpass = 'tusukiyomi77';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($conn);
?>
