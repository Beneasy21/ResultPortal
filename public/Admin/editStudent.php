<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes"><link href="style.css" rel="stylesheet" type="text/css" />
<title>Edit Student</title>
<style type="text/css">
<!--
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }
-->
</style>

<style type="text/css">
<!--
.style11 {color: #000000}
-->
</style>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
	
	<div id="content">
		<div id="left">
			<table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="33" bgcolor="#E3E5DB"><span class="style10 style11">Edit Student</span></td>
              </tr>
              <tr>
                <td><?php
$Id=$_GET['id'];

// Establish Connection with Database
$con = mysqli_connect("localhost","root","","comschoolmand");

// Specify the query to execute
$sql = "select * from students where id='".$Id."'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
	
	$AdmNo=$row['studId'];
	$Name=$row['studName'];
	$Sex=$row['sex'];
	$Class=$row['currentClass'];
	$Arm=$row['arm'];
	$House=$row['house'];
	}
?>
                  <form method="post" action="updateStudent.php?id=<?php echo $Id;?>">
                    <table width="100%" border="0">
                      <tr>
                        <td>Adm No:</td>
                  <td><span id="sprytextfield1">
                          <label>
                          <input type="text" name="AdmNo" id="AdmNo" value="<?php echo $AdmNo;?>" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
					  <tr>
                        <td>Name:</td>
                        <td><span id="sprytextfield2">
                          <label>
                          <input type="text" name="name" id="name" value="<?php echo $Name;?>" />
                          </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td height="35">Sex:</td>
                        <td><select name="sex" id="sex" value="<?php echo $Sex;?>">
                          <option value=></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          </select></td>
                      </tr>
					  	<?php include 'studClass.php';?>
					    <?php include 'acadYear.php';?>
										  
                      <tr>
                        <td height="35">Arm:</td>
                        <td><select name="arm" id="arm" value="<?php echo $Arm;?>">
                         <?php
						$c = New MySQLi('localhost','root','','comschoolmand');
						
						$res = $c->query("SELECT * FROM tblArm")
						?>
						<?php 
							while($rows = $res -> fetch_assoc())
							{
								$ArmId = $rows['armId'];
								$ArmName = $rows['armName'];
								echo"<option value=''></option>";
								echo"<option value='$ArmId'>$ArmName</option>";
							}
						?>
						
						
                          </select></td>
                      </tr>
                     
			     	 <?php include 'studHouse.php'; ?>
			     	 <?php include 'sStatus.php'; ?>
                      
                      <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Update Record" /></td>
                      </tr>
</table>
                  </form>
                    <?php
// Close the connection
mysqli_close($con);
?></td>
              </tr>
		  </table>
			<h1>&nbsp;</h1>
			
	        <p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	
</div>


</body>
</html>