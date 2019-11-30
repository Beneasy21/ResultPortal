<!DOCTYPE html >
<html lang = "en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Edit Class Teacher's Comment</title>

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
			<table width="60%" height="209" border="0" cellpadding="0" cellspacing="0" align="Center">
              <tr>
                <td height="33" bgcolor="#E3E5DB"><span class="style10 style11">Enter Class Teacher's Comment</span></td>
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
	}
?>
                  <form method="post" action="enterComment.php?id=<?php echo $Id;?>">
                    <table width="70%" border="0" align="center">
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
                      <?php include 'acadYear.php';?> 					  
                      <?php include 'term.php';?> 					  
                      
                      <tr>
                        <td height="35">Class Teacher's Comment:</td>
                        <td><select name="HouseParentComment" id="HouseParentComment">
                          <option></option>
                          <option value = "A Reliable student">A Reliable student</option>
                          <option value = "The Student is Cheerful">The Student is Cheerful</option>
                          <option value = "A Cheerful student">A Cheerful student</option>
                          <option value = "An Obedient Student">An Obedient Student</option>
                          <option value = "The Student is Obidient">The Student is Obidient</option>
						  <option value = "Friendly with Others students">Friendly with Other Students</option>
                          <option value = "A Hard Working Student">A Hard Working Student</option>
                          <option value = "A truant in the Class">A truant in the Class</option>
                          <option value = "Very Playful">Very Playful</option>
                          <option value = "A Reserved student">A Reserved student</option>
                          <option value = "Co-operate With Others students">Co-operate With Other students</option>
                          <option value = "A Careless Student">A Careless Student</option>
                          <option value = "A Careful Student">A Careful Student</option>
                          <option value = "Very Restless">Very Restless</option>
                          <option value = "Never agree with Others">Never agree with Others</option>
                          <option value = "A Lazy Student">A Lazy Student</option>
                          <option value = "A Disobedient Student">A Disobedient Student</option>
                          <option value = "Relate Well with Others">Relate Well with Others</option>
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