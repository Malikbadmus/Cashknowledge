
<html>
<head>
<title>CASHKNOWLEDGE</title>
</head>
<style>
body{
background:black;
}
.container{
width:40%;
height:400px;
background:white;
position:relative;
left:370px;
box-shadow:0 0 1px 2px forestgreen;

}

.header{
width:20%;
height:30px;
background:white;
position:relative;
left:500px;
box-shadow:0 0 1px 2px forestgreen;
}

}
.footer{
width:100%;
height:80px;
background:grey;
position:center;
}
.login{
color:white;
border-radius:3px;
background:forestgreen;
padding:5px;
margin-top:40px;
border:none;
width:100px;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:16px
}
.input{
border:none;
padding:5px;
margin-top:10px;
border:none;
width:180px;
height:20px;
box-shadow:0 0 1px 2px forestgreen;
margin-bottom:20px
}

h4{
color:black;
background:lightgreen;
position:relative;
top:20px;
}
.capbox {
	background-color: #92D433;
	border: #B3E272 0px solid;
	border-width: 0px 12px 0px 0px;
	display: inline-block;
	*display: inline; zoom: 1; /* FOR IE7-8 */
	padding: 8px 40px 8px 8px;
	position:relative;
	left:180px;
	}

.capbox-inner {
	font: bold 11px arial, sans-serif;
	color: #000000;
	background-color: #DBF3BA;
	margin: 5px auto 0px auto;
	padding: 3px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	}

#CaptchaDiv {
	font: bold 17px verdana, arial, sans-serif;
	font-style: italic;
	color: #000000;
	background-color: #FFFFFF;
	padding: 4px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	}

#CaptchaInput { margin: 1px 0px 1px 0px; width: 135px; }

</style>


<body>
<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=addslashes($_POST['Username']);
$Password=addslashes($_POST['Password']);

$sql="SELECT ID FROM members_profile WHERE username='$username' and Password='$Password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);
if($count==1)
{

$_SESSION['login_user']=$username;
header("location: welcome.php");
}
else
{
echo "<b>Your login name or password is invalid</b>";
}
}
?> 

<br><br><br><br>
<div class="header">
<p><h1 align="center"><font face="arial" size="4pt" color="forestgreen">Authentication</font></h1></p>
</div>
<div class="container">
<form method = "POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>""  onsubmit="return checkform(this);">
	<br>
<p align="center"><font face="arial" size="5pt" color="forestgreen">Username:</font>
<input class="input" type="text" size="35" name="Username"></p>

<p align="center"><font face="arial" size="5pt" color="forestgreen">Password:</font>
<input  class="input" type="password" size="35"name="Password"><br><br>
<!-- START CAPTCHA -->
<div class="capbox">

<div id="CaptchaDiv"></div>

<div class="capbox-inner">

Type the above number:<br>

<input type="hidden" id="txtCaptcha">
<input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

</div>
</div>
<br>
<!-- END CAPTCHA -->

<p align="center"><input class="login" type="submit" name="submit" value="Login"></p>

</form>
<script type="text/javascript">

// Captcha Script

function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>

<p align="center"><font face="arial" size="3pt" color="black">You dont have an account?</font><a href="./Register.php"><font face="arial" size="3pt" color="black">Register</font></a><p><br><br><br><br><br><br><br><br>
</div>
</div>
</div>
</body>
</html>
