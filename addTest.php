/<?php
/* Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginn.php");
    exit;
}
*/?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Upload Students Results</title>

</head>

<body>
<div id="container">
		<div id="content">
		
				<table align= "center">
						
						<tr>    
								<?php
								$CurrentClass=@$_POST['Class'];
								$Subject=@$_POST['Subject'];
								$HIC=@$_POST['Chm'];
								$LIC=@$_POST['Clm'];
								$AIC=@$_POST['Cam'];
								$Combin=@$_POST['suBcomb'];
								$academicYear=@$_POST['acadYr'];
								$Arm=@$_POST['Arm'];
								
								include "includes/getSubject.php";
								include "includes/getArm.php";
								include "includes/getClass.php";
															
								echo "
								
								<td height='120' valign='buttom'><strong>Suject: $SubjectName <br>
									  Class: $ClassName <br>
									  Combination: $Combin <br>
									   Arm: $ArmName </strong>";?>
						</tr>
				</table>
				
	            <div class="TabbedPanelsContent">
					<form name="resultform" method="post" action= "updateTest.php">
	              <table width="60%" border="1" bordercolor="#85A157" align="center">
                    
					
					        <?php
								// Establish Connection with Database
								$con = mysqli_connect("localhost","root");
								// Select Database
								mysqli_select_db($con,"comschoolmand");

								$CurrentClass=$_POST['Class'];
								$Subject=$_POST['Subject'];
								$HIC=$_POST['Chm'];
								$LIC=$_POST['Clm'];
								$AIC=$_POST['Cam'];
								$Combin=$_POST['suBcomb'];
								$academicYear=$_POST['acadYr'];
								$Arm=$_POST['Arm'];
								$Term=$_POST['Term'];

								// Specify the query to execute
								$sql = "SELECT  * FROM students 
								WHERE currentClass = '".$CurrentClass."'AND arm = '".$Arm."' AND acadYr = '".$academicYear."'
								ORDER BY studName ASC ";
								// Execute query
								$result = mysqli_query($con,$sql);
								// Loop through each records 
								?>
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
								while($row = mysqli_fetch_array($result))
								{
									
								$StudName=$row['studName'];
								$resId=$row['studId'];
								$AdmNo=$row['studId'];
								//$ca1=$row['ca1'];
								//$ca2=$row['ca2'];
								//$exam=$row['exam'];
							?>
				
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $StudName;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><input type="hidden" name="resId[]" value="<?=$resId?>">
					  <input type="" name="ca1<?=$resId?>" size="2" maxlength = "2"></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><input type="" name="ca2<?=$resId?>"  size="2" maxlength = "2"></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><input type="" name="exam<?=$resId?>" size="2" maxlength = "2"></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Combin;?></strong></div></td>
                      
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
							<input type="hidden" name="Combin" value="<?=$Combin?>">
							<input type="hidden" name="HIC" value="<?=$HIC?>">
							<input type="hidden" name="AIC" value="<?=$AIC?>">
							<input type="hidden" name="Arm" value="<?=$Arm?>">
							<input type="hidden" name="Combin" value="<?=$Combin?>">
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