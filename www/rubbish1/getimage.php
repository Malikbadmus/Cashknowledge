<?php
	

		if(!empty($_GET['ID'])) {

			$dbhost = 'localhost';
		$dbuser = 'control';
		$dbpass = 'tusukiyomi';
		$database = 'lazyreporter';

		$con = new mysqli($dbhost, $dbuser, $dbpass, $database);

if($con->connect_error){

  die('could not connect' . $con->connect_error) ;

}

		$result = $con->query ("SELECT image FROM images WHERE ID= {$_GET['ID']}");

		if($result->num_rows > 0){

			$imgData=$result->fetch_assoc();


			header("content-type: image/jpg");
			echo $imgData['image'];

		}
		else{
			echo "stupid malik";
		}
	}
		?>