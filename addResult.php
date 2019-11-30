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
	                <table width="50%"  border="1" cellpadding="0" cellspacing="0" align=center>
                      
                      <tr>
                        
							<td>Subject:</td><td><select name="Subject" id="Subject">
							  <option></option>
							  <option value ="Animal Husbandary">Animal Husbandary</option>
							  <option value = "Agricutural Science">Agricutural Science</option>
							  <option value = "Arabic">Arabic</option>
							  <option value = "Biology">Biology</option>
							  <option value = "B. Elect">B. Elect</option>
							  <option value = "B. Electronics">B. Electronics</option>
							  <option value = "Basic Science and Technology">Basic Science and Technology</option>
							  <option value = "C R S">C R S</option>
							  <option value = "Catering and Craft Practice">Catering and Craft Practice</option>
							  <option value = "Chemistry">Chemistry</option>
							  <option value = "Civic Education">Civic Education</option>
							  <option value = "Commerce">Commerce</option>
							  <option value = "Computer">Computer</option>
							  <option value = "Data Processing">Data Processing</option>
							  <option value = "Dyeing and Bleaching">Dyeing and Bleaching</option>
							  <option value = "Economics">Economics</option>
							  <option value = "English Language">English Language</option>
							  <option value = "Financial Accounting">Financial Accounting</option>
							  <option value = "Food and Nutrition">Food and Nutrition</option>
							  <option value = "French">French</option>
							  <option value = "Further Mathematics">Further Mathematics</option>
							  <option value = "Geography">Geography</option>
							  <option value = "Government">Government</option>
							  <option value = "Guidance and Counselling">Guidance and Counselling</option>
							  <option value = "History">History</option>
							  <option value = "I R S">I R S</option>
							  <option value = "Insurance">Insurance</option>
							  <option value = "Literature In English">Literature In English</option>
							  <option value = "Mathematics">Mathematics</option>
							  <option value = "Music">Music</option>
							  <option value = "National Value Education">National Values Education</option>
							  <option value = "Nigerian Languages">Nigerian Languages</option>
							  <option value = "Office Practice">Office Practice</option>
							  <option value = "Physics">Physics</option>
							  <option value = "Prevocational Studies">Prevocational Studies</option>
							  <option value = "Store Keeping">Store Keeping</option>
							  <option value = "Store Management">Store Management</option>
							  <option value = "Technical Drawing">Technical Drawing</option>
							  <option value = "Visual arts">Visual arts</option>
							
							
							  </select></td>
							
							<td>Class:</td><td><select name="Class" id="Class">
                          <option></option>
                          <option value = "JSS 1">JSS 1</option>
                          <option value = "JSS 2">JSS 2</option>
                          <option value = "JSS 3">JSS 3</option>
						  <option value = "SSS 1">SSS 1</option>
                          <option value = "SSS 2">SSS 2</option>
                          <option value = "JSS 3">SSS 3</option>
                          </select></td>
                      </tr><tr>
                        <td>Class Highest Mark:<input type="text" name="Chm" id="Chm" /></td>
						<td>Class Lowest Mark:<input type ="text" name="Clm" id="Clm"/></td>
						<td>Class Average Mark:<input type ="text" name="Cam" id="Cam"/></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>Arm:</td><td><select name="Arm" id="Arm">
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
								$Subject=@$_POST['Subject'];
								$HIC=@$_POST['Chm'];
								$LIC=@$_POST['Clm'];
								$AIC=@$_POST['Cam'];
								$academicYear=@$_POST['academicYear'];
								$Arm=@$_POST['Arm'];
								
								echo "<td height='120' valign='buttom'><strong>Suject: $Subject <br>
									  Class: $CurrentClass <br>
									   Arm: $Arm </strong>";?>
						</tr>
				</table>
				
	            <div class="TabbedPanelsContent">
					<form name="resultform" method="post" action= "updateResult.php">
	              <table width="60%" border="1" bordercolor="#85A157" align="center">
                    <tr>
                      <th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Adm No</strong></div></th>
                      <th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>
                      <th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Subject</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Test 1</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Test 2</strong></div></th>
                      <th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Exams</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>C L M</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>C H M</strong></div></th>
                       <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>C A M</strong></div></th>
                       
                    </tr>

                    <tr>
					
					        <?php
								// Establish Connection with Database
								$con = mysqli_connect("localhost","root");
								// Select Database
								mysqli_select_db($con,"comschoolmand");

								$CurrentClass=@$_POST['Class'];
								$Subject=@$_POST['Subject'];
								$HIC=@$_POST['Chm'];
								$LIC=@$_POST['Clm'];
								$AIC=@$_POST['Cam'];
								$academicYear=@$_POST['academicYear'];
								$Arm=@$_POST['Arm'];
								$Term=@$_POST['Term'];

								// Specify the query to execute
								$sql = "SELECT  results.*, studName FROM results inner join students on results.studId = students.studId WHERE results.resClass = '".$CurrentClass."'AND results.arm = '".$Arm."' AND results.term = '".$Term."' AND results.subject = '".$Subject."'AND results.acadYr = '".$academicYear."'";
								// Execute query
								$result = mysqli_query($con,$sql);
								// Loop through each records 
								while($row = mysqli_fetch_array($result))
								{
									
									
$resId = $row['resId'];
$AdmNo = $row['studId'];
$acadYr = $row['acadYr'];
$term = $row['term'];
$resClass = $row['resClass'];
$arm = $row['resClass'];
$combination = $row['combination'];
$Subject = $row['subject'];
$ca1=$row['ca1'];
$ca2=$row['ca2'];
$exam=$row['exam'];
$examTotal = $row['examTotal'];
	
								$studName=@$row['studName'];
								//$resId=@$row['studId'];
								//$AdmNo=@$row['studId'];
								//$ca1=$row['ca1'];
								//$ca2=$row['ca2'];
								//$exam=$row['exam'];
							?>
				
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $AdmNo;?></strong><input type="hidden" name="AdmNo<?=$resId?>" value="<?=$AdmNo?>"></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $studName;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><input type="" name="Subject<?=$resId?>" size="2" value="<?=$Subject?>"></strong></div></td>
					  <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><input type="hidden" name="resId[]" value="<?=$resId?>">
					  <input type="" name="ca1<?=$resId?>" size="2" value="<?=$ca1?>"></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><input type="" name="ca2<?=$resId?>"  size="2" value="<?=$ca2?>"></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><input type="" name="exam<?=$resId?>" size="2"></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $LIC;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $HIC;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $AIC;?></strong></div></td>
					 </tr>
					
                    <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                    <tr>	
						<td colspan=7 align = "Right">
							
							<input type="hidden" name="LIC" value="<?=$LIC?>">
							<input type="hidden" name="HIC" value="<?=$HIC?>">
							<input type="hidden" name="AIC" value="<?=$AIC?>">
							<input type="hidden" name="Arm" value="<?=$Arm?>">
							<input type="hidden" name="Term" value="<?=$Term?>">
							<input type="hidden" name="Subject" value="<?=$Subject?>">
							<input type="hidden" name="academicYear" value="<?=$academicYear?>">
							<input type="hidden" name="CurrentClass" value="<?=$CurrentClass?>">
							<input type="submit" name="update" id="update" value="Update Results" /></td>
					</tr>
					<tr>
						<td colspan = "4"> <a href = "addTest.php">Enter Test scores</a></td>
						<td colspan="5"> <a href = "addResult.php">Enter Exam Scores</a></td>
						
					</tr>
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