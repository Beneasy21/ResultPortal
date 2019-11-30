<?php
$host = "localhost"; $username = "root"; $password = "";
$dbname = "comschoolmand";
$con = mysqli_connect($host,$username,$password,$dbname);
$RegNo = $_POST['RegNo']; //Storing Reg Numberin $RegNo variable.
//$RegNo = '101003'; //Storing Reg Numberin $RegNo variable.
$AcademicYear = $_POST['academicYear']; //Storing Acad Year in $Session variable
$Class = ['studClass']; //Storing Class in $Class variable.
// Specify the query to execute
$sql = "SELECT r1.`subjects`,
				MAX(CASE WHEN r1.`term` = 'First' THEN r1.`examTotal` END) 'First',
				MAX(CASE WHEN r1.`term` = 'Second' THEN r1.`examTotal` END) 'Second',
				MAX(CASE WHEN r1.`term` = 'Third' THEN r1.`examTotal` END) 'Third',
				MIN(CASE WHEN r2.`examTotal` != 0 THEN r2.`examTotal` END) as lowest,
				MAX(r2.`examTotal`) as highest,
				AVG(r2.`examTotal`) as Avgr
				FROM `results` r1
				LEFT OUTER JOIN `results` r2 ON r2.`subjects` = r1.`subjects`
				WHERE r1.`studId` = '".$RegNo."' AND r2.`resClass` = r1.`resClass` AND r1.acadYr = '".$AcademicYear."'
				GROUP BY r1.`subjects`
				ORDER BY r1.`subjects` ASC";
