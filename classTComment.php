<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
                    <table width="60%" border="0" align="center">
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
                        <td height="35">Session:</td>
                        <td><select name="acadYr" id="acadYr">
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
                          </select></td>
                      </tr>
					  					  
                      <tr>
                        <td height="35">Term:</td>
                        <td><select name="Term" id="Term">
                          <option></option>
                          <option value="First">First</option>
                          <option value="Second">Second</option>
                          <option value = "Third">Third</option>
                          </select></td>
                      </tr>
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