<html>
<head>
</head>
<body>
<?php 

// Establish Connection with Database
					$dbconnn = mysqli_connect("localhost","root","","comschoolmand");
										
					
					// Specify the query to execute
					$sqll = "select * FROM comments WHERE studId = '".$RegNo."' AND acadYr = '".$Session."' AND term = '".$Term."'";
					// Execute query
					$results1 = mysqli_query($dbconnn,$sqll);
					// Loop through each records 
					while($row = mysqli_fetch_array($results1))
					{
					$ClassTeacherComment=$row['classTeacher'];
					$HouseParentComment =$row['houseParent'];
					$Comm =$row['commandant'];
					$Joiner = "  Yet,  ";
					
					if($Comm != NULL)
						{
							$Commandant =$Joiner . $Comm ;
						}
					else
						{
							$Commandant = "";
						}
							
					
						
					
					
					?>
					<table border="1" width="100%"bordercolor="#85A157" align=center>	
					
					<tr bgcolor="#B8DEE9" class="style3">	
					<td><strong>Class Teacher's Remarks</strong></td><td><strong><?php echo $ClassTeacherComment ?> </strong></td>
					</tr>
					<tr bgcolor="#B8DEE9" class="style3">	
					<td><strong>House Parent's Remarks</strong></td><td><strong><?php echo $HouseParentComment ?></strong></td>
					</tr>
					<tr bgcolor="#B8DEE9" class="style3">
					<td><strong>Commandant's Remarks<strong></td><td> <strong><?php 
					
					
					
					
														if ($AverageScore >= 75.0000)
											{
												$Comment =  "Excellent Result. Keep It up";
											}
											elseif ($AverageScore >= 70.0000 && $AverageScore < 75.0000)
											{
												$Comment =  "Very Good Result";
											}
										elseif ($AverageScore >= 60.0000 && $AverageScore < 70.0000)
											{
												$Comment =  "Good Result";
											}
										elseif ($AverageScore >= 55.0000 && $AverageScore < 59.0000)
											{
												$Comment =  "Fairly Good Result, Need to improve upon.";
											}
										elseif ($AverageScore >= 50.0000 && $AverageScore < 55.0000)
											{
												$Comment =  "Average Performance";
											}
										
											elseif ($AverageScore >= 30.0000 && $AverageScore < 35.0000)
											{
												$Comment =  "Weak Performance";
											}
											
										else
											{
												$Comment =  "Fail";
											}
										echo $Comment . $Commandant;
					
					
					
					
					?> </strong></td>
					</tr>
					</table>
						
						
						
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
