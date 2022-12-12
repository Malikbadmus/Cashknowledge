<?php

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
		$insert = $con->query ("UPDATE  stories SET Image1='$imgcontent' WHERE ");

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