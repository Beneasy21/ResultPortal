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
						
						<tr>    <?php include 'annualConsisy.php';?>
								<?php
								$CurrentClass=@$_POST['studClass'];
								$Combination=@$_POST['combination'];
								$academicYear=@$_POST['acadYr'];
								$Arm=@$_POST['Arm'];
								
								/*/$CurrentClass=@$_POST['studClass'];
								$CurrentClass="2";
								//$academicYear=@$_POST['academicYear'];
								$academicYear="3";
								//$Arm=@$_POST['Arm'];
								$Arm="6";*/
								
								// Establish Connection with Database
								$con = mysqli_connect("localhost","root");
								// Select Database
								mysqli_select_db($con,"come2");
								// Specify the query to execute
								$sql = "SEt @@group_concat_max_len = 1024*200";
								mysqli_query($con,$sql);
								$sql = "SELECT GROUP_CONCAT(DISTINCT CONCAT('Sum(if(r.term=''1'' and r.subjects = ''',`subjects`,''',r.examTotal,0)) as `',`subName`,'-1st`',',
																			Sum(if(r.term=''2'' and r.subjects = ''',`subjects`,''',r.examTotal,0)) as `',`subName`,'-2nd`', ',
																			Sum(if(r.term=''3'' and r.subjects = ''',`subjects`,''',r.examTotal,0)) as `',`subName`,'-3rd`' ) 
																order by subjects) subjects 
								FROM results  
								INNER JOIN tblsubjects tbs ON results.subjects = tbs.subId
								WHERE results.resClass = '".$CurrentClass."'AND results.arm = '".$Arm."' AND results.acadYr = '".$academicYear."'" ;
								// Execute query
								//echo $sql;
								$result = mysqli_query($con,$sql);
								$subjectList = mysqli_fetch_array($result);
								$subjects = $subjectList['subjects'];
								
								// Specify the query to execute
								$sql = "SELECT s.studName `Student Name`, $subjects,sum(examTotal) Total, Round(avg(examTotal),2) Average 
								FROM results r inner join students s on r.studId = s.studId 
								WHERE r.resClass = '".$CurrentClass."' AND r.arm = '".$Arm."'  AND r.acadYr = '".$academicYear."'
								group by r.resClass, r.arm, r.acadYr,s.studName";
								//echo $sql;
								// Execute query
								$result = mysqli_query($con,$sql);
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
                    <?php
// Close the connection
mysqli_close($con);
?>
					
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