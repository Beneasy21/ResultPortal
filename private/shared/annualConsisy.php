<?php								

	$CurrentClass=@$_POST['studClass'];
	$Combination=@$_POST['combination'];
	$academicYear=@$_POST['acadYr'];
	$Arm=@$_POST['Arm'];
								
	
	$result =  convert_id_to_name_annual($Arm, $academicYear, $CurrentClass);
	while($row = mysqli_fetch_assoc($result))
		{
		$CurrentClasss = $row['classsName'];
		$Termm = $row['termName'];
		$Armm = $row['armName'];
		$academicYearr = $row['acadYrName'];
	
		
	
	echo "<td  valign='buttom' ALIGN = 'CENTER'><strong> <FONT SIZE = '6'> COMMAND SECONDARY SCHOOL - IPAJA </FONT> </br>
										<strong> <FONT SIZE = '4.5'> FORM MASTER'S RECORD  $academicYearr SESSION </FONT></br>
									  Class: $CurrentClasss 	   Arm: $Armm  </br>
									 </strong>"
									  ;
		}

?>