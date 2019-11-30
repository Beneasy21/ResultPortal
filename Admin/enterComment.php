<!DOCTYPE html >
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Student</title>
</head>

<body>
<?php
$Id=$_GET['id'];

	$AdmNo=$_POST['AdmNo'];
	$Session=$_POST['acadYr'];
	$Term=$_POST['Term'];
	$Comment=$_POST['HouseParentComment'];
	
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","comschoolmand");
	
	// Specify the query to Update Record
	
		$sql = "INSERT INTO comments (studId,acadYr,term,classTeacher)  
				values
				('".$AdmNo."','".$Session."','".$Term."','".$Comment."')";
		echo $sql;
	// execute query
	if (mysqli_query ($con,$sql))
		 {echo '<script type="text/javascript">alert("Class Teachers Comment entered Succesfully");window.location=\'toAddComments.php\';</script>';}
		 else
		 {echo "Error Inserting data" . mysqli_Error($con);}
		 
	// Close The Connection
	mysqli_close ($con);
	

?>
</body>
</html>
