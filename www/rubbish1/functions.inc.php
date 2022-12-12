<?php

function show_userbox()
{
$u=$_SESSION['username'];
$uid=$_SESSION['loginid'];
echo"<div id='userbox'
	welcome $u
<ul>
<li><a href='./logout.php'>logout</a></li>
</ul>
</div>";
}
?>