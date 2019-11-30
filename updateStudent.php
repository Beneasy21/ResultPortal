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
	$Sex=$_POST['sex'];
	$Class=$_POST['class'];
	$Arm=$_POST['arm'];
	$House=$_POST['house'];
	
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","comschoolmand");
	
	// Specify the query to Update Record
	$sql = "UPDATE students 	
	SET studId ='".$AdmNo."' , studName = '".$Name."', sex = '".$Sex."', currentClass = '".$Class."',arm ='".$Arm."',house ='".$House."'	
	WHERE id = '".$Id."'";
	// execute query
	if (mysqli_query ($con,$sql))
		 {echo '<script type="text/javascript">alert("Student Edited Succesfully");window.location=\'viewStudent.php\';</script>';}
		 else
		 {echo "Error Updating Record" . mysqli_Error($con);}
		 
	// Close The Connection
	mysqli_close ($con);
	

?>
</body>
</html>
