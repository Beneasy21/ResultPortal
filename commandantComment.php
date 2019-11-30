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
			<table width="40%" height="209" border="0" cellpadding="0" cellspacing="0" align="center">
              <tr>
                <td height="33" bgcolor="#E3E5DB"><span class="style10 style11">Commandant's Comment</span></td>
              </tr>
              <tr>
                <td><?php
$Id=$_GET['studId'];
//$Id=$_POST['studId'];
$Term=$_POST['Term'];
$Session=$_POST['acadYr'];

// Establish Connection with Database
$con = mysqli_connect("localhost","root","","comschoolmand");

// Specify the query to execute
$sql = "select comments.*,students.studName FROM comments inner join students on comments.studId = students.studId where comments.studId='".$Id."' AND acadYr = '".$Session."' AND term = '".$Term."'";
// Execute query

$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
	
	//$AdmNo=$row['comments.studId'];
	$Name=$row['studName'];
	$AcademicYear=$row['acadYr'];
	$Term=$row['term'];
}
?>
                  <form method="post" action="updateCommandantComment.php?studId=<?php echo $Id;?>">
                    <table width="50%" border="0" align="center">
                      <tr>
                        <td>Adm No:</td><td><input name="AdmNo" id="AdmNo" value = "<?php echo $Id;?>"></td>
                      </tr>
					  
                      <tr>
                        <td height="35">Session:</td> <td><input name="acadYr" id="acadYr" value = "<?php echo $Session;?>"></td>
                      </tr>
					  					  
                      <tr>
                        <td height="35">Term:</td>  <td><input name="term" id="term" value = "<?php echo $Term;?>"></td>
                      </tr>
					  <tr>
                        <td height="35">Commandant's Comment:</td>  <td><input name="commandantComment" id="commandantComment" ></td>
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