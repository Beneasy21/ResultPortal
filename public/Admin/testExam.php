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
							  <option>English Language</option>
							  <option>Mathematics</option>
							  <option>Computer Studies</option>
							  <option>Business Studies</option>
							  <option>R N V</option>
							  <option>Cultural & Creative Art</option>
							  <option>Basic Science & Technology</option>
							  <option>Prevocational Studies</option>
							  <option>P H E</option>
							  </select></td>
							
							<td>Class:</td><td><select name="Class" id="Class">
                          <option></option>
                          <option>JSS 1</option>
                          <option>JSS 2</option>
                          <option>JSS 3</option>
						  <option>SSS 1</option>
                          <option>SSS 2</option>
                          <option>SSS 3</option>
                          </select></td>
                      </tr><tr>
                        <td>Class Highest Mark:<input type="text" name="Chm" id="Chm" /></td>
						<td>Class Lowest Mark:<input type ="text" name="Clm" id="Clm"/></td>
						<td>Class Average Mark:<input type ="text" name="Cam" id="Cam"/></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>Arm:</td><td><select name="Arm" id="Arm">
                          <option></option>
                          <option>A</option>
                          <option>B</option>
                          <option>C</option>
						  <option>D</option>
                          <option>E</option>
                          <option>F</option>
                          <option>G</option>
                          <option>H</option>
                          </select></td>
						  <!-- For Term-->
						  <td>Term:</td><td><select name="Term" id="Term">
                          <option></option>
                          <option>1st</option>
                          <option>2nd</option>
                          <option>3rd</option>
                          </select></td>
                      </tr>
                      				
                      <tr>
                        <td>Academic Year:</td><td><input type="text" name="academicYear" id="academicYear" /></td>
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
                      <th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>
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
								$sql = "SELECT  * FROM students WHERE currentClass = '".$CurrentClass."'AND arm = '".$Arm."'";
								// Execute query
								$result = mysqli_query($con,$sql);
								// Loop through each records 
								while($row = mysqli_fetch_array($result))
								{
									
								$StudName=@$row['studName'];
								$resId=@$row['studId'];
								$AdmNo=@$row['studId'];
								//$ca1=$row['ca1'];
								//$ca2=$row['ca2'];
								//$exam=$row['exam'];
							?>
				
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $StudName;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><input type="hidden" name="resId[]" value="<?=$resId?>">
					  <input type="" name="ca1<?=$resId?>" size="2"></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><input type="" name="ca2<?=$resId?>"  size="2"></strong></div></td>
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