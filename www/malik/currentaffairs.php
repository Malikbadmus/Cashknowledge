<?php
include('lock.php');
if ($Acct_session<40){
	header("location:cashroom.php");
}

?>

<html>

<head>
<script type="text/javascript">
confirm("Current Level:<?php echo $Level_session;?>, Current Mode:<?php echo $Mode_session;?>,  Entry Fee:<?php echo $entry_session;?>")
</script>

<?php
$t="";
$A5=""; $B5=""; $C5=""; $D5="";
$t1="";
$A1=""; $B1=""; $C1=""; $D1="";
$t2="";
$A2=""; $B2=""; $C2=""; $D2="";
$t3="";
$A3=""; $B3=""; $C3=""; $D3="";
$t4="";
$A4=""; $B4=""; $C4=""; $D4="";


if($Mode_session=="1" AND $Level_session=="Beginner"){
	$t=$q_session;	
	$A1=$D1_session; $B1=$B1_session; $C1=$A1_session; $D1=$C1_session;
	$t1=$qa_session;
	$A2=$B2_session; $B2=$A2_session; $C2=$C2_session; $D2=$D2_session;
	$t2=$qb_session;
	$A3=$A3_session; $B3=$B3_session; $C3=$C3_session; $D3=$D3_session;
	$t3=$qc_session;
	$A4=$A4_session; $B4=$B4_session; $C4=$C4_session; $D4=$D4_session;	
	$t4=$qd_session;
	$A5=$A5_session; $B5=$B5_session; $C5=$C5_session; $D5=$D5_session;	
}else if($Mode_session=="2" AND $Level_session=="Beginner"){
	$t=$qe_session;
	$A1=$A6_session; $B1=$B6_session; $C1=$C6_session; $D1=$A6_session;		
	$t1=$qf_session;
	$A2=$A7_session; $B2=$B7_session; $C2=$C7_session; $D2=$D7_session;	
	$t2=$qg_session;
	$A3=$A8_session; $B3=$B8_session; $C3=$C8_session; $D3=$D8_session;	
	$t3=$qh_session;
	$A4=$A9_session; $B4=$B9_session; $C4=$C9_session; $D4=$D9_session;	
	$t4=$qi_session;
	$A5=$A10_session; $B5=$B10_session; $C5=$C10_session; $D5=$D10_session;	
}else if($Mode_session=="3" AND $Level_session=="Beginner"){
	$t=$qj_session;
	$A1=$A11_session; $B1=$B11_session; $C1=$C11_session; $D1=$D11_session;		
	$t1=$qk_session;
	$A2=$C12_session; $B2=$B12_session; $C2=$A12_session; $D2=$D12_session;	
	$t2=$ql_session;
	$A3=$A13_session; $B3=$B13_session; $C3=$C13_session; $D3=$D13_session;
	$t3=$qm_session;
	$A4=$A14_session; $B4=$B14_session; $C4=$C14_session; $D4=$D14_session;
	$t4=$qn_session;
	$A5=$C15_session; $B5=$B15_session; $C5=$A15_session; $D5=$D15_session;	
}else if($Mode_session=="4" AND $Level_session=="Beginner"){
	$t=$qo_session;
	$A1=$A16_session; $B1=$B16_session; $C1=$C16_session; $D1=$D16_session;	
	$t1=$qp_session;
	$A2=$A17_session; $B2=$B17_session; $C2=$C17_session; $D2=$D17_session;		
	$t2=$qq_session;
	$A3=$A18_session; $B3=$B18_session; $C3=$C18_session; $D3=$D18_session;	
	$t3=$qr_session;
	$A4=$A19_session; $B4=$B19_session; $C4=$C19_session; $D4=$D19_session;
	$t4=$qt_session;
	$A5=$A20_session; $B5=$B20_session; $C5=$D20_session; $D5=$C20_session;	
}else if($Mode_session=="5" AND $Level_session=="Beginner"){
	$t=$qu_session;
	$A1=$B21_session; $B1=$C21_session; $C1=$A21_session; $D1=$D21_session;	
	$t1=$qv_session;
	$A2=$A22_session; $B2=$B22_session; $C2=$C22_session; $D2=$D22_session;		
	$t2=$qx_session;
	$A3=$A23_session; $B3=$B23_session; $C3=$C23_session; $D3=$D23_session;	
	$t3=$qy_session;
	$A4=$A24_session; $B4=$B24_session; $C4=$C24_session; $D4=$D24_session;
	$t4=$qz_session;
	$A5=$C25_session; $B5=$B25_session; $C5=$A25_session; $D5=$D25_session;	
}else if($Mode_session=="1" AND $Level_session=="Novice"){
	$t=$a_session;	
	$A1=$B26_session; $B1=$A26_session; $C1=$C26_session; $D1=$D26_session;
	$t1=$aa_session;
	$A2=$A27_session; $B2=$B27_session; $C2=$C27_session; $D2=$D27_session;
	$t2=$ab_session;
	$A3=$A28_session; $B3=$B28_session; $C3=$C28_session; $D3=$D28_session;
	$t3=$ac_session;
	$A4=$A29_session; $B4=$B29_session; $C4=$C29_session; $D4=$D29_session;	
	$t4=$ad_session;
	$A5=$A30_session; $B5=$B30_session; $C5=$D30_session; $D5=$C30_session;
}else if($Mode_session=="2" AND $Level_session=="Novice"){
	$t=$ae_session;	
	$A1=$A31_session; $B1=$B31_session; $C1=$C31_session; $D1=$D31_session;
	$t1=$af_session;
	$A2=$D32_session; $B2=$A32_session; $C2=$A32_session; $D2=$C32_session;
	$t2=$ag_session;
	$A3=$A33_session; $B3=$B33_session; $C3=$C33_session; $D3=$D33_session;
	$t3=$ah_session;
	$A4=$A34_session; $B4=$B34_session; $C4=$C34_session; $D4=$D34_session;	
	$t4=$ai_session;
	$A5=$C35_session; $B5=$D35_session; $C5=$A35_session; $D5=$B35_session;
}



	
?>
</head>
<style>
body{
background:silver;
}
.container{
width:60%;
height:900px;
background:whitesmoke;
position:relative;
left:290px;
}
.Submit{
color:black;
border-radius:3px;
background:smokewhite;
padding:5px;
margin-top:40px;
border:none;
width:100px;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:16px
}
.error{
color:red
}

