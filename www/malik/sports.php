<?php
include('lock.php');
if ($Acct_session<40){
document.write(INSUFICIENT FUND);
</script>
	header("location:cashroom.php");
}
?>

<html>

<head>
<script type="text/javascript">
confirm("Current Level:<?php echo $Level_session;?>, Current Mode:<?php echo $Mode_session;?>,  Entry Fee:E40")
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
	
}else if($Mode_session=="2" AND $Level_session=="Beginner"){
	
	$t=$bf_session;	
	$A1=$D56_session; $B1=$A56_session; $C1=$B56_session; $D1=$C51_session;
	$t1=$bg_session;
	$A2=$D57_session; $B2=$A57_session; $C2=$B57_session; $D2=$C57_session;
	$t2=$bh_session;
	$A3=$A58_session; $B3=$B58_session; $C3=$C58_session; $D3=$D58_session;
	$t3=$bi_session;
	$A4=$B59_session; $B4=$A59_session; $C4=$D59_session; $D4=$C59_session;	
	$t4=$bj_session;
	$A5=$A60_session; $B5=$B60_session; $C5=$C60_session; $D5=$D60_session;	

}elseif ($Mode_session=="3" AND $Level_session=="Beginner"){

  	$t=$bk_session;	
	$A1=$D61_session; $B1=$A61_session; $C1=$B61_session; $D1=$C61_session;
	$t1=$bl_session;
	$A2=$B62_session; $B2=$D62_session; $C2=$A62_session; $D2=$C62_session;
	$t2=$bm_session;
	$A3=$A63_session; $B3=$B63_session; $C3=$D63_session; $D3=$C63_session;
	$t3=$bn_session;
	$A4=$A64_session; $B4=$B64_session; $C4=$D64_session; $D4=$C64_session;	
	$t4=$bo_session;
	$A5=$A65_session; $B5=$B65_session; $C5=$C65_session; $D5=$D65_session;	
	
}elseif ($Mode_session=="4" AND $Level_session=="Beginner"){

  	$t=$bp_session;	
	$A1=$D66_session; $B1=$C66_session; $C1=$B66_session; $D1=$A66_session;
	$t1=$bq_session;
	$A2=$D67_session; $B2=$C67_session; $C2=$A67_session; $D2=$B67_session;
	$t2=$br_session;
	$A3=$A68_session; $B3=$B68_session; $C3=$D68_session; $D3=$C68_session;
	$t3=$bs_session;
	$A4=$A69_session; $B4=$B69_session; $C4=$D69_session; $D4=$C69_session;	
	$t4=$bt_session;
	$A5=$A70_session; $B5=$B70_session; $C5=$C70_session; $D5=$D70_session;	
	
}elseif ($Mode_session=="5" AND $Level_session=="Beginner"){

  	$t=$bu_session;	
	$A1=$A71_session; $B1=$C71_session; $C1=$B71_session; $D1=$D71_session;
	$t1=$bv_session;
	$A2=$D72_session; $B2=$A72_session; $C2=$C72_session; $D2=$B72_session;
	$t2=$bw_session;
	$A3=$B73_session; $B3=$A73_session; $C3=$D73_session; $D3=$C73_session;
	$t3=$bx_session;
	$A4=$B74_session; $B4=$A74_session; $C4=$D74_session; $D4=$C74_session;	
	$t4=$by_session;
	$A5=$A75_session; $B5=$B75_session; $C5=$C75_session; $D5=$D75_session;	
	
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

