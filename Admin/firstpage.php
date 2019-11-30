<?php
include_once 'includes/connect.php';
include_once 'includes/functions.php';
 
sec_session_start();

$t=time();
                      if (isset($_SESSION['logged']) && ($t - $_SESSION['logged'] > 60)) {
                      session_destroy();
                      session_unset();
                      header('location: Index.php');
                      }else {$_SESSION['logged'] = time();}   
 
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

<!DOCTYPE>
<html lang="en">
<head>
</head>
<body>
	<table width="600" align="center" height="350" bgcolor="#B8DEE9">
	    <tr>
			<td colspan="3">
			<img src="images/header.png" width="600" height="100">
			</td>
		</tr>
		<tr>
			<td height ="" colspan="3" bgcolor="green">
			<p><marquee><h4><font color = "White" >W e l c o m e !</font></h4></marquee></p>
			</td>
		</tr>
		<tr>
		<td colspan = "3"> <?php
				if (login_check($mysqli) == true) 
				{
					echo 'Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '';
		 
					echo 'Do you want to change user? <a href="includes/logout.php">Log out</a>.';
				
					echo	'<table border="1" align="center">
								<tr><td colspan = "3" align="center">What do you want to do? </td></tr>
								<tr>
									<td align="center"><a href="tobroadsheet.php">Print Termly Broadsheet</td>
									<td align="center"><a href="viewStudent.php"><img src="images/viewStud.png" alt="View Students" width = "80" height="30"></a></td>
									<td align="center"><a href="toAddComments.php">Enter Comments</a></td>
								</tr>
								<tr>
									<td align="center"><a href="login.php"><img src="images/1.png" alt="Enter a Score" width = "80" height="30"></a></td>
									<td align="center"><a href="secondPage.php"><img src="images/2.png" alt="Print Results" width = "80" height="30"></a></td>
									<td align="center"><a href="AddStudent.php"><img src="images/3.png" alt="Add a Student" width = "80" height="30"></a></td>
								</tr>
								<tr>
									<td align="center"><a href="viewResAbove.php">View Result with Errors</a></td>
									<td align="center"><a href="viewIRS.php">Edit IRS/CRS</a></td>
									<td align="center"><a href="viewNL.php">Edit Nig Language</a></td>
								</tr>
								<tr>
									<td align="center"><a href="toannualBroadsheetReal.php">Print Annual Broadsheet</a></td>
									<td align="center"><a href="viewcomment.php">View Comments</a></td>
									<td align="center"><a href="viewResult.php">View Results</a></td>
									
								</tr>
								<tr>
									<td align="center" colspan="3"> <p>Return to <a href="index.php">login page</a></p> <a href="includes/logout.php">Log out</a></td>
								</tr>
							
							</table>'
				?>
				<?php
				} 
				else 
				
				{
						echo '<p>Currently logged ' . $logged . '.</p>';
					
				}
		?>   		</td>
		</tr>
		
			
			</table>
			
            
        </table>
            
        

</body>
</html>