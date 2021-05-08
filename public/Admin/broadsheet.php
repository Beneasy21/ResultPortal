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
								<?php include 'consisy.php';?>
								<?php
								$CurrentClass=@$_POST['studClass'];
								$Term=@$_POST['Term'];
								$Combination=@$_POST['combination'];
								$academicYear=@$_POST['acadYr'];
								$Arm=@$_POST['Arm'];
								
								// Establish Connection with Database
								$con = mysqli_connect("localhost","root");
								// Select Database
								mysqli_select_db($con,"comschoolmand"); //Edit these pls
								// Specify the query to execute
								$sql = "SEt @@group_concat_max_len = 1024*300";
								mysqli_query($con,$sql);
								$sql = "SELECT GROUP_CONCAT(DISTINCT CONCAT('Sum(if(r.subjects = ''',`subjects`,''',r.ca1 + r.ca2,0)) as `',`subName`,'-CA`,
																			Sum(if(r.subjects = ''',`subjects`,''',(r.exam),0)) as `',`subName`,'-Exam`,
																			Sum(if(r.subjects = ''',`subjects`,''',(r.examTotal),0)) as `',`subName`,'-Total`')) subjects 
																			FROM results 
								INNER JOIN tblsubjects tbs ON results.subjects = tbs.subId
								WHERE results.resClass = '".$CurrentClass."'AND results.arm = '".$Arm."' AND results.term = '".$Term."'  AND results.acadYr = '".$academicYear."'";
								// Execute query
								
								//echo $sql;
								$result = mysqli_query($con,$sql);
								$subjectList = mysqli_fetch_array($result);
								$subjects = $subjectList['subjects'];
								
								// Specify the query to execute
								$sql = "SELECT s.studName `Student Name`, $subjects, sum(examTotal) Total, Round(avg(examTotal),2) Average 
								FROM results r 
								inner join students s on r.studId = s.studId 
								WHERE r.resClass = '".$CurrentClass."' AND r.arm = '".$Arm."' AND r.term = '".$Term."' AND r.acadYr = '".$academicYear."'
								group by r.resClass,  r.arm, r.acadYr,s.studName
								";
								//echo $sql;
								// Execute query
								$result = mysqli_query($con,$sql);
								// Loop through each records 
								
								?>
						</tr>
				</table>
				
	            <div class="TabbedPanelsContent">
					<form name="resultform" method="post" action= "updateResult.php">
	              <table width="1%" border="1" bordercolor="#85A157" align="center">
                    <tr>
					<?php
						$secondRow ="";
						$prev='';
						$prev1 ='';
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