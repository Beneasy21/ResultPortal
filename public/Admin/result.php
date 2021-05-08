<?php
session_start();
require_once('../../private/initialize.php');

?>

<!DOCTYPE>
<html lang="en">
<head>
    <!--
    Created by Artisteer v2.3.0.25189
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/bootstrap.min.css');?>">
    <title>Command Sec Sch:: Check your Results </title>
</head>
<body>
	<div class="container">
		<section class="mx-auto text-center p-4">
			<img width="800" Height="150"src="<?php echo url_for('/images/Headpix.png');?>">
			
				<?php 

					$RegNo = $_POST['RegNo'] ?? '206001'; //Storing Reg Numberin $regNo variable.
					$Session = $_POST['acadYr'] ?? '2';//Storing Acad Year in $Session variable
					$Term = $_POST['Term'] ?? '2'; //Storing Term in $Term variable.
					$Class = $_POST['studClass'] ?? '2'; //Storing Class in $Class variable.
					$Arm = $_POST['arm'] ?? '7'; //Storing Class in $Class variable.

					//$Term = $_POST["Term"];
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

					$AYear = get_session_name($Session);
					while($row = mysqli_fetch_assoc($AYear)){
						//die(var_dump($row));
						$AcadYear = $row['acadYearName'];

				echo "<p>$TermViewed Term,  $AcadYear Academic Session</p>";
			}
			?>	
			
			

				<table class="table table-primary table-border p-1 w-75">
				<tr>
					<?php  

			$results = fetch_one_student($RegNo, $Session);
			// Loop through each records 
			while($row = mysqli_fetch_assoc($results))
			{
		
				$Name=$row['studName'];
				$Sex=$row['sex'];
				$AdmNo = $row["studId"];			
				$Class = $row["classsName"];
				$Arm = $row["armName"];
				$AcadYr = $row["acadYrName"];
				$Armm = $row["arm"];//For the next query
				$House = $row["house"]; //Storing Class in $Class variable.
					
			}?>
				
						<td >Full Name: </td><td colspan = "3"><?= $Name;?></td>
						<td>Sex:</td><td class="col-1"><?= $Sex;?></td><td rowspan="2"><img src ="PassPort"></td>
					</tr>
					<tr>
						<td>Admin No: </td><td><?= $AdmNo;?></td>
						<td>Class:</td><td><?= $Class;?></td><td>Arm:</td><td><?= $Arm;?></td>
					</tr>
					<tr>
						<td>House:</td><td> <?= $House;?></td>
					<td >Session:</td><td> <?= $AcadYr;?></td><td>Term: </td><td><?= $TermViewed;?></td>	
					</tr>

				</table>
				
			</p>
		</section>
		<section>
			<table width="100%" border="1" bordercolor="#85A157" align=center>
				<tr bgcolor="#B8DEE9" class="style3">
					<th width = "32%"><strong></strong></th>
					<th colspan =2 width = "11%">1st Summary</th>
					<th colspan =2 width = "11%">2nd Summary</th>
					<th colspan =2 width = "13%">Term's Work</th>
					<th colspan =6 width = "33%">Summary of Term's Work</th>
				</tr>
				<tr bgcolor="#B8DEE9" class="style3">
					<th width = "32%">Subject</th>
					<th width = "5%">Marks Obt</th>
					<th width = "6%">1st Test</th>
					<th width = "5%">Marks Obt</th>
					<th width = "6%">2nd Test</th>
					<th width = "7%">Marks Obt</th>
					<th width = "6%">Exam</th>
					<th width = "7%">Marks Obt</th>
					<th width = "6%">Total Score</th>
					<th width = "6%">CHM</th>
					<th width = "6%">CLM</th>
					<th width = "6%">CAM</th>
					<th width = "6%">Grade</th>
				</tr>
				<tr>
			<?php
				$RegNo = $_POST['RegNo'] ?? '206001'; //Storing Reg Numberin $regNo variable.
				$Session = $_POST['acadYr'] ?? '2';//Storing Acad Year in $Session variable
				$Term = $_POST['Term'] ?? '2'; //Storing Term in $Term variable.
				$Class = $_POST['studClass'] ?? '2'; //Storing Class in $Class variable.
				$Arm = $_POST['arm'] ?? '7'; //Storing Class in $Class variable.

				$result = fetch_individual_result($RegNo,$Session, $Term, $Arm);
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
							<td width = "6%"><strong><?php include ('../../private/grades.php');?></strong></td>
					</tr>
																
					<?php
					}
					?>
			</table>				
		</section>
		<section>
			<p class="p-2">
				<i>* CHM = Class Highest Marks, CLM = Class Lowest Marks, CAM = Class Average Marks			</i><td>
			</p>
		</section>


	</div>
	
					
							
					
			</td>
		</tr>
		
		
		
		<!-- Extra Space-->
		<tr>
		<td height = 30></td>
		
		</tr>
		
		<!-- Result Comments area-->
		
		
		<tr>
			<td>
				<?php
					$result = fetch_termly_avg_n_sum($RegNo,$Session, $Term, $Arm);

					while($row = mysqli_fetch_array($result))
					{
						$AverageScore = round($row['AVG(examTotal)'],2);
						$TotalScore = $row['SUM(examTotal)'];
					?>
					<!--   ====================     Comment Table  ==============    -->
					<table border = "1" width = "70%" align="center">
						<tr valign = "Top">
							<td><strong> Total Score:</strong></td> <td><strong> <?php echo $TotalScore;?></strong></td><td align="Right"><strong> Average :</strong></td> <td><strong> <?php echo $AverageScore;?></strong></td>
						</tr>
						<tr >
							<td colspan = "2" align="right"><strong> Next term begins:</strong></td> <td  Colspan="2"><strong><?php include '../includes/next_term.php';?></strong></td>
						</tr>
					</table>
					</td></tr>
					<tr><td>
					<?php include '../includes/comment3.php';?></strong>
						
						
													
					<?php
					}
					// Retrieve Number of records returned
					$records = mysqli_num_rows($result);
					?>
					
							
					<tr>
						<td colspan="8" class="style3"><div align="left" class="style12"> </div></td>
					</tr>
							
								
					
			</td>
		</tr>
		
		
		</td>
		</tr>
		
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		
		
						
	
</table>
	
		</body>
		</html>
	            