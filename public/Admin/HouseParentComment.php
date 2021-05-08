<!DOCTYPE html >
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>House Parent Comment</title>
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
                <td height="33" bgcolor="#E3E5DB"><span class="style10 style11">House Master's Comment</span></td>
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
$sql = "
SELECT c.commId,s.studName, c.acadYr, c.term, a.acadYrName, t.termName, c.classTeacher, c.houseParent, c.commandant
FROM comments c 
INNER JOIN students s ON c.studId = s.studId
INNER JOIN tblacadyr a ON c.acadYr = a.acadYrId
INNER JOIN tblterm t ON c.term = t.termId
where c.studId='".$Id."' AND c.acadYr = '".$Session."' AND c.term = '".$Term."'";
// Execute query

$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
	
	//$AdmNo=$row['comments.studId'];
	$Name=@$row['studName'];
	$AcademicYear=@$row['acadYr'];
	$Term=@$row['term'];
	
	
}
?>
                  <form method="post" action="updateComment.php?studId=<?php echo $Id;?>">
                    <table width="50%" border="0" align="center">
                      <tr>
                        <td>Adm No:</td><td><input name="AdmNo" id="AdmNo" value = "<?php echo $Id;?>"></td>
                      </tr>
					  <tr>
                        <td>Name:</td> <td><input name="name" id="name" value = "<?php echo $Name;?>"></td>
                      </tr>
                      
                        <input type="hidden" name="acadYr" id="acadYr" value = "<?php echo $AcademicYear;?>">
                        <input type="Hidden" name="term" id="term" value = "<?php echo $Term;?>">
                      
                      <tr>
                        <td height="35">House Parent's Comment:</td>
                        <td><select name="HouseParentComment" id="HouseParentComment">
                          <option></option>
                          <option value = "Reliable">Reliable</option>
                          <option value = "Cheerful">Cheerful</option>
                          <option value = "Obedient">Obedient</option>
						  <option value = "Loyal">Loyal</option>
                          <option value = "Friendly with Others">Friendly with Others</option>
                          <option value = "Hard Working">Hard Working</option>
                          <option value = "Needs Counselling">Needs Counselling</option>
                          <option value = "Playful">Playful</option>
                          <option value = "Reserved">Reserved</option>
                          <option value = "Co-operate With Others">Co-operate With Others</option>
                          <option value = "Careful">Careful</option>
                          <option value = "Restless">Restless</option>
                          <option value = "Never agree with Others">Never agree with Others</option>
                          <option value = "Lazy">Lazy</option>
                          <option value = "Disobedient">Disobedient</option>
                          <option value = "Careless">Careless</option>
                          <option value = "Love Others">Love Others</option>
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