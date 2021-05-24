<?php  
	require_once('../../../private/initialize.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="" rel="stylesheet" type="text/css" />
	<title>Annual Broadsheet</title>
</head>
<body>
<div id="container">
	<div id="content">
		<div id="left">
	        <div id="TabbedPanels1" class="TabbedPanels">
		        <div class="TabbedPanelsContentGroup">
	    			<table align= "center">
						<tr>   
						 	<?php

								$CurrentClass=h($_POST['studClass']);
								$academicYear=h($_POST['acadYr']);
								$Arm=h($_POST['Arm']);
															
								$result =  convert_id_to_name_annual($Arm, $academicYear, $CurrentClass);
								while($row = mysqli_fetch_assoc($result))
									{
									$CurrentClasss = $row['classsName'];
									$Termm = $row['termName'];
									$Armm = $row['armName'];
									$academicYearr = $row['acadYrName'];

									echo "<td  valign='buttom' ALIGN = 'CENTER'><strong> <FONT SIZE = '6'> COMMAND SECONDARY SCHOOL - LAGOS </FONT> </br>
											<strong> <FONT SIZE = '4.5'> FORM MASTER'S RECORD  $academicYearr SESSION </FONT></br>
											Class: $CurrentClasss 	   Arm: $Armm  </br>
											</strong>";
									}

								
								$result = get_annual_broadsheet($Arm, $academicYear, $CurrentClass);
								$subjectList = mysqli_fetch_array($result);
								$subjects = $subjectList['subjects'];
								

								$result = get_annual_broadsheet_name($Arm, $academicYear, $CurrentClass, $subjects);
								// Loop through each records 
								
								
							?>
						</tr>
				</table>
				
	            <div class="TabbedPanelsContent">
					<form name="resultform" method="post" action= "updateResult.php">
	              <table width="60%" border="1" bordercolor="#85A157" align="center">
                    <tr>
					<?php
						$row2 = "<tr>";
						$prevValue ="";
						while($row = mysqli_fetch_field($result))
						{
							if(strpos($row->name,"-")>0)
							{
								$rowName = explode("-",$row->name);
								if($prevValue != $rowName[0]){
									echo '<th colspan=3 height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>'.$rowName[0].'</strong></div></th>';
									$prevValue = $rowName[0];
								}
								$row2 .= '<th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>'.$rowName[1].'</strong></div></th>';
							}
							else
								echo '<th rowspan=2 height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>'.$row->name.'</strong></div></th>';
						}
					?>
                      
                      
                       
                    </tr>
						<?=$row2?>
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