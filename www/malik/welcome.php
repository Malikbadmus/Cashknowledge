<html>
<head>
<title>CASHKNOWLEDGE</title>
</head>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 
   <style type="text/css" media="screen">
.container{
background:forestgreen;
width:80%;
height:140px;
position:relative;
left:130px;

	  
}


.side{
width:100%;
height:100px;
background:gainsboro;
}
a{text-decoration: none;}


</style>
<?php
include('lock.php');
?>
<body>
<h1 align="right"><font face="Arial" size="3pt" color="green"><a href="log.php">Logout&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp</a></font></h1>

<h2 align="left"><font face="Casteller" size="6pt" color="green">&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp CASHKNOWLEDGE&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp
<a href="welcome.php"><font face="arial" size="3pt" color="grey">Home</a></font>&nbsp &nbsp &nbsp<a href="cashroom.php"><font face="arial" size="3pt" color="grey">Cashroom</a>&nbsp &nbsp &nbsp<a href="Profile.php"><font face="arial" size="3pt" color="grey">Profile</a>&nbsp &nbsp &nbsp<a href="bank.php"><font face="arial" size="3pt" color="grey">Bank</font></a>&nbsp &nbsp &nbsp<a href="cashroom.php"><font face="arial" size="3pt" color="grey">Help</a>&nbsp &nbsp &nbsp<a href="customer.php"><font face="arial" size="3pt" color="grey">Customer Care</a>&nbsp &nbsp &nbsp<br></h2>
<div class="container"><br><br>
<h2 align="center"><font face="arial" size="5pt" color="white">Welcome &nbsp <?php echo $login_session;?></h2>
</div>

<table cell padding="0" cell spacing="2" border="0">
<tr>
<td width="1700px" height="340px" bgcolor="whitesmoke"><center><dl>
<font face="arial" size="3pt" color="black">
<dt>&nbsp &nbsp <b>Getting Started:</b></dt><dd><p>&nbsp &nbsp &nbspWelcome <?php echo $login_session;?> to cashknowledge, Where your intelligency earns you money, the more brilliant you are the more money you earn. To get started enter into our cashroom choose your favorite subjects and start the quiz.<p></dd>
<dt>&nbsp &nbsp<b>The Quiz:</b></dt><dd><p>&nbsp &nbsp &nbspAfter you've chosen your subjects in the cashrooom and started the quiz you will be presented with Ten(10) questions(Depending on your subjects), you will be given the full reward of the level you are in if you manage to answer the whole questions correctly, or partial reward if you manage to answer 80% questions correctly.Rewards are in ECO<p></dd> 
<dt>&nbsp &nbsp<b>The ECO:</b></dt><dd><p>&nbsp &nbsp &nbspThe Eco is the currency that is use in cashknowledge(see more about the ECO in the Bank). 
</font>
</dl></center></td>

</table>
<div class="side">
<footer><font face="arial" size="3pt" color="black">&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&copy Copyright <a href"">Badmus Malik.</a> All Rights Reserved.</footer>
</div>
</div>
</body>

</html>
