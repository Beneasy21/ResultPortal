<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$ResId=$_GET['resId'];

	
	
	// Establish Connection with MYSQL
	$con = mysqli_connect("localhost","root","","comschoolmand");
				if ($con->connect_error)
					{
						die("Could not connect to database: ".$con->connect_error);
					}
	
	// Specify the query to Delete Record
	$sql = "DELETE FROM results WHERE resId = '".$ResId."'";
	// execute query
	if (mysqli_query($con, $sql))
		 {
		echo '<script type="text/javascript">alert("Result Deleted Succesfully");window.location=\'viewResult.php\';</script>';
		}
		 else
		 {
			 echo "Error Deleting Record" . mysqli_Error($con);
			 
		}
		 
	// Close The Connection
	mysqli_close ($con);
	

?>
</body>
</html>