</style>
<script language="javascript" type="text/javascript">
var myTime="25";
function countDown(){
	document.form.seconds.value=myTime;
	if (myTime==0)
	{
		location.href="cashroom.php";
	}
	else if (myTime > 0)
	{
		myTime--;
		setTimeout("countDown()", 1000);
	}
}
</script>
<body onload="countDown();">
<form class="container" method="POST" action="<?php echo htmlspecialchars('process.php');?>" name="form"><br><br>
<center><font face="Arial" size="6pt"> Time Left:<output type="text" name="seconds" size="2" value="myTime"></font></center>
<h1><center>QUIZ</center></h1>
<ol type="1">
<font face="arial" size="4pt">
<li><?php echo $t;?><br>
<input type="radio" name="a" value="<?php echo $A1;?>"> <?php echo $A1;?>&nbsp &nbsp &nbsp
<input type="radio" name="a" value="<?php echo $B1;?>"> <?php echo $B1;?>&nbsp &nbsp &nbsp
<input type="radio" name="a" value="<?php echo $C1;?>"> <?php echo $C1;?>&nbsp &nbsp &nbsp
<input type="radio" name="a" value="<?php echo $D1;?>"> <?php echo $D1;?><br><br>
<li><?php echo $t1;?><br>
<input type="radio" name="b" value="<?php echo $A2;?>"> <?php echo $A2;?>&nbsp &nbsp &nbsp
<input type="radio" name="b" value="<?php echo $B2;?>"> <?php echo $B2;?>&nbsp &nbsp &nbsp
<input type="radio" name="b" value="<?php echo $C2;?>"> <?php echo $C2;?>&nbsp &nbsp &nbsp
<input type="radio" name="b" value="<?php echo $D2;?>"> <?php echo $D2;?>&nbsp &nbsp &nbsp<br><br>
<li><?php echo $t2;?><br>
<input type="radio" name="c" value="<?php echo $B3;?>"> <?php echo $B3;?>&nbsp &nbsp &nbsp
<input type="radio" name="c" value="<?php echo $A3;?>"> <?php echo $A3;?>&nbsp &nbsp &nbsp
<input type="radio" name="c" value="<?php echo $C3;?>"> <?php echo $C3;?>&nbsp &nbsp &nbsp
<input type="radio" name="c" value="<?php echo $D3;?>"> <?php echo $D3;?>&nbsp &nbsp &nbsp<br><br>
<li><?php echo $t3;?><br>
<input type="radio" name="d" value="<?php echo $C4;?>"> <?php echo $C4;?>&nbsp &nbsp &nbsp
<input type="radio" name="d" value="<?php echo $B4;?>"> <?php echo $B4;?>&nbsp 
<input type="radio" name="d" value="<?php echo $A4;?>"> <?php echo $A4;?>&nbsp
<input type="radio" name="d" value="<?php echo $D4;?>"> <?php echo $D4;?>&nbsp &nbsp <br><br>
<li><?php echo $t4;?><br>
<input type="radio" name="e" value="<?php echo $D5;?>"> <?php echo $D5;?>&nbsp &nbsp 
<input type="radio" name="e" value="<?php echo $C5;?>"> <?php echo $C5;?>&nbsp 
<input type="radio" name="e" value="<?php echo $A5;?>"> <?php echo $A5;?>&nbsp
<input type="radio" name="e" value="<?php echo $B5;?>"> <?php echo $B5;?>&nbsp &nbsp <br><br>
</ol>
<center><input class="Submit" type="Submit" name="Submit" value="Submit"></center>

</form>
</body>

</html>

