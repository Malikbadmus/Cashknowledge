<?php
$NameErr="";
$LnameErr="";
$UsernameErr="";
$nationalityErr="";
$MobileErr="";
$EmailErr="";
$SexErr="";
$AgeErr="";
$PassErr="";
$CpassErr="";
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

$Username = $_POST['Username'];
$nationality = $_POST['nationality'];
$Mobilenumber = $_POST['Mobilenumber'];
$Email = $_POST['Email'];
$Sex = $_POST['Sex'];
$Age = $_POST['Age'];
$Password = $_POST['Password'];
$Confirmpassword = $_POST['Confirmpassword'];
if($_SERVER["REQUEST_METHOD"]=="POST"){

if(empty($_POST['Fname'])){
$NameErr=" *First name is required";
} else if(!preg_match("/^[a-zA-Z]*$/",$Fname)){
$NameErr="Only letters and white space allowed";
}
else if(empty($_POST['Lname'])) {
$LnameErr="Last name requuired";
} else if(!preg_match("/^[a-zA-Z]*$/",$Lname)){
$LnameErr="Only letters and white space allowed";
}
else if(empty($_POST['Username'])) {
$UsernameErr="USERNAME IS REQUIRED";
} else if(!preg_match("/^[a-zA-Z]*$/",$Username)){
$UsernameErr="Only letters and white space allowed";
}
else if (empty($_POST['nationality'])) {
$nationalityErr="NO country was selected";
}
else if(empty($_POST['Mobilenumber'])) {
$MobileErr="Please input your phone number";
} else if(preg_match("/^[a-zA-Z]*$/",$Mobilenumber)){
$MobileErr="Please input a valid Number";
}
else if(empty($_POST['Email'])) {
$EmailErr="Please input your email";
} 
else if (empty($_POST['Sex'])) {
$SexErr="choose your gender";
}
else if (empty($_POST['Age'])) {
$AgeErr="select your age";
}
else if(empty($_POST['Password'])) {
$PassErr="Password is required";
} 
else if(empty($_POST['Confirmpassword'])) {
$CpassErr="FIELD IS EMPTY";
} 
else if(($_POST['Confirmpassword'])!=($_POST['Password'])){
$CpassErr="Password do not match";
} 

else {
$sql = "INSERT INTO members_profile ". "(Fname,Lname,Username,Country,Mobilenumber,Email,Sex,Age,Password,Confirmpassword,Joindate,ACCT_BALANCE,Level,Mode) ". "VALUES('$Fname','$Lname','$Username','$nationality','$Mobilenumber','$Email','$Sex','$Age','$Password','$Confirmpassword', NOW(),100,'Beginner',1)";

mysql_select_db('cashknowledge');
if(mysql_query($sql, $conn)) {
  echo "Registration Successfull\n";
include("Register.php");
}
else{
die('Could not connect: ' . mysql_error());
mysql_close($conn);
}
}
}
}
?>
<html>
<head>
<title>CASHKNOWLEDGE</title>

</head>
<style>
body{
background:white;
}

input{
	outline: none;

}
.container{
width:90%;
height:600px;
background:white;
position:relative;
left:95px;
box-shadow:0 0 1px 2px forestgreen;
}

.container2{
width:90%;
height:500px;
background:white;
position:relative;
left:45px;
box-shadow:0 0 2px 4px forestgreen;
}
.header{
width:100%;
height:50px;
background:forestgreen;
position:center;
box-shadow:0 0 3px 6px white;
}

.error{
color:red
}
.submit{
color:white;
border-radius:3px;
background:forestgreen;
padding:5px;
margin-top:40px;
border:none;
width:250px;
height:30px;
font-size:16px
}

.Login{
color:#fff;
padding:5px;
margin-top:40px;
border:none;
width:20px;
height:10px;
font-size:11px
}
.input {
border:none;
padding:5px;
margin-top:10px;
border:none;
border-bottom: 1px solid forestgreen;
text-align: center;
width:250px;
height:30px;
margin-bottom:20px
}

::placeholder {
	color: grey;
	font-size: 1.5em;
}

