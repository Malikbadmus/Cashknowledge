<?php
if(isset($_POST['add'])) {
$dbhost = 'localhost';
$dbuser = 'badmusmalik';
$dbpass = 'tusukiyomi';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}
if(! get_magic_quotes_gpc() ) {

$Fname = addslashes ($_POST['Fname']);
$Lname = addslashes ($_POST['Lname']);
}else {
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
}
$NameErr="";
$Username = $_POST['Username'];
$Mobilenumber = $_POST['Mobilenumber'];
$Email = $_POST['Email'];
$Sex = $_POST['Sex'];
$Age = $_POST['Age'];
$Password = $_POST['Password'];
$Confirmpassword = $_POST['Confirmpassword'];
if($_SERVER["REQUEST_METHOD"]=="POST"){

if(empty($_POST['Fname'])){
$NameErr="Name is required";
}

else {
$sql = "INSERT INTO members_profile ". "(Fname,Lname,Username,Mobilenumber,Email,Sex,Age,Password,Confirmpassword,Joindate,ACCT_BALANCE) ". "VALUES('$Fname','$Lname','$Username','$Mobilenumber','$Email','$Sex','$Age','$Password','$Confirmpassword', NOW(),100)";
mysql_select_db('cashknowledge');
$retval = mysql_query( $sql, $conn );
if(!$retval) {
die('Could not connect: ' . mysql_error());
}
else{

echo "Registration Successfull\n";

mysql_close($conn);
}
}
}
}
?>