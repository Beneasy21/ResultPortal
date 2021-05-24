<?php
	require_once 'db_data.php';

	function db_connect(){
		$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		confirm_db_connect();
		return $connection;
	}

	function db_disconnect($connection){
		if(isset($connection)){
			mysqli_close($connection);
		}
	}

	function confirm_db_connect(){
		if(mysqli_connect_errno()){
			$msg = "Database connection failed";
			$msg .= mysqli_connect_errno();
			$msg .= "(" .mysqli_connect_errno. ")";
			exit($msg);
		}
	}

	function confirm_result_set($result_set){
		if(!$result_set){
			exit("Database query failed");
		}
	}

	function check_empty_record($result_set){
		if(mysqli_num_rows($result_set) < 1){
			exit("No record to display");
		}
	}

	function db_escape($connection, $string) {
		return mysqli_real_escape_string($connection, $string);
	  }

?>