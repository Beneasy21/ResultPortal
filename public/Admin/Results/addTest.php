<?php
	include('../../../private/initialize.php');

	$CurrentClass=@$_POST['studClass'];
	$Subject=@$_POST['subjects'];
	$HIC=@$_POST['Chm'];
	$LIC=@$_POST['Clm'];
	$AIC=@$_POST['Cam'];
	$Combin=@$_POST['suBcom'];
	$academicYear=@$_POST['acadYr'];
	$Arm=@$_POST['Arm'];
	$Term = $_POST['Term'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Upload Students Results</title>

</head>
<body>
<div id="container">
		<div id="content">
			<table align= "center">
				<tr>    
					<?php
								
						$subjectName = find_subjectName($Subject);
						$className = find_className($CurrentClass);
						$armName = find_armName($Arm);
						//$combinationName = find_combiName($Combin);
					?>

					<td height='120' valign='buttom'><strong>Suject: <?php echo $subjectName['subName'];?> <br>
						Class: <?php echo $className['classsName'];?> <br>
						Combination: $Combin <br>
						Arm: <?php echo $armName['armName'];?> </strong>";
				</tr>
			</table>
			<div class="TabbedPanelsContent">
				<form name="resultform" method="post" action= "<?php echo url_for('/admin/results/updateTest.php');?>">
	              <table width="60%" border="1" bordercolor="#85A157" align="center">
                    <tr>
                      <th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Test 1</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Test 2</strong></div></th>
                      <th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Exams</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Combination</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>C L M</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>C H M</strong></div></th>
                       <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>C A M</strong></div></th> 
                	</tr>
                    <tr>
				        <?php
							$result = fetch_All_students_by_class_and_arm($CurrentClass, $Arm);

								while($row = mysqli_fetch_array($result))
								{
									
								$StudName=$row['studName'];
								$resId=$row['studId'];
								$AdmNo=$row['studId'];
						?>
				
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $StudName;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><input type="hidden" name="resId[]" value="<?=$resId?>">
					  <input type="" name="ca1<?=$resId?>" size="2" maxlength="2"></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><input type="" name="ca2<?=$resId?>"  size="2" maxlength="2"></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><input type="" name="exam<?=$resId?>" size="2" maxlength="2"></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Combin;?></strong></div></td>
                      
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $LIC;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $HIC;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $AIC;?></strong></div></td>
					 </tr>
                    		<?php
							}
							?>
                    <tr>	
						<td colspan=7 align = "Right">
							<input type="hidden" name="LIC" value="<?=$LIC?>">
							<input type="hidden" name="Combin" value="<?=$Combin?>">
							<input type="hidden" name="HIC" value="<?=$HIC?>">
							<input type="hidden" name="AIC" value="<?=$AIC?>">
							<input type="hidden" name="Arm" value="<?=$Arm?>">
							<input type="hidden" name="Combin" value="<?=$Combin?>">
							<input type="hidden" name="Term" value="<?=$Term?>">
							<input type="hidden" name="Subject" value="<?=$Subject?>">
							<input type="hidden" name="academicYear" value="<?=$academicYear?>">
							<input type="hidden" name="CurrentClass" value="<?=$CurrentClass?>">
							<input type="submit" name="update" id="update" value="Update Results" />
						</td>
					</tr>
					
				  </table>
				</form>
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