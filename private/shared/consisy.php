<?php								

	$CurrentClass=h($_POST['studClass']);
	$Term=h($_POST['Term']);
	$Combination=h($_POST['combination']);
	$academicYear=h($_POST['acadYr']);
	$Arm=h($_POST['Arm']);

	$result = convert_id_to_name($Term, $Arm, $academicYear, $CurrentClass);
	while($row = mysqli_fetch_assoc($result)){
		$CurrentClasss = $row['classsName'];
		$Termm = $row['termName'];
		$Armm = $row['armName'];
		$academicYearr = $row['acadYrName'];
	
     	echo "<td  valign='buttom' ALIGN = 'CENTER'><strong> <FONT SIZE = '6'> COMMAND SECONDARY SCHOOL - IPAJA </FONT> </br>
										<strong> <FONT SIZE = '4.5'> FORM MASTER'S RECORD $Termm Term, $academicYearr SESSION </FONT></br>
									  Class: $CurrentClasss 	   Arm: $Armm  
									  </br>Subject Combination: $Combination</br></strong>"									  ;
	
		}

?>