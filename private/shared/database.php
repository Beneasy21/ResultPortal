<?php
	require_once 'db_data.php';

	function db_connect(){
		$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		return $connection;
	}

	function db_discoonnect($connection){
		if(isset($connection)){
			mysqli_close($connection);
		}
	}


?>