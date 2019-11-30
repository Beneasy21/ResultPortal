<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Student</title>
</head>

<body>
<?php
$Id=$_GET['id'];

	$AdmNo=$_POST['AdmNo'];
	$Name=$_POST['name'];
	$Session=$_POST['acadYr'];
	$Term=$_POST['term'];
	$Comment=$_POST['HouseParentComment'];
	
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","comschoolmand");
	
	// Specify the query to Update Record
	
	$sql = "UPDATE comments SET houseParent = '".$Comment."'  WHERE comments.studId='".$AdmNo."' AND comments.acadYr = '".$Session."' AND comments.term = '".$Term."'";
	echo $sql;
	// execute query
	if (mysqli_query ($con,$sql))
		 {echo '<script type="text/javascript">alert("Student Edited Succesfully");window.location=\'toAddComments.php\';</script>';}
		 else
		 {echo "Error Updating Record" . mysqli_Error($con);}
		 
	// Close The Connection
	mysqli_close ($con);
	

?>
</body>
</html>