// Execute query
$result = mysqli_query($con,$sql);$result_array = [];
while($row = mysqli_fetch_assoc($result)) { $result_array[] = $row; }
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
// Close the connection
mysqli_close($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v2.3.0.25189
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>My School Portal </title>
	<?php 
session_start();

//tide
$RegNo = $_POST['RegNo']; //Storing Reg Numberin $regNo variable.
$AcademicYear = $_POST["academicYear"];//Storing Acad Year in $Session variable
//$Arm = $_POST["Arm"]; //Storing Term in $Term variable.
$Class = $_POST["studClass"]; //Storing Class in $Class variable.




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
	<body >
	<table  width=1300 align=center >
		<tr>
			<td height="150">
				<img align="center" width="1300" Height="150"src="Images/Headpix.png" >
			</td>
		</tr>
		<tr>
			<td height="150">

				<h2><table align=center border=1 width="60%">
					<tr><td width = "20%" align="left">Name:</td><td bgcolor="#B8DEE9" class="style3" ><div align="left" class="style9 style6"><strong><?php echo $Name;?></strong></div></td>
					    <td width = "20%" align="left">Arm:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Arm;?></strong></div></td></tr>
					<tr><td width = "20%" align="left">Session:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php  echo $AcademicYear;?></strong></div></td>
						<td width = "20%" align="left">Class:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Class;?></strong></div></td></tr>
					<tr><td width = "15%" align="left">Adm No:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $AdmNo;?></strong></div></td>
					<td width = "15%" align="left">Sex</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Sex;?></strong></div></td></tr>
				</table></h2>
				
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
	<table width="100%" border="1" bordercolor="#85A157" align="center">
		<thead>
			<tr bgcolor="#B8DEE9" class="style3">
				<th width="27%;" rowspan='2'><font size="5">Subject</font></th>
				<th colspan="2">1st Term Score</th>
				<th colspan="2">2nd Term Score</th>
				<th colspan="2">3rd Term Score</th>
				<th colspan="2">Year Total</th>
				<th colspan="2">Year Average</th>
				<th colspan="4">Result</th>
			</tr>
			<tr bgcolor="#B8DEE9" class="style3">
				
				<td><strong>Marks Obtainable</strong></td>
				<td><strong>Marks Obtained</strong></td>
				<td><strong>Marks Obtainable</strong></td>
				<td><strong>Marks Obtained</strong></td>
				<td><strong>Marks Obtainable</strong></td>
				<td><strong>Marks Obtained</strong></td>
				<td><strong>Marks Obtainable</strong></td>
				<td><strong>Marks Obtained</strong></td>
				<td><strong>Marks Obtainable</strong></td>
				<td><strong>Marks Obtained</strong></td>
				<td><strong>Class Highest </strong></td>
				<td><strong>Class Lowest </strong></td>
				<td><strong>Class Average Marks</strong></td>
				<td><strong>Grade</strong></td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($result_array as $row) {
				$FirstTermObt = $SecondTermObt = $ThirdTermObt = 100;
				$TotalObt = $FirstTermObt + $SecondTermObt + $ThirdTermObt;
				$Total = $row["First"] + $row["Second"] + $row["Third"];
				$AverageObtainable = Ceil($TotalObt / 3);
				$AverageObt = round($Total / 3, 2);
			?>
			<tr bgcolor="#B8DEE9" class="style3">
				<td><font size="5"><strong><?= $row["subjects"] ?></strong></font></td>
				<td><strong><font size="5"><?= $FirstTermObt ?></strong></font></td>
				<td><strong><font size="5"><?= $row["First"] ?></strong></font></td>
				<td><strong><font size="5"><?= $SecondTermObt ?></strong></font></td>
				<td><strong><font size="5"><?= $row["Second"] ?></strong></font></td>
				<td><strong><font size="5"><?= $ThirdTermObt ?></strong></font></td>
				<td><strong><font size="5"><?= $row["Third"] ?></strong></font></td>
				<td><strong><font size="5"><?= $TotalObt ?></strong></font></td>
				<td><strong><font size="5"><?= $Total ?></strong></font></td>
				<td><strong><font size="5"><?= $AverageObtainable ?></strong></font></td>
				<td><strong><font size="5"><?= $AverageObt ?></strong></font></td>
				<td><strong><font size="5"><?= $row["highest"] ?></strong></font></td>
				<td><strong><font size="5"><?= $row["lowest"] ?></strong></font></td>
				<td><strong><font size="5"><?= ceil($row["Avgr"]) ?></strong></font></td>
				<td><strong><font size="5"><?php include "includes/gradesAnnual.php";?></strong></font></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
			</td>
		</tr>
		<!-- ======================COMMENTS AREA ================     -->
		<tr>
			<td>
				<?php
					// Establish Connection with Database
					$connn = mysqli_connect("localhost","root","","comschoolmand");
					
					//$RegNo = $_POST["regNo"]; //Storing Reg Numberin $regNo variable.
					//$Name = $_POST["name"]; //Storing Reg Numberin $regNo variable.
					//$AcademicYear = $_POST["academicYear"]; //Storing Reg Numberin $regNo variable.
					//$Semester = $_POST["semester"]; //Storing Reg Numberin $regNo variable.
					//$Level = $_POST["level"]; //Storing Reg Numberin $regNo variable.

					// Specify the query to execute
					$sql = "select SUM(examTotal), AVG(examTotal) FROM results WHERE studId = '".$RegNo."' AND acadYr = '".$AcademicYear."' AND arm = '".$Arm."'";
					// Execute query
					
					$result = mysqli_query($connn,$sql);
					// Loop through each records 
					while($row = mysqli_fetch_array($result))
					{
					$AverageScore = $row['AVG(examTotal)'];
					$TotalScore = $row['SUM(examTotal)'];
					//$TotalScore = round($TotalS,0);
					
					?>
					<!--   ====================     Comment Table  ==============    -->
					<h2><table border = "1" width = "70%" height='40'align="center">
						
						<tr >
							<td align="right"> <font size=5> <strong> Annual Total Score:</strong></td> <td  ><strong><?php echo $TotalScore;?></strong></font></td>
							<td align="right"><strong> <font size=5> Annual Average Score:</strong></td> <td  ><strong><?php echo round($AverageScore,2);?></strong></font></td>
						</tr>
						<tr >
							<td colspan = "2" align="right"><strong> Next term begins:</strong></td> <td  Colspan="2"><strong><?php include "includes/annualComment2.php";?></strong></td>
						</tr>
						
					</table></h2>
					</td></tr>
					<tr><td><font size=5>
					<?php include "includes/annualComment3.php";?></strong></font>
						
						
													
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
					
			</td>
		</tr>
		
		</table>
		
		</body>
		</html>
	            