<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Correct Results</title>
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
                <td height="33" bgcolor="#E3E5DB"><span class="style10 style11">Correct A result</span></td>
              </tr>
              <tr>
                <td><?php
$Id=$_GET['id'];

// Establish Connection with Database
$con = mysqli_connect("localhost","root","","comschoolmand");

// Specify the query to execute
$sql = "SELECT students.studName, r.studId, r.acadYr, r.term, r.resClass, r.arm, r.subjects, r.ca1, r.ca2,r.exam, r.examTotal, r.chm, r.clm, r.cam  FROM results r INNER JOIN students ON r.studId = students.studId where resId='".$Id."'";
// Execute query

$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
	
$StuId=@$row['resId'];
$AdmNo=@$row['studId'];
$Name=@$row['studName'];
$AcadYear=@$row['acadYr'];
$Term=@$row['term'];
$Class=@$row['resClass'];
$Arm=@$row['arm'];
$Subjects=@$row['subjects'];
$CA1=@$row['ca1'];
$CA2=@$row['ca2'];
$Exams=@$row['exam'];
$ExamTotal=@$row['examTotal'];
$CHM=@$row['chm'];
$CLM=@$row['clm'];
$CAM=@$row['cam'];

	}
?>
                  <form method="post" action="updateIRS.php?id=<?php echo $Id;?>">
                    <table width="100%" border="0">
                      <tr>
                        <td>Adm No:</td><td><input type="text" name="AdmNo" id="AdmNo" value="<?php echo $AdmNo;?>"/></td>
                      </tr>
					  <tr>
                        <td>Name:</td><td><input type="text" name="name" id="name" value="<?php echo $Name;?>" /></td>
                      </tr>
                      <tr>
                        <td>Subject:</td><td><SELECT name="sub" id="sub">
							<OPTION><?php echo $Subjects;?></OPTION>
							<OPTION>I.R.S</OPTION>
							</SELECT>
						</td>
                      </tr>
                      <tr>
                        <td>CA 1:</td><td><input type="text" name="ca1" id="ca1" value="<?php echo $CA1;?>" /></td>
                      </tr>
                      <tr>
                        <td>CA 2:</td><td><input type="text" name="ca2" id="ca2" value="<?php echo $CA2;?>" /></td>
                      </tr>
                      <tr>
                        <td>Exams:</td><td><input type="text" name="exams" id="exams" value="<?php echo $Exams;?>" /></td>
                      </tr>
                      <tr>
                        <td>Total:</td><td><input type="text" name="total" id="total" value="<?php echo $ExamTotal;?>" /></td>
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