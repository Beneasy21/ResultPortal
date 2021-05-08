<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Correct Wrong Result</title>
</head>

<body>
<?php
$Id=$_GET['id'];

	$Subjects=$_POST['sub'];
	
		
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","comschoolmand");
	
	// Specify the query to Update Record
	$sql = "UPDATE results 	
	SET subjects = '".$Subjects."'	WHERE resId = '".$Id."'";
	// execute query
	if (mysqli_query ($con,$sql))
		 {echo '<script type="text/javascript">alert("Corrections Effected Succesfully");window.location=\'viewNL.php\';</script>';}
		 else
		 {echo "Error Updating Record" . mysqli_Error($con);}
		 
	// Close The Connection
	mysqli_close ($con);
	

?>
</body>
</html>
