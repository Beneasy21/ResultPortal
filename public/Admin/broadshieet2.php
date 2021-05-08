<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Upload Students Results</title>

</head>

<body>
<div id="container">
		<div id="content">
		<div id="left">
			<h1>Welcome </h1>
			
	        <div id="TabbedPanels1" class="TabbedPanels">
	         
	          <div class="TabbedPanelsContentGroup">
	            <div class="TabbedPanelsContent">
	              <form id="form1" name="form1" method="post" action="">
	                <table width="120%"  border="1" cellpadding="0" cellspacing="0" align=center>
                      
                      <tr>
                        
							<td>Class:</td><td><select name="Class" id="Class">
                          <option></option>
                          <option value = "JSS 1">JSS 1</option>
                          <option value = "JSS 2">JSS 2</option>
                          <option value = "JSS 3">JSS 3</option>
						  <option value = "SSS 1">SSS 1</option>
                          <option value = "SSS 2">SSS 2</option>
                          <option value = "JSS 3">SSS 3</option>
                          </select></td>
						  <td>Combination:</td><td><select name="combination" id="combination">
                          <option value = > </option>
                          <option value = "Junior"> Junior </option>
                          <option value = "Science-Maths">Science-Maths</option>
                          <option value = "Science-Technology">Science-Technology</option>
                          <option value = "Humanities">Humanities</option>
						  <option value = "Business Studies">Business Studies</option>
                      </tr>
                      <tr>
                        <td>Arm:</td><td>
						
						<select name="Arm" id="Arm">
						<option value=''> </option>
			  <option value="Gold">Gold</option>
			  <option value="Silver">Silver</option>
			  <option value="Diamond">Diamond</option>
			  <option value="Ruby">Ruby</option>
			  <option value="Opal">Opal</option>
			  <option value="Emerald">Emerald</option>
			  <option value="Topaz">Topaz</option>
			  <option value="Pearl">Pearl</option>
			  <option value="Coral">Coral</option>
			  <option value="Beryl">Beryl</option>
			  <option value="Tasper">Tasper</option>
                          </select></td>
						  <!-- For Term-->
						  <td>Term:</td><td><select name="Term" id="Term">
                          <option></option>
                          <option value="First">First</option>
                          <option value="Second">Second</option>
                          <option value = "Third">Third</option>
                          </select></td>
                      </tr>
                      				
                      <tr>
							<td>Academic Year:</td><td><select name="academicYear" id="academicYear">
                          <option></option>
                          <option value = "16/17">2016/2017</option>
                          <option value = "2018/2019">2018/2019</option>
                          <option value = "2019/2020">2019/2020</option>
                          <option value = "2020/2021">2020/2021</option>
						  <option value = "2021/2022">2021/2022</option>
                          <option value = "2022/2023">2022/2023</option>
                          <option value = "2023/2024">2023/2024</option>
                          <option value = "2024/2025">2024/2025</option>
                          <option value = "2025/2026">2025/2026</option>
                          <option value = "2026/2027">2026/2027</option>
                          <option value = "2027/2028">2027/2028</option>
                          <option value = "2028/2029">2028/2029</option>
                          <option value = "2029/2030">2029/2030</option>
                          </select>
				</td>
						
						<td><label>
                          <input type="submit" name="button" id="button" value="Proceed" />
                        </label></td>
                      </tr>
                    </table>
                  </form>
                </div>
				<table align= "center">
						
						<tr>    
								<?php
								$CurrentClass=@$_POST['Class'];
								$Term=@$_POST['Term'];
								$Combination=@$_POST['combination'];
								$academicYear=@$_POST['academicYear'];
								$Arm=@$_POST['Arm'];
								
								// Establish Connection with Database
								$con = mysqli_connect("localhost","root");
								// Select Database
								mysqli_select_db($con,"comschoolmand");
								// Specify the query to execute
								$sql = "SEt @@group_concat_max_len = 1024*200";
								mysqli_query($con,$sql);
								$sql = "SELECT GROUP_CONCAT(DISTINCT CONCAT('Sum(if(r.subjects = ''',`subjects`,''',r.ca1 + r.ca2,0)) as `',`subjects`,'-CA`,Sum(if(r.subjects = ''',`subjects`,''',r.exam,0)) as `',`subjects`,'-Exam`,Sum(if(r.subjects = ''',`subjects`,''',r.examTotal,0)) as `',`subjects`,'-Total`')) subjects FROM results 
								WHERE results.resClass = '".$CurrentClass."'AND results.arm = '".$Arm."' AND results.term = '".$Term."'  AND results.acadYr = '".$academicYear."'";
								// Execute query
								
								echo $sql;
								$result = mysqli_query($con,$sql);
								$subjectList = mysqli_fetch_array($result);
								$subjects = $subjectList['subjects'];
								
								// Specify the query to execute
								$sql = "SELECT students.studName `Student Name`, $subjects, sum(examTotal) Total, Round(avg(examTotal),2) Average FROM results r inner join students on r.studId = students.studId 
								WHERE r.resClass = '".$CurrentClass."' AND r.arm = '".$Arm."' AND r.term = '".$Term."' AND r.acadYr = '".$academicYear."'
								group by resClass,  r.arm, r.acadYr,r.studId
								";
								echo $sql;
								// Execute query
								$result = mysqli_query($con,$sql);
								// Loop through each records 
								
								
								echo "<td height='120' valign='buttom'><strong>Term: $Term <br>
									  Class: $CurrentClass <br>
									   Arm: $Arm </strong>";?>
						</tr>
				</table>
				
	            <div class="TabbedPanelsContent">
					<form name="resultform" method="post" action= "updateResult.php">
	              <table width="60%" border="1" bordercolor="#85A157" align="center">
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
								echo '<th height="32" bgcolor="#85A157" class="style3" rowspan=2><div align="left" class="style9 style5"><strong>'.$rowname.'</strong></div></th>';
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