.nationality{
border:none;
padding:5px;
margin-top:10px;
border:none;
width:200px;
height:34px;
box-shadow:0 0 1px 2px forestgreen;
margin-bottom:20px
}
.iinput{
border:none;
padding:5px;
margin-top:10px;
border:none;
width:100px;
height:34px;
box-shadow:0 0 1px 2px forestgreen;
margin-bottom:20px
}


footer{
width:100%;
height:80px;
background:white;
margin-top:9px;
}

h3{
color:black;
background:white;
position:relative;
top:20px;
}

</style>
<body>

<br>

<div class="container">
<div class="header">

<div class="nav">

<form method="POST" action="<?php echo htmlspecialchars('loggin.php');?>">	
<h1 align="left"><font face="casteller" size="4pt" color="white">  <br> &nbsp&nbsp &nbsp CASHKNOWLEDGE &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp </font>  


<font face ="arial" size="2pt" color="white" > Username: <input type="text" size="15" name="Username">

<font face="arial" size="2pt" color="White" name="Password"> Password: <input type="Password" size="15" name="Password">

 <input type="submit" name="Login" size="10pt" value ="Login"></h1>
</form>
</div>

<h2 align="left"><font face="arial" size="3pt" color="white">&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp If you dont have an account please register</font></h2>

<div class="container2">

<form method="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	<br>
	<font face ="arial" size="5pt" color="grey" > &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp Create account </font><br><br>
 &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp

<input class="input" type="text" size="55" name="Fname" id="Fname" placeholder="Firstname">
<span class ="error">
<?php
echo $NameErr;
?>
</span>
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp
<input class="input" type="text" size="35" name="Lname" placeholder="Lastname">
<span class ="error">
<?php
echo $LnameErr;
?>
</span>

&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp 	
<input class="input" type="text" size="35" name="Username" id="username" placeholder="Username"><br><br><br> &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp
<span class ="error"> 
<?php
echo $UsernameErr;
?>
</span>

&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp 
<input class="input" type="tel" size="25" name="Mobilenumber" id="Mobilenumber" placeholder="Mobilenumber">
<span class ="error">
<?php
echo $MobileErr;
?>
</span>

&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
<input class="input" type="Email" size="35"  name="Email" id="Email" placeholder="Email"><br><br><br>
<span class ="error">
<?php
echo $EmailErr;
?>
</span>
&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
<select class="nationality" name="nationality" id="nationality" >
  <option value="" >-- Choose Country --</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerian">Nigerian</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>
<span class ="error"> 
<?php
echo $nationalityErr;
?>
</span>

<font face="arial" size="3pt" color="forestgreen"> &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp Sex:</font>
<select class="iinput" name="Sex" id="Sex">
<option selected value="Male">Male
<option value="Female">Female
</p>
</select>
<span class ="error"> 
<?php
echo $SexErr;
?>
</span>

<font face="arial" size="3pt" color="forestgreen"> &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp Age:</font>
<select class="iinput" name="Age" id="Age">
<option selected value="14">14
<option value="15">15 <option value="16">16
<option value="17">17 <option value="18">18
<option value="19">19 <option value="20">20
<option value="21">21 <option value="22">22
<option value="23">23 <option value="24">24 
<option value="25">25 <option value="26">26
<option value="27">27 <option value="28">28
<option value="29">29 <option value="30">30 
<option value="31">31 <option value="32">32
<option value="33">33 <option value="34">34
<option value="35">35 <option value="36">36 
<option value="37">37 <option value="38">38
<option value="39">39 <option value="40">40
<option value="41">41 <option value="42">42
<option value="43">43 <option value="44">44
<option value="45">45 <option value="46">46
<option value="47">47 <option value="48">48
<option value="49">49 <option value="50">50
</p>
</select><br><br><br>
<span class ="error"> 
<?php
echo $AgeErr;
?>
</span>

&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
<input class="input" type="password" size="25" name="Password" placeholder="Password">
<span class ="error">
<?php
echo $PassErr;
?>

&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp 

<input class="input" type="password" size="25" name="Confirmpassword" placeholder="Confirmpassword">
<span class ="error">
<?php
echo $CpassErr;
?><br>
&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp 
<input class="submit" type="submit" value="Register" name= "add" id="add"></p><br><br>

</form>
<footer><center><h3> &copy Copyright <a href"">Badmus Malik.</a> All Rights Reserved.</h3> </center></footer>
</div>
</div>
</div>
</body>
</html>
