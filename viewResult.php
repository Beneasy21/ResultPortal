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


/*if(!isset($_SESSION['username']))
{
	
  // header("Location:Index.php");
}*/

?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META HTTP-EQUIV="refresh" content="900;URL=includes/logout.php">
<link href="style.css" rel="stylesheet" type="text/css" />
<title>View Students</title>

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
	                <table width="60%" height="259" border="1" cellpadding="0" cellspacing="0" align=center>
                      
					  <tr>
                        <td>Class:</td><td><select name="class" id="class" required="required">
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
                        <td>Arm:</td><td><select name="arm" id="arm" required="required">
                          <option value=''> </option>
						  <option value='Gold'>Gold</option>
						  <option value='Silver'>Silver</option>
						  <option value='Diamond'>Diamond</option>
						  <option value='Ruby'>Ruby</option>
						  <option value='Opal'>Opal</option>
						  <option value='Emerald'>Emerald</option>
						  <option value='Topaz'>Topaz</option>
						  <option value='Pearl'>Pearl</option>
						  <option value='Coral'>Coral</option>
						  <option value='Beryl'>Beryl</option>
						  <option value='Gold Ext'>Gold Ext</option>
						  <option value='Silver Ext'>Silver Ext</option>
						  <option value='Diamond Ext'>Diamond Ext</option>
						  <option value='Ruby Ext'>Ruby Ext</option>
						  <option value='Opal Ext'>Opal Ext</option>
						  <option value='Emerald Ext'>Emerald Ext</option>
						  <option value='Topaz Ext'>Topaz Ext</option>
						  <option value='Pearl Ext'>Pearl Ext</option>
						  <option value='Coral Ext'>Coral Ext</option>
						  <option value='Beryl Ext'>Beryl Ext</option>
						  
                          </select></td>
                      </tr>
					  <tr>
							<td>Academic Year:</td><td><select name="academicYear" id="academicYear" required = "required">
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
                          </select>
						<td><label>
					  </tr>
					  <tr>
						<td>Term:</td><td><select name="Term" id="Term" required = "required">
                          <option></option>
                          <option value="First">First</option>
                          <option value="Second">Second</option>
                          <option value = "Third">Third</option>
                          </select></td>
					  </tr>
					  <tr>
					  <td>Subject:</td><td><select name="Subject" id="Subject" required="required">
							  <option></option>
							  <option value ="Animal Husbandary">Animal Husbandary</option>
							  <option value = "Agricutural Science">Agricutural Science</option>
							  <option value = "Arabic">Arabic</option>
							  <option value = "Biology">Biology</option>
							  <option value = "B. Elect">B. Elect</option>
							  <option value = "B. Electronics">B. Electronics</option>
							  <option value = "Basic Science and Technology">Basic Science and Technology</option>
							  <option value = "Business Studies">Business Studies</option>
							  <option value = "C C A">C C A</option>
							  <option value = "CRS / IRS">CRS / IRS</option>
							  <option value = "C R S">C R S</option>
							  <option value = "Catering and Craft Practice">Catering and Craft Practice</option>
							  <option value = "Chemistry">Chemistry</option>
							  <option value = "Civic Education">Civic Education</option>
							  <option value = "Commerce">Commerce</option>
							  <option value = "Computer">Computer</option>
							  <option value = "Data Processing">Data Processing</option>
							  <option value = "Dyeing and Bleaching">Dyeing and Bleaching</option>
							  <option value = "Economics">Economics</option>
							  <option value = "English Language">English Language</option>
							  <option value = "Financial Accounting">Financial Accounting</option>
							  <option value = "Food and Nutrition">Foods and Nutrition</option>
							  <option value = "French">French</option>
							  <option value = "Further Mathematics">Further Mathematics</option>
							  <option value = "Geography">Geography</option>
							  <option value = "Government">Government</option>
							  <option value = "Guidance and Counselling">Guidance and Counselling</option>
							  <option value = "History">History</option>
							  <option value = "Health Education">Health Education</option>
							  <option value = "I R S">I R S</option>
							  <option value = "Insurance">Insurance</option>
							  <option value = "Literature In English">Literature In English</option>
							  <option value = "Mathematics">Mathematics</option>
							  <option value = "Marketing">Marketing</option>
							  <option value = "Music">Music</option>
							  <option value = "National Value Education">National Values Education</option>
							  <option value = "Nigerian Languages">Nigerian Languages</option>
							  <option value = "Office Practice">Office Practice</option>
							  <option value = "Physics">Physics</option>
							  <option value = "Physical Education">Physical Education</option>
							  <option value = "Prevocational Studies">Prevocational Studies</option>
							  <option value = "Religious Studies">Religious Studies</option>
							   <option value = "Religious Studies-CRS">Religious Studies-CRS</option>
							  <option value = "Religious Studies-IRS">Religious Studies-IRS</option>
							  <option value = "Store Keeping">Store Keeping</option>
							  <option value = "Store Management">Store Management</option>
							  <option value = "Technical Drawing">Technical Drawing</option>
							  <option value = "Visual arts">Visual arts</option>
							</td>
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
                      <th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Class</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Arm</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Acad Yr</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Term</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Subject</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>CA 1</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>CA 2</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Exams</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Total</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Grade</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Delete</strong></div></th>
                      
                    </tr>
                    <?php
					$ClassViewed = @$_POST['class'];
					$ArmViewed = @$_POST['arm'];
					$AcademicYear = @$_POST['academicYear'];
					$TermViewed = @$_POST['Term'];
					$SubjectViewed = @$_POST['Subject'];
					
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","comschoolmand");
				if ($con->connect_error)
					{
						die("Could not connect to database: ".$con->connect_error);
					}
// Specify the query to execute
$sql = "SELECT results.*,students.studName FROM results INNER JOIN students ON results.studId = students.studId WHERE 
students.currentClass='".$ClassViewed."' AND results.acadYr = '".$AcademicYear."' AND results.subjects = '".$SubjectViewed."' AND results.term = '".$TermViewed."' AND students.arm='".$ArmViewed."' ORDER BY results.studId DESC" ;

echo $sql;
// Execute query
$result = mysqli_query($con, $sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$ResId=@$row['resId'];
$Name=@$row['studName'];
$Class=@$row['resClass'];
$Arm=@$row['arm'];
$Subject=@$row['subjects'];
$AcademicYr=@$row['acadYr'];
$Term=@$row['term'];
$CA1 = @$row['ca1'];
$CA2 = @$row['ca2'];
$Exams = @$row['exam'];
$Total = @$row['examTotal'];


?>
                    <tr>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Name;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Class;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Arm;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $AcademicYr;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Term;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Subject;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $CA1;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $CA2;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Exams;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Total;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php include "includes/grades.php";?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><a href="DeleteResult.php?resId=<?php echo $ResId;?>">Delete</a></strong></div></td>
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