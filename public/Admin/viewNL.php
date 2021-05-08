<?php
include_once 'includes/connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) 
{
    $logged = 'in';
} else {
    $logged = 'out';
}


if(!isset($_SESSION['username']))
{
	
   header("Location:Index.php");
}

?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META HTTP-EQUIV="refresh" content="900;URL=includes/logout.php">
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Results With errors</title>

</head>

<body>
<div id="container">
	
	<div id="content">
		<div id="left">
			<h1>Welcome </h1>
			<?php
				if (login_check($mysqli) == true) 
				{
					echo 'Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '';
		 
					echo 'Do you want to change user? <a href="includes/logout.php">Log out</a>.';
				
				} 
				else 
				
				{
						echo '<p>Currently logged ' . $logged . '.</p>';
					
				}
			?>   		
						</td>
                      </tr>
	        <div id="TabbedPanels1" class="TabbedPanels">
	         
	          <div class="TabbedPanelsContentGroup">
	            <div class="TabbedPanelsContent">
	              <form id="form1" name="form1" method="post" action="">
	                <table width="20%"  border="1" cellpadding="0" cellspacing="0" align=center>
                      
					  <tr>
              <td>Class:</td><td><select name="class" id="class">
              <option value=''> </option>
						  <option value='JSS 1'>JSS 1</option>
						  <option value='JSS 2'>JSS 2</option>
						  <option value='JSS 3'>JSS 3</option>
						  <option value='SSS 1'>SSS 1</option>
						  <option value='SSS 2'>SSS 2</option>
						  <option value='SSS 3'>SSS 3</option>
              </select></td>
            </tr>
            <tr>
              <td>Subject:</td><td><select name="sub" id="sub">
              <option value=''> </option>
              <option>Hausa</option>
                <option>Igbo</option>
                <option>Yoruba</option>
              </select></td>
            </tr>
            <tr>
					   <td><label>
                          <input type="submit" name="button" id="button" value="Submit" />
                        </label></td>
                      </tr>
                    </table>
                  </form>
                </div>
	            <div class="TabbedPanelsContent">
	              <table width="100%" border="1" bordercolor="#85A157" >
                    <tr>
                      <th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Adm No</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Acad Year</strong></div></th>
                      <th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Term</strong></div></th>
                      <th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Class</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Arm</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Subject</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>CA1</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>CA2</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Exam</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Exam Total</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>CHM</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>CLM</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>CAM</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Edit</strong></div></th>
                      
                    </tr>
                    <?php
					$ClassViewed = @$_POST['class'];
					$SubjectViewed = @$_POST['sub'];
					
					
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","comschoolmand");
				if ($con->connect_error)
					{
						die("Could not connect to database: ".$con->connect_error);
					}
// Specify the query to execute
$sql = 	"SELECT students.studName, r.resId, r.studId, r.acadYr, r.term, r.resClass, r.arm, r.subjects, r.ca1, r.ca2,r.exam, r.examTotal, r.chm, r.clm, r.cam  FROM results r INNER JOIN students ON r.studId = students.studId
								WHERE term='First' AND subjects = 'Nigerian Languages' AND r.resClass = '".$ClassViewed."' OR term='Second' AND subjects = '".$SubjectViewed."' AND r.resClass = '".$ClassViewed."' ORDER BY studId ASC";
// Execute query

echo $sql;
$result = mysqli_query($con, $sql);
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

?>
                    <tr>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $AdmNo;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Name;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $AcadYear;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Term;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Class;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Arm;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Subjects;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $CA1;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $CA2;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Exams;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $ExamTotal;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $CHM;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $CLM;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $CAM;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><a href="editNL.php?id=<?php echo $StuId;?>">Edit</a></strong></div></td>
                    </tr>
					
                    <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                    <tr>
                      <td colspan="8" class="style3"><div align="left" class="style12"> </div></td>
                    </tr>
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
		
		<div id="footerline"></div>
	</div>
	
	
</div>

</body>
</html>