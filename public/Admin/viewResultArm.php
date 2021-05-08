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

<link href="style.css" rel="stylesheet" type="text/css" />
<title>View Result by Arm</title>
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
	                <table width="60%" height="260" border="1" cellpadding="0" cellspacing="0" align=center>
						
					  <?php include 'studClass.php'?>
                      <?php include 'schArms.php'?>
                      <?php include 'acadYear.php'?>
                      <?php include 'term.php'?>
                      <?php include 'schSubjects.php'?>
					  
                      <tr>
					<td><label>
                          <input type="submit" name="button" id="button" value="Submit" />
                        </label></td>
                      </tr>
                    </table>
                  </form>
                </div>
				
	            <div class="TabbedPanelsContent">
				<form method="post">
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
					$ClassViewed = @$_POST['studClass'];
					$ArmViewed = @$_POST['Arm'];
					$AcademicYear = @$_POST['acadYr'];
					$TermViewed = @$_POST['Term'];
					$SubjectViewed = @$_POST['Subject'];

// Establish Connection with Database
$con = mysqli_connect("localhost","root","","comschoolmand");
				if ($con->connect_error)
					{
						die("Could not connect to database: ".$con->connect_error);
					}

					if(@$_POST["submit"]=="Delete")
					{
						$resIds = $_POST["resId"];
						var_dump($resIds);
						$sql = "Delete FROM results where resId in (". implode(",", $resIds). ")" ;
						mysqli_query($con, $sql);
					}

// Specify the query to execute
$sql = "SELECT r.*,s.studName,tay.acadYrName, t.termName, tc.classsName, ta.armName,ts.subName
FROM results r
INNER JOIN students s ON r.studId = s.studId 
INNER JOIN tblacadYr tay ON r.acadYr = tay.AcadYrId 
INNER JOIN tblterm t ON t.termId = r.term
INNER JOIN tblClass tc ON tc.classsId = r.resClass
INNER JOIN tblSubjects ts ON ts.subId = r.subjects
INNER JOIN tblarm ta ON ta.armId = r.arm
WHERE
r.resClass='".$ClassViewed."'  AND r.acadYr = '".$AcademicYear."' AND r.term = '".$TermViewed."' AND r.subjects = '".$SubjectViewed."' AND r.arm='".$ArmViewed."' 
ORDER BY r.studId DESC" ;

echo $sql;
// Execute query
$result = mysqli_query($con, $sql);
// Loop through each records
while($row = mysqli_fetch_array($result))
{
$ResId=@$row['resId'];
$Name=@$row['studName'];
$Class=@$row['classsName'];
$Arm=@$row['armName'];
$Subject=@$row['subName'];
$AcademicYr=@$row['acadYrName'];
$Term=@$row['termName'];
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
                      <td bgcolor="#B8DEE9" class="style3"><div align="left" class="style9 style6"><strong><input type="checkbox" name="resId[]" value="<?php echo $ResId;?>"></strong></div></td>
                    </tr>

    <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                    <tr>
                      <td colspan="8" class="style3">
					  	<div align="left" class="style12">
							<input type="submit" value="Delete" name="submit">
							<input type="hidden" name="class" value="<?=$ClassViewed?>"/>
							<input type="submit" name="arm" value="<?=$ArmViewed?>"/>
							<input type="hidden" name="academicYear" value="<?=$AcademicYear?>"/>
							<input type="hidden" name="Term" value="<?=$TermViewed?>"/>
							<input type="submit" name="Subject" value="<?=$SubjectViewed?>"/>
					  	</div>
					  </td>
                    </tr>
                    <?php
				// Close the connection
				mysqli_close($con);
?>
                  </table>
				  </form>
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
