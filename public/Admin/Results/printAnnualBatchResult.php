<?php
session_start();
require_once('../../../private/initialize.php');
?>
<!DOCTYPE>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- Stylesheets-->
	<link rel="stylesheet" href="<?php echo url_for('stylesheets/bootstrap.min.css');?>" />
</head>
<body >
<?php 
$Session = h($_POST["acadYr"]);//Storing Acad Year in $Session variable
$Armm = h($_POST["Arm"]); //Storing Term in $Term variable.
$Class = h($_POST["studClass"]); //Storing Class in $Class variable.
				
	$resultStudent = fetch_a_studid_from_result($Session, $Class, $Armm);
	while($rowStudent = mysqli_fetch_array($resultStudent))
	{
		$RegNo =$rowStudent["studId"];
		$results = fetch_a_student_for_batch($RegNo);

			while($row = mysqli_fetch_array($results))
			{
				$Name=$row['studName'];
				$Sex=$row['sex'];
				$AdmNo = $row["studId"];			
				$Class = $row["classsName"];
				$Arm = $row["armName"];
				$AcadYr = $row["acadYrName"];
			}
?>
						
	<table  width=1300 align=center >
		<tr>
		<td class="text-center" height="150"><img width="800" Height="150"src="<?php echo url_for('/images/Headpix.png');?>"></td>
		</tr>
		<tr>
			<td height="150">
				<h2><table align=center border=1 width="60%">
					<tr><td width = "20%" align="left">Name:</td><td bgcolor="#B8DEE9" class="style3" ><div align="left" class="style9 style6"><strong><?php echo $Name;?></strong></div></td>
					    <td width = "20%" align="left">Arm:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Arm;?></strong></div></td></tr>
					<tr><td width = "20%" align="left">Session:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php  echo $AcadYr;?></strong></div></td>
						<td width = "20%" align="left">Class:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Class;?></strong></div></td></tr>
					<tr><td width = "15%" align="left">Adm No:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $AdmNo;?></strong></div></td>
					<td width = "15%" align="left">Sex</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Sex;?></strong></div></td></tr>
					</table>
				</h2>
			</td>
			</tr>
		<tr>
		<td>
		<h3>
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
			<?php 
			
			$result = fetch_annual_result($RegNo, $Session);
			$result_array = [];
			while($row = mysqli_fetch_assoc($result)) { $result_array[] = $row; }
						
			foreach ($result_array as $row) 
			{
				$FirstTermObt = $SecondTermObt = $ThirdTermObt = 100;
				$TotalObt = $FirstTermObt + $SecondTermObt + $ThirdTermObt;
				$Total = $row["First"] + $row["Second"] + $row["Third"];
				$AverageObtainable = Ceil($TotalObt / 3);
				$AverageObt = round($Total / 3, 2);
				?>
				<tr bgcolor="#B8DEE9" class="style3">
					<td><strong><?= $row["subName"] ?></td>
					<td><font size="5"><?= $FirstTermObt ?></font></td>
					<td><font size="5"><?= $row["First"] ?></font></td>
					<td><font size="5"><?= $SecondTermObt ?></font></td>
					<td><font size="5"><?= $row["Second"] ?></font></td>
					<td><font size="5"><?= $ThirdTermObt ?></font></td>
					<td><font size="5"><?= $row["Third"] ?></font></td>
					<td><font size="5"><?= $TotalObt ?></font></td>
					<td><font size="5"><?= $Total ?></font></td>
					<td><font size="5"><?= $AverageObtainable; ?></font></td>
					<td><font size="5"><?= $AverageObt ?></font></td>
					<td><font size="5"><?= $row["highest"] ?></font></td>
					<td><font size="5"><?= $row["lowest"] ?></font></td>
					<td><font size="5"><?= ceil($row["Avgr"]) ?></font></td>
					<td><font size="5"><?php require('../../../private/gradesAnnual.php');?></font></td>
				</tr>
			<?php } 
			 ?>
		</tbody>
	</table></h3>
			</td>
		</tr>
		<!-- ======================COMMENTS AREA ================     -->
		<tr>
			<td>
				<?php
					$result = fetch_annual_avg_n_sum($RegNo,$Session, $Armm);
					// Loop through each records 
					while($row = mysqli_fetch_array($result))
					{
					$AverageScore = $row['AVG(examTotal)'];
					$TotalScore = $row['SUM(examTotal)'];
					?>
					<!--   ====================     Comment Table  ==============    -->
					<table border = "1" width = "70%" height='40'align="center">
					<h2><tr >
							<td align="right"><strong><font size="5"> Annual Total Score:</font></strong></td> <td  ><font size="5"><strong><?php echo $TotalScore;?></strong></font></td>
							<td align="right"><strong><font size="5"> Annual Average Score:</font></strong></td> <td  ><font size="5"><strong><?php echo round($AverageScore,2);?></strong></font></td>
						</tr>
						<tr >
							<td colspan = "2" align="right"><strong> <font size="5">Next term begins:</strong></td> 
							<td  Colspan="2"></font><strong><font size="5"><?php require(SHARED_PATH . '/annualcomment2.php');?></font></strong></td>
						</tr>
					</h2>
					</table>
					</td></tr>
					<tr><td><font size='5'>
					<?php require_once(SHARED_PATH . '/annualcomment3.php');?></strong></font>
												
					<?php 		}   ?>
					
					<tr>
						<td colspan="8" class="style3"><div align="left" class="style12"> </div></td>
					</tr>
							
					<div style="page-break-after:always !important;"></div>	
					<?php } ?>
			</td>
		</tr>
		</table>
	</body>
</html>
	            