<html>
<head>
<title>CASHKNOWLEDGE</title>
</head>
<style type="text/css" media="screen">


.container{
background:forestgreen;
bottom: 640px;
width:100%;
height:80px;
position:absolute;
left:0px;

	  
}

.Box{
background:forestgreen;
width: 500px;
height: 300px;
position:relative;
left: 400px;
border-radius:10px;
padding:5px;	
box-shadow:0 0 1px 2px forestgreen;
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
<body bgcolor="whitesmoke">
<div class="container">
<br><br>
<a href="welcome.php"><font size="4"><font face ="arial" color="white" size="3pt"><< Back to page</font></a></font> &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
<font face="arial" color="white" size="4pt"> <?php echo $login_session;?>

</div>
<br><br><br><br><br><br>
<div class="box">
<font color="white" size="5pt">
<p align="center"><b>Name:</b><?php echo $Fname_session;?>&nbsp<?php echo $Lname_session;?>&nbsp&nbsp&nbsp&nbsp<br>
<b>Email:</b><?php echo $Email_session;?><br><br>
<b>Sex:</b><?php echo $Sex_session;?>&nbsp&nbsp&nbsp&nbsp<br>
<b>Level:</b><?php echo $Level_session;?>&nbsp&nbsp&nbsp&nbsp<br>
<b>Mode:</b><?php echo $Mode_session;?><br>
<b>Time Registered:</b><?php echo $joindate_session;?></p>
</div>

</body>

</html>
