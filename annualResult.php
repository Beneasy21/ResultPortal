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
	<?php 
session_start();

$RegNo = $_POST["RegNo"]; //Storing Reg Numberin $regNo variable.
$AcademicYear = $_POST["AcadYr"];//Storing Acad Year in $Session variable
//$Term = $_POST["Term"]; //Storing Term in $Term variable.
$Class = $_POST["Class"]; //Storing Class in $Class variable.





					// Establish Connection with Database
					$conn = mysqli_connect("localhost","root","","comschoolmand");
					if ($conn->connect_error)
					{
						die("Could not connect to database: ".$con->connect_error);
					}
					
					// Specify the query to execute
					$sql = "select *  from students where studId = '".$RegNo."' ";
					// Execute query
					$results = mysqli_query($conn,$sql);
					// Loop through each records 
					while($row = mysqli_fetch_array($results))
					{
					
					$Name=$row['studName'];
					$Sex=$row['sex'];
					$AdmNo = $row["studId"];			
					$Class = $row["currentClass"];
					$Arm = $row["arm"];
		
					
					?>
					


	</head>
	<body bgcolor="grey">
	<table bgcolor="grey" width=1300 align=center >
		<tr>
			<td height="150">
				<img width="800" Height="150"src="Headrpix.png">
			</td>
		</tr>
		<tr>
			<td height="150">

				<table align=center border=1 width="60%">
					<tr><td width = "20%" align="right">Name:</td><td bgcolor="#B8DEE9" class="style3" colspan = "3"><div align="left" class="style9 style6"><strong><?php echo $Name;?></strong></div></td></tr>
					<tr><td width = "20%" align="right">Session:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php  echo $AcademicYear;?></strong></div></td>
						<td width = "20%" align="right">Class:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Class;?></strong></div></td></tr>
					<tr><td width = "15%" align="right">Adm No:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $AdmNo;?></strong></div></td>
					<td width = "15%" align="right">Sex</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Sex;?></strong></div></td></tr>
				</table>
				
				<?php
					}
					// Retrieve Number of records returned
					$recordss = mysqli_num_rows($results);
					?>
					
					
								
					<?php
						// Close the connection
						mysqli_close($conn);
					?>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%" border="1" bordercolor="#85A157" align=center>
						<tr bgcolor="#B8DEE9" class="style3">
							<td width = "27%"></td>
							<td colspan =2 width = "11%">1st Term Score</td>
							<td colspan =2 width = "11%">2nd Term Score</td>
							<td colspan =2 width = "11%">3rd Term Score</td>
							<td colspan =2 width = "10%">Year Total</td>
							<td colspan =2 width = "10%">Year Average</td>
							<td colspan =4 width = "20%"></td>
							
						</tr>
						<tr bgcolor="#B8DEE9" class="style3">
							<td width = "27%">Subject</td>
							<td width = "5%">Marks Obtainable</td>
							<td width = "6%">Marks Obtained</td>
							<td width = "5%">Marks Obtainable</td>
							<td width = "6%">Marks Obtained</td>
							<td width = "6%">Marks Obtainable</td>
							<td width = "5%">Marks Obtained</td>
							<td width = "5%">Marks Obtainable</td>
							<td width = "5%">Marks Obtained</td>
							<td width = "5%">Marks Obtainable</td>
							<td width = "5%">Marks Obtained</td>
							<td width = "5%">Class Highest </td>
							<td width = "5%">Class Lowest </td>
							<td width = "5%">Class Average Marks</td>
							<td width = "5%">Grade</td>
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
					$sql = "select subject,examTotal FROM results WHERE studId = '".$RegNo."' ";
					// Execute query
					$result = mysqli_query($con,$sql);
					// Loop through each records 
					while($row = mysqli_fetch_array($result))
					{
					$Subject = $row["subject"];
					$First = $row["examTotal"];
					$FirstTermObt = 100;
					$SecondTermObt = 100;
					$ThirdTermObt = 100;
					$TotalObt = $FirstTermObt + $SecondTermObt + $ThirdTermObt;
					$AverageObt = ($FirstTermObt + $SecondTermObt + $ThirdTermObt/3);
					
										
				?>

					<table width="100%" border="1" bordercolor="#85A157" align=center>
						<tr bgcolor="#B8DEE9" class="style3">
							<td width = "21%"><strong><?php echo $Subject;?></strong></td>
							<td width = "5%"><strong><?php echo $FirstTermObt;?></strong></td>
							<td width = "5%"><strong><?php echo $First;?></strong></td>
							<td width = "5%"><strong><?php echo $SecondTermObt;?></strong></td>
							<td width = "5%"><strong><?php echo "0";?></strong></td>
							<td width = "5%"><strong><?php echo $ThirdTermObt;?></strong></td>
							<td width = "4%"><strong><?php echo "0";?></strong></td>
							<td width = "5%"><strong><?php echo $TotalObt;?></strong></td>
							<td width = "5%"><strong><?php echo "0";?></strong></td>
							<td width = "4%"><strong><?php echo Ceil($AverageObt);?></strong></td>
							<td width = "5%"><strong><?php echo "0";?></strong></td>
							<td width = "4%"><strong><?php echo "0";?></strong></td>
							<td width = "4%"><strong><?php echo "0";?></strong></td>
							<td width = "4%"><strong></strong></td>
							<td width = "4%"><strong><?php include "includes/grades.php";?></strong></td>
							
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
						mysqli_close($con);
					?>
					</table>
			</td>
		</tr>
		
		</body>
		</html>
	            