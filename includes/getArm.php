						
						<?php
						$c = New MySQLi('localhost','root','','comschoolmand');
						
						$res = $c->query("SELECT * FROM tblarm WHERE armId = '$Arm'");
						
							while($rows = $res -> fetch_assoc())
							{
								$ArmName = $rows['armName'];
								
							}
						?>
						</select>
						</td>
						</tr>