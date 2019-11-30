<?php
session_start();

include_once 'includes/connect.php';
include_once 'includes/functions.php';
 

?> 
<!DOCTYPE HTML>
<html>
<head>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container" align="center" background="#B8DEE9"">
	<header>
	<img src="images/header.png" width="600" height="100">
	</header>
	<Section>
		<div>
		
				<p><marquee><h4>W e l c o m e ! </h4></marquee></p>
		
		</div>

		
			
			
			
			<div>
					<?php /*
					if (login_check($mysqli) == true) 
					{
						echo 'Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '';
			 
						echo 'Do you want to change user? <a href="includes/logout.php">Log out</a>.'; 
					*/
						echo	'<div>
									<h2> what do you Want to do? </h2>
									<span> <a href="toAddComments.php"><img src="images/comment.png" alt="Enter a Comment" width = "100" height="30"></a></span>
									<span><a href="loginn.php"><img src="images/1.png" alt="Enter a Score" width = "100" height="30"></a>
									<p>Return to <a href="index.php">login page</a></p> <a href="includes/logout.php">Log out</a>
								</div>'
					?>
					<?php /*
					} 
					else 
					
					{
						echo '<p>Currently logged ' . $logged . '.</p>';
						
					}*/
			?> 
		</div>
			
			</Section>
			<footer>
			<p> Copyright &copy; 2019 Command secondary school - Ipaja </p>
			</footer>
            
        </div>
    </body>
</html>