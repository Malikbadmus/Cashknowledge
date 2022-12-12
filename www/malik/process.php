<?php
include('lock.php');
?>
<?php
$rebal=$Acct_session-40;
$repay=$pay_session+40;
if(isset($_POST['Submit'])) {
$dbhost = 'localhost';
$dbuser = 'badmusmalik';
$dbpass = 'tusukiyomi';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}
if ($Mode_session="Beginner"){

$sql = "UPDATE account, members_profile SET Payment_Fee='$repay', ACCT_BALANCE='$rebal' WHERE Username = '$user_check'";
mysql_select_db('cashknowledge');

$retval = mysql_query( $sql, $conn);
if(!$retval) {
die('Could not connect: ' . mysql_error()); 
}
else{

echo "<center>RESULT</center>";
$Answer=($_POST['a']);
$Answer1=($_POST['b']);
$Answer2=($_POST['c']);
$Answer3=($_POST['d']);
$A1=$A1_session;
$A2=$A2_session;
$A3=$A3_session;
$A4=$A4_session;
$A5=$A5_session;
$A6=$A6_session;
$A7=$A7_session;
$A8=$A8_session;
$A9=$A9_session;
$A10=$A10_session;
$A11=$A11_session;
$A12=$A12_session;
$A13=$A13_session;
$A14=$A14_session;
$A15=$A15_session;
$A16=$A16_session;
$A17=$A17_session;
$A18=$A18_session;
$A19=$A19_session;
$A20=$A20_session;
$A21=$A21_session;
$A22=$A22_session;
$A23=$A23_session;
$A24=$A24_session;
$A25=$A25_session;
$A26=$A26_session;
$A27=$A27_session;
$A28=$A28_session;
$A29=$A29_session;
$A30=$A30_session;
$A31=$A31_session;
$A32=$A32_session;
$A33=$A33_session;
$A34=$A34_session;
$A35=$A35_session;
$A36=$A36_session;
$A37=$A37_session;
$A38=$A38_session;
$A39=$A39_session;
$A40=$A40_session;
$A41=$A41_session;
$A42=$A42_session;
$A43=$A43_session;
$A44=$A44_session;
$A45=$A45_session;
$A46=$A46_session;
$A47=$A47_session;
$A48=$A48_session;
$A49=$A49_session;
$A50=$A50_session;
$A51=$A51_session;
$A52=$A52_session;
$A53=$A53_session;
$A54=$A54_session;
$A55=$A55_session;
$A56=$A56_session;
$A57=$A57_session;
$A58=$A58_session;
$A59=$A59_session;
$A60=$A60_session;



if((empty($_POST['a']))OR(empty($_POST['b']))OR(empty($_POST['c']))OR(empty($_POST['d']))OR(empty($_POST['e']))){
header("location: Nreward.php");
} else if((($_POST['a'])==$A1) AND(($_POST['b'])==$A2)AND(($_POST['c'])==$A3)AND(($_POST['d'])==$A4)AND(($_POST['e'])==$A5)){
header("location: Rewardpage.php");
}
else if((($_POST['a'])==$A6) AND(($_POST['b'])==$A7)AND(($_POST['c'])==$A8)AND(($_POST['d'])==$A9)AND(($_POST['e'])==$A10)){
header("location: Rewardpage.php");
}
else if((($_POST['a'])==$A11) AND(($_POST['b'])==$A12)AND(($_POST['c'])==$A13)AND(($_POST['d'])==$A14)AND(($_POST['e'])==$A15)){
header("location: Rewardpage.php");
}
else if((($_POST['a'])==$A16) AND(($_POST['b'])==$A17)AND(($_POST['c'])==$A18)AND(($_POST['d'])==$A19)AND(($_POST['e'])==$A20)){
header("location: Rewardpage.php");
}
else if((($_POST['a'])==$A21) AND(($_POST['b'])==$A22)AND(($_POST['c'])==$A23)AND(($_POST['d'])==$A24)AND(($_POST['e'])==$A25)){
header("location: Rewardpage.php");
}
else if((($_POST['a'])==$A26) AND(($_POST['b'])==$A27)AND(($_POST['c'])==$A28)AND(($_POST['d'])==$A29)AND(($_POST['e'])==$A30)){
header("location: Rewardpage.php");
}
else if((($_POST['a'])==$A31) AND(($_POST['b'])==$A32)AND(($_POST['c'])==$A33)AND(($_POST['d'])==$A34)AND(($_POST['e'])==$A35)){
header("location: Rewardpage.php");
}
else if((($_POST['a'])==$A36) AND(($_POST['b'])==$A37)AND(($_POST['c'])==$A38)AND(($_POST['d'])==$A39)AND(($_POST['e'])==$A40)){
header("location: Rewardpage.php");
}
else if((($_POST['a'])==$A41) AND(($_POST['b'])==$A42)AND(($_POST['c'])==$A43)AND(($_POST['d'])==$A44)AND(($_POST['e'])==$A45)){
header("location: Rewardpage.php");
}
else if((($_POST['a'])==$A46) AND(($_POST['b'])==$A47)AND(($_POST['c'])==$A48)AND(($_POST['d'])==$A49)AND(($_POST['e'])==$A50)){
header("location: Rewardpage.php");
}
 else if((($_POST['a'])==$A51) AND(($_POST['b'])==$A52)AND(($_POST['c'])==$A53)AND(($_POST['d'])==$A54)AND(($_POST['e'])==$A55)){
header("location: Rewardpage.php");
}
 else if((($_POST['a'])==$A56) AND(($_POST['b'])==$A57)AND(($_POST['c'])==$A58)AND(($_POST['d'])==$A59)AND(($_POST['e'])==$A60)){
header("location: Rewardpage.php");
}
else{
	header("location: Nreward.php");
}
mysql_close($conn);

}

}
}


?>