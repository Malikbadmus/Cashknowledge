<?php
if(isset($_POST["store"])){

	$check=getimagesize($_FILES["imag"] ["tmp_name"]);

	if($check !== false){
		$image = $_FILES["imag"]["tmp_name"];



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
		$insert = $con->query ("INSERT into images (image, created) VALUES ('$imgcontent', '$datatime')");

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