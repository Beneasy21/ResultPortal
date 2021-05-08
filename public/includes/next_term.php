<?php 
// Establish Connection with Database
										
					$results1 = fetch_next_term($Session, $Term);
					// Loop through each records 
					while($row = mysqli_fetch_array($results1))
					{
					$NextTermBegins=$row['explanation'];
							
					
					?>

					<?php echo $NextTermBegins;	?>
						
						
					<?php
					}
					?>
					
					
						
									
								
	
					
					

