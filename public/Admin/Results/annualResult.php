<?php
session_start();
require_once('../../../private/initialize.php');

include(SHARED_PATH . '/resultHeader.php');

?>

<?php

	//tide
	$RegNo = h($_POST['RegNo']); //Storing Reg Numberin $regNo variable.
	$Session = h($_POST["acadYr"]);//Storing Acad Year in $Session variable
	//$Armm = h($_POST["Arm"]); //Storing Term in $Term variable.
	//$Class = h($_POST["studClass"]); //Storing Class in $Class variable.

	$results = fetch_one_student($RegNo);
	$session = find_acadYrName($Session);
	$studClass = fetch_class_from_result($RegNo,$Session);
		
	while($row = mysqli_fetch_array($results))
		{
	
			$Name=$row['studName'];
			$Sex=$row['sex'];
			$AdmNo = $row["studId"];			
			//$Class = $row["classsName"];
			$Arm = $row["armName"];
			//$acadYrName = $row['acadYrName'];
		}
	?>
					
	
	<table  width=1300 align=center >
		<tr>
			<td height="150">
				<img align="center" width="1300" Height="150"src="<?php echo url_for('/images/Headpix.png');?>" >
			</td>
		</tr>
		<tr>
			<td height="150">

				<h2><table align=center border=1 width="60%">
					<tr><td width = "20%" align="left">Name:</td><td bgcolor="#B8DEE9" class="style3" ><div align="left" class="style9 style6"><strong><?php echo $Name;?></strong></div></td>
					    <td width = "20%" align="left">Arm:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Arm;?></strong></div></td></tr>
					<tr><td width = "20%" align="left">Session:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php  echo $session['acadYrName'];?></strong></div></td>
						<td width = "20%" align="left">Class:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $studClass['classsName'];?></strong></div></td></tr>
					<tr><td width = "15%" align="left">Adm No:</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $AdmNo;?></strong></div></td>
					<td width = "15%" align="left">Sex</td><td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Sex;?></strong></div></td></tr>
				</table></h2>
				
				<?php
					//}
				
				//	$result = fetch_annual_result($RegNo, $Session);
				//while($row = mysqli_fetch_assoc($result)) { $result_array[] = $row; }
					?>
			</td>
		</tr>
		<tr>
		<?php
		$result = fetch_annual_result($RegNo, $Session);
				while($row = mysqli_fetch_assoc($result)) { $result_array[] = $row; }
				?>
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
				<td><font size="5"><strong><?= $row["subName"] ?></strong></font></td>
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
				<td><strong><font size="5"><?php require('../../../private/gradesAnnual.php');?></strong></font></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
			</td>
		</tr>
		<tr>
				<td height="30"></td>
		</tr>
		<!-- ======================COMMENTS AREA ================     -->
		<tr>
			<td>
				<?php

					$result = fetch_annual_avg_n_sum($RegNo,$Session);
					
					while($row = mysqli_fetch_array($result))
					{
					$AverageScore = $row['AVG(examTotal)'];
					$TotalScore = $row['SUM(examTotal)'];
					
					?>
					<!--   ====================     Comment Table  ==============    -->
					<h2><table border = "1" width = "70%" height='40'align="center">
						
						<tr >
							<td align="right"> <font size=5> <strong> Annual Total Score:</strong></td> <td  ><strong><?php echo $TotalScore;?></strong></font></td>
							<td align="right"><strong> <font size=5> Annual Average Score:</strong></td> <td  ><strong><?php echo round($AverageScore,2);?></strong></font></td>
						</tr>
						<tr >
							<td colspan = "2" align="right"><strong> Next term begins:</strong></td> <td  Colspan="2"><strong><?php require(SHARED_PATH . '/annualcomment2.php');?></strong></td>
						</tr>
					</table></h2>
					</td></tr>
					<tr><td><font size=5>
					<?php require(SHARED_PATH . '/annualcomment3.php');?></strong></font>
												
					<?php  	}  ?>
						
					<tr>
						<td colspan="8" class="style3"><div align="left" class="style12"> </div></td>
					</tr>
					
			</td>
		</tr>
		
		</table>
		
		</body>
		</html>
	            