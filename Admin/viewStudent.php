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
<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
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
                	   
					   <?php include 'studClass.php';?>
					   <?php include 'schArms.php';?>
					   <?php include 'acadYear.php';?>
						
						
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
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Sex</strong></div></th>
                      <th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Class</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Arm</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>House</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Session</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Status</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Date of B</strong></div></th>
					  
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Edit</strong></div></th>
                      
                    </tr>
                    <?php
					$ClassViewed = @$_POST['studClass'];
					$ArmViewed = @$_POST['Arm'];
					$AcadYrViewed = @$_POST['acadYr'];
					
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","comschoolmand");
				if ($con->connect_error)
					{
						die("Could not connect to database: ".$con->connect_error);
					}
// Specify the query to execute
$sql = "
SELECT s.id, s.studId, s.studName, s.sex, tc.classsName, am.armName, 
	 ay.acadYrName, s.house, s.studStatus,s.studDOB 
FROM students s 
INNER JOIN tblClass tc ON tc.classsId = s.currentClass
INNER JOIN tblarm am ON am.armId = s.arm 
INNER JOIN tblacadYr ay ON ay.AcadYrId = s.acadYr 


WHERE s.currentClass = '".$ClassViewed."' AND s.arm = '".$ArmViewed."' AND s.acadYr = '".$AcadYrViewed."' ORDER BY s.studName ASC";
// Execute query
$result = mysqli_query($con, $sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$StuId=@$row['id'];
$AdmNo=@$row['studId'];
$Name=@$row['studName'];
$Sex=@$row['sex'];
$Class=@$row['classsName'];
$Arm=@$row['armName'];
$House=@$row['house'];
$AcademicYr = @$row['acadYrName'];
$StudStatus = @$row['studStatus'];
$DOB = @$row['studDOB'];

?>
                    <tr>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $AdmNo;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Name;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Sex;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Class;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Arm;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $House;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $AcademicYr;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $StudStatus;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><?php echo $DOB;?></strong></div></td>
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><a href="EditStudent.php?id=<?php echo $StuId;?>">Edit</a></strong></div></td>
                    </tr>
					
                    <?php
}
echo $sql;
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