<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
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
					  					  
                      <tr>
                        <td height="35">Arm:</td>
                        <td><select name="arm" id="arm" value="<?php echo $Arm;?>">
                         <option value= ""></option>
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
                      </tr>
                      <tr>
                        <td height="35">Class:</td>
                        <td><select name="class" id="class" value="<?php echo $Class;?>">
                          <option value=> </option>
						  <option value="JSS 1">JSS 1</option>
						  <option value="JSS 2">JSS 2</option>
						  <option value="JSS 3">JSS 3</option>
						  <option value="SSS 1">SSS 1</option>
						  <option value="SSS 2">SSS 2</option>
						  <option value="SSS 3">SSS 3</option>
                          </select></td>
                      </tr>
                      <tr>
                        <td height="35">House:</td>
                        <td><select name="house" id="house" value="<?php echo $Class;?>">
                          <option value=> </option>
						  <option value="Tiger">Tiger</option>
						  <option value="Stallion">Stallion</option>
						  <option value="Rhinoceros">Rhinoceros</option>
						  <option value="Hipopotamus">Hipopotamus</option>
						  <option value="Dragon">Dragon</option>
						  <option value="Commandant">Commandant</option>
                          </select></td>
                      </tr>
                      
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