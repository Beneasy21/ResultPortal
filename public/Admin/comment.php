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

<html>
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
									<td align="center"><a href="toAddComments.php">Class Teacher</td>
									<td align="center"><a href="viewStudent.php"><img src="images/viewStud.png" alt="View Students" width = "80" height="30"></a></td>
									<td align="center"><a href="AddStudent.html">Enter Comments</a></td>
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