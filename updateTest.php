<?php

	$resIdArray = array();
	$resIdArray = $_POST["resId"];
	// Establish Connection with Database
	$con = mysqli_connect("localhost","root");
	// Select Database
	mysqli_select_db($con,"comschoolmand");

	$CurrentClass=$_POST['CurrentClass'];
	$Subject=$_POST['Subject'];
	$HIC=$_POST['HIC'];
	$LIC=$_POST['LIC'];
	$AIC=$_POST['AIC'];
	$Combination=$_POST['Combin'];
	$academicYear=$_POST['academicYear'];
	$Arm=$_POST['Arm'];
	$Term=$_POST['Term'];
								
	for($i=0;$i<count($resIdArray); $i++)
	{
		$resId = $resIdArray[$i];
		$ca1 =  $_POST["ca1$resId"] ;
		$ca2 =  $_POST["ca2$resId"] ;
		$exam = $_POST["exam$resId"]  ;
		$examTotal =  $ca1+$ca2+$exam;
		
		$ca1 =($ca1>0)? $ca1: "NULL";
		$ca2 =($ca2>0)? $ca2: "NULL";
		$exam =($exam>0)? $exam: "NULL";
		// Specify the query to execute
		$sql = "insert into results(ca1, ca2, exam, studId, acadYr, term, arm, resClass, subjects, chm, clm, cam, examTotal, combination) 
		Values($ca1, $ca2, $exam, '$resId', '$academicYear', '$Term', '$Arm', '$CurrentClass','$Subject',$HIC,$LIC,$AIC,$examTotal,'$Combination')";
		
		// Execute query
		//echo $sql;
		echo '<script type="text/javascript">alert("Result entered Succesfully");window.location=\'thanks.php\';</script>';
		
		
		mysqli_query($con,$sql);
	}

?>