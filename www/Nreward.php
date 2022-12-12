<?php
include ('lock.php');
?>

<?php
$NameEr="";
if(isset($_POST['Submit'])) {
$dbhost = 'localhost';
$dbuser = 'badmusmalik';
$dbpass = 'tusukiyomi';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}
echo "<center>RESULT</center>";
$Answer=($_POST['a']);
$Answer1=($_POST['b']);
$Answer2=($_POST['c']);
$Answer3=($_POST['d']);
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
if((($_POST['a'])==$A1_session) AND(($_POST['b'])==$A2_session)AND(($_POST['c'])==$A3_session)AND(($_POST['d'])==$A4_session)){
$NameEr="four";
}
}
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
a{text-decoration: none;}

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



<center><font face="arial" size="4pt" color="black">Sorry!!!<br><br>You Failed This Session.<br><br>
<a href="cashroom.php" input class="button" type ="submit" name="button">Back to cashroom</a>
</td>


</table>
</form>

</body>
</html>
