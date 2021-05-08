<html>
<head>
</head>
<body>
<?php 
// Establish Connection with Database
					$dbconnn = mysqli_connect("localhost","root","","comschoolmand");
										
					
					// Specify the query to execute
					$sqll = "select * FROM nextterm WHERE  acadYr = '".$Session."' AND vterm = '3'";
					// Execute query
					
					$results1 = mysqli_query($dbconnn,$sqll);
					// Loop through each records 
					while($row = mysqli_fetch_array($results1))
					{
					$NextTermBegins=$row['explanation'];
							
					
					?>

					<?php echo $NextTermBegins;	?>
						
						
					<?php
					}
					// Retrieve Number of records returned
					$records = mysqli_num_rows($results1);
					?>
					
					
						
									
								
					<?php
						// Close the connection
						mysqli_close($dbconnn);
					?>		
					
					

</body>
</html>
