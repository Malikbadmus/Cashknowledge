<?php
$dbhost = 'localhost';
$dbuser = 'badmusmalik';
$dbpass = 'tusukiyomi';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_select_db( 'cashknowledge' );
mysql_close($conn);
?>
