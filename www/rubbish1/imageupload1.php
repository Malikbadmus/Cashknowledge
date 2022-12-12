<?php
include('configuration.php');
		session_start();

		$user_check=$_SESSION['login_user'];
		$ses_sql=mysql_query("SELECT Username FROM registration WHERE username='$user_check'");
		$row=mysql_fetch_array($ses_sql);

		$user=$row['Username'];

		if(!isset($user))
		{
		header("location:Home.php");
		}
include('pimp.php');
if(isset($_POST["store"])){

	$check=getimagesize($_FILES["image"] ["tmp_name"]);

	if($check !== false){
		$image = $_FILES["image"]["tmp_name"];



		$imgcontent = addslashes(file_get_contents($image));


		$dbhost = 'localhost';
		$dbuser = 'control';
		$dbpass = 'tusukiyomi';
		$database = 'lazyreporter';
$con = new mysqli($dbhost, $dbuser, $dbpass, $database);

if($con->connect_error){

  die('could not connect' . $con->connect_error) ;
}


			$datatime = date("y-m-d H:i:S");
		$insert = $con->query ("INSERT into images (user, image, created) VALUES ('$user', '$imgcontent', '$datatime')");

		if($insert){

			echo "file uploaded successfully.";
			include("user.php");
			 }
			else{

				echo "please select an image file to upload";

			}
		}
	

}



?>