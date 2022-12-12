
<?php
include('lock.php');
?>
<?php
$inmode=$Mode_session+1;
$inbal=$Acct_session+70;
if(isset($_POST['addd'])) {
$dbhost = 'localhost';
$dbuser = 'badmusmalik';
$dbpass = 'tusukiyomi';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}

switch($Level_session)
{
case "Beginner":
$sql = "UPDATE members_profile SET Mode = '$inmode',ACCT_BALANCE='$inbal' WHERE Username = '$user_check'";
mysql_select_db('cashknowledge');
$retval = mysql_query( $sql, $conn);
Break;
}
switch($Mode_session)
{
case "5":
$sql = "UPDATE members_profile SET Mode = '1',ACCT_BALANCE='$inbal',Level='Novice' WHERE Username = '$user_check'";
mysql_select_db('cashknowledge');
$retval = mysql_query( $sql, $conn);
Break;
}
switch($Level_session)
{
case"Novice":
$inbal=$Acct_session+70;
$inmode=$Mode_session+1;
$sql = "UPDATE members_profile SET Mode = '$inmode',ACCT_BALANCE='$inbal' WHERE Username = '$user_check'";
mysql_select_db('cashknowledge');
$retval = mysql_query( $sql, $conn);
Break;
}
header("location: cashroom.php");
mysql_close($conn);

}





?>
<html>
<head>
<script type="text/javascript">
alert("See Result")
</script>
</head>
<style>
body{
background:silver;
}
.button{
color:black;
border-radius:3px;
background:grey;
padding:5px;
margin-top:40px;
border:none;
width:150px;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:16px
}

</style>


<body>
<form method = "POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"">
<br><br><br><br><br><br>
<center>
<table cell padding="5" cell spacing="0" border="0">
<tr>
<th bgcolor="seashell"><font face="arial" size="5pt" color="black">RESULTS</th><br>
</tr>
<td align="left" width="400px" height="200px" align="left" valign="top" bgcolor="seashell"><br>



<center><font face="arial" size="4pt" color="black">Congratulation!!!<br><br>You Answered All Questions Correctly.<br><br>
<input type="Submit" name="addd" value="Collect Reward">
</td>
</table>

</form>

</body>
</html>
