<?php 
										

											if ($AverageScore >= 75)
											{
												$Comment =  "Excellent Result. Keep It up";
											}
											elseif ($AverageScore >= 70 && $AverageScore < 75)
											{
												$Comment =  "Very Good Result";
											}
										elseif ($AverageScore >= 60 && $AverageScore < 70)
											{
												$Comment =  "Good Result";
											}
										elseif ($AverageScore >= 55 && $AverageScore < 59)
											{
												$Comment =  "Fairly Good Result, Need to improve upon.";
											}
										elseif ($AverageScore >= 50 && $AverageScore < 55)
											{
												$Comment =  "Average Performance";
											}
										elseif ($AverageScore >= 40 && $AverageScore < 50)
											{
												$Comment =  "Weak Performance, Work Harder";
											}
										elseif($AverageScore > 40 )
											{
												$Comment =  "Fail";
											}
										echo $Comment . $Commandant;
										?>