<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Correct Wrong Result</title>
</head>

<body>
<?php
$Id=$_GET['id'];

	$CA1=$_POST['ca1'];
	$CA2=$_POST['ca2'];
	$Exams=$_POST['exams'];
	$Total=$_POST['total'];
		
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","comschoolmand");
	
	// Specify the query to Update Record
	$sql = "UPDATE results 	
	SET ca1 ='".$CA1."' , ca2 = '".$CA2."', exam = '".$Exams."', examTotal = '".$Total."'	WHERE resId = '".$Id."'";
	// execute query
	if (mysqli_query ($con,$sql))
		 {echo '<script type="text/javascript">alert("Corrections Effected Succesfully");window.location=\'viewResAbove.php\';</script>';}
		 else
		 {echo "Error Updating Record" . mysqli_Error($con);}
		 
	// Close The Connection
	mysqli_close ($con);
	

?>
</body>
</html>
