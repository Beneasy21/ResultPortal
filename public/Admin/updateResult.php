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
	$academicYear=$_POST['academicYear'];
	$Arm=$_POST['Arm'];
	$Term=$_POST['Term'];
	
								
	for($i=0;$i<count($resIdArray); $i++)
	{
		$resId = $resIdArray[$i];
		$ca1 =  @$_POST["ca1$resId"] ;
		$ca2 =  @$_POST["ca2$resId"] ;
		$exam =  @$_POST["exam$resId"] ;
		$examTotal =  $ca1+$ca2+$exam ;
		$AdmNo=$_POST["AdmNo$resId"];
		
		$ca1 =($ca1>0)? $ca1: "NULL";
		$ca2 =($ca2>0)? $ca2: "NULL";
		$exam =($exam>0)? $exam: "NULL";
		// Specify the query to execute
		//$sql = "update results set ca1='$ca1', ca2='$ca2', exam='$exam' where resId ='$resId'";
		$sql = "update results set ca1=$ca1, ca2=$ca2, exam=$exam, studId='$AdmNo', acadYr='$academicYear', term='$Term', arm='$Arm', resClass='$CurrentClass', subjects='$Subject', 
		  chm='$HIC', clm='$LIC', cam='$AIC', examTotal='$examTotal' WHERE resId = '$resId'";
		// Execute query
		echo $sql;
		echo '<script type="text/javascript">alert("Result Inserted Succesfully");window.location=\'AddResult.php\';</script>';
		
		
		mysqli_query($con,$sql);
	}

?>