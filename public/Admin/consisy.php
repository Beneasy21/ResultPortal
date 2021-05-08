<?php								

	$CurrentClass=@$_POST['studClass'];
	$Term=@$_POST['Term'];
	$Combination=@$_POST['combination'];
	$academicYear=@$_POST['acadYr'];
	$Arm=@$_POST['Arm'];
								
	$on = mysqli_connect("localhost","root");
	// Select Database
	mysqli_select_db($on,"comschoolmand");
	// Specify the query to execute
	$sql = "SELECT resClass, termName, classsName, armName,acadYrName
	FROM results r
	INNER JOIN tblClass tc ON r.resclass = tc.classsId
	INNER JOIN tblTerm tt ON r.term = tt.termId
	INNER JOIN tblArm ta ON r.arm = ta.armId
	INNER JOIN tblacadYr tay ON r.acadYr = tay.acadYrId
	
	WHERE r.resClass = '".$CurrentClass."' AND r.term = '".$Term."' AND r.arm = '".$Arm."' AND r.acadYr = '".$academicYear."'
	LIMIT 1";	
	
	//echo $sql;
	$result = mysqli_query($on,$sql);
	while($row = mysqli_fetch_assoc($result))
		{
		$CurrentClasss = $row['classsName'];
		$Termm = $row['termName'];
		$Armm = $row['armName'];
		$academicYearr = $row['acadYrName'];
	
		
	
	echo "<td  valign='buttom' ALIGN = 'CENTER'><strong> <FONT SIZE = '6'> COMMAND SECONDARY SCHOOL - IPAJA </FONT> </br>
										<strong> <FONT SIZE = '4.5'> FORM MASTER'S RECORD $Termm Term, $academicYearr SESSION </FONT></br>
									  Class: $CurrentClasss 	   Arm: $Armm  
									  </br>Subject Combination: $Combination</br></strong>"
									  ;
	
		}
// Close the connection
mysqli_close($on);
?>