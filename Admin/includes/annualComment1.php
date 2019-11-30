<?php 
										

											if ($Class == 'JSS 1')
											{
												if($AverageScore >= 50)
												{
													$Comment =  "Promoted";
												}
												else
												{
													$Comment =  "Promoted on Trial";
												}

											}
											elseif ($Class == 'JSS 2' OR $Class == 'JSS 3' OR $Class == 'SSS 1' OR $Class == 'SSS 2' OR $Class == 'SSS 3')
											{
												if($AverageScore >= 50)
												{
													$Comment =  "Promoted";
												}
												elseif ($AverageScore >= 45 && $AverageScore < 50)
												{
													$Comment =  "Promoted on Trial";
												}
												else
												{
													$Comment =  "Repeat";
												}
											}
											
										echo $Comment . $Commandant;
										?>