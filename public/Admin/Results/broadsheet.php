<?php  
	require_once('../../../private/initialize.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="" rel="stylesheet" type="text/css" />
	<title>Print Broadsheets</title>
</head>
<body>
<div id="container">
	<div id="content">
		<div id="left">
	        <div id="TabbedPanels1" class="TabbedPanels">
				<table align= "center" width = "80%" >
					<tr> 
						<?php
							
							$CurrentClass=h($_POST['studClass']);
							$Term=h($_POST['Term']);
							//$Combination=h($_POST['combination']);
							$academicYear=h($_POST['acadYr']);
							$Arm=h($_POST['Arm']);

							//Turning ids into names
							$result = convert_id_to_name($Term, $Arm, $academicYear, $CurrentClass);
							while($row = mysqli_fetch_assoc($result)){
								$CurrentClasss = $row['classsName'];
								$Termm = $row['termName'];
								$Armm = $row['armName'];
								$academicYearr = $row['acadYrName'];
							
								echo "<td  valign='buttom' ALIGN = 'CENTER'><strong> <FONT SIZE = '6'> COMMAND SECONDARY SCHOOL - LAGOS </FONT> </br>
																<strong> <FONT SIZE = '4.5'> FORM MASTER'S RECORD $Termm Term, $academicYearr SESSION </FONT></br>
															Class: $CurrentClasss 	   Arm: $Armm  
															</br></strong>"									  ;
							
								}

							$result = get_broadsheet($Term, $Arm, $academicYear, $CurrentClass);
							$subjectList = mysqli_fetch_array($result);
							$subjects = $subjectList['subjects'];
								
							$result = get_broadsheet_name($Term, $Arm, $academicYear, $CurrentClass, $subjects);
							// Loop through each records 
						?>
					</tr>
				</table>
				
	            <div class="TabbedPanelsContent">
					<table width="1%" border="1" bordercolor="#85A157" align="center">
                    <tr>
					<?php
						$secondRow = $prev = $prev1 = "";
					
						while($row = mysqli_fetch_field($result))
						{
							$rowname = $row->name;
							if($rowname =='Student Name' ||  $rowname =='Total' || $rowname =='Average')
							{
								echo '<th height="32" bgcolor="#85A157" class="style3" rowspan=2 ><div align="left" class="style9 style5"><strong>'.$rowname.'</strong></div></th>';
								$prev ='';	
							}
							else
							{
								$cols = explode("-", $rowname);
								if($prev != $cols[0])
								{
									$prev = $cols[0];
									echo '<th height="32" bgcolor="#85A157" class="style3" colspan=3><div align="center" class="style9 style5"><strong>'.$cols[0].'</strong></div></th>';
								}	
								//$prev1 = $cols[0];
								$secondRow .= '<th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>'.$cols[1].'</strong></div></th>';
							}
						}
					?>
                    	</tr>
							<?=$secondRow?>
							<tr>
				        <?php
								// Loop through each records 
								while($row = mysqli_fetch_assoc($result))
								{
								echo "<tr>";
									foreach($row as $col =>$value)
									{
										echo "<td>".($value=="0"?"-":(is_numeric($value)? ($value>=1000 ?number_format($value, 0): $value): $value))."</td>";
										
									}
									echo "</tr>";
								}
								
							?>
				
					
					</table>
					</form>
                    			
                  </table>
	            </div>
              </div>
          </div>
          <p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
	</div>
	
</div>
</body>
</html>