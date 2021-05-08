<?php 
	iinclude_once('../../private/initialize.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$AdmNo=$_POST['studId'];
	$Name=$_POST['studName'];
	$Sex=$_POST['sex'];
	$Class=$_POST['studClass'];
	$Arm=$_POST['Arm'];
	$House=$_POST['studHouse'];
	$AcadYear=$_POST['acadYr'];
	$StudentStatus=$_POST['sStatus'];
	$StudDOB=$_POST['DOB'];
	
	echo $AdmNo; 
	echo $Name; 
	echo $Sex; 
	echo $Class; 
	echo $Arm; 
	echo $House; 
	echo $AcadYear; 
	echo $StudentStatus; 
	echo $StudDOB; 
	
	// Establish Connection with MYSQL
	$conn = mysqli_connect("localhost","root","","comschoolmand");
					if ($conn->connect_error)
					{
						die("Could not connect to database: ".$conn->connect_error);
					}
	$sql1 = mysqli_query($conn,"select studId from students where studId='$AdmNo' ");
    $row=mysqli_fetch_array($sql1);
	
		if($row['studId']!=$AdmNo)	
		{
			if(mysqli_query ($conn,"INSERT INTO students 	(studId,studName,sex,currentClass,arm,house,acadYr,studStatus,studDOB) 
				values('".$AdmNo."','".$Name."','".$Sex."','".$Class."','".$Arm."','".$House."','".$AcadYear."','".$StudentStatus."','".$StudDOB."')"))
				{
	      		echo '<script type="text/javascript">alert("New Student Inserted Succesfully");window.location=\'AddStudent.php\';</script>';
				}
		}
		else 
		{
			echo '<script type="text/javascript">alert("The Admission Number is already assigned to another student");window.location=\'AddStudent.html\';</script>';
		}

	
	
	// Close The Connection
	mysqli_close ($conn);
	

?>
</body>
</html>
