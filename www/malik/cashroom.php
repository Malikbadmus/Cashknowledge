<html>
<head>
<title>CASHKNOWLEDGE</title>
</head>
  <style type="text/css" media="screen">
.container{
background:forestgreen;
width:80%;
height:140px;
position:relative;
left:130px;

	  
}


.side{
width:80%;
height:100px;
background:gainsboro;
}
a{text-decoration: none;}


</style>
<?php
include('lock.php');
?>
<body>
<br>

<h1 align="left"><font face="Vasteller" size="5pt" color="green">&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbspCASHKNOWLEDGE
&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp
<a href="welcome.php"><font face="arial" size="3pt" color="grey">Home</a></font>&nbsp &nbsp &nbsp<a href="cashroom.php"><font face="arial" size="3pt" color="grey">Cashroom</a>&nbsp &nbsp &nbsp<a href="Profile.php"><font face="arial" size="3pt" color="grey">Profile</a>&nbsp &nbsp &nbsp<a href="bank.php"><font face="arial" size="3pt" color="grey">Bank</font></a>&nbsp &nbsp &nbsp<a href="Help.php"><font face="arial" size="3pt" color="grey">Help</a>&nbsp &nbsp &nbsp<a href="customer.php"><font face="arial" size="3pt" color="grey">Customer Care</a><br></font></h1></font></font></font>

<div class="container">
<br>
<center><font face="arial" size="8pt" color="White"><?php echo $login_session;?></center></font>
<center><font face="arial" size="5pt" color="White">Acct Balance:E<?php echo $Acct_session;?></center><br><br></font>
</div>
<center>
<table cell padding="5" cell spacing="0" border="0">
<tr>
<th bgcolor="seashell"><font face="arial" size="5pt" color="black">Choose Subject</th><br>
<th bgcolor="whiteSmoke"><font face="arial" size="5pt" color="black">Choose Game</th>
</tr>
<td align="left" width="500px" height="200px" align="left" valign="top" bgcolor="seashell"><br><center><a href="currentaffairs.php"><font face="arial" size="4pt" color="black">|Current Affairs|</a>&nbsp &nbsp &nbsp<a href ="Entertainment.php"><font face="arial" size="4pt" color="black">|Entertainment|</a>&nbsp &nbsp &nbsp <a href="sports.php"><font face="arial" size="4pt" color="black">|Sports|</a>&nbsp &nbsp &nbsp <a href ="IQ test.php"><font face="arial" size="4pt" color="black">|IQ Test|</a></center><br><center><a href ="Mathematics.php"><font face="arial" size="4pt" color="black">|Mathematics|</a>&nbsp &nbsp &nbsp <a href ="Physics.php"><font face="arial" size="4pt" color="black">|Physics|</a></td>
<td width="500px" height="200px" bgcolor="whiteSmoke"><center>Coming Soon</center></td>

</table>

</body>

</html>
