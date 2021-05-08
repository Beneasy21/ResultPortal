<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v2.3.0.25189
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Command Sec Sch:: Check your Results </title>
	</head>
	<body>
	<?php 
session_start();


$Session = $_POST["acadYr"];//Storing Acad Year in $Session variable
$Term = $_POST["Term"]; //Storing Term in $Term variable.
$Class = $_POST["studClass"]; //Storing Class in $Class variable.
$Armm = $_POST["Arm"]; //Storing Arm in $Arm variable.

					// Establish Connection with Database
					$conn = mysqli_connect("localhost","root","","comschoolmand");
					if ($conn->connect_error)
					{
						die("Could not connect to database: ".$conn->connect_error);
					}
					
		$sql = "SELECT DISTINCT r.studId, s.studName,s.sex, tc.classsName,ta.armName,s.house,tay.acadYrName
FROM results r
INNER JOIN students s ON s.studId = r.studId
INNER JOIN tblClass tc ON s.currentClass = tc.classsId 
INNER JOIN tblarm ta ON s.arm = ta.armId 

INNER JOIN tblacadYr tay ON s.acadYr = tay.AcadYrId
		where s.AcadYr = '$Session' and r.term = '$Term' and s.currentClass = '$Class' AND s.arm = '$Armm'";
		//echo $sql;
		$resultStudent = mysqli_query($conn,$sql);
		while($rowStudent = mysqli_fetch_array($resultStudent))
			{
				$RegNo =$rowStudent["studId"];
			
					// Specify the query to execute
					$sql = "SELECT s.id,s.studId,s.studName,s.house,s.sex,tc.classsName,ta.armName,tay.acadYrName,s.arm   FROM students s
							INNER JOIN tblClass tc ON s.currentClass = tc.classsId 
							INNER JOIN tblarm ta ON s.arm = ta.armId 
							
							INNER JOIN tblacadYr tay ON s.acadYr = tay.AcadYrId
							where s.studId = '".$RegNo."' AND s.AcadYr = '".$Session."'";
					// Execute query
					$results = mysqli_query($conn,$sql);
					// Loop through each records 
					while($row = mysqli_fetch_array($results))
					{
					
					$Name=$row['studName'];
					$Sex=$row['sex'];
					$AdmNo = $row["studId"];			
					$Class = $row["classsName"];
					$House = $row['house'];
					$Arm = $row["armName"];
					$AcadYr = $row["acadYrName"];
					$Armm = $row["arm"];//For the next query
		
		
					}
					// Retrieve Number of records returned
					$record = mysqli_num_rows($results);
					
					
					
								
					
						// Close the connection
						//
					?>
					
			









	
	<table bgcolor=white width="800" align=center height="1000">
		<tr>
			<td height="150">
				<img width="800" Height="150"src="Images/Headpix.png">
			</td>
		</tr>
		<tr>
			<td align=center><strong>
			<?php 
				$Term = $_POST["Term"];
					if($Term =1)
					{
						$TermViewed = 'First';
					}
					elseif($Term =2)
					{
						$TermViewed = 'Second';
					}
					elseif($Term =3)
					{
							$TermViewed = 'Third';
					}
				echo "$TermViewed Term, $AcadYr Academic Session";
			
			?>
			</strong></td>
		</tr>
		<tr>
			<td height="120">
				<table align=center border="1" width="90%" height="120">
					<tr><td width = "14%" align="right"><strong><i>Full Name:</i></td><td bgcolor="#B8DEE9" class="style3" colspan=3 width="42%"><div align="left" class="style9 style6"><strong><?php echo $Name;?></strong></div></td>
					<td width = "10%" align="right"><Strong><i>Sex:</i></strong></td><td bgcolor="#B8DEE9" class="style3"width = "12%"><div align="left" class="style9 style6"><strong><?php echo $Sex;?></strong></div></td>
					<td width = "16%" align="Center" rowspan="3">PassPort</td>
					</tr>
					
					<tr><td width = "14%"" align="right"><strong><i>Admin No:</i></td><td bgcolor="#B8DEE9" class="style3" width="18"><div align="left" class="style9 style6"><strong><?php  echo $AdmNo;?></strong></div></td>
						<td width = "14%" align="right"><strong><i>Class:</i></strong></td><td bgcolor="#B8DEE9" class="style3"width="18"><div align="left" class="style9 style6" ><strong><?php  echo $Class;?></strong></div></td>
						<td width = "10%" align="right"><strong><i>Arm:</i></strong></td><td bgcolor="#B8DEE9" class="style3" width="12"><div align="left" class="style9 style6"><strong><?php  echo $Arm;?></strong></div></td>
					</tr>
					
					
					<tr><td width = "14%" align="right"><strong><i>House: </i></strong></td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $House;?></strong></div></td>
					<td width = "14%" align="right"><strong><i>Session:</i></strong></td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $AcadYr;?></strong></div></td>
					<td width = "10%" align="right"><strong><i>Term:</i></strong></td><td bgcolor="#B8DEE9" class="style3" width="12%"><div align="left" class="style9 style6"><strong><?php echo $TermViewed;?></strong></div></td></tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%" border="1" bordercolor="#85A157" align=center>
						<tr bgcolor="#B8DEE9" class="style3">
							<td width = "32%"><strong></strong></td>
							<td colspan =2 width = "11%">1st Summary</td>
							<td colspan =2 width = "11%">2nd Summary</td>
							<td colspan =2 width = "13%">Term's Work</td>
							<td colspan =6 width = "33%">Summary of Term's Work</td>
							
						</tr>
						<tr bgcolor="#B8DEE9" class="style3">
							<td width = "32%">Subject</td>
							<td width = "5%">Marks Obt</td>
							<td width = "6%">1st Test</td>
							<td width = "5%">Marks Obt</td>
							<td width = "6%">2nd Test</td>
							<td width = "7%">Marks Obt</td>
							<td width = "6%">Exam</td>
							<td width = "7%">Marks Obt</td>
							<td width = "6%">Total Score</td>
							<td width = "6%">CHM</td>
							<td width = "6%">CLM</td>
							<td width = "6%">CAM</td>
							<td width = "6%">Grade</td>
						</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<?php

					// Establish Connection with Database
					$con = mysqli_connect("localhost","root","","comschoolmand");
					if ($con->connect_error)
					{
						die("Could not connect to database: ".$con->connect_error);
					}
					
					// Specify the query to execute
					$sql = "select r.*,ts.subName, t.termName from results  r
					INNER JOIN tblsubjects ts ON r.subjects = ts.subId
					INNER Join tblterm t ON r.term = t.termId
					where studId = '".$RegNo."' AND acadYr = '".$Session."' AND term = '".$Term."' AND arm = '".$Armm."'ORDER BY r.resClass,
					 CASE `subjects`
					 WHEN '19' THEN 1
					 WHEN '35' THEN 2
					 WHEN '13' THEN 3
					 ELSE 4
					 END";
					// Execute query
					//echo $sql;
					$result = mysqli_query($con,$sql);
					// Loop through each records 
					while($row = mysqli_fetch_array($result))
					{
					$Subject = $row['subName'];
					$CA1=$row['ca1'];
					$CA2=$row['ca2'];
					
					$Exams=$row['exam'];
					$Total= $CA1 + $CA2 +$Exams;
					$HIC=$row['chm'];
					$LIC=$row['clm'];
					$AIC=$row['cam'];
					
					$FirstSummaryObt = 15;
					$SecondSummaryObt = 15;
					$ExamObt = 70;
					$TotalObt = $FirstSummaryObt + $SecondSummaryObt + $ExamObt;
					
										
				?>

					<table width="100%" border="1" bordercolor="#85A157" align=center>
						<tr bgcolor="#B8DEE9" class="style3">
							<td width = "28%"><strong><?php echo $Subject;?></strong></td>
							<td width = "5%"><strong><?php echo $FirstSummaryObt;?></strong></td>
							<td width = "6%"><strong><?php echo $CA1;?></strong></td>
							<td width = "5%"><strong><?php echo $SecondSummaryObt;?></strong></td>
							<td width = "6%"><strong><?php echo $CA2;?></strong></td>
							<td width = "7%"><strong><?php echo $ExamObt;?></strong></td>
							<td width = "6%"><strong><?php echo $Exams;?></strong></td>
							<td width = "7%"><strong><?php echo $TotalObt;?></strong></td>
							<td width = "6%"><strong><?php echo $Total;?></strong></td>
							<td width = "6%"><strong><?php echo $HIC;?></strong></td>
							<td width = "6%"><strong><?php echo $LIC;?></strong></td>
							<td width = "6%"><strong><?php echo $AIC;?></strong></td>
							<td width = "6%"><strong><?php include "includes/grades.php";?></strong></td>
							
						</tr>
						
						
							
							
					<?php
					}
					// Retrieve Number of records returned
					$records = mysqli_num_rows($result);
					?>
					
					
							
					<tr>
						<td colspan="8" class="style3"><div align="left" class="style12"> </div></td>
					</tr>
							
									
								
					<?php
						// Close the connection
						//mysqli_close($con);
					?>
					</table>
			</td>
		</tr>
		<tr>
			<td colspan="13" align="Right"><i>* CHM = Class Highest Marks, CLM = Class Lowest Marks, CAM = Class Average Marks			</i><td>
		</tr>
		
		
		<!-- Extra Space-->
		<tr>
		<td height = 80></td>
		
		</tr>
		
		<!-- Result Comments area-->
				<tr>
			<td>
				<?php
					// Establish Connection with Database
					$connn = mysqli_connect("localhost","root","","comschoolmand");
					
					// Specify the query to execute
					$sql = "select SUM(examTotal), AVG(examTotal) 
					FROM results 
					WHERE studId = '".$RegNo."' AND acadYr = '".$Session."' AND term = '".$Term."' AND arm = '".$Armm."'";
					// Execute query
			
					$result = mysqli_query($connn,$sql);
					// Loop through each records 
					while($row = mysqli_fetch_array($result))
					{
					$AverageScore = round($row['AVG(examTotal)'],2);
					$TotalScore = $row['SUM(examTotal)'];
					?>
					<table border = "1" width = "70%" align="center">
						<tr valign = "Top">
							<td><strong> Total Score:</strong></td> <td><strong> <?php echo $TotalScore;?></strong></td><td align="Right"><strong> Average :</strong></td> <td><strong> <?php echo $AverageScore;?></strong></td>
						</tr>
						<tr >
							<td colspan = "2" align="right"><strong> Next term begins:</strong></td> <td  Colspan="2"><strong><?php include "includes/comment2.php";?></strong></td>
						</tr>
					</table>
					
					<?php include "includes/comment3.php";?></strong>
					
					<?php
					}
					// Retrieve Number of records returned
					$records = mysqli_num_rows($result);
					?>
					
							
					<tr>
						<td colspan="8" class="style3"><div align="left" class="style12"> </div></td>
					</tr>
							
								
					<?php
						// Close the connection
						mysqli_close($connn);
					?>
					</table>
			</td>
		</tr>
		</tr>
	
</table>
<div style="page-break-after:always !important;"></div>
			<?php }
			mysqli_close($conn);
			?>
		</body>
		</html>
	            