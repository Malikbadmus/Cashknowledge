

if($Level_session='Beginner' AND $Mode_session='1'||'2'||'3'||'4'){
$inmode=$Mode_session+1;
$sql = "UPDATE members_profile SET Mode = '$inmode',ACCT_BALANCE='$inbal' WHERE Username = '$user_check'";
mysql_select_db('cashknowledge');
$retval = mysql_query( $sql, $conn);
}
else if($Level_session='Beginner' AND $Mode_session='5'){
$sql = "UPDATE members_profile SET Mode = '1',ACCT_BALANCE='$inbal,Level='Novice' WHERE Username = '$user_check'";
mysql_select_db('cashknowledge');
$retval = mysql_query( $sql, $conn);
}
header("location: cashroom.php");
mysql_close($conn);
}

else if(isset($_POST['Sports'])) {

switch($Mode_session)
{
case "1":
	$t=$ba_session;	
	$A1=$D51_session; $B1=$B51_session; $C1=$A51_session; $D1=$C51_session;
	$t1=$bb_session;
	$A2=$B52_session; $B2=$A52_session; $C2=$C52_session; $D2=$D52_session;
	$t2=$bc_session;
	$A3=$A53_session; $B3=$B53_session; $C3=$C53_session; $D3=$D53_session;
	$t3=$bd_session;
	$A4=$A54_session; $B4=$B54_session; $C4=$C54_session; $D4=$D54_session;	
	$t4=$be_session;
	$A5=$A55_session; $B5=$B55_session; $C5=$C55_session; $D5=$D55_session;	
break;
}
}	
default:
$t="";
$t1="";
$t2="";
$t3="";
$t4="";
}
else if(isset($_POST['Submi'])){
	$dbhost = 'localhost';
$dbuser = 'badmusmalik';
$dbpass = 'tusukiyomi';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}

$sql = "UPDATE members_profile SET ACCT_BALANCE='$rebal' WHERE Username = '$user_check'";
mysql_select_db('cashknowledge');
$retval = mysql_query( $sql, $conn);
if(!$retval) {
die('Could not connect: ' . mysql_error()); 
}
else{

$Answer=($_POST['a']);
$Answer1=($_POST['b']);
$Answer2=($_POST['c']);
$Answer3=($_POST['d']);
$A51=$A51_session;
$A52=$A52_session;
$A53=$A53_session;
$A54=$A54_session;
$A55=$A55_session;	

if((empty($_POST['a']))OR(empty($_POST['b']))OR(empty($_POST['c']))OR(empty($_POST['d']))OR(empty($_POST['e']))){
header("location: Nreward.php");
} else if((($_POST['a'])==$A51) AND(($_POST['b'])==$A52)AND(($_POST['c'])==$A53)AND(($_POST['d'])==$A54)AND(($_POST['e'])==$A55)){
header("location: Rewardpage.php");
}
}


}

}
#header{
background-image: url(alllll.jpg);
 background-repeat: no-repeat;
      background-position: center;
      padding-top:68px;
      margin-bottom:50px;
	  
}


.side{
width:100%;
height:30px;
background:lime;
}
a{text-decoration: none;}

