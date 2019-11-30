						<tr>
					   <td> Arm</td> <td>
						<?php
						$c = New MySQLi('localhost','root','','comschoolmand');
						
						$res = $c->query("SELECT * FROM tblArm")
						?>
						<select name="Arm" id="Arm" required="required">
						<?php 
							while($rows = $res -> fetch_assoc())
							{
								$ArmId = $rows['armId'];
								$ArmName = $rows['armName'];
								echo"<option value=''></option>";
								echo"<option value='$ArmId'>$ArmName</option>";
							}
						?>
						</select>
						</td>
						</tr>